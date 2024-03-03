<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdmin\MenuController;
use App\Http\Controllers\SuperAdmin\SubMenuController;
use App\Http\Controllers\SuperAdmin\CategoryController;
use App\Http\Controllers\SuperAdmin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:user'])->name('dashboard');




Route::middleware(['auth', 'role:superadmin'])->group(function (){

  
    
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/superadmin/dashboard', 'Index')->name('superadmindashboard');
        Route::get('/superadmin/profile','Profile')->name('profile');
        

    });


    Route::controller(MenuController::class)->group(function(){
        Route::get('/superadmin/all-menu', 'Index')->name('allmenu');
        Route::get('/superadmin/add-menu', 'AddMenu')->name('addmenu');
        Route::post('/superadmin/store-menu', 'Store')->name('storemenu');
        Route::get('/superadmin/{id}/edit', 'Edit')->name('menuedit');
        Route::post('/superadmin/{id}/update', 'Update')->name('updatemenu');

        Route::delete('/superadmin/menu/{id}', 'Destroy')->name('delete');

    });


     Route::controller(SubMenuController::class)->group(function(){
        Route::get('/superadmin/all-submenu', 'Index')->name('allsubmenu');
        Route::get('/superadmin/add-submenu', 'AddSubMenu')->name('addsubmenu');
        Route::post('/superadmin/store-submenu', 'StoreSubMenu')->name('storesubmenu');
        Route::get('/superadmin/submenu/{id}/edit', 'Subedit')->name('submenuedit');
        Route::post('/superadmin/submenu/{id}/update', 'Subupdate')->name('updatesubmenu');

        Route::delete('/superadmin/submenu/{id}', 'Subdestroy')->name('Subdelete');

    });


    Route::controller(CategoryController::class)->group(function(){
        Route::get('/superadmin/all-category', 'Index')->name('allcategory');
        Route::get('/superadmin/add-category', 'Addcategory')->name('addcategory');
        Route::post('/superadmin/store-category', 'Storecategory')->name('storecat');
        Route::get('/superadmin/{id}/edit-category', 'Editcat')->name('editcat');
        Route::post('/superadmin/{id}/update-category', 'CatUpdate')->name('updatecat');

        Route::delete('/superadmin/category/{id}', 'Destroy')->name('deletecat');

    });

});



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
