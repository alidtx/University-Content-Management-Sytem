<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Str;
use App;
use App\Http\Controllers\Controller;
use App\Model\About;
use App\Model\Academic;
use App\Model\Activity;
use App\Model\Advisor;
use App\Model\Alumni;
use App\Model\AtAGalance;
use App\Model\BooksPublication;
use App\Model\LibrarySubject;
use App\Model\Form;
use App\Model\LibraryTimeSchedule;
use App\Model\ProgramInfo;
use App\Model\Hall;
use App\Model\HallHome;
use App\Model\departmentDetals;
use App\Model\Banner;
use App\Model\ContactMessage;
use App\Model\ContactUs;
use App\Model\CounterBox;
use App\Model\DepartmentHead;
use App\Model\Designation;
use App\Model\Director;
use App\Model\vcAdministrativeExperiences;
use App\Model\Query;
use App\Model\Department;
use App\Model\Facility;
use App\Model\Faculty;
use App\Model\Feature;
use App\Model\FollowUs;
use App\Model\FrontendMenu;
use App\Model\Gallery;
use App\Model\DepartmentHome;
use App\Model\MenuPost;
use App\Model\News;
use App\Model\Notice;
use App\Model\Offer;
use App\Model\Partnership;
use App\Model\Research;
use App\Model\Slider;
use App\Model\CourseInfo;
use App\Model\SocialMediaLink;
use App\Model\StudentFeedback;
use App\Model\Teacher;
use App\Model\TeacherAdvisor;
use App\Model\TrainingEnroll;
use App\Model\UsefulLink;
use App\Model\QuickLink;
use App\Model\ForStudent;
use App\Model\GetInTouch;
use App\Model\FastService;
use App\Model\AskLibrarian;
use App\Model\Barta;
use App\Model\OurResearch;
use App\Model\Office;
use App\Model\OurDevelopment;
use App\Model\OurLibrary;
use App\Model\OurCampus;
use App\Model\OngoingResearch;
use App\Model\CompletedResearch;
use App\Model\Oped;
use App\Model\OngoingTraining;
use App\Model\Performance;
use App\Model\UpcomingTraining;
use App\Model\JournalPaper;
use App\Model\Member;
use App\Model\MemberEducation;
use App\Model\MemberExperience;
use App\Model\MemberAdministrativeExperience;
use App\Model\MemberPublicationBook;
use App\Model\MemberPublicationJournal;
use App\Model\MemberConference;
use App\Model\SyndicateMember;
use App\Model\BoardofTrustee;
use App\Model\Career;
use App\Model\OfficeOrder;
use App\Model\OfficeToMember;
use App\Model\Leave;
use App\Model\Tender;
use App\Model\MemberAreaOfInterest;
use App\Model\MemberCertificationAccomplishment;
use App\Model\MemberHonorAward;
use App\Model\MemberMembership;
use App\Model\MemberScholarship;
use App\Model\Program;
use App\Model\MemberSocialMediaLink;
use App\Model\Message;
use App\Model\PostCategory;
use App\Model\BlogPost;
use App\Model\DepartmentToFacultyMember;
use App\Model\PhotoGallery;
use App\Model\PhotoGalleryMaster;
use App\Model\SliderMaster;
use App\Model\OurLibraray;
use App\Model\LibrarySlider;
use App\Model\LibraryToMember;
use App\Model\LibraryGlance;
use App\Model\InfortantLink;
use App\Model\Transport;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use Notification;
use App\Notifications\JournalSubmit;
use App\Notifications\JournalSubmitted;
use Illuminate\Support\Facades\View;
use Mail;
use Hashids\Hashids;

use Illuminate\Support\Facades\Crypt;


class FrontController extends Controller
{
    public function __construct()
    {
        $mymenu = FrontendMenu::where('parent_id', '0')->where('menu_type', 'none')->orderBy('sort_order', 'asc')->take(5)->get();
        $at_a_glance = AtAGalance::where('status', 1)->first();
        // dd($at_a_glance);
        View::share('mymenu', $mymenu);
        View::share('at_a_glance', $at_a_glance);
    }

    public function MenuUrl($menu)
    {
        $menu_url_data = FrontendMenu::where('slug', $menu)->first();
        if ($menu_url_data != null) {
            if ($menu_url_data->url_link_type == '1') {
                return redirect()->route($menu_url_data['url_link']);
            }

            if ($menu_url_data->url_link_type == '2') {
                $data['find_post'] = MenuPost::where('title', @str_replace('-', ' ', $menu_url_data->url_link))->first();
                return view('frontend.single_page.single-page', $data);
            }

            if ($menu_url_data->url_link_type == '5') {
                // $program = Program::where('slug', $menu_url_data->url_link)->first();
                header("Location:" . route("program_category", $menu_url_data->url_link));
                die();
            }

            if ($menu_url_data->url_link_type == '3') {
                $url = strpos($menu_url_data->url_link, 'http') !== 0 ? "http://" . $menu_url_data->url_link : $menu_url_data->url_link;
                header("Location:" . $url);
                die();
            }

            if ($menu_url_data->url_link_type == '4') {
                $data['find_post'] = $menu_url_data;
                return view('frontend.single_page.single-page-attach', $data);
            }
            return redirect()->back()->with('error', 'Sorry page is not found');
        } else {
            return redirect()->back();
        }
    }

    public function usefulUrl(Request $request, $url)
    {
        $menu_data = UsefulLink::where('slug', $url)->first();
        if ($menu_data != null) {
            if ($menu_data->url_link_type == '1') {
                return redirect()->route($menu_data['link']);
            }

            if ($menu_data->url_link_type == '2') {
                $data['find_post'] = MenuPost::where('title', @str_replace('-', ' ', $menu_data->link))->first();
                return view('frontend.single_page.single-page', $data);
            }

            if ($menu_data->url_link_type == '3') {
                $url = strpos($menu_data->link, 'http') !== 0 ? "http://" . $menu_data->link : $menu_data->link;
                header("Location:" . $url);
                die();
            }

            if ($menu_data->url_link_type == '4') {
                $data['find_post'] = $menu_data;

                return view('frontend.single_page.single-page-attach', $data);
            }
            return redirect()->back()->with('error', 'Sorry page is not found');
        } else {
            return redirect()->back();
        }
    }

    public function quickUrl(Request $request, $url)
    {

        $menu_data = QuickLink::where('slug', $url)->first();
        //    dd($menu_data);
        if ($menu_data != null) {
            if ($menu_data->url_link_type == '1') {
                return redirect()->route($menu_data['link']);
            }

            if ($menu_data->url_link_type == '2') {
                $data['find_post'] = MenuPost::where('title', @str_replace('-', ' ', $menu_data->link))->first();
                return view('frontend.single_page.single-page', $data);
            }

            if ($menu_data->url_link_type == '3') {
                $url = strpos($menu_data->link, 'http') !== 0 ? "http://" . $menu_data->link : $menu_data->link;
                header("Location:" . $url);
                die();
            }

            if ($menu_data->url_link_type == '4') {
                $data['find_post'] = $menu_data;

                return view('frontend.single_page.single-page-attach', $data);
            }
            return redirect()->back()->with('error', 'Sorry page is not found');
        } else {
            return redirect()->back();
        }
    }


