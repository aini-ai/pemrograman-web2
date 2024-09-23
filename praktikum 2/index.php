<?php
include "orang.php";
include "BankCustomer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hl>Hello Praktikum 2</hl>
    <div class="div">
        <?php
           $nasabah = new BankCustomer();
           $nasabah->setCustomerName('Khurul ngaini');
           $nasabah->setAddress('Mendalo, Muara Jambi');
           $nasabah->setEmail('khurulngainiiklima@gmail.com');
           $nasabah->setCard('Platinum');
           $nasabah->setAcc('Wadiah');

           $nasabah->insertcard();
           $nasabah->enterPIN(123456);
            
        ?>
    </div>
</body>
</html>
<!-- localhost/index.php?nama=Khurul -->
<!--https:uinjambi.ac.id/berita?page=1&search=kuliah&orderBy=id-->