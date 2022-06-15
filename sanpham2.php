<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./footer_style.css">
    <link rel="stylesheet" href="./header_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./homepage_style.css">
  </head>

  <body>
    <?php include './include/header.php' ?>

    <div class="container py-4 flex items-center gap-3">
      <a href="homepage.php" class="text-purple-600 text-base">
        <i class="fa fa-home"></i>
      </a>
      <span class="text-sm text-gray-400">
        <i class="fa fa-chevron-right"></i>
      </span>
      <a href="#" class="text-purple-600 text-base">
        <p class="text-gray-600 font-medium">Account</p>
      </a>

      <span class="text-sm text-gray-400">
        <i class="fa fa-chevron-right"></i>
      </span>
      <a href="#" class="text-purple-600 text-base">
        <p class="text-gray-600 font-medium">Giỏ hàng</p>
      </a>
      <br />
    </div>

    <div class="container grid grid-cols-4 gap-6 pt-4 pb-10 items-start">
      <div class="divide-y divide-gray-200 space-y-5">
        <div class="col-span-3">
          <div class="px-4 py-3 shadow flex items-center gap-4">
            <div class="flex-shrink-0">
              <img
                src="anh.jpg"
                class="w-14 rounded-full h-14 border border-gray-200 p-1 object-cover"
                alt=""
              />
            </div>
            <div class="flex-grow">
              <p class="text-gray-600">HEllo</p>
              <h4 class="text-gray-800 font-medium">TOI LA AI</h4>
            </div>
          </div>
          <div
            class="mt-6 bg-white shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600"
          >
            <div class="space-y-1 pl-8">
              <a
                href="#"
                class="relative text-red-500 block font-medium capitalize hover:text-pink-800"
                ><span class="absolute -left-8 top-0 text-base">
                  <i class="fa fa-address-card"></i>
                </span>
                Mang aount</a
              >
              <a
                href="#"
                class="relative text-primary block font-medium capitalize"
              >
                Info</a
              >
              <a
                href="#"
                class="relative text-primary block font-medium capitalize"
              >
                Masndja</a
              >
            </div>
            <div class="space-y-1 pl-8 pt-3">
              <a
                href="#"
                class="relative text-red-500 block font-medium capitalize hover:text-pink-800"
                ><span class="absolute -left-8 top-0 text-base">
                  <i class="fa-history"></i>
                </span>
                History Order</a
              >
              <a
                href="#"
                class="relative text-primary block font-medium capitalize"
              >
                Historu</a
              >
              <a
                href="#"
                class="relative text-primary block font-medium capitalize"
              >
                Masndja</a
              >
            </div>

            <div class="space-y-1 pl-8 pt-3">
              <a
                href="#"
                class="relative text-red-500 block font-medium capitalize hover:text-pink-800"
                ><span class="absolute -left-8 top-0 text-base">
                  <i class="fa fa-wallet"></i>
                </span>
                Payment</a
              >
              <a
                href="#"
                class="relative text-primary block font-medium capitalize"
              >
                Info</a
              >
              <a
                href="#"
                class="relative text-primary block font-medium capitalize"
              >
                Masndja</a
              >
            </div>
            <div class="space-y-1 pl-8 pt-3">
              <a
                href="#"
                class="relative text-red-500 block font-medium capitalize hover:text-pink-800"
                ><span class="absolute -left-8 top-0 text-base">
                  <i class="fa fa-heart"></i>
                </span>
                Wistlist</a
              >
            </div>
            <div class="space-y-1 pl-8 pt-3">
              <a
                href="#"
                class="relative text-red-500 block font-medium capitalize hover:text-pink-800"
                ><span class="absolute -left-8 top-0 text-base">
                  <i class="fa fa-sign-out"></i>
                </span>
                Log out</a
              >
            </div>
          </div>
        </div>

      </div>

      <div class="col-span-3">
        <div class="col-span-9 space-y-4">
          <div
            class="flex items-center justify-between gap-6 p-4 border border-gray-200 rounded"
          >
            <div class="w-28 flex-shrink-0">
              <img src="anh.jpg" alt="" class="w-full" />
            </div>
            <div class="w-1\/2">
              <h2 class="text-gray-800 text-xl font-medium uppercase">
                IPHONE11
              </h2>
              <p class="text-gray-500 text-sm">
                AVaiadaskjdklasjdlaksjdlk: <span class="text-green-600"
                  >adasdas</span
                >
              </p>
            </div>
            <div class="text-primary text-lg font-semibold">#320.00</div>
            <a
              href="#"
              class="px-6 py-2 text-center text-sm text-white bg-purple-500 border border-red-500 rounded hover: btn btn-primary transition uppercase font-medium"
              >ADD TO CARD</a
            >
            <div class="bg-purple-300  cursor-pointer hover: btn btn-info">
              <i class="fa fa-trash"> </i>
            </div>
          </div>
          <div
          class="flex items-center justify-between gap-6 p-4 border border-gray-200 rounded"
        >
          <div class="w-28 flex-shrink-0">
            <img src="anh.jpg" alt="" class="w-full" />
          </div>
          <div class="w-1\/2">
            <h2 class="text-gray-800 text-xl font-medium uppercase">
              IPHONE11
            </h2>
            <p class="text-gray-500 text-sm">
              AVaiadaskjdklasjdlaksjdlk: <span class="text-green-600"
                >adasdas</span
              >
            </p>
          </div>
          <div class="text-primary text-lg font-semibold">#320.00</div>
          <a
            href="#"
            class="px-6 py-2 text-center text-sm text-white bg-purple-500 border border-red-500 rounded hover: btn btn-primary transition uppercase font-medium"
            >ADD TO CARD</a
          >
          <div class="bg-purple-300 cursor-pointer hover: btn btn-primary">
            <i class="fa fa-trash"> </i>
          </div>
        </div>
        <div
        class="flex items-center justify-between gap-6 p-4 border border-gray-200 rounded"
      >
        <div class="w-28 flex-shrink-0">
          <img src="anh.jpg" alt="" class="w-full" />
        </div>
        <div class="w-1\/2">
          <h2 class="text-gray-800 text-xl font-medium uppercase">
            IPHONE11
          </h2>
          <p class="text-gray-500 text-sm">
            AVaiadaskjdklasjdlaksjdlk: <span class="text-green-600"
              >adasdas</span
            >
          </p>
        </div>
        <div class="text-primary text-lg font-semibold">#320.00</div>
        <a
          href="#"
          class="px-6 py-2 text-center text-sm text-white bg-purple-500 border border-red-500 rounded hover: btn btn-primary transition uppercase font-medium"
          >ADD TO CARD</a
        >
        <div class="bg-purple-300 cursor-pointer hover: btn btn-primary">
          <i class="fa fa-trash"> </i>
        </div>
      </div>
      <div
      class="flex items-center justify-between gap-6 p-4 border border-gray-200 rounded"
    >
      <div class="w-28 flex-shrink-0">
        <img src="anh.jpg" alt="" class="w-full" />
      </div>
      <div class="w-1\/2">
        <h2 class="text-gray-800 text-xl font-medium uppercase">
          IPHONE11
        </h2>
        <p class="text-gray-500 text-sm">
          AVaiadaskjdklasjdlaksjdlk: <span class="text-green-600"
            >adasdas</span
          >
        </p>
      </div>
      <div class="text-primary text-lg font-semibold">#320.00</div>
      <a
        href="#"
        class="px-6 py-2 text-center text-sm text-white bg-purple-500 border border-red-500 rounded hover: btn btn-primary transition uppercase font-medium"
        >ADD TO CARD</a
      >
      <div class="bg-purple-300 cursor-pointer hover: btn btn-primary">
        <i class="fa fa-trash"> </i>
      </div>
    </div>
        
        
        </div>
        
    </div>
    </div>
    
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <?php include './include/footer.php' ?>
    <script src="app.js"></script>
  </body>
</html>
