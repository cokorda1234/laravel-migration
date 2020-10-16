<html>
<head>
    <title> test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<form action="/pertanyaan" method="POST">
    @csrf
    <div class="form-group row">
        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="judul" id="judul" placeholder="Judul"  required>

        </div>
    </div>
    <div class="form-group row">
        <label for="isi" class="col-sm-2 col-form-label">isi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="isi" id="isi" placeholder="Isi" }}" required>
        </div>
    </div>


    <button type="submit" class="btn btn-primary mb-2">Input</button>
</form>
</html>
