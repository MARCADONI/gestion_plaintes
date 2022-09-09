<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\bureau_penal;
use App\Models\officiers_police;
use App\Models\procureur;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenoms' => ['required', 'string', 'max:255'],
            'fonction' => ['required', 'string', Rule::in(['Procureur', 'BOP', 'OPJ'])],
            'tel1' => ['required', 'string', 'max:15'],
            'tel2' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        if ($request->fonction == 'Procureur') {
            $procureur = procureur::create([
                'name' => $request->name,
                'prenoms' => $request->prenoms,
                'num_phone1' => $request->tel1,
                'num_phone2' => $request->tel2,
                'email' => $request->email,
            ]);

            $user = User::create([
                'procureur_id' => $procureur->id,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } elseif ($request->fonction == 'OPJ') {
            $officier = officiers_police::create([
                'name' => $request->name,
                'prenoms' => $request->prenoms,
                'num_phone1' => $request->tel1,
                'num_phone2' => $request->tel2,
                'email' => $request->email,
            ]);

            $user = User::create([
                'officier_police_id' => $officier->id,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } elseif ($request->fonction == 'BOP') {
            $bop = bureau_penal::create([
                'name' => $request->name,
                'prenoms' => $request->prenoms,
                'num_phone1' => $request->tel1,
                'num_phone2' => $request->tel2,
                'email' => $request->email,
            ]);

            $user = User::create([
                'bureau_penal_id' => $bop->id,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
