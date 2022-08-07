<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            height:100vh;
            display:flex;
            align-items: center;
            justify-content:center;
        }
        

        #table {
            width: 80%;
            table-layout:fixed;
        }

        ul li {
            list-style: none;
            display: inline-block;

        }

        table {
            margin: 5px;
        }

        table,
        tr,
        td {
            border: 3px solid black;
            border-collapse: collapse;
        }

        a {
            text-decoration: none;
            font-weight: bold;
        }
    </style>


<table id="table" border="1">
            <tr height="150px" style="background-color:#EBEBD3;width:100%;">
                <td>
                    <center>
                        <h1><b>CI 3</b></h1>
                    </center>
                </td>
            </tr>
            <tr height="5px" style="background:#F5D547;">
                <td style="padding:10px;">
                    <ul>
                        <li><a href="<?php echo site_url('MainController');?>">Home</a></li>
                        <li><a href="<?php echo site_url('MainController/gallery');?>">Gallery</a></li>
                        <li><a href="<?php echo site_url('MainController/about');?>">About</a></li>
                    </ul>
                </td>
            </tr>