    public function getInTouchUrl(Request $request, $url)
    {
        $menu_data = GetInTouch::where('slug', $url)->first();
        if ($menu_data != null) {
            if ($menu_data->url_link_type == '1') {
                return redirect()->route($menu_data['link']);
            }

            if ($menu_data->url_link_type == '2') {
                $data['find_post'] = MenuPost::where('title', @str_replace('-', ' ', $menu_data->link))->first();
                return view('frontend.single_page.single-page', $data);
            }

            if ($menu_data->url_link_type == '3') {
                $url = strpos($menu_data->link, 'http') !== 0 ? "http://" . $menu_data->link : $menu_data->link;
                header("Location:" . $url);
                die();
            }

            if ($menu_data->url_link_type == '4') {

                $data['find_post'] = $menu_data;

                return view('frontend.single_page.single-page-attach', $data);
            }
            return redirect()->back()->with('error', 'Sorry page is not found');
        } else {
            return redirect()->back();
        }
    }

    public function fastServiceUrl(Request $request, $url)
    {
        $menu_data = FastService::where('slug', $url)->first();

        if ($menu_data != null) {
            if ($menu_data->url_link_type == '1') {
                return redirect()->route($menu_data['link']);
            }

            if ($menu_data->url_link_type == '2') {
                $data['find_post'] = MenuPost::where('title', @str_replace('-', ' ', $menu_data->link))->first();
                return view('frontend.single_page.single-page', $data);
            }

            if ($menu_data->url_link_type == '3') {

                $url = strpos($menu_data->link, 'http') !== 0 ? "http://" . $menu_data->link : $menu_data->link;
                header("Location:" . $url);
                die();
            }

            if ($menu_data->url_link_type == '4') {
                $data['find_post'] = $menu_data;

                return view('frontend.single_page.single-page-attach', $data);
            }
            return redirect()->back()->with('error', 'Sorry page is not found');
        } else {
            return redirect()->back();
        }
    }

    public function home()
    {
        $data['vc'] = Member::where('designation_id', 4)->first();
        $data['message'] = Message::where('member_id', $data['vc']->id)->first();
        // dd($data['message']);

        $data['pro_vc'] = Member::where('designation_id', 5)->first();
        $data['treasurer'] = Member::where('designation_id', 45)->first();
        $data['slider_images'] = Slider::where('slider_master_id', 1)->orderBy('id', 'asc')->get();
        $data['events'] = News::where('type', 2)->orderBy('start_date', 'desc')->take(5)->get();
        $data['notices'] = News::where('type', 3)->orderBy('start_date', 'desc')->get();
        $data['about'] = About::first();
        return view('frontend.pages.index', $data);
    }

    public function aboutMore()
    {
        $data = About::first();
        return view('frontend.pages.about-more', compact('data'));
    }

    public function newsDetails($id)
    {
        $data = News::where('id', $id)->first();
        // $title = 'News';
        if ($data->type == 1) {
            $title = 'News';
        }
        else if ($data->type == 2) {
            $title = 'Event';
        }
        else if ($data->type == 3) {
            $title = 'Notice';
        }
        return view('frontend.pages.news-details', compact('data'))->withPagetitle($title);
    }

    public function allNewsEvents()
    {
        $data['events'] = News::where('type', 1)->orWhere('type', 2)
            ->orderBy('date', 'desc')
            ->paginate(6);

        return view('frontend.pages.all_news_events', $data);
    }
    public function allNotices()
    {
        // $data['events'] = News::where('type', 3)->get();
        $data['events'] = News::where('type', 3)
            ->orderBy('date', 'desc')
            ->paginate(10);

        return view('frontend.pages.all_notices', $data);
    }
    public function allPressReleases()
    {
        $data['events'] = News::where('type', 7)->orderBy('date', 'desc')->paginate(6);
        // dd( $data['events']);
        return view('frontend.pages.all_press_releases', $data);
    }

    public function pressReleaseDetails($id)
    {
        $data = News::where('id', $id)->first();
        return view('frontend.pages.press_release-details', compact('data'));
    }
    // public function eventDetails($id)
    // {
    //     $data = News::where('id', $id)->first();
    //     return view('frontend.pages.news-details', compact('data'));
    // }
    // public function noticeDetails($id)
    // {
    //     $data = News::where('id', $id)->first();
    //     return view('frontend.pages.news-details', compact('data'));
    // }

    public function allfacilities()
    {
        $data['facility'] = Facility::all();
        return view('frontend.pages.facility', $data);
    }

    public function facilityDetails($url)
    {
        $data = Facility::where('short_url', '=', $url)->first();
        return view('frontend.single_page.facility-detail', compact('data'));
    }

    public function academyFacultyMenu($id)
    {
        $data['faculty']    =   Faculty::find($id);
        return view('frontend.single_page.faculty.academy_menu_faculty', $data);
    }

    public function admissionFacultyMenu($id)
    {
        $data['faculty']    =   Faculty::find($id);
        return view('frontend.single_page.faculty.admission_menu_faculty', $data);
    }

    public function officesFacultyMenu($id)
    {
        $data['faculty']    =   Faculty::find($id);
        return view('frontend.single_page.faculty.offices_menu_faculty', $data);
    }

    public function researchFacultyMenu($id)
    {
        $data['faculty']    =   Faculty::find($id);
        return view('frontend.single_page.faculty.research_menu_faculty', $data);
    }

    public function campuslifeFacultyMenu($id)
    {
        $data['faculty']    =   Faculty::find($id);
        return view('frontend.single_page.faculty.campuslife_menu_faculty', $data);
    }

    public function academyMenu($id)
    {
        $data['department']    =   Department::find($id);
        return view('frontend.single_page.academy_menu', $data);
    }

    public function admissionMenu($id)
    {
        $data['department']    =   Department::find($id);
        return view('frontend.single_page.admission_menu', $data);
    }

    public function officesMenu($id)
    {
        $data['department']    =   Department::find($id);
        return view('frontend.single_page.offices_menu', $data);
    }

    public function researchMenu($id)
    {
        $data['department']    =   Department::find($id);
        return view('frontend.single_page.research_menu', $data);
    }

    public function campuslifeMenu($id)
    {
        $data['department']    =   Department::find($id);
        return view('frontend.single_page.campuslife_menu', $data);
    }

