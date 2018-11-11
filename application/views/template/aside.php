<aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Administrator</p>
          <p class="app-sidebar__user-designation">Anshor University</p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
          <a class="app-menu__item <?php if($this->uri->segment(1)=="admin"){echo "active";}?>" href="<?php echo site_url();?>admin"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
        <li>
          <a class="app-menu__item <?php if($this->uri->segment(1)=="pmb"){echo "active";}?>" href="<?php echo site_url();?>pmb"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Data Register</span></a>
        </li>
      </ul>
    </aside>