<?php
$json = file_get_contents('php://input');
$instring = json_decode($json, true);
$email = $instring["email"];
//$myname = $instring["myname"];
$listid = 982484;
$key = "ZmU4MWI1NjNlNmNjNmJiNzRlNDZjNmU3OGMxNTIzMGY=";

//$url = "http://www.feedblitz.com/f?SimpleApiSubscribe&key=ZmU4MWI1NjNlNmNjNmJiNzRlNDZjNmU3OGMxNTIzMGY=&email=".$email."&listid=".$listid."&tags=sidebar,online,site";

$url = "https://www.feedblitz.com/f.api/resourcepath?key=".$key."&email=".$email.
        "&listid=".$listid."&tags=sidebar,online,site";

echo fbz_get_web_page($url);

function fbz_get_web_page($url){
    $options = array(
        CURLOPT_RETURNTRANSFER => true, // return web page
        CURLOPT_HEADER => false, // don't return headers
        CURLOPT_FOLLOWLOCATION => true, // follow redirects
        CURLOPT_ENCODING => "", // handle all encodings
        CURLOPT_USERAGENT => "PHP FeedBlitz Web Form Handler", // who am i
        CURLOPT_AUTOREFERER => true, // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120, // timeout on connect
        CURLOPT_TIMEOUT => 120, // timeout on response
        CURLOPT_MAXREDIRS => 10, // stop after 10 redirects 
    );

    $ch = curl_init( $url ); 
    curl_setopt_array( $ch, $options ); 
    $content = curl_exec( $ch ); 
    $err = curl_errno( $ch ); 
    $errmsg = curl_error( $ch ); 
    $header = curl_getinfo( $ch ); 
    curl_close( $ch ); 
    $header['errno'] = $err; 
    $header['errmsg'] = $errmsg; 
    $header['content'] = $content; 
    return $url;//$header;
}
function my_curl( $url ) {
    if ($email != "") {
	$curl = curl_init( $url );

	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $curl, CURLOPT_HEADER, 0 );
	curl_setopt( $curl, CURLOPT_USERAGENT, '' );
	curl_setopt( $curl, CURLOPT_TIMEOUT, 10 );
        curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false);

	$response = curl_exec( $curl );
	if( 0 !== curl_errno( $curl ) || 200 !== curl_getinfo( $curl, CURLINFO_HTTP_CODE ) ) {
            $response = curl_errno( $curl );//null;
	} // end if
	curl_close( $curl );
    } else {
        $response = "{'status':'error'}";
    }
    return $response;

} // end curl
?>
