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

Route::get('/login', 'Auth\SessionController@login')->name('login');
Route::post('/login', 'Auth\SessionController@postLogin')->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'DashboardController@index');
    Route::get('download/{image_link}', 'DashboardController@download');
    Route::get('download_multiple/{image_link}', 'DashboardController@downloadMultiple');
    Route::get('logout', 'Auth\SessionController@logout');

    Route::get('change_password', 'Auth\PasswordManagerController@changePassword');
    Route::post('change_password', 'Auth\PasswordManagerController@postChangePassword');

    Route::namespace('Admin')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::resource('meal-measurement', 'MealMeasurementController');
            Route::resource('meal-ingredient-category', 'MealIngredientCategoryController');
            Route::resource('meal-recipe-category', 'MealRecipeCategoryController');
            Route::resource('meal-recipe-sub-category', 'MealRecipeSubCategoryController');
            Route::resource('meal-recipe-sub-sub-category', 'MealRecipeSubSubCategoryController');
            Route::resource('meal-cuisine', 'MealCuisineController');
            Route::resource('meal-region', 'MealRegionController');
            Route::resource('meal-primary-diet-type', 'MealPrimaryDietTypeController');
            Route::resource('meal-festival', 'MealFestivalController');
            Route::resource('meal-disease', 'MealDiseaseController');
            Route::resource('meal-ingredient', 'MealIngredientController');
            Route::resource('meal-vitamin-mineral', 'MealVitaminMineralController');
            Route::resource('meal-sugar', 'MealSugarController');
            Route::resource('meal-fat', 'MealFatController');
            Route::resource('meal-ingredient-measurement', 'MealIngredientMeasurementController');
            Route::resource('meal-tag', 'MealTagController');
            Route::resource('meal-dish-type', 'MealDishTypeController');
            Route::resource('meal-recipe', 'MealRecipeController');
            Route::resource('meal-recipe-ingredient', 'MealRecipeIngredientController');
            Route::resource('meal-recipe-tag', 'MealRecipeTagController');

          
        });
    });
});
Route::get('get-sub-category', 'Admin\MealRecipeSubSubCategoryController@getSubCategory');
Route::get('get-sub-sub-category', 'Admin\MealRecipeSubSubCategoryController@getSubSubCategory');
Route::get('get-region', 'Admin\MealRegionController@getRegion');