<html>
    <head>
</head>
<body>
<header style="background-image: url(images/2.jpg);
      height: 770px;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: top center;
      position: relative;">
    @extends("dashboard.frontenddashboard.homedash")
@section('content')<pre>
<font color="#ff0000"> <h3>Edit Book</h3></font>
<form method="post" action="/books/{{ $book->id }}"  enctype="multipart/form-data">
@csrf
@method('put')
  Name<input type="text" name="name" value="{{$book->name}}" placeholder="Name">

  Category <input type="text" name="category" value="{{$book->category}}"placeholder="Category">

  Author <input type="text" name="auther" value="{{$book->auther}}"placeholder="Author">

  Status <input type="text" name="status" value="{{$book->status}}"placeholder="Status">

  Status <input type="text" name="img" value="{{$book->img}}">
  <input type="submit" value="Update">
  </pre>
  </form>
@endsection