    <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="index.php" title="Woato Dashboard">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name text-truncate">Admin Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="#" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-earth"></i>
                      <span class="nav-text">Woato</span> <b class="caret"></b>
                    </a>
                  </li>
                  <ul  class="collapse show"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                            <li>
                              <a href="http://www.woato.org"target="_blank">View Site</a>
                            </li>
                    </div>      
                  </ul>
                
                     <li  class="has-sub" >
                          <a class="sidenav-item-link" href="#" data-toggle="collapse" data-target="#data-tables"
                            aria-expanded="false" aria-controls="data-tables">
                            <i class="mdi mdi-file-document-box-multiple-outline"></i>
                            <span class="nav-text">List</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="data-tables">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="caller_list.php">Register List</a>
                              </li>
                              
                            </div>
                          </ul>
                          <ul  class="collapse"  id="data-tables">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="post_list.php">Post List</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>

                        <li  class="has-sub" >
                          <a href="#">Pages
                            <i class="mdi mdi-image-filter-none"></i>
                            
                          </a>
                        </li>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                      aria-expanded="false" aria-controls="forms">
                      <i class="mdi mdi-email-mark-as-unread"></i>
                      <span class="nav-text">Forms</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="forms"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">Basic Input</span>
                                
                              </a>
                            </li>
                   
                      </div>
                    </ul>
                  </li>
          
                       
                        
                      <!--  <li> 
                        <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                        -->
                </ul>
              </div>
            </div>
          </aside>
        </body>

 