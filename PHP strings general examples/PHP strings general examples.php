1. Get the length of a string - strlen()
<!DOCTYPE html>
<html>
<body>
<?php
echo strlen("Hy");
?> 
</body>
</html>

2. count the number of words in a string - str_word_count()
<!DOCTYPE html>
<html>
<body>
<?php
echo str_word_count("Hi");
?> 
</body>
</html>

3. reverse a string - strrev()
<!DOCTYPE html>
<html>
<body>
<?php
$x = "Hai";
echo strrev($x);
?>
</body>
</html>

4. search for a specific text within a string - strpos()
<!DOCTYPE html>
<html>
<body>
<?php
echo strpos("welcome", "guys");
?>
</body>
</html>

5. replace text within a string - str_replace()
<!DOCTYPE html>
<html>
<body>
<?php
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
?> 
</body>
</html>

