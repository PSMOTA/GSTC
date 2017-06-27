<?php /* Smarty version 2.6.27, created on 2017-06-26 15:54:46
         compiled from CRM/Event/Form/EventFees.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/EventFees.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/EventFees.tpl', 38, false),array('modifier', 'crmMoney', 'CRM/Event/Form/EventFees.tpl', 51, false),array('modifier', 'crmAddClass', 'CRM/Event/Form/EventFees.tpl', 98, false),array('function', 'crmURL', 'CRM/Event/Form/EventFees.tpl', 57, false),array('function', 'help', 'CRM/Event/Form/EventFees.tpl', 97, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->assign('isRecordPayment', 1); ?>
<?php if ($this->_tpl_vars['isFTPermissionDenied']): ?>
  <script>
  <?php echo '
    CRM.alert(ts(\'You do not have all the permissions needed for this page.\'), \'Permission Denied\', \'error\');
  '; ?>

  </script>
<?php endif; ?>
<?php if ($this->_tpl_vars['paid']): ?>     <table class="form-layout">
    <?php if ($this->_tpl_vars['priceSet']): ?>
      <?php if ($this->_tpl_vars['discount'] && $this->_tpl_vars['hasPayment']): ?>
        <tr class="crm-event-eventfees-form-block-discount"><td class="label">&nbsp;&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Discount Set<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td class="view-value"><?php echo $this->_tpl_vars['discount']; ?>
</td></tr>
      <?php elseif ($this->_tpl_vars['form']['discount_id']['label']): ?>
        <tr class="crm-event-eventfees-form-block-discount_id"><td class="label">&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['discount_id']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['discount_id']['html']; ?>
</td></tr>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['action'] == 2 && $this->_tpl_vars['hasPayment']): ?>             <?php if ($this->_tpl_vars['lineItem']): ?>
                <tr class="crm-event-eventfees-form-block-line_items">
                    <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Selections<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Page/LineItem.tpl", 'smarty_include_vars' => array('context' => 'Event')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                </tr>
            <?php else: ?>
                <tr class="crm-event-eventfees-form-block-event_level">
                    <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Level<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                    <td><?php echo $this->_tpl_vars['fee_level']; ?>
&nbsp;<?php if ($this->_tpl_vars['fee_amount']): ?>- <?php echo ((is_array($_tmp=$this->_tpl_vars['fee_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['fee_currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['fee_currency'])); ?>
<?php endif; ?></td>
                </tr>
            <?php endif; ?>
            <tr>
              <td></td>
              <td>
                <a class="action-item crm-hover-button" href='<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/event/participant/feeselection",'q' => "reset=1&id=".($this->_tpl_vars['participantId'])."&cid=".($this->_tpl_vars['contactId'])."&action=update"), $this);?>
'><i class="crm-i fa-pencil"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Change Selections<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
              </td>
            </tr>
        <?php else: ?>   <?php if ($this->_tpl_vars['priceSet']['fields']): ?>
      <fieldset id="priceset" class="crm-group priceset-group">
            <tr class="crm-event-eventfees-form-block-price_set_amount">
            <td class="label" style="padding-top: 10px;"><?php echo $this->_tpl_vars['form']['amount']['label']; ?>
</td>
      <td class="view-value"><table class="form-layout"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Form/PriceSet.tpl", 'smarty_include_vars' => array('extends' => 'Event')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
       </fieldset>
        <?php else: ?>
      <?php $this->assign('isRecordPayment', 0); ?>
            <div class='messages status'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No active price fields found for this event!<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <?php endif; ?>
    </table>
    <?php endif; ?>
    </td>
    </tr>
 <?php endif; ?>

    <?php if ($this->_tpl_vars['accessContribution'] && ! $this->_tpl_vars['participantMode'] && ( $this->_tpl_vars['action'] != 2 || ! $this->_tpl_vars['rows']['0']['contribution_id'] || $this->_tpl_vars['onlinePendingContributionId'] ) && $this->_tpl_vars['isRecordPayment'] && ! $this->_tpl_vars['registeredByParticipantId']): ?>
        <tr class="crm-event-eventfees-form-block-record_contribution">
            <td class="label"><?php echo $this->_tpl_vars['form']['record_contribution']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['record_contribution']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box to enter payment information. You will also be able to generate a customized receipt.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
        </tr>
        <tr id="payment_information" class="crm-event-eventfees-form-block-payment_information">
           <td class ='html-adjust' colspan=2>
           <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Payment Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
             <table id="recordContribution" class="form-layout" style="width:auto;">
                <tr class="crm-event-eventfees-form-block-financial_type_id">
                    <td class="label"><?php echo $this->_tpl_vars['form']['financial_type_id']['label']; ?>
<span class="crm-marker"> *</span></td>
                    <td><?php echo $this->_tpl_vars['form']['financial_type_id']['html']; ?>
<br /><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the appropriate financial type for this payment.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
                </tr>
                <tr class="crm-event-eventfees-form-block-total_amount"><td class="label"><?php echo $this->_tpl_vars['form']['total_amount']['label']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['total_amount']['html'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</td></tr>
                <tr>
                    <td class="label" ><?php echo $this->_tpl_vars['form']['receive_date']['label']; ?>
</td>
                    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'receive_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                </tr>
                <tr class="crm-event-eventfees-form-block-payment_instrument_id"><td class="label"><?php echo $this->_tpl_vars['form']['payment_instrument_id']['label']; ?>
<span class="crm-marker"> *</span></td><td><?php echo $this->_tpl_vars['form']['payment_instrument_id']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'payment_instrument_id','file' => "CRM/Contribute/Page/Tab.hlp"), $this);?>
</td></tr>
                <tr id="checkNumber" class="crm-event-eventfees-form-block-check_number"><td class="label"><?php echo $this->_tpl_vars['form']['check_number']['label']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['check_number']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'six') : smarty_modifier_crmAddClass($_tmp, 'six')); ?>
</td></tr>
                <?php if ($this->_tpl_vars['showTransactionId']): ?>
                    <tr class="crm-event-eventfees-form-block-trxn_id"><td class="label"><?php echo $this->_tpl_vars['form']['trxn_id']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['trxn_id']['html']; ?>
</td></tr>
                <?php endif; ?>
                <tr class="crm-event-eventfees-form-block-contribution_status_id"><td class="label"><?php echo $this->_tpl_vars['form']['contribution_status_id']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['contribution_status_id']['html']; ?>
</td></tr>
             </table>
           </fieldset>
           </td>
        </tr>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'record_contribution','trigger_value' => "",'target_element_id' => 'payment_information','target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    </table>

<?php endif; ?>

<?php if ($this->_tpl_vars['participantMode'] && $this->_tpl_vars['paid']): ?>
  <div class="spacer"></div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/BillingBlockWrapper.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php if (( $this->_tpl_vars['email'] || $this->_tpl_vars['batchEmail'] ) && $this->_tpl_vars['outBound_option'] != 2): ?>
    <fieldset id="send_confirmation_receipt"><legend><?php if ($this->_tpl_vars['paid']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registration Confirmation and Receipt<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registration Confirmation<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></legend>
      <table class="form-layout" style="width:auto;">
     <tr class="crm-event-eventfees-form-block-send_receipt">
            <td class="label"><?php if ($this->_tpl_vars['paid']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Send Confirmation and Receipt<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Send Confirmation<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></td>
            <td><?php echo $this->_tpl_vars['form']['send_receipt']['html']; ?>
<br>
              <?php if ($this->_tpl_vars['paid']): ?>
                <span class="description"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['email'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatically email a confirmation and receipt to %1?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
              <?php else: ?>
                <span class="description"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['email'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatically email a confirmation to %1?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
              <?php endif; ?>
        </tr>
  <tr id="from-email" class="crm-event-eventfees-form-block-from_email_address">
            <td class="label"><?php echo $this->_tpl_vars['form']['from_email_address']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['from_email_address']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-from_email",'file' => "CRM/Contact/Form/Task/Email.hlp"), $this);?>
</td>
      </tr>
        <tr id='notice' class="crm-event-eventfees-form-block-receipt_text">
       <td class="label"><?php echo $this->_tpl_vars['form']['receipt_text']['label']; ?>
</td>
            <td><span class="description">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter a message you want included at the beginning of the confirmation email. EXAMPLE: 'Thanks for registering for this event.'<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </span><br />
                <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['receipt_text']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>

            </td>
        </tr>
      </table>
    </fieldset>
<?php elseif ($this->_tpl_vars['context'] == 'standalone' && $this->_tpl_vars['outBound_option'] != 2): ?>
    <fieldset id="email-receipt" style="display:none;"><legend><?php if ($this->_tpl_vars['paid']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registration Confirmation and Receipt<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registration Confirmation<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></legend>
      <table class="form-layout" style="width:auto;">
       <tr class="crm-event-eventfees-form-block-send_receipt">
            <td class="label"><?php if ($this->_tpl_vars['paid']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Send Confirmation and Receipt<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Send Confirmation<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></td>
            <td><?php echo $this->_tpl_vars['form']['send_receipt']['html']; ?>
<br>
              <?php if ($this->_tpl_vars['paid']): ?>
                <span class="description"><?php $this->_tag_stack[] = array('ts', array('1' => '<span id="email-address"></span>')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatically email a confirmation and receipt to %1?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
              <?php else: ?>
                <span class="description"><?php $this->_tag_stack[] = array('ts', array('1' => '<span id="email-address"></span>')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatically email a confirmation to %1?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
              <?php endif; ?>
            </td>
        </tr>
  <tr id="from-email" class="crm-event-eventfees-form-block-from_email_address">
            <td class="label"><?php echo $this->_tpl_vars['form']['from_email_address']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['from_email_address']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-from_email",'file' => "CRM/Contact/Form/Task/Email.hlp"), $this);?>
</td>
      </tr>
        <tr id='notice' class="crm-event-eventfees-form-block-receipt_text">
        <td class="label"><?php echo $this->_tpl_vars['form']['receipt_text']['label']; ?>
</td>
            <td><span class="description">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter a message you want included at the beginning of the confirmation email. EXAMPLE: 'Thanks for registering for this event.'<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </span><br />
                <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['receipt_text']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
        </tr>
      </table>
    </fieldset>
<?php endif; ?>

<?php if (( $this->_tpl_vars['email'] && $this->_tpl_vars['outBound_option'] != 2 ) || $this->_tpl_vars['context'] == 'standalone'): ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'send_receipt','trigger_value' => "",'target_element_id' => 'notice','target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'send_receipt','trigger_value' => "",'target_element_id' => "from-email",'target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['paid'] && ( $this->_tpl_vars['action'] == 1 || ( $this->_tpl_vars['action'] == 2 && ! $this->_tpl_vars['hasPayment'] ) ) && ! $this->_tpl_vars['participantMode']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'payment_instrument_id','trigger_value' => '4','target_element_id' => 'checkNumber','target_element_type' => "table-row",'field_type' => 'select','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['context'] == 'standalone' && $this->_tpl_vars['outBound_option'] != 2): ?>
<script type="text/javascript">
<?php echo '
  CRM.$(function($) {
    var $form = $("form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '");
    $("#contact_id", $form).change(checkEmail);
    checkEmail();

    function checkEmail( ) {
      var data = $("#contact_id", $form).select2(\'data\');
      if (data && data.extra && data.extra.email && data.extra.email.length) {
        $("#email-receipt", $form).show();
        if ($("#send_receipt", $form).is(\':checked\')) {
          $("#notice", $form).show();
        }
        $("#email-address", $form).html(data.extra.email);
      }
      else {
        $("#email-receipt, #notice", $form).hide();
      }
    }
  });
'; ?>

</script>
<?php endif; ?>

<?php if ($this->_tpl_vars['onlinePendingContributionId']): ?>
<script type="text/javascript">
<?php echo '
  function confirmStatus( pStatusId, cStatusId ) {
     if ( (pStatusId == cj("#status_id").val() ) && (cStatusId == cj("#contribution_status_id").val()) ) {
         var allow = confirm( \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The Payment Status for this participant is Completed. The Participant Status is set to Pending (pay later). Click Cancel if you want to review or modify these values before saving this record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '.\' );
         if ( !allow ) return false;
     }
  }

  function checkCancelled( statusId, pStatusId, cStatusId ) {
    //selected participant status is \'cancelled\'
    if ( statusId == pStatusId ) {
       cj("#contribution_status_id").val( cStatusId );

       //unset value for send receipt check box.
       cj("#send_receipt").prop("checked", false );
       cj("#send_confirmation_receipt").hide( );

       // set receive data to null.
       clearDateTime( \'receive_date\' );
    } else {
       cj("#send_confirmation_receipt").show( );
    }
    sendNotification();
  }

'; ?>

</script>
<?php endif; ?>
<?php if ($this->_tpl_vars['showFeeBlock'] && $this->_tpl_vars['feeBlockPaid'] && ! $this->_tpl_vars['priceSet'] && $this->_tpl_vars['action'] != 2): ?>
<script>
<?php echo '
     fillTotalAmount( );

     function fillTotalAmount( totalAmount ) {
          if ( !totalAmount ) {
        var amountVal = '; ?>
<?php if ($this->_tpl_vars['form']['amount']['value']): ?><?php echo $this->_tpl_vars['form']['amount']['value']; ?>
<?php else: ?>0<?php endif; ?><?php echo ';
        if ( amountVal > 0 ) {
               var eventFeeBlockValues = '; ?>
<?php echo $this->_tpl_vars['eventFeeBlockValues']; ?>
<?php echo ';
          totalAmount = eval(\'eventFeeBlockValues.amount_id_\'+ amountVal);
              } else {
          totalAmount = \'\';
        }
    }
          cj(\'#total_amount\').val( totalAmount );
     }
'; ?>

</script>
<?php endif; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>