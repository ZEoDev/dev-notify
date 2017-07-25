<?php 
//https://dev-notify.herokuapp.com/sendLineMessage.php?token=yr13UxwPSWyHyKW0uM2YlG7fH3cdWbfD3pAVqZuJINc&message=%E0%B8%AA%E0%B9%88%E0%B8%87%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%99%20%E0%B8%AA%E0%B8%99%E0%B8%B8%E0%B8%81%E0%B8%94%E0%B8%B5

echo "token : ".$_GET["token"];
echo ", ";
echo "message : ".$_GET["message"];
echo ", </br>";

$chOne = curl_init(); 
curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 

// SSL USE 
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 

//POST 
curl_setopt( $chOne, CURLOPT_POST, 1); 

// Message 
curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$_GET["message"]); 

//ถ้าต้องการใส่รุป ให้ใส่ 2 parameter imageThumbnail และimageFullsize
//curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=hi&imageThumbnail=http://www.wisadev.com/wp-content/uploads/2016/08/cropped-wisadevLogo.png&imageFullsize=http://www.wisadev.com/wp-content/uploads/2016/08/cropped-wisadevLogo.png"); 

curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=hi&imageThumbnail=https://www.google.co.th/imgres?imgurl=http%3A%2F%2Fwww.healthcarethai.com%2Fwp-content%2Fuploads%2F%25E0%25B8%2584%25E0%25B8%25B3%25E0%25B8%2599%25E0%25B8%25A7%25E0%25B8%2599%25E0%25B8%2599%25E0%25B9%2589%25E0%25B8%25B3%25E0%25B8%25AB%25E0%25B8%2599%25E0%25B8%25B1%25E0%25B8%2581%25E0%25B8%2595%25E0%25B8%25B1%25E0%25B8%25A7.png&imgrefurl=http%3A%2F%2Fwww.healthcarethai.com%2F%25E0%25B8%25AA%25E0%25B8%25B9%25E0%25B8%2595%25E0%25B8%25A3%25E0%25B8%2584%25E0%25B8%25B3%25E0%25B8%2599%25E0%25B8%25A7%25E0%25B8%2599%25E0%25B8%2599%25E0%25B9%2589%25E0%25B8%25B3%25E0%25B8%25AB%25E0%25B8%2599%25E0%25B8%25B1%25E0%25B8%2581%25E0%25B8%2595%25E0%25B8%25B1%25E0%25B8%25A7%2F&docid=qc46gnpAyNEg3M&tbnid=rl8IY2qf68smaM%3A&vet=10ahUKEwid47ie56PVAhUKh7wKHRMOB_kQMwgsKAIwAg..i&w=250&h=384&client=firefox-b&bih=636&biw=669&q=%E0%B8%AD%E0%B9%89%E0%B8%A7%E0%B8%99&ved=0ahUKEwid47ie56PVAhUKh7wKHRMOB_kQMwgsKAIwAg&iact=mrc&uact=8&imageFullsize=https://www.google.co.th/imgres?imgurl=http%3A%2F%2Fwww.healthcarethai.com%2Fwp-content%2Fuploads%2F%25E0%25B8%2584%25E0%25B8%25B3%25E0%25B8%2599%25E0%25B8%25A7%25E0%25B8%2599%25E0%25B8%2599%25E0%25B9%2589%25E0%25B8%25B3%25E0%25B8%25AB%25E0%25B8%2599%25E0%25B8%25B1%25E0%25B8%2581%25E0%25B8%2595%25E0%25B8%25B1%25E0%25B8%25A7.png&imgrefurl=http%3A%2F%2Fwww.healthcarethai.com%2F%25E0%25B8%25AA%25E0%25B8%25B9%25E0%25B8%2595%25E0%25B8%25A3%25E0%25B8%2584%25E0%25B8%25B3%25E0%25B8%2599%25E0%25B8%25A7%25E0%25B8%2599%25E0%25B8%2599%25E0%25B9%2589%25E0%25B8%25B3%25E0%25B8%25AB%25E0%25B8%2599%25E0%25B8%25B1%25E0%25B8%2581%25E0%25B8%2595%25E0%25B8%25B1%25E0%25B8%25A7%2F&docid=qc46gnpAyNEg3M&tbnid=rl8IY2qf68smaM%3A&vet=10ahUKEwid47ie56PVAhUKh7wKHRMOB_kQMwgsKAIwAg..i&w=250&h=384&client=firefox-b&bih=636&biw=669&q=%E0%B8%AD%E0%B9%89%E0%B8%A7%E0%B8%99&ved=0ahUKEwid47ie56PVAhUKh7wKHRMOB_kQMwgsKAIwAg&iact=mrc&uact=8"); 


// follow redirects 
curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 

//ADD header array 
$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$_GET["token"], ); 
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
