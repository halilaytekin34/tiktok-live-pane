namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->welcome_enabled = $request->has('welcome_enabled');
        $user->gift_enabled = $request->has('gift_enabled');
        $user->proxy = $request->input('proxy');
        $user->save();
        return back()->with('success', 'Kullanıcı güncellendi.');
    }
}