    public function allOffices()
    {
        $data['vc'] = Office::where(['status' => 1])
            ->where('short_url', 'OFCVC')
            ->first();
        $data['proVc'] = Office::where(['status' => 1])
            ->where('short_url', 'OFCPVC')
            ->first();
        $data['treasurer'] = Office::where(['status' => 1])
            ->where('short_url', 'OFCTR')
            ->first();
        $data['proctor'] = Office::where(['status' => 1])
            ->where('short_url', 'OFCPT')
            ->first();
        $data['offices'] = Office::where(['status' => 1])
            ->where('short_url', '!=', 'OFCVC')
            ->where('short_url', '!=', 'OFCPVC')
            ->where('short_url', '!=', 'OFCTR')
            ->where('short_url', '!=', 'OFCPT')
            ->orderBy('short_order', 'ASC')
            ->get();

        return view('frontend.pages.all-office', $data);
    }

    public function ongoResearch()
    {
        $data['research'] = OngoingResearch::where(['status' => 1])
            ->orderBy('date', 'ASC')
            ->get();

        //   dd($data['research']);

        return view('frontend.pages.ongoing-research', $data);
    }

    public function completedResearch()
    {
        $data['research'] = CompletedResearch::orderBy('date', 'ASC')
            ->get();
        // dd($data['research']);
        return view('frontend.pages.completed-research', $data);
    }

    public function fundedResearch()
    {
        $data['research'] = CompletedResearch::orderBy('date', 'ASC')
            ->get();
        return view('frontend.pages.funded-research', $data);
    }

    public function forms()
    {

        $data['form'] = Form::orderBy('id', 'asc')->get();

        return view('frontend.pages.forms', $data);
    }
    // =================================================

    public function officeDetails($id)
    {
        $ids = Office::where('short_url', $id)->first();
        $id = $ids->id;

        $data['office'] = Office::with(['member'])
            ->orderBy('short_order', 'DESC')
            ->findOrFail($id);

        $data['slider_images'] = Slider::where('slider_master_id', $data['office']
            ->slider_master_id)
            ->orderBy('id', 'asc')
            ->get();
        $photo_master = PhotoGalleryMaster::where('type', 3)->where('category', $data['office']->id)->first();
        // dd($photo_master);
        $data['photo_galleries'] = PhotoGallery::where('photo_master_id', @$photo_master->id)
            ->orderBy('id', 'asc')
            ->get();

        $data['departmentHome'] = DepartmentHome::where(['department_id' => $id])
            ->get();

        $data['officeImage'] = Office::orderBy('short_order', 'DESC')
            ->get();

        $data['home_slider'] = SliderMaster::where('id', 1)->first();
        $data['message'] = Message::where('type_id', 3)->where('category_id', $id)->first();

        // dd($data['home_slider']->toArray());

        $data['events'] = News::where('office_id', $ids)
            ->orWhere('office_id', -1)
            ->where('type', 1)->take(5)->orWhere('type', 2)
            ->orderBy('start_date', 'desc')
            ->get();

        $data['notices'] = News::where('office_id', $ids)
            ->orWhere('office_id', -1)
            ->where('type', 3)
            ->orderBy('start_date', 'desc')
            ->get();

        $data['directorMessage'] = Message::where('member_id', $data['office']->office_head)->first();


        return view('frontend.single_page.office-details', $data);


        // $data['department'] = Department::with(['program', 'member'])->orderBy('short_order', 'DESC')->findOrFail($id);
        // $data['slider_images'] = Slider::where('slider_master_id', $data['department']->slider_master_id)->orderBy('id', 'asc')->get();
        // $data['departmentHome'] = DepartmentHome::where(['department_id' => $id])->get();

        // return view('frontend.single_page.office-details', $data);
    }


    public function allFaculties()
    {
        $data = Faculty::orderBy('short_order', 'ASC')->get();
        return view('frontend.pages.faculties', compact('data'));
    }


    public function facultyDetails($id)
    {

        $idss = Faculty::where('short_url', $id)->first();
        $ids = $idss->id;

        $data['faculty'] = Faculty::with('member')->findOrFail($ids);

        $data['slider_images'] = Slider::where('slider_master_id', $data['faculty']
            ->slider_master_id)
            ->orderBy('id', 'asc')
            ->get();
        $photo_master = PhotoGalleryMaster::where('type', 1)->where('category', $data['faculty']->id)->first();

        $data['photo_galleries'] = PhotoGallery::where('photo_master_id', @$photo_master->id)
            ->orderBy('id', 'asc')
            ->get();
        $data['department'] = Department::where('faculty_id', $ids)
            ->orderBy('short_order', 'ASC')
            ->get();

        $data['message'] = Message::where('type_id', 1)->where('category_id', $ids)->first();

        $data['events'] = News::where('faculty_id', $ids)
            ->orWhere('faculty_id', -1)
            ->where('type', 1)->take(5)->orWhere('type', 2)
            ->orderBy('start_date', 'desc')
            ->get();


        $data['notices'] = News::where('faculty_id', $ids)
            ->orWhere('faculty_id', -1)
            ->where('type', 3)
            ->orderBy('start_date', 'desc')
            ->get();

        return view('frontend.single_page.faculty-details', $data);
    }



    public function allHalls()
    {
        $data['halls'] = Hall::where(['status' => 1])->orderBy('sort_oder', 'ASC')->get();

        return view('frontend.pages.all-hall', $data);
    }



    public function allHallDetail($id)
    {
        $ids = Hall::where('short_url', $id)->first();
        $id = $ids->id;


        $data['halls'] = Hall::with(['member'])
            ->orderBy('sort_oder', 'DESC')
            ->findOrFail($id);
        // dd($data['halls']);
        $data['slider_images'] = Slider::where('slider_master_id', $data['halls']
            ->slider_master_id)
            ->orderBy('id', 'asc')
            ->get();

        $photo_master = PhotoGalleryMaster::where('type', 4)->where('category', $data['halls']->id)->first();

        $data['photo_galleries'] = PhotoGallery::where('photo_master_id', @$photo_master->id)
            ->orderBy('id', 'asc')
            ->get();

        // dd($data['photo_galleries']);

        $data['hallImage'] = Hall::orderBy('sort_oder', 'DESC')
            ->get();

        $data['hallHomes'] = HallHome::where(['hall_id' => $id])->get();

        $data['halls'] = Hall::with(['member'])->orderBy('sort_oder', 'DESC')->findOrFail($id);

        $data['slider_images'] = Slider::where('slider_master_id', $data['halls']->slider_master_id)->orderBy('id', 'asc')->get();

        $data['message'] = Message::where('type_id', 4)->where('category_id', $id)->first();
        // $data['hallHomes'] = HallHome::where(['hall_id' => $id])->get();

        $data['events'] = News::where('hall_id', $ids)
            ->orWhere('hall_id', -1)
            ->where('type', 1)->take(5)->orWhere('type', 2)
            ->orderBy('start_date', 'desc')
            ->get();


        $data['notices'] = News::where('hall_id', $ids)
            ->orWhere('hall_id', -1)
            ->where('type', 3)
            ->orderBy('start_date', 'desc')
            ->get();

        return view('frontend.single_page.hall-details', $data);
    }


