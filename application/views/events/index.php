<body>
 
  <div class="container">
    <h2>出来事一覧</h2>

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
        <?php foreach ($results as $row) { ?>
          <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->title; ?></td>
            <td><?php echo $row->content; ?></td>
            <td><?php echo $row->updated_at; ?>
              <p><a href="<?php echo base_url('event/show'); ?>/<?php echo $row->id; ?>">詳細</a></p>
            </td>
          </tr>
        <?php  } ?>
        
          
         
       
      </tbody>
    </table>
    <a href="<?php echo base_url('event/create'); ?>" class="btn btn-primary btn-lg" role="button" aria-pressed="true">新規作成</a>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
  <script type="text/javascript" src="main.js"></script>
</body>

</html>