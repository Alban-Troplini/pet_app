

<?php require_once("./functions/init.php") ?>

<?php 
if(isset($_GET['?pet'])) { 

    $pet = $_GET['?pet'];

    $query = "SELECT * FROM animals WHERE id='$pet'";
    
    $result = query($query);
    confirm($result);

    while($pet = fetch_array($result)) {
        $id = $pet['id'];
        $name = $pet['name'];
        $description = $pet['description'];
        $photo = $pet['photo'];
        $race = $pet['race'];
        $city = $pet['city'];
        $type = $pet['type'];
    
    }
  }
  else {
    $pet = "";
  }
?>
    
<div class="container" style="margin: 50px auto;">
  <main>
    
    <div class="row g-3">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your Friend</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item lh-sm mx-auto">
            <div class="mx-auto">
              <h6 class="text-center"><?php echo $name; ?></h6>
              <small class="text-muted"><?php echo $description; ?></small>
            </div>
            <div>
                <img src="<?php echo $photo; ?>" class="image-thumbnail " width="200" alt="">
            </div>
          </li>
        </ul>
      </div>

      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>Italy</option>
                <option>France</option>
                <option>Belgio</option>
                <option>Germany</option>
                <option>England</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="city" class="form-label">City</label>
              <select class="form-select" id="city" required>
                <option value="">Choose...</option>
                <option>Milano</option>
                <option>Torino</option>
                <option>Verona</option>
                <option>Venezia</option>
                <option>Bologna</option>
                <option>Firenze</option>
                <option>Roma</option>
                <option>Napoli</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>

</div>

