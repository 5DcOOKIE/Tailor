<?php
$servername = "localhost";
$username = "admin";
$password = "_camelCase";
$dbname = "tailor";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo '<script type="text/javascript">',
        'console.log("Connected!")',
        '</script>';
}
$sql = "INSERT INTO user(fname, lname, email, password, gender, create_date, last_login) VALUES ('Haseeb', 'Arshad', 'haseeb.arshad55@gmail.com', 'pass', 'male', NOW(), NOW())";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">',
        'console.log("New record created successfully!")',
        '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin - CP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<script>
    function htmlbodyHeightUpdate() {
        var height3 = $(window).height()
        var height1 = $('.nav').height() + 50
        height2 = $('.main').height()
        if (height2 > height3) {
            $('html').height(Math.max(height1, height3, height2) + 10);
            $('body').height(Math.max(height1, height3, height2) + 10);
        } else {
            $('html').height(Math.max(height1, height3, height2));
            $('body').height(Math.max(height1, height3, height2));
        }

    }
    $(document).ready(function() {
        htmlbodyHeightUpdate()
        $(window).resize(function() {
            htmlbodyHeightUpdate()
        });
        $(window).scroll(function() {
            height2 = $('.main').height()
            htmlbodyHeightUpdate()
        });
    });
</script>

<style>
    body,
    html {
        height: 100%;
    }

    nav {
        margin: 0 !important;
    }

    /* remove outer padding */
    .main .row {
        padding: 0px;
        margin: 0px;
    }

    /*Remove rounded coners*/

    nav.sidebar.navbar {
        border-radius: 0px;
    }

    nav.sidebar,
    .main {
        -webkit-transition: margin 200ms ease-out;
        -moz-transition: margin 200ms ease-out;
        -o-transition: margin 200ms ease-out;
        transition: margin 200ms ease-out;
    }

    /* Add gap to nav and right windows.*/
    .main {
        padding: 10px 10px 0 10px;
    }

    /* .....NavBar: Icon only with coloring/layout.....*/

    /*small/medium side display*/

    @media (max-width: 768px) {
        #topnav {
            display: none;
        }

    }

    @media (min-width: 768px) {

        #sidenavbrand {
            display: none;
        }

        /*Allow main to be next to Nav*/
        .main {
            position: absolute;
            width: calc(100% - 40px);
            /*keeps 100% minus nav size*/
            margin-left: 40px;
            float: right;
        }

        /*lets nav bar to be showed on mouseover*/
        nav.sidebar:hover+.main {
            margin-left: 200px;
        }

        /*Center Brand*/
        nav.sidebar.navbar.sidebar>.container .navbar-brand,
        .navbar>.container-fluid .navbar-brand {
            margin-left: 0px;
        }

        /*Center Brand*/
        nav.sidebar .navbar-brand,
        nav.sidebar .navbar-header {
            text-align: center;
            width: 100%;
            margin-left: 0px;
        }

        /*Center Icons*/
        nav.sidebar a {
            padding-right: 13px;
        }

        /*adds border top to first nav box */
        nav.sidebar .navbar-nav>li:first-child {
            border-top: 1px #e5e5e5 solid;
        }

        /*adds border to bottom nav boxes*/
        nav.sidebar .navbar-nav>li {
            border-bottom: 1px #e5e5e5 solid;
        }

        /* Colors/style dropdown box*/
        nav.sidebar .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        /*allows nav box to use 100% width*/
        nav.sidebar .navbar-collapse,
        nav.sidebar .container-fluid {
            padding: 0 0px 0 0px;
        }

        /*colors dropdown box text */
        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
            color: #777;
        }

        /*gives sidebar width/height*/
        nav.sidebar {
            width: 200px;
            height: 100%;
            margin-left: -160px;
            float: left;
            z-index: 8000;
            margin-bottom: 0px;
        }

        /*give sidebar 100% width;*/
        nav.sidebar li {
            width: 100%;
        }

        /* Move nav to full on mouse over*/
        nav.sidebar:hover {
            margin-left: 0px;
        }

        /*for hiden things when navbar hidden*/
        .forAnimate {
            opacity: 0;
        }
    }

    /* .....NavBar: Fully showing nav bar..... */

    @media (min-width: 1330px) {

        /*Allow main to be next to Nav*/
        .main {
            width: calc(100% - 200px);
            /*keeps 100% minus nav size*/
            margin-left: 200px;
        }

        /*Show all nav*/
        nav.sidebar {
            margin-left: 0px;
            float: left;
        }

        /*Show hidden items on nav*/
        nav.sidebar .forAnimate {
            opacity: 1;
        }
    }

    nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover,
    nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
        color: #CCC;
        background-color: transparent;
    }

    nav:hover .forAnimate {
        opacity: 1;
    }

    section {
        padding-left: 15px;
    }
