<?php
  session_start() ;
  ob_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
 
 
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
   <!-- Refs -- https://www.npmjs.com/package/validator -->
  <script src="https://unpkg.com/validator@latest/validator.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.js"></script>
  
   <!-- Refs -- https://cure53.de/purify -->
  <script src="https://lovetoshopmall.com/src/js/purify.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


  <link href="https://lovetoshopmall.com/src/css/table.css" rel="stylesheet"> 
   
  <title>Talonplus Bot-V2</title>
 </head>
 <body>
  

 

<?php
function firstGitReposBackup() {  ?>
 
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>



 
<?php




$access_token = 'N0IzKf3n/tuu23eKxvUEkAY6Afzj8nu+lQYp+FyOAZXSVofsrCArcwRBOJKEbssASNnN5S35vUE5yiQ3dPcvlRqu9G0IVPHVxUHUHW63dUUUdxfcWpbZUj7iu8ImPFKK8LnAdy5wGDxvMhUD1A1fugdB04t89/1O/w1cDnyilFU='; 


$sValue= getInputMessage() ;
$MessageInput = $sValue[0];  
$replyToken =  $sValue[1];  
$ActionType= substr($MessageInput,0,1) ; 
$resp = "Bot Set From GIT -----Ok---Action Type-->" .$ActionType ;
//echo $resp;
$contact9 = $sValue[0] ;
$result = getPortImageURL($contact9) ;
$str    = getPortDataString($contact9) ;
$resultAr = explode("|",$result); 



if (trim($resultAr[0]) == "Fail") {
  pushMessage($resultAr[1],$access_token,$replyToken) ; 
  return;
}  else {
  $ImageFileName = $result ; 
  pushImage($ImageFileName,$access_token,$replyToken);
  
  pushMessage($str,$access_token,$replyToken) ; 
}

//pushMessage($result,$access_token,$replyToken) ; 
echo " Curl Result-->" . $result ;
return;
$text = "งง ???? " .$sValue[0]; 
$text .= " พิมพ์  P123456789 เพื่อดู ใบ Port งาน--->" . $resp; 
//echo $text ;


$ImageFileName = "https://images.pexels.com/photos/5834/nature-grass-leaf-green.jpg?auto=compress&cs=tinysrgb&h=350" ;
//pushMessage($text,$access_token,$replyToken) ; 
//pushImage($ImageFileName,$access_token,$replyToken);

pushMessage($text,$access_token,$replyToken) ; 

//return;

//pushMessage($resp,$access_token,$replyToken) ;  

if ($ActionType == "C1" ) {

   $resp = getData($MessageInput) ;    
   pushMessage($resp,$access_token,$replyToken) ; 
   $ImageFileName = "https://images.pexels.com/photos/5834/nature-grass-leaf-green.jpg?auto=compress&cs=tinysrgb&h=350" ;
   pushImage($ImageFileName,$access_token,$replyToken);
   return;
}

if ($ActionType == "P" || $ActionType == "p" ) {

   $resp = getData($MessageInput) ;    
   //pushMessage($resp,$access_token,$replyToken) ; 
   $ImageFileName = $resp  ;
   pushImage($ImageFileName,$access_token,$replyToken);
   return;
} 



//$resp = getData($MessageInput) ;

$text = "งง ???? " .$sValue[0]; 
$text .= " พิมพ์  P123456789 เพื่อดู ใบ Port งาน--->" . $resp; 
pushMessage($text,$access_token,$replyToken) ; 
//return;
//$ImageFileName = $resp  ;
//$ImageFileName ="https://www.talonplus.co.th/port/images/portimages/port_20524_609263650.png";
//pushImage($ImageFileName,$access_token,$replyToken);

return;



// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			// Build message to reply back

			$text = getData() ;

			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];

			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";



function getData($MessageInput) { 

 $field_string = $MessageInput ; 
 $url = 'https://www.talonplus.co.th/port/class/recivecurl.php?sval='. $field_string;
// echo $url. "<br/>";
 $curl = curl_init();
 curl_setopt_array($curl, array(
                        CURLOPT_RETURNTRANSFER => 1,
                        CURLOPT_URL => $url,
                        CURLOPT_USERAGENT => 'Thai Prosperous IT co.,Ltd.'
                   ));
 $resp = curl_exec($curl);
 curl_close($curl);
// echo $resp ;
 return $resp;
    
} // end func


function getInputMessage() { 


$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'] ;  
			$sValue[] = $text;
			$sValue[] = $replyToken ;  
			return $sValue;
			
		}
	}
}
    
} // end func 




function pushMessage($text,$access_token,$replyToken) {


	// Make a POST Request to Messaging API to reply to sender


	        $messages = [
				'type' => 'text',
				'text' => $text
			];

			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];

			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";

}



function pushImage($ImageFileName,$access_token,$replyToken) {


	// Make a POST Request to Messaging API to reply to sender


	       

			$messages = [
				'type' => "image",
				 "originalContentUrl"=>$ImageFileName,
                 "previewImageUrl"=> $ImageFileName
			];

			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];

			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";

} 



