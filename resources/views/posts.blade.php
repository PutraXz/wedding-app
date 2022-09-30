


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row g-3 align-items-center mt-5 mx-auto" >
            <form action="/store" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="input-group mb-3">
                <div class="col-4">
                    <label for="title" class="col-form-label">Nama title</label>
                </div>
                <div class="col-3">
                    <input type="text" name="title" class="form-control" placeholder="Masukkan Nama Url">
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-4">
                    <label for="name_groom" class="col-form-label">Nama Pengantin Laki-Laki</label>
                </div>
                <div class="col-3">
                    <input type="text" name="name_groom" class="form-control" placeholder="Nama Pengantin Laki-Laki">
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-4">
                    <label for="name_bride" class="col-form-label">Nama Pengantin Perempuan</label>
                </div>
                <div class="col-3">
                    <input type="text" name="name_bride" class="form-control" placeholder="Nama Pengantin Perempuan">
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-4">
                    <label for="child_groom" class="col-form-label">Anak Dari Ke</label>
                </div>
                <div class="col-3">
                    <input type="text" name="child_groom" class="form-control" placeholder="Anak Dari Ke-(Laki-Laki)">
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-4">
                    <label for="father_groom" class="col-form-label">Ayah Laki-Laki</label>
                </div>
                <div class="col-3">
                    <input type="text" name="father_groom" class="form-control" placeholder="Ayah Laki-Laki">
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-4">
                    <label for="mother_groom" class="col-form-label">Ibu Laki-Laki</label>
                </div>
                <div class="col-3">
                    <input type="text" name="mother_groom" class="form-control" placeholder="Ibu Laki-Laki">
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-4">
                    <label for="child_bride" class="col-form-label">Anak Dari Ke</label>
                </div>
                <div class="col-3">
                    <input type="text" name="child_bride" class="form-control" placeholder="Anak Dari Ke-(Perempuan)">
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-4">
                    <label for="date_count" class="col-form-label">date</label>
                </div>
                <div class="col-3">
                    <input type="datetime-local" name="date_count" class="form-control" >
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-4">
                    <label for="image" class="col-form-label">Image</label>
                </div>
                <div class="col-3">
                    <input type="file" name="image" class="form-control" >
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-4">
                    <label for="father_bride" class="col-form-label">Ayah Perempuan</label>
                </div>
                <div class="col-3">
                    <input type="text" name="father_bride" class="form-control" placeholder="Ayah Perempuan">
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-4">
                    <label for="mother_bride" class="col-form-label">Ibu Perempuan</label>
                </div>
                <div class="col-3">
                    <input type="text" name="mother_bride" class="form-control" placeholder="Ibu Perempuan">
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-3">
                    <input type="submit" name="submit">
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
