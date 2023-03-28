<div id="PageRegister">
  <form class="row g-3" method="POST" id="formRegister" style="margin-top: 50px;">
  <?php include "functions/addProduct.php" ?>
    <div class="col-12 formCol">
      <h1>Add product</h1>
      <p style="margin-top: 10px;">Put the informations</p>
    </div>
    <div class="col-12 formCol">
      <input placeholder="Name" type="text" name="Name">
    </div>
    <div class="col-12 formCol">
      <input placeholder="Description" type="text" name="Description">
    </div>
    <div class="col-12 formCol">
      <input placeholder="Link of image" type="text" name="Image">
    </div>
    <div class="col-12 formCol">
      <input placeholder="Price" type="number" name="Price">
    </div>
    <!-- <div class="col-12 formCol">
      <input placeholder="CHAMP" type="text" name="CHAMP">
    </div> -->
    <div class="col-12 formCol">
        <select name="Categorie">
            <option value="0">electronic cigarette</option>
            <option value="1">eLiquide</option>
            <option value="2">Accessoires</option>
        </select>
    </div>
    <div class="col-12 formCol">
        <select name="Popular">
            <option disabled selected value>Popular stars :</option>
            <option value="0">1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
            <option value="4">5</option>
        </select>
    </div>
    <div class="col-12 formCol">
      <button style="margin: 20px;" type="submit" name="addProduct" class="btn btn-primary">Add</button>
    </div>
  </form>
</div>