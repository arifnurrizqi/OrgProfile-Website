<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php $this->load->view('simple/_partials/head.php'); ?>
</head>

<?php $this->load->view('simple/_partials/navbar.php'); ?>

<!-- about Section Start -->
<section id="about" class=" pt-24 lg:py-28 pb-20 dark:bg-dark">
  <div class="container">
    <iframe src="<?= base_url('public/file/' . $landing[0]->booklet) ?>" frameborder="0" height="768px" class="w-full"></iframe>
  </div>
</section>

<!-- Footer Start -->
<?php $this->load->view('simple/_partials/footer.php'); ?>

 
</body>

</html>