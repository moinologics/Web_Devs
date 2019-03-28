<!DOCTYPE html> 
<html lang="en">

<head> 

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - CodeIgniter</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/libs/bootstrap.min.css') ?>">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/custom.css') ?>">

</head>

<body class="">

  <?php include_once('header.php'); ?><br>
  <div class="container bg-dark rounded"><br>
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">
      <?php if(sizeof($articals)!=0): ?>

        <h2 class="my-4 text-white text-center">Latest Articals By Codeigniter Blog</h2>
          <h5 class="text-white text-center">articals by top contributers</h5><br><br>
        <!-- Blog Posts -->
        <?php foreach ($articals as $artical): ?>
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?= $artical['title'] ?></h2>
            <p class="card-text text-justify"><?= substr($artical['content'],0,250).'....' ?></p>
            <span class="badge badge-warning" style="font-size:15px"><?= $artical['likes'] ?> Likes</span>
            <a href="<?= base_url('user/artical?id='.$artical['artical_id'])?>" class="btn btn-sm btn-primary float-right">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on <?= $artical['date'] ?> by
            <a href=""><?= $artical['admin'] ?></a>
          </div>
        </div>
        <?php endforeach; ?>
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
      <?php else: ?>
        <br><br><br><h3 class="text-center text-warning">No Artical found in this category !</h3>
      <?php endif; ?>

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
                <button class="btn btn-info" type="button">&#128269;</button>
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

        <!-- Side Widget -->
        <!-- <div class="card my-4">
          <h5 class="card-header">Most Populer Contributers</h5>
          <div class="card-body">
            <a href="#"><div class="my-3" title="by andrew">Kamil Hussain Ansari<small class="float-right badge badge-success">25 Followers</small></div></a>
            <a href="#"><div class="my-3" title="by andrew">Raheem Khan<small class="float-right badge badge-success">18 Followers</small></div></a>
          </div>
        </div> -->

      </div>

    </div>
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

</body>

</html>
