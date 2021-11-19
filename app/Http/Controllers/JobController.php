<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    //
    public function index()
    {
        $jobs = Job::latest()->get();
        return view('jobs', ['jobs' => $jobs,]);
    }

    public function create()
    {
        return view('jobs/create');
    }

    public function store()
    {
        if (request('file')) {
            $job = new Job();

            $job->name = request('name');
            $job->email = request('email');
            $file = request('file');
            $job->filename = time() . '_' . $job->name . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $job->filename);
            $job->save();
        }
        return redirect('/')->with('mssg', 'Thanks for creating the job. You will receive an email after your job is done. Please use your job id to download the result.');
    }
}
