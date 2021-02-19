<!DOCTYPE html>

<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'restaurant');

if( $connection == false)
{
  echo 'Не вдалось підключитись до бази даних!<br>';
  echo mysqli_connect_error();
  exit();
} else{
  echo "CONNECTION SUCCESS";
}

  $products = mysqli_query($connection, "SELECT * FROM `products`"); //дістаємо продукти із БД

while( $product = mysqli_fetch_assoc($products))
{

?>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/<?php echo $product['picture'] ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $product['name'] ?></a>
                </h4>
                <h5><?php echo $product['price'] ?> грн</h5>
                <p class="card-text"><?php echo $product['description'] ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>


<?php 
}
?>