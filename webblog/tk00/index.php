<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body style="background: #d6d6c2;">
 
<div class="container">
 
<!-- Phần header website -->
<?php include "layout/header.php"; ?>
<!-- Kết thúc phần header website -->
 
<!-- Phần menu chính -->
<?php include "layout/menuheader.php"; ?>
<!-- Kết thúc phần menu chính -->
 
<!-- Phần nội dung chính -->
<div class="row">
 
    <!-- Cột trái -->
    <div class="col-sm-4">
      <h2>Thông tin cá nhân</h2>
      <h5>Hình ảnh:</h5>
      <div class="fakeimg">Vùng giả hình ảnh</div>
      <p>Nhãn mô tả cho hình ảnh</p>
      <h3>Liên kết</h3>
      <p>Nội dung mục liên kết</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Kích hoạt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Liên kết 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Liên kết 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Vô hiệu hóa</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <!-- Kết thúc cột trái -->
     
    <!-- Cột phải -->
    <div class="col-sm-8">
      <div class="fakeimg">Vùng giả hình ảnh</div>
      <p>Một số văn bản...</p>
      <p>Một số văn bản hiển thị ở website <a href="https://www.dammio.com">DAMMIO.COM</a>. Nội dung website là lập trình, thiết kế Web và học ngoại ngữ.</p>
      <br>
      <h2>TIÊU ĐỀ 2</h2>
      <h5>Mô tả tiêu đề, Ngày 01 tháng 01, 2020</h5>
      <div class="fakeimg">Vùng giả hình ảnh</div>
      <p>Một số văn bản...</p>
      <p>Một số văn bản hiển thị ở website <a href="https://www.dammio.com">DAMMIO.COM</a>. Nội dung website là lập trình, thiết kế Web và học ngoại ngữ.</p>
    </div>
    <!-- Kết thúc cột phải -->
     
  </div>
</div>
<!-- Kết thúc phần nội dung chính -->
 
<!-- Phần Footer -->
<?php include "layout/footer.php"; ?>
<!-- Kết thúc phần Footer -->
 
</body>
</html>