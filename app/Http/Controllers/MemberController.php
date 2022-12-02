<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\returnSelf;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }


    /**
     * Confirm membership function
     */

    public function checkmember(Request $request)
    {

        # code...
        request()->validate([
            'regno' => 'required',
        ]);

        $member = Member::whereRegno($request->regno)->first();
        $finStatus = Member::whereRegno($request->regno)->where('fin_status', '>', 0)->first();
        if ($member != null) {
            if ($finStatus != null) {
                return Redirect::route('nomination.form', ['id' => $member->id]);
                # code...
            } else {
                return back()->with('status', 'Your financial status is not up to date');
            }
        } else {
            return back()->with('status', 'Invalid Voter\'s ID');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = new Member();
        return view('members.create', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'fin_status' => 'required'
        ]);

        $data = $request->all();
        $data['pin'] = random_int(1000, 9999);
        $data['regno'] = random_int(10000, 99999);
        //dd($data);
        Member::create($data);

        return back()->with('status', 'Member successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $data = request()->validate([
            'name' => 'required',
            'fin_status' => 'required'
        ]);

        Member::find($member->id)->update([
            'name' => $data['name'],
            'fin_status' => $data['fin_status']
        ]);

        return back()->with('status', 'Member successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
        $member->delete();

        return redirect()->route('members.index');
    }
}
