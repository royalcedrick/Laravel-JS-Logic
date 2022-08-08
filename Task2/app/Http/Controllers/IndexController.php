<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Auth;

class IndexController extends Controller
{
    /**
     * login user function
     * @param LoginRequest $request
     */
    public function login(LoginRequest $request)
    {
        $requestUsername = $request->username;
        $requestPassword = $request->password;
        if ($requestUsername === 'testuser' && $requestPassword === 'password') {
            return redirect('admin/dashboard');
        }
        return redirect()->back();
    }

    /**
     * Return homepage
     */
    public function index()
    {
        $requestClient = new Client([RequestOptions::VERIFY => false]);
        $aRequestResponse = $requestClient->request('Get', 'https://jsonplaceholder.typicode.com/users');
        $aDecodedResponse = json_decode($aRequestResponse->getBody()->getContents(), true);
        return view('welcome');
    }
}
