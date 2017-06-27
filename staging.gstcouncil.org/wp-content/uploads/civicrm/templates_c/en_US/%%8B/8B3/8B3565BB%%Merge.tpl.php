<?php /* Smarty version 2.6.27, created on 2017-06-23 15:47:27
         compiled from CRM/Contact/Form/Merge.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Merge.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Merge.tpl', 28, false),array('function', 'help', 'CRM/Contact/Form/Merge.tpl', 28, false),array('function', 'crmURL', 'CRM/Contact/Form/Merge.tpl', 75, false),array('function', 'crmAPI', 'CRM/Contact/Form/Merge.tpl', 81, false),array('function', 'cycle', 'CRM/Contact/Form/Merge.tpl', 102, false),array('modifier', 'crmDate', 'CRM/Contact/Form/Merge.tpl', 87, false),array('modifier', 'strrpos', 'CRM/Contact/Form/Merge.tpl', 111, false),array('modifier', 'substr', 'CRM/Contact/Form/Merge.tpl', 112, false),array('modifier', 'implode', 'CRM/Contact/Form/Merge.tpl', 118, false),array('modifier', 'crmAddClass', 'CRM/Contact/Form/Merge.tpl', 122, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-contact-merge-form-block">
  <div class="help">
  <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <strong>Merge</strong> to move data from the Duplicate Contact on the left into the Main Contact. In addition to the contact data (address, phone, email...), you may choose to move all or some of the related activity records (groups, contributions, memberships, etc.).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => 'intro'), $this);?>

  </div>

  <div class="message status">
    <div class="icon inform-icon"></div>
    <strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: The duplicate contact record WILL BE DELETED after the merge is complete.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
  </div>

  <?php if ($this->_tpl_vars['user']): ?>
    <div class="message status">
      <div class="icon inform-icon"></div>
      <strong><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['config']->userFramework)); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: There are %1 user accounts associated with both the original and duplicate contacts. Ensure that the %1 user you want to retain is on the right - if necessary use the 'Flip between original and duplicate contacts.' option at top to swap the positions of the two records before doing the merge.
  The user record associated with the duplicate contact will not be deleted, but will be unlinked from the associated contact record (which will be deleted).
  You will need to manually delete that user (click on the link to open the %1 user account in new screen). You may need to give thought to how you handle any content or contents associated with that user.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
    </div>
  <?php endif; ?>

  <div class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>

  <div class="action-link">
    <?php if ($this->_tpl_vars['prev']): ?><a href="<?php echo $this->_tpl_vars['prev']; ?>
" class="crm-hover-button action-item"><i class="crm-i fa-chevron-left"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Previous<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a><?php endif; ?>
    <?php if ($this->_tpl_vars['next']): ?><a href="<?php echo $this->_tpl_vars['next']; ?>
" class="crm-hover-button action-item"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <i class="crm-i fa-chevron-right"></i></a><?php endif; ?>
    <a href="<?php echo $this->_tpl_vars['flip']; ?>
" class="action-item crm-hover-button">
      <i class="crm-i fa-random"></i>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Flip between original and duplicate contacts.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </a>
  </div>

  <div class="action-link">
    <a href="#" class="action-item crm-hover-button crm-notDuplicate" title=<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mark this pair as not a duplicate.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> onClick="processDupes( <?php echo $this->_tpl_vars['main_cid']; ?>
, <?php echo $this->_tpl_vars['other_cid']; ?>
, 'dupe-nondupe', 'merge-contact', '<?php echo $this->_tpl_vars['browseUrl']; ?>
' );return false;">
      <i class="crm-i fa-times-circle"></i>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mark this pair as not a duplicate.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </a>
  </div>

  <div class="action-link">
    <a href="javascript:void(0);" class="action-item crm-hover-button toggle_equal_rows">
      <i class="crm-i fa-eye-slash"></i>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Show/hide rows with the same data on each contact record.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </a>
  </div>

  <table class="row-highlight">
    <tr class="columnheader">
      <th>&nbsp;</th>
      <th><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['other_cid'])), $this);?>
"><?php echo $this->_tpl_vars['other_name']; ?>
</a> (<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>duplicate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mark All<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />==<?php echo $this->_tpl_vars['form']['toggleSelect']['html']; ?>
 ==&gt;</th>
      <th><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['main_cid'])), $this);?>
"><?php echo $this->_tpl_vars['main_name']; ?>
</a></th>
      <th width="300">Add/overwrite?</th>
    </tr>

    <?php echo smarty_function_crmAPI(array('var' => 'other_result','entity' => 'Contact','action' => 'get','return' => 'modified_date','id' => $this->_tpl_vars['other_cid']), $this);?>


    <?php echo smarty_function_crmAPI(array('var' => 'main_result','entity' => 'Contact','action' => 'get','return' => 'modified_date','id' => $this->_tpl_vars['main_cid']), $this);?>


    <tr>
      <td>Last modified</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['other_result']['values']['0']['modified_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
 <?php if ($this->_tpl_vars['other_result']['values']['0']['modified_date'] > $this->_tpl_vars['main_result']['values']['0']['modified_date']): ?> (Most recent) <?php endif; ?></td>
      <td></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['main_result']['values']['0']['modified_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
 <?php if ($this->_tpl_vars['main_result']['values']['0']['modified_date'] > $this->_tpl_vars['other_result']['values']['0']['modified_date']): ?> (Most recent) <?php endif; ?></td>
      <td></td>
    </tr>

    <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['row']):
?>

      <?php if (! isset ( $this->_tpl_vars['row']['main'] ) && ! isset ( $this->_tpl_vars['row']['other'] )): ?>
        <tr style="background-color: #fff !important; border-bottom:1px solid #ccc !important;" class="no-data">
          <td>
            <strong><?php echo $this->_tpl_vars['row']['title']; ?>
</strong>
          </td>
      <?php else: ?>
        <?php if ($this->_tpl_vars['row']['main'] == $this->_tpl_vars['row']['other']): ?>
           <tr class="merge-row-equal crm-row-ok <?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
">
        <?php else: ?>
           <tr class="crm-row-error <?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
">
        <?php endif; ?>
          <td>
            <?php echo $this->_tpl_vars['row']['title']; ?>

          </td>
        <?php endif; ?>

          <?php $this->assign('position', ((is_array($_tmp=$this->_tpl_vars['field'])) ? $this->_run_mod_handler('strrpos', true, $_tmp, '_') : strrpos($_tmp, '_'))); ?>
          <?php $this->assign('blockId', ((is_array($_tmp=$this->_tpl_vars['field'])) ? $this->_run_mod_handler('substr', true, $_tmp, $this->_tpl_vars['position']+1) : substr($_tmp, $this->_tpl_vars['position']+1))); ?>
          <?php $this->assign('blockName', ((is_array($_tmp=$this->_tpl_vars['field'])) ? $this->_run_mod_handler('substr', true, $_tmp, 14, $this->_tpl_vars['position']-14) : substr($_tmp, 14, $this->_tpl_vars['position']-14))); ?>

          <td>
                                    <?php if (((is_array($_tmp=$this->_tpl_vars['row']['title'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 7) : substr($_tmp, 0, 7)) == 'Address'): ?><span style="white-space: pre"><?php else: ?><span><?php endif; ?><?php if (! is_array ( $this->_tpl_vars['row']['other'] )): ?><?php echo $this->_tpl_vars['row']['other']; ?>
<?php elseif ($this->_tpl_vars['row']['other']['fileName']): ?><?php echo $this->_tpl_vars['row']['other']['fileName']; ?>
<?php else: ?><?php echo ((is_array($_tmp=', ')) ? $this->_run_mod_handler('implode', true, $_tmp, $this->_tpl_vars['row']['other']) : implode($_tmp, $this->_tpl_vars['row']['other'])); ?>
<?php endif; ?></span>
          </td>

          <td style='white-space: nowrap'>
             <?php if ($this->_tpl_vars['form'][$this->_tpl_vars['field']]): ?>==<?php echo ((is_array($_tmp=$this->_tpl_vars['form'][$this->_tpl_vars['field']]['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, "select-row") : smarty_modifier_crmAddClass($_tmp, "select-row")); ?>
==&gt;<?php endif; ?>
          </td>

                    <?php if (((is_array($_tmp=$this->_tpl_vars['row']['title'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 5) : substr($_tmp, 0, 5)) == 'Email' || ((is_array($_tmp=$this->_tpl_vars['row']['title'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 7) : substr($_tmp, 0, 7)) == 'Address' || ((is_array($_tmp=$this->_tpl_vars['row']['title'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 2) : substr($_tmp, 0, 2)) == 'IM' || ((is_array($_tmp=$this->_tpl_vars['row']['title'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 7) : substr($_tmp, 0, 7)) == 'Website' || ((is_array($_tmp=$this->_tpl_vars['row']['title'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 5) : substr($_tmp, 0, 5)) == 'Phone'): ?>

            <td>
                                          <?php if (((is_array($_tmp=$this->_tpl_vars['row']['title'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 7) : substr($_tmp, 0, 7)) == 'Address'): ?><span style="white-space: pre" id="main_<?php echo $this->_tpl_vars['blockName']; ?>
_<?php echo $this->_tpl_vars['blockId']; ?>
"><?php else: ?><span id="main_<?php echo $this->_tpl_vars['blockName']; ?>
_<?php echo $this->_tpl_vars['blockId']; ?>
"><?php endif; ?><?php if (! is_array ( $this->_tpl_vars['row']['main'] )): ?><?php echo $this->_tpl_vars['row']['main']; ?>
<?php elseif ($this->_tpl_vars['row']['main']['fileName']): ?><?php echo $this->_tpl_vars['row']['main']['fileName']; ?>
<?php else: ?><?php echo ((is_array($_tmp=', ')) ? $this->_run_mod_handler('implode', true, $_tmp, $this->_tpl_vars['row']['main']) : implode($_tmp, $this->_tpl_vars['row']['main'])); ?>
<?php endif; ?></span>
            </td>

            <td>
                            <?php if ($this->_tpl_vars['blockName'] == 'email' || $this->_tpl_vars['blockName'] == 'phone' || $this->_tpl_vars['blockName'] == 'address' || $this->_tpl_vars['blockName'] == 'im'): ?>
                <?php echo $this->_tpl_vars['form']['location_blocks'][$this->_tpl_vars['blockName']][$this->_tpl_vars['blockId']]['locTypeId']['html']; ?>
&nbsp;
              <?php endif; ?>

                            <?php if ($this->_tpl_vars['blockName'] == 'website' || $this->_tpl_vars['blockName'] == 'im' || $this->_tpl_vars['blockName'] == 'phone'): ?>
                <?php echo $this->_tpl_vars['form']['location_blocks'][$this->_tpl_vars['blockName']][$this->_tpl_vars['blockId']]['typeTypeId']['html']; ?>
&nbsp;
              <?php endif; ?>

                            <span id="main_<?php echo $this->_tpl_vars['blockName']; ?>
_<?php echo $this->_tpl_vars['blockId']; ?>
_overwrite" class="location_block_controls">

                <span class="location_primary">
                  <?php if ($this->_tpl_vars['row']['main'] && $this->_tpl_vars['row']['main_is_primary'] == '1'): ?>Primary<?php endif; ?>
                </span>

                <span class="location_block_controls_options">
                  <span class="location_operation_description">
                    <?php if ($this->_tpl_vars['row']['main']): ?>(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>overwrite<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php else: ?>(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php endif; ?>
                  </span>
                  <span style="display: block" class="location_operation_checkbox">
                    <?php if ($this->_tpl_vars['row']['main'] && ( $this->_tpl_vars['blockName'] == 'email' || $this->_tpl_vars['blockName'] == 'phone' )): ?>
                      <?php echo $this->_tpl_vars['form']['location_blocks'][$this->_tpl_vars['blockName']][$this->_tpl_vars['blockId']]['operation']['html']; ?>

                    <?php endif; ?>
                  </span>
                  <span style="display: block"  class="location_set_other_primary">
                    <?php if ($this->_tpl_vars['blockName'] != 'website' && ( ( $this->_tpl_vars['row']['main'] && $this->_tpl_vars['row']['main_is_primary'] != '1' ) || ! $this->_tpl_vars['row']['main'] )): ?>
                      <?php echo $this->_tpl_vars['form']['location_blocks'][$this->_tpl_vars['blockName']][$this->_tpl_vars['blockId']]['set_other_primary']['html']; ?>

                    <?php endif; ?>
                  </span>
                </span>
              </span>

            </td>

                    <?php else: ?>

            <td>
              <span>
                <?php if (! is_array ( $this->_tpl_vars['row']['main'] )): ?>
                  <?php echo $this->_tpl_vars['row']['main']; ?>

                <?php elseif ($this->_tpl_vars['row']['main']['fileName']): ?>
                  <?php echo $this->_tpl_vars['row']['main']['fileName']; ?>

                <?php else: ?>
                  <?php echo ((is_array($_tmp=', ')) ? $this->_run_mod_handler('implode', true, $_tmp, $this->_tpl_vars['row']['main']) : implode($_tmp, $this->_tpl_vars['row']['main'])); ?>

                <?php endif; ?>
              </span>
            </td>

            <td>
              <?php if (isset ( $this->_tpl_vars['row']['main'] ) || isset ( $this->_tpl_vars['row']['other'] )): ?>
                <span>
                  <?php if ($this->_tpl_vars['row']['main'] == $this->_tpl_vars['row']['other']): ?>
                    <span class="action_label">(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>match<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</span><br />
                  <?php elseif ($this->_tpl_vars['row']['main']): ?>
                    <span class="action_label">(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>overwrite<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</span><br />
                   <?php else: ?>
                     <span class="action_label">(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</span>
                  <?php endif; ?>
                </span>
              <?php endif; ?>
            </td>

          <?php endif; ?>

       </tr>
    <?php endforeach; endif; unset($_from); ?>

    <?php $_from = $this->_tpl_vars['rel_tables']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['paramName'] => $this->_tpl_vars['params']):
?>
      <?php if ($this->_tpl_vars['paramName'] == 'move_rel_table_users'): ?>
        <tr class="<?php echo smarty_function_cycle(array('values' => "even-row,odd-row"), $this);?>
">
        <td><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Move related...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></td><td><?php if ($this->_tpl_vars['otherUfId']): ?><a target="_blank" href="<?php echo $this->_tpl_vars['params']['other_url']; ?>
"><?php echo $this->_tpl_vars['otherUfName']; ?>
</a></td><td style='white-space: nowrap'>==<?php echo ((is_array($_tmp=$this->_tpl_vars['form'][$this->_tpl_vars['paramName']]['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, "select-row") : smarty_modifier_crmAddClass($_tmp, "select-row")); ?>
==&gt;<?php else: ?><td style='white-space: nowrap'></td><?php endif; ?></td><td><?php if ($this->_tpl_vars['mainUfId']): ?><a target="_blank" href="<?php echo $this->_tpl_vars['params']['main_url']; ?>
"><?php echo $this->_tpl_vars['mainUfName']; ?>
</a><?php endif; ?></td>
        <td>(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>migrate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</td>
      </tr>
      <?php else: ?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "even-row,odd-row"), $this);?>
">
        <td><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Move related...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></td><td><a href="<?php echo $this->_tpl_vars['params']['other_url']; ?>
"><?php echo $this->_tpl_vars['params']['title']; ?>
</a></td><td style='white-space: nowrap'>==<?php echo ((is_array($_tmp=$this->_tpl_vars['form'][$this->_tpl_vars['paramName']]['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, "select-row") : smarty_modifier_crmAddClass($_tmp, "select-row")); ?>
==&gt;</td><td><a href="<?php echo $this->_tpl_vars['params']['main_url']; ?>
"><?php echo $this->_tpl_vars['params']['title']; ?>
</a><?php if ($this->_tpl_vars['form']['operation'][$this->_tpl_vars['paramName']]['add']['html']): ?>&nbsp;<?php echo $this->_tpl_vars['form']['operation'][$this->_tpl_vars['paramName']]['add']['html']; ?>
<?php endif; ?></td>
         <td>(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>migrate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</td>
      </tr>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
  </table>
  <div class='form-item'>
    <!--<p><?php echo $this->_tpl_vars['form']['moveBelongings']['html']; ?>
 <?php echo $this->_tpl_vars['form']['moveBelongings']['label']; ?>
</p>-->
    <!--<p><?php echo $this->_tpl_vars['form']['deleteOther']['html']; ?>
 <?php echo $this->_tpl_vars['form']['deleteOther']['label']; ?>
</p>-->
  </div>

  <div class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
</div>

<?php echo '
<script type="text/javascript">

  var locationBlockInfo = '; ?>
<?php echo $this->_tpl_vars['locationBlockInfo']; ?>
<?php echo ';
  var allBlock = '; ?>
<?php echo $this->_tpl_vars['mainLocBlock']; ?>
<?php echo ';

  /**
   * Triggered when a \'location\' or \'type\' destination is changed, and when
   * the operation or \'set primary\' checkboxes are changed.
   * 
   * Check to see if the \'main\' contact record has a corresponding location
   * block when the destination of a field is changed. Allow existing location
   * fields to be overwritten with data from the \'other\' contact.
   *
   * @param blockName string
   *   The name of the entity.
   * @param blockId int
   *   The block ID being affected.
   * @param event object
   *   The event that triggered the update.
   */
  function updateMainLocationBlock(blockName, blockId, event) {

    // Get type of select list that\'s been changed (location or type)
    var locTypeId = CRM.$(\'select#location_blocks_\' + blockName + \'_\' + blockId + \'_locTypeId\').val();
    var typeTypeId = CRM.$(\'select#location_blocks_\' + blockName + \'_\' + blockId + \'_typeTypeId\').val();

    // @todo Fix this \'special handling\' for websites (no location id)
    if (!locTypeId) {
      locTypeId = 0;
    }

    // Look for a matching block on the main contact
    var mainBlockId = 0;
    var mainBlockDisplay = \'\';
    var mainBlock = findBlock(blockName, locTypeId, typeTypeId);
    if (mainBlock != false) {
      mainBlockDisplay = mainBlock[\'display\'];
      mainBlockId = mainBlock[\'id\'];
    }

    // Update main location display and id
    CRM.$("input[name=\'location_blocks[" + blockName + "][" + blockId + "][mainContactBlockId]\']").val(mainBlockId);
    CRM.$("#main_" + blockName + "_" + blockId).html(mainBlockDisplay);

    // Update controls area

    // Get the parent block once for speed
    var this_controls = CRM.$("#main_" + blockName + "_" + blockId + "_overwrite");

    // Update primary label
    if (mainBlock != false && mainBlock[\'is_primary\'] == \'1\') {
      this_controls.find(".location_primary").text(\'Primary\');
    }
    else {
      this_controls.find(".location_primary").text(\'\');
    }

    // Update operation description
    var operation_description = "'; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
    var add_new_check_length = this_controls.find(".location_operation_checkbox input:checked").length;
    if (mainBlock != false) {
      if (add_new_check_length > 0) {
        operation_description = "'; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add new<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
      }
      else {
        operation_description = "'; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>overwrite<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
      }
    }
    this_controls.find(".location_operation_description").text("(" + operation_description + ")");

    // Skip if the \'add new\' or \'set primary\' checkboxes were clicked
    if (event.target.id.match(/(operation|set_other_primary)/) === null) {
      // Display \'Add new\' checkbox if there is a main block, and this is an
      // email or phone type.
      if (mainBlock != false && (blockName == \'email\' || blockName == \'phone\')) {
        var op_id = \'location_blocks[\' + blockName + \'][\' + blockId + \'][operation]\';
        this_controls.find(".location_operation_checkbox").html(
                \'<input id="\' + op_id + \'" name="\' + op_id + \'" type="checkbox" value="1" class="crm-form-checkbox"><label for="\' + op_id + \'">'; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add new<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label>\'
        );
      }
      else {
        this_controls.find(".location_operation_checkbox").html(\'\');
      }
    }

    // Skip if \'set primary\' was clicked
    if (event.target.id.match(/(set_other_primary)/) === null) {
      // Display \'Set primary\' checkbox if applicable
      if (blockName != \'website\' && (mainBlock == false || mainBlock[\'is_primary\'] != "1" || add_new_check_length > 0)) {
        var prim_id = \'location_blocks[\' + blockName + \'][\' + blockId + \'][set_other_primary]\';
        this_controls.find(".location_set_other_primary").html(
                \'<input id="\' + prim_id + \'" name="\' + prim_id + \'" type="checkbox" value="1" class="crm-form-checkbox"><label for="\' + prim_id + \'">'; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Set as primary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label>\'
        );
      }
      else {
        this_controls.find(".location_set_other_primary").html(\'\');
      }
    }

  }

  /**
   * Look for a matching \'main\' contact location block by entity, location and
   * type
   *
   * @param entName string
   *   The entity name to lookup.
   * @param locationID int
   *   The location ID to lookup.
   * @param typeID int
   *   The type ID to lookup.
   *
   * @returns boolean|object
   *   Returns false if no match, otherwise an object with the location ID and
   *   display value.
   */
  function findBlock(entName, locationID, typeID) {
    var entityArray = allBlock[entName];
    var result = false;
    for (var i = 0; i < entityArray.length; i++) {
      // Match based on location and type ID, depending on the entity info
      if (locationBlockInfo[entName][\'hasLocation\'] == false || locationID == entityArray[i][\'location_type_id\']) {
        if (locationBlockInfo[entName][\'hasType\'] == false || typeID == entityArray[i][locationBlockInfo[entName][\'hasType\']]) {
          result = {
            display: entityArray[i][locationBlockInfo[entName][\'displayField\']],
            id: entityArray[i][\'id\'],
            is_primary: entityArray[i][\'is_primary\']
          };
          break;
        }
      }
    }
    return result;
  }

  /**
   * Called when a \'set primary\' checkbox is clicked in order to disable any
   * other \'set primary\' checkboxes for blocks of the same entity. So don\'t let
   * users try to set two different phone numbers as primary on the form.
   *
   * @param event object
   *   The event that triggered the update
   */
  function updateSetPrimaries(event) {
    var nameSplit = event.target.name.split(\'[\');
    var blockName = nameSplit[1].slice(0, -1);
    var controls = CRM.$(\'span.location_block_controls[id^="main_\' + blockName + \'"]\');

    // Enable everything
    controls.find(\'input[id$="[set_other_primary]"]:not(:checked)\').removeAttr("disabled");

    // If one is checked, disable the others
    if (controls.find(\'input[id$="[set_other_primary]"]:checked\').length > 0) {
      controls.find(\'input[id$="[set_other_primary]"]:not(:checked)\').attr("disabled", "disabled");
    }
  }

  CRM.$(function($) {

    $(\'table td input.form-checkbox\').each(function() {
      var ele = null;
      var element = $(this).attr(\'id\').split(\'_\',3);

      switch ( element[\'1\'] ) {
        case \'addressee\':
          ele = \'#\' + element[\'0\'] + \'_\' + element[\'1\'];
          break;

         case \'email\':
         case \'postal\':
           ele = \'#\' + element[\'0\'] + \'_\' + element[\'1\'] + \'_\' + element[\'2\'];
           break;
      }

      if( ele ) {
        $(this).on(\'click\', function() {
          var val = $(this).prop(\'checked\');
          $(\'input\' + ele + \', input\' + ele + \'_custom\').prop(\'checked\', val);
        });
      }
    });

    // Show/hide matching data rows
    $(\'.toggle_equal_rows\').click(function() {
      $(\'tr.merge-row-equal\').toggle();
    });

    // Call mergeBlock whenever a location type is changed
    $(\'body\').on(\'change\', \'select[id$="locTypeId"],select[id$="typeTypeId"],input[id$="[operation]"],input[id$="[set_other_primary]"]\', function(event){

      // All the information we need is held in the id, separated by underscores
      var nameSplit = this.name.split(\'[\');

      // Lookup the main value, if any are available
      if (allBlock[nameSplit[1].slice(0, -1)] != undefined) {
        updateMainLocationBlock(nameSplit[1].slice(0, -1), nameSplit[2].slice(0, -1), event);
      }

      // Update all \'set primary\' checkboxes
      updateSetPrimaries(event);

    });

  });

</script>
'; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/dedupe.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>