<?php
$produk = [
    [
        "nama" => "Laptop Asus ROG",
        "deskripsi" => "Laptop gaming performa tinggi",
        "harga" => 15000000,
        "gambar" =>
            "https://www.jktgadget.com/wp-content/uploads/2024/03/ASUS-ROG-STRIX-G614JVR-1.jpg",
    ],
    [
        "nama" => "Smartphone Samsung Galaxy S21",
        "deskripsi" => "Smartphone flagship dengan kamera canggih",
        "harga" => 12000000,
        "gambar" =>
            "https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//105/MTA-36734865/samsung_samsung_galaxy_s21_g991b_8-128gb_full01_ss7qsrlf.jpg",
    ],
    [
        "nama" => "Sony PlayStation 5",
        "deskripsi" => "Konsol game generasi terbaru",
        "harga" => 8000000,
        "gambar" =>
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYMruc3CdinRumKN_VF-ftED8NXGYlR10LIg&s",
    ],
    [
        "nama" => "Apple Watch Series 7",
        "deskripsi" => "Smartwatch dengan fitur kesehatan lengkap",
        "harga" => 6000000,
        "gambar" =>
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeaZZtR-EtF3fmT28vCRo5bMcOB-dhq_zPWQ&s",
    ],
    [
        "nama" => "Canon EOS R5",
        "deskripsi" => "Kamera mirrorless profesional",
        "harga" => 45000000,
        "gambar" =>
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXVm-sZS_TAabuyprxbHiX17csgH2yvZ30RQ&s",
    ],
    [
        "nama" => "DJI Mavic Air 2",
        "deskripsi" => "Drone dengan kamera 4K",
        "harga" => 12500000,
        "gambar" =>
            "https://bursakameraprofesional.co.id/pub/media/catalog/product/cache/0ee050c3ffc3555709b9bb6062f4d7e9/m/a/mavic_air_2.jpg",
    ],
]; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Daftar Produk</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($produk as $item): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo $item[
                            "gambar"
                        ]; ?>" class="card-img-top" alt="<?php echo $item[
    "nama"
]; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item[
                                "nama"
                            ]; ?></h5>
                            <p class="card-text"><?php echo $item[
                                "deskripsi"
                            ]; ?></p>
                            <p class="card-text"><strong>Rp <?php echo number_format(
                                $item["harga"],
                                0,
                                ",",
                                "."
                            ); ?></strong></p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary w-100">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
