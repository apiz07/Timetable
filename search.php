<?php
include 'included/header.php';
?>

<script>
function goBack() {
  window.history.back()
}
</script>

<h1>Search Page</h1>

<div class="course-list";>
<?php
if(isset($_POST['submit-search']))
{
	$search = mysqli_real_escape_string($conn, $_POST['ccode']);
	$sql = "SELECT * FROM jadual WHERE COURSE_CODE LIKE '%$search%' OR SUBJECT_NAME LIKE '%$search%' OR SUBJECT_TYPE LIKE '%$search%'";
	$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
	
	echo "There are ".$queryResult."results!";
	
	if($queryResult > 0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			echo"<div class='course-box'>
			<tr>
			<th>".$row["COURSE_CODE"]."</th>
			<th>".$row['SUBJECT_NAME']."</th>
			<th>".$row['SUBJECT_TIME']."</th>
			<th>".$row['SUBJECT_DAY']."</th>
			<th>".$row['SUBJECT_TYPE']."</th>
			</tr>
			</div>";
		}
	}
	else
	{
		echo"There no matching your search!";
	}
}
?>
</div>

<body>
<button onclick="goBack()">Return</button>
</body>