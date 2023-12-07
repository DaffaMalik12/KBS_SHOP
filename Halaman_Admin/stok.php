<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Page</title>
</head>
<?php

@include '../koneksi.php';


$p_image = '';  // Untuk mengatasi "Undefined variable $p_image"
$p_image_tmp_name = '';  // Untuk mengatasi "Undefined variable $p_image_tmp_name"
$p_image_folder = '../img/';  // Tentukan folder tempat menyimpan file gambar

if(isset($_POST['add_product'])){
    // Membersihkan input dari karakter spesial
    $p_name = mysqli_real_escape_string($koneksi, $_POST['p_name']);
    $p_description = mysqli_real_escape_string($koneksi, $_POST['p_description']);
    $p_stock = mysqli_real_escape_string($koneksi, $_POST['p_stock']);

    if(isset($_FILES['p_image']['name'])) {
        $p_image = $_FILES['p_image']['name'];
        $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
        $p_image_folder = '../img/'.$p_image;
        // Memindahkan file gambar baru ke folder yang ditentukan
        move_uploaded_file($p_image_tmp_name, $p_image_folder);
    } else {
        // Handle jika file gambar tidak diunggah
        echo "File gambar tidak diunggah.";
        // Berhenti atau lakukan tindakan lain sesuai kebutuhan
        // exit;
    }

    $insert_query = mysqli_query($koneksi, "INSERT INTO `products` (name, description, stock, image) VALUES ('$p_name', '$p_description', '$p_stock', '$p_image')") or die('query failed');

    // Mengecek apakah query berhasil mengubah data di database
    if(mysqli_affected_rows($koneksi) > 0){
        // Mengarahkan halaman ke index.php dengan mengirim data message
        header ('location: stok.php?message=success');
        // Menghentikan eksekusi skrip
        exit;
    }else{
        // Mengarahkan halaman ke index.php dengan mengirim data message
        header ('location: stok.php?message=failed');
        // Menghentikan eksekusi skrip
        exit;
    }
};


if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($koneksi, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:stok.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:stok.php');
      $message[] = 'product could not be deleted';
   };
};


$update_p_id = '';
$update_p_name = '';
$update_p_description = '';
$update_p_stock = '';
$old_p_image = '';  
$old_p_image_folder = '';
$update_p_image = '';
$update_p_image_tmp_name = '';
$update_p_image_folder = '';

if(isset($_POST['update_product'])){
    // Membersihkan input dari karakter spesial
    $update_p_id = $_POST['update_p_id']; 
    $update_p_name = $_POST['update_p_name'];
    $update_p_description = $_POST['update_p_description'];
    $update_p_stock = $_POST['update_p_stock'];

    $stringQuery = "UPDATE `products` SET name = '$update_p_name', description = '$update_p_description', stock = '$update_p_stock'";
    
    // Mengecek apakah file gambar baru ada atau tidak
    if(isset($_FILES['update_p_image'])){
        $update_p_image = $_FILES['update_p_image']['name'];
        $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
        $update_p_image_folder = '../img/'.$update_p_image;

        
        // Mengecek apakah nama file gambar baru kosong atau tidak
        if(!empty($update_p_image)){
            // Jika kosong, gunakan nama file gambar lama sebagai default
            $stringQuery .= ", image = '$update_p_image'";
        }
    }

    $stringQuery .= " WHERE id = '$update_p_id'";

    $update_query = mysqli_query($koneksi, $stringQuery);

    // Mengecek apakah query berhasil mengubah data di database
    if(mysqli_affected_rows($koneksi) > 0){
        // Mengecek apakah file gambar baru ada atau tidak
        if(is_uploaded_file($update_p_image_tmp_name)){
            // Menghapus file gambar lama
            unlink($old_p_image_folder);
            // Mengubah nama file gambar baru sesuai dengan id produk
            $new_p_image = 'product_'.$update_p_id.'.jpg';
            $new_p_image_folder = '../img/'.$new_p_image;
            // Memindahkan file gambar baru ke folder yang ditentukan
            move_uploaded_file($update_p_image_tmp_name, $new_p_image_folder);
            // Mengupdate nama file gambar baru di database
            mysqli_query($koneksi, "UPDATE `products` SET image = '$new_p_image' WHERE id = '$update_p_id'");
        }
        $message[] = 'product updated successfully';
        header('location:stok.php');
        exit; // Pastikan untuk keluar setelah melakukan redirect
    } else {
        $message[] = 'product could not be updated';
        // Tampilkan pesan error atau lakukan tindakan lain sesuai kebutuhan
    }
}


