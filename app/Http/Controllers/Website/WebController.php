<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\HomeSlider;
use Google\Service\Docs\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function index()
    {
        $data['sliders'] = HomeSlider::where('status', '!=', 1)->get();
        return view('web-side.index', compact('data'));
    }

    public function About()
    {
        return view('web-side.about');
    }

    public function Contact()
    {
        return view('web-side.contact');
    }

    public function ContactMail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('zaeemasif1123@gmail.com')->send(new ContactMail($details));
        return redirect()->back()->with('message', 'Email send successfully');
        // $res = Contact::create($details);
        // if ($res) {
        //     return redirect()->back()->with('message', 'Email send successfully');
        // } else {
        //     return 'Failed';
        // }
    }

    public function Project()
    {
        return view('web-side.projects');
    }

    public function Blogs()
    {
        return view('web-side.blog');
    }
}
