<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
         $myfile2 = asset('img/hoge.png');
       $encoded_data = base64_encode(file_get_contents($myfile2));
        return response()->json(
       ['main_image' => $encoded_data,
        'sub_images' => '$encoded_data',
        'comment' => '宜しくお願いいたします',
        'self_introduction' => 'ＳＥの仕事をしています',
        'application' => '1',
        'possible_meet' => '1',
        'possible_tel' => '1',
        'self_introduction_move' => 'wwwwwww',
        'id' => $user,
        'name' => 'Yohei', 
        'old' => '25',
        'Tel' => '000000000',
        'mail' => '@ezwe.ne.jp',
        'address' => '東京',
        'address_detail' => '池袋',
        'activity_location' => 'カフェ',
        'activity_location_detail' => 'スタバ',
        'job_name' => 'SE',
        'job_position' => 'マネジャー',
        'industry' => 'ＳＥ',
        'industry_details' => 'セキュリティ',
        'hope' => 'ｗｗｗｗｗｗ',
        'provide' => 'コーディング',
        'company_nam' => '梶嶋',
        'hp_url' => 'ｗｗｗｗｗｗｗｗ',
        'marriage' => 'してる',
        'children' => 'いる',
        'character' => 'どＳ',
        'alcohol' => '飲む',
        'cigar' => '吸う',
        'hope_meet' => 'すぐ会いたい',
        'paid_members' => '有料',
        'online' => 'オンライン',
        'registration' => '3',
        'last_login' => '25'        
       ],
        200,
       [],
            JSON_UNESCAPED_UNICODE
    );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
