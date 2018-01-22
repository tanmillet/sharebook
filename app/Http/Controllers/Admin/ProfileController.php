<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Requests\UpProfileValidator;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        if (is_null($user->profile)) {
            return redirect('/ad/append/profile');
        }

        return view('tan-admin.profile.index', compact('user'));
    }

    /**
     * @author Terry Lucas
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function append($id = null)
    {
        $profile = Profile::where('id', base64_decode($id))->first();
        $profile = (is_null($profile)) ? new Profile() : $profile;

        return view('tan-admin.profile.append', compact('profile'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //init validator class
        $validator = new UpProfileValidator();
        $inputs = $validator->setValidateParams($request->all())->valid();
        if (!empty($inputs->getValidatorResMsg())) {
            return back()->withErrors($inputs->getValidatorResMsg());
        }
        //insert db init
        $permission = [
            'user_id'        => Auth::id(),
            'phone'          => $validator->validateParams['phone'],
            'wechat'         => $validator->validateParams['wechat'],
            'qq'             => $validator->validateParams['qq'],
            'nike_name'      => $validator->validateParams['nike_name'],
            'job_title'      => $validator->validateParams['job_title'],
            'intro'          => $validator->validateParams['intro'],
            'gender'         => $validator->validateParams['gender'],
            'address_code'   => $validator->validateParams['address_code'],
            'detail_address' => $validator->validateParams['detail_address'],
        ];

        try {
            (isset($validator->validateParams['opid'])) ? Profile::updateOrCreate([
                'id' => base64_decode($validator->validateParams['opid']),
            ], $permission) : Profile::create($permission);
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

        return redirect('/ad/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     *
     */
    public function upUserPass()
    {
        return view('tan-admin.user.upuserpass');
    }
}
