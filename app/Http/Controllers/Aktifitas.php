<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\StoreAktifitasRequest;
use App\Models\Aktifitas as ModelsAktifitas;
use App\Models\GerakanM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Aktifitas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aktifitas = ModelsAktifitas::all();

        return view('pages.dashboard.Aktifitas.index', compact('aktifitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.dashboard.Aktifitas.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAktifitasRequest $request)
    {

        // Mulai transaksi database

        try {

            $semua = $request->all();
            // $request->validate([
            //     'nama' => 'required',
            //     'deskripsi' => 'required',
            //     'kalori' => 'required',
            //     'gerakan' => 'required|array',
            //     'gerakan.*' => 'required|string',
            //     'gambar' => 'nullable|image|max:2048'
            //     // Menambahkan validasi untuk role
            // ]);
            $aktifitas = ModelsAktifitas::create($semua);
            // $data = ModelsAktifitas::create([
            //     'nama' => $request->input['nama'],
            //     'deskripsi' => $request->input['deskripsi'],
            //     'kalori' => $request->input['deskripsi'],
            //     // 'gambar' => $request->input['gambar'],
            // ]);


            // Menangani pengunggahan file tunggal
            if ($request->hasFile('gambar')) {
                $request->file('gambar')->move('fotoAktifitas/', $request->file('gambar')->getClientOriginalName());
                $aktifitas->gambar = $request->file('gambar')->getClientOriginalName();
                $aktifitas->save();
                // $path = $file->store('assets/aktifitas/gambar', 'public');

                // $aktifitas_gambar = new Gambar();
                // $aktifitas_gambar->aktifitas_id = $aktifitas->id;
                // $aktifitas_gambar->gambar = $path;
                // $aktifitas_gambar->save();
            }

            foreach ($request->input('gerakan') as $key => $value) {
                $gerakan = new GerakanM;
                $gerakan->aktifitas_id = $aktifitas->id;
                $gerakan->nama = $value;
                $gerakan->save();
            }
            // foreach ($data['gerakan_aktifitas'] as $key => $value) {
            //     $gerakan = new Gerakans();
            //     $advantage_user = new Gerakan_Aktifitas();
            //     $advantage_user->aktifitas_id = $aktifitas->id;
            //     $advantage_user->gerakan_id = $gerakan->id;
            //     $advantage_user->nama = $value;
            //     $advantage_user->save();
            // }
            return redirect()->route('aktifitas')->with('success', 'Aktifitas berhasil dibuat');
        } catch (\Throwable $th) {

            Log::error('Error creating Aktifitas:', ['message' => $th->getMessage()]);
            return redirect()->route('aktifitas')->with('error', 'Terjadi kesalahan saat membuat Aktifitas');
        }
        // Membuat data aktifitas



        // try {
        //     // Validasi data
        //     $validatedData = $request->validate([
        //         'nama' => 'required|string|max:255',
        //         'deskripsi' => 'required|string',
        //         'gerakan' => 'required|array',
        //         'gerakan.*' => 'required|string',
        //         'image' => 'nullable|file|image|max:2048',
        //     ]);

        //     // Simpan Aktifitas
        //     $aktifitas = Aktifitas::create([
        //         'nama' => $validatedData['nama'],
        //         'deskripsi' => $validatedData['deskripsi'],
        //         'users_id' => auth()->id(),
        //     ]);

        //     // Simpan Gerakan
        //     $gerakanIds = [];
        //     foreach ($validatedData['gerakan'] as $gerakanName) {
        //         $gerakan = Gerakan::firstOrCreate(['nama' => $gerakanName]);
        //         $gerakanIds[] = $gerakan->id;
        //     }
        //     $aktifitas->gerakan()->attach($gerakanIds);

        //     // Simpan Gambar
        //     if ($request->hasFile('image')) {
        //         $path = $request->file('image')->store('images');
        //         $aktifitas->update(['image' => $path]);
        //     }

        //     return redirect()->route('aktifitas.index')->with('success', 'Aktifitas berhasil dibuat');
        // } catch (ValidationException $e) {
        //     return redirect()->back()->withErrors($e->validator)->withInput();
        // } catch (\Exception $e) {
        //     return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.')->withInput();
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
