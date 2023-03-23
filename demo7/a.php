<?php
require_once __DIR__ . '/inc/functions.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<main>

    

      
<div id="top" class="wrapper">


    <form method="post" action="a.php">
  <p>オプションを選択 <span class="req">※</span></p>
  <select name="op">
    <option value="---">---</option>
    <option value="Option A">価格が高い順</option>
    <option value="Option B">価格が低い順</option>
    
  </select>
  <input type="submit" value="送信">
</form>


<?php
$op = $_POST["op"];
if ($op === '---') {
  echo 'オプションが選択されていません。<br>';
} else if($op === 'Option A') {
    

    try {
        $dbh = db_open();
        $sql = 'SELECT * FROM chair ORDER BY price DESC';
        $statement = $dbh->query($sql);
    ?> <div class="main">
        <?php while ($row = $statement->fetch()): ?>
            
      <div class="chair">   
  <img src="<?php echo $row['image'] ?>" alt="">
  <p><?php echo $row['products_name'] ?></p>
  <p><?php echo $row['price'] ?></p>
      </div>
        
  <?php endwhile; ?>        
  </div>
       
    <?php
    } catch (PDOException $e) {
        echo "エラー!: " . $e->getMessage();
        exit;
    }
}else{
   
}
    ?>

<a class="link-text" href="products.html">View More</a>
      </div>
    </main>

</body>
</html>