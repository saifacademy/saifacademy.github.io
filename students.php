<!DOCTYPE html>
<html>      
<head>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="UTF-8">

      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>

<body>
<?php include 'nav.php'; ?>
<?php include_once 'conn.php'; ?>

<div style="margin-bottom:15px"></div>

<div class="container">

<ul id="dropdown3" class="dropdown-content">
    <li><a href="#!">2017-2018</a></li>
    <li><a href="#!">2016-2017</a></li>
  </ul>
<a class="btn dropdown-button" href="#!" data-activates="dropdown3">Year <i class="material-icons right">arrow_drop_down</i></a>
<a class="btn waves-effect waves-teal" href="add.php"><i class="material-icons right">queue</i>Add Student</a>

<table class="striped" dir="rtl">
        <thead>
          <tr>
              <th>رمز الطالب</th>
              <th>إسم الطالب</th>
              <th>المرحلة</th>
              <th>الفرع</th>
              <th>السنة الدراسية</th>
          </tr>
        </thead>
        <tbody>
<?php
$sql = "SELECT id,name,level,branch,year FROM std_info";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"]. "</td>" .
        "<td>" . $row["name"]. "</td>" .
        "<td>" .$row["level"] . "</td>" . 
        "<td>" . $row["branch"] . "</td>".
        "<td>". $row["year"]."</td></tr>";
    }
} else {
    echo "0 records found";
}

$conn->close();
?>

</tr>

<tr>
<td colspan="5"><span class="new badge" data-badge-caption="<?php echo $result->num_rows . "  طلاب" ?>"></span></td>
</tr>

</tbody>
</table>



</div>

<?php include 'footer.php'; ?>
</body>
</html>