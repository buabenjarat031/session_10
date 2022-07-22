<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: การทำงานกับฟอร์ม ::</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Thasadith&display=swap" rel="stylesheet">
    
    <style type="text/css">
        body{
            font-family: 'Thasadith', sans-serif;
        }
    </style>  

</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <from name = "from1" action="#" method="post" enctype="multipart/from-data">
    <div class="container text-center">
        <div class="row">
        <div class="col">
        <label class="form-label">คำนำหน้าชื่อ</label>
        <select class="form-select" name="txt_firstname" id="txt_firstname">
            <option value="">คำนำหน้า</option>
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
        </select>
    </div>
        <div class="col">
        <label class="form-label">ชื่อ</label>
        <input type="text" class="form-control"name="txt_name" id="txt_name" placeholder="กรุณาระบุชื่อ">
    </div>
        <div class="col">
        <label class="form-label">นามสกุล</label>
        <input type="text" class="form-control" name="txt_lastname" id="txt_lastname" placeholder="กรุณาระบุนามสกุล">
    </div>
  </div>
</div>
</from>
</body>
</html>