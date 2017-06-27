<?php /* Smarty version 2.6.27, created on 2017-06-23 00:03:48
         compiled from string:Dear+Tanya%2C%0A%0A%7Bif+%24event.confirm_email_text+AND+%28not+%24isOnWaitlist+AND+not+%24isRequireApproval%29%7D%0A%7B%24event.confirm_email_text%7D%0A%0A%7Belse%7D%0A++%7Bts%7DThank+you+for+your+participation.%7B/ts%7D%0A++%7Bif+%24participant_status%7D%7Bts+1%3D%24participant_status%7DThis+letter+is+a+confirmation+that+your+registration+has+been+received+and+your+status+has+been+updated+to+%251.%7B/ts%7D%0A++%7Belse%7D%7Bif+%24isOnWaitlist%7D%7Bts%7DThis+letter+is+a+confirmation+that+your+registration+has+been+received+and+your+status+has+been+updated+to+waitlisted.%7B/ts%7D%7Belse%7D%7Bts%7DThis+letter+is+a+confirmation+that+your+registration+has+been+received+and+your+status+has+been+updated+to+registered.%7B/ts%7D%7B/if%7D%0A++%7B/if%7D.%0A%0A%7B/if%7D%0A%0A%7Bif+%24isOnWaitlist%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bts%7DYou+have+been+added+to+the+WAIT+LIST+for+this+event.%7B/ts%7D%0A%0A%7Bif+%24isPrimary%7D%0A%7Bts%7DIf+space+becomes+available+you+will+receive+an+email+with+a+link+to+a+web+page+where+you+can+complete+your+registration.%7B/ts%7D%0A%7B/if%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Belseif+%24isRequireApproval%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bts%7DYour+registration+has+been+submitted.%7B/ts%7D%0A%0A%7Bif+%24isPrimary%7D%0A%7Bts%7DOnce+your+registration+has+been+reviewed%2C+you+will+receive+an+email+with+a+link+to+a+web+page+where+you+can+complete+the+registration+process.%7B/ts%7D%0A%0A%7B/if%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Belseif+%24is_pay_later+%26%26+%21%24isAmountzero+%26%26+%21%24isAdditionalParticipant%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24pay_later_receipt%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Belse%7D%0A%0A%7Bts%7DPlease+print+this+confirmation+for+your+records.%7B/ts%7D%0A%7B/if%7D%0A%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bts%7DEvent+Information+and+Location%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24event.event_title%7D%0A%7B%24event.event_start_date%7Cdate_format:%22%25A%22%7D+%7B%24event.event_start_date%7CcrmDate%7D%7Bif+%24event.event_end_date%7D-%7Bif+%24event.event_end_date%7Cdate_format:%22%25Y%25m%25d%22+%3D%3D+%24event.event_start_date%7Cdate_format:%22%25Y%25m%25d%22%7D%7B%24event.event_end_date%7CcrmDate:0:1%7D%7Belse%7D%7B%24event.event_end_date%7Cdate_format:%22%25A%22%7D+%7B%24event.event_end_date%7CcrmDate%7D%7B/if%7D%7B/if%7D%0A%7Bif+%24conference_sessions%7D%0A%0A%0A%7Bts%7DYour+schedule:%7B/ts%7D%0A%7Bassign+var%3D%27group_by_day%27+value%3D%27NA%27%7D%0A%7Bforeach+from%3D%24conference_sessions+item%3Dsession%7D%0A%7Bif+%24session.start_date%7Cdate_format:%22%25Y/%25m/%25d%22+%21%3D+%24group_by_day%7Cdate_format:%22%25Y/%25m/%25d%22%7D%0A%7Bassign+var%3D%27group_by_day%27+value%3D%24session.start_date%7D%0A%0A%7B%24group_by_day%7Cdate_format:%22%25m/%25d/%25Y%22%7D%0A%0A%0A%7B/if%7D%0A%7B%24session.start_date%7CcrmDate:0:1%7D%7Bif+%24session.end_date%7D-%7B%24session.end_date%7CcrmDate:0:1%7D%7B/if%7D+%7B%24session.title%7D%0A%7Bif+%24session.location%7D++++%7B%24session.location%7D%7B/if%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%0A%7Bif+%24event.participant_role+neq+%27Attendee%27+and+%24defaultRole%7D%0A%7Bts%7DParticipant+Role%7B/ts%7D:+%7B%24event.participant_role%7D%0A%7B/if%7D%0A%0A%7Bif+%24isShowLocation%7D%0A%7B%24location.address.1.display%7Cstrip_tags:false%7D%0A%7B/if%7D%7B%2AEnd+of+isShowLocation+condition%2A%7D%0A%0A%7Bif+%24location.phone.1.phone+%7C%7C+%24location.email.1.email%7D%0A%0A%7Bts%7DEvent+Contacts:%7B/ts%7D%0A%7Bforeach+from%3D%24location.phone+item%3Dphone%7D%0A%7Bif+%24phone.phone%7D%0A%0A%7Bif+%24phone.phone_type%7D%7B%24phone.phone_type_display%7D%7Belse%7D%7Bts%7DPhone%7B/ts%7D%7B/if%7D:+%7B%24phone.phone%7D%7B/if%7D+%7Bif+%24phone.phone_ext%7D+%7Bts%7Dext.%7B/ts%7D+%7B%24phone.phone_ext%7D%7B/if%7D%0A%7B/foreach%7D%0A%7Bforeach+from%3D%24location.email+item%3DeventEmail%7D%0A%7Bif+%24eventEmail.email%7D%0A%0A%7Bts%7DEmail%7B/ts%7D:+%7B%24eventEmail.email%7D%7B/if%7D%7B/foreach%7D%0A%7B/if%7D%0A%0A%7Bif+%24event.is_public%7D%0A%7Bcapture+assign%3DicalFeed%7D%7BcrmURL+p%3D%27civicrm/event/ical%27+q%3D%22reset%3D1%26id%3D%60%24event.id%60%22+h%3D0+a%3D1+fe%3D1%7D%7B/capture%7D%0A%7Bts%7DDownload+iCalendar+File:%7B/ts%7D+%7B%24icalFeed%7D%0A%7B/if%7D%0A%0A%7Bif+%24payer.name%7D%0AYou+were+registered+by:+%7B%24payer.name%7D%0A%7B/if%7D%0A%7Bif+%24event.is_monetary%7D+%7B%2A+This+section+for+Paid+events+only.%2A%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24event.fee_label%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bif+%24lineItem%7D%7Bforeach+from%3D%24lineItem+item%3Dvalue+key%3Dpriceset%7D%0A%0A%7Bif+%24value+neq+%27skip%27%7D%0A%7Bif+%24isPrimary%7D%0A%7Bif+%24lineItem%7C%40count+GT+1%7D+%7B%2A+Header+for+multi+participant+registration+cases.+%2A%7D%0A%7Bts+1%3D%24priceset%2B1%7DParticipant+%251%7B/ts%7D+%7B%24part.%24priceset.info%7D%0A%0A%7B/if%7D%0A%7B/if%7D%0A%7Bcapture+assign%3Dts_item%7D%7Bts%7DItem%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_qty%7D%7Bts%7DQty%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_each%7D%7Bts%7DEach%7B/ts%7D%7B/capture%7D%0A%7Bif+%24dataArray%7D%0A%7Bcapture+assign%3Dts_subtotal%7D%7Bts%7DSubtotal%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_taxRate%7D%7Bts%7DTax+Rate%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_taxAmount%7D%7Bts%7DTax+Amount%7B/ts%7D%7B/capture%7D%0A%7B/if%7D%0A%7Bcapture+assign%3Dts_total%7D%7Bts%7DTotal%7B/ts%7D%7B/capture%7D%0A%7Bif+%24pricesetFieldsCount+%7D%7Bcapture+assign%3Dts_participant_total%7D%7Bts%7DTotal+Participants%7B/ts%7D%7B/capture%7D%7B/if%7D%0A%7B%24ts_item%7Cstring_format:%22%25-30s%22%7D+%7B%24ts_qty%7Cstring_format:%22%255s%22%7D+%7B%24ts_each%7Cstring_format:%22%2510s%22%7D+%7Bif+%24dataArray%7D+%7B%24ts_subtotal%7Cstring_format:%22%2510s%22%7D+%7B%24ts_taxRate%7Cstring_format:%22%2510s%22%7D+%7B%24ts_taxAmount%7Cstring_format:%22%2510s%22%7D+%7B/if%7D+%7B%24ts_total%7Cstring_format:%22%2510s%22%7D+%7B%24ts_participant_total%7Cstring_format:%22%2510s%22%7D%0A%7Bforeach+from%3D%24value+item%3Dline%7D%0A%7Bif+%24pricesetFieldsCount+%7D%7Bcapture+assign%3Dts_participant_count%7D%7B%24line.participant_count%7D%7B/capture%7D%7B/if%7D%0A%7Bcapture+assign%3Dts_item%7D%7Bif+%24line.html_type+eq+%27Text%27%7D%7B%24line.label%7D%7Belse%7D%7B%24line.field_title%7D+-+%7B%24line.label%7D%7B/if%7D+%7Bif+%24line.description%7D+%7B%24line.description%7D%7B/if%7D%7B/capture%7D%7B%24ts_item%7Ctruncate:30:%22...%22%7Cstring_format:%22%25-30s%22%7D+%7B%24line.qty%7Cstring_format:%22%255s%22%7D+%7B%24line.unit_price%7CcrmMoney:%24currency%7Cstring_format:%22%2510s%22%7D+%7Bif+%24dataArray%7D+%7B%24line.unit_price%2A%24line.qty%7CcrmMoney:%24currency%7Cstring_format:%22%2510s%22%7D+%7Bif+%24line.tax_rate+%21%3D+%22%22+%7C%7C+%24line.tax_amount+%21%3D+%22%22%7D++%7B%24line.tax_rate%7Cstring_format:%22%25.2f%22%7D+%25++%7B%24line.tax_amount%7CcrmMoney:%24currency%7Cstring_format:%22%2510s%22%7D+%7Belse%7D++++++++++++++++++%7B/if%7D++%7B/if%7D+%7B%24line.line_total%2B%24line.tax_amount%7CcrmMoney:%24currency%7Cstring_format:%22%2510s%22%7D%7B%24ts_participant_count%7Cstring_format:%22%2510s%22%7D%0A%7B/foreach%7D%0A%7Bif+%24individual%7D%7Bts%7DParticipant+Total%7B/ts%7D+%7B%24individual.%24priceset.totalAmtWithTax-%24individual.%24priceset.totalTaxAmt%7CcrmMoney:%24currency%7Cstring_format:%22%2529s%22%7D+%7B%24individual.%24priceset.totalTaxAmt%7CcrmMoney:%24currency%7Cstring_format:%22%2533s%22%7D+%7B%24individual.%24priceset.totalAmtWithTax%7CcrmMoney:%24currency%7Cstring_format:%22%2512s%22%7D%7B/if%7D%0A%7B/if%7D%0A%7B%22%22%7Cstring_format:%22%25120s%22%7D%0A%7B/foreach%7D%0A%7B%22%22%7Cstring_format:%22%25120s%22%7D%0A%0A%7Bif+%24dataArray%7D%0A%7Bts%7DAmount+before+Tax%7B/ts%7D:+%7B%24totalAmount-%24totalTaxAmount%7CcrmMoney:%24currency%7D%0A%0A%7Bforeach+from%3D%24dataArray+item%3Dvalue+key%3Dpriceset%7D%0A%7Bif+%24priceset+%7C%7C+%24priceset+%3D%3D+0%7D%0A%7B%24taxTerm%7D+%7B%24priceset%7Cstring_format:%22%25.2f%22%7D%25:+%7B%24value%7CcrmMoney:%24currency%7D%0A%7Belse%7D%0A%7Bts%7DNo%7B/ts%7D+%7B%24taxTerm%7D:+%7B%24value%7CcrmMoney:%24currency%7D%0A%7B/if%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%7B/if%7D%0A%0A%7Bif+%24amounts+%26%26+%21%24lineItem%7D%0A%7Bforeach+from%3D%24amounts+item%3Damnt+key%3Dlevel%7D%7B%24amnt.amount%7CcrmMoney:%24currency%7D+%7B%24amnt.label%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%0A%7Bif+%24totalTaxAmount%7D%0A%7Bts%7DTotal+Tax+Amount%7B/ts%7D:+%7B%24totalTaxAmount%7CcrmMoney:%24currency%7D%0A%7B/if%7D%0A%7Bif+%24isPrimary+%7D%0A%0A%7Bts%7DTotal+Amount%7B/ts%7D:+%7B%24totalAmount%7CcrmMoney:%24currency%7D+%7Bif+%24hookDiscount.message%7D%28%7B%24hookDiscount.message%7D%29%7B/if%7D%0A%0A%7Bif+%24pricesetFieldsCount+%7D%0A++++++%7Bassign+var%3D%22count%22+value%3D+0%7D%0A++++++%7Bforeach+from%3D%24lineItem+item%3Dpcount%7D%0A++++++%7Bassign+var%3D%22lineItemCount%22+value%3D0%7D%0A++++++%7Bif+%24pcount+neq+%27skip%27%7D%0A++++++++%7Bforeach+from%3D%24pcount+item%3Dp_count%7D%0A++++++++%7Bassign+var%3D%22lineItemCount%22+value%3D%24lineItemCount%2B%24p_count.participant_count%7D%0A++++++++%7B/foreach%7D%0A++++++%7Bif+%24lineItemCount+%3C+1+%7D%0A++++++++%7Bassign+var%3D%22lineItemCount%22+value%3D1%7D%0A++++++%7B/if%7D%0A++++++%7Bassign+var%3D%22count%22+value%3D%24count%2B%24lineItemCount%7D%0A++++++%7B/if%7D%0A++++++%7B/foreach%7D%0A%0A%7Bts%7DTotal+Participants%7B/ts%7D:+%7B%24count%7D%0A%7B/if%7D%0A%0A%7Bif+%24register_date%7D%0A%7Bts%7DRegistration+Date%7B/ts%7D:+%7B%24register_date%7CcrmDate%7D%0A%7B/if%7D%0A%7Bif+%24receive_date%7D%0A%7Bts%7DTransaction+Date%7B/ts%7D:+%7B%24receive_date%7CcrmDate%7D%0A%7B/if%7D%0A%7Bif+%24financialTypeName%7D%0A%7Bts%7DFinancial+Type%7B/ts%7D:+%7B%24financialTypeName%7D%0A%7B/if%7D%0A%7Bif+%24trxn_id%7D%0A%7Bts%7DTransaction+%23%7B/ts%7D:+%7B%24trxn_id%7D%0A%7B/if%7D%0A%7Bif+%24paidBy%7D%0A%7Bts%7DPaid+By%7B/ts%7D:+%7B%24paidBy%7D%0A%7B/if%7D%0A%7Bif+%24checkNumber%7D%0A%7Bts%7DCheck+Number%7B/ts%7D:+%7B%24checkNumber%7D%0A%7B/if%7D%0A%7Bif+%24contributeMode+ne+%27notify%27+and+%21%24isAmountzero+and+%28%21%24is_pay_later+or+%24isBillingAddressRequiredForPayLater%29+and+%21%24isOnWaitlist+and+%21%24isRequireApproval%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bts%7DBilling+Name+and+Address%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24billingName%7D%0A%7B%24address%7D%0A%7B/if%7D%0A%0A%7Bif+%24contributeMode+eq+%27direct%27+and+%21%24isAmountzero+and+%21%24is_pay_later+and+%21%24isOnWaitlist+and+%21%24isRequireApproval%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bts%7DCredit+Card+Information%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24credit_card_type%7D%0A%7B%24credit_card_number%7D%0A%7Bts%7DExpires%7B/ts%7D:+%7B%24credit_card_exp_date%7Ctruncate:7:%27%27%7CcrmDate%7D%0A%7B/if%7D%0A%7B/if%7D%0A%7B/if%7D+%7B%2A+End+of+conditional+section+for+Paid+events+%2A%7D%0A%0A%7Bif+%24customPre%7D%0A%7Bforeach+from%3D%24customPre+item%3DcustomPr+key%3Di%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24customPre_grouptitle.%24i%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bforeach+from%3D%24customPr+item%3DcustomValue+key%3DcustomName%7D%0A%7Bif+%28+%24trackingFields+and+%21+in_array%28+%24customName%2C+%24trackingFields+%29+%29+or+%21+%24trackingFields%7D%0A+%7B%24customName%7D:+%7B%24customValue%7D%0A%7B/if%7D%0A%7B/foreach%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%0A%7Bif+%24customPost%7D%0A%7Bforeach+from%3D%24customPost+item%3DcustomPos+key%3Dj%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24customPost_grouptitle.%24j%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bforeach+from%3D%24customPos+item%3DcustomValue+key%3DcustomName%7D%0A%7Bif+%28+%24trackingFields+and+%21+in_array%28+%24customName%2C+%24trackingFields+%29+%29+or+%21+%24trackingFields%7D%0A+%7B%24customName%7D:+%7B%24customValue%7D%0A%7B/if%7D%0A%7B/foreach%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%7Bif+%24customProfile%7D%0A%0A%7Bforeach+from%3D%24customProfile.profile+item%3DeachParticipant+key%3DparticipantID%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bts+1%3D%24participantID%2B2%7DParticipant+Information+-+Participant+%251%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bforeach+from%3D%24eachParticipant+item%3DeachProfile+key%3Dpid%7D%0A%7B%24customProfile.title.%24pid%7D%0A%7Bforeach+from%3D%24eachProfile+item%3Dval+key%3Dfield%7D%0A%7Bforeach+from%3D%24val+item%3Dv+key%3Df%7D%0A%7B%24field%7D:+%7B%24v%7D%0A%7B/foreach%7D%0A%7B/foreach%7D%0A%7B/foreach%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%7Bif+%24customGroup%7D%0A%7Bforeach+from%3D%24customGroup+item%3Dvalue+key%3DcustomName%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24customName%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%24pricesetFieldsCount+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bforeach+from%3D%24value+item%3Dv+key%3Dn%7D%0A%7B%24n%7D:+%7B%24v%7D%0A%7B/foreach%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%0A%7Bif+%24event.allow_selfcancelxfer+%7D%0A%7Bts+1%3D%24event.selfcancelxfer_time%7DYou+may+transfer+your+registration+to+another+participant+or+cancel+your+registration+up+to+%251+hours+before+the+event.%7B/ts%7D+%7Bif+%24totalAmount%7D%7Bts%7DCancellations+are+not+refundable.%7B/ts%7D%7B/if%7D%0A+++%7Bcapture+assign%3DselfService%7D%7BcrmURL+p%3D%27civicrm/event/selfsvcupdate%27+q%3D%22reset%3D1%26pid%3D%60%24participant.id%60%26cs%3Dd7ab341ba02f6f533640a872b9465209_1498147425_360%22++h%3D0+a%3D1+fe%3D1%7D%7B/capture%7D%0A%7Bts%7DTransfer+or+cancel+your+registration:%7B/ts%7D+%7B%24selfService%7D%0A%7B/if%7D%0A */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:Dear Tanya,

