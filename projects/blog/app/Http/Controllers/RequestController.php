<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// use App\Http\Requests;
// use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function index()
    {
        $postUrl = 'fileupload';
        $csrf_field = csrf_field();
        $html = <<<CREATE
    <form action="$postUrl" method="post" enctype="multipart/form-data">
    $csrf_field
    <input type="file" name="file"><br/><br/>
    <input type="submit" value="提交"> 
    </form>
CREATE;
         return $html;    
    }
    public function postFileupload(Request $request)
    {
        if(!$request->hasFile('file')){
            exit('上传文件为空！');
        }
        $file = $request->file('file');
        if(!$file->isValid()){
            exit('文件上传错误！');
        }
        $destPath = realpath(public_path('images'));
        if(!file_exists($destPath))
             mkdir($destPath,0755,true);
        $filename = $file->getClientOriginalName();
        if(!$file->move($destPath,$filename)){
            exit('保存文件失败！');
        }     
        exit('文件上传成功！');
    }
}
