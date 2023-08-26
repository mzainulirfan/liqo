 <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
     <div class="sidebar-inner px-4 pt-3">
         <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
             <div class="d-flex align-items-center">
                 <div class="avatar-lg me-4">
                     <img src="<?= base_url(); ?>src/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                 </div>
                 <div class="d-block">
                     <h2 class="h5 mb-3">Hi, Jane</h2>
                     <a href="<?= base_url(); ?>src/pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                         <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                         </svg>
                         Sign Out
                     </a>
                 </div>
             </div>
             <div class="collapse-close d-md-none">
                 <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                     <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                 </a>
             </div>
         </div>
         <ul class="nav flex-column pt-3 pt-md-0">
             <li class="nav-item">
                 <a href="<?= base_url(); ?>" class="nav-link d-flex align-items-center">
                     <span class="sidebar-icon">
                         <img src="<?= base_url(); ?>src/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
                     </span>
                     <span class="mt-1 ms-1 sidebar-text">My Liqo'</span>
                 </a>
             </li>
             <li class="nav-item ">
                 <a href="<?= base_url(); ?>" class="nav-link">
                     <span class="sidebar-icon">
                         <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                             <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                             <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                         </svg>
                     </span>
                     <span class="sidebar-text">Dashboard</span>
                 </a>
             </li>

             <li class="nav-item">
                 <span class="nav-link  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-app">
                     <span>
                         <span class="sidebar-icon">
                             <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                             </svg>
                         </span>
                         <span class="sidebar-text">User Management</span>
                     </span>
                     <span class="link-arrow">
                         <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                         </svg>
                     </span>
                 </span>
                 <div class="multi-level collapse" role="list" id="submenu-app" aria-expanded="false">
                     <ul class="flex-column nav">
                         <li class="nav-item">
                             <a class="nav-link" href="<?= base_url(); ?>users">
                                 <span class="sidebar-text">All Users</span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
             <li class="nav-item ">
                 <a href="<?= base_url(); ?>src/pages/settings.html" class="nav-link">
                     <span class="sidebar-icon">
                         <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                         </svg>
                     </span>
                     <span class="sidebar-text">Settings</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank" class="nav-link d-flex align-items-center">
                     <span class="sidebar-icon">
                         <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                         </svg>
                     </span>
                     <span class="sidebar-text">Documentation <span class="badge badge-sm bg-secondary ms-1 text-gray-800">v1.4</span></span>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="<?= base_url(); ?>src/pages/upgrade-to-pro.html" class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
                     <span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
                         <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                         </svg>
                     </span>
                     <span>Sign Out</span>
                 </a>
             </li>
         </ul>
     </div>
 </nav>