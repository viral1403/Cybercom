<style>
	form{
		margin-top: 100px;
		margin-left: 30%;
	}
</style>
<?php

include('connection.php');

if(isset($_POST['submit'])){
	if(isset($_POST['blog_title']) && isset($_POST['blog_content']) && isset($_POST['blog_url']) && isset($_POST['blog_category']) && isset($_POST['blog_img'])){
		if(!empty($_POST['blog_title']) && !empty($_POST['blog_content']) && !empty($_POST['blog_url']) && !empty($_POST['blog_category']) && !empty($_POST['blog_img'])){
			$title = $_POST['blog_title'];
			$content = $_POST['blog_content'];
			$category = $_POST['blog_category'];
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

				foreach($category as $value){
					$total_content= $value.', ';
				}
				$blog_post_query = mysqli_query($con,"INSERT INTO `blog_post`(`title`, `content`, `url`, `publish`, `category`, `image`) VALUES ('$title','$total_content','$url','$publish','$category','$img_name')");

				if($blog_post_query){
					header('Location: blog_post.php');
				}
			}
		}
	}
}

?>
<form enctype="multipart/form-data" action="add_new_blog_post.php" method="POST">
	<table>
		<tr>
			<td colspan="2">Add New Post</td>
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
				<span>Category</span>
			</td>
			<td>
				<select name="blog_category" multiple>
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