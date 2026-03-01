<head>
  <title>BAC</title>
</head>

<?php
if (!isset($_COOKIE["isAdmin"])) {
  $isAdmin = base64_encode("False");
  setcookie("isAdmin", $isAdmin, time()+3600, "/");
}

if (isset($_COOKIE["isAdmin"])) {
  if (base64_decode($_COOKIE["isAdmin"]) == "True") {
    echo "<a href='admin.php'>Admin</a>";
  }
}

if (isset($_GET["id"])) {
  if ($_GET["id"] == 2) {
    echo <<< "here"
      <body>
        <p>flag{Horizontal_Privilege_Escalation_done}</p>
      </body>
    here;
  } elseif ($_GET["id"] == 1) {
    echo <<< "here"
      <body>
        <p>Alice id=>1</p>
      </body>
    here;
  } elseif ($_GET["id"] == 3) {
    echo <<< "here"
      <body>
        <p>bob id=>3</p>
      </body>
    here;
  }
}else {
  echo "Parameter? Cookie? Or Both???";
}
?>