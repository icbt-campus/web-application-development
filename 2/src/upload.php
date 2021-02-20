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
    <form method="POST" action="/api/upload.php">
      <input name="username" type="text" placeholder="@username" />
      <input name="image" type="file" accept="image/*" />
      <input type="submit" value="upload" />
    </form>
  </body>
</html>
