<?php /* Smarty version 2.6.27, created on 2017-06-21 16:03:15
         compiled from CRM/Contribute/Form/Contribution/AuthorizeNetARB.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/Contribution/AuthorizeNetARB.tpl', 1, false),array('modifier', 'truncate', 'CRM/Contribute/Form/Contribution/AuthorizeNetARB.tpl', 93, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['subscriptionType'] == 'cancel'): ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8"<?php echo '?>'; ?>

<ARBCancelSubscriptionRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">
  <merchantAuthentication>
    <name><?php echo $this->_tpl_vars['apiLogin']; ?>
</name>
    <transactionKey><?php echo $this->_tpl_vars['paymentKey']; ?>
</transactionKey>
  </merchantAuthentication>
  <subscriptionId><?php echo $this->_tpl_vars['subscriptionId']; ?>
</subscriptionId>
</ARBCancelSubscriptionRequest>
<?php elseif ($this->_tpl_vars['subscriptionType'] == 'updateBilling'): ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8"<?php echo '?>'; ?>

<ARBUpdateSubscriptionRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">
  <merchantAuthentication>
    <name><?php echo $this->_tpl_vars['apiLogin']; ?>
</name>
    <transactionKey><?php echo $this->_tpl_vars['paymentKey']; ?>
</transactionKey>
  </merchantAuthentication>
  <subscriptionId><?php echo $this->_tpl_vars['subscriptionId']; ?>
</subscriptionId>
  <subscription>
    <payment>
      <creditCard>
        <cardNumber><?php echo $this->_tpl_vars['cardNumber']; ?>
</cardNumber>
        <expirationDate><?php echo $this->_tpl_vars['expirationDate']; ?>
</expirationDate>
      </creditCard>
    </payment>
    <billTo>
      <firstName><?php echo $this->_tpl_vars['billingFirstName']; ?>
</firstName>
      <lastName><?php echo $this->_tpl_vars['billingLastName']; ?>
</lastName>
      <address><?php echo $this->_tpl_vars['billingAddress']; ?>
</address>
      <city><?php echo $this->_tpl_vars['billingCity']; ?>
</city>
      <state><?php echo $this->_tpl_vars['billingState']; ?>
</state>
      <zip><?php echo $this->_tpl_vars['billingZip']; ?>
</zip>
      <country><?php echo $this->_tpl_vars['billingCountry']; ?>
</country>
    </billTo>
  </subscription>
</ARBUpdateSubscriptionRequest>
<?php elseif ($this->_tpl_vars['subscriptionType'] == 'update'): ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8"<?php echo '?>'; ?>

<ARBUpdateSubscriptionRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">
  <merchantAuthentication>
    <name><?php echo $this->_tpl_vars['apiLogin']; ?>
</name>
    <transactionKey><?php echo $this->_tpl_vars['paymentKey']; ?>
</transactionKey>
  </merchantAuthentication>
<subscriptionId><?php echo $this->_tpl_vars['subscriptionId']; ?>
</subscriptionId>
  <subscription>
    <paymentSchedule>
    <totalOccurrences><?php echo $this->_tpl_vars['totalOccurrences']; ?>
</totalOccurrences>
    </paymentSchedule>
    <amount><?php echo $this->_tpl_vars['amount']; ?>
</amount>
   </subscription>
</ARBUpdateSubscriptionRequest>
<?php else: ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8"<?php echo '?>'; ?>

<ARBCreateSubscriptionRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">
  <merchantAuthentication>
    <name><?php echo $this->_tpl_vars['apiLogin']; ?>
</name>
    <transactionKey><?php echo $this->_tpl_vars['paymentKey']; ?>
</transactionKey>
  </merchantAuthentication>
  <refId><?php echo $this->_tpl_vars['refId']; ?>
</refId>
  <subscription>
    <?php if ($this->_tpl_vars['name']): ?><name><?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>
</name><?php endif; ?>
    <paymentSchedule>
      <interval>
        <length><?php echo $this->_tpl_vars['intervalLength']; ?>
</length>
        <unit><?php echo $this->_tpl_vars['intervalUnit']; ?>
</unit>
      </interval>
      <startDate><?php echo $this->_tpl_vars['startDate']; ?>
</startDate>
      <totalOccurrences><?php echo $this->_tpl_vars['totalOccurrences']; ?>
</totalOccurrences>
    </paymentSchedule>
    <amount><?php echo $this->_tpl_vars['amount']; ?>
</amount>
    <payment>
      <creditCard>
        <cardNumber><?php echo $this->_tpl_vars['cardNumber']; ?>
</cardNumber>
        <expirationDate><?php echo $this->_tpl_vars['expirationDate']; ?>
</expirationDate>
      </creditCard>
    </payment>
   <?php if ($this->_tpl_vars['invoiceNumber']): ?>
   <order>
     <invoiceNumber><?php echo $this->_tpl_vars['invoiceNumber']; ?>
</invoiceNumber>
     <?php if ($this->_tpl_vars['name']): ?><description><?php echo $this->_tpl_vars['name']; ?>
</description><?php endif; ?>
   </order>
   <?php endif; ?>
    <customer>
      <id><?php echo $this->_tpl_vars['contactID']; ?>
</id>
      <email><?php echo $this->_tpl_vars['email']; ?>
</email>
    </customer>
    <billTo>
      <firstName><?php echo $this->_tpl_vars['billingFirstName']; ?>
</firstName>
      <lastName><?php echo $this->_tpl_vars['billingLastName']; ?>
</lastName>
      <address><?php echo $this->_tpl_vars['billingAddress']; ?>
</address>
      <city><?php echo $this->_tpl_vars['billingCity']; ?>
</city>
      <state><?php echo $this->_tpl_vars['billingState']; ?>
</state>
      <zip><?php echo $this->_tpl_vars['billingZip']; ?>
</zip>
      <country><?php echo $this->_tpl_vars['billingCountry']; ?>
</country>
    </billTo>
  </subscription>
</ARBCreateSubscriptionRequest>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>