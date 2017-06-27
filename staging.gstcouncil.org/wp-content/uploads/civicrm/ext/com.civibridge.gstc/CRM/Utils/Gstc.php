<?php

Class CRM_Utils_Gstc {

  static function getMainContact($params) {
    $mainContactID = '';
    $contactType = CRM_Contact_BAO_Contact::getContactType($params['contact_id']);
    if ($contactType == 'Organization') {
      $contributionDetails = CRM_Contribute_Form_Task_Status::getDetails($params['contribution_id']);
      if ( !empty($contributionDetails[$params['contribution_id']]['membership'])) {
        $result = civicrm_api3('Relationship', 'get', array(
          'relationship_type_id' => 11,
          'contact_id_a' => $params['contact_id'],
          'is_active' => 1,
          'is_permission_b_a' => 1,
        ));
        if ( $result['is_error'] == 0 && !empty($result['values'])) {
         $relationship = reset($result['values']);
         $mainContactID = $relationship['contact_id_b'];
        }
      }
    }
    return $mainContactID;
  }
  
  static function getDisplayName($contactID) {
    list($contributorDisplayName, $contributorEmail) = CRM_Contact_BAO_Contact_Location::getEmailDetails($contactID);
    return array($contributorDisplayName, $contributorEmail);
  }

}