{if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
{$event.confirm_email_text}

{else}
  {ts}Thank you for your participation.{/ts}
  {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to %1.{/ts}
  {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to waitlisted.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to registered.{/ts}{/if}
  {/if}.

{/if}

{if $isOnWaitlist}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if $isPrimary}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}
{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if $isPrimary}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$pay_later_receipt}
==========================================================={if $pricesetFieldsCount }===================={/if}

{else}

{ts}Please print this confirmation for your records.{/ts}
{/if}


==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.event_title}
{$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
{if $conference_sessions}


{ts}Your schedule:{/ts}
{assign var=\'group_by_day\' value=\'NA\'}
{foreach from=$conference_sessions item=session}
{if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
{assign var=\'group_by_day\' value=$session.start_date}

{$group_by_day|date_format:"%m/%d/%Y"}


{/if}
{$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}
{if $session.location}    {$session.location}{/if}
{/foreach}
{/if}

{if $event.participant_role neq \'Attendee\' and $defaultRole}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if $isShowLocation}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if $location.phone.1.phone || $location.email.1.email}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if $event.is_public}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if $payer.name}
You were registered by: {$payer.name}
{/if}
{if $event.is_monetary} {* This section for Paid events only.*}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.fee_label}
==========================================================={if $pricesetFieldsCount }===================={/if}

{if $lineItem}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if $isPrimary}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}

{/if}
{/if}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{if $pricesetFieldsCount }{capture assign=ts_participant_total}{ts}Total Participants{/ts}{/capture}{/if}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {$ts_participant_total|string_format:"%10s"}
{foreach from=$value item=line}
{if $pricesetFieldsCount }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney:$currency|string_format:"%10s"} {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if} {$line.line_total+$line.tax_amount|crmMoney:$currency|string_format:"%10s"}{$ts_participant_count|string_format:"%10s"}
{/foreach}
{if $individual}{ts}Participant Total{/ts} {$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%29s"} {$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%33s"} {$individual.$priceset.totalAmtWithTax|crmMoney:$currency|string_format:"%12s"}{/if}
{/if}
{""|string_format:"%120s"}
{/foreach}
{""|string_format:"%120s"}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{$taxTerm} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if $amounts && !$lineItem}
{foreach from=$amounts item=amnt key=level}{$amnt.amount|crmMoney:$currency} {$amnt.label}
{/foreach}
{/if}

