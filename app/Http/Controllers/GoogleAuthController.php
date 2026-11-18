<?php
// Disabled until backend work starts.

// namespace App\Http\Controllers;

// use App\Services\FirebaseAuthService;
// use Illuminate\Http\Client\Request;

// class GoogleAuthController extends Controller
// {
//    public function __construct(private readonly FirebaseAuthService $firebaseAuthService)
//    {
//    }
//    public function signInwithGoogleAuth(Request $request)
//    {
//     $token = $request->input("token");
//     $user = $this->firebaseAuthService->getUserFromFirebaseToken($token);
//     $token = $user->createToken(name:'Access token')->plainTextToken;
//     return response()->json([
//         'access_token' => $token,
//     ]);


//    }
// }
