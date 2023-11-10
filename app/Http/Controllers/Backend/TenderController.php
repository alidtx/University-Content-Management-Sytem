<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;
use App\Model\Tender;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $data['tenders'] = Tender::orderBy('publish_date','desc')->get();
        return view('backend.tender.tender-list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $data['editData'] = NULL;

        return view('backend.tender.tender-add', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //  dd($request->all);
        $request->validate([
    		//  'title' => 'required',
    		// 'publish_date' => 'required',
    		// 'last_date' => 'required',
            // 'attachment' => 'max:20000|mimes:pdf,doc,docx',
        ]);


        $params = $request->all();
        $params['publish_date'] = date('Y-m-d',strtotime($request->publish_date));
        $params['last_date'] = date('Y-m-d',strtotime($request->last_date));
        $params['status'] = $request->status ?? 0;

        if($request->hasfile('attachment'))
        {
            foreach($request->file('attachment') as $key => $attachment)
            {
                $attachmentname = time() . $key . '.' . $attachment->getClientOriginalExtension();
                $attachment->move(public_path('upload/office_order'), $attachmentname);
                $params['attachment']= $attachmentname;
                // dd($attachmentname);
            }
        }

    	Tender::create($params);

    	return redirect()->route('footer-menu.tender')->with('success','Tender added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Backend\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function show(Tender $tender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Backend\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['editData'] = Tender::findOrFail($id);
    	return view('backend.tender.tender-add')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Backend\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
    		'title' => 'required',
    		'publish_date' => 'required',
    		'last_date' => 'required',
            'attachment' => 'max:20000|mimes:pdf,doc,docx',
        ]);

        $data = Tender::findOrFail($id);
        $params = $request->except(['_token']);

        $params['publish_date'] = date('Y-m-d',strtotime($request->publish_date));
        $params['last_date'] = date('Y-m-d',strtotime($request->last_date));
        $params['status'] = $request->status ?? 0;

        if($request->hasfile('attachment'))
        {
            foreach($request->file('attachment') as $key => $attachment)
            {
                $attachmentname = time() . $key . '.' . $attachment->getClientOriginalExtension();
                $attachment->move(public_path('upload/office_order'), $attachmentname);
                $params['attachment']= $attachmentname;
                // dd($attachmentname);
            }
        }
    	$data->update($params);

    	return redirect()->route('footer-menu.tender')->with('success','Tender added Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Backend\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $data = Tender::findOrFail($request->id);
        @unlink(public_path('upload/office_order/'.$data->attachment));
    	$data->delete();

        return redirect()->back()->with('info','Tender Deleted Successfully');

    }
    // public function officeTenderRemove($id)
    // {
    //     $data = Tender::findOrFail($id);
    //     @unlink(public_path('upload/office_order/'.$data->attachment));
    //     $data->attachment = '';
    //     $data->save();
    //     return redirect()->back()->with('info','Attachment Deleted Successfully');
    // }
}
