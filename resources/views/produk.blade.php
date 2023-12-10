<?php
// Mendapatkan nilai dari parameter 'page'
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Konten untuk setiap halaman
$content = '';

switch ($page) {
    case 'dashboard':
        $content = 'Ini adalah halaman Dashboard';
        break;
    case 'pemesanan':
        $content = 'Ini adalah halaman Pemesanan';
        break;
    case 'master_pengguna':
        $content = 'Ini adalah halaman Master Pengguna';
        break;
    case 'layanan':
        $content = 'Ini adalah halaman Layanan';
        break;
    case 'produk':
        $content = "Ini adalah halaman Produk";
        break;
    case 'jenis_produk':
        $content = 'Ini adalah halaman Jenis Produk';
        break;
    case 'profilku':
        $content = 'Ini adalah halaman Profilku';
        break;
    case 'settings':
        $content = 'Ini adalah halaman Settings';
        break;
    default:
        $content = 'Halaman tidak ditemukan';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: left;
            border-bottom: 2px solid #ffa500 ; /* Add a bottom border */
        }

        #dashboard {
            width: 100%;
            height: 100vh;
            display: flex;
            transition: margin-left 0.5s;
        }

        #sidebar {
            width: 250px;
            height: 100%;
            background-color: #333;
            padding-top: 20px;
            color: white;
        }

        #sidebar a {
            text-decoration: none; /* Menghilangkan underline */
            color: white;          /* Mengubah warna teks menjadi putih atau warna yang diinginkan */
        }

        #sidebar a:hover {
            color: yellow;         /* Mengubah warna teks saat dihover */
        }

        #content {
            flex: 1;
            padding: 20px;
        }

        #menu-btn {
            font-size: 24px;
            cursor: pointer;
        }

        #drag-btn {
            cursor: pointer;
            margin-top: 10px;
            margin-left: 220px;
            padding: 2px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
        }

        .double-arrow-button {
            display: inline-flex;
            align-items: center;
            padding: 10px 15px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Gaya untuk ikon panah */
        .arrow-icon {
            margin: 0 5px; /* Jarak antara teks dan ikon */
        }

        /* Ikon panah menggunakan Unicode */
        .leftright-arrow::before {
            content: '\2194'; /* Unicode untuk panah ke kiri */
            font-size: 18px;
        }

        .double-br {
            margin-bottom: 20px; /* Atur ruang antara elemen */
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>
    <header>
        <h1>@yield('header', 'DEWISATA')</h1>

    </header>

    <div id="dashboard">
        <div id="sidebar">
            <div id="menu-btn">&#9776; Menu</div> <br>
            <ul>
                <a href="?page=dashboard">&#128202; Dashboard</a>
                <p class="double-br"></p>

                <a href="?page=pemesanan">🛒 Pemesanan</a>
                <p class="double-br"></p>

                <a href="?page=master_pengguna">👑 Master Pengguna</a>
                <p class="double-br"></p>

                <a href="?page=layanan">🛎️ Layanan</a>
                <p class="double-br"></p>

                <a href="?page=produk">📦 Produk</a>
                <p class="double-br"></p>
                
                <a href="?page=jenis_produk">🛍️ Jenis Produk</a>
                <p class="double-br"></p>

                <a href="?page=profilku">👤 Profilku</a>
                <p class="double-br"></p>

                <a href="?page=settings">🛠️ Settings</a>
                <p class="double-br"></p>
                
            </ul>
            <button id="drag-btn" class="double-arrow-button">
                <span class="arrow-icon leftright-arrow"></span>
            </button>
        </div>

        <div id="content">
            @if($content == 'Ini adalah halaman Produk')
                <table border="1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Kuota</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penawarans as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->nama_produk }}</td>
                                <td>{{ $product->kuota }}</td>
                                <td><img src="{{ $product->gambar }}" alt="Product Image" style="height: 50px; width: auto;"></td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            @else
                {{-- Konten yang akan ditampilkan jika kondisi salah --}}
                <p>This content is displayed when the condition is false.</p>
            @endif

        </div>
    </div>

    <script>
        document.getElementById("menu-btn").addEventListener("click", function () {
            var sidebar = document.getElementById("sidebar");
            var content = document.getElementById("content");

            if (sidebar.style.marginLeft === "0px") {
                sidebar.style.marginLeft = "-220px";
                content.style.marginLeft = "0";
            } else {
                sidebar.style.marginLeft = "0px";
                content.style.marginLeft = "0";
            }
        });
        document.getElementById("drag-btn").addEventListener("click", function () {
            var sidebar = document.getElementById("sidebar");
            var content = document.getElementById("content");

            if (sidebar.style.marginLeft === "0px") {
                sidebar.style.marginLeft = "-220px";
                content.style.marginLeft = "0";
            } else {
                sidebar.style.marginLeft = "0px";
                content.style.marginLeft = "0";
            }
        });
    </script>

</body>
</html>