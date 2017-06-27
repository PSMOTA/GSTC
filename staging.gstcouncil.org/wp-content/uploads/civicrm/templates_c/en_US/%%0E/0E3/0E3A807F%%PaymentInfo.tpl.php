<?php /* Smarty version 2.6.27, created on 2017-06-26 15:54:38
         compiled from CRM/Contribute/Page/PaymentInfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Page/PaymentInfo.tpl', 1, false),array('block', 'ts', 'CRM/Contribute/Page/PaymentInfo.tpl', 56, false),array('function', 'crmURL', 'CRM/Contribute/Page/PaymentInfo.tpl', 31, false),array('modifier', 'crmMoney', 'CRM/Contribute/Page/PaymentInfo.tpl', 62, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['show'] == 'event-payment'): ?>
<?php echo '
<script type=\'text/javascript\'>
CRM.$(function($) {
  if ($("#payment-info").length) {
    var dataUrl = '; ?>
'<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/payment/view",'h' => 0,'q' => "action=browse&id=".($this->_tpl_vars['participantId'])."&cid=".($this->_tpl_vars['contactId'])."&component=event&context=payment_info&snippet=4"), $this);?>
'<?php echo ';
    $.ajax({
      url: dataUrl,
      async: false,
      success: function(html) {
        $("#payment-info").html(html).trigger(\'crmLoad\');
      }
    });

    var taxAmount = "{$totalTaxAmount}";
    if (taxAmount) {
      $(\'.total_amount-section\').show();
    }
    else {
      $(\'.total_amount-section\').remove();
    }
  }
});
</script>
'; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['context'] == 'payment_info'): ?>
<table id='info'>
  <tr class="columnheader">
    <?php if ($this->_tpl_vars['component'] == 'event'): ?>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Fee(s)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    <?php endif; ?>
    <th class="right"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Paid<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    <th class="right"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Balance<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
  </tr>
  <tr>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['paymentInfo']['total'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</td>
    <td class='right'>
      <?php if ($this->_tpl_vars['paymentInfo']['paid'] > 0): ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['paymentInfo']['paid'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
<br/>
        <a class="crm-hover-button action-item crm-popup medium-popup" href='<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/payment",'q' => "view=transaction&cid=".($this->_tpl_vars['cid'])."&id=".($this->_tpl_vars['paymentInfo']['id'])."&component=".($this->_tpl_vars['paymentInfo']['component'])."&action=browse"), $this);?>
'>
          <i class="crm-i fa-list"></i>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view payments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </a>
      <?php endif; ?>
    </td>
    <td class="right" id="payment-info-balance" data-balance="<?php echo $this->_tpl_vars['paymentInfo']['balance']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['paymentInfo']['balance'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</td>
  </tr>
</table>
<?php if ($this->_tpl_vars['paymentInfo']['balance'] && ! $this->_tpl_vars['paymentInfo']['payLater']): ?>
  <?php if ($this->_tpl_vars['paymentInfo']['balance'] > 0): ?>
     <?php $this->assign('paymentButtonName', 'Record Payment'); ?>
  <?php elseif ($this->_tpl_vars['paymentInfo']['balance'] < 0): ?>
     <?php $this->assign('paymentButtonName', 'Record Refund'); ?>
  <?php endif; ?>
  <a class="action-item crm-hover-button" href='<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/payment",'q' => "action=add&reset=1&component=".($this->_tpl_vars['component'])."&id=".($this->_tpl_vars['id'])."&cid=".($this->_tpl_vars['cid'])), $this);?>
'><i class="crm-i fa-plus-circle"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['paymentButtonName']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
<?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>