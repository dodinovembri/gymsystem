    <div class="sidebar">
      <div class="sidebar-header">
        <div>
          <a href="index.html" class="sidebar-logo"><span>GCS Palembang</span></a>
          <small class="sidebar-logo-headline">Gym Center System for Palembang and Surrounding</small>
        </div>
      </div><!-- sidebar-header -->
      <div id="dpSidebarBody" class="sidebar-body">
        <ul class="nav nav-sidebar">
          <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link {{ (Request::is('dashboard')) ? 'active' : '' }}"><i data-feather="box"></i> Dashboard</a></li>
          <li class="nav-label"><label class="content-label">Transaction</label></li>
          <li class="nav-item"><a href="{{ route('admin.alternative.index') }}" class="nav-link {{ (Request::is('admin/alternative/*')) ? 'active' : '' }}"><i data-feather="help-circle"></i> Alternative</a></li>
          <li class="nav-item"><a href="{{ route('admin.ranking.index') }}" class="nav-link {{ (Request::is('admin/ranking/*')) ? 'active' : '' }}"><i data-feather="help-circle"></i> Ranking List</a></li>      
          <li class="nav-item"><a href="{{ route('admin.ranking.index') }}" class="nav-link {{ (Request::is('admin/ranking/*')) ? 'active' : '' }}"><i data-feather="help-circle"></i> News</a></li>      
          <li class="nav-label"><label class="content-label">Master Data</label></li>
          <li class="nav-item"><a href="{{ route('admin.criteria.index') }}" class="nav-link {{ (Request::is('admin/criteria/*')) || (Request::is('admin/criterion_value/*')) ? 'active' : '' }}"><i data-feather="help-circle"></i> Criteria</a></li>
          <li class="nav-label"><label class="content-label">System Setting</label></li>
          <li class="nav-item"><a href="{{ route('admin.criteria.index') }}" class="nav-link"><i data-feather="help-circle"></i> Users Account List</a></li>
          <li class="nav-item"><a href="{{ route('admin.criteria.index') }}" class="nav-link"><i data-feather="help-circle"></i> Home</a></li>
          <li class="nav-item"><a href="{{ route('admin.criteria.index') }}" class="nav-link"><i data-feather="help-circle"></i> About Us</a></li>
        </ul>              

      </div><!-- sidebar-body -->
    </div><!-- sidebar -->