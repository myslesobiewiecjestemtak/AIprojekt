  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["librarian"]; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
        
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Nawigacja</li>
        <li><a href="home.php"><i class="fa fa-home"></i> Lista studentów </a></li>
        <li><a href="book_list.php"><i class="fa fa-home"></i> Lista książek </a></li>
        <li><a href="book_create.php"><i class="fa fa-home"></i> Dodaj książkę </a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>