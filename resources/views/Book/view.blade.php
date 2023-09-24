<html>
    <head>
    <style>
            li{

                color:black;

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
<font color="#ff0000"><h3 align="center">View Book</h3></font>

   <ul>
    <li>{{$book->id}}</li>
    <li>{{$book->name}}</li>
    <li>{{$book->category}}</li>
    <li>{{$book->auther}}</li>
    <li>{{$book->status}}</li>
    <li>{{$book->img}}</li>


</ul>
@endsection
</body>
</html>
