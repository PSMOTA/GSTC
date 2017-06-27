<?php /* Smarty version 2.6.27, created on 2017-06-21 15:18:37
         compiled from CRM/Contribute/Form/ContributionView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/ContributionView.tpl', 1, false),array('block', 'ts', 'CRM/Contribute/Form/ContributionView.tpl', 36, false),array('function', 'crmURL', 'CRM/Contribute/Form/ContributionView.tpl', 35, false),array('function', 'crmScript', 'CRM/Contribute/Form/ContributionView.tpl', 345, false),array('modifier', 'crmMoney', 'CRM/Contribute/Form/ContributionView.tpl', 92, false),array('modifier', 'crmDate', 'CRM/Contribute/Form/ContributionView.tpl', 129, false),array('modifier', 'ts', 'CRM/Contribute/Form/ContributionView.tpl', 171, false),array('modifier', 'truncate', 'CRM/Contribute/Form/ContributionView.tpl', 270, false),array('modifier', 'nl2br', 'CRM/Contribute/Form/ContributionView.tpl', 321, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-content-block crm-contribution-view-form-block">
<div class="action-link">
  <div class="crm-submit-buttons">
    <?php if (( call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'edit contributions' ) && call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , "edit contributions of type ".($this->_tpl_vars['financial_type']) ) && $this->_tpl_vars['canEdit'] ) || ( call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'edit contributions' ) && $this->_tpl_vars['noACL'] )): ?>
      <?php $this->assign('urlParams', "reset=1&id=".($this->_tpl_vars['id'])."&cid=".($this->_tpl_vars['contact_id'])."&action=update&context=".($this->_tpl_vars['context'])); ?>
      <?php if (( $this->_tpl_vars['context'] == 'fulltext' || $this->_tpl_vars['context'] == 'search' ) && $this->_tpl_vars['searchKey']): ?>
        <?php $this->assign('urlParams', "reset=1&id=".($this->_tpl_vars['id'])."&cid=".($this->_tpl_vars['contact_id'])."&action=update&context=".($this->_tpl_vars['context'])."&key=".($this->_tpl_vars['searchKey'])); ?>
      <?php endif; ?>
      <a class="button" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/contribution','q' => $this->_tpl_vars['urlParams']), $this);?>
" accesskey="e"><span>
          <i class="crm-i fa-pencil"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      </a>
    <?php endif; ?>
    <?php if (( call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'delete in CiviContribute' ) && call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , "delete contributions of type ".($this->_tpl_vars['financial_type']) ) && $this->_tpl_vars['canDelete'] ) || ( call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'delete in CiviContribute' ) && $this->_tpl_vars['noACL'] )): ?>
      <?php $this->assign('urlParams', "reset=1&id=".($this->_tpl_vars['id'])."&cid=".($this->_tpl_vars['contact_id'])."&action=delete&context=".($this->_tpl_vars['context'])); ?>
      <?php if (( $this->_tpl_vars['context'] == 'fulltext' || $this->_tpl_vars['context'] == 'search' ) && $this->_tpl_vars['searchKey']): ?>
        <?php $this->assign('urlParams', "reset=1&id=".($this->_tpl_vars['id'])."&cid=".($this->_tpl_vars['contact_id'])."&action=delete&context=".($this->_tpl_vars['context'])."&key=".($this->_tpl_vars['searchKey'])); ?>
      <?php endif; ?>
      <a class="button" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/contribution','q' => $this->_tpl_vars['urlParams']), $this);?>
"><span>
          <i class="crm-i fa-trash"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      </a>
    <?php endif; ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $this->assign('pdfUrlParams', "reset=1&id=".($this->_tpl_vars['id'])."&cid=".($this->_tpl_vars['contact_id'])); ?>
    <?php $this->assign('emailUrlParams', "reset=1&id=".($this->_tpl_vars['id'])."&cid=".($this->_tpl_vars['contact_id'])."&select=email"); ?>
    <?php if ($this->_tpl_vars['invoicing']): ?>
      <div class="css_right">
        <a class="button no-popup" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contribute/invoice','q' => $this->_tpl_vars['pdfUrlParams']), $this);?>
">
          <i class="crm-i fa-print"></i>
        <?php if ($this->_tpl_vars['contribution_status'] != 'Refunded' && $this->_tpl_vars['contribution_status'] != 'Cancelled'): ?>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Print Invoice<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        <?php else: ?>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Print Invoice and Credit Note<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        <?php endif; ?>
        <a class="button" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contribute/invoice/email','q' => $this->_tpl_vars['emailUrlParams']), $this);?>
">
          <i class="crm-i fa-paper-plane"></i>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email Invoice<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
      </div>
    <?php endif; ?>
  </div>
</div>
<table class="crm-info-panel">
  <tr>
    <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>From<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    <td class="bold"><?php echo $this->_tpl_vars['displayName']; ?>
</td>
  </tr>
  <tr>
    <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Financial Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    <td><?php echo $this->_tpl_vars['financial_type']; ?>
<?php if ($this->_tpl_vars['is_test']): ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(test)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php endif; ?></td>
  </tr>
  <?php if ($this->_tpl_vars['displayLineItems']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Page/LineItem.tpl", 'smarty_include_vars' => array('context' => 'Contribution')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php if ($this->_tpl_vars['contribution_recur_id']): ?>
          <strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recurring Contribution<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
          <br/>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Installments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php if ($this->_tpl_vars['recur_installments']): ?><?php echo $this->_tpl_vars['recur_installments']; ?>
<?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(ongoing)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>, <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Interval<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['recur_frequency_interval']; ?>
 <?php echo $this->_tpl_vars['recur_frequency_unit']; ?>
(s)
        <?php endif; ?>
      </td>
    </tr>
  <?php else: ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><strong><a class="nowrap bold crm-expand-row" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view payments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"
        href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/payment','q' => "view=transaction&component=contribution&action=browse&cid=".($this->_tpl_vars['contact_id'])."&id=".($this->_tpl_vars['contribution_id'])."&selector=1"), $this);?>
">
               &nbsp; <?php echo ((is_array($_tmp=$this->_tpl_vars['total_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

            </strong></a>&nbsp;
        <?php if ($this->_tpl_vars['contribution_recur_id']): ?>
          <strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recurring Contribution<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
          <br/>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Installments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php if ($this->_tpl_vars['recur_installments']): ?><?php echo $this->_tpl_vars['recur_installments']; ?>
<?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(ongoing)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>, <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Interval<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['recur_frequency_interval']; ?>
 <?php echo $this->_tpl_vars['recur_frequency_unit']; ?>
(s)
        <?php endif; ?>
      </td>
    </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['invoicing'] && $this->_tpl_vars['tax_amount']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</td>
    </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['non_deductible_amount']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Non-deductible Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['non_deductible_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</td>
    </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['fee_amount']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fee Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['fee_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</td>
    </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['net_amount']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Net Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['net_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</td>
    </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['isDeferred'] && $this->_tpl_vars['revenue_recognition_date']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Revenue Recognition Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['revenue_recognition_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, "%B, %Y") : smarty_modifier_crmDate($_tmp, "%B, %Y")); ?>
</td>
    </tr>
  <?php endif; ?>
  <tr>
    <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Received<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    <td><?php if ($this->_tpl_vars['receive_date']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['receive_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php else: ?>(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>not available<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php endif; ?></td>
  </tr>
  <?php if ($this->_tpl_vars['to_financial_account']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Received Into<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo $this->_tpl_vars['to_financial_account']; ?>
</td>
    </tr>
  <?php endif; ?>
  <tr>
    <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    <td <?php if ($this->_tpl_vars['contribution_status_id'] == 3): ?> class="font-red bold"<?php endif; ?>><?php echo $this->_tpl_vars['contribution_status']; ?>

      <?php if ($this->_tpl_vars['contribution_status_id'] == 2): ?> <?php if ($this->_tpl_vars['is_pay_later']): ?>: <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Pay Later<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php else: ?> : <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Incomplete Transaction<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php endif; ?><?php endif; ?></td>
  </tr>

  <?php if ($this->_tpl_vars['cancel_date']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancelled / Refunded Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['cancel_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</td>
    </tr>
    <?php if ($this->_tpl_vars['cancel_reason']): ?>
      <tr>
        <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancellation / Refund Reason<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <td><?php echo $this->_tpl_vars['cancel_reason']; ?>
</td>
      </tr>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['refund_trxn_id']): ?>
      <tr>
        <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Refund Transaction ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <td><?php echo $this->_tpl_vars['refund_trxn_id']; ?>
</td>
      </tr>
    <?php endif; ?>
  <?php endif; ?>
  <tr>
    <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Payment Method<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    <td><?php echo $this->_tpl_vars['payment_instrument']; ?>
<?php if ($this->_tpl_vars['payment_processor_name']): ?> (<?php echo $this->_tpl_vars['payment_processor_name']; ?>
)<?php endif; ?></td>
  </tr>

  <?php if ($this->_tpl_vars['payment_instrument'] == ((is_array($_tmp='Check')) ? $this->_run_mod_handler('ts', true, $_tmp) : ts($_tmp))): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check Number<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo $this->_tpl_vars['check_number']; ?>
</td>
    </tr>
  <?php endif; ?>
  <tr>
    <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Source<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    <td><?php echo $this->_tpl_vars['source']; ?>
</td>
  </tr>

  <?php if ($this->_tpl_vars['campaign']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Campaign<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo $this->_tpl_vars['campaign']; ?>
</td>
    </tr>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['contribution_page_title']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Online Contribution Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo $this->_tpl_vars['contribution_page_title']; ?>
</td>
    </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['receipt_date']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Receipt Sent<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['receipt_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</td>
    </tr>
  <?php endif; ?>
  <?php $_from = $this->_tpl_vars['note']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rec']):
?>
    <?php if ($this->_tpl_vars['rec']): ?>
      <tr>
        <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Note<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <td><?php echo $this->_tpl_vars['rec']; ?>
</td>
      </tr>
    <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>

  <?php if ($this->_tpl_vars['trxn_id']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo $this->_tpl_vars['trxn_id']; ?>
</td>
    </tr>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['invoice_id']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Invoice ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo $this->_tpl_vars['invoice_id']; ?>
&nbsp;</td>
    </tr>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['thankyou_date']): ?>
    <tr>
      <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Thank-you Sent<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['thankyou_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</td>
    </tr>
  <?php endif; ?>
</table>

<?php if (count ( $this->_tpl_vars['softContributions'] )): ?>   <div class="crm-accordion-wrapper crm-soft-credit-pane">
    <div class="crm-accordion-header">
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Soft Credit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <div class="crm-accordion-body">
      <table class="crm-info-panel crm-soft-credit-listing">
        <?php $_from = $this->_tpl_vars['softContributions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['softCont']):
?>
          <tr>
            <td>
              <a href="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/view",'q' => "reset=1&cid=".($this->_tpl_vars['softCont']['contact_id'])), $this);?>
"
                 title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View contact record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php echo $this->_tpl_vars['softCont']['contact_name']; ?>

              </a>
            </td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['softCont']['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

              <?php if ($this->_tpl_vars['softCont']['soft_credit_type_label']): ?>
                (<?php echo $this->_tpl_vars['softCont']['soft_credit_type_label']; ?>
)
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; endif; unset($_from); ?>
      </table>
    </div>
  </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['premium']): ?>
  <div class="crm-accordion-wrapper ">
    <div class="crm-accordion-header">
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Premium Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <div class="crm-accordion-body">
      <table class="crm-info-panel">
        <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Premium<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <td><?php echo $this->_tpl_vars['premium']; ?>
</td>
        <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Option<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <td><?php echo $this->_tpl_vars['option']; ?>
</td>
        <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fulfilled<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fulfilled'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</td>
      </table>
    </div>
  </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['pcp_id']): ?>
  <div id='PCPView' class="crm-accordion-wrapper ">
    <div class="crm-accordion-header">
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Personal Campaign Page Contribution Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <div class="crm-accordion-body">
      <table class="crm-info-panel">
        <tr>
          <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Personal Campaign Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
          <td><a href="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/pcp/info",'q' => "reset=1&id=".($this->_tpl_vars['pcp_id'])), $this);?>
"><?php echo $this->_tpl_vars['pcp_title']; ?>
</a><br/>
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution was made through this personal campaign page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </td>
        </tr>
        <tr>
          <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Soft Credit To<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
          <td><a href="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/view",'q' => "reset=1&cid=".($this->_tpl_vars['pcp_soft_credit_to_id'])), $this);?>
" id="view_contact"
                 title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View contact record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php echo $this->_tpl_vars['pcp_soft_credit_to_name']; ?>
</a></td>
        </tr>
        <tr>
          <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>In Public Honor Roll?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
          <td><?php if ($this->_tpl_vars['pcp_display_in_roll']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Yes<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></td>
        </tr>
        <?php if ($this->_tpl_vars['pcp_roll_nickname']): ?>
          <tr>
            <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Honor Roll Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
            <td><?php echo $this->_tpl_vars['pcp_roll_nickname']; ?>
</td>
          </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['pcp_personal_note']): ?>
          <tr>
            <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Personal Note<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
            <td><?php echo $this->_tpl_vars['pcp_personal_note']; ?>
</td>
          </tr>
        <?php endif; ?>
      </table>
    </div>
  </div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Page/CustomDataView.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['billing_address']): ?>
  <fieldset>
    <legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billing Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
    <div class="form-item">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['billing_address'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

    </div>
  </fieldset>
<?php endif; ?>

<div class="crm-submit-buttons">
  <?php if (( call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'edit contributions' ) && call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , "edit contributions of type ".($this->_tpl_vars['financial_type']) ) && $this->_tpl_vars['canEdit'] ) || ( call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'edit contributions' ) && $this->_tpl_vars['noACL'] )): ?>
    <?php $this->assign('urlParams', "reset=1&id=".($this->_tpl_vars['id'])."&cid=".($this->_tpl_vars['contact_id'])."&action=update&context=".($this->_tpl_vars['context'])); ?>
    <?php if (( $this->_tpl_vars['context'] == 'fulltext' || $this->_tpl_vars['context'] == 'search' ) && $this->_tpl_vars['searchKey']): ?>
      <?php $this->assign('urlParams', "reset=1&id=".($this->_tpl_vars['id'])."&cid=".($this->_tpl_vars['contact_id'])."&action=update&context=".($this->_tpl_vars['context'])."&key=".($this->_tpl_vars['searchKey'])); ?>
    <?php endif; ?>
    <a class="button" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/contribution','q' => $this->_tpl_vars['urlParams']), $this);?>
" accesskey="e"><span><i class="crm-i fa-pencil"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
  <?php endif; ?>
  <?php if (( call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'delete in CiviContribute' ) && call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , "delete contributions of type ".($this->_tpl_vars['financial_type']) ) && $this->_tpl_vars['canDelete'] ) || ( call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'delete in CiviContribute' ) && $this->_tpl_vars['noACL'] )): ?>
    <?php $this->assign('urlParams', "reset=1&id=".($this->_tpl_vars['id'])."&cid=".($this->_tpl_vars['contact_id'])."&action=delete&context=".($this->_tpl_vars['context'])); ?>
    <?php if (( $this->_tpl_vars['context'] == 'fulltext' || $this->_tpl_vars['context'] == 'search' ) && $this->_tpl_vars['searchKey']): ?>
      <?php $this->assign('urlParams', "reset=1&id=".($this->_tpl_vars['id'])."&cid=".($this->_tpl_vars['contact_id'])."&action=delete&context=".($this->_tpl_vars['context'])."&key=".($this->_tpl_vars['searchKey'])); ?>
    <?php endif; ?>
    <a class="button" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/contribution','q' => $this->_tpl_vars['urlParams']), $this);?>
"><span><i class="crm-i fa-trash"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
  <?php endif; ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</div>
<?php echo smarty_function_crmScript(array('file' => 'js/crm.expandRow.js'), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>