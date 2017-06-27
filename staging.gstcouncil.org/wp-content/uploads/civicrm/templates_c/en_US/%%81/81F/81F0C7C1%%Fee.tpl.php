<?php /* Smarty version 2.6.27, created on 2017-06-19 22:15:50
         compiled from CRM/Event/Form/ManageEvent/Fee.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/ManageEvent/Fee.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/ManageEvent/Fee.tpl', 31, false),array('function', 'crmURL', 'CRM/Event/Form/ManageEvent/Fee.tpl', 27, false),array('function', 'docURL', 'CRM/Event/Form/ManageEvent/Fee.tpl', 31, false),array('function', 'cycle', 'CRM/Event/Form/ManageEvent/Fee.tpl', 188, false),array('modifier', 'crmAddClass', 'CRM/Event/Form/ManageEvent/Fee.tpl', 87, false),array('modifier', 'crmMoney', 'CRM/Event/Form/ManageEvent/Fee.tpl', 161, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/price','q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('adminPriceSets', ob_get_contents());ob_end_clean(); ?>
    <?php if (! $this->_tpl_vars['paymentProcessor']): ?>
        <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/paymentProcessor','q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ppUrl', ob_get_contents());ob_end_clean(); ?>
        <div class="status message">
                <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['ppUrl'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No Payment Processor has been configured / enabled for your site. If this is a <strong>paid event</strong> AND you want users to be able to <strong>register and pay online</strong>, you will need to <a href='%1'>configure a Payment Processor</a> first. Then return to this screen and assign the processor to this event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_docURL(array('page' => "user/contributions/payment-processors"), $this);?>

                <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>NOTE: Alternatively, you can enable the <strong>Pay Later</strong> option below without setting up a payment processor. All users will then be asked to submit payment offline (e.g. mail in a check, call in a credit card, etc.).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        </div>
    <?php endif; ?>
<div class="crm-block crm-form-block crm-event-manage-fee-form-block">
  <div class="crm-submit-buttons">
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>

    <table class="form-layout">
       <tr class="crm-event-manage-fee-form-block-title">
    <td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['title']['html']; ?>
</td>
       </tr>
       <tr class="crm-event-manage-fee-form-block-is_monetary">
          <td class="label"><?php echo $this->_tpl_vars['form']['is_monetary']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['is_monetary']['html']; ?>
</td>
       </tr>
    </table>

    <div id="event-fees">
        <table id="currency" class="form-layout">
             <tr class='crm-event-manage-fee-form-block-currency'>
                <td class="label"><?php echo $this->_tpl_vars['form']['currency']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['currency']['html']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the currency to be used for event registration.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </td>
             </tr>
        </table>
        <?php if ($this->_tpl_vars['paymentProcessor']): ?>
         <table id="paymentProcessor" class="form-layout">
             <tr class="crm-event-manage-fee-form-block-payment_processor">
                <td class="label"><?php echo $this->_tpl_vars['form']['payment_processor']['label']; ?>
</td>
              <td><?php echo $this->_tpl_vars['form']['payment_processor']['html']; ?>
</td>
             </tr>
           <tr>
                <td class="">&nbsp;</td>
                <td class="description">
                 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If this is a paid event and you want users to be able to register and pay online, select a payment processor to use.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>NOTE: Alternatively, you can enable the <strong>Pay Later</strong> feature below without setting up a payment processor. All users will then be asked to submit payment offline (e.g. mail in a check, call in a credit card, etc.).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_docURL(array('page' => "user/contributions/payment-processors"), $this);?>
<td>
             </tr>
         </table>
        <?php endif; ?>

        <table id="payLater" class="form-layout">
            <tr class="crm-event-manage-fee-form-block-is_pay_later">
               <td class="extra-long-fourty label"><?php echo $this->_tpl_vars['form']['is_pay_later']['html']; ?>
</td>
               <td><?php echo $this->_tpl_vars['form']['is_pay_later']['label']; ?>
<br />
                  <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box if you want to give users the option to submit payment offline (e.g. mail in a check, call in a credit card, etc.).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
              </td>
            </tr>
        </table>

        <table id="payLaterOptions" class="form-layout">
            <tr class="crm-event-manage-fee-form-block-pay_later_text">
               <td class="label"><?php echo $this->_tpl_vars['form']['pay_later_text']['label']; ?>
<span class="crm-marker"> *</span> </td>
               <td><?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'pay_later_text','id' => $this->_tpl_vars['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['pay_later_text']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>

               </td>
            </tr>
            <tr>
               <td>&nbsp;</td>
               <td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Text displayed next to the checkbox for the 'pay later' option on the contribution form. You may include HTML formatting tags.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
            </tr>
            <tr class="crm-event-manage-fee-form-block-pay_later_receipt">
               <td class="label"><?php echo $this->_tpl_vars['form']['pay_later_receipt']['label']; ?>
<span class="crm-marker"> *</span> </td>
               <td><?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'pay_later_receipt','id' => $this->_tpl_vars['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['pay_later_receipt']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>

               </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Instructions added to Confirmation and Thank-you pages when the user selects the 'pay later' option (e.g. 'Mail your check to ... within 3 business days.').<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </td>
            </tr>
            <tr>
               <td class="extra-long-fourty label"><?php echo $this->_tpl_vars['form']['is_billing_required']['html']; ?>
</td>
               <td>
                 <?php echo $this->_tpl_vars['form']['is_billing_required']['label']; ?>
<br />
                 <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box to require users who select the pay later option to provide billing name and address.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
               </td>
            </tr>
        </table>

        <table id="contributionType" class="form-layout">
            <tr class="crm-event-manage-fee-form-block-fee_label">
               <td class="label"><?php echo $this->_tpl_vars['form']['fee_label']['label']; ?>
<span class="crm-marker"> *</span>
               </td>
               <td><?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'fee_label','id' => $this->_tpl_vars['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo $this->_tpl_vars['form']['fee_label']['html']; ?>

               </td>
            </tr>
            <tr>
               <td>&nbsp;</td>
               <td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This label is displayed with the list of event fees. When using a Price Set, this label is the title for the section containing the price fields.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
               </td>
            </tr>
            <tr class="crm-event-manage-fee-form-block-financial_type_id">
               <td class="label"><?php echo $this->_tpl_vars['form']['financial_type_id']['label']; ?>
<span class="crm-marker"> *</span></td>
               <td><?php echo $this->_tpl_vars['form']['financial_type_id']['html']; ?>
</td>
            </tr>
            <tr>
               <td>&nbsp;</td>
               <td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This financial type will be assigned to payments made by participants when they register online. If using a price set below note that the contribution record will have this financial type, however line items will be processed using the actual financial type selected for the price set item.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
               </td>
            </tr>
        </table>

      <table id="priceSet" class="form-layout">
            <tr class="crm-event-manage-fee-form-block-price_set_id">
               <td class="label"><?php echo $this->_tpl_vars['form']['price_set_id']['label']; ?>
</td>
         <td><?php if ($this->_tpl_vars['price'] == false): ?>
            <div class="status message"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['adminPriceSets'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No Price Set has been configured / enabled for your site. Price sets allow you to meet the complex demands of your event registration structure.(e.g. "Pay $15 more for lunch."). Click <a href='%1'>here</a> if you want to configure price sets for your site.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
        <?php else: ?>
    <?php echo $this->_tpl_vars['form']['price_set_id']['html']; ?>

    </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="description"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['adminPriceSets'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a pre-configured Price Set to offer multiple individually priced options for event registrants. Otherwise, select &quot;-none-&quot; and enter one or more fee levels in the table below. Create or edit Price Sets <a href='%1'>here</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php endif; ?>
         </td>
            </tr>
      </table>

        <div id="map-field" >
        <fieldset id="map-field"><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Regular Fees<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use the table below to enter descriptive labels and amounts for up to ten event fee levels. These will be presented as a list of radio button options. Both the label and dollar amount will be displayed. You can also configure one or more sets of discounted fees by checking "Discounts by Signup Date" below.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
  <?php if ($this->_tpl_vars['isQuick']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <a id='quickconfig' href='#'>here</a> if you want to configure the Regular Fees below as part of a Price Set, with the added flexibility and complexity that entails.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
        <table id="map-field-table">
        <tr class="columnheader"><td scope="column"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fee Label<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td scope="column"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td scope="column"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Default?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br /><?php echo $this->_tpl_vars['form']['default']['0']['html']; ?>
</td></tr>
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
           <tr><td class="even-row crm-event-manage-fee-form-block-label_<?php echo $this->_tpl_vars['idx']; ?>
"><?php echo $this->_tpl_vars['form']['label'][$this->_tpl_vars['idx']]['html']; ?>
</td><td class="crm-event-manage-fee-form-block-value_<?php echo $this->_tpl_vars['idx']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['value'][$this->_tpl_vars['idx']]['html'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</td><td class="even-row crm-event-manage-fee-form-block-default_<?php echo $this->_tpl_vars['idx']; ?>
"><?php echo $this->_tpl_vars['form']['default'][$this->_tpl_vars['idx']]['html']; ?>
</td></tr>
        <?php endfor; endif; ?>
        </table>
        </fieldset>

    <div id="isDiscount">
         <table class="form-layout">
             <tr class="crm-event-manage-fee-form-block-is_discount">
                <td class="extra-long-fourty label"><?php echo $this->_tpl_vars['form']['is_discount']['html']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['is_discount']['label']; ?>
<br /><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box if you want to offer discounted fees based on registration date (e.g. 'early-registration discounts').<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                </td>
             </tr>
         </table>
    </div>
    <div class="spacer"></div>
    <div>
        <fieldset id="discount">
  <table>
  <tr class="columnheader">
        <td>&nbsp;</th>
        <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Discount Set<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Start Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>End Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    </tr>

  <?php unset($this->_sections['rowLoop']);
$this->_sections['rowLoop']['name'] = 'rowLoop';
$this->_sections['rowLoop']['start'] = (int)1;
$this->_sections['rowLoop']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rowLoop']['show'] = true;
$this->_sections['rowLoop']['max'] = $this->_sections['rowLoop']['loop'];
$this->_sections['rowLoop']['step'] = 1;
if ($this->_sections['rowLoop']['start'] < 0)
    $this->_sections['rowLoop']['start'] = max($this->_sections['rowLoop']['step'] > 0 ? 0 : -1, $this->_sections['rowLoop']['loop'] + $this->_sections['rowLoop']['start']);
else
    $this->_sections['rowLoop']['start'] = min($this->_sections['rowLoop']['start'], $this->_sections['rowLoop']['step'] > 0 ? $this->_sections['rowLoop']['loop'] : $this->_sections['rowLoop']['loop']-1);
if ($this->_sections['rowLoop']['show']) {
    $this->_sections['rowLoop']['total'] = min(ceil(($this->_sections['rowLoop']['step'] > 0 ? $this->_sections['rowLoop']['loop'] - $this->_sections['rowLoop']['start'] : $this->_sections['rowLoop']['start']+1)/abs($this->_sections['rowLoop']['step'])), $this->_sections['rowLoop']['max']);
    if ($this->_sections['rowLoop']['total'] == 0)
        $this->_sections['rowLoop']['show'] = false;
} else
    $this->_sections['rowLoop']['total'] = 0;
if ($this->_sections['rowLoop']['show']):

            for ($this->_sections['rowLoop']['index'] = $this->_sections['rowLoop']['start'], $this->_sections['rowLoop']['iteration'] = 1;
                 $this->_sections['rowLoop']['iteration'] <= $this->_sections['rowLoop']['total'];
                 $this->_sections['rowLoop']['index'] += $this->_sections['rowLoop']['step'], $this->_sections['rowLoop']['iteration']++):
$this->_sections['rowLoop']['rownum'] = $this->_sections['rowLoop']['iteration'];
$this->_sections['rowLoop']['index_prev'] = $this->_sections['rowLoop']['index'] - $this->_sections['rowLoop']['step'];
$this->_sections['rowLoop']['index_next'] = $this->_sections['rowLoop']['index'] + $this->_sections['rowLoop']['step'];
$this->_sections['rowLoop']['first']      = ($this->_sections['rowLoop']['iteration'] == 1);
$this->_sections['rowLoop']['last']       = ($this->_sections['rowLoop']['iteration'] == $this->_sections['rowLoop']['total']);
?>
     <?php $this->assign('index', $this->_sections['rowLoop']['index']); ?>
     <tr id="discount_<?php echo $this->_tpl_vars['index']; ?>
" class=" crm-event-manage-fee-form-block-discount_<?php echo $this->_tpl_vars['index']; ?>
 <?php if ($this->_tpl_vars['index'] > 1 && empty ( $this->_tpl_vars['form']['discount_name'][$this->_tpl_vars['index']]['value'] )): ?> hiddenElement <?php endif; ?> form-item <?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
">
           <td><?php if ($this->_tpl_vars['index'] > 1): ?> <a onclick="showHideDiscountRow('discount_<?php echo $this->_tpl_vars['index']; ?>
', false, <?php echo $this->_tpl_vars['index']; ?>
); return false;" name="discount_<?php echo $this->_tpl_vars['index']; ?>
" href="#" class="form-link"><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/TreeMinus.gif" class="action-icon" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>hide field or section<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/></a><?php endif; ?>
           </td>
           <td class="crm-event-manage-fee-form-block-discount_name"> <?php echo $this->_tpl_vars['form']['discount_name'][$this->_tpl_vars['index']]['html']; ?>
</td>
           <td class="crm-event-manage-fee-form-block-discount_start_date"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'discount_start_date','elementIndex' => $this->_tpl_vars['index'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </td>
           <td class="crm-event-manage-fee-form-block-discount_end_date"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'discount_end_date','elementIndex' => $this->_tpl_vars['index'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </td>
     </tr>
    <?php endfor; endif; ?>
    </table>
        <div id="discountLink" class="add-remove-link">
           <a onclick="showHideDiscountRow( 'discount', true);return false;" id="discountLink" href="#" class="form-link"><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/TreePlus.gif" class="action-icon" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>show field or section<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>another discount set<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        </div>
        <?php echo $this->_tpl_vars['form']['_qf_Fee_submit']['html']; ?>


        <?php if ($this->_tpl_vars['discountSection']): ?>
            <fieldset id="map-field"><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Discounted Fees<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
            <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use the table below to enter descriptive labels and amounts for up to ten discounted event fees for each discount set. <strong>Don't forget to click 'Save' when you are finished.</strong><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
      <table id="map-field-table">
            <tr class="columnheader">
         <td scope="column"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fee Label<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
         <?php unset($this->_sections['dloop']);
$this->_sections['dloop']['name'] = 'dloop';
$this->_sections['dloop']['start'] = (int)1;
$this->_sections['dloop']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['dloop']['show'] = true;
$this->_sections['dloop']['max'] = $this->_sections['dloop']['loop'];
$this->_sections['dloop']['step'] = 1;
if ($this->_sections['dloop']['start'] < 0)
    $this->_sections['dloop']['start'] = max($this->_sections['dloop']['step'] > 0 ? 0 : -1, $this->_sections['dloop']['loop'] + $this->_sections['dloop']['start']);
else
    $this->_sections['dloop']['start'] = min($this->_sections['dloop']['start'], $this->_sections['dloop']['step'] > 0 ? $this->_sections['dloop']['loop'] : $this->_sections['dloop']['loop']-1);
if ($this->_sections['dloop']['show']) {
    $this->_sections['dloop']['total'] = min(ceil(($this->_sections['dloop']['step'] > 0 ? $this->_sections['dloop']['loop'] - $this->_sections['dloop']['start'] : $this->_sections['dloop']['start']+1)/abs($this->_sections['dloop']['step'])), $this->_sections['dloop']['max']);
    if ($this->_sections['dloop']['total'] == 0)
        $this->_sections['dloop']['show'] = false;
} else
    $this->_sections['dloop']['total'] = 0;
if ($this->_sections['dloop']['show']):

            for ($this->_sections['dloop']['index'] = $this->_sections['dloop']['start'], $this->_sections['dloop']['iteration'] = 1;
                 $this->_sections['dloop']['iteration'] <= $this->_sections['dloop']['total'];
                 $this->_sections['dloop']['index'] += $this->_sections['dloop']['step'], $this->_sections['dloop']['iteration']++):
$this->_sections['dloop']['rownum'] = $this->_sections['dloop']['iteration'];
$this->_sections['dloop']['index_prev'] = $this->_sections['dloop']['index'] - $this->_sections['dloop']['step'];
$this->_sections['dloop']['index_next'] = $this->_sections['dloop']['index'] + $this->_sections['dloop']['step'];
$this->_sections['dloop']['first']      = ($this->_sections['dloop']['iteration'] == 1);
$this->_sections['dloop']['last']       = ($this->_sections['dloop']['iteration'] == $this->_sections['dloop']['total']);
?>
            <?php $this->assign('i', $this->_sections['dloop']['index']); ?>
      <?php if ($this->_tpl_vars['form']['discount_name'][$this->_tpl_vars['i']]['value']): ?>
            <td scope="column"><?php echo $this->_tpl_vars['form']['discount_name'][$this->_tpl_vars['i']]['value']; ?>
</td>
      <?php endif; ?>
         <?php endfor; endif; ?>
         <td scope="column"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Default?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      </tr>

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
               <tr><td class="even-row"><?php echo $this->_tpl_vars['form']['discounted_label'][$this->_tpl_vars['idx']]['html']; ?>
</td>
            <?php unset($this->_sections['loop1']);
$this->_sections['loop1']['name'] = 'loop1';
$this->_sections['loop1']['start'] = (int)1;
$this->_sections['loop1']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop1']['show'] = true;
$this->_sections['loop1']['max'] = $this->_sections['loop1']['loop'];
$this->_sections['loop1']['step'] = 1;
if ($this->_sections['loop1']['start'] < 0)
    $this->_sections['loop1']['start'] = max($this->_sections['loop1']['step'] > 0 ? 0 : -1, $this->_sections['loop1']['loop'] + $this->_sections['loop1']['start']);
else
    $this->_sections['loop1']['start'] = min($this->_sections['loop1']['start'], $this->_sections['loop1']['step'] > 0 ? $this->_sections['loop1']['loop'] : $this->_sections['loop1']['loop']-1);
if ($this->_sections['loop1']['show']) {
    $this->_sections['loop1']['total'] = min(ceil(($this->_sections['loop1']['step'] > 0 ? $this->_sections['loop1']['loop'] - $this->_sections['loop1']['start'] : $this->_sections['loop1']['start']+1)/abs($this->_sections['loop1']['step'])), $this->_sections['loop1']['max']);
    if ($this->_sections['loop1']['total'] == 0)
        $this->_sections['loop1']['show'] = false;
} else
    $this->_sections['loop1']['total'] = 0;
if ($this->_sections['loop1']['show']):

            for ($this->_sections['loop1']['index'] = $this->_sections['loop1']['start'], $this->_sections['loop1']['iteration'] = 1;
                 $this->_sections['loop1']['iteration'] <= $this->_sections['loop1']['total'];
                 $this->_sections['loop1']['index'] += $this->_sections['loop1']['step'], $this->_sections['loop1']['iteration']++):
$this->_sections['loop1']['rownum'] = $this->_sections['loop1']['iteration'];
$this->_sections['loop1']['index_prev'] = $this->_sections['loop1']['index'] - $this->_sections['loop1']['step'];
$this->_sections['loop1']['index_next'] = $this->_sections['loop1']['index'] + $this->_sections['loop1']['step'];
$this->_sections['loop1']['first']      = ($this->_sections['loop1']['iteration'] == 1);
$this->_sections['loop1']['last']       = ($this->_sections['loop1']['iteration'] == $this->_sections['loop1']['total']);
?>
                     <?php $this->assign('idy', $this->_sections['loop1']['index']); ?>
          <?php if ($this->_tpl_vars['form']['discount_name'][$this->_tpl_vars['idy']]['value']): ?>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['discounted_value'][$this->_tpl_vars['idx']][$this->_tpl_vars['idy']]['html'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</td>
          <?php endif; ?>
            <?php endfor; endif; ?>
            <td class="even-row"><?php echo $this->_tpl_vars['form']['discounted_default'][$this->_tpl_vars['idx']]['html']; ?>
</td>
         </tr>
            <?php endfor; endif; ?>
            </table>
            </fieldset>
            <?php if ($this->_tpl_vars['discountSection'] == 2): ?>
                <script type="text/javascript">
                <?php echo '
                    CRM.$(function($) {
                        $(\'#discounted_label_1\').focus( );
                    });
                '; ?>

                </script>
            <?php endif; ?>
        <?php endif; ?>
        </fieldset>
    </div>
    </div>
    </div>
<div class="crm-submit-buttons">
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHide.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
    <?php if ($this->_tpl_vars['price']): ?>
    <?php echo '
    // Re-show Fee Level grid if Price Set select has been set to none.
    if (cj(\'#price_set_id\').val() == \'\') {
       cj(\'#map-field\').show();
    }
    '; ?>

    <?php endif; ?>
    <?php echo '

    if ( document.getElementsByName(\'is_monetary\')[0].checked ) {
        cj(\'#event-fees\').show();
    }

    function warnDiscountDel( ) {
        if ( ! document.getElementsByName(\'is_discount\')[0].checked ) {
            CRM.alert(\''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If you uncheck "Discounts by Signup Date" and Save this form, any existing discount sets will be deleted.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This action cannot be undone.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If this is NOT what you want to do, you can check "Discounts by Signup Date" again.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>', '<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Warning<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\', \'alert\', {expires: 0});
        }
    }

    /**
     * Function used to show /hide discount and set defaults
     */
    function showHideDiscountRow( rowName, show, index ) {
        if ( show ) {
            // show first hidden element and set date default
            var counter = 0;
            cj(\'tr[id^=\' + rowName + \']\').each( function( i ) {
                counter++;
                if ( cj(this).css(\'display\') == \'none\' ) {
                    cj(this).show( );

                    // set default
                    var currentRowId = cj(this).attr(\'id\');
                    var temp = currentRowId.split(\'_\');
                    var currentElementID = temp[1];
                    var lastElementID    = currentElementID - 1 ;

                    var lastEndDate = cj( \'#discount_end_date_\' + lastElementID ).datepicker( \'getDate\' );
                    if ( lastEndDate ) {
                        var discountDate = new Date( Date.parse( lastEndDate ) );
                        discountDate.setDate( discountDate.getDate() + 1 );
                        var newDate = discountDate.toDateString();
                        newDate = new Date( Date.parse( newDate ) );
                        cj( \'#discount_start_date_\' + currentElementID ).datepicker(\'setDate\', newDate );
                    }

                    if ( counter == 5 ) {
                        cj(\'#discountLink\').hide( );
                    }
                    return false;
                }
            });
        } else {
            // hide tr and clear dates
            cj( \'#discount_end_date_\' + index ).val(\'\');
            cj( \'#discount_name_\' + index ).val(\'\');
            cj( \'#discount_start_date_\' + index ).val(\'\');
            cj( \'#\' + rowName ).hide( );
            cj(\'#discountLink\').show( );
        }
    }

'; ?>

</script>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_pay_later','trigger_value' => "",'target_element_id' => 'payLaterOptions','target_element_type' => 'block','field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['price']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'price_set_id','trigger_value' => "",'target_element_id' => "map-field",'target_element_type' => 'block','field_type' => 'select','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_discount','trigger_value' => "",'target_element_id' => 'discount','target_element_type' => 'block','field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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

          var dataUrl  = '<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/ajax/rest",'h' => 0,'q' => "className=CRM_Core_Page_AJAX&fnName=setIsQuickConfig&context=civicrm_event&id=".($this->_tpl_vars['eventId'])), $this);?>
';
          <?php echo '
        $.getJSON(dataUrl).done(function(result) {window.location = CRM.url("civicrm/admin/price/field", {reset: 1, action: \'browse\', sid: result});});
        });
      });
    });
</script>
'; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>