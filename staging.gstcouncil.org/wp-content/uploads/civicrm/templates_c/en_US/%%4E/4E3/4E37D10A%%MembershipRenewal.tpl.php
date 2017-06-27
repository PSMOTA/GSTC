<?php /* Smarty version 2.6.27, created on 2017-06-25 23:16:06
         compiled from CRM/Member/Form/MembershipRenewal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Member/Form/MembershipRenewal.tpl', 1, false),array('block', 'ts', 'CRM/Member/Form/MembershipRenewal.tpl', 35, false),array('modifier', 'crmDate', 'CRM/Member/Form/MembershipRenewal.tpl', 49, false),array('modifier', 'crmAddClass', 'CRM/Member/Form/MembershipRenewal.tpl', 102, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>  <?php if ($this->_tpl_vars['membershipMode'] == 'test'): ?>
    <?php $this->assign('registerMode', 'TEST'); ?>
  <?php elseif ($this->_tpl_vars['membershipMode'] == 'live'): ?>
    <?php $this->assign('registerMode', 'LIVE'); ?>
  <?php endif; ?>
  <?php if (! $this->_tpl_vars['email']): ?>
    <div class="messages status no-popup">
      <div class="icon inform-icon"></div>
      <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You will not be able to send an automatic email receipt for this Renew Membership because there is no email address recorded for this contact. If you want a receipt to be sent when this Membership is recorded, click Cancel and then click Edit from the Summary tab to add an email address before Renewal the Membership.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['membershipMode']): ?>
    <div class="help">
      <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['displayName'],'2' => $this->_tpl_vars['registerMode'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use this form to Renew Membership Record on behalf of %1.
        <strong>A %2 transaction will be submitted</strong>
        using the selected payment processor.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['action'] == 32768): ?>
    <?php if ($this->_tpl_vars['cancelAutoRenew']): ?>
      <div class="messages status no-popup">
        <div class="icon inform-icon"></div>
        <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['cancelAutoRenew'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This membership is set to renew automatically <?php if ($this->_tpl_vars['renewalDate']): ?>on <?php echo ((is_array($_tmp=$this->_tpl_vars['renewalDate'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php endif; ?>. You will need to cancel the auto-renew option if you want to modify the Membership Type, End Date or Membership Status.
            <a href="%1">Click here</a>
            if you want to cancel the automatic renewal option.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
      </div>
    <?php endif; ?>
  <?php endif; ?>
  <div class="crm-block crm-form-block crm-member-membershiprenew-form-block">
    <div id="help" class="description">
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Renewing will add the normal membership period to the End Date of the previous period for members whose status is Current or Grace. For Expired memberships, renewing will create a membership period commencing from the 'Date Renewal Entered'. This date can be adjusted including being set to the day after the previous End Date - if continuous membership is required.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <div><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <table class="form-layout">
      <tr class="crm-member-membershiprenew-form-block-payment_processor_id">
        <td class="label"><?php echo $this->_tpl_vars['form']['payment_processor_id']['label']; ?>
</td>
        <td class="html-adjust"><?php echo $this->_tpl_vars['form']['payment_processor_id']['html']; ?>
</td>
      </tr>
      <tr class="crm-member-membershiprenew-form-block-org_name">
        <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Organization and Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <td class="html-adjust"><?php echo $this->_tpl_vars['orgName']; ?>
&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $this->_tpl_vars['memType']; ?>

          <?php if ($this->_tpl_vars['member_is_test']): ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(test)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
          &nbsp; <a id="changeMembershipOrgType" href='#'
                    onclick='adjustMembershipOrgType(); return false;'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>change membership type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        </td>
      </tr>
      <tr id="membershipOrgType" class="crm-member-membershiprenew-form-block-renew_org_name hiddenElement">
        <td class="label"><?php echo $this->_tpl_vars['form']['membership_type_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['membership_type_id']['html']; ?>

          <?php if ($this->_tpl_vars['member_is_test']): ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(test)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?><br/>
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select Membership Organization and then Membership Type.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-member-membershiprenew-form-block-membership_status">
        <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <td class="html-adjust">&nbsp;<?php echo $this->_tpl_vars['membershipStatus']; ?>
<br/>
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status of this membership.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
      </tr>
      <tr class="crm-member-membershiprenew-form-block-end_date">
        <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership End Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <td class="html-adjust">&nbsp;<?php echo $this->_tpl_vars['endDate']; ?>
</td>
      </tr>
      <tr class="crm-member-membershiprenew-form-block-renewal_date">
        <td class="label"><?php echo $this->_tpl_vars['form']['renewal_date']['label']; ?>
</td>
        <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'renewal_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
      </tr>
      <tr id="defaultNumTerms" class="crm-member-membershiprenew-form-block-default-num_terms">
        <td colspan="2" class="description">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Renewal extends membership end date by one membership period<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          &nbsp; <a id="changeTermsLink" href='#'
                    onclick='changeNumTerms(); return false;'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>change<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        </td>
      </tr>
      <tr id="changeNumTerms" class="crm-member-membershiprenew-form-block-change-num_terms">
        <td class="label"><?php echo $this->_tpl_vars['form']['num_terms']['label']; ?>
</td>
        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['num_terms']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'two') : smarty_modifier_crmAddClass($_tmp, 'two')); ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>membership periods<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br/>
          <span
            class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Extend the membership end date by this many membership periods. Make sure the appropriate corresponding fee is entered below.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <?php if ($this->_tpl_vars['accessContribution'] && ! $this->_tpl_vars['membershipMode']): ?>
        <tr class="crm-member-membershiprenew-form-block-record_contribution">
          <td class="label"><?php echo $this->_tpl_vars['form']['record_contribution']['label']; ?>
</td>
          <td class="html-adjust"><?php echo $this->_tpl_vars['form']['record_contribution']['html']; ?>
<br/>
            <span
              class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box to enter payment information. You will also be able to generate a customized receipt.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </td>
        </tr>
        <tr id="recordContribution" class="crm-member-membershiprenew-form-block-membership_renewal">
          <td colspan="2">
            <fieldset>
              <legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Renewal Payment and Receipt<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
      <?php endif; ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Member/Form/MembershipCommon.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php if ($this->_tpl_vars['emailExists'] && $this->_tpl_vars['outBound_option'] != 2): ?>
      <table class="form-layout">
        <tr class="crm-<?php echo $this->_tpl_vars['formClass']; ?>
-form-block-send_receipt">
          <td class="label"><?php echo $this->_tpl_vars['form']['send_receipt']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['send_receipt']['html']; ?>
<br/>
            <span class="description"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['emailExists'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatically email a membership confirmation and receipt to %1?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </td>
        </tr>
        <tr id="fromEmail">
          <td class="label"><?php echo $this->_tpl_vars['form']['from_email_address']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['from_email_address']['html']; ?>
</td>
        </tr>
        <tr id="notice" class="crm-member-membershiprenew-form-block-receipt_text_renewal">
          <td class="label"><?php echo $this->_tpl_vars['form']['receipt_text_renewal']['label']; ?>
</td>
          <td><span
              class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter a message you want included at the beginning of the emailed receipt. EXAMPLE: 'Thanks for supporting our organization with your membership.'<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span><br/>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['receipt_text_renewal']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
        </tr>
      </table>
    <?php endif; ?>

    <div id="customData"></div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/customData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

    <div class="spacer"></div>
  </div>
  <?php if ($this->_tpl_vars['accessContribution'] && ! $this->_tpl_vars['membershipMode']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'record_contribution','trigger_value' => "",'target_element_id' => 'recordContribution','target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['email'] && $this->_tpl_vars['outBound_option'] != 2): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'send_receipt','trigger_value' => "",'target_element_id' => 'notice','target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'send_receipt','trigger_value' => "",'target_element_id' => 'fromEmail','target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>

  <?php if (! $this->_tpl_vars['membershipMode']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'payment_instrument_id','trigger_value' => '4','target_element_id' => 'checkNumber','target_element_type' => "table-row",'field_type' => 'select','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'send_receipt','trigger_value' => "",'target_element_id' => 'fromEmail','target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>
<?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      $(\'#membershipOrgType\').hide();
      $(\'#changeNumTerms\').hide();
      '; ?>

      CRM.buildCustomData('<?php echo $this->_tpl_vars['customDataType']; ?>
');
      <?php if ($this->_tpl_vars['customDataSubType']): ?>
      CRM.buildCustomData('<?php echo $this->_tpl_vars['customDataType']; ?>
', <?php echo $this->_tpl_vars['customDataSubType']; ?>
);
      <?php endif; ?>
      <?php echo '
    });

    function checkPayment() {
      showHideByValue(\'record_contribution\', \'\', \'recordContribution\', \'table-row\', \'radio\', false);
      '; ?>
<?php if ($this->_tpl_vars['email'] && $this->_tpl_vars['outBound_option'] != 2): ?><?php echo '
      var record_contribution = document.getElementsByName(\'record_contribution\');
      if (record_contribution[0].checked) {
        document.getElementsByName(\'send_receipt\')[0].checked = true;
        cj(\'#fromEmail\').show();
      }
      else {
        document.getElementsByName(\'send_receipt\')[0].checked = false;
      }
      showHideByValue(\'send_receipt\', \'\', \'notice\', \'table-row\', \'radio\', false);
      '; ?>
<?php endif; ?><?php echo '
    }

    function adjustMembershipOrgType() {
      cj(\'#membershipOrgType\').show();
      cj(\'#changeMembershipOrgType\').hide();
    }

    function changeNumTerms() {
      cj(\'#changeNumTerms\').show();
      cj(\'#defaultNumTerms\').hide();
    }

    CRM.$(function($) {
      cj(\'#record_contribution\').click(function () {
        if (cj(this).prop(\'checked\')) {
          cj(\'#recordContribution\').show();
          setPaymentBlock(true);
        }
        else {
          cj(\'#recordContribution\').hide();
        }
      });

      cj(\'#membership_type_id_1\').change(function () {
        setPaymentBlock();
      });
      setPaymentBlock();
    });

    function setPaymentBlock(checkboxEvent) {
      var memType = cj(\'#membership_type_id_1\').val();

      if (!memType) {
        return;
      }

      var allMemberships = '; ?>
<?php echo $this->_tpl_vars['allMembershipInfo']; ?>
<?php echo ';
      var mode = '; ?>
'<?php echo $this->_tpl_vars['membershipMode']; ?>
'<?php echo ';

      if (!mode) {
        // skip this for test and live modes because contribution type is set automatically
        cj("#financial_type_id").val(allMemberships[memType][\'financial_type_id\']);
      }

      if (!checkboxEvent) {
        if (allMemberships[memType][\'total_amount_numeric\'] > 0) {
          cj(\'#record_contribution\').prop(\'checked\', true);
          cj(\'#recordContribution\').show();
        }
        else {
          cj(\'#record_contribution\').prop(\'checked\', false);
          cj(\'#recordContribution\').hide();
        }
      }

      var term = cj("#num_terms").val();
      if (term) {
        var renewTotal = allMemberships[memType][\'total_amount_numeric\'] * term;
        cj("#total_amount").val(CRM.formatMoney(renewTotal, true));
      }
      else {
        cj("#total_amount").val(allMemberships[memType][\'total_amount\']);
      }

      cj(\'.totaltaxAmount\').html(allMemberships[memType][\'tax_message\']);
    }

    // show/hide different contact section
    setDifferentContactBlock();
    cj(\'#is_different_contribution_contact\').change(function () {
      setDifferentContactBlock();
    });

    function setDifferentContactBlock() {
      //get the
      if (cj(\'#is_different_contribution_contact\').prop(\'checked\')) {
        cj(\'#record-different-contact\').show();
      }
      else {
        cj(\'#record-different-contact\').hide();
      }
    }
  </script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>