{if $totalTaxAmount}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if $isPrimary }

{ts}Total Amount{/ts}: {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}

{if $pricesetFieldsCount }
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

{ts}Total Participants{/ts}: {$count}
{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if $financialTypeName}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if $trxn_id}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if $paidBy}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if $checkNumber}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}

==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$billingName}
{$address}
{/if}

{if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Credit Card Information{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if $customPre}
{foreach from=$customPre item=customPr key=i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPre_grouptitle.$i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPr item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPost_grouptitle.$j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPos item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}
{if $customProfile}

{foreach from=$customProfile.profile item=eachParticipant key=participantID}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts 1=$participantID+2}Participant Information - Participant %1{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$eachParticipant item=eachProfile key=pid}
{$customProfile.title.$pid}
{foreach from=$eachProfile item=val key=field}
{foreach from=$val item=v key=f}
{$field}: {$v}
{/foreach}
{/foreach}
{/foreach}
{/foreach}
{/if}
{if $customGroup}
{foreach from=$customGroup item=value key=customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{$customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}

{if $event.allow_selfcancelxfer }
{ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}
   {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=d7ab341ba02f6f533640a872b9465209_1498147425_360"  h=0 a=1 fe=1}{/capture}
{ts}Transfer or cancel your registration:{/ts} {$selfService}
{/if}
', 1, false),array('block', 'ts', 'string:Dear Tanya,

{if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
{$event.confirm_email_text}

{else}
  {ts}Thank you for your participation.{/ts}
  {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to %1.{/ts}
  {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to waitlisted.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to registered.{/ts}{/if}
  {/if}.

{/if}

{if $isOnWaitlist}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if $isPrimary}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}
{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if $isPrimary}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$pay_later_receipt}
==========================================================={if $pricesetFieldsCount }===================={/if}

{else}

{ts}Please print this confirmation for your records.{/ts}
{/if}


==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.event_title}
{$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
{if $conference_sessions}


{ts}Your schedule:{/ts}
{assign var=\'group_by_day\' value=\'NA\'}
{foreach from=$conference_sessions item=session}
{if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
{assign var=\'group_by_day\' value=$session.start_date}

{$group_by_day|date_format:"%m/%d/%Y"}


{/if}
{$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}
{if $session.location}    {$session.location}{/if}
{/foreach}
{/if}

{if $event.participant_role neq \'Attendee\' and $defaultRole}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if $isShowLocation}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if $location.phone.1.phone || $location.email.1.email}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if $event.is_public}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if $payer.name}
You were registered by: {$payer.name}
{/if}
{if $event.is_monetary} {* This section for Paid events only.*}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.fee_label}
==========================================================={if $pricesetFieldsCount }===================={/if}

{if $lineItem}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if $isPrimary}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}

{/if}
{/if}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{if $pricesetFieldsCount }{capture assign=ts_participant_total}{ts}Total Participants{/ts}{/capture}{/if}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {$ts_participant_total|string_format:"%10s"}
{foreach from=$value item=line}
{if $pricesetFieldsCount }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney:$currency|string_format:"%10s"} {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if} {$line.line_total+$line.tax_amount|crmMoney:$currency|string_format:"%10s"}{$ts_participant_count|string_format:"%10s"}
{/foreach}
{if $individual}{ts}Participant Total{/ts} {$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%29s"} {$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%33s"} {$individual.$priceset.totalAmtWithTax|crmMoney:$currency|string_format:"%12s"}{/if}
{/if}
{""|string_format:"%120s"}
{/foreach}
{""|string_format:"%120s"}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{$taxTerm} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if $amounts && !$lineItem}
{foreach from=$amounts item=amnt key=level}{$amnt.amount|crmMoney:$currency} {$amnt.label}
{/foreach}
{/if}

{if $totalTaxAmount}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if $isPrimary }

{ts}Total Amount{/ts}: {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}

{if $pricesetFieldsCount }
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

{ts}Total Participants{/ts}: {$count}
{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if $financialTypeName}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if $trxn_id}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if $paidBy}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if $checkNumber}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}

==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$billingName}
{$address}
{/if}

