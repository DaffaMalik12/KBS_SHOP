<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="icon" href="../img/Screenshot_2023-09-11_182950-removebg-preview.png">
    <!-- Demo styles -->
  <style>
    html,
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
    <title>KBS_SHOP</title>
</head>
<body>
    <div class="container max-w-screen-xl transition-all md:transition-all lg:transition-all overflow-x-hidden">
        <!-- Navbar -->
        <nav class="bg-white" data-aos="fade-down">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center">
                    <img src="../img/Screenshot_2023-09-11_182950-removebg-preview.png" class="h-8 mr-3" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-bold font-myFont whitespace-nowrap ">KBS_SHOP</span>
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border-black rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-black rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                        </li>
                            <li>
                                <a href="../Halaman Artikel/card.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Artikel</a>
                            </li>
                            <li>
                                <a href="../login.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Admin</a>
                            </li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded -100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-black md:dark:hover:text-blue-500  dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Hubungi Kami<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                                <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-green-400 text-black">Instagram</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-green-400 text-black ">Tiktok</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-green-400 text-black">Facebook</a>
                                    </li>
                                </ul>
                            </div>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Akhir Navbar -->

        <!-- Jumbotron -->
        <section class="bg-center bg-cover bg-[url('../img/gambar_jumbotron.jpg')] bg-gray-700 bg-blend-multiply">
            <div class="px-4  max-w-screen-xl py-24 lg:py-56">
                <h1 class="mb-4 text-4xl font-extrabold font-myFont tracking-tight leading-none text-white md:text-5xl lg:text-6xl lg:px-16">Welcome To</h1>
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl lg:px-16">KBS_SHOP</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:w-3/4">Apa yang bikin kita beda? Selain produk berkualitas tinggi, kita juga punya stok barang yang selalu ready. Jadi, kamu bisa belanja dengan tenang tanpa harus khawatir kehabisan. Plus, harganya juga bersahabat banget sama dompet kamu. Gak ada lagi alasan buat gak upgrade peralatan teknologimu!</p>
                <div class=" flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="#" class="inline-flex lg:ml-16 items-center py-3 px-5 text-base font-medium text-center text-black rounded-lg bg-[#FD6D6D] FD6D6D hover:bg-red-600 focus:ring-4 focus:ring-blue-300 ">
                        Learn More
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                    <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        Artikel
                    </a>  
                </div>
            </div>
        </section>
        <!-- Akhir Jumbotron -->

        <!-- Jumbotron Stok Barang -->
        <section class="container max-w-full max-h-full lg:pb-10">
            <h3 class="text-center font-base text-lg pb-1 pt-8 font-myFont lg:text-center">Pemilihan Produk</h3>
            <h2 class="text-center font-bold text-2xl pb-12 font-myFont lg:text-center">STOK BARANG KAMI</h2>
            <div class="lg:flex sm:flex sm:flex-wrap sm:gap-6 sm:justify-evenly">
            <?php
                include "../koneksi.php";
                $select_products = mysqli_query($koneksi, "SELECT * FROM `products`");
                if(mysqli_num_rows($select_products) > 0){
                    while($fetch_product = mysqli_fetch_assoc($select_products)){
                ?>
            <div class="px-6 mb-10 font-inter lg:flex flex sm:flex sm:flex-wrap sm:gap-6 sm:justify-evenly">
                <!-- Card 1 -->
                <div  class="flex flex-col mb-8 items-center  bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100" data-aos="fade-right">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="../img/<?php echo $fetch_product['image']; ?>" alt="">
                    <div class="flex flex-col justify-between p-4  leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php echo $fetch_product['name']; ?></h5>
                        <p class="mb-3 font-normal text-gray-700 w-42 text-justify "><?php echo $fetch_product['description']; ?></p>
                        <div class="flex">
                            <a href="" class="w-28 h-10 rounded-lg bg-[#6C70DD] text-center font-poppins pt-1 text-lg text-black hover:bg-purple-700">
                                    Buy
                            </a>   
                            <div class="kotak w-auto h-10 inline-flex ml-5 justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-black rounded-lg border border-black ">
                                <h2>Rp.<?php echo $fetch_product['stock']; ?></h2>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
            <?php
            };
         };
         ?>
         </div>
        </section>
        <!-- Akhir Jumbotron Stok Barang -->

        <!-- Jumbotron Review Customer -->
        <section class="bg-[#D9D9D9]">
            <h3 class="text-center font-poppins text-sm  pt-10">Pengulasan Pada Toko Kami</h3>
            <h2 class="text-black font-bold text-center font-poppins px-5 py-1  text-2xl">Review Customer</h2>
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-8 lg:-mt-5">
                <!-- Swiper -->
                <div class="swiper mySwiper" data-aos="fade-right">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="block rounded-lg lg:w-10/12 lg:h-3/4 bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">
                                <div class="border-b-2 border-slate-300 px-6 py-3 ">
                                    Rating Customer
                                </div>
                                <div class="p-6">
                                    <img src="../img/foto cowo 1.jpeg" alt="" class="rounded-full w-24 mx-auto">
                                    <p class="mb-4 text-base mt-5  text-neutral-600 ">
                                    Barangnya Bagus Worth  untuk dibeli 
                                    </p>
                                    <div class="inline-block  rounded bg-primary px-6 pb-2 pt-2.5 text-xl font-medium uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                    ⭐⭐⭐⭐⭐
                                    </div>
                                </div>
                                <div class="border-t-2 border-slate-300 px-6 py-3 ">
                                    2 days ago
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="block rounded-lg lg:w-10/12 lg:h-3/4 bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">
                                <div class="border-b-2 border-slate-300 px-6 py-3 ">
                                    Rating Customer
                                </div>
                                <div class="p-6">
                                    <img src="../img/foto cewe 1.jpeg" alt="" class="rounded-full w-24 mx-auto">
                                    <p class="mb-4 text-base mt-5 text-neutral-600 ">
                                        With supporting text below as a natural lead-in to additional
                                        content.
                                    </p>
                                    <div  class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xl font-medium uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                </div>
                                <div class="border-t-2 border-slate-300 px-6 py-3 ">
                                    2 days ago
                                </div>
                            </div>    
                        </div>
                        <div class="swiper-slide">
                        <div class="block rounded-lg lg:w-10/12 lg:h-3/4 bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">
                                <div class="border-b-2 border-slate-300 px-6 py-3 ">
                                    Rating Customer
                                </div>
                                <div class="p-6">
                                    <img src="../img/foto cowo 2.jpeg" alt="" class="rounded-full w-24 mx-auto">
                                    <p class="mb-4 text-base mt-5 text-center text-neutral-600 ">
                                    Barangnya Bagus Worth  untuk dibeli 
                                    </p>
                                    <div  class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xl font-medium uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                </div>
                                <div class="border-t-2 border-slate-300 px-6 py-3 ">
                                    2 days ago
                                </div>
                            </div>    
                        </div>
                        <div class="swiper-slide">
                        <div class="block rounded-lg lg:w-10/12 lg:h-3/4 bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">
                                <div class="border-b-2 border-slate-300 px-6 py-3 ">
                                    Rating Customer
                                </div>
                                <div class="p-6">
                                    <img src="../img/foto cewe 2.jpeg" alt="" class="rounded-full w-24 mx-auto">
                                    <p class="mb-4 text-base mt-5 text-center text-neutral-600 ">
                                    Barangnya Bagus Worth  untuk dibeli 
                                    </p>
                                    <div class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xl font-medium uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                </div>
                                <div class="border-t-2 border-slate-300 px-6 py-3 ">
                                    2 days ago
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- Akhir Jumbotron Review Customer -->

         <!-- Frame Map -->
         <!-- <section class="w-auto h-auto mb-5 bg-gray-200">
            <h1 class=" text-center font-poppins text-2xl font-bold pt-10">Lokasi Toko Kami</h1>
         <div class="flex justify-center items-center">   
         <iframe data-aos="fade-right" class="mt-10 mb-10 rounded-lg w-11/12 h-72" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d799.9226833001019!2d106.7175235184617!3d-6.370254560946781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5f6b86b89e9%3A0xbff2a9766032e1ff!2sCafe%20Qoplak%2FPoci!5e0!3m2!1sid!2sid!4v1700551399090!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>   
        </section> -->


        <!-- Footer -->
        <footer class="bg-white">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="https://flowbite.com/" class="flex items-center">
                            <img src="../img/Screenshot_2023-09-11_182950-removebg-preview.png" class="h-12 mr-3" alt="FlowBite Logo" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap ">KBS_SHOP</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Resources</h2>
                            <ul class="text-gray-500  font-medium">
                                <li class="mb-4">
                                    <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                                </li>
                                <li>
                                    <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Follow us</h2>
                            <ul class="text-gray-500  font-medium">
                                <li class="mb-4">
                                    <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                                </li>
                                <li>
                                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Legal</h2>
                            <ul class="text-gray-500  font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center ">© 2023 <a href="https://flowbite.com/" class="hover:underline">KBS_SHOP™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                        <a href="https://web.facebook.com/daffa.malik.5055/" class="text-gray-500 hover:text-gray-900">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                            </svg>
                            <span class="sr-only">Discord community</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Instagram Page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- Akhir  Footer -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>