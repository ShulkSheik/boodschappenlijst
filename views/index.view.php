<?php require("partials/header.php") ?>
<?php require("partials/nav.php") ?>
  <table>
    <thead>
      <td>Product</td>
      <td>Price</td>
      <td>Amount</td>
      <td>Total</td>
    </thead>
    <?php foreach($groceries as $item) : ?>
    <tr>
      <td class='product'> <?= htmlspecialchars($item['name']); ?> </td>
      <td> <?= $item['price']; ?> </td>
      <td> <?= "<input type='number' min='0' value='{$item['amount']}'>" ?> </td>
      <td> <?= $item['total item'] ?> </td>
    </tr>
    <?php endforeach ?>
    <tfoot>
      <td colspan = 3>Total</td>
      <td><?=  validator::total($prices); ?></td>
    </tfoot>
  </table>

<?php require("partials/footer.php")?>