<?php /* Smarty version 2.6.27, created on 2017-06-20 14:50:15
         compiled from CRM/UF/Form/Preview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/UF/Form/Preview.tpl', 1, false),array('block', 'ts', 'CRM/UF/Form/Preview.tpl', 27, false),array('modifier', 'truncate', 'CRM/UF/Form/Preview.tpl', 37, false),array('modifier', 'substr', 'CRM/UF/Form/Preview.tpl', 111, false),array('modifier', 'replace', 'CRM/UF/Form/Preview.tpl', 114, false),array('modifier', 'cat', 'CRM/UF/Form/Preview.tpl', 121, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['previewField']): ?>
  <?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Profile Field Preview<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('infoTitle', ob_get_contents());ob_end_clean(); ?>
<?php else: ?>
  <?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Profile Preview<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('infoTitle', ob_get_contents());ob_end_clean(); ?>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/info.tpl", 'smarty_include_vars' => array('infoType' => "no-popup profile-preview-msg",'infoMessage' => ' ')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="crm-form-block">

<?php if (! empty ( $this->_tpl_vars['fields'] )): ?>
  <?php if ($this->_tpl_vars['viewOnly']): ?>
      <div id="crm-container-inner" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']->lcMessages)) ? $this->_run_mod_handler('truncate', true, $_tmp, 2, "", true) : smarty_modifier_truncate($_tmp, 2, "", true)); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']->lcMessages)) ? $this->_run_mod_handler('truncate', true, $_tmp, 2, "", true) : smarty_modifier_truncate($_tmp, 2, "", true)); ?>
">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/CMSUser.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php echo ''; ?><?php if ($this->_tpl_vars['help_pre'] && $this->_tpl_vars['action'] != 4): ?><?php echo '<div class="messages help">'; ?><?php echo $this->_tpl_vars['help_pre']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('zeroField', 'Initial Non Existent Fieldset'); ?><?php echo ''; ?><?php $this->assign('fieldset', $this->_tpl_vars['zeroField']); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['field']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['skipDisplay']): ?><?php echo ''; ?><?php continue; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['groupTitle'] != $this->_tpl_vars['fieldset']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['fieldset'] != $this->_tpl_vars['zeroField']): ?><?php echo '</table>'; ?><?php if ($this->_tpl_vars['groupHelpPost']): ?><?php echo '<div class="messages help">'; ?><?php echo $this->_tpl_vars['groupHelpPost']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['mode'] != 8): ?><?php echo '</fieldset>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['mode'] != 8): ?><?php echo '<h3>'; ?><?php echo $this->_tpl_vars['field']['groupTitle']; ?><?php echo '</h3>'; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('fieldset', ($this->_tpl_vars['field']['groupTitle'])); ?><?php echo ''; ?><?php $this->assign('groupHelpPost', ($this->_tpl_vars['field']['groupHelpPost'])); ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['groupHelpPre']): ?><?php echo '<div class="messages help">'; ?><?php echo $this->_tpl_vars['field']['groupHelpPre']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo '<table class="form-layout-compressed" id="table-1">'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['help_pre'] && $this->_tpl_vars['action'] != 4 && $this->_tpl_vars['field']['field_type'] != 'Formatting'): ?><?php echo '<tr><td>&nbsp;</td><td class="description">'; ?><?php echo $this->_tpl_vars['field']['help_pre']; ?><?php echo '</td></tr>'; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('n', $this->_tpl_vars['field']['name']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['field_type'] == 'Formatting'): ?><?php echo '<tr><td colspan="2">'; ?><?php echo $this->_tpl_vars['field']['help_pre']; ?><?php echo '</td></tr>'; ?><?php elseif ($this->_tpl_vars['field']['options_per_line']): ?><?php echo '<tr><td class="option-label">'; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?><?php echo '</td><td>'; ?><?php $this->assign('count', '1'); ?><?php echo ''; ?><?php echo '<table class="form-layout-compressed"><tr>'; ?><?php echo ''; ?><?php $this->assign('index', '1'); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['form'][$this->_tpl_vars['n']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['outer']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['index'] < 10): ?><?php echo ''; ?><?php $this->assign('index', ($this->_tpl_vars['index']+1)); ?><?php echo ''; ?><?php else: ?><?php echo '<td class="labels font-light">'; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']][$this->_tpl_vars['key']]['html']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['count'] == $this->_tpl_vars['field']['options_per_line']): ?><?php echo '</tr>'; ?><?php $this->assign('count', '1'); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('count', ($this->_tpl_vars['count']+1)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?><?php echo '</td></tr>'; ?><?php else: ?><?php echo '<tr><td class="label">'; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?><?php echo '</td><td>'; ?><?php if ($this->_tpl_vars['n'] == 'group' && $this->_tpl_vars['form']['group'] || ( $this->_tpl_vars['n'] == 'tag' && $this->_tpl_vars['form']['tag'] )): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/TagsAndGroups.tpl", 'smarty_include_vars' => array('type' => $this->_tpl_vars['n'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['n'] == 'email_greeting' || $this->_tpl_vars['n'] == 'postal_greeting' || $this->_tpl_vars['n'] == 'addressee'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Profile/Form/GreetingType.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php elseif (( ((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('substr', true, $_tmp, -5, 5) : substr($_tmp, -5, 5)) == '_date' ) || ( $this->_tpl_vars['field']['name'] == 'activity_date_time' )): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => $this->_tpl_vars['form'][$this->_tpl_vars['n']]['name'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php elseif (((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 5) : substr($_tmp, 0, 5)) == 'phone'): ?><?php echo ''; ?><?php $this->assign('phone_ext_field', ((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'phone', 'phone_ext') : smarty_modifier_replace($_tmp, 'phone', 'phone_ext'))); ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['form'][$this->_tpl_vars['phone_ext_field']]['html']): ?><?php echo '&nbsp;'; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['phone_ext_field']]['html']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 3) : substr($_tmp, 0, 3)) == 'im-'): ?><?php echo ''; ?><?php $this->assign('provider', ((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('cat', true, $_tmp, "-provider_id") : smarty_modifier_cat($_tmp, "-provider_id"))); ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['provider']]['html']; ?><?php echo '&nbsp;'; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['is_view'] == 0): ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['html_type'] == 'Autocomplete-Select'): ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['data_type'] == 'ContactReference'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/ContactReference.tpl", 'smarty_include_vars' => array('element_name' => $this->_tpl_vars['n'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</td></tr>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['help_post'] && $this->_tpl_vars['action'] != 4): ?><?php echo '<tr><td>&nbsp;</td><td class="description">'; ?><?php echo $this->_tpl_vars['field']['help_post']; ?><?php echo '</td></tr>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php if ($this->_tpl_vars['addCAPTCHA']): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/common/ReCAPTCHA.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo '</table>'; ?><?php if ($this->_tpl_vars['field']['groupHelpPost']): ?><?php echo '<div class="messages help">'; ?><?php echo $this->_tpl_vars['field']['groupHelpPost']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?>

    </div>   <?php else: ?>
    <?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This CiviCRM profile field is view only.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('infoMessage', ob_get_contents());ob_end_clean(); ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/info.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>
<?php endif; ?> 
  <div class="crm-submit-buttons">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>