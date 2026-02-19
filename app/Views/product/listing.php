<?php if(session()->get('isLoggedIn')): ?>

    <form action="/cart/add/<?= $product['id'] ?>" method="post">
        <button type="submit">ADD TO CART</button>
    </form>

<?php else: ?>

    <button onclick="loginRequired()">ADD TO CART</button>

<?php endif; ?>

