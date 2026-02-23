<?php

namespace App\Controllers;

class Auth extends BaseController
{
    // Tampilkan halaman login
    public function login()
    {
        return view('auth/login');
    }

    // Proses login
    public function loginProcess()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $db = \Config\Database::connect();
        $builder = $db->table('users');

        $user = $builder->where('email', $email)->get()->getRow();

        if ($user) {
            if (password_verify($password, $user->password)) {

                // simpan session
                session()->set([
                    'user_id' => $user->id,
                    'name'    => $user->name,
                    'email'   => $user->email,
                    'logged_in' => true
                ]);

                return redirect()->to('/'); // ke homepage
            } else {
                return redirect()->back()->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak ditemukan');
        }
    }

    // Register tetap seperti sebelumnya
    public function register()
    {
        return view('auth/register');
    }

    public function registerProcess()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        $db = \Config\Database::connect();
        $builder = $db->table('users');

        $builder->insert([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        return redirect()->to('/auth/login');
    }
}
