<?php

namespace App\Http\Controllers\Admin;

use App\Model\Comment;
use App\Model\Post;
use App\Model\TestUser;
use App\Model\Video;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ApiTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $filesPaths = storage_path('app//city');
        foreach (glob($filesPaths.'/*json') as $file) {
            dump("文件名称:".$file);
            $contents = file_get_contents($file);
            dump("准备入库 内容 :".$contents);
            $parentCode = basename($file, '.json');
            $datas = json_decode($contents);
            if (empty($datas) || count($datas) < 1) {
                continue;
            }
            $temp = [];
            foreach ($datas as $key => $data) {
                $temp[] = [
                    'node_code'        => $key,
                    'node_name'        => $data,
                    'parent_node_code' => $parentCode,
                    'node_isuse'       => 1,
                    'updated_at'       => date('Y-m-d H:i:s', time()),
                    'created_at'       => date('Y-m-d H:i:s', time()),
                ];
            }
            dump("开始入库");
            //开启事务
            DB::beginTransaction();
            try {
                DB::table('sync_new_code_library')->insert($temp);
                DB::commit();
            } catch (\Exception $exception) {
                dump("文件名称 -- ".$parentCode.$exception->getMessage());
                DB::rollBack();
                break;
            }
            dump("结束入库");
        }
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
        //
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

    public function testModel()
    {
        dump('OKO');

        // $res = User::find(1);

        // dump($res->phone);

        // $roles = $res->roles;
        // dump($roles);
        // foreach ($roles as $role) {
        //     dump($role->pivot->user_id);
        // }


        // $comment = Comment::find(1);

        // $commentable = $comment->commentable;

        // dump($commentable);

        // $post = Post::find(1);

        // foreach ($post->comments as $comment) {
            //
            // dump($comment);
        // }

        // foreach ($post->tags as $tag) {
            //
            // dump($tag);
        // }


        $comment = new Comment(['context' => '一条新的评论。']);
        $post = Post::find(2);
        $post->comments()->save($comment);
        $comment = new Comment(['context' => '一条新的评论123123。']);
        $video = Video::find(1);
        $video->comments()->save($comment);
        $post = Post::find(1);
        $post->comments()->saveMany([
            new Comment(['context' => '111111111一条新的评论。']),
            new Comment(['context' => '111111另一条评论。']),
        ]);
    }
}