{if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Credit Card Information{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if $customPre}
{foreach from=$customPre item=customPr key=i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPre_grouptitle.$i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPr item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPost_grouptitle.$j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPos item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}
{if $customProfile}

{foreach from=$customProfile.profile item=eachParticipant key=participantID}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts 1=$participantID+2}Participant Information - Participant %1{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$eachParticipant item=eachProfile key=pid}
{$customProfile.title.$pid}
{foreach from=$eachProfile item=val key=field}
{foreach from=$val item=v key=f}
{$field}: {$v}
{/foreach}
{/foreach}
{/foreach}
{/foreach}
{/if}
{if $customGroup}
{foreach from=$customGroup item=value key=customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{$customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}

{if $event.allow_selfcancelxfer }
{ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}
   {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=d7ab341ba02f6f533640a872b9465209_1498147425_360"  h=0 a=1 fe=1}{/capture}
{ts}Transfer or cancel your registration:{/ts} {$selfService}
{/if}
', 7, false),array('modifier', 'date_format', 'string:Dear Tanya,

{if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
{$event.confirm_email_text}

{else}
  {ts}Thank you for your participation.{/ts}
  {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to %1.{/ts}
  {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to waitlisted.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to registered.{/ts}{/if}
  {/if}.

{/if}

{if $isOnWaitlist}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if $isPrimary}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}
{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if $isPrimary}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$pay_later_receipt}
==========================================================={if $pricesetFieldsCount }===================={/if}

{else}

{ts}Please print this confirmation for your records.{/ts}
{/if}


==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.event_title}
{$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
{if $conference_sessions}


{ts}Your schedule:{/ts}
{assign var=\'group_by_day\' value=\'NA\'}
{foreach from=$conference_sessions item=session}
{if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
{assign var=\'group_by_day\' value=$session.start_date}

{$group_by_day|date_format:"%m/%d/%Y"}


{/if}
{$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}
{if $session.location}    {$session.location}{/if}
{/foreach}
{/if}

{if $event.participant_role neq \'Attendee\' and $defaultRole}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if $isShowLocation}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if $location.phone.1.phone || $location.email.1.email}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if $event.is_public}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if $payer.name}
You were registered by: {$payer.name}
{/if}
{if $event.is_monetary} {* This section for Paid events only.*}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.fee_label}
==========================================================={if $pricesetFieldsCount }===================={/if}

{if $lineItem}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if $isPrimary}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}

{/if}
{/if}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{if $pricesetFieldsCount }{capture assign=ts_participant_total}{ts}Total Participants{/ts}{/capture}{/if}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {$ts_participant_total|string_format:"%10s"}
{foreach from=$value item=line}
{if $pricesetFieldsCount }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney:$currency|string_format:"%10s"} {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if} {$line.line_total+$line.tax_amount|crmMoney:$currency|string_format:"%10s"}{$ts_participant_count|string_format:"%10s"}
{/foreach}
{if $individual}{ts}Participant Total{/ts} {$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%29s"} {$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%33s"} {$individual.$priceset.totalAmtWithTax|crmMoney:$currency|string_format:"%12s"}{/if}
{/if}
{""|string_format:"%120s"}
{/foreach}
{""|string_format:"%120s"}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{$taxTerm} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if $amounts && !$lineItem}
{foreach from=$amounts item=amnt key=level}{$amnt.amount|crmMoney:$currency} {$amnt.label}
{/foreach}
{/if}

{if $totalTaxAmount}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if $isPrimary }

{ts}Total Amount{/ts}: {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}

{if $pricesetFieldsCount }
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

{ts}Total Participants{/ts}: {$count}
{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if $financialTypeName}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if $trxn_id}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if $paidBy}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if $checkNumber}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}

==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$billingName}
{$address}
{/if}

{if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Credit Card Information{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if $customPre}
{foreach from=$customPre item=customPr key=i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPre_grouptitle.$i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPr item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPost_grouptitle.$j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPos item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}
{if $customProfile}

{foreach from=$customProfile.profile item=eachParticipant key=participantID}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts 1=$participantID+2}Participant Information - Participant %1{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$eachParticipant item=eachProfile key=pid}
{$customProfile.title.$pid}
{foreach from=$eachProfile item=val key=field}
{foreach from=$val item=v key=f}
{$field}: {$v}
{/foreach}
{/foreach}
{/foreach}
{/foreach}
{/if}
{if $customGroup}
{foreach from=$customGroup item=value key=customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{$customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}

{if $event.allow_selfcancelxfer }
{ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}
   {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=d7ab341ba02f6f533640a872b9465209_1498147425_360"  h=0 a=1 fe=1}{/capture}
{ts}Transfer or cancel your registration:{/ts} {$selfService}
{/if}
', 55, false),array('modifier', 'crmDate', 'string:Dear Tanya,

{if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
{$event.confirm_email_text}

{else}
  {ts}Thank you for your participation.{/ts}
  {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to %1.{/ts}
  {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to waitlisted.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to registered.{/ts}{/if}
  {/if}.

{/if}

{if $isOnWaitlist}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if $isPrimary}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}
{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if $isPrimary}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$pay_later_receipt}
==========================================================={if $pricesetFieldsCount }===================={/if}

{else}

{ts}Please print this confirmation for your records.{/ts}
{/if}


==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.event_title}
{$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
{if $conference_sessions}


{ts}Your schedule:{/ts}
{assign var=\'group_by_day\' value=\'NA\'}
{foreach from=$conference_sessions item=session}
{if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
{assign var=\'group_by_day\' value=$session.start_date}

{$group_by_day|date_format:"%m/%d/%Y"}


{/if}
{$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}
{if $session.location}    {$session.location}{/if}
{/foreach}
{/if}

{if $event.participant_role neq \'Attendee\' and $defaultRole}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if $isShowLocation}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if $location.phone.1.phone || $location.email.1.email}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if $event.is_public}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if $payer.name}
You were registered by: {$payer.name}
{/if}
{if $event.is_monetary} {* This section for Paid events only.*}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.fee_label}
==========================================================={if $pricesetFieldsCount }===================={/if}

{if $lineItem}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if $isPrimary}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}

{/if}
{/if}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{if $pricesetFieldsCount }{capture assign=ts_participant_total}{ts}Total Participants{/ts}{/capture}{/if}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {$ts_participant_total|string_format:"%10s"}
{foreach from=$value item=line}
{if $pricesetFieldsCount }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney:$currency|string_format:"%10s"} {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if} {$line.line_total+$line.tax_amount|crmMoney:$currency|string_format:"%10s"}{$ts_participant_count|string_format:"%10s"}
{/foreach}
{if $individual}{ts}Participant Total{/ts} {$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%29s"} {$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%33s"} {$individual.$priceset.totalAmtWithTax|crmMoney:$currency|string_format:"%12s"}{/if}
{/if}
{""|string_format:"%120s"}
{/foreach}
{""|string_format:"%120s"}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{$taxTerm} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if $amounts && !$lineItem}
{foreach from=$amounts item=amnt key=level}{$amnt.amount|crmMoney:$currency} {$amnt.label}
{/foreach}
{/if}

{if $totalTaxAmount}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if $isPrimary }

{ts}Total Amount{/ts}: {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}

{if $pricesetFieldsCount }
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

{ts}Total Participants{/ts}: {$count}
{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if $financialTypeName}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if $trxn_id}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if $paidBy}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if $checkNumber}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}

==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$billingName}
{$address}
{/if}

{if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Credit Card Information{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if $customPre}
{foreach from=$customPre item=customPr key=i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPre_grouptitle.$i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPr item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPost_grouptitle.$j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPos item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}
{if $customProfile}

{foreach from=$customProfile.profile item=eachParticipant key=participantID}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts 1=$participantID+2}Participant Information - Participant %1{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$eachParticipant item=eachProfile key=pid}
{$customProfile.title.$pid}
{foreach from=$eachProfile item=val key=field}
{foreach from=$val item=v key=f}
{$field}: {$v}
{/foreach}
{/foreach}
{/foreach}
{/foreach}
{/if}
{if $customGroup}
{foreach from=$customGroup item=value key=customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{$customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}

{if $event.allow_selfcancelxfer }
{ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}
   {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=d7ab341ba02f6f533640a872b9465209_1498147425_360"  h=0 a=1 fe=1}{/capture}
{ts}Transfer or cancel your registration:{/ts} {$selfService}
{/if}
', 55, false),array('modifier', 'strip_tags', 'string:Dear Tanya,

{if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
{$event.confirm_email_text}

{else}
  {ts}Thank you for your participation.{/ts}
  {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to %1.{/ts}
  {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to waitlisted.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to registered.{/ts}{/if}
  {/if}.

{/if}

{if $isOnWaitlist}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if $isPrimary}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}
{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if $isPrimary}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$pay_later_receipt}
==========================================================={if $pricesetFieldsCount }===================={/if}

{else}

{ts}Please print this confirmation for your records.{/ts}
{/if}


==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.event_title}
{$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
{if $conference_sessions}


{ts}Your schedule:{/ts}
{assign var=\'group_by_day\' value=\'NA\'}
{foreach from=$conference_sessions item=session}
{if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
{assign var=\'group_by_day\' value=$session.start_date}

{$group_by_day|date_format:"%m/%d/%Y"}


{/if}
{$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}
{if $session.location}    {$session.location}{/if}
{/foreach}
{/if}

{if $event.participant_role neq \'Attendee\' and $defaultRole}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if $isShowLocation}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if $location.phone.1.phone || $location.email.1.email}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if $event.is_public}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if $payer.name}
You were registered by: {$payer.name}
{/if}
{if $event.is_monetary} {* This section for Paid events only.*}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.fee_label}
==========================================================={if $pricesetFieldsCount }===================={/if}

{if $lineItem}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if $isPrimary}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}

{/if}
{/if}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{if $pricesetFieldsCount }{capture assign=ts_participant_total}{ts}Total Participants{/ts}{/capture}{/if}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {$ts_participant_total|string_format:"%10s"}
{foreach from=$value item=line}
{if $pricesetFieldsCount }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney:$currency|string_format:"%10s"} {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if} {$line.line_total+$line.tax_amount|crmMoney:$currency|string_format:"%10s"}{$ts_participant_count|string_format:"%10s"}
{/foreach}
{if $individual}{ts}Participant Total{/ts} {$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%29s"} {$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%33s"} {$individual.$priceset.totalAmtWithTax|crmMoney:$currency|string_format:"%12s"}{/if}
{/if}
{""|string_format:"%120s"}
{/foreach}
{""|string_format:"%120s"}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{$taxTerm} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if $amounts && !$lineItem}
{foreach from=$amounts item=amnt key=level}{$amnt.amount|crmMoney:$currency} {$amnt.label}
{/foreach}
{/if}

{if $totalTaxAmount}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if $isPrimary }

