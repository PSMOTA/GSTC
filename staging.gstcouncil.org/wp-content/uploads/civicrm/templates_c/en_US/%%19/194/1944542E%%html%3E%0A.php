<?php /* Smarty version 2.6.27, created on 2017-06-22 06:20:56
         compiled from string:%3C%21DOCTYPE+html+PUBLIC+%22-//W3C//DTD+XHTML+1.0+Transitional//EN%22+%22http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd%22%3E%0A%3Chtml+xmlns%3D%22http://www.w3.org/1999/xhtml%22%3E%0A%3Chead%3E%0A+%3Cmeta+http-equiv%3D%22Content-Type%22+content%3D%22text/html%3B+charset%3DUTF-8%22+/%3E%0A+%3Ctitle%3E%3C/title%3E%0A%3C/head%3E%0A%3Cbody%3E%0A%0A%7Bcapture+assign%3DheaderStyle%7Dcolspan%3D%222%22+style%3D%22text-align:+left%3B+padding:+4px%3B+border-bottom:+1px+solid+%23999%3B+background-color:+%23eee%3B%22%7B/capture%7D%0A%7Bcapture+assign%3DlabelStyle+%7Dstyle%3D%22padding:+4px%3B+border-bottom:+1px+solid+%23999%3B+background-color:+%23f7f7f7%3B%22%7B/capture%7D%0A%7Bcapture+assign%3DvalueStyle+%7Dstyle%3D%22padding:+4px%3B+border-bottom:+1px+solid+%23999%3B%22%7B/capture%7D%0A%7Bcapture+assign%3DtdfirstStyle%7Dstyle%3D%22width:+180px%3B+padding-bottom:+15px%3B%22%7B/capture%7D%0A%7Bcapture+assign%3DtdStyle%7Dstyle%3D%22width:+100px%3B%22%7B/capture%7D%0A%7Bcapture+assign%3DparticipantTotal%7Dstyle%3D%22margin:+0.5em+0+0.5em%3Bpadding:+0.5em%3Bbackground-color:+%23999999%3Bfont-weight:+bold%3Bcolor:+%23FAFAFA%3Bborder-radius:+2px%3B%22%7B/capture%7D%0A%0A%0A%3Ccenter%3E%0A+%3Ctable+width%3D%22700%22+border%3D%220%22+cellpadding%3D%220%22+cellspacing%3D%220%22+id%3D%22crm-event_receipt%22+style%3D%22font-family:+Arial%2C+Verdana%2C+sans-serif%3B+text-align:+left%3B%22%3E%0A%0A++%3C%21--+BEGIN+HEADER+--%3E%0A++%3C%21--+You+can+add+table+row%28s%29+here+with+logo+or+other+header+elements+--%3E%0A++%3C%21--+END+HEADER+--%3E%0A%0A++%3C%21--+BEGIN+CONTENT+--%3E%0A%0A++%3Ctr%3E%0A+++%3Ctd%3E%0A++%3Cp%3EDear+Ana%2C%3C/p%3E%0A%0A++++%7Bif+%24event.confirm_email_text+AND+%28not+%24isOnWaitlist+AND+not+%24isRequireApproval%29%7D%0A+++++%3Cp%3E%7B%24event.confirm_email_text%7Chtmlize%7D%3C/p%3E%0A%0A++++%7Belse%7D%0A+++++%3Cp%3E%7Bts%7DThank+you+for+your+participation.%7B/ts%7D%0A+++++%7Bif+%24participant_status%7D%7Bts+1%3D%24participant_status%7DThis+letter+is+a+confirmation+that+your+registration+has+been+received+and+your+status+has+been+updated+to+%3Cstrong%3E+%251%3C/strong%3E.%7B/ts%7D%0A+++++%7Belse%7D%7Bif+%24isOnWaitlist%7D%7Bts%7DThis+letter+is+a+confirmation+that+your+registration+has+been+received+and+your+status+has+been+updated+to+%3Cstrong%3Ewaitlisted%3C/strong%3E.%7B/ts%7D%7Belse%7D%7Bts%7DThis+letter+is+a+confirmation+that+your+registration+has+been+received+and+your+status+has+been+updated+to+%3Cstrong%3Eregistered%3Cstrong%3E.%7B/ts%7D%7B/if%7D%7B/if%7D.%3C/p%3E%0A%0A++++%7B/if%7D%0A%0A++++%3Cp%3E%0A++++%7Bif+%24isOnWaitlist%7D%0A+++++%3Cp%3E%7Bts%7DYou+have+been+added+to+the+WAIT+LIST+for+this+event.%7B/ts%7D%3C/p%3E%0A+++++%7Bif+%24isPrimary%7D%0A+++++++%3Cp%3E%7Bts%7DIf+space+becomes+available+you+will+receive+an+email+with+a+link+to+a+web+page+where+you+can+complete+your+registration.%7B/ts%7D%3C/p%3E%0A+++++%7B/if%7D%0A++++%7Belseif+%24isRequireApproval%7D%0A+++++%3Cp%3E%7Bts%7DYour+registration+has+been+submitted.%7B/ts%7D%3C/p%3E%0A+++++%7Bif+%24isPrimary%7D%0A++++++%3Cp%3E%7Bts%7DOnce+your+registration+has+been+reviewed%2C+you+will+receive+an+email+with+a+link+to+a+web+page+where+you+can+complete+the+registration+process.%7B/ts%7D%3C/p%3E%0A+++++%7B/if%7D%0A++++%7Belseif+%24is_pay_later+%26%26+%21%24isAmountzero+%26%26+%21%24isAdditionalParticipant%7D%0A+++++%3Cp%3E%7B%24pay_later_receipt%7D%3C/p%3E+%7B%2A+FIXME:+this+might+be+text+rather+than+HTML+%2A%7D%0A++++%7Belse%7D%0A+++++%3Cp%3E%7Bts%7DPlease+print+this+confirmation+for+your+records.%7B/ts%7D%3C/p%3E%0A++++%7B/if%7D%0A%0A+++%3C/td%3E%0A++%3C/tr%3E%0A++%3Ctr%3E%0A+++%3Ctd%3E%0A++++%3Ctable+width%3D%22700%22+style%3D%22border:+1px+solid+%23999%3B+margin:+1em+0em+1em%3B+border-collapse:+collapse%3B%22%3E%0A+++++%3Ctr%3E%0A++++++%3Cth+%7B%24headerStyle%7D%3E%0A+++++++%7Bts%7DEvent+Information+and+Location%7B/ts%7D%0A++++++%3C/th%3E%0A+++++%3C/tr%3E%0A+++++%3Ctr%3E%0A++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A+++++++%7B%24event.event_title%7D%3Cbr+/%3E%0A+++++++%7B%24event.event_start_date%7Cdate_format:%22%25A%22%7D+%7B%24event.event_start_date%7CcrmDate%7D%7Bif+%24event.event_end_date%7D-%7Bif+%24event.event_end_date%7Cdate_format:%22%25Y%25m%25d%22+%3D%3D+%24event.event_start_date%7Cdate_format:%22%25Y%25m%25d%22%7D%7B%24event.event_end_date%7CcrmDate:0:1%7D%7Belse%7D%7B%24event.event_end_date%7Cdate_format:%22%25A%22%7D+%7B%24event.event_end_date%7CcrmDate%7D%7B/if%7D%7B/if%7D%0A++++++%3C/td%3E%0A+++++%3C/tr%3E%0A%0A%0A+++++%7Bif+%24conference_sessions%7D%0A++++++%3Ctr%3E%0A+++++++%3Ctd+colspan%3D%222%22+%7B%24labelStyle%7D%3E%0A++%7Bts%7DYour+schedule:%7B/ts%7D%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A++++++%3Ctr%3E%0A+++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++%7Bassign+var%3D%27group_by_day%27+value%3D%27NA%27%7D%0A++%7Bforeach+from%3D%24conference_sessions+item%3Dsession%7D%0A+++%7Bif+%24session.start_date%7Cdate_format:%22%25Y/%25m/%25d%22+%21%3D+%24group_by_day%7Cdate_format:%22%25Y/%25m/%25d%22%7D%0A++++%7Bassign+var%3D%27group_by_day%27+value%3D%24session.start_date%7D%0A++++++++++%3Cem%3E%7B%24group_by_day%7Cdate_format:%22%25m/%25d/%25Y%22%7D%3C/em%3E%3Cbr+/%3E%0A+++%7B/if%7D%0A+++%7B%24session.start_date%7CcrmDate:0:1%7D%7Bif+%24session.end_date%7D-%7B%24session.end_date%7CcrmDate:0:1%7D%7B/if%7D+%7B%24session.title%7D%3Cbr+/%3E%0A+++%7Bif+%24session.location%7D%26nbsp%3B%26nbsp%3B%26nbsp%3B%26nbsp%3B%7B%24session.location%7D%3Cbr+/%3E%7B/if%7D%0A++%7B/foreach%7D%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A+++++%7B/if%7D%0A%0A+++++%7Bif+%24event.participant_role+neq+%27Attendee%27+and+%24defaultRole%7D%0A++++++%3Ctr%3E%0A+++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++%7Bts%7DParticipant+Role%7B/ts%7D%0A+++++++%3C/td%3E%0A+++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++%7B%24event.participant_role%7D%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A+++++%7B/if%7D%0A%0A+++++%7Bif+%24isShowLocation%7D%0A++++++%3Ctr%3E%0A+++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++%7B%24location.address.1.display%7Cnl2br%7D%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A+++++%7B/if%7D%0A%0A+++++%7Bif+%24location.phone.1.phone+%7C%7C+%24location.email.1.email%7D%0A++++++%3Ctr%3E%0A+++++++%3Ctd+colspan%3D%222%22+%7B%24labelStyle%7D%3E%0A++++++++%7Bts%7DEvent+Contacts:%7B/ts%7D%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A++++++%7Bforeach+from%3D%24location.phone+item%3Dphone%7D%0A+++++++%7Bif+%24phone.phone%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bif+%24phone.phone_type%7D%0A+++++++++++%7B%24phone.phone_type_display%7D%0A++++++++++%7Belse%7D%0A+++++++++++%7Bts%7DPhone%7B/ts%7D%0A++++++++++%7B/if%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24phone.phone%7D+%7Bif+%24phone.phone_ext%7D%26nbsp%3B%7Bts%7Dext.%7B/ts%7D+%7B%24phone.phone_ext%7D%7B/if%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A++++++%7B/foreach%7D%0A++++++%7Bforeach+from%3D%24location.email+item%3DeventEmail%7D%0A+++++++%7Bif+%24eventEmail.email%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DEmail%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24eventEmail.email%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A++++++%7B/foreach%7D%0A+++++%7B/if%7D%0A%0A+++++%7Bif+%24event.is_public%7D%0A++++++%3Ctr%3E%0A+++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++%7Bcapture+assign%3DicalFeed%7D%7BcrmURL+p%3D%27civicrm/event/ical%27+q%3D%22reset%3D1%26id%3D%60%24event.id%60%22+h%3D0+a%3D1+fe%3D1%7D%7B/capture%7D%0A++++++++%3Ca+href%3D%22%7B%24icalFeed%7D%22%3E%7Bts%7DDownload+iCalendar+File%7B/ts%7D%3C/a%3E%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A+++++%7B/if%7D%0A%0A++++%7Bif+%24event.is_share%7D%0A++++++++%3Ctr%3E%0A++++++++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++++++++++%7Bcapture+assign%3DeventUrl%7D%7BcrmURL+p%3D%27civicrm/event/info%27+q%3D%22id%3D%60%24event.id%60%26reset%3D1%22+a%3Dtrue+fe%3D1+h%3D1%7D%7B/capture%7D%0A++++++++++++++++%7Binclude+file%3D%22CRM/common/SocialNetwork.tpl%22+emailMode%3Dtrue+url%3D%24eventUrl+title%3D%24event.title+pageURL%3D%24eventUrl%7D%0A++++++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A++++%7B/if%7D%0A++++%7Bif+%24payer.name%7D%0A+++++%3Ctr%3E%0A+++++++%3Cth+%7B%24headerStyle%7D%3E%0A+++++++++%7Bts%7DYou+were+registered+by:%7B/ts%7D%0A+++++++%3C/th%3E%0A+++++%3C/tr%3E%0A+++++%3Ctr%3E%0A+++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++%7B%24payer.name%7D%0A+++++++%3C/td%3E%0A+++++%3C/tr%3E%0A++++%7B/if%7D%0A++++%7Bif+%24event.is_monetary%7D%0A%0A++++++%3Ctr%3E%0A+++++++%3Cth+%7B%24headerStyle%7D%3E%0A++++++++%7B%24event.fee_label%7D%0A+++++++%3C/th%3E%0A++++++%3C/tr%3E%0A%0A++++++%7Bif+%24lineItem%7D%0A+++++++%7Bforeach+from%3D%24lineItem+item%3Dvalue+key%3Dpriceset%7D%0A++++++++%7Bif+%24value+neq+%27skip%27%7D%0A+++++++++%7Bif+%24isPrimary%7D%0A++++++++++%7Bif+%24lineItem%7C%40count+GT+1%7D+%7B%2A+Header+for+multi+participant+registration+cases.+%2A%7D%0A+++++++++++%3Ctr%3E%0A++++++++++++%3Ctd+colspan%3D%222%22+%7B%24labelStyle%7D%3E%0A+++++++++++++%7Bts+1%3D%24priceset%2B1%7DParticipant+%251%7B/ts%7D+%7B%24part.%24priceset.info%7D%0A++++++++++++%3C/td%3E%0A+++++++++++%3C/tr%3E%0A++++++++++%7B/if%7D%0A+++++++++%7B/if%7D%0A+++++++++%3Ctr%3E%0A++++++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A+++++++++++%3Ctable%3E+%7B%2A+FIXME:+style+this+table+so+that+it+looks+like+the+text+version+%28justification%2C+etc.%29+%2A%7D%0A++++++++++++%3Ctr%3E%0A+++++++++++++%3Cth%3E%7Bts%7DItem%7B/ts%7D%3C/th%3E%0A+++++++++++++%3Cth%3E%7Bts%7DQty%7B/ts%7D%3C/th%3E%0A+++++++++++++%3Cth%3E%7Bts%7DEach%7B/ts%7D%3C/th%3E%0A+++++++++++++%7Bif+%24dataArray%7D%0A++++++++++++++%3Cth%3E%7Bts%7DSubTotal%7B/ts%7D%3C/th%3E%0A++++++++++++++%3Cth%3E%7Bts%7DTax+Rate%7B/ts%7D%3C/th%3E%0A++++++++++++++%3Cth%3E%7Bts%7DTax+Amount%7B/ts%7D%3C/th%3E%0A+++++++++++++%7B/if%7D%0A+++++++++++++%3Cth%3E%7Bts%7DTotal%7B/ts%7D%3C/th%3E%0A+++++++%7Bif++%24pricesetFieldsCount+%7D%3Cth%3E%7Bts%7DTotal+Participants%7B/ts%7D%3C/th%3E%7B/if%7D%0A++++++++++++%3C/tr%3E%0A++++++++++++%7Bforeach+from%3D%24value+item%3Dline%7D%0A+++++++++++++%3Ctr%3E%0A++++++++++++++%3Ctd+%7B%24tdfirstStyle%7D%3E%0A++++++++++++++%7Bif+%24line.html_type+eq+%27Text%27%7D%7B%24line.label%7D%7Belse%7D%7B%24line.field_title%7D+-+%7B%24line.label%7D%7B/if%7D+%7Bif+%24line.description%7D%3Cdiv%3E%7B%24line.description%7Ctruncate:30:%22...%22%7D%3C/div%3E%7B/if%7D%0A++++++++++++++%3C/td%3E%0A++++++++++++++%3Ctd+%7B%24tdStyle%7D+align%3D%22middle%22%3E%0A+++++++++++++++%7B%24line.qty%7D%0A++++++++++++++%3C/td%3E%0A++++++++++++++%3Ctd+%7B%24tdStyle%7D%3E%0A+++++++++++++++%7B%24line.unit_price%7CcrmMoney:%24currency%7D%0A++++++++++++++%3C/td%3E%0A++++++++++++++%7Bif+%24dataArray%7D%0A+++++++++++++++%3Ctd+%7B%24tdStyle%7D%3E%0A++++++++++++++++%7B%24line.unit_price%2A%24line.qty%7CcrmMoney%7D%0A+++++++++++++++%3C/td%3E%0A+++++++++++++++%7Bif+%24line.tax_rate+%21%3D+%22%22+%7C%7C+%24line.tax_amount+%21%3D+%22%22%7D%0A++++++++++++++++%3Ctd+%7B%24tdStyle%7D%3E%0A+++++++++++++++++%7B%24line.tax_rate%7Cstring_format:%22%25.2f%22%7D%25%0A++++++++++++++++%3C/td%3E%0A++++++++++++++++%3Ctd+%7B%24tdStyle%7D%3E%0A+++++++++++++++++%7B%24line.tax_amount%7CcrmMoney%7D%0A++++++++++++++++%3C/td%3E%0A+++++++++++++++%7Belse%7D%0A++++++++++++++++%3Ctd%3E%3C/td%3E%0A++++++++++++++++%3Ctd%3E%3C/td%3E%0A+++++++++++++++%7B/if%7D%0A++++++++++++++%7B/if%7D%0A++++++++++++++%3Ctd+%7B%24tdStyle%7D%3E%0A+++++++++++++++%7B%24line.line_total%2B%24line.tax_amount%7CcrmMoney:%24currency%7D%0A++++++++++++++%3C/td%3E%0A++++++++%7Bif+%24pricesetFieldsCount+%7D%3Ctd+%7B%24tdStyle%7D%3E%7B%24line.participant_count%7D%3C/td%3E+%7B/if%7D%0A+++++++++++++%3C/tr%3E%0A++++++++++++%7B/foreach%7D%0A++++++++++++%7Bif+%24individual%7D%0A++++++++++++++%3Ctr+%7B%24participantTotal%7D%3E%0A++++++++++++++++%3Ctd+colspan%3D3%3E%7Bts%7DParticipant+Total%7B/ts%7D%3C/td%3E%0A++++++++++++++++%3Ctd++colspan%3D2%3E%7B%24individual.%24priceset.totalAmtWithTax-%24individual.%24priceset.totalTaxAmt%7CcrmMoney%7D%3C/td%3E%0A++++++++++++++++%3Ctd++colspan%3D1%3E%7B%24individual.%24priceset.totalTaxAmt%7CcrmMoney%7D%3C/td%3E%0A++++++++++++++++%3Ctd++colspan%3D2%3E%7B%24individual.%24priceset.totalAmtWithTax%7CcrmMoney%7D%3C/td%3E%0A++++++++++++++%3C/tr%3E%0A++++++++++++%7B/if%7D%0A+++++++++++%3C/table%3E%0A++++++++++%3C/td%3E%0A+++++++++%3C/tr%3E%0A++++++++%7B/if%7D%0A+++++++%7B/foreach%7D%0A+++++++%7Bif+%24dataArray%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7D+Amount+Before+Tax:+%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24totalAmount-%24totalTaxAmount%7CcrmMoney%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A++++++++%7Bforeach+from%3D%24dataArray+item%3Dvalue+key%3Dpriceset%7D%0A+++++++++%3Ctr%3E%0A++++++++++%7Bif+%24priceset+%7C%7C+%24priceset+%3D%3D+0%7D%0A+++++++++++%3Ctd%3E%26nbsp%3B%7B%24taxTerm%7D+%7B%24priceset%7Cstring_format:%22%25.2f%22%7D%25%3C/td%3E%0A+++++++++++%3Ctd%3E%26nbsp%3B%7B%24value%7CcrmMoney:%24currency%7D%3C/td%3E%0A++++++++++%7Belse%7D%0A+++++++++++%3Ctd%3E%26nbsp%3B%7Bts%7DNo%7B/ts%7D+%7B%24taxTerm%7D%3C/td%3E%0A+++++++++++%3Ctd%3E%26nbsp%3B%7B%24value%7CcrmMoney:%24currency%7D%3C/td%3E%0A++++++++++%7B/if%7D%0A+++++++++%3C/tr%3E%0A++++++++%7B/foreach%7D%0A+++++++%7B/if%7D%0A++++++%7B/if%7D%0A%0A++++++%7Bif+%24amounts+%26%26+%21%24lineItem%7D%0A+++++++%7Bforeach+from%3D%24amounts+item%3Damnt+key%3Dlevel%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24amnt.amount%7CcrmMoney:%24currency%7D+%7B%24amnt.label%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/foreach%7D%0A++++++%7B/if%7D%0A%0A++++%7Bif+%24totalTaxAmount%7D%0A+++++++%3Ctr%3E%0A++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A+++++++++%7Bts%7DTotal+Tax+Amount%7B/ts%7D%0A++++++++%3C/td%3E%0A++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++++%7B%24totalTaxAmount%7CcrmMoney:%24currency%7D%0A++++++++%3C/td%3E%0A+++++++%3C/tr%3E%0A++++++%7B/if%7D%0A++++++%7Bif+%24isPrimary%7D%0A+++++++%3Ctr%3E%0A++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A+++++++++%7Bts%7DTotal+Amount%7B/ts%7D%0A++++++++%3C/td%3E%0A++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++++%7B%24totalAmount%7CcrmMoney:%24currency%7D+%7Bif+%24hookDiscount.message%7D%28%7B%24hookDiscount.message%7D%29%7B/if%7D%0A++++++++%3C/td%3E%0A+++++++%3C/tr%3E%0A+++++++%7Bif+%24pricesetFieldsCount+%7D%0A+++++%3Ctr%3E%0A+++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++%7Bts%7DTotal+Participants%7B/ts%7D%3C/td%3E%0A++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++%7Bassign+var%3D%22count%22+value%3D+0%7D%0A++++++%7Bforeach+from%3D%24lineItem+item%3Dpcount%7D%0A++++++%7Bassign+var%3D%22lineItemCount%22+value%3D0%7D%0A++++++%7Bif+%24pcount+neq+%27skip%27%7D%0A++++++++%7Bforeach+from%3D%24pcount+item%3Dp_count%7D%0A++++++++%7Bassign+var%3D%22lineItemCount%22+value%3D%24lineItemCount%2B%24p_count.participant_count%7D%0A++++++++%7B/foreach%7D%0A++++++%7Bif+%24lineItemCount+%3C+1+%7D%0A++++++++%7Bassign+var%3D%22lineItemCount%22+value%3D1%7D%0A++++++%7B/if%7D%0A++++++%7Bassign+var%3D%22count%22+value%3D%24count%2B%24lineItemCount%7D%0A++++++%7B/if%7D%0A++++++%7B/foreach%7D%0A+++++%7B%24count%7D%0A+++++%3C/td%3E+%3C/tr%3E%0A++++++%7B/if%7D%0A%0A+++++++%7Bif+%24register_date%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DRegistration+Date%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24register_date%7CcrmDate%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%24receive_date%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DTransaction+Date%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24receive_date%7CcrmDate%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%24financialTypeName%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DFinancial+Type%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24financialTypeName%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%24trxn_id%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DTransaction+%23%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24trxn_id%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%24paidBy%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DPaid+By%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++++%7B%24paidBy%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%24checkNumber%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DCheck+Number%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24checkNumber%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%24contributeMode+ne+%27notify%27+and+%21%24isAmountzero+and+%28%21%24is_pay_later+or+%24isBillingAddressRequiredForPayLater%29+and+%21%24isOnWaitlist+and+%21%24isRequireApproval%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Cth+%7B%24headerStyle%7D%3E%0A++++++++++%7Bts%7DBilling+Name+and+Address%7B/ts%7D%0A+++++++++%3C/th%3E%0A++++++++%3C/tr%3E%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24billingName%7D%3Cbr+/%3E%0A++++++++++%7B%24address%7Cnl2br%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%24contributeMode+eq+%27direct%27+and+%21%24isAmountzero+and+%21%24is_pay_later+and+%21%24isOnWaitlist+and+%21%24isRequireApproval%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Cth+%7B%24headerStyle%7D%3E%0A++++++++++%7Bts%7DCredit+Card+Information%7B/ts%7D%0A+++++++++%3C/th%3E%0A++++++++%3C/tr%3E%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24credit_card_type%7D%3Cbr+/%3E%0A++++++++++%7B%24credit_card_number%7D%3Cbr+/%3E%0A++++++++++%7Bts%7DExpires%7B/ts%7D:+%7B%24credit_card_exp_date%7Ctruncate:7:%27%27%7CcrmDate%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A++++++%7B/if%7D%0A%0A+++++%7B/if%7D+%7B%2A+End+of+conditional+section+for+Paid+events+%2A%7D%0A%0A%0A%7Bif+%24customPre%7D%0A%7Bforeach+from%3D%24customPre+item%3DcustomPr+key%3Di%7D%0A+++%3Ctr%3E+%3Cth+%7B%24headerStyle%7D%3E%7B%24customPre_grouptitle.%24i%7D%3C/th%3E%3C/tr%3E%0A+++%7Bforeach+from%3D%24customPr+item%3DcustomValue+key%3DcustomName%7D%0A+++%7Bif+%28+%24trackingFields+and+%21+in_array%28+%24customName%2C+%24trackingFields+%29+%29+or+%21+%24trackingFields%7D%0A+++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%7B%24customName%7D%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%7B%24customValue%7D%3C/td%3E%0A+++++%3C/tr%3E%0A+++%7B/if%7D%0A+++%7B/foreach%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%0A%7Bif+%24customPost%7D%0A%7Bforeach+from%3D%24customPost+item%3DcustomPos+key%3Dj%7D%0A+++%3Ctr%3E+%3Cth+%7B%24headerStyle%7D%3E%7B%24customPost_grouptitle.%24j%7D%3C/th%3E%3C/tr%3E%0A+++%7Bforeach+from%3D%24customPos+item%3DcustomValue+key%3DcustomName%7D%0A+++%7Bif+%28+%24trackingFields+and+%21+in_array%28+%24customName%2C+%24trackingFields+%29+%29+or+%21+%24trackingFields%7D%0A+++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%7B%24customName%7D%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%7B%24customValue%7D%3C/td%3E%0A+++++%3C/tr%3E%0A%7B/if%7D%0A%7B/foreach%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%0A%7Bif+%24customProfile%7D%0A%7Bforeach+from%3D%24customProfile.profile+item%3DeachParticipant+key%3DparticipantID%7D%0A+++++%3Ctr%3E%3Cth+%7B%24headerStyle%7D%3E%7Bts+1%3D%24participantID%2B2%7DParticipant+%251%7B/ts%7D+%3C/th%3E%3C/tr%3E%0A+++++%7Bforeach+from%3D%24eachParticipant+item%3DeachProfile+key%3Dpid%7D%0A+++++%3Ctr%3E%3Cth+%7B%24headerStyle%7D%3E%7B%24customProfile.title.%24pid%7D%3C/th%3E%3C/tr%3E%0A+++++%7Bforeach+from%3D%24eachProfile+item%3Dval+key%3Dfield%7D%0A+++++%3Ctr%3E%7Bforeach+from%3D%24val+item%3Dv+key%3Df%7D%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%7B%24field%7D%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%7B%24v%7D%3C/td%3E%0A+++++++++%7B/foreach%7D%0A+++++%3C/tr%3E%0A+++++%7B/foreach%7D%0A%7B/foreach%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%0A++++%7Bif+%24customGroup%7D%0A++++++%7Bforeach+from%3D%24customGroup+item%3Dvalue+key%3DcustomName%7D%0A+++++++%3Ctr%3E%0A++++++++%3Cth+%7B%24headerStyle%7D%3E%0A+++++++++%7B%24customName%7D%0A++++++++%3C/th%3E%0A+++++++%3C/tr%3E%0A+++++++%7Bforeach+from%3D%24value+item%3Dv+key%3Dn%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7B%24n%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24v%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/foreach%7D%0A++++++%7B/foreach%7D%0A+++++%7B/if%7D%0A++++%3C/table%3E%0A++++%7Bif+%24event.allow_selfcancelxfer+%7D%0A+++++%3Ctr%3E%0A++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++%7Bts+1%3D%24event.selfcancelxfer_time%7DYou+may+transfer+your+registration+to+another+participant+or+cancel+your+registration+up+to+%251+hours+before+the+event.%7B/ts%7D+%7Bif+%24totalAmount%7D%7Bts%7DCancellations+are+not+refundable.%7B/ts%7D%7B/if%7D%3Cbr+/%3E%0A++++++++%7Bcapture+assign%3DselfService%7D%7BcrmURL+p%3D%27civicrm/event/selfsvcupdate%27+q%3D%22reset%3D1%26pid%3D%60%24participant.id%60%26cs%3D989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360%22++h%3D0+a%3D1+fe%3D1%7D%7B/capture%7D%0A++++++++%3Ca+href%3D%22%7B%24selfService%7D%22%3E%7Bts%7DClick+here+to+transfer+or+cancel+your+registration.%7B/ts%7D%3C/a%3E%0A++++++%3C/td%3E%0A+++++%3C/tr%3E%0A++++%7B/if%7D%0A+++%3C/td%3E%0A++%3C/tr%3E%0A+%3C/table%3E%0A%3C/center%3E%0A%0A%3C/body%3E%0A%3C/html%3E%0A */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}
{capture assign=tdfirstStyle}style="width: 180px; padding-bottom: 15px;"{/capture}
{capture assign=tdStyle}style="width: 100px;"{/capture}
{capture assign=participantTotal}style="margin: 0.5em 0 0.5em;padding: 0.5em;background-color: #999999;font-weight: bold;color: #FAFAFA;border-radius: 2px;"{/capture}


