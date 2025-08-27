<?php



//error_reporting(E_ALL);
        $namef=$_POST['uname']; 
	$emailf=$_POST['email'];
        $mobilef=$_POST['phone'];
	
	$keyFieldf=$_POST['key'];
	//$ipf=$_POST['field6'];
	
 	
$sub="Enquiry Mail from : Brother";
	
	 
	 $msg="Name :$namef\n";
         $msg.="Mob :$mobilef\n";
	 $msg.="Email :$emailf\n";
         
	 $msg.="Model :$keyFieldf\n";
         //$msg.="IP :$ipf\n";
	 
        
         
   $headers = "From: ${emailf}\nReply-To: ${emailf}";
   

mail("raybrowngvc@gmail.com", "Enquiry Mail from: Brother", "$msg","From:$emailf");



	
    echo '<script>  window.location.href = "../loading/index.html";</script>';

?>
