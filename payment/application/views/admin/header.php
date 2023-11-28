<input type="text" value="<?php echo base_url(); ?>" id="baseurl" hidden>
  <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
         
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
   
          <li class="dropdown"><a href="<?php echo base_url(); ?>admin/logout" 
              class="btn btn-primary">
              Logout
              </a>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>admin"> <img alt="image" src="<?php echo base_url(); ?>assets/img/logo.png" class="header-logo" />
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown <?php if($title=='dashboard'){
            echo 'active';
            }
            else{
            echo '';
            }
            ?>">
              <a href="<?php echo base_url(); ?>admin" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
         
            
            <li class="dropdown <?php if($title=='payments'){
            echo 'active';
            }
            else{
            echo '';
            }
            ?>">
              <a href="<?php echo base_url(); ?>admin/payments" class="nav-link"><i
                  data-feather="briefcase"></i><span>Payments</span></a>
            </li>
         
              </ul>
            </li> 
          </ul>
        </aside>
      </div>