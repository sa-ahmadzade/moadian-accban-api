<pre>
<?php
include 'config.php';

/*
status دستور 
این دستور مسخصات شرکت/مودی را نمایش می دهد

*/

$data =  [
    'command'=>'status' ,        // 
];


$res = curl_command($data, $Auth);
print_r($res);


?>
</pre> 