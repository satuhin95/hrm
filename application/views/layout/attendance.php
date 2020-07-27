<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Attendance
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <?php echo anchor("AttendanceController/Create",'<i class="far fa-circle nav-icon"></i> <p>Add Attendance</p>',array('class'=>'nav-link')) ?>
             </li>
              <li class="nav-item">
                <?php echo anchor("AttendanceController/Today",'<i class="far fa-circle nav-icon"></i> <p>Today Attendance</p>',array('class'=>'nav-link')) ?>
             </li>

             <li class="nav-item">

              <?php echo anchor("AttendanceController",'<i class="far fa-circle nav-icon"></i> <p>View Attendance</p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
               <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php echo anchor("AttendanceController/ConfigCreate",'<i class="far fa-circle nav-icon"></i> <p>Add Attendance Config</p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">

              <?php echo anchor("AttendanceController/Config",'<i class="far fa-circle nav-icon"></i> <p>View Attendance Config</p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
        </li>