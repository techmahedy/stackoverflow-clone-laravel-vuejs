
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forum :: Home Page</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/all.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>

    <div class="container-fluid" id="app">
        <div class="headernav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="index.html"><img src="http://forum.azyrusthemes.com/images/logo.jpg" alt=""  /></a></div>
                    <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                        <a data-toggle="dropdown" href="#" >Britania</a>
                    </div>
                    <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                        <div class="wrap">
                            <form action="#" method="post" class="form">
                                <div class="pull-left txt"><input type="text" class="form-control" placeholder="Search Topics"></div>
                                <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                        <div class="stnt pull-left">                            
                            <form action="03_new_topic.html" method="post" class="form">
                                <button class="btn btn-primary">Start New Topic</button>
                            </form>
                        </div>
                        <div class="env pull-left"><i class="fa fa-envelope"></i></div>

                        <div class="avatar pull-left dropdown">
                            <a data-toggle="dropdown" href="#"><img src="http://forum.azyrusthemes.com/images/avatar.jpg" alt="" /></a> <b class="caret"></b>
                            <div class="status green">&nbsp;</div>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Profile</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Inbox</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Log Out</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-4" href="04_new_account.html">Create account</a></li>
                            </ul>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>