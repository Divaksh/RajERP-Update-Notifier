<?php include '../header.php'; ?>
<?php include '../functions.php'; ?>
<!DOCTYPE html><html> <head><link rel="manifest" href="/manifest.json"/><script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script><script>var OneSignal=window.OneSignal || []; OneSignal.push(function(){OneSignal.init({appId: "eada2698-ce33-411e-b001-d488b2999608",});}); OneSignal.push(function(){OneSignal.isPushNotificationsEnabled().then(function(isEnabled){if (isEnabled){console.log("Push notifications are enabled!");}else{console.log("Push notifications are not enabled yet."); window.location.href="https://divaksh.com/rajerp/";}});}); </script> <meta property="og:title" content="RajERP Update Status"/><meta property="og:description" content="RajERP Update Status"/><meta property="og:image" content="/rajerp/update/rajerp-logo.png"/> <title>RajERP Update Status</title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> </head> <body> <div class="container h-100"> <div class="row h-100 justify-content-center align-items-center" style="margin-top: 10px"> <div class="col-sm text-center"><img src="/rajerp/update/rajerp-logo.png" class="rounded mx-auto d-block" alt="Raj ERP"></div><div class="col-sm text-center" style="margin: 20px 0;">
<?php 
//Get Latest Published Time
$published = file_get_contents("http://divaksh.com/rajerp_published.txt");
$published_new = mb_substr($published, 57);

//Latest Update Time
$updated = file_get_contents("http://divaksh.com/rajerp_updated.txt");
$updated_new = mb_substr($updated, 48);

//Printing both dates
echo '<h6> Updates Published On : ' . foolproofTime($published_new) . '</h6>';
echo '</br>';
echo '<h6> Updates Reflected On : ' . foolproofTime($updated_new) . '</h6>'; ?> </div><div class="col-sm text-center"><div class="onesignal-customlink-container" style="margin-bottom: 20px;"></div></div></div></body></html>