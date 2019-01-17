<?php

namespace App\Controller;

use RestApi\Controller\ApiController;
use RestApi\Utility\JwtToken;

/**
 * Account Controller
 *
 */
class AccountController extends ApiController
{

    /**
     * Login method
     *
     * Returns a token on successful authentication
     *
     * @return void|\Cake\Network\Response
     */
    public function login()
    {
        $this->request->allowMethod('post');

        /**
         * process your data and validate it against database table
         */
        

	    // generate token if valid user
	    $payload = ['email' => 'someemail', 'name' => 'password'];

        $this->apiResponse['token'] = JwtToken::generateToken($payload);
        $this->apiResponse['message'] = 'Logged in successfully.';
    }
}