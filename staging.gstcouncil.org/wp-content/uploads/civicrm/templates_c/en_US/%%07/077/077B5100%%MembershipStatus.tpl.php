<?php /* Smarty version 2.6.27, created on 2017-06-21 10:49:53
         compiled from CRM/Member/Form/MembershipStatus.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Member/Form/MembershipStatus.tpl', 1, false),array('block', 'ts', 'CRM/Member/Form/MembershipStatus.tpl', 28, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-membership-status-form-block" id=membership_status>
<fieldset><legend><?php if ($this->_tpl_vars['action'] == 1): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Membership Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php elseif ($this->_tpl_vars['action'] == 2): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Membership Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Membership Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></legend>
 <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
   <?php if ($this->_tpl_vars['action'] == 8): ?>
      <div class="messages status no-popup">
         <div class="icon inform-icon"></div>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: Deleting this option will result in the loss of all membership records of this status.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This may mean the loss of a substantial amount of data, and the action cannot be undone.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
   <?php else: ?>
    <table class="form-layout-compressed">
      <?php if ($this->_tpl_vars['action'] == 2): ?>
      <tr class="crm-membership-status-form-block-name">
  <td class="label"><?php echo $this->_tpl_vars['form']['name']['label']; ?>
</td>
        <td class="html-adjust"><?php echo $this->_tpl_vars['form']['name']['html']; ?>
</td>
      </tr>
      <?php endif; ?>

      <tr class="crm-membership-status-form-block-label">
  <td class="label"><?php echo $this->_tpl_vars['form']['label']['label']; ?>
<?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_membership_status','field' => 'label','id' => $this->_tpl_vars['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
        <td class="html-adjust"><?php echo $this->_tpl_vars['form']['label']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Display name for this Membership status (e.g. New, Current, Grace, Expired...).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>

      <tr class="crm-membership-status-form-block-start_event">
        <td class="label"><?php echo $this->_tpl_vars['form']['start_event']['label']; ?>
</td>
        <td class="html-adjust"><?php echo $this->_tpl_vars['form']['start_event']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When does this status begin? EXAMPLE: <strong>New</strong> status begins at the membership 'join date'.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-status-form-block-start_event_unit_interval">
        <td class="label"><?php echo $this->_tpl_vars['form']['start_event_adjust_unit']['label']; ?>
</td>
        <td class="html-adjust">&nbsp;<?php echo $this->_tpl_vars['form']['start_event_adjust_interval']['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['start_event_adjust_unit']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Optional adjustment period added or subtracted from the Start Event. EXAMPLE: <strong>Current</strong> status might begin at 'join date' PLUS 3 months (to distinguish Current from New members).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-status-form-block-end_event">
        <td class="label"><?php echo $this->_tpl_vars['form']['end_event']['label']; ?>
</td>
        <td class="html-adjust"><?php echo $this->_tpl_vars['form']['end_event']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When does this status end? EXAMPLE: <strong>Current</strong> status ends at the membership 'end date'.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-status-form-block-end_event_unit_interval">
        <td class="label"><?php echo $this->_tpl_vars['form']['end_event_adjust_unit']['label']; ?>
</td>
        <td class="html-adjust">&nbsp;<?php echo $this->_tpl_vars['form']['end_event_adjust_interval']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['end_event_adjust_unit']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Optional adjustment period added or subtracted from the End Event. EXAMPLE: <strong>Grace</strong> status might end at 'end date' PLUS 1 month.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-status-form-block-is_current_member">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_current_member']['label']; ?>
</td><td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_current_member']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Should this status be considered a current membership in good standing. EXAMPLE: New, Current and Grace could all be considered 'current'.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-status-form-block-is_admin">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_admin']['label']; ?>
</td>
        <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_admin']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box if this status is for use by administrative staff only. If checked, this status is never automatically assigned by CiviMember. It is assigned to a contact's Membership by checking the <strong>Status Override</strong> flag when adding or editing the Membership record. Start and End Event settings are ignored for Administrator statuses. EXAMPLE: This setting can be useful for special case statuses like 'Non-expiring', 'Barred' or 'Expelled', etc.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-status-form-block-weight">
        <td class="label"><?php echo $this->_tpl_vars['form']['weight']['label']; ?>
</td>
        <td class="html-adjust">&nbsp;<?php echo $this->_tpl_vars['form']['weight']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Weight sets the order of precedence for automatic assignment of status to a membership. It also sets the order for status displays. EXAMPLE: The default 'New' and 'Current' statuses have overlapping ranges. Memberships that meet both status range criteria are assigned the status with the lower weight.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-status-form-block-is_default">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_default']['label']; ?>
</td>
        <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_default']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The default status is assigned when there are no matching status rules for a membership.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-status-form-block-is_active">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
        <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Is this status enabled.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
    </table>
    <?php endif; ?>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  <br clear="all" />
</fieldset>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>