<center>
 <table width="700" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
  <p>Dear Ana,</p>

    {if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
     <p>{$event.confirm_email_text|htmlize}</p>

    {else}
     <p>{ts}Thank you for your participation.{/ts}
     {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to <strong> %1</strong>.{/ts}
     {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>waitlisted</strong>.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>registered<strong>.{/ts}{/if}{/if}.</p>

    {/if}

    <p>
    {if $isOnWaitlist}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if $isPrimary}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif $isRequireApproval}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if $isPrimary}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}
     <p>{$pay_later_receipt}</p> {* FIXME: this might be text rather than HTML *}
    {else}
     <p>{ts}Please print this confirmation for your records.{/ts}</p>
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table width="700" style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>


     {if $conference_sessions}
      <tr>
       <td colspan="2" {$labelStyle}>
  {ts}Your schedule:{/ts}
       </td>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
  {assign var=\'group_by_day\' value=\'NA\'}
  {foreach from=$conference_sessions item=session}
   {if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
    {assign var=\'group_by_day\' value=$session.start_date}
          <em>{$group_by_day|date_format:"%m/%d/%Y"}</em><br />
   {/if}
   {$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}<br />
   {if $session.location}&nbsp;&nbsp;&nbsp;&nbsp;{$session.location}<br />{/if}
  {/foreach}
       </td>
      </tr>
     {/if}

     {if $event.participant_role neq \'Attendee\' and $defaultRole}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if $isShowLocation}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if $location.phone.1.phone || $location.email.1.email}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if $event.is_public}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

    {if $event.is_share}
        <tr>
            <td colspan="2" {$valueStyle}>
                {capture assign=eventUrl}{crmURL p=\'civicrm/event/info\' q="id=`$event.id`&reset=1" a=true fe=1 h=1}{/capture}
                {include file="CRM/common/SocialNetwork.tpl" emailMode=true url=$eventUrl title=$event.title pageURL=$eventUrl}
            </td>
        </tr>
    {/if}
    {if $payer.name}
     <tr>
       <th {$headerStyle}>
         {ts}You were registered by:{/ts}
       </th>
     </tr>
     <tr>
       <td colspan="2" {$valueStyle}>
        {$payer.name}
       </td>
     </tr>
    {/if}
    {if $event.is_monetary}

      <tr>
       <th {$headerStyle}>
        {$event.fee_label}
       </th>
      </tr>

      {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if $isPrimary}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if  $pricesetFieldsCount }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td {$tdfirstStyle}>
              {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td {$tdStyle} align="middle">
               {$line.qty}
              </td>
              <td {$tdStyle}>
               {$line.unit_price|crmMoney:$currency}
              </td>
              {if $dataArray}
               <td {$tdStyle}>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td {$tdStyle}>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td {$tdStyle}>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td {$tdStyle}>
               {$line.line_total+$line.tax_amount|crmMoney:$currency}
              </td>
        {if $pricesetFieldsCount }<td {$tdStyle}>{$line.participant_count}</td> {/if}
             </tr>
            {/foreach}
            {if $individual}
              <tr {$participantTotal}>
                <td colspan=3>{ts}Participant Total{/ts}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=1>{$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax|crmMoney}</td>
              </tr>
            {/if}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts} Amount Before Tax: {/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {foreach from=$dataArray item=value key=priceset}
         <tr>
          {if $priceset || $priceset == 0}
           <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {else}
           <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {/if}
         </tr>
        {/foreach}
       {/if}
      {/if}

      {if $amounts && !$lineItem}
       {foreach from=$amounts item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney:$currency} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}

    {if $totalTaxAmount}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if $isPrimary}
       <tr>
        <td {$labelStyle}>
         {ts}Total Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}
        </td>
       </tr>
       {if $pricesetFieldsCount }
     <tr>
       <td {$labelStyle}>
      {ts}Total Participants{/ts}</td>
      <td {$valueStyle}>
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
      {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
      {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}
     {$count}
     </td> </tr>
      {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $financialTypeName}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if $trxn_id}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if $paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if $checkNumber}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}


