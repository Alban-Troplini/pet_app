
<?php require_once("./functions/init.php") ?>

<?php 


    $query = 'SELECT * FROM animals';


        if(isset($_GET['search'])){

            $search = $_GET['search'];
            
            $query = "SELECT * FROM animals WHERE description LIKE '%$search%'";



        }
    
    $result = query($query);
    confirm($result);

?>


<div id="loader"></div>

<div class="card-con" id="upl" >

<?php 

    
        
    while($card = fetch_array($result)) {
        $id = $card['id'];
        $name = $card['name'];
        $description = $card['description'];
        $photo = $card['photo'];
        $race = $card['race'];
        $city = $card['city'];
        $type = $card['type'];
    
        
?>
    <div class="card">
        <img class="photo" src="animal_images/<?php echo $photo; ?>" alt="<?php echo $photo; ?>" style="width:100%">
        <h1><?php echo $name ?></h1>
        <p class="title"><?php echo $description ?></p>
        <p class="title2">City: <?php echo $city ?></p>
        <form action="" method="GET">
        <button class="btn btn-warning btn-lg btn-block" name="pet" >
        <a style="text-decoration: none; color: white;" href="?page=contact&?pet=<?php echo $id ?>">Adopt now</a></button>
        
        </form>
        
    </div>



    
    <?php } ?>

        
</div>
