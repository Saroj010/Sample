<?php
// namespace Weather\App\http\Controller\Admin;
// class Controller
// {

// }

YahooWeather\Weather\PHPAnonymousYahooWeather::class,
namespace Weather\App\http\Controllers\Admin;

use Illuminate\http\Request;
use YahooWeather;
class WeatherController extends Controller
{
    public function get_weather(){
    	$weather = YahooWeather::Country('lebanon','ar');
    	var_dump($weather);
    }