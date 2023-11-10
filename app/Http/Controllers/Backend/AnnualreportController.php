<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Performance;
use App\Model\Annualreport;
use App\Services\AnnualreportService;

class AnnualreportController extends Controller
{
    public function index()
    {
        $data['reports'] = Annualreport::orderBy('id', 'DESC')->get();
        return view('backend.annualreport.index')->with($data);
    }

    public function create()
    {
        $data['performances'] = Performance::where('self_id', '!=', 0)->where('status', 1)->get();
        return view('backend.annualreport.create')->with($data);
    }

    public function store(Request $request, AnnualreportService $Annualreport)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'files' => ['required', 'mimes:pdf', 'max:2048'],
        ]);
        
        $Annualreport->saveAnnualreport($request);
        return redirect()->route('annual-performance.report.list')->with('success', 'Annual Performance Report add Successfully');
    }

    public function edit($id)
    {
        $data['performances'] = Performance::where('self_id', '!=', 0)->where('status', 1)->get();
        $data['editData'] = Annualreport::findOrFail($id);
        return view('backend.annualreport.create')->with($data);
    }

    public function update(Request $request ,$id, AnnualreportService $Annualreport)
    {
        $Annualreport->updateAnnualreport($request, $id);
        return redirect()->route('annual-performance.report.list')->with('success', 'Annual Performance Report update Successfully');
    }

    public function destroy($id, AnnualreportService $Annualreport)
    {
        $Annualreport->deleteAnnualreport($id);
        return redirect()->route('annual-performance.report.list')->with('success', 'Annual Performance Report delete Successfully');
    }
}
