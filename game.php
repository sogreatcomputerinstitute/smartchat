<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $noti = new notifications;
  $message = new message;
?>

<?php
  if (!$universal->isLoggedIn() || $universal->e_verified($_SESSION['id'])) {
    header('Location: '.DIR.'/login');
  }
?>

<?php
  $title = "SubWay Surfers • SmartChat";
  $keywords = "Hashtag, Share and capture world's moments, share, capture, about";
  $desc = "Hashtag lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";
?>

<?php 
  include 'includes/header.php';
  include 'needs/heading.php';
  include 'needs/nav.php';
?>

<div class="badshah">

  <iframe src="http://engage2.mtn.ng/lp/2357?click_id=As9mUZrb2ToSQs%252BJFRu%252Fl10ASLQwDzlbhqaMBrITe3NhIiUlk3YmtW7B3FvhZge5&utm_source=ncnd_page&utm_campaign=_p1040_b33200&p=1040&b=33200" frameborder="0"></iframe>

</div>

<?php include 'includes/footer.php'; ?>
