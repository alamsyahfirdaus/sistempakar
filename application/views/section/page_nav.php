<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= TITLE ?></title>
  <?php $this->load->view('section/css'); ?>
  <?php $this->load->view('section/js'); ?>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

<nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary">
  <div class="container">
    <a href="" class="navbar-brand">
      <span class="brand-text font-weight-bold text-white" style="font-family: serif;"><marquee direction=""><?= TITLE ?></marquee></span>
    </a>
  </div>
</nav>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container">
        <div class="row mb-auto">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark" style="font-family: serif;"></h1>
          </div>
        </div>
      </div>
    </div>
    <?= $content ?>
  </div>
  <aside class="control-sidebar control-sidebar-dark"></aside>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      <b>Developed by <a class="text-muted" href="">Alamsyah Firdaus</a></b>
    </div>
    <strong>Copyright &copy; Juni 2010, by<a class="text-muted" href="javascript:void(0)" onclick="return window.location.href = index + 'copyright'"> David, S.Kom., M.Cs.</a></strong>
  </footer>
</div>
</body>
</html>