<?php /* Smarty version 2.6.27, created on 2017-06-25 12:26:13
         compiled from CRM/Core/AgeRange.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Core/AgeRange.tpl', 1, false),array('modifier', 'cat', 'CRM/Core/AgeRange.tpl', 30, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><td>
  <span class="crm-age-range">
    <span class="crm-age-range-min">
      <?php $this->assign('minName', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['from']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['from']))); ?>
      <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['minName']]['label']; ?>

      <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['minName']]['html']; ?>

    </span>
    <span class="crm-age-range-max">
      <?php $this->assign('maxName', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['to']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['to']))); ?>
      <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['maxName']]['label']; ?>

      <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['maxName']]['html']; ?>

    </span>
  </span>
</td>
<td>
  <span class="crm-age-range-asofdate">
      <?php $this->assign('dateName', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['date']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['date']))); ?>
      <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['dateName']]['label']; ?>

      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => $this->_tpl_vars['dateName'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </span>
  <?php echo '
    <script type="text/javascript">
      cj(".crm-age-range").change(function() {
        if (cj(\'.crm-age-range-min :text\').val() || cj(\'.crm-age-range-max :text\').val()) {
          cj(".crm-age-range-asofdate").show();
        } else {
          cj(".crm-age-range-asofdate").hide();
        }
      }).change();
    </script>
  '; ?>

</td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>