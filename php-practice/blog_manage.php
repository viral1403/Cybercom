<style>
	form{
		margin-top: 100px;
		margin-left: 30%;
	}
</style>
<?php
require('add_new_post.php');
$con = mysqli_connect('localhost','root','','db');
$id = $_SESSION['user'];
echo $id;
if(isset($_POST['submit'])){
	if(isset($_POST['blog_title']) && isset($_POST['blog_content']) && isset($_POST['blog_url']) && isset($_POST['blog_parent_category']) && isset($_POST['blog_img']) && isset($_POST['meta_title']) ){
		if(!empty($_POST['blog_title']) && !empty($_POST['blog_content']) && !empty($_POST['blog_url']) && !empty($_POST['blog_parent_category']) && !empty($_POST['blog_img']) !empty($_POST['meta_title']) ){
			$title = $_POST['blog_title'];
			$content = $_POST['blog_content'];
			$category = $_POST['blog_parent_category'];
			$meta_title = $_POST['meta_title'];
			$url = $_POST['blog_url'];
			$publish = Date('Y-m-d h:m:s',time());
			$img = $_FILES['blog_img']['img'];
			$img_name = $_FILES['blog_img']['name'];
			$extension = strtolower(substr($img_name,strpos($img_name, '.') + 1));
			if(!preg_match('www.%.com',$url)){
				echo "URL Input Invalid";
			}
			else if(!$extension = 'img'){
				echo "Not a Image File";
			}
			else{
				move_uploaded_file($img, $_img_name);

				for($content as $value){
					$total_content= $value.', ';
				}
				$blog_post_query = mysqli_query($con,"INSERT INTO `blog_manage`(`title`, `content`, `url`, `publish`, `category`, `image`,`meta_title`) VALUES ('$title','$total_content','$url','$publish','$category','$img_name','$meta_title')");

				if($blog_post_query){
					header('Location: blog_post.php');
				}
			}
		}
	}
}

?>


<form method="POST" action="blog_manage.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td colspan="2">Add New Category</td>
		</tr>
		<tr>
			<td>
				<span>Title</span>
			</td>
			<td>
				<input type="text" name="blog_title">
			</td>
		</tr>
		<tr>
			<td>
				<span>Content</span>
			</td>
			<td>
				<textarea name="blog_content"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<span>Url</span>
			</td>
			<td>
				<input type="text" name="blog_url">
			</td>
		</tr>
		<tr>
			<td>
				<span>Meta Title</span>
			</td>
			<td>
				<input type="text" name="meta_title">
			</td>
		</tr>
		<tr>
			<td>
				<span>Parent Category</span>
			</td>
			<td>
				<select name="blog_parent_category">
					<option value=""></option>
					<option value="lifestyle">Lifestyle</option>
					<option value="health">Health</option>
					<option value="education">Education</option>
					<option value="music">Music</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<span>Image</span>
			</td>
			<td>
				<input type="file" name="blog_img">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="new_blog_post" value="Submit">
			</td>
		</tr>
	</table>
</form>