<?php /* Smarty version 2.6.27, created on 2017-06-20 14:47:25
         compiled from CRM/UF/Form/Group.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/UF/Form/Group.tpl', 1, false),array('block', 'ts', 'CRM/UF/Form/Group.tpl', 28, false),array('function', 'crmURL', 'CRM/UF/Form/Group.tpl', 37, false),array('function', 'help', 'CRM/UF/Form/Group.tpl', 54, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['action'] == 8): ?>
 <h3> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete CiviCRM Profile<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> - <?php echo $this->_tpl_vars['profileTitle']; ?>
</h3>
<?php endif; ?>
<div class=" crm-block crm-form-block crm-uf_group-form-block">
<?php if ($this->_tpl_vars['action'] != 8): ?>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<?php endif; ?>
<?php if (( $this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 4 ) && $this->_tpl_vars['snippet'] != 'json'): ?>     <div class="action-link">
  <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/uf/group/field','q' => "action=browse&reset=1&gid=".($this->_tpl_vars['gid'])), $this);?>
" class="button"><span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View or Edit Fields for this Profile<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></span>
  <div class="clear"></div>
    </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['action'] == 8 || $this->_tpl_vars['action'] == 64): ?>
    <div class="messages status no-popup">
           <div class="icon inform-icon"></div>
           <?php echo $this->_tpl_vars['message']; ?>

    </div>
<?php else: ?>
    <table class="form-layout">
        <tr class="crm-uf_group-form-block-title">
            <td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_uf_group','field' => 'title','id' => $this->_tpl_vars['gid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['title']['html']; ?>
</td>
        </tr>
        <tr class="crm-uf_group-form-block-description">
            <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-description','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
        </tr>
        <tr class="crm-uf_group-form-block-uf_group_type">
            <td class="label"><?php echo $this->_tpl_vars['form']['uf_group_type']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-used_for','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['uf_group_type']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['otherModuleString']; ?>
</td>
        </tr>
        <tr class="crm-uf_group-form-block-weight" >
            <td class="label"><?php echo $this->_tpl_vars['form']['weight']['label']; ?>
<?php if ($this->_tpl_vars['config']->userSystem->is_drupal == '1'): ?> <?php echo smarty_function_help(array('id' => 'id-profile_weight','file' => "CRM/UF/Form/Group.hlp"), $this);?>
<?php endif; ?></td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['weight']['html']; ?>
</td>
        </tr>
        <tr class="crm-uf_group-form-block-help_pre" >
            <td class="label"><?php echo $this->_tpl_vars['form']['help_pre']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-help_pre','file' => "CRM/UF/Form/Group.hlp"), $this);?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_uf_group','field' => 'help_pre','id' => $this->_tpl_vars['gid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['help_pre']['html']; ?>
</td>
        </tr>
        <tr class="crm-uf_group-form-block-help_post" >
            <td class="label"><?php echo $this->_tpl_vars['form']['help_post']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-help_post','file' => "CRM/UF/Form/Group.hlp"), $this);?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_uf_group','field' => 'help_post','id' => $this->_tpl_vars['gid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['help_post']['html']; ?>
</td>
        </tr>
        <tr class="crm-uf_group-form-block-is_active" >
            <td class="label"></td><td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
        </tr>
    </table>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/UF/Form/AdvanceSetting.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHide.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>