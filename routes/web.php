<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\EfficiencyController;
use App\Http\Controllers\Admin\FileUploadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\OptionsController;
use App\Http\Controllers\Admin\PageInController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\PromotionalController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\VideoController;
use UniSharp\Laravel\LaravelFilemanager\Lfm;



Auth::routes();

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:admin'])->prefix('dashboard')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
    Route::resources([
        'slider' => SliderController::class,
        'page' => PageController::class,
        'options' => OptionsController::class,
        'promotional' => PromotionalController::class,
        'video' => VideoController::class,
        'page_in' => PageInController::class,
        'efficiency' => EfficiencyController::class,
        'article' => ArticleController::class,
        'team' => TeamController::class,
        'project' => ProjectController::class,
        'question' => QuestionController::class
    ]);
    
    Route::post('file-upload', [FileUploadController::class, 'upload'])->name('file_upload');
    Route::post('file-delete', [FileUploadController::class, 'delete'])->name('file_delete');
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        //
    });



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    UniSharp\LaravelFilemanager\Lfm::routes();
});

