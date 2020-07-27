<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Department
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php echo anchor("DepartmentController/Create",'<i class="far fa-circle nav-icon"></i> <p>Add Department</p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">

              <?php echo anchor("DepartmentController",'<i class="far fa-circle nav-icon"></i> <p>All Department</p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
        </li>