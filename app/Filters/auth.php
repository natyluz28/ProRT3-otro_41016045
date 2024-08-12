<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    /**
     * Runs before the request is processed.
     *
     * @param RequestInterface $request
     * @param mixed $arguments
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            // Redirect to login page if not authenticated
            return redirect()->to('/login');
        }
    }

    /**
     * Runs after the request is processed.
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param mixed $arguments
     * @return void
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No additional actions required after the request is processed
    }
}
