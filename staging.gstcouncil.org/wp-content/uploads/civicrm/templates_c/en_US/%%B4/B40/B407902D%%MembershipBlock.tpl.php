<?php /* Smarty version 2.6.27, created on 2017-06-26 09:59:50
         compiled from CRM/Member/Form/MembershipBlock.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Member/Form/MembershipBlock.tpl', 1, false),array('block', 'ts', 'CRM/Member/Form/MembershipBlock.tpl', 29, false),array('function', 'docURL', 'CRM/Member/Form/MembershipBlock.tpl', 29, false),array('function', 'crmURL', 'CRM/Member/Form/MembershipBlock.tpl', 69, false),array('function', 'help', 'CRM/Member/Form/MembershipBlock.tpl', 123, false),array('modifier', 'cat', 'CRM/Member/Form/MembershipBlock.tpl', 105, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div id="form" class="crm-block crm-form-block crm-member-membershipblock-form-block">
<div class="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use this form to enable and configure a Membership Signup and Renewal section for this Online Contribution Page. If you're not using this page for membership signup, leave the <strong>Enabled</strong> box un-checked..<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_docURL(array('page' => "user/membership/setup"), $this);?>

</div>
  <?php if ($this->_tpl_vars['form']['membership_type']['html']): ?>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <table class="form-layout-compressed">
        <tr class="crm-member-membershipblock-form-block-member_is_active">
            <td class="label"></td><td class="html-adjust"><?php echo $this->_tpl_vars['form']['member_is_active']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['member_is_active']['label']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Include a Membership Signup section in this Online Contribution page?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
    </table>
    <div id="memberFields">
      <table class="form-layout-compressed">
          <tr class="crm-member-membershipblock-form-block-new_title">
              <td class="label"><?php echo $this->_tpl_vars['form']['new_title']['label']; ?>

              <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_membership_block','field' => 'new_title','id' => $this->_tpl_vars['membershipBlockId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td><td><?php echo $this->_tpl_vars['form']['new_title']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership section title - for new member signups.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
          </tr>
          <tr class="crm-member-membershipblock-form-block-new_text">
              <td class="label"><?php echo $this->_tpl_vars['form']['new_text']['label']; ?>

              <?php if ($this->_tpl_vars['action'] == 2): ?><br /><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_membership_block','field' => 'new_text','id' => $this->_tpl_vars['membershipBlockId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
              </td>
              <td><?php echo $this->_tpl_vars['form']['new_text']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership section introductory text - for new member signups.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br /></span><br /></td>
          </tr>
          <tr class="crm-member-membershipblock-form-block-renewal_title">
              <td class="label"><?php echo $this->_tpl_vars['form']['renewal_title']['label']; ?>

              <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_membership_block','field' => 'renewal_title','id' => $this->_tpl_vars['membershipBlockId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td><td><?php echo $this->_tpl_vars['form']['renewal_title']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership section title - displayed to renewing members.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
          </tr>
          <tr class="crm-member-membershipblock-form-block-renewal_text">
              <td class="label"><?php echo $this->_tpl_vars['form']['renewal_text']['label']; ?>

                <?php if ($this->_tpl_vars['action'] == 2): ?><br /><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_membership_block','field' => 'renewal_text','id' => $this->_tpl_vars['membershipBlockId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
              </td>
              <td><?php echo $this->_tpl_vars['form']['renewal_text']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership section introductory text - displayed to renewing members.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span><br /></td>
          </tr>
        <tr class="crm-member-membershipblock-form-block-member_price_set_id">
              <td class="label"><?php echo $this->_tpl_vars['form']['member_price_set_id']['label']; ?>
</td>
              <td>
              <?php if ($this->_tpl_vars['price'] == false): ?>
                <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/admin/price",'q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('adminPriceSetsURL', ob_get_contents());ob_end_clean(); ?>
            <div class="status message"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['adminPriceSetsURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No Membership Price Sets have been configured / enabled for your site. Price sets allow you to configure more complex membership signup and renewal options, including allowing constituents to sign up for multiple memberships at the same time. Click <a href='%1'>here</a> if you want to configure price sets for your site.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <?php else: ?>
              <?php echo $this->_tpl_vars['form']['member_price_set_id']['html']; ?>

          <?php endif; ?>
          </td>
        </tr>
    <?php if ($this->_tpl_vars['isQuick']): ?>
    <tr id="quickConfigConvertMessage">
      <td></td>
      <td><div class="status message"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <a id='memQuickconfig' href='#'>here</a> if you want to configure the Membership Types below as part of a Price Set, with the added flexibility and complexity that entails.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div></td>
    </tr>
    <?php endif; ?>
          <tr id="membership_type-label" class="crm-member-membershipblock-form-block-membership_type_label">
            <td class="label"><?php echo $this->_tpl_vars['form']['membership_type_label']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['membership_type_label']['html']; ?>
</td>
          </tr>
          <tr id="membership_type-block" class="crm-member-membershipblock-form-block-membership_type">
              <td class="label"><?php echo $this->_tpl_vars['form']['membership_type']['label']; ?>
</td>
              <td>
                <?php $this->assign('count', '1'); ?>
                <?php echo '<table class="report"><tr class="columnheader" style="vertical-align:top;"><th style="border-right: 1px solid #4E82CF;">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Include these membership types'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th'; ?><?php if ($this->_tpl_vars['is_recur']): ?><?php echo ' style="border-right: 1px solid #4E82CF;"'; ?><?php endif; ?><?php echo '>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Default'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '<br /></th>'; ?><?php if ($this->_tpl_vars['is_recur']): ?><?php echo '<th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Auto-renew'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th>'; ?><?php endif; ?><?php echo '</tr>'; ?><?php $this->assign('index', '1'); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['form']['membership_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['outer']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['index'] < 10): ?><?php echo ''; ?><?php $this->assign('index', ($this->_tpl_vars['index']+1)); ?><?php echo ''; ?><?php else: ?><?php echo '<tr><td class="labels font-light">'; ?><?php echo $this->_tpl_vars['form']['membership_type'][$this->_tpl_vars['key']]['html']; ?><?php echo '</td><td class="labels font-light">'; ?><?php echo $this->_tpl_vars['form']['membership_type_default'][$this->_tpl_vars['key']]['html']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['is_recur']): ?><?php echo '<td class="labels font-light">'; ?><?php if ($this->_tpl_vars['auto_renew'][$this->_tpl_vars['key']]): ?><?php echo ''; ?><?php $this->assign('element', ((is_array($_tmp=((is_array($_tmp='auto_renew')) ? $this->_run_mod_handler('cat', true, $_tmp, '_') : smarty_modifier_cat($_tmp, '_')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['key']))); ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['element']]['html']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '(Not Available)'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php endif; ?><?php echo '</td>'; ?><?php endif; ?><?php echo '</tr>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

              </td>
          </tr>
          <tr id="requiredSignup" class="crm-member-membershipblock-form-block-is_required">
              <td class="label"></td><td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_required']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['is_required']['label']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If checked, user must signup for one of the displayed membership options before continuing.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
          </tr>
          <tr id="separatePayment" class="crm-member-membershipblock-form-block-is_separate_payment">
              <td class="label"></td><td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_separate_payment']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['is_separate_payment']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-separate-pay"), $this);?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box if you are including both Membership Signup/Renewal AND a Contribution Amount section, AND you want the membership fee to be charged separately from any additional contribution amount.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
          </tr>
          <tr id="displayFee" class="crm-member-membershipblock-form-block-display_min_fee">
              <td class="label"></td><td class="html-adjust"><?php echo $this->_tpl_vars['form']['display_min_fee']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['display_min_fee']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-display-fee"), $this);?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Display the membership fee along with the membership name and description for each membership option?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
    </tr>

      </table>
   </div>
  <?php else: ?>
      <div class="status message">
         <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/admin/member/membershipType",'q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('linkURL', ob_get_contents());ob_end_clean(); ?>
         <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['linkURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You need to have at least one <a href="%1">Membership Type</a> with 'Public' visibility in order to enable self-service Membership Signup and Renewal.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
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
        //show/hide membership block
        showHideMembershipBlock();
        $(\'#member_is_active\').click( function() {
            showHideMembershipBlock();
        });

        //show/ hide blocks if price set is selected
        checkIfPriceSetIsSelected( );
        $(\'#member_price_set_id\').change( function(){
            checkIfPriceSetIsSelected( );
        });
    });

    // function to show/hide membership block fields
    function showHideMembershipBlock( ) {
      if ( cj(\'#member_is_active\').prop(\'checked\') ) {
        cj(\'#memberFields\').show();
      } else {
        cj(\'#memberFields\').hide();
      }
    }
    // function to handle show/hide of membership type and related blocks if price set is selected
    function checkIfPriceSetIsSelected( ) {
        if ( cj(\'#member_price_set_id\').val() ) {
            cj(\'#membership_type-label\').hide();
            cj(\'#membership_type-block\').hide();
            cj(\'#displayFee\').hide();
            cj(\'#separatePayment\').hide();
            cj(\'#quickConfigConvertMessage\').hide();
        } else {
            cj(\'#membership_type-label\').show();
            cj(\'#membership_type-block\').show();
            cj(\'#displayFee\').show();
            cj(\'#separatePayment\').show();
        }
    }
</script>
'; ?>


<?php if ($this->_tpl_vars['isQuick']): ?>
<?php echo '
<script type="text/javascript">
  CRM.$(function($) {
    $("#memQuickconfig").click(function(e) {
      e.preventDefault();
      CRM.confirm({
        width: 400,
        message: '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Once you switch to using a Price Set, you won't be able to switch back to your existing settings below except by re-entering them. Are you sure you want to switch to a Price Set?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo '
      }).on(\'crmConfirm:yes\', function() {
        '; ?>

        var dataUrl = '<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/ajax/rest",'h' => 0,'q' => "className=CRM_Core_Page_AJAX&fnName=setIsQuickConfig&context=civicrm_contribution_page&id=".($this->_tpl_vars['contributionPageID'])), $this);?>
';
        <?php echo '
        $.getJSON(dataUrl).done(function(result) {window.location = CRM.url("civicrm/admin/price/field", {reset: 1, action: \'browse\', sid: result});});
      });
    });
  });
</script>
'; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>