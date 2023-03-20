<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inputcustomers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Input Data</title>
</head>
<body>
    <h1>Silakan Masukkan Data</h1>
    <table>
        <form method="post" action="insertcustomers.php">
            <tr>
                <td><label for="customerNumber">customers Number</label></td>
                <td><input type="text" name="customerNumber" id="customerNumber" placeholder="Ex:123"><br></td>
            </tr>
        
            <tr>
                <td><label for="customerName">customers Name</label></td>
                <td><input type="text" name="customerName" id="customerName"><br></td>
            </tr>
        
            <tr>
                <td><label for="contactLastName">contact Last Name</label></td>
                <td><input type="text" name="contactLastName" id="contactLastName"><br></td>
            </tr>
        
            <tr>
                <td><label for="contactFirstName">contact First Name</label></td>
                <td><input type="text" name="contactFirstName" id="contactFirstName"><br></td>
            </tr>

            <tr>
                <td><label for="phone">Phone</label></td>
                <td><input type="text" name="phone" id="phone"><br></td>
            </tr>

            <tr>
                <td><label for="addressLine1">Address Line 1</label></td>
                <td><input type="text" name="addressLine1" id="addressLine1"><br></td>
            </tr>

            <tr>
                <td><label for="addressLine2">Address Line 2</label></td>
                <td><input type="text" name="addressLine2" id="addressLine2"><br></td>
            </tr>   

            <tr>
                <td><label for="city">City</label></td>
                <td><input type="text" name="city" id="city"><br></td>
            </tr>  

            <tr>
                <td><label for="state">State</label></td>
                <td><input type="text" name="state" id="state"><br></td>
            </tr> 

            <tr>
                <td><label for="postalCode">Postal Code</label></td>
                <td><input type="text" name="postalCode" id="postalCode"><br></td>
            </tr>

            <tr>
                <td><label for="country">Country</label></td>
                <td><input type="text" name="country" id="country"><br></td>
            </tr>
        
            <tr>
                <td><label for="salesRepEmployeeNumber">SalesRepEmployeeNumber</label></td>
                <td><input type="text" name="salesRepEmployeeNumber" id="salesRepEmployeeNumber"><br></td>
            </tr>
        
            <tr>
                <td><label for="creditLimit">Credit Limit</label></td>
                <td><input type="text" name="creditLimit" id="creditLimit"><br></td>
            </tr>

    </table>
    <div class=button>
        <?php
            if(isset($_GET['ubah'])){
        ?>
            <button name="aksi" type="submit" value="Simpan" class="biru">
                <i class="fa-regular fa-floppy-disk"></i>
                Simpan Perubahan
            </button>
        <?php
            } else {
        ?>
            <button name="aksi" type="submit" value="Tambahkan" class="biru">
                <i class="fa-regular fa-floppy-disk"></i>
                Tambahkan
            </button>
        <?php
            }
        ?>
        <a href="Customers.php" type="button" class="merah">
            <i class="fa-solid fa-reply"></i>
            Kembali
        </a>
        </form>
    </div>
</body>
</html>