<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a @if(\Request::path() == 'behind')class="active"@endif href="/behind">
                    <i class="icon-dashboard"></i>
                    <span>首页</span>
                </a>
            </li>
            <li>
                <a @if(\Request::path() == 'behind/user')class="active"@endif href="/behind/user" >
                    <i class="icon-user"></i>
                    <span>用户管理</span>
                </a>
            </li>
            <li>
                <a @if(\Request::path() == 'behind/student')class="active"@endif href="/behind/student" >
                    <i class="icon-user"></i>
                    <span>学生管理</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
