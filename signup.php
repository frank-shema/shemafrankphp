<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./input.css">
    <style>
      body{
    background-color: #cabbe9;
    display: grid;
    height: 100vh;
    place-items: center;
}
    </style>
</head>

<body>
  
    <form action="signupdb.php" method="POST" class="fform">
    <h1>Signup Form</h1>
        <fieldset class="form">
            <div>
                <legend>Personal Information</legend>
            </div>
            <div> <label for="firstname">firstname:</label><br>
                <input type="text" name="firstname"><br>
            </div>

            <div><label for="lastname">lastname:</label><br>
                <input type="text" name="lastname"><br>
            </div>

            <div>
                <label for="email">Email:</label><br>
                <input type="email" name="email"><br>
            </div>

            <div>
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password"><br>
            </div>

            <div><label for="Gender">Gender</label>
                <input type="radio" value="Male" name="Gender">male
                <input type="radio" value="Female" name="Gender">Female
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </fieldset>
    </form>
</body>

</html>