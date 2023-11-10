<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\HallHome;
use App\Model\Hall;
// use App\Model\News;
use App\Model\HallMember;
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
use Illuminate\Http\Request;

class hallFront extends Controller
{

    public function hallHistory($id)
    {
        $ids = Hall::where('short_url', $id)->first();
        $id = $ids->id;
        $data['halls'] = Hall::where('id', $id)->first();
        $data['hallHome']=HallHome::with('hall')
        ->where('type_id',3)
        ->where('hall_id',$id)
        ->first();

    return view('frontend.single_page.hall.hall-history', $data);
    }


    public function allHallProvost($id)
    {
        $ids = Hall::where('short_url', $id)->first();
        $id = $ids->id;
        $data['halls'] = Hall::where('id', $id)->first();

        $data['hallProvost']=Hall::with('member')
        ->where('id', $id)
        ->get();
       return view('frontend.single_page.hall.all-hall-provost', $data);
    }

    public function provostMessage($id)
    {
        $ids = Hall::where('short_url', $id)->first();
        $id = $ids->id;
        // dd($id);
        $data['halls'] = Hall::where('id', $id)->first();
        $data['hallProvost']=Hall::with('member')
        ->where('id', $id)
        ->get();
        return view('frontend.single_page.hall.provost-message', $data);
    }

    public function houseTutor($id)

    {
        $ids = Hall::where('short_url', $id)->first();
        $id = $ids->id;
        $data['halls'] = Hall::where('id', $id)->first();
        $data['houseTutor']=HallMember::with('member')
        ->where('type_id',1)->where('hall_id', $id)
        ->get();
        return view('frontend.single_page.hall.house-tutor', $data);
    }

    public function administrativeStaff($id)

    {
        $ids = Hall::where('short_url', $id)->first();
        $id = $ids->id;
        $data['halls'] = Hall::where('id', $id)->first();
        $data['addministrationStuff']=HallMember::with('member')
        ->where('type_id',2)->where('hall_id', $id)
        ->get();
        return view('frontend.single_page.hall.administrative-staff', $data);
    }


    public function hallContact($id)
    {
        $ids = Hall::where('short_url', $id)->first();
        $id = $ids->id;
        $data['halls'] = Hall::where('id', $id)->first();
        $data['contactNumber']=Hall::get();
        return view('frontend.single_page.hall.hall-contact', $data);
    }


    public function studentActivity()

    {
        return view('frontend.single_page.hall.student-activity');
    }

    public function archivement()
    {
        return view('frontend.single_page.hall.archivement');
    }


    public function scholarshipFinancial()

    {
        return view('frontend.single_page.hall.scholarship-financial');
    }

    public function HallMemberDetails($encypt_id)
    {
        $id = ($encypt_id);

        $data['halls'] = HallMember::with('hall')->where('member_id', $id)->first();
        // dd($data['halls']);

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

        return view('frontend.single_page.hall.hall_member_details', $data);
    }
    public function ProvostDetails($encypt_id)
    {
        $id = ($encypt_id);

        $data['halls'] = Hall::with('member')->where('provost', $id)->first();

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

        return view('frontend.single_page.hall.provost_details', $data);
    }



}
