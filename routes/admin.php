<?php


use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth'],
], function () {

        Route::group([
            'prefix' => 'permission',
        ], function () {
            Route::get('/', [PermissionController::class,'index'])->name('permission.index');
            Route::get('create', [PermissionController::class,'create'])->name('permission.create');
            Route::post('store', [PermissionController::class,'store'])->name('permission.store');
            Route::get('show/{id}', [PermissionController::class,'show'])->name('permission.show');
            Route::delete('destroy/{id}', [PermissionController::class,'destroy'])->name('permission.destroy');
            Route::get('edit/{id}', [PermissionController::class,'edit'])->name('permission.edit');
            Route::put('update/{id}', [PermissionController::class,'update'])->name('permission.update');
        });


        Route::group([
            'prefix' => 'user',
        ], function () {
            Route::get('/', [UserController::class,'index'])->name('user.index');
            Route::get('create', [UserController::class,'create'])->name('user.create');
            Route::post('store', [UserController::class,'store'])->name('user.store');
            Route::get('show/{id}', [UserController::class,'show'])->name('user.show');
            Route::delete('destroy/{id}', [UserController::class,'destroy'])->name('user.destroy');
            Route::get('edit/{id}', [UserController::class,'edit'])->name('user.edit');
            Route::post('update/{id}', [UserController::class,'update'])->name('user.update');
            Route::post('updatePassword/{id}', [UserController::class,'updatePassword'])->name('user.update.password');
            Route::get('edit-account-info', [UserController::class,'accountInfo'])->name('admin.account.info');
            Route::post('edit-account-info', [UserController::class,'accountInfoStore'])->name('admin.account.info.store');
            Route::post('change-password', [UserController::class,'changePasswordStore'])->name('admin.account.password.store');

        });


        Route::group([
            'prefix' => 'role',
        ], function () {
            Route::get('/', [RoleController::class,'index'])->name('role.index');
            Route::get('create', [RoleController::class,'create'])->name('role.create');
            Route::post('store', [RoleController::class,'store'])->name('role.store');
            Route::get('show/{id}', [RoleController::class,'show'])->name('role.show');
            Route::delete('destroy/{id}', [RoleController::class,'destroy'])->name('role.destroy');
            Route::get('edit/{id}', [RoleController::class,'edit'])->name('role.edit');
            Route::put('update/{id}', [RoleController::class,'update'])->name('role.update');

        });


//    Route::resource('permission', 'PermissionController');

//    Route::resource('user', 'UserController');
});
