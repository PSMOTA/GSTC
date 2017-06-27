<?php

require_once 'gstc.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function gstc_civicrm_config(&$config) {
  _gstc_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function gstc_civicrm_xmlMenu(&$files) {
  _gstc_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function gstc_civicrm_install() {
  _gstc_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function gstc_civicrm_uninstall() {
  _gstc_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function gstc_civicrm_enable() {
  _gstc_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function gstc_civicrm_disable() {
  _gstc_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function gstc_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _gstc_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function gstc_civicrm_managed(&$entities) {
  _gstc_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function gstc_civicrm_caseTypes(&$caseTypes) {
  _gstc_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function gstc_civicrm_angularModules(&$angularModules) {
_gstc_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function gstc_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _gstc_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function gstc_civicrm_preProcess($formName, &$form) {

}

*/


/**
 * Implementation of hook_civicrm_buildForm
 */
function gstc_civicrm_buildForm($formName, &$form) {
  // also skip when content is loaded via ajax, like payment processor, custom data etc
  $snippet = CRM_Utils_Request::retrieve('snippet', 'String', CRM_Core_DAO::$_nullObject, false, null, 'REQUEST');

  if ( $snippet == 4 || ( $form->getVar('_action') && ($form->getVar('_action') & CRM_Core_Action::DELETE ) ) ) {
    return false;
  }
  if (in_array($formName, array('CRM_Contribute_Form_Contribution_Main')) && $form->getVar('_id') == '6') {
    CRM_Core_Resources::singleton()->addScript("
      //cj('.cms_user-section').insertAfter('.email-5-section');
    ");
  }
  CRM_Core_Resources::singleton()->addScript("
    cj('.crm-title').css('padding-top', '15px');
    cj('<legend>Create An Account</legend>').insertBefore('.cms_user_help-section');
    cj('.crm-container fieldset legend').css({'font-size': '18px','padding-top': '20px','margin-bottom': '5px'});
    cj('.crm-container .help').css({'padding': '14px'});
  ");
  

  if (in_array($formName, array('CRM_Contribute_Form_Contribution_Main')) && $form->getVar('_id') == '6' || $form->getVar('_id') == '7') {
    CRM_Core_Resources::singleton()->addScript("
      cj('.email-5-section').insertAfter('#editrow-last_name');
      cj('#_qf_Main_upload-bottom').val('Submit');
      cj('#membershipagreementdetail').click(function(e){
        e.preventDefault();
        window.popup = window.open(cj(this).attr('href'), 'newwindow', 'scrollbars=1,width=600, height=650');
      });
    ");
  }

  if (in_array($formName, array('CRM_Contribute_Form_Contribution_Main'))) {
    if (array_key_exists( 'auto_renew', $form->_elementIndex)) {
      CRM_Core_Resources::singleton()->addScript("
        function autoRenewAutoselect() {
          if(!cj('#auto_renew').is('[readonly]') && ! cj('#auto_renew').is(':checked')) {
            cj('#auto_renew').prop('checked',true);
            cj('#auto_renew').trigger('change');
          }
          if (cj('#allow_auto_renew').css('display') == 'none') {
            cj('#auto_renew').prop('checked',false);
            cj('#auto_renew').trigger('change');
          }
        }


        function checkPaylaterAutoRenew() {
          if ( cj('#auto_renew').is(':checked') && cj('#CIVICRM_QFID_0_payment_processor_id').length) {
            if (cj('#CIVICRM_QFID_0_payment_processor_id').is(':checked')) {
              cj('input[name=\'payment_processor_id\']').removeAttr('checked');
            }
            cj('#CIVICRM_QFID_0_payment_processor_id').hide();
            cj('label[for=\'CIVICRM_QFID_0_payment_processor_id\']').hide();
          } else if ( ! cj('#auto_renew').is(':checked') && cj('#CIVICRM_QFID_0_payment_processor_id').length) {
            cj('#CIVICRM_QFID_0_payment_processor_id').show();
            cj('label[for=\'CIVICRM_QFID_0_payment_processor_id\']').show();
          }
        }

        cj('.price-set-row').click( function() {
          autoRenewAutoselect();
        });

        cj('#auto_renew').change( function() {
          setTimeout(function() {
            checkPaylaterAutoRenew();
          }, 1000)
        });

        setTimeout(function() {
          autoRenewAutoselect();
          checkPaylaterAutoRenew();
        }, 2000);
      ");
    }
  }
}


/**
 * Implementation of hook_civicrm_onbehalfOtherRelationship
 */
function gstc_civicrm_onbehalfOtherRelationship($ind, $org) {
  $params = array();
  $params['contact_id_a'] = $org;
  $params['contact_id_b'] = $ind;
  $params['relationship_type_id'] = 11;
  $params['is_active'] = 1;
  $params['version']    = 3;
  try {
    $get_relationship = civicrm_api('Relationship', 'get', $params);
    if ( $get_relationship['is_error'] == 0 && $get_relationship['count'] == 0) {
      $params['is_permission_b_a'] = '1';
      $out = civicrm_api('Relationship', 'Create', $params);
    }
  } catch (API_Exception $e) {
    // just to handle fatal error
  }

}

/**
 * Implementation of hook_civicrm_tokens
 */
function gstc_civicrm_tokens( &$tokens ) {
  if (!array_key_exists('membership', $tokens)) {
    $tokens['membership'] = array();
  }
  $tokens['membership']['membership.owner'] = ts('Membership Owner');
}

/**
 * Implementation of hook_civicrm_tokenValues
 */
function gstc_civicrm_tokenValues( &$values, &$contactIDs, $jobID = null, $tokens = array(), $context ) {
//error_reporting(E_ALL);
//ini_set('display_errors', true);
//CRM_Core_Error::debug_log_message('gstc_civicrm_tokenValues');
//CRM_Core_Error::debug_var('$values', $values);
//CRM_Core_Error::debug_var('$contactIDs', $contactIDs);
//CRM_Core_Error::debug_var('$tokens', $tokens);
  if ( is_array( $contactIDs ) ) {
    $contactIDString = implode( ',', array_values( $contactIDs ) );
    $single = false;
  } else {
    $contactIDString = "$contactIDs";
    $single = true;
  }
  if ( ! is_array( $contactIDs ) ) {
    $crmContactIDs = array($contactIDs);
  } else {
    $crmContactIDs = array_values( $contactIDs );
  }
  if (array_key_exists('membership', $tokens )) {
//CRM_Core_Error::debug_log_message('M 1');
    if (array_key_exists('membership.id', $values) && array_key_exists('contact_id', $values)) {
//CRM_Core_Error::debug_log_message('M 2');
      $membershipID = $values['membership.id'];
      $values['membership.owner'] = _gstc_civicrm_membership_owner($membershipID, $values['contact_id']);
      $template = CRM_Core_Smarty::singleton();
      $template->assign('membership_owner',  $value['membership.owner']);
    } else if (array_key_exists('membership', $tokens ) || array_key_exists('contact_id', $values)) {
      //CRM_Core_Error::debug_log_message('BBB');
//CRM_Core_Error::debug_log_message('M 3');
      $pendingStatusId = array_search('Pending', CRM_Member_PseudoConstant::membershipStatus());
      $query = "SELECT * FROM (
        SELECT m.id, m.contact_id, m.membership_type_id, mt.name
        FROM   civicrm_membership m
          LEFT JOIN civicrm_membership_type mt ON mt.id = m.membership_type_id
          LEFT JOIN civicrm_membership_payment mp ON mp.membership_id = m.id
          LEFT JOIN civicrm_contribution c ON c.id = mp.contribution_id
        WHERE  m.contact_id IN ( $contactIDString )
        ORDER BY m.contact_id, m.start_date DESC, c.receive_date DESC ) a GROUP BY a.contact_id
        ";
      $dao = CRM_Core_DAO::executeQuery( $query );
      while ( $dao->fetch( ) ) {
        if ( $single && ! is_array($values[$contactIDString])) {
          $value =& $values;
        } else if ( $single ) {
          $value =& $values[$contactIDString];
        } else {
          if ( ! array_key_exists( $dao->contact_id, $values ) ) {
            $values[$dao->contact_id] = array( );
          }

          $value =& $values[$dao->contact_id];
        }
//CRM_Core_Error::debug_log_message('M 4');
        //CRM_Core_Error::debug_var('dao',$dao);
        $contactID = $dao->contact_id;
        $value['membership.owner'] = _gstc_civicrm_membership_owner($dao->id, $contactID);
        $template = CRM_Core_Smarty::singleton();
        $template->assign('membership_owner',  $value['membership.owner']);
        if ($dao->name) {
          $template->assign('membership_gst_name',  $dao->name);
        }
      }
      if (empty($values['membership.owner'])) {
//CRM_Core_Error::debug_log_message('M 5');
         if (count($contactIDs) == 1) {
           $single = true;
         }
        if ( $single && ! is_array($values[$contactIDString])) {
          $cValue =& $values;
        } else if ( $single ) {
          $cValue =& $values[$contactIDString];
        }
        if ($cValue['contact_type'] == 'Organization' && !empty($cValue['display_name'])) {
         //CRM_Core_Error::debug_log_message('M 6');
          //CRM_Core_Error::debug_log_message('CCC');
          //CRM_Core_Error::debug_var('cValue', $cValue);
          $cValue['membership.owner'] = $cValue['display_name'];
          $template = CRM_Core_Smarty::singleton();
          $template->assign('membership_owner',  $cValue['display_name']);

        }
      }
    }
  }
}

function _gstc_civicrm_membership_owner($membershipID, $contactID) {
  if (empty($contactID)) {
    return '';
  }

  if (empty($membershipID)) {
    return '';
  }
  $display_name = '';
  $contactType = CRM_Contact_BAO_Contact::getContactType($contactID);
  if ($contactType == 'Organization') {
    $display_name = CRM_Core_DAO::getFieldValue('CRM_Contact_DAO_Contact', $contactID, 'display_name');
  } else if ($contactType == 'Individual') {
    $owner_membership_id = CRM_Core_DAO::getFieldValue('CRM_Member_DAO_Membership', $membershipID, 'owner_membership_id');
    /*
      When Welcome Email sent to Invidual contact of organization, put organization as token value
    */
    if (!empty($owner_membership_id)) {
      $org_contact_id = CRM_Core_DAO::getFieldValue('CRM_Member_DAO_Membership', $owner_membership_id, 'contact_id');
      if (!empty($org_contact_id)) {
        $display_name = CRM_Core_DAO::getFieldValue('CRM_Contact_DAO_Contact', $org_contact_id, 'display_name');
      }
    }
  }
  return $display_name;
}



/**
 * Implementation of hook_civicrm_pre
 */
function gstc_civicrm_pre( $op, $objectName, $objectId, &$objectRef ) {
  /*
   change source contact id when membership is onbehalf of organisation
  */
  if ( $objectName == 'Activity' && $op == 'create' && !empty($objectRef['source_contact_id'])) {
    // Contribution Activity type id
    if ($objectRef['activity_type_id'] == CRM_Core_OptionGroup::getValue('activity_type', 'Contribution', 'name')) { 
      $contactType = CRM_Contact_BAO_Contact::getContactType($objectRef['source_contact_id']); // Source Contact ID
      $contribID = $objectRef['source_record_id']; // Contribution ID
      if ($contactType == 'Organization' && $contribID) { // If contribution is owned by organzation
        $relatedContact = CRM_Contribute_BAO_Contribution::getOnbehalfIds($contribID);
        // if this is onbehalf of contribution then set related contact
        $mainContactID = '';
        if (!empty($relatedContact['individual_id'])) {
          $mainContactID = $relatedContact['individual_id'];
        } else {        
          $details = CRM_Contribute_Form_Task_Status::getDetails($contribID);
          if (!empty($details[$contribID]['membership'])) {
            $sql = "select contact_id_a from civicrm_relationship where contact_id_b = %1 
              and relationship_type_id = 4 and is_permission_a_b = 1 limit 1";
            $paramsRelationship = array(1 => array($objectRef['source_contact_id'], 'Integer'));
            $mainContactID = CRM_Core_DAO::singleValueQuery($sql, $paramsRelationship);
          }
        }
        if (!empty($mainContactID)) {
          $objectRef['target_contact_id'][] = $objectRef['source_contact_id']; // Set Organisation as target contact
          $objectRef['source_contact_id'] = $mainContactID;                    // Set Individual as Target Contact ID
        }
      } else if ($contactType == 'Individual' && $contribID) {
        if (empty($objectRef['target_contact_id'])) {
          $objectRef['target_contact_id'][] = $objectRef['source_contact_id']; // Set Own as target contact 
        }
      }
    }
  }
  // Assign Correct target and source contact so that welcome email sent correctly to main contact
  else if (is_array($objectRef) && $objectRef['activity_type_id'] == CRM_Core_OptionGroup::getValue('activity_type', 'Membership Renewal', 'name')) { 
    $contactType = CRM_Contact_BAO_Contact::getContactType($objectRef['source_contact_id']); // Source Contact ID
    $memberID = $objectRef['source_record_id']; // Membership ID
    $contribID = '';
    if (!empty($objectRef['source_record_id']) && $memberID) {
      // Get latest contribution id for membership payment
      $sql = "SELECT max(contribution_id) FROM civicrm_membership_payment WHERE membership_id = {$memberID} limit 1";
      $contribID = CRM_Core_DAO::singleValueQuery($sql);
    }
    if ($contactType == 'Organization' && $contribID) { // If contribution is owned by organzation
      $relatedContact = CRM_Contribute_BAO_Contribution::getOnbehalfIds($contribID);
      // if this is onbehalf of contribution then set related contact
      $mainContactID = '';
      if (!empty($relatedContact['individual_id'])) {
        $mainContactID = $relatedContact['individual_id'];
      } else {        
        $details = CRM_Contribute_Form_Task_Status::getDetails($contribID);
        if (!empty($details[$contribID]['membership'])) {
          $sql = "select contact_id_a from civicrm_relationship where contact_id_b = %1 
            and relationship_type_id = 4 and is_permission_a_b = 1 limit 1";
          $paramsRelationship = array(1 => array($objectRef['source_contact_id'], 'Integer'));
          $mainContactID = CRM_Core_DAO::singleValueQuery($sql, $paramsRelationship);
        }
      }
      if (!empty($mainContactID)) {
        $objectRef['target_contact_id'][] = $objectRef['source_contact_id']; // Set Organisation as target contact
        $objectRef['source_contact_id'] = $mainContactID;                    // Set Individual as Target Contact ID
      }
    } else if ($contactType == 'Individual' && $contribID) {
      if (empty($objectRef['target_contact_id'])) {
        $objectRef['target_contact_id'][] = $objectRef['source_contact_id']; // Set Own as target contact 
      }
    }
  }
}


