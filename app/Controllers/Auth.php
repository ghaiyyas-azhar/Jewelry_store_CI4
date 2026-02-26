<?php

namespace App\Controllers;

class Auth extends BaseController
{
    // ================= LOGIN =================

    public function login()
    {
        // Jika sudah login, redirect ke homepage
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        }

        return view('auth/login');
    }

    public function loginProcess()
{
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $userModel = new \App\Models\UserModel();

    $user = $userModel->where('email', $email)->first();

    if (!$user) {
        return redirect()->back()->with('error', 'Email not registered');
    }

    if (!password_verify($password, $user['password'])) {
        return redirect()->back()->with('error', 'Incorrect password');
    }

    // 🔥 CHECK SUSPEND
    if (isset($user['status']) && $user['status'] === 'suspended') {
        return redirect()->back()->with('error', 'Your account has been suspended.');
    }

    // SET SESSION
    session()->set([
        'user_id' => $user['id'],
        'name'    => $user['name'],
        'email'   => $user['email'],
        'role'    => $user['role'],
        'logged_in' => true
    ]);

    // ROLE REDIRECT
    if ($user['role'] === 'admin') {
        return redirect()->to('/admin');
    } else {
        return redirect()->to('/');
    }
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

        // Cek email sudah ada atau belum
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
            'password' => $password
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