</style>
<style>
        #editor {
            /* overflow: auto; */
            background-color: white;
            /* color: black; */
        }
        
        #wrap {
            margin-top: 50px;
            margin-left: 50px;
            /* padding: 10px; */
            /* border: 1px grey solid; */
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table {
            /* width: 100%; */
        }


    </style>
<body>

    <nav class="navbar navbar-inverse" id="topnav">
        <div class="container-fluid">
            <div class="navbar-header" id="topnavbrand">
                <a class="navbar-brand" href="javascript:void(0);">Stitch it!</a>
            </div>
            <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#">Home</a></li> -->
                <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="#">Page 2</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
                <li><a href="javascript:void(0);"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-inverse sidebar" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="sidenavbrand" class="navbar-brand" href="#">Stitch it!</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li onclick="loadDoc('admin-home.php')" class="activeX"><a href="javascript:void(0);">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>

                    <li onclick="loadDoc('admin-profile.php')"><a href="javascript:void(0);">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>

                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Manage Users<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="javascript:void(0);">Add User</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0);">Delete User</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0);">Update User</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Manage Orders<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="javascript:void(0);">Add Order</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0);">Delete Order</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0);">Update Order</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0);">Separated link</a></li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);">Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="main" id="mainX">
        <div id="fetchedData">
    
        </div>
    </div>

    <div id="wrap">
        <div id="editor">
            <div id="myT">
                <table id="telem"></table>
                <table id="tbdy"></table>
            </div>
        </div>
    </div>

</body>

<script>
    function loadDoc(data) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('mainX').innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", data, true);
        xhttp.send();
    }

    var returnedResponse;

    function Response(response) {
        returnedResponse = response;
    }

    Response.prototype.json = function() {
        return JSON.parse(this.response);
    };

    function _fetch(url) {
        return new Promise((resolve, reject) => {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 1) {
                    console.log("OPENED");
                } else if (this.readyState == 2) {
                    console.log("HEADERS_RECEIVED");
                } else if (this.readyState == 3) {
                    console.log("LOADING");
                } else if (this.readyState == 4 && this.status == 200) {
                    console.log("DONE");
                    resolve(xhttp.responseText);
                }

            };
            xhttp.open("GET", url, true);
            xhttp.send();
            xhttp.onerror = function() {
                console.log(xhttp.error);
                reject("LOL");
            };
        });
    }

    function showUsers() {
        _fetch("showUsers.php")
            .then(s => {
                dataX = JSON.parse(s);
                printJSON(dataX);
            })
            .catch(f => {
                document.getElementById("mainX").innerHTML += f;
            })
    }

    function printJSON(dataX) {
        var start = 0;
        var end = dataX.length;
        var columns = Object.keys(dataX[0]).length;
        var colNames = Object.keys(dataX[0]);
        var inner = "";
        document.getElementById('tbdy').innerHTML = inner;
        inner += "<tr>";
        for (var j = 0; j < columns; j++) {
            inner += `<th style="background-color: gray; color: white;">` + colNames[j] + "</th>";
        }
        inner += "</tr>";
        for (var i = start; i < end; i++) {
            inner += "<tr>"
            for (var j = 0; j < columns; j++) {
                if (typeof (dataX[i]) == 'undefined') break;
                inner += "<td>" + dataX[i][colNames[j]] + "</td>";
            }
            inner += "</tr>";
        }
        document.getElementById('tbdy').innerHTML = inner;
    }

</script>

</html>