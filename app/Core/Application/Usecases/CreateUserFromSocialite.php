<?php

namespace App\Core\Application\Usecases;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CreateUserFromSocialite
{
    public function execute($data)
    {
        $user = User::where('email', $data->email)->first();

        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }

        Auth::login($user);
    }
}
