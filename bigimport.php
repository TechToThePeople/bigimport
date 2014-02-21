<?php

function bigimport_civicrm_buildForm ($formName, &$form) {
  global $running_time;
  if ($formName != "CRM_Contact_Import_Form_Preview") 
    return;
  if ($form->get('totalRowCount') > 500) { // arbitrary level when we start giving more time to the beast
    set_time_limit($form->get('totalRowCount'));
    $running_time = microtime(true);
  }
}

function bigimport_civicrm_post ($op, $objectName, $objectId, &$objectRef) {
  global $running_time;
  if ($running_time) {
    $time = microtime(true) - $running_time;
    if ($time > 25) {
      echo " "; flush();
      $running_time = microtime(true);
    }
}

