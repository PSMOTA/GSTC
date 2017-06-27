<?php /* Smarty version 2.6.27, created on 2017-06-21 15:18:25
         compiled from CRM/Contribute/Form/AdditionalPayment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/AdditionalPayment.tpl', 1, false),array('block', 'ts', 'CRM/Contribute/Form/AdditionalPayment.tpl', 30, false),array('modifier', 'crmMoney', 'CRM/Contribute/Form/AdditionalPayment.tpl', 39, false),array('modifier', 'crmDate', 'CRM/Contribute/Form/AdditionalPayment.tpl', 42, false),array('modifier', 'crmAddClass', 'CRM/Contribute/Form/AdditionalPayment.tpl', 98, false),array('function', 'crmURL', 'CRM/Contribute/Form/AdditionalPayment.tpl', 74, false),array('function', 'help', 'CRM/Contribute/Form/AdditionalPayment.tpl', 116, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['transaction']): ?>
  <?php if (! empty ( $this->_tpl_vars['rows'] )): ?>
   <table id='info'>
     <tr class="columnheader">
       <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
       <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
       <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Payment Method<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
       <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Received<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
       <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
       <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
     </tr>
     <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
     <tr>
       <td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['total_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['row']['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['row']['currency'])); ?>
</td>
       <td><?php echo $this->_tpl_vars['row']['financial_type']; ?>
</td>
       <td><?php echo $this->_tpl_vars['row']['payment_instrument']; ?>
<?php if ($this->_tpl_vars['row']['check_number']): ?> (#<?php echo $this->_tpl_vars['row']['check_number']; ?>
)<?php endif; ?></td>
       <td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['receive_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</td>
       <td><?php echo $this->_tpl_vars['row']['trxn_id']; ?>
</td>
       <td><?php echo $this->_tpl_vars['row']['status']; ?>
</td>
     </tr>
     <?php endforeach; endif; unset($_from); ?>
    <table>
  <?php else: ?>
     <?php if ($this->_tpl_vars['component'] == 'event'): ?>
       <?php $this->assign('entity', 'participant'); ?>
     <?php else: ?>
       <?php $this->assign('entity', $this->_tpl_vars['component']); ?>
     <?php endif; ?>
     <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['entity'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No payments found for this %1 record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php endif; ?>
  <?php if (! $this->_tpl_vars['suppressPaymentFormButtons']): ?>
    <div class="crm-submit-buttons">
       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
  <?php endif; ?>
 <?php elseif ($this->_tpl_vars['formType']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/AdditionalInfo/".($this->_tpl_vars['formType']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>

<div class="crm-block crm-form-block crm-payment-form-block">

  <?php if (! $this->_tpl_vars['email']): ?>
  <div class="messages status no-popup">
    <div class="icon inform-icon"></div>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You will not be able to send an automatic email receipt for this payment because there is no email address recorded for this contact. If you want a receipt to be sent when this payment is recorded, click Cancel and then click Edit from the Summary tab to add an email address before recording the payment.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['newCredit'] && $this->_tpl_vars['contributionMode'] == null): ?>
    <?php if ($this->_tpl_vars['contactId']): ?>
      <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/payment/add','q' => "reset=1&action=add&cid=".($this->_tpl_vars['contactId'])."&id=".($this->_tpl_vars['id'])."&component=".($this->_tpl_vars['component'])."&mode=live"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ccModeLink', ob_get_contents());ob_end_clean(); ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['paymentType'] == 'owed'): ?>
      <div class="action-link css_right crm-link-credit-card-mode">
        <a class="open-inline-noreturn action-item crm-hover-button" href="<?php echo $this->_tpl_vars['ccModeLink']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>submit credit card payment<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
      </div>
    <?php endif; ?>
  <?php endif; ?>
  <div class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
  <table class="form-layout-compressed">
    <tr>
      <td class="font-size12pt label"><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></td><td class="font-size12pt"><strong><?php echo $this->_tpl_vars['displayName']; ?>
</strong></td>
    </tr>
    <?php if ($this->_tpl_vars['contributionMode']): ?>
      <tr class="crm-payment-form-block-payment_processor_id"><td class="label nowrap"><?php echo $this->_tpl_vars['form']['payment_processor_id']['label']; ?>
<span class="crm-marker"> * </span></td><td><?php echo $this->_tpl_vars['form']['payment_processor_id']['html']; ?>
</td></tr>
    <?php endif; ?>
    <tr>
      <td class='label'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td><?php echo $this->_tpl_vars['eventName']; ?>
</td>
    </tr>
    <tr class="crm-payment-form-block-total_amount">
      <td class="label"><?php echo $this->_tpl_vars['form']['total_amount']['label']; ?>
</td>
      <td>
        <span id='totalAmount'><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['currency']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'eight') : smarty_modifier_crmAddClass($_tmp, 'eight')); ?>
&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['total_amount']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'eight') : smarty_modifier_crmAddClass($_tmp, 'eight')); ?>
</span>&nbsp; <span class="status"><?php if ($this->_tpl_vars['paymentType'] == 'refund'): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Refund Due<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Balance Owed<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>:&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['paymentAmt'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</span>
      </td>
    </tr>
   </table>
    <div class="crm-accordion-wrapper crm-accordion_title-accordion crm-accordion-processed" id="paymentDetails_Information">
      <div class="crm-accordion-header">
        <?php if ($this->_tpl_vars['paymentType'] == 'refund'): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Refund Details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Payment Details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
      </div>
      <div class="crm-accordion-body">
        <table class="form-layout-compressed" >
          <tr class="crm-payment-form-block-trxn_date">
            <td class="label"><?php echo $this->_tpl_vars['form']['trxn_date']['label']; ?>
</td>
            <td <?php echo $this->_tpl_vars['valueStyle']; ?>
><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'trxn_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The date this payment was received.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
          </tr>
          <tr class="crm-payment-form-block-payment_instrument_id">
            <td class="label"><?php echo $this->_tpl_vars['form']['payment_instrument_id']['label']; ?>
</td>
            <td <?php echo $this->_tpl_vars['valueStyle']; ?>
><?php echo $this->_tpl_vars['form']['payment_instrument_id']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'payment_instrument_id'), $this);?>
</td>
            </td>
          </tr>
          <?php if ($this->_tpl_vars['showCheckNumber'] || ! $this->_tpl_vars['isOnline']): ?>
            <tr id="checkNumber" class="crm-payment-form-block-check_number">
              <td class="label"><?php echo $this->_tpl_vars['form']['check_number']['label']; ?>
</td>
              <td><?php echo $this->_tpl_vars['form']['check_number']['html']; ?>
</td>
            </tr>
          <?php endif; ?>
          <tr class="crm-payment-form-block-trxn_id">
            <td class="label"><?php echo $this->_tpl_vars['form']['trxn_id']['label']; ?>
</td>
            <td <?php echo $this->_tpl_vars['valueStyle']; ?>
><?php echo $this->_tpl_vars['form']['trxn_id']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-trans_id"), $this);?>
</td>
          </tr>
          <?php if ($this->_tpl_vars['email'] && $this->_tpl_vars['outBound_option'] != 2): ?>
            <tr class="crm-payment-form-block-is_email_receipt">
              <td class="label">
                <?php echo $this->_tpl_vars['form']['is_email_receipt']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['is_email_receipt']['html']; ?>
&nbsp;
                <span class="description"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['email'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatically email a receipt to %1?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
              </td>
            </tr>
          <?php endif; ?>
          <tr id="fromEmail" class="crm-payment-form-block-receipt_date" style="display:none;">
            <td class="label"><?php echo $this->_tpl_vars['form']['from_email_address']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['from_email_address']['html']; ?>
</td>
          </tr>
          <tr id='notice' class="crm-event-eventfees-form-block-receipt_text">
            <td class="label"><?php echo $this->_tpl_vars['form']['receipt_text']['label']; ?>
</td>
            <td><span class="description">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter a message you want included at the beginning of the confirmation email.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </span><br />
                <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['receipt_text']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>

            </td>
          </tr>
           <tr class="crm-payment-form-block-fee_amount"><td class="label"><?php echo $this->_tpl_vars['form']['fee_amount']['label']; ?>
</td><td<?php echo $this->_tpl_vars['valueStyle']; ?>
><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['fee_amount']['html'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency'], 'XXX', 'YYY') : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'], 'XXX', 'YYY')); ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Processing fee for this transaction (if applicable).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
           <tr class="crm-payment-form-block-net_amount"><td class="label"><?php echo $this->_tpl_vars['form']['net_amount']['label']; ?>
</td><td<?php echo $this->_tpl_vars['valueStyle']; ?>
><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['net_amount']['html'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency'], '', 1) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'], '', 1)); ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Net value of the payment (Total Amount minus Fee).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
        </table>
      </div>
    </div>

<div class="accordion ui-accordion ui-widget ui-helper-reset">
      <?php $_from = $this->_tpl_vars['allPanes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['paneName'] => $this->_tpl_vars['paneValue']):
?>

      <div class="crm-accordion-wrapper crm-ajax-accordion crm-<?php echo $this->_tpl_vars['paneValue']['id']; ?>
-accordion <?php if ($this->_tpl_vars['paneValue']['open'] != 'true'): ?>collapsed<?php endif; ?>">
        <div class="crm-accordion-header" id="<?php echo $this->_tpl_vars['paneValue']['id']; ?>
">

          <?php echo $this->_tpl_vars['paneName']; ?>

        </div><!-- /.crm-accordion-header -->
        <div class="crm-accordion-body">

          <div class="<?php echo $this->_tpl_vars['paneValue']['id']; ?>
"></div>
        </div><!-- /.crm-accordion-body -->
      </div><!-- /.crm-accordion-wrapper -->

    <?php endforeach; endif; unset($_from); ?>
  </div>



    <?php echo '
    <script type="text/javascript">

    var url = "'; ?>
<?php echo $this->_tpl_vars['dataUrl']; ?>
<?php echo '";

      CRM.$(function($) {
        showHideByValue( \'is_email_receipt\', \'\', \'notice\', \'table-row\', \'radio\', false );
        showHideByValue( \'is_email_receipt\', \'\', \'fromEmail\', \'table-row\', \'radio\', false );
      });
    '; ?>

  </script>

<br />
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
  <?php echo '
    <script type="text/javascript">
      function verify() {
        if (cj(\'#is_email_receipt\').prop(\'checked\')) {
          return confirm( \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click OK to save this payment record AND send a receipt to the contributor now<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '.\' );
        }
      }
      CRM.$(function($) {
        var $form = $(\'form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '\');
        checkEmailDependancies();
        $(\'#is_email_receipt\', $form).click(function() {
          checkEmailDependancies();
        });

        function checkEmailDependancies() {
          if ($(\'#is_email_receipt\', $form).attr(\'checked\')) {
            $(\'#fromEmail, #notice\', $form).show();
            $(\'#receiptDate\', $form).hide();
          }
          else {
            $(\'#fromEmail, #notice\', $form).hide( );
            $(\'#receiptDate\', $form).show();
          }
        }
  
        // bind first click of accordion header to load crm-accordion-body with snippet
        $(\'#adjust-option-type\', $form).hide();
        $(\'.crm-ajax-accordion .crm-accordion-header\', $form).one(\'click\', function() {
          loadPanes($(this).attr(\'id\'));
        });
        $(\'.crm-ajax-accordion:not(.collapsed) .crm-accordion-header\', $form).each(function(index) {
          loadPanes($(this).attr(\'id\'));
        });
        // load panes function call for snippet based on id of crm-accordion-header
        function loadPanes(id) {
          var url = "'; ?>
<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/payment/add','q' => 'formType=','h' => 0), $this);?>
<?php echo '" + id;
          '; ?>

          <?php if ($this->_tpl_vars['contributionMode']): ?>
            url += "&mode=<?php echo $this->_tpl_vars['contributionMode']; ?>
";
          <?php endif; ?>
          <?php if ($this->_tpl_vars['qfKey']): ?>
            url += "&qfKey=<?php echo $this->_tpl_vars['qfKey']; ?>
";
          <?php endif; ?>
          <?php echo '
          if (!$(\'div.\'+ id, $form).html()) {
            CRM.loadPage(url, {target: $(\'div.\' + id, $form)});
          }
        }
        
        $(\'#fee_amount\', $form).change( function() {
          var totalAmount = $(\'#total_amount\', $form).val();
          var feeAmount = $(\'#fee_amount\', $form).val();
          var netAmount = totalAmount.replace(/,/g, \'\') - feeAmount.replace(/,/g, \'\');
          if (!$(\'#net_amount\', $form).val() && totalAmount) {
            $(\'#net_amount\', $form).val(CRM.formatMoney(netAmount, true));
          }
        });
      });

    </script>
    '; ?>

      <?php if (! $this->_tpl_vars['contributionMode']): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'payment_instrument_id','trigger_value' => '4','target_element_id' => 'checkNumber','target_element_type' => "table-row",'field_type' => 'select','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>