<?php
require_once '../civicrm.config.php';
require_once 'CRM/Core/Config.php';
require_once 'CRM/Utils/Request.php';
$config = CRM_Core_Config::singleton();

/*
//$filename = '/home/gstc/www/administrator/components/com_civicrm/civicrm/bin/test.html';
if(isset($_FILES['invoice'])){
    $errors= array();
    $file_name = $_FILES['invoice']['name'];
    $file_size = $_FILES['invoice']['size'];
    $file_tmp  = $_FILES['invoice']['tmp_name'];
    $file_type = $_FILES['invoice']['type'];
    $file_ext  = strtolower(end(explode('.',$_FILES['invoice']['name'])));
    
 
    $html = file_get_contents($file_tmp);
    CRM_Utils_PDF_Utils::html2pdf($html);
}

echo '<html><body><form method="post" enctype="multipart/form-data">';
echo '<input type="file" name="invoice" id="invoice"><input type="submit" value="Upload File" name="submit">';
echo '</form></body></html>';
*/
/*
$out = CRM_Core_BAO_UFGroup::getFields("26", FALSE, 4, NULL, NULL, FALSE, NULL, FALSE, NULL, 4, NULL);
echo '<pre>';
print_r($out);
*/
/*
$fileName = "/home/gstc/public_html/administrator/components/com_civicrm/civicrm/bin/relationship.csv";
$ignoreFirstRow = 1;
if (($handle = fopen($fileName, "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
echo '<pre>'; print_r($data); echo '</pre>';

    if($ignoreFirstRow != 1){
      // Main Contact Relationship
      $params = array();
      $params['contact_id_a'] = $data['0']; // Organization
      $params['contact_id_b'] = $data['1']; // Main Contact
      $params['relationship_type_id'] = 11; // Main Contact for
      $params['is_active'] = 1;      
      $params['version']      = 3;
      try {
        $get_relationship = civicrm_api('Relationship', 'get', $params);
        if ( $get_relationship['is_error'] == 0) {
          if ($get_relationship['count']){
            $finalRelationship = reset($get_relationship['values']);
            $params = array_merge($params,$finalRelationship);
          }
          $params['is_permission_b_a'] = 1;
          $out = civicrm_api('Relationship', 'Create', $params);
        }
      } catch (API_Exception $e) {
        // just to handle fatal error
      }
      
      // Employer
      $params = array();
      $params['contact_id_a'] = $data['1']; // Main Contact
      $params['contact_id_b'] = $data['0']; // Organization
      $params['relationship_type_id'] = 4;  // Employer
      $params['is_active'] = 1;
      $params['version']      = 3;
      try {
        $get_relationship = civicrm_api('Relationship', 'get', $params);
        if ( $get_relationship['is_error'] == 0) {
          if ($get_relationship['count']){
            $finalRelationship = reset($get_relationship['values']);
            $params = array_merge($params,$finalRelationship);
          }
          $params['is_permission_a_b'] = 1;
          $out = civicrm_api('Relationship', 'Create', $params);
        }
      } catch (API_Exception $e) {
        // just to handle fatal error
      }

      
    }
    $ignoreFirstRow++;
  }
  fclose($handle);
}
*/

$contributionID = 1479;
$details = CRM_Contribute_Form_Task_Status::getDetails($contributionID);
echo '<pre>'; print_r($details);

//echo CRM_Core_OptionGroup::getValue('activity_type', 'Contribution', 'name');
//
