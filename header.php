<?php
    session_start();
    $current_page = preg_replace("[/RS_SAMIT/]", "", "$_SERVER[REQUEST_URI]");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SAMIT.edu</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<header>

</header>
<nav>
    <ul class="nav-bar">
        <li class="<?php if ($current_page == "index.php")
        {
            echo "active";
        } ?>"><a href="index.php">Home</a></li>
        <li class="dropdown <?php if ($current_page == "cc_undergraduate.php" || $current_page == "cc_graduate.php")
        {
            echo "active";
        } ?>">
            <a href="javascript:void(0)" class="drop-button">Course Catalog</a>
            <div class="dropdown-content">
                <a class="dropdown-anchor" href="cc_undergraduate.php">Undergraduate</a>
                <a class="dropdown-anchor" href="cc_graduate.php">Graduate</a>
            </div>
        </li>
        <?php
            if (isset($_SESSION['userId']))
            {
                echo '<form action="includes/logout.inc.php" method="post">
                    <button class="logout-button" type="submit" name="logout-submit">Logout</button>
                </form>';
            }
        ?>
    </ul>
</nav>


