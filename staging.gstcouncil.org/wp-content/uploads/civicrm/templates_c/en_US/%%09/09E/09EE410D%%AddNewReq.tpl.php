<?php /* Smarty version 2.6.27, created on 2017-06-21 10:37:54
         compiled from CRM/Admin/Page/Extensions/AddNewReq.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Page/Extensions/AddNewReq.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-content-block crm-block">
  <?php $_from = $this->_tpl_vars['extAddNewReqs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['req']):
?>
  <div class="messages status no-popup">
       <div class="icon inform-icon"></div>
       <?php echo $this->_tpl_vars['req']['title']; ?>
<br/>
       <?php echo $this->_tpl_vars['req']['message']; ?>

  </div>
  <?php endforeach; endif; unset($_from); ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>