<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    background-color: #cabbe9;
    display: grid;
    height: 100vh;
    place-items: center;


}
        .container{
    background-color: #ffcef3;
    height: 50vh;
    width: 50vw;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: auto;
    border-radius: 24px;
    align-content: center;
}
.buttons{
    display: flex;
    flex-direction: row;
    gap: 10px;
    justify-content: end;   
}
.buttons button{
    background-color: #071a52;
    border: 1px solid #071a52;
    border-radius: 24px;
    padding: 10px;
    color: white;
    cursor: pointer;

}
.running {
   text-align: center;
   width: 15vw;
   height: 10vw;
  margin: auto;
  background-color: #1e6262;
  color: white;
  display: flex;
  flex-direction: row;
  justify-content: center;
  border-radius: 24px;
  animation-name: swing;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  animation-delay: 1s;
 margin-top: 100px;
}


@keyframes swing {
    0% {
    transform: translate(-100%, -50%);
  }
  100% {
    transform: translate(100%, -50%);
  }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="buttons">
            <a href="signup.php"><button>SIGN UP </button></a>
            <a href="login.php"><button>LOGIN</button></a>
        </div>
        <div class="homepage">
            <div class="running">
                <p>Welcome to my crud application and write now u may start using it and playing with it by creating emails and deleting them I f no account sign up</p>
            </div>
        </div>

    </div>
</body>
</html>