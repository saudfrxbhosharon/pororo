<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['csvData'])) {
        // Mendapatkan data CSV yang dikirim dari frontend
        $csvData = $_POST['csvData'];

        // Menyimpan data CSV ke file
        file_put_contents('data.csv', $csvData);

        echo "Data CSV berhasil disimpan.";
    } else {
        echo "Data CSV tidak ditemukan.";
    }
} else {
    echo "Metode request tidak valid.";
}
?>
