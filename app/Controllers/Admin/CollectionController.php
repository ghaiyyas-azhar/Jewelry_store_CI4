<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CollectionModel;

class CollectionController extends BaseController
{
    protected $collectionModel;

    public function __construct()
    {
        $this->collectionModel = new CollectionModel();
    }

    public function index()
    {
        $data['collections'] = $this->collectionModel->findAll();
        return view('admin/collections', $data);
    }

    public function create()
    {
        return view('admin/collections/create');
    }

    public function store()
    {
        $this->collectionModel->save([
            'name'        => $this->request->getPost('name'),
            'slug'        => url_title($this->request->getPost('name'), '-', true),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/admin/collections');
    }

    public function edit($id)
    {
        $data['collection'] = $this->collectionModel->find($id);
        return view('admin/collections/edit', $data);
    }

    public function update($id)
    {
        $this->collectionModel->update($id, [
            'name'        => $this->request->getPost('name'),
            'slug'        => url_title($this->request->getPost('name'), '-', true),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/admin/collections');
    }

    public function delete($id)
    {
        $this->collectionModel->delete($id);
        return redirect()->to('/admin/collections');
    }
}