<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Project;
use App\Models\Job;
use App\Models\Education;
use App\Models\Employment;
use App\Models\Gig;
use App\Models\Milestone;
use App\Models\wTransactions;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        # Overall Statistics
        $user = User::all()->count();
        $project = Project::all()->count();
        $gig = Gig::all()->count();
        $completed_job = Job::where('status', '=', 'Completed')->count();
        $total_jobs = Job::all()->count();
        $jobs_in_progress = Job::where('status', '=', 'In Progress')->count();

        $progPercentage = ($jobs_in_progress / $total_jobs) * 100;
        $compPercentage = ($completed_job / $total_jobs) * 100;

        # Monthly Statistics 
        $date = Carbon::now()->subMonth();
        $user_m = User::where('created_at', '>', $date)->count();
        $project_m = Project::where('created_at', '>', $date)->count();
        $gig_m = Project::where('created_at', '>', $date)->count();
        $completed_job_m = Project::where('created_at', '>', $date)->count();

        return view('admin.index', ["user"=>$user, "proj"=>$project, "gig"=>$gig, "cJobs"=>$completed_job,
            "userM"=>$user_m, "projM"=>$project_m, "gigM"=>$gig_m, "cJobsM"=>$completed_job_m, 
            "totalJobs"=>$total_jobs, "jobsProgress"=> $progPercentage, "compJobs"=>$compPercentage]);
    }

    public function transactions()
    {
        $transactions = wTransactions::leftjoin('users as sender', 'wtransactions.sender_id', '=', 'sender.id')
            ->leftjoin('users as receiver', 'wtransactions.receiver_id', '=', 'receiver.id')
            ->select('wtransactions.amount', 'wtransactions.created_at', 'sender.name as sname', 'receiver.name as rname')->get();
        return view('admin.transactions', ['transactions'=>$transactions]);
    }

    public function projects()
    {
        $projs = Project::leftjoin('users', 'projects.created_by', '=', 'users.id')
            ->leftjoin('categories', 'projects.category', '=', 'categories.id')
            ->select('projects.*', 'users.name as uname', 'users.img', 'categories.name as category')->get();
        
        return view('admin.projects', ["projs"=>$projs]);
    }

    public function gigs()
    {
        $gigs = Gig::leftjoin('users', 'gigs.created_by', '=', 'users.id')
            ->leftjoin('categories', 'gigs.category', '=', 'categories.id')
            ->select('gigs.*', 'users.name as uname', 'users.img', 'categories.name as category')->get();
        
        return view('admin.gigs', ["gigs"=>$gigs]);
    }

    public function jobs()
    {
        $jobs = Job::leftjoin('users as client', 'jobs.employer', '=', 'client.id')
            ->leftjoin('users as seller', 'jobs.employee', '=', 'seller.id')
            ->leftjoin('projects', 'jobs.project_id', '=', 'projects.id')
            ->leftjoin('gigs', 'jobs.project_id', '=', 'gigs.id')
            ->leftjoin('categories as p_cat', 'projects.category', '=', 'p_cat.id')
            ->leftjoin('categories as g_cat', 'gigs.category', '=', 'g_cat.id')
            ->select('jobs.id', 'jobs.status', 'client.name as cname', 'client.img as cimg', 
                'seller.name as sname', 'seller.img as simg', 
                'p_cat.name as pname', 'g_cat.name as gname',
                'projects.name as ptitle', 'gigs.name as gtitle',
                'projects.description as pdes', 'gigs.description as gdes')->get();
        
        return view('admin.jobs', ["jobs" => $jobs]);
    }

    public function categories()
    {
        $categories = Category::all();

        $category_project_count = array();
        $category_gig_count = array();

        foreach($categories as $category) {
            $project_count = Project::where('category', '=', $category['id'])->count();
            array_push($category_project_count, $project_count);

            $gig_count = Gig::where('category', '=', $category['id'])->count();
            array_push($category_gig_count, $gig_count);
        }
        return view('admin.categories', ["categories"=>$categories, "projs"=>$category_project_count, 
            "gigs"=>$category_gig_count]);
    }

    # Deletion Functions

    public function delete_project($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('admin/projects');
    }

    public function delete_gig($id)
    {
        $gig = Gig::find($id);
        $gig->delete();
        return redirect('admin/gigs');
    }

    public function delete_job($id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect('admin/jobs');
    }

    public function delete_category($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect('admin/categories');
    }

    # Add Functions

    public function create()
    {
        echo "Implementation required";
    }
}
