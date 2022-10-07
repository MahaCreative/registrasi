<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Exception;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $profile = Profile::create([
            'nip' => $request->nip,
            'nim' => $request->nim,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'ttl' => $request->ttl,
            'telp' => $request->telp,
            // 'avatar' => $urlFoto,
            'fakultas_id' => $request->fakultas_id,
            'prodi_id' => $request->prodi_id,
            'user_id' => 2
        ]);
        return response()->json($profile);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        // $request->validate([
        //     // 'nim' => 'unique:profiles,nim,' . $profile->id,
        //     'nip' => 'unique:profiles,nip,' . $profile->id,
        //     'nama_lengkap' => 'min:6',
        //     'ttl' => 'date|before:now'

        // ]);

        // try {
        //     // if ($request->hasFile('avatar')) {
        //     //     $file = $request->file('avatar');
        //     //     $name = $file->getClientOriginalName();
        //     //     $file->move("image/profile/avatar/", $name);
        //     //     $urlFoto = "image/profile/avatar/" . $name;
        //     // }


        // } catch (Exception $e) {
        //     $response['kode'] = 500;
        //     $response['message'] = 'Err';
        //     $response['errors'] = $e->getMessage();
        // }
        $response = [];
        $urlFoto = '';
        $profile->update([
            'nip' => $request->nip,
            'nim' => $request->nim,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'ttl' => $request->ttl,
            'telp' => $request->telp,
            // 'avatar' => $urlFoto,
            'fakultas_id' => $request->fakultas_id,
            'prodi_id' => $request->prodi_id,
        ]);
        $response['kode'] = 200;
        $response['message'] = 'berhasil';

        $response['data'] = $profile;

        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}