<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BoutiqueModel;
use App\Models\OrderModel;

class BoutiqueController extends BaseController
{
    protected $boutiqueModel;
    protected $orderModel;

    public function __construct()
    {
        $this->boutiqueModel = new BoutiqueModel();
        $this->orderModel    = new OrderModel();
    }

    public function index()
    {
        $boutiques = $this->boutiqueModel->findAll();
        $db = \Config\Database::connect();

        foreach ($boutiques as &$b) {

            // total appointments
            $totalAppointments = $db->table('pickup_appointments')
                ->where('boutique_id', $b['id'])
                ->countAllResults();

            // total revenue (completed only)
            $revenue = $db->table('pickup_appointments pa')
                ->selectSum('o.total_price')
                ->join('orders o', 'o.id = pa.order_id')
                ->where('pa.boutique_id', $b['id'])
                ->where('o.status', 'completed')
                ->get()
                ->getRow()
                ->total_price ?? 0;

            $b['total_appointments'] = $totalAppointments;
            $b['total_revenue'] = $revenue;
        }

        return view('admin/boutiques/index', [
            'boutiques' => $boutiques
        ]);
    }

    public function create()
    {
        return view('admin/boutiques/create');
    }

    public function store()
    {
        $this->boutiqueModel->save([
            'name'       => trim($this->request->getPost('name')),
            'city'       => trim($this->request->getPost('city')),
            'address'    => trim($this->request->getPost('address')),
            'ready_note' => trim($this->request->getPost('ready_note')),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/admin/boutiques')
            ->with('success', 'Boutique created');
    }

    public function edit($id)
    {
        return view('admin/boutiques/edit', [
            'boutique' => $this->boutiqueModel->find($id)
        ]);
    }

    public function update($id)
    {
        $this->boutiqueModel->update($id, [
            'name'       => trim($this->request->getPost('name')),
            'city'       => trim($this->request->getPost('city')),
            'address'    => trim($this->request->getPost('address')),
            'ready_note' => trim($this->request->getPost('ready_note')),
        ]);

        return redirect()->to('/admin/boutiques')
            ->with('success', 'Boutique updated');
    }

    public function delete($id)
    {
        $this->boutiqueModel->delete($id);
        return redirect()->to('/admin/boutiques')
            ->with('success', 'Boutique deleted');
    }
}