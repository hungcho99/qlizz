<?php
system("clear");
$res="\033[0m";
$red="\033[0;31m";
$green="\033[0;32m";
$yellow="\033[0;33m";
$white= "\033[0;37m";
$banner="  
 \033[1;32m██████╗ ██╗     ██╗███████╗███████╗
\033[1;33m██╔═══██╗██║     ██║╚══███╔╝╚══███╔╝
\033[1;35m██║   ██║██║     ██║  ███╔╝   ███╔╝ 
\033[1;36m██║▄▄ ██║██║     ██║ ███╔╝   ███╔╝  
\033[1;31m╚██████╔╝███████╗██║███████╗███████╗
\033[1;34m ╚══▀▀═╝ ╚══════╝╚═╝╚══════╝╚══════╝\n";
echo $banner;  
echo "\n\033[1;32m ID Facebook Cần Tăng Follow : $white";
$id = trim(fgets(STDIN)); 
echo "\n\033[1;32m Cookie Qlizz : $white";
$cookie = trim(fgets(STDIN));
$idsub = $id;
$n = '1000000';
system("clear");
echo $banner;
$i = 0;
while ($i++ < $n && $id > 0) {
	
	 	 echo $green; echo"\n\033[1;36m Đang tăng Follow cho ID "; echo "\033[1;32m".$id."\033[1;37m";
	sleep(1);
  echo" lượt  ";  echo "\033[1;31m".$i."\033[1;37m\n"; // 10
  $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, 'https://qlizz.com/autofollowers');  
    curl_setopt($ch, CURLOPT_HEADER, 1);
    $headers = array();
    $headers[] = 'Content-Type: application/xhtml+xml';
    $headers[] = 'Cookie: ' . $cookie;
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/77.0.126 Chrome/71.0.3578.126 Safari/537.36';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    $token = explode('"', explode('<input type="hidden" name="_token" value="', $result)[1])[0];
    $ch1 = curl_init();
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch1, CURLOPT_URL, 'https://qlizz.com/send');  
    curl_setopt($ch1, CURLOPT_POSTFIELDS, "_token=$token&submit_id=$idsub&tool=autofollowers");
    curl_setopt($ch1, CURLOPT_POST, 1);
    curl_setopt($ch1, CURLOPT_HEADER, 1);
    $headers = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'Cookie: ' . $cookie;
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/77.0.126 Chrome/71.0.3578.126 Safari/537.36';
    curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers);
    $result1 = curl_exec($ch1);
    echo"\n\033[1;33mTăng Follow Thành Công";
  echo  "\n\033[1;37m \033[1;31mVui lòng chờ \033[1;37m30 phút";
sleep(1800);
}
?>
      