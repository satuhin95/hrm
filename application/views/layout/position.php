 
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-award"></i>
              <p>
                Position
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php echo anchor("PositionController/Create",'<i class="far fa-circle nav-icon"></i> <p>Add Position</p>',array('class'=>'nav-link')) ?>
             </li>
             <li class="nav-item">

              <?php echo anchor("PositionController",'<i class="far fa-circle nav-icon"></i> <p>All Position</p>',array('class'=>'nav-link')) ?>
            </li>
          </ul>
        </li>