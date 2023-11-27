<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function setting()
    {
        $setting = Setting::find(1);

        return view('admin.setting', compact('setting'));
    }

    public function update(Request $request)
    {
        $data = $request->validate(
            [
                'viber' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'instagram' => 'required'
            ]
        );

        Setting::find(1)->update($data);

        return redirect()->back()->with('success', 'Успешно обновлен');
    }


    public function menu()
    {
        $menu = Menu::find(1);

        return view('admin.menu', compact('menu'));
    }

    public function updateMenu(Request $request)
    {
        $data = $request->validate(
            [
                'menu_1_ru' => 'required',
                'menu_1_ro' => 'required',
                'menu_2_ru' => 'required',
                'menu_2_ro' => 'required',
                'menu_3_ru' => 'required',
                'menu_3_ro' => 'required',
                'menu_4_ru' => 'required',
                'menu_4_ro' => 'required',
                'menu_5_ru' => 'required',
                'menu_5_ro' => 'required',
                'menu_6_ru' => 'required',
                'menu_6_ro' => 'required',

            ]
        );

        $row = [
            'menu_1' => [
                'ru' => $data['menu_1_ru'],
                'ro' => $data['menu_1_ro'],
            ],
            'menu_2' => [
                'ru' => $data['menu_2_ru'],
                'ro' => $data['menu_2_ro'],
            ],
            'menu_3' => [
                'ru' => $data['menu_3_ru'],
                'ro' => $data['menu_3_ro'],
            ],
            'menu_4' => [
                'ru' => $data['menu_4_ru'],
                'ro' => $data['menu_4_ro'],
            ],
            'menu_5' => [
                'ru' => $data['menu_5_ru'],
                'ro' => $data['menu_5_ro'],
            ],
            'menu_6' => [
                'ru' => $data['menu_6_ru'],
                'ro' => $data['menu_6_ro'],
            ],
        ];

        Menu::find(1)->update($row);

        return redirect()->back()->with('success', 'Успешно обновлен');
    }
}
