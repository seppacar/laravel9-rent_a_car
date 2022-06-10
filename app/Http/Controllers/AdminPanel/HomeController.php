<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;


class HomeController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
    // Setting page
    public function setting()
    {
        $data = Setting::first();
        if ($data == null) {
            $data = new Setting();
            $data->title = 'Project Title';
            $data->save();
        }
        return view('admin.setting', ['data' => $data]);
    }
    public function settingUpdate(Request $request){
        $data = Setting::first();
        
        if ($request->keywords){$data->keywords = $request->keywords;};
        if ($request->description){$data->description = $request->description;};
        if ($request->company){$data->company = $request->company;};
        if ($request->address){$data->address = $request->address;};
        if ($request->phone){$data->phone = $request->phone;};
        if ($request->fax){$data->fax = $request->fax;};
        if ($request->email){$data->email = $request->email;};
        if ($request->smtpserver){$data->smtpserver = $request->smtpserver;};
        if ($request->smtpemail){$data->smtpemail = $request->smtpemail;};
        if ($request->smtppassword){$data->smtppassword = $request->smtppassword;};
        if ($request->smtpport){$data->smtpport = $request->smtpport;};
        if ($request->facebook){$data->facebook = $request->facebook;};
        if ($request->instagram){$data->instagram = $request->instagram;};
        if ($request->twitter){$data->twitter = $request->twitter;};
        if ($request->youtube){$data->youtube = $request->youtube;};
        if ($request->aboutus){$data->aboutus = $request->aboutus;};
        if ($request->contact){$data->contact = $request->contact;};
        if ($request->references){$data->references = $request->references;};
        if ($request->file('icon')){
            $data->icon = $request->file('icon')->store('icon');
        };
        if ($request->status){$data->status = $request->status;};
        $data->save();
        return view('admin.setting', ['data' => $data]);
    }
}