    public function allDepartments()
    {
        $result['departments'] = Department::select('departments.*')->with(['faculty'])->where('departments.status', 1)
            ->join('faculties', 'faculties.id', '=', 'departments.faculty_id')
            ->orderBy('faculties.short_order', 'asc')
            ->orderBy('departments.short_order', 'ASC')
            ->get();
        return view('frontend.pages.departments', $result);
    }


    public function departmentDetails($encypt_id)
    {
        $ids = Department::where('short_url', $encypt_id)->first();
        $id = $ids->id;
        // dd($id);

        $data['department'] = Department::with(['program', 'member'])
            ->orderBy('short_order', 'DESC')
            ->findOrFail($id);

        $data['slider_images'] = Slider::where('slider_master_id', $data['department']->slider_master_id)
            ->orderBy('id', 'asc')
            ->get();
        $photo_master = PhotoGalleryMaster::where('type', 2)->where('category', $data['department']->id)->first();

        $data['photo_galleries'] = PhotoGallery::where('photo_master_id', @$photo_master->id)
            ->orderBy('id', 'asc')
            ->get();
        $data['departmentHome'] = DepartmentHome::where(['department_id' => $id])->get();

        $data['message'] = Message::where('type_id', 2)->where('category_id', $id)->first();

        $data['programs'] = ProgramInfo::where(['department_id' => $id])
            ->orderBy('sort_order', 'ASC')
            ->get();

        $data['events'] = News::where('department_id', $id)
            ->orWhere('department_id', -1)
            ->where('type', 1)->take(5)->orWhere('type', 2)
            ->orderBy('start_date', 'desc')
            ->get();
        // dd($data['events']);

        $data['notices'] = News::where('department_id', $id)
            ->orWhere('department_id', -1)
            ->where('type', 3)
            ->orderBy('start_date', 'desc')
            ->get();
        // dd($data['notices']);
        return view('frontend.single_page.department-details', $data);
    }



    public function facultyMemberProfile()
    {
        $data['member'] = Member::select('members.*')->with('designation')
            ->whereNotIn('members.id', [1, 2, 3])
            ->where('members.member_type', 1)
            ->join('designations', 'designations.id', '=', 'members.designation_id')
            ->orderBy('designations.layer', 'asc')
            ->orderBy('designations.sort_order', 'asc')
            ->get();

        return view('frontend.pages.faculty_member_profile', $data);
    }


    public function facultyMemberProfileDetails($id)
    {
        $hashids = new Hashids('', 5, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $faculty_member_id = $hashids->decode($id);

        $data['facultyMember'] = Member::findOrFail($faculty_member_id[0]);

        $data['MemberExperiences'] = MemberExperience::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberEduaction'] = MemberEducation::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberPublishBooks'] = MemberPublicationBook::where('member_id', $data['facultyMember']->id)
            ->first();
        $data['administrativeExperiences'] = MemberAdministrativeExperience::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberPublicationJournal'] = MemberPublicationJournal::where('member_id', $data['facultyMember']->id)
            ->first();
        $data['memberConference'] = MemberConference::where('member_id', $data['facultyMember']->id)
            ->first();
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


        return view('frontend.pages.faculty_profile_details', $data);
    }

    public function officerProfile()
    {
        // $data['officers'] = Member::where('member_type', 2)->get();
        $data['officers'] = OfficeToMember::with(['member', 'office'])
            ->join('offices', 'offices.id', '=', 'office_to_members.office_id')
            ->where('offices.status', 1)
            ->orderBy('offices.short_order', 'asc')
            ->orderBy('office_to_members.sort_order', 'asc')
            ->get();
        $data['dept_officers'] = DepartmentToFacultyMember::with(['member', 'department'])
            ->where('department_to_faculty_members.is_faculty', 0)
            ->join('departments', 'departments.id', '=', 'department_to_faculty_members.department_id')
            ->orderBy('departments.short_order', 'asc')
            ->orderBy('department_to_faculty_members.sort_order', 'asc')
            ->get();
        // dd($data['officers']->toArray());

        return view('frontend.pages.officer_profile', $data);
    }


    public function officerProfileDetails($id)
    {
        $data['officerProfile'] = Member::findOrFail($id);

        $data['MemberExperiences'] = MemberExperience::where('member_id', $data['officerProfile']->id)
            ->get();
        $data['memberEduaction'] = MemberEducation::where('member_id', $data['officerProfile']->id)
            ->get();
        $data['memberPublishBooks'] = MemberPublicationBook::where('member_id', $data['officerProfile']->id)
            ->get();
        $data['administrativeExperiences'] = MemberAdministrativeExperience::where('member_id', $data['officerProfile']->id)
            ->get();
        $data['memberPublicationJournal'] = MemberPublicationJournal::where('member_id', $data['officerProfile']->id)
            ->get();
        $data['memberConference'] = MemberConference::where('member_id', $data['officerProfile']->id)
            ->get();


        return view('frontend.pages.officer_profile_details', $data);
    }


    public function deanMemberProfile()
    {
        $data['dean'] = Faculty::with('member')
            ->orderBy('short_order', 'ASC')
            ->get();
        //dd($data['dean']);
        return view('frontend.pages.dean_profile', $data);
    }


    public function deanMemberProfileDetails($id)
    {
        $data['deanDetails'] = Faculty::with('member')
            ->findOrFail($id);
        $data['MemberExperiences'] = MemberExperience::where('member_id', $data['deanDetails']->id)
            ->get();
        $data['memberEduaction'] = MemberEducation::where('member_id', $data['deanDetails']->id)
            ->get();
        $data['memberPublishBooks'] = MemberPublicationBook::where('member_id', $data['deanDetails']->id)
            ->get();
        $data['administrativeExperiences'] = MemberAdministrativeExperience::where('member_id', $data['deanDetails']->id)
            ->get();
        $data['memberPublicationJournal'] = MemberPublicationJournal::where('member_id', $data['deanDetails']->id)
            ->get();
        $data['memberConference'] = MemberConference::where('member_id', $data['deanDetails']->id)
            ->get();
        $data['memberships'] = MemberMembership::where('member_id', $data['deanDetails']->id)
            ->get();
        $data['awards'] = MemberHonorAward::where('member_id', $data['deanDetails']->id)
            ->get();
        $data['certifications'] = MemberCertificationAccomplishment::where('member_id', $data['deanDetails']->id)
            ->get();
        $data['scholarships'] = MemberScholarship::where('member_id', $data['deanDetails']->id)
            ->get();
        //DD($data['administrativeExperiences']);
        $data['researchs'] = MemberAreaOfInterest::where('member_id', $data['deanDetails']->id)
            ->get();
        return view('frontend.pages.about-dean', $data);
    }


    public function transport()
    {
        $data['transports'] = Transport::all();
        return view('frontend.pages.transport')->with($data);
    }
    public function careerJob()
    {
        $data['careers'] = Career::orderBy('start_date', 'desc')->get();
        return view('frontend.pages.career')->with($data);
    }



