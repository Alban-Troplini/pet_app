
<?php require_once("./functions/init.php"); ?>

<main role="main">

<div class="image"
  style="
    background: url(https://s1.1zoom.me/b5660/826/Dogs_Cats_White_background_Two_Kittens_Basset_527433_1920x1080.jpg);" 
></div>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">

      <?php 
      
        $query = "SELECT * FROM animals WHERE type='Cat'";
        $data = query($query);

        while($cat = fetch_array($data)){

          $id = $cat['id'];
          $name = $cat['name'];
          $description = $cat['description'];
          $photo = $cat['photo'];
          $race = $cat['race'];
          $city = $cat['city'];
          $type = $cat['type'];
        

      ?>


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225"focusable="false" role="img" aria-label="Placeholder: Thumbnail" src="<?php echo $photo; ?>" alt="<?php echo $name; ?>" />
            <div class="card-body">
              <h3 class="card-text"><?php echo $name; ?></h3>
              <p class="card-text"><?php echo $description; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Adopt</button>
     
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

      </div>
    </div>
  </div>

</main>

<footer class=" foter text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
  </div>
</footer>