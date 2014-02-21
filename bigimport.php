<?php

function bigimport_civicrm_buildForm ($formName, &$form) {
  if ($formName != "CRM_Contact_Import_Form_Preview") 
    return;
  if ($form->get('totalRowCount') > 500) { // arbitrary level when we start giving more time to the beast
    set_time_limit($form->get('totalRowCount'));
  }
}
