<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Project_detail_slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DetailSliderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $detail_slider = Project_detail_slider::with('project')->where('status', '!=', 1)->get();
            return $detail_slider;
        }
        return view('admin.detail_slider.detail_slider');
    }

    public function createProjectDetailSlider(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $rules = array(
                'title' => 'required',
                'slide_image' => 'required',
            );

            $validator = Validator::make($data, $rules);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            }

            //Save Multiple images of Property
            $c = 0;
            if ($request->has('slide_image')) {
                $c++;
                foreach ($request->file('slide_image') as $index => $image) {
                    $uniqueid = uniqid();
                    $extension = $image->getClientOriginalExtension();
                    $name = Carbon::now()->format('Ymd') . '_' . $c . $uniqueid . '.' . $extension;
                    $path = $image->move('storage/app/public/uploads/project/detail/slider/', $name);

                    $detail_slider = new Project_detail_slider();
                    $detail_slider->slide_image = $name;
                    $detail_slider->title = $request->title[$index];
                    $detail_slider->project_id = $request->project_id[$index];
                    $detail_slider->save();
                }
            }

            return response()->json([
                'status' => 200,
                'success' => 'Project Slider Added Sucessfully',
            ]);
        }
        $data['projects'] = Project::where('status', '!=', 1)->select(['id', 'name'])->get();
        return view('admin.detail_slider.create_detail_slider', compact('data'));
    }

    public function editProjectDetailSlider($id)
    {
        $data['detail_slider'] = Project_detail_slider::find($id);
        $data['projects'] = Project::where('status', '!=', 1)->select(['id', 'name'])->get();
        return view('admin.detail_slider.edit_detail_slider', compact('data'));
    }

    public function updateProjectDetailSlider(Request $request)
    {
        $detail_slider = Project_detail_slider::find($request->edit_detail_id);
        $detail_slider->project_id = $request->project_id;
        $detail_slider->title = $request->title;
        if ($request->hasFile('slide_image')) {

            $path = "storage/app/public/uploads/project/detail/slider/".$detail_slider->slide_image;

            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('slide_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/app/public/uploads/project/detail/slider/', $filename);
            $detail_slider->slide_image = $filename;
        }

        $detail_slider->update();
        return redirect('project-detail-slider')->with('success','Project Detail Update Successfully');
    }
}
