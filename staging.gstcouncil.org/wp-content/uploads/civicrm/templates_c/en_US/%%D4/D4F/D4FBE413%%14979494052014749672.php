<?php /* Smarty version 2.6.27, created on 2017-06-20 17:03:25
         compiled from string:Membership+Renewal+Reminder%0A%0A%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%0A%7Bif+%24contact.first_name%7D+Dear+%7B%24contact.first_name%7Cdefault:Colleague%7D%2C+%7Belse%7D+%7B/if%7D%0A%0AThank+you+for+being+part+of+the+GSTC%E2%80%99s+global+network+as+a+member%21%0A%0AThis+is+a+friendly+reminder+that+the+membership+for+Khiri+Travel+expires+in+30+days.+Please+see+your+current+membership+details+and+renewal+information+below.%0A%0AMembership+Details%0A%0AMember+Name:+Khiri+Travel%0AMembership+Due+Date:+July+20th%2C+2017%0AMember+Since:+July+21st%2C+2014%0AAmount:+750.00%0ADescription:+Industry+-+Small/Medium%C2%A0Businesses%C2%A0%283-30+million+US%24%29%0A%0ATo+renew+your+membership+now%2C+please+login+to+the+Member+Only+Area+to+access+the+renewal+form:+https://www.gstcouncil.org/en/members-partners/login.html.+Please+note+that+the+renewed+membership+term+will+take+affect+from+July+20th%2C+2017.%0A%0AIf+you+need+an+invoice+in+advance+of+your+membership+renewal%2C+or+have+any+question+about+your+membership%2C+please+contact+us+at+members%40gstcouncil.org.%0A%0AWe+appreciate+your+support+for+the+GSTC+by+being+a+member%2C+and+hope+you+will+join+us+for+another+exciting+year%21%0A%0ABest+Regards%2C%0A%0AEmi+Kaiwa+%7C+Membership+Coordinator%0Amembers%40gstcouncil.org%0AGlobal+Sustainable+Tourism+Council+%28GSTC%29%0A%0A%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%23%0A%0AYou+received+this+email+service+announcement+to+update+you+about+your+GSTC+membership.%0A%0A%C2%A9+Global+Sustainable+Tourism+Council%2C+P.O.+Box+96503+%2351887%2C+Washington%2C+DC%2C+20090-6503+USA.+All+rights+reserved. */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:Membership Renewal Reminder

#####################
{if $contact.first_name} Dear {$contact.first_name|default:Colleague}, {else} {/if}

Thank you for being part of the GSTC’s global network as a member!

This is a friendly reminder that the membership for Khiri Travel expires in 30 days. Please see your current membership details and renewal information below.

Membership Details

Member Name: Khiri Travel
Membership Due Date: July 20th, 2017
Member Since: July 21st, 2014
Amount: 750.00
Description: Industry - Small/Medium Businesses (3-30 million US$)

To renew your membership now, please login to the Member Only Area to access the renewal form: https://www.gstcouncil.org/en/members-partners/login.html. Please note that the renewed membership term will take affect from July 20th, 2017.

If you need an invoice in advance of your membership renewal, or have any question about your membership, please contact us at members@gstcouncil.org.

We appreciate your support for the GSTC by being a member, and hope you will join us for another exciting year!

Best Regards,

Emi Kaiwa | Membership Coordinator
members@gstcouncil.org
Global Sustainable Tourism Council (GSTC)

#####################

You received this email service announcement to update you about your GSTC membership.

© Global Sustainable Tourism Council, P.O. Box 96503 #51887, Washington, DC, 20090-6503 USA. All rights reserved.', 1, false),array('modifier', 'default', 'string:Membership Renewal Reminder

#####################
{if $contact.first_name} Dear {$contact.first_name|default:Colleague}, {else} {/if}

Thank you for being part of the GSTC’s global network as a member!

This is a friendly reminder that the membership for Khiri Travel expires in 30 days. Please see your current membership details and renewal information below.

Membership Details

Member Name: Khiri Travel
Membership Due Date: July 20th, 2017
Member Since: July 21st, 2014
Amount: 750.00
Description: Industry - Small/Medium Businesses (3-30 million US$)

To renew your membership now, please login to the Member Only Area to access the renewal form: https://www.gstcouncil.org/en/members-partners/login.html. Please note that the renewed membership term will take affect from July 20th, 2017.

If you need an invoice in advance of your membership renewal, or have any question about your membership, please contact us at members@gstcouncil.org.

We appreciate your support for the GSTC by being a member, and hope you will join us for another exciting year!

Best Regards,

Emi Kaiwa | Membership Coordinator
members@gstcouncil.org
Global Sustainable Tourism Council (GSTC)

#####################

You received this email service announcement to update you about your GSTC membership.

© Global Sustainable Tourism Council, P.O. Box 96503 #51887, Washington, DC, 20090-6503 USA. All rights reserved.', 4, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Renewal Reminder

#####################
<?php if ($this->_tpl_vars['contact']['first_name']): ?> Dear <?php echo ((is_array($_tmp=@$this->_tpl_vars['contact']['first_name'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Colleague') : smarty_modifier_default($_tmp, 'Colleague')); ?>
, <?php else: ?> <?php endif; ?>

Thank you for being part of the GSTC’s global network as a member!

This is a friendly reminder that the membership for Khiri Travel expires in 30 days. Please see your current membership details and renewal information below.

Membership Details

Member Name: Khiri Travel
Membership Due Date: July 20th, 2017
Member Since: July 21st, 2014
Amount: 750.00
Description: Industry - Small/Medium Businesses (3-30 million US$)

To renew your membership now, please login to the Member Only Area to access the renewal form: https://www.gstcouncil.org/en/members-partners/login.html. Please note that the renewed membership term will take affect from July 20th, 2017.

If you need an invoice in advance of your membership renewal, or have any question about your membership, please contact us at members@gstcouncil.org.

We appreciate your support for the GSTC by being a member, and hope you will join us for another exciting year!

Best Regards,

Emi Kaiwa | Membership Coordinator
members@gstcouncil.org
Global Sustainable Tourism Council (GSTC)

#####################

You received this email service announcement to update you about your GSTC membership.

© Global Sustainable Tourism Council, P.O. Box 96503 #51887, Washington, DC, 20090-6503 USA. All rights reserved.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>