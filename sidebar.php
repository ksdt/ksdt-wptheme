<aside id="sidebar" role="complementary">
    <div class="phone-sidebar">
        <div id="reqline">DJ Phone</div>
        <div id="phoneno">(858) 534-KSDT</div>
    </div>
    <h1 id="recentlyplayed">Recently played</h1>
    <div class="widget-box">
        <div data-station="ksdt" data-num="16" data-time="1" id="spinitron-nowplaying">
        </div>
    </div>
                     <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/RADIOKSDT" data-widget-id="659530020671631360">Tweets by @RADIOKSDT</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
           
    <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
        <div id="primary" class="widget-area">
            <ul class="xoxo">
                <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            </ul>
        </div>
    <?php endif; ?>
</aside>
