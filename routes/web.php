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

Route::group(['middleware' => ['throttle:1000,1']], function () {


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');






/*boss routes*/

/*برای نمایش صفحه مسابقات اقای ملکی*/
Route::get('/boss_match', 'BossController@boss_match')->name('boss_match');

/*برای ارسال صفحه مسابقات اقای ملکی*/
Route::post('/insert_boss_match', 'BossController@insert_boss_match')->name('insert_boss_match');

/*برای حذف صفحه مسابقات اقای ملکی*/
Route::get('/delete_boss_match/{id}', 'BossController@delete_boss_match')->name('delete_boss_match');

/*برای غیرفعال کردن صفحه مسابقات اقای ملکی*/
Route::get('/disable_status_boss_match/{id}', 'BossController@disable_status_boss_match')->name('disable_status_boss_match');

/*برای فعال کردن صفحه مسابقات اقای ملکی*/
Route::get('/able_status_boss_match/{id}', 'BossController@able_status_boss_match')->name('able_status_boss_match');

/*برای نمایش صفحه تایید مسابقات اقای ملکی*/
Route::get('/boss_view_confirm_match/{slug}', 'BossController@boss_view_confirm_match')->name('boss_view_confirm_match');

/*برای نمایش لیست افراد شرکت کننده در مسابقات  */
Route::get('/boss_view_confirm_match_list', 'BossController@boss_view_confirm_match_list')->name('boss_view_confirm_match_list');

/*برای تایید مسابقات اقای ملکی با پرداخت*/
Route::get('/boss_confirm_match/{id}', 'BossController@boss_confirm_match')->name('boss_confirm_match');

/*برای تایید مسابقات اقای ملکی بدون پرداخت*/
Route::get('/boss_confirm_match2/{id}', 'BossController@boss_confirm_match2')->name('boss_confirm_match2');

/*برای رد مسابقات اقای ملکی*/
Route::get('/boss_reject_match/{id}', 'BossController@boss_reject_match')->name('boss_reject_match');

/*برای نمایش کامل اطلاعات مسابقات*/
Route::get('/boss_match_complate_view/{id}', 'BossController@boss_match_complate_view')->name('boss_match_complate_view');

/*برای تغییر کامل اطلاعات مسابقات*/
Route::post('/boss_match_complate_view2/{id}', 'BossController@boss_match_complate_view2')->name('boss_match_complate_view2');

/*برای نمایش نقص مدارک*/
Route::get('/register_match_problem2/{id}', 'BossController@register_match_problem2')->name('register_match_problem2');

/*برای حذف مسابقه توسط ملکی*/
Route::get('/delete_match_boss/{id}', 'BossController@delete_match_boss')->name('delete_match_boss');


























/*responsible_coach routes*/



/*برای نمایش صفحه تایید ثبت نام*/
Route::get('/responsible_confirm', 'ResponsibleController@responsible_confirm')->name('responsible_confirm');

/*برای تایید کاربر توسط مسعول ثبت نام*/
Route::get('/confirm_register_user/{id}', 'ResponsibleController@confirm_register_user')->name('confirm_register_user');

/*برای رد کاربر توسط مسعول ثبت نام */
Route::get('/reject_register_user/{id}/{text}', 'ResponsibleController@reject_register_user')->name('reject_register_user');

/*برای نمایش کامل اطلاعات کاربر*/
Route::get('/registered_complate_view/{id}', 'ResponsibleController@registered_complate_view')->name('registered_complate_view');

/*برای تغییر کامل اطلاعات کاربر*/
Route::patch('/registered_complate_view2/{id}', 'ResponsibleController@registered_complate_view2')->name('registered_complate_view2');

/*برای نمایش جستجوی کاربر*/
Route::get('/responsible_view_search', 'ResponsibleController@responsible_view_search')->name('responsible_view_search');

/*برای جستجوی کاربر*/
Route::get('/responsible_post_search', 'ResponsibleController@responsible_post_search')->name('responsible_post_search');

/*  برای حذف کاربر توسط مسعول ثبت نام*/
Route::delete('/delete_user_responsible/{id}', 'ResponsibleController@delete_user_responsible')->name('delete_user_responsible');

/*برای نمایش نقص مدارک*/
Route::get('/search_register_user_problem/{id}', 'ResponsibleController@search_register_user_problem')->name('search_register_user_problem');















/*state_coach routes*/
/*برای نمایش صفحه مسابقات نمایده استان*/
Route::get('/view_match_state', 'StateController@view_match_state')->name('view_match_state');

/*برای نمایش فرم  مسابقات نمایده استان*/
Route::get('/view_match_state2/{slug}', 'StateController@view_match_state2')->name('view_match_state2');

/*برای ارسال فرم مسابقات نمایده استان*/
Route::post('/insert_match_state/{id}', 'StateController@insert_match_state')->name('insert_match_state');

/*برای حذف فرم مسابقات نمایده استان*/
Route::get('/delete_match_state/{id}', 'StateController@delete_match_state')->name('delete_match_state');

/*برای نمایش صفحه لیست مسابقات نمایده استان*/
Route::get('/view_match_state_list', 'StateController@view_match_state_list')->name('view_match_state_list');

/*برای نمایش صفحه لیست مسابقات نمایده استان2*/
Route::get('/view_match_state2_list/{slug}', 'StateController@view_match_state2_list')->name('view_match_state2_list');

/*برای خرید از تکمیل ثبت نام */
Route::get('/buy/{id}','StateController@buy')->name('buy');

/*برای ارسال خرید از تکمیل ثبت نام */
Route::post('/buyback/{id}','StateController@buyback')->name('buyback');

/*برای نمایش نقص مدارک*/
Route::get('/register_match_problem/{id}', 'StateController@register_match_problem')->name('register_match_problem');

/*برای نمایش کامل اطلاعات مسابقات*/
Route::get('/state_match_complate_view/{id}', 'stateController@state_match_complate_view')->name('state_match_complate_view');

/*برای تغییر کامل اطلاعات مسابقات*/
Route::post('/state_match_complate_view2/{id}', 'stateController@state_match_complate_view2')->name('state_match_complate_view2');

});

