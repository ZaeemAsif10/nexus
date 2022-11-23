<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Company;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use App\Events\MarkAttendanceEvent;
use App\Models\Loged_history;;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], 'status' => 1))) {
            return redirect('admin');
        } else {

            return redirect()->route('login')
                ->with('error', 'Invalid authentication!');
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
