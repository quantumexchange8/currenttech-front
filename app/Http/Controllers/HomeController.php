<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;
use App\Models\FormData; 
use App\Models\UserResume; 
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Facades\Toast;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('master.home');
    }

    public function support()
    {
        return view('master.support');
    }
    public function contact_mail_send(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string',
            'number' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'file' => 'file|mimes:pdf',
        ]);

        $formData = FormData::create([
            'name' => $validated['name'],
            'number' => $validated['number'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'file' => $request->file('file')->store('uploads'), 
        ]);
        
        Mail::to('support@currenttech.pro')->send(new ContactMail($request));
        return redirect('support')->with('success', 'Contact form submitted successfully.');
    }

    public function resume(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'number' => 'required|number',
            'email' => 'required|email',
            'message' => 'required|string',
            'file' => 'file|mimes:pdf',
        ]);

        // dd($request->all());
        if($request->full_name && $request->contact_number && $request->email != null)
        {
            $posType = [];
            $chipType = [];
            $webappType = [];
            $web3Type = [];
            $ctradeType = [];
            $careerTypes = [];
    
            // pos system
            if ($request->standard_package) {
                $posType[] = 'Standard Package';
            }
    
            if ($request->advance_package) {
                $posType[] = 'Advance Package';
            }
    
            // web application
            if ($request->website) {
                $webappType[] = 'Website Development';
            }
            if ($request->appdev) {
                $webappType[] = 'App Development';
            }
            if ($request->crm) {
                $webappType[] = 'CRM Development';
            }
    
            // pro chip/ultra chip
            if ($request->medusa) {
                $chipType[] = 'Medusa Robotech';
            }
            if ($request->mercury) {
                $chipType[] = 'Mercury Robotech';
            }
            if ($request->ragnarok) {
                $chipType[] = 'Ragnarok Robotech';
            }
    
            // web 3.0
            if ($request->nft) {
                $web3Type[] = 'NFT Trading Board';
            }
            if ($request->crypto) {
                $web3Type[] = 'Cryptocurrency Exchange';
            }
    
            // ctrader
            if ($request->whitelabel) {
                $ctradeType[] = 'Medusa Robotech';
            }
            if ($request->paymentsolution) {
                $ctradeType[] = 'Payment Solutions';
            }
            if ($request->crmsolu) {
                $ctradeType[] = 'CRM Solutions';
            }
    
            
            // careers
            if ($request->itprogram) {
                $careerTypes[] = 'IT Programmer';
            }
    
            if ($request->uiux) {
                $careerTypes[] = 'UI / UX Designer';
            }
    
            if ($request->market) {
                $careerTypes[] = 'Marketing Designer';
            }
    
            if ($request->op) {
                $careerTypes[] = 'Backend Operation';
            }
    
            if ($request->sales) {
                $careerTypes[] = 'Indoor / Outdoor Sales';
            }
    
    
    
            $Anoymous = UserResume::create([
                'full_name' => $request->full_name,
                'contact_number' => $request->contact_number,
                'email' => $request->email,
                'message' => $request->message,
                'resume' => $request->hasFile('file') ? $request->file('file')->store('uploads') : null,
                'pos_system' => implode(', ', $posType),
                'chip' => implode(', ', $chipType),
                'web_app' => implode(', ', $webappType),
                'web_3' => implode(', ', $web3Type),
                'ctrader_type' => implode(', ', $ctradeType),
                'career_type' => implode(', ', $careerTypes) ?: null,
                'intern' => $request->intern,
            ]);
    
    
            toastr()->success('Successfully Submitted!');
            return redirect()->back();
        } else {
            toastr()->error('Failed, Please fill up all the form');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        
    }
}
