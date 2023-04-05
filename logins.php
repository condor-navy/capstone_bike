<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="style" href="./style.css">
  <title>웹앱 로그인 및 회원가입 페이지</title>
</head>


<body class="container">
<?php include("./nav.html"); ?>
    <br>
    <br>
    <br>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1>로그인</h1>
        <form>
          <div class="form-group">
            <label for="email">이메일</label>
            <input type="email" class="form-control" id="email" placeholder="이메일을 입력하세요.">
          </div>
          <div class="form-group">
            <label for="password">비밀번호</label>
            <input type="password" class="form-control" id="password" placeholder="비밀번호를 입력하세요.">
          </div>
          <button type="submit" class="btn btn-primary">로그인</button>
        </form>
      </div>
    </div>

  </div>
</body>
