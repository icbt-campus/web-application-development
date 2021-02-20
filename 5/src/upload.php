<!DOCTYPE html>
<!--

  upload.html
  Instagram Clone

  Ashen Gunaratne
  mail@ashenm.ml

-->
<html lang="en">
  <head>
    <title>Upload Image</title>
  </head>
  <body>
    <form action="/api/upload.php" enctype="multipart/form-data" method="post">
      <input name="username" type="text" placeholder="@username" />
      <input name="image" type="file" accept="image/*" />
      <input type="submit" value="upload" />
    </form>
  </body>
</html>
