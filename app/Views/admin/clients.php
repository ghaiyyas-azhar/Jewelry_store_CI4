<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>

<div class="luxury-container">

    <div class="page-header">
        <h1>Client Management</h1>
        <p>Manage Boutique Customers</p>
    </div>

    <div class="client-grid">

        <?php foreach ($clients as $client): ?>

        <div class="client-card">
            <div class="client-info">
                <div class="avatar">
                    <?= strtoupper(substr($client['name'],0,1)) ?>
                </div>

                <div>
                    <h3><?= esc($client['name']) ?></h3>
                    <p><?= esc($client['email']) ?></p>
                </div>
            </div>

            <div class="client-stats">
                <div>
                    <span>Orders</span>
                    <strong><?= $client['total_orders'] ?></strong>
                </div>

                <div>
                    <span>Spent</span>
                    <strong>$<?= number_format($client['total_spent'],2) ?></strong>
                </div>
            </div>

            <div class="client-actions">
                <a href="/admin/clients/edit/<?= $client['id'] ?>" class="btn-gold">Edit</a>

                <a href="/admin/clients/toggle-status/<?= $client['id'] ?>"
                   class="btn-dark"
                   onclick="return confirm('Change status?')">
                   <?= $client['status'] === 'active' ? 'Suspend' : 'Activate' ?>
                </a>

                <a href="/admin/clients/delete/<?= $client['id'] ?>"
                   class="btn-danger"
                   onclick="return confirm('Delete client permanently?')">
                   Delete
                </a>
            </div>
        </div>

        <?php endforeach; ?>

    </div>

</div>

<style>
.luxury-container {
    padding: 40px;
    color: #fff;
}

.page-header h1 {
    font-size: 28px;
    margin-bottom: 5px;
}

.page-header p {
    color: #aaa;
}

.client-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill,minmax(320px,1fr));
    gap: 25px;
    margin-top: 30px;
}

.client-card {
    background: #141414;
    border: 1px solid rgba(232,186,48,0.15);
    padding: 25px;
    border-radius: 10px;
    transition: 0.3s ease;
}

.client-card:hover {
    box-shadow: 0 0 20px rgba(232,186,48,0.15);
    transform: translateY(-3px);
}

.client-info {
    display: flex;
    align-items: center;
    gap: 15px;
}

.avatar {
    width: 50px;
    height: 50px;
    background: #e8ba30;
    color: #000;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}

.client-stats {
    display: flex;
    justify-content: space-between;
    margin: 20px 0;
    color: #bbb;
}

.client-stats strong {
    display: block;
    color: #e8ba30;
    margin-top: 3px;
}

.client-actions {
    display: flex;
    gap: 10px;
}

.btn-gold {
    background: #e8ba30;
    color: #000;
    padding: 8px 14px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
}

.btn-dark {
    background: #222;
    color: #fff;
    padding: 8px 14px;
    text-decoration: none;
    border-radius: 5px;
}

.btn-danger {
    background: #8b1e1e;
    color: #fff;
    padding: 8px 14px;
    text-decoration: none;
    border-radius: 5px;
}
</style>

<?= $this->endSection() ?>