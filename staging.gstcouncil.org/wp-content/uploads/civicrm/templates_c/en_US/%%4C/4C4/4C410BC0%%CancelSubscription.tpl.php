<?php /* Smarty version 2.6.27, created on 2017-06-21 16:03:08
         compiled from CRM/Contribute/Form/CancelSubscription.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/CancelSubscription.tpl', 1, false),array('block', 'ts', 'CRM/Contribute/Form/CancelSubscription.tpl', 31, false),array('modifier', 'crmMoney', 'CRM/Contribute/Form/CancelSubscription.tpl', 33, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="crm-block crm-form-block crm-auto-renew-membership-cancellation">
<div class="help">
  <div class="icon inform-icon"></div>&nbsp;
  <?php if ($this->_tpl_vars['mode'] == 'auto_renew'): ?>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click the button below if you want to cancel the auto-renewal option for your <?php echo $this->_tpl_vars['membershipType']; ?>
 membership. This will not cancel your membership. However you will need to arrange payment for renewal when your membership expires.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php else: ?>
      <strong><?php $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)),'2' => $this->_tpl_vars['frequency_interval'],'3' => $this->_tpl_vars['frequency_unit'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recurring Contribution Details: %1 every %2 %3<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php if ($this->_tpl_vars['installments']): ?>
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['installments'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>for %1 installments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.
      <?php endif; ?></strong>
      <div class="content"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click the button below to cancel this commitment and stop future transactions. This does not affect contributions which have already been completed.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
  <?php endif; ?>
  <?php if (! $this->_tpl_vars['cancelSupported']): ?>
    <div class="status-warning">
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatic cancellation is not supported for this payment processor. You or the contributor will need to manually cancel this recurring contribution using the payment processor website.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
  <?php endif; ?>
</div>
<?php if (! $this->_tpl_vars['self_service']): ?>
<table class="form-layout">
   <tr>
      <td class="label"><?php echo $this->_tpl_vars['form']['send_cancel_request']['label']; ?>
</td>
      <td class="html-adjust"><?php echo $this->_tpl_vars['form']['send_cancel_request']['html']; ?>
</td>
   </tr>
   <tr>
      <td class="label"><?php echo $this->_tpl_vars['form']['is_notify']['label']; ?>
</td>
      <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_notify']['html']; ?>
</td>
   </tr>
</table>
<?php endif; ?>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>