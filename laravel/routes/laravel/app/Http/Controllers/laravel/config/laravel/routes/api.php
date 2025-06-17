use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/webhook/node', function(Request $request) {
    \Log::channel('node')->info(json_encode($request->all()));
    return response()->json(['ok' => true]);
});


---
