<div class="col-lg-12">
    <div class="page-header">
        <h1>Results</h1>
    </div>

    <?php

    if(!empty($options['params']->results->ads)) {
        foreach($options['params']->results->ads as $ad) {

            echo '<a href="' . $ad->daft_url . '" target="_blank" style="cursor: pointer !important;">';

            echo '<div class="col-md-4">';

            echo '<div class="panel panel-primary">';

            echo '<div class="panel-heading">';
            echo '<h3 class="panel-title">' . $ad->area . '</h3>';
            echo '</div>';

            echo '<div class="panel-body">';

            echo '<div class="col-md-4 pull-left">';
            echo '<img width="100" height="100" src="' . $ad->small_thumbnail_url . '">';
            echo '</div>';

            echo '<div class="form-group">';

            if(property_exists($ad, 'price')) {
                echo '<label class="col-lg-4 control-label" for="inputEmail">Price</label>';
                echo '<span class="pull-right">€' . $ad->price . '</span>';
            }
            else {
                echo '<label class="col-lg-4 control-label" for="inputEmail">Rent</label>';
                echo '<span class="pull-right">€' . $ad->rent . '</span>';
            }

            echo '</div>';

            echo '<br />';

            echo '<div class="form-group">';
            echo '<label class="col-lg-4 control-label" for="inputEmail">Bedrooms</label>';
            echo '<span class="pull-right">' . $ad->bedrooms . '</span>';
            echo '</div>';

            echo '<br />';

            echo '<div class="form-group">';
            echo '<label class="col-lg-4 control-label" for="inputEmail">BER</label>';
            echo '<span class="pull-right">' . $ad->ber_rating . '</span>';
            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</a>';
        }
    }
    else {

        echo 'There were no results matching your search criteria.<br /><br />';
    }
    ?>
</div>