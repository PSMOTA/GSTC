<?php /* Smarty version 2.6.27, created on 2017-06-26 09:07:17
         compiled from CRM/Financial/Form/FinancialType.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Financial/Form/FinancialType.tpl', 1, false),array('block', 'ts', 'CRM/Financial/Form/FinancialType.tpl', 31, false),array('function', 'crmURL', 'CRM/Financial/Form/FinancialType.tpl', 65, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-financial_type-form-block">
   <?php if ($this->_tpl_vars['action'] == 8): ?>
      <div class="messages status">
          <div class="icon inform-icon"></div>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: You cannot delete a financial type if it is currently used by any Contributions, Contribution Pages or Membership Types. Consider disabling this option instead.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Deleting a financial type cannot be undone.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
   <?php else: ?>
     <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
     <table class="form-layout">
      <tr class="crm-contribution-form-block-name">
     <td class="label"><?php echo $this->_tpl_vars['form']['name']['label']; ?>
</td>
    <td class="html-adjust"><?php echo $this->_tpl_vars['form']['name']['html']; ?>
</td>
       </tr>
       <tr class="crm-contribution-form-block-description">
        <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
</td>
    <td class="html-adjust"><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
       </tr>

       <tr class="crm-contribution-form-block-is_deductible">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_deductible']['label']; ?>
</td>
    <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_deductible']['html']; ?>
<br />
        <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are contributions of this type tax-deductible?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
    </td>
       </tr>
       <tr class="crm-contribution-form-block-is_active">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
    <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
</td>
       </tr>
      <tr class="crm-contribution-form-block-is_reserved">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_reserved']['label']; ?>
</td>
    <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_reserved']['html']; ?>
</td>
       </tr>

      </table>
   <?php endif; ?>
   <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'botttom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
   <?php if ($this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 4): ?>     <div class="crm-submit-buttons">
       <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/financial/financialType/accounts','q' => "action=browse&reset=1&aid=".($this->_tpl_vars['aid'])), $this);?>
" class="button"><span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View or Edit Financial Accounts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></span>
    </div>
   <?php endif; ?>
</div>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>