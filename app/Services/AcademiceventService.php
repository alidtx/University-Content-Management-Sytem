<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Model\Academicevent;
use MaddHatter\LaravelCalendar\Facades\Calendar;

class AcademiceventService
{
	public function getAllAcademic()
	{
		$data = Academicevent::all();
		return $data;
	}

	//Annual calendar event add
	public function saveEvent(Request $request)
	{
		// dd($request);
		$data = new Academicevent();

		if($request->type == 1){

			$data->color = '#DEE114';

		}else{
			$data->color = $request->color;
		}
		$data->title = $request->title;
		$data->type = $request->type;
		$data->department_id = $request->department_id;
		$data->start_date = $request->start_date;
		$data->end_date = $request->end_date;
		$data->status = $request->status;
		$data->description = $request->description;
		try{
			$data->save();
			return true;

		}catch(Exception $e){
			return $e;
		}
	}

	//Annual calendar event edit
	public function updateEvent(Request $request, $id)
	{
	    $data = Academicevent::find($id);
		if($request->type == 1){
			$data->color = '#DEE114';
		}else{
			$data->color = $request->color;
		}

		$data->title = $request->title;
		$data->type = $request->type;
		$data->department_id = $request->department_id;
		$data->start_date = $request->start_date;
		$data->end_date = $request->end_date;
		$data->status = $request->status;
		$data->description = $request->description;

		try{
			$data->update();
			return true;

		}catch(Exception $e){
			return $e;
		}
	}


}
