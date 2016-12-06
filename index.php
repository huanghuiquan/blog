<?php
    // include config
    include('config.php');

    // $articles = mysql_query("select * from article" , $con);

    // init variables
    $title = 'blog';
    $css = "/public/css/index.css";
?>

<?php // header ?>
<?php include('layout/header.php'); ?>

<!-- body -->
<h2>欢迎进入首页</h2>


<script>
    require(['index']);
</script>
<!-- footer -->
<?php include('layout/footer.php') ?>
