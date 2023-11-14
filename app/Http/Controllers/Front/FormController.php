<?php

namespace App\Http\Controllers\Front;

use App\Helpers\SendMessageTelegram;
use App\Http\Controllers\Controller;
use App\Mail\CallBackMail;
use App\Mail\CardMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{

    public function __construct()
    {
        $botApiToken = config('telegram.token');
        $chatId = config('telegram.chatID');

        $this->sendTelegram = new SendMessageTelegram($botApiToken, $chatId);

    }

    public function sendFormCard(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'phone' => 'required',
                'comment' => 'nullable',
                'card' => 'required',
            ]
        );

        $this->sendTelegram->send($this->array($data));

        Mail::to('stelaj135@gmail.com')->send(new CardMail($data));

        return redirect()->route('front.success');
    }

    public function callback(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'phone' => 'required',
                'comment' => 'nullable',
                'service' => 'required',
            ]
        );


        $this->sendTelegram->send($this->arrayCallback($data));

        Mail::to('stelaj135@gmail.com')->send(new CallBackMail($data));

        return redirect()->route('front.success-callback');
    }

    private function array($data)
    {
        return [
            '*********************************',
            '<b>' . 'СТЕЛАЖ' . '</b>',
            '<b>' . 'Имя: ' . '</b>' . $data['name'],
            '<b>' . 'Телефон: ' . '</b>' . $this->regular($data),
            '<b>' . 'Коммент: ' . '</b>' . $data['comment'],
            '<b>' . 'Товар: ' . '</b>' . $data['card']
        ];
    }

    private function arrayCallback($data)
    {
        return [
            '*********************************',
            '<b>' . 'СТЕЛАЖ обратный звнок' . '</b>',
            '<b>' . 'Имя: ' . '</b>' . $data['name'],
            '<b>' . 'Телефон: ' . '</b>' . $this->regular($data),
            '<b>' . 'Коммент: ' . '</b>' . $data['comment'],
            '<b>' . 'Услуга: ' . '</b>' . $data['service']
        ];
    }

    private function regular($data)
    {
        $phoneNumber = preg_replace('/\D/', '', $data['phone']);
        return ltrim($phoneNumber, '38');
    }

    public function popupSuccess()
    {
        return view('front.success');
    }

    public function popupSuccessCallback()
    {
        return view('front.success-callback');
    }


}
