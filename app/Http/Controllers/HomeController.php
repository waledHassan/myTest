<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Clients;
use App\Models\countries;

use Hash;
class HomeController extends Controller
{
    public function redirect()
    {
        $clients = Clients::latest()->paginate(6);
        return view('admin.home', compact('clients'));
    }

    public function addClient()
    {
        $countries = Countries::all();
        return view('admin.addClient', compact('countries'));

    }

    public function uploadclient( Request $request)
    {
        $data = new Clients;
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->mobile = $request->mobile;
        $data->country_code = $request->country;
        $data->password = Hash::make($request->password);
        $data->save();
        return redirect()->back();            

    }


    public function search(Request $request)
    {
        $clients = clients::where('name_ar' , 'LIKE', "%$request->search%")->orwhere('name_en', 'like', "%$request->search%")->orwhere('mobile', 'like', "%$request->mobile%")->get();
        return view('admin.home', compact('clients'));
    }
}
