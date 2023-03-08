<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8">
            <h3>
              Belanja Online
            </h3>
            <hr>
            <br>
            <div class="row">
              <div class="col-md-12">
                <form method="POST">
                  <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">costumer</label>
                    <div class="col-8">
                      <input id="nama" name="nama" placeholder="nama costumer" type="text" class="form-control">
                    </div>
                  </div>
                  <br>
                  <div class="form-group row">
                    <label class="col-4" nama="produk">Pilih produk</label>
                    <div class="col-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="TV" type="radio" class="custom-control-input" value="TV">
                        <label for="produk_0" class="custom-control-label">TV</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="mesin cuci" type="radio" class="custom-control-input" value="mesin cuci">
                        <label for="produk_1" class="custom-control-label">MESIN CUCI</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="kulkas" type="radio" class="custom-control-input" value="kulkas">
                        <label for="produk_2" class="custom-control-label">KULKAS</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                      <input id="jumlah" name="jumlah" placeholder="jumlah" type="number" class="form-control">
                    </div>
                  </div>
                  <br>
                  <div class="form-group row">
                    <div class="offset-4 col-8">
                      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
              <div class="list-group-item">
                TV : 4.200.00
              </div>
              <div class="list-group-item">
                KULKAS : 3.100.000
              </div>
              <div class="list-group-item">
                MESIN CUCI : 3.800.00
              </div>
              <div class="list-group-item justify-content-between">
              </div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga Dapat Berubah Setiap Saat
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
 
 $price = [
  'TV' => 4200000,
  'mesin cuci' => 3100000,
  'kulkas' => 3800000,
];
if(isset($_POST['proses'])){
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

echo "Nama Customer: $nama <br>";
echo "Produk: $produk <br>";
echo "Jumlah Pembelian: $jumlah <br>";
echo "Harga:" . $price [$produk] * $jumlah;
}


  ?>
</body>
</html>