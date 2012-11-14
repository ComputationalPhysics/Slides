<?php
    include "../../config.php";

    session_start();
    if($_SESSION["Login"] != "OK") {
        header("Location: ".$cRoot."/index.php");
        die("Access Denied");
    }

    echo "<!DOCTYPE html>".chr(10);
    echo "<html>".chr(10);

    if($bLatex) {
        echo "<script type='text/x-mathjax-config'>".chr(10);
            echo "MathJax.Hub.Config({";
            echo "extensions: ['tex2jax.js'], ";
            echo "jax: ['input/TeX', 'output/HTML-CSS'], ";
            echo "tex2jax: {inlineMath: [ ['$','$'], ['\\(','\\)'] ], displayMath: [ ['$$','$$'], ['\\[','\\]'] ], processEscapes: true}, ";
            echo "'HTML-CSS': { availableFonts: ['TeX'] }, ";
            echo "styles: {'.MathJax_SVG svg > g, .MathJax_SVG_Display svg > g': {fill: '".$sLatexColor."', stroke: '".$sLatexColor."'}}, ";
            echo "});".chr(10);
        echo "</script>".chr(10);
    }

    echo "<head>".chr(10);
    echo "<meta charset='utf-8'>".chr(10);
    echo "<title>".$sPresentationTitle."</title>".chr(10);
    echo "<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic'>".chr(10);
    echo "<link rel='stylesheet' href='".$cRoot."/css/main.css'>".chr(10);
    echo "<link rel='stylesheet' href='".$cRoot."/css/theme/default.css' id='theme'>".chr(10);

    // For syntax highlighting
    echo "<link rel='stylesheet' href='".$cRoot."/lib/css/zenburn.css'>".chr(10);

    // If the query includes 'print-pdf' we'll use the PDF print sheet
    echo "<script>".chr(10);
        echo "document.write('<link rel=".chr(34)."stylesheet".chr(34)." href=".chr(34).$cRoot."/css/print/' + ( window.location.search.match( ".$cRoot."/print-pdf/gi ) ? 'pdf' : 'paper' ) + '.css".chr(34)." type=".chr(34)."text/css".chr(34)." media=".chr(34)."print".chr(34).">' );".chr(10);
    echo "</script>".chr(10);

    echo "<script type='text/javascript' src='http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_SVG'></script>".chr(10);

    echo "</head>".chr(10);
    echo "<body>".chr(10);
    echo "<div class='reveal'>".chr(10);
    echo "<div class='state-background'></div>".chr(10);
?>
