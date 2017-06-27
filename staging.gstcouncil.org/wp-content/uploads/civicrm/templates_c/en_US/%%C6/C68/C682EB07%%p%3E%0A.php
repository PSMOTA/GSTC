<?php /* Smarty version 2.6.27, created on 2017-06-25 00:00:23
         compiled from string:%3Cp+style%3D%22text-align:+left%3B%22%3E%3Cimg+alt%3D%22%22+src%3D%22https://www.gstcouncil.org/media/civicrm/persist/contribute/images/gstc_logo_big.jpg%22+style%3D%22width:+287px%3B+height:+100px%3B%22+/%3E%3C/p%3E%0A%0A%3Chr+/%3E%0A%3Cp+style%3D%22text-align:+left%3B%22%3E%3Cspan+style%3D%22font-size:20px%3B%22%3E%3Cstrong%3E%3Cspan+style%3D%22color:%23000000%3B%22%3EMembership+Renewal+Reminder%3C/span%3E%3C/strong%3E%3C/span%3E%3C/p%3E%0A%0A%3Cp+style%3D%22text-align:+left%3B%22%3E%7Bif+%24contact.first_name%7DDear+%7B%24contact.first_name%7Cdefault:Colleague%7D%2C%7Belse%7D+%7B/if%7D%3C/p%3E%0A%0A%3Cp%3EThank+you+for+being+a+GSTC+member.+We%26rsquo%3Bd+like+to+remind+you+that+Universidad+Technol%C3%B3gica+de+Le%C3%B3n%26rsquo%3Bs+current+membership+term+expires+in+15+days.%3C/p%3E%0A%0A%3Cp%3E%3Cu%3EMembership+Details%3C/u%3E%3C/p%3E%0A%0A%3Cp%3EMember+Name:%26nbsp%3BUniversidad+Technol%C3%B3gica+de+Le%C3%B3n%3Cbr+/%3E%0AMembership+Due+Date:%26nbsp%3BJuly+10th%2C+2017%3Cbr+/%3E%0AMember+Since:%26nbsp%3BSeptember+4th%2C+2014%3Cbr+/%3E%0AAmount:+350.00%3Cbr+/%3E%0ADescription:+Academia+and+Educational+Institutes%3C/p%3E%0A%0A%3Cp%3ETo+renew+your+membership+now%2C+please+%3Ca+href%3D%22https://www.gstcouncil.org/en/members-partners/login.html%22+target%3D%22_blank%22%3Elogin%3C/a%3E+to+the+Member+Only+Area+to+access+the+renewal+form.+Please+note+that+the+renewed+membership+term+will+take+effect+on+July+10th%2C+2017.%3C/p%3E%0A%0A%3Cp%3EIf+you+have+any+question+or+need+assistance%2C+please+contact+us+at+%3Ca+href%3D%22mailto:members%40gstcouncil.org%22%3Emembers%40gstcouncil.org%3C/a%3E.%3C/p%3E%0A%0A%3Cp%3EYour+valuable+contribution+as+a+member+helps+enable+the+important+work+of+the+GSTC+in+promoting+sustainable+tourism+principles+around+the+world.%3C/p%3E%0A%0A%3Cp%3EWe+appreciate+your+support+for+the+GSTC+by+being+a+member%2C+and+hope+you+will+continue+to+play+an+active+role+in+our+global+network.%3C/p%3E%0A%0A%3Cp+style%3D%22text-align:+left%3B%22%3EBest+Regards%2C%3C/p%3E%0A%0A%3Cp+style%3D%22text-align:+left%3B%22%3EEmi+Kaiwa+%7C+Membership+Coordinator%3Cbr+/%3E%0Amembers%40gstcouncil.org%3Cbr+/%3E%0AGlobal+Sustainable+Tourism+Council+%28GSTC%29%3C/p%3E%0A%0A%3Cp+style%3D%22text-align:+left%3B%22%3E%26nbsp%3B%3C/p%3E%0A%0A%3Cp%3E%3Ca+href%3D%22https://www.gstcouncil.org/en/%22%3EABOUT+US%3C/a%3E+%7C+%3Ca+href%3D%22https://www.gstcouncil.org/en/about/contact-gstc.html%22%3ECONTACT+US%3C/a%3E+%7C+%3Ca+href%3D%22https://www.gstcouncil.org/en/members-partners/login.html%22%3EMEMBER+LOGIN%3C/a%3E%3C/p%3E%0A%0A%3Chr+/%3E%0A%3Cp+style%3D%22text-align:+left%3B%22%3E%3Cspan+style%3D%22color:%23696969%3B%22%3EYou+received+this+email+service+announcement+to+update+you+about+your+GSTC+membership.%3C/span%3E%3C/p%3E%0A%0A%3Cp+style%3D%22text-align:+left%3B%22%3E%3Cspan+style%3D%22color:%23696969%3B%22%3E%26copy%3B+Global+Sustainable+Tourism+Council%2C+P.O.+Box+96503+%2351887%2C+Washington%2C+DC%2C+20090-6503+USA.+All+rights+reserved.%3C/span%3E%3C/p%3E%0A */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:<p style="text-align: left;"><img alt="" src="https://www.gstcouncil.org/media/civicrm/persist/contribute/images/gstc_logo_big.jpg" style="width: 287px; height: 100px;" /></p>

