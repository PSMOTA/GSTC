<?php /* Smarty version 2.6.27, created on 2017-06-19 22:15:07
         compiled from CRM/common/TabHeader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/common/TabHeader.tpl', 1, false),array('block', 'ts', 'CRM/common/TabHeader.tpl', 34, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-content-block">
  <?php if ($this->_tpl_vars['tabHeader'] && count ( $this->_tpl_vars['tabHeader'] )): ?>
    <div id="mainTabContainer">
    <ul>
       <?php $_from = $this->_tpl_vars['tabHeader']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tabName'] => $this->_tpl_vars['tabValue']):
?>
          <li id="tab_<?php echo $this->_tpl_vars['tabName']; ?>
" class="crm-tab-button ui-corner-all<?php if (! $this->_tpl_vars['tabValue']['valid']): ?> disabled<?php endif; ?><?php if (isset ( $this->_tpl_vars['tabValue']['class'] )): ?> <?php echo $this->_tpl_vars['tabValue']['class']; ?>
<?php endif; ?>" <?php echo $this->_tpl_vars['tabValue']['extra']; ?>
>
          <?php if ($this->_tpl_vars['tabValue']['active']): ?>
             <a href="<?php if (! empty ( $this->_tpl_vars['tabValue']['template'] )): ?>#panel_<?php echo $this->_tpl_vars['tabName']; ?>
<?php else: ?><?php echo $this->_tpl_vars['tabValue']['link']; ?>
<?php endif; ?>" title="<?php echo $this->_tpl_vars['tabValue']['title']; ?>
<?php if (! $this->_tpl_vars['tabValue']['valid']): ?> (<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>disabled<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php endif; ?>"><?php echo $this->_tpl_vars['tabValue']['title']; ?>
<?php if (isset ( $this->_tpl_vars['tabValue']['count'] )): ?> <em><?php echo $this->_tpl_vars['tabValue']['count']; ?>
</em><?php endif; ?></a>
          <?php else: ?>
             <span <?php if (! $this->_tpl_vars['tabValue']['valid']): ?> title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>disabled<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php endif; ?>><?php echo $this->_tpl_vars['tabValue']['title']; ?>
</span>
          <?php endif; ?>
          </li>
       <?php endforeach; endif; unset($_from); ?>
    </ul>
      <?php $_from = $this->_tpl_vars['tabHeader']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tabName'] => $this->_tpl_vars['tabValue']):
?>
        <?php if (! empty ( $this->_tpl_vars['tabValue']['template'] )): ?>
          <div id="#panel_<?php echo $this->_tpl_vars['tabName']; ?>
">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['tabValue']['template'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          </div>
        <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
    </div>
  <?php endif; ?>
  <div class="clear"></div>
</div> <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>