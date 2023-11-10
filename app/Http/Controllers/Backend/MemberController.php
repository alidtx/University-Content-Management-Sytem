<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Member;
use App\Model\MemberEducation;
use App\Model\MemberExperience;
use App\Model\MemberAdministrativeExperience;
use App\Model\BoardofTrustee;
use App\Model\GoverningBody;
use App\Model\MemberAreaOfInterest;
use App\Model\MemberHonorAward;
use App\Model\MemberScholarship;
use App\Model\MemberProfessionalResponsibility;
use App\Model\MemberProjectAccomplishment;
use App\Model\MemberTrainingAccomplishment;
use App\Model\MemberCertificationAccomplishment;
use App\Model\MemberPublicationBook;
use App\Model\MemberPublicationJournal;
use App\Model\MemberConference;
use App\Model\MemberTaughtCourse;
use App\Model\MemberLanguage;
use App\Model\MemberSocialWelfare;
use App\Model\MemberSocialMediaLink;
use App\Model\ProgramInfo;
use App\Model\MemberSkill;
use App\Model\Designation;
use App\Model\MemberMembership;
use Image;
use Crypt;

class MemberController extends Controller
{
    public function frontend()
    {
        $data['all'] = Member::get();
        return view('frontend.all-members')->with($data);
    }

    public function memberProfileFrontend($id)
    {
        $data['botInfo'] = BoardofTrustee::with('member')->where('member_id', $id)->first();
        $data['govInfo'] = GoverningBody::with('member')->where('member_id', $id)->first();
        $data['educationInfos'] = MemberEducation::with('member')->where('member_id', $id)->orderBy('education_year', 'desc')->get();
        $data['experienceInfos'] = MemberExperience::with('member')->where('member_id', $id)->orderBy('experience_from_year', 'desc')->get();
        $data['administrativeInfos'] = MemberAdministrativeExperience::where('member_id', $id)->orderBy('administrative_from_year', 'desc')->get();
        $data['interestAreaInfos'] = MemberAreaOfInterest::where('member_id', $id)->get();
        $data['otherMembers'] = MemberAreaOfInterest::where('member_id', '!=', $id)->get();
        $data['socialMediaLink'] = MemberSocialMediaLink::where('member_id', $id)->first();
        $data['skillInfos'] = MemberSkill::where('member_id', $id)->get();
        $ids = array();
        foreach ($data['interestAreaInfos'] as $key => $currentMemberInterestModel) {
            foreach ($data['otherMembers'] as $key => $anotherMemberInterestModel) {
                if (!empty($currentMemberInterestModel->interest_area) && $currentMemberInterestModel->interest_area == $anotherMemberInterestModel->interest_area) {
                    $ids[$key] = $anotherMemberInterestModel->member_id;
                }
            }
        }
        $data['similarInterestMembers'] = Member::whereIn('id', $ids)->get();
        // dd($members);
        $data['awardInfos'] = MemberHonorAward::where('member_id', $id)->orderBy('awarded_year', 'desc')->get();
        $data['scholarshipInfos'] = MemberScholarship::where('member_id', $id)->orderBy('scholarship_year', 'desc')->get();
        $data['responsibilityInfos'] = MemberProfessionalResponsibility::where('member_id', $id)->orderBy('responsibilities_from_year', 'desc')->get();
        $data['projectInfos'] = MemberProjectAccomplishment::where('member_id', $id)->orderBy('project_from_year', 'desc')->get();
        $data['trainingInfos'] = MemberTrainingAccomplishment::where('member_id', $id)->orderBy('training_from_year', 'desc')->get();
        $data['certificationInfos'] = MemberCertificationAccomplishment::where('member_id', $id)->orderBy('certification_year', 'desc')->get();
        $data['bookInfos'] = MemberPublicationBook::where('member_id', $id)->orderBy('book_year', 'desc')->get();
        $data['journalInfos'] = MemberPublicationJournal::where('member_id', $id)->orderBy('journal_year', 'desc')->get();
        $data['conferenceInfos'] = MemberConference::where('member_id', $id)->orderBy('conference_year', 'desc')->get();
        $data['taughtCourses'] = MemberTaughtCourse::where('member_id', $id)->get();
        $data['languages'] = MemberLanguage::where('member_id', $id)->get();
        $data['socialWelfares'] = MemberSocialWelfare::where('member_id', $id)->orderBy('social_from_year', 'desc')->get();

        $data['profileInfo'] = Member::where('id', $id)->first();
        return view('frontend.member-profile')->with($data);
    }

    public function list()
    {
        $data['members'] = Member::orderBy('id','asc')->get();
        return view('backend.members.members-list')->with($data);
    }

    public function add()
    {
        $data['editDataEducations'] = NULL;
        $data['editDataExperiences'] = NULL;
        $data['editDataMemberships'] = NULL;
        $data['editDataAdministratives'] = NULL;
        $data['editDataInterestAreas'] = NULL;
        $data['editDataHonorAndAwards'] = NULL;
        $data['editDataScholarships'] = NULL;
        $data['editDataResponsibilities'] = NULL;
        $data['editDataProjects'] = NULL;
        $data['editDataTrainings'] = NULL;
        $data['editDataCertifications'] = NULL;
        $data['editDataBook'] = NULL;
        $data['editDataJournals'] = NULL;
        $data['editDataConferences'] = NULL;
        $data['editDataTaughtCourses'] = NULL;
        $data['editDataLanguages'] = NULL;
        $data['editDataSocialWelfares'] = NULL;
        $data['editDataSocialMediaLink'] = NULL;
        $data['editDataSkills'] = NULL;
        // $data['designations'] = Designation::get();
        // dd($data['designations']->toArray());
        return view('backend.members.members-add', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png',

        ]);
        // dd($request->all());

        $params = $request->all();
        $designation = Designation::where('id', $request->designation_id)->first();

        $params['member_designation'] = $designation->name;
        $params['show_phone'] = $request->show_phone ?? 0;

