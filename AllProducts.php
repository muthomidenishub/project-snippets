    <?php 
     require_once 'E:\Xampp\htdocs\mdboot\database.php';
     require_once 'E:\Xampp\htdocs\mdboot\product.php';
     require_once 'E:\Xampp\htdocs\mdboot\category.php';
 
    //by default is one
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    
    // set number of records per page
    $records_per_page = 10;
    
    // calculate for the query LIMIT clause
    $from_record_num = ($records_per_page * $page) - $records_per_page;
    // set page header
    $page_title = "Read Products";
    //set the db connection
    $database = new Database();
    $db = $database->getConnection();
    //create products and categories
    $product = new Product($db);
    $category = new Category($db);
    //get the products 
    $stmt = $product->readAll($from_record_num,$records_per_page);
    $num = $stmt->rowCount();
   
    require_once 'E:\Xampp\htdocs\mdboot\layout_header.php';
    
    // contents will be here
    echo "<div class='right-button-margin' style=
    border-bottom-width: 0px;
    margin-bottom:10px '>
    ";
        echo "<a href='create_product.php'
         class='btn btn-success pull-right style=''>Create Product</a>";
    echo "</div>";
    // display the products if there are any
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered style:margin-top:10%'>";
        echo "<tr>";
            echo "<th>Product</th>";
            echo "<th>Price</th>";
            echo "<th>Description</th>";
            echo "<th>Category</th>";
            echo "<th>Actions</th>";
        echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 
            extract($row);
 
            echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td>{$price}</td>";
                echo "<td>{$description}</td>";
                echo "<td>";
                    $category->id = $category_id;
                    $category->readName();
                    echo $category->name;
                echo "</td>";
 
                echo "<td>";
                  // read product button
echo "<a href='read_one.php?id={$id}' class='btn btn-primary left-margin'>";
echo "<span class='glyphicon glyphicon-list'></span> Read";
echo "</a>";

// edit product button
echo "<a href='update_product.php?id={$id}' class='btn btn-info left-margin'>";
echo "<span class='glyphicon glyphicon-edit'></span> Edit";
echo "</a>";

// delete product button
echo "<a delete-id='{$id}' class='btn btn-danger delete-object'>";
echo "<span class='glyphicon glyphicon-remove'></span> Delete";
echo "</a>";
                echo "</td>";
 
            echo "</tr>";
 
        }
 
    echo "</table>";
 
    // the page where this paging is used
$page_url = "index.php?";
 
// count all products in the database to calculate total pages
$total_rows = $product->countAll();
 
// paging buttons here
require_once 'E:\Xampp\htdocs\mdboot\pagination.php';
}
 
// tell the user there are no products
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}
    
    // set page footer

    require_once 'E:\Xampp\htdocs\mdboot\footer.php';

    ?>