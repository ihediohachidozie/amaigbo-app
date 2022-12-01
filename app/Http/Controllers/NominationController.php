<?php

namespace App\Http\Controllers;

use App\Models\Electioncontrol;
use App\Models\Member;
use App\Models\Office;
use App\Models\Nomination;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class NominationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Electioncontrol::find(1)->electioncontrol;
        if( $status == 1 || $status == 2 )
        {
            return redirect()->route('welcome');
        }

        return view('pages.confirmmember');
    }


    public function list()
    {
        $candidates = Nomination::all();
        return view('candidates.list', compact('candidates'));
    }


    public function form(Request $request)
    {
        # code...
        // dd($request->id);
        $id = $request->id;
        if ($id == null || intval($id) == 0) {
            # code...
            return view('pages.confirmmember');
        }

        $member = Member::find($id);
        $offices = Office::pluck('name', 'id');
        $nomination = Nomination::with('member', 'office')->where('member_id', $id)->get();
        return view('pages.nominationform', compact('member', 'offices', 'nomination'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $status = Electioncontrol::find(1)->electioncontrol;
        if( $status == 1 || $status == 2 )
        {
            return redirect()->route('welcome');
        }

        request()->validate([
            'member_id' => 'required',
            'office_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nominationform' => 'required|mimes:pdf|max:2048',
            'resume' => 'required|mimes:pdf|max:2048'
        ]);

        $message = '';
        try {

            Nomination::updateOrCreate(
                ['member_id' => $request->member_id],
                [
                    'member_id' => $request->member_id,
                    'office_id' => $request->office_id,
                    'image' => $request->image->store('assets/candidates', 'public'),
                    'nominationform' => $request->nominationform->store('assets/nominationforms', 'public'),
                    'resume' => $request->resume->store('assets/resumes', 'public')
                ]
            );


            $fileName = time() . '_nomination_form_' . $request->member_id . '.' . $request->nominationform->extension();

            $request->nominationform->move(public_path('assets/nominationforms'), $fileName);

            // resume
            $fileResume = time() . '_resume_' . $request->member_id . '.' . $request->resume->extension();

            $request->resume->move(public_path('assets/resumes'), $fileResume);


            // image
            $imageName = time() . '_image_' . $request->member_id . '.' . $request->image->extension();


            $img = Image::make($request->image)->fit(640, 428);

            $img->save('storage/' . $imageName);

            $message = "Nomination form submitted successfully";

            //code...
        } catch (\Throwable $th) {
            //throw $th;
            $message = "Something went wrong!";
        }

        return back()->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       // dd('i m here');
        Nomination::find($id)->delete();

        return redirect()->route('candidates.list');
    }
}
