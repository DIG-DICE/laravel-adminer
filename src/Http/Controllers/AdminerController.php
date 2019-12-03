<?php

namespace Onecentlin\Adminer\Http\Controllers;

use Illuminate\Routing\Controller;

class AdminerController extends Controller
{
    protected $adminer;
    protected $version;

    public function __construct()
    {
        // add custom middleware to restrict access permission
        $this->middleware('adminer');

        // adminer version
        $this->version = '4.7.5';
        // default adminer
        $this->adminer = 'adminer-4.7.5.php';
    }

    public function index()
    {
        require(__DIR__.'/../../../resources/'.$this->adminer);
    }
}
