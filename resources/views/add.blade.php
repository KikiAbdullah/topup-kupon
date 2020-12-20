<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1>Tambah Kupon</h1>
            </div>
            <div class="col-md-6">
                <a href="{{ url('/') }}" class="btn btn-danger btn-block float-right">Batal</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-header">
                        Tambah Kupon
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/kupon/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">ID Game</label>
                                <input type="text" class="form-control" name="game" placeholder="Masukan ID Game" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Kupon</label>
                                <input type="number" class="form-control" name="jumlah_kupon" placeholder="Masukan Jumlah Kupon" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                                <a href="{{ url('/') }}" class="btn btn-danger">Batal</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
    <script>
        $(document).ready(function() {
            $('#table_search').DataTable();
        });
    </script>
</body>

</html>