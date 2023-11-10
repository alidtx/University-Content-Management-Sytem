<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\CompletedResearch;

class CompletedResearchController extends Controller
{
    public function index()
    {
        $data['completedResearches'] = CompletedResearch::orderBy('date', 'desc')->get();
        return view('backend.completed_research.completed_research-list')->with($data);
    }

    public function add()
    {
        return view('backend.completed_research.completed_research-add');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'journal_name'=>'required',
            'journal_index'=>'required',
            'journal_category'=>'required',
            'url'=>'required',
            'year'=>'required',
            'publish_status'=>'required',
            'date'=>'required',
            'image' => 'required|max:20000|mimes:jpg,png,jpeg',
            'pdf' => 'required|max:100000|mimes:pdf,doc,docx',
        ]);

        $params = $request->all();

        $params['date'] = date('Y-m-d', strtotime($request->date));

        if ($request->pdf) {
            $fileName = time() . '.' . $request->pdf->getClientOriginalExtension();
            $request->pdf->move(public_path('upload/journal'), $fileName);
            $params['pdf'] = $fileName;
        }
        if ($request->image) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload/journal'), $imageName);
            $params['image'] = $imageName;
        }
        CompletedResearch::create($params);


        return redirect()
            ->route('frontend-menu.completed_research')
            ->with('info', 'Store successfully.');
    }


    public function edit($id)
    {
        $data['editData'] = CompletedResearch::find($id);
        return view('backend.completed_research.completed_research-add')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'max:20000|mimes:jpg,png,jpeg',
            'file' => 'max:100000|mimes:pdf,doc,docx',
        ]);

        $data = CompletedResearch::find($id);

        $params = $request->all();
        $params['date'] = date('Y-m-d', strtotime($request->date));


        if ($request->image) {
            @unlink(public_path('upload/journal/' . $data->image));
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload/journal'), $imageName);
            $params['image'] = $imageName;
        }

        if ($request->pdf) {
            @unlink(public_path('upload/journal/' . $data->pdf));
            $fileName = time() . '.' . $request->pdf->getClientOriginalExtension();
            $request->pdf->move(public_path('upload/journal'), $fileName);
            $params['pdf'] = $fileName;
        }

        $data->update($params);
        return redirect()
            ->route('frontend-menu.completed_research')
            ->with('info', 'Update successfully.');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $deleteData = CompletedResearch::find($id);
        // @unlink(public_path('upload/completed_research/' . $deleteData->pdf));
        $deleteData->delete();
        return redirect()->route('frontend-menu.completed_research');
    }
}
