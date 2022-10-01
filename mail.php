<?php

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $recipients = array(
      "parth@softtektechnologies.com",
      "psa1308@gmail.com"
    );
    $email_to = implode(',', $recipients);
    //$email_to ='vkpandey4365@gmail.com';

//Contact us 
if((isset($_POST['action'])) && ($_POST['action'] == 'contact')){

    $msg_cntact = '<body style="margin:0px; padding:0px;" bgcolor="#ffffff">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff">
                   <tr>
                      <td height="15" style="line-height: 1px; font-size:1px;">&nbsp;</td>
                    </tr>
                  <tr>
                    <td align="center" valign="middle"><table align="center" class="ef_wrapper" width="650" border="0" cellspacing="0" cellpadding="0" style="table-layout:fixed;width:650px; border-radius: 10px;"> 
                        
                        <tr>
                          <td align="center" valign="middle" bgcolor="#f5f5f5" style="padding: 10px 0px;" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="10" style="width:20px;" class="ef_side">&nbsp;</td>
                                <td  align="center" valign="middle">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td height="10" style="line-height: 1px; font-size: 1px; ">&nbsp;</td>
                                    </tr>  
                                    <tr>
                                      <td>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr> 
                                            <td width="50%">
                                              <table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 5px 0 3px 0;">
                                                <tr>
                                                  <td width="20%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#666; ">Name:</td>
                                                  <td width="80%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#222; font-weight: bold;">'.$_POST["name"].'</td>  
                                                </tr>  
                                                <tr>
                                                  <td height="10" style="line-height: 1px; font-size: 1px; ">&nbsp;</td>
                                                </tr> 
                                                <tr>
                                                  <td width="20%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#666; ">E-mail:</td>
                                                  <td width="80%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#222; font-weight: bold;">'.$_POST["email"].'</td> 
                                                </tr>
                                                <tr>
                                                  <td height="10" style="line-height: 1px; font-size: 1px; ">&nbsp;</td>
                                                </tr>  
                                                 
                                                <tr>
                                                  <td width="20%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#666; ">Country:</td>
                                                  <td width="80%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#222; font-weight: bold;">'.$_POST["country"].'</td> 
                                                </tr>
                                                <tr>
                                                  <td height="10" style="line-height: 1px; font-size: 1px; ">&nbsp;</td>
                                                </tr> 
                                                <tr>
                                                  <td width="20%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#666; ">Telephone:</td>
                                                  <td width="80%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#222; font-weight: bold;">'.$_POST["telephone"].'</td> 
                                                </tr>
                                                <tr>
                                                  <td height="10" style="line-height: 1px; font-size: 1px; ">&nbsp;</td>
                                                </tr>

                                                <tr>
                                                  <td width="20%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#666; ">Subject:</td>
                                                  <td width="80%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#222; font-weight: bold;">'.$_POST["subject"].'</td> 
                                                </tr>
                                                <tr>
                                                  <td height="10" style="line-height: 1px; font-size: 1px; ">&nbsp;</td>
                                                </tr>

                                                <tr>
                                                  <td width="20%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#666; ">Service:</td>
                                                  <td width="80%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#222; font-weight: bold;">'.$_POST["service"].'</td> 
                                                </tr>
                                                <tr>
                                                  <td height="10" style="line-height: 1px; font-size: 1px; ">&nbsp;</td>
                                                </tr>

                                                <tr>
                                                  <td width="20%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#666; ">Skypeid:</td>
                                                  <td width="80%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#222; font-weight: bold;">'.$_POST["skypeid"].'</td> 
                                                </tr>
                                                <tr>
                                                  <td height="10" style="line-height: 1px; font-size: 1px; ">&nbsp;</td>
                                                </tr>

                                                <tr>
                                                  <td width="20%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#666; ">Message:</td>
                                                  <td width="80%" align="left" valign="top" style="font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-decoration:none; color:#222; font-weight: bold;">'.$_POST["message"].'</td> 
                                                </tr>
                                                <tr>
                                                  <td height="10" style="line-height: 1px; font-size: 1px; ">&nbsp;</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td height="10" style="line-height: 1px; font-size: 1px; ">&nbsp;</td>
                                    </tr> 
                                    <tr>
                                      <td height="1" style="line-height: 0px; font-size: 0px; border-bottom:1px solid #ddd;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td height="10" style="line-height: 1px; font-size: 1px; ">&nbsp;</td>
                                    </tr> 
                                    <tr>
                                      <td height="10" style="line-height: 1px; font-size: 1px; ">&nbsp;</td>
                                    </tr>                                    

                                  </table></td>
                                <td width="10" style="width:20px;" class="ef_side">&nbsp;</td>
                              </tr>
                            </table></td>
                        </tr> 
                      </table></td>
                  </tr>
                  <tr>
                    <td height="10" style="line-height: 1px; font-size:1px;">&nbsp;</td>
                  </tr>
                </table>
                <div class="ef_hide" style="white-space:nowrap;font:20px courier;color:#E0F1FF; background-color:#E0F1FF; font-size:0px; line-height:0px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                </body>';

          
    if( mail(  $email_to, "Softtek Technologies - Contact us enquiry",$msg_cntact, $headers ) ){
        echo "Thank you for contacting us.";
    } else {
        echo "Problem sending mail. please try after sometime.";
    }
    exit();
}

?>