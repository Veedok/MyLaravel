<?php
declare(strict_types = 1);
namespace App\Services;

use App\Contracts\Social;
use App\Models\User as ModelsUser;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Contracts\User;

class SocialService implements Social {
    public function setUser(User $socialUser, string $network): string {
        $user = ModelsUser::query()->where('email', $socialUser->getEmail())->first();
        if($user) {
            $user->name = $socialUser->getName();
            $user->avatar = $socialUser->getAvatar();
            if ($user->save()) {
                Auth::loginUsingId($user->id);
                return route('admin.user.index');
            }
        } else {
            session(['newuser' => $socialUser]);
            return route('register');
        }
        throw new Exception('We get error social network'. $network);
    }

}
