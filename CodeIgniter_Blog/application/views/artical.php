
<script type="text/javascript">
  base_url = '<?= base_url() ?>';   //base url for ajax.js file
</script>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $artical['title'] ?> - CodeIgniter Blog </title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/libs/bootstrap.min.css') ?>">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/custom.css') ?>">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>

<body>

  <?php include_once('header.php'); ?><br>

  <!-- Page Content -->
  <div class="container bg-dark rounded"><br>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
        <div class="bg-white rounded px-3">
          <!-- Title --><br>
          <h1 class="mt-4"><?= $artical['title'] ?></h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#"><?= $artical['admin'] ?></a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?= $artical['date'] ?></p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

          <hr>

          <!-- Post Content -->
          <p class="text-justify container"><?= $artical['content'] ?></p>
          
          <!-- like Share buttons -->
          <div class="text-info float-right" style="cursor:pointer;">
            <span id="like" onclick="add_like('<?= $artical['artical_id'] ?>')"><i class="far fa-2x fa-thumbs-up" title="like"></i></span>&emsp; 
            <i class="fas fa-2x fa-share-alt" title="Share" role="button"></i>
          </div><br>
          <br><!-- <i class="fas fa-2x fa-thumbs-up"></i> -->
          <hr>
        </div>
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form action="<?= base_url('user/submit_comment') ?>" method='post'>
              <input type="hidden" name="artical_id" value="<?= $artical['artical_id'] ?>">
              <div class="row">
                <div class="form-group col-lg-6">
                  <input type="text" class="form-control" name="name" placeholder="Your Name *">
                </div>
                <div class="form-group col-lg-6">
                  <input type="text" class="form-control" name="email" placeholder="Your Email *">
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="4" name="comment" placeholder="Enter Your Comment"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <div class="border bg-white rounded">

          <!-- Comment with replies -->
          <?php foreach ($comments as $comment): ?>
          <div class="media m-4">
            <img class="d-flex mr-3 rounded-circle" src="https://www.w3schools.com/w3images/avatar3.png" alt="" width="50" alt="">
            <div class="media-body">
               <span href="#" class="btn btn-sm btn-info mx-2 float-right" data-toggle="collapse" data-target="#r<?= $comment['id'] ?>">Reply</span>
              <h5 class="mt-0 d-inline-block"><?=$comment['commenter_name']?></h5> <small class="badge badge-success"><?=$comment['date_time']?></small>
              <p><?=$comment['comment']?></p>
              <div class="border rounded collapse" id="r<?= $comment['id'] ?>">
                <form class="form-inline" action="<?= base_url('user/submit_reply')?>" method="post">
                  <input type="hidden" name="artical" value="<?=$comment['artical_id']?>">
                  <input type="hidden" name="cid" value="<?=$comment['id']?>">
                  <input type="text" class="form-control form-control-sm m-2" name="name" placeholder="name *">
                  <input type="text" class="form-control form-control-sm m-2" name="email" placeholder="email *">
                  <textarea class="form-control form-control-sm m-2" name="reply_text" placeholder="write your reply"></textarea>
                  <input type="submit" class="btn btn-sm btn-outline-info m-2" value="submit">
                </form>
              </div>
              <!-- previous reply secion -->
              <?php foreach ($comment['replies'] as $reply): ?>
              <div class="media my-4">
                <img class="d-flex mr-3 rounded-circle" src="https://www.w3schools.com/w3images/avatar3.png" alt="" width="50">
                <div class="media-body">
                  <h5 class="mt-0 d-inline-block"><?=$reply['name']?></h5> <small class="badge badge-info"><?=$reply['date_time']?></small>
                  <p><?=$reply['reply']?></p>
                </div>
              </div>
              <?php endforeach; ?>
              <!-- end previous reply secion -->
            </div>
          </div>
          <?php endforeach; ?>
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <?php foreach (array_slice($categories,0,ceil(sizeof($categories)/2)) as $category) : ?>
                    <li><a href="<?= base_url('user/articals_by_category?catg='.$category) ?>"><?= $category ?></a></li>  
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <?php foreach (array_slice($categories,ceil(sizeof($categories)/2)) as $category) : ?>
                    <li><a href="<?= base_url('user/articals_by_category?catg='.$category) ?>"><?= $category ?></a></li>  
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- populer artical Widget -->
        <div class="card my-4">
          <h5 class="card-header">Most Populer Articals</h5>
          <div class="card-body">
          <?php foreach ($topartical as $topartical): ?>
            <a href="<?= base_url('user/artical?id='.$topartical['artical_id']) ?>"><div class="my-3" title="by <?= $topartical['admin'] ?>"><?= substr($topartical['title'],0,30).'...' ?><small class="float-right badge badge-info"><?= $topartical['likes'] ?> likes</small></div></a>
          <?php endforeach; ?>
           </div>
        </div>

      </div>

    </div><br>
    <!-- /.row -->

  </div><br>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/libs/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/libs/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/ajax.js') ?>"></script>

</body>

</html>
