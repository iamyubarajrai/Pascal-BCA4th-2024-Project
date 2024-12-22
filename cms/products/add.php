<?php include "../header.php"; 
include "../connection.php"; 
$cat_sql = "SELECT * FROM categories"; 
$cat_res = mysqli_query($conn, $cat_sql); ?>
    <main id="main">
        <div class="form-box">
            <h1 class="page-title">Add Product</h1>
            <form action="create.php" class="flex-row" method="POST" name="add" enctype="multipart/form-data">
                <div class="main">
                    <div class="field-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="">
                    </div>
                    <div class="field-group">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" id="slug" value="">
                    </div>
                    <div class="field-group">
                        <label for="detail">Detail</label>
                        <textarea name="detail" id="detail" data_rich_textarea="true"></textarea>
                    </div>
                    <div class="field-group">
                        <label for="excerpt">Excerpt</label>
                        <textarea name="excerpt" id="excerpt"></textarea>
                    </div>
                </div>
                <div class="aside">
                    <div class="status-box">
                        <h4>Product Status</h4>
                        <div class="status-item">
                            <span>Author</span>
                            <strong>Logged in User Name</strong>
                        </div>
                        <div class="status-item">
                            <span>Published Date</span>
                            <strong>2024-09-10 AD</strong>
                        </div>
                    </div>
                    <div class="field-group">
                        <label for="img">Prodcut Image</label>
                        <input type="file" name="img" id="img" value="">
                    </div>
                    <div class="field-group">
                        <label for="cat">Prodcut Category</label>
                        <select name="cat" id="cat">
                            <option>Choose Category</option>
                            <?php while($cat = mysqli_fetch_assoc($cat_res)): ?>
                                <option value="<?php echo $cat['id']; ?>"><?php echo $cat['title']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="field-group">
                        <h4>Product Price</h4>
                        <div class="subfield-group">
                            <label for="regular_price">Regular Price</label>
                            <input type="number" name="regular_price" id="regular_price" value="">
                        </div>
                        <div class="subfield-group">
                            <label for="discount_price">Discount Price</label>
                            <input type="number" name="discount_price" id="discount_price" value="">
                        </div>
                    </div>
                    <button type="submit" name="submit">Create Product</button>
                </div>
            </form>
        </div>
    </main>
    <script src="../assets/richtext.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/7c8a796694.js" crossorigin="anonymous"></script>
<?php include "../footer.php"; ?>