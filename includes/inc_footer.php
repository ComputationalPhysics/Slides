<?php
    echo "<aside class='controls'>".chr(10);
        echo "<a class='left' href='#'>&#x25C4;</a>".chr(10);
        echo "<a class='right' href='#'>&#x25BA;</a>".chr(10);
        echo "<a class='up' href='#'>&#x25B2;</a>".chr(10);
        echo "<a class='down' href='#'>&#x25BC;</a>".chr(10);
    echo "</aside>".chr(10);

    echo "<div class='progress'><span></span></div>".chr(10);

    echo "</div>".chr(10);

    echo "<script src='".$cRoot."/lib/js/head.min.js'></script>".chr(10);
    echo "<script src='".$cRoot."/js/reveal.min.js'></script>".chr(10);

    echo "<script>".chr(10);
        // Full list of configuration options available here:
        // https://github.com/hakimel/reveal.js#configuration
        echo "Reveal.initialize({";
            echo "controls: true, ";
            echo "progress: true, ";
            echo "history: true, ";
            // available themes are in /css/theme : default, sky, beige,simple
            echo "theme: Reveal.getQueryHash().theme || '".$sPresentationTheme."', ";
            // default/cube/page/concave/linear(2d)
            echo "transition: Reveal.getQueryHash().transition || '".$sPresentationReveal."', ";

            // Optional libraries used to extend on reveal.js
            echo "dependencies: [";
                echo "{ src: '".$cRoot."/lib/js/highlight.js', async: true, callback: function() { window.hljs.initHighlightingOnLoad(); } }, ";
                echo "{ src: '".$cRoot."/lib/js/classList.js', condition: function() { return !document.body.classList; } }, ";
                echo "{ src: '".$cRoot."/lib/js/showdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } }, ";
                echo "{ src: '".$cRoot."/lib/js/data-markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } }, ";
            echo "]";
        echo "});".chr(10);
    echo "</script>".chr(10);

    echo "</body>".chr(10);
    echo "</html>".chr(10);
?>
