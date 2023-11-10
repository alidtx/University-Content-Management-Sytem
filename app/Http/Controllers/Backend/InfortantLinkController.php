<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\InfortantLink;
use Illuminate\Http\Request;

class InfortantLinkController extends Controller
{
    public function index()
    {
        $data['infoList']=InfortantLink::get();
        return view('backend.important_link.list',$data);
    }

    public function add()
    {


        return view('backend.important_link.add');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'url' => 'required',

        ]);

        $data                       = new InfortantLink();
        $data->name                 = $request->name;
        $data->link          = $request->url;
        $data->save();
        return redirect()->route('setup.manage_important_link')->with('success', 'Data Saved successfully');
    }

    public function edit($id)
    {
        $data['editData']=InfortantLink::find($id);
        return view('backend.important_link.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
        ]);
        $data                   = InfortantLink::findOrFail($id);
        $data->name                 = $request->name;
        $data->link          = $request->url;
        $data->save();
        return redirect()->route('setup.manage_important_link')->with('success', 'Data Updated successfully');
    }

    public function delete(Request $request)
    {
        $data = InfortantLink::findOrFail($request->id);
        $data->delete();

        return redirect()->route('setup.manage_important_link')->with('success', 'Data Deleted successfully');
    }




}
