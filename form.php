<?php include 'header.php'; ?>
<div class="container">
    <section class="form-section">
        <h2>Konseling Dokter Umum</h2>
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="kendala">Deskripsi Kendala:</label>
                <textarea class="form-control" id="kendala" name="kendala" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Upload Foto Pasien:</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
</div>
<?php include 'footer.php'; ?>
