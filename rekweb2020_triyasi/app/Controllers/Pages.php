<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Triyasi '
        ];
        return view('pages/home', $data);
    }

    public function pesan()
    {
        $data = [
            'title' => 'Pesan'
        ];
        return view('pages/pesan', $data);
    }

    //--------------------------------------------------------------------

}
