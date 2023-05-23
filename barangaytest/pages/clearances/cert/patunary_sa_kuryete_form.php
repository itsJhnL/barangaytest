<?php 
    include "connection.php";

    $query = "SELECT * FROM tblresident";
    $result = $con->query($query);
    $row = $result->fetch_assoc();
?>



<!DOCTYPE html>
<title>Certificate of Patunay sa Kuryente</title>
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
            <div style="text-align: center">
            <div class="topleft">
                <?php 

                    $query = mysqli_query($con, "SELECT image,certL,certR FROM dashboard");
                        {
                            while($row = mysqli_fetch_array($query))
                            echo'
                            <image src="../../settings/img/'.basename($row['certL']).'" style="width:230px; height: 230px; border-radius: 50%">';

                        }
                ?>
            </div>
            <div class="topright">
                <?php 

                    $query = mysqli_query($con, "SELECT image,certL,certR FROM dashboard");
                        {
                            while($row = mysqli_fetch_array($query))
                            echo'
                            <image src="../../settings/img/'.basename($row['certR']).'" style="width:230px; height: 230px; border-radius: 50%">';

                        }
                ?></div>
                <div style="font-size: 25px; margin-top: -450px;">                
                    Republic of the Philippines<br>
                    Province of Nueva Ecija<br>
                    Municipality of Talavera<br>
                    <p style="font-size: 32px;"><b>BARANGAY COLLADO</p></b>
                    <p style="font-size: 32px;">Office of the Punong Barangay</p>
                    <p style="font-size: 45px;"><b>PATUNAY SA KURYENTE</b><p>
                    <p style="font-size: 20px; margin-top: 50px; right: -320px; position: relative;"><b><?php date_default_timezone_set('Asia/Tokyo'); $currentDateTime = date('F j, Y - g:i:A'); echo $currentDateTime;?></p></b>
                    
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
                                    <p style="font-size: 20px; margin-top: 120px;"><b>SA KINAUUKULAN:</p></b>
                                    <p class="intro"><b>ITO AY ISANG PAGPAPATUNAY</b> na ang linya ng kuryente na nasa pangalan ni <b><?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?>. <?php echo $row['lastname'];?></b> na ang Account Number ay 98765 ay ginagamit sa kasalukuyan ni <b><?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?>. <?php echo $row['lastname'];?></b> naninirahan sa <b>PUROK 4</b> ng Barangay Collado, Talavera, Nueva Ecija.<br></p>
                                    <p class="intro">Ang pagpapatunay na ito ay ginagawad kay <b><?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?>. <?php echo $row['lastname'];?></b> upang maging batayan at gamitin sa pagkuha ng kaukulang serbisyo na kanyang kinakailangan.</p></br>
                                    <p class="intro">Iginagawad ngayong ika- <b><?php date_default_timezone_set('Asia/Tokyo'); $currentDateTime = date('j'); echo $currentDateTime;?> ng <?php date_default_timezone_set('Asia/Tokyo'); $currentDateTime = date('F Y'); echo $currentDateTime;?></b> dito sa Tanggapan ng Punong Barangay ng Barangay Collado, Talavera, Nueva Ecija.</p></br></br></br></br>

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
                    <label style="padding-bottom: 10px">Prepared by:</label>
                    <?php   
                        $qry = mysqli_query($con,"SELECT * from tblofficials");
                            while($row=mysqli_fetch_array($qry)){
                                if($row['position'] == "Secretary"){
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
                    <label style="padding-bottom: 10px">Certified by:</label>
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