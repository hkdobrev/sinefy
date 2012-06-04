<div id="ajaxFriends">
    <div style="float: left; width: 300px;">
        <?php
        $i = 0;
        foreach ($friends as $friend):
            if ($i == 5)
            {
                echo '<br />';
                $i = 0;
            }
            $i++;
            ?>
            <?php echo HTML::image('https://graph.facebook.com/' . $friend['id'] . '/picture?type=square')
            ?>
        <?php endforeach ?>
    </div>
    <?php /*
    <div class="movieLinks" style="float: left; width: 200px;">
        <ul style="list-style-type: none">
            <li style="margin-bottom: 20px;"><a class="btn btn-large" href='http://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Dmovies-tv&field-keywords=<?php echo $_GET['movie_title']; ?>'>Buy DVD/Blu-Ray</a></li>
            <li style="margin-bottom: 20px;"><a class="btn btn-large" href='https://signup.netflix.com/global'>Watch online</a></li>
            <li style="margin-bottom: 20px;"><a class="btn btn-large" href='#' onclick="javascript:showMap();">Buy tickets</a></li>
        </ul>
    </div>
    */ ?>
</div>
