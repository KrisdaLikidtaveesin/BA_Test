<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Todash implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        // if user not logged in
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        // Do something 
    }
}