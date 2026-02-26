<?php

namespace App\Controllers;

class Auth extends BaseController
{
    // ================= LOGIN =================

    public function login()
    {
        if (session()->get('logged_in')) {
            
            // Jika sudah login, redirect sesuai role
            if (session()->get('role') === 'admin') {
                return redirect()->to('/admin');
            }

            return redirect()->to('/');
        }

        return view('auth/login');
    }

    public function loginProcess()
    {
        $email = trim($this->request->getPost('email'));
        $password = $this->request->getPost('password');

        if (!$email || !$password) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email dan Password wajib diisi');
        }

        $db = \Config\Database::connect();
        $user = $db->table('users')
                   ->where('email', $email)
                   ->get()
                   ->getRow();

        if (!$user) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email tidak ditemukan');
        }

        if (!password_verify($password, $user->password)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Password salah');
        }

        session()->regenerate();

        session()->set([
            'user_id'   => $user->id,
            'name'      => $user->name,
            'email'     => $user->email,
            'role'      => $user->role, // tambah role
            'logged_in' => true
        ]);

        // Redirect berdasarkan role
        if ($user->role === 'admin') {
            return redirect()->to('/admin');
        }

        return redirect()->to('/');
    }

    // ================= REGISTER =================

    public function register()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        }

        return view('auth/register');
    }

    public function registerProcess()
    {
        $name = trim($this->request->getPost('name'));
        $email = trim($this->request->getPost('email'));
        $passwordInput = $this->request->getPost('password');

        if (!$name || !$email || !$passwordInput) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Semua field wajib diisi');
        }

        $db = \Config\Database::connect();
        $builder = $db->table('users');

        $existingUser = $builder->where('email', $email)->get()->getRow();

        if ($existingUser) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email sudah terdaftar');
        }

        $password = password_hash($passwordInput, PASSWORD_DEFAULT);

        $builder->insert([
            'name'     => $name,
            'email'    => $email,
            'password' => $password,
            'role'     => 'user' // default role
        ]);

        return redirect()->to('/login')
                         ->with('success', 'Registrasi berhasil. Silakan login.');
    }

    // ================= LOGOUT =================

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}