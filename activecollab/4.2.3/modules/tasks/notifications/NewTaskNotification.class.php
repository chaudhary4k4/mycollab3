<?php

  /**
   * New task notification
   *
   * @package activeCollab.modules.tasks
   * @subpackage notifications
   */
  class NewTaskNotification extends Notification {

    /**
     * Return notification message
     *
     * @param IUser $user
     * @return string
     */
    function getMessage(IUser $user) {
      return lang("Task ':name' has been created", array(
        'name' => $this->getParent() instanceof Task ? $this->getParent()->getName() : '',
      ), true, $user->getLanguage());
    } // getMessage

    /**
     * Return message for web interface
     *
     * @param IUser $user
     * @return string
     */
    function getMessageForWebInterface(IUser $user) {
      $sender = $this->getSender();
      $parent = $this->getParent();

      if($sender instanceof IUser && $parent instanceof Task) {
        return lang('<a href=":author_url" class=":author_link_classes">:author_name</a> created <a href=":parent_url" class="quick_view_item">":parent_name"</a> task', array(
          'author_url' => $this->getSender()->getViewUrl(),
          'author_name' => $this->getSender()->getDisplayName(true),
          'author_link_classes' => $this->getSender() instanceof User ? 'quick_view_item' : null,
          'parent_name' => $parent->getName(),
          'parent_url' => $parent->getViewUrl(),
        ));
      } else {
        return parent::getMessageForWebInterface($user);
      } // if
    } // getMessageForWebInterface

  }