<?php
if(isset($_REQUEST['submit']))
{
  $typearr = array("jpg","jpeg", "pjpeg", "gif", "png", "x-png");
  $target_dir = "image/";
	$file1=rand(100,1000000).preg_replace('/[^A-Za-z0-9.\-]/','',$_FILES['image']['name']);
	$target_file1 = $target_dir.$file1;
	$type1 = strtolower(pathinfo($file1, PATHINFO_EXTENSION));
	if ($_FILES['image']['name'] !='') {

		if (in_array($type1,$typearr)) {
			if (move_uploaded_file($_FILES['image']['tmp_name'],$target_file1)) {
				echo "ok.";
			} else {
				echo " Please Try Again.";
			}
		}

	} else {
		$msg=$msg."File Invalid.<br>";
		$status= "NOTOK";
	}

$name=$_POST['name'];
$sname=$_POST['sname'];
$job=$_POST['job'];
$email=$_POST['email'];
$nam=$_POST['nam'];
$snam=$_POST['snam'];
$jo=$_POST['jo'];
$mail=$_POST['mail'];
$na=$_POST['na'];
$sub=$_POST['sub'];
$jot=$_POST['jot'];
$gmail=$_POST['gmail'];
$org=$_POST['org'];
$num=$_POST['num'];
$mob=$_POST['mob'];
$tel=$_POST['tel'];
$fax=$_POST['fax'];
$fmail=$_POST['fmail'];
$add=$_POST['add'];
$city=$_POST['city'];
$con=$_POST['con'];
$bname=$_POST['bname'];
$dat=$_POST['dat'];
$sub='Enquiry Mail';
$msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

             <html xmlns="http://www.w3.org/1999/xhtml">

             <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

              

              <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

              </head>

              <body bgcolor="#f5f5f5" style="background:#f5f5f5;text-align:center">

              <table border="0" cellpadding="10" cellspacing="0" style="background-color:#f5f5f5;" width="100%">

                <tr>

                  <td style="padding:35px;">

                    <table align="center" border="0" cellpadding="0" cellspacing="0" class=

                    "content" style="background-color: #FFFFFF">

                      <tr>

                        <td align="center" valign="top">

                          <table border="0" cellpadding="0" cellspacing="0" id="templateContainerMiddleBtm" width="100%">

                            <tr>

                              <td class="bodyContent" valign="top" mc:edit="welcomeEdit-11"  style="padding: 10px 25px;">

                                <h3><strong> This is a  Registration Form.:</strong></h3>
                               </h3> DELEGATE(S) INFORMATION :</h3>
                                <h4>Name  : '.$name.'</h4>
                                <h4>Sub Name : '.$sname .'</h4>
                                <h4>Job Title : '.$job.'</h4>
                               	<h4>E-mail : '.$email.'</h4>
                               	<h4>Name  : '.$nam.'</h4>
                                <h4>Sub Name : '.$snam .'</h4>
                                <h4>Job Title : '.$jo.'</h4>
                               	<h4>E-mail : '.$mail.'</h4>
                               	<h4>Name  : '.$na.'</h4>
                                <h4>Sub Name : '.$sub .'</h4>
                                <h4>Job Title : '.$jot.'</h4>
                               	<h4>E-mail : '.$gmail.'</h4>
                               	<h3>COMPANY INFORMATION :</h3>
                               	<h4>Organisation : '.$org.'</h4>
                              <h4>VAT number : '.$num.'</h4>
                                <h4>Mobile number : '.$mob.'</h4>
                                <h4>Office Phone number : '.$tel.'</h4>
                               	<h4>Fax number  : '.$fax.'</h4>
                                 <h4>Email:  : '.$fmail.'</h4>
                                <h4>Address  : '.$add.'</h4>
                                <h4>City : '.$city.'</h4>
                               	<h4>Country: : '.$con.'</h4>
<h3>BANK TRANSFER AUTHORISATION AND ACCEPTANCE OF TERMS & CONDITIONS:</h3>
                               <h4>Name  : '.$bname.'</h4>
                                <h4>Date : '.$dat.'</h4>
                                <img src="https://groupfuturista.com/'.$target_file1.'">
                              </td>

                            </tr>

                          </table>

                        </td>

                      </tr>

                    </table><!--[if (gte mso 9)|(IE)]> 

                      </td>

                    </tr>

                </table>

                <![endif]-->

                  </td>

                </tr>

              </table>

            </body>

            </html>';
    $sendto="info@groupfuturista.com";
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <groupfuturista.com>' . "\r\n";
	$headers .= 'Bcc: <groupfuturista@comspro.com>' . "\r\n" ;
	$headers .= 'Cc: qwcodes.com' . "\r\n";

	$mailSend=mail($sendto,$sub,$msg,$headers);

	if($mailSend)
	{
	echo "mail send";
	}

}	
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style> 
.package
{border:1px solid #999;
}
.package ul{
    padding:0;
}
.package li
{
    list-style:none;
    border-bottom:1px solid #999;
    cursor: pointer;
}
.text-right
{
    margin-top:-15px;
} 
.margin{
    margin:30px 0;
}
.border
{
    border:1px solid #999;
}

