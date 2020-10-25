<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add List</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
    <div class="container">
        <div class="col-12">
            <form action="/insert" method="post">
                <div class="card">
                    <div class="card-header">
                        <h3>Add List</h3>
                    </div>
                    <div class="card-body">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul">
                        <br/>
                        <label for="pesan">Yang Dilakukan</label><br>
                        <textarea name="pesan" id="pesan" cols="145" rows="10"></textarea>
                        <br/>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-success" style="width: 100%;">Add List</button>
                    </div>
                </div>
                <br/>
                <br/>
                <br/>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>