{ts}Total Amount{/ts}: {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}

{if $pricesetFieldsCount }
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

{ts}Total Participants{/ts}: {$count}
{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if $financialTypeName}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if $trxn_id}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if $paidBy}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if $checkNumber}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}

==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$billingName}
{$address}
{/if}

{if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Credit Card Information{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if $customPre}
{foreach from=$customPre item=customPr key=i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPre_grouptitle.$i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPr item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPost_grouptitle.$j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPos item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}
{if $customProfile}

{foreach from=$customProfile.profile item=eachParticipant key=participantID}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts 1=$participantID+2}Participant Information - Participant %1{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$eachParticipant item=eachProfile key=pid}
{$customProfile.title.$pid}
{foreach from=$eachProfile item=val key=field}
{foreach from=$val item=v key=f}
{$field}: {$v}
{/foreach}
{/foreach}
{/foreach}
{/foreach}
{/if}
{if $customGroup}
{foreach from=$customGroup item=value key=customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{$customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}

{if $event.allow_selfcancelxfer }
{ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}
   {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=d7ab341ba02f6f533640a872b9465209_1498147425_360"  h=0 a=1 fe=1}{/capture}
{ts}Transfer or cancel your registration:{/ts} {$selfService}
{/if}
', 79, false),array('modifier', 'count', 'string:Dear Tanya,

{if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
{$event.confirm_email_text}

{else}
  {ts}Thank you for your participation.{/ts}
  {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to %1.{/ts}
  {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to waitlisted.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to registered.{/ts}{/if}
  {/if}.

{/if}

{if $isOnWaitlist}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if $isPrimary}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}
{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if $isPrimary}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$pay_later_receipt}
==========================================================={if $pricesetFieldsCount }===================={/if}

{else}

{ts}Please print this confirmation for your records.{/ts}
{/if}


==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.event_title}
{$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
{if $conference_sessions}


{ts}Your schedule:{/ts}
{assign var=\'group_by_day\' value=\'NA\'}
{foreach from=$conference_sessions item=session}
{if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
{assign var=\'group_by_day\' value=$session.start_date}

{$group_by_day|date_format:"%m/%d/%Y"}


{/if}
{$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}
{if $session.location}    {$session.location}{/if}
{/foreach}
{/if}

{if $event.participant_role neq \'Attendee\' and $defaultRole}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if $isShowLocation}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if $location.phone.1.phone || $location.email.1.email}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if $event.is_public}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if $payer.name}
You were registered by: {$payer.name}
{/if}
{if $event.is_monetary} {* This section for Paid events only.*}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.fee_label}
==========================================================={if $pricesetFieldsCount }===================={/if}

{if $lineItem}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if $isPrimary}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}

{/if}
{/if}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{if $pricesetFieldsCount }{capture assign=ts_participant_total}{ts}Total Participants{/ts}{/capture}{/if}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {$ts_participant_total|string_format:"%10s"}
{foreach from=$value item=line}
{if $pricesetFieldsCount }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney:$currency|string_format:"%10s"} {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if} {$line.line_total+$line.tax_amount|crmMoney:$currency|string_format:"%10s"}{$ts_participant_count|string_format:"%10s"}
{/foreach}
{if $individual}{ts}Participant Total{/ts} {$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%29s"} {$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%33s"} {$individual.$priceset.totalAmtWithTax|crmMoney:$currency|string_format:"%12s"}{/if}
{/if}
{""|string_format:"%120s"}
{/foreach}
{""|string_format:"%120s"}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{$taxTerm} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if $amounts && !$lineItem}
{foreach from=$amounts item=amnt key=level}{$amnt.amount|crmMoney:$currency} {$amnt.label}
{/foreach}
{/if}

{if $totalTaxAmount}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if $isPrimary }

{ts}Total Amount{/ts}: {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}

{if $pricesetFieldsCount }
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

{ts}Total Participants{/ts}: {$count}
{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if $financialTypeName}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if $trxn_id}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if $paidBy}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if $checkNumber}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}

==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$billingName}
{$address}
{/if}

{if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Credit Card Information{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if $customPre}
{foreach from=$customPre item=customPr key=i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPre_grouptitle.$i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPr item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPost_grouptitle.$j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPos item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}
{if $customProfile}

{foreach from=$customProfile.profile item=eachParticipant key=participantID}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts 1=$participantID+2}Participant Information - Participant %1{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$eachParticipant item=eachProfile key=pid}
{$customProfile.title.$pid}
{foreach from=$eachProfile item=val key=field}
{foreach from=$val item=v key=f}
{$field}: {$v}
{/foreach}
{/foreach}
{/foreach}
{/foreach}
{/if}
{if $customGroup}
{foreach from=$customGroup item=value key=customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{$customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}

{if $event.allow_selfcancelxfer }
{ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}
   {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=d7ab341ba02f6f533640a872b9465209_1498147425_360"  h=0 a=1 fe=1}{/capture}
{ts}Transfer or cancel your registration:{/ts} {$selfService}
{/if}
', 115, false),array('modifier', 'string_format', 'string:Dear Tanya,

{if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
{$event.confirm_email_text}

{else}
  {ts}Thank you for your participation.{/ts}
  {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to %1.{/ts}
  {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to waitlisted.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to registered.{/ts}{/if}
  {/if}.

{/if}

{if $isOnWaitlist}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if $isPrimary}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}
{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if $isPrimary}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$pay_later_receipt}
==========================================================={if $pricesetFieldsCount }===================={/if}

{else}

{ts}Please print this confirmation for your records.{/ts}
{/if}


==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.event_title}
{$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
{if $conference_sessions}


{ts}Your schedule:{/ts}
{assign var=\'group_by_day\' value=\'NA\'}
{foreach from=$conference_sessions item=session}
{if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
{assign var=\'group_by_day\' value=$session.start_date}

{$group_by_day|date_format:"%m/%d/%Y"}


{/if}
{$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}
{if $session.location}    {$session.location}{/if}
{/foreach}
{/if}

{if $event.participant_role neq \'Attendee\' and $defaultRole}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if $isShowLocation}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if $location.phone.1.phone || $location.email.1.email}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if $event.is_public}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if $payer.name}
You were registered by: {$payer.name}
{/if}
{if $event.is_monetary} {* This section for Paid events only.*}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.fee_label}
==========================================================={if $pricesetFieldsCount }===================={/if}

{if $lineItem}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if $isPrimary}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}

{/if}
{/if}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{if $pricesetFieldsCount }{capture assign=ts_participant_total}{ts}Total Participants{/ts}{/capture}{/if}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {$ts_participant_total|string_format:"%10s"}
{foreach from=$value item=line}
{if $pricesetFieldsCount }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney:$currency|string_format:"%10s"} {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if} {$line.line_total+$line.tax_amount|crmMoney:$currency|string_format:"%10s"}{$ts_participant_count|string_format:"%10s"}
{/foreach}
{if $individual}{ts}Participant Total{/ts} {$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%29s"} {$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%33s"} {$individual.$priceset.totalAmtWithTax|crmMoney:$currency|string_format:"%12s"}{/if}
{/if}
{""|string_format:"%120s"}
{/foreach}
{""|string_format:"%120s"}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{$taxTerm} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if $amounts && !$lineItem}
{foreach from=$amounts item=amnt key=level}{$amnt.amount|crmMoney:$currency} {$amnt.label}
{/foreach}
{/if}

{if $totalTaxAmount}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if $isPrimary }

{ts}Total Amount{/ts}: {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}

{if $pricesetFieldsCount }
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

{ts}Total Participants{/ts}: {$count}
{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if $financialTypeName}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if $trxn_id}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if $paidBy}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if $checkNumber}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}

==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$billingName}
{$address}
{/if}

