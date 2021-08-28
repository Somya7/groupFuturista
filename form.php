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
	
		$typearr1 = array("jpg","jpeg", "pjpeg", "gif", "png", "x-png");
	$target_dir1 = "image/";
	$file2=rand(100,1000000).preg_replace('/[^A-Za-z0-9.\-]/','',$_FILES['images']['name']);
	$target_file2 = $target_dir1.$file2;
	$type2 = strtolower(pathinfo($file1, PATHINFO_EXTENSION));
	if ($_FILES['images']['name'] !='') {

		if (in_array($type2,$typearr1)) {
			if (move_uploaded_file($_FILES['images']['tmp_name'],$target_file2)) {
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
$date=$_POST['date'];
$loc=$_POST['loc'];
$sname=$_POST['sname'];
$com=$_POST['com'];
$de=$_POST['de'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$ke=$_POST['ke'];
$city=$_POST['city'];
$ceo=$_POST['ceo'];
$sig=$_POST['sig'];
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

                                <h3><strong> This SPEAKER CONTRACT is made between Group Futurista and the undersigned speaker.:</strong></h3>
                                <h4>Name of the event : '.$name.'</h4>
                                <h4>Date(s) : '.$date.'</h4>
                                <h4>Event Location: . : '.$loc.'</h4>
                               	<h4>Speaker Name: : '.$sname.'</h4>
                               	<h4>Company : '.$com.'</h4>
                              <h4>Designation : '.$de.'</h4>
                                <h4>Contact : '.$contact.'</h4>
                                <h4>Email : '.$email.'</h4>
                               	<h4>Keynote:  : '.$ke.'</h4>
                                 <h4>City:  : '.$city.'</h4>
                             <img style="height:50%; width:25%;" src="https://groupfuturista.com/'.$target_file1.'">
                             Accepted by:
                                <h4>Speaker Name:  : '.$ceo.'</h4>
                                <h4>Signature : '.$sig.'</h4>
                               	<h4>Date: : '.$dat.'</h4>
                               
             <img style="height:50%; width:25%;" src="https://groupfuturista.com/'.$target_file2.'">
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
          
$sendto= "info@groupfuturista.com";
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <groupfuturista.com>' . "\r\n";
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
<title>Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.line
{border-bottom:1px solid #000;
margin:2px;
}
h3{
margin:30px 0;
}
input {
border-top:none;
border-left:none;
border-right:none;
}
input[type=file] {
    display: inherit !important;
}
.form
{
    padding:20px 40px;
}
.left_line
{
    border-left:10px solid #299bd9;
    color:#2c535a; 
    margin-top:30px;
}
.left_line h4 {
    font-weight: bold;
}
body
{
    background:#eee;
}
.container
{
    background:#fff;
}
</style>
</head>
<body> 
<div class="container">
<div class="row">
<div class="col-md-12 line">
<div class="col-md-6">
<img src="assets/website/assets/img/logo.png" class="img-responsive">
</div>
<div class="col-md-6 text-right">
<img src="assets/website/assets/img/top.png" class=" hidden-xs img-responsive">
<h4>Ref No:2777545 /  New Branch:680</h4>
</div> 
</div>
<form method="post" action=""  enctype="multipart/form-data" >
<div class="col-md-12 line form">
<h3 align="center"><b>SPEAKER CONTRACT</b></h3>
<h4>This <b>SPEAKER CONTRACT</b> is made between <b>Group Futurista</b> and the undersigned speaker.</h4><br>
 
<h4><b>1. EVENT DESCRIPTION:</b></h4>
<p>Name of the event <input type="text" name="name"></p>
<p>Date(s) <input type="date" name="date"></p>
<p>Event Location: <input type="text" name="loc"></p><br>
<h4><b>2. SPEAKER DETAILS:</b></h4> 
<p>Speaker Name: <input type="text" name="sname"></p>
<p> Company: <input type="text" name="com"></p>
<p> Designation: <input type="text" name="de"></p>
<p>Contact: <input type="text" name="contact"></p>
<p>Email Id: <input type="text" name="email"></p>
<p> Keynote: <input type="text" name="ke"></p>
<p>City: <input type="text" name="city"></p><br>
 <input type="file" name="image">
 <br>
     <p>Image of the speaker.</p>
 
<h4><b>3. GROUP FUTURISTA CONTACT:</b></h4> 
<p>Group Futurista OU.</p>
<p>Harju maakond, Kuusalu Vald,</p>
<p>Pudisoo Kula, Mannimae, 74626.</p>
<p>Email: info@groupfuturista.com</p>
<p>Contact: +44 203 432 7761</p><br>
<h4><b>4. CANCELLATIONS:</b></h4>
<p>Either party may cancel this Speaker Contract without obligation to the other if cancellation notice is received in written form at least 30 days before appearance date.</p>
<br>
<div class="col-md-6" style="padding:0;">
    <p> Accepted by:</p>
<p>Satvik Katyal</p>
<p>CEO and Founder</p>
<p>Group Futurista</p>
<p><img src="assets/website/assets/img/logo.png" height="50px"></p>
</div>
<div class="col-md-6">
    <p> Accepted by:</p>
<p>Speaker Name: <input type="text" name="ceo"></p>
<p>Signature:  <span><input type="file" name="images"></span></p>
<p><b>Note:</b> Scan your signature on a white paper and upload here</p>
<p>Date:  <input type="date" name="dat"></p>
<p><button type="submit" name="submit" class="btn btn-info">Submit</button></p>
</div>
</div>
</form>
<div class="col-md-12">
<div class="col-md-6 left_line">
<h4> Group Futurista OU</h4>
<h4>Harju maakond, Kuusalu Vald,</h4>
<h4>Pudisoo Kula, Mannimae, 74626.</h4>
<h4>Email: info@groupfuturista.com</h4>
<h4>Contact: +44 203 432 7761</h4> 
</div> 
<div class="col-md-6 text-right">
<img src="assets/website/assets/img/footer.png" class=" hidden-xs img-responsive">
</div> 
</div>


</div>
</div>
</body>
</html>