<?php /* Smarty version 2.6.27, created on 2017-06-26 13:53:33
         compiled from string:%7Bstrip%7D%7Bif+%24title%7D++%7Bif+%24component%7D++++%7Bif+%24component+%3D%3D+%27event%27%7D++++++%7Bts+1%3D%24title%7DEvent+Registration+Invoice:+%251%7B/ts%7D++++%7Belse%7D++++++%7Bts+1%3D%24title%7DContribution+Invoice:+%251%7B/ts%7D++++%7B/if%7D++%7B/if%7D%7Belse%7D++%7Bts%7DInvoice%7B/ts%7D%7B/if%7D%7B/strip%7D */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:{strip}{if $title}  {if $component}    {if $component == \'event\'}      {ts 1=$title}Event Registration Invoice: %1{/ts}    {else}      {ts 1=$title}Contribution Invoice: %1{/ts}    {/if}  {/if}{else}  {ts}Invoice{/ts}{/if}{/strip}', 1, false),array('block', 'ts', 'string:{strip}{if $title}  {if $component}    {if $component == \'event\'}      {ts 1=$title}Event Registration Invoice: %1{/ts}    {else}      {ts 1=$title}Contribution Invoice: %1{/ts}    {/if}  {/if}{else}  {ts}Invoice{/ts}{/if}{/strip}', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['title']): ?><?php echo '  '; ?><?php if ($this->_tpl_vars['component']): ?><?php echo '    '; ?><?php if ($this->_tpl_vars['component'] == 'event'): ?><?php echo '      '; ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Event Registration Invoice: %1'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '    '; ?><?php else: ?><?php echo '      '; ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Contribution Invoice: %1'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '    '; ?><?php endif; ?><?php echo '  '; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo '  '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Invoice'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>