{if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Credit Card Information{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if $customPre}
{foreach from=$customPre item=customPr key=i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPre_grouptitle.$i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPr item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPost_grouptitle.$j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPos item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}
{if $customProfile}

{foreach from=$customProfile.profile item=eachParticipant key=participantID}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts 1=$participantID+2}Participant Information - Participant %1{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$eachParticipant item=eachProfile key=pid}
{$customProfile.title.$pid}
{foreach from=$eachProfile item=val key=field}
{foreach from=$val item=v key=f}
{$field}: {$v}
{/foreach}
{/foreach}
{/foreach}
{/foreach}
{/if}
{if $customGroup}
{foreach from=$customGroup item=value key=customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{$customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}

{if $event.allow_selfcancelxfer }
{ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}
   {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=d7ab341ba02f6f533640a872b9465209_1498147425_360"  h=0 a=1 fe=1}{/capture}
{ts}Transfer or cancel your registration:{/ts} {$selfService}
{/if}
', 130, false),array('modifier', 'truncate', 'string:Dear Tanya,

{if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
{$event.confirm_email_text}

{else}
  {ts}Thank you for your participation.{/ts}
  {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to %1.{/ts}
  {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to waitlisted.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to registered.{/ts}{/if}
  {/if}.

{/if}

{if $isOnWaitlist}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if $isPrimary}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}
{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if $isPrimary}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$pay_later_receipt}
==========================================================={if $pricesetFieldsCount }===================={/if}

{else}

{ts}Please print this confirmation for your records.{/ts}
{/if}


==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.event_title}
{$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
{if $conference_sessions}


{ts}Your schedule:{/ts}
{assign var=\'group_by_day\' value=\'NA\'}
{foreach from=$conference_sessions item=session}
{if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
{assign var=\'group_by_day\' value=$session.start_date}

{$group_by_day|date_format:"%m/%d/%Y"}


{/if}
{$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}
{if $session.location}    {$session.location}{/if}
{/foreach}
{/if}

{if $event.participant_role neq \'Attendee\' and $defaultRole}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if $isShowLocation}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if $location.phone.1.phone || $location.email.1.email}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if $event.is_public}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if $payer.name}
You were registered by: {$payer.name}
{/if}
{if $event.is_monetary} {* This section for Paid events only.*}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.fee_label}
==========================================================={if $pricesetFieldsCount }===================={/if}

{if $lineItem}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if $isPrimary}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}

{/if}
{/if}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{if $pricesetFieldsCount }{capture assign=ts_participant_total}{ts}Total Participants{/ts}{/capture}{/if}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {$ts_participant_total|string_format:"%10s"}
{foreach from=$value item=line}
{if $pricesetFieldsCount }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney:$currency|string_format:"%10s"} {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if} {$line.line_total+$line.tax_amount|crmMoney:$currency|string_format:"%10s"}{$ts_participant_count|string_format:"%10s"}
{/foreach}
{if $individual}{ts}Participant Total{/ts} {$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%29s"} {$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%33s"} {$individual.$priceset.totalAmtWithTax|crmMoney:$currency|string_format:"%12s"}{/if}
{/if}
{""|string_format:"%120s"}
{/foreach}
{""|string_format:"%120s"}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{$taxTerm} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if $amounts && !$lineItem}
{foreach from=$amounts item=amnt key=level}{$amnt.amount|crmMoney:$currency} {$amnt.label}
{/foreach}
{/if}

{if $totalTaxAmount}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if $isPrimary }

{ts}Total Amount{/ts}: {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}

{if $pricesetFieldsCount }
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

{ts}Total Participants{/ts}: {$count}
{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if $financialTypeName}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if $trxn_id}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if $paidBy}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if $checkNumber}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}

==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$billingName}
{$address}
{/if}

{if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Credit Card Information{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if $customPre}
{foreach from=$customPre item=customPr key=i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPre_grouptitle.$i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPr item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPost_grouptitle.$j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPos item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}
{if $customProfile}

{foreach from=$customProfile.profile item=eachParticipant key=participantID}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts 1=$participantID+2}Participant Information - Participant %1{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$eachParticipant item=eachProfile key=pid}
{$customProfile.title.$pid}
{foreach from=$eachProfile item=val key=field}
{foreach from=$val item=v key=f}
{$field}: {$v}
{/foreach}
{/foreach}
{/foreach}
{/foreach}
{/if}
{if $customGroup}
{foreach from=$customGroup item=value key=customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{$customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}

{if $event.allow_selfcancelxfer }
{ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}
   {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=d7ab341ba02f6f533640a872b9465209_1498147425_360"  h=0 a=1 fe=1}{/capture}
{ts}Transfer or cancel your registration:{/ts} {$selfService}
{/if}
', 133, false),array('modifier', 'crmMoney', 'string:Dear Tanya,

{if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
{$event.confirm_email_text}

{else}
  {ts}Thank you for your participation.{/ts}
  {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to %1.{/ts}
  {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to waitlisted.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to registered.{/ts}{/if}
  {/if}.

{/if}

{if $isOnWaitlist}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if $isPrimary}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}
{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if $isPrimary}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$pay_later_receipt}
==========================================================={if $pricesetFieldsCount }===================={/if}

{else}

{ts}Please print this confirmation for your records.{/ts}
{/if}


==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.event_title}
{$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
{if $conference_sessions}


{ts}Your schedule:{/ts}
{assign var=\'group_by_day\' value=\'NA\'}
{foreach from=$conference_sessions item=session}
{if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
{assign var=\'group_by_day\' value=$session.start_date}

{$group_by_day|date_format:"%m/%d/%Y"}


{/if}
{$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}
{if $session.location}    {$session.location}{/if}
{/foreach}
{/if}

{if $event.participant_role neq \'Attendee\' and $defaultRole}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if $isShowLocation}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if $location.phone.1.phone || $location.email.1.email}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if $event.is_public}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if $payer.name}
You were registered by: {$payer.name}
{/if}
{if $event.is_monetary} {* This section for Paid events only.*}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.fee_label}
==========================================================={if $pricesetFieldsCount }===================={/if}

{if $lineItem}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if $isPrimary}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}

{/if}
{/if}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{if $pricesetFieldsCount }{capture assign=ts_participant_total}{ts}Total Participants{/ts}{/capture}{/if}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {$ts_participant_total|string_format:"%10s"}
{foreach from=$value item=line}
{if $pricesetFieldsCount }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney:$currency|string_format:"%10s"} {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if} {$line.line_total+$line.tax_amount|crmMoney:$currency|string_format:"%10s"}{$ts_participant_count|string_format:"%10s"}
{/foreach}
{if $individual}{ts}Participant Total{/ts} {$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%29s"} {$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%33s"} {$individual.$priceset.totalAmtWithTax|crmMoney:$currency|string_format:"%12s"}{/if}
{/if}
{""|string_format:"%120s"}
{/foreach}
{""|string_format:"%120s"}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{$taxTerm} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if $amounts && !$lineItem}
{foreach from=$amounts item=amnt key=level}{$amnt.amount|crmMoney:$currency} {$amnt.label}
{/foreach}
{/if}

{if $totalTaxAmount}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if $isPrimary }

{ts}Total Amount{/ts}: {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}

{if $pricesetFieldsCount }
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

{ts}Total Participants{/ts}: {$count}
{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if $financialTypeName}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if $trxn_id}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if $paidBy}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if $checkNumber}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}

==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$billingName}
{$address}
{/if}

{if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Credit Card Information{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if $customPre}
{foreach from=$customPre item=customPr key=i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPre_grouptitle.$i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPr item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPost_grouptitle.$j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPos item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}
{if $customProfile}

{foreach from=$customProfile.profile item=eachParticipant key=participantID}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts 1=$participantID+2}Participant Information - Participant %1{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$eachParticipant item=eachProfile key=pid}
{$customProfile.title.$pid}
{foreach from=$eachProfile item=val key=field}
{foreach from=$val item=v key=f}
{$field}: {$v}
{/foreach}
{/foreach}
{/foreach}
{/foreach}
{/if}
{if $customGroup}
{foreach from=$customGroup item=value key=customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{$customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}

{if $event.allow_selfcancelxfer }
{ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}
   {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=d7ab341ba02f6f533640a872b9465209_1498147425_360"  h=0 a=1 fe=1}{/capture}
{ts}Transfer or cancel your registration:{/ts} {$selfService}
{/if}
', 133, false),array('function', 'crmURL', 'string:Dear Tanya,

{if $event.confirm_email_text AND (not $isOnWaitlist AND not $isRequireApproval)}
{$event.confirm_email_text}

{else}
  {ts}Thank you for your participation.{/ts}
  {if $participant_status}{ts 1=$participant_status}This letter is a confirmation that your registration has been received and your status has been updated to %1.{/ts}
  {else}{if $isOnWaitlist}{ts}This letter is a confirmation that your registration has been received and your status has been updated to waitlisted.{/ts}{else}{ts}This letter is a confirmation that your registration has been received and your status has been updated to registered.{/ts}{/if}
  {/if}.

{/if}

{if $isOnWaitlist}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if $isPrimary}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}
{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if $isPrimary}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if $pricesetFieldsCount }===================={/if}

{elseif $is_pay_later && !$isAmountzero && !$isAdditionalParticipant}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$pay_later_receipt}
==========================================================={if $pricesetFieldsCount }===================={/if}

{else}

{ts}Please print this confirmation for your records.{/ts}
{/if}


==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.event_title}
{$event.event_start_date|date_format:"%A"} {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|date_format:"%A"} {$event.event_end_date|crmDate}{/if}{/if}
{if $conference_sessions}


