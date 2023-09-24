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
 <font color="#ff0000">  <h3 align="center">Add Books</h3></font>
<form method="post" action="/books" enctype="multipart/form-data">
    @csrf
  Name
  <input type="text" name="name" placeholder="Name">

  Category
  <input type="text" name="category" placeholder="Category">

  Author
  <input type="text" name="auther" placeholder="Author">

  Status
  <input type="text" name="status" placeholder="Status">
  <input type="file" name="img" class="form-input">

  <input type="submit" value="Add" class="btn btn-primary">
    </pre>
</form>
@endsection
</body>
</html>