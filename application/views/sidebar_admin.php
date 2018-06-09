<!-- <section> -->
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="../images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <!-- <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li> -->
                            <li><a href="<?php echo base_url();?>index.php/HomeAdmin/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                </div>
            </div>
        </div>
<!-- #User Info -->
<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">MENU</li>
            <a href="<?php echo base_url(); ?>index.php/HomeAdmin">
                <i class="material-icons">home</i>
                <span>หน้าแรก</span>
            </a>
        </li>
        <li>
            <!-- <a href="javascript:void(0);" class="menu-toggle"> -->
            <a href="<?php echo base_url(); ?>index.php/AllSubject"
                    <i class="material-icons">text_fields</i>
                    <span>จัดการรายวิชา</span>
            </a>
                <!-- <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/InputData">
                            <span>เพิ่มรายวิชา</span>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/DetailData">
                            <span>เพิ่มรายละเอียดรายวิชา</span>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/ImportData">
                            <span>นำเข้ารายวิชา</span>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/SubjectData">
                            <span>ดูข้อมูลรายวิชา</span>
                        </a>
                    </li>
                </ul> -->
        </li>
        <li>
            <!-- <a href="javascript:void(0);" class="menu-toggle"> -->
            <a href="<?php echo base_url(); ?>index.php/ImportStudent">
                <i class="material-icons">layers</i>
                <span>จัดการนิสิต</span>
            </a>
                <!-- <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/ImportStudent">
                            <span>นำเข้ารายชื่อนิสิต</span>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/StudentData">
                            <span>ดูข้อมูลนิสิต</span>
                        </a>
                    </li>
                </ul> -->
        </li>
        <li>
            <!-- <a href="javascript:void(0);" class="menu-toggle"> -->
            <a href="<?php echo base_url(); ?>index.php/ImportRoom">
                <i class="material-icons">layers</i>
                <span>จัดการห้องปฎิบัติการ</span>
            </a>
                <!-- <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/ImportStudent">
                            <span>นำเข้ารายชื่อนิสิต</span>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/StudentData">
                            <span>ดูข้อมูลนิสิต</span>
                        </a>
                    </li>
                </ul> -->
        </li>
        <li>
            <!-- <a href="javascript:void(0);" class="menu-toggle"> -->
            <a href="<?php echo base_url(); ?>index.php/table">
                <i class="material-icons">widgets</i>
                <span>จัดตารางการทำงาน</span>
            </a>
        <!-- <ul class="ml-menu">
            <li>
                <a href="<?php echo base_url(); ?>index.php/page4">
                    <span>ประวัติการจัดตาราง</span>
                </a>
            </li>
        </ul> -->
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
            <!-- <a href="index.php/page5" class="menu-toggle"> -->
                <i class="material-icons">swap_calls</i>
                <span>จัดการเอกสาร</span>
            </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Document_1" class="">
                            <span>ใบบันทึกขออนุมัติ</span>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/Document_2" class="">
                            <span>ใบรับรอง</span>
                        </a>
                    </li>
                </ul>
            </li>
        <li>
            <!-- <a href="javascript:void(0);" class="menu-toggle"> -->
            <a href="<?php echo base_url(); ?>index.php/Config">
                <i class="material-icons">layers</i>
                <span>ตั้งค่า</span>
            </a>
        </li>
        <!-- <li>
            <a href="<?php echo base_url(); ?>index.php/page6">
                <i class="material-icons">assignment</i>
                <span>Facebook</span>
            </a>
        </li> -->
    </ul>
</div>
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
    <div class="copyright">
        &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
    </div>
    <div class="version">
        <b>Version: </b> 1.0.5
    </div>
</div>
<!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
<!-- </section> -->