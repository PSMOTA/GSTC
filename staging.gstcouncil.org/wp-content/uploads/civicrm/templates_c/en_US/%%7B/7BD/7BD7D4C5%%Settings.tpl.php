<?php /* Smarty version 2.6.27, created on 2017-06-20 14:50:12
         compiled from CRM/Contribute/Form/ContributionPage/Settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/ContributionPage/Settings.tpl', 1, false),array('block', 'crmRegion', 'CRM/Contribute/Form/ContributionPage/Settings.tpl', 27, false),array('block', 'ts', 'CRM/Contribute/Form/ContributionPage/Settings.tpl', 31, false),array('function', 'help', 'CRM/Contribute/Form/ContributionPage/Settings.tpl', 43, false),array('function', 'crmURL', 'CRM/Contribute/Form/ContributionPage/Settings.tpl', 57, false),array('function', 'crmAPI', 'CRM/Contribute/Form/ContributionPage/Settings.tpl', 123, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribute-form-contributionpage-settings-main")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="crm-block crm-form-block crm-contribution-contributionpage-settings-form-block">
<div class="help">
    <?php if ($this->_tpl_vars['action'] == 0): ?>
        <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This is the first step in creating a new online Contribution Page. You can create one or more different Contribution Pages for different purposes, audiences, campaigns, etc. Each page can have it's own introductory message, pre-configured contribution amounts, custom data collection fields, etc.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>In this step, you will configure the page title, financial type (donation, campaign contribution, etc.), goal amount, and introductory message. You will be able to go back and modify all aspects of this page at any time after completing the setup wizard.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    <?php else: ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use this form to edit the page title, financial type (e.g. donation, campaign contribution, etc.), goal amount, introduction, and status (active/inactive) for this online contribution page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php endif; ?>
</div>
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  <table class="form-layout-compressed">
  <tr class="crm-contribution-contributionpage-settings-form-block-title"><td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contribution_page','field' => 'title','id' => $this->_tpl_vars['contributionPageID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td><td><?php echo $this->_tpl_vars['form']['title']['html']; ?>
<br/>
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This title will be displayed at the top of the page.<br />Please use only alphanumeric, spaces, hyphens and dashes for Title.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
  </tr>
  <tr class="crm-contribution-contributionpage-settings-form-block-financial_type_id"><td class="label"><?php echo $this->_tpl_vars['form']['financial_type_id']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['financial_type_id']['html']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the corresponding financial type for contributions made using this page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span> <?php echo smarty_function_help(array('id' => "id-financial_type"), $this);?>
</td>
  </tr>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Campaign/Form/addCampaignToComponent.tpl", 'smarty_include_vars' => array('campaignTrClass' => "crm-contribution-contributionpage-settings-form-block-campaign_id")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <tr class="crm-contribution-contributionpage-settings-form-block-is_organization"><td>&nbsp;</td><td><?php echo $this->_tpl_vars['form']['is_organization']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_organization']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-is_organization"), $this);?>
</td></tr>
  <tr id="for_org_option" class="crm-contribution-form-block-is_organization">
        <td>&nbsp;</td>
        <td>
            <table class="form-layout-compressed">
            <tr class="crm-contribution-for_organization_help">
                <td class="description" colspan="2">
                    <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/uf/group','q' => 'reset=1'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('profileURL', ob_get_contents());ob_end_clean(); ?>
                    <?php if ($this->_tpl_vars['invalidProfiles']): ?>
                      <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['profileURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You must <a href="%1">configure a valid organization profile</a> in order to allow individuals to contribute on behalf of an organization. Valid profiles include Contact and / or Organization fields, and may include Contribution and Membership fields.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    <?php else: ?>
                      <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['profileURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>To change the organization data collected use the "On Behalf Of Organization" profile (<a href="%1">Administer > Customize Data and Screens > Profiles</a>).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    <?php endif; ?>
                </td>
            </tr>
            <?php if (! $this->_tpl_vars['invalidProfiles']): ?>
              <tr class="crm-contribution-onbehalf_profile_id">
                <td class="label"><?php echo $this->_tpl_vars['form']['onbehalf_profile_id']['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['onbehalf_profile_id']['html']; ?>
</td>
              </tr>
            <?php endif; ?>
            <tr id="for_org_text" class="crm-contribution-contributionpage-settings-form-block-for_organization">
                <td class="label"><?php echo $this->_tpl_vars['form']['for_organization']['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['for_organization']['html']; ?>
<br />
                    <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Text displayed next to the checkbox on the contribution form.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                </td>
            </tr>
            <tr class="crm-contribution-contributionpage-settings-form-block-is_for_organization">
                <td>&nbsp;</td>
                <td><?php echo $this->_tpl_vars['form']['is_for_organization']['html']; ?>
<br />
                    <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check 'Required' to force ALL users to contribute/signup on behalf of an organization.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                </td>
            </tr>
            </table>
        </td>
    </tr>
  <tr class="crm-contribution-contributionpage-settings-form-block-intro_text">
      <td class ="label"><?php echo $this->_tpl_vars['form']['intro_text']['label']; ?>
<br /> <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contribution_page','field' => 'intro_text','id' => $this->_tpl_vars['contributionPageID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?> <?php echo smarty_function_help(array('id' => "id-intro_msg"), $this);?>
</td><td><?php echo $this->_tpl_vars['form']['intro_text']['html']; ?>
</td>
  </tr>
  <tr class="crm-contribution-contributionpage-settings-form-block-footer_text">
      <td class ="label"><?php echo $this->_tpl_vars['form']['footer_text']['label']; ?>
<br /> <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contribution_page','field' => 'footer_text','id' => $this->_tpl_vars['contributionPageID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?> <?php echo smarty_function_help(array('id' => "id-footer_msg"), $this);?>
</td><td><?php echo $this->_tpl_vars['form']['footer_text']['html']; ?>
</td>
  </tr>
  <tr class="crm-contribution-contributionpage-settings-form-block-goal_amount">
      <td class ="label"><?php echo $this->_tpl_vars['form']['goal_amount']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['goal_amount']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-goal_amount"), $this);?>
</td>
  </tr>
  <tr class="crm-contribution-contributionpage-settings-form-block-start_date">
      <td class ="label"><?php echo $this->_tpl_vars['form']['start_date']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-start_date"), $this);?>
</td>
      <td>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'start_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </td>
    </tr>
  <tr class="crm-contribution-contributionpage-settings-form-block-end_date">
      <td class ="label"><?php echo $this->_tpl_vars['form']['end_date']['label']; ?>
</td>
      <td>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'end_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </td>
    </tr>
  <tr class="crm-contribution-contributionpage-settings-form-block-honor_block_is_active">
      <td>&nbsp;</td><td><?php echo $this->_tpl_vars['form']['honor_block_is_active']['html']; ?>
<?php echo $this->_tpl_vars['form']['honor_block_is_active']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-honoree_section"), $this);?>
</td>
  </tr>
</table>
<table class="form-layout-compressed" id="honor">
    <tr class="crm-contribution-contributionpage-settings-form-block-honor_block_title">
        <td class="label">
            <?php echo $this->_tpl_vars['form']['honor_block_title']['label']; ?>

       </td>
       <td>
           <?php echo $this->_tpl_vars['form']['honor_block_title']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Title for the Honoree section (e.g. &quot;Honoree Information&quot;).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
       </td>
   </tr>
   <tr class="crm-contribution-contributionpage-settings-form-block-honor_block_text">
       <td class="label">
           <?php echo smarty_function_crmAPI(array('var' => 'result','entity' => 'OptionGroup','action' => 'get','sequential' => 1,'name' => 'soft_credit_type'), $this);?>

           <?php echo $this->_tpl_vars['form']['honor_block_text']['label']; ?>

       </td>
       <td>
           <?php echo $this->_tpl_vars['form']['honor_block_text']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Optional explanatory text for the Honoree section (displayed above the Honoree fields).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
       </td>
  </tr>
  <tr class="crm-contribution-contributionpage-settings-form-block-honor_soft_credit_types">
      <td class="label">
          <?php echo $this->_tpl_vars['form']['soft_credit_types']['label']; ?>

      </td>
      <td>
        <?php echo $this->_tpl_vars['form']['soft_credit_types']['html']; ?>

      </td>
  </tr>
  <tr class="crm-contribution-contributionpage-custom-form-block-custom_pre_id">
      <td class="label">
          <?php echo $this->_tpl_vars['form']['honoree_profile']['label']; ?>

      </td>
      <td class="html-adjust">
          <?php echo $this->_tpl_vars['form']['honoree_profile']['html']; ?>

          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Profile to be included in the honoree section<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      </td>
   </tr>
</table>
<table class="form-layout-compressed">
        <tr class="crm-contribution-contributionpage-settings-form-block-is_confirm_enabled">
        <td>&nbsp;</td>
        <td><?php echo $this->_tpl_vars['form']['is_confirm_enabled']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_confirm_enabled']['label']; ?>
<br />
        <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If you disable this contributions will be processed immediately after submitting the contribution form.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
      </tr>
        <tr class="crm-contribution-contributionpage-settings-form-block-is_share">
        <td>&nbsp;</td>
        <td><?php echo $this->_tpl_vars['form']['is_share']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_share']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-is_share"), $this);?>
</td>
      </tr>
    <tr class="crm-contribution-contributionpage-settings-form-block-is_active"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
<br />
  <?php if ($this->_tpl_vars['contributionPageID']): ?>
        <span class="description">
          <?php if ($this->_tpl_vars['config']->userSystem->is_drupal || $this->_tpl_vars['config']->userFramework == 'WordPress'): ?>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When your page is active, you can link people to the page by copying and pasting the following URL:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
              <strong><?php echo CRM_Utils_System::crmURL(array('a' => 1,'fe' => 1,'p' => 'civicrm/contribute/transact','q' => "reset=1&id=".($this->_tpl_vars['contributionPageID'])), $this);?>
</strong>
          <?php elseif ($this->_tpl_vars['config']->userFramework == 'Joomla'): ?>
              <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When your page is active, create front-end links to the contribution page using the Menu Manager. Select <strong>Administer CiviCRM &raquo; CiviContribute &raquo; Manage Contribution Pages</strong> and select <strong>%1</strong> for the contribution page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php endif; ?>
    </span>
      <?php endif; ?>
  </td>
  </tr>
       </table>
   <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_organization','trigger_value' => 1,'target_element_id' => 'for_org_text','target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_organization','trigger_value' => 1,'target_element_id' => 'for_org_option','target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
 showHonor();
 <?php echo '
     function showHonor() {
        var checkbox = document.getElementsByName("honor_block_is_active");
        if (checkbox[0].checked) {
            document.getElementById("honor").style.display = "block";
        } else {
            document.getElementById("honor").style.display = "none";
        }
     }
 '; ?>

</script>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribute-form-contributionpage-settings-post")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>