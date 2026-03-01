<?php
if (base64_decode($_COOKIE["isAdmin"]) == "True") {
  echo "flag{Vertical_Privilege_Esc_is_Easy}";
}else {
  header("Location: index.php");
}
?>