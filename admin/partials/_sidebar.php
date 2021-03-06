<?php
$pages = explode('/',$_SERVER['PHP_SELF']);
$page = end($pages);

?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link <?= $page=='member_details.php'?'active':'' ?>" href="members.php">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">All Members</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $page=='mosque_details.php'?'active':'' ?>" href="mosques.php">
                <i class="mdi mdi-mosque menu-icon"></i>
                <span class="menu-title">Mosques</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="adduser.php">
                <i class="mdi mdi-account-multiple-plus menu-icon"></i>
                <span class="menu-title">Add member</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="committees.php">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Committee</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="asnaf.php">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Asnaf List</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="reportedasnafs.php" >
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Reported Asnaf</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $page=='updatedonor.php'?'active':'' ?>" href="donors.php">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Donors</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $page=='new-reference.php'?'active':'' ?> <?= $page=='edit-reference.php'?'active':'' ?>" href="references.php"  >
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">References</span>
            </a>
        </li>
    </ul>
    <div class="mb-3">
        <img class="img-fluid" src="../images/Sidebar_I1.png" alt="">
    </div>
    <div class="mb-3">
        <img class="img-fluid" src="../images/Sidebar_I2.png" alt="">
    </div>
    <div class="mb-3">
        <img class="img-fluid" src="../images/Sidebar_I3.png" alt="">
    </div>
</nav>