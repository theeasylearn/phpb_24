<?php
if (isset($_SESSION['success']) == true) {
    echo "<div class='success'>Success! {$_SESSION['success']}</div>";
    unset($_SESSION['success']);
} else if (isset($_SESSION['error']) == true) {
    echo "<div class='error'>error      ! {$_SESSION['error']}</div>";
    unset($_SESSION['error']);
}
?>