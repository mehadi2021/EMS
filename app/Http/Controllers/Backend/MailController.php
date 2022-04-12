<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Email;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function email()
    {
        return view('admin.layout.email');
    }

    public function  email_store (Request $request)
    {
        $filename = "";
                    if($request->hasFile('members_image'))
                    {
                        $file= $request->file('members_image');
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads', $filename);
                    }

                 Email::create([
            'user_id'=>$request->user_id,
            'dob'=>$request->dob,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'voter_id'=>$request->voter_id,
            'phon_no'=>$request->phon_no,
            'account_no'=>$request->account_no,
            'branch'=>$request->branch,
            'image'=>$filename
        ]);

    }



}
