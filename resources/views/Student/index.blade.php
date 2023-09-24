<html>
    <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<font color="#ff0000"> <h3 align="center">List All Students</h3></font>
          <div class="search">
          <input type="search"  class="form-control" id="search" placeholder="Search By Id">
          </div>
<div id="Content">
  <table class="table" border="3" bordercolor="#336699">
    <tr>
                            <th>S.No</th>
                            <th>Student Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>View</th>
    </tr>
    @foreach ($students as $student)
                                <tr>
                                    <td class="id">{{ $student->id}}</td>
                                    <td>{{ $student->name }}</td>
                                    <td class="text-capitalize">{{ $student->gender }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td><a class="btn btn-primary"  href="students/{{$student->id}}">View</a></td>
                                
                                </tr>
                            @endforeach
        </div>                          
</table>
</div>
<script type="text/javascript">
  $('#search').on('keyup', function() {
    var value = $(this).val();
    $.ajax({
      type: 'get',
      url: '{{URL::to('search')}}',
      data: { 'search': value },
      success: function(data) {
        console.log(data);
        $('#Content').html(data);
      }
    });
  });
</script>
@endsection
</body>
</html>