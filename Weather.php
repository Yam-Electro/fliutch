<?php 

class Weather
{
	protected $token = "bff84a22162e74f2e553e56e6db7862c";
	
	public function getWeather(){
		
		$url = "api.openweathermap.org/data/2.5/weather";

		$params = [];
		$params['lat'] = $lat;
		$params['lon'] = $lon;
		$params['APPID'] = $this->token;

		$url .= "?" . http_build_query($params);

		$client = new Client([
			'baseUrl' => $url
		]);

		$result = $client->request('GET');

		return json_decode($result->getBody());
	}
}