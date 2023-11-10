<?php

namespace App\Http\Controllers\Backend;

use App\Model\HallHome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SliderMaster;
use App\Model\Hall;
use Illuminate\Support\Facades\DB;

class HallHomeController extends Controller
{


    public function index($hall_id)
    {
        $data['hallhomes'] = HallHome::with('hall')->where('hall_id', $hall_id)->get();
        $data['hall'] = $hall_id;

        // dd($data['departmentHome']);
        return view('backend.hall_home.list', $data);
    }

    public function add($hall_id)
    {
        $result['facultyArr'] = SliderMaster::get();
        $result['hallhomes'] = HallHome::all();
        $result['hall'] = $hall_id;

        // dd($result['hall']);
        return view('backend.hall_home.add', $result);
    }

    public function store(Request $request)
    {
        //return $request->all();
        $request->validate([
            //'name' => 'required| ',
        ]);

        $data           = new HallHome();
        $data->hall_id     = $request->hall;
        $data->type_id     = $request->type_id;
        $data->description     = $request->description;

        $data->save();

        return redirect()->route('manage_hall_home', $request->hall)->with('success', 'Data Saved successfully');
    }

    public function edit($id, $hall_id)
    {
        $data['facultyArr'] = SliderMaster::get();
        //  $data['departments'] = Department::get();
        $data['editData'] = HallHome::find($id);
        $data['hall'] = $hall_id;

        return view('backend.hall_home.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'name' => 'required'
        ]);
        $data           = HallHome::find($id);
        $data->hall_id     = $request->hall;
        $data->type_id     = $request->type_id;
        $data->description     = $request->description;

        $data->update();
        return redirect()->route('manage_hall_home', $request->hall)->with('success', 'Data Updated successfully');
    }

    public function delete(Request $request)
    {
        $data = HallHome::find($request->id);
        $data->delete();

        return response()->json(['status'=>'success','message'=>'Data Deleted successfully']);

    }
}
