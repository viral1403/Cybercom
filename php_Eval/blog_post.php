<style>
	table,tr,td{border:1px solid black;border-collapse:collapse;padding:10px;margin:10px;}
</style>


<?php
include('connection.php');

$blog_manage =false;
session_start();
if(isset($_POST['logout'])){
	unset($_SESSION['user']);
	session_destroy();
	header('Location: index.php');
}
if(isset($_POST['add_blog_post'])){
	header('Location: add_new_blog_post.php');
}
if(isset($_POST['add_blog_category'])){
	header('blog_manage.php');
}

if(isset($_POST['manage_category'])){
	$blog_manage=true;
	header('blog_post.php');
}
if(isset($_POST['edit'])){
	$edit_toggle = true;
	header('Location: add_new_blog_post.php');
}
?>
<link rel="stylesheet" href="blog_post.css">

<form method="POST" action="blog_post.php">
	<div class="top-right-bar">
		<input type="submit" name="manage_category" value="Manage Category">

		<input type="submit" name="manage_profile" value="Manage Profile">
		<input type="submit" name="logout" value="Logout">
	</div>
	<?php if($blog_manage === false){ ?>
		<h2>Blog Post</h2>
		<input type="submit" name="add_blog_post" value="Add Blog Post">

		<table>
			<tr>
				<td>Post_Id</td>
				<td>Category Name</td>
				<td>Title</td>
				<td>Published Date</td>
				<td>Action</td>
			</tr>
			<?php
				$run = mysqli_query($con,"SELECT * FROM `blog_post`");
				while($data = mysqli_fetch_array($run)){
			?>
				<tr>
					<td><?php echo 'ID'.$data['id']; ?></td>		
					<td><?php echo $data['category']; ?></td>		
					<td><?php echo $data['title']; ?></td>		
					<td><?php echo $data['publish'] ?></td>		
					<td>
						<a href="blogspot.php?edit=<?php echo $run['id']; ?>"><input type="submit" name="edit" value="Edit"></a>
						&nbsp
						<a href="blogspot.php?delete=<?php echo $run['id']; ?>"><input type="submit" name="del" value="Delete"></a>
					</td>
				</tr>
			<?php } ?>
		</table>
	<?php } ?>
	<?php if($blog_manage === true){ ?>
	<h2>Blog Category</h2>
	<input type="submit" name="add_blog_category" value="Add Category">

	<table>
		<tr>
			<td>Category_Id</td>
			<td>Category Image</td>
			<td>Category Name</td>
			<td>Created Date</td>
			<td>Action</td>
		</tr>
		<?php
		$run2 = mysqli_query($con,"SELECT * FROM `blog_manage`");
			while($data = mysqli_fetch_array($run2)){
			?>
				<tr>
					<td><?php echo 'ID'.$data['id']; ?></td>		
					<td><?php echo $data['category']; ?></td>		
					<td><?php echo $data['title']; ?></td>		
					<td><?php echo $data['publish'] ?></td>		
					<td>
						<a href="blogspot.php?edit=<?php echo $run['id']; ?>"><input type="submit" name="edit" value="Edit"></a>
						&nbsp
						<a href="blogspot.php?delete=<?php echo $run['id']; ?>"><input type="submit" name="del" value="Delete"></a>
					</td>
				</tr>
		<?php } ?>
	</table>
<?php } ?>
</form>