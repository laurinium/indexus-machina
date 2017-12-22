<?php
/**
 * Created by PhpStorm.
 * User: jens
 * Date: 21.12.17
 * Time: 23:00
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>indexusMachina</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<ul id="slide-out" class="side-nav fixed">
    <li>
        <div class="center background">
            <img width="150" height="150" src="images/logo.png">
        </div>
        <div class="center"><h5>indexusMachina</h5></div>
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <div class="input-field inline col s12">
                        <i class="material-icons prefix">search</i>
                        <input type="text" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input"></label>
                    </div>
                </div>
            </div>
        </div>
    </li>

    <li><a class="waves-effect" href="#!/">Home</a></li>
    <li><a class="subheader">Main</a></li>
    <li><a class="waves-effect" href="#!/new">Add new Entrypoint</a></li>
    <li><a class="waves-effect" href="#!/keys">Manage API Keys</a></li>
    <li><a class="waves-effect" href="#!/dataexplorer">DataExplorer</a></li>

    <li><a class="subheader" href="#!/crawler">Crawler</a></li>
    <li><a class="waves-effect" href="#!/crawler/scoring">URL Scoring</a></li>

    <li><a class="subheader" href="#!/indexer">Indexer</a></li>
    <li><a class="waves-effect" href="#!/indexer/pipelines">Pipelines</a></li>
    <li><a class="waves-effect" href="#!/indexer/settings">Settings</a></li>
    <li><a class="subheader" href="#!/status">Status</a></li>
    <li><a class="waves-effect" href="#!/indexer/services">Services</a></li>
    <li><a class="waves-effect" href="#!/indexer/worker">Worker</a></li>
</ul>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
    $(".button-collapse").sideNav();
</script>
</body>
</html>

