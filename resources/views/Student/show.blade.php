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
 <form>

<font color="#ff0000">  <h3 >View Student details</h3></font>
<ul>
              <li> {{ $students->name}}</li>
              <li> {{ $students->address }}</li>
              <li> {{ $students->gender }}</li>
              <li> {{$students->class }}</li>
              <li> {{$students->age }}</li>
              <li> {{ $students->phone }}</li>
              <li> {{ $students->email }}</li>
</ul>

</form>
@endsection
</body>
</html>