use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiveController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panel', [LiveController::class, 'index'])->middleware('auth');
Route::post('/panel/start', [LiveController::class, 'startLive'])->middleware('auth');

---
