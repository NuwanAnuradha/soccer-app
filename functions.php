<?php

	function initiateAPI(){

		$date = date(Y-m-d);

		$url = "https://api.soccersapi.com/v2.2/fixtures/?user=anuradha.creative4&token=34d3b561c39ebe00721999ebbe2946f9&t=schedule&d=".$date."&league_id=1609";

		//$curl -> iniitiate call to the server
		$curl = curl_init($url);

		//specifying the options

		//first parameter is alwas $curl, second param is options that you want, 
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		//these are optional,but I would prefer it would be more reliable if you have this options
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);


		//Making the request
		$result = curl_exec($curl);


		//After all you need to close the connection: one of the best pratices is if you made the connection
		//its better to close it
		curl_close($curl);

		//Lastly we need to return the result
		return $result;
	}


	function convertIntoArray(){

		$result = iniitiateAPI();

		//convert result into an array
		$responseArray = json_decode($result, true);

		return $responseArray;
	}

	function yesterdayMatches(){

		$data = data('Y-m-d');
		$yesterday = strftime("%Y-%m-%d",strtotime("$date -1 day"));
		// var_dump($nextday);

		$url = "https://api.soccersapi.com/v2.2/fixtures/?user=anuradha.creative4&token=34d3b561c39ebe00721999ebbe2946f9&t=schedule&d=".$date."&league_id=1609";

		//$curl -> iniitiate call to the server
		$curl = curl_init($url);

		//specifying the options

		//first parameter is alwas $curl, second param is options that you want, 
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		//these are optional,but I would prefer it would be more reliable if you have this options
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);


		//Making the request
		$result = curl_exec($curl);


		//After all you need to close the connection: one of the best pratices is if you made the connection
		//its better to close it
		curl_close($curl);

		//Lastly we need to return the result
		return json_decode($result, true);

	}


?>