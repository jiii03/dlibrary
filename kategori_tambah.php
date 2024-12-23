<div class="card">
    <div class="card-header">
        <h4 class="mt4 text-center">Add Book Categories</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <?php
                    if (isset($_POST['submit'])) {
                        $kategori = $_POST['kategori'];
                        $query = mysqli_query($koneksi, "INSERT INTO kategori(kategori) values('$kategori')");

                        if($query){
                            echo '<script>alert("Tambah data berhasil!"); location.href="?page=kategori";</script>';
                        }else{
                            echo '<script>alert("Tambah data gagal, Coba lagi"); location.href="?page=kategori_tambah"</script>';
                        }
                    }
                    ?>
                    <div class="row form-group">
                        <div class="col-md-2">Category Name</div>
                        <div class="col-md-8"><input type="text" required name="kategori" class="form-control"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Save</button>
                            <button type="reset" class="btn btn-danger" name="reset" value="reset">Reset</button>
                            <a href="?page=kategori" class="btn btn-warning" name="back" value="back">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>