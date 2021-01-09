<?php require_once("./functions/init.php"); ?>

<main role="main">


  <div class="album py-5 bg-light">
    <div class="container">

      <?php 

        $query = "SELECT * FROM animals WHERE type='Dog'";
        $data = query($query);

        while($dog = fetch_array($data)){

          $id = $dog['id'];
          $name = $dog['name'];
          $description = $dog['description'];
          $photo = $dog['photo'];
          $race = $dog['race'];
          $city = $dog['city'];
          $type = $dog['type'];

      ?>

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="animal_image/<?php echo $photo; ?>" alt="" width="100%" height="225" />
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

<footer class="foter text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
  </div>
</footer>
