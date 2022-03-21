        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $_SESSION['MM_Username']; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form name="search" action="search_request.php" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="hidden" name="tb1_colunm1" value="eservices">
                            <input type="text" name="q" value="" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-table"></i>  <span>Requests</span>
                                <small class="badge pull-right bg-green" id="noti"></small>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                            
                            <li class="active"><a href="list_request.php"><i class="fa fa-angle-double-right"></i>All Requests</a></li>
                            <li class="active"><a href="search_request.php?tb1_colunm1=eservices&q=free-patent-agricultural"><i class="fa fa-angle-double-right"></i>Free Patent</a></li>
                            
                            <li><a href="search_request.php?tb1_colunm1=eservices&q=issuance-survey-authority"><i class="fa fa-angle-double-right"></i>Issuance of Survey Authority</a></li>
                            <li><a href="search_request.php?tb1_colunm1=eservices&q=issuance-certificate-of-tree-plantation-ownership"><i class="fa fa-angle-double-right"></i>Issuance of Tree Plantation Ownership</a></li>
                            
                            <li><a href="search_request.php?tb1_colunm1=eservices&q=issuance-certificate-verification-non-wood"><i class="fa fa-angle-double-right"></i>Issuance of Vrification Non-Wood</a></li>
                            
                            <li><a href="search_request.php?tb1_colunm1=eservices&q=issuance-certificate-verification-non-premium-trees"><i class="fa fa-angle-double-right"></i>Issuance of verification of Non-Premium Trees</a></li>
                            
                            <li><a href="search_request.php?tb1_colunm1=eservices&q=application-chainsaw-registration"><i class="fa fa-angle-double-right"></i>Application of Chainsaw Registration</a></li>
                          
                          <li><a href="search_request.php?tb1_colunm1=eservices&q=application-wildlife-registration"><i class="fa fa-angle-double-right"></i>Application Wildlife Registration</a></li>
                          
                          <li><a href="search_request.php?tb1_colunm1=eservices&q=issuance-local-transport-permit-wildlife"><i class="fa fa-angle-double-right"></i>Issuance of Local Transport Wildlife Permit</a></li>
                          
                          <li><a href="search_request.php?tb1_colunm1=eservices&q=application-free-patent-residential-land"><i class="fa fa-angle-double-right"></i>Application of Free Patent Residential Land</a></li>
                          
                          <li><a href="search_request.php?tb1_colunm1=eservices&q=tree-cutting-permit"><i class="fa fa-angle-double-right"></i>Tree Cutting Permit</a></li>
                          
                          <li><a href="search_request.php?tb1_colunm1=eservices&q=appeal"><i class="fa fa-angle-double-right"></i>Appeal</a></li>
                          
                          <li><a href="search_request.php?tb1_colunm1=eservices&q=document-autentication"><i class="fa fa-angle-double-right"></i>Document Autentication</a></li>
                          
                          <li><a href="search_request.php?tb1_colunm1=eservices&q=bidding"><i class="fa fa-angle-double-right"></i>Bidding</a></li>
                            
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-th"></i> <span>Widgets</span> 
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                                <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
                                <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                                <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                                <li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                                <li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                                <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                                <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="pages/calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow"></small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            