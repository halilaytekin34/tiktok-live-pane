namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LiveController extends Controller
{
    public function index()
    {
        return view('panel');
    }

    public function startLive(Request $request)
    {
        $user = Auth::user();

        // Kullanıcının TikTok kullanıcı adını al
        $username = $request->input('tiktok_username');

        // Node sunucusuna bildir
        Http::post('http://localhost:3001/start', [
            'username' => $username
        ]);

        return redirect()->back()->with('success', 'Canlı yayına bağlanıldı.');
    }
}


---
