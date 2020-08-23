<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="home"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    
     <li class="submenu"> <a href="#"><i class="icon icon-user"></i> <span>User Management</span> <span class="label label-important"></span></a>

      <ul>

        <li><a href="{{ route("users.index") }}">Users</a></li>
        <li><a href="{{ route("roles.index") }}">Roles</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Acadamy</span> <span class="label label-important">6</span></a>
      <ul>
        <li><a href="{{ route('tests.index') }}">New Quiz</a></li>
        <li><a href="{{ route('results.index') }}">My Results</a></li>
        <li><a href="{{ route('topics.index') }}">Topics</a></li>
         <li><a href="{{ route('questions.index') }}">Questions</a></li>
         <li><a href="{{ route('questions_options.index') }}">Questions Options</a></li>
         


      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Level</span> <span class="label label-important">3</span></a>
      

  


    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>
<!--sidebar-menu-->