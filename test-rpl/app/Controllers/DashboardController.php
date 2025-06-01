<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function __construct()
    {
        helper(['url']); // Load URL helper for base_url and site_url
    }

    public function pendaftaran()
    {
        $data = [
            'pageTitle' => 'Pendaftaran Mahasiswa RPL',
            // You can pass more data to the view if needed
        ];
        return view('dashboard/pendaftaran_view', $data);
    }

    // Placeholder methods for other sidebar links
    public function profil()
    {
        // return view('dashboard/profil_view');
        return "Halaman Profil (Placeholder) - <a href='" . site_url('dashboard/pendaftaran') . "'>Kembali ke Pendaftaran</a>";
    }

    public function ubahFoto()
    {
        // This might be part of the pendaftaran or profil view, or its own
        return "Halaman Ubah Foto (Placeholder) - <a href='" . site_url('dashboard/pendaftaran') . "'>Kembali ke Pendaftaran</a>";
    }

    public function jadwalKegiatan()
    {
        // return view('dashboard/jadwal_view');
        return "Halaman Jadwal Kegiatan (Placeholder) - <a href='" . site_url('dashboard/pendaftaran') . "'>Kembali ke Pendaftaran</a>";
    }

    public function pengaturan()
    {
        // return view('dashboard/pengaturan_view');
        return "Halaman Pengaturan (Placeholder) - <a href='" . site_url('dashboard/pendaftaran') . "'>Kembali ke Pendaftaran</a>";
    }
}