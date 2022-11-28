<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class BandbController extends Controller

{


    private static function getData() {
        return [
            ['id' => 1, 'profile_video' => 'video',
                        'profile_pic' => 'a pic',
                         'profile_name' => 'a name here',
                          'profile_job' => 'a job',
                           'profile_ws' => 'a ws',
                            'profile_about' => 'lorem ipsum',
                             'profile_phonenumber' => '5558465215',
                              'profile_email' => 'anemail',
                               'profile_client_img1' => 'clientimg1',
                                'profile_client_img2' => 'clientimg2',
                                 'profile_client_img3' => 'clientimg3',
                                  'profile_client_img4' => 'clientimg4',
                                   'profile_smlink1' => 'profile_smlink1',
                                    'profile_smlink2' => 'profile_smlink2',
                                     'profile_smlink3' => 'profile_smlink3',
                                      'profile_smlink4' => 'profile_smlink4'
        ],
        ['id' => 2, 'profile_video' => 'video',
                        'profile_pic' => 'a pic',
                         'profile_name' => 'a name here2',
                          'profile_job' => 'a job2',
                           'profile_ws' => 'a ws',
                            'profile_about' => 'lorem ipsum',
                             'profile_phonenumber' => '5558465215',
                              'profile_email' => 'anemail',
                               'profile_client_img1' => 'clientimg1',
                                'profile_client_img2' => 'clientimg2',
                                 'profile_client_img3' => 'clientimg3',
                                  'profile_client_img4' => 'clientimg4',
                                   'profile_smlink1' => 'profile_smlink1',
                                    'profile_smlink2' => 'profile_smlink2',
                                     'profile_smlink3' => 'profile_smlink3',
                                      'profile_smlink4' => 'profile_smlink4'
           ]
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('bizandbreakfast.index', [
            'bandb_profile' => Profile::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bizandbreakfast.create');
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
            'profile_video' => 'required',
            'profile_pic' => 'required',
            'profile_name' => 'required',
            'profile_job' => 'required',
            'profile_ws' => 'required',
            'profile_about' => 'required',
            'profile_phonenumber' => ['required', 'integer'],
            'profile_email' => 'required',
            'profile_client_img1' => 'required',
            'profile_client_img2' => 'required',
            'profile_client_img3' => 'required',
            'profile_client_img4' => 'required',
            'profile_smlink1' => 'required',
            'profile_smlink2' => 'required',
            'profile_smlink3' => 'required',
            'profile_smlink4' => 'required',
        ]);
        //
        $profile = new Profile();

        $profile->profile_video = strip_tags($request->input('profile_video'));
        $profile->profile_pic = strip_tags($request->input('profile_pic'));
        $profile->profile_name = strip_tags($request->input('profile_name'));
        $profile->profile_job = strip_tags($request->input('profile_job'));
        $profile->profile_ws = strip_tags($request->input('profile_ws'));
        $profile->profile_about = strip_tags($request->input('profile_about'));
        $profile->profile_phonenumber = strip_tags($request->input('profile_phonenumber'));
        $profile->profile_email = strip_tags($request->input('profile_email'));
        $profile->profile_client_img1 = strip_tags($request->input('profile_client_img1'));
        $profile->profile_client_img2 = strip_tags($request->input('profile_client_img2'));
        $profile->profile_client_img3 = strip_tags($request->input('profile_client_img3'));
        $profile->profile_client_img4 = strip_tags($request->input('profile_client_img4'));
        $profile->profile_smlink1 = strip_tags($request->input('profile_smlink1'));
        $profile->profile_smlink2 = strip_tags($request->input('profile_smlink2'));
        $profile->profile_smlink3 = strip_tags($request->input('profile_smlink3'));
        $profile->profile_smlink4 = strip_tags($request->input('profile_smlink4'));

        $profile->save();

        return redirect()->route('bizandbreakfast.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $bizandbreakfast)
    {
        //

        return view('bizandbreakfast.show', [
            'bandb_profile' => $bizandbreakfast
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $bizandbreakfast)
    {
        //
        return view('bizandbreakfast.edit', [    
            'bandb_profile' => $bizandbreakfast
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $bizandbreakfast)
    {
        //
        $request->validate([    
            'profile_video' => 'required',
            'profile_pic' => 'required',
            'profile_name' => 'required',
            'profile_job' => 'required',
            'profile_ws' => 'required',
            'profile_about' => 'required',
            'profile_phonenumber' => ['required', 'integer'],
            'profile_email' => 'required',
            'profile_client_img1' => 'required',
            'profile_client_img2' => 'required',
            'profile_client_img3' => 'required',
            'profile_client_img4' => 'required',
            'profile_smlink1' => 'required',
            'profile_smlink2' => 'required',
            'profile_smlink3' => 'required',
            'profile_smlink4' => 'required',
        ]);
        //
        

        $bizandbreakfast->profile_video = strip_tags($request->input('profile_video'));
        $bizandbreakfast->profile_pic = strip_tags($request->input('profile_pic'));
        $bizandbreakfast->profile_name = strip_tags($request->input('profile_name'));
        $bizandbreakfast->profile_job = strip_tags($request->input('profile_job'));
        $bizandbreakfast->profile_ws = strip_tags($request->input('profile_ws'));
        $bizandbreakfast->profile_about = strip_tags($request->input('profile_about'));
        $bizandbreakfast->profile_phonenumber = strip_tags($request->input('profile_phonenumber'));
        $bizandbreakfast->profile_email = strip_tags($request->input('profile_email'));
        $bizandbreakfast->profile_client_img1 = strip_tags($request->input('profile_client_img1'));
        $bizandbreakfast->profile_client_img2 = strip_tags($request->input('profile_client_img2'));
        $bizandbreakfast->profile_client_img3 = strip_tags($request->input('profile_client_img3'));
        $bizandbreakfast->profile_client_img4 = strip_tags($request->input('profile_client_img4'));
        $bizandbreakfast->profile_smlink1 = strip_tags($request->input('profile_smlink1'));
        $bizandbreakfast->profile_smlink2 = strip_tags($request->input('profile_smlink2'));
        $bizandbreakfast->profile_smlink3 = strip_tags($request->input('profile_smlink3'));
        $bizandbreakfast->profile_smlink4 = strip_tags($request->input('profile_smlink4'));

        $bizandbreakfast->save();

        return redirect()->route('bizandbreakfast.show', $bizandbreakfast->id);
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
