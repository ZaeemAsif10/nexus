<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
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
}
