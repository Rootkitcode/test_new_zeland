<?php
    // include('../bootstrap.inc.php');
    include('./index.php');

    $title = $heroText = 'Contact us';
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
                <p>Praesent adipiscing. Cras sagittis. Nullam vel sem. Nunc nonummy metus.</p>
                <p>Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Fusce fermentum odio nec arcu.</p>
            </div>
        </div>
    </main>

    <?php include('../footer.inc.php'); ?>
</body>
</html>
