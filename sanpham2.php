
<?php
include_once "./includes/header.php";
include_once "./class/Database.php";
include_once "./class/Product.php";

// get database connection
$id = $_GET['proid'];
$database = new Database();
$db = $database->getConnection();

$productObj = new Product($db);

$products = $productObj->getProductById($id);

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
    <span class="text-sm text-gray-400">
        <i class="fa fa-chevron-right"></i>
    </span>
    <p style="" class="card-text text-truncate"><?php echo $products['title'] ?></p>

    <br>

</div>

<div class="container grid grid-cols-2 gap-6  ">
    <div>
        <img class="" src="<?= $products['thumbnail'] ?>" width="616px" height="600px">
        <div class="col-md-6 gird grid-cols-5 gap-4 mt-4 flex">
            <img src="<?= $products['thumbnail'] ?>" class="  cursor-pointer border border-primary" width="136" height="136">
            <img src="<?= $products['thumbnail'] ?>" class="  cursor-pointer border " width="136" height="136">
            <img src="<?= $products['thumbnail'] ?>" class="  cursor-pointer border " width="136" height="136">
            <img src="<?= $products['thumbnail'] ?>" class="  cursor-pointer border " width="136" height="136">
        </div>
    </div>
    <div>
        <h2 class="text-3xl font-medium uppercase mb-2"><?= $products["title"] ?></h2>
        <div class="flex items-center mb-4">
            <div class="flex gap-1 text-sm text-yellow-400">
                <span><i class="fa fa-star"></i></span>
                <span><i class="fa fa-star"></i></span>
                <span><i class="fa fa-star"></i></span>
                <span><i class="fa fa-star"></i></span>
                <span><i class="fa fa-star"></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(100 Reviews)</div>
        </div>
        <div class="space-y-2">
            <p class="text-gray-800 font-semibold space-x-2">
                <span>Trạng Thái:</span>
                <span class="text-green-600 "> Còn Hàng</span>
            </p>

        </div>
        <div class=" flex items-baseline mb-1 space-x-2 font-bold mt-4">
            <p class="text-2xl text-red-400 font-semibold">Price: <?= $products["price"] ?></p>


        </div>
        <p class="mt-4 text-gray-600"><?= $products["description"] ?></p>

        <div class="pt-4">
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">color</h3>
            <div class="flex items-center gap-2">
                <div class="color-selector">
                    <input type="radio" name="color" class="hidden" id="color-red" checked>
                    <label for="color-red" class="border border-gray-200 rounded-circle h-5 w-5 cursor-pointer shadow-sm block" style="background-color: red;"></label>
                </div>
                <div class="color-selector">
                    <input type="radio" name="color" class="hidden" id="color-red" checked>
                    <label for="color-red" class="border border-gray-200 rounded-circle h-5 w-5 cursor-pointer shadow-sm block" style="background-color: blue;"></label>
                </div>
                <div class="color-selector">
                    <input type="radio" name="color" class="hidden" id="color-red" checked>
                    <label for="color-red" class="border border-gray-200 rounded-circle h-5 w-5 cursor-pointer shadow-sm block" style="background-color: black;"></label>
                </div>
            </div>

        </div>
        <form action="./cart/add.php" method="POST">
            <div class="mt-4">
                <h3 class=" text-sm text-gray-800 uppercase mb-1">Số lượng:</h3>
                <input name="quantity" type="number" value="1" min="1" , max="<?= $products["available"] ?>">
            </div>
            <div class="flex gap-3 border-b border-gray-200 pb-5 mt-6">
                <input class="visually-hidden" name="id" value="<?= $products['id'] ?>">
                <button type="submit" class="bg-primary border border-primary text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-primary transition">
                    <i class="fa fa-shopping-bag"></i> ADD TO CART
                </button>

            </div>
        </form>
        <div class="flex gap-3 mt-4">
            <a href="#" class="text-gray-400 hover: text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                <i class=" fa fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-400 hover: text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                <i class=" fa fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-400 hover: text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                <i class=" fa fa-instagram"></i>
            </a>
        </div>
    </div>

    <div class="container pb-16">
        <h3 class="border-b border-gray-200 font-bold text-gray-800 pb-3 font-medium">Poducnt details</h3>
        <div class="w-3\.5 pt-6">
            <div class="text-gray-600 space-y-3">
                <p><?= $products["description"] ?></p>

            </div>
            <table class="table-auto border-collapse w-full text-left text-gray-600 text-sm mt-6">
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium"> Color</th>
                    <th class="py-2 px-4 border border-gray-300 ">Black, Red, Brown</th>
                </tr>
            </table>
        </div>

    </div>

</div>
<div class="container">
    <section>
        <h2>Viết bình luận: </h2>
        <form action="" method="POST">
            <section>
                <textarea name="content" style="width: 100%;" rows="5" class="form-control" placeholder="Viết bình luận vào phần này...."></textarea>
            </section>
            <input type="submit" value="Gửi bình luận" class="bg-primary border border-primary text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-primary transition">
        </form>
    </section>
</div>
<?php include_once "./includes/footer.php"; ?>