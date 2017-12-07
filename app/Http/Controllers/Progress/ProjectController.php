<?php

namespace App\Http\Controllers\Progress;

use App\Http\Controllers\Progress\Requests\UpProjectValidator;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Null_;

class ProjectController extends ApiContr
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::all();

        return view('progress-app.projects', compact('projects'));
    }

    public function projectDetail()
    {
        return view('progress-app.project-detail');
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
        $validator = new UpProjectValidator();
        $inputs = $validator->setValidateParams($request->all())->valid();
        if (!empty($inputs->getValidatorResMsg())) {
            return ($request->ajax())
                ? $this->setStatusCode(400)->responseError($inputs->getValidatorResMsg())
                : back()->withErrors($inputs->getValidatorResMsg());
        }
        //insert db init
        $project = [
            'project_name'      => $validator->validateParams['name'],
            'project_tag'       => $validator->validateParams['tag'],
            'project_type'      => $validator->validateParams['type'],
            'project_status'    => $validator->validateParams['status'],
            'project_digest'    => $validator->validateParams['digest'],
            'project_context'   => $validator->validateParams['context'],
            'project_milestone' => $validator->validateParams['milestone'],
        ];

        //唯一标识
        $attributes = [
            'project_tag'       => $validator->validateParams['tag'],
        ];

        //add new role operate
        try {
            $res = Project::updateOrCreate($attributes, $project);
        } catch (\Exception $e) {
            return ($request->ajax()) ? $this->setStatusCode(500)->responseError($e->getMessage()) : back()->withErrors($e->getMessage());
        }

        return ($request->ajax()) ? $this->setStatusCode(200)->responseSuccess('操作成功！') : redirect('pro/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = NULL)
    {
        //
        // $project = (is_null($id)) ? new Role() : Role::where('id', base64_decode($id))->first();
        $project = "";

        return view('progress-app.uproject', compact('project'));
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
}
