<html lang="en" class="no-js">
<!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title>spiral   |   architects</title>
  <meta name="description" content="spiral architects myanmar">
  <meta name="author" content="Aung Thein Naing">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <meta name="google-site-verification" content="dlZMugLcU4b9X5nEsPtBtnnvTdXHnM6rRyH7V4IOT88" />


  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>


  <link rel="stylesheet" href="<?php echo url(); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/css/animate.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/css/icon-font.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/css/anchro.css">

  <link rel="stylesheet" href="<?php echo url(); ?>/rs-plugin/css/settings.css">


  <link href="<?php echo url(); ?>/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">

 
 <!-- beautiful font -->
  <link rel="stylesheet" type="text/css" href="<?php echo url(); ?>/css/logotype.css">

  <!--  notification message -->
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo url(); ?>/css/notify-metro.css">
  <script src="<?php echo url(); ?>/js/notify.js"></script>
  <script src="<?php echo url(); ?>/js/notify-metro.js"></script>

  <!-- ajax function -->
  <script type="text/javascript">
    function wishliststore(id,type){
      var getUrl = window.location;
      var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";


      $.ajax({
        type:'POST',
        url: baseUrl + 'wishliststore',
        data: {
          "_token": "{{ csrf_token() }}",
          "id": id
        },
        datatype: "json",
        success:function(data){
                        // $("#msg").html(data.msg);
                        var elem = document.getElementById(id+type);
                        elem.style.display = 'block';
                        

                      }
                    });
    }


  </script>