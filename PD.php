<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg")))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "erweima/" . $_FILES["file"]["name"]);
      echo "
      <head>
      <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
      </head>
      <body><a href='XSTP.php'>点击查看</a></body>
      </html>";
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>