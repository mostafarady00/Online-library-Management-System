<html>
    <head>
        <style>
            td,th{

                color:black;
                background-color:white;
            }
        </style>
</head>
<body>
<header style="background-image: url(images/2.jpg);
      height: 770px;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: top center;
      position: relative;">

    @extends("dashboard.frontenddashboard.homedash")
@section('content')
<div align="center">
    <font color="#ff0000"><h3 align="center">List All Books</h3></font>
<table class="table" border="3" bordercolor="#336699"  >
<tr><td><a class="btn btn-primary" href="books/add">Add</a></td></tr>
    <tr>

        <th>#</th> <th>Name</th> <th>Category</th>    <th>Auther</th>
        <th>status</th>   <th>Created_At</th>
        <th>IMG</th>
        <th>EDIT</th>          <th>VIEW</th>        <th>DELETE</th>

    </tr>

    @foreach ($books as $book)
    <tr><font color="#ff0000">
        <td>{{ $book->id }}</td>
        <td>{{ $book->name }}</td>
        <td>{{ $book->category }}</td>
        <td>{{ $book->auther}}</td>
        <td>{{ $book->status}}</td>
        <td>{{ $book->created_at}}</td></font>
        <td>
           <img src="public/upload/{{ $book->img}}"/>
        </td>
        <td><a class="btn btn-primary"  href="/books/{{$book->id}}/edit">Edit</a></td>
        <td><a class="btn btn-primary" href="/books/{{$book->id}}">VIEW</a></td>
        <td>
            <form action="books/{{$book->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </td>
    </tr>

@endforeach
</table>
</div>
@endsection
</body>
</html>
