<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class edit extends Controller
{
    //
    public function submit(Request $request)
    {
        print_r($request->input);
        $edit = new edit;
        $edit->Aname = $request->input('Aname');
        $edit->Data = $request->input('Data');

        // $post->Password = $request->input('Password');
        $data = array('Aname' => $edit->Aname,'Data' => $edit->Data);
        DB::table('forgot')->insert($data);
        if($data)
        {
            return redirect('/art');
        }
    }
}
