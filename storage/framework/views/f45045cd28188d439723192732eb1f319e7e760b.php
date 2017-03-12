<header class="header navbar">

        <div class="brand visible-xs">
          <!-- toggle offscreen menu -->
          <div class="toggle-offscreen">
            <a href="#" class="hamburger-icon visible-xs" data-toggle="offscreen" data-move="ltr">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
          <!-- /toggle offscreen menu -->

          <!-- logo -->
          <div class="brand-logo">
            <img src="<?php echo e(asset('images/logo-dark.png')); ?>" height="15" alt="">
          </div>
          <!-- /logo -->

          <!-- toggle chat sidebar small screen-->
          <div class="toggle-chat">
            <a href="javascript:;" class="hamburger-icon v2 visible-xs" data-toggle="layout-chat-open">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
          <!-- /toggle chat sidebar small screen-->
        </div>

        <ul class="nav navbar-nav hidden-xs">
          <li>
            <p class="navbar-text">
              Tech Blog
            </p>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right hidden-xs">
          <li class="hidden">
            <a href="javascript:;" data-toggle="quick-launch-panel">
              Navigation
              <i class="fa fa-circle-thin"></i>
            </a>
          </li>
          <li>
            <a href="/">
              Home
              <i class="fa fa-home"></i>
            </a>
          </li>
          <li>
            <a href="/post/create">
              New Post
              <i class="fa fa-edit"></i>
            </a>
          </li>
          
          <li>
            <a href="javascript:;" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <div class="status bg-danger border-danger animated bounce"></div>
            </a>
            <ul class="dropdown-menu notifications">
              <li class="notifications-header">
                <p class="text-muted small">You have 3 new messages</p>
              </li>
              <li>
                <ul class="notifications-list">
                  <li>
                    <a href="javascript:;">
                      <span class="pull-left mt2 mr15">
                          <img src="<?php echo e(asset('images/avatar.jpg')); ?>" class="avatar avatar-xs img-circle" alt="">
                      </span>
                      <div class="overflow-hidden">
                        <span>Sean launched a new application</span>
                        <span class="time">2 seconds ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <div class="pull-left mt2 mr15">
                        <div class="circle-icon bg-danger">
                          <i class="fa fa-chain-broken"></i>
                        </div>
                      </div>
                      <div class="overflow-hidden">
                        <span>Removed chrome from app list</span>
                        <span class="time">4 Hours ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="pull-left mt2 mr15">
                        <img src="<?php echo e(asset('images/face3.jpg')); ?>" class="avatar avatar-xs img-circle" alt="">
                      </span>
                      <div class="overflow-hidden">
                        <span class="text-muted">Jack Hunt has registered</span>
                        <span class="time">9 hours ago</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="notifications-footer">
                <a href="javascript:;">See all messages</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;" data-toggle="dropdown">
              <img src="<?php echo e(asset('images/avatar.jpg')); ?>" class="header-avatar img-circle ml10" alt="user" title="user">
              <span class="pull-left">Samuel Perkins</span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="javascript:;">Profile</a>
              </li>
              <li>
                <a href="javascript:;">Logout</a>
              </li>
            </ul>

          </li>
        </ul>
      </header>