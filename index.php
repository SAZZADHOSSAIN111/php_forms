<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="form" >
        <form action="action.php" method="post">
          <div class="fromdiv">
              <label for="firstname">Firstname</label><br>
              <input type="text" name="firstname" id="firstname" placeholder="Firstname"> <br>
              <label for="lastname">Lastname</label><br>
              <input type="text" name="lastname" id="lastname" placeholder="Lastname"><br>
              <label for="email">Email</label><br>
              <input type="email" name="email" id="email" placeholder="Email"><br>
              <label for="email">Passsword</label><br>
              <input type="password" name="password" id="" placeholder="Passsword">
              <button type="submit" name="button" target="blank"> submit</button>
              <div class="bottom-text">
                Already have an account? <a href=""> Sign In</a>
              </div>

          </div>
        </form>

    </div>
</body>
</html>