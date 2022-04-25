<html>
   <head> <title>String Test</title> </head>
   <body>
       <?php 
        $name = "Christopher";
        $preference = "Milk Shake";
        $firstname = "John";
        $lastname = "Smith";
        $fullname = $firstname . $lastname;
        print("Fullname=$fullname <br />");  
        $fullname2 = "$firstname $lastname"; 
        print("$fullname2 <br />")   ;
        $comments = "Good Job";
        $len = strlen($comments);
        print("Length = $len" . "<br />");
        $in_name = " Joe Jackson ";
        $name = trim($in_name);
        print(" name = $name$name" . "<br />");
        $inquote = "Now Is The Time";
        $lower = strtolower($inquote);
        $upper = strtoupper($inquote);
        print("upper=$upper lower=$lower". "<br />");
        $date = "12/25/2002";
        $month = substr($date, 0, 2);
        $day = substr($date, 3, 2);
        print ("Month=$month Day=$day" . "<br />");
        $year = substr($date, 6);
        print("Year=$year" . "<br />");
       ?>

</html>