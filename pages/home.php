
<?php require_once("./functions/init.php") ?>

<?php 



    $query = 'SELECT * FROM animals';
    
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
    
        
?>
    <div class="card">
        <img class="photo" src="<?php echo $photo ?>" alt="John" style="width:100%">
        <h1><?php echo $name ?></h1>
        <p class="title"><?php echo $description ?></p>
        <p class="title2">City: <?php echo $city ?></p>
        <button class="card-but">Contact</button>
    </div>

    <?php } ?>

    <div class="card">
        <img class="photo" src="https://static.scientificamerican.com/sciam/cache/file/92E141F8-36E4-4331-BB2EE42AC8674DD3_source.jpg" alt="John" style="width:100%">
        <h1>Persian cat</h1>
        <p class="title">This is a persian cat. It's a white cat 
            and has long pelage. It's a male and his name is Boby.
        </p>
        <p class="title2">Gender: Male</p>
        <button class="card-but">Contact</button>
    </div>

    <div class="card">
        <img class="photo" src="https://cdn.mos.cms.futurecdn.net/otjbibjaAbiifyN9uVaZyL-1200-80.jpg" alt="John" style="width:100%">
        <h1>Persian cat</h1>
        <p class="title">This is a persian cat. It's a white cat 
            and has long pelage. It's a male and his name is Boby.
        </p>
        <p class="title2">Gender: Male</p>
        <button class="card-but">Contact</button>
    </div>
    <div class="card">
        <img class="photo" src="https://static.toiimg.com/thumb/msid-67586673,width-800,height-600,resizemode-75,imgsize-3918697,pt-32,y_pad-40/67586673.jpg" alt="John" style="width:100%">
        <h1>Persian cat</h1>
        <p class="title">This is a persian cat. It's a white cat 
            and has long pelage. It's a male and his name is Boby.
        </p>
        <p class="title2">Gender: Male</p>
        <button class="card-but">Contact</button>
    </div>

    <div class="card">
        <img class="photo" src="https://static.scientificamerican.com/sciam/cache/file/92E141F8-36E4-4331-BB2EE42AC8674DD3_source.jpg" alt="John" style="width:100%">
        <h1>Persian cat</h1>
        <p class="title">This is a persian cat. It's a white cat 
            and has long pelage. It's a male and his name is Boby.
        </p>
        <p class="title2">Gender: Male</p>
        <button class="card-but">Contact</button>
    </div>

    <div class="card">
        <img class="photo" src="https://cdn.mos.cms.futurecdn.net/otjbibjaAbiifyN9uVaZyL-1200-80.jpg" alt="John" style="width:100%">
        <h1>Persian cat</h1>
        <p class="title">This is a persian cat. It's a white cat 
            and has long pelage. It's a male and his name is Boby.
        </p>
        <p class="title2">Gender: Male</p>
        <button class="card-but">Contact</button>
    </div>

    <div class="card">
        <img class="photo" src="https://cdn.mos.cms.futurecdn.net/otjbibjaAbiifyN9uVaZyL-1200-80.jpg" alt="John" style="width:100%">
        <h1>Persian cat</h1>
        <p class="title">This is a persian cat. It's a white cat 
            and has long pelage. It's a male and his name is Boby.
        </p>
        <p class="title2">Gender: Male</p>
        <button class="card-but">Contact</button>
    </div>
</div>
