<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Contracts\Social;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect(string $network)
    {
        return Socialite::driver($network)->redirect();
    }
    public function callback(string $network, Social $srvice)
    {
        return redirect( $srvice->setUser(Socialite::driver($network)->user(), $network));
    }
}
