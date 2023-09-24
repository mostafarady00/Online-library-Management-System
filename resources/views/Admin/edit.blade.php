
<font color="#ff0000"> <h1>Edit Profil</h1></font>

<form class="yourform" method="post" action="/users/{{ $users['id'] }}">

@csrf
@method('put')
<pre>

<font size="4">Admin Name</font>    <input  type="text" name="title" value="{{$users['name']}}" placeholder="Admin Name">

<font size="4">Age</font>           <input type="number" name="age" value="{{$users['age']}}"placeholder="Age">

<font size="4">Gender</font>         <input type="text" name="gender" value="{{$users['gender']}}"placeholder="Gender">

<font size="4">Email</font>          <input type="emil" name="email" value="{{$users['email']}}"placeholder="Email">

<font size="4">Phone</font>          <input type="phone" name="phone" value="{{$users['phone']}}"placeholder="Phone">

<font size="4">Address</font>        <input type="text" name="address" value="{{$users['address']}}"placeholder="Address">

                        <input  type="submit" value="Update" class="btn btn-primary">
</pre>
