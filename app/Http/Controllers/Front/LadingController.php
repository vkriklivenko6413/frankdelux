<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Block\BlockFour;
use App\Models\Block\BlockOne;
use App\Models\Block\BlockThree;
use App\Models\Block\BlockTwo;
use App\Models\Card;
use App\Models\Review;
use App\Models\Seo\SeoContact;
use App\Models\Seo\SeoLading;
use App\Models\Setting;

class LadingController extends Controller
{
    public function index()
    {
        $cards = Card::query()->where('active','=',true)->orderBy('integer')->get();
        $seo = SeoLading::find(1);
        $blockOne = BlockOne::query()->first();
        $blockTwo = BlockTwo::query()->first();
        $blockThree = BlockThree::query()->first();
        $blockFour = BlockFour::query()->first();
        $reviews = Review::query()->get();

        return view('front.index', compact('cards', 'seo', 'blockOne', 'blockTwo', 'blockThree', 'blockFour', 'reviews'));
    }

    public function show($id)
    {
        $card = Card::query()->where('id', '=', $id)->firstOrFail();

        return view('front.product.show', compact('card'));
    }


    public function contact()
    {
        $seo = SeoContact::find(1);

        $setting = Setting::find(1);

        return view('front.contact', compact('seo','setting'));
    }


}
