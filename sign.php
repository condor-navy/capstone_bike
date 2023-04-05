<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <title>웹앱 로그인 및 회원가입 페이지</title>
</head>



<body class="container">
   
  <?php include("./nav.html"); ?>
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1>회원가입</h1>
        <form>
          <div class="form-group">
            <label for="id">아이디</label>
            <input type="text" class="form-control" id="id" placeholder="아이디를 입력하세요.">
          </div>
          <div class="form-group">
            <label for="email">이메일</label>
            <input type="email" class="form-control" id="email" placeholder="이메일을 입력하세요.">
          </div>
          <div class="form-group">
            <label for="password">비밀번호</label>
            <input type="password" class="form-control" id="password" placeholder="비밀번호를 입력하세요.">
          </div>
          <div class="form-group">
            <label for="confirm-password">비밀번호 확인</label>
            <input type="password" class="form-control" id="confirm-password" placeholder="비밀번호를 다시 입력하세요.">
          </div>

          <div class="form-group">
            <label for="nickname">닉네임</label>
            <input type="nickname" class="form-control" id="nickname" placeholder="닉네임 입력하세요.">
          </div>


          <button type="submit" class="btn btn-primary">회원가입</button>
        </form>
      </div>
    </div>
  
</body>
