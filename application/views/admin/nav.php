 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo  $base; ?>index.html">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li class="selected"><a href="/FAdmin/index"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="/mimg"><i class="fa fa-tasks"></i> MainPage Image</a></li>
                    <li><a href="/FAdmin/blog"><i class="fa fa-globe"></i> Blog</a></li>
                    <li><a href="/ACatController/catlist"><i class="fa fa-list-ol"></i>Category</a></li>
                    <li><a href="<?php echo  $base; ?>register.html"><i class="fa fa-font"></i> Register</a></li>
                    <li><a href="<?php echo  $base; ?>timeline.html"><i class="fa fa-font"></i> Timeline</a></li>
                    <li><a href="<?php echo  $base; ?>forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
                    <li><a href="<?php echo  $base; ?>typography.html"><i class="fa fa-font"></i> Typography</a></li>
                    <li><a href="<?php echo  $base; ?>bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
                    <li><a href="<?php echo  $base; ?>bootstrap-grid.html"><i class="fa fa-table"></i> Bootstrap Grid</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="<?php echo  $base; ?>#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">2 New Messages</li>
                            <li class="message-preview">
                                <a href="<?php echo  $base; ?>#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="<?php echo  $base; ?>#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo  $base; ?>#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="<?php echo  $base; ?>#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo  $base; ?>#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="<?php echo  $base; ?>#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo  $base; ?>#"><i class="fa fa-power-off"></i> Log Out</a></li>

                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li>
                        <form class="navbar-search">
                            <input type="text" placeholder="Search" class="form-control">
                        </form>
                    </li>
                </ul>
            </div>
        </nav>