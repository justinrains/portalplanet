<?php
$json = file_get_contents('php://input');
$instring = json_decode($json, true);
$email = $instring["email"];
//$myname = $instring["myname"];
$listid = 982484;
$key = "ZmU4MWI1NjNlNmNjNmJiNzRlNDZjNmU3OGMxNTIzMGY=";

$url = "https://www.feedblitz.com/f.api/user?key=".$key;
$rest = "email=".$email."&listid=".$listid."&tags=sidebar,online,site&password=Jerry1997";
//$rest .= "&random=51199314296160";
//$rest .= "&response=97B4E491";

echo fbz_get_web_page($url, $rest, 3);

function fbz_get_web_page($url, $fields_string, $countstring){
  $ch = curl_init(); 
  //set the url, number of POST vars, POST data
//  curl_setopt($ch,CURLOPT_URL, $url);
//  curl_setopt($ch,CURLOPT_POST, $countstring);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string."&".$fields_string);

  //execute post
  $result = curl_exec($ch);

  //close connection
  curl_close($ch);

  return $result;
}

?>
