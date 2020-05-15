<?php 
  $menu = Router::getMenu("menu_acl");
  $currentPage = currentPage(); 
?>
<div class="wrapper">
  <nav class="navbar navbar-expand-md bg-light ">
    <a href="" class="navbar-brand">My Page Name</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_menu">
      <ul class="navbar-nav">
<?php foreach ($menu as $key => $val) : 
  $active = '';
?>
<?php if (is_array($val)): ?>
        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" ><?=$key;?></a>
          <div class="dropdown-menu">
          <?php foreach ($val as $k => $v): 
            $active = ($v == $currentPage)? 'active':''; ?>
          <?php if($k == 'separator') : ?>
            <a href="javascript:void();" role="separator" class="divider"></a>
          <?php else : ?>
            <a  class="dropdown-item <?=$active?>" href="<?=$v;?>"><?=$k;?></a>
          <?php endif; ?>                          
              <!-- <a href="" class="dropdown-item">link 2</a>
              <a href="" class="dropdown-item">link 3</a> -->
        <?php endforeach; ?>              
            </div>
          
        </li>
  <?php else: 
    $active = ($val == $currentPage)? 'active':''; ?>
      <a  class="dropdown-item <?=$active?>" href="<?=$val;?>"><?=$key;?></a>
    
<?php endif ?>

<?php endforeach;?>             
        
      </ul>      
    </div>
    <ul class="navbar-nav navbar-right">
        <?php if(currentUser()) : ?>
        <li class="nav-item"><a href="" class="nav-link">Hello <?=currentUser()->fname;?></a></li>
        <li class="nav-item"><a href="<?=PROOT?>register/logout" class="nav-link">Logout</a></li>
      <?php endif ?>      
      </ul>
  </nav>
</div>