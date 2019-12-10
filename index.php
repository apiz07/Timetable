<?php
include 'included/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head><title>TimeTable</title>
<meta charset="utf-8">
</head>

<style>
body
{
text-align: center;
background-image: url("https://pbs.twimg.com/profile_images/1192945567111897088/H66LZ6L6_400x400.jpg");
background-repeat: no-repeat;
background-size: 100% 100%;
background-attachment: fixed;
color: #32cd32;
}
</style>

<body>

<h1>My TimeTable</h1>
<h2>Welcome to My World!</h2>
<form action="search.php" method="POST">
<input type="text" name="ccode">
<button type="submit" name="submit-search">Enter</button>
</form>

<div class="course-list";>
<?php
$sql = "SELECT * FROM jadual";
$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows($result);

?>
</div>

</body>