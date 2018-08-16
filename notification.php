<?php

require_once dirname(__FILE__) . '/includes/functions.php';

if (!isset($_SESSION['user_id'])) {
    redirection('index.php');
}

// Rendering the post that was clicked through notification

if (isset($_GET['postID'])) {
    $_SESSION['notiPostID'] = clearString($_GET['postID']); // Post ID
    $_SESSION['notiType'] = clearString($_GET['type']); // Type of the notification
    $notiID = clearString($_GET['notiID']); // Notification ID
    // Now notification has been seen, so set flag to 1
    $queryResult = queryFunc("UPDATE notifications SET seen=1  WHERE noti_id='$notiID'");

    require_once dirname(__FILE__) . '/includes/header.php';
?>
    <div class='content-area row'>
        <!-- <div class='notification-area' style='border:none'></div> -->
        <div class='post-area col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3'>
            <!-- Displaying that post only -->
            <?php showPosts('c', 1, 1); ?>
        </div>
        <!-- <div class='friends-area' style='border:none'></div> -->
    </div>
<?php
}

require_once dirname(__FILE__) . '/includes/footer.php';
?>



<script src="./includes/script.js" ></script>