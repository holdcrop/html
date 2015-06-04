<div class="col-lg-12">
    <div class="page-header">
        <h1>Results</h1>
    </div>

    <?php

        foreach($options['params']->results->ads as $ad) {

            echo '<div class="col-md-4">';

            echo '<div class="panel panel-primary">';

            echo '<div class="panel-heading">';
            echo '<h3 class="panel-title">' . $ad->area . '</h3>';
            echo '</div>';

            echo '<div class="panel-body">';

            echo '<div class="col-md-4 pull-left">';
            echo '<img src="' . $ad->small_thumbnail_url . '">';
            echo '</div>';

            echo '<div class="col-md-8">';
            echo '<p class="lead">';
            echo $ad->price;
            echo '</p>';
            echo '<p class="lead">';
            echo $ad->bedrooms;
            echo '</p>';
            echo '<p class="lead">';
            echo $ad->ber_rating;
            echo '</p>';
            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';
        }
    ?>
</div>