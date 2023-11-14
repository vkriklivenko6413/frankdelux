<?php

namespace App\Http\Controllers\Admin\Seo;

use App\Http\Controllers\Controller;
use App\Models\Seo\SeoContact;
use App\Models\Seo\SeoLading;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function seoIndex()
    {
        $seo = SeoLading::query()->find(1);

        return view('admin.seo.lading', compact('seo'));
    }

    public function seoContact()
    {
        $seo = SeoContact::query()->find(1);

        return view('admin.seo.contact', compact('seo'));
    }

    public function updateSeoIndex(Request $request)
    {
        $data = $request->validate(
            [
                'seo_title_ru' => 'required',
                'seo_title_uk' => 'required',
                'seo_text_ru' => 'required',
                'seo_text_uk' => 'required',
                'seo_description_uk' => 'required',
                'seo_description_ru' => 'required',
            ]
        );



        $seo = SeoLading::query()->find(1);

        $data['seo_title'] = [
            'ru' => $data['seo_title_ru'],
            'uk' => $data['seo_title_uk']
        ];

        $data['seo_description'] = [
            'ru' => $data['seo_description_ru'],
            'uk' => $data['seo_description_uk']
        ];

        $data['seo_text'] = [
            'ru' => $data['seo_text_ru'],
            'uk' => $data['seo_text_uk']
        ];

        $seo->update($data);
        $seo->save();

        return redirect()->back()->with('success', 'Данные успешно обновлены');

    }


    public function updateSeoContact(Request $request)
    {
        $data = $request->validate(
            [
                'seo_title_ru' => 'required',
                'seo_title_uk' => 'required',
                'seo_text_ru' => 'required',
                'seo_text_uk' => 'required',
                'seo_description_uk' => 'required',
                'seo_description_ru' => 'required',
            ]
        );



        $seo = SeoContact::query()->find(1);

        $data['seo_title'] = [
            'ru' => $data['seo_title_ru'],
            'uk' => $data['seo_title_uk']
        ];

        $data['seo_description'] = [
            'ru' => $data['seo_description_ru'],
            'uk' => $data['seo_description_uk']
        ];

        $data['seo_text'] = [
            'ru' => $data['seo_text_ru'],
            'uk' => $data['seo_text_uk']
        ];

        $seo->update($data);
        $seo->save();

        return redirect()->back()->with('success', 'Данные успешно обновлены');

    }
}
