<?php include_once('includes/config.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo BASE_URL;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title><?php echo SITE_NAME; ?></title>
 
    <!-- Stylesheets -->
    <?php include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Navigation Menu --> 
    <?php include_once('includes/header.inc.php'); ?> 

    <main>
        <!-- Main Content Start From Here -->

        <section class="min-h-screen py-12">
            <div class="container">
                <h1 class="text-xl md:text-3xl font-bold text-black text-center">Hello Tailwind</h1>
            </div>
        </section>



    </main>

    <!-- Footer --> 
    <?php include_once('includes/footer.inc.php'); ?>  
</body>
</html>