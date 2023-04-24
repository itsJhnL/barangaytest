<?php 
    include "connection.php";

    $query = "SELECT * FROM tblresident";
    $result = $con->query($query);
    $row = $result->fetch_assoc();
?>



<!DOCTYPE html>
<title>Certificate of Living Together</title>
<html id="clearance">
<link rel="stylesheet" href="form.css">
<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 4mm; }
</style>

<body>
    
    <div class="book">
        <div class="page">
            <div style="text-align: center">
                <div class="topleft"><img src="talavera.png"  style="width:230px; height: 230px;"/></div>
                <div class="topright"><img src="talavera.png"  style="width:230px; height: 230px;"/></div>
                <div style="font-size: 25px; margin-top: -450px;">                
                    Republic of the Philippines<br>
                    Province of Nueva Ecija<br>
                    Municipality of Talavera<br>
                    <p style="font-size: 32px;"><b>BARANGAY COLLADO</p></b>
                    <p style="font-size: 32px;">Office of the Punong Barangay</p>
                    <p style="font-size: 45px;"><b>CERTIFICATE OF LIVING TOGETHER</b><p>
                </div>
            </div>       

            <div>
                <?php
                    //   $id = $_POST['id'];
                    $sql = "SELECT * FROM tblresident where id = 5";
                    $result = $con->query($sql);
                    $row = $result->fetch_assoc();
                ?>


                 <?php 
                    $con = mysqli_connect("localhost","root","admin","barangay_system_db");

                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];

                        $query = "SELECT * FROM tblresident WHERE id='$id' ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $row)
                            {
                                ?> 
                                    <p style="font-size: 20px; margin-top: 180px;"><b>SA KINAUUKULAN:</p></b>
                                    <p class="intro">Ito ay isang pagpapatunay na sina <b>JOMAR NAVARRO at AZALEA MAGNO,</b> naninirahan sa <b>PUROK 4</b> ng Barangay Collado, Talavera, Nueva Ecija ay nagsasama na bilang mag asawa sa loob ng 19 taon.<br><br></p>
                                    <p class="intro">Ito rin ay nagpapatunay na ang mga sumusunod ay kanilang mga anak:</p></br></br>
                                    <p class="intro"><b>FAITH MARJORIE</b></p></br>
                                    <p class="intro"><b>AEZEL</b></p></br></br></br>
                                    <p class="intro">Ang pagpapatunay na ito ay iginawad kay <b>AZALEA ESCARDA MAGNO,</b> Iginawad ngayong ika- <b>7th ng February 2023</b> dito sa Tanggapan ng Punong Barangay ng Barangay Collado, Talavera, Nueva Ecija.</p></br></br>
                                <?php
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }
                    }
                    
                ?>

                
                <div>
                    <label style="padding-bottom: 10px">Nagpapatunay ni:</label>
                    <?php   
                        $qry = mysqli_query($con,"SELECT * from tblofficials");
                            while($row=mysqli_fetch_array($qry)){
                                if($row['position'] == "Barangay Secretary"){
                                echo '
                                    <p style="font-size:18px;">
                                        <b>'.strtoupper($row['lastname']).' , '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).'.<br></b>
                                        <span style="text-align: center;">BARANGAY SECRETARY</span>
                                    </p>
                                ';
                            }
                        }
                    ?>
                </div>

                
                <div style="margin-top: -102px; margin-left: 38em;">
                    <label style="padding-bottom: 10px">Inihanda ni:</label>
                    <?php   
                        $qry = mysqli_query($con,"SELECT * from tblofficials ");
                            while($row=mysqli_fetch_array($qry)){
                                if($row['position'] == "Barangay Captain"){
                                echo '
                                    <p style="font-size:18px;">
                                        <b>'.strtoupper($row['lastname']).' , '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).'.<br></b>
                                        <span style="text-align: center;">PUNONG BARANGAY</span>
                                    </p>
                                ';
                            }
                        }
                    ?>
                </div>

            </div>  
        </div>
    </div>
    <button class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#clearance')">Print</button>


</body>
   
<script>
        function PrintElem(elem)
{
    window.print();
}

function Popup(data) 
{
    var mywindow = window.open('', 'my div', 'height=400,width=600');
    //mywindow.document.write('<html><head><title>my div</title>');
    /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
    //mywindow.document.write('</head><body class="skin-black" >');
        var printButton = document.getElementById("printpagebutton");
    //Set the print button visibility to 'hidden' 
    printButton.style.visibility = 'hidden';
    mywindow.document.write(data);
    //mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10

    amywindow.print();

    printButton.style.visibility = 'visible';
    mywindow.close();

    return true;
}
</script>
</html>