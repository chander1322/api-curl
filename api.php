<?php
		function api(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://securework.co/restapi/wp-json/wc/v3/products?consumer_key=%20ck_44ef2d0f136fee8e090fce7e8aa9e4d20b51883e&consumer_secret=cs_1130a9188379c4aeb61584521abeae3f88065312',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'GET',
		  CURLOPT_HTTPHEADER => array(
		    'Cookie: mailpoet_page_view=%7B%22timestamp%22%3A1656334383%7D'
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return $response;
}
echo api();