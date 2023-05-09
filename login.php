<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./input.css" />
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
   
    <form action="loginconn.php" method="POST" class="fform">
    <h1>Login Form</h1>
      <fieldset class="form">
        <div>
          <label for="email">Email:</label><br />
          <input type="email" name="email" id="email" /><br />
        </div>
        <div>
          <label for="password">Password:</label><br />
          <input type="password" name="password" id="password" /><br />
        </div>
        <div>
          <button type="submit">Login</button>
        </div>
      </fieldset>
    </form>
  </body>
</html>
