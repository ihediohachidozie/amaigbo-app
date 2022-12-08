<?php

namespace App\Http\Controllers;

use App\Models\Electioncontrol;
use App\Models\Fvote;
use App\Models\Vote;
use App\Models\Member;
use App\Models\Office;

use App\Models\Nomination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    /**
     * accreditation function
     */
    public function accreditation()
    {
        if(Electioncontrol::find(1)->electioncontrol != 1)
        {
            return redirect()->route('welcome');
        }
        return view('pages.accreditation');
    }

    /**
     * confirm ven
     */
    public function accreditate(Request $request)
    {
        request()->validate([
            'regno' => 'required',
            'pin' => 'required',
        ]);

        $accreditate = Member::where([
            'regno' => $request->regno,
            'pin' => $request->pin
        ])->first();

        if ($accreditate != null) {
            $accreditate->update([
                'accreditated' => 1
            ]);
            return redirect()->route('ballotcard', ['id' => $accreditate->id]);
        }
        return back()->with('status', 'Invalid Membership ID or Voter\'s Eligibility Number');
    }

    public function ballotcard(Request $request)
    {
        $voter_id = $request->id;
        $offices = Office::pluck('name', 'id');
        $elected_offices = Nomination::orderBy('office_id')->pluck('office_id')->unique();
        $candidates = Nomination::orderBy('office_id')->get();


        # dd($elected_offices);
        return view('pages.vote', compact('offices', 'candidates', 'voter_id', 'elected_offices'));
        # code...
    }

    public function store(Request $request)
    {
        if(Electioncontrol::find(1)->electioncontrol != 1)
        {
            return redirect()->route('welcome');
        }

        $data = $request->input();

        $check = Vote::where('voter_id', $request->voter_id)->count();

        if ($check != 0) {

            return redirect()->route('accreditation')->with('status', 'Member has already voted!');
        }

        if (Member::find($request->voter_id)->fin_status == 1) {
            $this->financalmembers($data);
        } else {
           $this->nonfinancalmembers($data);
        }
        return redirect()->route('statistics');
    }

    public function nonfinancalmembers($data)
    {
        # NOT IN USE
        foreach ($data as $key => $value) {
            if ($key != '_token' && $key != 'voter_id') {

                $vote = new Fvote();
                $vote->nomination_id = $value;
                $vote->voter_id = $data['voter_id'];
                $vote->office_id = $key;
                $vote->save();
            }
        }
    }

    public function financalmembers($data)
    {
        # NOT IN USE
        foreach ($data as $key => $value) {
            if ($key != '_token' && $key != 'voter_id') {

                $vote = new Vote();
                $vote->nomination_id = $value;
                $vote->voter_id = $data['voter_id'];
                $vote->office_id = $key;
                $vote->save();
            }
        }
    }

    public function statistics()
    {

        $accreditated = Member::where('accreditated', 1)->count();

        $nonaccreditated = Member::where('accreditated', 0)->count();

        $votes = Vote::count(); // valid votes count

        $office = Office::pluck('name', 'id');

        $elected_offices = [];


        $members = Member::pluck('name', 'id');

        $financialmembers = Member::where('fin_status', 1)->pluck('id'); // Financially up to date members

        $nonfinancialmembers = Member::where('fin_status', 0)->pluck('id'); // Non financially up to date members

        $offices = Office::get();

        $votesbyoffice = Vote::whereIn('voter_id', $financialmembers)
            ->select(DB::raw('count(voter_id) as Votes'), 'office_id as Office')
            ->groupBy('office_id')
            ->pluck('Votes', 'Office');

        $invotesbyoffice = Fvote::whereIn('voter_id', $nonfinancialmembers)
        ->select(DB::raw('count(voter_id) as Votes'), 'office_id as Office')
        ->groupBy('office_id')
        ->pluck('Votes', 'Office');

        $vote = Vote::whereIn('voter_id', $financialmembers)->get()->unique('voter_id')->count(); // valid vote count

        # dd($vote);
        $invalid_votes = Fvote::whereIn('voter_id', $nonfinancialmembers)->get()->unique('voter_id')->count();// invalid vote count
        #dd($invalid_votes);
        # start of NOT IN USE ...
      /*   $votesbycandidates = Vote::whereIn('voter_id', $financialmembers)
            ->select(DB::raw('count(voter_id) as Votes'), 'member_id as Member')
            ->groupBy('member_id')
            ->pluck('Votes', 'Member'); */
        # end of NOT IN USE ...
        $candidates = Nomination::with('office', 'member')->withCount('votes', 'fvotes')->get();

        # Election result view
        $electioncontrol = Electioncontrol::find(1);

        # votes by candidates

        $selectid = Nomination::pluck('id');
        $voteofficeid = Vote::pluck('office_id');
        #$candidates = Member::select('id', 'name')->whereIn('id', $selectid)->withCount('votes')->get();
        $officex = Office::whereIn('id', $voteofficeid)->get();

       # dd($votesbycandidates);
        return view('pages.statistics', compact('electioncontrol', 'candidates', 'officex', 'offices', 'votesbyoffice', 'invotesbyoffice', 'accreditated', 'nonaccreditated', 'votes', 'invalid_votes', 'office', 'members', 'elected_offices', 'vote'));
    }


    public function voteresult()
    {
        # code...
        $financialmembers = Member::where('fin_status', 1)->pluck('id'); // Financially up to date members
        $selectid = Nomination::pluck('id');
        $voteofficeid = Vote::pluck('office_id');
        $members = Member::pluck('name', 'id');

       # $candidates = Member::select('id', 'name')->whereIn('id', $selectid)->withCount('votes')->get();
       /* $candidates = Vote::whereIn('voter_id', $financialmembers)
       ->select(DB::raw('count(voter_id) as Votes'), 'member_id as Member')
       ->groupBy('member_id')
       ->pluck('Votes', 'Member'); */

       $candidates = Nomination::with('office', 'member')->withCount('votes', 'fvotes')->get();
        $offices = Office::whereIn('id', $voteofficeid)->get();

        return view('pages.voteresults', compact('candidates', 'offices', 'members'));
    }
}
