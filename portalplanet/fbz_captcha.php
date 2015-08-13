<?php
$key = "ZmU4MWI1NjNlNmNjNmJiNzRlNDZjNmU3OGMxNTIzMGY=";

$url = "https://www.feedblitz.com/f.api/captcha?key=".$key;

echo $url;
$result = fbz_get_web_page($url);

$p = xml_parser_create();
xml_parse_into_struct($p, $result, $vals, $index);
xml_parser_free($p);
echo "Index array\n";
print_r($index);
echo "\nVals array\n";
print_r($vals);

function fbz_get_web_page($url, $fields_string, $countstring){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
  curl_setopt($ch,CURLOPT_POSTFIELDS, $url);

  //execute post
  $result = curl_exec($ch);
  //close connection
  curl_close($ch);
  return $result;
}
?>
