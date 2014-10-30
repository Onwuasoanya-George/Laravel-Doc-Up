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

Route::get('/', function()
{
	return View::make('login');
});




Route::get('tables', function() {
 return View::make('tables');
 });

Route::get('profile', function() {
 return View::make('profile');
 });

Route::get('login', function() {
 return View::make('login');
 });

Route::post('login', function() {
	// do logic of login here
 //return View::make('login');
 });
//index.blade.php workings
Route::get('index', function() {
 return View::make('index');
 });
Route::post('index', array( 'before' => 'csrf' , function() {
	$data = Input::all();
	//var_dump($data);
	
 return View::make('index');
 }));
// end index.blade.php workings

// form.blade.php workings
Route::get('forms', function() {
	 $datamessage = array('message' => '', 'condition' => ''  );
 return View::make('forms', $datamessage);
 });

Route::post('forms', array( 'before' => 'csrf' , function() {
	$data = Input::all();
	
// do logic of posting here
	//build the validation constraints set

	$rules = array(
		 'title' =>  'alpha',
		 'details' => 'required',
		 'picture' => 'mimes:jpg,gif,png|max:400'
		 
		);
	//create a new validator instance
	$validator = Validator::make($data, $rules);

	if ($validator->passes()) {
		$post_mess = array('message' => 'Posted','condition' => 'good' );
		$news =  new Newee;
		$news->title = $data['title'];
		$news->description =$data['description'];
		$news->image = "kjbnkgfn";
		$news->postedid = "0";
		$news->save();
 		return View::make('forms', $post_mess);
	}else{
		$mess = $validator->messages();
		$messed = '';
		foreach ($mess->all('<li>:message</li>') as $nmess){
			$messed = $messed." ".$nmess ;
		}
		$messed = "Error: <br />".$messed;
		$post_mess = array('message' => $messed,'condition' => 'bad' );
 		return View::make('forms', $post_mess);

	}

	$post_mess = array('message' => 'Not Posted','condition' => 'bad' );
 return View::make('forms', $post_mess);
 }));
// end form.blade.php workings