    public function headOffices()
    {
        $data['officeHead'] = Office::with('member')
            ->orderBy('short_order', 'ASC')
            ->get();
        return view('frontend.pages.office_head', $data);
    }


    public function officeHeadDetails($id)
    {
        $data['officeHead'] = Office::with('member')
            ->findOrFail($id);
        $data['MemberExperiences'] = MemberExperience::where('member_id', $data['officeHead']->id)
            ->get();
        $data['memberEduaction'] = MemberEducation::where('member_id', $data['officeHead']->id)
            ->get();
        $data['memberPublishBooks'] = MemberPublicationBook::where('member_id', $data['officeHead']->id)
            ->get();
        $data['administrativeExperiences'] = MemberAdministrativeExperience::where('member_id', $data['officeHead']->id)
            ->get();
        $data['memberPublicationJournal'] = MemberPublicationJournal::where('member_id', $data['officeHead']->id)
            ->get();
        $data['memberConference'] = MemberConference::where('member_id', $data['officeHead']->id)->get();

        $data['memberships'] = MemberMembership::where('member_id', $data['officeHead']->id)
            ->get();
        $data['awards'] = MemberHonorAward::where('member_id', $data['officeHead']->id)
            ->get();
        $data['certifications'] = MemberCertificationAccomplishment::where('member_id', $data['officeHead']->id)
            ->get();
        $data['scholarships'] = MemberScholarship::where('member_id', $data['officeHead']->id)
            ->get();

        $data['researchs'] = MemberAreaOfInterest::where('member_id', $data['officeHead']->id)
            ->get();
        return view('frontend.pages.about-office-head', $data);
    }

    public function departmentHead()
    {
        $data['departmentHead'] = Department::with('member')
            ->orderBy('short_order', 'ASC')
            ->get();

        return view('frontend.pages.department_head', $data);
    }



    public function departmentHeadDetails($id)
    {

        $data['departmentDetails'] = Department::with('member')
            ->findOrFail($id);
        $data['MemberExperiences'] = MemberExperience::where('member_id', $data['departmentDetails']->id)
            ->get();
        $data['memberEduaction'] = MemberEducation::where('member_id', $data['departmentDetails']->id)
            ->get();
        $data['memberPublishBooks'] = MemberPublicationBook::where('member_id', $data['departmentDetails']->id)
            ->get();
        $data['administrativeExperiences'] = MemberAdministrativeExperience::where('member_id', $data['departmentDetails']->id)
            ->get();
        $data['memberPublicationJournal'] = MemberPublicationJournal::where('member_id', $data['departmentDetails']->id)
            ->get();
        $data['memberConference'] = MemberConference::where('member_id', $data['departmentDetails']->id)->get();
        $data['memberships'] = MemberMembership::where('member_id', $data['departmentDetails']->id)
            ->get();
        $data['awards'] = MemberHonorAward::where('member_id', $data['departmentDetails']->id)
            ->get();
        $data['certifications'] = MemberCertificationAccomplishment::where('member_id', $data['departmentDetails']->id)
            ->get();
        $data['scholarships'] = MemberScholarship::where('member_id', $data['departmentDetails']->id)
            ->get();
        $data['researchs'] = MemberAreaOfInterest::where('member_id', $data['departmentDetails']->id)
            ->get();
        // DD($data['administrativeExperiences']);
        return view('frontend.pages.about-department-head', $data);
    }

    public function hallProvost()
    {
        $data['hallProvost'] = Hall::with('member')
            ->orderBy('sort_oder', 'ASC')
            ->get();
        return view('frontend.pages.hall_provost', $data);
    }


    public function hallProvostDetails($id)
    {
        $data['provostDetails'] = Hall::with('member')->where('provost', $id)->first();
        $data['MemberExperiences'] = MemberExperience::where('member_id', $data['provostDetails']->id)
            ->get();
        $data['memberEduaction'] = MemberEducation::where('member_id', $data['provostDetails']->id)
            ->get();
        $data['memberPublishBooks'] = MemberPublicationBook::where('member_id', $data['provostDetails']->id)
            ->get();
        $data['administrativeExperiences'] = MemberAdministrativeExperience::where('member_id', $data['provostDetails']->id)
            ->get();
        $data['memberPublicationJournal'] = MemberPublicationJournal::where('member_id', $data['provostDetails']->id)
            ->get();
        $data['memberConference'] = MemberConference::where('member_id', $data['provostDetails']->id)->get();

        $data['memberships'] = MemberMembership::where('member_id', $data['provostDetails']->id)
            ->get();
        $data['awards'] = MemberHonorAward::where('member_id', $data['provostDetails']->id)
            ->get();
        $data['certifications'] = MemberCertificationAccomplishment::where('member_id', $data['provostDetails']->id)
            ->get();
        $data['scholarships'] = MemberScholarship::where('member_id', $data['provostDetails']->id)
            ->get();

        $data['researchs'] = MemberAreaOfInterest::where('member_id', $data['provostDetails']->id)
            ->get();

        return view('frontend.pages.about-hall-provost', $data);
    }

    public function allPrograms()
    {
        // $data['program'] = ProgramInfo::with('department_name', 'program_category')->orderBy('sort_order', 'asc')->get();
        $data['faculty'] = Faculty::get();
        $data['program'] = Program::get();
        $data['department'] = Department::get();
        $data['programInfo'] = ProgramInfo::with('program_category', 'department_name')->paginate(6);
        //  dd($data['programInfo']);

        return view('frontend.pages.program', $data);
    }
    public function programSearch(Request $request)
    {
        $programs = Program::all();
        if($request->keyword != ''){
            $programs = Program::where('name','LIKE','%'.$request->keyword.'%')->get();
        }
        return response()->json(['programs' => $programs]);

    }

    public function program_info(Request $request)

    {
        //  $data= ProgramInfo::with('program_category')->where('program_id', $request->program_id)->get();
        $data = ProgramInfo::with('program_category', 'department_name')->where('program_id', $request->program_id)->get();
        return response()->json($data);
    }

    public function allr(Request $request)

    {
        $data = ProgramInfo::with('program_category', 'department_name')->get();
        return response()->json($data);
    }


    public function allCourses()
    {
        $data['courses'] = CourseInfo::all();
        // dd($data['program']->toArray());
        return view('frontend.pages.courses', $data);
    }

    public function programDetails($id)
    {
        $data['faculty'] = ProgramInfo::findOrFail($id);
        $data['slider_images'] = Slider::where('slider_master_id', $data['faculty']->slider_master_id)->orderBy('id', 'asc')->get();
        // $data['department']=ProgramInfo::where(['department_id'=>$id])->orderBy('short_order', 'ASC')->get();
        return view('frontend.single_page.program-details', $data);
    }

    public function sliderContent($id)
    {
        $ids = decrypt($id);
        $data = Slider::find($ids);
        return view('frontend.pages.slider-details', compact('data'));
    }

