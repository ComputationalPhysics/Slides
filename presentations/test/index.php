<?php include "config.php"; ?>
<?php include "../../includes/inc_functions.php"; ?>
<?php include "../../includes/inc_header.php"; ?>

<div class="slides">

    <section> <!-- Slide group 1 -->
        <section>
            <h2>Test Presentation</h2>
            <br>
            <h3>Yay</h3>
            <br>
            <br>
            <div><?php echo date("l, j F Y") ?></div>
        </section>

        <section>
            <h2>Slide 2</h2>
            <p Class="fragment"><em>Emphasis</em></p>
            <p Class="fragment"><strong>Strong</strong></p>
            <p Class="fragment">Normal Text</p>
            <p Class="fragment">LaTeX: $\hat{H}\Psi = E\Psi$</p>
        </section>
    </section>

    <section> <!-- Slide group 2 -->
        <section>
            <h2>Slide 3</h2>
            <p Class="fragment">More stuff ...</p>
        </section>
    </section>

</div>

<?php include "../../includes/inc_footer.php"; ?>
