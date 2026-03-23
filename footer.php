<footer>
    <div class="inner">
        <h2>Nav</h2>
        <p>-ナビ-</p>
        <hr>
        <nav>
            <ul>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav">TOP</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>#Skill" class="nav">Skill</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/works/')); ?>" class="nav">Works</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/profile/')); ?>" class="nav">profile</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="cpr">
            <small>©2025 櫻木涼太</small>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>