?>

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
                        <a href="" class="text-lg font-poppins font-medium"><i class="fa-solid fa-users mr-2"></i>Profile</a>
                    </li>
                    <li class="mt-8  hover:bg-slate-600 hover:text-blue-500">
                        <a href="" class="text-lg font-poppins font-medium"><i class="fa-solid fa-cart-shopping mr-2"></i>Stok Barang</a>
                    </li>
                    <li class="mt-8  hover:bg-slate-600 hover:text-blue-500">
                        <a href="" class="text-lg font-poppins font-medium"><i class="fa-solid fa-newspaper mr-2"></i></i>Kelola Artikel</a>
                    </li>
                </ul>
            </div>
            <div class="col-span-4 h-screen">
                <h1 class="text-2xl pl-5 mb-2 font-semibold pt-5"><i class="fa-solid fa-cart-shopping mr-2"></i>Stok Barang</h1>
                <div class="bg-gray-300 ml-5 w-11/12 rounded-lg h-28 shadow-lg">
                    <div class="flex flex-wrap">
                        <img src="../img/open-box.png" alt="" class="w-20 mt-5 ml-20">
                        <h1 class="font-poppins mt-8 font-semibold ml-3">Data Barang</h1>
                        <h2 class="font-poppins mt-16 -ml-14 font-semibold">40</h2>

                        <img src="../img/download-to-storage-drive.png" alt="" class="w-20 mt-5 ml-36">
                        <h1 class="font-poppins mt-8 font-semibold ml-3">Data Masuk</h1>
                        <h2 class="font-poppins mt-16 -ml-14 font-semibold">40</h2>

                        <img src="../img/upload.png" alt="" class="w-20 mt-5 ml-36">
                        <h1 class="font-poppins mt-8 font-semibold ml-3">Data Keluar</h1>
                        <h2 class="font-poppins mt-16 -ml-14 font-semibold">40</h2>
                    </div>

                    <div class="overflow-x-auto mt-10">
                        <table class="w-full text-sm text-left text-gray-50">
                            <thead class="text-xs text-gray-700 uppercase">
                                <tr>
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-primary-500 ">
                                            <label for="checkbox-all" class="sr-only">checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="col" class="p-4">Image</th>
                                    <th scope="col" class="p-4">Product</th>
                                    <th scope="col" class="p-4">Description</th>
                                    <th scope="col" class="p-4">Stock</th>
                                    <th scope="col" class="p-4"></th>
                                    <th scope="col">
                                        <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="-ml-32 py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 hover:text-white focus:outline-none rounded-lg border border-gray-200  hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200  bg-blue-500 hover:bg-blue-800">
                                            <svg fill="currentColor" enable-background="new 0 0 512 512" class="h-4 w-4 mr-2 -ml-0.5" height="32rem" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="32rem" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M256,512C114.625,512,0,397.391,0,256C0,114.609,114.625,0,256,0c141.391,0,256,114.609,256,256  C512,397.391,397.391,512,256,512z M256,64C149.969,64,64,149.969,64,256s85.969,192,192,192c106.047,0,192-85.969,192-192  S362.047,64,256,64z M288,384h-64v-96h-96v-64h96v-96h64v96h96v64h-96V384z" />
                                            </svg>
                                            Add Product
                                        </button>
                                        <!-- Main modal -->
                                        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-16px)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow ">
                                                    <!-- Modal header -->
                                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                                                        <h3 class="text-lg font-semibold text-gray-900 ">
                                                            Create New Product
                                                        </h3>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-toggle="crud-modal">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <form action="" method="post" class="p-4 md:p-5" enctype="multipart/form-data">
                                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                                            <div class="col-span-2">
                                                                <div class="max-w-md mx-auto mb-3">
                                                                    <h2 class="text-2xl font-semibold mb-5">Picture</h2>
                                                                    <input type="file" id="imageInput2" name="p_image" required class="mb-3 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                                                                    <div class="mt-5">
                                                                        <h3 class="text-xl font-semibold mb-2">Preview:</h3>
                                                                        <img id="imagePreview2" class="max-w-full h-auto">
                                                                    </div>
                                                                </div>
                                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                                                                <input type="text" name="p_name" id="name" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Type product name" required="">
                                                            </div>
                                                            <div class="col-span-2">
                                                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Product Description</label>
                                                                <textarea id="description" name="p_description" required rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write product description here"></textarea>
                                                            </div>
                                                            <div class="col-span-2">
                                                                <label for="price" class="text-sm font-medium text-gray-900 ">Stock</label>
                                                                <input type="number" name="p_stock" id="stock" required class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Masukkan Stok Barang" required="">
                                                            </div>
                                                        </div>
                                                        <button type="submit" name="add_product" value="add the product" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            Add new product
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $select_products = mysqli_query($koneksi, "SELECT * FROM `products`");
                                if(mysqli_num_rows($select_products) > 0){
                                    while($row = mysqli_fetch_assoc($select_products)){
                            ?>
                                <tr class="border-b dark:border-gray-600  ">
                                    <td class="p-4 w-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox" onclick="event.stopPropagation()" class="w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-primary-500 ">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                        <div class="flex items-center mr-3">
                                            <img src="../img/<?php echo $row['image']; ?>" class="w-20 h-10" alt="">
                                        </div>
                                    </th>
                                    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                        <div class="flex items-center">
                                            <h3><?php echo $row['name']; ?></h3>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap"><?php echo $row['description']; ?></td>

                                    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                        <div class="flex items-center">
                                        <?php echo $row['stock']; ?>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                        <div class="flex items-center space-x-4">
                                            <a href="?edit=<?php echo $row['id']; ?>">
                                                <button type="button" data-modal-target="edit-modal" data-modal-toggle="edit-modal" aria-controls="drawer-update-product" class="py-2 px-3 flex items-center text-sm font-medium text-center text-black hover:text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 bg-green-500 hover:bg-green-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                </svg>
                                                Edit
                                            </button>
                                            </a>
                                            <?php
                                            if(isset($_GET['edit'])):
                                                $edit_id = $_GET['edit'];
                                                $edit_query = mysqli_query($koneksi, "SELECT * FROM `products` WHERE id = $edit_id");
                                                $fetch_edit = mysqli_fetch_array($edit_query);
                                            ?>
                                            <!-- Edit Pop up -->                                            
                                            <div id="edit-modal" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed flex top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-16px)] max-h-full">
                                                <div class="relative p-4 w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow ">
                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                                                            <h3 class="text-lg font-semibold text-gray-900 ">
                                                                Edit Product
                                                            </h3>
                                                            <a href="?"><button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center ">
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button></a>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <!-- Crud Edit Modal -->
                                                        <section class="edit-form-container">
                                                        <form action="" id="form-modal" method="post" class="p-4 md:p-5" enctype="multipart/form-data">
                                                            <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
                                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                                <div class="col-span-2">
                                                                    <div class="max-w-md mx-auto mb-3">
                                                                        <h2 class="text-2xl font-semibold mb-5">Picture</h2>
                                                                        <input type="file" id="imageInput3" name="update_p_image" accept="image/png, image/jpg, image/jpeg" class="mb-3 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                                                                        <div class="mt-5">
                                                                            <h3 class="text-xl font-semibold mb-2">Preview:</h3>
                                                                            <img id="imagePreview3" class="max-w-full h-auto">
                                                                        </div>
                                                                    </div>
                                                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                                                                    <input type="text" name="update_p_name" value="<?php echo $fetch_edit['name']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Type product name" required="">
                                                                </div>
                                                                <div class="col-span-2">
                                                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Product Description</label>
                                                                    <textarea name="update_p_description" value="<?php echo $fetch_edit['description']; ?>" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write product description here"></textarea>
                                                                </div>
                                                                <div class="col-span-2">
                                                                    <label  class="text-sm font-medium text-gray-900 ">Stock</label>
                                                                    <input type="number" name="update_p_stock" value="<?php echo $fetch_edit['stock']; ?>"class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Masukkan Stok Barang" required="">
                                                                </div>
                                                            </div>
                                                            <button type="submit" value="update the prodcut" name="update_product" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                                </svg>
                                                                Edit Product
                                                            </button>
                                                        </form>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                endif;
                                            ?>    
                                            <a href="stok.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('are your sure you want to delete this?');" type="button"  class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    };    
                                    } else 
                                    {
                                    
                                    };
                                ?>    
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            </section>
        </div>
        </div>
    </main>

    <script src="app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>