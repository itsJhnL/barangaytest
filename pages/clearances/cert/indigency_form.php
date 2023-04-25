<?php 
    include "connection.php";

    $query = "SELECT * FROM tblresident";
    $result = $con->query($query);
    $row = $result->fetch_assoc();
?>



<!DOCTYPE html>
<title>Certificate of Indigency</title>
<html id="clearance">
<link rel="stylesheet" href="../css/form.css">
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
                    <p style="font-size: 45px;"><b>CERTIFICATE OF INDIGENCY</b><p>
                </div>
            </div>       

            <div>


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
                                    <p style="font-size: 20px; margin-top: 180px; "><b>SA KINAUUKULAN:</p></b>
                                    <p class="intro2">Ito ay isang patunay na si <b><?php echo $row['firstname']; ?>, <?php echo $row['middlename']; ?> <?php echo $row['lastname']; ?>. </b> ay lehitimong naninirahan sa Barangay Collado, Talavera, Nueva Ecija at mula sa pamilyang walang pirmihang hanap buhay kung kaya't kabilang sa talaan ng mahihirap na naninirahan sa barangay.<br></p>
                                    <p class="intro2">Ang pagpapatunay na ito ay ginagawad kay <b>EDITHA SABATE</b> na kanyang <b>MAGULANG</b> upang gamitin sa pagkuha ng mga serbisyong nauukol sa kanyang pangangailangan.</p></br>
                                    <p class="intro2">Iginagawad ngayong ika- <b>7th</b> ng <b>February 2023</b> dito sa <b>Tanggapan ng Punong Barangay ng Barangay Collado, Talavera, Nueva Ecija.</b></p></br></br></br></br>
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