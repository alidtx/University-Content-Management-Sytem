<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\OngoingResearch;

class OngoingResearchController extends Controller
{
    public function index()
    {
        $data['ongoingResearches'] = OngoingResearch::orderBy('date','desc')->get();
        // dd($data['ongoingResearches']);
        return view('backend.ongoing_research.ongoing_research-list', $data);
    }

    public function add()
    {

    	return view('backend.ongoing_research.ongoing_research-add');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'source_of_fund'=>'required',
            'area_of_research'=>'required',

        ]);
       $params = $request->all();
       $params['date'] = date('Y-m-d',strtotime($request->date));
       OngoingResearch::create($params);

        return redirect()->route('frontend-menu.ongoing_research')->with('success', 'Ongoing Research Added Successfully.');
    }

    public function edit($id)
    {
        $data['editData'] = OngoingResearch::find($id);
        return view('backend.ongoing_research.ongoing_research-add')->with($data);

    }

    public function update(Request $request,$id)
    {
        $request->validate([

        ]);
        $params = $request->all();
        $params['date'] = date('Y-m-d',strtotime($request->date));

        $data = OngoingResearch::find($id);
        $data->update($params);
        return redirect()->route('frontend-menu.ongoing_research')->with('info','Ongoing Research Updated Successfully.');

    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $deleteData = OngoingResearch::find($id);
        $deleteData->delete();
        return redirect()->route('frontend-menu.ongoing_research');
    }
}
