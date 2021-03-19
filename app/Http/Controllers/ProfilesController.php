<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;


class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user'=> $user,
            'tweets'=> $user->tweets()
                ->withLikes()
                ->paginate(10)
        ]);
    }

    public function edit(User $user)
    {

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = array_filter( //allow only updating non empty fields
            request()
            ->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'max:255','nullable'],
            'avatar'=>['file'],
            'description' => ['string', 'max:255'],
            'email' => ['string', 'required', 'max:255', 'email', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'max:255', 'min:8', 'confirmed', 'nullable']
        ]));

        if(request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);
        return redirect($user->path());
    }
}
