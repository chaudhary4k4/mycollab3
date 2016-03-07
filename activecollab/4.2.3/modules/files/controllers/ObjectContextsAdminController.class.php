<?php

  // Build on top of framework controller
  AngieApplication::useController('fw_object_contexts_admin', ENVIRONMENT_FRAMEWORK);

  /**
   * Object contexts controller
   * 
   * @package activeCollab.modules.files
   * @subpackage controllers
   */
  class ObjectContextsAdminController extends FwObjectContextsAdminController {
    
    /**
     * Rebuild task entries
     */
    function rebuild_files() {
      if($this->request->isAsyncCall() && $this->request->isSubmitted()) {
        try {
          ApplicationObjects::rebuildProjectObjectContexts(array('File', 'TextDocument'), 'files');
          $this->response->ok();
        } catch(Exception $e) {
          $this->response->exception($e);
        } // try
      } else {
        $this->response->badRequest();
      } // if
    } // rebuild_files
    
  }