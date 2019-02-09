<?php
    session_start();
    include 'conn/conn.php';


    if(isset($_POST["addToCart"])){

        //$_SESSION["shoppingCart"];

        //creating a session and checking if it has some data   
        if(isset($_SESSION["shoppingCart"])){
            //getting the data column
            $item_array_id = array_column($_SESSION["shoppingCart"], "item_id");
            if(!in_array($_GET["ProductID"], $item_array_id)){
                //count the number of elements in the cart and store in the $count variables
                $count = count($_SESSION["shoppingCart"]);
                $item_list_array  = array(
                    'item_id' => $_GET["ProductID"],
                    'item_name' => $_POST["hiddenName"],
                    'item_price' => $_POST["hiddenPrice"],
                    'item_quantity' => $_POST["quantity"]
                );
                //storing the item into the cart
                $_SESSION["shoppingCart"][$count] = $item_list_array;
            }else{
                //print error message a match if found
                echo '<script>alert("This Item has already been added")</script>';
                echo '<script>window.location="index.php"</script>';
            }

        }
        else{
            $item_list_array  = array(
                'item_id'       => $_GET["ProductID"],
                'item_name'     => $_POST["hiddenName"],
                'item_price'    => $_POST["hiddenPrice"],
                'item_quantity' => $_POST["quantity"]
            );
            //storing these data to the session shopping cart variable
            $_SESSION["shoppingCart"][0] = $item_list_array;
        }
    }


    //getting the action
    if(isset($_GET["action"])){
        //check if the action was a delete request
        if($_GET["action"] ==  "delete"){
            $_SESSION['shoppingCart'];
            //looping throught the data
            foreach($_SESSION["shoppingCart"] as $keys => $values){
                if($values['item_id'] == $_GET["ProductID"]){
                    //destroying the data
                    unset($_SESSION["shoppingCart"][$keys]);
                    echo '<script>alert("item removed from cart")</script>';
                    header('Location: index.php');
                }
            }

        }

    }

?>

<html lang="en">
<head>
    <!-- requiring the headlinks -->
    <?php require 'includes/templates/headlinks.php'; ?>
    
    <title>Homepage</title>
</head>
<body>
    <!-- requiring the header-->
    <?php require 'includes/templates/header.php'; ?>


    <!-- slider -->
    <section class="slider">
        <ul class="slides">
            <li>
                <img src="public_files/images/sliderImg/new.jpg" alt="">
                <div class="caption center-align">
                    <h3>Get Brand New Products</h3>
                    <h5 class="grey-text text-lighten-3 hide-on-small-only">
                        From the manufacturing factory to the store. You will be the first to use any product you buy!
                    </h5>
                </div>
            </li>
            <li>
                <img src="public_files/images/sliderImg/any-device.jpg" alt="">
                <div class="caption right-align">
                    <h3>Shop With Any Device</h3>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">
                        Accessibility is our objective.<br>
                        You can access our platform on any device!
                    </h5>
                </div>
            </li>
            <li>
                <img src="public_files/images/sliderImg/ecommerce.jpg" alt="">
                <div class="caption right-align">
                    <h3>Instant Delivery</h3>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">
                        We take no delay in forwarding your goods<br>
                        as soon as your payment has been processed!
                    </h5>
                </div>
            </li>
        </ul>
    </section>
    <!-- search-box -->
    <section class="section section-search blue darken-1 white-text center">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h3>Search for products</h3>
                    <div class="input-field">
                        <input type="text" class="white grey-text autocomplete" placeholder="Search by name for a product" id="autocomplete-input">
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <section class="section section-showcase center">
        <div class="row">
            <!-- categories -->
            <div class="col s12 m2 categories">
                <section class="section-categories">
                    <h5>Categories</h5>
                    <ul>
                        <li>
                            <a href="#">Sportware</a>
                        </li>
                        <li>
                            <a href="#">Electronics</a>
                        </li>
                        <li>
                            <a href="#">Cellphone & Accessories</a>
                        </li>
                        <li>
                            <a href="#">Bags</a>
                        </li>
                        <li>
                            <a href="#">Shoes</a>
                        </li>
                    </ul>
                </section>
                <!-- brands -->
                <section class="section-categories">
                    <h5>Brands</h5>
                    <ul>
                        <li>
                            <a href="#">Adidas</a>
                        </li>
                        <li>
                            <a href="#">Jordan</a>
                        </li>
                        <li>
                            <a href="#">Nike</a>
                        </li>
                        <li>
                            <a href="#">Vans</a>
                        </li>
                        <li>
                            <a href="#">Yeezy Boost</a>
                        </li>
                    </ul>
                </section>
            </div>
            <!-- trending -->
            <h4 id="trending-title">Trending</h4>
            <div class="col s12 m9">
                <!-- first set -->
                <?php 
                    $query = "SELECT * FROM ProductsTBL ORDER BY ProductID ASC";

                    $result = $conn->query($query);
                    //check if their is match
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result))
                        {
                ?>
                    <div class="col s12 m3 products">
                        <div class="row">
                            <div class="card">
                                <form method="POST" action="index.php?action=add&ProductID=<?php echo $row["ProductID"]; ?>">
                                    <div class="card-image center">
                                        <img src="<?php echo "data:image/jpeg;base64,". base64_encode($row["Image"]); ?>">
                                    </div>
                                    <div class="product-details">
                                        <h5 class="center"><a href="includes/contents/first_pair.php" class="black-text">
                                                <?php echo $row["Name"]; ?>
                                            </a>
                                        </h5> 
                                        <h3 class="center orange-text"><?php echo $row["Price"]; ?></h3>
                                        
                                        <input type="text" name="quantity" value="1">
                                        <input type="hidden" name="hiddenName" value="<?php echo $row["Name"]; ?>">
                                        <input type="hidden" name="hiddenPrice" value="<?php echo $row["Price"]; ?>">
                                        <input type="submit" name="addToCart" style="margin-bottom: 5px;" class="btn btn-small blue white-text push-m2" value="add to cart">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
                        }
                    }
                ?> 
            </div> <!-- end of the trendin column -->
        </div> <!-- end of main row -->
    </section>

    <table>
        <tr>
            <th width="40%">Item Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
        </tr>
        <?php 

            
            //check if cart is not empty
            if(!empty($_SESSION["shoppingCart"])){
                //store the total of item price
                $total = 0;

                foreach($_SESSION["shoppingCart"] as $keys => $values){
    
        ?>
        <tr>
                <td><?php echo $values['item_name']; ?></td>
                <td><?php echo $values['item_quantity']; ?></td>
                <td>$ <?php echo $values['item_price']; ?></td>
                <td>$ <?php echo number_format($values['item_quantity'] * $values['item_price'], 2); ?></td>
                <td><a href="index.php?action=delete&ProductID=<?php echo $values['item_id']; ?>">
                    <span class="red-text">Remove</span>
                </a></td>
        </tr>
        <?php
                    //getting the total price of a product
                    $total = $total + ($values['item_quantity'] * $values['item_price']);
                }
        ?>
            <tr>
                <!-- <td class="right">Total</td> -->
                <td class="right">Total $ <?php echo number_format($total, 2); ?></td>
            </tr>
        <?php
            }
            else{
                echo '<h5>The cart is empty!</h5>';
            }
        ?>
    </table>
    <br>
    <br>
    
    <!-- requiring the footer-->
    <?php require 'includes/templates/footer.php'; ?>
</body>

    <!-- requiring the jsscripts-->
    <?php require 'includes/templates/jsscripts.php'; ?>
</html>