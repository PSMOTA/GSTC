<?php /* Smarty version 2.6.27, created on 2017-06-19 19:28:28
         compiled from CRM/Admin/Form/Setting/UF.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Form/Setting/UF.tpl', 1, false),array('block', 'ts', 'CRM/Admin/Form/Setting/UF.tpl', 28, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-uf-form-block">
<div class="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>These settings define the CMS variables that are used with CiviCRM.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
      <table class="form-layout-compressed">
         <tr class="crm-uf-form-block-userFrameworkUsersTableName">
            <td class="label"><?php echo $this->_tpl_vars['form']['userFrameworkUsersTableName']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['userFrameworkUsersTableName']['html']; ?>
</td>
        </tr>
        <?php if ($this->_tpl_vars['form']['wpBasePage']): ?>
         <tr class="crm-uf-form-block-wpBasePage">
            <td class="label"><?php echo $this->_tpl_vars['form']['wpBasePage']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['config']->userFrameworkBaseURL; ?>
<?php echo $this->_tpl_vars['form']['wpBasePage']['html']; ?>

            <p class="description"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['config']->userFrameworkBaseURL)); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>By default, CiviCRM will generate front-facing pages using the home page at %1 as its base. If you want to use a different template for CiviCRM pages, set the path here.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
            </td>
        </tr>
        <?php endif; ?>
        </table>
            <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<div class="spacer"></div>
<?php if ($this->_tpl_vars['tablePrefixes']): ?>
<div class="form-item">
<fieldset>
    <legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Views integration settings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
    <div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>To enable CiviCRM Views integration, add the following to the site <code>settings.php</code> file:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    <pre><?php echo $this->_tpl_vars['tablePrefixes']; ?>
</pre>
</fieldset>
</div>
<?php endif; ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>