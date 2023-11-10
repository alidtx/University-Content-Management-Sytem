<?php

namespace App\Http\Controllers\Backend;

use App\Model\Academic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Member;
use App\Model\Faculty;
use App\Model\Department;
use App\Model\ProgramInfo;


class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $data['academics'] = Academic::get();
        return view('backend.academic.academic-list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $data['editData'] = NULL;
        $data['departments'] = Department::get();
        $data['programs'] = ProgramInfo::get();
        $data['faculties'] = Faculty::get();
        // $data['designations'] = Designation::where('purpose',3)->get();

        return view('backend.academic.academic-add')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
    		'title' => 'required',
    		'faculty_id' => 'required',
    		'department_id' => 'required',
            'file' => 'mimes:pdf,doc,docx|max:20000'

        ]);

        $data           = new Academic();
        $data->type_id     = $request->type_id;
        $data->faculty_id     = $request->faculty_id;
        $data->department_id     = $request->department_id;
        $data->program_id     = $request->program_id;
        $data->session     = $request->session;
        $data->title     = $request->title;
        $data->status     = $request->status;

        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $ext = $file->extension();
            $file_name = time() . '.' . $ext;
            $file->storeAs('/public/upload/academic/', $file_name);
            $data->file = $file_name;
            // dd($file_name);
        }
        $data->save();

        return redirect()->route('academic.list')->with('success', 'Academic added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function show(Academic $academic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)


    {
        $data['departments'] = Department::get();
        $data['programs'] = ProgramInfo::get();
        $data['faculties'] = Faculty::get();
        $data['editData'] = Academic::find($id);
        return view('backend.academic.academic-add')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
    		'title' => 'required',
            'file' => 'mimes:pdf,doc,docx|max:20000'
        ]);

        $data           = Academic::find($id);
        $data->type_id     = $request->type_id;
        $data->faculty_id     = $request->faculty_id;
        $data->department_id     = $request->department_id;
        $data->program_id     = $request->program_id;
        $data->session     = $request->session;
        $data->title     = $request->title;
        $data->status     = $request->status;

        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $ext = $file->extension();
            $file_name = time() . '.' . $ext;
            $file->storeAs('/public/upload/academic/', $file_name);
            $data->file = $file_name;
            // dd($file_name);
        }
        $data->save();

        return redirect()->route('academic.list')->with('info', 'Academic updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Academic::find($request->id);
        $data->delete();
        return redirect()->route('academic.list')->with('success', 'Academic Deleted Successfully.');
    }

    public function DepartmentWiseProgram(Request $request)
    {
        $program = ProgramInfo::where('department_id', $request->department_id)->get();
        // dd($program->toArray());

        if (isset($program)) {
            return response()->json($program);
        } else {
            return response()->json('fail');
        }
    }
}
