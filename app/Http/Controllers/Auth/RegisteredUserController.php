<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use PDF;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Str;
use App\Models\Profile_Privacy;

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
        /*return view('myPDF');
        $pdf = PDF::loadFile(storage_path().'/app/ProfileProof/NFqmUmS3U971tYNbgpwREuDA4CVicLFeb0cjhnth.jpg');
        $pdf->setEncryption('safeer');
  
        return $pdf->download('itsolutionstuff.pdf');
        */
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'day' => ['required', 'string', 'max:255'],
            'month' => ['required', 'string', 'max:255'],
            'year' => ['required', 'string', 'max:255'],
            'document' => ['required', 'image', 'max:5000'],
            'category' => ['required'],
        ]);
        
        $date=$request->year.'-'.$request->month.'-'.$request->day;
        $file=$request->document;
            $file->store('ProfileProof','public');
            $file_path['path'] = 'ProfileProof/'. $file->hashName();
            $pdfFileName=md5($file->hashName().time());
            $pdfFilePath='ProfileProof/'.$pdfFileName.'.pdf';
            $pdf = PDF::loadView('myPDF', $file_path);
            $pdfPassword=Str::random(11);
        $pdf->setEncryption($pdfPassword);
        Storage::put('ProfileProof/'.$pdfFileName.'.pdf', $pdf->output());
        Storage::disk('public')->delete($file_path['path']);
        
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dob' => $date,
            'residence' => $request->residence,
            'city' => $request->city,
            'country' => $request->country,
            'file_path' => $pdfFilePath,
            'file_name' => 'myDocument.pdf',
            'options' => $request->category,
            'pdf_password' => $pdfPassword,
        ]);

        Profile_Privacy::insert([
            'user_id'=> $user->id,
            'dob_status'=> 0,
            'address_status'=> 0,
            'phone_status'=> 0,
            'about_status'=> 0,
        ]);
        event(new Registered($user));

        Auth::login($user);
        if(!Auth::user()->active_status)
        {
            Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('in-active');
        }
        else
        {
            return redirect(RouteServiceProvider::HOME);
        }
        
    }
}
