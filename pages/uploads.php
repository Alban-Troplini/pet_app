

<?php require_once("./functions/init.php"); ?>





<?php

if(isset($_POST['register'])){

    $photoName = $_FILES['fileToUpload']['name'];


        $name = escape($_POST['name']);
        $gender = escape($_POST['gender']);
        $description = escape($_POST['description']);
        $address = escape($_POST['address']);
        $type = escape($_POST['type']);
        $race = escape($_POST['race']);
        $photo = escape($photoName);


        $query = "INSERT INTO animals (name, description, gender, photo, race, city, type) VALUES ('$name', '$description', '$gender', '$photo', '$race', '$address', '$type')";
        


        $result = query($query);

        if($result){ 

    $target_dir = "./animal_images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);


    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// if(isset($_POST["upload"])) {


  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
   
    $uploadOk = 1;
  } else {
   
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

//Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The pet with ". $name . " has been uploaded.";
  } else {
    echo "Sorry, there was an error of register this pet. Please try again.";
  }
}
}
 

?>





   
<div class="container" style="margin: 50px auto;">
  <main>
    
    <div class="row g-3">

      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Register a new pet:</h4>
        <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
              <div class="invalid-feedback">
                Valid name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="gender" class="form-label">Gender</label>
              <select class="form-select" id="gender" name="gender" required>
                <option value="">Gender</option>
                <option>Male</option>
                <option>Female</option>
              </select>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="description" class="form-label">Description</label>
              <textarea  name="description" class="form-control" id="description" rows="5" cols="50" ></textarea>
              <div class="invalid-feedback">
                Please write something for this pet.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="36071 Arzignano VI" required>
              <div class="invalid-feedback">
                Please enter address.
              </div>
            </div>

            <div class="col-md-6">
              <label for="type" class="form-label">Type</label>
              <select class="form-select"name="type" id="type" required>
                <option value="">Choose...</option>
                <option>Dog</option>
                <option>Cat</option>
                <option>Other</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid type.
              </div>
            </div>

            <div class="col-md-6">
              <label for="race" class="form-label">Race</label>
              <input type="text" class="form-control" name="race" id="race" placeholder="" required>
              <div class="invalid-feedback">
                Race required.
              </div>
            </div>
          </div>

           
            <div class="input-group m-4 col-md-3 mx-auto">
                    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                    <input class="btn btn-primary" value="Upload Image">
            
            </div>
            

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" name="register" type="submit">Register this pet.</button>
        </form>
      </div>
    </div>
  </main>

</div>

