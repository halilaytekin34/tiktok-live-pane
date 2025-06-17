use App\Http\Controllers\AdminController;

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'index']);
    Route::post('/admin/user/update/{id}', [AdminController::class, 'update']);
});
