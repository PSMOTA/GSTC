<?php /* Smarty version 2.6.27, created on 2017-06-26 13:53:33
         compiled from string:%3C%21DOCTYPE+html+PUBLIC+%22-//W3C//DTD+XHTML+1.0+Transitional//EN%22+%22http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd%22%3E%0D%0A%3Chtml+xmlns+%3D+%22http://www.w3.org/1999/xhtml%22%3E%0D%0A++%3Chead%3E%0D%0A++++%3Cmeta+http-equiv+%3D+%22Content-Type%22+content%3D%22text/html%3B+charset%3DUTF-8%22+/%3E%0D%0A++++++%3Ctitle%3E%3C/title%3E%0D%0A++%3C/head%3E%0D%0A++%3Cbody%3E%0D%0A++++%3Ccenter%3E%0D%0A++++%3Ctable+width+%3D+%22590%22++border+%3D+%220%22+style+%3D+%22margin-top:2px%3B%22%3E%0D%0A++++++%3Ctr%3E%0D%0A++++++++%3Ctd+align+%3D+%22left%22%3E%0D%0A++++++++++%3Cimg+src+%3D+%22https://www.gstcouncil.org/media/civicrm/persist/contribute/images/gstc_logo_big.jpg%22++width+%3D+%22220px%22/%3E%3Cbr/%3E%3Cbr/%3E%0D%0A++++++++%3C/td%3E%0D%0A++++++%3C/tr%3E%0D%0A++++%3C/table%3E%0D%0A%0D%0A++++%3Ctable+style+%3D+%22padding-right:19px%3Bfont-family:+Arial%2C+Verdana%2C+sans-serif%3B%22+width+%3D+%22590%22+height+%3D+%22100%22+border+%3D+%220%22+cellpadding+%3D+%222%22+cellspacing+%3D+%221%22%3E%0D%0A++++++%3Ctr%3E%3Ctd+colspan+%3D%223%22+style%3D%22text-align:+left%3B%22%3E%3Cb%3E%3Cfont+size+%3D+%224%22+align+%3D+%22center%22%3E%7Bts%7DINVOICE%7B/ts%7D%3C/font%3E%3C/b%3E%3C/td%3E%3C/tr%3E%0D%0A++++++%3Ctr%3E%0D%0A++++++++%3Ctd+width%3D%2230%25%22+style%3D%22%22+valign%3D%22top%22%3E%0D%0A++++++++++%3Ctable%3E%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22++type%3D%22%22%3E%7Bif+%24organization_name+and+%24membership_owner%7D%7B%24display_name%7D+%28%7B%24organization_name%7D%29%7Belse%7D%7B%24display_name%7D%7B/if%7D%3C/font%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22%3E%7B%24street_address%7D+%7B%24supplemental_address_1%7D%3C/font%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22%3E%7B%24supplemental_address_2%7D++%7B%24stateProvinceAbbreviation%7D%3C/font%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22%3E%7B%24city%7D++%7B%24postal_code%7D%3C/font%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22%3E%7B%24countryAbbreviation%7D%3C/font%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++%3C/table%3E%0D%0A++++++++%3C/td%3E%0D%0A++++++++%3Ctd+width%3D%2230%25%22+valign%3D%22top%22+align+%3D+%22right%22+style%3D%22padding-left:5px%3B%22%3E%0D%0A++++++++++%3Ctable+width%3D%22100%25%22%3E%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cb%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22+%3E%7Bts%7DInvoice+Date:%7B/ts%7D%3C/font%3E%3C/b%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22+%3E%7B%24invoice_date%7D%3C/font%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cb%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22+%3E%7Bts%7DInvoice+Number:%7B/ts%7D%3C/font%3E%3C/b%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22+%3E%7B%24invoice_id%7D%3C/font%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++%3C/table%3E%0D%0A++++++++%3C/td%3E%0D%0A++++++++%3Ctd+width%3D%2260%25%22++valign%3D%22top%22+align+%3D+%22right%22%3E%0D%0A++++++++++%3Ctable+width%3D%22100%25%22%3E%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24domain_organization%7D%3C/font%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7Bif+%24domain_street_address+%7D%7B%24domain_street_address%7D%7B/if%7D%0D%0A++++++++++++++++++++%7Bif+%24domain_supplemental_address_1+%7D%7B%24domain_supplemental_address_1%7D%7B/if%7D%3C/font%3E%3C/td%3E%3C/tr%3E%0D%0A+++++++++++%7Bif+%24domain_supplemental_address_2+%7D%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24domain_supplemental_address_2%7D%3C/font%3E%3C/td%3E%3C/tr%3E%7B/if%7D%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7Bif+%24domain_city%7D%7B%24domain_city%7D%7B/if%7D%7Bif+%24domain_state+%7D%2C+%7B%24domain_state%7D%7B/if%7D+++++++++++++++++++++%7Bif+%24domain_postal_code+%7D%7B%24domain_postal_code%7D%7B/if%7D%7Bif+%24domain_postal_code_suffix+%7D-%7B%24domain_postal_code_suffix%7D%7B/if%7D%3C/font%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++%7Bif+%24domain_country%7D%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24domain_country%7D%3C/font%3E%3C/td%3E%3C/tr%3E%7B/if%7D%0D%0A++++++++++++%7Bif+%24domain_phone%7D%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24domain_phone%7D%3C/font%3E%3C/td%3E%3C/tr%3E%7B/if%7D%0D%0A++++++++++++%7Bif+%24domain_email%7D%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24domain_email%7D%3C/font%3E%3C/td%3E%3C/tr%3E%7B/if%7D%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3ECorporate+ID+no.+461050633%3C/font%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++%3Ctr%3E%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3EGSTC+is+a+501%28c%293+tax-exempt+organization.%3C/font%3E%3C/td%3E%3C/tr%3E%0D%0A+++++++++++%0D%0A++++++++++%3C/table%3E%0D%0A++++++++%3C/td%3E%0D%0A++++++%3C/tr%3E%0D%0A+++++%7Bif+%24source%7D%3Ctr%3E%3Ctd+colspan+%3D%223%22+style+%3D+%22padding-top:10px%3B%22%3E%3Cfont+size+%3D+%221%22align+%3D+%22left%22%3E%7Bts%7DReference:%7B/ts%7D+%7B%24source%7D%3C/font%3E%3C/td%3E%3C/td%3E%3C/tr%3E%7B/if%7D%0D%0A++++%3C/table%3E%0D%0A++++++%3Ctable+style+%3D+%22padding-right:19px%3Bmargin-top:15px%3Bfont-family:+Arial%2C+Verdana%2C+sans-serif%22+width+%3D+%22590%22+border+%3D+%220%22cellpadding+%3D+%22-5%22+cellspacing+%3D+%220%22+id+%3D+%22desc%22%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd+colspan+%3D+%222%22+%7B%24valueStyle%7D%3E%0D%0A++++++++++++%3Ctable%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Cth+style+%3D+%22text-align:left%3B+font-weight:bold%3Bwidth:300px%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts%7DDescription%7B/ts%7D%3C/font%3E%3C/th%3E%0D%0A++++++++++++++++%3Cth+style+%3D+%22text-align:right%3Bfont-weight:bold%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts%7DQuantity%7B/ts%7D%3C/font%3E%3C/th%3E%0D%0A++++++++++++++++%3Cth+style+%3D+%22text-align:right%3Bfont-weight:bold%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts%7DUnit+Price%7B/ts%7D%3C/font%3E%3C/th%3E%0D%0A++++++++++++++++%3Cth+style+%3D+%22text-align:right%3Bfont-weight:bold%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7B%24taxTerm%7D+%3C/font%3E%3C/th%3E%0D%0A++++++++++++++++%3Cth+style+%3D+%22text-align:right%3Bfont-weight:bold%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts+1%3D%24defaultCurrency%7DAmount+%251%7B/ts%7D%3C/font%3E%3C/th%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7Bforeach+from%3D%24lineItem+item%3Dvalue+key%3Dpriceset+name%3Dtaxpricevalue%7D%0D%0A++++++++++++++%7Bif+%24smarty.foreach.taxpricevalue.index+eq+0%7D%0D%0A++++++++++++++%3Ctr%3E%3Ctd++colspan+%3D+%225%22+%3E%3Chr+size%3D%223%22+style+%3D+%22color:%23000%3B%22%3E%3C/hr%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++++%7Belse%7D%0D%0A++++++++++++++%3Ctr%3E%3Ctd++colspan+%3D+%225%22+style+%3D+%22color:%23F5F5F5%3B%22%3E%3Chr%3E%3C/hr%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++++%7B/if%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+style%3D%22text-align:left%3B%22+%3E%3Cfont+size+%3D+%221%22%3E%7Bif+%24value.html_type+eq+%27Text%27%7D%7B%24value.label%7D%7Belse%7D%7B%24value.field_title%7D+-+%7B%24value.label%7D%7B/if%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style%3D%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E+%7B%24value.qty%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style%3D%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E+%7B%24value.unit_price%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%7Bif+%24value.tax_amount+%21%3D+%27%27%7D%0D%0A++++++++++++++++%3Ctd+style%3D%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E+%7B%24value.tax_rate%7D%25%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%7Belse%7D%0D%0A++++++++++++++++%3Ctd+style%3D%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts+1%3D%24taxTerm%7DNo+%251%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%7B/if%7D%0D%0A++++++++++++++++%3Ctd+style%3D%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7B%24value.subTotal%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7B/foreach%7D%0D%0A++++++++++++++%3Ctr%3E%3Ctd++colspan+%3D+%225%22+style+%3D+%22color:%23F5F5F5%3B%22%3E%3Chr%3E%3C/hr%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts%7DSub+Total%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E+%7B%24subTotal%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7Bforeach+from+%3D+%24dataArray+item+%3D+value+key+%3D+priceset%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%7Bif+%24priceset%7D%0D%0A++++++++++++++++%3Ctd+style+%3D+%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E+%7Bts+1%3D%24taxTerm+2%3D%24priceset%7DTOTAL+%251+%252%25%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24value%7CcrmMoney:%24currency%7D%3C/font%3E+%3C/td%3E%0D%0A++++++++++++++++%7Belseif+%24priceset+%3D%3D+0%7D%0D%0A++++++++++++++++%3Ctd+style+%3D+%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts+1%3D%24taxTerm%7DTOTAL+NO+%251%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24value%7CcrmMoney:%24currency%7D%3C/font%3E+%3C/td%3E%0D%0A++++++++++++++++%7B/if%7D%0D%0A++++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7B/foreach%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%222%22%3E%3Chr%3E%3C/hr%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cb%3E%3Cfont+size+%3D+%221%22%3E%7Bts+1%3D%24defaultCurrency%7DTOTAL+%251%7B/ts%7D%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7B%24amount%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A%0D%0A++++++++++++++%7Bif+%24is_pay_later+%3D%3D+0%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22text-align:right%3B%22%3E%0D%0A++++++++++++++++++%3Cfont+size+%3D+%221%22%3E%0D%0A++++++++++++++++++++%7Bif+%24contribution_status_id+%3D%3D+%24refundedStatusId%7D%0D%0A++++++++++++++++++++%7Bts%7DLESS+Amount+Credited%7B/ts%7D%0D%0A++++++++++++++++++++%7Belse%7D%0D%0A++++++++++++++++++++%7Bts%7DLESS+Amount+Paid%7B/ts%7D%0D%0A++++++++++++++++++++%7B/if%7D%0D%0A++++++++++++++++++%3C/font%3E%0D%0A++++++++++++++++%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7B%24amount%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%222%22+%3E%3Chr%3E%3C/hr%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cb%3E%3Cfont+size+%3D+%221%22%3E%7Bts%7DAMOUNT+DUE:%7B/ts%7D+%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22text-align:right%3Bwhite-space:+nowrap%3B%22%3E%3Cb%3E%3Cfont+size+%3D+%221%22%3E%7B%24amountDue%7CcrmMoney:%24currency%7D%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7B/if%7D%0D%0A++++++++++++++%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7Bif+%24contribution_status_id+%3D%3D+%24pendingStatusId+%26%26+%24is_pay_later+%3D%3D+1%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+style%3D%22white-space:+nowrap%3B%22%3E%3Cb%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22%3E%7Bts+1%3D%24dueDate%7DDUE+DATE:+%251%7B/ts%7D%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7B/if%7D%0D%0A++++++++++++%3C/table%3E%0D%0A++++++++++%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++%3C/table%3E%0D%0A++++++%7Bif+%24contribution_status_id+%3D%3D+%24pendingStatusId+%26%26+%24is_pay_later+%3D%3D+1%7D%0D%0A++++++%3Ctable+style+%3D+%22margin-top:5px%3Bpadding-right:45px%3Bmargin-left:+50px%3B%22%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd%3E%3Cimg+src+%3D+%22%7B%24resourceBase%7D/i/contribute/cut_line.png%22+height+%3D+%2215%22+width+%3D+%22630%22/%3E%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++%3C/table%3E%0D%0A++++++%3Ctable+style+%3D+%22margin-top:6px%3Bpadding-right:20px%3Bfont-family:+Arial%2C+Verdana%2C+sans-serif%22+width+%3D+%22480%22+border+%3D+%220%22cellpadding+%3D+%22-5%22+cellspacing%3D%2219%22+id+%3D+%22desc%22%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd+width%3D%2260%25%22%3E%0D%0A++++++++++++%3Cb%3E%0D%0A++++++++++++++%3Cfont+size+%3D+%224%22+align+%3D+%22right%22%3E%7Bts%7DPAYMENT+ADVICE%7B/ts%7D%3C/font%3E%0D%0A++++++++++++%3C/b%3E+%3Cbr/%3E%3Cbr/%3E%0D%0A++++++++++++%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%3Cb%3E%7Bts%7DTo:+%7B/ts%7D%3C/b%3E%0D%0A++++++++++++++%3Cdiv+style%3D%22text-align:+left%3Bwidth:17em%3Bword-wrap:break-word%3B%22%3E%0D%0A++++++++++++++++%7B%24domain_organization%7D+%3Cbr+/%3E%0D%0A++++++++++++++++%7B%24domain_street_address%7D+%7B%24domain_supplemental_address_1%7D+%3Cbr+/%3E%0D%0A++++++++++++++++%7B%24domain_supplemental_address_2%7D+%7B%24domain_state%7D+%3Cbr+/%3E%0D%0A++++++++++++++++%7B%24domain_city%7D+%7B%24domain_postal_code%7D+%3Cbr+/%3E%0D%0A++++++++++++++++%7B%24domain_country%7D+%3Cbr+/%3E%0D%0A++++++++++++++++%7B%24domain_phone%7D+%3Cbr+/%3E%0D%0A++++++++++++++++%7B%24domain_email%7D%0D%0A++++++++++++++%3C/div%3E%0D%0A++++++++++++%3C/font%3E%0D%0A++++++++++++%3Cbr/%3E%3Cbr/%3E%0D%0A++++++++++++%3Cfont+size%3D%221%22+align%3D%22right%22%3E%7B%24notes%7D%3C/font%3E%0D%0A++++++++++%3C/td%3E%0D%0A++++++++++%3Ctd+width%3D%2240%25%22%3E%0D%0A++++++++++++%3Ctable++cellpadding+%3D+%22-10%22+cellspacing+%3D+%2222%22++align%3D%22right%22+%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd++colspan+%3D+%222%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22+style%3D%22font-weight:bold%3B%22%3E%7Bts%7DCustomer:+%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style%3D%22white-space:nowrap%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24display_name%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%222%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22+style%3D%22font-weight:bold%3B%22%3E%7Bts%7DInvoice+Number:+%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style%3D%22white-space:nowrap%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24invoice_id%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%3Ctd++colspan+%3D+%225%22style+%3D+%22color:%23F5F5F5%3B%22%3E%3Chr%3E%3C/hr%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++++%7Bif+%24is_pay_later+%3D%3D+1%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%222%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style%3D%22white-space:nowrap%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22+style%3D%22font-weight:bold%3B%22%3E%7Bts%7DAmount+Due:%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style%3D%22white-space:nowrap%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22+style%3D%22font-weight:bold%3B%22%3E%7B%24amount%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7Belse%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%222%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style%3D%22white-space:nowrap%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22+style%3D%22font-weight:bold%3B%22%3E%7Bts%7DAmount+Due:+%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style%3D%22white-space:nowrap%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22+style%3D%22font-weight:bold%3B%22%3E%7B%24amountDue%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7B/if%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%222%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style%3D%22white-space:nowrap%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22+style%3D%22font-weight:bold%3B%22%3E%7Bts%7DDue+Date:++%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style%3D%22white-space:nowrap%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24dueDate%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%225%22+style+%3D+%22color:%23F5F5F5%3B%22%3E%3Chr%3E%3C/hr%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++%3C/table%3E%0D%0A++++++++++%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++%3C/table%3E%0D%0A++++++%7B/if%7D%0D%0A%0D%0A++++++%7Bif+%24contribution_status_id+%3D%3D+%24refundedStatusId+%7C%7C+%24contribution_status_id+%3D%3D+%24cancelledStatusId%7D%0D%0A++++++%3Ctable+style+%3D+%22margin-top:2px%3Bpadding-left:7px%3Bpage-break-before:+always%3B%22%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd%3E%3Cimg+src+%3D+%22%7B%24resourceBase%7D/i/civi99.png%22+height+%3D+%2234px%22+width+%3D+%2299px%22/%3E%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++%3C/table%3E%0D%0A%0D%0A++++++%3Ctable+style+%3D+%22font-family:+Arial%2C+Verdana%2C+sans-serif%22+width+%3D+%22500%22+height+%3D+%22100%22+border+%3D+%220%22+cellpadding+%3D+%222%22+cellspacing+%3D+%221%22%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd+style+%3D+%22padding-left:15px%3B%22+%3E%3Cb%3E%3Cfont+size+%3D+%224%22+align+%3D+%22center%22%3E%7Bts%7DCREDIT+NOTE%7B/ts%7D%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A++++++++++%3Ctd+colspan+%3D+%221%22%3E%3C/td%3E%0D%0A++++++++++%3Ctd+style+%3D+%22padding-left:70px%3B%22%3E%3Cb%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7Bts%7DDate:%7B/ts%7D%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A++++++++++%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24domain_organization%7D%3C/font%3E%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%7Bif+%24organization_name%7D%0D%0A++++++++++%3Ctd+style+%3D+%22padding-left:17px%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22%3E%7B%24display_name%7D++%28%7B%24organization_name%7D%29%3C/font%3E%3C/td%3E%0D%0A+++++++++++%7Belse%7D%0D%0A++++++++++%3Ctd+style+%3D+%22padding-left:17px%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22%3E%7B%24display_name%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++%7B/if%7D%0D%0A++++++++++%3Ctd+colspan+%3D+%221%22%3E%3C/td%3E%0D%0A++++++++++%3Ctd+style+%3D+%22padding-left:70px%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24invoice_date%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++%3Ctd+%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%0D%0A++++++++++%7Bif+%24domain_street_address+%7D%0D%0A++++++++++++%7B%24domain_street_address%7D%0D%0A++++++++++%7B/if%7D%0D%0A++++++++++%7Bif+%24domain_supplemental_address_1+%7D%0D%0A++++++++++++%7B%24domain_supplemental_address_1%7D%0D%0A++++++++++%7B/if%7D%3C/font%3E%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd+style+%3D+%22padding-left:17px%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22%3E%7B%24street_address%7D+++%7B%24supplemental_address_1%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++%3Ctd+colspan+%3D+%221%22%3E%3C/td%3E%0D%0A++++++++++%3Ctd+style+%3D+%22padding-left:70px%3B%22%3E%3Cb%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7Bts%7DCredit+Note+Number:%7B/ts%7D%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A++++++++++%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7Bif+%24domain_supplemental_address_2+%7D%0D%0A++++++++++++%7B%24domain_supplemental_address_2%7D%0D%0A++++++++++++%7B/if%7D%0D%0A++++++++++++%7Bif+%24domain_state+%7D%0D%0A++++++++++++%7B%24domain_state%7D%0D%0A++++++++++++%7B/if%7D%0D%0A++++++++++++%3C/font%3E%0D%0A++++++++++%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd+style+%3D+%22padding-left:17px%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22center%22%3E%7B%24supplemental_address_2%7D++%7B%24stateProvinceAbbreviation%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++%3Ctd+colspan%3D%221%22%3E%3C/td%3E%0D%0A++++++++++%3Ctd+style+%3D+%22padding-left:70px%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24creditnote_id%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++%3Ctd+%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7Bif+%24domain_city%7D%0D%0A+++++++++++%7B%24domain_city%7D%0D%0A+++++++++++++++%7B/if%7D%0D%0A+++++++++++++++%7Bif+%24domain_postal_code+%7D%0D%0A+++++++++++%7B%24domain_postal_code%7D%0D%0A+++++++++++++++%7B/if%7D%0D%0A++++++++++%3C/font%3E%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd+style+%3D+%22padding-left:17px%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24city%7D++%7B%24postal_code%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++%3Ctd+colspan%3D%221%22%3E%3C/td%3E%0D%0A++++++++++%3Ctd+height+%3D+%2210%22+style+%3D+%22padding-left:70px%3B%22%3E%3Cb%3E%3Cfont+size+%3D+%221%22align+%3D+%22right%22%3E%7Bts%7DReference:%7B/ts%7D%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A++++++++++%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E+%7Bif+%24domain_country%7D%0D%0A++++++++++%7B%24domain_country%7D%0D%0A++++++++++++++%7B/if%7D%3C/font%3E%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd%3E%3C/td%3E%0D%0A++++++++++%3Ctd%3E%3C/td%3E%0D%0A++++++++++%3Ctd+style+%3D+%22padding-left:70px%3B%22%3E%3Cfont+size+%3D+%221%22align+%3D+%22right%22%3E%7B%24source%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E+%7Bif+%24domain_phone%7D%0D%0A++++++++++%7B%24domain_phone%7D%0D%0A+++++++++++++++%7B/if%7D%3C/font%3E+%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd%3E%3C/td%3E%0D%0A++++++++++%3Ctd%3E%3C/td%3E%0D%0A++++++++++%3Ctd%3E%3C/td%3E%0D%0A++++++++++%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E+%7Bif+%24domain_email%7D%0D%0A++++++++++%7B%24domain_email%7D%0D%0A++++++++++%7B/if%7D%3C/font%3E+%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++%3C/table%3E%0D%0A%0D%0A++++++%3Ctable+style+%3D+%22margin-top:75px%3Bfont-family:+Arial%2C+Verdana%2C+sans-serif%22+width+%3D+%22590%22+border+%3D+%220%22cellpadding+%3D+%22-5%22+cellspacing+%3D+%220%22+id+%3D+%22desc%22%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd+colspan+%3D+%222%22+%7B%24valueStyle%7D%3E%0D%0A++++++++++++%3Ctable%3E+%7B%2A+FIXME:+style+this+table+so+that+it+looks+like+the+text+version+%28justification%2C+etc.%29+%2A%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Cth+style+%3D+%22padding-right:28px%3Btext-align:left%3Bfont-weight:bold%3Bwidth:200px%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts%7DDescription%7B/ts%7D%3C/font%3E%3C/th%3E%0D%0A++++++++++++++++%3Cth+style+%3D+%22padding-left:28px%3Btext-align:right%3Bfont-weight:bold%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts%7DQuantity%7B/ts%7D%3C/font%3E%3C/th%3E%0D%0A++++++++++++++++%3Cth+style+%3D+%22padding-left:28px%3Btext-align:right%3Bfont-weight:bold%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts%7DUnit+Price%7B/ts%7D%3C/font%3E%3C/th%3E%0D%0A++++++++++++++++%3Cth+style+%3D+%22padding-left:28px%3Btext-align:right%3Bfont-weight:bold%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7B%24taxTerm%7D+%3C/font%3E%3C/th%3E%0D%0A++++++++++++++++%3Cth+style+%3D+%22padding-left:28px%3Btext-align:right%3Bfont-weight:bold%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts+1%3D%24defaultCurrency%7DAmount+%251%7B/ts%7D%3C/font%3E%3C/th%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7Bforeach+from%3D%24lineItem+item%3Dvalue+key%3Dpriceset+name%3Dpricevalue%7D%0D%0A++++++++++++++%7Bif+%24smarty.foreach.pricevalue.index+eq+0%7D%0D%0A++++++++++++++%3Ctr%3E%3Ctd++colspan+%3D+%225%22+%3E%3Chr+size%3D%223%22+style+%3D+%22color:%23000%3B%22%3E%3C/hr%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++++%7Belse%7D%0D%0A++++++++++++++%3Ctr%3E%3Ctd++colspan+%3D+%225%22+style+%3D+%22color:%23F5F5F5%3B%22%3E%3Chr%3E%3C/hr%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++++%7B/if%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+style+%3D%22text-align:left%3B%22++%3E%3Cfont+size+%3D+%221%22%3E%0D%0A++++++++++++++++%7Bif+%24value.html_type+eq+%27Text%27%7D%7B%24value.label%7D%7Belse%7D%7B%24value.field_title%7D+-+%7B%24value.label%7D%7B/if%7D+%7Bif+%24value.description%7D%3Cdiv%3E%7B%24value.description%7Ctruncate:30:%22...%22%7D%3C/div%3E%7B/if%7D%0D%0A++++++++++++++++%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22%3E+%7B%24value.qty%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22%3E+%7B%24value.unit_price%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%7Bif+%24value.tax_amount+%21%3D+%27%27%7D%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22%3E+%7B%24value.tax_rate%7D%25%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%7Belse%7D%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%22%3E%3Cfont+size+%3D+%221%22+%3E%7Bts+1%3D%24taxTerm%7DNo+%251%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%7B/if%7D%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22+%3E%7B%24value.subTotal%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7B/foreach%7D%0D%0A++++++++++++++%3Ctr%3E%3Ctd++colspan+%3D+%225%22+style+%3D+%22color:%23F5F5F5%3B%22%3E%3Chr%3E%3C/hr%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts%7DSub+Total%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22%3E+%7B%24subTotal%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7Bforeach+from+%3D+%24dataArray+item+%3D+value+key+%3D+priceset%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%7Bif+%24priceset%7D%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22%3E+%7Bts+1%3D%24taxTerm+2%3D%24priceset%7DTOTAL+%251+%252%25%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24value%7CcrmMoney:%24currency%7D%3C/font%3E+%3C/td%3E%0D%0A++++++++++++++++%7Belseif+%24priceset+%3D%3D+0%7D%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7Bts+1%3D%24taxTerm%7DTOTAL+NO+%251%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24value%7CcrmMoney:%24currency%7D%3C/font%3E+%3C/td%3E%0D%0A++++++++++++++++%7B/if%7D%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7B/foreach%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%222%22%3E%3Chr%3E%3C/hr%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cb%3E%3Cfont+size+%3D+%221%22%3E%7Bts+1%3D%24defaultCurrency%7DTOTAL+%251%7B/ts%7D%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7B%24amount%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++%0D%0A++++++++++++++%7Bif+%24is_pay_later+%3D%3D+0%7D%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22+%3E%7Bts%7DLESS+Credit+to+invoice%28s%29%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cfont+size+%3D+%221%22%3E%7B%24amount%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%222%22+%3E%3Chr%3E%3C/hr%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cb%3E%3Cfont+size+%3D+%221%22%3E%7Bts%7DREMAINING+CREDIT%7B/ts%7D%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3Btext-align:right%3B%22%3E%3Cb%3E%3Cfont+size+%3D+%221%22%3E%7B%24amountDue%7CcrmMoney:%24currency%7D%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+style+%3D+%22padding-left:28px%3B%22%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%7B/if%7D%0D%0A++++++++++++++%3Cbr/%3E%3Cbr/%3E%3Cbr/%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%223%22%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++%3C/table%3E%0D%0A++++++++++%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++%3C/table%3E%0D%0A%0D%0A++++++%3Ctable+style+%3D+%22margin-top:5px%3Bpadding-right:45px%3B%22%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd%3E%3Cimg+src+%3D+%22%7B%24resourceBase%7D/i/contribute/cut_line.png%22+height+%3D+%2215%22+width+%3D+%22630%22/%3E%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++%3C/table%3E%0D%0A%0D%0A++++++%3Ctable+style+%3D+%22margin-top:6px%3Bpadding-right:20px%3Bfont-family:+Arial%2C+Verdana%2C+sans-serif%22+width+%3D+%22507%22+border+%3D+%220%22cellpadding+%3D+%22-5%22+cellspacing%3D%2219%22+id+%3D+%22desc%22%3E%0D%0A++++++++%3Ctr%3E%0D%0A++++++++++%3Ctd+width%3D%2260%25%22%3E%3Cfont+size+%3D+%224%22+align+%3D+%22right%22%3E%3Cb%3E%7Bts%7DCREDIT+ADVICE%7B/ts%7D%3C/b%3E%3Cbr/%3E%3Cbr+/%3E%3Cdiv++style%3D%22font-size:10px%3Bmax-width:300px%3B%22%3E%7Bts%7DPlease+do+not+pay+on+this+advice.+Deduct+the+amount+of+this+Credit+Note+from+your+next+payment+to+us%7B/ts%7D%3C/div%3E%3Cbr/%3E%3C/font%3E%3C/td%3E%0D%0A++++++++++%3Ctd+width%3D%2240%25%22%3E%0D%0A++++++++++++%3Ctable++++align%3D%22right%22+%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%222%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22+style%3D%22font-weight:bold%3B%22%3E%7Bts%7DCustomer:%7B/ts%7D+%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22+%3E%7B%24display_name%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%222%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22+style%3D%22font-weight:bold%3B%22%3E%7Bts%7DCredit+Note%23:%7B/ts%7D+%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22%3E%7B%24creditnote_id%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%3Ctd++colspan+%3D+%225%22style+%3D+%22color:%23F5F5F5%3B%22%3E%3Chr%3E%3C/hr%3E%3C/td%3E%3C/tr%3E%0D%0A++++++++++++++%3Ctr%3E%0D%0A++++++++++++++++%3Ctd+colspan+%3D+%222%22%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22+style%3D%22font-weight:bold%3B%22%3E%7Bts%7DCredit+Amount:%7B/ts%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++++%3Ctd+width%3D%2750px%27%3E%3Cfont+size+%3D+%221%22+align+%3D+%22right%22+style%3D%22font-weight:bold%3B%22%3E%7B%24amount%7CcrmMoney:%24currency%7D%3C/font%3E%3C/td%3E%0D%0A++++++++++++++%3C/tr%3E%0D%0A++++++++++++%3C/table%3E%0D%0A++++++++++%3C/td%3E%0D%0A++++++++%3C/tr%3E%0D%0A++++++%3C/table%3E%0D%0A++++++%7B/if%7D%0D%0A++++%3C/center%3E%0D%0A++%3C/body%3E%0D%0A%3C/html%3E */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv = "Content-Type" content="text/html; charset=UTF-8" />
      <title></title>
  </head>
  <body>
    <center>
    <table width = "590"  border = "0" style = "margin-top:2px;">
      <tr>
        <td align = "left">
          <img src = "https://www.gstcouncil.org/media/civicrm/persist/contribute/images/gstc_logo_big.jpg"  width = "220px"/><br/><br/>
        </td>
      </tr>
    </table>

    <table style = "padding-right:19px;font-family: Arial, Verdana, sans-serif;" width = "590" height = "100" border = "0" cellpadding = "2" cellspacing = "1">
      <tr><td colspan ="3" style="text-align: left;"><b><font size = "4" align = "center">{ts}INVOICE{/ts}</font></b></td></tr>
      <tr>
        <td width="30%" style="" valign="top">
          <table>
            <tr><td><font size = "1" align = "center"  type="">{if $organization_name and $membership_owner}{$display_name} ({$organization_name}){else}{$display_name}{/if}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$street_address} {$supplemental_address_1}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$supplemental_address_2}  {$stateProvinceAbbreviation}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$city}  {$postal_code}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$countryAbbreviation}</font></td></tr>
          </table>
        </td>
        <td width="30%" valign="top" align = "right" style="padding-left:5px;">
          <table width="100%">
            <tr><td><b><font size = "1" align = "center" >{ts}Invoice Date:{/ts}</font></b></td></tr>
            <tr><td><font size = "1" align = "center" >{$invoice_date}</font></td></tr>
            <tr><td><b><font size = "1" align = "center" >{ts}Invoice Number:{/ts}</font></b></td></tr>
            <tr><td><font size = "1" align = "center" >{$invoice_id}</font></td></tr>
          </table>
        </td>
        <td width="60%"  valign="top" align = "right">
          <table width="100%">
            <tr><td><font size = "1" align = "right">{$domain_organization}</font></td></tr>
            <tr><td><font size = "1" align = "right">{if $domain_street_address }{$domain_street_address}{/if}
                    {if $domain_supplemental_address_1 }{$domain_supplemental_address_1}{/if}</font></td></tr>
           {if $domain_supplemental_address_2 }<tr><td><font size = "1" align = "right">{$domain_supplemental_address_2}</font></td></tr>{/if}
            <tr><td><font size = "1" align = "right">{if $domain_city}{$domain_city}{/if}{if $domain_state }, {$domain_state}{/if}                     {if $domain_postal_code }{$domain_postal_code}{/if}{if $domain_postal_code_suffix }-{$domain_postal_code_suffix}{/if}</font></td></tr>
            {if $domain_country}<tr><td><font size = "1" align = "right">{$domain_country}</font></td></tr>{/if}
            {if $domain_phone}<tr><td><font size = "1" align = "right">{$domain_phone}</font></td></tr>{/if}
            {if $domain_email}<tr><td><font size = "1" align = "right">{$domain_email}</font></td></tr>{/if}
            <tr><td><font size = "1" align = "right">Corporate ID no. 461050633</font></td></tr>
            <tr><td><font size = "1" align = "right">GSTC is a 501(c)3 tax-exempt organization.</font></td></tr>
           
          </table>
        </td>
      </tr>
     {if $source}<tr><td colspan ="3" style = "padding-top:10px;"><font size = "1"align = "left">{ts}Reference:{/ts} {$source}</font></td></td></tr>{/if}
    </table>
      <table style = "padding-right:19px;margin-top:15px;font-family: Arial, Verdana, sans-serif" width = "590" border = "0"cellpadding = "-5" cellspacing = "0" id = "desc">
        <tr>
          <td colspan = "2" {$valueStyle}>
            <table>
              <tr>
                <th style = "text-align:left; font-weight:bold;width:300px;"><font size = "1">{ts}Description{/ts}</font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{ts}Quantity{/ts}</font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{ts}Unit Price{/ts}</font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{$taxTerm} </font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{ts 1=$defaultCurrency}Amount %1{/ts}</font></th>
              </tr>
              {foreach from=$lineItem item=value key=priceset name=taxpricevalue}
              {if $smarty.foreach.taxpricevalue.index eq 0}
              <tr><td  colspan = "5" ><hr size="3" style = "color:#000;"></hr></td></tr>
              {else}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              {/if}
              <tr>
                <td style="text-align:left;" ><font size = "1">{if $value.html_type eq \'Text\'}{$value.label}{else}{$value.field_title} - {$value.label}{/if}</font></td>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> {$value.qty}</font></td>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> {$value.unit_price|crmMoney:$currency}</font></td>
                {if $value.tax_amount != \'\'}
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> {$value.tax_rate}%</font></td>
                {else}
                <td style="text-align:right;white-space: nowrap;"><font size = "1">{ts 1=$taxTerm}No %1{/ts}</font></td>
                {/if}
                <td style="text-align:right;white-space: nowrap;"><font size = "1">{$value.subTotal|crmMoney:$currency}</font></td>
              </tr>
              {/foreach}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{ts}Sub Total{/ts}</font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"> {$subTotal|crmMoney:$currency}</font></td>
              </tr>
              {foreach from = $dataArray item = value key = priceset}
              <tr>
                <td colspan = "3"></td>
                {if $priceset}
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"> {ts 1=$taxTerm 2=$priceset}TOTAL %1 %2%{/ts}</font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {elseif $priceset == 0}
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{ts 1=$taxTerm}TOTAL NO %1{/ts}</font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {/if}
                </tr>
              {/foreach}
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2"><hr></hr></td>
              </tr>

              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1">{ts 1=$defaultCurrency}TOTAL %1{/ts}</font></b></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>

              {if $is_pay_later == 0}
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;">
                  <font size = "1">
                    {if $contribution_status_id == $refundedStatusId}
                    {ts}LESS Amount Credited{/ts}
                    {else}
                    {ts}LESS Amount Paid{/ts}
                    {/if}
                  </font>
                </td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2" ><hr></hr></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1">{ts}AMOUNT DUE:{/ts} </font></b></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1">{$amountDue|crmMoney:$currency}</font></b></td>
                <td style = ""><font size = "1" align = "right"></font></td>
              </tr>
              {/if}
              
              <tr>
                <td colspan = "3"></td>
              </tr>
              {if $contribution_status_id == $pendingStatusId && $is_pay_later == 1}
              <tr>
                <td style="white-space: nowrap;"><b><font size = "1" align = "center">{ts 1=$dueDate}DUE DATE: %1{/ts}</font></b></td>
                <td colspan = "3"></td>
              </tr>
              {/if}
            </table>
          </td>
        </tr>
      </table>
      {if $contribution_status_id == $pendingStatusId && $is_pay_later == 1}
      <table style = "margin-top:5px;padding-right:45px;margin-left: 50px;">
        <tr>
          <td><img src = "{$resourceBase}/i/contribute/cut_line.png" height = "15" width = "630"/></td>
        </tr>
      </table>
      <table style = "margin-top:6px;padding-right:20px;font-family: Arial, Verdana, sans-serif" width = "480" border = "0"cellpadding = "-5" cellspacing="19" id = "desc">
        <tr>
          <td width="60%">
            <b>
              <font size = "4" align = "right">{ts}PAYMENT ADVICE{/ts}</font>
            </b> <br/><br/>
            <font size = "1" align = "right"><b>{ts}To: {/ts}</b>
              <div style="text-align: left;width:17em;word-wrap:break-word;">
                {$domain_organization} <br />
                {$domain_street_address} {$domain_supplemental_address_1} <br />
                {$domain_supplemental_address_2} {$domain_state} <br />
                {$domain_city} {$domain_postal_code} <br />
                {$domain_country} <br />
                {$domain_phone} <br />
                {$domain_email}
              </div>
            </font>
            <br/><br/>
            <font size="1" align="right">{$notes}</font>
          </td>
          <td width="40%">
            <table  cellpadding = "-10" cellspacing = "22"  align="right" >
              <tr>
                <td  colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Customer: {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right">{$display_name}</font></td>
              </tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Invoice Number: {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right">{$invoice_id}</font></td>
              </tr>
              <tr><td  colspan = "5"style = "color:#F5F5F5;"><hr></hr></td></tr>
              {if $is_pay_later == 1}
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{ts}Amount Due:{/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{$amount|crmMoney:$currency}</font></td>
              </tr>
              {else}
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{ts}Amount Due: {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{$amountDue|crmMoney:$currency}</font></td>
              </tr>
              {/if}
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{ts}Due Date:  {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right">{$dueDate}</font></td>
              </tr>
              <tr>
                <td colspan = "5" style = "color:#F5F5F5;"><hr></hr></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      {/if}

      {if $contribution_status_id == $refundedStatusId || $contribution_status_id == $cancelledStatusId}
      <table style = "margin-top:2px;padding-left:7px;page-break-before: always;">
        <tr>
          <td><img src = "{$resourceBase}/i/civi99.png" height = "34px" width = "99px"/></td>
        </tr>
      </table>

      <table style = "font-family: Arial, Verdana, sans-serif" width = "500" height = "100" border = "0" cellpadding = "2" cellspacing = "1">
        <tr>
          <td style = "padding-left:15px;" ><b><font size = "4" align = "center">{ts}CREDIT NOTE{/ts}</font></b></td>
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><b><font size = "1" align = "right">{ts}Date:{/ts}</font></b></td>
          <td><font size = "1" align = "right">{$domain_organization}</font></td>
        </tr>
        <tr>
          {if $organization_name}
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$display_name}  ({$organization_name})</font></td>
           {else}
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$display_name}</font></td>
          {/if}
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><font size = "1" align = "right">{$invoice_date}</font></td>
          <td ><font size = "1" align = "right">
          {if $domain_street_address }
            {$domain_street_address}
          {/if}
          {if $domain_supplemental_address_1 }
            {$domain_supplemental_address_1}
          {/if}</font></td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$street_address}   {$supplemental_address_1}</font></td>
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><b><font size = "1" align = "right">{ts}Credit Note Number:{/ts}</font></b></td>
          <td><font size = "1" align = "right">{if $domain_supplemental_address_2 }
            {$domain_supplemental_address_2}
            {/if}
            {if $domain_state }
            {$domain_state}
            {/if}
            </font>
          </td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$supplemental_address_2}  {$stateProvinceAbbreviation}</font></td>
          <td colspan="1"></td>
          <td style = "padding-left:70px;"><font size = "1" align = "right">{$creditnote_id}</font></td>
          <td ><font size = "1" align = "right">{if $domain_city}
           {$domain_city}
               {/if}
               {if $domain_postal_code }
           {$domain_postal_code}
               {/if}
          </font></td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "right">{$city}  {$postal_code}</font></td>
          <td colspan="1"></td>
          <td height = "10" style = "padding-left:70px;"><b><font size = "1"align = "right">{ts}Reference:{/ts}</font></b></td>
          <td><font size = "1" align = "right"> {if $domain_country}
          {$domain_country}
              {/if}</font></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td style = "padding-left:70px;"><font size = "1"align = "right">{$source}</font></td>
          <td><font size = "1" align = "right"> {if $domain_phone}
          {$domain_phone}
               {/if}</font> </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><font size = "1" align = "right"> {if $domain_email}
          {$domain_email}
          {/if}</font> </td>
        </tr>
      </table>

      <table style = "margin-top:75px;font-family: Arial, Verdana, sans-serif" width = "590" border = "0"cellpadding = "-5" cellspacing = "0" id = "desc">
        <tr>
          <td colspan = "2" {$valueStyle}>
            <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
              <tr>
                <th style = "padding-right:28px;text-align:left;font-weight:bold;width:200px;"><font size = "1">{ts}Description{/ts}</font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{ts}Quantity{/ts}</font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{ts}Unit Price{/ts}</font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{$taxTerm} </font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{ts 1=$defaultCurrency}Amount %1{/ts}</font></th>
              </tr>
              {foreach from=$lineItem item=value key=priceset name=pricevalue}
              {if $smarty.foreach.pricevalue.index eq 0}
              <tr><td  colspan = "5" ><hr size="3" style = "color:#000;"></hr></td></tr>
              {else}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              {/if}
              <tr>
                <td style ="text-align:left;"  ><font size = "1">
                {if $value.html_type eq \'Text\'}{$value.label}{else}{$value.field_title} - {$value.label}{/if} {if $value.description}<div>{$value.description|truncate:30:"..."}</div>{/if}
                </font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$value.qty}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$value.unit_price|crmMoney:$currency}</font></td>
                {if $value.tax_amount != \'\'}
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$value.tax_rate}%</font></td>
                {else}
                <td style = "padding-left:28px;text-align:right"><font size = "1" >{ts 1=$taxTerm}No %1{/ts}</font></td>
                {/if}
                <td style = "padding-left:28px;text-align:right;"><font size = "1" >{$value.subTotal|crmMoney:$currency}</font></td>
              </tr>
              {/foreach}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{ts}Sub Total{/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$subTotal|crmMoney:$currency}</font></td>
              </tr>
              {foreach from = $dataArray item = value key = priceset}
              <tr>
                <td colspan = "3"></td>
                {if $priceset}
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {ts 1=$taxTerm 2=$priceset}TOTAL %1 %2%{/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {elseif $priceset == 0}
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{ts 1=$taxTerm}TOTAL NO %1{/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {/if}
              </tr>
              {/foreach}
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2"><hr></hr></td>
              </tr>
  
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1">{ts 1=$defaultCurrency}TOTAL %1{/ts}</font></b></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>
  
              {if $is_pay_later == 0}
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" >{ts}LESS Credit to invoice(s){/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2" ><hr></hr></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1">{ts}REMAINING CREDIT{/ts}</font></b></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1">{$amountDue|crmMoney:$currency}</font></b></td>
                <td style = "padding-left:28px;"><font size = "1" align = "right"></font></td>
              </tr>
              {/if}
              <br/><br/><br/>
              <tr>
                <td colspan = "3"></td>
              </tr>
              <tr>
                <td></td>
                <td colspan = "3"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

      <table style = "margin-top:5px;padding-right:45px;">
        <tr>
          <td><img src = "{$resourceBase}/i/contribute/cut_line.png" height = "15" width = "630"/></td>
        </tr>
      </table>

      <table style = "margin-top:6px;padding-right:20px;font-family: Arial, Verdana, sans-serif" width = "507" border = "0"cellpadding = "-5" cellspacing="19" id = "desc">
        <tr>
          <td width="60%"><font size = "4" align = "right"><b>{ts}CREDIT ADVICE{/ts}</b><br/><br /><div  style="font-size:10px;max-width:300px;">{ts}Please do not pay on this advice. Deduct the amount of this Credit Note from your next payment to us{/ts}</div><br/></font></td>
          <td width="40%">
            <table    align="right" >
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Customer:{/ts} </font></td>
                <td><font size = "1" align = "right" >{$display_name}</font></td>
              </tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Credit Note#:{/ts} </font></td>
                <td><font size = "1" align = "right">{$creditnote_id}</font></td>
              </tr>
              <tr><td  colspan = "5"style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Credit Amount:{/ts}</font></td>
                <td width=\'50px\'><font size = "1" align = "right" style="font-weight:bold;">{$amount|crmMoney:$currency}</font></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      {/if}
    </center>
  </body>
</html>', 1, false),array('block', 'ts', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv = "Content-Type" content="text/html; charset=UTF-8" />
      <title></title>
  </head>
  <body>
    <center>
    <table width = "590"  border = "0" style = "margin-top:2px;">
      <tr>
        <td align = "left">
          <img src = "https://www.gstcouncil.org/media/civicrm/persist/contribute/images/gstc_logo_big.jpg"  width = "220px"/><br/><br/>
        </td>
      </tr>
    </table>

    <table style = "padding-right:19px;font-family: Arial, Verdana, sans-serif;" width = "590" height = "100" border = "0" cellpadding = "2" cellspacing = "1">
      <tr><td colspan ="3" style="text-align: left;"><b><font size = "4" align = "center">{ts}INVOICE{/ts}</font></b></td></tr>
      <tr>
        <td width="30%" style="" valign="top">
          <table>
            <tr><td><font size = "1" align = "center"  type="">{if $organization_name and $membership_owner}{$display_name} ({$organization_name}){else}{$display_name}{/if}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$street_address} {$supplemental_address_1}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$supplemental_address_2}  {$stateProvinceAbbreviation}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$city}  {$postal_code}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$countryAbbreviation}</font></td></tr>
          </table>
        </td>
        <td width="30%" valign="top" align = "right" style="padding-left:5px;">
          <table width="100%">
            <tr><td><b><font size = "1" align = "center" >{ts}Invoice Date:{/ts}</font></b></td></tr>
            <tr><td><font size = "1" align = "center" >{$invoice_date}</font></td></tr>
            <tr><td><b><font size = "1" align = "center" >{ts}Invoice Number:{/ts}</font></b></td></tr>
            <tr><td><font size = "1" align = "center" >{$invoice_id}</font></td></tr>
          </table>
        </td>
        <td width="60%"  valign="top" align = "right">
          <table width="100%">
            <tr><td><font size = "1" align = "right">{$domain_organization}</font></td></tr>
            <tr><td><font size = "1" align = "right">{if $domain_street_address }{$domain_street_address}{/if}
                    {if $domain_supplemental_address_1 }{$domain_supplemental_address_1}{/if}</font></td></tr>
           {if $domain_supplemental_address_2 }<tr><td><font size = "1" align = "right">{$domain_supplemental_address_2}</font></td></tr>{/if}
            <tr><td><font size = "1" align = "right">{if $domain_city}{$domain_city}{/if}{if $domain_state }, {$domain_state}{/if}                     {if $domain_postal_code }{$domain_postal_code}{/if}{if $domain_postal_code_suffix }-{$domain_postal_code_suffix}{/if}</font></td></tr>
            {if $domain_country}<tr><td><font size = "1" align = "right">{$domain_country}</font></td></tr>{/if}
            {if $domain_phone}<tr><td><font size = "1" align = "right">{$domain_phone}</font></td></tr>{/if}
            {if $domain_email}<tr><td><font size = "1" align = "right">{$domain_email}</font></td></tr>{/if}
            <tr><td><font size = "1" align = "right">Corporate ID no. 461050633</font></td></tr>
            <tr><td><font size = "1" align = "right">GSTC is a 501(c)3 tax-exempt organization.</font></td></tr>
           
          </table>
        </td>
      </tr>
     {if $source}<tr><td colspan ="3" style = "padding-top:10px;"><font size = "1"align = "left">{ts}Reference:{/ts} {$source}</font></td></td></tr>{/if}
    </table>
      <table style = "padding-right:19px;margin-top:15px;font-family: Arial, Verdana, sans-serif" width = "590" border = "0"cellpadding = "-5" cellspacing = "0" id = "desc">
        <tr>
          <td colspan = "2" {$valueStyle}>
            <table>
              <tr>
                <th style = "text-align:left; font-weight:bold;width:300px;"><font size = "1">{ts}Description{/ts}</font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{ts}Quantity{/ts}</font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{ts}Unit Price{/ts}</font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{$taxTerm} </font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{ts 1=$defaultCurrency}Amount %1{/ts}</font></th>
              </tr>
              {foreach from=$lineItem item=value key=priceset name=taxpricevalue}
              {if $smarty.foreach.taxpricevalue.index eq 0}
              <tr><td  colspan = "5" ><hr size="3" style = "color:#000;"></hr></td></tr>
              {else}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              {/if}
              <tr>
                <td style="text-align:left;" ><font size = "1">{if $value.html_type eq \'Text\'}{$value.label}{else}{$value.field_title} - {$value.label}{/if}</font></td>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> {$value.qty}</font></td>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> {$value.unit_price|crmMoney:$currency}</font></td>
                {if $value.tax_amount != \'\'}
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> {$value.tax_rate}%</font></td>
                {else}
                <td style="text-align:right;white-space: nowrap;"><font size = "1">{ts 1=$taxTerm}No %1{/ts}</font></td>
                {/if}
                <td style="text-align:right;white-space: nowrap;"><font size = "1">{$value.subTotal|crmMoney:$currency}</font></td>
              </tr>
              {/foreach}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{ts}Sub Total{/ts}</font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"> {$subTotal|crmMoney:$currency}</font></td>
              </tr>
              {foreach from = $dataArray item = value key = priceset}
              <tr>
                <td colspan = "3"></td>
                {if $priceset}
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"> {ts 1=$taxTerm 2=$priceset}TOTAL %1 %2%{/ts}</font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {elseif $priceset == 0}
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{ts 1=$taxTerm}TOTAL NO %1{/ts}</font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {/if}
                </tr>
              {/foreach}
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2"><hr></hr></td>
              </tr>

              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1">{ts 1=$defaultCurrency}TOTAL %1{/ts}</font></b></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>

              {if $is_pay_later == 0}
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;">
                  <font size = "1">
                    {if $contribution_status_id == $refundedStatusId}
                    {ts}LESS Amount Credited{/ts}
                    {else}
                    {ts}LESS Amount Paid{/ts}
                    {/if}
                  </font>
                </td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2" ><hr></hr></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1">{ts}AMOUNT DUE:{/ts} </font></b></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1">{$amountDue|crmMoney:$currency}</font></b></td>
                <td style = ""><font size = "1" align = "right"></font></td>
              </tr>
              {/if}
              
              <tr>
                <td colspan = "3"></td>
              </tr>
              {if $contribution_status_id == $pendingStatusId && $is_pay_later == 1}
              <tr>
                <td style="white-space: nowrap;"><b><font size = "1" align = "center">{ts 1=$dueDate}DUE DATE: %1{/ts}</font></b></td>
                <td colspan = "3"></td>
              </tr>
              {/if}
            </table>
          </td>
        </tr>
      </table>
      {if $contribution_status_id == $pendingStatusId && $is_pay_later == 1}
      <table style = "margin-top:5px;padding-right:45px;margin-left: 50px;">
        <tr>
          <td><img src = "{$resourceBase}/i/contribute/cut_line.png" height = "15" width = "630"/></td>
        </tr>
      </table>
      <table style = "margin-top:6px;padding-right:20px;font-family: Arial, Verdana, sans-serif" width = "480" border = "0"cellpadding = "-5" cellspacing="19" id = "desc">
        <tr>
          <td width="60%">
            <b>
              <font size = "4" align = "right">{ts}PAYMENT ADVICE{/ts}</font>
            </b> <br/><br/>
            <font size = "1" align = "right"><b>{ts}To: {/ts}</b>
              <div style="text-align: left;width:17em;word-wrap:break-word;">
                {$domain_organization} <br />
                {$domain_street_address} {$domain_supplemental_address_1} <br />
                {$domain_supplemental_address_2} {$domain_state} <br />
                {$domain_city} {$domain_postal_code} <br />
                {$domain_country} <br />
                {$domain_phone} <br />
                {$domain_email}
              </div>
            </font>
            <br/><br/>
            <font size="1" align="right">{$notes}</font>
          </td>
          <td width="40%">
            <table  cellpadding = "-10" cellspacing = "22"  align="right" >
              <tr>
                <td  colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Customer: {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right">{$display_name}</font></td>
              </tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Invoice Number: {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right">{$invoice_id}</font></td>
              </tr>
              <tr><td  colspan = "5"style = "color:#F5F5F5;"><hr></hr></td></tr>
              {if $is_pay_later == 1}
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{ts}Amount Due:{/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{$amount|crmMoney:$currency}</font></td>
              </tr>
              {else}
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{ts}Amount Due: {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{$amountDue|crmMoney:$currency}</font></td>
              </tr>
              {/if}
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{ts}Due Date:  {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right">{$dueDate}</font></td>
              </tr>
              <tr>
                <td colspan = "5" style = "color:#F5F5F5;"><hr></hr></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      {/if}

      {if $contribution_status_id == $refundedStatusId || $contribution_status_id == $cancelledStatusId}
      <table style = "margin-top:2px;padding-left:7px;page-break-before: always;">
        <tr>
          <td><img src = "{$resourceBase}/i/civi99.png" height = "34px" width = "99px"/></td>
        </tr>
      </table>

      <table style = "font-family: Arial, Verdana, sans-serif" width = "500" height = "100" border = "0" cellpadding = "2" cellspacing = "1">
        <tr>
          <td style = "padding-left:15px;" ><b><font size = "4" align = "center">{ts}CREDIT NOTE{/ts}</font></b></td>
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><b><font size = "1" align = "right">{ts}Date:{/ts}</font></b></td>
          <td><font size = "1" align = "right">{$domain_organization}</font></td>
        </tr>
        <tr>
          {if $organization_name}
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$display_name}  ({$organization_name})</font></td>
           {else}
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$display_name}</font></td>
          {/if}
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><font size = "1" align = "right">{$invoice_date}</font></td>
          <td ><font size = "1" align = "right">
          {if $domain_street_address }
            {$domain_street_address}
          {/if}
          {if $domain_supplemental_address_1 }
            {$domain_supplemental_address_1}
          {/if}</font></td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$street_address}   {$supplemental_address_1}</font></td>
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><b><font size = "1" align = "right">{ts}Credit Note Number:{/ts}</font></b></td>
          <td><font size = "1" align = "right">{if $domain_supplemental_address_2 }
            {$domain_supplemental_address_2}
            {/if}
            {if $domain_state }
            {$domain_state}
            {/if}
            </font>
          </td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$supplemental_address_2}  {$stateProvinceAbbreviation}</font></td>
          <td colspan="1"></td>
          <td style = "padding-left:70px;"><font size = "1" align = "right">{$creditnote_id}</font></td>
          <td ><font size = "1" align = "right">{if $domain_city}
           {$domain_city}
               {/if}
               {if $domain_postal_code }
           {$domain_postal_code}
               {/if}
          </font></td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "right">{$city}  {$postal_code}</font></td>
          <td colspan="1"></td>
          <td height = "10" style = "padding-left:70px;"><b><font size = "1"align = "right">{ts}Reference:{/ts}</font></b></td>
          <td><font size = "1" align = "right"> {if $domain_country}
          {$domain_country}
              {/if}</font></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td style = "padding-left:70px;"><font size = "1"align = "right">{$source}</font></td>
          <td><font size = "1" align = "right"> {if $domain_phone}
          {$domain_phone}
               {/if}</font> </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><font size = "1" align = "right"> {if $domain_email}
          {$domain_email}
          {/if}</font> </td>
        </tr>
      </table>

      <table style = "margin-top:75px;font-family: Arial, Verdana, sans-serif" width = "590" border = "0"cellpadding = "-5" cellspacing = "0" id = "desc">
        <tr>
          <td colspan = "2" {$valueStyle}>
            <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
              <tr>
                <th style = "padding-right:28px;text-align:left;font-weight:bold;width:200px;"><font size = "1">{ts}Description{/ts}</font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{ts}Quantity{/ts}</font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{ts}Unit Price{/ts}</font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{$taxTerm} </font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{ts 1=$defaultCurrency}Amount %1{/ts}</font></th>
              </tr>
              {foreach from=$lineItem item=value key=priceset name=pricevalue}
              {if $smarty.foreach.pricevalue.index eq 0}
              <tr><td  colspan = "5" ><hr size="3" style = "color:#000;"></hr></td></tr>
              {else}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              {/if}
              <tr>
                <td style ="text-align:left;"  ><font size = "1">
                {if $value.html_type eq \'Text\'}{$value.label}{else}{$value.field_title} - {$value.label}{/if} {if $value.description}<div>{$value.description|truncate:30:"..."}</div>{/if}
                </font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$value.qty}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$value.unit_price|crmMoney:$currency}</font></td>
                {if $value.tax_amount != \'\'}
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$value.tax_rate}%</font></td>
                {else}
                <td style = "padding-left:28px;text-align:right"><font size = "1" >{ts 1=$taxTerm}No %1{/ts}</font></td>
                {/if}
                <td style = "padding-left:28px;text-align:right;"><font size = "1" >{$value.subTotal|crmMoney:$currency}</font></td>
              </tr>
              {/foreach}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{ts}Sub Total{/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$subTotal|crmMoney:$currency}</font></td>
              </tr>
              {foreach from = $dataArray item = value key = priceset}
              <tr>
                <td colspan = "3"></td>
                {if $priceset}
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {ts 1=$taxTerm 2=$priceset}TOTAL %1 %2%{/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {elseif $priceset == 0}
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{ts 1=$taxTerm}TOTAL NO %1{/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {/if}
              </tr>
              {/foreach}
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2"><hr></hr></td>
              </tr>
  
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1">{ts 1=$defaultCurrency}TOTAL %1{/ts}</font></b></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>
  
              {if $is_pay_later == 0}
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" >{ts}LESS Credit to invoice(s){/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2" ><hr></hr></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1">{ts}REMAINING CREDIT{/ts}</font></b></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1">{$amountDue|crmMoney:$currency}</font></b></td>
                <td style = "padding-left:28px;"><font size = "1" align = "right"></font></td>
              </tr>
              {/if}
              <br/><br/><br/>
              <tr>
                <td colspan = "3"></td>
              </tr>
              <tr>
                <td></td>
                <td colspan = "3"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

      <table style = "margin-top:5px;padding-right:45px;">
        <tr>
          <td><img src = "{$resourceBase}/i/contribute/cut_line.png" height = "15" width = "630"/></td>
        </tr>
      </table>

      <table style = "margin-top:6px;padding-right:20px;font-family: Arial, Verdana, sans-serif" width = "507" border = "0"cellpadding = "-5" cellspacing="19" id = "desc">
        <tr>
          <td width="60%"><font size = "4" align = "right"><b>{ts}CREDIT ADVICE{/ts}</b><br/><br /><div  style="font-size:10px;max-width:300px;">{ts}Please do not pay on this advice. Deduct the amount of this Credit Note from your next payment to us{/ts}</div><br/></font></td>
          <td width="40%">
            <table    align="right" >
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Customer:{/ts} </font></td>
                <td><font size = "1" align = "right" >{$display_name}</font></td>
              </tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Credit Note#:{/ts} </font></td>
                <td><font size = "1" align = "right">{$creditnote_id}</font></td>
              </tr>
              <tr><td  colspan = "5"style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Credit Amount:{/ts}</font></td>
                <td width=\'50px\'><font size = "1" align = "right" style="font-weight:bold;">{$amount|crmMoney:$currency}</font></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      {/if}
    </center>
  </body>
</html>', 18, false),array('modifier', 'crmMoney', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv = "Content-Type" content="text/html; charset=UTF-8" />
      <title></title>
  </head>
  <body>
    <center>
    <table width = "590"  border = "0" style = "margin-top:2px;">
      <tr>
        <td align = "left">
          <img src = "https://www.gstcouncil.org/media/civicrm/persist/contribute/images/gstc_logo_big.jpg"  width = "220px"/><br/><br/>
        </td>
      </tr>
    </table>

    <table style = "padding-right:19px;font-family: Arial, Verdana, sans-serif;" width = "590" height = "100" border = "0" cellpadding = "2" cellspacing = "1">
      <tr><td colspan ="3" style="text-align: left;"><b><font size = "4" align = "center">{ts}INVOICE{/ts}</font></b></td></tr>
      <tr>
        <td width="30%" style="" valign="top">
          <table>
            <tr><td><font size = "1" align = "center"  type="">{if $organization_name and $membership_owner}{$display_name} ({$organization_name}){else}{$display_name}{/if}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$street_address} {$supplemental_address_1}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$supplemental_address_2}  {$stateProvinceAbbreviation}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$city}  {$postal_code}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$countryAbbreviation}</font></td></tr>
          </table>
        </td>
        <td width="30%" valign="top" align = "right" style="padding-left:5px;">
          <table width="100%">
            <tr><td><b><font size = "1" align = "center" >{ts}Invoice Date:{/ts}</font></b></td></tr>
            <tr><td><font size = "1" align = "center" >{$invoice_date}</font></td></tr>
            <tr><td><b><font size = "1" align = "center" >{ts}Invoice Number:{/ts}</font></b></td></tr>
            <tr><td><font size = "1" align = "center" >{$invoice_id}</font></td></tr>
          </table>
        </td>
        <td width="60%"  valign="top" align = "right">
          <table width="100%">
            <tr><td><font size = "1" align = "right">{$domain_organization}</font></td></tr>
            <tr><td><font size = "1" align = "right">{if $domain_street_address }{$domain_street_address}{/if}
                    {if $domain_supplemental_address_1 }{$domain_supplemental_address_1}{/if}</font></td></tr>
           {if $domain_supplemental_address_2 }<tr><td><font size = "1" align = "right">{$domain_supplemental_address_2}</font></td></tr>{/if}
            <tr><td><font size = "1" align = "right">{if $domain_city}{$domain_city}{/if}{if $domain_state }, {$domain_state}{/if}                     {if $domain_postal_code }{$domain_postal_code}{/if}{if $domain_postal_code_suffix }-{$domain_postal_code_suffix}{/if}</font></td></tr>
            {if $domain_country}<tr><td><font size = "1" align = "right">{$domain_country}</font></td></tr>{/if}
            {if $domain_phone}<tr><td><font size = "1" align = "right">{$domain_phone}</font></td></tr>{/if}
            {if $domain_email}<tr><td><font size = "1" align = "right">{$domain_email}</font></td></tr>{/if}
            <tr><td><font size = "1" align = "right">Corporate ID no. 461050633</font></td></tr>
            <tr><td><font size = "1" align = "right">GSTC is a 501(c)3 tax-exempt organization.</font></td></tr>
           
          </table>
        </td>
      </tr>
     {if $source}<tr><td colspan ="3" style = "padding-top:10px;"><font size = "1"align = "left">{ts}Reference:{/ts} {$source}</font></td></td></tr>{/if}
    </table>
      <table style = "padding-right:19px;margin-top:15px;font-family: Arial, Verdana, sans-serif" width = "590" border = "0"cellpadding = "-5" cellspacing = "0" id = "desc">
        <tr>
          <td colspan = "2" {$valueStyle}>
            <table>
              <tr>
                <th style = "text-align:left; font-weight:bold;width:300px;"><font size = "1">{ts}Description{/ts}</font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{ts}Quantity{/ts}</font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{ts}Unit Price{/ts}</font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{$taxTerm} </font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{ts 1=$defaultCurrency}Amount %1{/ts}</font></th>
              </tr>
              {foreach from=$lineItem item=value key=priceset name=taxpricevalue}
              {if $smarty.foreach.taxpricevalue.index eq 0}
              <tr><td  colspan = "5" ><hr size="3" style = "color:#000;"></hr></td></tr>
              {else}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              {/if}
              <tr>
                <td style="text-align:left;" ><font size = "1">{if $value.html_type eq \'Text\'}{$value.label}{else}{$value.field_title} - {$value.label}{/if}</font></td>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> {$value.qty}</font></td>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> {$value.unit_price|crmMoney:$currency}</font></td>
                {if $value.tax_amount != \'\'}
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> {$value.tax_rate}%</font></td>
                {else}
                <td style="text-align:right;white-space: nowrap;"><font size = "1">{ts 1=$taxTerm}No %1{/ts}</font></td>
                {/if}
                <td style="text-align:right;white-space: nowrap;"><font size = "1">{$value.subTotal|crmMoney:$currency}</font></td>
              </tr>
              {/foreach}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{ts}Sub Total{/ts}</font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"> {$subTotal|crmMoney:$currency}</font></td>
              </tr>
              {foreach from = $dataArray item = value key = priceset}
              <tr>
                <td colspan = "3"></td>
                {if $priceset}
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"> {ts 1=$taxTerm 2=$priceset}TOTAL %1 %2%{/ts}</font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {elseif $priceset == 0}
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{ts 1=$taxTerm}TOTAL NO %1{/ts}</font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {/if}
                </tr>
              {/foreach}
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2"><hr></hr></td>
              </tr>

              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1">{ts 1=$defaultCurrency}TOTAL %1{/ts}</font></b></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>

              {if $is_pay_later == 0}
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;">
                  <font size = "1">
                    {if $contribution_status_id == $refundedStatusId}
                    {ts}LESS Amount Credited{/ts}
                    {else}
                    {ts}LESS Amount Paid{/ts}
                    {/if}
                  </font>
                </td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2" ><hr></hr></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1">{ts}AMOUNT DUE:{/ts} </font></b></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1">{$amountDue|crmMoney:$currency}</font></b></td>
                <td style = ""><font size = "1" align = "right"></font></td>
              </tr>
              {/if}
              
              <tr>
                <td colspan = "3"></td>
              </tr>
              {if $contribution_status_id == $pendingStatusId && $is_pay_later == 1}
              <tr>
                <td style="white-space: nowrap;"><b><font size = "1" align = "center">{ts 1=$dueDate}DUE DATE: %1{/ts}</font></b></td>
                <td colspan = "3"></td>
              </tr>
              {/if}
            </table>
          </td>
        </tr>
      </table>
      {if $contribution_status_id == $pendingStatusId && $is_pay_later == 1}
      <table style = "margin-top:5px;padding-right:45px;margin-left: 50px;">
        <tr>
          <td><img src = "{$resourceBase}/i/contribute/cut_line.png" height = "15" width = "630"/></td>
        </tr>
      </table>
      <table style = "margin-top:6px;padding-right:20px;font-family: Arial, Verdana, sans-serif" width = "480" border = "0"cellpadding = "-5" cellspacing="19" id = "desc">
        <tr>
          <td width="60%">
            <b>
              <font size = "4" align = "right">{ts}PAYMENT ADVICE{/ts}</font>
            </b> <br/><br/>
            <font size = "1" align = "right"><b>{ts}To: {/ts}</b>
              <div style="text-align: left;width:17em;word-wrap:break-word;">
                {$domain_organization} <br />
                {$domain_street_address} {$domain_supplemental_address_1} <br />
                {$domain_supplemental_address_2} {$domain_state} <br />
                {$domain_city} {$domain_postal_code} <br />
                {$domain_country} <br />
                {$domain_phone} <br />
                {$domain_email}
              </div>
            </font>
            <br/><br/>
            <font size="1" align="right">{$notes}</font>
          </td>
          <td width="40%">
            <table  cellpadding = "-10" cellspacing = "22"  align="right" >
              <tr>
                <td  colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Customer: {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right">{$display_name}</font></td>
              </tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Invoice Number: {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right">{$invoice_id}</font></td>
              </tr>
              <tr><td  colspan = "5"style = "color:#F5F5F5;"><hr></hr></td></tr>
              {if $is_pay_later == 1}
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{ts}Amount Due:{/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{$amount|crmMoney:$currency}</font></td>
              </tr>
              {else}
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{ts}Amount Due: {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{$amountDue|crmMoney:$currency}</font></td>
              </tr>
              {/if}
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{ts}Due Date:  {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right">{$dueDate}</font></td>
              </tr>
              <tr>
                <td colspan = "5" style = "color:#F5F5F5;"><hr></hr></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      {/if}

      {if $contribution_status_id == $refundedStatusId || $contribution_status_id == $cancelledStatusId}
      <table style = "margin-top:2px;padding-left:7px;page-break-before: always;">
        <tr>
          <td><img src = "{$resourceBase}/i/civi99.png" height = "34px" width = "99px"/></td>
        </tr>
      </table>

      <table style = "font-family: Arial, Verdana, sans-serif" width = "500" height = "100" border = "0" cellpadding = "2" cellspacing = "1">
        <tr>
          <td style = "padding-left:15px;" ><b><font size = "4" align = "center">{ts}CREDIT NOTE{/ts}</font></b></td>
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><b><font size = "1" align = "right">{ts}Date:{/ts}</font></b></td>
          <td><font size = "1" align = "right">{$domain_organization}</font></td>
        </tr>
        <tr>
          {if $organization_name}
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$display_name}  ({$organization_name})</font></td>
           {else}
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$display_name}</font></td>
          {/if}
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><font size = "1" align = "right">{$invoice_date}</font></td>
          <td ><font size = "1" align = "right">
          {if $domain_street_address }
            {$domain_street_address}
          {/if}
          {if $domain_supplemental_address_1 }
            {$domain_supplemental_address_1}
          {/if}</font></td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$street_address}   {$supplemental_address_1}</font></td>
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><b><font size = "1" align = "right">{ts}Credit Note Number:{/ts}</font></b></td>
          <td><font size = "1" align = "right">{if $domain_supplemental_address_2 }
            {$domain_supplemental_address_2}
            {/if}
            {if $domain_state }
            {$domain_state}
            {/if}
            </font>
          </td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$supplemental_address_2}  {$stateProvinceAbbreviation}</font></td>
          <td colspan="1"></td>
          <td style = "padding-left:70px;"><font size = "1" align = "right">{$creditnote_id}</font></td>
          <td ><font size = "1" align = "right">{if $domain_city}
           {$domain_city}
               {/if}
               {if $domain_postal_code }
           {$domain_postal_code}
               {/if}
          </font></td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "right">{$city}  {$postal_code}</font></td>
          <td colspan="1"></td>
          <td height = "10" style = "padding-left:70px;"><b><font size = "1"align = "right">{ts}Reference:{/ts}</font></b></td>
          <td><font size = "1" align = "right"> {if $domain_country}
          {$domain_country}
              {/if}</font></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td style = "padding-left:70px;"><font size = "1"align = "right">{$source}</font></td>
          <td><font size = "1" align = "right"> {if $domain_phone}
          {$domain_phone}
               {/if}</font> </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><font size = "1" align = "right"> {if $domain_email}
          {$domain_email}
          {/if}</font> </td>
        </tr>
      </table>

      <table style = "margin-top:75px;font-family: Arial, Verdana, sans-serif" width = "590" border = "0"cellpadding = "-5" cellspacing = "0" id = "desc">
        <tr>
          <td colspan = "2" {$valueStyle}>
            <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
              <tr>
                <th style = "padding-right:28px;text-align:left;font-weight:bold;width:200px;"><font size = "1">{ts}Description{/ts}</font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{ts}Quantity{/ts}</font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{ts}Unit Price{/ts}</font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{$taxTerm} </font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{ts 1=$defaultCurrency}Amount %1{/ts}</font></th>
              </tr>
              {foreach from=$lineItem item=value key=priceset name=pricevalue}
              {if $smarty.foreach.pricevalue.index eq 0}
              <tr><td  colspan = "5" ><hr size="3" style = "color:#000;"></hr></td></tr>
              {else}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              {/if}
              <tr>
                <td style ="text-align:left;"  ><font size = "1">
                {if $value.html_type eq \'Text\'}{$value.label}{else}{$value.field_title} - {$value.label}{/if} {if $value.description}<div>{$value.description|truncate:30:"..."}</div>{/if}
                </font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$value.qty}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$value.unit_price|crmMoney:$currency}</font></td>
                {if $value.tax_amount != \'\'}
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$value.tax_rate}%</font></td>
                {else}
                <td style = "padding-left:28px;text-align:right"><font size = "1" >{ts 1=$taxTerm}No %1{/ts}</font></td>
                {/if}
                <td style = "padding-left:28px;text-align:right;"><font size = "1" >{$value.subTotal|crmMoney:$currency}</font></td>
              </tr>
              {/foreach}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{ts}Sub Total{/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$subTotal|crmMoney:$currency}</font></td>
              </tr>
              {foreach from = $dataArray item = value key = priceset}
              <tr>
                <td colspan = "3"></td>
                {if $priceset}
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {ts 1=$taxTerm 2=$priceset}TOTAL %1 %2%{/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {elseif $priceset == 0}
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{ts 1=$taxTerm}TOTAL NO %1{/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {/if}
              </tr>
              {/foreach}
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2"><hr></hr></td>
              </tr>
  
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1">{ts 1=$defaultCurrency}TOTAL %1{/ts}</font></b></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>
  
              {if $is_pay_later == 0}
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" >{ts}LESS Credit to invoice(s){/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2" ><hr></hr></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1">{ts}REMAINING CREDIT{/ts}</font></b></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1">{$amountDue|crmMoney:$currency}</font></b></td>
                <td style = "padding-left:28px;"><font size = "1" align = "right"></font></td>
              </tr>
              {/if}
              <br/><br/><br/>
              <tr>
                <td colspan = "3"></td>
              </tr>
              <tr>
                <td></td>
                <td colspan = "3"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

      <table style = "margin-top:5px;padding-right:45px;">
        <tr>
          <td><img src = "{$resourceBase}/i/contribute/cut_line.png" height = "15" width = "630"/></td>
        </tr>
      </table>

      <table style = "margin-top:6px;padding-right:20px;font-family: Arial, Verdana, sans-serif" width = "507" border = "0"cellpadding = "-5" cellspacing="19" id = "desc">
        <tr>
          <td width="60%"><font size = "4" align = "right"><b>{ts}CREDIT ADVICE{/ts}</b><br/><br /><div  style="font-size:10px;max-width:300px;">{ts}Please do not pay on this advice. Deduct the amount of this Credit Note from your next payment to us{/ts}</div><br/></font></td>
          <td width="40%">
            <table    align="right" >
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Customer:{/ts} </font></td>
                <td><font size = "1" align = "right" >{$display_name}</font></td>
              </tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Credit Note#:{/ts} </font></td>
                <td><font size = "1" align = "right">{$creditnote_id}</font></td>
              </tr>
              <tr><td  colspan = "5"style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Credit Amount:{/ts}</font></td>
                <td width=\'50px\'><font size = "1" align = "right" style="font-weight:bold;">{$amount|crmMoney:$currency}</font></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      {/if}
    </center>
  </body>
</html>', 75, false),array('modifier', 'truncate', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv = "Content-Type" content="text/html; charset=UTF-8" />
      <title></title>
  </head>
  <body>
    <center>
    <table width = "590"  border = "0" style = "margin-top:2px;">
      <tr>
        <td align = "left">
          <img src = "https://www.gstcouncil.org/media/civicrm/persist/contribute/images/gstc_logo_big.jpg"  width = "220px"/><br/><br/>
        </td>
      </tr>
    </table>

    <table style = "padding-right:19px;font-family: Arial, Verdana, sans-serif;" width = "590" height = "100" border = "0" cellpadding = "2" cellspacing = "1">
      <tr><td colspan ="3" style="text-align: left;"><b><font size = "4" align = "center">{ts}INVOICE{/ts}</font></b></td></tr>
      <tr>
        <td width="30%" style="" valign="top">
          <table>
            <tr><td><font size = "1" align = "center"  type="">{if $organization_name and $membership_owner}{$display_name} ({$organization_name}){else}{$display_name}{/if}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$street_address} {$supplemental_address_1}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$supplemental_address_2}  {$stateProvinceAbbreviation}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$city}  {$postal_code}</font></td></tr>
            <tr><td><font size = "1" align = "center">{$countryAbbreviation}</font></td></tr>
          </table>
        </td>
        <td width="30%" valign="top" align = "right" style="padding-left:5px;">
          <table width="100%">
            <tr><td><b><font size = "1" align = "center" >{ts}Invoice Date:{/ts}</font></b></td></tr>
            <tr><td><font size = "1" align = "center" >{$invoice_date}</font></td></tr>
            <tr><td><b><font size = "1" align = "center" >{ts}Invoice Number:{/ts}</font></b></td></tr>
            <tr><td><font size = "1" align = "center" >{$invoice_id}</font></td></tr>
          </table>
        </td>
        <td width="60%"  valign="top" align = "right">
          <table width="100%">
            <tr><td><font size = "1" align = "right">{$domain_organization}</font></td></tr>
            <tr><td><font size = "1" align = "right">{if $domain_street_address }{$domain_street_address}{/if}
                    {if $domain_supplemental_address_1 }{$domain_supplemental_address_1}{/if}</font></td></tr>
           {if $domain_supplemental_address_2 }<tr><td><font size = "1" align = "right">{$domain_supplemental_address_2}</font></td></tr>{/if}
            <tr><td><font size = "1" align = "right">{if $domain_city}{$domain_city}{/if}{if $domain_state }, {$domain_state}{/if}                     {if $domain_postal_code }{$domain_postal_code}{/if}{if $domain_postal_code_suffix }-{$domain_postal_code_suffix}{/if}</font></td></tr>
            {if $domain_country}<tr><td><font size = "1" align = "right">{$domain_country}</font></td></tr>{/if}
            {if $domain_phone}<tr><td><font size = "1" align = "right">{$domain_phone}</font></td></tr>{/if}
            {if $domain_email}<tr><td><font size = "1" align = "right">{$domain_email}</font></td></tr>{/if}
            <tr><td><font size = "1" align = "right">Corporate ID no. 461050633</font></td></tr>
            <tr><td><font size = "1" align = "right">GSTC is a 501(c)3 tax-exempt organization.</font></td></tr>
           
          </table>
        </td>
      </tr>
     {if $source}<tr><td colspan ="3" style = "padding-top:10px;"><font size = "1"align = "left">{ts}Reference:{/ts} {$source}</font></td></td></tr>{/if}
    </table>
      <table style = "padding-right:19px;margin-top:15px;font-family: Arial, Verdana, sans-serif" width = "590" border = "0"cellpadding = "-5" cellspacing = "0" id = "desc">
        <tr>
          <td colspan = "2" {$valueStyle}>
            <table>
              <tr>
                <th style = "text-align:left; font-weight:bold;width:300px;"><font size = "1">{ts}Description{/ts}</font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{ts}Quantity{/ts}</font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{ts}Unit Price{/ts}</font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{$taxTerm} </font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1">{ts 1=$defaultCurrency}Amount %1{/ts}</font></th>
              </tr>
              {foreach from=$lineItem item=value key=priceset name=taxpricevalue}
              {if $smarty.foreach.taxpricevalue.index eq 0}
              <tr><td  colspan = "5" ><hr size="3" style = "color:#000;"></hr></td></tr>
              {else}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              {/if}
              <tr>
                <td style="text-align:left;" ><font size = "1">{if $value.html_type eq \'Text\'}{$value.label}{else}{$value.field_title} - {$value.label}{/if}</font></td>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> {$value.qty}</font></td>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> {$value.unit_price|crmMoney:$currency}</font></td>
                {if $value.tax_amount != \'\'}
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> {$value.tax_rate}%</font></td>
                {else}
                <td style="text-align:right;white-space: nowrap;"><font size = "1">{ts 1=$taxTerm}No %1{/ts}</font></td>
                {/if}
                <td style="text-align:right;white-space: nowrap;"><font size = "1">{$value.subTotal|crmMoney:$currency}</font></td>
              </tr>
              {/foreach}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{ts}Sub Total{/ts}</font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"> {$subTotal|crmMoney:$currency}</font></td>
              </tr>
              {foreach from = $dataArray item = value key = priceset}
              <tr>
                <td colspan = "3"></td>
                {if $priceset}
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"> {ts 1=$taxTerm 2=$priceset}TOTAL %1 %2%{/ts}</font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {elseif $priceset == 0}
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{ts 1=$taxTerm}TOTAL NO %1{/ts}</font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {/if}
                </tr>
              {/foreach}
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2"><hr></hr></td>
              </tr>

              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1">{ts 1=$defaultCurrency}TOTAL %1{/ts}</font></b></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>

              {if $is_pay_later == 0}
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;">
                  <font size = "1">
                    {if $contribution_status_id == $refundedStatusId}
                    {ts}LESS Amount Credited{/ts}
                    {else}
                    {ts}LESS Amount Paid{/ts}
                    {/if}
                  </font>
                </td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2" ><hr></hr></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1">{ts}AMOUNT DUE:{/ts} </font></b></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1">{$amountDue|crmMoney:$currency}</font></b></td>
                <td style = ""><font size = "1" align = "right"></font></td>
              </tr>
              {/if}
              
              <tr>
                <td colspan = "3"></td>
              </tr>
              {if $contribution_status_id == $pendingStatusId && $is_pay_later == 1}
              <tr>
                <td style="white-space: nowrap;"><b><font size = "1" align = "center">{ts 1=$dueDate}DUE DATE: %1{/ts}</font></b></td>
                <td colspan = "3"></td>
              </tr>
              {/if}
            </table>
          </td>
        </tr>
      </table>
      {if $contribution_status_id == $pendingStatusId && $is_pay_later == 1}
      <table style = "margin-top:5px;padding-right:45px;margin-left: 50px;">
        <tr>
          <td><img src = "{$resourceBase}/i/contribute/cut_line.png" height = "15" width = "630"/></td>
        </tr>
      </table>
      <table style = "margin-top:6px;padding-right:20px;font-family: Arial, Verdana, sans-serif" width = "480" border = "0"cellpadding = "-5" cellspacing="19" id = "desc">
        <tr>
          <td width="60%">
            <b>
              <font size = "4" align = "right">{ts}PAYMENT ADVICE{/ts}</font>
            </b> <br/><br/>
            <font size = "1" align = "right"><b>{ts}To: {/ts}</b>
              <div style="text-align: left;width:17em;word-wrap:break-word;">
                {$domain_organization} <br />
                {$domain_street_address} {$domain_supplemental_address_1} <br />
                {$domain_supplemental_address_2} {$domain_state} <br />
                {$domain_city} {$domain_postal_code} <br />
                {$domain_country} <br />
                {$domain_phone} <br />
                {$domain_email}
              </div>
            </font>
            <br/><br/>
            <font size="1" align="right">{$notes}</font>
          </td>
          <td width="40%">
            <table  cellpadding = "-10" cellspacing = "22"  align="right" >
              <tr>
                <td  colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Customer: {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right">{$display_name}</font></td>
              </tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Invoice Number: {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right">{$invoice_id}</font></td>
              </tr>
              <tr><td  colspan = "5"style = "color:#F5F5F5;"><hr></hr></td></tr>
              {if $is_pay_later == 1}
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{ts}Amount Due:{/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{$amount|crmMoney:$currency}</font></td>
              </tr>
              {else}
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{ts}Amount Due: {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{$amountDue|crmMoney:$currency}</font></td>
              </tr>
              {/if}
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;">{ts}Due Date:  {/ts}</font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right">{$dueDate}</font></td>
              </tr>
              <tr>
                <td colspan = "5" style = "color:#F5F5F5;"><hr></hr></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      {/if}

      {if $contribution_status_id == $refundedStatusId || $contribution_status_id == $cancelledStatusId}
      <table style = "margin-top:2px;padding-left:7px;page-break-before: always;">
        <tr>
          <td><img src = "{$resourceBase}/i/civi99.png" height = "34px" width = "99px"/></td>
        </tr>
      </table>

      <table style = "font-family: Arial, Verdana, sans-serif" width = "500" height = "100" border = "0" cellpadding = "2" cellspacing = "1">
        <tr>
          <td style = "padding-left:15px;" ><b><font size = "4" align = "center">{ts}CREDIT NOTE{/ts}</font></b></td>
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><b><font size = "1" align = "right">{ts}Date:{/ts}</font></b></td>
          <td><font size = "1" align = "right">{$domain_organization}</font></td>
        </tr>
        <tr>
          {if $organization_name}
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$display_name}  ({$organization_name})</font></td>
           {else}
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$display_name}</font></td>
          {/if}
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><font size = "1" align = "right">{$invoice_date}</font></td>
          <td ><font size = "1" align = "right">
          {if $domain_street_address }
            {$domain_street_address}
          {/if}
          {if $domain_supplemental_address_1 }
            {$domain_supplemental_address_1}
          {/if}</font></td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$street_address}   {$supplemental_address_1}</font></td>
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><b><font size = "1" align = "right">{ts}Credit Note Number:{/ts}</font></b></td>
          <td><font size = "1" align = "right">{if $domain_supplemental_address_2 }
            {$domain_supplemental_address_2}
            {/if}
            {if $domain_state }
            {$domain_state}
            {/if}
            </font>
          </td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "center">{$supplemental_address_2}  {$stateProvinceAbbreviation}</font></td>
          <td colspan="1"></td>
          <td style = "padding-left:70px;"><font size = "1" align = "right">{$creditnote_id}</font></td>
          <td ><font size = "1" align = "right">{if $domain_city}
           {$domain_city}
               {/if}
               {if $domain_postal_code }
           {$domain_postal_code}
               {/if}
          </font></td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "right">{$city}  {$postal_code}</font></td>
          <td colspan="1"></td>
          <td height = "10" style = "padding-left:70px;"><b><font size = "1"align = "right">{ts}Reference:{/ts}</font></b></td>
          <td><font size = "1" align = "right"> {if $domain_country}
          {$domain_country}
              {/if}</font></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td style = "padding-left:70px;"><font size = "1"align = "right">{$source}</font></td>
          <td><font size = "1" align = "right"> {if $domain_phone}
          {$domain_phone}
               {/if}</font> </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><font size = "1" align = "right"> {if $domain_email}
          {$domain_email}
          {/if}</font> </td>
        </tr>
      </table>

      <table style = "margin-top:75px;font-family: Arial, Verdana, sans-serif" width = "590" border = "0"cellpadding = "-5" cellspacing = "0" id = "desc">
        <tr>
          <td colspan = "2" {$valueStyle}>
            <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
              <tr>
                <th style = "padding-right:28px;text-align:left;font-weight:bold;width:200px;"><font size = "1">{ts}Description{/ts}</font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{ts}Quantity{/ts}</font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{ts}Unit Price{/ts}</font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{$taxTerm} </font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1">{ts 1=$defaultCurrency}Amount %1{/ts}</font></th>
              </tr>
              {foreach from=$lineItem item=value key=priceset name=pricevalue}
              {if $smarty.foreach.pricevalue.index eq 0}
              <tr><td  colspan = "5" ><hr size="3" style = "color:#000;"></hr></td></tr>
              {else}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              {/if}
              <tr>
                <td style ="text-align:left;"  ><font size = "1">
                {if $value.html_type eq \'Text\'}{$value.label}{else}{$value.field_title} - {$value.label}{/if} {if $value.description}<div>{$value.description|truncate:30:"..."}</div>{/if}
                </font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$value.qty}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$value.unit_price|crmMoney:$currency}</font></td>
                {if $value.tax_amount != \'\'}
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$value.tax_rate}%</font></td>
                {else}
                <td style = "padding-left:28px;text-align:right"><font size = "1" >{ts 1=$taxTerm}No %1{/ts}</font></td>
                {/if}
                <td style = "padding-left:28px;text-align:right;"><font size = "1" >{$value.subTotal|crmMoney:$currency}</font></td>
              </tr>
              {/foreach}
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{ts}Sub Total{/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {$subTotal|crmMoney:$currency}</font></td>
              </tr>
              {foreach from = $dataArray item = value key = priceset}
              <tr>
                <td colspan = "3"></td>
                {if $priceset}
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> {ts 1=$taxTerm 2=$priceset}TOTAL %1 %2%{/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {elseif $priceset == 0}
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{ts 1=$taxTerm}TOTAL NO %1{/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" align = "right">{$value|crmMoney:$currency}</font> </td>
                {/if}
              </tr>
              {/foreach}
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2"><hr></hr></td>
              </tr>
  
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1">{ts 1=$defaultCurrency}TOTAL %1{/ts}</font></b></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>
  
              {if $is_pay_later == 0}
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" >{ts}LESS Credit to invoice(s){/ts}</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1">{$amount|crmMoney:$currency}</font></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2" ><hr></hr></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1">{ts}REMAINING CREDIT{/ts}</font></b></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1">{$amountDue|crmMoney:$currency}</font></b></td>
                <td style = "padding-left:28px;"><font size = "1" align = "right"></font></td>
              </tr>
              {/if}
              <br/><br/><br/>
              <tr>
                <td colspan = "3"></td>
              </tr>
              <tr>
                <td></td>
                <td colspan = "3"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

      <table style = "margin-top:5px;padding-right:45px;">
        <tr>
          <td><img src = "{$resourceBase}/i/contribute/cut_line.png" height = "15" width = "630"/></td>
        </tr>
      </table>

      <table style = "margin-top:6px;padding-right:20px;font-family: Arial, Verdana, sans-serif" width = "507" border = "0"cellpadding = "-5" cellspacing="19" id = "desc">
        <tr>
          <td width="60%"><font size = "4" align = "right"><b>{ts}CREDIT ADVICE{/ts}</b><br/><br /><div  style="font-size:10px;max-width:300px;">{ts}Please do not pay on this advice. Deduct the amount of this Credit Note from your next payment to us{/ts}</div><br/></font></td>
          <td width="40%">
            <table    align="right" >
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Customer:{/ts} </font></td>
                <td><font size = "1" align = "right" >{$display_name}</font></td>
              </tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Credit Note#:{/ts} </font></td>
                <td><font size = "1" align = "right">{$creditnote_id}</font></td>
              </tr>
              <tr><td  colspan = "5"style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;">{ts}Credit Amount:{/ts}</font></td>
                <td width=\'50px\'><font size = "1" align = "right" style="font-weight:bold;">{$amount|crmMoney:$currency}</font></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      {/if}
    </center>
  </body>
</html>', 318, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv = "Content-Type" content="text/html; charset=UTF-8" />
      <title></title>
  </head>
  <body>
    <center>
    <table width = "590"  border = "0" style = "margin-top:2px;">
      <tr>
        <td align = "left">
          <img src = "https://www.gstcouncil.org/media/civicrm/persist/contribute/images/gstc_logo_big.jpg"  width = "220px"/><br/><br/>
        </td>
      </tr>
    </table>

    <table style = "padding-right:19px;font-family: Arial, Verdana, sans-serif;" width = "590" height = "100" border = "0" cellpadding = "2" cellspacing = "1">
      <tr><td colspan ="3" style="text-align: left;"><b><font size = "4" align = "center"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>INVOICE<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></b></td></tr>
      <tr>
        <td width="30%" style="" valign="top">
          <table>
            <tr><td><font size = "1" align = "center"  type=""><?php if ($this->_tpl_vars['organization_name'] && $this->_tpl_vars['membership_owner']): ?><?php echo $this->_tpl_vars['display_name']; ?>
 (<?php echo $this->_tpl_vars['organization_name']; ?>
)<?php else: ?><?php echo $this->_tpl_vars['display_name']; ?>
<?php endif; ?></font></td></tr>
            <tr><td><font size = "1" align = "center"><?php echo $this->_tpl_vars['street_address']; ?>
 <?php echo $this->_tpl_vars['supplemental_address_1']; ?>
</font></td></tr>
            <tr><td><font size = "1" align = "center"><?php echo $this->_tpl_vars['supplemental_address_2']; ?>
  <?php echo $this->_tpl_vars['stateProvinceAbbreviation']; ?>
</font></td></tr>
            <tr><td><font size = "1" align = "center"><?php echo $this->_tpl_vars['city']; ?>
  <?php echo $this->_tpl_vars['postal_code']; ?>
</font></td></tr>
            <tr><td><font size = "1" align = "center"><?php echo $this->_tpl_vars['countryAbbreviation']; ?>
</font></td></tr>
          </table>
        </td>
        <td width="30%" valign="top" align = "right" style="padding-left:5px;">
          <table width="100%">
            <tr><td><b><font size = "1" align = "center" ><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Invoice Date:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></b></td></tr>
            <tr><td><font size = "1" align = "center" ><?php echo $this->_tpl_vars['invoice_date']; ?>
</font></td></tr>
            <tr><td><b><font size = "1" align = "center" ><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Invoice Number:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></b></td></tr>
            <tr><td><font size = "1" align = "center" ><?php echo $this->_tpl_vars['invoice_id']; ?>
</font></td></tr>
          </table>
        </td>
        <td width="60%"  valign="top" align = "right">
          <table width="100%">
            <tr><td><font size = "1" align = "right"><?php echo $this->_tpl_vars['domain_organization']; ?>
</font></td></tr>
            <tr><td><font size = "1" align = "right"><?php if ($this->_tpl_vars['domain_street_address']): ?><?php echo $this->_tpl_vars['domain_street_address']; ?>
<?php endif; ?>
                    <?php if ($this->_tpl_vars['domain_supplemental_address_1']): ?><?php echo $this->_tpl_vars['domain_supplemental_address_1']; ?>
<?php endif; ?></font></td></tr>
           <?php if ($this->_tpl_vars['domain_supplemental_address_2']): ?><tr><td><font size = "1" align = "right"><?php echo $this->_tpl_vars['domain_supplemental_address_2']; ?>
</font></td></tr><?php endif; ?>
            <tr><td><font size = "1" align = "right"><?php if ($this->_tpl_vars['domain_city']): ?><?php echo $this->_tpl_vars['domain_city']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['domain_state']): ?>, <?php echo $this->_tpl_vars['domain_state']; ?>
<?php endif; ?>                     <?php if ($this->_tpl_vars['domain_postal_code']): ?><?php echo $this->_tpl_vars['domain_postal_code']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['domain_postal_code_suffix']): ?>-<?php echo $this->_tpl_vars['domain_postal_code_suffix']; ?>
<?php endif; ?></font></td></tr>
            <?php if ($this->_tpl_vars['domain_country']): ?><tr><td><font size = "1" align = "right"><?php echo $this->_tpl_vars['domain_country']; ?>
</font></td></tr><?php endif; ?>
            <?php if ($this->_tpl_vars['domain_phone']): ?><tr><td><font size = "1" align = "right"><?php echo $this->_tpl_vars['domain_phone']; ?>
</font></td></tr><?php endif; ?>
            <?php if ($this->_tpl_vars['domain_email']): ?><tr><td><font size = "1" align = "right"><?php echo $this->_tpl_vars['domain_email']; ?>
</font></td></tr><?php endif; ?>
            <tr><td><font size = "1" align = "right">Corporate ID no. 461050633</font></td></tr>
            <tr><td><font size = "1" align = "right">GSTC is a 501(c)3 tax-exempt organization.</font></td></tr>
           
          </table>
        </td>
      </tr>
     <?php if ($this->_tpl_vars['source']): ?><tr><td colspan ="3" style = "padding-top:10px;"><font size = "1"align = "left"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Reference:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['source']; ?>
</font></td></td></tr><?php endif; ?>
    </table>
      <table style = "padding-right:19px;margin-top:15px;font-family: Arial, Verdana, sans-serif" width = "590" border = "0"cellpadding = "-5" cellspacing = "0" id = "desc">
        <tr>
          <td colspan = "2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
            <table>
              <tr>
                <th style = "text-align:left; font-weight:bold;width:300px;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Description<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Quantity<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Unit Price<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1"><?php echo $this->_tpl_vars['taxTerm']; ?>
 </font></th>
                <th style = "text-align:right;font-weight:bold;white-space: nowrap;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['defaultCurrency'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></th>
              </tr>
              <?php $_from = $this->_tpl_vars['lineItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['taxpricevalue'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['taxpricevalue']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
        $this->_foreach['taxpricevalue']['iteration']++;
?>
              <?php if (($this->_foreach['taxpricevalue']['iteration']-1) == 0): ?>
              <tr><td  colspan = "5" ><hr size="3" style = "color:#000;"></hr></td></tr>
              <?php else: ?>
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              <?php endif; ?>
              <tr>
                <td style="text-align:left;" ><font size = "1"><?php if ($this->_tpl_vars['value']['html_type'] == 'Text'): ?><?php echo $this->_tpl_vars['value']['label']; ?>
<?php else: ?><?php echo $this->_tpl_vars['value']['field_title']; ?>
 - <?php echo $this->_tpl_vars['value']['label']; ?>
<?php endif; ?></font></td>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> <?php echo $this->_tpl_vars['value']['qty']; ?>
</font></td>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> <?php echo ((is_array($_tmp=$this->_tpl_vars['value']['unit_price'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
                <?php if ($this->_tpl_vars['value']['tax_amount'] != ''): ?>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"> <?php echo $this->_tpl_vars['value']['tax_rate']; ?>
%</font></td>
                <?php else: ?>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['taxTerm'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <?php endif; ?>
                <td style="text-align:right;white-space: nowrap;"><font size = "1"><?php echo ((is_array($_tmp=$this->_tpl_vars['value']['subTotal'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
              </tr>
              <?php endforeach; endif; unset($_from); ?>
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Sub Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"> <?php echo ((is_array($_tmp=$this->_tpl_vars['subTotal'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
              </tr>
              <?php $_from = $this->_tpl_vars['dataArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>
              <tr>
                <td colspan = "3"></td>
                <?php if ($this->_tpl_vars['priceset']): ?>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"> <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['taxTerm'],'2' => $this->_tpl_vars['priceset'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>TOTAL %1 %2%<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1" align = "right"><?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font> </td>
                <?php elseif ($this->_tpl_vars['priceset'] == 0): ?>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['taxTerm'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>TOTAL NO %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1" align = "right"><?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font> </td>
                <?php endif; ?>
                </tr>
              <?php endforeach; endif; unset($_from); ?>
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2"><hr></hr></td>
              </tr>

              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['defaultCurrency'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>TOTAL %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></b></td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"><?php echo ((is_array($_tmp=$this->_tpl_vars['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
              </tr>

              <?php if ($this->_tpl_vars['is_pay_later'] == 0): ?>
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;">
                  <font size = "1">
                    <?php if ($this->_tpl_vars['contribution_status_id'] == $this->_tpl_vars['refundedStatusId']): ?>
                    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>LESS Amount Credited<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    <?php else: ?>
                    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>LESS Amount Paid<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    <?php endif; ?>
                  </font>
                </td>
                <td style = "text-align:right;white-space: nowrap;"><font size = "1"><?php echo ((is_array($_tmp=$this->_tpl_vars['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2" ><hr></hr></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>AMOUNT DUE:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> </font></b></td>
                <td style = "text-align:right;white-space: nowrap;"><b><font size = "1"><?php echo ((is_array($_tmp=$this->_tpl_vars['amountDue'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></b></td>
                <td style = ""><font size = "1" align = "right"></font></td>
              </tr>
              <?php endif; ?>
              
              <tr>
                <td colspan = "3"></td>
              </tr>
              <?php if ($this->_tpl_vars['contribution_status_id'] == $this->_tpl_vars['pendingStatusId'] && $this->_tpl_vars['is_pay_later'] == 1): ?>
              <tr>
                <td style="white-space: nowrap;"><b><font size = "1" align = "center"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['dueDate'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>DUE DATE: %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></b></td>
                <td colspan = "3"></td>
              </tr>
              <?php endif; ?>
            </table>
          </td>
        </tr>
      </table>
      <?php if ($this->_tpl_vars['contribution_status_id'] == $this->_tpl_vars['pendingStatusId'] && $this->_tpl_vars['is_pay_later'] == 1): ?>
      <table style = "margin-top:5px;padding-right:45px;margin-left: 50px;">
        <tr>
          <td><img src = "<?php echo $this->_tpl_vars['resourceBase']; ?>
/i/contribute/cut_line.png" height = "15" width = "630"/></td>
        </tr>
      </table>
      <table style = "margin-top:6px;padding-right:20px;font-family: Arial, Verdana, sans-serif" width = "480" border = "0"cellpadding = "-5" cellspacing="19" id = "desc">
        <tr>
          <td width="60%">
            <b>
              <font size = "4" align = "right"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>PAYMENT ADVICE<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font>
            </b> <br/><br/>
            <font size = "1" align = "right"><b><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>To: <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></b>
              <div style="text-align: left;width:17em;word-wrap:break-word;">
                <?php echo $this->_tpl_vars['domain_organization']; ?>
 <br />
                <?php echo $this->_tpl_vars['domain_street_address']; ?>
 <?php echo $this->_tpl_vars['domain_supplemental_address_1']; ?>
 <br />
                <?php echo $this->_tpl_vars['domain_supplemental_address_2']; ?>
 <?php echo $this->_tpl_vars['domain_state']; ?>
 <br />
                <?php echo $this->_tpl_vars['domain_city']; ?>
 <?php echo $this->_tpl_vars['domain_postal_code']; ?>
 <br />
                <?php echo $this->_tpl_vars['domain_country']; ?>
 <br />
                <?php echo $this->_tpl_vars['domain_phone']; ?>
 <br />
                <?php echo $this->_tpl_vars['domain_email']; ?>

              </div>
            </font>
            <br/><br/>
            <font size="1" align="right"><?php echo $this->_tpl_vars['notes']; ?>
</font>
          </td>
          <td width="40%">
            <table  cellpadding = "-10" cellspacing = "22"  align="right" >
              <tr>
                <td  colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Customer: <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right"><?php echo $this->_tpl_vars['display_name']; ?>
</font></td>
              </tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Invoice Number: <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right"><?php echo $this->_tpl_vars['invoice_id']; ?>
</font></td>
              </tr>
              <tr><td  colspan = "5"style = "color:#F5F5F5;"><hr></hr></td></tr>
              <?php if ($this->_tpl_vars['is_pay_later'] == 1): ?>
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount Due:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;"><?php echo ((is_array($_tmp=$this->_tpl_vars['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
              </tr>
              <?php else: ?>
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount Due: <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;"><?php echo ((is_array($_tmp=$this->_tpl_vars['amountDue'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
              </tr>
              <?php endif; ?>
              <tr>
                <td colspan = "2"></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right" style="font-weight:bold;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Due Date:  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td style="white-space:nowrap;"><font size = "1" align = "right"><?php echo $this->_tpl_vars['dueDate']; ?>
</font></td>
              </tr>
              <tr>
                <td colspan = "5" style = "color:#F5F5F5;"><hr></hr></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <?php endif; ?>

      <?php if ($this->_tpl_vars['contribution_status_id'] == $this->_tpl_vars['refundedStatusId'] || $this->_tpl_vars['contribution_status_id'] == $this->_tpl_vars['cancelledStatusId']): ?>
      <table style = "margin-top:2px;padding-left:7px;page-break-before: always;">
        <tr>
          <td><img src = "<?php echo $this->_tpl_vars['resourceBase']; ?>
/i/civi99.png" height = "34px" width = "99px"/></td>
        </tr>
      </table>

      <table style = "font-family: Arial, Verdana, sans-serif" width = "500" height = "100" border = "0" cellpadding = "2" cellspacing = "1">
        <tr>
          <td style = "padding-left:15px;" ><b><font size = "4" align = "center"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>CREDIT NOTE<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></b></td>
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><b><font size = "1" align = "right"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></b></td>
          <td><font size = "1" align = "right"><?php echo $this->_tpl_vars['domain_organization']; ?>
</font></td>
        </tr>
        <tr>
          <?php if ($this->_tpl_vars['organization_name']): ?>
          <td style = "padding-left:17px;"><font size = "1" align = "center"><?php echo $this->_tpl_vars['display_name']; ?>
  (<?php echo $this->_tpl_vars['organization_name']; ?>
)</font></td>
           <?php else: ?>
          <td style = "padding-left:17px;"><font size = "1" align = "center"><?php echo $this->_tpl_vars['display_name']; ?>
</font></td>
          <?php endif; ?>
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><font size = "1" align = "right"><?php echo $this->_tpl_vars['invoice_date']; ?>
</font></td>
          <td ><font size = "1" align = "right">
          <?php if ($this->_tpl_vars['domain_street_address']): ?>
            <?php echo $this->_tpl_vars['domain_street_address']; ?>

          <?php endif; ?>
          <?php if ($this->_tpl_vars['domain_supplemental_address_1']): ?>
            <?php echo $this->_tpl_vars['domain_supplemental_address_1']; ?>

          <?php endif; ?></font></td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "center"><?php echo $this->_tpl_vars['street_address']; ?>
   <?php echo $this->_tpl_vars['supplemental_address_1']; ?>
</font></td>
          <td colspan = "1"></td>
          <td style = "padding-left:70px;"><b><font size = "1" align = "right"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Credit Note Number:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></b></td>
          <td><font size = "1" align = "right"><?php if ($this->_tpl_vars['domain_supplemental_address_2']): ?>
            <?php echo $this->_tpl_vars['domain_supplemental_address_2']; ?>

            <?php endif; ?>
            <?php if ($this->_tpl_vars['domain_state']): ?>
            <?php echo $this->_tpl_vars['domain_state']; ?>

            <?php endif; ?>
            </font>
          </td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "center"><?php echo $this->_tpl_vars['supplemental_address_2']; ?>
  <?php echo $this->_tpl_vars['stateProvinceAbbreviation']; ?>
</font></td>
          <td colspan="1"></td>
          <td style = "padding-left:70px;"><font size = "1" align = "right"><?php echo $this->_tpl_vars['creditnote_id']; ?>
</font></td>
          <td ><font size = "1" align = "right"><?php if ($this->_tpl_vars['domain_city']): ?>
           <?php echo $this->_tpl_vars['domain_city']; ?>

               <?php endif; ?>
               <?php if ($this->_tpl_vars['domain_postal_code']): ?>
           <?php echo $this->_tpl_vars['domain_postal_code']; ?>

               <?php endif; ?>
          </font></td>
        </tr>
        <tr>
          <td style = "padding-left:17px;"><font size = "1" align = "right"><?php echo $this->_tpl_vars['city']; ?>
  <?php echo $this->_tpl_vars['postal_code']; ?>
</font></td>
          <td colspan="1"></td>
          <td height = "10" style = "padding-left:70px;"><b><font size = "1"align = "right"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Reference:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></b></td>
          <td><font size = "1" align = "right"> <?php if ($this->_tpl_vars['domain_country']): ?>
          <?php echo $this->_tpl_vars['domain_country']; ?>

              <?php endif; ?></font></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td style = "padding-left:70px;"><font size = "1"align = "right"><?php echo $this->_tpl_vars['source']; ?>
</font></td>
          <td><font size = "1" align = "right"> <?php if ($this->_tpl_vars['domain_phone']): ?>
          <?php echo $this->_tpl_vars['domain_phone']; ?>

               <?php endif; ?></font> </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><font size = "1" align = "right"> <?php if ($this->_tpl_vars['domain_email']): ?>
          <?php echo $this->_tpl_vars['domain_email']; ?>

          <?php endif; ?></font> </td>
        </tr>
      </table>

      <table style = "margin-top:75px;font-family: Arial, Verdana, sans-serif" width = "590" border = "0"cellpadding = "-5" cellspacing = "0" id = "desc">
        <tr>
          <td colspan = "2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
            <table>               <tr>
                <th style = "padding-right:28px;text-align:left;font-weight:bold;width:200px;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Description<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Quantity<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Unit Price<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1"><?php echo $this->_tpl_vars['taxTerm']; ?>
 </font></th>
                <th style = "padding-left:28px;text-align:right;font-weight:bold;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['defaultCurrency'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></th>
              </tr>
              <?php $_from = $this->_tpl_vars['lineItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pricevalue'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pricevalue']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
        $this->_foreach['pricevalue']['iteration']++;
?>
              <?php if (($this->_foreach['pricevalue']['iteration']-1) == 0): ?>
              <tr><td  colspan = "5" ><hr size="3" style = "color:#000;"></hr></td></tr>
              <?php else: ?>
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              <?php endif; ?>
              <tr>
                <td style ="text-align:left;"  ><font size = "1">
                <?php if ($this->_tpl_vars['value']['html_type'] == 'Text'): ?><?php echo $this->_tpl_vars['value']['label']; ?>
<?php else: ?><?php echo $this->_tpl_vars['value']['field_title']; ?>
 - <?php echo $this->_tpl_vars['value']['label']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['value']['description']): ?><div><?php echo ((is_array($_tmp=$this->_tpl_vars['value']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...") : smarty_modifier_truncate($_tmp, 30, "...")); ?>
</div><?php endif; ?>
                </font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> <?php echo $this->_tpl_vars['value']['qty']; ?>
</font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> <?php echo ((is_array($_tmp=$this->_tpl_vars['value']['unit_price'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
                <?php if ($this->_tpl_vars['value']['tax_amount'] != ''): ?>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> <?php echo $this->_tpl_vars['value']['tax_rate']; ?>
%</font></td>
                <?php else: ?>
                <td style = "padding-left:28px;text-align:right"><font size = "1" ><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['taxTerm'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <?php endif; ?>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" ><?php echo ((is_array($_tmp=$this->_tpl_vars['value']['subTotal'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
              </tr>
              <?php endforeach; endif; unset($_from); ?>
              <tr><td  colspan = "5" style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Sub Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> <?php echo ((is_array($_tmp=$this->_tpl_vars['subTotal'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
              </tr>
              <?php $_from = $this->_tpl_vars['dataArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>
              <tr>
                <td colspan = "3"></td>
                <?php if ($this->_tpl_vars['priceset']): ?>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"> <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['taxTerm'],'2' => $this->_tpl_vars['priceset'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>TOTAL %1 %2%<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" align = "right"><?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font> </td>
                <?php elseif ($this->_tpl_vars['priceset'] == 0): ?>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['taxTerm'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>TOTAL NO %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" align = "right"><?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font> </td>
                <?php endif; ?>
              </tr>
              <?php endforeach; endif; unset($_from); ?>
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2"><hr></hr></td>
              </tr>
  
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['defaultCurrency'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>TOTAL %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></b></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"><?php echo ((is_array($_tmp=$this->_tpl_vars['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
              </tr>
  
              <?php if ($this->_tpl_vars['is_pay_later'] == 0): ?>
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1" ><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>LESS Credit to invoice(s)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td style = "padding-left:28px;text-align:right;"><font size = "1"><?php echo ((is_array($_tmp=$this->_tpl_vars['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td colspan = "2" ><hr></hr></td>
              </tr>
              <tr>
                <td colspan = "3"></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>REMAINING CREDIT<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></b></td>
                <td style = "padding-left:28px;text-align:right;"><b><font size = "1"><?php echo ((is_array($_tmp=$this->_tpl_vars['amountDue'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></b></td>
                <td style = "padding-left:28px;"><font size = "1" align = "right"></font></td>
              </tr>
              <?php endif; ?>
              <br/><br/><br/>
              <tr>
                <td colspan = "3"></td>
              </tr>
              <tr>
                <td></td>
                <td colspan = "3"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

      <table style = "margin-top:5px;padding-right:45px;">
        <tr>
          <td><img src = "<?php echo $this->_tpl_vars['resourceBase']; ?>
/i/contribute/cut_line.png" height = "15" width = "630"/></td>
        </tr>
      </table>

      <table style = "margin-top:6px;padding-right:20px;font-family: Arial, Verdana, sans-serif" width = "507" border = "0"cellpadding = "-5" cellspacing="19" id = "desc">
        <tr>
          <td width="60%"><font size = "4" align = "right"><b><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>CREDIT ADVICE<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></b><br/><br /><div  style="font-size:10px;max-width:300px;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please do not pay on this advice. Deduct the amount of this Credit Note from your next payment to us<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div><br/></font></td>
          <td width="40%">
            <table    align="right" >
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Customer:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> </font></td>
                <td><font size = "1" align = "right" ><?php echo $this->_tpl_vars['display_name']; ?>
</font></td>
              </tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Credit Note#:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> </font></td>
                <td><font size = "1" align = "right"><?php echo $this->_tpl_vars['creditnote_id']; ?>
</font></td>
              </tr>
              <tr><td  colspan = "5"style = "color:#F5F5F5;"><hr></hr></td></tr>
              <tr>
                <td colspan = "2"></td>
                <td><font size = "1" align = "right" style="font-weight:bold;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Credit Amount:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></font></td>
                <td width='50px'><font size = "1" align = "right" style="font-weight:bold;"><?php echo ((is_array($_tmp=$this->_tpl_vars['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</font></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <?php endif; ?>
    </center>
  </body>
</html><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>