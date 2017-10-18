<?php ini_set('display_errors', 1); error_reporting(E_ALL); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="collectstyle.css">
</head>
<div class="general">
<?php if (empty($_POST["code"])) {
    echo "<form action=\"\" method=\"post\">";
            echo "<input id=\"code\" name=\"code\" type=\"password\" placeholder=\"ENTER PASSWORD\"><br>";
    echo "<input id=\"submit\" value=\"SUBMIT\" name=\"submit\" type=\"submit\" placeholder=\"SUBMIT\">";
}
elseif ($_POST["code"] == "123") {
    echo "<body>";
    echo "<table>";
    echo "<tr>";
    echo "<th>FIRST NAME</th>";
    echo "<th>LAST NAME</th>";
    echo "<th>EMAIL</th>";
    echo "<th>DATE OF BIRTH</th>";
    echo "</tr>";
      foreach (glob("1*.txt") as $filename) {
        $content = unserialize(file_get_contents($filename));
        echo "<tr>";
        echo "<td> $content[0] </td>";
        echo "<td> $content[1] </td>";
        echo "<td> $content[2] </td>";
        echo "<td> $content[3] </td>";
        echo "</tr>";
  }
} else { echo "Go away!!"; }

?>
</div>
</table>
</body>
</html>
