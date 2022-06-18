<?php
include_once "./includes/header.php";
include_once "./class/Database.php";
include_once "./class/Product.php";

// get database connection
$database = new Database();
$db = $database->getConnection();
$productObj = new Product($db);

$products = $productObj->readAll("", 100);
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    
    <script src="https://cdn.tailwindcss.com"></script>
  
    
</head>
<body>
  <?php include_once "./includes/navbar.php" ?>

  <div class="container py-4 flex items-center gap-3">
        <a href="index.php" class="text-purple-600 text-base">
            <i class="fa fa-home"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa fa-chevron-right"></i>
        </span>
        <a href="sanpham.php" class="text-purple-600 text-base">
            <p class="text-gray-600 font-medium">
                Sản Phẩm
            </p>
        </a>

        <br>

    </div>
 

  <div class="container d-flex justify-content-center flex-wrap">
    <?php foreach ($products as $product) : ?>
      <div class="card m-3 rounded p-1" style="width: 16rem;">
        <img src="<?= $product['thumbnail'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $product["title"] ?></h5>
          <p style="margin-bottom: 5px;" class="card-text text-truncate"><?= $product["description"] ?></p>
          <h5 class="card-text text-danger">$<?= $product["price"] ?></h5>

          <form action="sanpham2.php?proid=<?php echo $product['id']?>" method="POST">
            <input name="quantity" type="number" value="1" class="" min="1" , max="<?= $product["available"] ?>">
            <input class="visually-hidden" name="id" value="<?= $product['id'] ?>">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
              <i class="fa-solid fa-cart-circle-plus"></i> Chi Tiết
            </button>
           
          </form>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <?php include_once "./includes/footer.php"; ?>
</body>
