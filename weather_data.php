<?php
// current data json file
$jsonfile  = ('weatherdata.json');
// 5 days data json file 
$jsonfile2  = ('weatherdaysdata.json');


if (!empty($_GET['search'])) {
	if ($_GET['cityname'] != "") {
		// $city = "ludhiana";
		$city = $_GET['cityname'];
		$api_key = "d2c659b8cb715d8e28de4a04ef5a14d4";
		$api_url = "https://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&appid=d2c659b8cb715d8e28de4a04ef5a14d4";

		$urldata = @file_get_contents($api_url);
		$data = json_decode($urldata, true);
		$putdata = file_put_contents($jsonfile, json_encode($data, JSON_PRETTY_PRINT));

		// name will be show on display time 
		if (isset($data["name"])) {
			$lat = $data["coord"]["lat"];
			$lon = $data["coord"]["lon"];
			// var_dump($lat);


			$day_url = "https://api.openweathermap.org/data/2.5/forecast?lat=$lat&lon=$lon&units=metric&appid=$api_key";
			$day_urldata = @file_get_contents($day_url);
			$daydata = json_decode($day_urldata, true);

			$putdays = file_put_contents($jsonfile2, json_encode($daydata, JSON_PRETTY_PRINT));

			// city name 
			$name = $data["name"];

			// description
			$desc = $data["weather"][0]["description"];

			// kelvin convert into celcius formula
			$temp  = round($data["main"]["temp"]) . "&degC";

			//feels like temperature 
			$feel  = "Feels like " . round($data["main"]["feels_like"]) . "&degC";
			// var_dump($feel);

			// convert wind speed meter/sec convert into km/h 
			$windspeed = "Wind Speed : " . $data["wind"]["speed"] . " km/h";

			//humidity 
			$hmd = "Humidity : " . $data["main"]["humidity"] . "%";

			// pressure
			$pressure = "Pressure : " . $data["main"]["pressure"] . " mbar";


			// sunrise and sunset numbers convert into time
			$sunrise_chng = $data["sys"]["sunrise"];
			$sunset_chng = $data["sys"]["sunset"];
			// var_dump($sunrise_chng);

			// set timezone to utc
			date_default_timezone_set('Asia/kolkata');

			// set time for sunset and sunrise
			$sunrise = "Sunrise : " . date('H:i a', $sunrise_chng);
			$sunset = "Sunset : " . date('H:i a', $sunset_chng);


			// date converting
			$dt_chng = $data["dt"];
			$date = date('y-m-d', $dt_chng);

			// time change 
			$time = " Time : " . date('H:i a');
			// var_dump($time);

			// day name section
			$datestring = $date;
			$dayname = date('l', strtotime($datestring));
			$dayname =  date('l');
		} else {
?>
			<script>
				alert("Incorrect City Name! Try Again");
			</script>
		<?php
		}
	} else {
		?>
		<script>
			alert("Please fillup the City Name!");
		</script>
<?php
	}
}

// by default ludhiana info show if user not write cityname on searchbar and not click search button 
else
{
	
	$api_key = "d2c659b8cb715d8e28de4a04ef5a14d4";
	$api_url = "https://api.openweathermap.org/data/2.5/weather?q=ludhiana&units=metric&appid=d2c659b8cb715d8e28de4a04ef5a14d4";

	$urldata = @file_get_contents($api_url);
	$data = json_decode($urldata, true);
	
	
			$lat = $data["coord"]["lat"];
			$lon = $data["coord"]["lon"];
			// var_dump($lat);


			$day_url = "https://api.openweathermap.org/data/2.5/forecast?lat=$lat&lon=$lon&units=metric&appid=$api_key";
			$day_urldata = @file_get_contents($day_url);
			$daydata = json_decode($day_urldata, true);
	
	// city name 
	$name = $data["name"];

	// description
	$desc = $data["weather"][0]["description"];

	// kelvin convert into celcius formula
	$temp  = round($data["main"]["temp"]) . "&degC";

	//feels like temperature 
	$feel  = "Feels like " . round($data["main"]["feels_like"]) . "&degC";
	// var_dump($feel);

	// convert wind speed meter/sec convert into km/h 
	$windspeed = "Wind Speed : " . $data["wind"]["speed"] . " km/h";

	//humidity 
	$hmd = "Humidity : " . $data["main"]["humidity"] . "%";

	// pressure
	$pressure = "Pressure : " . $data["main"]["pressure"] . " mbar";


	// sunrise and sunset numbers convert into time
	$sunrise_chng = $data["sys"]["sunrise"];
	$sunset_chng = $data["sys"]["sunset"];
	// var_dump($sunrise_chng);

	// set timezone to utc
	date_default_timezone_set('Asia/kolkata');

	// set time for sunset and sunrise
	$sunrise = "Sunrise : " . date('H:i a', $sunrise_chng);
	$sunset = "Sunset : " . date('H:i a', $sunset_chng);


	// date converting
	$dt_chng = $data["dt"];
	$date = date('y-m-d', $dt_chng);



	// time change 
	$time = " Time : " . date('H:i a');
	// var_dump($time);

	// day name section
	$datestring = $date;
	$dayname = date('l', strtotime($datestring));
	$dayname =  date('l');
	

}

?>