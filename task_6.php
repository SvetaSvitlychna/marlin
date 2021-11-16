<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">



<?php

$users =['user1' =>['image' =>'img/demo/authors/sunny.png',
                    'name' => 'Sunny A.',
                    'department' =>'Lead Author ',
                    'job' =>'UI/UX Expert',
                    'twitter_link' =>'https://twitter.com/@myplaneticket',
                    'twitter' =>'@myplaneticket',
                    'wrapbootstrap' =>'https://wrapbootstrap.com/user/myorange',
                    'wrapbootstrap_title' =>'Contact Sunny',
                    'active_status' =>true],
         'user2'  =>['image' =>'img/demo/authors/josh.png',
                    'name' => ' Jos K.',
                    'department' =>'Partner &amp; Contributor',
                    'job' =>'ASP.NET Developer ',
                    'twitter_link' =>'https://twitter.com/@atlantez',
                    'twitter' =>'@atlantez',
                    'wrapbootstrap' =>'https://wrapbootstrap.com/user/Walapa',
                    'wrapbootstrap_title' =>'Contact Jos',
                    'active_status' =>true],
         'user3'  =>['image' =>'img/demo/authors/jovanni.png',
                    'name' => 'Jovanni L.',
                    'department' =>'Partner &amp; Contributor',
                    'job' =>'PHP Developer',
                    'twitter_link' =>'https://twitter.com/@lodev09',
                    'twitter' =>'@lodev09',
                    'wrapbootstrap' =>'https://wrapbootstrap.com/user/lodev09',
                    'wrapbootstrap_title' =>'Contact Jovanni',
                    'active_status' =>false],

         'user4'  =>['image' =>'img/demo/authors/roberto.png',
                    'name' => 'Roberto R.',
                    'department' =>' Partner &amp; Contributor',
                    'job' =>'Rails Developer',
                    'twitter_link' =>'https://twitter.com/@sildur',
                    'twitter' =>'@sildur',
                    'wrapbootstrap' =>'https://wrapbootstrap.com/user/sildur',
                    'wrapbootstrap_title' =>'Contact Roberto',
                    'active_status' =>false],

];


foreach ($users as $user){
    if ($user['active_status'] === false){

?>
                            <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
        <div class="banned rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?php echo $user['image']?>" alt="<?php echo $user['name']?> " class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?php echo $user['name'] .'  ('.$user['job'].')'?>
                                        <small class="m-0 fw-300">
                                            <?php echo $user['department']?>
                                        </small>
                                    </h5>
                                    <a href="<?php $user['twitter_link'] ?>" class="text-info fs-sm" target="_blank"><?php echo $user['twitter']?></a> -
                                    <a href="<?php $user['wrapbootstrap'] ?>" class="text-info fs-sm" target="_blank" title="<?php echo $user['wrapbootstrap_title']?>"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>

                           <?php } else { ?>
                               <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
        <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
            <img src="<?php echo $user['image']?>" alt="<?php echo $user['name']?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
            <div class="ml-2 mr-3">
                <h5 class="m-0">
                    <?php echo $user['name'] .'  ('.$user['job'].')'?>
                    <small class="m-0 fw-300">
                        <?php echo $user['department']?>
                    </small>
                </h5>
                <a href="<?php $user['twitter_link'] ?>" class="text-info fs-sm" target="_blank"><?php echo $user['twitter']?></a> -
                <a href="<?php $user['wrapbootstrap'] ?>" class="text-info fs-sm" target="_blank" title="<?php echo $user['wrapbootstrap_title']?>"><i class="fal fa-envelope"></i></a>
            </div>
        </div>

                <?php } }?>


</div>
                </div>
                    </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
