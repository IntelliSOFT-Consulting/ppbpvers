<?= $this->Html->css('menu.css') ?>
    <div class="menu text-center">
    <ul class="nav nav-pills center-pills responsive-menu">
      <li class="<?php echo $this->fetch('Dashboard') ?>">
        <?php
          echo $this->Html->link('<i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard',
          array('controller' => 'users', 'action'=>'dashboard', 'prefix' => 'Admin'), array('escape' => false ));
            ?>
       </li>
       <li class="dropdown <?php echo $this->fetch('Users') ?>">
         <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop3" href="#">
           <i class="fa fa-users" aria-hidden="true"></i> User Management <b class="caret"></b></a>
          <ul aria-labelledby="drop3" role="menu" class="dropdown-menu">
             <li><?php
                        echo $this->Html->link('<i class="icon-user"></i> All Users',  array('controller' => 'users', 'action'=>'index', 'prefix' => 'Admin' ),
                                  array('escape' => false, 'tabindex' => '-1'));
                    ?>
            </li>
             <li><?php
                        echo $this->Html->link('<i class="fa fa-user-plus" aria-hidden="true"></i> Add Users',  array('controller' => 'users', 'action'=>'add', 'prefix' => 'Admin' ),
                                  array('escape' => false, 'tabindex' => '-1'));
                    ?>
            </li>
            <li><?php
                echo $this->Html->link('<i class="fa fa-user-o" aria-hidden="true"></i> User Roles',  array('controller' => 'roles', 'action'=>'index', 'prefix' => 'Admin' ),
                                  array('escape' => false, 'tabindex' => '-1'));
                    ?>
            </li>
             <li class="divider"></li>
        </ul>
       </li>
       <li class="dropdown <?php echo $this->fetch('Content') ?>">
         <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#">
            <i class="fa fa-book" aria-hidden="true"></i> Content Management <b class="caret"></b></a>
          <ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
            <li>
            <?php
            echo $this->Html->link('<i class="icon-comment-alt"></i> User Feedback',
              array('controller' => 'feedbacks', 'action' => 'index',  'prefix' => 'Admin'),
              array('escape' => false));
            ?>
            </li>
            <li class="divider"></li>
            <li><?php
            echo $this->Html->link('<i class="icon-envelope"></i> Site Messages',
                array('controller' => 'messages', 'action' => 'index', 'prefix' => 'Admin'), array('escape' => false)); ?>
            </li>
            <li>
            <?php
            echo $this->Html->link('<i class="icon-hand-right"></i> Counties',
              array('controller' => 'counties', 'action' => 'index',  'prefix' => 'Admin'),
              array('escape' => false));
            ?>
            </li>
            <li>
            <?php
            echo $this->Html->link('<i class="icon-globe"></i> Countries',
              array('controller' => 'countries', 'action' => 'index', 'prefix' => 'Admin'),
              array('escape' => false));
            ?>
            </li>          
             <li class="divider"></li>
        </ul>
       </li>
       <li class="<?php echo $this->fetch('Profile') ?>">
        <?php
          echo $this->Html->link('<i class="icon-user"></i> My Profile',
            array('controller' => 'users', 'action'=>'changePassword', 'prefix' => false ), array('escape' => false ));
            ?>
       </li>
    </ul>

    </div><!-- /.nav-collapse -->

<hr>
