<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $team = Team::where('status', '!=', 1)->get();
            return $team;
        }
        return view('admin.team.team');
    }

    public function createTeam(Request $request)
    {
        if ($request->isMethod('post')) {
            $team = new Team();
            $team->name = $request->name;
            $team->desig = $request->desig;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('storage/app/public/uploads/team/', $filename);
                $team->image = $filename;
            }

            $team->save();
            return response()->json([
                'status' => 200,
                'success' => 'Team Added Sucessfully',
            ]);
        }
        return view('admin.team.create_team');
    }

    public function editTeam(Request $request)
    {
        $data['team'] = Team::find($request->id);
        return view('admin.team.edit_team', compact('data'));
    }

    public function updateTeam(Request $request)
    {
        $team = Team::find($request->edit_team_id);
        $team->name = $request->name;
        $team->desig = $request->desig;

        if ($request->hasFile('image')) {

            $path = "storage/app/public/uploads/team/" . $team->image;

            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/app/public/uploads/team/', $filename);
            $team->image = $filename;
        }

        $team->update();
        return redirect('team')->with("success", "Team Update Sucessfully");
    }
}
