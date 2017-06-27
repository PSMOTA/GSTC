<?php /* Smarty version 2.6.27, created on 2017-06-19 22:14:24
         compiled from CRM/Event/Form/Registration/Register.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/Registration/Register.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/Registration/Register.tpl', 49, false),array('function', 'crmURL', 'CRM/Event/Form/Registration/Register.tpl', 50, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>  <?php if ($this->_tpl_vars['action'] & 1024): ?>
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
 crm-block crm-event-register-form-block">

        <?php if ($this->_tpl_vars['requireApprovalMsg'] || $this->_tpl_vars['waitlistMsg']): ?>
      <div id="id-waitlist-approval-msg" class="messages status no-popup">
        <?php if ($this->_tpl_vars['requireApprovalMsg']): ?>
          <div id="id-req-approval-msg"><?php echo $this->_tpl_vars['requireApprovalMsg']; ?>
</div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['waitlistMsg']): ?>
          <div id="id-waitlist-msg"><?php echo $this->_tpl_vars['waitlistMsg']; ?>
</div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['contact_id']): ?>
      <div class="messages status no-popup crm-not-you-message" id="crm-event-register-different">
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['display_name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Welcome %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>. (<a
          href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/register','q' => "cid=0&reset=1&id=".($this->_tpl_vars['event']['id'])), $this);?>
"
          title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click here to register a different person for this event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['display_name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Not %1, or want to register a different person<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>?)
      </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['event']['intro_text']): ?>
      <div id="intro_text" class="crm-public-form-item crm-section intro_text-section">
        <p><?php echo $this->_tpl_vars['event']['intro_text']; ?>
</p>
      </div>
    <?php endif; ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/cidzero.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php if ($this->_tpl_vars['pcpSupporterText']): ?>
      <div class="crm-public-form-item crm-section pcpSupporterText-section">
        <div class="content"><?php echo $this->_tpl_vars['pcpSupporterText']; ?>
</div>
      </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['form']['additional_participants']['html']): ?>
      <div class="crm-public-form-item crm-section additional_participants-section" id="noOfparticipants">
        <div class="label"><?php echo $this->_tpl_vars['form']['additional_participants']['label']; ?>
 <span class="crm-marker" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This field is required.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">*</span></div>
        <div class="content">
          <?php echo $this->_tpl_vars['form']['additional_participants']['html']; ?>
<?php if ($this->_tpl_vars['contact_id'] || $this->_tpl_vars['contact_id'] == NULL): ?> &nbsp; (<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>including yourself<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php endif; ?>
          <br/>
          <span
            class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fill in your registration information on this page. If you are registering additional people, you will be able to enter their registration information after you complete this page and click &quot;Continue&quot;.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </div>
        <div class="clear"></div>
      </div>
    <?php endif; ?>

    <div class="crm-public-form-item crm-section cms_user-section">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/CMSUser.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <div class="crm-public-form-item crm-section custom_pre-section">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['customPre'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <?php if ($this->_tpl_vars['priceSet']): ?>
      <?php if (! $this->_tpl_vars['quickConfig']): ?><fieldset id="priceset" class="crm-public-form-item crm-group priceset-group">
        <legend><?php echo $this->_tpl_vars['event']['fee_label']; ?>
</legend><?php endif; ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Form/PriceSet.tpl", 'smarty_include_vars' => array('extends' => 'Event')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Form/ParticipantCount.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php if (! $this->_tpl_vars['quickConfig']): ?></fieldset><?php endif; ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['pcp'] && $this->_tpl_vars['is_honor_roll']): ?>
      <fieldset class="crm-public-form-item crm-group pcp-group">
        <div class="crm-public-form-item crm-section pcp-section">
          <div class="crm-public-form-item crm-section display_in_roll-section">
            <div class="content">
              <?php echo $this->_tpl_vars['form']['pcp_display_in_roll']['html']; ?>
 &nbsp;
              <?php echo $this->_tpl_vars['form']['pcp_display_in_roll']['label']; ?>

            </div>
            <div class="clear"></div>
          </div>
          <div id="nameID" class="crm-public-form-item crm-section is_anonymous-section">
            <div class="content">
              <?php echo $this->_tpl_vars['form']['pcp_is_anonymous']['html']; ?>

            </div>
            <div class="clear"></div>
          </div>
          <div id="nickID" class="crm-public-form-item crm-section pcp_roll_nickname-section">
            <div class="label"><?php echo $this->_tpl_vars['form']['pcp_roll_nickname']['label']; ?>
</div>
            <div class="content"><?php echo $this->_tpl_vars['form']['pcp_roll_nickname']['html']; ?>

              <div
                class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter the name you want listed with this contribution. You can use a nick name like 'The Jones Family' or 'Sarah and Sam'.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
            </div>
            <div class="clear"></div>
          </div>
          <div id="personalNoteID" class="crm-public-form-item crm-section pcp_personal_note-section">
            <div class="label"><?php echo $this->_tpl_vars['form']['pcp_personal_note']['label']; ?>
</div>
            <div class="content">
              <?php echo $this->_tpl_vars['form']['pcp_personal_note']['html']; ?>

              <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter a message to accompany this contribution.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </fieldset>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['form']['payment_processor_id']['label']): ?>
      <fieldset class="crm-public-form-item crm-group payment_options-group" style="display:none;">
        <legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Payment Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
        <div class="crm-section payment_processor-section">
          <div class="label"><?php echo $this->_tpl_vars['form']['payment_processor_id']['label']; ?>
</div>
          <div class="content"><?php echo $this->_tpl_vars['form']['payment_processor_id']['html']; ?>
</div>
          <div class="clear"></div>
        </div>
      </fieldset>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['priceSet']): ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/BillingBlockWrapper.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <div class="crm-public-form-item crm-section custom_pre-section">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['customPost'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <?php if ($this->_tpl_vars['isCaptcha']): ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/common/ReCAPTCHA.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <div id="crm-submit-buttons" class="crm-submit-buttons">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <?php if ($this->_tpl_vars['event']['footer_text']): ?>
      <div id="footer_text" class="crm-public-form-item crm-section event_footer_text-section">
        <p><?php echo $this->_tpl_vars['event']['footer_text']; ?>
</p>
      </div>
    <?php endif; ?>
  </div>
  <script type="text/javascript">
    <?php echo '

    cj("#additional_participants").change(function () {
      skipPaymentMethod();
    });

  '; ?>

  <?php if ($this->_tpl_vars['pcp'] && $this->_tpl_vars['is_honor_roll']): ?>
    pcpAnonymous();
  <?php endif; ?>
  <?php echo '

  function allowParticipant() {
    '; ?>
<?php if ($this->_tpl_vars['allowGroupOnWaitlist']): ?><?php echo '
    var additionalParticipants = cj(\'#additional_participants\').val();
    var pricesetParticipantCount = 0;
    '; ?>
<?php if ($this->_tpl_vars['priceSet']): ?><?php echo '
    pricesetParticipantCount = pPartiCount;
    '; ?>
<?php endif; ?><?php echo '

    allowGroupOnWaitlist(additionalParticipants, pricesetParticipantCount);
    '; ?>
<?php endif; ?><?php echo '
  }

  '; ?>
<?php if ($this->_tpl_vars['allowGroupOnWaitlist']): ?><?php echo '
  allowGroupOnWaitlist(0, 0);
  '; ?>
<?php endif; ?><?php echo '

  function allowGroupOnWaitlist(additionalParticipants, pricesetParticipantCount) {
    '; ?>
<?php if ($this->_tpl_vars['isAdditionalParticipants']): ?><?php echo '
    if (!additionalParticipants) {
      additionalParticipants = cj(\'#additional_participants\').val();
    }
    '; ?>
<?php else: ?><?php echo '
    additionalParticipants = 0;
    '; ?>
<?php endif; ?><?php echo '

    additionalParticipants = parseInt(additionalParticipants);
    if (!additionalParticipants) {
      additionalParticipants = 0;
    }

    var availableRegistrations = '; ?>
'<?php echo $this->_tpl_vars['availableRegistrations']; ?>
'<?php echo ';
    var totalParticipants = parseInt(additionalParticipants) + 1;

    if (pricesetParticipantCount) {
      // add priceset count if any
      totalParticipants += parseInt(pricesetParticipantCount) - 1;
    }
    var isrequireApproval = '; ?>
'<?php echo $this->_tpl_vars['requireApprovalMsg']; ?>
'<?php echo ';

    if (totalParticipants > availableRegistrations) {
      cj("#id-waitlist-msg").show();
      cj("#id-waitlist-approval-msg").show();

      //set the value for hidden bypass payment.
      cj("#bypass_payment").val(1);
    }
    else {
      if (isrequireApproval) {
        cj("#id-waitlist-approval-msg").show();
        cj("#id-waitlist-msg").hide();
        cj("#bypass_payment").val(1);
      }
      else {
        cj("#id-waitlist-approval-msg").hide();
        cj("#bypass_payment").val(0);
      }
      //reset value since user don\'t want or not eligible for waitlist
      skipPaymentMethod();
    }
  }

  '; ?>

  <?php if ($this->_tpl_vars['pcp'] && $this->_tpl_vars['is_honor_roll']): ?><?php echo '
  function pcpAnonymous() {
    // clear nickname field if anonymous is true
    if (document.getElementsByName("pcp_is_anonymous")[1].checked) {
      document.getElementById(\'pcp_roll_nickname\').value = \'\';
    }
    if (!document.getElementsByName("pcp_display_in_roll")[0].checked) {
      cj(\'#nickID, #nameID, #personalNoteID\').hide();
    }
    else {
      if (document.getElementsByName("pcp_is_anonymous")[0].checked) {
        cj(\'#nameID, #nickID, #personalNoteID\').show();
      }
      else {
        cj(\'#nameID\').show();
        cj(\'#nickID, #personalNoteID\').hide();
      }
    }
  }
  '; ?>

  <?php endif; ?>
  <?php echo '

</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>