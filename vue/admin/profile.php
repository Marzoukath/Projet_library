<?php session_start(); ?>

<div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
    <ul class="nav-menus">
    <li><span class="header-search">
        <svg>
            <use href="../assets/svg/icon-sprite.svg#search"></use>
        </svg></span></li>
    <li class="profile-nav onhover-dropdown px-0 py-0">
        <div class="d-flex profile-media align-items-center"><img class="img-30" src="../assets/images/dashboard/profile.png" alt="">
        <div class="flex-grow-1"><span><?php echo $_SESSION['fullname']; ?></span>
            <p class="mb-0 font-outfit">UI Designer<i class="fa fa-angle-down"></i></p>
        </div>
        </div>
        <ul class="profile-dropdown onhover-show-div">
        <li><a href="#"><i data-feather="user"></i><span>Profil</span></a></li>
        <li><a href="#"><i data-feather="log-out"> </i><span style="color:red;">Log out</span></a></li>
        </ul>
    </li>
    </ul>
</div>

<script class="result-template" type="text/x-handlebars-template">
    <div class="ProfileCard u-cf">                        
        <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
        <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
        </div>
    </div>
</script>