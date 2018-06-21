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
//errors
Route::get('/error403', 'PagesController@getError403');

Route::get('/add-new-talent', 'PagesController@getAddNewTalent');

Route::post('/addNewTalentSubmit','FormSubmit@addTalent')->name('addNewTalentSubmit');
Route::post('/joinUsSubmit','FormSubmit@store')->name('joinUsSubmit');
Route::get('/users-maintenance', 'PagesController@getUsersMaintenance');
Route::get('/talent-maintenance', 'ApplicantController@indexeu');
Route::get('/setcards', 'PagesController@getSetCards');
Route::get('/talent-schedules', 'PagesController@getTalentSchedules');
Route::get('/deployment-adults', 'PagesController@getDeploymentAdults');
Route::get('/deployment-teens', 'PagesController@getDeploymentTeens');
Route::get('/deployment-kids', 'PagesController@getDeploymentKids');
Route::get('/talent-request', 'PagesController@getTalentRequestAdmin');
Route::get('/talent-application-audition', 'PagesController@getAudition');
Route::get('/talent-application-pending', 'ApplicantController@index');
Route::get('/dashboard', 'ApplicantController@dashboardInit');

Route::get('/adults-WomanNotAvailable', 'PagesController@getAdultsWomanNotAvailable');
Route::get('/adults-WomanAvailable', 'PagesController@getAdultsWomanAvailable');
Route::get('/adults-Woman', 'PagesController@getAdultsWoman');
Route::get('/adults-ManNotAvailable', 'PagesController@getAdultsManNotAvailable');
Route::get('/adults-ManAvailable', 'PagesController@getAdultsManAvailable');
Route::get('/adults-Man', 'PagesController@getAdultsMan');

Route::get('/teens-ladiesNotAvailable', 'PagesController@getTeensLadiesNotAvailable');
Route::get('/teens-ladiesAvailable', 'PagesController@getTeensLadiesAvailable');
Route::get('/teens-ladies', 'PagesController@getTeensLadies');
Route::get('/teens-gentsNotAvailable', 'PagesController@getTeensGentsNotAvailable');
Route::get('/teens-gentsAvailable', 'PagesController@getTeensGentsAvailable');
Route::get('/teens-gents', 'PagesController@getTeensGents');

Route::get('/kids-girlsNotAvailable', 'PagesController@getKidsGirlsNotAvailable');
Route::get('/kids-girlsAvailable', 'PagesController@getKidsGirlsAvailable');
Route::get('/kids-girls', 'PagesController@getKidsGirls');
Route::get('/kids-boysNotAvailable', 'PagesController@getKidsBoysNotAvailable');
Route::get('/kids-boysAvailable', 'PagesController@getKidsBoysAvailable');
Route::get('/kids-boys', 'PagesController@getKidsBoys');

Route::get('/kids', 'PagesController@getKids');
Route::get('/teens', 'PagesController@getTeens');
Route::get('/adults', 'PagesController@getAdults');
Route::get('/joinus', 'PagesController@getJoinUs');
Route::get('/super-user-login', 'PagesController@getLogin');

Route::get('/projects', 'PagesController@getProjects');
Route::get('/schedule', 'PagesController@getSchedule');
Route::get('/userprofile', 'PagesController@getTUserProfile');
Route::get('/rating', 'PagesController@getRating');

Route::get('/', 'PagesController@getIndex');

Route::get('/CUserprofile', 'PagesController@getCUserProfile');
Route::get('/talentRequest', 'PagesController@getTalentRequest');
Route::get('/bookings', 'PagesController@getBookings');
Route::get('/viewTalentAdults', 'PagesController@getviewTalentAdults');
Route::get('/viewTalentTeens', 'PagesController@getviewTalentTeens');
Route::get('/viewTalentKids', 'PagesController@getviewTalentKids');

Route::get('/viewKidsGirls', 'PagesController@getviewKidsGirls');
Route::get('/viewKidsGirlsAvailable', 'PagesController@getviewKidsGirlsAvailable');
Route::get('/viewKidsGirlsNotAvailable', 'PagesController@getviewKidsGirlsNotAvailable');
Route::get('/viewKidsBoys', 'PagesController@getviewKidsBoys');
Route::get('/viewKidsBoysAvailable', 'PagesController@getviewKidsBoysAvailable');
Route::get('/viewKidsBoysNotAvailable', 'PagesController@getviewKidsBoysNotAvailable');

Route::get('/viewTeensLadies', 'PagesController@getviewTeensLadies');
Route::get('/viewTeensLadiesAvailable', 'PagesController@getviewTeensLadiesAvailable');
Route::get('/viewTeensLadiesNotAvailable', 'PagesController@getviewTeensLadiesNotAvailable');
Route::get('/viewTeensGents', 'PagesController@getviewTeensGents');
Route::get('/viewTeensGentsAvailable', 'PagesController@getviewTeensGentsAvailable');
Route::get('/viewTeensGentsNotAvailable', 'PagesController@getviewTeensGentsNotAvailable');

Route::get('/viewAdultsWoman', 'PagesController@getviewAdultsWoman');
Route::get('/viewAdultsWomanAvailable', 'PagesController@getviewAdultsWomanAvailable');
Route::get('/viewAdultsWomanNotAvailable', 'PagesController@getviewAdultsWomanNotAvailable');
Route::get('/viewAdultsMan', 'PagesController@getviewAdultsMan');
Route::get('/viewAdultsManAvailable', 'PagesController@getviewAdultsManAvailable');
Route::get('/viewAdultsManNotAvailable', 'PagesController@getviewAdultsManNotAvailable');


Route::get('/successLogin', 'LoginController@successLogin');
Route::post('/checkLogin', 'LoginController@checkLogin');
Route::post('/authenticate', 'Auth\LoginController@authenticate');
Route::resource('posts', 'PostController');
Route::resource('accounts', 'AccountController', ['except' => ['create']]);
Route::post('loginV1', 'Auth\LoginController@checkUserRole')->name('loginV1');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

