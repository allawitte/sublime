<h3>New order with number: <?= $order->id?></h3>
<p>Name: <?= $order->name ?></p>
<p>Phone: <?= $order->phone ?></p>
<p>Address: <?= $order->address ?></p>
<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th style="padding: 8px; border: 1px solid #ddd">Name</th>
            <th style="padding: 8px; border: 1px solid #ddd">Amount</th>
            <th style="padding: 8px; border: 1px solid #ddd">Price</th>
            <th style="padding: 8px; border: 1px solid #ddd">Sum</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($session['cart'] as $item): ?>
            <?php //var_dump($item) ?>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd"><?= $item['name']?></td>
                <td style="padding: 8px; border: 1px solid #ddd"><?= $item['goodQuantity']?></td>
                <td style="padding: 8px; border: 1px solid #ddd">$<?= $item['price']?></td>
                <td style="padding: 8px; border: 1px solid #ddd">$<?= ($item['price']*$item['goodQuantity'])?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3">Total:</td>
            <td><?= $session['cart.totalQuantity'] ?> un.</td>
        </tr>
        <tr>
            <td colspan="3">For the amount of:</td>
            <td><b>$<?= $session['cart.totalPrice'] ?></b></td>
        </tr>
        </tbody>
    </table>
</div>
