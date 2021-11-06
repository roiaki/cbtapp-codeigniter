<?php
?>
<body>
  <?php echo form_open('user/register'); ?>
    <div class="d-flex 
                flex-column 
                align-items-center 
                justify-content-center 
                shadow-lg 
                p-5 
                m-5 
                bg-white 
                rounded-circle"
    >
      <h2>会員登録ページ</h2>
      <?php echo $this->session->flashdata('msg'); ?>

      <div class="form-group">
        <label for="name">お名前</label>
        <input type="text" 
              class="form-control" 
              id="name" 
              name="name" 
              preg_replace_callback="名前" 
              placeholder="お名前" 
              required
              autofocus
        >
      </div>
      <?php 
        echo form_error('name'); 
      ?>


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
      <?php 
        echo form_error('email'); 
      ?>

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
      <?php 
        echo form_error('password'); 
      ?>

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