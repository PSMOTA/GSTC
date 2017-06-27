<?php /* Smarty version 2.6.27, created on 2017-06-26 09:54:03
         compiled from CRM/Contribute/Form/ContributionPage/Amount.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/ContributionPage/Amount.tpl', 1, false),array('block', 'crmRegion', 'CRM/Contribute/Form/ContributionPage/Amount.tpl', 27, false),array('block', 'ts', 'CRM/Contribute/Form/ContributionPage/Amount.tpl', 30, false),array('function', 'crmURL', 'CRM/Contribute/Form/ContributionPage/Amount.tpl', 26, false),array('function', 'docURL', 'CRM/Contribute/Form/ContributionPage/Amount.tpl', 30, false),array('modifier', 'crmAddClass', 'CRM/Contribute/Form/ContributionPage/Amount.tpl', 63, false),array('modifier', 'crmMoney', 'CRM/Contribute/Form/ContributionPage/Amount.tpl', 196, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/price','q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('adminPriceSets', ob_get_contents());ob_end_clean(); ?>
<?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribute-form-contributionpage-amount-main")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="crm-block crm-form-block crm-contribution-contributionpage-amount-form-block">
<div class="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use this form to configure Contribution Amount options. You can give contributors the ability to enter their own contribution amounts - and/or provide a fixed list of amounts. For fixed amounts, you can enter a label for each 'level' of contribution (e.g. Friend, Sustainer, etc.). If you allow people to enter their own dollar amounts, you can also set minimum and maximum values. Depending on your choice of Payment Processor, you may be able to offer a recurring contribution option.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_docURL(array('page' => "user/contributions/payment-processors"), $this);?>

</div>
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <?php if (! $this->_tpl_vars['paymentProcessor']): ?>
        <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/paymentProcessor','q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ppUrl', ob_get_contents());ob_end_clean(); ?>
        <div class="status message">
            <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['ppUrl'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No Payment Processor has been configured / enabled for your site. Unless you are only using CiviContribute to solicit non-monetary / in-kind contributions, you will need to <a href='%1'>configure a Payment Processor</a>. Then return to this screen and assign the processor to this Contribution Page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_docURL(array('page' => "user/contributions/payment-processors"), $this);?>

            <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>NOTE: Alternatively, you can enable the <strong>Pay Later</strong> option below without setting up a payment processor. All users will then be asked to submit payment offline (e.g. mail in a check, call in a credit card, etc.).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        </div>
    <?php endif; ?>
    <table class="form-layout-compressed">
        <tr class="crm-contribution-contributionpage-amount-form-block-is_monetary"><th scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['is_monetary']['label']; ?>
</th>
          <td><?php echo $this->_tpl_vars['form']['is_monetary']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Uncheck this box if you are using this contribution page for free membership signup ONLY, or to solicit in-kind / non-monetary donations such as furniture, equipment.. etc.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <tr class="crm-contribution-contributionpage-amount-form-block-currency"><th scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['currency']['label']; ?>
</th>
          <td><?php echo $this->_tpl_vars['form']['currency']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the currency to be used for contributions submitted from this contribution page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <?php if ($this->_tpl_vars['paymentProcessor']): ?>
          <tr class="crm-contribution-contributionpage-amount-form-block-payment_processor"><th scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['payment_processor']['label']; ?>
</th>
            <td><?php echo $this->_tpl_vars['form']['payment_processor']['html']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the payment processor to be used for contributions submitted from this contribution page (unless you are soliciting non-monetary / in-kind contributions only).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_docURL(array('page' => "user/contributions/payment-processors"), $this);?>
</span></td>
          </tr>
        <?php endif; ?>
        <tr class="crm-contribution-contributionpage-amount-form-block-is_pay_later"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['is_pay_later']['label']; ?>
</th>
          <td><?php echo $this->_tpl_vars['form']['is_pay_later']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box if you want to give users the option to submit payment offline (e.g. mail in a check, call in a credit card, etc.).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <tr id="payLaterFields" class="crm-contribution-form-block-payLaterFields"><td>&nbsp;</td>
            <td>
            <table class="form-layout">
                <tr class="crm-contribution-contributionpage-amount-form-block-pay_later_text"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['pay_later_text']['label']; ?>
 <span class="crm-marker" title="This field is required.">*</span> <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contribution_page','field' => 'pay_later_text','id' => $this->_tpl_vars['contributionPageID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></th>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['pay_later_text']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>
<br />
                    <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Text displayed next to the checkbox for the 'pay later' option on the contribution form. You may include HTML formatting tags.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
                <tr class="crm-contribution-contributionpage-amount-form-block-pay_later_receipt"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['pay_later_receipt']['label']; ?>
 <span class="crm-marker" title="This field is required.">*</span> <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contribution_page','field' => 'pay_later_receipt','id' => $this->_tpl_vars['contributionPageID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></th>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['pay_later_receipt']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>
<br />
                  <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Instructions added to Confirmation and Thank-you pages, as well as the confirmation email, when the user selects the 'pay later' option (e.g. 'Mail your check to ... within 3 business days.').<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>

                <tr><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['is_billing_required']['label']; ?>
</th>
                <td><?php echo $this->_tpl_vars['form']['is_billing_required']['html']; ?>
<br />
                    <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box to require users who select the pay later option to provide billing name and address.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                </td></tr>
            </table>
            </td>
        </tr>
        <tr class="crm-contribution-contributionpage-amount-form-block-amount_block_is_active">
          <th scope="row" class="label"><?php echo $this->_tpl_vars['form']['amount_block_is_active']['label']; ?>
</th>
          <td><?php echo $this->_tpl_vars['form']['amount_block_is_active']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Uncheck this box if you are using this contribution page for membership signup and renewal only - and you do NOT want users to select or enter any additional contribution amounts.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <tr id="priceSet" class="crm-contribution-contributionpage-amount-form-block-priceSet">
          <th scope="row" class="label"><?php echo $this->_tpl_vars['form']['price_set_id']['label']; ?>
</th>
          <?php if ($this->_tpl_vars['price'] == true): ?>
             <td><?php echo $this->_tpl_vars['form']['price_set_id']['html']; ?>
<br /><span class="description"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['adminPriceSets'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a pre-configured Price Set to offer multiple individually priced options for contributions. Otherwise, select &quot;-none-&quot; and enter one or more fixed contribution options in the table below. Create or edit Price Sets <a href='%1'>here</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
          <?php else: ?>
            <td><div class="status message"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['adminPriceSets'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No Contribution Price Sets have been configured / enabled for your site. Price sets allow you to configure more complex contribution options (e.g. "Contribute $25 more to receive our monthly magazine."). Click <a href='%1'>here</a> if you want to configure price sets for your site.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div></td>
          <?php endif; ?>
        </tr>
    </table>

    <div id="recurringFields">
        <table class="form-layout-compressed">


  <?php if ($this->_tpl_vars['recurringPaymentProcessor']): ?>
        <tr id="recurringContribution" class="crm-contribution-form-block-is_recur"><th scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['is_recur']['label']; ?>
</th>
               <td><?php echo $this->_tpl_vars['form']['is_recur']['html']; ?>
<br />
                  <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box if you want to give users the option to make recurring contributions. This feature requires that you use a payment processor which supports recurring billing / subscriptions functionality.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_docURL(array('page' => "user/contributions/payment-processors"), $this);?>
</span>
               </td>
        </tr>
        <tr id="recurFields" class="crm-contribution-form-block-recurFields"><td>&nbsp;</td>
               <td>
                  <table class="form-layout-compressed">
            <tr class="crm-contribution-form-block-recur_frequency_unit"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['recur_frequency_unit']['label']; ?>
<span class="crm-marker" title="This field is required.">*</span></th>
                        <td><?php echo $this->_tpl_vars['form']['recur_frequency_unit']['html']; ?>
<br />
                        <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select recurring units supported for recurring payments.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
                    </tr>
                    <tr class="crm-contribution-form-block-is_recur_interval"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['is_recur_interval']['label']; ?>
</th>
                        <td><?php echo $this->_tpl_vars['form']['is_recur_interval']['html']; ?>
<br />
                        <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Can users also set an interval (e.g. every '3' months)?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
                    </tr>
                    <tr class="crm-contribution-form-block-is_recur_installments"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['is_recur_installments']['label']; ?>
</th>
                        <td><?php echo $this->_tpl_vars['form']['is_recur_installments']['html']; ?>
<br />
                        <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Give the user a choice of installments (e.g. donate every month for 6 months)? If not, recurring donations will continue indefinitely.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
                    </tr>
                  </table>
                </td>
        </tr>
        <?php endif; ?>

        </table>
    </div>
<?php if ($this->_tpl_vars['futurePaymentProcessor']): ?>
    <span id="pledge_calendar_date_field">&nbsp;&nbsp;<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'pledge_calendar_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></span>
    <span id="pledge_calendar_month_field">&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['pledge_calendar_month']['html']; ?>
<br/><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recurring payment will be processed this day of the month following submission of this contribution page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></span>
<?php endif; ?>


    <div id="amountFields">
        <table class="form-layout-compressed">
                        <?php if ($this->_tpl_vars['civiPledge']): ?>
            <tr class="crm-contribution-form-block-is_pledge_active"><th scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['is_pledge_active']['label']; ?>
</th>
                <td><?php echo $this->_tpl_vars['form']['is_pledge_active']['html']; ?>
<br />
                    <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box if you want to give users the option to make a Pledge (a commitment to contribute a fixed amount on a recurring basis).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                </td>
            </tr>
            <tr id="pledgeFields" class="crm-contribution-form-block-pledgeFields"><td></td><td>
                <table class="form-layout-compressed">
                    <tr class="crm-contribution-form-block-pledge_frequency_unit"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['pledge_frequency_unit']['label']; ?>
<span class="crm-marker"> *</span></th>
                        <td><?php echo $this->_tpl_vars['form']['pledge_frequency_unit']['html']; ?>
<br />
                            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Which frequencies can the user pick from (e.g. every 'week', every 'month', every 'year')?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
                    </tr>
                    <tr class="crm-contribution-form-block-is_pledge_interval"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['is_pledge_interval']['label']; ?>
</th>
                        <td><?php echo $this->_tpl_vars['form']['is_pledge_interval']['html']; ?>
<br />
                            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Can they also set an interval (e.g. every '3' months)?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
                    </tr>
                    <tr class="crm-contribution-form-block-initial_reminder_day"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['initial_reminder_day']['label']; ?>
</th>
                        <td><?php echo $this->_tpl_vars['form']['initial_reminder_day']['html']; ?>

                            <span class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Days prior to each scheduled payment due date.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
                    </tr>
                    <tr class="crm-contribution-form-block-max_reminders"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['max_reminders']['label']; ?>
</th>
                        <td><?php echo $this->_tpl_vars['form']['max_reminders']['html']; ?>

                            <span class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Reminders for each scheduled payment.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
                    </tr>
                    <tr class="crm-contribution-form-block-additional_reminder_day"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['additional_reminder_day']['label']; ?>
</th>
                        <td><?php echo $this->_tpl_vars['form']['additional_reminder_day']['html']; ?>

                            <span class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Days after the last one sent, up to the maximum number of reminders.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
                    </tr>
                <?php if ($this->_tpl_vars['futurePaymentProcessor']): ?>
                    <tr id="adjustRecurringFields" class="crm-contribution-form-block-adjust_recur_start_date"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['adjust_recur_start_date']['label']; ?>
</th>
                        <td><?php echo $this->_tpl_vars['form']['adjust_recur_start_date']['html']; ?>
<br/>
			  <div id="recurDefaults">
                            <span class="description"><?php echo $this->_tpl_vars['form']['pledge_default_toggle']['label']; ?>
</span>
                            <table class="form-layout-compressed">
                              <tr class="crm-contribution-form-block-date_of_recurring_contribution">
                                <td><?php echo $this->_tpl_vars['form']['pledge_default_toggle']['html']; ?>
</td>
                              </tr>
                              <tr class="crm-contribution-form-block-is_pledge_start_date_visible">
                                <td><?php echo $this->_tpl_vars['form']['is_pledge_start_date_visible']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['is_pledge_start_date_visible']['label']; ?>
</td>
                              </tr>
                              <tr class="crm-contribution-form-block-is_pledge_start_date_visible">
                                <td><?php echo $this->_tpl_vars['form']['is_pledge_start_date_editable']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['is_pledge_start_date_editable']['label']; ?>
</td>
                              </tr>
                            </table>
                          </div>
                        </td>
                    </tr>
                <?php endif; ?>
                </table>
                </td>
            </tr>
            <?php endif; ?>

      <tr class="crm-contribution-form-block-amount_label">
              <th scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['amount_label']['label']; ?>
<span class="crm-marker"> *</span></th>
        <td><?php echo $this->_tpl_vars['form']['amount_label']['html']; ?>
</td>
      </tr>
            <tr class="crm-contribution-form-block-is_allow_other_amount"><th scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['is_allow_other_amount']['label']; ?>
</th>
            <td><?php echo $this->_tpl_vars['form']['is_allow_other_amount']['html']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box if you want to give users the option to enter their own contribution amount. Your page will then include a text field labeled <strong>Other Amount</strong>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>

            <tr id="minMaxFields" class="crm-contribution-form-block-minMaxFields"><td>&nbsp;</td><td>
               <table class="form-layout-compressed">
                <tr class="crm-contribution-form-block-min_amount"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['min_amount']['label']; ?>
</th>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['min_amount']['html'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</td></tr>
                <tr class="crm-contribution-form-block-max_amount"><th scope="row" class="label"><?php echo $this->_tpl_vars['form']['max_amount']['label']; ?>
</th>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['max_amount']['html'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=5)) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)))); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If you have chosen to <strong>Allow Other Amounts</strong>, you can use the fields above to control minimum and/or maximum acceptable values (e.g. don't allow contribution amounts less than %1).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
               </table>
            </td></tr>

            <tr><td colspan="2">
                <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fixed Contribution Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
                    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use the table below to enter up to ten fixed contribution amounts. These will be presented as a list of radio button options. Both the label and dollar amount will be displayed.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php if ($this->_tpl_vars['isQuick']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> Click <a id='quickconfig' href='#'>here</a> if you want to configure the Fixed Contribution Options below as part of a Price Set, with the added flexibility and complexity that entails.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?><br />
                    <table id="map-field-table">
                        <tr class="columnheader" ><th scope="column"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Label<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><th scope="column"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><th scope="column"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Default?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br /><?php echo $this->_tpl_vars['form']['default']['0']['html']; ?>
</th></tr>
                        <?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['start'] = (int)1;
$this->_sections['loop']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
if ($this->_sections['loop']['start'] < 0)
    $this->_sections['loop']['start'] = max($this->_sections['loop']['step'] > 0 ? 0 : -1, $this->_sections['loop']['loop'] + $this->_sections['loop']['start']);
else
    $this->_sections['loop']['start'] = min($this->_sections['loop']['start'], $this->_sections['loop']['step'] > 0 ? $this->_sections['loop']['loop'] : $this->_sections['loop']['loop']-1);
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = min(ceil(($this->_sections['loop']['step'] > 0 ? $this->_sections['loop']['loop'] - $this->_sections['loop']['start'] : $this->_sections['loop']['start']+1)/abs($this->_sections['loop']['step'])), $this->_sections['loop']['max']);
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?>
                            <?php $this->assign('idx', $this->_sections['loop']['index']); ?>
                            <tr><td class="even-row"><?php echo $this->_tpl_vars['form']['label'][$this->_tpl_vars['idx']]['html']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['value'][$this->_tpl_vars['idx']]['html'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</td><td class="even-row"><?php echo $this->_tpl_vars['form']['default'][$this->_tpl_vars['idx']]['html']; ?>
</td></tr>
                        <?php endfor; endif; ?>
                    </table>
              </fieldset>
            </td></tr>
        </table>
      </div>
      <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php echo '
<script type="text/javascript">

   var futurePaymentProcessorMapper = [];
   '; ?>
<?php if ($this->_tpl_vars['futurePaymentProcessor']): ?>
   <?php $_from = $this->_tpl_vars['futurePaymentProcessor']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['futurePaymentProcessor']):
?><?php echo '
     futurePaymentProcessorMapper['; ?>
<?php echo $this->_tpl_vars['index']; ?>
<?php echo '] = \''; ?>
<?php echo $this->_tpl_vars['futurePaymentProcessor']; ?>
<?php echo '\';
   '; ?>
<?php endforeach; endif; unset($_from); ?>
   <?php echo '
   CRM.$(function($) {
     var defId = $(\'input[name="pledge_default_toggle"][value="contribution_date"]\').attr(\'id\');
     var calId = $(\'input[name="pledge_default_toggle"][value="calendar_date"]\').attr(\'id\');
     var monId = $(\'input[name="pledge_default_toggle"][value="calendar_month"]\').attr(\'id\');

     $("label[for=\'" + calId + "\']").append($(\'#pledge_calendar_date_field\'));
     $("label[for=\'" + monId + "\']").append($(\'#pledge_calendar_month_field\'));

     setDateDefaults();

     $("#" + defId).click( function() {
       if ($(this).is(\':checked\')) {
         $(\'#pledge_calendar_month\').prop(\'disabled\', \'disabled\');
         $(\'#pledge_calendar_date\').prop(\'disabled\', \'disabled\');
         $("#pledge_calendar_date").next(\'input\').prop(\'disabled\', \'disabled\');
       }
     });

     $("#" + calId).click( function() {
       if ($(this).is(\':checked\')) {
         $(\'#pledge_calendar_month\').prop(\'disabled\', \'disabled\');
         $(\'#pledge_calendar_date\').prop(\'disabled\', false);
         $("#pledge_calendar_date").next(\'input\').prop(\'disabled\', false);
       }
     });

     $("#" + monId).click( function() {
       if ($(this).is(\':checked\')) {
         $(\'#pledge_calendar_month\').prop(\'disabled\', false);
         $("#pledge_calendar_date").next(\'input\').prop(\'disabled\', \'disabled\');
         $(\'#pledge_calendar_date\').prop(\'disabled\', \'disabled\');
       }
     });


   });
'; ?>
<?php endif; ?><?php echo '

   var paymentProcessorMapper = [];
     '; ?>

       <?php if ($this->_tpl_vars['recurringPaymentProcessor']): ?>
           <?php $_from = $this->_tpl_vars['recurringPaymentProcessor']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['paymentProcessor']):
?><?php echo '
               paymentProcessorMapper['; ?>
<?php echo $this->_tpl_vars['index']; ?>
<?php echo '] = \''; ?>
<?php echo $this->_tpl_vars['paymentProcessor']; ?>
<?php echo '\';
           '; ?>
<?php endforeach; endif; unset($_from); ?>
       <?php endif; ?>
     <?php echo '
     CRM.$(function($) {
       function checked_payment_processors() {
         var ids = [];
         $(\'.crm-contribution-contributionpage-amount-form-block-payment_processor input[type="checkbox"]\').each(function(){
           if($(this).prop(\'checked\')) {
             var id = $(this).attr(\'id\').split(\'_\')[2];
             ids.push(id);
           }
         });
         return ids;
       }

        // show/hide recurring block
        $(\'.crm-contribution-contributionpage-amount-form-block-payment_processor input[type="checkbox"]\').change(function(){
            showRecurring( checked_payment_processors() );
            showAdjustRecurring( checked_payment_processors() );
        });
        showRecurring( checked_payment_processors() );
        showAdjustRecurring( checked_payment_processors() );
    });
  var element_other_amount = document.getElementsByName(\'is_allow_other_amount\');
    if (! element_other_amount[0].checked) {
     cj(\'#minMaxFields\').hide();
  }
  var amount_block = document.getElementsByName(\'amount_block_is_active\');
  var priceSetID = '; ?>
'<?php echo $this->_tpl_vars['priceSetID']; ?>
'<?php echo ';

  if ( ! amount_block[0].checked || priceSetID ) {
     if ( !priceSetID ) {
       cj(\'#priceSet\').hide();
       if (CRM.memberPriceset) {
         cj(".crm-contribution-contributionpage-amount-form-block-amount_block_is_active td").html(\'<span class="description">'; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You cannot enable the Contribution Amounts section when a Membership Price Set is in use. (See the Memberships tab above.) Membership Price Sets may include additional fields for non-membership options that require an additional fee (e.g. magazine subscription) or an additional voluntary contribution.</span><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\');
       }
     }
     cj(\'#amountFields\').hide();
  }

  CRM.$(function($) {
    payLater(\'is_pay_later\');
  });

  cj(\'#is_pay_later\').click( function() {
     payLater(\'is_pay_later\');
  });


  function minMax(chkbox) {
    if (chkbox.checked) {
       cj(\'#minMaxFields\').show();
    } else {
     cj(\'#minMaxFields\').hide();
     document.getElementById("min_amount").value = \'\';
     document.getElementById("max_amount").value = \'\';
    }
  }

  function payLater(chkbox) {
    var elementId = \'payLaterFields\';
    if (cj(\'#\' + chkbox).prop(\'checked\')) {
      cj(\'#\' + elementId).show();
    } else {
      cj(\'#\' + elementId).hide();
    }
  }

  function showHideAmountBlock( element, elementName )
        {
     // show / hide when amount section is active check/uncheck.

     var priceSetID = '; ?>
'<?php echo $this->_tpl_vars['priceSetID']; ?>
'<?php echo ';

     switch ( elementName ) {
      case \'price_set_id\':
           if ( element ) {
               cj(\'#amountFields\').hide();
           } else {
               cj(\'#amountFields\').show();
           }
           cj("#amount_block_is_active").prop(\'checked\', true );
      break;

      case \'is_pledge_active\' :
      case \'is_allow_other_amount\' :
           if ( element.checked ) {
               if ( priceSetID ) cj( "#price_set_id" ).val( \'\' );
             cj(\'#amountFields\').show();
                 }
           cj("#amount_block_is_active").prop(\'checked\', true );
      break;

         case \'amount_block_is_active\' :
           if ( element.checked ) {
               if ( priceSetID ) {
           cj(\'#amountFields\').hide();
           cj( "#price_set_id" ).val( priceSetID );
        } else {
           cj(\'#amountFields\').show();
           cj( "#price_set_id" ).val( \'\' );
        }
        cj(\'#priceSet, #recurringFields\').show();
           } else {
            cj( "#price_set_id" ).val( \'\' );
            cj(\'#amountFields, #priceSet, #recurringFields\').hide();
           }
      break;
     }
   }

    function showRecurring( paymentProcessorIds ) {
        var display = true;
        cj.each(paymentProcessorIds, function(k, id){
            if( cj.inArray(id, paymentProcessorMapper) == -1 ) {
                display = false;
            }
        });

        if(display) {
            cj( \'#recurringContribution\' ).show( );
        } else {
            if ( cj( \'#is_recur\' ).prop(\'checked\' ) ) {
                cj( \'#is_recur\' ).prop(\'checked\', false);
                cj( \'#recurFields\' ).hide( );
            }
            cj( \'#recurringContribution\' ).hide( );
        }
    }

    function showAdjustRecurring( paymentProcessorIds ) {
        var display = true;
        cj.each(paymentProcessorIds, function(k, id){
            if( cj.inArray(id, futurePaymentProcessorMapper) == -1 ) {
                display = false;
            }
        });

        if(display) {
            cj( \'#adjustRecurringFields\' ).show( );
        } else {
            if ( cj( \'#adjust_recur_start_date\' ).prop(\'checked\' ) ) {
                cj( \'#adjust_recur_start_date\' ).prop(\'checked\', false);
                cj( \'#recurDefaults\' ).hide( );
            }
            cj( \'#adjustRecurringFields\' ).hide( );
        }
    }

'; ?>
<?php if ($this->_tpl_vars['futurePaymentProcessor']): ?><?php echo '
    function setDateDefaults() {
     '; ?>
<?php if (! $this->_tpl_vars['pledge_calendar_date']): ?><?php echo '
       cj(\'#pledge_calendar_date\').prop(\'disabled\', \'disabled\');
       cj("#pledge_calendar_date").next(\'input\').prop(\'disabled\', \'disabled\'); 
     '; ?>
<?php endif; ?>

     <?php if (! $this->_tpl_vars['pledge_calendar_month']): ?><?php echo '
       cj(\'#pledge_calendar_month\').prop(\'disabled\', \'disabled\');
     '; ?>
<?php endif; ?><?php echo '
    }
'; ?>
<?php endif; ?><?php echo '

</script>
'; ?>

<?php if ($this->_tpl_vars['form']['is_recur']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_recur','trigger_value' => 'true','target_element_id' => 'recurFields','target_element_type' => "table-row",'field_type' => 'radio','invert' => 'false')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['form']['adjust_recur_start_date']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'adjust_recur_start_date','trigger_value' => 'true','target_element_id' => 'recurDefaults','target_element_type' => "table-row",'field_type' => 'radio','invert' => 'false')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['civiPledge']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_pledge_active','trigger_value' => 'true','target_element_id' => 'pledgeFields','target_element_type' => "table-row",'field_type' => 'radio','invert' => 'false')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['isQuick']): ?>
<?php echo '
<script type="text/javascript">
  CRM.$(function($) {
    $("#quickconfig").click(function(e) {
      e.preventDefault();
      CRM.confirm({
        width: 400,
        message: '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Once you switch to using a Price Set, you won't be able to switch back to your existing settings below except by re-entering them. Are you sure you want to switch to a Price Set?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo '
      }).on(\'crmConfirm:yes\', function() {
        '; ?>

        var dataUrl = '<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/ajax/rest",'h' => 0,'q' => "className=CRM_Core_Page_AJAX&fnName=setIsQuickConfig&context=civicrm_contribution_page&id=".($this->_tpl_vars['contributionPageID'])), $this);?>
';
        <?php echo '
        $.getJSON(dataUrl).done(function(result) {window.location = CRM.url("civicrm/admin/price/field", {reset: 1, action: \'browse\', sid: result});});
      });
    });
  });
</script>
'; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribute-form-contributionpage-amount-post")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>