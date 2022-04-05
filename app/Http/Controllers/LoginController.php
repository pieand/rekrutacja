<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * @param  Request  $request
     * @return Application|RedirectResponse|Redirector
     */
    public function loginUser(Request $request)
    {
        $request->validate([
            'nr_klienta' => 'required|numeric',
            'pin' => 'required|numeric'
        ]);
        $user = Subject::where('nr_klienta', '=', $request->nr_klienta)->first();

        if (!$user) {
            return back()->with('fail', 'Klient o podanym numerze nie istnieje');
        }
        if ((string)$request->pin === (string)$user->pin) {
            $request->session()->put('loginId', $user->id);

            return redirect('contracts');
        } else {
            return back()->with('fail', 'Podany pin jest błędny');
        }
    }

    /**
     * @return Application|RedirectResponse|Redirector|void
     */
    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');

            return redirect('/');
        }
    }
}
