<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
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
        $bmi = new hitungBMI($request->beratbadan, $request->tinggibadan);
        $bmi->bmi();
        $umur = new Umur($request->tanggalLahir);
        $umur->hitungUmur();

        $data = [
            'bmi' => $bmi->bmi(),
            'umur' => $umur->hitungUmur()
        ];

        return view('admin.dashboard', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

//membuat class BMI

class hitungBMI
{

    public function __construct($berat, $tinggi)
    {
        $this->nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi / 100;
    }

    public function bmi()
    {
        return $bmi = $this->berat / ($this->tinggi * $this->tinggi);


        if ($bmi < 18.5) {
            return "Kurus";
        } elseif ($bmi <= 22.9) {
            return "Normal";
        } elseif ($bmi <= 29.9) {
            return "Gemuk";
        } elseif ($bmi >= 30) {
            return 'Obesitas';
        }
    }
}

class Umur
{
    public function __construct($tahunLahir)
    {
        $this->tahunLahir = $tahunLahir;
    }

    public function hitungUmur()
    {
        $today = date("Y-m-d");
        return $umur = date_diff(date_create($this->tahunLahir), date_create($today));

        if ($umur < 17) {
            return "Remaja";
        } elseif ($umur >= 17) {
            return "Dewasa";
        } else {
            return "";
        }
    }
}
class Konsultasi extends hitungBMI
{
    public function __construct()
    {
    }
}
