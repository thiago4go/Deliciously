<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\AuthenticateUserRequest;
use App\Services\UserService;

class RecipeController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function createUser(CreateUserRequest $request)
    {
        return $this->userService->createUser($request);
    }

    public function authenticate(AuthenticateUserRequest $request)
    {
        return $this->userService->authenticate($request);
    }

    public function showAccount()
    {
        return $this->userService->getAuthenticatedUser();
    }

    public function updateAccount(Request $request)
    {
        return $this->userService->updateAccount($request);
    }
}
?>