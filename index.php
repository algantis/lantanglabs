<?php
// index.php - Landing Page lantanglabs (versi include section)
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>lantanglabs - Solusi Digital Pendidikan</title>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- STYLE INTERNAL -->
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f3f7ff;
            color: #0a2540; /* biru tua */
        }

        /* GLOBAL */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 50px 20px;
        }

        h2 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
            color: #0a2540;
        }

        /* SMOOTH ANIMATION */
        .fade {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.8s forwards;
        }
        @keyframes fadeIn {
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>


    <?php include "sections/header.php"; ?>

   
    <?php include "sections/hero.php"; ?>

  
    <?php include "sections/about.php"; ?>

    <?php include "sections/features.php"; ?>


    <?php include "sections/services.php"; ?>

    <?php include 'sections/portfolio.php'; ?>
    
    <?php include "sections/developers.php"; ?>



    <?php include "sections/kontak.php"; ?>


    <?php include "sections/footer.php"; ?>

</body>
</html>
