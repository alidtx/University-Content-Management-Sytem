<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\HallHome;
use App\Model\OfficeHome;
use App\Model\DepartmentHome;
use App\Model\SliderMaster;
use App\Model\Office;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OfficeHomeController extends Controller
{

    public function index()
    {

    	$data['officehomes'] = OfficeHome::with('office')->get();


        return view('backend.office_home.list',$data);

    }



    public function add()
    {

        $result['offices'] = Office::get();
    	return view('backend.office_home.add', $result);
    }


    public function store(Request $request)
    {

        //dd($request->all());

        $request->validate([

            'description' => 'required',


        ]);
    	$data           = new OfficeHome();

        $data->office_id     = $request->office;
        $data->type_id     = $request->type_id;
        $data->description     = $request->description;
        $data->save();
    	return redirect()->route('manage_office_home')->with('success','Data Saved successfully');
    }


    public function edit($id)
    {





    	$data['editData'] = OfficeHome::find($id);

        $data['offices'] = Office::get();

    	return view('backend.office_home.edit',$data);


    }

    public function update(Request $request,$id)
    {
        $request->validate([

            'description' => 'required',
        ]);


    	$data           = OfficeHome::find($id);
        $data->office_id     = $request->office_id;
        $data->type_id     = $request->type_id;
        $data->description     = $request->description;
        $data->save();
    	return redirect()->route('manage_office_home')->with('success','Data Updated successfully');
    }




    public function delete(Request $request)
    {
    	$data = OfficeHome::find($request->id);
        $data->delete();
        return redirect()->route('manage_office_home')->with('success','Data Deleted successfully');
    }


}
