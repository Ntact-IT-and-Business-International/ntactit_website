<?php
namespace App\Policies;

use App\Models\User;
use Modules\BusinessDevelopment\App\Models\Client;

class ClientPolicy
{
    public function create(User $user)
    {
        // Define who can create clients
        return $user->role === 'admin' || $user->role === 'director';
    }

    public function update(User $user, Client $client)
    {
        // Define who can update clients
        return $user->role === 'admin' || $user->role === 'director';
    }

    public function delete(User $user, Client $client)
    {
        // Define who can delete clients
        return $user->role === 'admin';
    }
}
