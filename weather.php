<?php

$city = $_POST['weather'];
 //初始化  
 $curl = curl_init();  
 //设置抓取的url  
 curl_setopt($curl, CURLOPT_URL, 'http://www.sojson.com/open/api/weather/json.shtml?city='.$city); 
 //设置获取的信息以文件流的形式返回，而不是直接输出。  
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
 //执行命令  
 $data = curl_exec($curl);  
 //关闭URL请求  
 curl_close($curl);  
 //显示获得的数据  
$contents = json_decode($data, true);
if (!empty($contents)){
	$array = array('status' => 0,'info' => $contents['data']['forecast']);
	echo json_encode($array);
}