<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\TrainingWorkShopSeminar;
use App\Model\OfficeHome;
use App\Model\Office;
use App\Model\Member;
use Illuminate\Http\Request;

class TrainingWorkShopSeminarController extends Controller
{




    public function index()
    {

    	$data['traningList'] = TrainingWorkShopSeminar::get();

       // dd($data['traningList']);

        return view('backend.workshop_seminar.list',$data);
    }


    public function add()
    {
        $data['offices'] = TrainingWorkShopSeminar::get();
        $data['TrainingWorkShopMember']=Member::get();
    	return view('backend.workshop_seminar.add', $data);
    }



    public function store(Request $request)
    {

       // dd($request->all());

        $request->validate([

            //'description' => 'required',

        ]);

    	$data           = new TrainingWorkShopSeminar();
        $data->traning     = $request->traning;
        $data->work_shop     = $request->work_shop;
        $data->seminar	     = $request->seminar;
        $data->participant     = $request->participant;
        $data->schedule     = $request->schedule;
        $data->facilator     = $request->facilator;
        $data->save();
    	return redirect()->route('manage_workshop_seminar')->with('success','Data Saved successfully');
    }


    public function edit($id)
    {


    	$data['editData'] = TrainingWorkShopSeminar::find($id);

        $data['TrainingWorkShopMember'] = TrainingWorkShopSeminar::with('member')->get();

        //dd($data['TrainingWorkShopMember']);

    	return view('backend.workshop_seminar.edit',$data);


    }

    public function update(Request $request,$id)
    {
         //dd($request->all());

        $request->validate([

            //'description' => 'required',
        ]);

    	$data           = TrainingWorkShopSeminar::find($id);
        $data->traning     = $request->traning;
        $data->work_shop     = $request->work_shop;
        $data->seminar	     = $request->seminar;
        $data->participant     = $request->participant;
        $data->schedule     = $request->schedule;
        $data->facilator     = $request->facilator;
        $data->save();
    	return redirect()->route('manage_workshop_seminar')->with('success','Data Updated successfully');
    }

    public function delete(Request $request)
    {
    	$data = TrainingWorkShopSeminar::find($request->id);
        $data->delete();
        return redirect()->route('manage_workshop_seminar')->with('success','Data Deleted successfully');
    }




}
