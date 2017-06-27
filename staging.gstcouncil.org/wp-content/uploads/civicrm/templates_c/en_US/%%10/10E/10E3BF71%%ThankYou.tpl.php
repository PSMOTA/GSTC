<?php /* Smarty version 2.6.27, created on 2017-06-21 00:02:43
         compiled from CRM/Event/Form/Registration/ThankYou.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/Registration/ThankYou.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/Registration/ThankYou.tpl', 59, false),array('modifier', 'crmMoney', 'CRM/Event/Form/Registration/ThankYou.tpl', 107, false),array('modifier', 'crmDate', 'CRM/Event/Form/Registration/ThankYou.tpl', 132, false),array('modifier', 'nl2br', 'CRM/Event/Form/Registration/ThankYou.tpl', 185, false),array('modifier', 'truncate', 'CRM/Event/Form/Registration/ThankYou.tpl', 199, false),array('function', 'crmURL', 'CRM/Event/Form/Registration/ThankYou.tpl', 212, false),)), $this); ?>
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
 crm-block crm-event-thankyou-form-block">
        <?php if ($this->_tpl_vars['event']['thankyou_text'] && ( ! $this->_tpl_vars['isOnWaitlist'] && ! $this->_tpl_vars['isRequireApproval'] )): ?>
        <div id="intro_text" class="crm-section event_thankyou_text-section">
            <p>
            <?php echo $this->_tpl_vars['event']['thankyou_text']; ?>

            </p>
        </div>
    <?php endif; ?>

        <?php if ($this->_tpl_vars['friendText']): ?>
        <div id="tell-a-friend" class="crm-section tell_friend_link-section">
            <a href="<?php echo $this->_tpl_vars['friendURL']; ?>
" title="<?php echo $this->_tpl_vars['friendText']; ?>
" class="button"><span>&raquo; <?php echo $this->_tpl_vars['friendText']; ?>
</span></a>
       </div><br /><br />
    <?php endif; ?>

        <?php if ($this->_tpl_vars['pcpLink']): ?>
      <div class="crm-section create_pcp_link-section">
            <a href="<?php echo $this->_tpl_vars['pcpLink']; ?>
" title="<?php echo $this->_tpl_vars['pcpLinkText']; ?>
" class="button"><span>&raquo; <?php echo $this->_tpl_vars['pcpLinkText']; ?>
</span></a>
        </div><br /><br />
    <?php endif; ?>

    <div class="help">
        <?php if ($this->_tpl_vars['isOnWaitlist']): ?>
            <p>
                <span class="bold"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You have been added to the WAIT LIST for this event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If space becomes available you will receive an email with a link to a web page where you can complete your registration.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
             </p>
        <?php elseif ($this->_tpl_vars['isRequireApproval']): ?>
            <p>
                <span class="bold"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your registration has been submitted.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </p>
        <?php elseif ($this->_tpl_vars['is_pay_later'] && $this->_tpl_vars['paidEvent'] && ! $this->_tpl_vars['isAmountzero']): ?>
            <div class="bold"><?php echo $this->_tpl_vars['pay_later_receipt']; ?>
</div>
            <?php if ($this->_tpl_vars['is_email_confirm']): ?>
                <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['email'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>An email with event details has been sent to %1.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
            <?php endif; ?>
                <?php elseif ($this->_tpl_vars['contributeMode'] == 'notify' && $this->_tpl_vars['paidEvent']): ?>
            <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['paymentProcessor']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your registration payment has been submitted to %1 for processing. Please print this page for your records.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
            <?php if ($this->_tpl_vars['is_email_confirm']): ?>
                <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['email'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>A registration confirmation email will be sent to %1 once the transaction is processed successfully.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
            <?php endif; ?>
        <?php else: ?>
            <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your registration has been processed successfully. Please print this page for your records.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
            <?php if ($this->_tpl_vars['is_email_confirm']): ?>
                <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['email'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>A registration confirmation email has also been sent to %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="spacer"></div>

    <div class="crm-group event_info-group">
        <div class="header-dark">
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="display-block">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/Registration/EventInfoBlock.tpl", 'smarty_include_vars' => array('context' => 'ThankYou')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    </div>

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
            <?php elseif ($this->_tpl_vars['amount'] || $this->_tpl_vars['amount'] == 0): ?>
              <div class="crm-section no-label amount-item-section">
                    <?php $_from = $this->_tpl_vars['finalAmount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
                  <div class="content bold"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</div>
                  <div class="clear"></div>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['totalAmount']): ?>
                 <div class="crm-section no-label total-amount-section">
                    <div class="content bold"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['totalAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</div>
                    <div class="clear"></div>
                  </div>

                    <?php if ($this->_tpl_vars['hookDiscount']['message']): ?>
                        <div class="crm-section hookDiscount-section">
                            <em>(<?php echo $this->_tpl_vars['hookDiscount']['message']; ?>
)</em>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['receive_date']): ?>
                <div class="crm-section no-label receive_date-section">
                    <div class="content bold"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['receive_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</div>
                  <div class="clear"></div>
                </div>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['contributeMode'] != 'notify' && $this->_tpl_vars['trxn_id']): ?>
                <div class="crm-section no-label trxn_id-section">
                    <div class="content bold"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction #<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['trxn_id']; ?>
</div>
                <div class="clear"></div>
              </div>
            <?php endif; ?>
        </div>

    <?php elseif ($this->_tpl_vars['participantInfo']): ?>
        <div class="crm-group participantInfo-group">
            <div class="header-dark">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Additional Participant Email(s)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div>
            <div class="crm-section no-label participant_info-section">
                <div class="content">
                    <?php $_from = $this->_tpl_vars['participantInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['false'] => $this->_tpl_vars['mail']):
?>
                        <strong><?php echo $this->_tpl_vars['mail']; ?>
</strong><br />
                    <?php endforeach; endif; unset($_from); ?>
                </div>
            <div class="clear"></div>
          </div>
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

    <?php if ($this->_tpl_vars['contributeMode'] == 'direct' && $this->_tpl_vars['paidEvent'] && ! $this->_tpl_vars['is_pay_later'] && ! $this->_tpl_vars['isAmountzero'] && ! $this->_tpl_vars['isOnWaitlist'] && ! $this->_tpl_vars['isRequireApproval']): ?>
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

    <?php if ($this->_tpl_vars['event']['thankyou_footer_text']): ?>
        <div id="footer_text" class="crm-section event_thankyou_footer-section">
            <p><?php echo $this->_tpl_vars['event']['thankyou_footer_text']; ?>
</p>
        </div>
    <?php endif; ?>

    <div class="action-link section event_info_link-section">
        <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/info','q' => "reset=1&id=".($this->_tpl_vars['event']['id'])), $this);?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['event']['event_title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Back to "%1" event information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    </div>

    <?php if ($this->_tpl_vars['event']['is_public']): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Page/iCalLinks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['event']['is_share']): ?>
    <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/info','q' => "id=".($this->_tpl_vars['event']['id'])."&amp;reset=1",'a' => 1,'fe' => 1,'h' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('eventUrl', ob_get_contents());ob_end_clean(); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/SocialNetwork.tpl", 'smarty_include_vars' => array('url' => $this->_tpl_vars['eventUrl'],'title' => $this->_tpl_vars['event']['title'],'pageURL' => $this->_tpl_vars['eventUrl'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>