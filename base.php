<?php require_once 'ti.php' ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>USC ISI NL Seminar - <?php startblock('title') ?><?php endblock() ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/NLGSite.css"/>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X2JT6D84MD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-X2JT6D84MD');
    </script>
    <meta name="Keywords"
          content="USC, ISI, natural, language, research, processing, reading group, nlp, computational, linguistics, ontologies, machine learning, statistical, machine translation, information, retrieval, extraction, semantics, parsing, grammars, summarization, question answering, transducers, language modeling">
    <style>
        html {
            font-size: 16px;
        }
         a, a:visited {
             color:  #990000 !important;
             text-decoration: none;
        }
         a:hover, a:active {
            color: #FFCC00 !important;
        }
         code {
             color: #000099;
         }
    </style>
  <?php startblock('header') ?> <?php endblock() ?>

</head>

<div class="container-xxl">
  <?php include('includes/header2021.php'); ?>
    <div class="container">
      <?php startblock('page') ?>
      <?php endblock('page') ?>
    </div>
</div>
</body>
</html>
