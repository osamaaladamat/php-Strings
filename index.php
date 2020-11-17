<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin-left: auto; 
            margin-right: auto;
        }
        .p{
            text-align: center;
        }
        .header1{
            text-align: center;
            color:green;
        }
        .header{
            text-align: center;
            font-weight: bold;
            color:black;
        }
    </style>
</head>
<body>
<?php echo "<h1 class='header1'> PHP -Strings and String Functions Exercises</h1>"; ?>
<?php echo "<p class='header' > 1. Write a PHP script to :</p>"; ?>
<?php 

echo "<table border='1' class=center style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td>Convert all characters to uppercase:</th>";
                    echo"<td>";
                    echo strtoupper("osama abdullah");
                    echo"</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td> Convert all characters to lowercase:</th>";
                    echo"<td>";
                    echo strtolower("osama abdullah");
                    echo"</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td> Convert the first character of 'hello' to uppercase:</th>";
                    echo"<td>";
                    echo ucfirst("osama abdullah");
                    echo"</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td> Convert the first character of each word to uppercase:</th>";

                    echo"<td>";
                    echo ucwords("osama abdullah");
                    echo"</th>";


        echo "</tr>";

echo "</table>";

?>

<?php echo "<p class='header'> 2. Write a PHP script to split the following string :</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td> Write a PHP script to split the following string:</th>";
                    echo"<td>";
                        
                        $str1= '082307'; 
                        echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
                  
                    echo"</th>";


        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>

<?php echo "<p class='header'> 3. Write a PHP script to Check whether a string contains a specific string ?</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td> Check whether a string contains a specific string:</th>";
                    echo"<td>";
                        
                    $para = 'The quick brown fox jumps over the lazy dog.';
                    if (strpos($para,'jumps') !== false) 
                     {
                        echo 'Yes.';
                     }
                    else
                     {
                        echo 'No.';
                     }
                  
                    echo"</th>";


        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 4. Write a PHP script to Convert the value of a PHP variable to string.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td> Convert the value of a PHP variable to string:</th>";
                    echo"<td>";
                        
                        $id =  6;           
                        $name = (string)$id; 
                        if ($id === $str1) 
                        {
                        echo "The values are identical"."\n";
                        }
                        else
                        {
                        echo "Values do not match"."\n";
                        }


        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 5. Write a PHP script to extract the file name from the following string.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td> extract the file name from the following string:</th>";
                    echo"<td>";
                        
                  
                    $path = 'http://localhost/php-Strings/php-Strings/index.php';
                    $file_name = substr(strrchr($path, "/"), 1);
                    echo $file_name."\n"; 
                   


        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>

<?php echo "<p class='header'> 6. Write a PHP script to extract the user name from the following email ID.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td> extract the user name from the following email ID:</th>";
                    echo"<td>";
                        
                  
                    $email  = 'Ayham@example.com';
                    $ayham = strstr($email, '@', true);
                    echo $ayham."\n"; 
                   


        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 7. Write a PHP script to get the last three characters of a string.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td> extract the user name from the following email ID:</th>";
                    echo"<td>";
                    $ayham1 = 'Ayham@example.com';
                    echo substr($ayham1, -3)."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 8. Write a PHP script to format values in currency style.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td> format values in currency style:</th>";
                    echo"<td>";
                    $value1 = 65.45;
                    $value2 = 104.35;
                    echo sprintf("%1.2f", $value1+$value2)."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 9. Write a PHP script to generate simple random password [do not use rand() function] from a given string.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td> generate password :</th>";
                    echo"<td>";
                    function pass($pass1) 
                    {
                    $password = 'ASDFGHJKLZXVCBNMQWERTYUIOPzxcvbnmasdfghjkklqwertyuiop0123456789';
                    return substr(str_shuffle($password), 0, $pass1);
                    }
                    echo pass(7)."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 10. Write a PHP script to replace the first 'the' of the following string with 'That'.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";

                    echo "<td>  replace the first 'the' of the following string with 'That':</th>";
                    echo"<td>";
                    $para1 = 'the quick brown fox jumps over the lazy dog.';
                    echo preg_replace('/the/', 'That', $para1, 1)."\n"; 
        echo "</tr>";

        echo "<tr>";
        

