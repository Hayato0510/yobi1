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
// //LP獲得用
// Route::get('live1', function () {
//     return view('yt.check'); //仮LP
//     //リダイレクトLPへ切り替え - cccheckを変更
    
//     // return redirect('https://a-trade.jp/redirect/mocom-mail?media=G16531'); //モコム(メアド) - Aトレード
// });

//OS識別→案件遷移 - LINE友達追加
Route::get('live1', 'AdController@os');

// //LP確認用
// Route::get('cccheck', function () {
//     return redirect('https://a-trade.jp/redirect/mocom-mail?media=G16531'); //モコム(メアド) - Aトレード
// });
