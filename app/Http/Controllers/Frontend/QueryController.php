<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Model\Query;
use App\Model\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

class QueryController extends Controller
{

    public function contact()
    {

        return view('frontend.pages.contact');
    }

    public function contact_message(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data                       = new ContactMessage();
        $data->name                 = $request->name;
        $data->email                 = $request->email;
        $data->phone                 = $request->mobile;
        $data->subject                 = $request->subject;
        $data->message                 = $request->message;
        $data->save();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        $user['to'] = $request->email;
        Mail::send('frontend/pages/email_verification', $data, function ($messages) use ($user) {
            $messages->to($user['to']);
            $messages->subject('Hello Dev');
        });
        $request->session()->flash('message', 'Form is inserted Successfully');
        return redirect('contact-us');
    }
}
