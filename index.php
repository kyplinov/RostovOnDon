<?php


?>


<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <meta charset="utf-8">
    <title></title>
</head>
<body>
<div class="success"></div>
<div class="fields">
<form id="formData" action="sendData.php" method="post" enctype="multipart/form-data" >

      <label>
        Текстовое поле</span>
    </label>
    <input type="text"  name='textField' />


    <label>
        Поле для загрузки файла</span>
    </label>
    <input type="file"  name='fileField' />

    <input type="submit" id="submit" value="Отправить">

</form>
</div>

<script src="NotRefresh.js"></script>
</body>

</html>
