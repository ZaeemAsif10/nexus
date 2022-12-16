<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\HomeSlider;
use App\Models\Project;
use App\Models\Feature;
use App\Models\Project_detail_slider;
use Google\Service\Docs\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function index()
    {
        $data['sliders'] = HomeSlider::where('status', '!=', 1)->get();
        $data['projects'] = Project::where('status', '!=', 1)->get();
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

        Mail::to($request->email)->send(new ContactMail($details));
        return redirect()->back()->with('message', 'Email send successfully');
    }

    public function Projects($id)
    {
        $data['projects'] = Project::where('status','!=',1)->where('id',$id)->first();
        $data['project_slider'] = Project_detail_slider::where('project_id',$data['projects']->id)->where('status','!=',1)->get();
        $data['amenities'] = Feature::where('project_id',$data['projects']->id)->where('status','!=',1)->get();
        return view('web-side.projects', compact('data'));
    }

    public function Blogs()
    {
        $data['blogs'] = Blog::where('status','!=',1)->get();
        return view('web-side.blog', compact('data'));
    }
}


