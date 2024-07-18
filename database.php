<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Evaluation</title>
    <link rel="stylesheet" href="styyles.css">
</head>
<body>
    <section>
    <header>
        <div class="navbar">
                <img src="https://www.africa-newsroom.com/files/large/83379a847dc9ee6" alt="powerlearn logo">
               <!-- <h1>WELCOME TO PLP WEEKLY EVALUATION</h1> -->
        </div>
</header>
</section>
<section>
<div class="evalform">
    <h1>Database module evaluation</h1><br>
    <form>
         <div class="A">
            <form id="evaluationForm" action="send_email.php" method="post" enctype="multipart/form-data">
            <label for="radio">Did you find the module content helpful?</label>
            <input type="radio" id="question1" name="question1" value="Yes"> Yes
            <input type="radio" id="question1" name="question1" value="No"> No
        </div>
    
        <div class="C">
            <label for="fileUpload">Upload your document (Word/PDF):</label>
            <input type="file" id="fileUpload" name="fileUpload" accept=".doc,.docx,.pdf"><br><br>
        </div>

        <div class="D">
            <input type="submit" value="Send">
        </div>
    </form>
        <br>
    <div class="back">
        <a href="index.html">Back to Home Page</a>

    </div>
    <br>
</section>
<section>
            <div class="footer">
            <section>
           <footer> <h3>© Copyright 2024 Power Learn Project All rights reserved</h3></footer>
            </section>
       </div>
     </section>

</body>
</html>
?>