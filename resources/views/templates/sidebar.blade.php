    <div class="sidebar">
      <div class="sidebar-header">
        <div>
          <a href="{{ route('frontend') }}" class="sidebar-logo"><span>GCS Palembang</span></a>
          <small class="sidebar-logo-headline">Gym Center System for Palembang and Surrounding</small>
        </div>
      </div><!-- sidebar-header -->
      <?php 
          $user_id = Auth()->user()->id;
          $status = App\Models\UserAccountModel::find($user_id);
          if ($status->role_id == 0) { ?>
            <div id="dpSidebarBody" class="sidebar-body">
              <ul class="nav nav-sidebar">
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link {{ (Request::is('dashboard')) ? 'active' : '' }}"><i data-feather="box"></i> Dashboard</a></li>
                <li class="nav-label"><label class="content-label">Transaction</label></li>
                <li class="nav-item"><a href="{{ route('admin.alternative.index') }}" class="nav-link {{ (Request::is('admin/alternative/*')) ? 'active' : '' }}"><i data-feather="activity"></i> Alternative</a></li>
                <li class="nav-item"><a href="{{ route('admin.ranking.index') }}" class="nav-link {{ (Request::is('admin/ranking/*')) ? 'active' : '' }}"><i data-feather="airplay"></i> Ranking List</a></li>          
                <li class="nav-label"><label class="content-label">Master Data</label></li>
                <li class="nav-item"><a href="{{ route('admin.criteria.index') }}" class="nav-link {{ (Request::is('admin/criteria/*')) || (Request::is('admin/criterion_value/*')) ? 'active' : '' }}"><i data-feather="layers"></i> Criteria</a></li>
                <li class="nav-label"><label class="content-label">System Setting</label></li>
                <li class="nav-item"><a href="{{ route('admin.user.index') }}" class="nav-link {{ (Request::is('admin/user/*'))  ? 'active' : '' }}"><i data-feather="user"></i> Users Account List</a></li>
                <li class="nav-item"><a href="{{ route('admin.web_home.index') }}" class="nav-link  {{ (Request::is('admin/web_home/*'))  ? 'active' : '' }}"><i data-feather="menu"></i> Home</a></li>
                <li class="nav-item"><a href="{{ route('admin.web_about_us.index') }}" class="nav-link  {{ (Request::is('admin/web_about_us/*'))  ? 'active' : '' }}"><i data-feather="menu"></i> About Us</a></li>
                <li class="nav-item"><a href="{{ route('admin.news.index') }}" class="nav-link  {{ (Request::is('admin/news/*'))  ? 'active' : '' }}"><i data-feather="menu"></i> News</a></li>          
              </ul>              

            </div><!-- sidebar-body -->
          <?php } else if($status->role_id == 1){ ?>
            <div id="dpSidebarBody" class="sidebar-body">
              <ul class="nav nav-sidebar">
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link {{ (Request::is('dashboard')) ? 'active' : '' }}"><i data-feather="box"></i> Dashboard</a></li>
                <li class="nav-label"><label class="content-label">Transaction</label></li>
                <li class="nav-item"><a href="{{ route('admin.alternative.index') }}" class="nav-link {{ (Request::is('admin/alternative/*')) ? 'active' : '' }}"><i data-feather="activity"></i> Alternative</a></li>
                <li class="nav-item"><a href="{{ route('admin.ranking.index') }}" class="nav-link {{ (Request::is('admin/ranking/*')) ? 'active' : '' }}"><i data-feather="airplay"></i> Ranking List</a></li>          
                <li class="nav-label"><label class="content-label">Master Data</label></li>
                <li class="nav-item"><a href="{{ route('admin.criteria.index') }}" class="nav-link {{ (Request::is('admin/criteria/*')) || (Request::is('admin/criterion_value/*')) ? 'active' : '' }}"><i data-feather="layers"></i> Criteria</a></li>
              </ul>              

            </div><!-- sidebar-body -->
          <?php }
      ?>
    </div><!-- sidebar -->