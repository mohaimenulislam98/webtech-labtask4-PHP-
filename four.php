<!DOCTYPE html>
<html>
<body>
<h>Name</h>
<form>
<input type="text" placeholder="Enter name" name="uname" required>
</form>
<h>Email</h>
<form>
<input type="email" placeholder="Enter email" name="email" required>
</form>
<h>Username</h>
<form>
<input type="text" placeholder="Enter name" name="uname" required>
</form>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
<h>Gender</h>
<form>
<input type="radio" name="gender" id="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female<input type="radio" name="gender" value="Other">Other<br><?php echo $gendererror;?>
</form>
<h>Date of birth</h>
<form action="/action_page.php">
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday">
<br><br>
<input type="submit" value="Submit"> <input type="return" value="return">
</form>
</html>

​
