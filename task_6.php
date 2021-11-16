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
                            <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">

            <?php    $users = [
                    [  'photo'=>'img/demo/authors/sunny.png',
                        'name' =>' Sunny A.',
                        'width'=>'5',
                        'height'=>'5',
                        'job' =>'UI/UX Expert',
                        'company'=>'Lead Author,',
                        'twitter_link'=>'https://twitter.com/@myplaneticket',
                        'twitter_name'=>'@myplaneticket',
                        'wrapbootstrap_link'=>'https://wrapbootstrap.com/user/myorange',
                        'wrapbootstrap_title'=>'Contact Sunny',
                        'status'=>'1'],
                    [
                        'photo'=>'img/demo/authors/josh.png',
                        'name' =>'Jos K.',
                        'width'=>'5',
                        'height'=>'5',
                        'job' =>'ASP.NET Developer',
                        'company'=>'Partner &amp; Contributor',
                        'twitter_link'=>'https://twitter.com/@atlantez',
                        'twitter_name'=>'@atlantez',
                        'wrapbootstrap_link'=>'https://wrapbootstrap.com/user/Walapa',
                        'wrapbootstrap_title'=>'Contact Jos',
                        'status'=>'1'],
                    [
                            'photo'=>'img/demo/authors/jovanni.png',
                        'name' =>'Jovanni Lo',
                        'width'=>'5',
                        'height'=>'5',
                        'job' =>'PHP Developer',
                        'company'=>' Partner &amp; Contributor',
                        'twitter_link'=>'https://twitter.com/@lodev09',
                        'twitter_name'=>'@lodev09',
                        'wrapbootstrap_link'=>'https://wrapbootstrap.com/user/lodev09',
                        'wrapbootstrap_title'=>'Contact Jovanni',
                        'status'=>'0'],
                    [
                            'photo'=>'img/demo/authors/roberto.png',
                        'name' =>' Roberto R',
                        'width'=>'5',
                        'height'=>'5',
                        'job' =>'Rails Developer',
                        'company'=>' Partner &amp; Contributor',
                        'twitter_link'=>'https://twitter.com/@sildur',
                        'twitter_name'=>'@sildur',
                        'wrapbootstrap_link'=>'https://wrapbootstrap.com/user/sildur',
                        'wrapbootstrap_title'=>'Contact Roberto',
                        'status'=>'0']
                    ];

            foreach ($users as $user){
    if ($user['status'] === '0'){

?>
                                <div class="banned rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?php echo $user['photo']?>" alt="<?php echo $user['name']?> " class="img-thumbnail img-responsive rounded-circle" style="width:<?php echo $user['width']?>rem; height: <?php echo $user['height']?>rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?php echo $user['name'] .'  ('.$user['job'].')'?>
                                        <small class="m-0 fw-300">
                                            <?php echo $user['company']?>
                                        </small>
                                    </h5>
                                    <a href="<?php $user['twitter_link'] ?>" class="text-info fs-sm" target="_blank"><?php echo $user['twitter_name']?></a> -
                                    <a href="<?php $user['wrapbootstrap_link'] ?>" class="text-info fs-sm" target="_blank" title="<?php echo $user['wrapbootstrap_title']?>"><i class="fal fa-envelope"></i></a>
                                </div>
                                </div>
                           <?php } else { ?>
                                   <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                    <img src="<?php echo $user['photo']?>" alt="<?php echo $user['name']?>" class="img-thumbnail img-responsive rounded-circle" style="width:<?php echo $user['width']?>rem; height: <?php echo $user['height']?>rem;">
                                    <div class="ml-2 mr-3">
                                        <h5 class="m-0">
                                            <?php echo $user['name'] .'  ('.$user['job'].')'?>
                                            <small class="m-0 fw-300">
                                                <?php echo $user['company']?>
                                            </small>
                                        </h5>
                                        <a href="<?php $user['twitter_link'] ?>" class="text-info fs-sm" target="_blank"><?php echo $user['twitter_name']?></a> -
                                        <a href="<?php $user['wrapbootstrap_link'] ?>" class="text-info fs-sm" target="_blank" title="<?php echo $user['wrapbootstrap_title']?>"><i class="fal fa-envelope"></i></a>
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
