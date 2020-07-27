<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Performance
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <?php echo anchor("PerformanceController/Create",'<i class="far fa-circle nav-icon"></i> <p>Add Performance </p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">

              <?php echo anchor("PerformanceController",'<i class="far fa-circle nav-icon"></i> <p>All Performance </p>',array('class'=>'nav-link')) ?>
            </li>
              <li class="nav-item">
                <?php echo anchor("PerformanceController/CreateFactor",'<i class="far fa-circle nav-icon"></i> <p>Add Performance Factor</p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">

              <?php echo anchor("PerformanceController/Factor",'<i class="far fa-circle nav-icon"></i> <p>All Performance Factor</p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
        </li>