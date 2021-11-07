<?php

$hour = date("H");

if (5 <= $hour && $hour <= 12) {
  $msg = "おはようございます";
} else if (17 < $hour) {
  $msg = "こんばんは";
} else {
  $msg = "こんにちは";
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- BootstrapのCSS読み込み -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title><?php echo $html_title; ?></title>

</head>

<body>
  <header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <a class="navbar-brand fw-bold ml-5" href="<?php echo base_url('event/index'); ?>">CBT APP</a>
      <div class="collapse navbar-collapse" id="nav-bar">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav">
          <?php if (isset($is_logged_in)) { ?>

            <div class="d-flex align-items-center">
              ID <?php echo $user_id; ?> 番 <?php echo $email; ?> さん、<?php echo $msg; ?>　
            </div>
            <li class="nav-item"><a class="nav-link" href="../user/info.php">説明</a></li>
            <li class="nav-item"><a class="nav-link" href="../events">出来事一覧</a></li>
            <li class="nav-item"><a class="nav-link" href="../threecolumns">3コラム一覧</a></li>
            <li class="nav-item"><a class="nav-link" href="../sevencolumns">7コラム一覧</a></li>

            <div class="dropdown mr-5">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                アカウント
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a class="nav-link" href="<?php echo base_url('user/logout'); ?>">ログアウト</a></li>
                <li><a class="nav-link" href="../withdraw/delete_confirm.php">退会</a></li>
              </ul>
            </div>
          <?php } else { ?>
            <li class="nav-item"><a class="dropdown-item" href="<?php echo base_url('/user/login_view'); ?>">ログイン</a></li>
            <li class="nav-item"><a class="dropdown-item" href="<?php echo base_url('/user/register_view'); ?>">会員登録</a></li>
          <?php } ?>
        </ul>
      </div>
    </nav>
  </header>

  <div class="center jumbotron" style="margin-top:20px">
    <div class="text-center">
      <h1>認知行動療法的なWebアプリ</h1>
      <p style="margin-top:20px">3コラム、7コラムで思考の癖を把握して、<br> 認知のゆがみを取りましょう。</p>
      <h2 style="margin-top:30px">May your heart suffer less</h2>
      <div style="margin-top:40px">
        {!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
      </div>
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
<script type="text/javascript" src="main.js"></script>
</body>

</html>