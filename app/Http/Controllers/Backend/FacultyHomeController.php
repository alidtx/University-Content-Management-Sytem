<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\FacultyHome;
use App\Model\Faculty;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FacultyHomeController extends Controller
{
    public function index()
    {
    	$data['facultyHomes'] = FacultyHome::with('faculty')->get();
        // $data['department'] = Department::all();
        return view('backend.faculty_home.list',$data);
    }

    public function add()
    {
        // $data['facultyArr']=SliderMaster::get();
        $data['faculties'] = Faculty::all();
    	return view('backend.faculty_home.add', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            //'name' => 'required| ',
        ]);
    	$data           = new FacultyHome();
        $data->faculty_id     = $request->faculty_id;
        $data->type_id     = $request->type_id;
        $data->description     = $request->description;
        $data->save();

    	return redirect()->route('manage_faculty_home')->with('success','Data Saved successfully');
    }

    public function edit($id)
    {
        $data['faculties'] = Faculty::all();
    	$data['editData'] = FacultyHome::findOrFail($id);

    	return view('backend.faculty_home.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
           // 'name' => 'required'
        ]);

    	$data           = FacultyHome::findOrFail($id);
        $data->faculty_id     = $request->faculty_id;
        $data->type_id     = $request->type_id;
        $data->description     = $request->description;
        $data->save();
    	return redirect()->route('manage_faculty_home')->with('success','Data Updated successfully');
    }


    public function delete(Request $request)
    {
    	$data = FacultyHome::findOrFail($request->id);

        $data->delete();

        return redirect()->route('manage_faculty_home')->with('success','Data Deleted successfully');
    }
}
