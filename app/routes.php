<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Homepage
Route::get('/', function() {
	
    return View::make('index');

});

Route::get('/lorem-ipsum', function()
{
	return View::make('lorem-ipsum');
});


Route::post('lorem-ipsum', function()
{

$data = Input::all();

	$rules = array(
        "length" => "required|integer|min:1|max:50"
    );

	$validator = Validator::make($data, $rules);

    if ($validator->fails()) {
    	$messages = $validator->messages();
        return Redirect::to("lorem-ipsum")
        	->withErrors($validator);
    }

	$paragraphGenerator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $paragraphGenerator->getParagraphs(Input::get("length"));
		$textResult = "<p>".implode("</p><p>", $paragraphs)."</p>";

	return View::make("lorem-ipsum")
		->with("textResult", $textResult);
});

Route::get('/user', function()
{
	return View::make('user');
	// return ('user');
});

Route::post('/user', function ()
{

	$data = Input::all();

	$rules = array(
        "length" => "required|integer|min:1|max:50"
    );

	$validator = Validator::make($data, $rules);

    if ($validator->fails()) {
    	$messages = $validator->messages();
        return Redirect::to("user")
        	->withErrors($validator);
    }

	$faker = Faker\Factory::create();

	$nameArray = [];
	$emailArray = [];
	$phoneArray = [];


	for($i = 0; $i < Input::get("length"); $i++) {
 		array_push($nameArray, $faker->name);
 			if (Input::get("include_email") == "yes") {
 				array_push($emailArray, $faker->email);
 			}
 			if (Input::get("include_phone") == "yes") {
 				array_push($phoneArray, $faker->phoneNumber);
 			}
 	}

	return View::make("user")
		->with("nameArray", $nameArray)
		->with("emailArray", $emailArray)
		->with("phoneArray", $phoneArray);

});