<hr />
<p style="text-align: left;"><span style="font-size:20px;"><strong><span style="color:#000000;">Membership Renewal Reminder</span></strong></span></p>

<p style="text-align: left;">{if $contact.first_name}Dear {$contact.first_name|default:Colleague},{else} {/if}</p>

<p>Thank you for being a GSTC member. We&rsquo;d like to remind you that Universidad Technológica de León&rsquo;s current membership term expires in 15 days.</p>

<p><u>Membership Details</u></p>

<p>Member Name:&nbsp;Universidad Technológica de León<br />
Membership Due Date:&nbsp;July 10th, 2017<br />
Member Since:&nbsp;September 4th, 2014<br />
Amount: 350.00<br />
Description: Academia and Educational Institutes</p>

<p>To renew your membership now, please <a href="https://www.gstcouncil.org/en/members-partners/login.html" target="_blank">login</a> to the Member Only Area to access the renewal form. Please note that the renewed membership term will take effect on July 10th, 2017.</p>

<p>If you have any question or need assistance, please contact us at <a href="mailto:members@gstcouncil.org">members@gstcouncil.org</a>.</p>

<p>Your valuable contribution as a member helps enable the important work of the GSTC in promoting sustainable tourism principles around the world.</p>

<p>We appreciate your support for the GSTC by being a member, and hope you will continue to play an active role in our global network.</p>

<p style="text-align: left;">Best Regards,</p>

<p style="text-align: left;">Emi Kaiwa | Membership Coordinator<br />
members@gstcouncil.org<br />
Global Sustainable Tourism Council (GSTC)</p>

<p style="text-align: left;">&nbsp;</p>

<p><a href="https://www.gstcouncil.org/en/">ABOUT US</a> | <a href="https://www.gstcouncil.org/en/about/contact-gstc.html">CONTACT US</a> | <a href="https://www.gstcouncil.org/en/members-partners/login.html">MEMBER LOGIN</a></p>

<hr />
<p style="text-align: left;"><span style="color:#696969;">You received this email service announcement to update you about your GSTC membership.</span></p>

<p style="text-align: left;"><span style="color:#696969;">&copy; Global Sustainable Tourism Council, P.O. Box 96503 #51887, Washington, DC, 20090-6503 USA. All rights reserved.</span></p>
', 1, false),array('modifier', 'default', 'string:<p style="text-align: left;"><img alt="" src="https://www.gstcouncil.org/media/civicrm/persist/contribute/images/gstc_logo_big.jpg" style="width: 287px; height: 100px;" /></p>

<hr />
<p style="text-align: left;"><span style="font-size:20px;"><strong><span style="color:#000000;">Membership Renewal Reminder</span></strong></span></p>

<p style="text-align: left;">{if $contact.first_name}Dear {$contact.first_name|default:Colleague},{else} {/if}</p>

<p>Thank you for being a GSTC member. We&rsquo;d like to remind you that Universidad Technológica de León&rsquo;s current membership term expires in 15 days.</p>

<p><u>Membership Details</u></p>

<p>Member Name:&nbsp;Universidad Technológica de León<br />
Membership Due Date:&nbsp;July 10th, 2017<br />
Member Since:&nbsp;September 4th, 2014<br />
Amount: 350.00<br />
Description: Academia and Educational Institutes</p>

