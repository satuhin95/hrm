<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-male"></i>
              <p>
                Playroll Head
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php echo anchor("PlayrollController/Create",'<i class="far fa-circle nav-icon"></i> <p>Add Playroll Head</p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">

              <?php echo anchor("PlayrollController",'<i class="far fa-circle nav-icon"></i> <p>All Playroll Head</p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
        </li>