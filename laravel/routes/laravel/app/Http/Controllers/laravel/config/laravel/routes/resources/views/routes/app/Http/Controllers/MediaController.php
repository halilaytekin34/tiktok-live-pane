namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function upload(Request $request)
    {
        $user = auth()->user();
        $type = $request->input('media_type');
        $file = $request->file('media_file');
        $path = $file->store("public/media/{$user->id}/{$type}");
        return back()->with('success', 'Dosya başarıyla yüklendi.');
    }
}


---
