
<div class="sidebar">
    <div class="logo-details">
    <i class='bx bxl-redux icon'></i>
        <div class="logo_name">Iptv Manager</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <i class='bx bx-search'></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
        </li>
        <li>
            <a href="index">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="users">
                <i class='bx bx-user'></i>
                <span class="links_name">User</span>
            </a>
            <span class="tooltip">User</span>
        </li>
        <li>
            <a href="Message">
                <i class='bx bx-chat'></i>
                <span class="links_name">Messages</span>
            </a>
            <span class="tooltip">Messages</span>
        </li>
        <li>
            <a href="codes">
                <i class='bx bx-pie-chart-alt-2'></i>
                <span class="links_name">Codes</span>
            </a>
            <span class="tooltip">Codes</span>
        </li>
       
        <li class="profile">
            <div class="profile-details">
                <img src="http://codata-admin.com/Views/Images/log-alt.png" alt="profileImg">
                <div class="name_job">
                    <div class="name"><?php echo $_SESSION['name'] ?></div>
                    <div class="job">Administrateur</div>
                </div>
            </div>
            <a onclick="log();">
               <i class='bx bx-log-out' id="log_out"></i>
            </a>
        </li>
    </ul>
</div>