 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                System
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               
                  <?php echo anchor("UserController",'<i class="far fa-circle nav-icon"></i> <p>All Users</p>',array('class'=>'nav-link')) ?>
               
              </li>
               <li class="nav-item">
                <?php echo anchor("UserController/Create",'<i class="far fa-circle nav-icon"></i> <p>Create Users</p>',array('class'=>'nav-link')) ?>
              </li>
              <li class="nav-item">
                <?php echo anchor("UserController/Activity",'<i class="far fa-circle nav-icon"></i> <p> Users Activity</p>',array('class'=>'nav-link')) ?>
              </li>
            </ul>
          </li>
          