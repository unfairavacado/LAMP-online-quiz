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
    padding: 12px 10px;
    margin: 10px 45px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 10px 45px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
div {
    margin: 50px 250px;
    height: 400px;
    width: 50%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>
<div>
    <head>
    <body background="bgimg.jpg">         
        <title>Registar</title>
    </head>
    <body>
        <form action="registeraction.php" method="post">
        <h1><center>Registar<center></h1>
        <tr>
            <td>

                        <h1><input type="text" name="uname" placeholder="Username" value="" style="height: 50px; width:85%;"></h1>
                        <h1><input type="text" name="pass" placeholder="Password" value="" style="height: 50px; width:85%;"></h1>
                        <input type="submit" value="Register" style="width: 85%" >
                                              
                        
                        
                </td>
        </tr>
    </form>
    </body>
</div>
    </html>


 
