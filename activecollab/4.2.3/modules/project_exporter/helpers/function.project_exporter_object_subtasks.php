<?php

  /**
   * project_exporter_object_subtasks helper
   *
   * @package activeCollab.modules.project_exporter
   * @subpackage helpers
   */
  
  /**
   * Show a list of categories
   *
   * Parameters:
   * 
   * - object - Tasks parent object
   * - user - User who is creating this export
   * - id - Table id (if not provided autogenerated)
   * 
   * @param array $params
   * @param Smarty $smarty
   * @return string
   */
  function smarty_function_project_exporter_object_subtasks($params, $template) {
    $object = array_var($params, 'object', null);
    if(!($object instanceof ISubtasks)) {
      throw new InvalidInstanceError('object', $object, 'ISubtasks');
    } // if
    
    $visibility = array_var($params, 'visibility', $template->tpl_vars['visibility']->value);
    
    AngieApplication::useHelper('date', GLOBALIZATION_FRAMEWORK, 'modifier');
    
    $open_return = '';
    $completed_return = '';
    $return = '';
    
    $subtasks = Subtasks::findByParent($object);
    if (is_foreachable($subtasks)) {
    	foreach ($subtasks as $subtask) {
    		if ($subtask->getCompletedOn() instanceof DateValue) {
    			$completed_return.= '<tr><td><del>' . clean($subtask->getName()) . '</del></td><td class="column_author">' . smarty_function_project_exporter_user_link(array('id' => $subtask->getCompletedById(), 'name' => $subtask->getCompletedByName(), 'email' => $subtask->getCompletedByEmail()), $template) . '</td><td class="column_date">' . smarty_modifier_date($subtask->getCompletedOn()) . '</td></tr>';
    		} else {
					$open_return.= '<tr><td>' . clean($subtask->getName()) . '</td><td class="column_author">' . smarty_function_project_exporter_user_link(array('id' => $subtask->getCreatedById(), 'name' => $subtask->getCreatedByName(), 'email' => $subtask->getCreatedByEmail()), $template) . '</td><td class="column_date">' . smarty_modifier_date($subtask->getCreatedOn()) . '</td></tr>';
    		} // if   		
    	} // foreach
    } // if
    
    unset($subtasks);
    unset($subtask);
   
    if ($completed_return || $open_return) {
    	$return = '<div id="object_tasks" class="object_info"><h3>' . lang('Subtasks') . '</h3><table class="common">' . $open_return . $completed_return . '</table></div>';
    } // if
    
    return $return;
  } // smarty_function_project_exporter_object_subtasks