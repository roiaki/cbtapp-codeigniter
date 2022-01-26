<body>

  <div class="container">
    <div class="col-5">
      <h3>出来事　新規作成</h3>

      <?php echo form_open('event/store'); ?>
        <div class="form-group">
          <label>出来事タイトル</label>
          <input type="text" 
                 class="form-control" 
                 id="title" 
                 name="title" 
                 value="<?php
                          if (isset($title)) {
                            echo $title;
                          }
                        ?>"
          >
        </div>
        <?php echo '<div class="text-danger">'.form_error('title'). '</div>'; ?>

        <div class="form-group">
          <!-- 内容 -->
          <label for="content">出来事 の 内容</label>
          <textarea class="form-control" 
                    id="content" 
                    name="content" 
                    cols="70" 
                    rows="5"><?php
                              if (isset($content)) {
                                echo $content;
                              } ?></textarea>
        </div>
        <?php echo '<div class="text-danger">'.form_error('content'). '</div>'; ?>

        <button class="btn btn-primary btn-lg" type="submit">作成</button>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
  <script type="text/javascript" src="main.js"></script>
</body>