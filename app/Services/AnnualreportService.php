<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Model\Performance;
use App\Model\Annualreport;
use File;

class AnnualreportService
{
	//Annual report save
	public function saveAnnualreport(Request $request)
	{
		$params = $request->all();
		try{
			if(!empty($request->file('files'))){
				$params['files'] = $this->uploadFile($request->file('files'));
			}
			Annualreport::create($params);
			return true;

		}catch(Exception $e){
        	return $e;
        }
	}

	//Annual report update
	public function updateAnnualreport(Request $request, $id)
	{
		$params = $request->all();
		try{
			if(!empty($request->file('files'))){
				$params['files'] = $this->uploadFile($request->file('files'));
			}

			$data = Annualreport::find($id);
			$data->update($params);
			return true;

		}catch(Exception $e){
        	return $e;
        }
	}
	//Annual report delete
	public function deleteAnnualreport($id)
	{
		try{
        	$data = Annualreport::find($id);
        	$data->delete();
        }catch(Exception $e){
        	return $e;
        }
		return true;
	}

	// file upload internal function
	public function uploadFile($files)
	{
		$file = $files;
		$filename =date('Ymd') .'_'.time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('upload/performance'), $filename);
        return $filename;
	}
}
