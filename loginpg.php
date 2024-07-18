<?php 
    $message ='';
    if(isset($_GET['msg'])) $message =$_GET['msg'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styyles.css">
</head>
<body>
<section>
    <div class="navbar">
        <header>
            <img src="https://www.africa-newsroom.com/files/large/83379a847dc9ee6" alt="powerlearn logo">
            <h1>WELCOME TO PLP WEEKLY EVALUATION</h1>
        </header>
        <br><br><br>
    </div>
</section>
<section>
    <?php echo $message; ?>
    <div class="login">
        <form action="login.php" method ="post">
            <h3>Jump in to Evaluate</h3>
    
        <div class="form-group">
           <label for="email">Email:</label>
            <input type="text" name ="username" class="form-control" required>
        </p>
        </div>
        <div class="form-group">
            <label for="email">Password:</label>
            <input type="password" name ="password" class="form-control" required>
        </div>
        <input type="submit" class="btn" value="Login">
    </form>
    </div>
      

    </div>
</section>

<div class="footer">
    <section>
   <footer> <h3>© Copyright 2024 Power Learn Project All rights reserved</h3></footer>
    </section>
</div>

</body>
</html>