{ts}Your schedule:{/ts}
{assign var=\'group_by_day\' value=\'NA\'}
{foreach from=$conference_sessions item=session}
{if $session.start_date|date_format:"%Y/%m/%d" != $group_by_day|date_format:"%Y/%m/%d"}
{assign var=\'group_by_day\' value=$session.start_date}

{$group_by_day|date_format:"%m/%d/%Y"}


{/if}
{$session.start_date|crmDate:0:1}{if $session.end_date}-{$session.end_date|crmDate:0:1}{/if} {$session.title}
{if $session.location}    {$session.location}{/if}
{/foreach}
{/if}

{if $event.participant_role neq \'Attendee\' and $defaultRole}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if $isShowLocation}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if $location.phone.1.phone || $location.email.1.email}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if $event.is_public}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if $payer.name}
You were registered by: {$payer.name}
{/if}
{if $event.is_monetary} {* This section for Paid events only.*}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$event.fee_label}
==========================================================={if $pricesetFieldsCount }===================={/if}

{if $lineItem}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if $isPrimary}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts} {$part.$priceset.info}

{/if}
{/if}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{if $pricesetFieldsCount }{capture assign=ts_participant_total}{ts}Total Participants{/ts}{/capture}{/if}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {$ts_participant_total|string_format:"%10s"}
{foreach from=$value item=line}
{if $pricesetFieldsCount }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney:$currency|string_format:"%10s"} {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if} {$line.line_total+$line.tax_amount|crmMoney:$currency|string_format:"%10s"}{$ts_participant_count|string_format:"%10s"}
{/foreach}
{if $individual}{ts}Participant Total{/ts} {$individual.$priceset.totalAmtWithTax-$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%29s"} {$individual.$priceset.totalTaxAmt|crmMoney:$currency|string_format:"%33s"} {$individual.$priceset.totalAmtWithTax|crmMoney:$currency|string_format:"%12s"}{/if}
{/if}
{""|string_format:"%120s"}
{/foreach}
{""|string_format:"%120s"}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{$taxTerm} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if $amounts && !$lineItem}
{foreach from=$amounts item=amnt key=level}{$amnt.amount|crmMoney:$currency} {$amnt.label}
{/foreach}
{/if}

{if $totalTaxAmount}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if $isPrimary }

{ts}Total Amount{/ts}: {$totalAmount|crmMoney:$currency} {if $hookDiscount.message}({$hookDiscount.message}){/if}

{if $pricesetFieldsCount }
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

{ts}Total Participants{/ts}: {$count}
{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if $financialTypeName}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if $trxn_id}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if $paidBy}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if $checkNumber}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if $contributeMode ne \'notify\' and !$isAmountzero and (!$is_pay_later or $isBillingAddressRequiredForPayLater) and !$isOnWaitlist and !$isRequireApproval}

==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$billingName}
{$address}
{/if}

{if $contributeMode eq \'direct\' and !$isAmountzero and !$is_pay_later and !$isOnWaitlist and !$isRequireApproval}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts}Credit Card Information{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if $customPre}
{foreach from=$customPre item=customPr key=i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPre_grouptitle.$i}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPr item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}

{if $customPost}
{foreach from=$customPost item=customPos key=j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{$customPost_grouptitle.$j}
==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$customPos item=customValue key=customName}
{if ( $trackingFields and ! in_array( $customName, $trackingFields ) ) or ! $trackingFields}
 {$customName}: {$customValue}
{/if}
{/foreach}
{/foreach}
{/if}
{if $customProfile}

{foreach from=$customProfile.profile item=eachParticipant key=participantID}
==========================================================={if $pricesetFieldsCount }===================={/if}

{ts 1=$participantID+2}Participant Information - Participant %1{/ts}

==========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$eachParticipant item=eachProfile key=pid}
{$customProfile.title.$pid}
{foreach from=$eachProfile item=val key=field}
{foreach from=$val item=v key=f}
{$field}: {$v}
{/foreach}
{/foreach}
{/foreach}
{/foreach}
{/if}
{if $customGroup}
{foreach from=$customGroup item=value key=customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{$customName}
=========================================================={if $pricesetFieldsCount }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}