<p>To renew your membership now, please <a href="https://www.gstcouncil.org/en/members-partners/login.html" target="_blank">login</a> to the Member Only Area to access the renewal form. Please note that the renewed membership term will take effect on July 10th, 2017.</p>

<p>If you have any question or need assistance, please contact us at <a href="mailto:members@gstcouncil.org">members@gstcouncil.org</a>.</p>

<p>Your valuable contribution as a member helps enable the important work of the GSTC in promoting sustainable tourism principles around the world.</p>

<p>We appreciate your support for the GSTC by being a member, and hope you will continue to play an active role in our global network.</p>

<p style="text-align: left;">Best Regards,</p>

<p style="text-align: left;">Emi Kaiwa | Membership Coordinator<br />
members@gstcouncil.org<br />
Global Sustainable Tourism Council (GSTC)</p>

<p style="text-align: left;">&nbsp;</p>

<p><a href="https://www.gstcouncil.org/en/">ABOUT US</a> | <a href="https://www.gstcouncil.org/en/about/contact-gstc.html">CONTACT US</a> | <a href="https://www.gstcouncil.org/en/members-partners/login.html">MEMBER LOGIN</a></p>

<hr />
<p style="text-align: left;"><span style="color:#696969;">You received this email service announcement to update you about your GSTC membership.</span></p>

<p style="text-align: left;"><span style="color:#696969;">&copy; Global Sustainable Tourism Council, P.O. Box 96503 #51887, Washington, DC, 20090-6503 USA. All rights reserved.</span></p>
', 6, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><p style="text-align: left;"><img alt="" src="https://www.gstcouncil.org/media/civicrm/persist/contribute/images/gstc_logo_big.jpg" style="width: 287px; height: 100px;" /></p>

<hr />
<p style="text-align: left;"><span style="font-size:20px;"><strong><span style="color:#000000;">Membership Renewal Reminder</span></strong></span></p>

<p style="text-align: left;"><?php if ($this->_tpl_vars['contact']['first_name']): ?>Dear <?php echo ((is_array($_tmp=@$this->_tpl_vars['contact']['first_name'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Colleague') : smarty_modifier_default($_tmp, 'Colleague')); ?>
,<?php else: ?> <?php endif; ?></p>

<p>Thank you for being a GSTC member. We&rsquo;d like to remind you that Universidad Technológica de León&rsquo;s current membership term expires in 15 days.</p>

<p><u>Membership Details</u></p>

<p>Member Name:&nbsp;Universidad Technológica de León<br />
Membership Due Date:&nbsp;July 10th, 2017<br />
Member Since:&nbsp;September 4th, 2014<br />
Amount: 350.00<br />
Description: Academia and Educational Institutes</p>

<p>To renew your membership now, please <a href="https://www.gstcouncil.org/en/members-partners/login.html" target="_blank">login</a> to the Member Only Area to access the renewal form. Please note that the renewed membership term will take effect on July 10th, 2017.</p>

<p>If you have any question or need assistance, please contact us at <a href="mailto:members@gstcouncil.org">members@gstcouncil.org</a>.</p>

<p>Your valuable contribution as a member helps enable the important work of the GSTC in promoting sustainable tourism principles around the world.</p>

<p>We appreciate your support for the GSTC by being a member, and hope you will continue to play an active role in our global network.</p>

<p style="text-align: left;">Best Regards,</p>

<p style="text-align: left;">Emi Kaiwa | Membership Coordinator<br />
members@gstcouncil.org<br />
Global Sustainable Tourism Council (GSTC)</p>

<p style="text-align: left;">&nbsp;</p>

<p><a href="https://www.gstcouncil.org/en/">ABOUT US</a> | <a href="https://www.gstcouncil.org/en/about/contact-gstc.html">CONTACT US</a> | <a href="https://www.gstcouncil.org/en/members-partners/login.html">MEMBER LOGIN</a></p>

<hr />
<p style="text-align: left;"><span style="color:#696969;">You received this email service announcement to update you about your GSTC membership.</span></p>

<p style="text-align: left;"><span style="color:#696969;">&copy; Global Sustainable Tourism Council, P.O. Box 96503 #51887, Washington, DC, 20090-6503 USA. All rights reserved.</span></p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>