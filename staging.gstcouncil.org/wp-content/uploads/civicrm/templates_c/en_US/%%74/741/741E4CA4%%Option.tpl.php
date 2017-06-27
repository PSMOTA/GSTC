<?php /* Smarty version 2.6.27, created on 2017-06-22 16:48:09
         compiled from CRM/Price/Form/Option.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Price/Form/Option.tpl', 1, false),array('block', 'ts', 'CRM/Price/Form/Option.tpl', 30, false),array('function', 'help', 'CRM/Price/Form/Option.tpl', 38, false),array('function', 'crmURL', 'CRM/Price/Form/Option.tpl', 74, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-form-block">
  <?php if ($this->_tpl_vars['action'] == 8): ?>
    <div class="messages status no-popup">
      <div class="icon inform-icon"></div>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: Deleting this option will result in the loss of all data.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This action cannot be undone.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
  <?php else: ?>
    <table class="form-layout">
      <?php if ($this->_tpl_vars['showMember']): ?>
        <tr class="crm-price-option-form-block-membership_type_id">
          <td class="label"><?php echo $this->_tpl_vars['form']['membership_type_id']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['membership_type_id']['html']; ?>

            <br /> <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If a membership type is selected, a membership will be created or renewed when users select this option. Leave this blank if you are using this for non-membership options (e.g. magazine subscription).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-member-price-options",'file' => "CRM/Price/Page/Field.hlp"), $this);?>
</span></td>
        </tr>
        <tr class="crm-price-option-form-block-membership_num_terms">
          <td class="label"><?php echo $this->_tpl_vars['form']['membership_num_terms']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['membership_num_terms']['html']; ?>

            <br /> <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can set this to a number other than one to allow multiple membership terms.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
      <?php endif; ?>
      <tr class="crm-price-option-form-block-label">
        <td class="label"><?php echo $this->_tpl_vars['form']['label']['label']; ?>
</td>
        <td><?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_price_field_value','field' => 'label','id' => $this->_tpl_vars['optionId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo $this->_tpl_vars['form']['label']['html']; ?>
</td>
      </tr>
      <tr class="crm-price-option-form-block-amount">
        <td class="label"><?php echo $this->_tpl_vars['form']['amount']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['amount']['html']; ?>
</td>
      </tr>
      <tr class="crm-price-option-form-block-non-deductible-amount">
        <td class="label"><?php echo $this->_tpl_vars['form']['non_deductible_amount']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['non_deductible_amount']['html']; ?>
</td>
      </tr>
      <tr class="crm-price-option-form-block-description">
        <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
</td>
        <td><?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_price_field_value','field' => 'description','id' => $this->_tpl_vars['optionId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
      </tr>
      <tr class="crm-price-option-form-block-help-pre">
        <td class="label"><?php echo $this->_tpl_vars['form']['help_pre']['label']; ?>
</td>
        <td><?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_price_field_value','field' => 'help_pre','id' => $this->_tpl_vars['optionId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo $this->_tpl_vars['form']['help_pre']['html']; ?>
</td>
      </tr>
      <tr class="crm-price-option-form-block-help-post">
        <td class="label"><?php echo $this->_tpl_vars['form']['help_post']['label']; ?>
</td>
        <td><?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_price_field_value','field' => 'help_post','id' => $this->_tpl_vars['optionId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo $this->_tpl_vars['form']['help_post']['html']; ?>
</td>
      </tr>
      <tr class="crm-price-option-form-block-financial-type">
        <td class="label"><?php echo $this->_tpl_vars['form']['financial_type_id']['label']; ?>
</td>
        <td>
          <?php if (! $this->_tpl_vars['financialType']): ?>
            <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/financial/financialType','q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ftUrl', ob_get_contents());ob_end_clean(); ?>
            <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['ftUrl'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no financial types configured with a linked 'Revenue Account of' account. <a href='%1'>Click here</a> if you want to configure financial types for your site.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php else: ?>
            <?php echo $this->_tpl_vars['form']['financial_type_id']['html']; ?>

          <?php endif; ?>
        </td>
      </tr>
            <?php if ($this->_tpl_vars['form']['count']['html']): ?>
        <tr class="crm-price-option-form-block-count">
          <td class="label"><?php echo $this->_tpl_vars['form']['count']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['count']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-participant-count",'file' => "CRM/Price/Page/Field.hlp"), $this);?>
</td>
        </tr>
              <?php endif; ?>
      <?php if ($this->_tpl_vars['form']['max_value']['html']): ?>
        <tr class="crm-price-option-form-block-max_value">
          <td class="label"><?php echo $this->_tpl_vars['form']['max_value']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['max_value']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-participant-max",'file' => "CRM/Price/Page/Field.hlp"), $this);?>
</td>
        </tr>
              <?php endif; ?>
      <tr class="crm-price-option-form-block-weight">
        <td class="label"><?php echo $this->_tpl_vars['form']['weight']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['weight']['html']; ?>
</td>
      </tr>
      <tr class="crm-price-option-form-block-is_active">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
</td>
        <?php if (! $this->_tpl_vars['hideDefaultOption']): ?>
      <tr class="crm-price-option-form-block-is_default">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_default']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['is_default']['html']; ?>
</td>
      </tr>
      <?php endif; ?>
    </table>

  <?php echo '
    <script type="text/javascript">

      function calculateRowValues( ) {
        var mtype = cj("#membership_type_id").val();
        var postUrl = "'; ?>
<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/memType','h' => 0), $this);?>
<?php echo '";
        cj.post( postUrl, {mtype: mtype}, function( data ) {
          cj("#amount").val( data.total_amount );
          cj("#label").val( data.name );

        }, \'json\');
      }
      '; ?>

    </script>
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