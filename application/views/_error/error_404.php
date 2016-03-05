<div class="demo-blog--blogpost" style="padding-bottom: 300px;">
    <div class="demo-back">
        <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="backHistory" href="javascript:;" title="go back" role="button">
            <i class="material-icons" role="presentation">arrow_back</i>
        </a>
    </div>
    <div class="demo-blog__posts mdl-grid">
        <div class="mdl-card error-404 mdl-shadow--4dp mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
                <h3>Page not found</h3>
            </div>
        </div>
    </div>
</div>

<!-- jQuery Library -->
<script type="text/javascript" src="<?php echo base_url();?>_assets/material-back/js/jquery-1.11.2.min.js"></script>  
<script>
    $('#backHistory').click(function (){
        window.history.back();
    });
</script>