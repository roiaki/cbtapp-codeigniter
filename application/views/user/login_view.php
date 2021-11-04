<?php
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- BootstrapのCSS読み込み -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>会員登録</title>
</head>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- BootstrapのCSS読み込み -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>会員登録</title>
</head>
<header class="mb-4">
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand fw-bold ml-5" href="../events">CBT APP</a>
      <div class="collapse navbar-collapse" id="nav-bar">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav">
          <?php if (isset($user_id)) { ?>

            <div class="d-flex align-items-center">
              ID <?php echo $user_id; ?> 番 <?php echo $user_name; ?> さん、<?php echo $msg; ?>　
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
                <li><a class="nav-link" href="../events/action/logout.php">ログアウト</a></li>
                <li><a class="nav-link" href="../withdraw/delete_confirm.php">退会</a></li>
              </ul>
            </div>
          <?php } else { ?>
            <li class="nav-item"><a class="dropdown-item" href="<?php echo base_url('test_app/user/login'); ?>">ログイン</a></li>
            <li class="nav-item"><a class="dropdown-item" href="<?php echo base_url('test_app/user/register'); ?>">会員登録</a></li>
          <?php } ?>
        </ul>
      </div>
  </nav>
</header>
<body>
  <?php echo form_open('login/auth'); ?>
  <div class="d-flex flex-column align-items-center justify-content-center shadow-lg p-5 m-5 bg-white rounded-circle">
    <h2>ログイン</h2>
    <?php echo $this->session->flashdata('msg'); ?>

    <div class="form-group">
      <label for="email">メールアドレス</label>
      <input type="email"
             class="form-control" 
             id="email" 
             name="email" 
             placeholder="メールアドレス" 
             required 
      >
    </div>

    <div class="form-group">
      <label for="password">パスワード</label>
      <input type="password"
             class="form-control"
             id="password"  
             name="password" 
             placeholder="パスワード" 
             required
      >
    </div>

    <button type="submit" class="col-1 form-control btn btn-success">
      登録する
    </button>
  </div>
  <?php echo form_close(); ?>

  <!-- jQuery読み込み -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <!-- Propper.js読み込み -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  　　
  <!-- BootstrapのJavascript読み込み -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>