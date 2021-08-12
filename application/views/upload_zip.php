<!DOCTYPE html>
<html>
<style>
input[type=text], input[type=file],select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Upload and Extract Zip</h3>

<div>
<?php if(isset($success)){
	echo  $success;
}else if(isset($error)){
	echo  $error;
}else{
	
}

?>
  <form method="POST" enctype="multipart/form-data" action="<?=base_url('upload/upload_zip')?>">
    <input type="file"  name="file" placeholder="Upload Zip file...">
    <input type="submit" value="Upload Zip">
  </form>
</div>

</body>
</html>
