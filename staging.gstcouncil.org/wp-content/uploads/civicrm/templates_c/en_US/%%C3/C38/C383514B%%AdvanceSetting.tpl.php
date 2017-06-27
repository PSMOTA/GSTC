<?php /* Smarty version 2.6.27, created on 2017-06-20 14:47:25
         compiled from CRM/UF/Form/AdvanceSetting.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/UF/Form/AdvanceSetting.tpl', 1, false),array('function', 'help', 'CRM/UF/Form/AdvanceSetting.tpl', 35, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-accordion-wrapper collapsed">
 <div class="crm-accordion-header">
    Advanced Settings
  </div><!-- /.crm-accordion-header -->
  <div class="crm-accordion-body">
  <div class="crm-block crm-form-block crm-uf-advancesetting-form-block">
    <table class="form-layout">
        <tr class="crm-uf-advancesetting-form-block-group">
            <td class="label"><?php echo $this->_tpl_vars['form']['group']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['group']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'id-limit_group','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
        </tr>

        <tr class="crm-uf-advancesetting-form-block-add_contact_to_group">
            <td class="label"><?php echo $this->_tpl_vars['form']['add_contact_to_group']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['add_contact_to_group']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'id-add_group','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
        </tr>

        <tr class="crm-uf-advancesetting-form-block-notify">
            <td class="label"><?php echo $this->_tpl_vars['form']['notify']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['notify']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'id-notify_email','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
        </tr>

        <tr class="crm-uf-advancesetting-form-block-post_URL">
            <td class="label"><?php echo $this->_tpl_vars['form']['post_URL']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['post_URL']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'id-post_URL','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
        </tr>

        <tr class="crm-uf-advancesetting-form-block-cancel_URL">
            <td class="label"><?php echo $this->_tpl_vars['form']['cancel_URL']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['cancel_URL']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'id-cancel_URL','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
        </tr>

        <tr class="crm-uf-advancesetting-form-block-add_captcha">
            <td class="label"></td>
            <td><?php echo $this->_tpl_vars['form']['add_captcha']['html']; ?>
 <?php echo $this->_tpl_vars['form']['add_captcha']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-add_captcha','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
        </tr>

        <tr class="crm-uf-advancesetting-form-block-is_cms_user">
                <td class="label"><?php echo $this->_tpl_vars['form']['is_cms_user']['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['is_cms_user']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'id-is_cms_user','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
        </tr>

        <tr class="crm-uf-advancesetting-form-block-is_update_dupe">
            <td class="label"><?php echo $this->_tpl_vars['form']['is_update_dupe']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['is_update_dupe']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'id-is_update_dupe','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
        </tr>

        <tr class="crm-uf-advancesetting-form-block-is_proximity_search">
            <td class="label"><?php echo $this->_tpl_vars['form']['is_proximity_search']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['is_proximity_search']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'id-is_proximity_search','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td></tr>

        <tr class="crm-uf-advancesetting-form-block-is_map">
            <td class="label"></td>
            <td><?php echo $this->_tpl_vars['form']['is_map']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_map']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-is_map','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
        </tr>

        <tr class="crm-uf-advancesetting-form-block-is_edit_link">
            <td class="label"></td>
            <td><?php echo $this->_tpl_vars['form']['is_edit_link']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_edit_link']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-is_edit_link','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
        </tr>

        <tr class="crm-uf-advancesetting-form-block-is_uf_link">
            <td class="label"></td>
            <td><?php echo $this->_tpl_vars['form']['is_uf_link']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_uf_link']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-is_uf_link','file' => "CRM/UF/Form/Group.hlp"), $this);?>
</td>
        </tr>
    </table>
    </div><!-- / .crm-block -->
  </div><!-- /.crm-accordion-body -->
</div><!-- /.crm-accordion-wrapper -->
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>