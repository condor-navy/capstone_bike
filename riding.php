<!doctype html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, 그리고 Bootstrap 기여자들">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Blog Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.kr/docs/5.2/examples/blog/">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="style" href="./style.css">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        
        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
        
        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }
        
        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }
        
        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }
        
        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        
        .menu ::before {
            font-family: 'Material Icons';
            font-size: 1.5em;
            float: left;
            clear: left;
        }
        /*여기가 사이드바*/
        
        .menu label::before {
            content: '\e5d2';
        }
        
        .menu li:nth-child(1) a::before {
            content: '\f02e';
        }
        
        .menu li:nth-child(2) a::before {
            content: '\e8d6';
        }
        
        .menu li:nth-child(3) a::before {
            content: '\e88a';
        }
        
        .menu li:nth-child(4) a::before {
            content: '\e8cc';
        }
        
        .menu li:nth-child(5) a::before {
            content: '\e87d';
        }
        
        .menu li:nth-child(6) a::before {
            content: '\e8b8';
        }
        
        #expand-menu {
            /* 체크박스 폼 요소 감춤 */
            display: none;
        }
        
        #expand-menu:checked~ul {
            /* 체크박스 체크되었으면 메뉴 목록 표시 - 반응형 표시용 */
            display: block;
            height: auto;
        }
        
        .menu {
            display: block;
            width: 200px;
            background-color: #000;
            color: #fff;
            border-radius: 20px;
            padding: 10px;
            box-sizing: border-box;
            overflow: hidden;
            /* 반응형 애니메이션용 */
            transition: all 0.5s ease;
            /* 반응형 애니메이션 */
        }
        
        .menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .menu a,
        .menu>label {
            display: block;
            height: 25px;
            padding: 8px;
            cursor: pointer;
            color: #fff;
            text-decoration: none;
        }
        
        .menu a:hover {
            color: #000;
        }
        
        .menu ul li:hover,
        .menu>label:hover {
            background-color: #fff;
            color: #000;
            border-radius: 10px;
        }
        
        .menu div {
            line-height: 1.5;
            font-size: 1em;
            font-family: 'Noto Sans KR';
            padding: 0 0 0 50px;
            /* 아이콘과 텍스트 사이 여백 */
        }
        
        @media screen and (max-width:1023px) {
            .menu {
                /* 1단계 */
                width: 60px;
            }
        }
        
        @media screen and (max-width:560px) {
            .menu #expand-menu:not(:checked)~ul {
                /* 2단계 */
                display: none;
            }
        }
        
        .menu div {
            position: absolute;
            /* 절대 위치로 텍스트 고정 */
            left: 50px;
            line-height: 1.5;
            font-size: 1em;
            font-family: 'Noto Sans KR';
            padding: 0 0 0 20px;
            /* 패딩 20p로 축소 */
        }
        
        .menu #expand-menu:not(:checked)~ul {
            /* 데스크탑 화면에서도 메뉴를 접었더 펼칠 수 있음 */
            display: none;
        }
        /*사이드바 css 끝*/
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    <!-- 사이드바  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container ">
        <header class="blog-header lh-1 py-3">
        <?php include("./nav.html"); ?>

            <!-- 사이드바 -->

    </div>
    </header>
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">

        </div>
    </div>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://search.pstatic.net/common/?src=http%3A%2F%2Fimgnews.naver.net%2Fimage%2F5589%2F2023%2F03%2F26%2F0000082973_004_20230326051202494.jpg&type=a340" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://search.pstatic.net/sunny/?src=https%3A%2F%2Fimg.theqoo.net%2Fimg%2FxpCgh.jpg&type=a340" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://search.pstatic.net/common/?src=http%3A%2F%2Fblogfiles.naver.net%2FMjAyMjEyMjhfMTQ0%2FMDAxNjcyMjMzNjAyMjY0.oJTyudfGdkpKzsV91_wYCfp71kjiEgX1vElPBV1BuJEg.5n1L8QYnwomG-ybg0H8EmLfcsU7xuJ13t690CbWZjCsg.JPEG.23446766%2FSE-50df6cb6-bf19-11ec-87f6-ddf82c4c35ae.jpg&type=a340" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">안전한 라이딩 하세요.</h1>
                <p class="lead my-3">네비게이션 경로</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>
        <div class="p-4 p-md-5 mb-4 rounded">
            <div class="d-grid gap-2">
                <button class="btn btn-outline-success" type="button">STOP</button>
                <button class="btn btn-outline-danger" type="button">구조 요청 버튼</button>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">

                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">

                        <h3 class="mb-0">현재속도 : </h3>
                        <div class="mb-1 text-muted"></div>
                        <p class="card-text mb-auto"></p>
                    </div>
                    <div class="col-auto d-none d-lg-block">

                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            
          </svg>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">

                        <h3 class="mb-0">주행 기록</h3>
                        <div class="mb-1 text-muted">주행기록 : </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
           
          </svg>

                    </div>
                </div>
            </div>
        </div>



    </main>

    <ul class="nav nav-pills nav-fill navbar fixed-bottom bg-light">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">홈</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">추천코스</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">소셜</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">마이페이지</a>
        </li>
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>