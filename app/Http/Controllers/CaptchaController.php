<?php

namespace App\Http\Controllers;

use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CaptchaController extends Controller
{
    public function getCaptchaImage(): Response
    {
        $builder = new CaptchaBuilder;
        $builder->build();

        session(['captcha_phrase' => $builder->getPhrase()]);

        return response($builder->output())->header('Content-Type', 'image/jpeg');
    }
}
