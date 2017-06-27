<?php /* Smarty version 2.6.27, created on 2017-06-21 00:01:49
         compiled from CRM/Event/Form/Registration/EventInfoBlock.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/Registration/EventInfoBlock.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/Registration/EventInfoBlock.tpl', 31, false),array('function', 'crmURL', 'CRM/Event/Form/Registration/EventInfoBlock.tpl', 31, false),array('modifier', 'crmDate', 'CRM/Event/Form/Registration/EventInfoBlock.tpl', 39, false),array('modifier', 'date_format', 'CRM/Event/Form/Registration/EventInfoBlock.tpl', 43, false),array('modifier', 'nl2br', 'CRM/Event/Form/Registration/EventInfoBlock.tpl', 56, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><table class="form-layout">
  <tr>
    <td colspan="2">
    <?php if ($this->_tpl_vars['context'] == 'ThankYou'): ?>         <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/info','q' => "reset=1&id=".($this->_tpl_vars['event']['id'])), $this);?>
"title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View complete event information.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><strong><?php echo $this->_tpl_vars['event']['event_title']; ?>
</strong></a>
    <?php else: ?>
        <strong><?php echo $this->_tpl_vars['event']['event_title']; ?>
</strong>
    <?php endif; ?>
    </td>
  </tr>
  <tr><td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
      <td width="90%">
        <?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

        <?php if ($this->_tpl_vars['event']['event_end_date']): ?>
            &nbsp; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>through<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &nbsp;
                        <?php if (((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d")) == ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d"))): ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, 0, 1) : smarty_modifier_crmDate($_tmp, 0, 1)); ?>

            <?php else: ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

            <?php endif; ?>
        <?php endif; ?>
      </td>
  </tr>

  <?php if ($this->_tpl_vars['isShowLocation']): ?>
    <?php if ($this->_tpl_vars['location']['address']['1']): ?>
      <tr><td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Location<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
          <td>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['location']['address']['1']['display'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

            <?php if (( $this->_tpl_vars['event']['is_map'] && $this->_tpl_vars['config']->mapProvider && ( ( ! empty ( $this->_tpl_vars['location']['address']['1']['geo_code_1'] ) && is_numeric ( $this->_tpl_vars['location']['address']['1']['geo_code_1'] ) ) || ( ! empty ( $this->_tpl_vars['location']['address']['1']['city'] ) && ! empty ( $this->_tpl_vars['location']['address']['1']['state_province'] ) ) ) )): ?>
              <br/><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/map/event','q' => "reset=1&eid=".($this->_tpl_vars['event']['id'])), $this);?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Map this Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" target="_blank"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Map this Location<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
            <?php endif; ?>
          </td>
      </tr>
    <?php endif; ?>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['location']['phone']['1']['phone'] || $this->_tpl_vars['location']['email']['1']['email']): ?>
    <tr><td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
        <td>
                   <?php $_from = $this->_tpl_vars['location']['phone']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['phone']):
?>
             <?php if ($this->_tpl_vars['phone']['phone']): ?>
                <?php if ($this->_tpl_vars['phone']['phone_type']): ?><?php echo $this->_tpl_vars['phone']['phone_type_display']; ?>
<?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Phone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>: <?php echo $this->_tpl_vars['phone']['phone']; ?>
 <?php if ($this->_tpl_vars['phone']['phone_ext']): ?>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>ext.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['phone']['phone_ext']; ?>
<?php endif; ?>
                <br />
            <?php endif; ?>
           <?php endforeach; endif; unset($_from); ?>

           <?php $_from = $this->_tpl_vars['location']['email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['email']):
?>
              <?php if ($this->_tpl_vars['email']['email']): ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <a href="mailto:<?php echo $this->_tpl_vars['email']['email']; ?>
"><?php echo $this->_tpl_vars['email']['email']; ?>
</a>
              <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </td>
    </tr>
   <?php endif; ?>
</table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>