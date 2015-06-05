<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Daft Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
    <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="navbar-brand"><img src="images/logo.png"></a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li>
                    <a href="http://api.daft.ie" target="_blank">api.daft.ie</a>
                </li>
                <li>
                    <a href="http://www.daft.ie" target="_blank">daft.ie</a>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <h1>Search</h1>
                <p class="lead">Please enter your search term below</p>
            </div>
        </div>
    </div>

    <!-- Search box
    ================================================== -->
    <div class="bs-docs-section clearfix">
        <div class="row">
            <div class="col-lg-12">

                <div class="bs-component">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">

                            <div class="collapse navbar-collapse">

                                <form action="http://daft.dev/search" method="post" class="navbar-form navbar-left col-md-12" role="search">
                                    <div class="col-md-9 form-group">
                                        <?php

                                            if(!empty($options['params']) && property_exists($options['params'], 'results')) {
                                                $search_sentence = str_replace(' entered by', '', $options['params']->results->search_sentence);
                                            }
                                            else {
                                                $search_sentence = '';
                                            }
                                        ?>
                                        <input id="search_term" name="search_term" type="text" class="form-control" placeholder="Search" value="<?php echo $search_sentence; ?>">
                                    </div>
                                    <button type="submit" class="btn btn-default">Search</button>
                                </form>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div id="search_results" class="row">
        <?php
            if(!empty($options) && array_key_exists('include', $options)) {

                include($options['include']);
            }
        ?>
    </div>

    <footer>

        <div class="row">
            <div class="col-lg-12">

                <ul class="list-unstyled">
                    <li class="pull-right"><a href="#top">Back to top</a></li>
                    <li>Made by <a href="mailto:pholdcroft@gmail.com" rel="nofollow">Pierce Holdcroft</a></li>
                </ul>

            </div>
        </div>

    </footer>

</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootswatch.js"></script>

</body>
</html>