<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang-Juragankipas-AC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="landing_pages.css">
    <title>Daftar Barang</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">Juragankipas-AC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="landing_page.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="barang.php">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            width: 200px; /* Lebar card */
            text-align: center;
        }
        .card img {
            width: 100%; /* Gambar memenuhi lebar card */
            height: auto; /* Mempertahankan aspek rasio */
            border-radius: 8px;
        }
        .card h3 {
            font-size: 1.2em;
            margin: 10px 0;
        }
        .card p {
            font-size: 1em;
            color: #333;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Daftar Barang</h2>

<div class="container">
<div class="card">
    <img src="AC1.jpg" alt="AC Model XYZ">
    <div class="card-body">
        <h5 class="card-title">Ukuran besar</h5>
        <p class="card-text">
            - Daya Pendinginan: 3 PK
            - Energi Kelas: A++
            - Fitur: Pendinginan Cepat, Hemat Energi, Angin lebih kencang
            - Dimensi: 120 x 30 x 20 cm
            - Garansi: 6 bulan
        </p>
        <a href="https://wa.me/6281818882111" class="btn btn-success">Hubungi via WhatsApp</a>
    </div>
</div>

        

<div class="card">
    <img src="AC5.jpg" alt="AC Model XYZ">
    <div class="card-body">
        <h5 class="card-title">Ukuran sedang</h5>
        <p class="card-text">
            - Daya Pendinginan: 2 PK
            - Energi Kelas: A++
            - Fitur: Pendinginan Cepat, Hemat Energi, Angin lebih kencang
            - Dimensi: 85 x 30 x 20 cm
            - Garansi: 6 bulan
        </p>
        <a href="https://wa.me/6281818882111" class="btn btn-success">Hubungi via WhatsApp</a>
    </div>
</div>

</div>  
    <div id="contact" class="footer">
        <h3>Hubungi Kami</h3>
        <p>Email: </p>
        <p>Telepon:(62)81818882111</p>
        <p>© 2024 Multi Mandiri. Semua hak dilindungi.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>