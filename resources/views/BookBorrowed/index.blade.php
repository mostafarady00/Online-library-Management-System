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
    <font color="#ff0000"> <h3 align="center">Borrowed Books</h3></font>
<table class="table" border="3" bordercolor="#336699"  >
    <tr>
                            <th>ID</th> 
                            <th>S.No</th>
                            <th>Student Name</th>
                            <th>Book Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Return Date</th>
                            <th>Status</th> 

    </tr>
    @foreach ($Borrowed_book as $book)
        <tr class="{{ $book->issue_status == 'N' ? 'issued' : '' }}">
            <td>{{ $book->id }}</td>
            <td>{{ $book->student->id}}</td>
            <td>{{ $book->student->name}}</td>
            <td>{{ $book->book->name }}</td>
            <td>{{ $book->student->phone }}</td>
            <td>{{ $book->student->email }}</td>
            <td>{{ $book->return_day}}</td>
            <td>
                 @if ($book->issue_status == 'Y')
                     <span class='badge badge-success'>Returned</span>
                 @else
                     <span class='badge badge-danger'>Borrowedd</span>
                 @endif
           </td>
        @endforeach   
    </table>
</div>
@endsection
</body>
</html>