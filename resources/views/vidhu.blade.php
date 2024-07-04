<!DOCTYPE html>
<html lang="en">
<head><title>PERSONALINFO</title></head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="{{asset('css/effects.css')}}"></link>


<body>

<h1 class="animated-text">PERSONAL INFORMATION</h1>
<hr>
<h1 style="color:yellow ;text-align:center;">Welcome!</h1>
<p class="para">Hello there...Fill out the form below to let us know about you</p>



<form>
<div class="container">
        
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

<div class="form-group">
  <label for="gender">Gender:</label>
<br>

<input type='radio' value='male' name='on'>Male
<input type='radio' value='female' name='on'>Female
<input type='radio' value='others' name='on'>Others
</div>


<div class="form-group">
<label for="birthdate">Date of Birth:</label>
  <input type="date" id="birthdate" name="birthdate">
</div>
<div class="form-group">

<label for="">Hobbies:</label>
<br>
<input type='radio' name='sing' value='on'>Singing
<input type='radio' name='dance' value='on'>Dancing
<input type='radio' name='read' value='on'>Reading
<input type='radio' name='paint' value='on'>Painting
</div>

<div class="form-group">

<label for="age">Age:</label>
<input type='number' value='Age' name='age'>
</div>
<div class="form-group">

<label for="mobile">Mobile no:</label>

<input type='text' name='mobileno' 'size=20>
</div>
<div class="form-group">

<label for="state">State:</label>

<select id="state" name="state">
<option value="TS" > Telangana</option>
<option value="AP"> Andhra Pradesh</option>
<option value="TN" >Tamil Nādu</option>
<option value="MH"> Maharashtra</option>
<option value="G"> Gujarat</option>
</select>
</div>
<div class="form-group">

<label for="address">Address:</label>

<textarea cols=50 rows=5  name="address" ></textarea>
</div>
<div class="form-group">

<label for="photo">Photo:</label>
<input type="file" id="file" name="file"><br><br><br>
<br>
<table border=1>
<tr>
<th>Name<th>
<th>Age</th>
<th>Gender</th>
<th>Email</th>
<th>Mobile No</th>
</tr>
<tr>
<td>Krish<td>
<td>19</td>
<td>male</td>
<td>dfcgvhkjk@gmail.com</td>
<td>1234567890</td>
</tr>
<tr>
<td>Vrinda<td>
<td>20</td>
<td>Female</td>
<td>dbvgdck@gmail.com</td>
<td>0987654321</td>
</tr>
</table>
<br>

<input type='submit' value='Submit'>

<input type='reset'  value='Reset' >

</form>
</body>
</html>



