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
@section('content')
<x-app-layout>
    <x-slot name="header">
         <h2 >
        <div id="content">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"> HELLO {{ Auth::user()->name }}</h1>
            </div>
</div> 
        </h2>
    </x-slot> 
    <header style="background-image: url(images/2.jpg);
      height: 600px;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: top center;
      position: relative;">
</x-app-layout>
@endsection
    <body>
</html>


    