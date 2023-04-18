<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-layout.css">
  <title>Form</title>
</head>

<body>

<?php
include_once('header.html')
?>
<div class="conteudo">
  <form class="row g-3">
    <div class="line1">
      <div class="form-type1">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="form-type1">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
    </div>
    <div class="line2">
      <div class="form-type2">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
    </div>
    <div class="line3">
      <div class="form-type2">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
    </div>
    <div class="line4">
      <div class="form-type3">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-type4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-type5">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      </div>
      <div class="line5">
      <div class="col-12">
        <div class="form-type6">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      </div>
    <div class="line6">
    <div class="form-button">
      <button type="submit" class="btn-primary">Sign in</button>
    </div>
    </div>
  </form>

  </div>
</body>

</html>