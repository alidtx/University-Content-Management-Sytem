<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AcademiceventService;
use App\Model\Academicevent;
use App\Model\Department;

class AcademiceventController extends Controller
{
    public function index(AcademiceventService $academicevent)
    {
        $events = $academicevent->getAllAcademic();
        return view('backend.academicevent.index', compact('events'));
    }

    public function create()
    {
        $result['departments'] = Department::all();
        return view('backend.academicevent.create', $result);
    }

    public function store(Request $request, AcademiceventService $academicevent)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'department_id' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'type' => ['required'],
            'description' => ['required'],
        ], [
            'title.required' => 'Academic activity title is required',
            'title.max' => "Academic activity title less than 255 characters.",
            'department_id.required' => 'Department id is required',
            'start_date.required' => 'Academic activity start date is required',
            'end_date.required' => 'Academic activity end date is required',
            'type.required' => 'Academic activity type is required',
            'description.required' => 'Academic activity details is required',
        ]);

        $academicevent->saveEvent($request);
        return redirect()->route('academic-routine.event.list')->with('success', 'Academic calendar activity add Successfully');
    }

    public function show($id)
    {
        $data = Academicevent::find($id);
        return view('backend.academicevent.show', compact('data'));
    }

    public function edit($id)
    {
        $editData = Academicevent::find($id);
        $result['departments'] = Department::all();
        return view('backend.academicevent.create', compact('editData'))->with($result);
    }

    public function update(Request $request, $id, AcademiceventService $academicevent)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'department_id' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'type' => ['required'],
            'description' => ['required'],
        ], [
            'title.required' => 'Academic activity title is required',
            'title.max' => "Academic activity title less than 255 characters.",
            'department_id.required' => 'Department id is required',
            'start_date.required' => 'Academic activity start date is required',
            'end_date.required' => 'Academic activity end date is required',
            'type.required' => 'Academic activity type is required',
            'description.required' => 'Academic activity details is required',
        ]);

        $academicevent->updateEvent($request, $id);
        return redirect()->route('academic-routine.event.list')->with('success', 'Academic calendar activity edit Successfully');
    }

    public function showCalendar()
    {
        $events = Academicevent::where('status', 1)->get();
        $event = [];
        foreach($events as $row)
        {
            $end_date = $row->end_date."24:00:00";
            $event[] = \Calendar::event(
                $row->title, 
                true,
                new\DateTime ($row->start_date),
                new\DateTime ($row->end_date),
                $row->id,
                [
                    'color'=>$row->color,
                ]
            );
        }
        $calendar = \Calendar::addEvents($event);

        return view('backend.academicevent.show-celendar', compact('events', 'calendar'));
    }
}
