<!DOCTYPE html>
<html>      
<head>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="UTF-8">

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</head>

<body>
<?php include 'nav.php'; ?>


<div style="margin-bottom:15px"></div>

<div class="container">

<div style="margin-bottom:15px"></div>

<div class="row">
<p>إضافة طالب جديد إلى النظام</p>

<form class="col s8" dir="rtl" method="post" action="http://localhost/saifacademy/add.php">
<input placeholder="رمز الطالب" name="id" type="text">
<input placeholder="إسم الطالب" name="name" type="text">

<label>المرحلة الدراسية</label>
<select class="browser-default" name="level">
      <option value="1">المرحلة الأولى</option>
      <option value="2">المرحلة الثانية</option>
      <option value="3">المرحلة الثالثة</option>
      <option value="4">المرحلة الرابعة</option>
</select>

<label>الفرع</label>
<select class="browser-default" name="branch">
      <option value="sw">البرمجيات</option>
      <option value="is">نظم المعلومات</option>
      <option value="ai">الذكاء الإصطناعي</option>
      <option value="cs">أمنية الحاسوب</option>
      <option value="na">إدارة الشبكات</option>
      <option value="mu">الوسائط المتعددة</option>
</select>

<label>السنة الدراسية</label>
<select class="browser-default" name="year">
      <option value="2017-2018">2017-2018</option>
      <option value="2016-2017">2016-2017</option>
</select>

<button class="btn waves-effect waves-light" type="submit" name="submit">Submit
<i class="material-icons right">queue</i>
</button>

</form>
</div>

</div>

<?php 

if(isset($_POST['submit'])){

      $data_missing = array();

      if(empty($_POST['id'])){
            $data_missing[]='id';
      }

      if(empty($_POST['name'])){
            $data_missing[]='name';
      }

     if(empty($data_missing)){
      include_once 'conn.php';
      $sql = "insert into std_info(id, name, level, branch,year) values (?,?,?,?,?)";
      $stmt = mysqli_prepare($conn, $sql);

      mysqli_stmt_bind_param($stmt, "ssiss", $_POST['id'], $_POST['name'], $_POST['level'], $_POST['branch'], $_POST['year']);
      mysqli_stmt_execute($stmt);
      $affected_rows = mysqli_stmt_affected_rows($stmt);

      if($affected_rows == 1){
            echo "Student record inserted";
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
      }
      else{
            echo mysqli_error();
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
      }
      
     }
     else{
      echo "Please provide the following data";
      foreach($data_missing as $missing){
            echo $missig;
      }

     }
}
?>

<?php include 'footer.php'; ?>
</body>
</html>    