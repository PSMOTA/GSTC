<?php /* Smarty version 2.6.27, created on 2017-06-21 16:27:37
         compiled from CRM/Contact/Page/DedupeFind.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/DedupeFind.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Page/DedupeFind.tpl', 30, false),array('block', 'crmButton', 'CRM/Contact/Page/DedupeFind.tpl', 138, false),array('function', 'crmURL', 'CRM/Contact/Page/DedupeFind.tpl', 124, false),array('function', 'cycle', 'CRM/Contact/Page/DedupeFind.tpl', 126, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 16): ?>
<div class="form-item">
  <div class="crm-accordion-wrapper crm-search_filters-accordion">
    <div class="crm-accordion-header">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Filter Contacts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    </div><!-- /.crm-accordion-header -->
    <div class="crm-accordion-body">
      <table class="no-border form-layout-compressed" id="searchOptions" style="width:100%;">
        <tr>
          <td class="crm-contact-form-block-contact1">
            <label for="contact1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact 1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label><br />
            <input type="text" placeholder="Search Contact1" search-column="2" />
          </td>
          <td class="crm-contact-form-block-contact2">
            <label for="contact2"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact 2<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label><br />
            <input type="text" placeholder="Search Contact2" search-column="4" />
          </td>
          <td class="crm-contact-form-block-email1">
            <label for="email1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email 1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label><br />
            <input type="text" placeholder="Search Email1" search-column="5" />
          </td>
          <td class="crm-contact-form-block-email2">
            <label for="email2"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email 2<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label><br />
            <input type="text" placeholder="Search Email2" search-column="6" />
          </td>
        </tr>
        <tr>
          <td class="crm-contact-form-block-street-address1">
            <label for="street-adddress1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Street Address 1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label><br />
            <input type="text" placeholder="Search Street Address1" search-column="7" />
          </td>
          <td class="crm-contact-form-block-street-address2">
            <label for="street-adddress2"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Street Address 2<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label><br />
            <input type="text" placeholder="Search Street Address2" search-column="8" />
          </td>
          <td class="crm-contact-form-block-postcode1">
            <label for="postcode1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Postcode 1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label><br />
            <input type="text" placeholder="Search Postcode1" search-column="9" />
          </td>
          <td class="crm-contact-form-block-postcode2">
            <label for="postcode2"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Postcode 2<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label><br />
            <input type="text" placeholder="Search Postcode2" search-column="10" />
          </td>
        </tr>
      </table>
    </div><!-- /.crm-accordion-body -->
  </div><!-- /.crm-accordion-wrapper -->
  <div>
    Show / Hide columns:
    <input type='checkbox' id ='steet-address' class='toggle-vis' data-column-main="7" data-column-dupe="8" >
        <label for="steet-address"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Street Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;</label>
    <input type='checkbox' id ='post-code' class='toggle-vis' data-column-main="9" data-column-dupe="10" >
        <label for="post-code"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Post Code<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;</label>
    <input type='checkbox' id ='conflicts' class='toggle-vis' data-column-main="11"  >
        <label for="conflicts"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Conflicts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp; </label>
    <input type='checkbox' id ='threshold' class='toggle-vis' data-column-main="12"  >
        <label for="threshold"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Threshold<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;</label>
  </div><br/>
  <span id="dupePairs_length_selection">
    <input type='checkbox' id ='crm-dedupe-display-selection' name="display-selection">
    <label for="display-selection"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Within Selections<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;</label>
  </span>

  <table id="dupePairs"
    class="nestedActivitySelector crm-ajax-table"
    cellspacing="0"
    width="100%"
    data-page-length="10",
    data-searching='true',
    data-dom='flrtip',
    data-order='[]',
    data-column-defs='<?php echo '[{"targets": [0,1,3,13], "orderable":false}, {"targets": [7,8,9,10,11,12], "visible":false}]'; ?>
'>
    <thead>
      <tr class="columnheader">
        <th data-data="is_selected_input" class="crm-dedupe-selection"><input type="checkbox" value="0" name="pnid_all" class="crm-dedupe-select-all"></th>
        <th data-data="dst_image"    class="crm-empty">&nbsp;</th>
        <th data-data="dst"          class="crm-contact"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 1</th>
        <th data-data="src_image"    class="crm-empty">&nbsp;</th>
        <th data-data="src"          class="crm-contact-duplicate"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 2 (<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Duplicate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</th>
        <th data-data="dst_email"    class="crm-contact"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 1</th>
        <th data-data="src_email"    class="crm-contact-duplicate"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 2 (<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Duplicate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</th>
        <th data-data="dst_street"   class="crm-contact"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Street Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 1</th>
        <th data-data="src_street"   class="crm-contact-duplicate"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Street Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 2 (<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Duplicate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</th>
        <th data-data="dst_postcode" class="crm-contact"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Postcode<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 1</th>
        <th data-data="src_postcode" class="crm-contact-duplicate"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Postcode<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 2 (<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Duplicate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</th>
        <th data-data="conflicts"    class="crm-contact-conflicts"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Conflicts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th data-data="weight"       class="crm-threshold"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Threshold<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th data-data="actions"      class="crm-empty">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
  <?php if ($this->_tpl_vars['cid']): ?>
    <table style="width: 45%; float: left; margin: 10px;">
      <tr class="columnheader"><th colspan="2"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['main_contacts'][$this->_tpl_vars['cid']])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Merge %1 with<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th></tr>
      <?php $_from = $this->_tpl_vars['dupe_contacts'][$this->_tpl_vars['cid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dupe_id'] => $this->_tpl_vars['dupe_name']):
?>
        <?php if ($this->_tpl_vars['dupe_name']): ?>
          <?php ob_start(); ?><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['dupe_id'])), $this);?>
"><?php echo $this->_tpl_vars['dupe_name']; ?>
</a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('link', ob_get_contents());ob_end_clean(); ?>
          <?php ob_start(); ?><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/merge','q' => "reset=1&cid=".($this->_tpl_vars['cid'])."&oid=".($this->_tpl_vars['dupe_id'])), $this);?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>merge<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('merge', ob_get_contents());ob_end_clean(); ?>
          <tr class="<?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
">
      <td><?php echo $this->_tpl_vars['link']; ?>
</td>
      <td style="text-align: right"><?php echo $this->_tpl_vars['merge']; ?>
</td>
      <td style="text-align: right"><a class='crm-notDuplicate' href="#" title=<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>not a duplicate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> onClick="processDupes( <?php echo $this->_tpl_vars['main']['srcID']; ?>
, <?php echo $this->_tpl_vars['main']['dstID']; ?>
, 'dupe-nondupe' );return false;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>not a duplicate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></td>
      </tr>
        <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
    </table>
  <?php endif; ?>
</div>

<?php if ($this->_tpl_vars['context'] == 'search'): ?>
   <?php $this->_tag_stack[] = array('crmButton', array('href' => $this->_tpl_vars['backURL'],'icon' => 'times')); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Done<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php elseif ($this->_tpl_vars['context'] == 'conflicts'): ?>
  <?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'force merge duplicate contacts' )): ?>
     <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/dedupemerge",'q' => ($this->_tpl_vars['urlQuery'])."&action=map&mode=aggressive",'a' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('backURL', ob_get_contents());ob_end_clean(); ?>
     <a href="<?php echo $this->_tpl_vars['backURL']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Force Merge Selected Duplicates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" onclick="return confirm('<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This will run the batch merge process on the selected duplicates. The operation will run in force merge mode - all selected duplicates will be merged into main contacts even in case of any conflicts. Click OK to proceed if you are sure you wish to run this operation.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');" class="button"><span><i class="crm-i fa-bolt"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Force Merge Selected Duplicates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>

     <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/dedupemerge",'q' => ($this->_tpl_vars['urlQuery'])."&action=map",'a' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('backURL', ob_get_contents());ob_end_clean(); ?>
     <a href="<?php echo $this->_tpl_vars['backURL']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Safe Merge Selected Duplicates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" onclick="return confirm('<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This will run the batch merge process on the selected duplicates. The operation will run in safe mode - only records with no direct data conflicts will be merged. Click OK to proceed if you are sure you wish to run this operation.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');" class="button"><span><i class="crm-i fa-compress"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Safe Merge Selected Duplicates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
  <?php endif; ?>

  <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/dedupefind",'q' => ($this->_tpl_vars['urlQuery'])."&action=update",'a' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('backURL', ob_get_contents());ob_end_clean(); ?>
   <a href="<?php echo $this->_tpl_vars['backURL']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>List All Duplicates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" class="button"><span><i class="crm-i fa-refresh"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>List All Duplicates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
<?php else: ?>
   <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/dedupefind",'q' => ($this->_tpl_vars['urlQuery'])."&action=renew",'a' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('backURL', ob_get_contents());ob_end_clean(); ?>
   <a href="<?php echo $this->_tpl_vars['backURL']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Refresh List of Duplicates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" onclick="return confirm('<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This will refresh the duplicates list. Click OK to proceed.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');" class="button">
     <span><i class="crm-i fa-refresh"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Refresh Duplicates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
   </a>

  <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/dedupemerge",'q' => ($this->_tpl_vars['urlQuery'])."&action=map",'a' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('backURL', ob_get_contents());ob_end_clean(); ?>
   <a href="<?php echo $this->_tpl_vars['backURL']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Batch Merge Duplicate Contacts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" onclick="return confirm('<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This will run the batch merge process on the selected duplicates. The operation will run in safe mode - only records with no direct data conflicts will be merged. Click OK to proceed if you are sure you wish to run this operation.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');" class="button"><span><i class="crm-i fa-compress"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Batch Merge Selected Duplicates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>

   <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/dedupemerge",'q' => $this->_tpl_vars['urlQuery'],'a' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('backURL', ob_get_contents());ob_end_clean(); ?>
   <a href="<?php echo $this->_tpl_vars['backURL']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Batch Merge Duplicate Contacts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" onclick="return confirm('<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This will run the batch merge process on the listed duplicates. The operation will run in safe mode - only records with no direct data conflicts will be merged. Click OK to proceed if you are sure you wish to run this operation.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');" class="button"><span><i class="crm-i fa-compress"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Batch Merge All Duplicates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>

   <a href='#' title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Flip Selected Duplicates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" class="crm-dedupe-flip-selections button"><span><i class="crm-i fa-exchange"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Flip Selected Duplicates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>

   <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/deduperules",'q' => "reset=1",'a' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('backURL', ob_get_contents());ob_end_clean(); ?>
   <a href="<?php echo $this->_tpl_vars['backURL']; ?>
" class="button crm-button-type-cancel">
     <span><i class="crm-i fa-times"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Done<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
   </a>
<?php endif; ?>
<div style="clear: both;"></div>
<?php else: ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/DedupeFind.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/common/dedupe.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
  (function($) {
    CRM.$(\'table#dupePairs\').data({
      "ajax": {
        "url": '; ?>
'<?php echo $this->_tpl_vars['sourceUrl']; ?>
'<?php echo '
      },
      rowCallback: function (row, data) {
        // Set the checked state of the checkbox in the table
        $(\'input.crm-dedupe-select\', row).prop(\'checked\', data.is_selected == 1);
        if (data.is_selected == 1) {
          $(row).toggleClass(\'crm-row-selected\');
        }
        // for action column at the last, set nowrap
        $(\'td:last\', row).attr(\'nowrap\',\'nowrap\');
        // for conflcts column
        var col = CRM.$(\'table#dupePairs thead th.crm-contact-conflicts\').index();
        $(\'td:eq(\' + col + \')\', row).attr(\'nowrap\',\'nowrap\');
      }
    });
    $(function($) {
      $(\'.button\').click(function() {
        // no unsaved changes confirmation dialogs
        $(\'[data-warn-changes=true]\').attr(\'data-warn-changes\', \'false\');
      });

      var sourceUrl = '; ?>
'<?php echo $this->_tpl_vars['sourceUrl']; ?>
'<?php echo ';
      var context   = '; ?>
'<?php echo $this->_tpl_vars['context']; ?>
'<?php echo ';

      // redraw datatable if searching within selected records
      $(\'#crm-dedupe-display-selection\').on(\'click\', function(){
        reloadUrl = sourceUrl;
        if($(this).prop(\'checked\')){
          reloadUrl = sourceUrl+\'&selected=1\';
        }
        CRM.$(\'table#dupePairs\').DataTable().ajax.url(reloadUrl).draw();
      });

      $(\'#dupePairs_length_selection\').appendTo(\'#dupePairs_length\');

      // apply selected class on click of a row
      $(\'#dupePairs tbody\').on(\'click\', \'tr\', function(e) {
        $(this).toggleClass(\'crm-row-selected\');
        $(\'input.crm-dedupe-select\', this).prop(\'checked\', $(this).hasClass(\'crm-row-selected\'));
        var ele = $(\'input.crm-dedupe-select\', this);
        toggleDedupeSelect(ele, 0);
      });

      // when select-all checkbox is checked
      $(\'#dupePairs thead tr .crm-dedupe-selection\').on(\'click\', function() {
        var checked = $(\'.crm-dedupe-select-all\').prop(\'checked\');
        if (checked) {
          $("#dupePairs tbody tr input[type=\'checkbox\']").prop(\'checked\', true);
          $("#dupePairs tbody tr").addClass(\'crm-row-selected\');
        }
        else{
          $("#dupePairs tbody tr input[type=\'checkbox\']").prop(\'checked\', false);
          $("#dupePairs tbody tr").removeClass(\'crm-row-selected\');
        }
        var ele = $(\'#dupePairs tbody tr\');
        toggleDedupeSelect(ele, 1);
      });

      // inline search boxes placed in tfoot
      $(\'#dupePairsColFilters thead th\').each( function () {
        var title = $(\'#dupePairs thead th\').eq($(this).index()).text();
        if (title.length > 1) {
          $(this).html( \'<input type="text" placeholder="Search \'+title+\'" />\' );
        }
      });

      // get dataTable
      var table = CRM.$(\'table#dupePairs\').DataTable();

      // apply the search
      $(\'#searchOptions input\').on( \'keyup change\', function () {
        table
          .column($(this).attr(\'search-column\'))
          .search(this.value)
          .draw();
      });

      // show / hide columns
      $(\'input.toggle-vis\').on(\'click\', function (e) {
        var column = table.column( $(this).attr(\'data-column-main\') );
        column.visible( ! column.visible() );

        // nowrap to conflicts column is applied only during initial rendering
        // for show / hide clicks we need to set it explicitly
        var col = CRM.$(\'table#dupePairs thead th.crm-contact-conflicts\').index() + 1;
        if (col > 0) {
          CRM.$(\'table#dupePairs tbody tr td:nth-child(\' + col + \')\').attr(\'nowrap\',\'nowrap\');
        }

        if ($(this).attr(\'data-column-dupe\')) {
          column = table.column( $(this).attr(\'data-column-dupe\') );
          column.visible( ! column.visible() );
        }
      });

      // keep the conflicts checkbox checked when context is "conflicts"
      if(context == \'conflicts\') {
        $(\'#conflicts\').attr(\'checked\', true);
        var column = table.column( $(\'#conflicts\').attr(\'data-column-main\') );
        column.visible( ! column.visible() );
      }

      // on click of flip link of a row
      $(\'#dupePairs tbody\').on(\'click\', \'tr .crm-dedupe-flip\', function(e) {
        e.stopPropagation();
        var $el   = $(this);
        var $elTr = $(this).closest(\'tr\');
        var postUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/flipDupePairs','h' => 0,'q' => 'snippet=4'), $this);?>
"<?php echo ';
        var request = $.post(postUrl, {pnid : $el.data(\'pnid\')});
        request.done(function(dt) {
          var mapper = {1:3, 2:4, 5:6, 7:8, 9:10}
          var idx = table.row($elTr).index();
          $.each(mapper, function(key, val) {
            var v1  = table.cell(idx, key).data();
            var v2  = table.cell(idx, val).data();
            table.cell(idx, key).data(v2);
            table.cell(idx, val).data(v1);
          });
          // keep the checkbox checked if needed
          $(\'input.crm-dedupe-select\', $elTr).prop(\'checked\', $elTr.hasClass(\'crm-row-selected\'));
        });
      });

      $(".crm-dedupe-flip-selections").on(\'click\', function(e) {
        var ids = [];
        $(\'.crm-row-selected\').each(function() {
          var ele = CRM.$(\'input.crm-dedupe-select\', this);
          ids.push(CRM.$(ele).attr(\'name\').substr(5));
        });
        if (ids.length > 0) {
          var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/flipDupePairs','h' => 0,'q' => 'snippet=4'), $this);?>
"<?php echo ';
          CRM.$.post(dataUrl, {pnid: ids}, function (response) {
            var mapper = {1:3, 2:4, 5:6, 7:8, 9:10}
            $(\'.crm-row-selected\').each(function() {
              var idx = table.row(this).index();
              $.each(mapper, function(key, val) {
                var v1  = table.cell(idx, key).data();
                var v2  = table.cell(idx, val).data();
                table.cell(idx, key).data(v2);
                table.cell(idx, val).data(v1);
              });
              // keep the checkbox checked if needed
              $(\'input.crm-dedupe-select\', this).prop(\'checked\', $(this).hasClass(\'crm-row-selected\'));
            });
          }, \'json\');
        }
      });
    });
  })(CRM.$);

  function toggleDedupeSelect(element, isMultiple) {
    if (!isMultiple) {
      var is_selected = CRM.$(element).prop(\'checked\') ? 1: 0;
      var id = CRM.$(element).prop(\'name\').substr(5);
    }
    else {
      var id = [];
      CRM.$(element).each(function() {
        var sth = CRM.$(\'input.crm-dedupe-select\', this);
        id.push(CRM.$(sth).prop(\'name\').substr(5));
      });
      var is_selected = CRM.$(\'.crm-dedupe-select-all\').prop(\'checked\') ? 1 : 0;
    }

    var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/toggleDedupeSelect','h' => 0,'q' => 'snippet=4'), $this);?>
"<?php echo ';
    var rgid = '; ?>
"<?php echo $this->_tpl_vars['rgid']; ?>
"<?php echo ';
    var gid = '; ?>
"<?php echo $this->_tpl_vars['gid']; ?>
"<?php echo ';

    rgid = rgid.length > 0 ? rgid : 0;
    gid  = gid.length > 0 ? gid : 0;

    CRM.$.post(dataUrl, {pnid: id, rgid: rgid, gid: gid, is_selected: is_selected}, function (data) {
      // nothing to do for now
    }, \'json\');
  }
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>