        if ($file = $request->file('image')) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/members'), $filename);
            $image = Image::make(public_path('upload/members/') . $filename);
            //$image->resize(643,360)->save(public_path('upload/activity/').$filename);
            $image->save(public_path('upload/members/') . $filename);
            $params['image'] = $filename;
        }

        $member = Member::create($params);
        $params['member_id'] = $member->id;
        $memberSocial = MemberSocialMediaLink::create($params);
        //$params['member_id'] = $member->id;

        foreach ($request->degree as $key => $val) {
            $store = new MemberEducation();
            $store->member_id = $member->id;
            $store->degree = $request->degree[$key];
            $store->subject = $request->subject[$key];
            $store->education_institution = $request->education_institution[$key];
            $store->education_country = $request->education_country[$key];
            // $store->education_year = $request->education_year[$key];
            $store->education_to_year = $request->education_to_year[$key];
            $store->save();
        }

        foreach ($request->designation as $key => $val) {
            $store = new MemberExperience();
            $store->member_id = $member->id;
            $store->designation = $request->designation[$key];
            $store->experience_institution = $request->experience_institution[$key];
            $store->experience_country = $request->experience_country[$key];
            $store->experience_from_month = $request->experience_from_month[$key];
            $store->experience_from_year = $request->experience_from_year[$key];
            $store->experience_to_month = $request->experience_to_month[$key];
            $store->experience_to_year = $request->experience_to_year[$key];
            $store->save();
        }

        foreach ($request->administrative_designation as $key => $val) {
            $store = new MemberAdministrativeExperience();
            $store->member_id = $member->id;
            $store->administrative_designation = $request->administrative_designation[$key];
            $store->administrative_details = $request->administrative_details[$key];
            $store->administrative_from_month = $request->administrative_from_month[$key];
            $store->administrative_from_year = $request->administrative_from_year[$key];
            $store->administrative_to_month = $request->administrative_to_month[$key];
            $store->administrative_to_year = $request->administrative_to_year[$key];
            $store->save();
        }

        foreach ($request->membership_title as $key => $val) {
            $store = new MemberMembership();
            $store->member_id = $member->id;
            $store->membership_title = $request->membership_title[$key];
            $store->membership_type = $request->membership_type[$key];
            $store->membership_from_month = $request->membership_from_month[$key];
            $store->membership_from_year = $request->membership_from_year[$key];
            $store->membership_to_month = $request->membership_to_month[$key];
            $store->membership_to_year = $request->membership_to_year[$key];
            $store->save();
        }

        foreach ($request->interest_area as $key => $val) {
            $store = new MemberAreaOfInterest();
            $store->member_id = $member->id;
            $store->interest_area = $request->interest_area[$key];
            $store->save();
        }

        foreach ($request->skill as $key => $val) {
            $store = new MemberSkill();
            $store->member_id = $member->id;
            $store->skill = $request->skill[$key];
            $store->save();
        }

        foreach ($request->award_title as $key => $val) {
            $store = new MemberHonorAward();
            $store->member_id = $member->id;
            $store->award_title = $request->award_title[$key];
            $store->awarded_month = $request->awarded_month[$key];
            $store->awarded_year = $request->awarded_year[$key];
            $store->award_description = $request->award_description[$key];
            $store->save();
        }

        foreach ($request->scholarship_title as $key => $val) {
            $store = new MemberScholarship();
            $store->member_id = $member->id;
            $store->scholarship_title = $request->scholarship_title[$key];
            $store->scholarship_month = $request->scholarship_month[$key];
            $store->scholarship_year = $request->scholarship_year[$key];
            $store->scholarship_from = $request->scholarship_from[$key];
            $store->scholarship_description = $request->scholarship_description[$key];
            $store->save();
        }

        foreach ($request->responsibilities_designation as $key => $val) {
            $store = new MemberProfessionalResponsibility();
            $store->member_id = $member->id;
            $store->responsibilities_designation = $request->responsibilities_designation[$key];
            $store->responsibilities_url_link = $request->responsibilities_url_link[$key];
            $store->responsibilities_organization_name = $request->responsibilities_organization_name[$key];
            $store->responsibilities_from_year = $request->responsibilities_from_year[$key];
            $store->responsibilities_to_year = $request->responsibilities_to_year[$key];
            $store->save();
        }

        foreach ($request->project_title as $key => $val) {
            $store = new MemberProjectAccomplishment();
            $store->member_id = $member->id;
            $store->project_title = $request->project_title[$key];
            $store->project_url_link = $request->project_url_link[$key];
            $store->project_from_month = $request->project_from_month[$key];
            $store->project_from_year = $request->project_from_year[$key];
            $store->project_to_month = $request->project_to_month[$key];
            $store->project_to_year = $request->project_to_year[$key];
            $store->project_description = $request->project_description[$key];
            $store->save();
        }

        foreach ($request->training_title as $key => $val) {
            $store = new MemberTrainingAccomplishment();
            $store->member_id = $member->id;
            $store->training_title = $request->training_title[$key];
            $store->training_url_link = $request->training_url_link[$key];
            $store->training_from_month = $request->training_from_month[$key];
            $store->training_from_year = $request->training_from_year[$key];
            $store->training_to_month = $request->training_to_month[$key];
            $store->training_to_year = $request->training_to_year[$key];
            $store->training_description = $request->training_description[$key];
            $store->save();
        }

        foreach ($request->certification_title as $key => $val) {
            $store = new MemberCertificationAccomplishment();
            $store->member_id = $member->id;
            $store->certification_title = $request->certification_title[$key];
            $store->certification_url_link = $request->certification_url_link[$key];
            $store->certification_month = $request->certification_month[$key];
            $store->certification_year = $request->certification_year[$key];
            $store->certification_description = $request->certification_description[$key];
            $store->save();
        }

        // foreach ($request->book_description as $key => $val) {
            $store = new MemberPublicationBook();
            $store->member_id = $member->id;
            // $store->book_title = $request->book_title[$key];
            // $store->book_url_link = $request->book_url_link[$key];
            // $store->book_member_list = $request->book_member_list[$key];
            // $store->book_publisher_name = $request->book_publisher_name[$key];
            // $store->book_month = $request->book_month[$key];
            // $store->book_year = $request->book_year[$key];
            $store->book_description = $request->book_description;
            $store->save();
        // }

        // foreach ($request->journal_title as $key => $val) {
            $store = new MemberPublicationJournal();
            $store->member_id = $member->id;
            // $store->journal_title = $request->journal_title[$key];
            // $store->journal_url_link = $request->journal_url_link[$key];
            // $store->journal_member_list = $request->journal_member_list[$key];
            // $store->journal_publisher_name = $request->journal_publisher_name[$key];
            // $store->journal_month = $request->journal_month[$key];
            // $store->journal_year = $request->journal_year[$key];
            $store->journal_description = $request->journal_description;
            $store->save();
        // }

        // foreach ($request->conference_title as $key => $val) {
            $store = new MemberConference();
            $store->member_id = $member->id;
            // $store->conference_title = $request->conference_title[$key];
            // $store->conference_url = $request->conference_url[$key];
            // $store->conference_month = $request->conference_month[$key];
            // $store->conference_year = $request->conference_year[$key];
            $store->conference_description = $request->conference_description;
            $store->save();
        // }

        foreach ($request->taught_course as $key => $val) {
            $store = new MemberTaughtCourse();
            $store->member_id = $member->id;
            $store->taught_course = $request->taught_course[$key];
            $store->save();
        }

        foreach ($request->language as $key => $val) {
            $store = new MemberLanguage();
            $store->member_id = $member->id;
            $store->language = $request->language[$key];
            $store->proficiency_level = $request->proficiency_level[$key];
            $store->save();
        }

        foreach ($request->social_designation as $key => $val) {
            $store = new MemberSocialWelfare();
            $store->member_id = $member->id;
            $store->social_designation = $request->social_designation[$key];
            $store->social_organization_details = $request->social_organization_details[$key];
            $store->social_from_month = $request->social_from_month[$key];
            $store->social_from_year = $request->social_from_year[$key];
            $store->social_to_month = $request->social_to_month[$key];
            $store->social_to_year = $request->social_to_year[$key];
            $store->save();
        }

        //MemberEducation::create($params);
        //MemberExperience::create($params);

        return redirect()->route('member_management.list')->with('info', 'Member Information add Successfully.');
    }

    public function edit($id)
    {

        // dd(decrypt($id));

        $data['designations'] = Designation::get();

        $data['editData'] = Member::find(Crypt::decrypt($id));

        $data['editDataEducations'] = MemberEducation::where('member_id', @$data['editData']->id)->get();
        $data['editDataExperiences'] = MemberExperience::where('member_id', @$data['editData']->id)->get();
        $data['editDataMemberships'] = MemberMembership::where('member_id', @$data['editData']->id)->get();
        $data['editDataAdministratives'] = MemberAdministrativeExperience::where('member_id', @$data['editData']->id)->get();
        $data['editDataInterestAreas'] = MemberAreaOfInterest::where('member_id', @$data['editData']->id)->get();
        $data['editDataHonorAndAwards'] = MemberHonorAward::where('member_id', @$data['editData']->id)->get();
        $data['editDataScholarships'] = MemberScholarship::where('member_id', @$data['editData']->id)->get();
        $data['editDataResponsibilities'] = MemberProfessionalResponsibility::where('member_id', @$data['editData']->id)->get();
        $data['editDataProjects'] = MemberProjectAccomplishment::where('member_id', @$data['editData']->id)->get();
        $data['editDataTrainings'] = MemberTrainingAccomplishment::where('member_id', @$data['editData']->id)->get();
        $data['editDataCertifications'] = MemberCertificationAccomplishment::where('member_id', @$data['editData']->id)->get();
        $data['editDataBook'] = MemberPublicationBook::where('member_id', @$data['editData']->id)->first();
        $data['editDataJournal'] = MemberPublicationJournal::where('member_id', @$data['editData']->id)->first();
        $data['editDataConference'] = MemberConference::where('member_id', @$data['editData']->id)->first();
        // dd($data['editDataConference']);
        $data['editDataTaughtCourses'] = MemberTaughtCourse::where('member_id', @$data['editData']->id)->get();
        $data['editDataLanguages'] = MemberLanguage::where('member_id', @$data['editData']->id)->get();
        $data['editDataSocialWelfares'] = MemberSocialWelfare::where('member_id', @$data['editData']->id)->get();
        $data['editDataSocialMediaLink'] = MemberSocialMediaLink::where('member_id', @$data['editData']->id)->first();
        $data['editDataSkills'] = MemberSkill::where('member_id', @$data['editData']->id)->get();
        return view('backend.members.members-add')->with(@$data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ]);
        $data = Member::find($id);

        $socialMediaData = MemberSocialMediaLink::where('member_id', $id)->first();

        $params = $request->except(['_token']);
        $designation = Designation::where('id', $request->designation_id)->first();

        $params['member_designation'] = $designation->name ?? $request->member_designation;
        $params['show_phone'] = $request->show_phone ?? 0;

        if (empty($socialMediaData)) {
            $params['member_id'] = $data->id;
            $memberSocial = MemberSocialMediaLink::create($params);
        } else {
            $socialMediaData->update($params);
        }

        if ($file = $request->file('image')) {
            @unlink(public_path('upload/members/' . $data->image));
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/members'), $filename);
            $image = Image::make(public_path('upload/members/') . $filename);
            //$image->resize(643,360)->save(public_path('upload/activity/').$filename);
            $image->save(public_path('upload/members/') . $filename);
            $params['image'] = $filename;
        }
        $data->update($params);

        // $paramsEducation['member_id'] = $id;
        // $paramsEducation['degree'] = $request->degree;
        // $paramsEducation['subject'] = $request->subject;
        // $paramsEducation['education_institution'] = $request->education_institution;
        // $paramsEducation['education_country'] = $request->education_country;
        // $paramsEducation['education_year'] = $request->education_year;
        // MemberEducation::where('member_id',$id)->update($paramsEducation);

        $member = Member::find($id);
        $editDataEducations = MemberEducation::where('member_id', $member->id)->get();
        if (count($editDataEducations) == 0) {
            foreach ($request->degree as $key => $val) {
                $store = new MemberEducation();
                $store->member_id = $member->id;
                $store->degree = $request->degree[$key];
                $store->subject = $request->subject[$key];
                $store->education_institution = $request->education_institution[$key];
                $store->education_country = $request->education_country[$key];
                // $store->education_year = $request->education_year[$key];
                $store->education_to_year = $request->education_to_year[$key];
                $store->save();
            }
        } else {
            $paramsEducation = array();
            // dd($request->id);
            foreach ($request->degree as $key => $val) {
                if ($key >= 5000) {
                    if ($request->degree[$key] == NULL && $request->subject[$key] == NULL && $request->education_institution[$key] == NULL && $request->education_country[$key] == NULL && $request->education_year[$key] == NULL && $request->education_to_year[$key] == NULL) {
                    } else {
                        $store = new MemberEducation();
                        $store->member_id = $member->id;
                        $store->degree = $request->degree[$key];
                        $store->subject = $request->subject[$key];
                        $store->education_institution = $request->education_institution[$key];
                        $store->education_country = $request->education_country[$key];
                        // $store->education_year = $request->education_year[$key];
                        $store->education_to_year = $request->education_to_year[$key];
                        $store->save();
                    }
                } else {
                    $paramsEducation = array();
                    $paramsEducation['degree'] = $request->degree[$key];
                    $paramsEducation['subject'] = $request->subject[$key];
                    $paramsEducation['education_institution'] = $request->education_institution[$key];
                    $paramsEducation['education_country'] = $request->education_country[$key];
                    // $paramsEducation['education_year'] = $request->education_year[$key];
                    $paramsEducation['education_to_year'] = $request->education_to_year[$key];
                    MemberEducation::where('id', $request->education_id[$key])->update($paramsEducation);
                }
            }
        }

        $editDataExperiences = MemberExperience::where('member_id', $member->id)->get();
        if (count($editDataExperiences) == 0) {
            foreach ($request->designation as $key => $val) {
                $store = new MemberExperience();
                $store->member_id = $member->id;
                $store->designation = $request->designation[$key];
                $store->experience_institution = $request->experience_institution[$key];
                $store->experience_country = $request->experience_country[$key];
                $store->experience_from_month = $request->experience_from_month[$key];
                $store->experience_from_year = $request->experience_from_year[$key];
                $store->experience_to_month = $request->experience_to_month[$key];
                $store->experience_to_year = $request->experience_to_year[$key];
                $store->save();
            }
        } else {
            $paramsExperience = array();
            // dd($request->id);
            foreach ($request->designation as $key => $val) {
                if ($key >= 5000) {
                    if ($request->designation[$key] == NULL && $request->experience_institution[$key] == NULL && $request->experience_country[$key] == NULL && $request->experience_from_month[$key] == NULL && $request->experience_from_year[$key] == NULL && $request->experience_to_month[$key] == NULL && $request->experience_to_year[$key] == NULL) {
                    } else {
                        $store = new MemberExperience();
                        $store->member_id = $member->id;
                        $store->designation = $request->designation[$key];
                        $store->experience_institution = $request->experience_institution[$key];
                        $store->experience_country = $request->experience_country[$key];
                        $store->experience_from_month = $request->experience_from_month[$key];
                        $store->experience_from_year = $request->experience_from_year[$key];
                        $store->experience_to_month = $request->experience_to_month[$key];
                        $store->experience_to_year = $request->experience_from_year[$key];
                        $store->save();
                    }
                } else {
                    $paramsExperience = array();
                    $paramsExperience['designation'] = $request->designation[$key];
                    $paramsExperience['experience_institution'] = $request->experience_institution[$key];
                    $paramsExperience['experience_country'] = $request->experience_country[$key];
                    $paramsExperience['experience_from_month'] = $request->experience_from_month[$key];
                    $paramsExperience['experience_from_year'] = $request->experience_from_year[$key];
                    $paramsExperience['experience_to_month'] = $request->experience_to_month[$key];
                    $paramsExperience['experience_to_year'] = $request->experience_to_year[$key];
                    MemberExperience::where('id', $request->experience_id[$key])->update($paramsExperience);
                }
            }
        }

        // start

        $editDataMemberships = MemberMembership::where('member_id', $member->id)->get();
        if (count($editDataMemberships) == 0) {
            foreach ($request->membership_title as $key => $val) {
                $store = new MemberMembership();
                $store->member_id = $member->id;
                $store->membership_title = $request->membership_title[$key];
                $store->membership_type = $request->membership_type[$key];
                $store->membership_from_month = $request->membership_from_month[$key];
                $store->membership_from_year = $request->membership_from_year[$key];
                $store->membership_to_month = $request->membership_to_month[$key];
                $store->membership_to_year = $request->membership_to_year[$key];
                $store->save();
            }
        } else {
            $paramsMembership = array();
            // dd($request->id);
            foreach ($request->membership_title as $key => $val) {
                if ($key >= 5000) {
                    if ($request->membership_title[$key] == NULL && $request->membership_type[$key] == NULL && $request->membership_from_month[$key] == NULL && $request->membership_from_year[$key] == NULL && $request->membership_to_month[$key] == NULL && $request->membership_to_year[$key] == NULL) {
                    } else {

                        $store = new MemberMembership();
                        $store->member_id = $member->id;
                        $store->membership_title = $request->membership_title[$key];
                        $store->membership_type = $request->membership_type[$key];
                        $store->membership_from_month = $request->membership_from_month[$key];
                        $store->membership_from_year = $request->membership_from_year[$key];
                        $store->membership_to_month = $request->membership_to_month[$key];
                        $store->membership_to_year = $request->membership_to_year[$key];
                        $store->save();
                    }
                } else {
                    $paramsMembership = array();
                    $paramsMembership['membership_title'] = $request->membership_title[$key];
                    $paramsMembership['membership_type'] = $request->membership_type[$key];
                    $paramsMembership['membership_from_month'] = $request->membership_from_month[$key];
                    $paramsMembership['membership_from_year'] = $request->membership_from_year[$key];
                    $paramsMembership['membership_to_month'] = $request->membership_to_month[$key];
                    $paramsMembership['membership_to_year'] = $request->membership_to_year[$key];

                    MemberMembership::where('id', $request->membership_id[$key])->update($paramsMembership);
                }
            }
        }

        // end

        $editDataAdministratives = MemberAdministrativeExperience::where('member_id', $member->id)->get();
        if (count($editDataAdministratives) == 0) {
            foreach ($request->administrative_designation as $key => $val) {
                $store = new MemberAdministrativeExperience();
                $store->member_id = $member->id;
                $store->administrative_designation = $request->administrative_designation[$key];
                $store->administrative_details = $request->administrative_details[$key];
                $store->administrative_from_month = $request->administrative_from_month[$key];
                $store->administrative_from_year = $request->administrative_from_year[$key];
                $store->administrative_to_month = $request->administrative_to_month[$key];
                $store->administrative_to_year = $request->administrative_to_year[$key];
                $store->save();
            }
        } else {
            $paramsAdministrative = array();
            // dd($request->id);
            foreach ($request->administrative_designation as $key => $val) {
                if ($key >= 5000) {
                    if ($request->administrative_designation[$key] == NULL && $request->administrative_from_month[$key] == NULL && $request->administrative_from_year[$key] == NULL && $request->administrative_to_month[$key] == NULL && $request->administrative_to_year[$key] == NULL) {
                    } else {
                        $store = new MemberAdministrativeExperience();
                        $store->member_id = $member->id;
                        $store->administrative_designation = $request->administrative_designation[$key];
                        $store->administrative_details = $request->administrative_details[$key];
                        $store->administrative_from_month = $request->administrative_from_month[$key];
                        $store->administrative_from_year = $request->administrative_from_year[$key];
                        $store->administrative_to_month = $request->administrative_to_month[$key];
                        $store->administrative_to_year = $request->administrative_from_year[$key];
                        $store->save();
                    }
                } else {
                    $paramsAdministrative = array();
                    $paramsAdministrative['administrative_designation'] = $request->administrative_designation[$key];
                    $paramsAdministrative['administrative_details'] = $request->administrative_details[$key];
                    $paramsAdministrative['administrative_from_month'] = $request->administrative_from_month[$key];
                    $paramsAdministrative['administrative_from_year'] = $request->administrative_from_year[$key];
                    $paramsAdministrative['administrative_to_month'] = $request->administrative_to_month[$key];
                    $paramsAdministrative['administrative_to_year'] = $request->administrative_to_year[$key];
                    MemberAdministrativeExperience::where('id', $request->administrative_id[$key])->update($paramsAdministrative);
                }
            }
        }

        $editDataInterestAreas = MemberAreaOfInterest::where('member_id', $member->id)->get();
        if (count($editDataInterestAreas) == 0) {
            foreach ($request->interest_area as $key => $val) {
                $store = new MemberAreaOfInterest();
                $store->member_id = $member->id;
                $store->interest_area = $request->interest_area[$key];
                $store->save();
            }
        } else {
            $paramsInterestArea = array();
            // dd($request->id);
            foreach ($request->interest_area as $key => $val) {
                if ($key >= 5000) {
                    if ($request->interest_area[$key] == NULL) {
                    } else {
                        $store = new MemberAreaOfInterest();
                        $store->member_id = $member->id;
                        $store->interest_area = $request->interest_area[$key];
                        $store->save();
                    }
                } else {
                    $paramsInterestArea = array();
                    $paramsInterestArea['interest_area'] = $request->interest_area[$key];
                    MemberAreaOfInterest::where('id', $request->interest_area_id[$key])->update($paramsInterestArea);
                }
            }
        }

        $editDataSkills = MemberSkill::where('member_id', $member->id)->get();
        if (count($editDataSkills) == 0) {
            foreach ($request->skill as $key => $val) {
                $store = new MemberSkill();
                $store->member_id = $member->id;
                $store->skill = $request->skill[$key];
                $store->save();
            }
        } else {
            $paramsSkill = array();
            // dd($request->id);
            foreach ($request->skill as $key => $val) {
                if ($key >= 5000) {
                    if ($request->skill[$key] == NULL) {
                    } else {
                        $store = new MemberSkill();
                        $store->member_id = $member->id;
                        $store->skill = $request->skill[$key];
                        $store->save();
                    }
                } else {
                    $paramsSkill = array();
                    $paramsSkill['skill'] = $request->skill[$key];
                    MemberSkill::where('id', $request->skill_id[$key])->update($paramsSkill);
                }
            }
        }

        $editDataHonorAndAwards = MemberHonorAward::where('member_id', $member->id)->get();
        if (count($editDataHonorAndAwards) == 0) {
            foreach ($request->award_title as $key => $val) {
                $store = new MemberHonorAward();
                $store->member_id = $member->id;
                $store->award_title = $request->award_title[$key];
                $store->awarded_month = $request->awarded_month[$key];
                $store->awarded_year = $request->awarded_year[$key];
                $store->award_description = $request->award_description[$key];
                $store->save();
            }
        } else {
            $paramsHonorAndAward = array();
            // dd($request->id);
            foreach ($request->award_title as $key => $val) {
                if ($key >= 5000) {
                    if ($request->award_title[$key] == NULL && $request->awarded_month[$key] == NULL && $request->awarded_year[$key] == NULL && $request->award_description[$key] == NULL) {
                    } else {
                        $store = new MemberHonorAward();
                        $store->member_id = $member->id;
                        $store->award_title = $request->award_title[$key];
                        $store->awarded_month = $request->awarded_month[$key];
                        $store->awarded_year = $request->awarded_year[$key];
                        $store->award_description = $request->award_description[$key];
                        $store->save();
                    }
                } else {
                    $paramsHonorAndAward = array();
                    $paramsHonorAndAward['award_title'] = $request->award_title[$key];
                    $paramsHonorAndAward['awarded_month'] = $request->awarded_month[$key];
                    $paramsHonorAndAward['awarded_year'] = $request->awarded_year[$key];
                    $paramsHonorAndAward['award_description'] = $request->award_description[$key];
                    MemberHonorAward::where('id', $request->honor_and_awards_id[$key])->update($paramsHonorAndAward);
                }
            }
        }

        $editDataScholarships = MemberScholarship::where('member_id', $member->id)->get();
        if (count($editDataScholarships) == 0) {
            foreach ($request->scholarship_title as $key => $val) {
                $store = new MemberScholarship();
                $store->member_id = $member->id;
                $store->scholarship_title = $request->scholarship_title[$key];
                $store->scholarship_month = $request->scholarship_month[$key];
                $store->scholarship_year = $request->scholarship_year[$key];
                $store->scholarship_from = $request->scholarship_from[$key];
                $store->scholarship_description = $request->scholarship_description[$key];
                $store->save();
            }
        } else {
            $paramsScholarship = array();
            // dd($request->id);
            foreach ($request->scholarship_title as $key => $val) {
                if ($key >= 5000) {
                    if ($request->scholarship_title[$key] == NULL && $request->scholarship_month[$key] == NULL && $request->scholarship_year[$key] == NULL && $request->scholarship_from[$key] == NULL && $request->scholarship_description[$key] == NULL) {
                    } else {
                        $store = new MemberScholarship();
                        $store->member_id = $member->id;
                        $store->scholarship_title = $request->scholarship_title[$key];
                        $store->scholarship_month = $request->scholarship_month[$key];
                        $store->scholarship_year = $request->scholarship_year[$key];
                        $store->scholarship_from = $request->scholarship_from[$key];
                        $store->scholarship_description = $request->scholarship_description[$key];
                        $store->save();
                    }
                } else {
                    $paramsScholarship = array();
                    $paramsScholarship['scholarship_title'] = $request->scholarship_title[$key];
                    $paramsScholarship['scholarship_month'] = $request->scholarship_month[$key];
                    $paramsScholarship['scholarship_year'] = $request->scholarship_year[$key];
                    $paramsScholarship['scholarship_from'] = $request->scholarship_from[$key];
                    $paramsScholarship['scholarship_description'] = $request->scholarship_description[$key];
                    MemberScholarship::where('id', $request->scholarships_id[$key])->update($paramsScholarship);
                }
            }
        }

        $editDataResponsibilities = MemberProfessionalResponsibility::where('member_id', $member->id)->get();
        if (count($editDataResponsibilities) == 0) {
            foreach ($request->responsibilities_designation as $key => $val) {
                $store = new MemberProfessionalResponsibility();
                $store->member_id = $member->id;
                $store->responsibilities_designation = $request->responsibilities_designation[$key];
                $store->responsibilities_url_link = $request->responsibilities_url_link[$key];
                $store->responsibilities_organization_name = $request->responsibilities_organization_name[$key];
                $store->responsibilities_from_year = $request->responsibilities_from_year[$key];
                $store->responsibilities_to_year = $request->responsibilities_to_year[$key];
                $store->save();
            }
        } else {
            $paramsResponsibility = array();
            // dd($request->id);
            foreach ($request->responsibilities_designation as $key => $val) {
                if ($key >= 5000) {
                    if ($request->responsibilities_designation[$key] == NULL && $request->responsibilities_url_link[$key] == NULL && $request->responsibilities_organization_name[$key] == NULL && $request->responsibilities_from_year[$key] == NULL && $request->responsibilities_to_year[$key] == NULL) {
                    } else {
                        $store = new MemberProfessionalResponsibility();
                        $store->member_id = $member->id;
                        $store->responsibilities_designation = $request->responsibilities_designation[$key];
                        $store->responsibilities_url_link = $request->responsibilities_url_link[$key];
                        $store->responsibilities_organization_name = $request->responsibilities_organization_name[$key];
                        $store->responsibilities_from_year = $request->responsibilities_from_year[$key];
                        $store->responsibilities_to_year = $request->responsibilities_to_year[$key];
                        $store->save();
                    }
                } else {
                    $paramsResponsibility = array();
                    $paramsResponsibility['responsibilities_designation'] = $request->responsibilities_designation[$key];
                    $paramsResponsibility['responsibilities_url_link'] = $request->responsibilities_url_link[$key];
                    $paramsResponsibility['responsibilities_organization_name'] = $request->responsibilities_organization_name[$key];
                    $paramsResponsibility['responsibilities_from_year'] = $request->responsibilities_from_year[$key];
                    $paramsResponsibility['responsibilities_to_year'] = $request->responsibilities_to_year[$key];
                    MemberProfessionalResponsibility::where('id', $request->responsibilities_id[$key])->update($paramsResponsibility);
                }
            }
        }

        $editDataProjects = MemberProjectAccomplishment::where('member_id', $member->id)->get();
        if (count($editDataProjects) == 0) {
            foreach ($request->project_title as $key => $val) {
                $store = new MemberProjectAccomplishment();
                $store->member_id = $member->id;
                $store->project_title = $request->project_title[$key];
                $store->project_url_link = $request->project_url_link[$key];
                $store->project_from_month = $request->project_from_month[$key];
                $store->project_from_year = $request->project_from_year[$key];
                $store->project_to_month = $request->project_to_month[$key];
                $store->project_to_year = $request->project_to_year[$key];
                $store->project_description = $request->project_description[$key];
                $store->save();
            }
        } else {
            $paramsProject = array();
            // dd($request->id);
            foreach ($request->project_title as $key => $val) {
                if ($key >= 5000) {
                    if ($request->project_title[$key] == NULL && $request->project_url_link[$key] == NULL && $request->project_from_month[$key] == NULL && $request->project_from_year[$key] == NULL && $request->project_to_month[$key] == NULL && $request->project_to_year[$key] == NULL && $request->project_description[$key] == NULL) {
                    } else {
                        $store = new MemberProjectAccomplishment();
                        $store->member_id = $member->id;
                        $store->project_title = $request->project_title[$key];
                        $store->project_url_link = $request->project_url_link[$key];
                        $store->project_from_month = $request->project_from_month[$key];
                        $store->project_from_year = $request->project_from_year[$key];
                        $store->project_to_month = $request->project_to_month[$key];
                        $store->project_to_year = $request->project_to_year[$key];
                        $store->project_description = $request->project_description[$key];
                        $store->save();
                    }
                } else {
                    $paramsProject = array();
                    $paramsProject['project_title'] = $request->project_title[$key];
                    $paramsProject['project_url_link'] = $request->project_url_link[$key];
                    $paramsProject['project_from_month'] = $request->project_from_month[$key];
                    $paramsProject['project_from_year'] = $request->project_from_year[$key];
                    $paramsProject['project_to_month'] = $request->project_to_month[$key];
                    $paramsProject['project_to_year'] = $request->project_to_year[$key];
                    $paramsProject['project_description'] = $request->project_description[$key];
                    MemberProjectAccomplishment::where('id', $request->projects_id[$key])->update($paramsProject);
                }
            }
        }

        $editDataTrainings = MemberTrainingAccomplishment::where('member_id', $member->id)->get();
        if (count($editDataTrainings) == 0) {
            foreach ($request->training_title as $key => $val) {
                $store = new MemberTrainingAccomplishment();
                $store->member_id = $member->id;
                $store->training_title = $request->training_title[$key];
                $store->training_url_link = $request->training_url_link[$key];
                $store->training_from_month = $request->training_from_month[$key];
                $store->training_from_year = $request->training_from_year[$key];
                $store->training_to_month = $request->training_to_month[$key];
                $store->training_to_year = $request->training_to_year[$key];
                $store->training_description = $request->training_description[$key];
                $store->save();
            }
        } else {
            $paramsTraining = array();
            // dd($request->id);
            foreach ($request->training_title as $key => $val) {
                if ($key >= 5000) {
                    if ($request->training_title[$key] == NULL && $request->training_from_month[$key] == NULL && $request->training_from_year[$key] == NULL && $request->training_to_month[$key] == NULL && $request->training_to_year[$key] == NULL && $request->training_description[$key] == NULL) {
                    } else {
                        $store = new MemberTrainingAccomplishment();
                        $store->member_id = $member->id;
                        $store->training_title = $request->training_title[$key];
                        $store->training_url_link = $request->training_url_link[$key];
                        $store->training_from_month = $request->training_from_month[$key];
                        $store->training_from_year = $request->training_from_year[$key];
                        $store->training_to_month = $request->training_to_month[$key];
                        $store->training_to_year = $request->training_to_year[$key];
                        $store->training_description = $request->training_description[$key];
                        $store->save();
                    }
                } else {
                    $paramsTraining = array();
                    $paramsTraining['training_title'] = $request->training_title[$key];
                    $paramsTraining['training_url_link'] = $request->training_url_link[$key];
                    $paramsTraining['training_from_month'] = $request->training_from_month[$key];
                    $paramsTraining['training_from_year'] = $request->training_from_year[$key];
                    $paramsTraining['training_to_month'] = $request->training_to_month[$key];
                    $paramsTraining['training_to_year'] = $request->training_to_year[$key];
                    $paramsTraining['training_description'] = $request->training_description[$key];
                    MemberTrainingAccomplishment::where('id', $request->training_id[$key])->update($paramsTraining);
                }
            }
        }

        $editDataCertifications = MemberCertificationAccomplishment::where('member_id', $member->id)->get();
        if (count($editDataCertifications) == 0) {
            foreach ($request->certification_title as $key => $val) {
                $store = new MemberCertificationAccomplishment();
                $store->member_id = $member->id;
                $store->certification_title = $request->certification_title[$key];
                $store->certification_url_link = $request->certification_url_link[$key];
                $store->certification_month = $request->certification_month[$key];
                $store->certification_year = $request->certification_year[$key];
                $store->certification_description = $request->certification_description[$key];
                $store->save();
            }
        } else {
            $paramsCertification = array();
            // dd($request->id);
            foreach ($request->certification_title as $key => $val) {
                if ($key >= 5000) {
                    if ($request->certification_title[$key] == NULL && $request->certification_month[$key] == NULL && $request->certification_year[$key] == NULL && $request->certification_description[$key] == NULL) {
                    } else {
                        $store = new MemberCertificationAccomplishment();
                        $store->member_id = $member->id;
                        $store->certification_title = $request->certification_title[$key];
                        $store->certification_url_link = $request->certification_url_link[$key];
                        $store->certification_month = $request->certification_month[$key];
                        $store->certification_year = $request->certification_year[$key];
                        $store->certification_description = $request->certification_description[$key];
                        $store->save();
                    }
                } else {
                    $paramsCertification = array();
                    $paramsCertification['certification_title'] = $request->certification_title[$key];
                    $paramsCertification['certification_url_link'] = $request->certification_url_link[$key];
                    $paramsCertification['certification_month'] = $request->certification_month[$key];
                    $paramsCertification['certification_year'] = $request->certification_year[$key];
                    $paramsCertification['certification_description'] = $request->certification_description[$key];
                    MemberCertificationAccomplishment::where('id', $request->certification_id[$key])->update($paramsCertification);
                }
            }
        }

        $editDataBook = MemberPublicationBook::where('member_id', $member->id)->first();
