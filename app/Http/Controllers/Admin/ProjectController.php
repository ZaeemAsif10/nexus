<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function homeSlider()
    {
        return view('admin.homepage.home_slider');
    }

    public function getSlider()
    {
        return HomeSlider::where('status', '!=', 1)->get();
    }

    public function createHomeSlider()
    {
        return view('admin.homepage.create_home_slider');
    }

    public function storeHomeSlider(Request $request)
    {
        $data = $request->all();

        $rules = array(
            'title' => 'required',
            'image' => 'required',
        );

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $slider = new HomeSlider();
        $slider->title = $request->title;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/app/public/uploads/home/slider/', $filename);
            $slider->image = $filename;
        }

        $slider->save();
        return response()->json([
            'status' => 200,
            'success' => 'Project Added Sucessfully',
        ]);
    }

    public function editHomeSlider(Request $request)
    {
        $slider = HomeSlider::find($request->id);
        return response()->json([
            'slider' => $slider,
        ]);
    }

    public function updateHomeSlider(Request $request)
    {
        $slider = HomeSlider::find($request->slider_id);
        $slider->title = $request->title;
        if ($request->hasFile('image')) {

            $path = 'storage/app/public/uploads/home/slider/' . $slider->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/app/public/uploads/home/slider/', $filename);
            $slider->image = $filename;
        }

        $slider->update();
        return response()->json([
            'status' => 200,
            'success' => 'Project Update Sucessfully',
        ]);
    }

    public function deleteHomeSlider(Request $request)
    {
        $slider = HomeSlider::find($request->id);
        $slider->status = 1;
        $slider->update();
        return response()->json([
            'success' => 'Slider Deleted Successfully',
        ]);
    }

    // Projects Functions
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Project::where('status', '!=', 1)->get();
        }
        return view('admin.projects.projects');
    }

    public function createProjects()
    {
        return view('admin.projects.create_projects');
    }

    public function storeProjects(Request $request)
    {
        $data = $request->all();

        $rules = array(
            'name' => 'required',
            'p_image' => 'required',
        );

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()->all()]);
        }

        if (!Project::where('name', $request->name)->first()) {
            $projects = new Project();
            $projects->name = $request->name;
            $projects->description = $request->description;
            if ($request->hasFile('p_image')) {
                $file = $request->file('p_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('storage/app/public/uploads/projects/', $filename);
                $projects->p_image = $filename;
            }

            $projects->save();
            return response()->json([
                'status' => 200,
                'success' => 'Project Added Sucessfully',
            ]);
        } else {
            return response()->json([
                'errors' => 'Project Name Already Exists',
            ]);
        }
    }

    public function editProjects(Request $request)
    {
        $data['projects'] = Project::find($request->id);
        return view('admin.projects.edit_projects', compact('data'));
    }

    public function updateProjects(Request $request)
    {
        $projects = Project::find($request->project_edit_id);
        $projects->name = $request->name;
        $projects->description = $request->description;
        if ($request->hasFile('p_image')) {

            $path = "storage/app/public/uploads/projects/" . $projects->p_image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('p_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/app/public/uploads/projects/', $filename);
            $projects->p_image = $filename;
        }

        $projects->update();
        return redirect('projects')->with('success', 'Project Update Sucessfully');
    }
}
