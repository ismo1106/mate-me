<link rel="stylesheet" type="text/css" href='<?php echo base_url();?>_assets/front/mprogress.min.css' />

<div class="demo-blog__posts mdl-grid">
    <div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop">
        <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
            <img src="<?php echo base_url(); ?>_assets/material/img/mme-icon.png" alt="NULL">
            +1,337
        </div>
        <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
            <div>
                <strong>Check this</strong>
            </div>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="menubtn">
                <li class="mdl-menu__item">About</li>
                <li class="mdl-menu__item">Portofolio</li>
                <li class="mdl-menu__item">Favorite</li>
                <li class="mdl-menu__item">Search</li>
            </ul>
            <button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">more_vert</i>
                <span class="visuallyhidden">show menu</span>
            </button>
        </div>
    </div>
    <div class="mdl-card about-me mdl-cell mdl-cell--8-col">
        <div class="mdl-card__media mdl-color-text--grey-50">
            <h3><a href="entry.html">About Me</a></h3>
        </div>
        <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
            <div class="minilogo"></div>
            <div>
                <strong>I'm programmer (Middle Experience)</strong>
                <span>My special skill an Web Programming.</span>
            </div>
        </div>
    </div>
    
    <div id="results"> </div>

    <nav class="animation_image demo-nav mdl-cell mdl-cell--12-col" style="display: none;">
        <div id="load-bar" class="section-spacer" style="margin: 10px 0; width:100%; max-width: 100%; height:5px;"></div>
    </nav>
    
    <nav class="load-more demo-nav mdl-cell mdl-cell--12-col">
        <div class="section-spacer"></div>
        <a href="javascript:;" class="demo-nav__button" title="show more">
            More
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">arrow_drop_down</i>
            </button>
        </a>
    </nav>

</div>

<script type="text/javascript" src="<?php echo base_url(); ?>_assets/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var track_load = 0;
        var total_groups = <?php echo $total_group; ?>;
        $("#results").load("<?php echo site_url('welcome/load_data'); ?>", {"group_no": track_load}, function () {
            track_load ++;
        });
        
        $(".load-more").click(function () {
            if (track_load <= total_groups) {
                $(this).hide();
                $(".animation_image").show();
            
                $.post("<?php echo site_url('welcome/load_data'); ?>", {"group_no": track_load}, function (data) {
                    $(".animation_image").hide();
                    $(".load-more").show();
                    $("#results").append(data);
                    track_load++;
                    
                }).fail(function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError);
                    $(".load-more").show();
                    $(".animation_image").hide();
                });
            }else{
                $(".load-more a").html("No More");
            }
        });
    });
</script>

<script src='<?php echo base_url();?>_assets/front/mprogress.min.js'></script>
<script>
    $(document).ready(function () {
        var  loadbar = new Mprogress({
                template: 3,
                parent: '#load-bar'
        });
        loadbar.start();
    });
</script>