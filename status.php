<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta https-equiv="cleartype" content="on">
    <title>Status Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&subset=latin" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://demo.cachethq.io/build/dist/css/all-81fdbf996d.css">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="status-page">
    <div class="container">
        <div class="section-messages">
        </div>
        <div class="section-status">
            <div class="alert alert-success"></div>
        </div>
        <div class="section-components">
            <ul class="list-group components">
                <li class="list-group-item group-name">
                    <strong>Websites</strong>
                    <div class="pull-right">
                        <websitesStatus><i class="ion ion-ios-circle-filled text-component-1 greens" data-toggle="tooltip" title="Operational"></i></websitesStatus>
                    </div>
                </li>
                <div class="group-items">
                    <websiteCat>
                    </websiteCat>
                </div>
            </ul>
            <ul class="list-group components">
                <li class="list-group-item group-name">
                    <strong>Plex</strong>
                    <div class="pull-right">
                        <plexStatus><i class="ion ion-ios-circle-filled text-component-1 greens" data-toggle="tooltip" title="Operational"></i></plexStatus>
                    </div>
                </li>
                <div class="group-items">
                    <plexCat>
                    </plexCat>
                </div>
            </ul>
            <ul class="list-group components">
                <li class="list-group-item group-name">
                    <strong>Services</strong>
                    <div class="pull-right">
                        <servicesStatus><i class="ion ion-ios-circle-filled text-component-1 greens" data-toggle="tooltip" title="Operational"></i></servicesStatus>
                    </div>
                </li>
                <div class="group-items">
                    <servicesCat>
                    </servicesCat>
                </div>
            </ul>
        </div>
        <div class="section-timeline">
            <h1>Recent Reports</h1>
            <timeline>
            </timeline>
        </div>
    </div>
</body>

    <?php include ("config.php"); ?>
    <script src="assets/js/status.js"></script>

</html>
