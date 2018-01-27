<?php
//Route::get('/', function () { return redirect('/admin/home'); });

//1й пункт главного меню
Route::get('/', function () {
    $content_pages = App\ContentPage::all();
    return view('front.navbar1', compact('content_pages'));
    //return view('demo');
});

Route::get('/docs_auc', function () {
    $pdfs = App\Pdf::all();
    return view('front.docs_auc', compact('pdfs'));    
});


//2й пункт главного меню
Route::get('/navbar2', function () {
    $content_pages = App\ContentPage::all();
    return view('front.navbar2', compact('content_pages'));
});

Route::get('/docs_bluga', function () {
$manuals = [];
$filesInFolder = \File::files('files/1');
//dd($filesInFolder);
foreach($filesInFolder as $path)
{
    $manuals[] = pathinfo($path);
}
    return view('front.docs_bluga', compact('manuals'));
});

Route::get('/docs_auc_icao', function () {
$manuals = [];
$filesInFolder = \File::files('my/auc/icao');

foreach($filesInFolder as $path)
{
    $manuals[] = pathinfo($path);
}
    return view('front.docs_auc_icao', compact('manuals'));
});


//3й пункт главного меню
Route::get('/navbar3', function () {
    $content_pages = App\ContentPage::all();
    return view('front.navbar3', compact('content_pages'));
});








// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

// Registration Routes..
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->post('register', 'Auth\RegisterController@register')->name('auth.register');

Route::group(['middleware' => ['auth', 'approved'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('content_categories', 'Admin\ContentCategoriesController');
    Route::post('content_categories_mass_destroy', ['uses' => 'Admin\ContentCategoriesController@massDestroy', 'as' => 'content_categories.mass_destroy']);
    Route::resource('content_tags', 'Admin\ContentTagsController');
    Route::post('content_tags_mass_destroy', ['uses' => 'Admin\ContentTagsController@massDestroy', 'as' => 'content_tags.mass_destroy']);
    Route::resource('content_pages', 'Admin\ContentPagesController');
    Route::post('content_pages_mass_destroy', ['uses' => 'Admin\ContentPagesController@massDestroy', 'as' => 'content_pages.mass_destroy']);
    Route::resource('pdfs', 'Admin\PdfsController');
    Route::post('pdfs_mass_destroy', ['uses' => 'Admin\PdfsController@massDestroy', 'as' => 'pdfs.mass_destroy']);
    Route::post('pdfs_restore/{id}', ['uses' => 'Admin\PdfsController@restore', 'as' => 'pdfs.restore']);
    Route::delete('pdfs_perma_del/{id}', ['uses' => 'Admin\PdfsController@perma_del', 'as' => 'pdfs.perma_del']);



 
});