if($editDataBook){
    $store= $editDataBook;
}else{
    $store = new MemberPublicationBook();
}
                $store->member_id = $member->id;
                $store->book_description = $request->book_description;
                $store->save();


        $editDataJournal = MemberPublicationJournal::where('member_id', $member->id)->first();
        if($editDataJournal){
            $store= $editDataJournal;
        }else{
            $store = new MemberPublicationJournal();
        }
                $store->member_id = $member->id;
                $store->journal_description = $request->journal_description;
                $store->save();


        $editDataConference = MemberConference::where('member_id', $member->id)->first();

        if($editDataConference){
            $store= $editDataConference;
        }else{
            $store = new MemberConference();
        }
                $store->member_id = $member->id;
                $store->conference_description = $request->conference_description;
                $store->save();


        $editDataTaughtCourses = MemberTaughtCourse::where('member_id', $member->id)->get();
        if (count($editDataTaughtCourses) == 0) {
            foreach ($request->taught_course as $key => $val) {
                $store = new MemberTaughtCourse();
                $store->member_id = $member->id;
                $store->taught_course = $request->taught_course[$key];
                $store->save();
            }
        } else {
            $paramsTaughtCourse = array();
            // dd($request->id);
            foreach ($request->taught_course as $key => $val) {
                if ($key >= 5000) {
                    if ($request->taught_course[$key] == NULL) {
                    } else {
                        $store = new MemberTaughtCourse();
                        $store->member_id = $member->id;
                        $store->taught_course = $request->taught_course[$key];
                        $store->save();
                    }
                } else {
                    $paramsTaughtCourse = array();
                    $paramsTaughtCourse['taught_course'] = $request->taught_course[$key];
                    MemberTaughtCourse::where('id', $request->taught_course_id[$key])->update($paramsTaughtCourse);
                }
            }
        }

        $editDataLanguages = MemberLanguage::where('member_id', $member->id)->get();
        if (count($editDataLanguages) == 0) {
            foreach ($request->language as $key => $val) {
                $store = new MemberLanguage();
                $store->member_id = $member->id;
                $store->language = $request->language[$key];
                $store->proficiency_level = $request->proficiency_level[$key];
                $store->save();
            }
        } else {
            $paramsLanguage = array();
            // dd($request->id);
            foreach ($request->language as $key => $val) {
                if ($key >= 5000) {
                    if ($request->language[$key] == NULL && $request->proficiency_level[$key] == NULL) {
                    } else {
                        $store = new MemberLanguage();
                        $store->member_id = $member->id;
                        $store->language = $request->language[$key];
                        $store->proficiency_level = $request->proficiency_level[$key];
                        $store->save();
                    }
                } else {
                    $paramsLanguage = array();
                    $paramsLanguage['language'] = $request->language[$key];
                    $paramsLanguage['proficiency_level'] = $request->proficiency_level[$key];
                    MemberLanguage::where('id', $request->language_id[$key])->update($paramsLanguage);
                }
            }
        }

        $editDataSocialWelfares = MemberSocialWelfare::where('member_id', $member->id)->get();
        if (count($editDataSocialWelfares) == 0) {
            foreach ($request->social_designation as $key => $val) {
                $store = new MemberSocialWelfare();
                $store->member_id = $member->id;
                $store->social_designation = $request->social_designation[$key];
                $store->social_organization_details = $request->social_organization_details[$key];
                $store->social_from_month = $request->social_from_month[$key];
                $store->social_from_year = $request->social_from_year[$key];
                $store->social_to_month = $request->social_to_month[$key];
                $store->social_to_year = $request->social_to_year[$key];
                $store->save();
            }
        } else {
            $paramsSocialWelfare = array();
            // dd($request->id);
            foreach ($request->social_designation as $key => $val) {
                if ($key >= 5000) {
                    if ($request->social_designation[$key] == NULL && $request->social_organization_details[$key] == NULL && $request->social_from_month[$key] == NULL && $request->social_from_year[$key] == NULL && $request->social_to_month[$key] == NULL && $request->social_to_year[$key] == NULL) {
                    } else {
                        $store = new MemberSocialWelfare();
                        $store->member_id = $member->id;
                        $store->social_designation = $request->social_designation[$key];
                        $store->social_organization_details = $request->social_organization_details[$key];
                        $store->social_from_month = $request->social_from_month[$key];
                        $store->social_from_year = $request->social_from_year[$key];
                        $store->social_to_month = $request->social_to_month[$key];
                        $store->social_to_year = $request->social_to_year[$key];
                        $store->save();
                    }
                } else {
                    $paramsSocialWelfare = array();
                    $paramsSocialWelfare['social_designation'] = $request->social_designation[$key];
                    $paramsSocialWelfare['social_organization_details'] = $request->social_organization_details[$key];
                    $paramsSocialWelfare['social_from_month'] = $request->social_from_month[$key];
                    $paramsSocialWelfare['social_from_year'] = $request->social_from_year[$key];
                    $paramsSocialWelfare['social_to_month'] = $request->social_to_month[$key];
                    $paramsSocialWelfare['social_to_year'] = $request->social_to_year[$key];
                    MemberSocialWelfare::where('id', $request->social_welfare_id[$key])->update($paramsSocialWelfare);
                }
            }
        }

        if (!empty(auth()->user()->member_id)) {
            return redirect()->back()->with('info', 'Member Information Update Successfully');
        } else {
            return redirect()->route('member_management.list')->with('info', 'Member Information Update Successfully');
        }
    }

    public function destroy(Request $request)
    {
        $data = Member::find($request->id);
        @unlink(public_path('upload/members/' . $data->image));
        $data->delete();
    }

    public function memberEducationRemove($id)
    {
        $data = MemberEducation::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Education info Deleted Successfully');
    }

    public function memberExperienceRemove($id)
    {
        $data = MemberExperience::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Professional Experience Deleted Successfully');
    }
    public function memberMembershipRemove($id)
    {
        $data = MemberMembership::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Membership Deleted Successfully');
    }

    public function memberAdministrativeRemove($id)
    {
        $data = MemberAdministrativeExperience::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Administrative Experience Deleted Successfully');
    }

    public function memberInterestAreaRemove($id)
    {
        $data = MemberAreaOfInterest::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Area of Interest Deleted Successfully');
    }

    public function memberHonorAndAwardsRemove($id)
    {
        $data = MemberHonorAward::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Honor and Award Deleted Successfully');
    }
    public function memberScholarshipsRemove($id)
    {
        $data = MemberScholarship::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Scholarship and Fellowship Deleted Successfully');
    }

    public function memberResponsibilitiesRemove($id)
    {
        $data = MemberProfessionalResponsibility::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Professional Responsibility Deleted Successfully');
    }

    public function memberProjectsRemove($id)
    {
        $data = MemberProjectAccomplishment::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Project Accomplishment Deleted Successfully');
    }

    public function memberTrainingRemove($id)
    {
        $data = MemberTrainingAccomplishment::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Training Accomplishment Deleted Successfully');
    }

    public function memberCertificationRemove($id)
    {
        $data = MemberCertificationAccomplishment::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Certification Accomplishment Deleted Successfully');
    }

    public function memberBookRemove($id)
    {
        $data = MemberPublicationBook::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Publish Book Deleted Successfully');
    }

    public function memberJournalRemove($id)
    {
        $data = MemberPublicationJournal::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Publish Journal Deleted Successfully');
    }

    public function memberConference($id)
    {
        $data = MemberConference::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Conference and Research Seminar Deleted Successfully');
    }

    public function memberTaughtCourseRemove($id)
    {
        $data = MemberTaughtCourse::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Taught Course Deleted Successfully');
    }

    public function memberLanguageRemove($id)
    {
        $data = MemberLanguage::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Language Deleted Successfully');
    }

    public function memberSocialWelfareRemove($id)
    {
        $data = MemberSocialWelfare::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Social Welfare Deleted Successfully');
    }

    public function memberSkillRemove($id)
    {
        $data = MemberSkill::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Skill Deleted Successfully');
    }

    public function MemberTypeWiseDesignation(Request $request)
    {
        $data['designations'] = Designation::where('purpose', $request->member_type_value)->get();

        if (isset($data['designations'])) {
            return response()->json($data['designations']);
        } else {
            return response()->json('fail');
        }
    }
    public function DepartmentWiseProgram(Request $request)
    {
        $program = ProgramInfo::where('department_id', $request->department_id)->get();
        // dd($program->toArray());

        if (isset($program)) {
            return response()->json($program);
        } else {
            return response()->json('fail');
        }
    }

    public function deleteMemberImage(Request $request)
    {
        $data = Member::find($request->member_id);
        @unlink(public_path('upload/members/' . $data->image));
        $data->image = null;
        $data->save();
    }
}
