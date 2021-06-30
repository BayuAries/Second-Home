<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Homestay;
use App\User;
use App\Foto;
use App\Booking;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $homestay = Homestay::orderBy('created_at','desc')
                ->where('id_pemilik', Auth::user()->id )
                ->paginate(3);
      return view('owner.update', ['homestay' => $homestay]);
      //dd($homestay);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
      if($request->hasfile('image'))
      {
          $files = $request->file('image');
              foreach ($files as $file) {
                  $size = $file->getClientSize();
                  $newname = $file->getClientOriginalName();
                  $file->move(public_path().'/image/', $newname);
                  $path = "image/".$newname;

                  $names[] = $path;

                  Foto::create([
                    'nama_homestay'=>$request->nama_homestay,
                    'path'=>$path,
                    'size'=>$size
                  ]);

          }
      }

        $request -> validate([
          'nama_homestay' => ['required', 'string', 'max:255'],
          'no_hp' => ['required', 'string', 'min:12'],
          'alamat' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'harga' => ['required', 'string', 'max:255'],
          'kamar' => ['required', 'integer'],
          'kabupaten' => ['required', 'string', 'max:255'],
          'keterangan' => ['required']
        ]);

        Homestay::create([
          'nama_homestay' => $request->nama_homestay,
          'id_pemilik' => Auth::user()->id,
          'nama_pemilik' => Auth::user()->name,
          'no_hp' => $request->no_hp,
          'alamat' => $request->alamat,
          'email' => $request->email,
          'harga' => $request->harga,
          'kamar' => $request->kamar,
          'kabupaten' => $request->kabupaten,
          'keterangan' => $request->keterangan,
        ]);

        return redirect('/update')->with('status','Data Berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Homestay  $owner
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $show = User::all()
              ->where('id',Auth::user()->id);
      return view('owner.home',['show'=>$show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homestay  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $edit = Homestay::find($id);
      return view('owner.edit', ['edit' => $edit]);
      //dd($edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homestay  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Homestay::find($id);
        $update->update($request->all());
        return redirect('/update')->with('status','Data Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homestay  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homestay $homestay)
    {
        //
    }

    public function delete($id)
    {
      $delet = Homestay::find($id);
      $delet->delete($delet);
      return redirect('/update');
    }

    // public function book()
    // {
    //   $homestay = DB::table('homestay')
    //               ->select('nama_homestay')
    //               ->where('id_pemilik', Auth::user()->id)->get();
    //
    //  foreach ($homestay as $key) {
    //   $book = DB::table('booking')
    //           ->join($key, 'booking.nama_homestay','=',$key->nama_homestay)
    //           ->orderBy('created_at','desc')->get();
    //
    //   }
    //   dd($book);
    //   //return view('owner.book',['book'=>$book]);
    // }
}