input {
border-top:none;
border-left:none;
border-right:none;
} 
.border ul{
    padding:2px;
}
.col-md-4.border li {
    font-size: 10px;
} 
 
.col-md-4.border p {
       margin: 10px 0;
    line-height: 15.5px;
} 
.container
{ 
    margin-bottom:20px;
    padding:20px 0;
}
.logos img
{
    height:50px;
    padding:10px;
}
</style>
</head>
<body> 
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="col-md-5">
    <h4><b>Registration Form</b></h4>
    <p>Please complete the form and send back to us</p>
    <p>Contact :</p>
    <p><i class="fa fa-envelope"></i> info@groupfuturista.com</p>
    <p><i class="fa fa-phone"></i> +44 203 432 7761</p>
</div>
<div class="col-md-7 package">
   <div class="col-md-3" style="margin:0;padding:0;">
   <h4>Sponsorship Packages:</h4>
</div>  
<div class="col-md-9">
  <ul> 
            
     <li><span  data-toggle="modal" data-target="#myModal">Platinum Package </span><div class="text-right">18,000 <i class="fa fa-euro"></i> <input type="radio" name="gender"></div></li>
<li><span data-toggle="modal" data-target="#myModal1">Gold  Package</span><div class="text-right">12,000 <i class="fa fa-euro"></i> <input type="radio" name="gender"></div></li>
           <li> <span  data-toggle="modal" data-target="#myModal2">Silver Package </span><div class="text-right">6,000 <i class="fa fa-euro"></i> <input type="radio" name="gender"></div></li>
   <li><span  data-toggle="modal" data-target="#myModal3">Start up Elevate </span><div class="text-right">4,000 <i class="fa fa-euro"></i> <input type="radio"  name="gender"></div></li>
     <li><span  data-toggle="modal" data-target="#myModal4">Delegate Pass (VIP) </span><div class="text-right">1999 <i class="fa fa-euro"></i> <input type="radio"  name="gender"></div></li>
	 <li><span  data-toggle="modal" data-target="#myModal41">Delegate Pass </span><div class="text-right">1699 <i class="fa fa-euro"></i> <input type="radio"  name="gender"></div></li>
             <li><span  data-toggle="modal" data-target="#myModal6">Startup Delegate Pass   </span><div class="text-right">999 <i class="fa fa-euro"></i> <input type="radio"  name="gender"></div></li>
 
      
  </ul>
</div> 
</div> 
<div class="clearfix"></div>
<div class="col-md-12 border">
        <form  method="post" action=""  enctype="multipart/form-data" >
<div class="col-md-6">
 <h4>  DELEGATE(S) INFORMATION</h4>
 <p>Name: <input type="text" name="name" required></p>
  <p>Surname: <input type="text" name="sname"></p>
  <p>Job Title: <input type="text" name="job"></p>
   <p>E-mail: <input type="email" name="email" required></p>
  
   <p>Name: <input type="text" name="nam"></p>
  <p>Surname: <input type="text" name="snam"></p>
  <p>Job Title: <input type="text" name="jo"></p>
   <p>E-mail: <input type="email" name="mail"></p>
 <p>Name: <input type="text" name="na"></p>
  <p>Surname: <input type="text" name="sub"></p>
  <p>Job Title: <input type="text" name="jot"></p>
   <p>E-mail: <input type="email" name="gmail"></p>
   <h4>COMPANY INFORMATION </h4>
   <p>Organisation <input type="text" name="org"></p>
  <p>VAT number: <input type="text" name="num"></p>
  <small>(VAT No. for EU members / Tax number for non-EU members)</small>
    <p>Mobile number: <input type="number" name="mob" required></p>
   <p>Office Phone number: <input type="number" name="tel"></p>
     <p>Fax number: <input type="number" name="fax"></p>
    <p>Email: <input type="email" name="fmail"></p>
    <p>Address: <input type="text" name="add"></p>
       <p>City: <input type="text" name="city"></p>
          <p>Country: <input type="text" name="con"></p>
     
