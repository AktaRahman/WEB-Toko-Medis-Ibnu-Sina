<!DOCTYPE html>
<html lang="en">

<head>
    <title>maribelajarcoding.com</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            <div class="container">
                <h1><a href="dashboard.php">.fu<span>rni</span>ture</a></h1>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="data-kategori.php">Data Kategori</a></li>
                    <li><a href="data-produk.php">Data Produk</a></li>
                    <li><a href="data_pelanggan.php">Data Pelanggan</a></li>
                    <li><a href="latihan2.php">Kirim Email</a></li>
                    <li><a href="data_admin.php">Data Admin</a></li>
                    <li><a href="keluar.php">Keluar</a></li>

                </ul>
            </div>
        </header>
        <h2 align="center">Kirim Email Attachment dengan PHP</h2>
        <form class="form-horizontal" method="POST" enctype='multipart/form-data' id="FormEmail">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email Penerima:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Nama Penerima:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Subjek:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="subjek" name="subjek">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pesan">Pesan:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="pesan" name="pesan"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Attachment">Attachment:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="attachment" name="attachment">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </form>
        <h4 align="center"><a href="https://maribelajarcoding.com" target="_blank">maribelajarcoding.com</a></h4>
    </div>
    <script type="text/javascript">
        $("form").submit(function(e) {
            e.preventDefault();
            var form = $('#FormEmail')[0];

            var data = new FormData(form);
            $.ajax({
                url: 'send-mail.php',
                type: 'post',
                enctype: 'multipart/form-data',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    alert(data);

                }
            });
        });
    </script>
</body>

</html>