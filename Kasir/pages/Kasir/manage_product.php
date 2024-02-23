<?php
session_start();
require_once('../../db/DB_connection.php');

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: /index.php');
    exit;
}

$query = "SELECT * FROM products";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/manage_product.css">
    <title>Shop</title>
    <style>


.box.form-box {
    background-color: #f9f9f9;
    padding: 20px;
    margin-bottom: 20px;
    width: 100%; /* Menjadikan box.form-box lebar 100% */
    box-sizing: border-box; /* Untuk mempertahankan padding dalam perhitungan lebar */
}

.box.form-box h1 {
    margin-bottom: 20px;
    font-size: 24px;
}

.form-container {
    margin-bottom: 20px;
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 10px; /* Mengurangi margin bottom menjadi 10px */
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

.btna {
    padding: 5px 10px;
    margin-right: 5px;
    background-color: #00ff00; /* Warna latar belakang hijau */
    color: #fff; /* Warna teks putih */
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btna:hover {
    background-color: #00cc00; /* Warna latar belakang hijau saat hover */
}

.btnb {
    padding: 5px 10px;
    margin-right: 5px;
    background-color: #ff0000; /* Warna latar belakang merah */
    color: #fff; /* Warna teks putih */
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btnb:hover {
    background-color: #cc0000; /* Warna latar belakang merah saat hover */
}

.btnc {
    padding: 5px 10px;
    margin-right: 5px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btna:hover,
.btnb:hover,
.btnc:hover {
    background-color: #0056b3;
}



    </style>
</head>

<body>
<div class="container">
<div class="box form-box">
 

       <h1>Hello, <?php echo htmlspecialchars($_SESSION['nama']); ?>! Welcome to Product Management!</h1>
    </div>
</div>

    <div class="container">
    <div class="box form-box">
    <div class="form-container">
        <form action="../../db/DB_add_product.php" method="post">
           <label for="nama_produk">Product Name:</label>
            <input type="text" name="nama_produk" required>
            <br>
            <label for="harga_produk">Product Price:</label>
            <input type="number" name="harga_produk" required>
            <br>
           <label for="jumlah">Quantity:</label>
            <input type="number" name="jumlah" required>
            <br>
            <button type="submit" name="add_product" class="btn">Add Product</button>
        </form>
    </div>


    <table>
      
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Quantity</th>
            <th>Terakhir di Update</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo htmlspecialchars($row['nama_produk']); ?></td>
                <td>Rp. <?php echo number_format($row["harga_produk"]); ?></td>
                <td><?php echo number_format($row['jumlah']); ?> pcs</td>
                <td><?php echo date('d F Y H:i:s', strtotime($row['updated_at'])); ?></td>
                <td class="action-buttons">
                    <form action="update_product.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button class="btna" class="update-button" type="submit">Update</button>
                    </form>
                    <form action="../../db/DB_delete_product.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="btnb" class="delete-button" name="delete_product" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    </form>
                    <form action="../../db/DB_procces_checkout.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="btnc" class="checkout-button" name="checkout_product">Checkout</button>
                    </form>
                </td>
            </tr>
        
        <?php endwhile; ?>
    </table>
        </div>
        </div>
        </div>
</body>
        
</html>