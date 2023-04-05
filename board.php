<!DOCTYPE html>


<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
  data-template="vertical-menu-template-no-customizer">

  <html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
  data-template="vertical-menu-template-no-customizer">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>연습용</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="style" href="./style.css">

  <meta name="description" content="" />
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/core.css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" />
  <link rel="stylesheet" href="assets/css/demo.css" />

  <!--summernote-->
  <!-- include libraries(jQuery, bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>

<!--상단 네비바-->
<body class="container" width="80%" margin= "auto">  
  <?php include("./nav.html"); ?>

  <br>
  <button type="button" class="btn btn-primary">전체글</button>
  <button type="button" class="btn btn-info">인기글</button>
  <button type="button" class="btn btn-info">공지</button>
  
  <br><br>
  <!--게시판 테이블-->
  <table class="table table bordered table-hover">
            <thead>
                <tr bgcolor="#9AEBA3" font color="white">
                    <th>번호</th>
                    <th>제목</th>
                    <th>글쓴이</th>
                    <th>작성일</th>
                    <th>조회</th>
                    <th>추천</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>265121</td>
                  <td>연습용</td>
                  <td>ㅇㅇ</td>
                  <td>2023.02.23</td>
                  <td>700</td>
                  <td>100</td>
                </tr>              
                <tr>
                  <td>265120</td>
                  <td>연습용2</td>
                  <td>운영자</td>
                  <td>2023.03.23</td>
                  <td>500</td>
                  <td>150</td>
                </tr>
                <tr>
                  <td>265207</td>
                  <td>연습용3</td>
                  <td>aasra</td>
                  <td>2023.03.27</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>265307</td>
                  <td>연습용4</td>
                  <td>운영자</td>
                  <td>2023.03.28</td>
                  <td>500</td>
                  <td>150</td>
                </tr>
                <tr>
                  <td>265120</td>
                  <td>연습용5</td>
                  <td>심슨</td>
                  <td>2023.04.23</td>
                  <td>99</td>
                  <td>11</td>
                </tr>
                <tr>
                  <td>265120</td>
                  <td>연습용6</td>
                  <td>운영자</td>
                  <td>2023.04.23</td>
                  <td>5</td>
                  <td>7</td>
              </tr>
            </tbody>
        </table>
        <br><br>

        <!--게시판 글쓰기 버튼-->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary me-md-2" type="button">글쓰기</button>
        </div>

        <!--게시판 페이지 버튼-->
       <nav aria-label="page-navigation">
         <ul class="pagination justify-content-center">
           <li class="page-item disabled">
             <a class="page-link" href="#" tabindex="-1">Previous</a>
           </li>
           <li class="page-item"><a class="page-link" href="#">1</a></li>
           <li class="page-item active">
             <a class="page-link" href="#">2 <span class="sr-only"></span></a>
           </li>
           <li class="page-item"><a class="page-link" href="#">3</a></li>
           <li class="page-item">
             <a class="page-link" href="#">Next</a>
           </li>
         </ul>
       </nav>
</body>
</html>