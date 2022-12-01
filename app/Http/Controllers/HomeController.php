<?php

namespace App\Http\Controllers;

use App\Models\Electioncontrol;
use App\Models\Vote;
use App\Models\Member;
use App\Models\Office;
use App\Models\Nomination;
use Illuminate\Http\Request;

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
        $accreditated = Member::where('accreditated', 1)->count();

        $nonaccreditated = Member::where('accreditated', 0)->count();
        $votes = Vote::count();

        return view('home', compact('electioncontrol', 'members', 'candidates', 'accreditated', 'nonaccreditated', 'vote', 'votes'));
    }

    public function electionresults()
    {
        # code...
        $selectid = Nomination::pluck('id');
        $voteofficeid = Vote::pluck('office_id');
        $candidates = Member::select('id', 'name')->whereIn('id', $selectid)->withCount('votes')->get();
        $offices = Office::whereIn('id', $voteofficeid)->get();

        return view('electionresults', compact('candidates', 'offices'));
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
