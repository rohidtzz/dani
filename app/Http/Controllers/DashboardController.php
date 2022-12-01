<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orang;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard.index',);
    }

    // public function member()
    // {
    //     $id = Auth()->user()->id;

    //     $all = Member::where('user_id',$id)->get();
    //     return view('dashboard.member',compact('all'));
    // }

    public function orang()
    {
        // $id = Auth()->user()->id;

        // $all = User::withCount('mema')->where('status','ikut')->paginate(15);
        // $all = User::withCount('mema')->paginate(15);
        // $total = Member::all()->count();
        // dd($total);
        $data = Orang::all();
        // dd($all);
        return view('dashboard.sezione',compact('data'));
    }
}
