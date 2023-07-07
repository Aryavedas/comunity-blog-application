<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // Satukan ketiga komponen tanggal
        $tanggal_lahir = $data["thn"] . str_pad($data["bln"], 2, 0, STR_PAD_LEFT) .
            str_pad($data["tgl"], 2, 0, STR_PAD_LEFT);
        // Input kedalam array $data agar $tanggal_lahir bisa ikut di validasi
        $data['tanggal_lahir'] = $tanggal_lahir;

        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nama' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => [
                'required', 'date', 'before:-10 years',
                'after:-100 years'
            ],
            'pekerjaan' => ['sometimes', 'nullable', 'string', 'max:255'],
            'kota' => ['sometimes', 'nullable', 'string', 'max:255'],
            'bio_profil'  => ['sometimes', 'nullable', 'string'],
            'gambar_profil'  => ['sometimes', 'file', 'image', 'max:2000'],
            'background_profil'  => ['required', 'integer', 'min:1', 'max:12'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // Satukan ketiga komponen tanggal
        $tanggal_lahir = $data["thn"] . str_pad($data["bln"], 2, 0, STR_PAD_LEFT) .
            str_pad($data["tgl"], 2, 0, STR_PAD_LEFT);

        // Ambil request object untuk proses upload file
        $request = request();

        // Proses upload file gambar profil
        if ($request->hasFile('gambar_profil')) {
            // gunakan slug helper agar "nama" bisa dipakai sebagai bagian
            // dari nama gambar_profil
            $slug = Str::slug($data['nama']);

            // Ambil extensi file asli
            $extFile = $request->gambar_profil->getClientOriginalExtension();

            // Generate nama gambar, gabungan dari slug "nama"+time()+extensi file
            $namaFile = $slug . '-' . time() . "." . $extFile;

            // Proses upload, simpan ke dalam folder "uploads"
            $request->gambar_profil->storeAs('public/uploads', $namaFile);
        } else {
            // jika user tidak mengupload gambar, isi dengan gambar default
            $namaFile = 'default_profile.jpg';
        }

        // input data ke database
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nama' => $data['nama'],
            'tanggal_lahir' => $tanggal_lahir,
            'pekerjaan' => $data['pekerjaan'],
            'kota' => $data['kota'],
            'bio_profil'  => $data['bio_profil'],
            'gambar_profil'  => $namaFile,
            'background_profil'  => $data['background_profil'],
        ]);
    }
}
