<?php

namespace App\Http\Controllers;

use App\Events\NewUserHasRegisteredEvent;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * @group Sanctum authentication and token handling
 *
 * Class UserController
 * @package App\Http\Controllers
 * @authenticated
 */
class UserController extends Controller
{

    /**
     * Attempt user login and issue token
     *
     * Provide valid authentication credentials
     * @param LoginUserRequest $request
     * @return JsonResponse
     */
    public function login(LoginUserRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'error' => 'Invalid credentials. Please check your credentials'
            ], 404);
        }

        // Create and issue token on successful authentication
        $token = $user->createToken('api-token')->plainTextToken;
        // Return response
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ], 201);
    }

    /**
     * Register new user
     *
     * Provide the required parameters to create a user account
     * @param RegisterUserRequest $request
     * @return JsonResponse
     */
    public function register(RegisterUserRequest $request)
    {
        // Generate email verify token and verify url
        $email_verify_token = md5($request->email . now());
        $url = isset($_SERVER['HTTPS']) ? 'https' : 'http' . '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '?vertokemail=' . $email_verify_token;
        // Prepare data to store
        $request_data = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email_verify_token' => $email_verify_token
        ];

        // New user login credentials
        $login_data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $create_user = User::create($request_data);
        if ($create_user) {
            //@TODO use this for email verification
            //Details for sending email verification link to user
            $userIsCreated = [
                'email' => $request->email,
                'url' => $url
            ];
            event(new NewUserHasRegisteredEvent($create_user));
            return $this->login(new LoginUserRequest($login_data));
        }
    }

    /**
     * Logout user
     *
     * Revoke user session access and authentication
     * @return JsonResponse
     */
    public function logout()
    {
        request()->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