echo "</table>";
?>
<?php echo "<p class='header'> 11. Write a PHP script to find the first character that is different between two strings.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>  find the first character that is different between two strings:</th>";
                        echo"<td>";
                        $str1 = 'football';
                        $str2 = 'footboll';
                        $str_pos = strspn($str1 ^ $str2, "\0");
                        printf('First difference between two strings at position %d: "%s" vs "%s"',
                        $str_pos, $str1[$str_pos], $str2[$str_pos]);
                        printf("\n");
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 12. Write a PHP script to put a string in an array.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>  put a string in an array:</th>";
                        echo"<td>";
                        $para = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
                        $array1 = explode("<br>", $para);
                        var_dump($array1);
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 13. Write a PHP script to get the filename component of the following path.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>  get the filename component of the following path:</th>";
                        echo"<td>";
                        $url1 = 'http://localhost/php-Strings/php-Strings/index.php';
                        $file1 = basename($url1, ".php"); 
                        echo $file1."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 14. Write a PHP script to print the next character of a specific character.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>  print the next character of a specific character:</th>";
                        echo"<td>";
                        $cha = 'a';
                        $next_cha = ++$cha; 
                        if (strlen($next_cha) > 1) 
                        {
                        $next_cha = $next_cha[0];
                        }
                        echo $next_cha."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 15. Write a PHP script to remove a part of a string from the beginning.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>  remove a part of a string from the beginning:</th>";
                        echo"<td>";
                        $sub_string = 'Osama@';
                        $str = 'Osama@gmail.com';
                        if (substr($str, 0, strlen($sub_string)) == $sub_string) 
                        {
                        $str = substr($str, strlen($sub_string));
                        }
                        echo $str."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 16. Write a PHP script to get a hex dump of a string.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>   get a hex dump of a string:</th>";
                        echo"<td>";
                        $str = 'Osama@gmail.com';
                        echo bin2hex($str)."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 17. Write a PHP script to insert a string at the specified position in a given string.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>   insert a string at the specified position in a given string:</th>";
                        echo"<td>";
                        $original_string = 'The brown fox';
                        $string_to_insert ='quick';
                        $insert_pos = 4;
                        $new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
                        echo $new_string."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 18. Write a PHP script to get the first word of a sentence.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>   the first word of a sentence:</th>";
                        echo"<td>";
                        $s = 'The quick brown fox';
                        $arr1 = explode(' ',trim($s));
                        echo $arr1[0]."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 19. Write a PHP script to remove all leading zeroes from a string.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>   remove all leading zeroes from a string:</th>";
                        echo"<td>";
                        $x = '000547023.24';
                        $str1 = ltrim($x, '0');
                        echo $str1."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 20. Write a PHP script to remove part of a string.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>   to remove part of a string:</th>";
                        echo"<td>";
                        $my_str = 'The quick brown fox jumps over the lazy dog';
                        echo str_replace("fox", " ", $my_str)."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 21. Write a PHP script to remove trailing slash from a string.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>   toremove trailing slash from a string:</th>";
                        echo"<td>";
                        $my_str = 'The quick brown fox jumps over the lazy dog///';
                        echo rtrim($my_str, '/')."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 22. Write a PHP script to get the characters after the last '/' in an urlg.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>   to get the characters after the last '/' in an urlg:</th>";
                        echo"<td>";
                        $my_url = 'http://localhost/php-Strings/php-Strings/index.php/5478631';
                        echo substr($my_url, strrpos($my_url, '/' )+1)."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 23. Write a PHP script to replace multiple characters from the following string.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>   to replace multiple characters from the following string:</th>";
                        echo"<td>";
                        $my_str = '\"\1+2/3*2:2-3/4*3';
                        echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 24. Write a PHP script to select first 5 words from the following string.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>   to select first 5 words from the following string:</th>";
                        echo"<td>";
                        $my_string = 'The quick brown fox jumps over the lazy dog';
                        echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 25. Write a PHP script to remove comma(s) from the following numeric string.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>   to remove comma(s) from the following numeric string:</th>";
                        echo"<td>";
                        $str1 = "2,543.12";
                        $x = str_replace( ',', '', $str1);
                        if( is_numeric($x))
                        {
                        echo $x."\n";
                        }
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
<?php echo "<p class='header'> 26. Write a PHP script to print letters from 'a' to 'z'.</p>"; ?>
<?php
echo "<table border='1' style=color:DeepPink;>";

        echo "<tr>";

                    echo "<th style=color:red;>Function String</th>";
                    echo"<th style=color:blue;>Example</th>";


        echo "</tr>";

        echo "<tr>";
                        echo "<td>   to print letters from 'a' to 'z':</th>";
                        echo"<td>";
                        for ($x = ord('a'); $x <= ord('z'); $x++)
                        echo chr($x);
                        echo "\n";
        echo "</tr>";

        echo "<tr>";


echo "</table>";
?>
</body>
</html>
