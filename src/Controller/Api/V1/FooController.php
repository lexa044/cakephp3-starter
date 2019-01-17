<?php
namespace App\Controller\Api\V1;

use RestApi\Controller\ApiController;

/**
 * Foo Controller
 */
class FooController extends ApiController
{

    /**
     * view method
     *
     */
    public function index()
    {
	    // your action logic

	    // Set the HTTP status code. By default, it is set to 200
	    $this->httpStatusCode = 200;

        // Set the response
        $this->apiResponse = 'Index';
    }

    /**
     * view method
     *
     */
    public function view($id = 0)
    {
	    // your action logic

	    // Set the HTTP status code. By default, it is set to 200
	    $this->httpStatusCode = 200;

        // Set the response
        $this->apiResponse = 'view v1 =>'.$id;
    }

    /**
     * bar method
     *
     */
    public function bar($id, $key = 0)
    {
	    // your action logic

	    // Set the HTTP status code. By default, it is set to 200
	    $this->httpStatusCode = 200;

        //$controller->jwtPayload = $payload;
        //$controller->jwtToken = $token;        
        // Set the response
        $this->jwtPayload->name = $this->jwtPayload->name.$id.'__'.$key;
        $this->apiResponse = $this->jwtPayload;
    }

        /**
     * error method
     *
     */
    public function error()
    {
        $throwException = true;

        if ($throwException) {
            throw new NotFoundException();
        }

        // your other logic will be here
        // and finally set your response
        // $this->apiResponse['you_response'] = 'your response data';
    }
}