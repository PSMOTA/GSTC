<?php /* Smarty version 2.6.27, created on 2017-06-19 19:29:08
         compiled from CRM/Core/Form/ShortCode.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Core/Form/ShortCode.tpl', 1, false),array('block', 'ts', 'CRM/Core/Form/ShortCode.tpl', 27, false),array('modifier', 'json_encode', 'CRM/Core/Form/ShortCode.tpl', 32, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="help">
  <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Can't find your form? Make sure it is active.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="crm-field-wrapper">
  <span class="shortcode-param"><?php echo $this->_tpl_vars['form']['component']['html']; ?>
</span>&nbsp;&nbsp;
  <span class="shortcode-param" data-components='<?php echo json_encode($this->_tpl_vars['selects']); ?>
'><?php echo $this->_tpl_vars['form']['entity']['html']; ?>
</span>
</div>

<?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item'] => $this->_tpl_vars['option']):
?>
  <div class="crm-field-wrapper shortcode-param" data-components='<?php echo json_encode($this->_tpl_vars['option']['components']); ?>
'>
    <?php if ($this->_tpl_vars['form'][$this->_tpl_vars['item']]['label']): ?>
      <p><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['item']]['label']; ?>
</p>
    <?php endif; ?>
    <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['item']]['html']; ?>

  </div>

<?php endforeach; endif; unset($_from); ?>

<?php echo '<style type="text/css">
  #wpadminbar,
  .wp-editor-expand #wp-content-editor-tools,
  .wp-editor-expand div.mce-toolbar-grp {
    z-index: 100 !important;
  }
</style>'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>