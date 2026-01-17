
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Fill the form</title>
</head>
<body>
    <form action="includes/connect.php" method="post">
        <label>First Name: </label>
        <input type="text" class="name_box" name="firstName"><br>
        <label>Last Name: </label>
        <input type="text" class="name_box" name="lastName"><br>
        <label>Age: </label>
        <input type="number" class="name_box" name="age"><br>
        <label>Gender: </label>
        <label>Male</label>
        <input type="radio" class="name_box" name="gender" value="m">
        <label>Female</label>
        <input type="radio" class="name_box" name="gender" value="n"><br>
        <label>Other</label>
        <input type="radio" class="name_box" name="gender" value="o"><br>
        <label>Mobile number: </label>
        <input type="number" class="name_box" name="phNumber"><br>
        <input type="submit" class="name_box" name="Submit"><br>

    </form>
</body>
</html>