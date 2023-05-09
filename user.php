<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style.css" />
    <link rel="icon" href="./logosmall.png" />
    <title>Login |a-Cart</title>
  </head>
  <body>
    <div class="main">
      <div class="middle-text">
        <p id="p-1">SIGN IN</p>
        <p id="p-2">Personal Information</p>
      </div>
      <div class="button-select">
        <button class="button-12">Create Demo</button>
        <button class="button-21">Return to Demo</button>
      </div>
      <div class="login">
        <form action="create.php" method="post">
          <div>
            <input
              type="text"
              name="fname"
              id="fname"
              class="input-form"
              placeholder="Firstname"
            />
          </div>
          <div>
            <input
              type="text"
              name="lname"
              id="lname"
              class="input-form"
              placeholder="Lastname"
            />
          </div>
          <div>
            <input
              type="text"
              name="email"
              id="email"
              class="input-form"
              placeholder="Email"
            />
          </div>
          <div>
            <input
              type="password"
              name="pwd"
              id="pwd"
              class="input-form"
              placeholder="Password"
            />
          </div>
          <div class="gender">
             <label for="gender">
              <input type="radio" name="gender" value="Male" id="Male">Male
              <input type="radio" name="gender" value="Female" id="Female">Female
            </label> 
          </div>
          <div>
            <input type="submit" name="submit" id="submit" value="Submit" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
