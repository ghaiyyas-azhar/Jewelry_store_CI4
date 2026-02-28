<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BoutiqueModel;

class BoutiqueController extends ResourceController
{
    protected $format = 'json';
    protected $boutiqueModel;

    public function __construct()
    {
        $this->boutiqueModel = new BoutiqueModel();
    }

    // ============================
    // GET ALL BOUTIQUES
    // ============================
    public function index()
    {
        $boutiques = $this->boutiqueModel->findAll();
        return $this->respond($boutiques);
    }

    // ============================
    // GET DETAIL BOUTIQUE
    // ============================
    public function show($id = null)
    {
        $boutique = $this->boutiqueModel->find($id);

        if (!$boutique) {
            return $this->failNotFound('Boutique not found');
        }

        return $this->respond($boutique);
    }

    // ============================
    // CREATE BOUTIQUE
    // ============================
    public function create()
    {
        $data = $this->request->getJSON(true);

        if (!$data) {
            return $this->failValidationErrors('Invalid payload');
        }

        $this->boutiqueModel->insert($data);

        return $this->respondCreated([
            'message' => 'Boutique created',
            'id' => $this->boutiqueModel->getInsertID()
        ]);
    }

    // ============================
    // UPDATE BOUTIQUE
    // ============================
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);

        $boutique = $this->boutiqueModel->find($id);

        if (!$boutique) {
            return $this->failNotFound('Boutique not found');
        }

        $this->boutiqueModel->update($id, $data);

        return $this->respond([
            'message' => 'Boutique updated'
        ]);
    }

    // ============================
    // DELETE BOUTIQUE
    // ============================
    public function delete($id = null)
    {
        $boutique = $this->boutiqueModel->find($id);

        if (!$boutique) {
            return $this->failNotFound('Boutique not found');
        }

        $this->boutiqueModel->delete($id);

        return $this->respondDeleted([
            'message' => 'Boutique deleted'
        ]);
    }
}