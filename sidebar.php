<aside id="sidebar" role="complementary">
    <h1 id="recentlyplayed">Recently played</h1>
    <div class="widget-box">
        <div data-station="ksdt" data-num="16" data-time="1" id="spinitron-nowplaying">
        </div>
    </div>
    <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
        <div id="primary" class="widget-area">
            <ul class="xoxo">
                <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            </ul>
        </div>
    <?php endif; ?>
</aside>