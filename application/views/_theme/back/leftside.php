<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="<?php echo base_url();?>_assets/material-back/images/avatar.png" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                        </li>
                        <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                        </li>
                        <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
        </li>
        <li class="bold"><a href="<?php echo base_url('back/admin/dashboard');?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <?php foreach ($_getMenu1 as $ro1): ?>
                    <?php if($ro1->link_menu == '#'): ?>
                    <li class="bold">
                        <a class="collapsible-header waves-effect waves-cyan">
                            <i class="<?php echo $ro1->icon_menu;?>"></i>
                            <?php echo $ro1->label_menu;?>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <?php foreach ($_getMenu2 as $ro2): ?>
                                    <?php if($ro2->header_menu == $ro1->id_menu): ?>
                                        <li>
                                            <a href="<?php echo site_url('back/'.$ro2->link_menu);?>">
                                                <?php echo $ro2->label_menu;?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                    <?php else: ?>
                    <li class="bold">
                        <a href="<?php echo site_url('back/'.$ro1->link_menu);?>" class="waves-effect waves-cyan">
                            <i class="<?php echo $ro1->icon_menu;?>"></i> 
                            <?php echo $ro1->label_menu;?>
                        </a>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="li-hover"><div class="divider"></div></li>
        <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
        <li><a href="#"><i class="mdi-image-grid-on"></i> Grid</a>
        </li>
        <li><a href="#"><i class="mdi-editor-format-color-fill"></i> Color <span class="new badge">4</span></a>
        </li>
        <li><a href="#"><i class="mdi-communication-live-help"></i> Helpers</a>
        </li>
        <li><a href="#"><i class="mdi-action-swap-vert-circle"></i> Changelogs</a>
        </li>                    
        <li class="li-hover"><div class="divider"></div></li>
        <li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
        <li class="li-hover">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="sample-chart-wrapper">                            
                        <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2">
        <i class="mdi-navigation-menu" ></i>
    </a>
</aside>
<!-- END LEFT SIDEBAR NAV-->