<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use Illuminate\Http\Request;
use PhpParser\Builder\Param;

class applicationController extends Controller
{
    public function sendApplication(Request $data)
    {
        if ($data->hasFile('cv_file')) {
            $file = $data->file('cv_file');

            $filepath = $file->store('applicationFiles', 'public');
            $newApplication = Applications::create([
                'applicant_id' => auth()->id(),
                'recruiter_id' => $data->recruiter_id,
                'listing_id' => $data->listing_id,
                'text' => $data->application_text,
                'cv_path' => $filepath,
                'job_tittle' => $data->job_tittle,
            ]);

            if ($newApplication) {
                return redirect('/');
            }
        }
    }


    public function viewApplicants()
    {
        $res = Applications::where('recruiter_id', auth()->id())
            ->join('users', 'applications.applicant_id', '=', 'users.id')
            ->join('listings', 'applications.listing_id', '=', 'listings.id')
            ->get();

        return view('pages.applicants', [
            'data' => $res,
            'application' => null
        ]);
    }


    public function viewApplied()
    {
        $res = Applications::where('applicant_id', auth()
            ->id())
            ->join('users', 'recruiter_id', '=', 'users.id')
            ->join('listings', 'applications.recruiter_id', '=', 'listings.creater_id')
            ->get();

        return view('pages.applied', [
            'data' => $res
        ]);
    }


    public function reviewApplication($id)
    {
        $userid = auth()->id();
        $data =  Applications::where('application_id', $id)
            ->limit(1)
            ->join('users', 'applications.applicant_id', '=', 'users.id')
            ->join('listings', 'listings.creater_id', '=', 'applications.recruiter_id')
            ->get();

        $res = Applications::where('recruiter_id', auth()->id())
            ->join('users', 'applications.applicant_id', '=', 'users.id')
            ->join('listings', 'applications.listing_id', '=', 'listings.id')
            ->get();

        return view('pages.applicants', [
            'data' => $res,
            'application' => $data
        ]);
    }


    public function rejectApplication($id)
    {
        $res = Applications::where('application_id', $id)->update([
            'status' => 'rejected',
        ]);
        if ($res) {
            return redirect('/application/applicants')->with('message', 'Application has been updated');
        } else {
            return redirect('/application/applicants')->with('error', 'Failed to update application');
        }
    }


    public function acceptApplication($id)
    {
        $res = Applications::where('application_id', $id)->update([
            'status' => 'accepted',
        ]);
        if ($res) {
            return redirect('/application/applicants')->with('message', 'Application has been updated');
        } else {
            return redirect('/application/applicants')->with('error', 'Failed to update application');
        }
    }
}
