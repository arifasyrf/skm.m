
<?php echo $this->Html->docType();?>
<html>

<hr>
  
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark shadow" style="margin:24px 0;">
  <a class="navbar-brand" href="/skm.m/">HOME</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/skm.m/branches/koperasi">eCarian</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/skm.m/posts/kalendar">eCalendar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://infokop.skm.gov.my/">Infokop</a>
      </li>
    </ul>
    <!-- <a class="navbar-brand" href="/skm.m/users/login">LOGIN</a>-->
    <div class="container justify-content-end">
      <div>
        <?= $this->Html->link('Login', ['controller'=>'users', 'action'=>'login'], 
          array('class'=>'btn btn-success'));?>

        <?= $this->Html->link('Logout', ['controller'=>'users', 'action'=>'logout'], 
      array('class'=>'btn btn-danger'));?>
      </div>
    </div>

    <form class="form-inline">
      <input class="form-control mr-md-2 my-0" type="text" placeholder="Cari Koperasi">
      <button class="btn btn-primary my-2 my-md-0" type="button"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>
</html>