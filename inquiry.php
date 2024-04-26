<pre>
<?php
include 'config.php';

/*
inquiry دستور 
استعلام وضعیت صورتحساب ارسال شده تکی یا گروهی بر اساس کد  پیگیری
*/
$inquiry_list = ['040c4c0e-c91a-4493-87af-bc4b0c13d503','040c4c0e-c91a-4493-87af-bc4b0c13d500'];
$data =  [
    'command'=>'inquiry' ,        // inquiry     
    'list'=>json_encode($inquiry_list) ,
	'sal_mali'=>'1403'
    
];
/*
	sal_mali :
	این مقدار پیشفرض سال مالی جاری سیستم است مثال 1403
	اگر این مقدار حذف شود سال مالی جاری سیستم محاسبه میشه
	اگر سال های قبل لازم هست این مقدار را به صال های گذشته تغییر دهید

*/

$res = curl_command($data, $Auth);
print_r($res);

?>
</pre>
