<pre>
<?php

include 'config.php';


/*
دستور send
یک یا گروهی از صورتحساب ها را دریافت و ذخیره کرده و به سامانه مودیان مالیات ارسال می کند

*/
$invoices = get_invs();
$data =  [
    'command'=>'send' ,        // send    
    'inv'=>json_encode($invoices),
    'sal_mali'=>'1403'
];




$res = curl_command($data, $Auth);
print_r($res);


function get_invs(){
	
	// این یک مثال از زیر صورتحساب هست که نیاز هست بر اساس نوع صورتحساب تغییر داده شود
	
	$header = array();	
	
	$header['invoce_local'] =  1;   // این شماره سند حسابداری یا یک شماره غیر تکراری برای شناسایی هر فاکتور است
	
	
	$header['indatim'] =   date('Y-m-d H:i:s');
	$header['indati2m'] =  date('Y-m-d H:i:s') ;
	$header['inty'] =  2;	
	$header['irtaxid'] =  null;  // برای قاکتور اصلاحی ابطالی برگشت از فروش مقدار کد مالیاتی صورتحساب مرجع است
	$header['inp'] =  1;
	$header['ins'] =  1;	 
	$header['tob'] =  1;
	$header['bid'] = null;
	$header['tinb'] = null;
	$header['sbc'] = null;
	$header['bpc'] = null;
	$header['bbc'] = null;
	$header['ft'] = null;
	$header['bpn'] = null;
	$header['scln'] = null;
	$header['scc'] = null;
	$header['cdcn'] = null;
	$header['cdcd'] = null;
	$header['crn'] = null;
	$header['billid'] = null;
	$header['tprdis'] = 1000000;
	$header['tdis'] = 0;
	$header['tadis'] = 1000000;
	$header['tvam'] = 90000;
	$header['todam'] = 0;
	$header['tbill'] = 1090000;
	$header['tonw'] = 100;
	$header['torv'] = null;
	$header['tocv'] = null;
	$header['setm'] = 1;
	$header['cap'] = 90000;
	$header['insp'] = 0;
	$header['tvop'] = 90000;
	$header['tax17'] = null;

	// body
	//این ریز اقلام هر فاکتور و شامل ارائه چند بعدی است
	$body = array();
	$body['sstid'] = "2153265989636";
	$body['sstt'] = "pastil";
	$body['mu'] = "96";
	$body['am'] = 1;
	$body['nw'] = 100;
	$body['fee'] = 1000000;
	$body['cfee'] = null;
	$body['cut'] = null;
	$body['exr'] = null;
	$body['ssrv'] = null;
	$body['sscv'] = null;
	$body['prdis'] = 1000000;
	$body['dis'] = 0;
	$body['adis'] = 1000000;
	$body['vra'] = 9;
	$body['vam'] = 90000;
	$body['odt'] = null;
	$body['odr'] = null;
	$body['odam'] = null;
	$body['olt'] = null;
	$body['olr'] = null;
	$body['olam'] = null;
	$body['consfee'] = null;
	$body['spro'] = null;
	$body['bros'] = null;
	$body['tcpbs'] = null;
	$body['cop'] = 90000;
	$body['vop'] = 90000;
	$body['bsrn'] = null;
	$body['tsstam'] = 1090000;

	
	 

	$invoice = array();	
	$invoice['header'] = $header;
	$invoice['body'] = array($body);

	
	return $invoice;

}
?>
</pre>