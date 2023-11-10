<?php

namespace App\Http\Controllers\Frontend;

use App;
use App\Http\Controllers\Controller;
use App\Model\Academic;
use App\Model\Faculty;
use App\Model\FacultyHome;
use App\Model\Department;
use App\Model\PhotoGalleryImage;
use App\Model\DepartmentHead;
use App\Model\DepartmentToFacultyMember;
use App\Model\News;
use App\Model\ProgramInfo;
use App\Model\Message;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Mail;

use Illuminate\Support\Facades\Crypt;

Class FacultyFrontController extends Controller
{
    public function facultyHistory($encypt_id)
    {
        $ids = Faculty::where('short_url',$encypt_id)->first();
        $id = $ids->id;

        // $id = decrypt($encypt_id);
        $data['faculty'] = Faculty::where('id', $id)->first();
        $data['facultyHistory'] = FacultyHome::with('faculty')->where('type_id',1)->where('faculty_id', $id)->first();
        // dd($data);
        return view('frontend.single_page.faculty.faculty_history', $data);
    }
    public function facultyMissionVision($encypt_id)
    {
        $ids = Faculty::where('short_url',$encypt_id)->first();
        $id = $ids->id;
        $data['faculty'] = Faculty::where('id', $id)->first();
        $data['facultyMissionVision'] = FacultyHome::with('faculty')->where('type_id',2)->where('faculty_id', $id)->first();
        // dd($data);
        return view('frontend.single_page.faculty.faculty_mission_vision', $data);
    }


    public function facultyDepartment($encypt_id)
    {
        $ids = Faculty::where('short_url',$encypt_id)->first();
        $id = $ids->id;
        $data['faculty'] = Faculty::where('id', $id)->first();
        $data['departments'] = Department::with('faculty')->where(['faculty_id' => $id])->get();

        return view('frontend.single_page.faculty.faculty_department', $data);
    }




    public function facultyCalender($encypt_id)
    {
        $ids = Faculty::where('short_url',$encypt_id)->first();
        $id = $ids->id;
        $data['faculty'] = Faculty::where('id', $id)->first();
        $data['academics'] = Academic::where('faculty_id', $id)->where('type_id', 3)->get();
        return view('frontend.single_page.faculty.faculty_calender', $data);
    }



    public function facultyEvent($encypt_id)
    {
        $ids = Faculty::where('short_url',$encypt_id)->first();
        $id = $ids->id;
        $data['faculty'] = Faculty::where('id', $id)->first();
        $data['events'] = News::where('faculty_id', $id)->orWhere('faculty_id', -1)->where('type', 3)->get();

        // dd($data['events']->toArray());
        return view('frontend.single_page.faculty.faculty_events', $data);
    }


    public function facultyEventDetails($encypt_id, $event_id)
    {
        $ids = Faculty::where('short_url', $encypt_id)->first();
        $id = $ids->id;
        $data['faculty'] = Faculty::where('id', $id)->first();

        $data['event'] = News::where('id', $event_id)->first();
        // dd($data['event']);
        return view('frontend.single_page.faculty.faculty_event_details', $data);
    }

    public function facultyGallery($encypt_id)
    {
        $ids = Faculty::where('short_url',$encypt_id)->first();
        $id = $ids->id;
        $data['faculty'] = Faculty::where('id', $id)->first();
        // $data['academics'] = Academic::where('faculty_id', $id)->where('type_id', 3)->get();
        $data['aa'] = PhotoGalleryImage::first();
        // dd($data['aa']);
        return view('frontend.single_page.faculty.faculty_gallery', $data);
    }


    public function facultyContact($encypt_id)
    {
        $ids = Faculty::where('short_url',$encypt_id)->first();
        $id = $ids->id;
        $data['faculty'] = Faculty::where('id', $id)->first();

        return view('frontend.single_page.faculty.faculty_contact', $data);
    }


    public function facultyMessage($encypt_id)
    {
        $ids = Faculty::where('short_url',$encypt_id)->first();
        $id = $ids->id;
        $data['faculty'] = Faculty::where('id', $id)->first();
        $data['message'] = Message::where('type_id',1)->where('category_id', $id)->first();
        return view('frontend.single_page.faculty.faculty_message', $data);
    }

}
