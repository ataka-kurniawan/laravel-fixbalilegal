<?php 
namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\AuthRepository;

class AuthService
{
    protected $authRepo;

    public function __construct(AuthRepository $authRepo)
    {
        $this->authRepo = $authRepo;
    }

    public function login(array $credentials): bool
    {
        $user = $this->authRepo->findByEmail($credentials['email']);

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return true;
        }

        return false;
    }
}
