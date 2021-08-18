<?php

namespace App\Http\Controllers;

class CtTestController extends Controller
{
    public function index()
    {
        $item = [
            'content' => '建物です',
        ];
        return view('testct', $item);
    }
    public function number($room)
    {
        $item = [
            'content' => '部屋番号は'.$room.'です'
        ];
        return view('testct', $item);
    }
}