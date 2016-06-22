<?php
/**
 * Farm administration
 * @author katan
 */
include_once(dirname(__FILE__).'/automate.class.php'); // parent
$config = Automate::factory()->getConfig();
$url = "{$config['protocol']}://{$config['server']}.{$config['domain']}/game.php";
$output = '';

$output = Automate::factory()->getGame($url.'?'.$_SERVER['QUERY_STRING'], $_POST, true, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta name="viewport" content="width=device-width, user-scalable=yes">
      <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
      <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
      <title>Game</title>
  </head>
  <style type="text/css">
    * {
      background-color: #111;
      background-image: none;
      color:#ccc;
      font-size:11px;
    }
    img {
      opacity: 0.4;
    }

    a, a:visited, a:link {
      color: #eee;
      text-decoration: underline;
    }
    .quickstart_pane a {
      font-size:12px;
    }
  </style>
  <body style="background-color: #444;">
    <?=print_r($output)?>
  </body>
</html>
