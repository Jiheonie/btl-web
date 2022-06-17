<?php

// @var getRole();
// use to fix bug lsp nvim -> delete when upload
include "../includes/helpers.php";

// @var $connect
$connect = require_once "../includes/db_connect.php";

$keyword = $_GET["q"] ?? "";
$user_query = "SELECT * FROM User WHERE username LIKE '%$keyword%' OR fullname LIKE '%$keyword%' LIMIT 5";
$result = $connect->query($user_query);
$users = $result->fetch_all(MYSQLI_ASSOC);
?>

<?php require_once "../includes/header.php"; ?>

<body>
  <div class="container">
    <form action="index.php" method="GET">
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
          <th scope="col">Fullname</th>
          <th scope="col">Username</th>
          <th scope="col">Role</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $index=>$user) : ?>
          <tr>
            <th scope="row"> <?= $index + 1 ?></th>
            <td scope="row"> <?= $user["fullname"] ?></td>
            <td scope="row"> <?= $user["username"] ?></td>
            <td scope="row"> <?= getRole($user["role_id"] ?? 0) ?></td>
            <td scope="row">
              <form class="d-inline-block" action="./delete.php" method="POST">
                <input name="id" class="visually-hidden" type="text" value="<?= $user["id"] ?>">
                <button type="submit" class="btn btn-outline-danger">Delete</button>
              </form>
              <a href="./edit.php?id=<?= $user['id'] ?>" class="btn btn-outline-primary">Edit</a>
            </td>
          </tr>

        <?php endforeach; ?>
      </tbody>
    </table>

    <a href="../admin.php" class="btn btn-outline-dark">Back To Admin</a>
    <a href="./add.php" class="btn btn-outline-success">Add New User</a>
  </div>

</body>
