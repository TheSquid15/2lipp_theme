<?php 
wp_reset_query();

$args = array(
    'fields' => 'ids',
    'posts_per_page' => -1,
    'post_type' => 'activities'
);

$all_activities = get_posts($args);

?>
<div id="activities" class="container box-green">
    <div class="formatting">
        <div class="content_container">
            <div class="row activities_row">
                <div class="col-12 title-wrapper">
                    <h2>Activities</h2>
                </div>
                <div class="col-12 kiosk">
                    <div class="kiosk-container">
                        <ul class="kiosk-activities">
                            <li class="activity"><p>Hello!</p><img src="" alt=""></li>
                            <li class="activity"><p>Hello!</p><img src="" alt=""></li>
                            <li class="activity"><p>Hello!</p><img src="" alt=""></li>
                            <li class="activity"><p>Hello!</p><img src="" alt=""></li>
                            <li class="activity"><p>Hello!</p><img src="" alt=""></li>
                            <li class="activity"><p>Hello!</p><img src="" alt=""></li>
                        </ul>
                    </div>
                    <a id="prev" class="prev hidden" onclick="moveBoxes(-1)">&#10094;</a>
                    <a id="next" class="next" onclick="moveBoxes(1)">&#10095;</a>
                </div>
            </div>
        </div>
    </div>
</div>