<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\EfficiencyController;
use App\Http\Controllers\Admin\FileUploadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OfficeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\OptionsController;
use App\Http\Controllers\Admin\PageInController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageUploadController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\PromotionalController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\LeaderController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\ProductsController;
use App\Http\Controllers\Front\ProjectsController;
use App\Http\Controllers\Front\QuestionsController;
use App\Http\Controllers\Front\SerachController;
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
        'question' => QuestionController::class,
        'product' => ProductController::class,
        'office' => OfficeController::class,
        'feedback' => ResultController::class
    ]);
    
    Route::post('file-uploadproject', [FileUploadController::class, 'upload'])->name('file_uploadproject');
    Route::post('file-deleteproject', [FileUploadController::class, 'delete'])->name('file_deleteproject');

     
    Route::post('file-upload', [ProductImageUploadController::class, 'upload'])->name('file_upload');
    Route::post('file-delete', [ProductImageUploadController::class, 'delete'])->name('file_delete');
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get('/', [IndexController::class, 'homepage'])->name('/');
        Route::get('about', [AboutController::class, 'about'])->name('about');
        Route::get('news', [NewsController::class, 'list'])->name('news');
        Route::post('news/ajax-filter', [NewsController::class, 'ajaxFilterList'])->name('news.ajaxFilter');
        Route::get('news/{slug}', [NewsController::class, 'show'])->name('new.show');
        Route::get('contact', [ContactController::class, 'contact'])->name('contact');
        Route::get('team', [LeaderController::class, 'team'])->name('team');
        Route::get('products', [ProductsController::class, 'list'])->name('products');
        Route::get('products/{slug}', [ProductsController::class, 'show'])->name('product');
        Route::get('question', [QuestionsController::class, 'question'])->name('question');
        Route::post('save_yourSave', [IndexController::class, 'yourSave'])->name('yourSave');
        Route::get('projects', [ProjectsController::class, 'list'])->name('projects');
        Route::get('projects/{slug}', [ProjectsController::class, 'show'])->name('project');
        Route::get('front_search', [SerachController::class, 'search'])->name('front_search');
    });



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    UniSharp\LaravelFilemanager\Lfm::routes();
});

