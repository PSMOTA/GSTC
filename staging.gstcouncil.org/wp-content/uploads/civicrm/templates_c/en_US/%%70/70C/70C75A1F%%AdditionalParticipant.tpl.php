<?php /* Smarty version 2.6.27, created on 2017-06-21 12:36:48
         compiled from CRM/Event/Form/Registration/AdditionalParticipant.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/Registration/AdditionalParticipant.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/Registration/AdditionalParticipant.tpl', 93, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['skipCount']): ?>
    <h3>Skipped Participant(s): <?php echo $this->_tpl_vars['skipCount']; ?>
</h3>
<?php endif; ?>
<?php if ($this->_tpl_vars['action'] & 1024): ?>
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

<?php if ($this->_tpl_vars['statusMessage']): ?>
    <div class="messages status no-popup">
        <p><?php echo $this->_tpl_vars['statusMessage']; ?>
</p>
    </div>
<?php endif; ?>

<div class="crm-public-form-item crm-section custom_pre-section">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['additionalCustomPre'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php if ($this->_tpl_vars['priceSet'] && $this->_tpl_vars['allowGroupOnWaitlist']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Form/ParticipantCount.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div id="waiting-status" style="display:none;" class="messages status no-popup"></div>
    <div class="messages status no-popup" style="width:25%"><span id="event_participant_status"></span></div>
<?php endif; ?>

<div class="crm-event-id-<?php echo $this->_tpl_vars['event']['id']; ?>
 crm-block crm-event-additionalparticipant-form-block">
<?php if ($this->_tpl_vars['priceSet']): ?>
     <fieldset id="priceset" class="crm-public-form-item crm-group priceset-group"><legend><?php echo $this->_tpl_vars['event']['fee_label']; ?>
</legend>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Form/PriceSet.tpl", 'smarty_include_vars' => array('extends' => 'Event')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </fieldset>
<?php else: ?>
    <?php if ($this->_tpl_vars['paidEvent']): ?>
        <table class="form-layout-compressed">
            <tr class="crm-event-additionalparticipant-form-block-amount">
                <td class="label nowrap"><?php echo $this->_tpl_vars['event']['fee_label']; ?>
 <span class="crm-marker">*</span></td>
                <td>&nbsp;</td>
                <td><?php echo $this->_tpl_vars['form']['amount']['html']; ?>
</td>
            </tr>
        </table>
    <?php endif; ?>
<?php endif; ?>

<div class="crm-public-form-item crm-section custom_post-section">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['additionalCustomPost'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<div id="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</div>

<?php if ($this->_tpl_vars['priceSet'] && $this->_tpl_vars['allowGroupOnWaitlist']): ?>
<?php echo '
<script type="text/javascript">

function allowGroupOnWaitlist( participantCount, currentCount )
{
  var formId          = '; ?>
'<?php echo $this->_tpl_vars['formName']; ?>
'<?php echo ';
  var waitingMsg      = '; ?>
'<?php echo $this->_tpl_vars['waitingMsg']; ?>
'<?php echo ';
  var confirmedMsg    = '; ?>
'<?php echo $this->_tpl_vars['confirmedMsg']; ?>
'<?php echo ';
  var paymentBypassed = '; ?>
'<?php echo $this->_tpl_vars['paymentBypassed']; ?>
'<?php echo ';

  var availableRegistrations = '; ?>
<?php echo $this->_tpl_vars['availableRegistrations']; ?>
<?php echo ';
  if ( !participantCount ) participantCount = '; ?>
'<?php echo $this->_tpl_vars['currentParticipantCount']; ?>
'<?php echo ';
  var totalParticipants = parseInt(participantCount) + parseInt(currentCount);

  var seatStatistics = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('1' => "' + totalParticipants + '")); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Participants : %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\' + \'<br />\' + \''; ?>
<?php $this->_tag_stack[] = array('ts', array('1' => "' + availableRegistrations + '")); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Availability : %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\';
  cj("#event_participant_status").html( seatStatistics );

  if ( !'; ?>
'<?php echo $this->_tpl_vars['lastParticipant']; ?>
'<?php echo ' ) return;

  if ( totalParticipants > availableRegistrations ) {

    cj(\'#waiting-status\').show( ).html(waitingMsg);

    if ( paymentBypassed ) {
      cj(\'input[name=_qf_Participant_\'+ formId +\'_next]\').parent( ).show( );
      cj(\'input[name=_qf_Participant_\'+ formId +\'_next_skip]\').parent( ).show( );
    }
  } else {
    if ( paymentBypassed ) {
      confirmedMsg += \'<br /> \' + paymentBypassed;
    }
    cj(\'#waiting-status\').show( ).html(confirmedMsg);

    if ( paymentBypassed ) {
      cj(\'input[name=_qf_Participant_\'+ formId +\'_next]\').parent( ).hide( );
      cj(\'input[name=_qf_Participant_\'+ formId +\'_next_skip]\').parent( ).hide( );
    }
  }
}

</script>
'; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>