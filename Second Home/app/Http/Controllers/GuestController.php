<?php

namespace App\Http\Controllers;


use App\Homestay;
use App\Foto;
use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if($request->has('cari')){
        $homestay = DB::table('homestay')
                    ->join('foto', 'homestay.nama_homestay','=','foto.nama_homestay')
                    ->select('homestay.*','foto.path')
                    ->where('homestay.kabupaten','LIKE','%'.$request->cari.'%')
                    ->orderBy('homestay.id','desc')->paginate(6);
      }else{
        $homestay = DB::table('homestay')
        ->join('foto', 'homestay.nama_homestay','=','foto.nama_homestay')
        ->select('homestay.*','foto.path')
        ->orderBy('homestay.id','desc')->paginate(6);
      }
        //$homestay = Homestay::orderBy('created_at','desc')->paginate(9);
        return view('guest.utama', ['homestay' => $homestay]);
        //dd($homestay);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = Booking::orderBy('created_at','desc')
                    ->where('id_pembooking', Auth::user()->id)
                    ->paginate(5);
        return view('guest.history',['store'=>$store]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $show = DB::table('homestay')
                    ->join('foto', 'homestay.nama_homestay','=','foto.nama_homestay')
                    ->select('homestay.*','foto.path')->where('homestay.id',$id)
                    ->get();
        return view('guest.book', ['show' => $show]);
        //dd($show);
    }

    public function upload(Request $request , $nama)
    {

      $request -> validate([
        'check_in' => ['required', 'date'],
        'check_out' => ['required', 'date']
      ]);

      Booking::create([
        'nama_homestay' => $nama,
        'id_pembooking' => Auth::user()->id,
        'check_in' => $request->check_in,
        'check_out' => $request->check_out

      ]);
      //dd($request);
      return redirect('/guest/history')->with('status','Data Berhasil ditambah!');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        //
    }

    public function delete($id)
    {
      $delet = Booking::find($id);
       $delet->delete($delet);
       return redirect('/guest/history');
      //dd($delet);
    }

    public function konfirmasi()
    {
      return view('guest.konfirmasi');
    }
}
