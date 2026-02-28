<?php

namespace App\Filters;

<<<<<<< HEAD
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
=======
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
>>>>>>> b1bb512c396f83a048409072d45269d53e9b87c6

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
<<<<<<< HEAD
        // Jika bukan admin → tendang
        if (!session()->get('logged_in') || session()->get('role') !== 'admin') {
            return redirect()->to('/login');
        }
=======
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/');
        }
>>>>>>> b1bb512c396f83a048409072d45269d53e9b87c6
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
<<<<<<< HEAD
        // Cegah cache halaman admin
        $response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate');
        $response->setHeader('Pragma', 'no-cache');
=======
>>>>>>> b1bb512c396f83a048409072d45269d53e9b87c6
    }
}