function getPortImageURL($contact9No) { 

//       $portTransNo = "5805";
       $data = array (
        'contact9No' => $contact9No,
        'key2' => 'value2',
        'key3' => 'value3'
        );
        
        $params = '';
        foreach($data as $key=>$value)
                $params .= $key.'='.$value.'&';
         
        $params = trim($params, '&'); 
		$params = "contact9No=" . $contact9No ;

    $url= "https://talonplus.co.th/port/class/clsCreatePortImageByCurl.php" ;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 170); //Timeout after 7 seconds
    curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    
    $result = curl_exec($ch);
    curl_close($ch);

    if(curl_errno($ch))  //catch if curl error exists and show it
      $result =  'Curl error: ' . curl_error($ch);
    else
     echo $result;
         
    return $result ;

    
} // end func


function getPortDataString($contact9No) { 

//       $portTransNo = "5805";
       $data = array (
        'contact9No' => $contact9No,
        'key2' => 'value2',
        'key3' => 'value3'
        );
        
        $params = '';
        foreach($data as $key=>$value)
          $params .= $key.'='.$value.'&';
         
        $params = trim($params, '&'); 
		$params = "contact9No=" . $contact9No ;

    $url= "https://talonplus.co.th/port/class/clsCreatePortDataStringCurl.php" ;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 170); //Timeout after 7 seconds
    curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    
    $result = curl_exec($ch);
    curl_close($ch);

    if(curl_errno($ch))  //catch if curl error exists and show it
      $result =  'Curl error: ' . curl_error($ch);
    else
     echo $result;
         
    return $result ;

    
}



function getDataString($contact9) {


  
     $sql = "select max(portTransKeyID) from portTransaction where contact9='" . $contact9."'"; 
     $portTransNo= getValue($sql);
     
    
    
    
	$sql = "select contact9,contact11,cusname,carregis,carprovince from  `viewportrenewalStaff` WHERE recno =" . $portTransNo;
    $row = getRowSet($sql) ; 

    $downloadFileName = "https://www.talonplus.co.th/port/images/portimages/port_". $portTransNo . "_". $row['contact9']  . ".png" ;
    $str = "\n"; //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
    $str .= "เลขสัญญา  9 หลัก :".  $row['contact9'] . "\n" ;
    $str .= "ชื่อลูกค้า   :".  $row['cusname'] . "\n" ;
    $str .= "เลขทะเบียนรถ   :".  $row['carregis'] . ' ' . $row['carprovince'] .  "\n" ;
    $str .= "คลิกดูไฟล์รูป Port ---> " .$downloadFileName;
	return $str ;

    
} // end func

function getLINEProfile($datas)
{
   $datasReturn = [];
   $curl = curl_init();
   curl_setopt_array($curl, array(
     CURLOPT_URL => $datas['url'],
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_ENCODING => "",
     CURLOPT_MAXREDIRS => 10,
     CURLOPT_TIMEOUT => 30,
     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
     CURLOPT_CUSTOMREQUEST => "GET",
     CURLOPT_HTTPHEADER => array(
       "Authorization: Bearer ".$datas['token'],
       "cache-control: no-cache"
     ),
   ));
   $response = curl_exec($curl);
   $err = curl_error($curl);
   curl_close($curl);
   if($err){
      $datasReturn['result'] = 'E';
      $datasReturn['message'] = $err;
   }else{
      if($response == "{}"){
          $datasReturn['result'] = 'S';
          $datasReturn['message'] = 'Success';
      }else{
          $datasReturn['result'] = 'E';
          $datasReturn['message'] = $response;
      }
   }
   return $datasReturn;
}




} // end function
  
function Howto() { ?>

<div id="tokendiv" class="bordergray flex">
   
   <table>
    <caption>Step Work :: LineDev->heroku->github(myfirstgitrepos)->talonplus</caption>
   <tr>

	<td>1</td>
	<td><a href='https://developers.line.biz/console/channel/1563678604/messaging-api'>Line Developer</a></td>
	<td>username: scbnutv@gmail.com</td>
   </tr>
   <tr>
	<td>2</td>
	<td><a href='https://id.heroku.com/login' target=_blank>Heroku </a></td>
	<td>username : nutv99@gmail.com pass:Maithong9653@# หรือดูใน  db:devshop->myftp</td>
	<td><a href='https://dashboard.heroku.com/apps/ancient-shelf-53331'>Hook PHP</td>
   </tr>
   <tr>
	<td>3</td>
	<td><a href='https://github.com/nutv99' target=_blank>GitHib.com</a></td>
	<td>username : nutv99@gmail.com pass:maithong13489 หรือดูใน  db:devshop->myftp</td>
	<td>ใช้  <a href='https://github.com/nutv99/myfirstgitrepos'>https://github.com/nutv99/myfirstgitrepos </a></td>
   </tr>
   <tr>
	<td>4</td>
	<td>talonplus host</td>
	<td></td>
   </tr>
   
   <tr>
	<td>5</td>
	<td><a href='https://medium.com/linedevth/%E0%B8%A3%E0%B8%B9%E0%B9%89%E0%B8%84%E0%B8%A3%E0%B8%9A%E0%B8%88%E0%B8%9A%E0%B9%83%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%94%E0%B8%B5%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%94%E0%B8%B6%E0%B8%87-user-profile-%E0%B8%9C%E0%B9%88%E0%B8%B2%E0%B8%99-api-%E0%B8%95%E0%B9%88%E0%B8%B2%E0%B8%87%E0%B9%86%E0%B9%83%E0%B8%99-line-dafb17e5864a' target=_blank>วิธีดึง user id จาก Line </a></td>
	<td></td>
   </tr>
   </table>
    
 </div>

<?php
} // end function

?>
  
 </body>

	
</html>
