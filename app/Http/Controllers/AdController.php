<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=21249'); //SecretChat友達直追加 - fam
            return redirect('https://a-trade.jp/redirect/ikukuru?media=G16531'); //イククル - Aトレード
        }
        return redirect('https://a-trade.jp/redirect/ikukuru?media=G16531'); //イククル - Aトレード
    }
}
