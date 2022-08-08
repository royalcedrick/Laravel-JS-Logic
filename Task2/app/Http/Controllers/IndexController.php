<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use GuzzleHttp\Client;
use Illuminate\Routing\Redirector;
use GuzzleHttp\RequestOptions;
use Auth;

class IndexController extends Controller
{
    /**
     * Return list of users
     */
    const GET_USER_LIST_API = 'https://jsonplaceholder.typicode.com/users';

    /**
     * Request method get
     */
    const GET_METHOD = 'Get';

    /**
     * default username for login
     */
    const DEFAULT_USERNAME = 'testuser';

    /**
     * default password for login
     */
    const DEFAULT_PASSWORD = 'password';

    /**
     * Return login page
     * [Type] View Request
     * @return View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Return users list view
     * [Type] View Request
     * @return View
     */
    public function userList()
    {
        $requestClient = new Client([RequestOptions::VERIFY => false]);
        $aRequestResponse = $requestClient->request(self::GET_METHOD, self::GET_USER_LIST_API);
        $aDecodedResponse = json_decode($aRequestResponse->getBody()->getContents(), true);
        return view('user', ['users' => $aDecodedResponse]);
    }

    /**
     * Process login request
     * [Type] API: POST Request
     * @param LoginRequest $request
     * @return Redirector|RedirectResponse
     */
    public function login(LoginRequest $request)
    {
        $requestUsername = $request->username;
        $requestPassword = $request->password;
        if ($requestUsername === self::DEFAULT_USERNAME && $requestPassword === self::DEFAULT_PASSWORD) {
            return redirect('/user');
        }
        return redirect()->back();
    }
}
