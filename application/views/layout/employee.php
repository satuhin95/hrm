<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Employee
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php echo anchor("EmployeeController/Create",'<i class="far fa-circle nav-icon"></i> <p>Add Employee</p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">

              <?php echo anchor("EmployeeController",'<i class="far fa-circle nav-icon"></i> <p>All Employee</p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
        </li>