<?php

require( dirname( __FILE__ ) . '/config.php') ;

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Notebook Main Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo $hostname;?>/css/apps/app-main.css">
    <link rel="stylesheet" href="<?php echo $hostname;?>/css/apps/app-nav.css">
    <link rel="stylesheet" href="<?php echo $hostname;?>/css/apps/app-footer.css">

    <link rel="stylesheet" href="<?php echo $hostname;?>/assets/css/font.css">
    
   <link rel="stylesheet" href="<?php echo  $hostname;?>/assets/css/normal.css">

<style>
.notebook{
  width:1200px;
  height:1500px;
  border:2px solid rgb(230,230,230);
  margin:0 auto;
}
</style>
</head>

<body>

<?php

require( dirname( __FILE__ ) . '/global/video-nav.php') ;

?>
<div class="notebook">

</div>

<?php

require( dirname( __FILE__ ) . '/global/video-footer.php') ;

?>


</body>

</html
