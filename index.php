<?php include('includes/header.php') ?>
<?php

require_once 'src/twitter.class.php';

// enables caching (path must exists and must be writable!)
// Twitter::$cacheDir = __DIR__ . '/temp';


// ENTER HERE YOUR CREDENTIALS (see readme.txt)
$twitter = new Twitter("3srDq3VZgp7cCQcaRQehi2R2Y", "DfMqsC1OgXNodGvWisWIXBEDNyCijdbhn5XGIu5uZ62Ig9yqpg", "1570478605-0wAE06sxuRlJEowORgNuL53OrQ7fU3NfGEvOB9s", "Es3LRixjnI0J0ScEm9dTADNywj8AOwtmyFjTQRXHBkx1X");

$statuses = $twitter->load(Twitter::ME_AND_FRIENDS);

?>
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-12"> 
          <div class="container">
            <div class="row">
              <!-- post -->
              <?php foreach ($statuses as $status): ?>
              <div class="post col-xl-4">
                <div class="post-thumbnail">
                  <img src="https://i.ytimg.com/vi/ScMzIvxBSi4/maxresdefault.jpg" alt="..." class="img-fluid">
                </div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last"><?php echo date('d F | Y', strtotime($status->created_at)) ?></div>
                    <div class="category"><a href="#"><?php echo $status->user->location ?></a></div>
                  </div><!--<a href="post.html">
                    <h3 class="h4">STATUS</h3></a>-->
                  <p class="text-muted"><?php echo Twitter::clickable($status) ?></p>
                  <footer class="post-footer d-flex align-items-center">
                    <a href="https://twitter.com/<?php echo $status->user->screen_name ?>" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar">
                        <img src="<?php echo htmlspecialchars($status->user->profile_image_url_https) ?>" class="img-fluid">
                      </div>
                    </a>
                      <div class="title">
                        <a href="https://twitter.com/<?php echo $status->user->screen_name ?>">
                          <span><?php echo htmlspecialchars($status->user->name) ?></span>
                        </a>
                      </div>
                    <div class="date"><i class="icon-clock"></i><?php echo date('h:iA', strtotime($status->created_at)) ?></div>
                    <div class="comments meta-last">
                      <i class="fa fa-heart-o"></i><?php echo $status->favorite_count ?>
                      <!--<i class="fa fa-retweet"></i><?php echo $status->retweet_count ?>-->
                    </div>
                  </footer>
                </div>
              </div>
              <?php endforeach ?>
            </div>
          </div>
        </main>

<?php include('includes/footer.php') ?>