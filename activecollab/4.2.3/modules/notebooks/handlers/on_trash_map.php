<?php

  /**
   * on_trash_map event handler
   *
   * @package activeCollab.modules.notebooks
   * @subpackage handlers
   */

  /**
   * Handle on_trash_map event
   *
   * @param NamedList $sections
   * @param array $map
   * @param User $user
   */
  function notebooks_handle_on_trash_map(&$map, User &$user) {
    
    $map = array_merge(
      (array) $map,
      (array) NotebookPages::getTrashedMap($user)
    ); 
    
  } // notebooks_handle_on_trash_map