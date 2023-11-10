<?php

namespace App\Http\Controllers\Backend;


use App\Model\Barta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $data['bartas'] = Barta::orderBy('date','desc')->get();
        return view('backend.barta.barta-list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $data['editData'] = NULL;

        return view('backend.barta.barta-add', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([

    		'title' => 'required',
    		'date' => 'required',
            'attachment' => 'max:20000|mimes:pdf,doc,docx',
        ]);

        $params = $request->all();
        $params['date'] = date('Y-m-d',strtotime($request->date));
        $params['status'] = $request->status ?? 0;

        if($request->hasFile('attachment')){
            $file = $request->file('attachment');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/barta'), $filename);
            $params['attachment']= $filename;
        }

    	Barta::create($params);

    	return redirect()->route('footer-menu.barta')->with('success','Barta Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Barta  $barta
     * @return \Illuminate\Http\Response
     */
    public function show(Barta $barta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Barta  $barta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['editData'] = Barta::findOrFail($id);
    	return view('backend.barta.barta-add')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Barta  $barta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
    		'title' => 'required',
    		'date' => 'required',
            'attachment' => 'max:20000|mimes:pdf,doc,docx',
        ]);

        $data = Barta::findOrFail($id);
        $params = $request->except(['_token']);

        $params['date'] = date('Y-m-d',strtotime($request->date));
        $params['status'] = $request->status ?? 0;

        if($request->hasfile('attachment'))
        {
            $file = $request->file('attachment');
            @unlink(public_path('upload/barta/'.$data->attachment));

            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/barta'), $filename);
            $params['attachment']= $filename;

        }
    	$data->update($params);

    	return redirect()->route('footer-menu.barta')->with('info','Barta Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Barta  $barta
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $data = Barta::findOrFail($request->id);
        @unlink(public_path('upload/barta/'.$data->attachment));
    	$data->delete();

        return redirect()->back()->with('info','Barta Deleted Successfully');

    }
}