{if $event.allow_selfcancelxfer }
{ts 1=$event.selfcancelxfer_time}You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.{/ts} {if $totalAmount}{ts}Cancellations are not refundable.{/ts}{/if}
   {capture assign=selfService}{crmURL p=\'civicrm/event/selfsvcupdate\' q="reset=1&pid=`$participant.id`&cs=d7ab341ba02f6f533640a872b9465209_1498147425_360"  h=0 a=1 fe=1}{/capture}
{ts}Transfer or cancel your registration:{/ts} {$selfService}
{/if}
', 97, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Dear Tanya,

<?php if ($this->_tpl_vars['event']['confirm_email_text'] && ( ! $this->_tpl_vars['isOnWaitlist'] && ! $this->_tpl_vars['isRequireApproval'] )): ?>
<?php echo $this->_tpl_vars['event']['confirm_email_text']; ?>


<?php else: ?>
  <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Thank you for your participation.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php if ($this->_tpl_vars['participant_status']): ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['participant_status'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This letter is a confirmation that your registration has been received and your status has been updated to %1.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php else: ?><?php if ($this->_tpl_vars['isOnWaitlist']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This letter is a confirmation that your registration has been received and your status has been updated to waitlisted.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This letter is a confirmation that your registration has been received and your status has been updated to registered.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
  <?php endif; ?>.

<?php endif; ?>

<?php if ($this->_tpl_vars['isOnWaitlist']): ?>
===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You have been added to the WAIT LIST for this event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if ($this->_tpl_vars['isPrimary']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If space becomes available you will receive an email with a link to a web page where you can complete your registration.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>
===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php elseif ($this->_tpl_vars['isRequireApproval']): ?>
===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your registration has been submitted.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if ($this->_tpl_vars['isPrimary']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php endif; ?>
===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php elseif ($this->_tpl_vars['is_pay_later'] && ! $this->_tpl_vars['isAmountzero'] && ! $this->_tpl_vars['isAdditionalParticipant']): ?>

===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['pay_later_receipt']; ?>

===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php else: ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please print this confirmation for your records.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>


===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Information and Location<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['event']['event_title']; ?>

<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A") : smarty_modifier_date_format($_tmp, "%A")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php if ($this->_tpl_vars['event']['event_end_date']): ?>-<?php if (((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d")) == ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d"))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, 0, 1) : smarty_modifier_crmDate($_tmp, 0, 1)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A") : smarty_modifier_date_format($_tmp, "%A")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php endif; ?><?php endif; ?>
<?php if ($this->_tpl_vars['conference_sessions']): ?>


<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your schedule:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->assign('group_by_day', 'NA'); ?>
<?php $_from = $this->_tpl_vars['conference_sessions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['session']):
?>
<?php if (((is_array($_tmp=$this->_tpl_vars['session']['start_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d") : smarty_modifier_date_format($_tmp, "%Y/%m/%d")) != ((is_array($_tmp=$this->_tpl_vars['group_by_day'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d") : smarty_modifier_date_format($_tmp, "%Y/%m/%d"))): ?>
<?php $this->assign('group_by_day', $this->_tpl_vars['session']['start_date']); ?>

<?php echo ((is_array($_tmp=$this->_tpl_vars['group_by_day'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>



<?php endif; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['session']['start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, 0, 1) : smarty_modifier_crmDate($_tmp, 0, 1)); ?>
<?php if ($this->_tpl_vars['session']['end_date']): ?>-<?php echo ((is_array($_tmp=$this->_tpl_vars['session']['end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, 0, 1) : smarty_modifier_crmDate($_tmp, 0, 1)); ?>
<?php endif; ?> <?php echo $this->_tpl_vars['session']['title']; ?>

<?php if ($this->_tpl_vars['session']['location']): ?>    <?php echo $this->_tpl_vars['session']['location']; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['event']['participant_role'] != 'Attendee' && $this->_tpl_vars['defaultRole']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant Role<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['event']['participant_role']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['isShowLocation']): ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['location']['address']['1']['display'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['location']['phone']['1']['phone'] || $this->_tpl_vars['location']['email']['1']['email']): ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Contacts:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_from = $this->_tpl_vars['location']['phone']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['phone']):
?>
<?php if ($this->_tpl_vars['phone']['phone']): ?>

<?php if ($this->_tpl_vars['phone']['phone_type']): ?><?php echo $this->_tpl_vars['phone']['phone_type_display']; ?>
<?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Phone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>: <?php echo $this->_tpl_vars['phone']['phone']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['phone']['phone_ext']): ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>ext.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['phone']['phone_ext']; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['location']['email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['eventEmail']):
?>
<?php if ($this->_tpl_vars['eventEmail']['email']): ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['eventEmail']['email']; ?>
<?php endif; ?><?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['event']['is_public']): ?>
<?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/ical','q' => "reset=1&id=".($this->_tpl_vars['event']['id']),'h' => 0,'a' => 1,'fe' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('icalFeed', ob_get_contents());ob_end_clean(); ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Download iCalendar File:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['icalFeed']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['payer']['name']): ?>
You were registered by: <?php echo $this->_tpl_vars['payer']['name']; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['event']['is_monetary']): ?> 
===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['event']['fee_label']; ?>

===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php if ($this->_tpl_vars['lineItem']): ?><?php $_from = $this->_tpl_vars['lineItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>

<?php if ($this->_tpl_vars['value'] != 'skip'): ?>
<?php if ($this->_tpl_vars['isPrimary']): ?>
<?php if (count($this->_tpl_vars['lineItem']) > 1): ?> <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['priceset']+1)); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['part'][$this->_tpl_vars['priceset']]['info']; ?>


<?php endif; ?>
<?php endif; ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Item<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_item', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Qty<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_qty', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Each<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_each', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['dataArray']): ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Subtotal<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_subtotal', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Rate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_taxRate', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_taxAmount', ob_get_contents());ob_end_clean(); ?>
<?php endif; ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_total', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?><?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_participant_total', ob_get_contents());ob_end_clean(); ?><?php endif; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['ts_item'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%-30s") : smarty_modifier_string_format($_tmp, "%-30s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_qty'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%5s") : smarty_modifier_string_format($_tmp, "%5s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_each'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php if ($this->_tpl_vars['dataArray']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_subtotal'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_taxRate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_taxAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_total'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_participant_total'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>

<?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['line']):
?>
<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?><?php ob_start(); ?><?php echo $this->_tpl_vars['line']['participant_count']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_participant_count', ob_get_contents());ob_end_clean(); ?><?php endif; ?>
<?php ob_start(); ?><?php if ($this->_tpl_vars['line']['html_type'] == 'Text'): ?><?php echo $this->_tpl_vars['line']['label']; ?>
<?php else: ?><?php echo $this->_tpl_vars['line']['field_title']; ?>
 - <?php echo $this->_tpl_vars['line']['label']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['line']['description']): ?> <?php echo $this->_tpl_vars['line']['description']; ?>
<?php endif; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_item', ob_get_contents());ob_end_clean(); ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ts_item'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...") : smarty_modifier_truncate($_tmp, 30, "...")))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%-30s") : smarty_modifier_string_format($_tmp, "%-30s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['qty'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%5s") : smarty_modifier_string_format($_tmp, "%5s")); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['unit_price'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php if ($this->_tpl_vars['dataArray']): ?> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['unit_price']*$this->_tpl_vars['line']['qty'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php if ($this->_tpl_vars['line']['tax_rate'] != "" || $this->_tpl_vars['line']['tax_amount'] != ""): ?>  <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['tax_rate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 %  <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php else: ?>                  <?php endif; ?>  <?php endif; ?> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['line_total']+$this->_tpl_vars['line']['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['ts_participant_count'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>

<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['individual']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['individual'][$this->_tpl_vars['priceset']]['totalAmtWithTax']-$this->_tpl_vars['individual'][$this->_tpl_vars['priceset']]['totalTaxAmt'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%29s") : smarty_modifier_string_format($_tmp, "%29s")); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['individual'][$this->_tpl_vars['priceset']]['totalTaxAmt'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%33s") : smarty_modifier_string_format($_tmp, "%33s")); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['individual'][$this->_tpl_vars['priceset']]['totalAmtWithTax'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%12s") : smarty_modifier_string_format($_tmp, "%12s")); ?>
<?php endif; ?>
<?php endif; ?>
<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('string_format', true, $_tmp, "%120s") : smarty_modifier_string_format($_tmp, "%120s")); ?>

<?php endforeach; endif; unset($_from); ?>
<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('string_format', true, $_tmp, "%120s") : smarty_modifier_string_format($_tmp, "%120s")); ?>


<?php if ($this->_tpl_vars['dataArray']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount before Tax<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['totalAmount']-$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>


<?php $_from = $this->_tpl_vars['dataArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>
<?php if ($this->_tpl_vars['priceset'] || $this->_tpl_vars['priceset'] == 0): ?>
<?php echo $this->_tpl_vars['taxTerm']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['priceset'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
%: <?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

<?php else: ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['taxTerm']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['amounts'] && ! $this->_tpl_vars['lineItem']): ?>
<?php $_from = $this->_tpl_vars['amounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['level'] => $this->_tpl_vars['amnt']):
?><?php echo ((is_array($_tmp=$this->_tpl_vars['amnt']['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
 <?php echo $this->_tpl_vars['amnt']['label']; ?>

<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['totalTaxAmount']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['isPrimary']): ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['totalAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
 <?php if ($this->_tpl_vars['hookDiscount']['message']): ?>(<?php echo $this->_tpl_vars['hookDiscount']['message']; ?>
)<?php endif; ?>

<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>
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

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['count']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['register_date']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registration Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['register_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['receive_date']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['receive_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['financialTypeName']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Financial Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['financialTypeName']; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['trxn_id']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction #<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['trxn_id']; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['paidBy']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Paid By<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['paidBy']; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['checkNumber']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check Number<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['checkNumber']; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['contributeMode'] != 'notify' && ! $this->_tpl_vars['isAmountzero'] && ( ! $this->_tpl_vars['is_pay_later'] || $this->_tpl_vars['isBillingAddressRequiredForPayLater'] ) && ! $this->_tpl_vars['isOnWaitlist'] && ! $this->_tpl_vars['isRequireApproval']): ?>

===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billing Name and Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['billingName']; ?>

<?php echo $this->_tpl_vars['address']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['contributeMode'] == 'direct' && ! $this->_tpl_vars['isAmountzero'] && ! $this->_tpl_vars['is_pay_later'] && ! $this->_tpl_vars['isOnWaitlist'] && ! $this->_tpl_vars['isRequireApproval']): ?>
===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Credit Card Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['credit_card_type']; ?>

<?php echo $this->_tpl_vars['credit_card_number']; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expires<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['credit_card_exp_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 7, '') : smarty_modifier_truncate($_tmp, 7, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

<?php endif; ?>
<?php endif; ?>
<?php endif; ?> 
<?php if ($this->_tpl_vars['customPre']): ?>
<?php $_from = $this->_tpl_vars['customPre']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['customPr']):
?>
===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['customPre_grouptitle'][$this->_tpl_vars['i']]; ?>

===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php $_from = $this->_tpl_vars['customPr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['customValue']):
?>
<?php if (( $this->_tpl_vars['trackingFields'] && ! in_array ( $this->_tpl_vars['customName'] , $this->_tpl_vars['trackingFields'] ) ) || ! $this->_tpl_vars['trackingFields']): ?>
 <?php echo $this->_tpl_vars['customName']; ?>
: <?php echo $this->_tpl_vars['customValue']; ?>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['customPost']): ?>
<?php $_from = $this->_tpl_vars['customPost']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['customPos']):
?>
===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['customPost_grouptitle'][$this->_tpl_vars['j']]; ?>

===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php $_from = $this->_tpl_vars['customPos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['customValue']):
?>
<?php if (( $this->_tpl_vars['trackingFields'] && ! in_array ( $this->_tpl_vars['customName'] , $this->_tpl_vars['trackingFields'] ) ) || ! $this->_tpl_vars['trackingFields']): ?>
 <?php echo $this->_tpl_vars['customName']; ?>
: <?php echo $this->_tpl_vars['customValue']; ?>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['customProfile']): ?>

<?php $_from = $this->_tpl_vars['customProfile']['profile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['participantID'] => $this->_tpl_vars['eachParticipant']):
?>
===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['participantID']+2)); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant Information - Participant %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php $_from = $this->_tpl_vars['eachParticipant']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pid'] => $this->_tpl_vars['eachProfile']):
?>
<?php echo $this->_tpl_vars['customProfile']['title'][$this->_tpl_vars['pid']]; ?>

<?php $_from = $this->_tpl_vars['eachProfile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['val']):
?>
<?php $_from = $this->_tpl_vars['val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['f'] => $this->_tpl_vars['v']):
?>
<?php echo $this->_tpl_vars['field']; ?>
: <?php echo $this->_tpl_vars['v']; ?>

<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['customGroup']): ?>
<?php $_from = $this->_tpl_vars['customGroup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['value']):
?>
==========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['customName']; ?>

==========================================================<?php if ($this->_tpl_vars['pricesetFieldsCount']): ?>====================<?php endif; ?>

<?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n'] => $this->_tpl_vars['v']):
?>
<?php echo $this->_tpl_vars['n']; ?>
: <?php echo $this->_tpl_vars['v']; ?>

<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['event']['allow_selfcancelxfer']): ?>
<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['event']['selfcancelxfer_time'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You may transfer your registration to another participant or cancel your registration up to %1 hours before the event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php if ($this->_tpl_vars['totalAmount']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancellations are not refundable.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
   <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/selfsvcupdate','q' => "reset=1&pid=".($this->_tpl_vars['participant']['id'])."&cs=d7ab341ba02f6f533640a872b9465209_1498147425_360",'h' => 0,'a' => 1,'fe' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('selfService', ob_get_contents());ob_end_clean(); ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transfer or cancel your registration:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['selfService']; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>