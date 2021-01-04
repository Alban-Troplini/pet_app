<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect Friend</title>
        <!-- css styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- about style -->
    <link rel="stylesheet" href="./css/about.css">
    <!-- footer style -->
    <link rel="stylesheet" href="./css/footer.css">
    <!-- cards style -->
    <link rel="stylesheet" href="./css/cards.css">
    <!-- search style -->
    <link rel="stylesheet" href="./css/search.css">
    <!-- mavbar style -->
    <link rel="stylesheet" href="./css/navbar.css">
        <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- bootstrap bundle -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    </head>
<body  onload="spiner()">

            <!-- navbar -->
  <div class="navbar">
                <div class="img-back">
                    <!-- <img src="./images/ca.png" alt="black cat">  -->
                </div>
                <div class="links">
                    <ul class="navul">
                        <li><a class="a-li" href="?page=main">Home</a></li>
                        <li><a class="a-li" href="?page=about">About</a></li>
                        <li><a class="a-li" href="?page=dogs">Dogs</a></li>
                        <li><a class="a-li" href="?page=cats">Cats</a></li>
                        <li><a class="a-li" href="?page=contact">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <!-- end of navbar -->
              
        <?php

            if(!isset($_GET['page']) || $_GET['page'] == ''){
                $page = 'main'; //If no page specified
            } else {
                $page = $_GET['page'];
            }

            switch($page)
            {
                case 'main':
                    include('./pages/main.php');
                break;

                case 'about':
                    include('./pages/about.php');
                break;

                case 'dogs':
                    include('./pages/dogs.php');
                    break;

                case 'cats':case 'cats':
                    include('./pages/cats.php');
                break;

                case 'contact':
                    include('./pages/contact.php');
                break;

                default:
                     include('./pages/home.php');
            }
        
        ?>

  <?php include('./pages/footer.php'); ?>
 

        <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <!-- gsap animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
        <!-- js functions -->
    <script src="./js/app.js"></script>
    <script src="./js/contact.js"></script>

    
</body>
</html>