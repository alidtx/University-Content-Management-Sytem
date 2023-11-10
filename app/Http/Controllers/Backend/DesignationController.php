<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Designation;

class DesignationController extends Controller
{



    public function index()
   {
    $data['designations'] = Designation::orderBy('sort_order','asc')->get();
    return view('backend.designation.designation-view')->with($data);
  }

public function addDesignation()
{
   return view('backend.designation.designation-add');
}

public function storeDesignation(Request $request)
{

  $data['designation'] = Designation::all();
  $request->validate([
    'name' => 'required',
    'purpose' => 'required',
    // 'layer' => 'required',
    // 'sort_order' => 'required',
  ]);

  foreach ($data['designation'] as $key => $data) {
    if(str_replace(' ', '', $data['name'])==str_replace(' ', '', $request->name) && $data['purpose']==$request->purpose){
      return redirect()->route('site-setting.designation.add')->with('error','Designation already exists for this purpose');
    }
  }

  $data = $request->all();
  Designation::create($data);
  return redirect()->route('site-setting.designation')->with('info','Designation store successfully.');
}

public function editDesignation($id)
{
    $data['editData'] = Designation::find($id);
    return view('backend.designation.designation-add')->with($data);
}

public function updateDesignation(Request $request, $id)
{
   $request->validate([
    'name' => 'required',
    'purpose' => 'required',
    // 'layer' => 'required',
    // 'sort_order' => 'required',
]);
   $data = Designation::find($id);
   $data->update($request->all());
   return redirect()->route('site-setting.designation')->with('info','Designation update successfully.');
}

public function deleteDesignation(Request $request)
{
    $data = Designation::find($request->id);
    $data->delete();
    return redirect()->route('site-setting.designation');
}

}
