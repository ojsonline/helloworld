<?php

import("lib.pkp.classes.plugins.GenericPlugin");

class HelloworldPlugin extends GenericPlugin {

  function register($category, $path, $mainContextId = null) {
    $success = parent::register($category, $path, $mainContextId);
    if (!Config::getVar('general', 'installed') || defined('RUNNING_UPGRADE')) return true;
    if ($success && $this->getEnabled($mainContextId)) {
      // handlers here
    }

    $this->_registerTemplateResource();

    return $success;
  }

  function getDisplayName() {

    return "hello world";

  }

  function getDescription() {

    return "my first plugin";

  }

}
