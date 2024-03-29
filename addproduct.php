<?php 
    require_once dirname(__FILE__).'/include/header.php';
    require_once dirname(__FILE__).'/include/api.php';
    require_once dirname(__FILE__).'/include/navbar.php';
?>


    <div class="socialcodia">
        <div class="row">
            <div class="col l10 offset-l1 s12 m12" style="padding: 30px 0px 30px 10px; font-weight: bold">
                <div class="card z-depth-0">
                    <div class="card-content">
                        <div class="row">
                            <div class="col l3 s12 m6">
                                <div class="input-field">
                                    <select id="selectBrand">
                                      <option value="0" disabled selected>Select Brand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col l3 s12 m6">
                                <div class="input-field">
                                    <select id="selectCategory">
                                      <option value="0" disabled selected>Select Category</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col l3 s12 m6">
                                <div class="input-field">
                                    <select id="selectSize">
                                      <option value="0" disabled selected>Select Size</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col l3 s12 m6">
                                <div class="input-field">
                                    <select id="selectLocation">
                                      <option value="0" disabled selected>Select Location</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="input-field">
                                <select id="selectItem">
                                  <option value="0" disabled selected>Select Product Name</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6 m4 l4">
                                <i class="material-icons prefix">monetization_on</i>
                                <input  id="productPrice" type="number" class="validate">
                                <label for="productPrice">Product Price</label>
                            </div>
                            <div class="input-field col s6 m4 l4">
                                <i class="material-icons prefix">loupe</i>
                                <input  id="productQuantity" type="number" class="validate">
                                <label for="productQuantity">Product Quantity</label>
                            </div>
                            <div class="input-field col s6 m4 l4">
                                <i class="material-icons prefix">center_focus_weak</i>
                                <input  id="productBarCode" type="number" class="validate">
                                <label for="productBarCode">BarCode (Optional)</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col l6">
                                <div class="input-field col l6">
                                    <select id="manMonth">
                                        <option value="0" disabled selected>Month</option>
                                        <option value='01'>January</option>
                                        <option value='02'>February</option>
                                        <option value='03'>March</option>
                                        <option value='04'>April</option>
                                        <option value='05'>May</option>
                                        <option value='06'>June</option>
                                        <option value='07'>July</option>
                                        <option value='08'>August</option>
                                        <option value='09'>September</option>
                                        <option value='10'>October</option>
                                        <option value='11'>November</option>
                                        <option value='12'>December</option>
                                    </select>
                                </div>
                                <div class="input-field col l6">
                                    <select id="manYear">
                                        <option value="0" disabled selected>Year</option>
                                        <option value='2022'>2022</option>
                                        <option value='2021'>2021</option>
                                        <option value='2020'>2020</option>
                                        <option value='2019'>2019</option>
                                        <option value='2018'>2018</option>
                                        <option value='2017'>2017</option>
                                        <option value='2016'>2016</option>
                                        <option value='2015'>2015</option>
                                        <option value='2014'>2014</option>
                                        <option value='2013'>2013</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col l6">
                                <div class="input-field col l6">
                                    <select id="expMonth">
                                        <option value="0" disabled selected>Month</option>
                                        <option value='01'>January</option>
                                        <option value='02'>February</option>
                                        <option value='03'>March</option>
                                        <option value='04'>April</option>
                                        <option value='05'>May</option>
                                        <option value='06'>June</option>
                                        <option value='07'>July</option>
                                        <option value='08'>August</option>
                                        <option value='09'>September</option>
                                        <option value='10'>October</option>
                                        <option value='11'>November</option>
                                        <option value='12'>December</option>
                                    </select>
                                </div>
                                <div class="input-field col l6">
                                    <select id="expYear">
                                        <option value="0" disabled selected>Year</option>
                                        <option value='2026'>2026</option>
                                        <option value='2025'>2025</option>
                                        <option value='2024'>2024</option>
                                        <option value='2023'>2023</option>
                                        <option value='2022'>2022</option>
                                        <option value='2021'>2021</option>
                                        <option value='2020'>2020</option>
                                        <option value='2019'>2019</option>
                                        <option value='2018'>2018</option>
                                        <option value='2017'>2017</option>
                                        <option value='2016'>2016</option>
                                        <option value='2015'>2015</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="input-field center">
                            <button type="submit" class="btn blue btn-large" style="width: 50%" onclick="addProduct()" name="btnAddProduct" id="btnAddProduct">Add Product</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div id="modalAddItem" class="modal modal-fixed-footer" style="border:8px ridge blue; border-radius: 40px; box-shadow: inset 0 0 0 5px blue, inset 0 0 0 10px white; ">
        <h4 class="blue white-text center darken-4" style="margin: 0px">Add Item</h4>
          <div class="modal-content" style="margin: 0px; padding: 10px">
                <div class="input-field">
                  <i class="material-icons blue-text darken-4 prefix">person</i>
                  <input type="text" name="itemName" id="itemName" required="required">
                  <label for="itemName">Enter Item Name</label>
                </div>
                    <div class="input-field">
                      <i class="material-icons blue-text darken-4 prefix">description</i>
                      <textarea name="itemDescription" id="itemDescription" cols="30" rows="10" maxlength="500"  style="min-height: 100px; max-height: 200px;" class="materialize-textarea" placeholder="Item Description (Optional)" style="height: 100px;"></textarea>
                    </div>
                    <div class="input-field">
                      <button class="btn btn-large blue darken-4" onclick="addItem()" id="btnAddItem" style="width: 100%;  border-radius:40px;">Add Item</button>
                    </div>
          </div>
      </div>
    </div>


<?php require_once dirname(__FILE__).'/include/sidenav.php'; ?>
<?php require_once dirname(__FILE__).'/include/footer.php'; ?>