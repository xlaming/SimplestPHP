<!doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Page</title>
    <meta name="session" content="<?php echo Vendor\Security::siteKey(); ?>">
</head>
<body>
    <main>
        <?php echo $page; ?>
    </main>
</body>
</html>