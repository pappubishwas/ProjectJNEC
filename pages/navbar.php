<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
     <ul class="nav" id="side-menu">
        <li>
             <a href="admindashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <?php 
        if($_SESSION['Role_Id'] == 1){?>
    <li>
     <a href="#"><i class="fa fa-folder"></i> User Managemant<span class="fa arrow"></span></a>
     <ul class="nav nav-second-level">
        <li>
            <a href="addusers.php"><i class="fa fa-circle-o"></i> Add Users</a>
        </li>
        <li>
            <a href="listusers.php"><i class="fa fa-circle-o"></i> View Users Details</a>
        </li>
     </ul>
    </li>
    <li>
     <a href="#"><i class="fa fa-folder"></i> Student Managemant<span class="fa arrow"></span></a>
     <ul class="nav nav-second-level">
        <li>
            <a href="addstudent.php"><i class="fa fa-circle-o"></i> Add Student</a>
        </li>
        <li>
            <a href="listStudent.php"><i class="fa fa-circle-o"></i> View Student Details</a>
        </li>
     </ul>
    </li>
    <?php }?>
        
    <?php 
    //only visible to admin and editor
    if($_SESSION['Role_Id'] == 4){?>
    <li>
     <a href="#"><i class="fa fa-folder"></i> Accounts Management<span class="fa arrow"></span></a>
     <ul class="nav nav-second-level">
        <li>
            <a href="listaccount.php"><i class="fa fa-circle-o"></i> Update Student Details</a>
        </li>
     </ul>
    </li>
        <?php } ?>
        <?php 
        //only visible to admin
        if($_SESSION['Role_Id'] == 3){?>
    <li>
     <a href="#"><i class="fa fa-folder"></i> Student Affair Management<span class="fa arrow"></span></a>
     <ul class="nav nav-second-level">
        <li>
            <a href="liststudentaffair.php"><i class="fa fa-circle-o"></i> Update Student Details</a>
        </li>
     </ul>
    </li>
    <?php } ?>
    <?php 
        //only visible to admin
    if($_SESSION['Role_Id'] == 2){?>
    <li>
     <a href="#"><i class="fa fa-folder"></i> Exam Cell Management<span class="fa arrow"></span></a>
     <ul class="nav nav-second-level">
        <li>
            <a href="listExam.php"><i class="fa fa-circle-o"></i> Update Student Details</a>
        </li>
     </ul>
    </li>
    <?php } ?>
</nav>