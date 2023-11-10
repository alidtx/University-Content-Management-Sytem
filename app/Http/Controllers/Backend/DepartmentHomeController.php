<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\DepartmentHome;
use App\Model\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DepartmentHomeController extends Controller
{
    public function index($dept_id)
    {
    	$data['departmentHome'] = DepartmentHome::with('department')->where('department_id', $dept_id)->get();
    	$data['dept_id'] = $dept_id;
        return view('backend.department_home.list',$data);
    }

    public function add($dept_id)
    {
        // $result['departments'] = Department::where('department_id', $dept_id)->get();
        $result['dept_id'] = $dept_id;
    	return view('backend.department_home.add', $result);
    }

    public function store(Request $request)
    {
         //return $request->all();
        $request->validate([

            //'name' => 'required| ',

        ]);
    	$data = new DepartmentHome();

        $data->department_id     = $request->department_id;
        $data->type_id     = $request->type_id;
        $data->about     = $request->about;
        $data->save();

    	return redirect()->route('manage_department_home', $request->department_id)->with('success','Data Saved successfully');
    }

    public function edit($dept_id, $id)
    {
        // $data['departments'] = Department::where('department_id', $dept_id)->get();
    	$data['editData'] = DepartmentHome::findOrFail($id);
    	$data['dept_id'] = $dept_id;
        // dd($data['/']);

    	return view('backend.department_home.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
           // 'name' => 'required'
        ]);

    	$data           = DepartmentHome::findOrFail($id);

        $data->department_id     = $request->department_id;
        $data->type_id     = $request->type_id;
        $data->about     = $request->about;

        $data->update();
    	return redirect()->route('manage_department_home', $request->department_id)->with('success','Data Updated successfully');
    }


    public function delete(Request $request)
    {
    	$data = DepartmentHome::find($request->id);
        $data->delete();

        return response()->json(['status'=>'success','message'=>'Data Deleted successfully']);
    }

}
