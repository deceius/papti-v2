<?php

use App\Http\Controllers\Client\LandingPageController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function(){
    return redirect('/en/home');
});
Route::get('/en', function(){
    return redirect('/en/home');
});
Route::get('/jp', function(){
    return redirect('/jp/home');
});

Route::get('/{loc}/home', [ LandingPageController::class, 'index'] );
Route::get('/{loc}/about', [ LandingPageController::class, 'about']);



/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('banners')->name('banners/')->group(static function() {
            Route::get('/',                                             'BannersController@index')->name('index');
            Route::get('/create',                                       'BannersController@create')->name('create');
            Route::post('/',                                            'BannersController@store')->name('store');
            Route::get('/{banner}/edit',                                'BannersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BannersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{banner}',                                    'BannersController@update')->name('update');
            Route::delete('/{banner}',                                  'BannersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('technologies')->name('technologies/')->group(static function() {
            Route::get('/',                                             'TechnologyController@index')->name('index');
            Route::get('/create',                                       'TechnologyController@create')->name('create');
            Route::post('/',                                            'TechnologyController@store')->name('store');
            Route::get('/{technology}/edit',                            'TechnologyController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TechnologyController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{technology}',                                'TechnologyController@update')->name('update');
            Route::delete('/{technology}',                              'TechnologyController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('products')->name('products/')->group(static function() {
            Route::get('/',                                             'ProductsController@index')->name('index');
            Route::get('/create',                                       'ProductsController@create')->name('create');
            Route::post('/',                                            'ProductsController@store')->name('store');
            Route::get('/{product}/edit',                               'ProductsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ProductsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{product}',                                   'ProductsController@update')->name('update');
            Route::delete('/{product}',                                 'ProductsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('president-messages')->name('president-messages/')->group(static function() {
            Route::get('/',                                             'PresidentMessageController@index')->name('index');
            Route::get('/create',                                       'PresidentMessageController@create')->name('create');
            Route::post('/',                                            'PresidentMessageController@store')->name('store');
            Route::get('/{presidentMessage}/edit',                      'PresidentMessageController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PresidentMessageController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{presidentMessage}',                          'PresidentMessageController@update')->name('update');
            Route::delete('/{presidentMessage}',                        'PresidentMessageController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('company-histories')->name('company-histories/')->group(static function() {
            Route::get('/',                                             'CompanyHistoryController@index')->name('index');
            Route::get('/create',                                       'CompanyHistoryController@create')->name('create');
            Route::post('/',                                            'CompanyHistoryController@store')->name('store');
            Route::get('/{companyHistory}/edit',                        'CompanyHistoryController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CompanyHistoryController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{companyHistory}',                            'CompanyHistoryController@update')->name('update');
            Route::delete('/{companyHistory}',                          'CompanyHistoryController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('product-applications')->name('product-applications/')->group(static function() {
            Route::get('/',                                             'ProductApplicationsController@index')->name('index');
            Route::get('/create',                                       'ProductApplicationsController@create')->name('create');
            Route::post('/',                                            'ProductApplicationsController@store')->name('store');
            Route::get('/{productApplication}/edit',                    'ProductApplicationsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ProductApplicationsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{productApplication}',                        'ProductApplicationsController@update')->name('update');
            Route::delete('/{productApplication}',                      'ProductApplicationsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('company-profiles')->name('company-profiles/')->group(static function() {
            Route::get('/',                                             'CompanyProfileController@index')->name('index');
            Route::get('/create',                                       'CompanyProfileController@create')->name('create');
            Route::post('/',                                            'CompanyProfileController@store')->name('store');
            Route::get('/{companyProfile}/edit',                        'CompanyProfileController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CompanyProfileController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{companyProfile}',                            'CompanyProfileController@update')->name('update');
            Route::delete('/{companyProfile}',                          'CompanyProfileController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('certification-policies')->name('certification-policies/')->group(static function() {
            Route::get('/',                                             'CertificationPolicyController@index')->name('index');
            Route::get('/create',                                       'CertificationPolicyController@create')->name('create');
            Route::post('/',                                            'CertificationPolicyController@store')->name('store');
            Route::get('/{certificationPolicy}/edit',                   'CertificationPolicyController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CertificationPolicyController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{certificationPolicy}',                       'CertificationPolicyController@update')->name('update');
            Route::delete('/{certificationPolicy}',                     'CertificationPolicyController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('recruitments')->name('recruitments/')->group(static function() {
            Route::get('/',                                             'RecruitmentController@index')->name('index');
            Route::get('/create',                                       'RecruitmentController@create')->name('create');
            Route::post('/',                                            'RecruitmentController@store')->name('store');
            Route::get('/{recruitment}/edit',                           'RecruitmentController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RecruitmentController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{recruitment}',                               'RecruitmentController@update')->name('update');
            Route::delete('/{recruitment}',                             'RecruitmentController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('visitors')->name('visitors/')->group(static function() {
            Route::get('/',                                             'VisitorsController@index')->name('index');
            Route::get('/create',                                       'VisitorsController@create')->name('create');
            Route::post('/',                                            'VisitorsController@store')->name('store');
            Route::get('/{visitor}/edit',                               'VisitorsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'VisitorsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{visitor}',                                   'VisitorsController@update')->name('update');
            Route::delete('/{visitor}',                                 'VisitorsController@destroy')->name('destroy');
        });
    });
});
