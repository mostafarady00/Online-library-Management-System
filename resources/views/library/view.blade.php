<!DOCTYPE html>
<html lang="en">
   <head>
      <style>
   h1 {
     font-size: 38px;
     color:white;
     }
.read_more {
     display: inline-block;
     background: #6dcff6;
     color: maroon;
     max-width: 215px;
     height: 61px;
     line-height: 61px;
     width: 100%;
     font-size: 17px;
     text-align: center;
     font-weight: 500;
     transition: ease-in all 0.5s;
}

.read_more:hover {
     background: #0e0b01;
     color: #fff;
     transition: ease-in all 0.5s;
}
</style>
</head>
<body>
<header style="background-image: url(images/2.jpg);
      height: 635px;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: top center;
      position: relative;">
<div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <pre>

   <h1 >
   <font  style="color:maroon; font-family:InriaSerif-BoldItalic;"  >LIBRARY </font>
     reading is food for the mind </h1>
               <a class="read_more" href="{{ route('indexstudent') }}"><font size=4>Student </font></a><a class="read_more" href="{{ route('user') }}">Admin </a>
                                    </pre>
                                 </div>
                              </div>
                           </div>
                        </div>
</div>
</body>
</html>
