<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;


use Validator;
class FrontFactorController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index (){
        return view('Front.page.index');
    }

    public function logoAndBranding (){
        return view('Front.page.logo-and-branding');
    }

    public function aboutUs (){
        return view('Front.page.about');
    }

    public function contact (){
        return view('Front.page.contact');
    }

    public function career (){
        return view('Front.page.career');
    }

    public function mail (){
        return view('Front.page.thank_you');
    }

    public function discoverMore (){
        return view('Front.page.all-work');
    }

    public function sendMailContact(Request $request){

/*        Mail::to('blackboard.hello@gmail.com')->
        send(new SendMail($request->messageQuery,
            $request->email,$request->phone,$request->name,$request->subject,$request->branding,$request->social,$request->digitalMarketing,$request->webStrategy,$request->uiux,$request->cGeneration,$request->eventManagement));
        return redirect('/Mail-Submitted');*/

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            return redirect('/Mail-Submitted');
        }

        $data = array(
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'document' => $request->document,
            'branding' => $request->branding,
            'social' => $request->social,
            'digitalMarketing' => $request->digitalMarketing,
            'webStrategy' => $request->webStrategy,
            'uiux' => $request->uiux,
            'cGeneration' => $request->cGeneration,
            'eventManagement' => $request->eventManagement,
            'messageQuery' => $request->messageQuery,
            'portfolioLink' => $request->portfolioLink,
        );

//        Local Test
//        Mail::to('rana@nexkraft.com')->send(new sendMail($data));

//        Live
        Mail::to('blackboard.hello@gmail.com')->send(new sendMail($data));
        return redirect('/Mail-Submitted');

    }

}
