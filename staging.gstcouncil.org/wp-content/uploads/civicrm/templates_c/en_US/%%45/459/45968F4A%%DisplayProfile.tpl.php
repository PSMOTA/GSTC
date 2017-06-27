<?php /* Smarty version 2.6.27, created on 2017-06-21 00:01:49
         compiled from CRM/Event/Form/Registration/DisplayProfile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/Registration/DisplayProfile.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/Registration/DisplayProfile.tpl', 29, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>    <?php if ($this->_tpl_vars['primaryParticipantProfile']): ?>
        <div class="crm-group participant_info-group">
      <div class="header-dark"><?php if ($this->_tpl_vars['addParticipantProfile']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant 1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></div>
            <?php if ($this->_tpl_vars['primaryParticipantProfile']['CustomPre']): ?>
               <fieldset class="label-left no-border"><div class="bold crm-profile-view-title"><?php echo $this->_tpl_vars['primaryParticipantProfile']['CustomPreGroupTitle']; ?>
</div>
                   <?php $_from = $this->_tpl_vars['primaryParticipantProfile']['CustomPre']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['value']):
?>
                      <div class="crm-public-form-item crm-section <?php echo $this->_tpl_vars['field']; ?>
-section">
                          <div class="label"><?php echo $this->_tpl_vars['field']; ?>
</div>
                          <div class="content"><?php echo $this->_tpl_vars['value']; ?>
</div>
                          <div class="clear"></div>
                      </div>
                   <?php endforeach; endif; unset($_from); ?>
               </fieldset>
            <?php endif; ?>
         <?php if ($this->_tpl_vars['primaryParticipantProfile']['CustomPost']): ?>
               <?php $_from = $this->_tpl_vars['primaryParticipantProfile']['CustomPost']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['value']):
?>
                  <fieldset class="label-left no-border"><div class="bold crm-profile-view-title"><?php echo $this->_tpl_vars['primaryParticipantProfile']['CustomPostGroupTitle'][$this->_tpl_vars['field']]['groupTitle']; ?>
</div>
                    <div class="crm-profile-view">
                      <?php $_from = $this->_tpl_vars['primaryParticipantProfile']['CustomPost'][$this->_tpl_vars['field']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['value']):
?>
                        <div class="crm-public-form-item crm-section <?php echo $this->_tpl_vars['field']; ?>
-section">
                          <div class="label"><?php echo $this->_tpl_vars['field']; ?>
</div>
                          <div class="content"><?php echo $this->_tpl_vars['value']; ?>
</div>
                          <div class="clear"></div>
                        </div>
                      <?php endforeach; endif; unset($_from); ?>
                    </div>
                  </fieldset>
               <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
        </div>
        <div class="spacer"></div>
    <?php endif; ?>

        <?php if ($this->_tpl_vars['addParticipantProfile']): ?>
        <?php $_from = $this->_tpl_vars['addParticipantProfile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['participantNo'] => $this->_tpl_vars['participant']):
?>
            <div class="crm-group participant_info-group">
                <div class="header-dark">
                    <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['participantNo'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </div>
            <?php if ($this->_tpl_vars['participant']['additionalCustomPre']): ?>
              <fieldset class="label-left no-border"><div class="bold crm-additional-profile-view-title"><?php echo $this->_tpl_vars['participant']['additionalCustomPreGroupTitle']; ?>
</div>
                <div class="crm-profile-view">
                  <?php $_from = $this->_tpl_vars['participant']['additionalCustomPre']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['value']):
?>
                    <div class="crm-public-form-item crm-section <?php echo $this->_tpl_vars['field']; ?>
-section">
                      <div class="label"><?php echo $this->_tpl_vars['field']; ?>
</div>
                      <div class="content"><?php echo $this->_tpl_vars['value']; ?>
</div>
                      <div class="clear"></div>
                    </div>
                  <?php endforeach; endif; unset($_from); ?>
                </div>
              </fieldset>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['participant']['additionalCustomPost']): ?>
              <?php $_from = $this->_tpl_vars['participant']['additionalCustomPost']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['value']):
?>
                <fieldset class="label-left no-border"><div class="bold crm-additional-profile-view-title"><?php echo $this->_tpl_vars['participant']['additionalCustomPostGroupTitle'][$this->_tpl_vars['field']]['groupTitle']; ?>
</div>
                  <div class="crm-profile-view">
                    <?php $_from = $this->_tpl_vars['participant']['additionalCustomPost'][$this->_tpl_vars['field']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['value']):
?>
                      <div class="crm-public-form-item crm-section <?php echo $this->_tpl_vars['field']; ?>
-section">
                        <div class="label"><?php echo $this->_tpl_vars['field']; ?>
</div>
                        <div class="content"><?php echo $this->_tpl_vars['value']; ?>
</div>
                        <div class="clear"></div>
                      </div>
                    <?php endforeach; endif; unset($_from); ?>
                  </div>
                </fieldset>
              <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            </div>
            <div class="spacer"></div>
        <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>