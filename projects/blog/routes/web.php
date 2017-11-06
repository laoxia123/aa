<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Route::get('login','LoginController@index');
// use Illuminate\Http\Response;

// Route::get('testViewHello',function(){
//     return view('hello');
// });

// Route::get('testViewHome',function(){
//     return view('home');
// });
// Route::resource('test','TestController');
// Route::get('name/{name}/age/{age}',function($name,$age){
//     return 'I`m '.$name.' ,and I`m '.$age;
// })->where(['name'=>'[A-Za-z]+','age'=>'[0-9]+']);
// Route::get('/',function () {
//     return 'hello';
// });

// namespace App\Http\Controllers;
Route::get('/test',function() {
    return 'world';
});
Route::get('/',function () {
    return 'aaaa';
});
Route::get('login','LoginController@index');

Route::get('articles','ArticlesController@index');

Route::get('hello',function () {
    return 'Hello,Welcome to LaravelAcademy.org';
});

/**
 * 将用户传过来的openid保存到数据库中
 * 
 */
// Route::group(['prefix'=>'v1'],function(){
//     Route::match(['get','post'],'getopenid',function(){
//         class GoidController extends Controller{
//             public function (Request $request) {
//                 $openid = $request->input('openid');
//                 if(isset($openid)){
//                     return $request->json(['result'=>'success','msg'=>'1001:微信认证成功','data'=>$openid]);
//                 }else{
//                     return $request->json(['result'=>'error','msg'=>'1002:微信认证失败']);
//                 }
//             }
//         }
//     });
// });
// Route::match(['get','post'],'getopenid',function () {
//     class GoidController extends Controller{
//          public function(Request $request){
//              $openid=$request->input('openid');
//              if(isset($openid)){
//                  return $request->json(['result'=>'success','msg'=>'1001:微信认证成功','data'=>$openid]);
//              }else{
//                 return $request->json(['result'=>'error','msg'=>'1002:微信认证失败']);
//              }
//          }
//     }
// });

