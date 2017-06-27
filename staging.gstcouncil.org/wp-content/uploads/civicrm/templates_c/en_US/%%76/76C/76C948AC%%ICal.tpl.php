<?php /* Smarty version 2.6.27, created on 2017-06-19 23:31:21
         compiled from CRM/Core/Calendar/ICal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Core/Calendar/ICal.tpl', 1, false),array('modifier', 'crmICalText', 'CRM/Core/Calendar/ICal.tpl', 34, false),array('modifier', 'crmICalDate', 'CRM/Core/Calendar/ICal.tpl', 43, false),array('modifier', 'date_format', 'CRM/Core/Calendar/ICal.tpl', 46, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//CiviCRM//NONSGML CiviEvent iCal//EN
X-WR-TIMEZONE:<?php echo $this->_tpl_vars['timezone']; ?>

METHOD:PUBLISH
<?php $_from = $this->_tpl_vars['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['uid'] => $this->_tpl_vars['event']):
?>
BEGIN:VEVENT
UID:<?php echo $this->_tpl_vars['event']['uid']; ?>

SUMMARY:<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['title'])) ? $this->_run_mod_handler('crmICalText', true, $_tmp) : smarty_modifier_crmICalText($_tmp)); ?>

<?php if ($this->_tpl_vars['event']['description']): ?>
DESCRIPTION:<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['description'])) ? $this->_run_mod_handler('crmICalText', true, $_tmp) : smarty_modifier_crmICalText($_tmp)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['event']['event_type']): ?>
CATEGORIES:<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_type'])) ? $this->_run_mod_handler('crmICalText', true, $_tmp) : smarty_modifier_crmICalText($_tmp)); ?>

<?php endif; ?>
CALSCALE:GREGORIAN
<?php if ($this->_tpl_vars['event']['start_date']): ?>
DTSTAMP;VALUE=DATE-TIME:<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['start_date'])) ? $this->_run_mod_handler('crmICalDate', true, $_tmp) : smarty_modifier_crmICalDate($_tmp)); ?>

DTSTART;VALUE=DATE-TIME:<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['start_date'])) ? $this->_run_mod_handler('crmICalDate', true, $_tmp) : smarty_modifier_crmICalDate($_tmp)); ?>

<?php else: ?>
DTSTAMP;VALUE=DATE-TIME:<?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')))) ? $this->_run_mod_handler('crmICalDate', true, $_tmp) : smarty_modifier_crmICalDate($_tmp)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['event']['end_date']): ?>
DTEND;VALUE=DATE-TIME:<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['end_date'])) ? $this->_run_mod_handler('crmICalDate', true, $_tmp) : smarty_modifier_crmICalDate($_tmp)); ?>

<?php else: ?>
DTEND;VALUE=DATE-TIME:<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['start_date'])) ? $this->_run_mod_handler('crmICalDate', true, $_tmp) : smarty_modifier_crmICalDate($_tmp)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['event']['is_show_location'] == 1 && $this->_tpl_vars['event']['location']): ?>
LOCATION:<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['location'])) ? $this->_run_mod_handler('crmICalText', true, $_tmp) : smarty_modifier_crmICalText($_tmp)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['event']['contact_email']): ?>
ORGANIZER:MAILTO:<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['contact_email'])) ? $this->_run_mod_handler('crmICalText', true, $_tmp) : smarty_modifier_crmICalText($_tmp)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['event']['url']): ?>
URL:<?php echo $this->_tpl_vars['event']['url']; ?>

<?php endif; ?>
END:VEVENT
<?php endforeach; endif; unset($_from); ?>
END:VCALENDAR
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>