</div>
<div class="col-md-6 logos">
   <h4>AUTHORISATION AND ACCEPTANCE OF TERMS & CONDITIONS:</h4>
   <p>Name: <input type="text" name="bname"></p>
   <p>Date: <input type="date" name="dat"></p>
   <p>Signature: <input type="file" name="image"></p>
   <p><b>Note:</b> Scan your signature on a white paper and upload here</p>
   <small>This booking is invalid without a signature authorisation.
The signatory must be authorised to sign on behalf of the
contracting organisation.</small><br>
  <h4> BANK TRANSFER <span><input type="checkbox"></span> </h4>
<a href="https://www.paypal.com/in/signin" target="_blank"><img src="assets/website/assets/img/paypal.png"> </a><span><input type="checkbox"></span>
<a href="https://bank.paysera.com/en/login" target="_blank"><img src="assets/website/assets/img/paysera.png"></a><span><input type="checkbox"></span>
<a href="https://app.holvi.com/login/" target="_blank"><img src="assets/website/assets/img/holvi.png"></a><span><input type="checkbox"></span>
<p><button type="submit" name="submit" class="btn btn-info">Submit</button></p>
</div>
</form>
</div>
</div> 
<div class="col-md-4 border">
    <h4 align="center">Terms & Conditions</h4>
   <li style="text-align:center;list-style:none;">By submitting this signed booking form, I agree that the following terms and conditions have been read thoroughly and the content is well understood. </li>
   <p><b>Payment Conditions</b></p>
   <ul>
       <li>Payment should be made in full immediately after submitting the signed booking form.</li>
     <li>Payment should always be made in Euros unless indicated otherwise.</li>
       <li>Group Futurista accepts all kinds of credits cards.</li>
<li>Although the preferred means of payment is credit card, in a few cases the bank transfer  option may be allowed ONLY on condition that the payment is made within 3-4 working  days upon receiving the proforma invoice.</li>
 <li>The fee of the event includes the possibility to download speakers’ presentations,  access to the conference hall & materials, refreshments, lunches and snacks.</li>
<li>Each delegate will be responsible for their own h otel accommod ation and tr avel expenses, however Group F uturista will negotiate and over the best possible hotel rates for its delegates in the same 4-star or 5-star h otel in which the event will tak e place.</li>

   </ul>
    <p><b>Cancellation Policy</b></p>
    <ul>
        <li> Incase a delegate would like to cancel their participation for some unexpected eve nt ual ities, such requests must be submitted in written and sent by post 4 weeks prior to the event in  order to obtain a full credit n ote for any future event organised by Group F ut urista.  The fees charged are strictly non-refundable.</li>
        <li>If Group Futurista would decide to cancel an on-going event, the delegate would receive a 100% refund of their payment.</li>
        <li> Non-attendance, otherwise referred as a “no show” does not signify cancellation.</li>
        <li>Group Futurista will not be held responsible for events cance ll ed for reasons beyond its control such as natural disasters, accidents, sabotage, trade or industrial disputes, outbreak of disease, ho st ilities, terrorism, etc. However, a full credit note would be giv en in each of these cases.</li>
        <li>The sponsor can cancel the sponsorship within 15 days of nal acceptance of the sponsorship offer. If cancelled after 15 days the sponsor will be liable to pay full sponsorship fees.</li>
    </ul>
    <p><b>Data Protection</b></p>
    <ul>
        <li>Group Futurista agrees to keep clients’ information confdential in its database. </li>
        <li> The client gives Group Futurista the authority to keep their information in its database and use the inform ation in any wa y necessary in connection with the event, otherwise consent should be sought.</li>
        <li>Client information will be removed immediately after receiving a written request by post.</li>
    </ul>
    <p><b>Please Note</b></p>
<ul>
    <li>All booking forms submitted without a signature are considered invalid. </li>
    <li>Group Futurista reserves the right to postpone the event to a later date or make changes to the location or confrmed speakers.</li>
    <li>If a client decides to cancel their participation for these reasons the client will receive a full credit note which covers the amount paid to attend any future event organised by Group Futurista.</li>
    <li>The hotel information may not be provided at the time of booking but should be ready at least one month prior to the event. In such case, please bear with us. </li>
</ul>
 <p><b>Copyright</b></p>
    <ul>
       <li>The information included in this agenda is strictly meant for the company or person who directly received this agenda from Group Futurista. Under NO circumstance should this agenda be published on the internet or be made available to the general public without the prior consent of Group Futurista. </li>
       <li>All inte llectual property rights in all materials pr oduced and distributed by Group Futurista in connection with this event are expressly reserved and any unauthorised duplic ation, public ation or  distribution is st rictly forbidden.</li>
    </ul>
