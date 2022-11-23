<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FeatureController extends Controller
{
    public function index()
    {
        return view('admin.features.features');
    }

    public function getFeature()
    {
        return Feature::where('status', '!=', 1)->get();
    }

    public function createFeature()
    {
        return view('admin.features.create_features');
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
        return view('admin.features.edit_features', compact('data'));
    }

    public function updateFeature(Request $request)
    {
        $feature = Feature::where('id', $request->edit_f_id)->first();
        $feature->feature = $request->feature;
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/app/public/uploads/features/', $filename);
            $feature->icon = $filename;
        }

        $feature->update();
        return back()->with('success', "Feature Update Successfully");
    }
}
