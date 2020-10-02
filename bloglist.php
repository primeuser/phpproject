<?php 
include_once 'config/db_conn.php';
include 'includes/header.php';
?>

<h3><a href="addblog.php">Create New Blog</a></h3>
<?php
$sqlquery = "SELECT * FROM blog;";
$data = mysqli_query($conn, $sqlquery);

foreach ($data as $unitdata): ?>
	<h5>Blog id : 
		<?php
		echo $unitdata['id']; ?> 
	</h5>
	<h1>
		<?php
		echo $unitdata['title']; ?> 
	</h1>
	<p>
		<?php
		echo $unitdata['details']; ?> 
	</p>
	<a href="#">Read More</a>

<?php endforeach ; ?>





<?php 
 



 include 'includes/footer.php'

?>