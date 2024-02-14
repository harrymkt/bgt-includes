<?php
$content = file_get_contents($_POST["url"]);

if ($content !== false)
{
// Output the content with appropriate content-type
header('Content-Type: text/plain');
echo $content;
}
else
{
// If file_get_contents fails, display an error message
echo "failed";
}
?>