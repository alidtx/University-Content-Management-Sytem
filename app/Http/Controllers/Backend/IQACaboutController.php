<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\IQACabout;
use App\Model\Member;
use Illuminate\Http\Request;

class IQACaboutController extends Controller
{

    public function index()
    {

    	$data['IQACabouts']=IQACabout::get();
        return view('backend.iqac_about.list',$data);
    }


    public function add()
    {

        $data['teaMember']=Member::get();
    	return view('backend.iqac_about.add', $data);
    }



    public function store(Request $request)
    {


        $request->validate([

            'short_description' => 'required',
            'image' =>'required|mimes:jpeg,jpg,png',

        ]);

    	$data           = new IQACabout();
        $data->type     = $request->type;
        $data->description	     = $request->short_description;

        if($request->hasfile('image')){

            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/igabout',$image_name);
            $data->image=$image_name;
        }


        // $data->image     = $request->image;
        $data->save();
    	return redirect()->route('manage_iqac_about')->with('success','Data Saved successfully');
    }


    public function edit($id)
    {

    	$data['editData'] = IQACabout::find($id);


    	return view('backend.iqac_about.edit',$data);
    }

    public function update(Request $request,$id)
    {


        $request->validate([

            // 'traning' => 'required',
            // 'work_shop' => 'required',
            // 'seminar' => 'required',
            // // 'participant' => 'required',
            // 'schedule' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ]);

    	$data           = IQACabout::find($id);
        $data->type     = $request->type;
        $data->description	     = $request->short_description;

        if($request->hasfile('image')){

            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/igabout',$image_name);
            $data->image=$image_name;
        }

        // $data->image     = $request->image;

       // $data->document     = $request->document;
        $data->save();
    	return redirect()->route('manage_iqac_about')->with('success','Data Updated successfully');
    }

    public function delete(Request $request)
    {
    	$data = IQACabout::find($request->id);
        $data->delete();
        return redirect()->route('manage_iqac_about')->with('success','Data Deleted successfully');
    }





}
