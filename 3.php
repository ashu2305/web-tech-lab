<!DOCTYPE HTML>
<html>
<body>
<h1>Program to find maximum of 3 numbers.</h1>
<form method="post">  
Enter First Number:  
<input type="number" name="number1" /><br><br>  
Enter Second Number:  
<input type="number" name="number2" /><br><br> 
Enter Third Number:  
<input type="number" name="number3" /><br><br> 
<input  type="submit" name="submit" value="submit">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $a = $_POST['number1'];  
        $b = $_POST['number2'];
        $c = $_POST['number3'];  
        
        if($a > $b and $a>$c)
        echo "$a is greater than both $b and $c";
        else if($b>$a and $b>$c)
        echo "$b is greater than both $a and $c";
        else
        echo "$c is greater than both $b and $a";
}  
?>  


</body>
</html>