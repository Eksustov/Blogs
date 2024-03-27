<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <style>
    body {margin:0;    
    background-image: linear-gradient(rgb(126, 236, 255), orange);
}
    body:not(header)
{
   margin-top:35px;
   border-left: 10px;
}
    html {
        color:black;
        font-family: ui-rounded;
        height: 100%;
        width: 100%;
    }

    header{
    background-color:coral;
    position: fixed;
    top: 0;
    width: 101vw;
    z-index: 1;
    height: 20px
    }
    a {
    text-decoration: none;
    color:seashell;
    transition: color 0.3s;
    }
    a:hover{
    color:black;
    }
    main{
        margin-left:10px;
    }
    label {
        position: relative;
    }
    .invalid-data {
        position: absolute;
        right:0;
        top: 100%;
        color: "red";
    }
    </style>
</head>
<body>