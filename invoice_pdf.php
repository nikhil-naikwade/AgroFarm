<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Inter:wght@100;200;300;400;500;531;600;700;800;900&family=Lobster&family=Montserrat:wght@1,500;600;700&family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100;0,500;1,400;1,500&family=Roboto:ital,wght@0,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bill.css">
    <link rel="icon" href="images/AgroFarmLogo.jpg" type="image/icon type">
    <title>Invoice</title>

    <style>
        #bttn{
    background-color: rgb(255 255 255 / 50%);
    border: 1px solid rgb(0 0 0);
    border-radius: 10px;
    color: black;
    font-family: auto;
    margin-top: 15px;
}

#bttn:hover{
    background-color: rgb(202, 219, 214);
}
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>  

    <script>
$(document).ready(function () {  
    var form = $('.form'),  
    cache_width = form.width(),  
    a4 = [595.28, 841.89];

    $('#create_pdf').on('click', function () {  
        $('body').scrollTop(0);  
        createPDF();  
    });  
    
    function createPDF() {  
        getCanvas().then(function (canvas) {  
            var  
             img = canvas.toDataURL("image/png"),  
             doc = new jsPDF({  
                 unit: 'px',  
                 format: 'a4'  
             });  
            doc.addImage(img, 'JPEG', 20, 20);  
            doc.save('Bhavdip-html-to-pdf.pdf');  
            form.width(cache_width);  
        });  
    }  
      
    function getCanvas() {  
        form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');  
        return html2canvas(form, {  
            imageTimeout: 2000,  
            removeContainer: true  
        });  
    }
});
</script>

</head>

<body>
<div id="content">

 <section class="bill_details" >
        <?php
        include("dbconnection.php");

        $sql = "SELECT * FROM `bookingform` ORDER BY orderid DESC";
        $result = mysqli_query($conn,$sql);
        
        $rows=$result->fetch_assoc(); 
        ?>
<div class="invoice">
    <h2 id="headinginvoice">Invoice</h2>  #00<?php echo $rows['orderid'];?> 
</div>

<div>
  <div class="from_details">
    <p><h3> AgroFarm - An Eshoppee </h3>
                  Pune, Maharashtra <br> India. 412105.</p>  <br>
  </div>
</div>

<div class="to_details">
   <p1 id="headdetails"> Bill To :- </p1><p> <?php echo $rows['fname'];?> <?php echo $rows['lname'];?><br> <?php echo $rows['address'];?>. <br> <?php echo $rows['city'];?>,  <?php echo $rows['state'];?>. <?php echo $rows['zip'];?>.</p>
</div>

<div class="contact_details">
        <p> Email : <?php echo $rows['email'];?> <br>
            Phone Number : <?php echo $rows['phone'];?>
        </p>
</div>

<div class="invoice_det">
   <p1 id="headdetails"> Order Date :- </p1><?php echo $rows['date']  ?> <br>
   <p1 id="headdetails">Invoice Date & Time :-  </p1> <?php    
        $date = date_default_timezone_set('Asia/Kolkata');
        echo $today = date("F j, Y, g:i A");
?>


</div>
<div class="product_details">
    <table>
        <h4>Product Description :-</h4>
    <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Amount</th>
    </tr>
    <tr>
        <td><?php echo $rows['productname'];?></td>
        <td><?php echo $rows['quantity'];?></td>
        <td> 30 </td>
        <td> 300 </td>
     </tr>

    </table>
</div>

<p class="total">

    </p>
<div class="cont">
    <p>
        Your Order with above details will be Delivered to you within 2 Days. <br>
        If You have any Queries regarding your Order or Invoice please feel free to <a href="contact.php">contact us</a> 
    </p>
</div>
<div class="payment_option">
   <p1 id="headdetails"> Payment Options :- </p1>
    <p> Cash On Delivery. <br>
        UPI Handle : 9049889137@paytm <br>
        Bank Account : Acc No. 624488***18 ,  IFSC Code : KOTAKPUNE00012
    </p>
</div>
<div class="end">
    Thanks And Regards : AgroFarm - An Eshoppee <br>
    <button id="bttn"> <a href="store.php">Shop More</a></button>
    <button id="bttn"> <a href="index.php">Home Page</a></button>
    <button id="bttn"> <a href="invoice_on_email.php">Get Invoice on Email</a></button>
    <div id="editor"></div>
<button class="cmd" id="bttn">Generate PDF</button>
    
</div>
 </section>
 </div>

 <script>
    var doc = new jsPDF();
    var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};


$('.cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 185,
            'elementHandlers': specialElementHandlers
    });
    doc.save('Order Invoice.pdf');
});

</script>

</body>