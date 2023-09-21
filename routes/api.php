<?php
/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Default API resource
|--------------------------------------------------------------------------
 */
Route::middleware(['localization'])->group(function () {
    Route::apiResource('entity', 'App\Http\Controllers\API\EntityController');
    Route::apiResource('event', 'App\Http\Controllers\API\EventController');
    Route::apiResource('faithful', 'App\Http\Controllers\API\FaithfulController');
    Route::apiResource('gallery', 'App\Http\Controllers\API\GalleryController');
    Route::apiResource('good', 'App\Http\Controllers\API\GoodController');
    Route::apiResource('minister', 'App\Http\Controllers\API\MinisterController');
    Route::apiResource('post', 'App\Http\Controllers\API\PostController');
    Route::apiResource('program', 'App\Http\Controllers\API\ProgramController');
    Route::apiResource('projet', 'App\Http\Controllers\API\ProjetController');
    Route::apiResource('role', 'App\Http\Controllers\API\RoleController');
    Route::apiResource('user', 'App\Http\Controllers\API\UserController');
    Route::apiResource('testimonial', 'App\Http\Controllers\API\TestimonialController');
    Route::apiResource('payment', 'App\Http\Controllers\API\PaymentController');
});
/*
|--------------------------------------------------------------------------
| Custom API resource
|--------------------------------------------------------------------------
 */
Route::group(['middleware' => ['api', 'localization']], function () {
    Route::resource('entity', 'App\Http\Controllers\API\EntityController');
    Route::resource('event', 'App\Http\Controllers\API\EventController');
    Route::resource('good', 'App\Http\Controllers\API\GoodController');
    Route::resource('minister', 'App\Http\Controllers\API\MinisterController');
    Route::resource('post', 'App\Http\Controllers\API\PostController');
    Route::resource('program', 'App\Http\Controllers\API\ProgramController');
    Route::resource('role', 'App\Http\Controllers\API\RoleController');
    Route::resource('user', 'App\Http\Controllers\API\UserController');
    Route::resource('testimonial', 'App\Http\Controllers\API\TestimonialController');
    Route::resource('payment', 'App\Http\Controllers\API\PaymentController');

    // Entity
    Route::get('entity/update_picture/{id}', 'App\Http\Controllers\API\EntityController@updatePicture')->name('entity.api.update_picture');
    // Event
    Route::get('event/update_picture/{id}', 'App\Http\Controllers\API\EventController@updatePicture')->name('event.api.update_picture');
    // Good
    Route::get('good/update_picture/{id}', 'App\Http\Controllers\API\GoodController@updatePicture')->name('good.api.update_picture');
    // Minister
    Route::get('minister/update_picture/{id}', 'App\Http\Controllers\API\MinisterController@updatePicture')->name('minister.api.update_picture');
    // Post
    Route::get('post/update_picture/{id}', 'App\Http\Controllers\API\PostController@updatePicture')->name('post.api.update_picture');
    Route::get('post/update_gallery/{id}', 'App\Http\Controllers\API\PostController@updateGallery')->name('post.api.update_gallery');
    // Program
    Route::get('program/update_picture/{id}', 'App\Http\Controllers\API\ProgramController@updatePicture')->name('program.api.update_picture');
    // Role
    Route::get('role/search/{data}', 'App\Http\Controllers\API\RoleController@search')->name('role.api.search');
    // User
    Route::post('user/login', 'App\Http\Controllers\API\UserController@login')->name('user.api.login');
    Route::get('user/find_by_not_role/{role_name}', 'App\Http\Controllers\API\UserController@findByNotRole')->name('user.api.find_by_not_role');
    Route::get('user/find_by_role/{role_name}', 'App\Http\Controllers\API\UserController@findByRole')->name('user.api.find_by_role');
    Route::put('user/withdraw_role/{id}', 'App\Http\Controllers\API\UserController@withdrawRole')->name('user.api.withdraw_role');
    Route::put('user/update_password/{id}', 'App\Http\Controllers\API\UserController@updatePassword')->name('user.api.update_password');
    Route::put('user/update_avatar_picture/{id}', 'App\Http\Controllers\API\UserController@updateAvatarPicture')->name('user.api.update_avatar_picture');
    // Program
    Route::get('testimonial/update_picture/{id}', 'App\Http\Controllers\API\TestimonialController@updatePicture')->name('testimonial.api.update_picture');
    // Payment
    Route::get('payment/find_by_phone/{phone_number}', 'App\Http\Controllers\API\PaymentController@findByPhone')->name('payment.api.find_by_phone');
    Route::get('payment/find_by_order_number/{order_number}', 'App\Http\Controllers\API\PaymentController@findByOrderNumber')->name('payment.api.find_by_order_number');
    Route::get('payment/find_by_order_number_user/{order_number}/{user_id}', 'App\Http\Controllers\API\PaymentController@findByOrderNumberUser')->name('payment.api.find_by_order_number_user');
    Route::put('payment/switch_status/{id}/{status_id}', 'App\Http\Controllers\API\PaymentController@switchStatus')->name('payment.api.switch_status');
});
