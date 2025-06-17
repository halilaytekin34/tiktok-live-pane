use App\Http\Controllers\MediaController;
Route::post('/upload-media', [MediaController::class, 'upload'])->name('media.upload');
