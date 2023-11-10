<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Department;
use App\Model\ProgramInfo;
use App\Model\Program;

class ProgramController extends Controller
{
    //
    public function index()
    {
        $data['programs'] = ProgramInfo::with(['department_name'])->orderBy('sort_order','desc')->get();
        // dd($data['programs']);
        return view('backend.program.list')->with($data);
    }



    public function add()
    {
        $data['departments']    =   Department::where('status', 1)->get();
        // $data['programs']    =   ProgramInfo::get();
        $data['programs']       =   Program::get();

        return view('backend.program.add', $data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([

            'name' => 'required',
    	]);


    	$params = $request->all();
        ProgramInfo::create($params);
    	return redirect()->route('site-setting.program')->with('info','Data add Successfully.');
    }



    public function edit($id)
    {
        $data['editData']       =   ProgramInfo::find($id);
        $data['departments']    =   Department::where('status', 1)->get();
        $data['programs']       =   Program::get();

    	return view('backend.program.edit')->with($data);
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

    	$data = ProgramInfo::find($id);

    	$params = $request->all();

    	$data->update($params);

    	return redirect()->route('site-setting.program')->with('info','Data Update Successfully');
    }



    public function delete(Request $request)
    {
        $data = ProgramInfo::find($request->id);

    	$data->delete();
    }
}