{if $customPre}
{foreach from=$customPre item=customPr key=i}
   <tr> <th {$headerStyle}>{$customPre_grouptitle.$i}</th></tr>
   {foreach from=$customPr item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
   {/if}
   {/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
   <tr> <th {$headerStyle}>{$customPost_grouptitle.$j}</th></tr>
   {foreach from=$customPos item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
{/if}
{/foreach}
{/foreach}
{/if}

{if $customProfile}
{foreach from=$customProfile.profile item=eachParticipant key=participantID}
     <tr><th {$headerStyle}>{ts 1=$participantID+2}Participant %1{/ts} </th></tr>
     {foreach from=$eachParticipant item=eachProfile key=pid}
     <tr><th {$headerStyle}>{$customProfile.title.$pid}</th></tr>
     {foreach from=$eachProfile item=val key=field}
     <tr>{foreach from=$val item=v key=f}
         <td {$labelStyle}>{$field}</td>
         <td {$valueStyle}>{$v}</td>
         {/foreach}
     </tr>
     {/foreach}
{/foreach}
{/foreach}
{/if}

    {if $customGroup}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}
    </table>
    {if $event.allow_selfcancelxfer }
     <tr>
      <td colspan="2" {$valueStyle}>
        {ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}<br />
        {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360"  h=0 a=1 fe=1}{/capture}
        <a href="{$selfService}">{ts}Click here to transfer or cancel your registration.{/ts}</a>
      </td>
     </tr>
    {/if}
   </td>
  </tr>
 </table>
</center>

</body>
</html>
', 1, false),array('block', 'ts', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}
{capture assign=tdfirstStyle}style="width: 180px; padding-bottom: 15px;"{/capture}
{capture assign=tdStyle}style="width: 100px;"{/capture}
{capture assign=participantTotal}style="margin: 0.5em 0 0.5em;padding: 0.5em;background-color: #999999;font-weight: bold;color: #FAFAFA;border-radius: 2px;"{/capture}


<center>
 <table width="700" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
  <p>Dear Ana,</p>

    {if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
     <p>{$event.confirm_email_text|htmlize}</p>

    {else}
     <p>{ts}Thank you for your participation.{/ts}
     {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to <strong> %1</strong>.{/ts}
     {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>waitlisted</strong>.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>registered<strong>.{/ts}{/if}{/if}.</p>

    {/if}

    <p>
    {if $isOnWaitlist}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if $isPrimary}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif $isRequireApproval}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if $isPrimary}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}
     <p>{$pay_later_receipt}</p> {* FIXME: this might be text rather than HTML *}
    {else}
     <p>{ts}Please print this confirmation for your records.{/ts}</p>
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table width="700" style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>


     {if $conference_sessions}
      <tr>
       <td colspan="2" {$labelStyle}>
  {ts}Your schedule:{/ts}
       </td>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
  {assign var=\'group_by_day\' value=\'NA\'}
  {foreach from=$conference_sessions item=session}
   {if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
    {assign var=\'group_by_day\' value=$session.start_date}
          <em>{$group_by_day|date_format:"%m/%d/%Y"}</em><br />
   {/if}
   {$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}<br />
   {if $session.location}&nbsp;&nbsp;&nbsp;&nbsp;{$session.location}<br />{/if}
  {/foreach}
       </td>
      </tr>
     {/if}

     {if $event.participant_role neq \'Attendee\' and $defaultRole}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if $isShowLocation}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if $location.phone.1.phone || $location.email.1.email}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if $event.is_public}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

    {if $event.is_share}
        <tr>
            <td colspan="2" {$valueStyle}>
                {capture assign=eventUrl}{crmURL p=\'civicrm/event/info\' q="id=`$event.id`&reset=1" a=true fe=1 h=1}{/capture}
                {include file="CRM/common/SocialNetwork.tpl" emailMode=true url=$eventUrl title=$event.title pageURL=$eventUrl}
            </td>
        </tr>
    {/if}
    {if $payer.name}
     <tr>
       <th {$headerStyle}>
         {ts}You were registered by:{/ts}
       </th>
     </tr>
     <tr>
       <td colspan="2" {$valueStyle}>
        {$payer.name}
       </td>
     </tr>
    {/if}
    {if $event.is_monetary}

      <tr>
       <th {$headerStyle}>
        {$event.fee_label}
       </th>
      </tr>

      {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if $isPrimary}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if  $pricesetFieldsCount }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td {$tdfirstStyle}>
              {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td {$tdStyle} align="middle">
               {$line.qty}
              </td>
              <td {$tdStyle}>
               {$line.unit_price|crmMoney:$currency}
              </td>
              {if $dataArray}
               <td {$tdStyle}>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td {$tdStyle}>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td {$tdStyle}>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td {$tdStyle}>
               {$line.line_total+$line.tax_amount|crmMoney:$currency}
              </td>
        {if $pricesetFieldsCount }<td {$tdStyle}>{$line.participant_count}</td> {/if}
             </tr>
            {/foreach}
            {if $individual}
              <tr {$participantTotal}>
                <td colspan=3>{ts}Participant Total{/ts}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=1>{$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax|crmMoney}</td>
              </tr>
            {/if}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts} Amount Before Tax: {/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {foreach from=$dataArray item=value key=priceset}
         <tr>
          {if $priceset || $priceset == 0}
           <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {else}
           <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {/if}
         </tr>
        {/foreach}
       {/if}
      {/if}

      {if $amounts && !$lineItem}
       {foreach from=$amounts item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney:$currency} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}

    {if $totalTaxAmount}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if $isPrimary}
       <tr>
        <td {$labelStyle}>
         {ts}Total Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}
        </td>
       </tr>
       {if $pricesetFieldsCount }
     <tr>
       <td {$labelStyle}>
      {ts}Total Participants{/ts}</td>
      <td {$valueStyle}>
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
      {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
      {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}
     {$count}
     </td> </tr>
      {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $financialTypeName}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if $trxn_id}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if $paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if $checkNumber}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}


{if $customPre}
{foreach from=$customPre item=customPr key=i}
   <tr> <th {$headerStyle}>{$customPre_grouptitle.$i}</th></tr>
   {foreach from=$customPr item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
   {/if}
   {/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
   <tr> <th {$headerStyle}>{$customPost_grouptitle.$j}</th></tr>
   {foreach from=$customPos item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
{/if}
{/foreach}
{/foreach}
{/if}

{if $customProfile}
{foreach from=$customProfile.profile item=eachParticipant key=participantID}
     <tr><th {$headerStyle}>{ts 1=$participantID+2}Participant %1{/ts} </th></tr>
     {foreach from=$eachParticipant item=eachProfile key=pid}
     <tr><th {$headerStyle}>{$customProfile.title.$pid}</th></tr>
     {foreach from=$eachProfile item=val key=field}
     <tr>{foreach from=$val item=v key=f}
         <td {$labelStyle}>{$field}</td>
         <td {$valueStyle}>{$v}</td>
         {/foreach}
     </tr>
     {/foreach}
{/foreach}
{/foreach}
{/if}

    {if $customGroup}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}
    </table>
    {if $event.allow_selfcancelxfer }
     <tr>
      <td colspan="2" {$valueStyle}>
        {ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}<br />
        {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360"  h=0 a=1 fe=1}{/capture}
        <a href="{$selfService}">{ts}Click here to transfer or cancel your registration.{/ts}</a>
      </td>
     </tr>
    {/if}
   </td>
  </tr>
 </table>
</center>

</body>
</html>
', 34, false),array('modifier', 'htmlize', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}
{capture assign=tdfirstStyle}style="width: 180px; padding-bottom: 15px;"{/capture}
{capture assign=tdStyle}style="width: 100px;"{/capture}
{capture assign=participantTotal}style="margin: 0.5em 0 0.5em;padding: 0.5em;background-color: #999999;font-weight: bold;color: #FAFAFA;border-radius: 2px;"{/capture}


<center>
 <table width="700" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
  <p>Dear Ana,</p>

    {if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
     <p>{$event.confirm_email_text|htmlize}</p>

    {else}
     <p>{ts}Thank you for your participation.{/ts}
     {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to <strong> %1</strong>.{/ts}
     {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>waitlisted</strong>.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>registered<strong>.{/ts}{/if}{/if}.</p>

    {/if}

    <p>
    {if $isOnWaitlist}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if $isPrimary}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif $isRequireApproval}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if $isPrimary}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}
     <p>{$pay_later_receipt}</p> {* FIXME: this might be text rather than HTML *}
    {else}
     <p>{ts}Please print this confirmation for your records.{/ts}</p>
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table width="700" style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>


     {if $conference_sessions}
      <tr>
       <td colspan="2" {$labelStyle}>
  {ts}Your schedule:{/ts}
       </td>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
  {assign var=\'group_by_day\' value=\'NA\'}
  {foreach from=$conference_sessions item=session}
   {if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
    {assign var=\'group_by_day\' value=$session.start_date}
          <em>{$group_by_day|date_format:"%m/%d/%Y"}</em><br />
   {/if}
   {$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}<br />
   {if $session.location}&nbsp;&nbsp;&nbsp;&nbsp;{$session.location}<br />{/if}
  {/foreach}
       </td>
      </tr>
     {/if}

     {if $event.participant_role neq \'Attendee\' and $defaultRole}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if $isShowLocation}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if $location.phone.1.phone || $location.email.1.email}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if $event.is_public}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

    {if $event.is_share}
        <tr>
            <td colspan="2" {$valueStyle}>
                {capture assign=eventUrl}{crmURL p=\'civicrm/event/info\' q="id=`$event.id`&reset=1" a=true fe=1 h=1}{/capture}
                {include file="CRM/common/SocialNetwork.tpl" emailMode=true url=$eventUrl title=$event.title pageURL=$eventUrl}
            </td>
        </tr>
    {/if}
    {if $payer.name}
     <tr>
       <th {$headerStyle}>
         {ts}You were registered by:{/ts}
       </th>
     </tr>
     <tr>
       <td colspan="2" {$valueStyle}>
        {$payer.name}
       </td>
     </tr>
    {/if}
    {if $event.is_monetary}

      <tr>
       <th {$headerStyle}>
        {$event.fee_label}
       </th>
      </tr>

      {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if $isPrimary}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if  $pricesetFieldsCount }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td {$tdfirstStyle}>
              {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td {$tdStyle} align="middle">
               {$line.qty}
              </td>
              <td {$tdStyle}>
               {$line.unit_price|crmMoney:$currency}
              </td>
              {if $dataArray}
               <td {$tdStyle}>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td {$tdStyle}>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td {$tdStyle}>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td {$tdStyle}>
               {$line.line_total+$line.tax_amount|crmMoney:$currency}
              </td>
        {if $pricesetFieldsCount }<td {$tdStyle}>{$line.participant_count}</td> {/if}
             </tr>
            {/foreach}
            {if $individual}
              <tr {$participantTotal}>
                <td colspan=3>{ts}Participant Total{/ts}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=1>{$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax|crmMoney}</td>
              </tr>
            {/if}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts} Amount Before Tax: {/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {foreach from=$dataArray item=value key=priceset}
         <tr>
          {if $priceset || $priceset == 0}
           <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {else}
           <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {/if}
         </tr>
        {/foreach}
       {/if}
      {/if}

      {if $amounts && !$lineItem}
       {foreach from=$amounts item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney:$currency} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}

    {if $totalTaxAmount}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if $isPrimary}
       <tr>
        <td {$labelStyle}>
         {ts}Total Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}
        </td>
       </tr>
       {if $pricesetFieldsCount }
     <tr>
       <td {$labelStyle}>
      {ts}Total Participants{/ts}</td>
      <td {$valueStyle}>
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
      {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
      {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}
     {$count}
     </td> </tr>
      {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $financialTypeName}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if $trxn_id}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if $paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if $checkNumber}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}


{if $customPre}
{foreach from=$customPre item=customPr key=i}
   <tr> <th {$headerStyle}>{$customPre_grouptitle.$i}</th></tr>
   {foreach from=$customPr item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
   {/if}
   {/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
   <tr> <th {$headerStyle}>{$customPost_grouptitle.$j}</th></tr>
   {foreach from=$customPos item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
{/if}
{/foreach}
{/foreach}
{/if}

{if $customProfile}
{foreach from=$customProfile.profile item=eachParticipant key=participantID}
     <tr><th {$headerStyle}>{ts 1=$participantID+2}Participant %1{/ts} </th></tr>
     {foreach from=$eachParticipant item=eachProfile key=pid}
     <tr><th {$headerStyle}>{$customProfile.title.$pid}</th></tr>
     {foreach from=$eachProfile item=val key=field}
     <tr>{foreach from=$val item=v key=f}
         <td {$labelStyle}>{$field}</td>
         <td {$valueStyle}>{$v}</td>
         {/foreach}
     </tr>
     {/foreach}
{/foreach}
{/foreach}
{/if}

    {if $customGroup}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}
    </table>
    {if $event.allow_selfcancelxfer }
     <tr>
      <td colspan="2" {$valueStyle}>
        {ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}<br />
        {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360"  h=0 a=1 fe=1}{/capture}
        <a href="{$selfService}">{ts}Click here to transfer or cancel your registration.{/ts}</a>
      </td>
     </tr>
    {/if}
   </td>
  </tr>
 </table>
</center>

</body>
</html>
', 31, false),array('modifier', 'date_format', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}
{capture assign=tdfirstStyle}style="width: 180px; padding-bottom: 15px;"{/capture}
{capture assign=tdStyle}style="width: 100px;"{/capture}
{capture assign=participantTotal}style="margin: 0.5em 0 0.5em;padding: 0.5em;background-color: #999999;font-weight: bold;color: #FAFAFA;border-radius: 2px;"{/capture}


<center>
 <table width="700" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
  <p>Dear Ana,</p>

    {if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
     <p>{$event.confirm_email_text|htmlize}</p>

    {else}
     <p>{ts}Thank you for your participation.{/ts}
     {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to <strong> %1</strong>.{/ts}
     {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>waitlisted</strong>.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>registered<strong>.{/ts}{/if}{/if}.</p>

    {/if}

    <p>
    {if $isOnWaitlist}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if $isPrimary}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif $isRequireApproval}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if $isPrimary}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}
     <p>{$pay_later_receipt}</p> {* FIXME: this might be text rather than HTML *}
    {else}
     <p>{ts}Please print this confirmation for your records.{/ts}</p>
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table width="700" style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>


     {if $conference_sessions}
      <tr>
       <td colspan="2" {$labelStyle}>
  {ts}Your schedule:{/ts}
       </td>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
  {assign var=\'group_by_day\' value=\'NA\'}
  {foreach from=$conference_sessions item=session}
   {if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
    {assign var=\'group_by_day\' value=$session.start_date}
          <em>{$group_by_day|date_format:"%m/%d/%Y"}</em><br />
   {/if}
   {$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}<br />
   {if $session.location}&nbsp;&nbsp;&nbsp;&nbsp;{$session.location}<br />{/if}
  {/foreach}
       </td>
      </tr>
     {/if}

     {if $event.participant_role neq \'Attendee\' and $defaultRole}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if $isShowLocation}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if $location.phone.1.phone || $location.email.1.email}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if $event.is_public}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

    {if $event.is_share}
        <tr>
            <td colspan="2" {$valueStyle}>
                {capture assign=eventUrl}{crmURL p=\'civicrm/event/info\' q="id=`$event.id`&reset=1" a=true fe=1 h=1}{/capture}
                {include file="CRM/common/SocialNetwork.tpl" emailMode=true url=$eventUrl title=$event.title pageURL=$eventUrl}
            </td>
        </tr>
    {/if}
    {if $payer.name}
     <tr>
       <th {$headerStyle}>
         {ts}You were registered by:{/ts}
       </th>
     </tr>
     <tr>
       <td colspan="2" {$valueStyle}>
        {$payer.name}
       </td>
     </tr>
    {/if}
    {if $event.is_monetary}

      <tr>
       <th {$headerStyle}>
        {$event.fee_label}
       </th>
      </tr>

      {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if $isPrimary}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if  $pricesetFieldsCount }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td {$tdfirstStyle}>
              {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td {$tdStyle} align="middle">
               {$line.qty}
              </td>
              <td {$tdStyle}>
               {$line.unit_price|crmMoney:$currency}
              </td>
              {if $dataArray}
               <td {$tdStyle}>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td {$tdStyle}>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td {$tdStyle}>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td {$tdStyle}>
               {$line.line_total+$line.tax_amount|crmMoney:$currency}
              </td>
        {if $pricesetFieldsCount }<td {$tdStyle}>{$line.participant_count}</td> {/if}
             </tr>
            {/foreach}
            {if $individual}
              <tr {$participantTotal}>
                <td colspan=3>{ts}Participant Total{/ts}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=1>{$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax|crmMoney}</td>
              </tr>
            {/if}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts} Amount Before Tax: {/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {foreach from=$dataArray item=value key=priceset}
         <tr>
          {if $priceset || $priceset == 0}
           <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {else}
           <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {/if}
         </tr>
        {/foreach}
       {/if}
      {/if}

      {if $amounts && !$lineItem}
       {foreach from=$amounts item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney:$currency} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}

    {if $totalTaxAmount}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if $isPrimary}
       <tr>
        <td {$labelStyle}>
         {ts}Total Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}
        </td>
       </tr>
       {if $pricesetFieldsCount }
     <tr>
       <td {$labelStyle}>
      {ts}Total Participants{/ts}</td>
      <td {$valueStyle}>
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
      {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
      {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}
     {$count}
     </td> </tr>
      {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $financialTypeName}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if $trxn_id}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if $paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if $checkNumber}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}


{if $customPre}
{foreach from=$customPre item=customPr key=i}
   <tr> <th {$headerStyle}>{$customPre_grouptitle.$i}</th></tr>
   {foreach from=$customPr item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
   {/if}
   {/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
   <tr> <th {$headerStyle}>{$customPost_grouptitle.$j}</th></tr>
   {foreach from=$customPos item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
{/if}
{/foreach}
{/foreach}
{/if}

{if $customProfile}
{foreach from=$customProfile.profile item=eachParticipant key=participantID}
     <tr><th {$headerStyle}>{ts 1=$participantID+2}Participant %1{/ts} </th></tr>
     {foreach from=$eachParticipant item=eachProfile key=pid}
     <tr><th {$headerStyle}>{$customProfile.title.$pid}</th></tr>
     {foreach from=$eachProfile item=val key=field}
     <tr>{foreach from=$val item=v key=f}
         <td {$labelStyle}>{$field}</td>
         <td {$valueStyle}>{$v}</td>
         {/foreach}
     </tr>
     {/foreach}
{/foreach}
{/foreach}
{/if}

    {if $customGroup}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}
    </table>
    {if $event.allow_selfcancelxfer }
     <tr>
      <td colspan="2" {$valueStyle}>
        {ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}<br />
        {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360"  h=0 a=1 fe=1}{/capture}
        <a href="{$selfService}">{ts}Click here to transfer or cancel your registration.{/ts}</a>
      </td>
     </tr>
    {/if}
   </td>
  </tr>
 </table>
</center>

</body>
</html>
', 70, false),array('modifier', 'crmDate', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}
{capture assign=tdfirstStyle}style="width: 180px; padding-bottom: 15px;"{/capture}
{capture assign=tdStyle}style="width: 100px;"{/capture}
{capture assign=participantTotal}style="margin: 0.5em 0 0.5em;padding: 0.5em;background-color: #999999;font-weight: bold;color: #FAFAFA;border-radius: 2px;"{/capture}


<center>
 <table width="700" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
  <p>Dear Ana,</p>

    {if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
     <p>{$event.confirm_email_text|htmlize}</p>

    {else}
     <p>{ts}Thank you for your participation.{/ts}
     {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to <strong> %1</strong>.{/ts}
     {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>waitlisted</strong>.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>registered<strong>.{/ts}{/if}{/if}.</p>

    {/if}

    <p>
    {if $isOnWaitlist}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if $isPrimary}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif $isRequireApproval}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if $isPrimary}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}
     <p>{$pay_later_receipt}</p> {* FIXME: this might be text rather than HTML *}
    {else}
     <p>{ts}Please print this confirmation for your records.{/ts}</p>
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table width="700" style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>


     {if $conference_sessions}
      <tr>
       <td colspan="2" {$labelStyle}>
  {ts}Your schedule:{/ts}
       </td>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
  {assign var=\'group_by_day\' value=\'NA\'}
  {foreach from=$conference_sessions item=session}
   {if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
    {assign var=\'group_by_day\' value=$session.start_date}
          <em>{$group_by_day|date_format:"%m/%d/%Y"}</em><br />
   {/if}
   {$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}<br />
   {if $session.location}&nbsp;&nbsp;&nbsp;&nbsp;{$session.location}<br />{/if}
  {/foreach}
       </td>
      </tr>
     {/if}

     {if $event.participant_role neq \'Attendee\' and $defaultRole}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if $isShowLocation}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if $location.phone.1.phone || $location.email.1.email}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if $event.is_public}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

    {if $event.is_share}
        <tr>
            <td colspan="2" {$valueStyle}>
                {capture assign=eventUrl}{crmURL p=\'civicrm/event/info\' q="id=`$event.id`&reset=1" a=true fe=1 h=1}{/capture}
                {include file="CRM/common/SocialNetwork.tpl" emailMode=true url=$eventUrl title=$event.title pageURL=$eventUrl}
            </td>
        </tr>
    {/if}
    {if $payer.name}
     <tr>
       <th {$headerStyle}>
         {ts}You were registered by:{/ts}
       </th>
     </tr>
     <tr>
       <td colspan="2" {$valueStyle}>
        {$payer.name}
       </td>
     </tr>
    {/if}
    {if $event.is_monetary}

      <tr>
       <th {$headerStyle}>
        {$event.fee_label}
       </th>
      </tr>

      {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if $isPrimary}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if  $pricesetFieldsCount }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td {$tdfirstStyle}>
              {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td {$tdStyle} align="middle">
               {$line.qty}
              </td>
              <td {$tdStyle}>
               {$line.unit_price|crmMoney:$currency}
              </td>
              {if $dataArray}
               <td {$tdStyle}>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td {$tdStyle}>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td {$tdStyle}>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td {$tdStyle}>
               {$line.line_total+$line.tax_amount|crmMoney:$currency}
              </td>
        {if $pricesetFieldsCount }<td {$tdStyle}>{$line.participant_count}</td> {/if}
             </tr>
            {/foreach}
            {if $individual}
              <tr {$participantTotal}>
                <td colspan=3>{ts}Participant Total{/ts}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=1>{$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax|crmMoney}</td>
              </tr>
            {/if}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts} Amount Before Tax: {/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {foreach from=$dataArray item=value key=priceset}
         <tr>
          {if $priceset || $priceset == 0}
           <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {else}
           <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {/if}
         </tr>
        {/foreach}
       {/if}
      {/if}

      {if $amounts && !$lineItem}
       {foreach from=$amounts item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney:$currency} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}

    {if $totalTaxAmount}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if $isPrimary}
       <tr>
        <td {$labelStyle}>
         {ts}Total Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}
        </td>
       </tr>
       {if $pricesetFieldsCount }
     <tr>
       <td {$labelStyle}>
      {ts}Total Participants{/ts}</td>
      <td {$valueStyle}>
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
      {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
      {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}
     {$count}
     </td> </tr>
      {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $financialTypeName}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if $trxn_id}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if $paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if $checkNumber}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}


{if $customPre}
{foreach from=$customPre item=customPr key=i}
   <tr> <th {$headerStyle}>{$customPre_grouptitle.$i}</th></tr>
   {foreach from=$customPr item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
   {/if}
   {/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
   <tr> <th {$headerStyle}>{$customPost_grouptitle.$j}</th></tr>
   {foreach from=$customPos item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
{/if}
{/foreach}
{/foreach}
{/if}

{if $customProfile}
{foreach from=$customProfile.profile item=eachParticipant key=participantID}
     <tr><th {$headerStyle}>{ts 1=$participantID+2}Participant %1{/ts} </th></tr>
     {foreach from=$eachParticipant item=eachProfile key=pid}
     <tr><th {$headerStyle}>{$customProfile.title.$pid}</th></tr>
     {foreach from=$eachProfile item=val key=field}
     <tr>{foreach from=$val item=v key=f}
         <td {$labelStyle}>{$field}</td>
         <td {$valueStyle}>{$v}</td>
         {/foreach}
     </tr>
     {/foreach}
{/foreach}
{/foreach}
{/if}

    {if $customGroup}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}
    </table>
    {if $event.allow_selfcancelxfer }
     <tr>
      <td colspan="2" {$valueStyle}>
        {ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}<br />
        {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360"  h=0 a=1 fe=1}{/capture}
        <a href="{$selfService}">{ts}Click here to transfer or cancel your registration.{/ts}</a>
      </td>
     </tr>
    {/if}
   </td>
  </tr>
 </table>
</center>

</body>
</html>
', 70, false),array('modifier', 'nl2br', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}
{capture assign=tdfirstStyle}style="width: 180px; padding-bottom: 15px;"{/capture}
{capture assign=tdStyle}style="width: 100px;"{/capture}
{capture assign=participantTotal}style="margin: 0.5em 0 0.5em;padding: 0.5em;background-color: #999999;font-weight: bold;color: #FAFAFA;border-radius: 2px;"{/capture}


<center>
 <table width="700" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
  <p>Dear Ana,</p>

    {if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
     <p>{$event.confirm_email_text|htmlize}</p>

    {else}
     <p>{ts}Thank you for your participation.{/ts}
     {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to <strong> %1</strong>.{/ts}
     {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>waitlisted</strong>.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>registered<strong>.{/ts}{/if}{/if}.</p>

    {/if}

    <p>
    {if $isOnWaitlist}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if $isPrimary}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif $isRequireApproval}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if $isPrimary}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}
     <p>{$pay_later_receipt}</p> {* FIXME: this might be text rather than HTML *}
    {else}
     <p>{ts}Please print this confirmation for your records.{/ts}</p>
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table width="700" style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>


     {if $conference_sessions}
      <tr>
       <td colspan="2" {$labelStyle}>
  {ts}Your schedule:{/ts}
       </td>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
  {assign var=\'group_by_day\' value=\'NA\'}
  {foreach from=$conference_sessions item=session}
   {if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
    {assign var=\'group_by_day\' value=$session.start_date}
          <em>{$group_by_day|date_format:"%m/%d/%Y"}</em><br />
   {/if}
   {$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}<br />
   {if $session.location}&nbsp;&nbsp;&nbsp;&nbsp;{$session.location}<br />{/if}
  {/foreach}
       </td>
      </tr>
     {/if}

     {if $event.participant_role neq \'Attendee\' and $defaultRole}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if $isShowLocation}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if $location.phone.1.phone || $location.email.1.email}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if $event.is_public}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

    {if $event.is_share}
        <tr>
            <td colspan="2" {$valueStyle}>
                {capture assign=eventUrl}{crmURL p=\'civicrm/event/info\' q="id=`$event.id`&reset=1" a=true fe=1 h=1}{/capture}
                {include file="CRM/common/SocialNetwork.tpl" emailMode=true url=$eventUrl title=$event.title pageURL=$eventUrl}
            </td>
        </tr>
    {/if}
    {if $payer.name}
     <tr>
       <th {$headerStyle}>
         {ts}You were registered by:{/ts}
       </th>
     </tr>
     <tr>
       <td colspan="2" {$valueStyle}>
        {$payer.name}
       </td>
     </tr>
    {/if}
    {if $event.is_monetary}

      <tr>
       <th {$headerStyle}>
        {$event.fee_label}
       </th>
      </tr>

      {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if $isPrimary}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if  $pricesetFieldsCount }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td {$tdfirstStyle}>
              {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td {$tdStyle} align="middle">
               {$line.qty}
              </td>
              <td {$tdStyle}>
               {$line.unit_price|crmMoney:$currency}
              </td>
              {if $dataArray}
               <td {$tdStyle}>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td {$tdStyle}>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td {$tdStyle}>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td {$tdStyle}>
               {$line.line_total+$line.tax_amount|crmMoney:$currency}
              </td>
        {if $pricesetFieldsCount }<td {$tdStyle}>{$line.participant_count}</td> {/if}
             </tr>
            {/foreach}
            {if $individual}
              <tr {$participantTotal}>
                <td colspan=3>{ts}Participant Total{/ts}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=1>{$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax|crmMoney}</td>
              </tr>
            {/if}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts} Amount Before Tax: {/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {foreach from=$dataArray item=value key=priceset}
         <tr>
          {if $priceset || $priceset == 0}
           <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {else}
           <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {/if}
         </tr>
        {/foreach}
       {/if}
      {/if}

      {if $amounts && !$lineItem}
       {foreach from=$amounts item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney:$currency} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}

    {if $totalTaxAmount}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if $isPrimary}
       <tr>
        <td {$labelStyle}>
         {ts}Total Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}
        </td>
       </tr>
       {if $pricesetFieldsCount }
     <tr>
       <td {$labelStyle}>
      {ts}Total Participants{/ts}</td>
      <td {$valueStyle}>
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
      {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
      {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}
     {$count}
     </td> </tr>
      {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $financialTypeName}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if $trxn_id}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if $paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if $checkNumber}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}


{if $customPre}
{foreach from=$customPre item=customPr key=i}
   <tr> <th {$headerStyle}>{$customPre_grouptitle.$i}</th></tr>
   {foreach from=$customPr item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
   {/if}
   {/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
   <tr> <th {$headerStyle}>{$customPost_grouptitle.$j}</th></tr>
   {foreach from=$customPos item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
{/if}
{/foreach}
{/foreach}
{/if}

{if $customProfile}
{foreach from=$customProfile.profile item=eachParticipant key=participantID}
     <tr><th {$headerStyle}>{ts 1=$participantID+2}Participant %1{/ts} </th></tr>
     {foreach from=$eachParticipant item=eachProfile key=pid}
     <tr><th {$headerStyle}>{$customProfile.title.$pid}</th></tr>
     {foreach from=$eachProfile item=val key=field}
     <tr>{foreach from=$val item=v key=f}
         <td {$labelStyle}>{$field}</td>
         <td {$valueStyle}>{$v}</td>
         {/foreach}
     </tr>
     {/foreach}
{/foreach}
{/foreach}
{/if}

    {if $customGroup}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}
    </table>
    {if $event.allow_selfcancelxfer }
     <tr>
      <td colspan="2" {$valueStyle}>
        {ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}<br />
        {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360"  h=0 a=1 fe=1}{/capture}
        <a href="{$selfService}">{ts}Click here to transfer or cancel your registration.{/ts}</a>
      </td>
     </tr>
    {/if}
   </td>
  </tr>
 </table>
</center>

</body>
</html>
', 110, false),array('modifier', 'count', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}
{capture assign=tdfirstStyle}style="width: 180px; padding-bottom: 15px;"{/capture}
{capture assign=tdStyle}style="width: 100px;"{/capture}
{capture assign=participantTotal}style="margin: 0.5em 0 0.5em;padding: 0.5em;background-color: #999999;font-weight: bold;color: #FAFAFA;border-radius: 2px;"{/capture}


<center>
 <table width="700" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
  <p>Dear Ana,</p>

    {if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
     <p>{$event.confirm_email_text|htmlize}</p>

    {else}
     <p>{ts}Thank you for your participation.{/ts}
     {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to <strong> %1</strong>.{/ts}
     {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>waitlisted</strong>.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>registered<strong>.{/ts}{/if}{/if}.</p>

    {/if}

    <p>
    {if $isOnWaitlist}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if $isPrimary}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif $isRequireApproval}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if $isPrimary}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}
     <p>{$pay_later_receipt}</p> {* FIXME: this might be text rather than HTML *}
    {else}
     <p>{ts}Please print this confirmation for your records.{/ts}</p>
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table width="700" style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>


     {if $conference_sessions}
      <tr>
       <td colspan="2" {$labelStyle}>
  {ts}Your schedule:{/ts}
       </td>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
  {assign var=\'group_by_day\' value=\'NA\'}
  {foreach from=$conference_sessions item=session}
   {if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
    {assign var=\'group_by_day\' value=$session.start_date}
          <em>{$group_by_day|date_format:"%m/%d/%Y"}</em><br />
   {/if}
   {$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}<br />
   {if $session.location}&nbsp;&nbsp;&nbsp;&nbsp;{$session.location}<br />{/if}
  {/foreach}
       </td>
      </tr>
     {/if}

     {if $event.participant_role neq \'Attendee\' and $defaultRole}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if $isShowLocation}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if $location.phone.1.phone || $location.email.1.email}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if $event.is_public}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

    {if $event.is_share}
        <tr>
            <td colspan="2" {$valueStyle}>
                {capture assign=eventUrl}{crmURL p=\'civicrm/event/info\' q="id=`$event.id`&reset=1" a=true fe=1 h=1}{/capture}
                {include file="CRM/common/SocialNetwork.tpl" emailMode=true url=$eventUrl title=$event.title pageURL=$eventUrl}
            </td>
        </tr>
    {/if}
    {if $payer.name}
     <tr>
       <th {$headerStyle}>
         {ts}You were registered by:{/ts}
       </th>
     </tr>
     <tr>
       <td colspan="2" {$valueStyle}>
        {$payer.name}
       </td>
     </tr>
    {/if}
    {if $event.is_monetary}

      <tr>
       <th {$headerStyle}>
        {$event.fee_label}
       </th>
      </tr>

      {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if $isPrimary}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if  $pricesetFieldsCount }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td {$tdfirstStyle}>
              {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td {$tdStyle} align="middle">
               {$line.qty}
              </td>
              <td {$tdStyle}>
               {$line.unit_price|crmMoney:$currency}
              </td>
              {if $dataArray}
               <td {$tdStyle}>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td {$tdStyle}>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td {$tdStyle}>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td {$tdStyle}>
               {$line.line_total+$line.tax_amount|crmMoney:$currency}
              </td>
        {if $pricesetFieldsCount }<td {$tdStyle}>{$line.participant_count}</td> {/if}
             </tr>
            {/foreach}
            {if $individual}
              <tr {$participantTotal}>
                <td colspan=3>{ts}Participant Total{/ts}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=1>{$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax|crmMoney}</td>
              </tr>
            {/if}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts} Amount Before Tax: {/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {foreach from=$dataArray item=value key=priceset}
         <tr>
          {if $priceset || $priceset == 0}
           <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {else}
           <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {/if}
         </tr>
        {/foreach}
       {/if}
      {/if}

      {if $amounts && !$lineItem}
       {foreach from=$amounts item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney:$currency} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}

    {if $totalTaxAmount}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if $isPrimary}
       <tr>
        <td {$labelStyle}>
         {ts}Total Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}
        </td>
       </tr>
       {if $pricesetFieldsCount }
     <tr>
       <td {$labelStyle}>
      {ts}Total Participants{/ts}</td>
      <td {$valueStyle}>
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
      {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
      {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}
     {$count}
     </td> </tr>
      {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $financialTypeName}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if $trxn_id}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if $paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if $checkNumber}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}


{if $customPre}
{foreach from=$customPre item=customPr key=i}
   <tr> <th {$headerStyle}>{$customPre_grouptitle.$i}</th></tr>
   {foreach from=$customPr item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
   {/if}
   {/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
   <tr> <th {$headerStyle}>{$customPost_grouptitle.$j}</th></tr>
   {foreach from=$customPos item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
{/if}
{/foreach}
{/foreach}
{/if}

{if $customProfile}
{foreach from=$customProfile.profile item=eachParticipant key=participantID}
     <tr><th {$headerStyle}>{ts 1=$participantID+2}Participant %1{/ts} </th></tr>
     {foreach from=$eachParticipant item=eachProfile key=pid}
     <tr><th {$headerStyle}>{$customProfile.title.$pid}</th></tr>
     {foreach from=$eachProfile item=val key=field}
     <tr>{foreach from=$val item=v key=f}
         <td {$labelStyle}>{$field}</td>
         <td {$valueStyle}>{$v}</td>
         {/foreach}
     </tr>
     {/foreach}
{/foreach}
{/foreach}
{/if}

    {if $customGroup}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}
    </table>
    {if $event.allow_selfcancelxfer }
     <tr>
      <td colspan="2" {$valueStyle}>
        {ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}<br />
        {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360"  h=0 a=1 fe=1}{/capture}
        <a href="{$selfService}">{ts}Click here to transfer or cancel your registration.{/ts}</a>
      </td>
     </tr>
    {/if}
   </td>
  </tr>
 </table>
</center>

</body>
</html>
', 192, false),array('modifier', 'truncate', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}
{capture assign=tdfirstStyle}style="width: 180px; padding-bottom: 15px;"{/capture}
{capture assign=tdStyle}style="width: 100px;"{/capture}
{capture assign=participantTotal}style="margin: 0.5em 0 0.5em;padding: 0.5em;background-color: #999999;font-weight: bold;color: #FAFAFA;border-radius: 2px;"{/capture}


<center>
 <table width="700" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
  <p>Dear Ana,</p>

    {if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
     <p>{$event.confirm_email_text|htmlize}</p>

    {else}
     <p>{ts}Thank you for your participation.{/ts}
     {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to <strong> %1</strong>.{/ts}
     {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>waitlisted</strong>.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>registered<strong>.{/ts}{/if}{/if}.</p>

    {/if}

    <p>
    {if $isOnWaitlist}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if $isPrimary}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif $isRequireApproval}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if $isPrimary}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}
     <p>{$pay_later_receipt}</p> {* FIXME: this might be text rather than HTML *}
    {else}
     <p>{ts}Please print this confirmation for your records.{/ts}</p>
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table width="700" style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>


     {if $conference_sessions}
      <tr>
       <td colspan="2" {$labelStyle}>
  {ts}Your schedule:{/ts}
       </td>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
  {assign var=\'group_by_day\' value=\'NA\'}
  {foreach from=$conference_sessions item=session}
   {if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
    {assign var=\'group_by_day\' value=$session.start_date}
          <em>{$group_by_day|date_format:"%m/%d/%Y"}</em><br />
   {/if}
   {$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}<br />
   {if $session.location}&nbsp;&nbsp;&nbsp;&nbsp;{$session.location}<br />{/if}
  {/foreach}
       </td>
      </tr>
     {/if}

     {if $event.participant_role neq \'Attendee\' and $defaultRole}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if $isShowLocation}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if $location.phone.1.phone || $location.email.1.email}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if $event.is_public}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

    {if $event.is_share}
        <tr>
            <td colspan="2" {$valueStyle}>
                {capture assign=eventUrl}{crmURL p=\'civicrm/event/info\' q="id=`$event.id`&reset=1" a=true fe=1 h=1}{/capture}
                {include file="CRM/common/SocialNetwork.tpl" emailMode=true url=$eventUrl title=$event.title pageURL=$eventUrl}
            </td>
        </tr>
    {/if}
    {if $payer.name}
     <tr>
       <th {$headerStyle}>
         {ts}You were registered by:{/ts}
       </th>
     </tr>
     <tr>
       <td colspan="2" {$valueStyle}>
        {$payer.name}
       </td>
     </tr>
    {/if}
    {if $event.is_monetary}

      <tr>
       <th {$headerStyle}>
        {$event.fee_label}
       </th>
      </tr>

      {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if $isPrimary}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if  $pricesetFieldsCount }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td {$tdfirstStyle}>
              {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td {$tdStyle} align="middle">
               {$line.qty}
              </td>
              <td {$tdStyle}>
               {$line.unit_price|crmMoney:$currency}
              </td>
              {if $dataArray}
               <td {$tdStyle}>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td {$tdStyle}>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td {$tdStyle}>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td {$tdStyle}>
               {$line.line_total+$line.tax_amount|crmMoney:$currency}
              </td>
        {if $pricesetFieldsCount }<td {$tdStyle}>{$line.participant_count}</td> {/if}
             </tr>
            {/foreach}
            {if $individual}
              <tr {$participantTotal}>
                <td colspan=3>{ts}Participant Total{/ts}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=1>{$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax|crmMoney}</td>
              </tr>
            {/if}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts} Amount Before Tax: {/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {foreach from=$dataArray item=value key=priceset}
         <tr>
          {if $priceset || $priceset == 0}
           <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {else}
           <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {/if}
         </tr>
        {/foreach}
       {/if}
      {/if}

      {if $amounts && !$lineItem}
       {foreach from=$amounts item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney:$currency} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}

    {if $totalTaxAmount}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if $isPrimary}
       <tr>
        <td {$labelStyle}>
         {ts}Total Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}
        </td>
       </tr>
       {if $pricesetFieldsCount }
     <tr>
       <td {$labelStyle}>
      {ts}Total Participants{/ts}</td>
      <td {$valueStyle}>
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
      {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
      {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}
     {$count}
     </td> </tr>
      {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $financialTypeName}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if $trxn_id}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if $paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if $checkNumber}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}


{if $customPre}
{foreach from=$customPre item=customPr key=i}
   <tr> <th {$headerStyle}>{$customPre_grouptitle.$i}</th></tr>
   {foreach from=$customPr item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
   {/if}
   {/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
   <tr> <th {$headerStyle}>{$customPost_grouptitle.$j}</th></tr>
   {foreach from=$customPos item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
{/if}
{/foreach}
{/foreach}
{/if}

{if $customProfile}
{foreach from=$customProfile.profile item=eachParticipant key=participantID}
     <tr><th {$headerStyle}>{ts 1=$participantID+2}Participant %1{/ts} </th></tr>
     {foreach from=$eachParticipant item=eachProfile key=pid}
     <tr><th {$headerStyle}>{$customProfile.title.$pid}</th></tr>
     {foreach from=$eachProfile item=val key=field}
     <tr>{foreach from=$val item=v key=f}
         <td {$labelStyle}>{$field}</td>
         <td {$valueStyle}>{$v}</td>
         {/foreach}
     </tr>
     {/foreach}
{/foreach}
{/foreach}
{/if}

    {if $customGroup}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}
    </table>
    {if $event.allow_selfcancelxfer }
     <tr>
      <td colspan="2" {$valueStyle}>
        {ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}<br />
        {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360"  h=0 a=1 fe=1}{/capture}
        <a href="{$selfService}">{ts}Click here to transfer or cancel your registration.{/ts}</a>
      </td>
     </tr>
    {/if}
   </td>
  </tr>
 </table>
</center>

</body>
</html>
', 218, false),array('modifier', 'crmMoney', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}
{capture assign=tdfirstStyle}style="width: 180px; padding-bottom: 15px;"{/capture}
{capture assign=tdStyle}style="width: 100px;"{/capture}
{capture assign=participantTotal}style="margin: 0.5em 0 0.5em;padding: 0.5em;background-color: #999999;font-weight: bold;color: #FAFAFA;border-radius: 2px;"{/capture}


<center>
 <table width="700" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
  <p>Dear Ana,</p>

    {if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
     <p>{$event.confirm_email_text|htmlize}</p>

    {else}
     <p>{ts}Thank you for your participation.{/ts}
     {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to <strong> %1</strong>.{/ts}
     {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>waitlisted</strong>.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>registered<strong>.{/ts}{/if}{/if}.</p>

    {/if}

    <p>
    {if $isOnWaitlist}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if $isPrimary}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif $isRequireApproval}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if $isPrimary}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}
     <p>{$pay_later_receipt}</p> {* FIXME: this might be text rather than HTML *}
    {else}
     <p>{ts}Please print this confirmation for your records.{/ts}</p>
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table width="700" style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>


     {if $conference_sessions}
      <tr>
       <td colspan="2" {$labelStyle}>
  {ts}Your schedule:{/ts}
       </td>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
  {assign var=\'group_by_day\' value=\'NA\'}
  {foreach from=$conference_sessions item=session}
   {if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
    {assign var=\'group_by_day\' value=$session.start_date}
          <em>{$group_by_day|date_format:"%m/%d/%Y"}</em><br />
   {/if}
   {$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}<br />
   {if $session.location}&nbsp;&nbsp;&nbsp;&nbsp;{$session.location}<br />{/if}
  {/foreach}
       </td>
      </tr>
     {/if}

     {if $event.participant_role neq \'Attendee\' and $defaultRole}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if $isShowLocation}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if $location.phone.1.phone || $location.email.1.email}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if $event.is_public}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

    {if $event.is_share}
        <tr>
            <td colspan="2" {$valueStyle}>
                {capture assign=eventUrl}{crmURL p=\'civicrm/event/info\' q="id=`$event.id`&reset=1" a=true fe=1 h=1}{/capture}
                {include file="CRM/common/SocialNetwork.tpl" emailMode=true url=$eventUrl title=$event.title pageURL=$eventUrl}
            </td>
        </tr>
    {/if}
    {if $payer.name}
     <tr>
       <th {$headerStyle}>
         {ts}You were registered by:{/ts}
       </th>
     </tr>
     <tr>
       <td colspan="2" {$valueStyle}>
        {$payer.name}
       </td>
     </tr>
    {/if}
    {if $event.is_monetary}

      <tr>
       <th {$headerStyle}>
        {$event.fee_label}
       </th>
      </tr>

      {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if $isPrimary}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if  $pricesetFieldsCount }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td {$tdfirstStyle}>
              {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td {$tdStyle} align="middle">
               {$line.qty}
              </td>
              <td {$tdStyle}>
               {$line.unit_price|crmMoney:$currency}
              </td>
              {if $dataArray}
               <td {$tdStyle}>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td {$tdStyle}>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td {$tdStyle}>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td {$tdStyle}>
               {$line.line_total+$line.tax_amount|crmMoney:$currency}
              </td>
        {if $pricesetFieldsCount }<td {$tdStyle}>{$line.participant_count}</td> {/if}
             </tr>
            {/foreach}
            {if $individual}
              <tr {$participantTotal}>
                <td colspan=3>{ts}Participant Total{/ts}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=1>{$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax|crmMoney}</td>
              </tr>
            {/if}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts} Amount Before Tax: {/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {foreach from=$dataArray item=value key=priceset}
         <tr>
          {if $priceset || $priceset == 0}
           <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {else}
           <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {/if}
         </tr>
        {/foreach}
       {/if}
      {/if}

      {if $amounts && !$lineItem}
       {foreach from=$amounts item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney:$currency} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}

    {if $totalTaxAmount}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if $isPrimary}
       <tr>
        <td {$labelStyle}>
         {ts}Total Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}
        </td>
       </tr>
       {if $pricesetFieldsCount }
     <tr>
       <td {$labelStyle}>
      {ts}Total Participants{/ts}</td>
      <td {$valueStyle}>
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
      {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
      {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}
     {$count}
     </td> </tr>
      {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $financialTypeName}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if $trxn_id}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if $paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if $checkNumber}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}


{if $customPre}
{foreach from=$customPre item=customPr key=i}
   <tr> <th {$headerStyle}>{$customPre_grouptitle.$i}</th></tr>
   {foreach from=$customPr item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
   {/if}
   {/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
   <tr> <th {$headerStyle}>{$customPost_grouptitle.$j}</th></tr>
   {foreach from=$customPos item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
{/if}
{/foreach}
{/foreach}
{/if}

{if $customProfile}
{foreach from=$customProfile.profile item=eachParticipant key=participantID}
     <tr><th {$headerStyle}>{ts 1=$participantID+2}Participant %1{/ts} </th></tr>
     {foreach from=$eachParticipant item=eachProfile key=pid}
     <tr><th {$headerStyle}>{$customProfile.title.$pid}</th></tr>
     {foreach from=$eachProfile item=val key=field}
     <tr>{foreach from=$val item=v key=f}
         <td {$labelStyle}>{$field}</td>
         <td {$valueStyle}>{$v}</td>
         {/foreach}
     </tr>
     {/foreach}
{/foreach}
{/foreach}
{/if}

    {if $customGroup}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}
    </table>
    {if $event.allow_selfcancelxfer }
     <tr>
      <td colspan="2" {$valueStyle}>
        {ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}<br />
        {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360"  h=0 a=1 fe=1}{/capture}
        <a href="{$selfService}">{ts}Click here to transfer or cancel your registration.{/ts}</a>
      </td>
     </tr>
    {/if}
   </td>
  </tr>
 </table>
</center>

</body>
</html>
', 224, false),array('modifier', 'string_format', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}
{capture assign=tdfirstStyle}style="width: 180px; padding-bottom: 15px;"{/capture}
{capture assign=tdStyle}style="width: 100px;"{/capture}
{capture assign=participantTotal}style="margin: 0.5em 0 0.5em;padding: 0.5em;background-color: #999999;font-weight: bold;color: #FAFAFA;border-radius: 2px;"{/capture}


<center>
 <table width="700" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
  <p>Dear Ana,</p>

    {if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
     <p>{$event.confirm_email_text|htmlize}</p>

    {else}
     <p>{ts}Thank you for your participation.{/ts}
     {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to <strong> %1</strong>.{/ts}
     {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>waitlisted</strong>.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>registered<strong>.{/ts}{/if}{/if}.</p>

    {/if}

    <p>
    {if $isOnWaitlist}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if $isPrimary}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif $isRequireApproval}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if $isPrimary}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}
     <p>{$pay_later_receipt}</p> {* FIXME: this might be text rather than HTML *}
    {else}
     <p>{ts}Please print this confirmation for your records.{/ts}</p>
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table width="700" style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>


     {if $conference_sessions}
      <tr>
       <td colspan="2" {$labelStyle}>
  {ts}Your schedule:{/ts}
       </td>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
  {assign var=\'group_by_day\' value=\'NA\'}
  {foreach from=$conference_sessions item=session}
   {if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
    {assign var=\'group_by_day\' value=$session.start_date}
          <em>{$group_by_day|date_format:"%m/%d/%Y"}</em><br />
   {/if}
   {$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}<br />
   {if $session.location}&nbsp;&nbsp;&nbsp;&nbsp;{$session.location}<br />{/if}
  {/foreach}
       </td>
      </tr>
     {/if}

     {if $event.participant_role neq \'Attendee\' and $defaultRole}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if $isShowLocation}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if $location.phone.1.phone || $location.email.1.email}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if $event.is_public}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

    {if $event.is_share}
        <tr>
            <td colspan="2" {$valueStyle}>
                {capture assign=eventUrl}{crmURL p=\'civicrm/event/info\' q="id=`$event.id`&reset=1" a=true fe=1 h=1}{/capture}
                {include file="CRM/common/SocialNetwork.tpl" emailMode=true url=$eventUrl title=$event.title pageURL=$eventUrl}
            </td>
        </tr>
    {/if}
    {if $payer.name}
     <tr>
       <th {$headerStyle}>
         {ts}You were registered by:{/ts}
       </th>
     </tr>
     <tr>
       <td colspan="2" {$valueStyle}>
        {$payer.name}
       </td>
     </tr>
    {/if}
    {if $event.is_monetary}

      <tr>
       <th {$headerStyle}>
        {$event.fee_label}
       </th>
      </tr>

      {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if $isPrimary}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if  $pricesetFieldsCount }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td {$tdfirstStyle}>
              {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td {$tdStyle} align="middle">
               {$line.qty}
              </td>
              <td {$tdStyle}>
               {$line.unit_price|crmMoney:$currency}
              </td>
              {if $dataArray}
               <td {$tdStyle}>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td {$tdStyle}>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td {$tdStyle}>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td {$tdStyle}>
               {$line.line_total+$line.tax_amount|crmMoney:$currency}
              </td>
        {if $pricesetFieldsCount }<td {$tdStyle}>{$line.participant_count}</td> {/if}
             </tr>
            {/foreach}
            {if $individual}
              <tr {$participantTotal}>
                <td colspan=3>{ts}Participant Total{/ts}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=1>{$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax|crmMoney}</td>
              </tr>
            {/if}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts} Amount Before Tax: {/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {foreach from=$dataArray item=value key=priceset}
         <tr>
          {if $priceset || $priceset == 0}
           <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {else}
           <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {/if}
         </tr>
        {/foreach}
       {/if}
      {/if}

      {if $amounts && !$lineItem}
       {foreach from=$amounts item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney:$currency} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}

    {if $totalTaxAmount}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if $isPrimary}
       <tr>
        <td {$labelStyle}>
         {ts}Total Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}
        </td>
       </tr>
       {if $pricesetFieldsCount }
     <tr>
       <td {$labelStyle}>
      {ts}Total Participants{/ts}</td>
      <td {$valueStyle}>
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
      {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
      {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}
     {$count}
     </td> </tr>
      {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $financialTypeName}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if $trxn_id}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if $paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if $checkNumber}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}


{if $customPre}
{foreach from=$customPre item=customPr key=i}
   <tr> <th {$headerStyle}>{$customPre_grouptitle.$i}</th></tr>
   {foreach from=$customPr item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
   {/if}
   {/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
   <tr> <th {$headerStyle}>{$customPost_grouptitle.$j}</th></tr>
   {foreach from=$customPos item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
{/if}
{/foreach}
{/foreach}
{/if}

{if $customProfile}
{foreach from=$customProfile.profile item=eachParticipant key=participantID}
     <tr><th {$headerStyle}>{ts 1=$participantID+2}Participant %1{/ts} </th></tr>
     {foreach from=$eachParticipant item=eachProfile key=pid}
     <tr><th {$headerStyle}>{$customProfile.title.$pid}</th></tr>
     {foreach from=$eachProfile item=val key=field}
     <tr>{foreach from=$val item=v key=f}
         <td {$labelStyle}>{$field}</td>
         <td {$valueStyle}>{$v}</td>
         {/foreach}
     </tr>
     {/foreach}
{/foreach}
{/foreach}
{/if}

    {if $customGroup}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}
    </table>
    {if $event.allow_selfcancelxfer }
     <tr>
      <td colspan="2" {$valueStyle}>
        {ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}<br />
        {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360"  h=0 a=1 fe=1}{/capture}
        <a href="{$selfService}">{ts}Click here to transfer or cancel your registration.{/ts}</a>
      </td>
     </tr>
    {/if}
   </td>
  </tr>
 </table>
</center>

</body>
</html>
', 232, false),array('function', 'crmURL', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}
{capture assign=tdfirstStyle}style="width: 180px; padding-bottom: 15px;"{/capture}
{capture assign=tdStyle}style="width: 100px;"{/capture}
{capture assign=participantTotal}style="margin: 0.5em 0 0.5em;padding: 0.5em;background-color: #999999;font-weight: bold;color: #FAFAFA;border-radius: 2px;"{/capture}


<center>
 <table width="700" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
  <p>Dear Ana,</p>

    {if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
     <p>{$event.confirm_email_text|htmlize}</p>

    {else}
     <p>{ts}Thank you for your participation.{/ts}
     {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to <strong> %1</strong>.{/ts}
     {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>waitlisted</strong>.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to <strong>registered<strong>.{/ts}{/if}{/if}.</p>

    {/if}

    <p>
    {if $isOnWaitlist}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if $isPrimary}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif $isRequireApproval}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if $isPrimary}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}
     <p>{$pay_later_receipt}</p> {* FIXME: this might be text rather than HTML *}
    {else}
     <p>{ts}Please print this confirmation for your records.{/ts}</p>
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table width="700" style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>


     {if $conference_sessions}
      <tr>
       <td colspan="2" {$labelStyle}>
  {ts}Your schedule:{/ts}
       </td>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
  {assign var=\'group_by_day\' value=\'NA\'}
  {foreach from=$conference_sessions item=session}
   {if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
    {assign var=\'group_by_day\' value=$session.start_date}
          <em>{$group_by_day|date_format:"%m/%d/%Y"}</em><br />
   {/if}
   {$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}<br />
   {if $session.location}&nbsp;&nbsp;&nbsp;&nbsp;{$session.location}<br />{/if}
  {/foreach}
       </td>
      </tr>
     {/if}

     {if $event.participant_role neq \'Attendee\' and $defaultRole}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if $isShowLocation}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if $location.phone.1.phone || $location.email.1.email}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if $event.is_public}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

    {if $event.is_share}
        <tr>
            <td colspan="2" {$valueStyle}>
                {capture assign=eventUrl}{crmURL p=\'civicrm/event/info\' q="id=`$event.id`&reset=1" a=true fe=1 h=1}{/capture}
                {include file="CRM/common/SocialNetwork.tpl" emailMode=true url=$eventUrl title=$event.title pageURL=$eventUrl}
            </td>
        </tr>
    {/if}
    {if $payer.name}
     <tr>
       <th {$headerStyle}>
         {ts}You were registered by:{/ts}
       </th>
     </tr>
     <tr>
       <td colspan="2" {$valueStyle}>
        {$payer.name}
       </td>
     </tr>
    {/if}
    {if $event.is_monetary}

      <tr>
       <th {$headerStyle}>
        {$event.fee_label}
       </th>
      </tr>

      {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if $isPrimary}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if  $pricesetFieldsCount }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td {$tdfirstStyle}>
              {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td {$tdStyle} align="middle">
               {$line.qty}
              </td>
              <td {$tdStyle}>
               {$line.unit_price|crmMoney:$currency}
              </td>
              {if $dataArray}
               <td {$tdStyle}>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td {$tdStyle}>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td {$tdStyle}>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td {$tdStyle}>
               {$line.line_total+$line.tax_amount|crmMoney:$currency}
              </td>
        {if $pricesetFieldsCount }<td {$tdStyle}>{$line.participant_count}</td> {/if}
             </tr>
            {/foreach}
            {if $individual}
              <tr {$participantTotal}>
                <td colspan=3>{ts}Participant Total{/ts}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=1>{$individual.$priceset.totalTaxAmt|crmMoney}</td>
                <td  colspan=2>{$individual.$priceset.totalAmtWithTax|crmMoney}</td>
              </tr>
            {/if}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts} Amount Before Tax: {/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {foreach from=$dataArray item=value key=priceset}
         <tr>
          {if $priceset || $priceset == 0}
           <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {else}
           <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
           <td>&nbsp;{$value|crmMoney:$currency}</td>
          {/if}
         </tr>
        {/foreach}
       {/if}
      {/if}

      {if $amounts && !$lineItem}
       {foreach from=$amounts item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney:$currency} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}

    {if $totalTaxAmount}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if $isPrimary}
       <tr>
        <td {$labelStyle}>
         {ts}Total Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}
        </td>
       </tr>
       {if $pricesetFieldsCount }
     <tr>
       <td {$labelStyle}>
      {ts}Total Participants{/ts}</td>
      <td {$valueStyle}>
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
      {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
      {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}
     {$count}
     </td> </tr>
      {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if $financialTypeName}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if $trxn_id}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if $paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if $checkNumber}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}


{if $customPre}
{foreach from=$customPre item=customPr key=i}
   <tr> <th {$headerStyle}>{$customPre_grouptitle.$i}</th></tr>
   {foreach from=$customPr item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
   {/if}
   {/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
   <tr> <th {$headerStyle}>{$customPost_grouptitle.$j}</th></tr>
   {foreach from=$customPos item=customValue key=customName}
   {if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
     <tr>
         <td {$labelStyle}>{$customName}</td>
         <td {$valueStyle}>{$customValue}</td>
     </tr>
{/if}
{/foreach}
{/foreach}
{/if}

{if $customProfile}
{foreach from=$customProfile.profile item=eachParticipant key=participantID}
     <tr><th {$headerStyle}>{ts 1=$participantID+2}Participant %1{/ts} </th></tr>
     {foreach from=$eachParticipant item=eachProfile key=pid}
     <tr><th {$headerStyle}>{$customProfile.title.$pid}</th></tr>
     {foreach from=$eachProfile item=val key=field}
     <tr>{foreach from=$val item=v key=f}
         <td {$labelStyle}>{$field}</td>
         <td {$valueStyle}>{$v}</td>
         {/foreach}
     </tr>
     {/foreach}
{/foreach}
{/foreach}
{/if}

    {if $customGroup}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}
    </table>
    {if $event.allow_selfcancelxfer }
     <tr>
      <td colspan="2" {$valueStyle}>
        {ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}<br />
        {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360"  h=0 a=1 fe=1}{/capture}
        <a href="{$selfService}">{ts}Click here to transfer or cancel your registration.{/ts}</a>
      </td>
     </tr>
    {/if}
   </td>
  </tr>
 </table>
</center>

</body>
</html>
', 154, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

<?php ob_start(); ?>colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('headerStyle', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('labelStyle', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>style="padding: 4px; border-bottom: 1px solid #999;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('valueStyle', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>style="width: 180px; padding-bottom: 15px;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('tdfirstStyle', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>style="width: 100px;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('tdStyle', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>style="margin: 0.5em 0 0.5em;padding: 0.5em;background-color: #999999;font-weight: bold;color: #FAFAFA;border-radius: 2px;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('participantTotal', ob_get_contents());ob_end_clean(); ?>


<center>
 <table width="700" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
  <p>Dear Ana,</p>

    <?php if ($this->_tpl_vars['event']['confirm_email_text'] && ( ! $this->_tpl_vars['isOnWaitlist'] && ! $this->_tpl_vars['isRequireApproval'] )): ?>
     <p><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['confirm_email_text'])) ? $this->_run_mod_handler('htmlize', true, $_tmp) : smarty_modifier_htmlize($_tmp)); ?>
</p>

    <?php else: ?>
     <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Thank you for your participation.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
     <?php if ($this->_tpl_vars['participant_status']): ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['participant_status'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This letter is a confirmation that your registration has been received and your status has been updated to <strong> %1</strong>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
     <?php else: ?><?php if ($this->_tpl_vars['isOnWaitlist']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This letter is a confirmation that your registration has been received and your status has been updated to <strong>waitlisted</strong>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This letter is a confirmation that your registration has been received and your status has been updated to <strong>registered<strong>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?><?php endif; ?>.</p>

    <?php endif; ?>

    <p>
    <?php if ($this->_tpl_vars['isOnWaitlist']): ?>
     <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You have been added to the WAIT LIST for this event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
     <?php if ($this->_tpl_vars['isPrimary']): ?>
       <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If space becomes available you will receive an email with a link to a web page where you can complete your registration.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
     <?php endif; ?>
    <?php elseif ($this->_tpl_vars['isRequireApproval']): ?>
     <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your registration has been submitted.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
     <?php if ($this->_tpl_vars['isPrimary']): ?>
      <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
     <?php endif; ?>
    <?php elseif ($this->_tpl_vars['is_pay_later'] && ! $this->_tpl_vars['isAmountzero'] && ! $this->_tpl_vars['isAdditionalParticipant']): ?>
     <p><?php echo $this->_tpl_vars['pay_later_receipt']; ?>
</p>     <?php else: ?>
     <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please print this confirmation for your records.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    <?php endif; ?>

   </td>
  </tr>
  <tr>
   <td>
    <table width="700" style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse;">
     <tr>
      <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
       <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Information and Location<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </th>
     </tr>
     <tr>
      <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
       <?php echo $this->_tpl_vars['event']['event_title']; ?>
<br />
       <?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A") : smarty_modifier_date_format($_tmp, "%A")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php if ($this->_tpl_vars['event']['event_end_date']): ?>-<?php if (((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d")) == ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d"))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, 0, 1) : smarty_modifier_crmDate($_tmp, 0, 1)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A") : smarty_modifier_date_format($_tmp, "%A")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php endif; ?><?php endif; ?>
      </td>
     </tr>


     <?php if ($this->_tpl_vars['conference_sessions']): ?>
      <tr>
       <td colspan="2" <?php echo $this->_tpl_vars['labelStyle']; ?>
>
  <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your schedule:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </td>
      </tr>
      <tr>
       <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
  <?php $this->assign('group_by_day', 'NA'); ?>
  <?php $_from = $this->_tpl_vars['conference_sessions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['session']):
?>
   <?php if (((is_array($_tmp=$this->_tpl_vars['session']['start_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d") : smarty_modifier_date_format($_tmp, "%Y/%m/%d")) != ((is_array($_tmp=$this->_tpl_vars['group_by_day'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d") : smarty_modifier_date_format($_tmp, "%Y/%m/%d"))): ?>
    <?php $this->assign('group_by_day', $this->_tpl_vars['session']['start_date']); ?>
          <em><?php echo ((is_array($_tmp=$this->_tpl_vars['group_by_day'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>
</em><br />
   <?php endif; ?>
   <?php echo ((is_array($_tmp=$this->_tpl_vars['session']['start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, 0, 1) : smarty_modifier_crmDate($_tmp, 0, 1)); ?>
<?php if ($this->_tpl_vars['session']['end_date']): ?>-<?php echo ((is_array($_tmp=$this->_tpl_vars['session']['end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, 0, 1) : smarty_modifier_crmDate($_tmp, 0, 1)); ?>
<?php endif; ?> <?php echo $this->_tpl_vars['session']['title']; ?>
<br />
   <?php if ($this->_tpl_vars['session']['location']): ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['session']['location']; ?>
<br /><?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
       </td>
      </tr>
     <?php endif; ?>

     <?php if ($this->_tpl_vars['event']['participant_role'] != 'Attendee' && $this->_tpl_vars['defaultRole']): ?>
      <tr>
       <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant Role<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </td>
       <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
        <?php echo $this->_tpl_vars['event']['participant_role']; ?>

       </td>
      </tr>
     <?php endif; ?>

     <?php if ($this->_tpl_vars['isShowLocation']): ?>
      <tr>
       <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['location']['address']['1']['display'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

       </td>
      </tr>
     <?php endif; ?>

     <?php if ($this->_tpl_vars['location']['phone']['1']['phone'] || $this->_tpl_vars['location']['email']['1']['email']): ?>
      <tr>
       <td colspan="2" <?php echo $this->_tpl_vars['labelStyle']; ?>
>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Contacts:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </td>
      </tr>
      <?php $_from = $this->_tpl_vars['location']['phone']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['phone']):
?>
       <?php if ($this->_tpl_vars['phone']['phone']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php if ($this->_tpl_vars['phone']['phone_type']): ?>
           <?php echo $this->_tpl_vars['phone']['phone_type_display']; ?>

          <?php else: ?>
           <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Phone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php endif; ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['phone']['phone']; ?>
 <?php if ($this->_tpl_vars['phone']['phone_ext']): ?>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>ext.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['phone']['phone_ext']; ?>
<?php endif; ?>
         </td>
        </tr>
       <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
      <?php $_from = $this->_tpl_vars['location']['email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['eventEmail']):
?>
       <?php if ($this->_tpl_vars['eventEmail']['email']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['eventEmail']['email']; ?>

         </td>
        </tr>
       <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
     <?php endif; ?>

     <?php if ($this->_tpl_vars['event']['is_public']): ?>
      <tr>
       <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
        <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/ical','q' => "reset=1&id=".($this->_tpl_vars['event']['id']),'h' => 0,'a' => 1,'fe' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('icalFeed', ob_get_contents());ob_end_clean(); ?>
        <a href="<?php echo $this->_tpl_vars['icalFeed']; ?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Download iCalendar File<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
       </td>
      </tr>
     <?php endif; ?>

    <?php if ($this->_tpl_vars['event']['is_share']): ?>
        <tr>
            <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
                <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/info','q' => "id=".($this->_tpl_vars['event']['id'])."&reset=1",'a' => true,'fe' => 1,'h' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('eventUrl', ob_get_contents());ob_end_clean(); ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/SocialNetwork.tpl", 'smarty_include_vars' => array('emailMode' => true,'url' => $this->_tpl_vars['eventUrl'],'title' => $this->_tpl_vars['event']['title'],'pageURL' => $this->_tpl_vars['eventUrl'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
        </tr>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['payer']['name']): ?>
     <tr>
       <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
         <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You were registered by:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </th>
     </tr>
     <tr>
       <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
        <?php echo $this->_tpl_vars['payer']['name']; ?>

       </td>
     </tr>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['event']['is_monetary']): ?>

      <tr>
       <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
        <?php echo $this->_tpl_vars['event']['fee_label']; ?>

       </th>
      </tr>

      <?php if ($this->_tpl_vars['lineItem']): ?>
       <?php $_from = $this->_tpl_vars['lineItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>
        <?php if ($this->_tpl_vars['value'] != 'skip'): ?>
         <?php if ($this->_tpl_vars['isPrimary']): ?>
          <?php if (count($this->_tpl_vars['lineItem']) > 1): ?>            <tr>
            <td colspan="2" <?php echo $this->_tpl_vars['labelStyle']; ?>
>
             <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['priceset']+1)); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['part'][$this->_tpl_vars['priceset']]['info']; ?>

            </td>
           </tr>
          <?php endif; ?>
         <?php endif; ?>
         <tr>
          <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
           <table>             <tr>
             <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Item<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
             <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Qty<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
             <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Each<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
             <?php if ($this->_tpl_vars['dataArray']): ?>
              <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SubTotal<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
              <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Rate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
              <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
             <?php endif; ?>
             <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
       <?php if ($this->_tpl_vars['pricesetFieldsCount']): ?><th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><?php endif; ?>
            </tr>
            <?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['line']):
?>
             <tr>
              <td <?php echo $this->_tpl_vars['tdfirstStyle']; ?>
>
              <?php if ($this->_tpl_vars['line']['html_type'] == 'Text'): ?><?php echo $this->_tpl_vars['line']['label']; ?>
<?php else: ?><?php echo $this->_tpl_vars['line']['field_title']; ?>
 - <?php echo $this->_tpl_vars['line']['label']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['line']['description']): ?><div><?php echo ((is_array($_tmp=$this->_tpl_vars['line']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...") : smarty_modifier_truncate($_tmp, 30, "...")); ?>
</div><?php endif; ?>
              </td>
              <td <?php echo $this->_tpl_vars['tdStyle']; ?>
 align="middle">
               <?php echo $this->_tpl_vars['line']['qty']; ?>

              </td>
              <td <?php echo $this->_tpl_vars['tdStyle']; ?>
>
               <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['unit_price'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

              </td>
              <?php if ($this->_tpl_vars['dataArray']): ?>
               <td <?php echo $this->_tpl_vars['tdStyle']; ?>
>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['unit_price']*$this->_tpl_vars['line']['qty'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

               </td>
               <?php if ($this->_tpl_vars['line']['tax_rate'] != "" || $this->_tpl_vars['line']['tax_amount'] != ""): ?>
                <td <?php echo $this->_tpl_vars['tdStyle']; ?>
>
                 <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['tax_rate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
%
                </td>
                <td <?php echo $this->_tpl_vars['tdStyle']; ?>
>
                 <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

                </td>
               <?php else: ?>
                <td></td>
                <td></td>
               <?php endif; ?>
              <?php endif; ?>
              <td <?php echo $this->_tpl_vars['tdStyle']; ?>
>
               <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['line_total']+$this->_tpl_vars['line']['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

              </td>
        <?php if ($this->_tpl_vars['pricesetFieldsCount']): ?><td <?php echo $this->_tpl_vars['tdStyle']; ?>
><?php echo $this->_tpl_vars['line']['participant_count']; ?>
</td> <?php endif; ?>
             </tr>
            <?php endforeach; endif; unset($_from); ?>
            <?php if ($this->_tpl_vars['individual']): ?>
              <tr <?php echo $this->_tpl_vars['participantTotal']; ?>
>
                <td colspan=3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                <td  colspan=2><?php echo ((is_array($_tmp=$this->_tpl_vars['individual'][$this->_tpl_vars['priceset']]['totalAmtWithTax']-$this->_tpl_vars['individual'][$this->_tpl_vars['priceset']]['totalTaxAmt'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</td>
                <td  colspan=1><?php echo ((is_array($_tmp=$this->_tpl_vars['individual'][$this->_tpl_vars['priceset']]['totalTaxAmt'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</td>
                <td  colspan=2><?php echo ((is_array($_tmp=$this->_tpl_vars['individual'][$this->_tpl_vars['priceset']]['totalAmtWithTax'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</td>
              </tr>
            <?php endif; ?>
           </table>
          </td>
         </tr>
        <?php endif; ?>
       <?php endforeach; endif; unset($_from); ?>
       <?php if ($this->_tpl_vars['dataArray']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> Amount Before Tax: <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['totalAmount']-$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

         </td>
        </tr>
        <?php $_from = $this->_tpl_vars['dataArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>
         <tr>
          <?php if ($this->_tpl_vars['priceset'] || $this->_tpl_vars['priceset'] == 0): ?>
           <td>&nbsp;<?php echo $this->_tpl_vars['taxTerm']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['priceset'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
%</td>
           <td>&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</td>
          <?php else: ?>
           <td>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['taxTerm']; ?>
</td>
           <td>&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</td>
          <?php endif; ?>
         </tr>
        <?php endforeach; endif; unset($_from); ?>
       <?php endif; ?>
      <?php endif; ?>

      <?php if ($this->_tpl_vars['amounts'] && ! $this->_tpl_vars['lineItem']): ?>
       <?php $_from = $this->_tpl_vars['amounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['level'] => $this->_tpl_vars['amnt']):
?>
        <tr>
         <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['amnt']['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
 <?php echo $this->_tpl_vars['amnt']['label']; ?>

         </td>
        </tr>
       <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>

    <?php if ($this->_tpl_vars['totalTaxAmount']): ?>
       <tr>
        <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
         <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </td>
        <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
         <?php echo ((is_array($_tmp=$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

        </td>
       </tr>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['isPrimary']): ?>
       <tr>
        <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
         <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </td>
        <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
         <?php echo ((is_array($_tmp=$this->_tpl_vars['totalAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
 <?php if ($this->_tpl_vars['hookDiscount']['message']): ?>(<?php echo $this->_tpl_vars['hookDiscount']['message']; ?>
)<?php endif; ?>
        </td>
       </tr>
       <?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>
     <tr>
       <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
      <?php $this->assign('count', 0); ?>
      <?php $_from = $this->_tpl_vars['lineItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pcount']):
?>
      <?php $this->assign('lineItemCount', 0); ?>
      <?php if ($this->_tpl_vars['pcount'] != 'skip'): ?>
        <?php $_from = $this->_tpl_vars['pcount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p_count']):
?>
        <?php $this->assign('lineItemCount', $this->_tpl_vars['lineItemCount']+$this->_tpl_vars['p_count']['participant_count']); ?>
        <?php endforeach; endif; unset($_from); ?>
      <?php if ($this->_tpl_vars['lineItemCount'] < 1): ?>
        <?php $this->assign('lineItemCount', 1); ?>
      <?php endif; ?>
      <?php $this->assign('count', $this->_tpl_vars['count']+$this->_tpl_vars['lineItemCount']); ?>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
     <?php echo $this->_tpl_vars['count']; ?>

     </td> </tr>
      <?php endif; ?>

       <?php if ($this->_tpl_vars['register_date']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registration Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['register_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if ($this->_tpl_vars['receive_date']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['receive_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if ($this->_tpl_vars['financialTypeName']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Financial Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['financialTypeName']; ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if ($this->_tpl_vars['trxn_id']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction #<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['trxn_id']; ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if ($this->_tpl_vars['paidBy']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Paid By<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
         <?php echo $this->_tpl_vars['paidBy']; ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if ($this->_tpl_vars['checkNumber']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check Number<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['checkNumber']; ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if ($this->_tpl_vars['contributeMode'] != 'notify' && ! $this->_tpl_vars['isAmountzero'] && ( ! $this->_tpl_vars['is_pay_later'] || $this->_tpl_vars['isBillingAddressRequiredForPayLater'] ) && ! $this->_tpl_vars['isOnWaitlist'] && ! $this->_tpl_vars['isRequireApproval']): ?>
        <tr>
         <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billing Name and Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </th>
        </tr>
        <tr>
         <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['billingName']; ?>
<br />
          <?php echo ((is_array($_tmp=$this->_tpl_vars['address'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if ($this->_tpl_vars['contributeMode'] == 'direct' && ! $this->_tpl_vars['isAmountzero'] && ! $this->_tpl_vars['is_pay_later'] && ! $this->_tpl_vars['isOnWaitlist'] && ! $this->_tpl_vars['isRequireApproval']): ?>
        <tr>
         <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Credit Card Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </th>
        </tr>
        <tr>
         <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['credit_card_type']; ?>
<br />
          <?php echo $this->_tpl_vars['credit_card_number']; ?>
<br />
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expires<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['credit_card_exp_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 7, '') : smarty_modifier_truncate($_tmp, 7, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

         </td>
        </tr>
       <?php endif; ?>

      <?php endif; ?>

     <?php endif; ?> 

<?php if ($this->_tpl_vars['customPre']): ?>
<?php $_from = $this->_tpl_vars['customPre']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['customPr']):
?>
   <tr> <th <?php echo $this->_tpl_vars['headerStyle']; ?>
><?php echo $this->_tpl_vars['customPre_grouptitle'][$this->_tpl_vars['i']]; ?>
</th></tr>
   <?php $_from = $this->_tpl_vars['customPr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['customValue']):
?>
   <?php if (( $this->_tpl_vars['trackingFields'] && ! in_array ( $this->_tpl_vars['customName'] , $this->_tpl_vars['trackingFields'] ) ) || ! $this->_tpl_vars['trackingFields']): ?>
     <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
><?php echo $this->_tpl_vars['customName']; ?>
</td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
><?php echo $this->_tpl_vars['customValue']; ?>
</td>
     </tr>
   <?php endif; ?>
   <?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['customPost']): ?>
<?php $_from = $this->_tpl_vars['customPost']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['customPos']):
?>
   <tr> <th <?php echo $this->_tpl_vars['headerStyle']; ?>
><?php echo $this->_tpl_vars['customPost_grouptitle'][$this->_tpl_vars['j']]; ?>
</th></tr>
   <?php $_from = $this->_tpl_vars['customPos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['customValue']):
?>
   <?php if (( $this->_tpl_vars['trackingFields'] && ! in_array ( $this->_tpl_vars['customName'] , $this->_tpl_vars['trackingFields'] ) ) || ! $this->_tpl_vars['trackingFields']): ?>
     <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
><?php echo $this->_tpl_vars['customName']; ?>
</td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
><?php echo $this->_tpl_vars['customValue']; ?>
</td>
     </tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['customProfile']): ?>
<?php $_from = $this->_tpl_vars['customProfile']['profile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['participantID'] => $this->_tpl_vars['eachParticipant']):
?>
     <tr><th <?php echo $this->_tpl_vars['headerStyle']; ?>
><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['participantID']+2)); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> </th></tr>
     <?php $_from = $this->_tpl_vars['eachParticipant']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pid'] => $this->_tpl_vars['eachProfile']):
?>
     <tr><th <?php echo $this->_tpl_vars['headerStyle']; ?>
><?php echo $this->_tpl_vars['customProfile']['title'][$this->_tpl_vars['pid']]; ?>
</th></tr>
     <?php $_from = $this->_tpl_vars['eachProfile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['val']):
?>
     <tr><?php $_from = $this->_tpl_vars['val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['f'] => $this->_tpl_vars['v']):
?>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
><?php echo $this->_tpl_vars['field']; ?>
</td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
><?php echo $this->_tpl_vars['v']; ?>
</td>
         <?php endforeach; endif; unset($_from); ?>
     </tr>
     <?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

    <?php if ($this->_tpl_vars['customGroup']): ?>
      <?php $_from = $this->_tpl_vars['customGroup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['value']):
?>
       <tr>
        <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
         <?php echo $this->_tpl_vars['customName']; ?>

        </th>
       </tr>
       <?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n'] => $this->_tpl_vars['v']):
?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php echo $this->_tpl_vars['n']; ?>

         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['v']; ?>

         </td>
        </tr>
       <?php endforeach; endif; unset($_from); ?>
      <?php endforeach; endif; unset($_from); ?>
     <?php endif; ?>
    </table>
    <?php if ($this->_tpl_vars['event']['allow_selfcancelxfer']): ?>
     <tr>
      <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['event']['selfcancelxfer_time'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php if ($this->_tpl_vars['totalAmount']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancellations are not refundable.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?><br />
        <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/selfsvcupdate','q' => "reset=1&pid=".($this->_tpl_vars['participant']['id'])."&cs=989c64d3b0d9bba1882cf987c6ed4eed_1498083656_360",'h' => 0,'a' => 1,'fe' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('selfService', ob_get_contents());ob_end_clean(); ?>
        <a href="<?php echo $this->_tpl_vars['selfService']; ?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click here to transfer or cancel your registration.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
      </td>
     </tr>
    <?php endif; ?>
   </td>
  </tr>
 </table>
</center>

</body>
</html>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>