<?php /* Smarty version 2.6.27, created on 2017-06-20 16:49:23
         compiled from CRM/CiviDiscount/Form/Admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/CiviDiscount/Form/Admin.tpl', 1, false),array('block', 'ts', 'CRM/CiviDiscount/Form/Admin.tpl', 28, false),array('modifier', 'crmReplace', 'CRM/CiviDiscount/Form/Admin.tpl', 61, false),array('function', 'help', 'CRM/CiviDiscount/Form/Admin.tpl', 87, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><h3>
  <?php if ($this->_tpl_vars['action'] == 1): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Discount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php elseif ($this->_tpl_vars['action'] == 2): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Discount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php elseif ($this->_tpl_vars['action'] == 16384): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Copy Discount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Discount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
</h3>
<div class="crm-block crm-form-block crm-discount-item-form-block">
  <?php if ($this->_tpl_vars['action'] == 16384): ?>
    <div class="messages status no-popup">
      <dl>
        <dt>
        <div class="icon inform-icon"></div>
        </dt>
        <dd>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you want to copy this discount code?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </dd>
      </dl>
    </div>
  <?php elseif ($this->_tpl_vars['action'] == 8): ?>
    <div class="messages status no-popup">
      <dl>
        <dt>
        <div class="icon inform-icon"></div>
        </dt>
        <dd>
          <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['discountValue']['code'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: Deleting this discount code (%1) will prevent users who have this code to avail of this discount.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </dd>
      </dl>
    </div>
  <?php else: ?>
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <table class="form-layout-compressed">
      <tr class="crm-discount-item-form-block-label">
        <td class="label"><?php echo $this->_tpl_vars['form']['code']['label']; ?>
</td>
        <td>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['code']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'crm-form-text big') : smarty_modifier_crmReplace($_tmp, 'class', 'crm-form-text big')); ?>

          <?php if ($this->_tpl_vars['action'] == 1): ?>
            <a class="crm-hover-button" href="#" id="generate-code"><span class="icon ui-icon-shuffle"></span> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Random<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
            <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do not use spaces in the Discount Code.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <?php endif; ?>
        </td>
      </tr>
      <tr class="crm-discount-item-form-block-description">
        <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
      </tr>
      <tr class="crm-discount-item-form-block-amount">
        <td class="label"><?php echo $this->_tpl_vars['form']['amount']['label']; ?>
</td>
        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['amount']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'crm-form-text six') : smarty_modifier_crmReplace($_tmp, 'class', 'crm-form-text six')); ?>
 <?php echo $this->_tpl_vars['form']['amount_type']['html']; ?>

        </td>
      </tr>
    </table>
    <fieldset class="crm-collapsible">
      <legend class="collapsible-title"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Additional Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
      <div>
        <table class="form-layout-compressed">
          <tr class="crm-discount-item-form-block-count_max">
            <td class="label"><?php echo $this->_tpl_vars['form']['count_max']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'count_max','title' => $this->_tpl_vars['form']['count_max']['label']), $this);?>
</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['count_max']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'type', 'number') : smarty_modifier_crmReplace($_tmp, 'type', 'number')); ?>
</td>
          </tr>
          <tr class="crm-discount-item-form-block-active_on">
            <td class="label"><?php echo $this->_tpl_vars['form']['active_on']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'active_on','title' => $this->_tpl_vars['form']['active_on']['label']), $this);?>
</td>
            <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'active_on')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
          </tr>
          <tr class="crm-discount-item-form-block-expire_on">
            <td class="label"><?php echo $this->_tpl_vars['form']['expire_on']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'expire_on','title' => $this->_tpl_vars['form']['expire_on']['label']), $this);?>
</td>
            <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'expire_on')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
          </tr>
          <tr class="crm-discount-item-form-block-organization_id">
            <td class="label"><?php echo $this->_tpl_vars['form']['organization_id']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'organization','title' => $this->_tpl_vars['form']['organization_id']['label']), $this);?>
</td>
            <td><?php echo $this->_tpl_vars['form']['organization_id']['html']; ?>
</td>
          </tr>
          <?php if ($this->_tpl_vars['form']['pricesets']): ?>
            <tr class="crm-discount-item-form-block-price-set">
              <td class="label"><?php echo $this->_tpl_vars['form']['pricesets']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'pricesets','title' => $this->_tpl_vars['form']['pricesets']['label']), $this);?>
</td>
              <td><?php echo $this->_tpl_vars['form']['pricesets']['html']; ?>
</td>
            </tr>
          <?php endif; ?>
          <tr>
            <td>&nbsp;</td>
            <td><?php echo $this->_tpl_vars['form']['discount_msg_enabled']['html']; ?>
 <?php echo $this->_tpl_vars['form']['discount_msg_enabled']['label']; ?>
</td>
          </tr>
          <tr class="crm-discount-item-form-block-discount-message">
            <td class="label"><?php echo smarty_function_help(array('id' => "discount-message",'title' => $this->_tpl_vars['form']['discount_msg']['label']), $this);?>
</td>
            <td><?php echo $this->_tpl_vars['form']['discount_msg']['html']; ?>
</td>
          </tr>
        </table>
      </div>
    </fieldset>
    <?php if ($this->_tpl_vars['form']['events']): ?>
      <div class="crm-accordion-wrapper <?php if ($this->_tpl_vars['action'] == 1): ?>collapsed <?php endif; ?>crm-discount-form-block-events">
        <div class="crm-accordion-header">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Discounts for events<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="crm-accordion-body">
          <table class="form-layout-compressed">
            <tr class="crm-discount-item-form-block-events">
              <td class="label"><?php echo $this->_tpl_vars['form']['events']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'events','title' => $this->_tpl_vars['form']['events']['label']), $this);?>
</td>
              <td><?php echo $this->_tpl_vars['form']['events']['html']; ?>
<td>
            </tr>
            <tr class="crm-discount-item-form-block-event-types">
              <td class="label"><?php echo $this->_tpl_vars['form']['event_type_id']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'eventtypes','title' => $this->_tpl_vars['form']['eventstypes']['label']), $this);?>
</td>
              <td><?php echo $this->_tpl_vars['form']['event_type_id']['html']; ?>
</td>
            </tr>
          </table>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['form']['memberships']): ?>
      <div class="crm-accordion-wrapper <?php if ($this->_tpl_vars['action'] == 1): ?>collapsed <?php endif; ?>crm-discount-form-block-memberships">
        <div class="crm-accordion-header">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Discounts for memberships<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="crm-accordion-body">
          <table class="form-layout-compressed">
            <tr class="crm-discount-item-form-block-memberships">
              <td class="label"><?php echo $this->_tpl_vars['form']['memberships']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'memberships','title' => $this->_tpl_vars['form']['memberships']['label']), $this);?>
</td>
              <td><?php echo $this->_tpl_vars['form']['memberships']['html']; ?>
<br/></td>
            </tr>
          </table>
        </div>
      </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['autodiscounts']): ?>
      <div class="crm-accordion-wrapper collapsed crm-discount-form-block-other-criteria">
        <div class="crm-accordion-header">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatic Discounts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="crm-accordion-body">
          <p class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Discount will be applied automatically if all of the following conditions are met (no code needed).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => 'autodiscount','title' => 'Automatic discounts'), $this);?>
</p>
          <table class="form-layout-compressed">
            <?php $_from = $this->_tpl_vars['autodiscounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['autodiscount']):
?>
              <tr class="crm-discount-item-form-block-auto-discount">
                <td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['autodiscount']]['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['autodiscount']]['html']; ?>
</td>
              </tr>
            <?php endforeach; endif; unset($_from); ?>
            <tr class="crm-discount-item-form-block-advanced_autodiscount_filter_entity">
              <td class="label"><?php echo $this->_tpl_vars['form']['advanced_autodiscount_filter_entity']['label']; ?>
</td>
              <td><?php echo $this->_tpl_vars['form']['advanced_autodiscount_filter_entity']['html']; ?>
</td>
            </tr>
            <tr>
              <td class="label"><?php echo $this->_tpl_vars['form']['advanced_autodiscount_filter_string']['label']; ?>
</td>
              <td><?php echo $this->_tpl_vars['form']['advanced_autodiscount_filter_string']['html']; ?>
</td>
            </tr>
          </table>
        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      $(\'#discount_msg_enabled\').change(function() {
        $(\'.crm-discount-item-form-block-discount-message\').toggle($(this).is(\':checked\'));
      }).change();

      $("#generate-code").click(function (e) {
        $("#code").val(randomString("abcdefghjklmnpqrstwxyz23456789", 8));
        e.preventDefault();
      });

      // Yanked from http://stackoverflow.com/questions/2477862/jquery-password-generator
      function randomString(chars, len) {
        var i = 0, str = "", $max, $num, $temp;
        while (i <= len) {
          $max = chars.length - 1;
          $num = Math.floor(Math.random() * $max);
          $temp = chars.substr($num, 1);
          str += $temp;
          i++;
        }

        return str;
      }
    });

  </script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>