<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Blog extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = array(
            'title' => 'Basicamente um Blog',
            'subTitle' => ';)',
            'img' => 'img/wesley.jpeg'
        );
        return view('blog.index', $data);
    }
}
