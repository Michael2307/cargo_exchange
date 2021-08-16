<?php

namespace App\Http\Controllers\Goods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GoodsController extends Controller
{
    /**
     * Show all the goods.
     *
     *
     * @return View
     */
    public function goodsIndex(): View
    {
        return view('freight _exchange');
    }


}
