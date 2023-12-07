<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Page</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="flex px-4 shadow-lg">
                <img src="../img/Screenshot_2023-09-11_182950-removebg-preview.png" alt="" class="w-20 p-4">
                <a href="" class="pt-5 font-semibold text-2xl font-poppins">Admin</a>
                <div class="ml-auto">
                    <a href=""><i class="fa-solid fa-arrow-right-from-bracket text-4xl  pr-4"></i></a>
                    <a href=""><i class="fa-solid fa-circle-user text-5xl pt-3"></i></a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="grid grid-cols-5 gap-4 h-screen">
            <div class="col-span-1 shadow-2xl h-screen">
                <h1 class="text-slate-400 text-center pt-8">Main Menu</h1>
                <ul class="ml-3 mb-3 pt-5">
                    <li class="hover:bg-slate-600 hover:text-blue-500">
                        <a href="index.php" class="text-lg font-poppins font-medium"><i class="fa-solid fa-house mr-2"></i>Dashboard</a>
                    </li>
                    <li class="mt-8  hover:bg-slate-600 hover:text-blue-500">
                        <a href="#" class="text-lg font-poppins font-medium"><i class="fa-solid fa-users mr-2"></i>Profile</a>
                    </li>
                    <li class="mt-8  hover:bg-slate-600 hover:text-blue-500">
                        <a href="stok.php" class="text-lg font-poppins font-medium"><i class="fa-solid fa-cart-shopping mr-2"></i>Stok Barang</a>
                    </li>
                    <li class="mt-8  hover:bg-slate-600 hover:text-blue-500">
                        <a href="" class="text-lg font-poppins font-medium"><i class="fa-solid fa-newspaper mr-2"></i></i>Kelola Artikel</a>
                    </li>
                </ul>
            </div>
            <div class="col-span-4 h-screen">
                <h1 class="text-2xl pl-5 mb-2 font-semibold pt-5"><i class="fa-solid fa-users mr-2"></i>Profile</h1>
                <div class="flex flex-wrap">
                    <div class="card w-96 h-56 mt-5 ml-10 rounded-md shadow-xl">
                    <i class="fa-solid fa-circle-user text-5xl mt-11 ml-5"></i>
                    <h1 class="font-poppins ml-20 -mt-12">Name:</h1>
                    <h1 class="font-poppins ml-20 mt-3">Joining:</h1>
                    <h1 class="font-poppins ml-20 mt-3">Status:</h1>
                    <h1 class="font-poppins ml-5 mt-5">Addres:</h1>
                    </div>
                    <div class="card w-96 h-56 mt-5 ml-32 rounded-md shadow-xl">
                    <i class="fa-solid fa-circle-user text-5xl mt-11 ml-5"></i>
                    <h1 class="font-poppins ml-20 -mt-12">Name:</h1>
                    <h1 class="font-poppins ml-20 mt-3">Joining:</h1>
                    <h1 class="font-poppins ml-20 mt-3">Status:</h1>
                    <h1 class="font-poppins ml-5 mt-5">Addres:</h1>
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <div class="card w-96 h-32 mt-5 ml-10 rounded-md shadow-xl">
                    <i class="fa-solid fa-circle-user text-6xl mt-11 ml-5"></i>
                    <h1 class="font-poppins ml-24 -mt-16 ">Name:</h1>
                    <h1 class="font-poppins ml-24 mt-1 ">Joining:</h1>
                    <h1 class="font-poppins ml-24 mt-1 ">Status:</h1>
                    </div>

                    <div class="card w-96 h-32 mt-5 ml-32  rounded-md shadow-xl">
                    <i class="fa-solid fa-circle-user text-6xl mt-11 ml-5"></i>
                    <h1 class="font-poppins ml-24 -mt-16 ">Name:</h1>
                    <h1 class="font-poppins ml-24 mt-1 ">Joining:</h1>
                    <h1 class="font-poppins ml-24 mt-1 ">Status:</h1>
                    </div>

                    <div class="card w-96 h-32 mt-5 ml-10 rounded-md shadow-xl">
                    <i class="fa-solid fa-circle-user text-6xl mt-11 ml-5"></i>
                    <h1 class="font-poppins ml-24 -mt-16 ">Name:</h1>
                    <h1 class="font-poppins ml-24 mt-1 ">Joining:</h1>
                    <h1 class="font-poppins ml-24 mt-1 ">Status:</h1>
                    </div>

                    <div class="card w-96 h-32 mt-5 ml-32  rounded-md shadow-xl">
                    <i class="fa-solid fa-circle-user text-6xl mt-11 ml-5"></i>
                    <h1 class="font-poppins ml-24 -mt-16 ">Name:</h1>
                    <h1 class="font-poppins ml-24 mt-1 ">Joining:</h1>
                    <h1 class="font-poppins ml-24 mt-1 ">Status:</h1>
                    </div>


                </div>


            </div>
    </main>

    

</body>

</html>