<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>대화창</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="style" href="./style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
    .chat-container {
      height: 500px;
      overflow-y: scroll;
    }
    .message-box {
      margin-top: 10px;
      margin-bottom: 10px;
    }
    .message-box .message-time {
      font-size: 12px;
      color: #a0a0a0;
    }
    .message-box .message-text {
      margin-top: 5px;
    }
    .message-box .message-text p {
      margin-bottom: 0;
    }
    .chat-input {
      margin-top: 10px;
    }
  </style>
</head>
<body class="container" width="100%" margin= "auto">  
 <?php include("./nav.html"); ?>


<!--친구 목록-->
<div class="col-md-4">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">친구 목록</h4>
    </div>
    <div class="card-body friend-list">
      <ul>
        <li>친구1</li>
        <li>친구2</li>
        <li>친구3</li>
      </ul>
    </div>

  <!--대화창-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="card" style="position: fixed; top: 0; right: 0; height: 100%; width: 400px;">
          <div class="card-header">
            <h4 class="card-title">bestrider님과의 대화</h4>
          </div>
          <div class="card-body chat-container">
            <div class="message-box">
              <div class="message-time">오후 3:30</div>
              <div class="message-text">
                <p>안녕하세요?</p>
              </div>
            </div>
            <div class="message-box">
              <div class="message-time">오후 3:33</div>
              <div class="message-text">
                <p>안녕하세요! 어떻게 지내시나요?</p>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <form>
              <div class="form-group">
                <textarea class="form-control" id="chat-input" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary chat-input">보내기</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
