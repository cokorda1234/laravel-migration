<html>
<head>
    <title> test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>



<table class="table">
    <thead>
    <tr>
        <th scope="col">Id pertanyaan.</th>
        <th scope="col">Judul</th>
        <th scope="col">isi</th>
        <th scope="col">edit</th>
        <th scope="col">delete</th>


    </tr>
    </thead>
    <tbody>

        <tr>
            <td>1</td>
            <td>{{ $post-> judul}}</td>
            <td>{{ $post-> isi}}</td>
            <td><a class="btn btn-primary" href="/pertanyaan/{{$post->id}}/edit/" role="button">Edit</a></td>
            <td>
                <form action="/pertanyaan/{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-secondary" value="Delete" href="/pertanyaan/{{$post->id}}/edit/" role="button">
                </form>
            </td>
        </tr>

    </tbody>
</table>
</body>
