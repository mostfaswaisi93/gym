<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
        Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('index');

            // Route::resources([
            //     'notifications' => NotificationController::class,
            //     'contacts' => ContactController::class,
            //     'countries' => CountryController::class,
            //     'cities' => CityController::class,
            //     'roles' => RoleController::class,
            //     'users' => UserController::class,
            // ]);

            // Route::get('notifications/destroy/{id}', 'NotificationController@destroy');
            // Route::post('notifications/updateStatus/{id}', 'NotificationController@updateStatus');

            // Route::get('contacts/destroy/{id}', 'ContactController@destroy');

            // Route::get('countries/destroy/{id}', 'CountryController@destroy');
            // Route::post('countries/updateStatus/{id}', 'CountryController@updateStatus');

            // Route::get('cities/destroy/{id}', 'CityController@destroy');
            // Route::post('cities/updateStatus/{id}', 'CityController@updateStatus');

            // Route::get('settings', 'SettingController@index')->name('settings.index');
            // Route::post('settings', 'SettingController@update')->name('settings.update');

            // Route::get('roles/destroy/{id}', 'RoleController@destroy');
            // Route::post('roles/updateStatus/{id}', 'RoleController@updateStatus');

            // Route::get('users/destroy/{id}', 'UserController@destroy');
            // Route::post('users/updateStatus/{id}', 'UserController@updateStatus');
        });
    }
);
