<?php
/*
Taylor Pressley
FHSU INF 653 VB
2/3/2020
*/
 if(isset($_GET['age' <= 18])) {
     echo "Hello, my name is " . $_GET['firstname'] . " " . $_GET['lastname'] . "." . "<br>" . "I am " . $_GET['age'] . "years old and I am not old enough to vote in the United States.";
}
 else(isset($_GET['age'>= 18])) {
     echo "Hello, my name is " . $_GET['firstname'] . " " . $_GET['lastname'] . "." . "<br>" . "I am " . $_GET['age'] . "years old and I am old enough to vote in the United States.";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Project 1</title>
    </head>
<body>
    <form method="GET" action="project_1.php">
        <div>
            <label>First Name</label><br>
            <input type="text" name="firstname">
        </div> 
        <div>
            <label>Last Name</label><br>
            <input type="text" name="lastname">
        </div>
        <div>
            <label>Age</label><br>
            <input type="number" name="age">
        </div> 
        <input type="submit" name="Submit" value="Submit">
    </form>
</body>
</html>


