<?php

// کد اعتبار سنجی کاربر در سامانه بان
$Auth = "";

function curl_command($data,$Auth){
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
	CURLOPT_URL => "https://api.accban.ir/api/",
	CURLOPT_RETURNTRANSFER=>true,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => json_encode($data),
	CURLOPT_HTTPHEADER => array(
		"Authorization: $Auth ",
    	),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl); 
    curl_close($curl);
    
    $result = json_decode($response, true);
    return $result;
}// end function



