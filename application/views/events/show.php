<body>

  <div class="container">
    <h3>出来事 詳細ページ</h3>

    <table class="table table-striped table-bordered">
      <thead>
        <tr class="table-primary">
          <th>出来事id</th>
          <th>タイトル</th>
          <th>内容</th>
          <th>更新日</th>
        </tr>
      </thead>
      
      <tbody>
        <tr>
          <td><?php echo $event->id; ?></td>
          <td><?php echo $event->title; ?></td>
          <td><?php echo $event->content; ?></td>
          <td><?php echo $event->updated_at; ?></td>
        </tr>
      </tbody>
      
    </table>

    <a href="<?php echo base_url('event/edit'); ?>/<?php echo $event->id; ?>" class="btn btn-primary btn-lg" role="button" aria-pressed="true">編集
    </a>

    <a href="<?php echo base_url('event/delete'); ?>/<?php echo $event->id; ?>" class="btn btn-danger btn-lg" role="button" onclick="confirmDelete();return false;" aria-pressed="true">削除
    </a>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
  <script type="text/javascript" src="../public/js/main.js"></script>
</body>

</html>