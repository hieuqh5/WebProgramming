<html>
    <head> <title> Receiving Input </title></head>
    <body>
        <font size="8"></font>
        <?php
            $user_name = $_POST["user_name"];
            $class = $_POST["class"];
            $university = $_POST["university"];
            $hobby1 = $_POST["hobby1"];
            $hobby2 = $_POST["hobby2"];
            $hobby3 = $_POST["hobby3"];
            print ("<br>Hello, $user_name");
            print ("<br>You are studying at $class, $university");
            print ("<br>Your hobby is");
            print ("<br>  1. $hobby1");
            print ("<br>  2. $hobby2");
            print ("<br>  3. $hobby3");

        ?>
    </body>
</html>