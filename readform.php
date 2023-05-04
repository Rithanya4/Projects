<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="minipro.css">
    </head>
    <body style="background-color:#66ffcc ">
    <center>
        <h3 class="welcome">Form</h3>

        <form class="welcome" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
            <p>
                Username: <input  name="username"  type="text" required value="" class="input-field">
            </p>
            <p>Email id: <input name="email"  type="email" required value="" class="input-field">
            </p>
            <p>Gender: <input name="gender" type="text" required value="" >
            </p>
            <p>Age: <input name="age" type="text" required value="" >
            </p> 

            <p><input type="submit" value="Submit" name="Submit"></p>
        </form>

    </center>
<h3> Guidelines for participants</h3> 
<p>1.Participants can choose any one book for Book Review or any one case for Case Comment.
<br><br>2.Authors can send the entries for both Book Review and Case Comment simultaneously.
<br><br>3.The Book Review and Case Comment must be written in English.
<br><br>4. Only one submission each for Book Review and Case Comment is allowed per author.
(Submissions both as co-author and single will be treated as multiple submissions. In case of
such submissions the single submission will be rejected and disqualified as an entry to the
competition)
<br><br>5. Co-authorship to a maximum of two authors is permitted. In case of co-author separate
Registration Form shall be sent for each.
<br><br>6. Only original Book Reviews and Case Comments will be considered for the competition. No
part of it should have been published earlier nor should it be under consideration for publication
or a contest elsewhere. Moreover any form of plagiarism will result in disqualification.
University will not be responsible for the act of plagiarism.
<br><br>7. Identification mark must not be found in any part of Book Review and Case Comment.
<br><br>8. Registration form must be sent along with Book Review and Case Comment in soft and hard
copy</p>
    <?php

    if(isset($_COOKIE["username"])) 

    $user= $_REQUEST["username"]; 

    $errors = array();	
    $conn = mysqli_connect("localhost", "root", "", "registration");

    // Check connection
    if($conn === false){
    die("ERROR: Could not connect. "
    . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    $name = $_POST["username"];
    $gender = $_REQUEST["gender"];
    $email= $_POST["email"]; 
    $age= $_REQUEST["age"]; 

    $sql = "INSERT INTO form VALUES ('$name','$email','$gender','$age')";
    if(mysqli_query($conn, $sql)){
    echo "Your data is recorded";
    } else{
    echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>

</body>
