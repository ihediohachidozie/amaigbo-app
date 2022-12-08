<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Fvote;
use App\Models\Member;
use App\Models\Office;
use App\Models\Nomination;
use Illuminate\Http\Request;
use App\Models\Electioncontrol;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $members = Member::all();
        $candidates = Nomination::all();
        $electioncontrol = Electioncontrol::find(1);
        $vote = Vote::get()->unique('voter_id')->count();
        $invalid_votes = Fvote::get()->unique('voter_id')->count();// invalid vote count
        $accreditated = Member::where('accreditated', 1)->count();

        $nonaccreditated = Member::where('accreditated', 0)->count();
        $votes = Vote::count();

        $invalid_votes = Fvote::get()->unique('voter_id')->count();// invalid vote count
        return view('home', compact('electioncontrol', 'members', 'candidates', 'accreditated', 'nonaccreditated', 'vote', 'invalid_votes', 'votes'));
    }

    public function electionresults()
    {
        # code...
        $selectid = Nomination::pluck('id');
        $financialmembers = Member::where('fin_status', 1)->pluck('id'); // Financially up to date members
        $voteofficeid = Vote::pluck('office_id');
        $members = Member::pluck('name', 'id');
        $candidates = Nomination::with('office', 'member')->withCount('votes', 'fvotes')->get();
        /* $candidates = Vote::whereIn('voter_id', $financialmembers)
        ->select(DB::raw('count(voter_id) as Votes'), 'member_id as Member')
        ->groupBy('member_id')
        ->pluck('Votes', 'Member'); */
        $offices = Office::whereIn('id', $voteofficeid)->get();

        return view('electionresults', compact('candidates', 'offices', 'members'));
    }

    public function startelection()
    {
        # start election
        Electioncontrol::find(1)->update([
            'electioncontrol' => 1
        ]);
        return back();
    }

    public function endelection()
    {
        # end election
        Electioncontrol::find(1)->update([
            'electioncontrol' => 2
        ]);
        return back();
    }

    public function reset()
    {
        # end election
        Electioncontrol::find(1)->update([
            'electioncontrol' => 0
        ]);
        return back();
    }
}
