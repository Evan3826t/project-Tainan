<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    /**
     * 作品總覽
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolio()
    {
        return view('portfolio');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        $showContent =[
            1 => [
                    'count' => 4,
                    'text' => ['台南市中西區 ‧ 水療美容中心', '桑拿間及淋浴間翻修裝潢，光線充足、品質優良且一致！']
                ],
            2 =>[
                     'count' => 6,
                     'text' => ['台南市永康區 ‧ 浴室翻新', '挑選自己喜愛的壁磚及木工，讓老屋裡陳舊的浴室、廁所煥然一新，提高生活品質的水平，即便使用起來只是短暫的時間，也要讓生活的每一分、每一秒感受到舒適、愉悅。']
                 ],
            3 => [
                    'count' => 10,
                    'text' => ['台南市南區 ‧ 老宅翻新', '小家庭新入住，三十年老宅整棟翻新，廚房壁磚貼合考驗師傅技術，陽台花磚、浴室壁磚及地磚、廚房櫥具，由我們與屋主一同精心挑選、商量，完工後的成品在燈光的照映之下，一角一隅的角落盡能展現出居住的精緻、歡心以及舒適。']
                ]
        ];

        return view('show', ["show" => $id, 'showContent' => $showContent[$id], 'count' => $showContent[$id]['count']]);
    }
}
