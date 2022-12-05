<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Feature;

class FeatureController extends Controller
{
    public function index()
    {
        return view('admin.features.features');
    }

    public function getFeature()
    {
        return Feature::with(['project'])->where('status', '!=', 1)->get();
    }

    public function createFeature()
    {
        $data['projects'] = Project::select(['id','name'])->get();
        return view('admin.features.create_features', compact('data'));
    }

    public function storeFeature(Request $request)
    {
        //Save Multiple images of Property
        $c = 0;
        if ($request->has('icon')) {
            $c++;
            foreach ($request->file('icon') as $index => $image) {
                $uniqueid = uniqid();
                $extension = $image->getClientOriginalExtension();
                $name = Carbon::now()->format('Ymd') . '_' . $c . $uniqueid . '.' . $extension;
                $path = $image->move('storage/app/public/uploads/features/', $name);

                $image = new Feature();
                $image->icon = $name;
                $image->feature = $request->feature[$index];
                $image->project_id = $request->project_id[$index];
                $image->save();
            }
        }

        return response()->json([
            'status' => 200,
            'success' => 'Features Added Sucessfully',
        ]);
    }

    public function editFeature(Request $request)
    {
        $data['feature'] = Feature::where('id', $request->id)->first();
        $data['projects'] = Project::select(['id','name'])->get();
        return view('admin.features.edit_features', compact('data'));
    }

    public function updateFeature(Request $request)
    {
        $feature = Feature::where('id', $request->edit_f_id)->first();
        $feature->project_id = $request->project_id;
        $feature->feature = $request->feature;
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/app/public/uploads/features/', $filename);
            $feature->icon = $filename;
        }

        $feature->update();
        return redirect('features')->with('success', "Feature Update Successfully");
    }
}
