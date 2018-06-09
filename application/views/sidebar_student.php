<!-- <section> -->
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="http://reg.buu.ac.th/registrar/getstudentimage.asp?id=<?php echo $this->session->userdata('user_id');?>" width="52" height="52" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('fullname');?></div>
                <div class="email"><?php echo $this->session->userdata('email');?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <!-- <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li> -->
                            <li><a href="<?php echo base_url();?>index.php/HomeStudent/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                </div>
            </div>
        </div>
<!-- #User Info -->
<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">MENU</li>
            <a href="<?php echo base_url(); ?>index.php/HomeStudent">
                <i class="material-icons">home</i>
                <span>หน้าแรก</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>index.php/StudentRegist">
                <i class="material-icons">content_paste</i>
                <span>แบบฟอร์มการสมัคร</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
            <!-- <a href="<?php echo base_url(); ?>index.php/student" -->
                    <i class="material-icons">group</i>
                    <span>ข้อมูลนิสิต</span>
            </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Student">
                            <span>แก้ไขข้อมูลส่วนตัว</span>
                        </a>
                    </li>
                </ul>
        </li>
        <!-- <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">layers</i>
                <span>จัดการนิสิต</span>
            </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/ImportStudent">
                            <span>นำเข้ารายชื่อนิสิต</span>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/StudentData">
                            <span>ดูข้อมูลนิสิต</span>
                        </a>
                    </li>
                </ul>
        </li> -->
        <!-- <li>
            <a href="<?php echo base_url(); ?>index.php/table">
                <i class="material-icons">widgets</i>
                <span>จัดตารางการทำงาน</span>
            </a>
        </li> -->
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