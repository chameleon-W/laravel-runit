<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/29
 * Time: 15:16
 */

namespace ChameleonW\LaravelRunit\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class RunitController extends Controller
{
    public function index(){
        return view('runit::index');
    }

    public function store(Request $request){
        $namespace = $request->input('namespace');
        $className = $request->input('className');
        $action = $request->input('action');
        $param = $request->input('param');
        $class = ($className == "") ? $namespace : $namespace . "\\" . $className;
        $class = str_replace("/", "\\", $class);
        $object = new $class();
        $param = ($param == "") ?  [] : explode('|', $param);
        $data = call_user_func_array([$object, $action], $param);
        return (is_array($data)) ? json_encode($data) : dd($data);
    }
}