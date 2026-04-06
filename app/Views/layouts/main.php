<!DOCTYPE html>
<html lang="ru">

<?php  include __DIR__."/head.php";  ?>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

<header>


</header>

<main>
    <?php include $path; ?>
</main>

<footer>
    <hr>
    <p>© <?= date('Y') ?> PHP MVC</p>
</footer>

<script src="/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/dist/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/dist/assets/libs/feather-icons/feather.min.js"></script>
<!-- App js -->
<script src="/dist/assets/js/app.js"></script>

</body>
</html>