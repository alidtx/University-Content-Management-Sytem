<?php

namespace App\Model;

use App\Model\CourseInfo;
use App\Model\ProgramInfo;
use App\Model\Faculty;
use App\Model\Department;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    Protected $fillable = ['title','image','date','short_description','long_description','type','display_on_scrollbar','file','start_date','end_date','faculty_id','department_id','program_info_id','course_info_id','hall_id','office_id' ];

    public function program_info(){
    	return $this->belongsTo(ProgramInfo::class,'program_info_id','id');
    }

    public function course_info(){
    	return $this->belongsTo(CourseInfo::class,'course_info_id','id');
    }

    public function faculty_info(){
    	return $this->belongsTo(Faculty::class,'faculty_info_id','id');
    }

    public function department_info(){
    	return $this->belongsTo(Department::class,'department_info_id','id');
    }

}
