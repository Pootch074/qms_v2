<?php
$segment1 = $this->uri->segment(1); // Get the first URI segment
?>
<!-------------------- START OF SIDEBAR -------------------->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo" style="display: flex; align-items: center; justify-content: center;">
        <a href="index.html" class="app-brand-link">
            <img src="./assets/resources/dswd-color.png" style="width: 80%; height: 80%;">
        </a>
    </div>


    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item <?php echo ($segment1 == 'admin') ? 'active' : ''; ?>">
            <a href="<?php echo base_url('admin'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>


        <!-- START ACCOUNT SETTINGS-->
        <li class="menu-item <?php echo ($segment1 == 'accounts' || $segment1 == 'accountReq') ? 'active open' : ''; ?>">

            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php echo ($segment1 == 'accounts') ? 'active open' : ''; ?>">
                    <a href="<?php echo base_url('accounts'); ?>" class="menu-link">
                        <div data-i18n="Account">Active</div>
                    </a>
                </li>
                <li class="menu-item <?php echo ($segment1 == 'accountReq') ? 'active open' : ''; ?>">
                    <a href="<?php echo base_url('accountReq'); ?>" class="menu-link">
                        <div data-i18n="Notifications">Pending</div>
                    </a>
                </li>


            </ul>
        </li>




        <li class="menu-item <?php echo ($segment1 == 'display') ? 'active' : ''; ?>">
            <a href="<?php echo base_url('display'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-tv"></i>
                <div data-i18n="Basic">Display</div>
            </a>
        </li>



    </ul>
</aside>
<!-------------------- END OF SIDEBAR -------------------->