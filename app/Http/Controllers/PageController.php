<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orang;

use Validator;

class PageController extends Controller
{

    public function index()
    {
        $data = Orang::Paginate(15);
        return view('dashboard.pages',compact('data'));
    }

    public function show($slug)
    {

        $data = Orang::where('slug',$slug)->first();
        // dd($data);

        if(!$data){
            return redirect('/');
        }

        return view('index', compact('data')   );


    }

    public function create(Request $request)
    {

        $sezione = Orang::create([
            'name' => $request->name,
            'slug' => $request->slug
        ]);

        // dd($product);



        if(!$sezione){
            return redirect()->back()->withErrors('register failed');
        }

        return redirect()->back()->with(['success' => 'Registration Success']);


        // return redirect()->back();

    }

    public function update(Request $request)
    {

        Orang::where('id',$request->id)->update([
            'name' => $request->name,
            'slug' => $request->slug
        ]);


        return redirect()->back();
    }

    public function delete($id)
    {

        Orang::destroy($id);


        return redirect()->back();
    }
}
