<?php

  /**
   * BaseProjectRoles class
   *
   * @package ActiveCollab.modules.system
   * @subpackage models
   */
  abstract class BaseProjectRoles extends DataManager {

    /**
     * Return name of this model
     *
     * @param boolean $underscore
     * @return string
     */
    static function getModelName($underscore = false) {
      return $underscore ? 'project_roles' : 'ProjectRoles';
    } // getModelName

    /**
     * Return name of the table where system will persist model instances
     *
     * @param boolean $with_prefix
     * @return string
     */
    static function getTableName($with_prefix = true) {
      return $with_prefix ? TABLE_PREFIX . 'project_roles' : 'project_roles';
    } // getTableName

    /**
     * Return class name of a single instance
     *
     * @return string
     */
    static function getInstanceClassName() {
      return 'ProjectRole';
    } // getInstanceClassName

    /**
     * Return whether instance class name should be loaded from a field, or based on table name
     *
     * @return string
     */
    static function getInstanceClassNameFrom() {
      return DataManager::CLASS_NAME_FROM_TABLE;
    } // getInstanceClassNameFrom

    /**
     * Return name of the field from which we will read instance class
     *
     * @return string
     */
    static function getInstanceClassNameFromField() {
      return '';
    } // getInstanceClassNameFrom

    /**
     * Return name of this model
     *
     * @return string
     */
    static function getDefaultOrderBy() {
      return 'name';
    } // getDefaultOrderBy
  
  }