    public function directorContent()
    {
        $data['vc'] = Member::where('member_designation', 'Vice Chancellor')->firstOrFail();
        $data['message'] = Director::first();
        return view('frontend.pages.member-details', compact('data'));
    }


    public function vcMessage()
    {
        $data['vc'] = Member::where('member_designation', 'Vice Chancellor')->firstOrFail();
        $data['message'] = Message::where('member_id', $data['vc']->id)->first();
        // $data['message'] = Director::first();
        return view('frontend.pages.member-details', $data);
    }

    public function aboutVC()
    {
        // $data['vcAbout'] = Member::where('member_designation', "Vice Chancellor")->first();
        // $data['vcEducations'] = MemberEducation::where('member_id', $data['vcAbout']->id)->get();
        // $data['vcExperiences'] = MemberExperience::where('member_id', $data['vcAbout']->id)->get();
        // $data['vcAdministrativeExperiences'] = MemberAdministrativeExperience::where('member_id', $data['vcAbout']->id)->get();
        // $data['vcPublishBooks'] = MemberPublicationBook::where('member_id', $data['vcAbout']->id)->get();
        // $data['vcPublishJournals'] = MemberPublicationJournal::where('member_id', $data['vcAbout']->id)->get();
        // $data['vcConferences'] = MemberConference::where('member_id', $data['vcAbout']->id)->get();
        // $data['memberships'] = MemberMembership::where('member_id', $data['vcAbout']->id)
        //     ->get();
        // $data['awards'] = MemberHonorAward::where('member_id', $data['vcAbout']->id)
        //     ->get();
        // $data['certifications'] = MemberCertificationAccomplishment::where('member_id', $data['vcAbout']->id)
        //     ->get();
        // $data['scholarships'] = MemberScholarship::where('member_id', $data['vcAbout']->id)
        //     ->get();
        // $data['researchs'] = MemberAreaOfInterest::where('member_id', $data['vcAbout']->id)
        //     ->get();
        // dd($data['vcAdministrativeExperiences']);
        $data['facultyMember'] = Member::where('member_designation', "Vice Chancellor")->first();

        $data['MemberExperiences'] = MemberExperience::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberEduaction'] = MemberEducation::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberPublishBooks'] = MemberPublicationBook::where('member_id', $data['facultyMember']->id)
            ->first();
        $data['administrativeExperiences'] = MemberAdministrativeExperience::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberPublicationJournal'] = MemberPublicationJournal::where('member_id', $data['facultyMember']->id)
            ->first();
        $data['memberConference'] = MemberConference::where('member_id', $data['facultyMember']->id)
            ->first();
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
        $data['socialMediaLink'] = MemberSocialMediaLink::where('member_id', $data['facultyMember']->id)->first();

