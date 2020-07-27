<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-gift"></i>
              <p>
                Leave
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php echo anchor("LeaveController/CategoryCreate",'<i class="far fa-circle nav-icon"></i> <p>Create Leave Category</p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">

              <?php echo anchor("LeaveController/Category",'<i class="far fa-circle nav-icon"></i> <p>All Leave Category</p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php echo anchor("LeaveController/ReasonCreate",'<i class="far fa-circle nav-icon"></i> <p>Create Leave Reason</p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">

              <?php echo anchor("LeaveController/Reason",'<i class="far fa-circle nav-icon"></i> <p>All Leave Reason</p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php echo anchor("LeaveController/ConfigCreate",'<i class="far fa-circle nav-icon"></i> <p> Add Leave Config</p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">
              <?php echo anchor("LeaveController/Config",'<i class="far fa-circle nav-icon"></i> <p>All Leave Config</p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php echo anchor("LeaveController/ApplicationApply",'<i class="far fa-circle nav-icon"></i> <p>  Leave Application</p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">
              <?php echo anchor("LeaveController/Application",'<i class="far fa-circle nav-icon"></i> <p>Pending Application </p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php echo anchor("LeaveController/ViewLeave",'<i class="far fa-circle nav-icon"></i> <p> View Leave </p>',array('class'=>'nav-link')) ?>
             </li>

          </ul>
        </li>