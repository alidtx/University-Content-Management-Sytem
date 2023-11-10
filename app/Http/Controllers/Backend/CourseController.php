<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\CourseInfo;
use App\Model\ProgramInfo;

class CourseController extends Controller
{
    //
    public function index()
    {
        $data['courses'] = CourseInfo::orderBy('id','desc')->get();
        return view('backend.course.list')->with($data);
    }

    public function add()
    {
        $data['programs'] = ProgramInfo::all();
        return view('backend.course.add')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
    		'name' => 'required',
            'short_name' => 'required',
    	]);
    	$params = $request->all();

    	CourseInfo::create($params);
    	return redirect()->route('site-setting.course')->with('info','Data add Successfully.');
    }

    public function edit($id)
    {
        $data['editData'] = CourseInfo::find($id);
    	return view('backend.course.add')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'short_name' => 'required',
        ]);
    	$data = CourseInfo::find($id);
    	$params = $request->all();

    	$data->update($params);

    	return redirect()->route('site-setting.course')->with('info','Data Update Successfully');
    }

    public function delete(Request $request)
    {
        $data = CourseInfo::find($request->id);
    	$data->delete();
    }
}
