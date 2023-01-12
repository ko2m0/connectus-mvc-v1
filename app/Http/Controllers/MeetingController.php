<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index()
    {
        return view('bizandbreakfast');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meeting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'meetingNameField' => 'required',
            'meetingEmailField' => 'required',
            'meetingPhoneField' => 'required',
            'meetingDateField' => 'required',
        ]); 


        $meet = new Meeting();

        $meet->meetingNameField = $request->input('meetingNameField');
        $meet->meetingEmailField = $request->input('meetingEmailField');
        $meet->meetingPhoneField = $request->input('meetingPhoneField');
        $meet->meetingDateField = $request->input('meetingDateField');
        $meet->meetingMsg = $request->input('meetingMsg');
        
        $meet->save();

        return redirect()->route('meeting.show');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meet)
    {
        return view('meeting.show', [
            'meetingdata' => $meet
        ]);
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
    }
}
