<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- BootstrapのCSS読み込み -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title><?php echo $html_title; ?></title>
  
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
            <li class="nav-item"><a class="dropdown-item" href="<?php echo base_url('/user/login_view'); ?>">ログイン</a></li>
            <li class="nav-item"><a class="dropdown-item" href="<?php echo base_url('/user/register_view'); ?>">会員登録</a></li>
          <?php } ?>
        </ul>
      </div>
  </nav>
</header>