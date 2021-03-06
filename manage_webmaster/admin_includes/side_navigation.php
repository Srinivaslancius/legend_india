    <?php 
        $currentFile = $_SERVER["PHP_SELF"];
        $parts = Explode('/', $currentFile);
        $page_name = $parts[count($parts) - 1];
    ?>
<div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
          <ul class="sidebar-menu">
            <li class="menu-title">Menu</li>
             <li  class="<?php if($page_name == 'dashboard.php') { echo "active"; } ?>">
              <a href="dashboard.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Dashboard</span>
              </a>
            </li>          
            <li class="<?php if($page_name == 'site_settings.php') { echo "active"; } ?>">
              <a href="site_settings.php" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-settings zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Site Settings</span>
              </a>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Users</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Users</li>
                <li class="<?php if($page_name == 'admin_users.php' || $page_name == 'add_admin_users.php' || $page_name == 'edit_admin_users.php') { echo "active"; } ?>"><a href="admin_users.php">Admin Users</a></li> 
              </ul> 
            </li>
            <li  class="<?php if($page_name == 'banners.php' || $page_name == 'add_banners.php' || $page_name == 'edit_banners.php') { echo "active"; } ?>">
              <a href="banners.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Banners</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'downloads.php' || $page_name == 'add_downloads.php' || $page_name == 'edit_downloads.php') { echo "active"; } ?>">
              <a href="downloads.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="glyphicon glyphicon-download-alt"></i>
                </span> 
                <span class="menu-text">Downloads</span>
              </a>
            </li>
           <li  class="<?php if($page_name == 'locations.php' || $page_name == 'add_locations.php' || $page_name == 'edit_locations.php') { echo "active"; } ?>">
              <a href="locations.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Locations</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'csr_activities.php' || $page_name == 'add_csr_activities.php' || $page_name == 'edit_csr_activities.php') { echo "active"; } ?>">
              <a href="csr_activities.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-store zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Csr Activities</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'categories.php' || $page_name == 'add_categories.php' || $page_name == 'edit_categories.php') { echo "active"; } ?>">
              <a href="categories.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-store zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Categories</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'sub_categories.php' || $page_name == 'add_sub_categories.php' || $page_name == 'edit_sub_categories.php') { echo "active"; } ?>">
              <a href="sub_categories.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-store zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Sub Categories</span>
              </a>
            </li>
            <!-- <li  class="<?php if($page_name == 'sub_sub_categories.php' || $page_name == 'add_sub_sub_categories.php' || $page_name == 'edit_sub_sub_categories.php') { echo "active"; } ?>">
              <a href="sub_sub_categories.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-store zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Sub Sub Categories</span>
              </a>
            </li> -->
            <li  class="<?php if($page_name == 'testimonials.php' || $page_name == 'add_testimonials.php' || $page_name == 'edit_testimonials.php') { echo "active"; } ?>">
              <a href="testimonials.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-comments  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Testimonials</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'projects.php' || $page_name == 'add_projects.php' || $page_name == 'edit_projects.php') { echo "active"; } ?>">
              <a href="projects.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Projects</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'content_pages.php' || $page_name == 'add_content_pages.php' || $page_name == 'edit_content_pages.php') { echo "active"; } ?>">
              <a href="content_pages.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-item  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Content Pages</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'news.php' || $page_name == 'add_news.php' || $page_name == 'edit_news.php') { echo "active"; } ?>">
              <a href="news.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-item  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">News</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'association.php' || $page_name == 'add_association.php' || $page_name == 'edit_association.php') { echo "active"; } ?>">
              <a href="association.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-item  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Association</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'photo_gallery.php' || $page_name == 'add_photo_gallery.php' || $page_name == 'edit_photo_gallery.php') { echo "active"; } ?>">
              <a href="photo_gallery.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Photo Gallery</span>
              </a>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-account-circle zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Careers</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Careers</li>
                <li class="<?php if($page_name == 'current_openings.php' || $page_name == 'add_current_openings.php' || $page_name == 'edit_current_openings.php') { echo "active"; } ?>"><a href="current_openings.php">Current Openings</a></li> 
                <li class="<?php if($page_name == 'posted_resumes.php' || $page_name == 'add_posted_resumes.php' || $page_name == 'edit_posted_resumes.php') { echo "active"; } ?>"><a href="posted_resumes.php">Posted Resumes</a></li>
              </ul>
            </li>
            <!-- <li  class="<?php if($page_name == 'testimonials.php' || $page_name == 'add_testominials.php' || $page_name == 'edit_testimonials.php') { echo "active"; } ?>">
              <a href="testimonials.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-comments  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Testimonials</span>
              </a>
            </li> -->
            <li  class="<?php if($page_name == 'services.php' || $page_name == 'add_services.php' || $page_name == 'edit_services.php') { echo "active"; } ?>">
              <a href="services.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-wrench zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Services</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'partnerships.php') { echo "active"; } ?>">
              <a href="partnerships.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-comments  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Partnerships</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'our_history.php' || $page_name == 'add_our_history.php' || $page_name == 'edit_our_history.php') { echo "active"; } ?>">
              <a href="our_history.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Our History</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'faqs.php' || $page_name == 'add_faqs.php' || $page_name == 'edit_faqs.php') { echo "active"; } ?>">
              <a href="faqs.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-pin-help zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">FAQ'S</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'faq_categories.php' || $page_name == 'add_faq_categories.php' || $page_name == 'edit_faq_categories.php') { echo "active"; } ?>">
              <a href="faq_categories.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-store zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Faq Categories</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'customer_enqueries.php') { echo "active"; } ?>">
              <a href="customer_enqueries.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-account-box-mail zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Customer Enqueries</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'feedbacks.php') { echo "active"; } ?>">
              <a href="feedbacks.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-account-box-mail zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">User Feedbacks</span>
              </a>
            </li>
          </ul>
        </div>
      </div>