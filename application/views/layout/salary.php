<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Salary
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php echo anchor("SalaryController/ConfigCreate",'<i class="far fa-circle nav-icon"></i> <p>Salary Config</p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">

              <?php echo anchor("SalaryController/Config",'<i class="far fa-circle nav-icon"></i> <p>All Salary Configrateio</p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php echo anchor("SalaryController/Config",'<i class="far fa-circle nav-icon"></i> <p>Pay Salary </p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">

              <?php echo anchor("SalaryController/View",'<i class="far fa-circle nav-icon"></i> <p>View Salary </p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
        </li>