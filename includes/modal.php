 <!-- Modal -->
 <div class="modal fade" id="filter" tabindex="-1" aria-labelledby="filter" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="products.php" method="POST" id="filterform">
                     <select for="filterform" class="form-control" name="brand" required>
                         <option selected>Select a Brand...</option>
                         <?php
                            $query = "SELECT DISTINCT brand FROM products";
                            $result = mysqli_query($con, $query) or die($mysqli_error($con));
                            while ($row = mysqli_fetch_array($result)) {
                            ?>

                             <option><?php echo $row['brand']; ?></option>
                         <?php
                            }
                            ?>
                     </select>
                     <select for="filterform" class="form-control mt-3 mb-4" name="category" required>
                         <option selected>Select a Category...</option>
                         <option>Staples</option>
                         <option>Beverages</option>
                         <option>Snacks</option>
                         <option>Kitchen Essentials</option>
                     </select>
                     <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button for="filterform" type="submit" class="btn btn-primary">Filter</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- End Modal -->