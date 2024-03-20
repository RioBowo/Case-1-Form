<?php include 'header.php'; ?> 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST['email'];
                $kendala = $_POST['kendala'];
                $foto = $_FILES['foto']['name'];
                $temp_foto = $_FILES['foto']['tmp_name'];
                move_uploaded_file($temp_foto, "uploads/" . $foto);

                // Simpan informasi ke file. txt
                $file_content = "Email: $email\n";
                $file_content .= "Deskripsi Kendala: $kendala\n";
                $file_content .= "Foto Pasien: $foto\n";

                $file_path = "uploads/data.txt";
                file_put_contents($file_path, $file_content, FILE_APPEND);

                echo "<h2>Terima Kasih Keluhan Anda Telah Terkirim</h2>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Deskripsi Kendala:</strong> $kendala</p>";
                echo "<p><strong>Foto Pasien:</strong> <img src='uploads/$foto' width='200'></p>";
            }
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
