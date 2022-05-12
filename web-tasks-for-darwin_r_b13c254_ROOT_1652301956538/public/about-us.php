<?php
    include('../bootstrap.inc.php');

    $title = $heroText = 'About us';
?>
<!doctype html>
<html lang="en">
<?php include('../head.inc.php'); ?>
<body>
    <?php include('../header.inc.php'); ?>

    <main role="main">
        <section class="hero-area text-center d-flex align-items-center container">
            <div class="container">
                <h1 class="hero-area__title m-0"><?=htmlspecialchars($heroText)?></h1>
            </div>
        </section>

        <hr class="m-0 p-0" />

        <div class="primary-content py-5">
            <div class="container cms-content">
                <p>Morbi mollis tellus ac sapien. Praesent ut ligula non mi varius sagittis. In ac felis quis tortor malesuada pretium. Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros.</p>
                <p>Suspendisse eu ligula. Maecenas nec odio et ante tincidunt tempus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
            </div>
        </div>
    </main>

    <?php include('../footer.inc.php'); ?>
</body>
</html>
