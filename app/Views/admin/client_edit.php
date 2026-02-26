<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>

<div class="luxury-container">

    <div class="profile-header">
        <div class="avatar-large">
            <?= strtoupper(substr($client['name'],0,1)) ?>
        </div>

        <div>
            <h1><?= esc($client['name']) ?></h1>
            <p><?= esc($client['email']) ?></p>
            <span class="status-badge <?= $client['status'] ?>">
                <?= strtoupper($client['status']) ?>
            </span>
        </div>
    </div>

    <div class="profile-grid">

        <div class="card">
            <h3>Personal Information</h3>

            <form method="post" action="/admin/clients/update/<?= $client['id'] ?>">

                <label>Full Name</label>
                <input type="text" name="name" value="<?= esc($client['name']) ?>">

                <label>Email</label>
                <input type="text" value="<?= esc($client['email']) ?>" disabled>

                <label>Phone</label>
                <input type="text" name="phone" value="<?= esc($client['phone'] ?? '') ?>">

                <button class="btn-gold">Save Changes</button>
            </form>
        </div>

        <div class="card">
            <h3>Account Overview</h3>

            <div class="stat-line">
                <span>Total Orders</span>
                <strong><?= $totalOrders ?></strong>
            </div>

            <div class="stat-line">
                <span>Total Spent</span>
                <strong>$<?= number_format($totalSpent,2) ?></strong>
            </div>

            <div class="stat-line">
                <span>Member Since</span>
                <strong><?= date('d M Y', strtotime($client['created_at'])) ?></strong>
            </div>

            <div class="stat-line">
                <span>Role</span>
                <strong><?= strtoupper($client['role']) ?></strong>
            </div>
        </div>

    </div>

    <div class="card full-width">
        <h3>Recent Orders</h3>

        <table class="luxury-table">
            <tr>
                <th>Order Code</th>
                <th>Status</th>
                <th>Total</th>
                <th>Date</th>
            </tr>

            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $order['order_code'] ?></td>
                <td><?= strtoupper($order['status']) ?></td>
                <td>$<?= number_format($order['total_price'],2) ?></td>
                <td><?= date('d M Y', strtotime($order['created_at'])) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

</div>

<style>
.profile-header {
    display:flex;
    align-items:center;
    gap:20px;
    margin-bottom:40px;
}

.avatar-large {
    width:80px;
    height:80px;
    background:#e8ba30;
    color:#000;
    font-size:30px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
}

.status-badge {
    display:inline-block;
    padding:5px 12px;
    margin-top:8px;
    font-size:12px;
    border-radius:20px;
}

.status-badge.active {
    background:#123d1f;
    color:#00ff88;
}

.status-badge.suspended {
    background:#3d1212;
    color:#ff4d4d;
}

.profile-grid {
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:30px;
}

.card {
    background:#141414;
    padding:30px;
    border:1px solid rgba(232,186,48,0.15);
    border-radius:10px;
}

.full-width {
    margin-top:30px;
}

.card h3 {
    margin-bottom:20px;
}

.card input {
    width:100%;
    padding:10px;
    margin-bottom:15px;
    background:#0e0e0e;
    border:1px solid rgba(232,186,48,0.2);
    color:#fff;
}

.btn-gold {
    background:#e8ba30;
    border:none;
    padding:10px 20px;
    font-weight:bold;
    cursor:pointer;
}

.stat-line {
    display:flex;
    justify-content:space-between;
    margin-bottom:15px;
}

.luxury-table {
    width:100%;
    border-collapse:collapse;
}

.luxury-table th,
.luxury-table td {
    padding: 12px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    text-align: left;
}
</style>

<?= $this->endSection() ?>