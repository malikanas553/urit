<?php
// Disabled until backend work starts.

// namespace App\Services;

// use App\Models\User;
// use Google\Cloud\Core\Exception\BadRequestException;
// use Kreait\Firebase\Contract\Auth;
// use Lcobucci\JWT\UnencryptedToken;
// use Ramsey\Uuid\Type\Time;

// class FirebaseAuthService
// {
//    private Auth $auth;

//    public function __construct(Auth $auth)
//    {
//     $this->auth = $auth;
//    }

//    public function getUserFromFirebaseToken(string $firebaseIdToken)
//    {
//            try {

//               /**
//                * @var UnencryptedToken $verifiedIdToken
//                */

//               $verifiedIdToken = $this->auth->verifyIdToken($firebaseIdToken);
//               $userFirebaseId = $verifiedIdToken->claims()->get(name:'sub');
//               $firebaseUserProfile = $this->auth->getUser($userFirebaseId);
//               $email = $firebaseUserProfile->email;

//               /** @var User $user */

//               $user = null;
//               if($email) {
//                 $user= User::query()->where(column:'email',$email)->first();
//               }else
//               {
//                 throw new BadRequestException(message: "The token is invalid");
//               }

//               if (!$user)
//                 {
//                   $user = new User
//                   $userData = [
//                     'email' => $email,
//                     'name' => $firebaseUserProfile->displayName,
//                     'password' => Str::random(length:40) //make password nullable
//                     'email_verified_at' => now().
//                   ];
//                   $user->fill($userData);
//                   $user->save();
//                 }

//              return $user;


//            }catch (FailedToVerifyToken $exception){
//             Log::error($exception->getMessage());
//             throw new BadRequestException(message:"The token is invalid");
//            }catch (\Exception $exception){
//             Log::error($exception->getMessage());
//             throw new BadRequestException(message:"The token in invalid, please try again later")
//            }
//    }
// }
