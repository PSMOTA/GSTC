<?php /* Smarty version 2.6.27, created on 2017-06-21 00:01:49
         compiled from CRM/Event/Form/Registration/Confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/Registration/Confirm.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/Registration/Confirm.tpl', 35, false),array('modifier', 'crmMoney', 'CRM/Event/Form/Registration/Confirm.tpl', 115, false),array('modifier', 'nl2br', 'CRM/Event/Form/Registration/Confirm.tpl', 168, false),array('modifier', 'truncate', 'CRM/Event/Form/Registration/Confirm.tpl', 182, false),array('modifier', 'crmDate', 'CRM/Event/Form/Registration/Confirm.tpl', 182, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['action'] & 1024): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/Registration/PreviewHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/TrackingFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="crm-event-id-<?php echo $this->_tpl_vars['event']['id']; ?>
 crm-block crm-event-confirm-form-block">
    <?php if ($this->_tpl_vars['isOnWaitlist']): ?>
        <div class="help">
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please verify the information below. <span class="bold">Then click 'Continue' to be added to the WAIT LIST for this event</span>. If space becomes available you will receive an email with a link to a web page where you can complete your registration.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
    <?php elseif ($this->_tpl_vars['isRequireApproval']): ?>
        <div class="help">
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please verify the information below. Then click 'Continue' to submit your registration. <span class="bold">Once approved, you will receive an email with a link to a web page where you can complete the registration process.</span><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
    <?php else: ?>
        <div class="help">
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please verify the information below. Click the <strong>Go Back</strong> button below if you need to make changes.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php if ($this->_tpl_vars['contributeMode'] == 'notify' && ! $this->_tpl_vars['is_pay_later'] && ! $this->_tpl_vars['isAmountzero']): ?>
            <?php if ($this->_tpl_vars['paymentProcessor']['payment_processor_type'] == 'Google_Checkout'): ?>
                <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['paymentProcessor']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click the <strong>%1</strong> button to checkout to Google, where you will select your payment method and complete the registration.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php else: ?>
                <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['paymentProcessor']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click the <strong>Continue</strong> button to checkout to %1, where you will select your payment method and complete the registration.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
        <?php else: ?>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Otherwise, click the <strong>Continue</strong> button below to complete your registration.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php endif; ?>
        </div>
        <?php if ($this->_tpl_vars['is_pay_later'] && ! $this->_tpl_vars['isAmountzero']): ?>
            <div class="bold"><?php echo $this->_tpl_vars['pay_later_receipt']; ?>
</div>
        <?php endif; ?>
    <?php endif; ?>

    <div id="crm-submit-buttons" class="crm-submit-buttons">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <?php if ($this->_tpl_vars['event']['confirm_text']): ?>
        <div id="intro_text" class="crm-section event_confirm_text-section">
          <p><?php echo $this->_tpl_vars['event']['confirm_text']; ?>
</p>
        </div>
    <?php endif; ?>

    <div class="crm-group event_info-group">
        <div class="header-dark">
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="display-block">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/Registration/EventInfoBlock.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    </div>

    <?php if ($this->_tpl_vars['pcpBlock']): ?>
    <div class="crm-group pcp_display-group">
        <div class="header-dark">
           <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Honor Roll<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="display-block">
            <?php if ($this->_tpl_vars['pcp_display_in_roll']): ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>List my contribution<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php if ($this->_tpl_vars['pcp_is_anonymous']): ?>
                    <strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>anonymously<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</strong>
                <?php else: ?>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>under the name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <strong><?php echo $this->_tpl_vars['pcp_roll_nickname']; ?>
</strong><br/>
                    <?php if ($this->_tpl_vars['pcp_personal_note']): ?>
                        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>With the personal note<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <strong><?php echo $this->_tpl_vars['pcp_personal_note']; ?>
</strong>
                    <?php else: ?>
                     <strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>With no personal note<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
                     <?php endif; ?>
                <?php endif; ?>
            <?php else: ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Don't list my contribution in the honor roll.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
            <br />
        </div>
    </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['paidEvent'] && ! $this->_tpl_vars['isRequireApproval'] && ! $this->_tpl_vars['isOnWaitlist']): ?>
        <div class="crm-group event_fees-group">
            <div class="header-dark">
                <?php echo $this->_tpl_vars['event']['fee_label']; ?>

            </div>
            <?php if ($this->_tpl_vars['lineItem']): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Page/LineItem.tpl", 'smarty_include_vars' => array('context' => 'Event')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php elseif ($this->_tpl_vars['amounts'] || $this->_tpl_vars['amount'] == 0): ?>
          <div class="crm-section no-label amount-item-section">
                    <?php $_from = $this->_tpl_vars['amounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['level'] => $this->_tpl_vars['amount']):
?>
              <div class="content">
                  <?php echo ((is_array($_tmp=$this->_tpl_vars['amount']['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['amount']['label']; ?>

              </div>
                  <div class="clear"></div>
                    <?php endforeach; endif; unset($_from); ?>
            </div>
                <?php if ($this->_tpl_vars['totalTaxAmount']): ?>
                  <div class="crm-section no-label total-amount-section">
                  <div class="content bold"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</div>
                  <div class="clear"></div>
                  </div>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['totalAmount']): ?>
                <div class="crm-section no-label total-amount-section">
                    <div class="content bold"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['totalAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</div>
                    <div class="clear"></div>
                  </div>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['hookDiscount']['message']): ?>
                    <div class="crm-section hookDiscount-section">
                        <em>(<?php echo $this->_tpl_vars['hookDiscount']['message']; ?>
)</em>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

        </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['event']['participant_role'] != 'Attendee' && $this->_tpl_vars['defaultRole']): ?>
        <div class="crm-group participant_role-group">
            <div class="header-dark">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant Role<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div>
            <div class="crm-section no-label participant_role-section">
                <div class="content">
                    <?php echo $this->_tpl_vars['event']['participant_role']; ?>

                </div>
              <div class="clear"></div>
            </div>
        </div>
    <?php endif; ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/Registration/DisplayProfile.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['contributeMode'] != 'notify' && ( ! $this->_tpl_vars['is_pay_later'] || $this->_tpl_vars['isBillingAddressRequiredForPayLater'] ) && $this->_tpl_vars['paidEvent'] && ! $this->_tpl_vars['isAmountzero'] && ! $this->_tpl_vars['isOnWaitlist'] && ! $this->_tpl_vars['isRequireApproval']): ?>
      <div class="crm-group billing_name_address-group">
            <div class="header-dark">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billing Name and Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div>
          <div class="crm-section no-label billing_name-section">
            <div class="content"><?php echo $this->_tpl_vars['billingName']; ?>
</div>
            <div class="clear"></div>
          </div>
          <div class="crm-section no-label billing_address-section">
            <div class="content"><?php echo ((is_array($_tmp=$this->_tpl_vars['address'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
            <div class="clear"></div>
          </div>
      </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['contributeMode'] == 'direct' && ! $this->_tpl_vars['is_pay_later'] && ! $this->_tpl_vars['isAmountzero'] && ! $this->_tpl_vars['isOnWaitlist'] && ! $this->_tpl_vars['isRequireApproval']): ?>
        <div class="crm-group credit_card-group">
            <div class="header-dark">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Credit Card Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div>
            <div class="crm-section no-label credit_card_details-section">
                <div class="content"><?php echo $this->_tpl_vars['credit_card_type']; ?>
</div>
            <div class="content"><?php echo $this->_tpl_vars['credit_card_number']; ?>
</div>
            <div class="content"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expires<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['credit_card_exp_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 7, '') : smarty_modifier_truncate($_tmp, 7, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</div>
            <div class="clear"></div>
          </div>
        </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['contributeMode'] != 'notify'): ?>     <div class="messages status section continue_message-section">
        <p>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your registration will not be submitted until you click the <strong>Continue</strong> button. Please click the button one time only. If you need to change any details, click the Go Back button below to return to the previous screen.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </p>
    </div>
    <?php endif; ?>

    <div id="crm-submit-buttons" class="crm-submit-buttons">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <?php if ($this->_tpl_vars['event']['confirm_footer_text']): ?>
        <div id="footer_text" class="crm-section event_confirm_footer-section">
            <p><?php echo $this->_tpl_vars['event']['confirm_footer_text']; ?>
</p>
        </div>
    <?php endif; ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHide.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>