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

Route::get('/', function () {
    return view('welcome');
});
//
Route::get('standbk', function(){
    // return view('standbk.index')->with('user', '兰纯钰');
    // return view('standbk.index')->withUser('兰纯钰')->withMail('ny_lanchunyu@163.com');
    $userinfo = ['mail'=>'ny_lanchunyu@163.com', 'user'=>'兰纯钰'];
    // return view('standbk.index', $userinfo);
    //传递子视图到视图上 nest('名称'，'位置')
    //传递数据给子视图：将数据变量放到子视图操作的第三个参数上
    $data_block = ['block_title'=>'字视图数据测试'];
    return view('standbk.index', $userinfo)->nest('boxoffice', 'standbk.block.boxoffice', $data_block);
});
Route::post('standbk', function(){
    return '更新信息...';
});
Route::get('standbk/{standbk_id}', function($standbk_id){

    return '访问台帐的id：' . $standbk_id;
})
->where('standbk_id', '[0-9|a-zA-Z]+');
