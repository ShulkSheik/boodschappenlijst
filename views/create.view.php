<?php require("partials/header.php") ?>
<?php require("partials/nav.php") ?>

  <form method="post" action="">
    <label for="name">Name</label> <br>
    <input type="text" id="name" name="name" value="" required>
    <br><br>

    <label for="amount">Amount</label> <br>
    <input type="number" id="amount" name="amount" value="0" min='0'>
    <br><br>

    <label for="price">Price per piece</label> <br>
    <input type="text" id="price" name="price" value="">
    <br><br>

    <input type="submit" value="submit">
  </form>

  <?php if (isset($errors['name'])) { echo "<p class='error'>{$errors['name']}</p>"; } ?>
  <?php if (isset($errors['amount'])) { echo "<p class='error'>{$errors['amount']}</p>"; } ?>
  <?php if (isset($errors['price'])) { echo "<p class='error'>{$errors['price']}</p>"; } ?>

<?php require("partials/footer.php")?>