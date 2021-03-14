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
//LP獲得用
Route::get('live1', function () {
    return view('yt.check'); //仮LP
    // return view('yt.line'); //獲得用 - LINE
    
    // return redirect('https://a-trade.jp/redirect/mocom-mail?media=G16531'); //モコム(メアド) - Aトレード
});

//OS識別→案件遷移 - LINE友達追加
Route::get('os', 'AdController@os');

//LP確認用
Route::get('cccheck', function () {
    return view('yt.line'); //獲得用 - LINE
    
    // return redirect('https://a-trade.jp/redirect/mocom-mail?media=G16531'); //モコム(メアド) - Aトレード
});
