<?php /* Smarty version 2.6.27, created on 2017-06-19 22:15:07
         compiled from CRM/Event/Form/ManageEvent/Tab.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/ManageEvent/Tab.tpl', 1, false),array('block', 'crmButton', 'CRM/Event/Form/ManageEvent/Tab.tpl', 31, false),array('block', 'ts', 'CRM/Event/Form/ManageEvent/Tab.tpl', 31, false),array('function', 'crmURL', 'CRM/Event/Form/ManageEvent/Tab.tpl', 35, false),array('function', 'help', 'CRM/Event/Form/ManageEvent/Tab.tpl', 67, false),array('modifier', 'replace', 'CRM/Event/Form/ManageEvent/Tab.tpl', 52, false),array('modifier', 'json_encode', 'CRM/Event/Form/ManageEvent/Tab.tpl', 99, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (! $this->_tpl_vars['isTemplate']): ?>
    <div class="crm-actions-ribbon crm-event-manage-tab-actions-ribbon">
      <ul id="actions">
      <li><div id="crm-event-links-wrapper">
            <?php $this->_tag_stack[] = array('crmButton', array('id' => "crm-event-links-link",'href' => "#",'icon' => 'bars')); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Links<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <div class="ac_results" id="crm-event-links-list">
                 <div class="crm-event-links-list-inner">
                   <ul>
                    <li><a class="crm-event-participant" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/participant/add','q' => "reset=1&action=add&context=standalone&eid=".($this->_tpl_vars['id'])), $this);?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Register Participant<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
                       <li><a class="crm-event-info" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/info','q' => "reset=1&id=".($this->_tpl_vars['id']),'fe' => 'true'), $this);?>
" target="_blank"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Info<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
                    <?php if ($this->_tpl_vars['isOnlineRegistration']): ?>
                        <li><a class="crm-event-test" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/register','q' => "reset=1&action=preview&id=".($this->_tpl_vars['id'])), $this);?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Online Registration (Test-drive)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
                               <li><a class="crm-event-live" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/register','q' => "reset=1&id=".($this->_tpl_vars['id']),'fe' => 'true'), $this);?>
" target="_blank"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Online Registration (Live)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
                    <?php endif; ?>
                </ul>
                 </div>
            </div>
        </div></li>

      <li><div id="crm-participant-wrapper">
            <?php $this->_tag_stack[] = array('crmButton', array('id' => "crm-participant-link",'href' => "#",'icon' => 'bars')); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <div class="ac_results" id="crm-participant-list">
                 <div class="crm-participant-list-inner">
                   <ul>
              <?php if ($this->_tpl_vars['findParticipants']['statusCounted']): ?>
                <li><a class="crm-participant-counted" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/search','q' => "reset=1&force=1&event=".($this->_tpl_vars['id'])."&status=true"), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['findParticipants']['statusCounted'])) ? $this->_run_mod_handler('replace', true, $_tmp, '/', ', ') : smarty_modifier_replace($_tmp, '/', ', ')); ?>
</a></li>
              <?php endif; ?>
                    <?php if ($this->_tpl_vars['findParticipants']['statusNotCounted']): ?>
                <li><a class="crm-participant-not-counted" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/search','q' => "reset=1&force=1&event=".($this->_tpl_vars['id'])."&status=false"), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['findParticipants']['statusNotCounted'])) ? $this->_run_mod_handler('replace', true, $_tmp, '/', ', ') : smarty_modifier_replace($_tmp, '/', ', ')); ?>
</a>
            </li>
              <?php endif; ?>
                    <?php if ($this->_tpl_vars['participantListingURL']): ?>
                <li><a class="crm-participant-listing" href="<?php echo $this->_tpl_vars['participantListingURL']; ?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Public Participant Listing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
              <?php endif; ?>
                </ul>
                 </div>
            </div>
        </div></li>

      <li><div>
          <?php echo smarty_function_help(array('id' => "id-configure-events",'isTemplate' => $this->_tpl_vars['isTemplate'],'participantListingURL' => $this->_tpl_vars['participantListingURL'],'isOnlineRegistration' => $this->_tpl_vars['isOnlineRegistration'],'eventId' => $this->_tpl_vars['id']), $this);?>

      </div></li>
      </ul>
      <div class="clear"></div>
    </div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/TabHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script>
CRM.$(function($) {
  $(\'body\').click(function() {
    $(\'#crm-event-links-list, #crm-participant-list\').hide();
  });

  $(\'#crm-event-links-link\').click(function(event) {
    $(\'#crm-event-links-list\').toggle();
    $(\'#crm-participant-list\').hide();
    event.stopPropagation();
    return false;
  });

  $(\'#crm-participant-link\').click(function(event) {
    $(\'#crm-participant-list\').toggle();
    $(\'#crm-event-links-list\').hide();
    event.stopPropagation();
    return false;
  });

  // Update title dynamically
  $(\'h1\').each(function() {
    var title = '; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
<?php echo ';
    $(this).html($(this).html().replace(title, \'<span id="crm-event-name-page-title">\' + title + \'</span>\'));
  });
  $(\'#crm-main-content-wrapper\').on(\'keyup change\', \'input#title\', function() {
    $(\'#crm-event-name-page-title\').text($(this).val());
  });

});
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/ManageEvent/ConfirmRepeatMode.tpl", 'smarty_include_vars' => array('entityID' => $this->_tpl_vars['id'],'entityTable' => 'civicrm_event')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>