<div class="list-group">

    <a class="list-group-item list-group-item-action disabled bg-primary text-white">Development Documentation</a>

    <?php 

        $page = basename($_SERVER['PHP_SELF']);

        if(isset($page) && $page == '0.0.6.5.php') {
            echo '<a href="/dev/release/0.0.6.5.php" class="list-group-item list-group-item-action active">0.0.6.5</a>';
        } else {
            echo '<a href="/dev/release/0.0.6.5.php" class="list-group-item list-group-item-action">0.0.6.5</a>';
        }
        if(isset($page) && $page == '0.0.6.7.php') {
            echo '<a href="/dev/release/0.0.6.7.php" class="list-group-item list-group-item-action active">0.0.6.7</a>';
        } else {
            echo '<a href="/dev/release/0.0.6.7.php" class="list-group-item list-group-item-action">0.0.6.7</a>';
        }
        if(isset($page) && $page == '0.0.7.0.php') {
            echo '<a href="/dev/release/0.0.7.0.php" class="list-group-item list-group-item-action active">0.0.7.0</a>';
        } else {
            echo '<a href="/dev/release/0.0.7.0.php" class="list-group-item list-group-item-action">0.0.7.0</a>';
        }
    ?>
    
</div>