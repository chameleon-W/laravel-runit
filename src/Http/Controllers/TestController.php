<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/29
 * Time: 15:16
 */

namespace ChameleonW\LaravelRunit\Http\Controllers;

use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index(){
        return "<span>基于laravel组件化开发的unit单元测试组件——测试方法Test.index</span>";
    }
}