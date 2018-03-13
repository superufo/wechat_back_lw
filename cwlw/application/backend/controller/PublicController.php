<?php
namespace app\backend\controller;

use think\Controller;
use think\Request;

class PublicController extends Controller
{
    public function __construct(Request $request = null)
    {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct($request);
    }

    public function upload(){


    }

}
