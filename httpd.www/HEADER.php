<?php
include('./CONFIG.php');

if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('(c) 2023-' . date("Y") . ' by Abdullah Sahin @ https://sahin.uk/. All rights reserved.');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="de">
    <meta http-equiv="cache-control" content="cache">
    <meta name="robots" content="index, follow, noodp, noydir">
    <title>sahin.software ltd. (LLC) - it consulting.</title>
    <meta name="author" content="Abdullah Şahin">
    <meta name="publisher" content="www.sahin.uk">
    <meta name="generator" content="Abdullah Sahin">
    <meta name="copyright" content="2018 (c) sahin.uk">
    <meta name="date" content="2021-11-06">
    <meta name="keywords" content="abdullah sahin, abdullahsahin, datebase, habbolar, habbo,
            abdullah, şahin, sahin, white hat, devops, engineer, software,
            digital, it, cloud, germany, abdellaui, abdullah sahin
            bochum,programming-languages, c/c++, c#, java, typescript,
            scripting-languages, shell, php, python, javascript,
            scructural-languages, html, css, yaml, json, query-languages, sql,
            promql, kql, frameworks, angular, spring-boot, qt, unity,
            versioning, git, build, qmake, cmake, npm, mvn, pip, anaconda,
            protocols, tls, ssh, wireguard, openvpn, rest, oidc, saml,
            websocket, tools, elasticsearch, filebeat, prometheus, grafana,
            traefik, orchestrator, docker, kubernetes, iac, terraform,
            terragrunt, cloud, aws, methodology, agile, scrum, waterfall,
            v-model" lang="de">
    <meta name="description" content="hello, i'm abdullah şahin - an enthusiastic entrepreneur. please
            use this page to get a first impression of me!">
    <meta name="abstract" lang="de" content="hello, i'm abdullah şahin - an enthusiastic entrepreneur. please
            use this page to get a first impression of me!">
    <meta name="distribution" content="global">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,shrink-to-fit=no">
    <meta name="theme-color" content="#000000">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="abdullah şahin - an enthusiastic entrepreneur.">
    <meta property="og:title" content="abdullah şahin - an enthusiastic entrepreneur.">
    <meta property="og:description" content="hello, i'm abdullah şahin - an enthusiastic entrepreneur. please
            use this page to get a first impression of me!">
    <meta property="og:url" content="https://sahin.uk">
    <meta property="og:image" content="/itsme.jpg">
    <meta property="og:image:height" content="512">
    <meta property="og:image:width" content="512">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="abdullah şahin - an enthusiastic entrepreneur.">
    <meta name="twitter:description" content="hello, i'm abdullah şahin - an enthusiastic entrepreneur. please
            use this page to get a first impression of me!">
    <meta name="twitter:image" content="/itsme.jpg">
    <link rel="icon" type="image/jpg" href="/itsme.jpg">
    <link rev="made" href="mailto:abdullah@sahin.uk">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.6/swiper-bundle.min.css" integrity="sha512-TiHjTWyqR7jp0HDsbupyltYY6O5qkSn5uLypqLSgNRtc2tEAhD2Dhhfe+0uu3aPxe5LN+quKlyA+j07SRtzxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>