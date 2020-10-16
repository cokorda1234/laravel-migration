<html>
<head>
    <title> test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>

<a class="btn btn-primary" href="/pertanyaan/create" role="button">Create new post</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">No.</th>
        <th scope="col">Judul</th>
        <th scope="col">Check</th>

    </tr>
    </thead>
    <tbody>
  @foreach($post as $key => $post )
      <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $post-> judul}}</td>
          <td><a class="btn btn-primary" href="/pertanyaan/{{$post->id}}" role="button">Check</a></td>
      </tr>
  @endforeach
    </tbody>
</table>
</body>
