<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    //return view('welcome');
    //return view('layouts.app');
    return view('pages.home');
})->name('home');*/

Route::get('/','HomeRovController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('panel');

Route::get('verifyEmail','Auth\RegisterController@verifyEmail')->name('verifyEmail');
Route::get('verify/{email}/{verify_token}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', function () {
        //return response( 'Permissions insuffisantes !', 401 );
        return view('welcome');
    });
    Route::get('dashboard', function () {
        return view('pages.admin.dashboard');
    });

   // Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});


/*Route::get('/rules', function () {
    //
    return 'rules';
})->name('rules');*/
Route::get('home/rules','HomeRovController@rules')->name('rules');
/*Route::get('home/rewards', function () {
    //
    return 'rewards';
})->name('rewards');*/

Route::get('home/rewards','HomeRovController@rewards')->name('rewards');

Route::get('home/schedule', function () {
    //
    return 'schedule';
})->name('schedule');

Route::get('home/sponsor', function () {
    //
    return 'sponsor';
})->name('sponsor');


/*Route::get('home/place', function () {
    //
    return 'place';
})->name('place');*/
Route::get('home/place','HomeRovController@place')->name('place');

Route::get('home/schedule','HomeRovController@schedule')->name('schedule');

Route::get('home/activity','HomeRovController@activity')->name('activity');

Route::get('home/question','HomeRovController@question')->name('question');

Route::get('home/overall','HomeRovController@overallTeam')->name('overall');
Route::post('home/overall/detail', 'HomeRovController@getTeamDetail')->name('get-team-detail');

Route::get('home/participant','HomeRovController@participantList')->name('participant');
Route::get('participant/{token}','HomeRovController@getParticipant')->name('participant-get');

/*Route::get('register/privacy', function () {

    return view('pages.register.privacy');

})->name('register-privacy');*/
Route::get('register/privacy','HomeRovController@privacy')->name('register-privacy');

Route::get('paticipant/register','ParticipantController@index')->name('register-paticipant');
Route::post('paticipant/completed', 'ParticipantController@create')->name('paticipant-add');

Route::get('register/sponsor', function () {

    return 'sponsor';

})->name('register-sponsor');

/*
Route::get('register/players', function () {

    return view('pages.register.member');

})->name('register-players')->middleware(['role:admin|subscriber']);
*/

Route::get('register/players','PlayerController@index')->name('register-players')->middleware(['role:admin|subscriber']);
Route::get('register/players/add','PlayerController@showPlayerRegisForm')->name('register-players-add')->middleware(['role:admin|subscriber']);

/*
Route::get('register/players/add', function () {
    return view('pages.register.member-add');
})->name('register-players-add')->middleware(['role:admin|subscriber']);
*/

Route::post('register/players/add', 'PlayerController@create')->name('players-add')->middleware(['role:admin|subscriber']);
Route::get('register/players/{id?}', 'PlayerController@showEditForm')->name('players-edit')->middleware(['role:admin|subscriber']);
Route::post('register/players/update', 'PlayerController@update')->name('players-update')->middleware(['role:admin|subscriber']);
Route::post('register/players/check', 'PlayerController@checkRovIDExits')->name('players-check-id')->middleware(['role:admin|subscriber']);
Route::post('register/option', 'Auth\RegisterController@listInstitution')->name('register-team-option');

Route::post('register/completed', 'PlayerController@showTeamRegisterCompleted')->name('register-completed')->middleware(['role:admin|subscriber']);

/*Route::get('register/create-account', function () {
    //return view('auth.register');
    return view('pages.register.create');
})->name('register-create');*/

//Route::post('create-account', 'Auth\RegisterController@register');

Route::get('/register/continue', 'UserController@index')->name('team-video-form')->middleware(['role:admin|subscriber']);
Route::post('/register/continue', 'UserController@updateVideo')->name('team-video-post-update')->middleware(['role:admin|subscriber']);

Route::get('/myteam', 'UserController@showInfoTeam')->name('team-info-get')->middleware(['role:admin|subscriber']);

Route::get( '/download/{filename}', 'DownloadController@getDownloadPDF');
