<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\CollectionModel;

class Inventory extends BaseController
{
    protected $productModel;
    protected $collectionModel;

    public function __construct()
    {
        $this->productModel    = new ProductModel();
        $this->collectionModel = new CollectionModel();
    }

    // ================= INDEX =================
    public function index()
    {
        $products = $this->productModel
            ->select('products.*, collections.name as collection_name')
            ->join('collections', 'collections.id = products.collection_id')
            ->findAll();

        return view('admin/inventory', [
            'products' => $products
        ]);
    }

    // ================= CREATE =================
    public function create()
    {
        return view('admin/inventory_create', [
            'collections' => $this->collectionModel->findAll()
        ]);
    }

    // ================= STORE =================
    public function store()
    {
        $image = $this->request->getFile('image');
        $imageName = null;

        if ($image && $image->isValid() && !$image->hasMoved()) {

            $allowedTypes = ['image/png', 'image/jpg', 'image/jpeg'];

            if (!in_array($image->getMimeType(), $allowedTypes)) {
                return redirect()->back()->with('error', 'Format image harus PNG/JPG/JPEG');
            }

            $imageName = $image->getRandomName();
            $image->move('uploads', $imageName);
        }

        $this->productModel->save([
            'collection_id' => $this->request->getPost('collection_id'),
            'name'          => $this->request->getPost('name'),
            'slug'          => url_title($this->request->getPost('name'), '-', true),
            'price'         => $this->request->getPost('price'),
            'stock'         => $this->request->getPost('stock'),
            'material'      => $this->request->getPost('material'),
            'description'   => $this->request->getPost('description'),
            'image'         => $imageName
        ]);

        return redirect()->to('/admin/inventory');
    }

    // ================= EDIT =================
    public function edit($id)
    {
        return view('admin/inventory_edit', [
            'product'     => $this->productModel->find($id),
            'collections' => $this->collectionModel->findAll()
        ]);
    }

    // ================= UPDATE =================
    public function update($id)
    {
        $product = $this->productModel->find($id);

        $image = $this->request->getFile('image');
        $imageName = $product['image'];

        if ($image && $image->isValid() && !$image->hasMoved()) {

            $allowedTypes = ['image/png', 'image/jpg', 'image/jpeg'];

            if (!in_array($image->getMimeType(), $allowedTypes)) {
                return redirect()->back()->with('error', 'Format image harus PNG/JPG/JPEG');
            }

            // hapus lama
            if ($product['image'] && file_exists('uploads/' . $product['image'])) {
                unlink('uploads/' . $product['image']);
            }

            $imageName = $image->getRandomName();
            $image->move('uploads', $imageName);
        }

        $this->productModel->update($id, [
            'collection_id' => $this->request->getPost('collection_id'),
            'name'          => $this->request->getPost('name'),
            'slug'          => url_title($this->request->getPost('name'), '-', true),
            'price'         => $this->request->getPost('price'),
            'stock'         => $this->request->getPost('stock'),
            'material'      => $this->request->getPost('material'),
            'description'   => $this->request->getPost('description'),
            'image'         => $imageName
        ]);

        return redirect()->to('/admin/inventory');
    }

    // ================= DELETE =================
    public function delete($id)
    {
        $product = $this->productModel->find($id);

        if ($product['image'] && file_exists('uploads/' . $product['image'])) {
            unlink('uploads/' . $product['image']);
        }

        $this->productModel->delete($id);

        return redirect()->to('/admin/inventory');
    }
}