        return view('frontend.pages.about-vc', $data);
    }

    public function nocAll()

    {
        $data['officeOrders'] = OfficeOrder::with('member')->orderBy('publish_date', 'desc')->get();
        // dd($data['officeOrders']);
        return view('frontend.pages.noc', $data);
    }
    public function tenderAll()
    {
        $data['tenders'] = Tender::orderBy('publish_date', 'desc')->get();
        return view('frontend.pages.tender', $data);
    }
    public function bartaAll()
    {
        $data['bartas'] = Barta::orderBy('date', 'desc')->paginate();
        return view('frontend.pages.barta', $data);
    }

    public function leaveApplication()
    {
        $data['leaves'] = Leave::with('member')->orderBy('created_at', 'desc')->get();
        return view('frontend.pages.leave-application', $data);
    }

    public function aboutProVC()
    {
        // $data['vcAbout'] = Member::where('member_designation', "Pro-Vice Chancellor")->first();
        $data['facultyMember'] = Member::where('member_designation', "Pro-Vice Chancellor")->first();

        $data['MemberExperiences'] = MemberExperience::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberEduaction'] = MemberEducation::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberPublishBooks'] = MemberPublicationBook::where('member_id', $data['facultyMember']->id)
            ->first();
        $data['administrativeExperiences'] = MemberAdministrativeExperience::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberPublicationJournal'] = MemberPublicationJournal::where('member_id', $data['facultyMember']->id)
            ->first();
        $data['memberConference'] = MemberConference::where('member_id', $data['facultyMember']->id)
            ->first();
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
        $data['socialMediaLink'] = MemberSocialMediaLink::where('member_id', $data['facultyMember']->id)->first();
        return view('frontend.pages.about-pro-vc', $data);
    }

    public function aboutTreasurer()
    {
        // $data['vcAbout'] = Member::where('member_designation', "Treasurer")->first();
        // $data['vcEducations'] = MemberEducation::where('member_id', $data['vcAbout']->id)->get();
        // $data['vcExperiences'] = MemberExperience::where('member_id', $data['vcAbout']->id)->get();
        // $data['vcAdministrativeExperiences'] = MemberAdministrativeExperience::where('member_id', $data['vcAbout']->id)->get();
        // $data['vcPublishBooks'] = MemberPublicationBook::where('member_id', $data['vcAbout']->id)->get();
        // $data['vcPublishJournals'] = MemberPublicationJournal::where('member_id', $data['vcAbout']->id)->get();
        // $data['vcConferences'] = MemberConference::where('member_id', $data['vcAbout']->id)->get();

        // $data['memberships'] = MemberMembership::where('member_id', $data['vcAbout']->id)
        //     ->get();
        // $data['awards'] = MemberHonorAward::where('member_id', $data['vcAbout']->id)
        //     ->get();
        // $data['certifications'] = MemberCertificationAccomplishment::where('member_id', $data['vcAbout']->id)
        //     ->get();
        // $data['scholarships'] = MemberScholarship::where('member_id', $data['vcAbout']->id)
        //     ->get();
        // $data['researchs'] = MemberAreaOfInterest::where('member_id', $data['vcAbout']->id)
        //     ->get();
        $data['facultyMember'] = Member::where('member_designation', "Treasurer")->first();

        $data['MemberExperiences'] = MemberExperience::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberEduaction'] = MemberEducation::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberPublishBooks'] = MemberPublicationBook::where('member_id', $data['facultyMember']->id)
            ->first();
        $data['administrativeExperiences'] = MemberAdministrativeExperience::where('member_id', $data['facultyMember']->id)
            ->get();
        $data['memberPublicationJournal'] = MemberPublicationJournal::where('member_id', $data['facultyMember']->id)
            ->first();
        $data['memberConference'] = MemberConference::where('member_id', $data['facultyMember']->id)
            ->first();
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
        $data['socialMediaLink'] = MemberSocialMediaLink::where('member_id', $data['facultyMember']->id)->first();
        return view('frontend.pages.about-treasurer', $data);
    }

    public function aboutChancellor()
    {
        return view('frontend.pages.about-chancellor');
    }

    public function viewFacultyScience()
    {
        return view('frontend.pages.faculty-science');
    }
    public function viewFacultyArt()
    {
        return view('frontend.pages.faculty-art');
    }
    public function viewFacultySocial()
    {
        return view('frontend.pages.faculty-social');
    }
    public function viewFacultyBusiness()
    {
        return view('frontend.pages.faculty-business-studies');
    }
    public function viewFacultyLaw()
    {
        return view('frontend.pages.faculty-law');
    }
    public function viewFacultyEngineering()
    {
        return view('frontend.pages.faculty-engineering');
    }

    public function officeStaff()
    {
        return view('frontend.pages.office_staff');
    }

    public function syndicateMember()
    {
        $data['syndicate_members'] = SyndicateMember::with('member', 'designation')->whereHas('member')->where('type_id', 1)->orderBy('sort_order', 'asc')->get();
        return view('frontend.pages.syndicate_member')->with($data);
    }
    public function academicCouncil()
    {
        $data['syndicate_members'] = SyndicateMember::with('member', 'designation')->whereHas('member')->where('type_id', 2)->orderBy('sort_order', 'asc')->get();
        return view('frontend.pages.academic-council')->with($data);
    }

    public function boardofTrustee()
    {
        $data['all'] = BoardofTrustee::with('member')->orderBy('sort_order', 'ASC')->get();
        return view('frontend.all-board-of-trustee')->with($data);
    }



    public function alloffice()
    {
        return view('frontend.pages.offices');
    }

    public function vcOffice()
    {
        $data['office'] = Office::where('short_url', 'OFCVC')->first();
        // $data['vc'] = Member::where('designation_id', 4)->firstOrFail();
        $data['home_slider'] = SliderMaster::where('id', 1)->first();

        $data['directorMessage'] = Message::where('member_id', $data['office']->office_head)->first();
        //   dd($data['directorMessage']);

        return view('frontend.pages.vc_office', $data);
    }
    public function vcList()
    {
        $data['office'] = Office::where('short_url', 'OFCVC')->first();
        return view('frontend.pages.vc_list', $data);
    }
    public function vcStaff()
    {
        $ids = Office::where('short_url', 'OFCVC')->first();

        $id = $ids->id;

        $data['office'] = Office::with('member')->where('id', $id)->first();

        $data['Officeabout'] = OfficeToMember::with('member')->where('office_id', $id)->orderBy('sort_order', 'asc')
            ->get();

        return view('frontend.pages.vc_staff', $data);
    }
    public function vcContact()
    {
        $data['office'] = Office::where('short_url', 'OFCVC')->first();
        return view('frontend.pages.vc_contact', $data);
    }
    // Pro vc
    public function proVcOffice()
    {
        $data['office'] = Office::where('short_url', 'OFCPVC')->first();
        $data['home_slider'] = SliderMaster::where('id', 1)->first();
        $data['directorMessage'] = Message::where('member_id', $data['office']->office_head)->first();
        return view('frontend.pages.pro_vc_office.pro_vc_office', $data);
    }
    public function proVcList()
    {
        $data['office'] = Office::where('short_url', 'OFCPVC')->first();
        return view('frontend.pages.pro_vc_office.pro_vc_list', $data);
    }
    public function proVcStaff()
    {
        $ids = Office::where('short_url', 'OFCPVC')->first();

        $id = $ids->id;

        $data['office'] = Office::with('member')->where('id', $id)->first();

        $data['Officeabout'] = OfficeToMember::with('member')->where('office_id', $id)
            ->get();
        return view('frontend.pages.pro_vc_office.pro_vc_staff', $data);
    }
    public function proVcContact()
    {
        $data['office'] = Office::where('short_url', 'OFCPVC')->first();
        return view('frontend.pages.pro_vc_office.pro_vc_contact', $data);
    }


    // Treasurer
    public function treasurerOffice()
    {
        $data['office'] = Office::where('short_url', 'OFCTR')->first();
        $data['home_slider'] = SliderMaster::where('id', 1)->first();
        $data['directorMessage'] = Message::where('member_id', $data['office']->office_head)->first();
        return view('frontend.pages.treasurer_office.treasurer_office', $data);
    }
    public function treasurerList()
    {
        $data['office'] = Office::where('short_url', 'OFCTR')->first();
        return view('frontend.pages.treasurer_office.treasurer_list', $data);
    }
    public function treasurerStaff()
    {
        $ids = Office::where('short_url', 'OFCTR')->first();

        $id = $ids->id;

        $data['office'] = Office::with('member')->where('id', $id)->first();

        $data['Officeabout'] = OfficeToMember::with('member')->where('office_id', $id)
            ->get();
        return view('frontend.pages.treasurer_office.treasurer_staff', $data);
    }
    public function treasurerContact()
    {
        $data['office'] = Office::where('short_url', 'OFCTR')->first();
        return view('frontend.pages.treasurer_office.treasurer_contact', $data);
    }


    // Proctor
    public function proctorOffice()
    {
        $data['office'] = Office::where('short_url', 'OFCPT')->first();
        $data['home_slider'] = SliderMaster::where('id', 1)->first();
        $data['directorMessage'] = Message::where('member_id', $data['office']->office_head)->first();
        return view('frontend.pages.proctor_office.proctor_office', $data);
    }
    public function proctorList()
    {
        $data['office'] = Office::where('short_url', 'OFCPT')->first();
        return view('frontend.pages.proctor_office.proctor_list', $data);
    }
    public function proctorStaff()
    {
        $ids = Office::where('short_url', 'OFCPT')->first();

        $id = $ids->id;

        $data['office'] = Office::with('member')->where('id', $id)->first();

        $data['Officeabout'] = OfficeToMember::with('member')->where('office_id', $id)
            ->get();
        return view('frontend.pages.proctor_office.proctor_staff', $data);
    }
    public function proctorContact()
    {
        $data['office'] = Office::where('short_url', 'OFCPT')->first();
        return view('frontend.pages.proctor_office.proctor_contact', $data);
    }

    public function academicCalender()
    {
        $data['academics'] = Academic::where('type_id', 3)->get();
        return view('frontend.pages.academic_calender')->with($data);
    }

    public function academicCurriculum()
    {
        $data['academics'] = Academic::where('type_id', 3)->get();
        return view('frontend.pages.academic_curriculum')->with($data);
    }

    public function programCategory($slug)
    {
        $data['program'] = Program::where('slug', $slug)->firstOrFail();
        // OfficeToMember::with(['member', 'office'])
        //     ->join('offices', 'offices.id', '=', 'office_to_members.office_id')
        //     ->where('offices.status', 1)
        //     ->orderBy('offices.short_order', 'asc')
        //     ->orderBy('office_to_members.sort_order', 'asc')
        //     ->get();

        // $data['undergraduateCurriculum'] = Academic::with('program')->where('program_id', $id)->where('type_id', 4)->where('status', 1)->get();
        $data['undergraduateCurriculum'] = Academic::with('program')->whereHas('program', function ($q) use ($data) {
            $q->where('program_id', $data['program']->id);
        })
            ->where('type_id', 4)
            ->where('status', 1)
            ->get();

        $data['undergraduateProposal'] = Academic::with('program')->whereHas('program', function ($q) use ($data) {
            $q->where('program_id', $data['program']->id);
        })
            ->where('type_id', 5)
            ->where('status', 1)
            ->get();

        $data['undergraduateResult'] = Academic::with('program')->whereHas('program', function ($q) use ($data) {
            $q->where('program_id', $data['program']->id);
        })
            ->where('type_id', 2)
            ->where('status', 1)
            ->get();

        $data['all'] = Academic::with('program')
            ->whereHas('program', function ($q) use ($data) {
                $q->where('program_id', $data['program']->id);
            })
            ->where('status', 1)
            ->get();
        // dd($data['all']);
        return view('frontend.pages.program_category', $data);
    }

    public function underGraduate()
    {
        $arr = Program::get();
        $data['grid'] = $arr[0]->grid;
        // dd($data['grid']);
        $data['undergraduateCurriculum'] = Academic::with('program')
            ->where('type_id', 4)
            ->get();
        $data['undergraduateResult'] = Academic::with('program')
            ->where('type_id', 2)
            ->get();
        $data['undergraduateProposal'] = Academic::with('program')
            ->where('type_id', 5)
            ->get();

        return view('frontend.pages.undergraduate_program', $data);
    }

    public function graduate()

    {
        $arr = Program::get();
        $data['grid'] = $arr[1]->grid;

        $data['graduateCurriculum'] = Academic::with('program')
            ->where('type_id', 4)
            ->get();

        $data['graduateResult'] = Academic::with('program')
            ->where('type_id', 2)
            ->get();

        $data['graduateProposal'] = Academic::with('program')
            ->where('type_id', 5)
            ->get();
        return view('frontend.pages.graduate_program', $data);
    }

    public function embaProgram()

    {
        $arr = Program::get();
        $data['grid'] = $arr[2]->grid;
        $data['embaCurriculum'] = Academic::with('program')
            ->where('type_id', 4)
            ->get();
        $data['embaResult'] = Academic::with('program')
            ->where('type_id', 2)
            ->get();
        $data['embaProposal'] = Academic::with('program')
            ->where('type_id', 5)
            ->get();
        // dd($data['embaProposal']);
        return view('frontend.pages.emba_program', $data);
    }


    public function emcaProgram()
    {
        $arr = Program::get();
        $data['grid'] = $arr[3]->grid;

        $data['embcCurriculum'] = Academic::with('program')
            ->where('type_id', 4)
            ->get();
        $data['emacResult'] = Academic::with('program')
            ->where('type_id', 2)
            ->get();
        $data['emcaProposal'] = Academic::with('program')
            ->where('type_id', 5)
            ->get();

        return view('frontend.pages.emca_program', $data);
    }


    public function blog_post()
    {
        $data['post_category'] = PostCategory::orderBy('sort_order', 'desc')
            ->get();
        $data['recebt_post'] = BlogPost::where(['status' => 1])
            ->get();
        $data['post'] = BlogPost::where(['status' => 1])
            ->orderBy('id', 'desc')
            ->paginate(2);
        return view('frontend.pages.blog-post', $data);
    }

    public function catPost(Request $request)

    {
        $post_cat = BlogPost::with('category')->where('category_id', $request->cat_id)
            ->get();
        return response()->json($post_cat);
    }

    public function recentPost(Request $request)
    {
        $recent_post = BlogPost::where(['status' => 1])
            ->where('id', $request->recent_id)
            ->get();
        return response()->json($recent_post);
    }
    public function Singlepost(Request $request, $id)

    {
        $data['recent_post'] = BlogPost::where(['status' => 1])
            ->get();
        $data['post'] = BlogPost::where(['status' => 1])
            ->find($id);
        return view('frontend.pages.post-single-page', $data);
    }


    public function journalPaper()

    {
        $data['journalPaper'] = JournalPaper::get();
        return view('frontend.pages.journal_paper', $data);
    }



    public function performance()
    {
        $data['performances'] = Performance::where('status', 1)->where('self_id', 0)->orderBy('sort_order', 'ASC')->get();

        return view('frontend.single_page.performance')->with($data);
    }

    public function performanceReport($id)
    {
        $result = Performance::find($id);
        return view('frontend.single_page.performance-report', compact('result'));
    }

    public function libraryIndex()
    {
        // $data['office'] = Office::where('short_url', 'LRB')->first();
        // dd($data['office']);
        $data['library_galance']=LibraryGlance::first();
        $data['office'] = OurLibrary::with('member')->where('short_url', 'LRB')->first();
        $data['directorMessage'] = Message::where('member_id', $data['office']->library_head)->first();
        $data['events'] = News::where(['type'=>2,'office_id'=>16])->orderBy('start_date', 'desc')->take(5)->get();
        $data['notice'] = News::where(['type'=>3,'office_id'=>16])->orderBy('start_date', 'desc')->take(5)->get();
        $data['slider_images'] = Slider::where('slider_master_id', 26)->orderBy('id', 'asc')->get();
        return view('frontend.pages.library.library_index', $data);
    }


   public function libraryPeople()
   {
    $data['books'] = BooksPublication::where('show_status', 1)->get();
    $data['office'] = OurLibrary::with('member')->where('short_url', 'LRB')->first();
    $data['Officeabout']=LibraryToMember::with('member')->get();
    return view('frontend.pages.library.library-people',$data);

   }
    public function libraryAbout()
    {
        $data['ourLibrary'] = OurLibrary::with('member')->where('short_url', 'LRB')->first();
        return view('frontend.pages.library.index', $data);
    }

    public function collection()
    {   $data['useful_link']=InfortantLink::get();
        $data['subjects'] = LibrarySubject::where('show_status', 1)->orderBy('sort_order')->get();

        return view('frontend.pages.library.library', $data);
    }
    public function libraryContact()
    {
        return view('frontend.pages.library.contact');
    }

    public function libraryPost(Request $request)
    {
        $valid=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'subject'=>'required',
            'message'=>'required',
      ]);
      if(!$valid->passes())
      {
      return response()->json(['status'=>'error', 'error'=>$valid->errors()]);
      }else{
          $data=New AskLibrarian();
          $data->name=$request->name;
          $data->email=$request->email;
          $data->phone=$request->mobile;
          $data->subject=$request->subject;
          $data->message=$request->message;
          $data->save();
          return response()->json(['status'=>'success', 'message'=>'Data submited successfully']);
      }
    }

    public function librarySchedule()
    {
        $data['scheduale']= LibraryTimeSchedule::find(1);
        return view('frontend.pages.library.schedule',$data);
    }


    public function demoPage()
    {
        return view('frontend.single_page.demo-page');
    }


    public function newVCPages()
    {
        return view('frontend.single_page.demo-page-new');
    }
}
