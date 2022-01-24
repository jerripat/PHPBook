<?php # Script-index.php
set_include_path('D:\PHP_Book_Course\PHPBook\includes');
include_once("misc.php");
$pagetitle = "My Home page";
include("includes/header.php");
?>
<style>
    <?php include("includes/styles.css") ?>
</style>
<h1><?php $pagetitle ?></h1>
<form>
    
<p>This is the main content. Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
<p class="square">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
 exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h2 class="container:after">H2 level heading</h2>
<p >This is sub content,xcepteur sint occaecat cupidatat non proident, sunt in cThis is the main content. Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
<p> exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<div id="moveTitle">
<?php
include('includes/footer.php');

?>
</div>
