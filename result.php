<html>
<body>

<button onclick="history.go(-1);">Back </button>
<br>
<?php echo $_POST["name"]; ?>! 
<br>
<br>

<?php 

$chOne = curl_init(); 
curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 

// SSL USE 
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 

//POST 
curl_setopt( $chOne, CURLOPT_POST, 1); 

// Message 
curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$_POST["name"]); 

//ถ้าต้องการใส่รุป ให้ใส่ 2 parameter imageThumbnail และimageFullsize
//curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=hi&imageThumbnail=http://www.wisadev.com/wp-content/uploads/2016/08/cropped-wisadevLogo.png&imageFullsize=http://www.wisadev.com/wp-content/uploads/2016/08/cropped-wisadevLogo.png"); 

// follow redirects 
curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 

//ADD header array 
//$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer VdyTAIdviDk5Wg4titlYb8BV5ATiEzptHlH46lLFPKo', ); 
$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer U1m2FrPa2VEjaCpcU2SN1SuFEpFj0PVmvFwce1ldBws', ); 
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 

//RETURN 
curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec( $chOne ); 

//Check error 
if(curl_error($chOne)) { 
  echo 'error:' . curl_error($chOne); 
} 
else { 
  $result_ = json_decode($result, true); 
  echo "status : ".$result_['status']; 
  echo ", ";
  echo "message : ".$result_['message']; 
} 

//Close connect 
curl_close( $chOne ); 

?>

</body>
</html> 