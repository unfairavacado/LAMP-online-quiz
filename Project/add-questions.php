
<!DOCTYPE html>
<html>
<style>
body {
    font-family: Verdana, Arial, sans-serif;
    font-size: smaller;
    padding: 50px;
    color: #be7429;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=reset] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=reset]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>
<div>
    <head>  
    <body background="bgimg.jpg">         
        <title>Question Adder</title>
    </head>
    <body>
        <form action="" method="post">
        <h1>Question Adder</h1>
        <tr>
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "0000";
            $dbname = "questions";
            $question=$_POST['question'];
            $optiona=$_POST['optiona'];
            $optionb=$_POST['optionb'];
            $optionc=$_POST['optionc'];
            $optiond=$_POST['optiond']; 
            $keyoption=$_POST['keyoption'];

                        if(isset($_POST['submit']))
                        {
                         if(empty($question))
                        {
                            $msg="Enter Question";
                        }
                        else if(empty($optiona))
                        {
                            $msg="Enter Option A";
                        }
                        else if(empty($optionb))
                        {
                            $msg="Enter Option B";
                        }
                        else if(empty($optionc))
                        {
                            $msg="Enter Option C";
                        }
                        else if(empty($optiond))
                        {
                            $msg="Enter Option D";
                        }
                        else if(empty($keyoption))
                        {
                            $msg="Enter Key";
                        }
                        else if(!empty($question)&&!empty($optiona)&&!empty($optionb)&&!empty($optionc)&&!empty($optiond)&&!empty($keyoption))
                        {
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            if(!$conn)
                            {
                                echo "Done";
                                die("connection failed:".mysqli_connect_error());
                            }
                            
                            $sql = "INSERT INTO question (question, optiona, optionb, optionc, optiond, keyoption) VALUES ('$question', '$optiona', '$optionb','$optionc','$optiond','$keyoption')";

                                        if ($conn->query($sql) === TRUE) 
                                            {
                                                
                                                header("Location: action.php");
                                                $conn->close();

                                            }
                                        else 
                                        {
                                                $msg="Error in recording response: " . $sql . "<br>" . $conn->error;
                                                $conn->close();
                                        }
            
                            
                            }
   
                        }
                        
                            
            ?>
            <td>
                
                        <h1>Question: <input type="text" name="question" placeholder="Question Here.." value="" style="height: 50px; width:85%;"></h1>
                        <h1>Option A: <input type="text" name="optiona" placeholder="Option A" value="" style="height: 50px; width:387px;">
                        Option B: <input type="text" name="optionb" placeholder="Option B" value="" style="height: 50px; width:387px;"></h1>
                        <h1>Option C: <input type="text" name="optionc" placeholder="Option C" value="" style="height: 50px; width:387px;">
                        Option D: <input type="text" name="optiond" placeholder="Option D" value="" style="height: 50px; width:387px;"></h1>
                        <h1>Key Option: <input type="text" name="keyoption" placeholder="A/B/C/D" value="" maxlength="1" size="1" style="height: 50px; width:95px;text-transform:uppercase;"></h1>
                        <center><?php echo("$msg") ?></center>
                        <input type="submit" name="submit" value="Submit" style="width: 49.3%";>                    <input type="reset" style="width: 49.3%">                      
                        
                        
                </td>
        </tr>
    </form>
    </body>
</div>
    </html>

