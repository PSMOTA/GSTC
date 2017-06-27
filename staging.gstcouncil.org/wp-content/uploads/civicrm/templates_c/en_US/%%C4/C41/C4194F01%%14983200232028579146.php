<?php /* Smarty version 2.6.27, created on 2017-06-25 00:00:23
         compiled from string:Membership+Renewal+Reminder%0A%0A%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%0A%7Bif+%24contact.first_name%7DDear+%7B%24contact.first_name%7Cdefault:Colleague%7D%2C%7Belse%7D+%7B/if%7D%0A%0AThank+you+for+being+a+GSTC+member.+We%E2%80%99d+like+to+remind+you+that+Universidad+Technol%C3%B3gica+de+Le%C3%B3n%E2%80%99s+current+membership+term+expires+in+15+days.%0A%0AMembership+Details%0A%0AMember+Name:+Universidad+Technol%C3%B3gica+de+Le%C3%B3n%0AMembership+Due+Date:+July+10th%2C+2017%0AMember+Since:+September+4th%2C+2014%0AAmount:+350.00%0ADescription:+Academia+and+Educational+Institutes%0A%0ATo+renew+your+membership+now%2C+please+login+to+the+Member+Only+Area+to+access+the+renewal+form:+https://www.gstcouncil.org/en/members-partners/login.html.+Please+note+that+the+renewed+membership+term+will+take+effect+on+July+10th%2C+2017.%0A%0AIf+you+have+any+question+or+need+assistance%2C+please+contact+us+at+members%40gstcouncil.org.%0A%0AYour+valuable+contribution+as+a+member+helps+enable+the+important+work+of+the+GSTC+in+promoting+sustainable+tourism+principles+around+the+world.%0A%0AWe+appreciate+your+support+for+the+GSTC+by+being+a+member%2C+and+hope+you+will+continue+to+play+an+active+role+in+our+global+network.%0A%0ABest+Regards%2C%0A%0AEmi+Kaiwa+%7C+Membership+Coordinator%0Amembers%40gstcouncil.org%0AGlobal+Sustainable+Tourism+Council+%28GSTC%29%0A%0A%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%0A%0AYou+received+this+email+service+announcement+to+update+you+about+your+GSTC+membership.%0A%0A%C2%A9+Global+Sustainable+Tourism+Council%2C+P.O.+Box+96503+%2351887%2C+Washington%2C+DC%2C+20090-6503+USA.+All+rights+reserved. */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:Membership Renewal Reminder

#####################
{if $contact.first_name}Dear {$contact.first_name|default:Colleague},{else} {/if}

Thank you for being a GSTC member. We’d like to remind you that Universidad Technológica de León’s current membership term expires in 15 days.

Membership Details

Member Name: Universidad Technológica de León
Membership Due Date: July 10th, 2017
Member Since: September 4th, 2014
Amount: 350.00
Description: Academia and Educational Institutes

To renew your membership now, please login to the Member Only Area to access the renewal form: https://www.gstcouncil.org/en/members-partners/login.html. Please note that the renewed membership term will take effect on July 10th, 2017.

If you have any question or need assistance, please contact us at members@gstcouncil.org.

Your valuable contribution as a member helps enable the important work of the GSTC in promoting sustainable tourism principles around the world.

We appreciate your support for the GSTC by being a member, and hope you will continue to play an active role in our global network.

Best Regards,

Emi Kaiwa | Membership Coordinator
members@gstcouncil.org
Global Sustainable Tourism Council (GSTC)

#####################

You received this email service announcement to update you about your GSTC membership.

© Global Sustainable Tourism Council, P.O. Box 96503 #51887, Washington, DC, 20090-6503 USA. All rights reserved.', 1, false),array('modifier', 'default', 'string:Membership Renewal Reminder

#####################
{if $contact.first_name}Dear {$contact.first_name|default:Colleague},{else} {/if}

Thank you for being a GSTC member. We’d like to remind you that Universidad Technológica de León’s current membership term expires in 15 days.

Membership Details

Member Name: Universidad Technológica de León
Membership Due Date: July 10th, 2017
Member Since: September 4th, 2014
Amount: 350.00
Description: Academia and Educational Institutes

To renew your membership now, please login to the Member Only Area to access the renewal form: https://www.gstcouncil.org/en/members-partners/login.html. Please note that the renewed membership term will take effect on July 10th, 2017.

If you have any question or need assistance, please contact us at members@gstcouncil.org.

Your valuable contribution as a member helps enable the important work of the GSTC in promoting sustainable tourism principles around the world.

We appreciate your support for the GSTC by being a member, and hope you will continue to play an active role in our global network.

Best Regards,

Emi Kaiwa | Membership Coordinator
members@gstcouncil.org
Global Sustainable Tourism Council (GSTC)

#####################

You received this email service announcement to update you about your GSTC membership.

© Global Sustainable Tourism Council, P.O. Box 96503 #51887, Washington, DC, 20090-6503 USA. All rights reserved.', 4, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Renewal Reminder

#####################
<?php if ($this->_tpl_vars['contact']['first_name']): ?>Dear <?php echo ((is_array($_tmp=@$this->_tpl_vars['contact']['first_name'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Colleague') : smarty_modifier_default($_tmp, 'Colleague')); ?>
,<?php else: ?> <?php endif; ?>

Thank you for being a GSTC member. We’d like to remind you that Universidad Technológica de León’s current membership term expires in 15 days.

Membership Details

Member Name: Universidad Technológica de León
Membership Due Date: July 10th, 2017
Member Since: September 4th, 2014
Amount: 350.00
Description: Academia and Educational Institutes

To renew your membership now, please login to the Member Only Area to access the renewal form: https://www.gstcouncil.org/en/members-partners/login.html. Please note that the renewed membership term will take effect on July 10th, 2017.

If you have any question or need assistance, please contact us at members@gstcouncil.org.

Your valuable contribution as a member helps enable the important work of the GSTC in promoting sustainable tourism principles around the world.

We appreciate your support for the GSTC by being a member, and hope you will continue to play an active role in our global network.

Best Regards,

Emi Kaiwa | Membership Coordinator
members@gstcouncil.org
Global Sustainable Tourism Council (GSTC)

#####################

You received this email service announcement to update you about your GSTC membership.

© Global Sustainable Tourism Council, P.O. Box 96503 #51887, Washington, DC, 20090-6503 USA. All rights reserved.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>