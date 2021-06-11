<?php

include('./Includes/header.php');
include('./process.php');

?>



<style>
    .success-h {
        font-size: 40px;
        padding-top: 70px;
    }
</style>

<!-- HERO=============================================================== -->
<section class="hero-section">
    <div id="heroDiv" class="hero">
        <h1 class="hero-heading success-h">
            AČIŪ, <?php echo $_GET['name']; ?> <br>
            REZERVACIJĄ PATVIRTINSIME SMS ŽINUTE <br />

        </h1>
    </div>
</section>

<script>
    window.setTimeout(function() {
        window.location.href = "index.php";
    }, 5000);
</script>

<?php

include('./Includes/footer.php');

?>