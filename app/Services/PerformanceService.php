<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Model\Performance;
use File;

class PerformanceService
{

	// This function use for add Performance Model Data

	public function savePerformance(Request $request)
	{
        // dd($request->all());
        $request->validate([

            'image' => 'required|mimes:pdf,dox,docx',
        ]);
		$params = $request->all();
		try{

			if(!empty($request->file('image'))){
				$params['image'] = $this->uploadImage($request->file('image'));
			}

			$okay = Performance::create($params);
			if($request->self_id == 0){
				$this->shortOrder($okay->id,$request->sort_order);
			}else{
				$params['sort_order'] = 0;
			}
			// dd($okay->id);
			return true;

		}catch(Exception $e){
        	return $e;
        }
	}

	// This function use for update Performance Model Data
	// if it shows any exceptin will create


	public function updatePerformance(Request $request, $id)
	{
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png',
        ]);
		$per = Performance::findOrFail($id);
		$params = $request->all();

		try{

			if(!empty($request->file('image'))){
			$params['image'] = $this->uploadImage($request->file('image'));
			}

			if($per->sort_order != $request->sort_order){
				$this->shortOrder($id, $request->sort_order);
			}

			$per->update($params);
			return true;

		}catch(Exception $e){
        	return $e;
        }
	}

	// This function use for delete Performance Model Data
	// Here I have use soft delete
	// if it shows any exceptin will create

	public function deletePerformance($id)
	{
	    $data = Performance::find($id);
	    if($data['image']){
            $pathToImage = 'upload/performance/'.$data['image'];
            File::delete($pathToImage);
        }

        try{
        	$child = Performance::where('self_id', $id)->get(['id']);
        	Performance::destroy($child->toArray());
        	$data->delete();
        }catch(Exception $e){
        	return $e;
        }

		return true;
	}

	public function shortOrder($id, $shortOrder)
	{
		$data = Performance::where('sort_order','>=', $shortOrder)->where('id','!=',$id)->where('self_id', 0)->orderBy('sort_order', "ASC")->get();

		if(count($data)>0){
			foreach($data as $i => $item){
				$change = Performance::findOrFail($item->id);
				$change->sort_order = $shortOrder + 1+ $i;
				$change->update();
			}

		}else{
			return true;
		}
	}

	public function uploadImage($files)
	{
		$file = $files;
		$filename =date('Ymd') .'_'.time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('upload/performance'), $filename);
        return $filename;
	}
}
