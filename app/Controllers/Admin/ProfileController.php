<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class ProfileController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $admin = $this->userModel->find(session()->get('id'));

        return view('admin/profile/index', [
            'admin' => $admin
        ]);
    }

    public function update()
    {
        $this->userModel->update(session()->get('id'), [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ]);

        session()->set('name', $this->request->getPost('name'));
        session()->set('email', $this->request->getPost('email'));

        return redirect()->back()->with('success', 'Profile updated');
    }

    public function changePassword()
    {
        return view('admin/profile/change_password');
    }

    public function updatePassword()
    {
        $newPassword = password_hash(
            $this->request->getPost('password'),
            PASSWORD_DEFAULT
        );

        $this->userModel->update(session()->get('id'), [
            'password' => $newPassword
        ]);

        return redirect()->back()->with('success', 'Password changed');
    }
}