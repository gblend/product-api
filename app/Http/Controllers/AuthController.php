<?php

namespace App\Http\Controllers;

use App\Events\NewUserHasRegisteredEvent;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

/**
 * @group JWT authentication and token handling
 *
 * All jwt related authentication and authorization
 *
 * Class AuthController
 * @package App\Http\Controllers
 */
class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['jwt', 'auth:api'], ['except' => ['login', 'register', 'refresh']]);
    }

    /**
     * Get a JWT token via given credentials.
     *
     * @param LoginUserRequest $request
     *
     * @return JsonResponse
     */
    public function login(LoginUserRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if ($token = $this->guard()->attempt($credentials)) {
            return $this->respondWithToken($token);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    /**
     * Get the authenticated User
     *
     * @return JsonResponse
     */
    public function me()
    {
        return response()->json($this->guard()->user());
    }

    /**
     * Log the user out (Invalidate the token)
     *
     * @return JsonResponse
     * @authenticated
     */
    public function logout()
    {
        $this->guard()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return JsonResponse
     * @authenticated
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * 60
        ]);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return Guard
     */
    public function guard()
    {
        return Auth::guard();
    }


    /**
     * Register a new user
     * @param RegisterUserRequest $request
     * @return JsonResponse
     */

    public function register(RegisterUserRequest $request)
    {
        // Prepare data to store
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ];

        $login_data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $create_user = User::create($data);
        if ($create_user) {
            event(new NewUserHasRegisteredEvent($create_user));
            return $this->login(new LoginUserRequest($login_data));
        }
    }

}
