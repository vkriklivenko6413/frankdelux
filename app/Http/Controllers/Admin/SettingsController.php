<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
