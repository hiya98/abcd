<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class post extends Controller
{
    /*
public function  show(post $Title)
{
    // $post=\DB::table('posts')->where('slug',$slug)->first();
    $post = post::where('Title', $Title)->firstOrFail();

    return view('post', [
        'post' => $post
    ]);
}
    public function post()
{
    return view('post.post');
}*/
    public function button(Request $request)
    {
        print_r($request->input);
        $post = new post;
        $post->Username = $request->input('Username');
        $post->Password = $request->input('Password');
        $data = array('Username' => $post->Username,'Password' =>$post->Password);
       DB::table('post')->insert($data);
    }


}
