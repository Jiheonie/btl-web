<?php include_once "../includes/header.php" ?>

<?php
include_once "../class/Database.php";
include_once "../class/Product.php";
$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

$keyword = $_GET["q"] ?? "";
$where_sql = $keyword ? " WHERE title LIKE '%$keyword%' " : "";

$products = $product->readAll($where_sql, 5);
?>

<body>
  <div class="container">
    <form action="./index.php" method="GET">
      <div class="row mb-3 p-2">
        <label for="keyword" class="col-sm-1 col-form-label">Search: </label>
        <div class="col-sm-11">
          <input type="text" class="form-control" name="q" id="keyword">
        </div>
      </div>
    </form>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Product Name</th>
          <th scope="col">Price</th>
          <th style="width: 200px" scope="col">Description</th>
          <th scope="col">Thumbnail</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $index => $p) : ?>
          <tr>
            <th scope="row"> <?= $index + 1 ?></th>
            <th scope="row"> <?= $p["title"] ?></th>
            <td scope="row"> <?= $p["price"] ?></td>
            <td style="width: 200px" scope="row"> <?= $p["description"] ?></td>
            <td scope="row"> <?= $p["thumbnail"] ?></td>
            <td scope="row">
              <form class="d-inline-block" action="./delete.php" method="POST">
                <input name="id" class="visually-hidden" type="text" value="<?= $p["id"] ?>">
                <button type="submit" class="btn btn-outline-danger">Delete</button>
              </form>
              <a href="./edit.php?id=<?= $p['id'] ?>" class="btn btn-outline-primary">Edit</a>
            </td>
          </tr>

        <?php endforeach; ?>
      </tbody>
    </table>

    <a href="../admin.php" class="btn btn-outline-dark">Back To Admin</a>
    <a href="./add.php" class="btn btn-outline-success">Add New Product</a>
  </div>
</body>
