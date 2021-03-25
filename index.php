<title>Ghassan's first page</title>

<h1>Hello World!</h1>

<p>
<?php
echo "Hi There!\n";
$x = 6*7;
if($x == 42) {
    echo "The answer is $x; what was the question\n";
} else {
    echo "Oops... Something went wrong!\n";
}
?>
</p>

<p>
Another paragraph...
</p>

<?php echo "<a href='page1.htm' <text>My first page</text> </a>" ?>

<?php echo "<br><a href='login.php' <text>Log in</text> </a>" ?>
