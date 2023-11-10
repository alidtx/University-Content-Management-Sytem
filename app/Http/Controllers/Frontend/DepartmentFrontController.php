<?php

namespace App\Http\Controllers\Frontend;

use App;
use App\Http\Controllers\Controller;
use App\Model\Academic;
use App\Model\departmentDetals;
use App\Model\DepartmentHead;
use App\Model\Department;
use App\Model\DepartmentHome;
use App\Model\DepartmentToFacultyMember;
use App\Model\Member;
use App\Model\MemberAdministrativeExperience;
use App\Model\MemberAreaOfInterest;
use App\Model\MemberCertificationAccomplishment;
use App\Model\MemberConference;
use App\Model\MemberEducation;
use App\Model\MemberExperience;
use App\Model\MemberHonorAward;
use App\Model\MemberMembership;
use App\Model\MemberPublicationBook;
use App\Model\MemberPublicationJournal;
use App\Model\MemberScholarship;
use App\Model\News;
use App\Model\ProgramInfo;
use App\Model\Message;
use App\Model\Academicevent;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Mail;
use Illuminate\Support\Facades\Crypt;

class DepartmentFrontController extends Controller
{
    public function departmentObjectives($encypt_id)
    {
        // $id = decrypt($encypt_id);
        $ids = Department::where('short_url', $encypt_id)->first();
        $id = $ids->id;
        $data['department'] = Department::where('id', $id)->first();
        $data['departmentObjective'] = DepartmentHome::with('department')->where('type_id', 1)->where('department_id', $id)->first();
        // dd($data);
        return view('frontend.single_page.department.dept_objective', $data);
    }
    public function departmentMissionVision($encypt_id)
    {
        $ids = Department::where('short_url', $encypt_id)->first();
        $id = $ids->id;
        // $id = decrypt($encypt_id);
        $data['department'] = Department::where('id', $id)->first();
        $data['departmentMissionVision'] = DepartmentHome::with('department')->where('type_id', 2)->where('department_id', $id)->first();
        // dd($data);
        return view('frontend.single_page.department.dept_mission_vision', $data);
    }
    public function departmentProgram($encypt_id)
    {
        $ids = Department::where('short_url', $encypt_id)->first();
        $id = $ids->id;
        // $id = decrypt($encypt_id);
        $data['department'] = Department::where('id', $id)->first();
        // $data['programs'] = ProgramInfo::with('department_name')->where(['department_id' => $id])
        //     ->orderBy('sort_order', 'ASC')
        //     ->get();

        $data['programs'] = ProgramInfo::with('department_name', 'program_category')->where(['department_id' => $id])->orderBy('sort_order', 'asc')->get();


        return view('frontend.single_page.department.dept_program', $data);
    }


    public function departmentRoutine($encypt_id)
    {
        // $id = decrypt($encypt_id);
        $ids = Department::where('short_url', $encypt_id)->first();
        $id = $ids->id;
        $data['department'] = Department::where('id', $id)->first();
        $data['academics'] = Academic::where('department_id', $id)->where('type_id', 1)->get();

        return view('frontend.single_page.department.dept_routine', $data);
    }
    public function departmentResult($encypt_id)
    {
        $ids = Department::where('short_url', $encypt_id)->first();
        $id = $ids->id;
        // $id = decrypt($encypt_id);
        $data['department'] = Department::where('id', $id)->first();
        $data['academics'] = Academic::where('department_id', $id)->where('type_id', 2)->get();

        return view('frontend.single_page.department.dept_result', $data);
    }
    
    public function departmentCalender($encypt_id)
    {
        $ids = Department::where('short_url', $encypt_id)->first();
        $id = $ids->id;
        // $id = decrypt($encypt_id);
        $data['department'] = Department::where('id', $id)->first();
        $data['academics'] = Academic::where('department_id', $id)->where('type_id', 3)->get();

        $data['calendar'] = $this->showCalendar($id);
        $data['events'] = $this->getCalendarEvent($id);

        return view('frontend.single_page.department.dept_calender', $data);
    }


    public function departmentMember($encypt_id)
    {
        $ids = Department::where('short_url', $encypt_id)->first();
        $id = $ids->id;
        // $id = decrypt($encypt_id);
        $data['department'] = Department::with('member')->where('id', $id)->first();
        // dd($data['department']->department_head);
        $data['members'] = DepartmentToFacultyMember::where('department_id', $id)->where('is_faculty', 1)->orderBy('sort_order')->get();

        return view('frontend.single_page.department.dept_member', $data);
    }
    public function departmentStaff($encypt_id)
    {
        $ids = Department::where('short_url', $encypt_id)->first();
        $id = $ids->id;
        // $id = decrypt($encypt_id);
        $data['department'] = Department::where('id', $id)->first();
        $data['members'] = DepartmentToFacultyMember::where('department_id', $id)->where('is_faculty', 0)->orderBy('sort_order')->get();

        return view('frontend.single_page.department.dept_staff', $data);
    }

    public function departmentContact($encypt_id)
    {
        $ids = Department::where('short_url', $encypt_id)->first();
        $id = $ids->id;
        // $id = decrypt($encypt_id);
        $data['department'] = Department::where('id', $id)->first();

        return view('frontend.single_page.department.dept_contact', $data);
    }
    public function departmentMessage($encypt_id)
    {
        $ids = Department::where('short_url', $encypt_id)->first();
        $id = $ids->id;
        // $id = decrypt($encypt_id);
        $data['department'] = Department::where('id', $id)->first();
        $data['message'] = Message::where('type_id', 2)->where('category_id', $id)->first();

        return view('frontend.single_page.department.dept_message', $data);
    }
    public function departmentMemberDetails($encypt_id)
    {
        // $ids = Department::where('short_url', $encypt_id)->first();
        // $id = $ids->id;
        $id = ($encypt_id);

        $data['department'] = DepartmentToFacultyMember::with('department')->where('member_id', $id)->first();

        // $data['department'] = $data['department']->department_id;
        // dd($data['department']);

        $data['facultyMember'] = Member::findOrFail($id);

        $data['MemberExperiences'] = MemberExperience::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberEduaction'] = MemberEducation::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberPublishBooks'] = MemberPublicationBook::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['administrativeExperiences'] = MemberAdministrativeExperience::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberPublicationJournal'] = MemberPublicationJournal::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberConference'] = MemberConference::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['awards'] = MemberHonorAward::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['certifications'] = MemberCertificationAccomplishment::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['scholarships'] = MemberScholarship::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberships'] = MemberMembership::where('member_id', $data['facultyMember']->id)
            ->get();

        $data['researchs'] = MemberAreaOfInterest::where('member_id', $data['facultyMember']->id)
            ->get();

            // dd($data);

        return view('frontend.single_page.department.dept_member_details', $data);
    }


    public function showCalendar($id)
    {
        $events = Academicevent::where('status', 1)->where('department_id', $id)->get();
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

        return $calendar;
    }

    public function getCalendarEvent($id)
    {
        $events = Academicevent::where('status', 1)->where('department_id', $id)->get();

        return $events;
    }
}
