<?php /* Smarty version 2.6.27, created on 2017-06-21 16:27:37
         compiled from CRM/Contact/Form/DedupeFind.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/DedupeFind.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/DedupeFind.tpl', 28, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-dedupe-find-form-block">
<div class="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can search all contacts for duplicates or limit the results for better performance.
      If you limit by group then it will look for matches with that group both inside and outside of the group.
      You can also limit the contacts in the group to be matched by specifying the number of contacts to match. This can be done in conjunction with a group or separately and is recommended for performance reasons.
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
   <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
   <table class="form-layout-compressed">
     <tr class="crm-dedupe-find-form-block-group_id">
       <td class="label"><?php echo $this->_tpl_vars['form']['group_id']['label']; ?>
</td>
       <td><?php echo $this->_tpl_vars['form']['group_id']['html']; ?>
</td>
     </tr>
       <tr class="crm-dedupe-find-form-block-limit">
        <td class="label"><?php echo $this->_tpl_vars['form']['limit']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['limit']['html']; ?>
</td>
       </tr>
   </table>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>