</div>
</div>
</div>
    <!-- Button trigger modal -->
         
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel">Platinum Package</h4>
                  </div>
                  <div class="modal-body">
                   <ul>
                       <li>35-40 minutes speaking slot/panel discussion.</li>
                       <li>Exhibition booth</li>
                       <li>3-4 delegates participation.</li>
                       <li>Inclusion in our Promotional Campaigns via our Media Partners. </li>
                       <li>Social Media Boost Posts.</li>
                       <li>A smart networking application that will help you connect, share file, brainstorm and set one-on-one meetings with the delegates at the conference.</li>
                       <li>Video interview at the conference</li>
                      <li>Cocktail reception, sponsored by Group Futurista.</li>
                      <li>6 free invitation to end user's of your choice. </li>
                      <li>3 one-on-one meetings.</li>
                      <li>1 investor meet.</li>
                   </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                  </div>
                </div>
              </div>
            </div>
            
               <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel">Gold Package</h4>
                  </div>
                  <div class="modal-body">
                   <ul>
                       <li>25 minutes speaking slot/panel discussion.</li>
                       <li>Exhibition booth</li>
                       <li>2-3 delegates participation.</li> 
                       <li>A smart networking application that will help you connect, share file, brainstorm and set one-on-one meetings with the delegates at the conference.</li>
                         <li>Inclusion in our Promotional Campaigns via our Media Partners. </li>
                       <li>Social Media Boost Posts.</li>
                       <li>Video interview at the conference</li>
                      <li>50% discount to end user's of your choice. </li>
                 
                   </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                  </div>
                </div>
              </div>
            </div>
            
               <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel">Silver Package</h4>
                  </div>
                  <div class="modal-body">
                   <ul>
                     <li>1-2 delegates participation.</li> 
                       <li>Exhibition booth</li>
                       <li>A smart networking application that will help you connect, share file, brainstorm and set one-on-one meetings with the delegates at the conference.</li>
                         <li>Inclusion in our Promotional Campaigns via our Media Partners. </li>
                       <li>Social Media Boost Posts.</li> 
                 
                   </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                  </div>
                </div>
              </div>
            </div>
            
                <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel">Start up Elevate Package</h4>
                  </div>
                  <div class="modal-body">
                   <ul>
                     <li>1-2 delegates participation.</li> 
                       <li>Exhibition booth</li>
                       <li>A smart networking application that will help you connect, share file, brainstorm and set one-on-one meetings with the delegates at the conference.</li>
                         <li>Inclusion in our Promotional Campaigns via our Media Partners. </li>
                       <li>Social Media Boost Posts.</li> 
                 
                   </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                  </div>
                </div>
              </div>
            </div>
            
                <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel">Delegate Pass VIP</h4>
                  </div>
                  <div class="modal-body">
                   <ul>
                     <li>Access to the 2 day conference.</li> 
                       <li>Access to the VIP networking lounge.</li>
                       <li> Access to our networking app.</li>
                         <li>Soft copy of all the presentation will be shared with you for the future reference and training purpose. </li>
                       <li> Lunch and networking cocktail reception party hosted by Group Futurista.</li> 
					   <li>Unlimited one on one meetings via Networking App </li>
                 
                   </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                  </div>
                </div>
              </div>
            </div>
			
			<div class="modal fade" id="myModal41" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel">Delegate Pass</h4>
                  </div>
                  <div class="modal-body">
                   <ul>
                     <li>Access to the 2 day conference.</li> 
                       <li>Access to the VIP networking lounge.</li>
                       <li> Access to our networking app.</li>
                         <li>Soft copy of all the presentation will be shared with you for the future reference and training purpose. </li>
                       <li> Lunch and networking cocktail reception party hosted by Group Futurista.</li> 
                 
                   </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                  </div>
                </div>
              </div>
            </div>
			
                <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel">Connect</h4>
                  </div>
                  <div class="modal-body">
                   <ul>
                     <li>1 Day Access to the Summit</li> 
                       <li>Access to Exhibition Floor</li>
                       <li> Access to our networking app.</li>
                         <li>Buffet Lunch</li>
                       <li>Access to Group Futurista Networking App</li> 
                      <li>Group Futurista Module for all #FOPM2019 Sessions</li>
                 
                   </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                  </div>
                </div>
              </div>
            </div>
                <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel">Startup Delegate Pass</h4>
                  </div>
                  <div class="modal-body">
                   <ul>
                     <li>2 Days Access to the Summit</li> 
                       <li>Access to Exhibition Floor</li>
                       <li>Buffet Lunch</li>
                         <li>Access to Group Futurista Networking App</li>
                       <li> Invitation to the Cocktail Reception</li> 
                 
                   </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                  </div>
                </div>
              </div>
            </div>
            
            <script>
                function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});
            </script>
</body>
</html>