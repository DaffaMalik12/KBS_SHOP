<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Admin Page</title>
</head>
<?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:login.php?pesan=gagal");
    }
    ?>
    <!-- Koneksi Database -->
    <?php
    include "../koneksi.php";
    $select = "SELECT * FROM admin";
    $hasil = mysqli_query($koneksi, $select);
    $data = mysqli_fetch_array($hasil);
    ?>
<body>
    <header>
        <div class="container">
            <div class="flex px-4 shadow-lg">
                <img src="../img/Screenshot_2023-09-11_182950-removebg-preview.png" alt="" class="w-20 p-4">
                <a href="" class="pt-5 font-semibold text-2xl font-poppins">Admin</a>
                <div class="ml-auto">
                    <a href="../login.php"><i class="fa-solid fa-arrow-right-from-bracket text-4xl  pr-4"></i></a>
                    <a href=""><i class="fa-solid fa-circle-user text-5xl pt-3"></i></a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="grid grid-cols-5 gap-4">
            <div class="col-span-1 bg-slate-200 h-screen">
                <h1 class="text-slate-800 text-center pt-8">Main Menu</h1>
                <ul class="ml-3 mb-3 pt-5">
                    <li class="hover:bg-slate-600 hover:text-blue-500">
                        <a href="#home" class="text-lg font-poppins font-medium"><i class="fa-solid fa-house mr-2"></i>Dashboard</a>
                    </li>
                    <li class="mt-8  hover:bg-slate-600 hover:text-blue-500">
                        <a href="profile.php" class="text-lg font-poppins font-medium"><i class="fa-solid fa-users mr-2"></i>Profile</a>
                    </li>
                    <li class="mt-8  hover:bg-slate-600 hover:text-blue-500">
                        <a href="stok.php" class="text-lg font-poppins font-medium"><i class="fa-solid fa-cart-shopping mr-2"></i>Stok Barang</a>
                    </li>
                    <li class="mt-8  hover:bg-slate-600 hover:text-blue-500">
                        <a href="admin_artikel.php" class="text-lg font-poppins font-medium"><i class="fa-solid fa-newspaper mr-2"></i></i>Kelola Artikel</a>
                    </li>
                </ul>
            </div>
            <div class="col-span-4 h-screen">
                <li>
                <h1 class="text-2xl pl-5 mb-2 font-semibold pt-5"><i class="fa-solid fa-house mr-2"></i>Dashboard</h1>
                </li>
                <div class="bg-gray-500 ml-5 w-11/12 rounded-lg h-28">
                    <h1 class="text-2xl font-poppins text-white font-semibold pl-3 pt-2">Welcome Admin KBS SHOP</h1>
                    <h2 class="text-md font-poppins text-white font-medium pt-3 pl-3">Saya Senang Anda Telah Berada Disini</h2>
                    <div class="float-right -mt-16 mr-20">
                        <img src="../img/foto kece.png" alt="" class="w-24">
                    </div>
                    <?php
                    // Koneksi ke database

                    // Query untuk menghitung jumlah baris dari tabel t_artikel
                    $query1 = "SELECT COUNT(*) as total_rows FROM t_artikel";
                    $result1 = mysqli_query($koneksi, $query1);

                    // Query untuk menghitung jumlah baris dari tabel products
                    $query2 = "SELECT COUNT(*) as total_rows FROM products";
                    $result2 = mysqli_query($koneksi, $query2);

                    // Memeriksa apakah query pertama berhasil dijalankan
                    if ($result1) {
                        // Mengambil hasil query
                        $row1 = mysqli_fetch_assoc($result1);

                        
                    } else {
                        // Menampilkan pesan kesalahan jika query pertama tidak berhasil
                        echo "Error: " . mysqli_error($koneksi);
                    }

                    // Memeriksa apakah query kedua berhasil dijalankan
                    if ($result2) {
                        // Mengambil hasil query
                        $row2 = mysqli_fetch_assoc($result2);

                        
                    } else {
                        // Menampilkan pesan kesalahan jika query kedua tidak berhasil
                        echo "Error: " . mysqli_error($koneksi);
                    }
                    ?>
                    
                    <div class="flex gap-2 mt-12">
                    <div class="w-52-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 p-6 box-border">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Data Barang</h5>
                        <h1 class="text-gray-700 text-2xl font-semibold">Jumlah Data Pada Barang Yaitu: <?php echo $row2["total_rows"] ?></h1>
                    </div>
                    <div class="w-52-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 p-6 box-border">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Data Artikel</h5>
                        <h1 class="text-gray-700 text-2xl font-semibold">Jumlah Data Pada Artikel Yaitu: <?php echo $row1["total_rows"]; ?></h1>
                    </div>
                    </div>
                    <div class="mt-5">
                        <canvas id="myChart" width="600" height="180"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </main>

     <script>
        // Define required functions and variables
        const inputs = {
            min: -100,
            max: 100,
            count: 8,
            decimals: 2,
            continuity: 1
        };

        // Placeholder for Utils object
        const Utils = {
            CHART_COLORS: {
                red: 'rgb(255, 99, 132)',
                blue: 'rgb(54, 162, 235)'
                // Add more colors if needed
            },
            transparentize: (color) => {
                // Implement transparentize logic
                return color; // Placeholder logic, you may replace it with actual logic
            },
            months: (options) => {
                // Implement months logic
                return ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'];
            },
            numbers: (options) => {
                // Implement numbers logic
                return [1, 2, 3, 4, 5, 6, 7, 8]; // Placeholder logic, you may replace it with actual logic
            },
            srand: (seed) => {
                // Implement srand logic
            }
        };

        const generateLabels = () => {
            return Utils.months({count: inputs.count});
        };

        const generateData = () => {
            const data = [];
            for (let i = 0; i < inputs.count; i++) {
                data.push(Math.random() * (inputs.max - inputs.min) + inputs.min);
            }
            return data;
        };

        let smooth = false;

        // Your provided code
        const data = {
            labels: generateLabels(),
            datasets: [
                {
                    label: 'Data Barang',
                    data: generateData(),
                    borderColor: Utils.CHART_COLORS.red,
                    backgroundColor: Utils.CHART_COLORS.red,
                    fill: true
                },
                {
                    label: 'Data Artikel',
                    data: generateData(),
                    borderColor: Utils.CHART_COLORS.blue,
                    backgroundColor: Utils.transparentize(Utils.CHART_COLORS.blue),
                    fill: true
                }
            ]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                plugins: {
                    filler: {
                        propagate: false,
                    },
                    title: {
                        display: true,
                        text: (ctx) => 'drawTime: ' + ctx.chart.options.plugins.filler.drawTime
                    }
                },
                pointBackgroundColor: '#fff',
                radius: 10,
                interaction: {
                    intersect: false,
                }
            },
        };

        const actions = [
            {
                name: 'Grafik Data',
                handler: (chart) => {
                    chart.options.plugins.filler.drawTime = '   ';
                    chart.update();
                }
            }
           
        ];

        // Initialize the Chart
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, config);

        // Attach event listeners to buttons (replace with actual button IDs)
        document.getElementById('drawBeforeDatasetDraw').addEventListener('click', () => actions[0].handler(myChart));
        // ... (attach listeners for other buttons)
    </script> 
    
</body>

</html>