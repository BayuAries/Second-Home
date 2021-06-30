<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Homestay;
use App\User;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $homestay = DB::table('homestay')->get();
        $homestay = Homestay::orderBy('created_at','desc')
                  ->paginate(5);
        return view('admin.index', ['homestay' => $homestay]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $show = User::all()
                ->where('id', Auth::user()->id);
        return view('admin.admin', ['show' => $show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $edit = Homestay::find($id);
       return view('admin.edit', ['edit' => $edit]);
       //dd($edit);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
     {
         $update = Homestay::find($id);
         $update->update($request->all());
         return redirect('/table')->with('status','Data Berhasil diupdate!');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }

    public function delete($id)
    {
      $delet = Homestay::find($id);
      $delet->delete($delet);
      return redirect('/table');
    }
}
