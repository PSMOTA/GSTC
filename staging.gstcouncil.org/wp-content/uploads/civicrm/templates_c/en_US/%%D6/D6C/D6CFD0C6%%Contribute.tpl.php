<?php /* Smarty version 2.6.27, created on 2017-06-26 08:31:20
         compiled from CRM/Admin/Form/Preferences/Contribute.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Form/Preferences/Contribute.tpl', 1, false),array('block', 'ts', 'CRM/Admin/Form/Preferences/Contribute.tpl', 51, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/basicForm.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      showHideElement(\'deferred_revenue_enabled\', \'default_invoice_page\');
      $("#deferred_revenue_enabled").click(function() {
        showHideElement(\'deferred_revenue_enabled\', \'default_invoice_page\');
      });
      showHideElement(\'financial_account_bal_enable\', \'fiscalYearStart\');
      $("#financial_account_bal_enable").click(function() {
        showHideElement(\'financial_account_bal_enable\', \'fiscalYearStart\');
      });
      function showHideElement(checkEle, toHide) {
        if ($(\'#\' + checkEle).prop(\'checked\')) {
          $("tr.crm-preferences-form-block-" + toHide).show();
        }
        else {
          $("tr.crm-preferences-form-block-" + toHide).hide();
        }
      }
      $(\'input[name=_qf_Contribute_next]\').on(\'click\', checkPeriod);
      function checkPeriod() {
        var speriod = $(\'#prior_financial_period\').val();
      	var hperiod = \''; ?>
<?php echo $this->_tpl_vars['priorFinancialPeriod']; ?>
<?php echo '\';
      	if (((hperiod && speriod == \'\') || (hperiod && speriod != \'\')) && (speriod != hperiod)) {
	  var msg = \''; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Changing the Prior Financial Period may result in problems calculating closing account balances accurately and / or exporting of financial transactions. Do you want to proceed?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\';
          return confirm(msg);
        }
      }
    });
  </script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>