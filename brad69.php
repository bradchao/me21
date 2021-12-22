<?php
    include 'bradutils.php';
    session_start();

    if (!isset($_SESSION['member'])) header('Location: brad62.php');
    $member = $_SESSION['member'];
?>
Main Page
<hr />
Hello, <?php echo $member->getRealname(); ?>
<hr />
<a href='logout.php'>Logout</a>