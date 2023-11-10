<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PerformanceService;
use App\Model\Performance;
use Illuminate\Support\Str;

class PerformanceController extends Controller
{
    public function index()
    {
        $data['performances'] = Performance::where('self_id', 0)->orderBy('sort_order', 'ASC')->get();
        return view('backend.performances.index')->with($data);
    }

    public function create()
    {
        $data['performances'] = Performance::where('self_id', 0)->where('status', 1)->get();
        return view('backend.performances.create')->with($data);
    }

    public function store(Request $request, PerformanceService $perserve)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);

        $perserve->savePerformance($request);
        return redirect()->route('annual-performance.performance.list')->with('success', 'Annual Performance add Successfully');
    }

    public function edit($id)
    {
        $data['performances'] = Performance::where('self_id', 0)->where('status', 1)->get();
        $data['editData'] = Performance::findOrFail($id);
        return view('backend.performances.create')->with($data);
    }

    public function update(Request $request ,$id, PerformanceService $perserve)
    {
        // $request->validate([
        //     'title' => ['required', 'string', 'max:255'],
        //     'sort_order' => ['required'],
        // ]);

        $perserve->updatePerformance($request, $id);
        return redirect()->route('annual-performance.performance.list')->with('success', 'Annual Performance update Successfully');
    }

    public function destroy($id, PerformanceService $perserve)
    {
        $perserve->deletePerformance($id);
        return redirect()->route('annual-performance.performance.list')->with('success', 'Annual Performance delete Successfully');
    }
}
