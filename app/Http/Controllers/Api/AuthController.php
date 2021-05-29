<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\Api\Auth\CreateUserJob;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\SignUpRequest;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends Controller 
{
    public function SignUp(SignUpRequest $request)
    {
      $createdUser =  $this->dispatchNow(new CreateUserJob($request->validated()));

      $loggedUser = $this->loggedUser($createdUser);

      $trans = trans('api.registration_successfully');

      return $this->generalResponse(true,201,$trans,[],$loggedUser);
    }

    public function login(LoginRequest $request)
    {
        if( Auth::attempt(['email'=>$request->email, 'password'=>$request->password]) ) {
           
            $loggedUser = $this->loggedUser(Auth::user());

            $trans = trans('api.login_successfully');

            return $this->generalResponse(true,200,$trans,[],$loggedUser);
        }else 
        {
          $trans = trans('api.user_credentials_were_incorrect');

          return $this->generalResponse(true,401,$trans,[],[]);
        }
    }
    
    public function logout(Request $request)
    {
      $user =  auth('api')->user();
      
      if($user)
      {
        $user->token()->revoke();
      
        $trans = trans('api.logout_successfully');
            
        return $this->generalResponse(true,200,$trans,[], []);
      }
      $trans = trans('api.Something_went_wrong');
      
      return $this->generalResponse(true,409,$trans,[], []);
    }

    public function loggedUser($user)
    {
      $user['id'] = $user->id; 

      $user['name'] = $user->name;
      
      $user['email'] = $user->email;

      $user['access_token'] =  $user->createToken('token')->accessToken;
 
      return $user; 
    }

}
 
