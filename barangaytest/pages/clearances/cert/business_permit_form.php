<?php 
    include "connection.php";

    $query = "SELECT * FROM tblresident";
    $result = $con->query($query);
    $row = $result->fetch_assoc();
?>




<!DOCTYPE html>
<title>Business Permit</title>
<html id="clearance">
<link rel="stylesheet" href="../css/clearance.css">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
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
                            <p class="title" style="font-size: 45px;"><b>BUSINESS PERMIT</b><p>
                                
                            <div class="card" style="width: 23rem; border-radius: 25px;">
                                    <div class="card-body">
                                        <h4 class="card-title">BARANGAY OFFICIALS</h4>
                                        <p></p>
                                        
                                        <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "Barangay Captain"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: 40px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -15px;">PUNONG BARANGAY</p>
                                                ';
                                                }
                                            }
                                         ?>
                                         <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "Kagawad(Infrastracture)"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: 40px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -15px;">COMMITTE ON INFRASTRUCTURE</p>
                                                ';
                                                }
                                            }
                                         ?>
                                         <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "Kagawad(Public Safety)"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: 40px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -15px;">COMMITTE ON PEACE & ORDER</p>
                                                ';
                                                }
                                            }
                                         ?>
                                          <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "Kagawad(Public Safety)"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: 40px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -15px;">COMMITTE ON HEALTH</p>
                                                ';
                                                }
                                            }
                                         ?>
                                        <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "Kagawad(Public Safety)"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: 40px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -15px;">COMMITTE ON APPROPRIATION</p>
                                                ';
                                                }
                                            }
                                         ?>
                                        <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "Kagawad(Education)"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: 40px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -15px;">COMMITTE ON EDUCATION</p>
                                                ';
                                                }
                                            }
                                         ?>
                                         <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "Kagawad(Ordinance)"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: 40px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -15px;">COMMITTE IN SOCIAL SERVICE</p>
                                                ';
                                                }
                                            }
                                         ?>
                                         <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "Kagawad(Agriculture)"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: 40px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -15px;">COMMITTE ON AGRICULTURE</p>
                                                ';
                                                }
                                            }
                                         ?>
                                         <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "SK Chairman"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: 40px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -15px;">SK CHAIRPERSON/SPORTS</p>
                                                ';
                                                }
                                            }
                                         ?>
                                        <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "Secretary"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: 40px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -15px;">BARANGAY SECRETARY</p>
                                                ';
                                                }
                                            }
                                         ?>
                                         <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "Treasurer"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: 40px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -15px;">BARANGAY TREASURER</p>
                                                ';
                                                }
                                            }
                                         ?>
                                        
                                        </div>
                                </div>
                                            <div class="main">

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
                                                <p style="font-size: 20px; margin-top:-1300px; right: 49px; position: relative;"><b>Sa kinauukulan,</p></b>
                                                <p style="font-size: 20px; margin-top:-120px; right: -247px; position: relative;"><b><?php date_default_timezone_set('Asia/Tokyo'); $currentDateTime = date('F j, Y - g:i:A'); echo $currentDateTime;?></p></b>
                                                <p style="font-size: 20px; margin-top:140px;">Ito ay pinapahintulot kay <b><?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?></b> upang mabigyan ng permiso na makapagtayo at makapag simula ng kanyang hanap buhay na <b>MAIDEN STORE</b> dito sa barangay.</p></br>
                                                <p style="font-size: 20px;">Ang kanyang hanap buhay ay matatagpuan sa <b>PUROK 5 Barangay Collado, Talavera, Nueva Ecija.</b></p></br>
                                                <p style="font-size: 20px;">Ang pahintulot na ito sa kanyang hanapbuhay ay iginawad ngayong ika <b><?php date_default_timezone_set('Asia/Tokyo'); $currentDateTime = date('j'); echo $currentDateTime;?></b> ng buwan ng <b><?php date_default_timezone_set('Asia/Tokyo'); $currentDateTime = date('F'); echo $currentDateTime;?>,</b> taong <b><?php date_default_timezone_set('Asia/Tokyo'); $currentDateTime = date('Y'); echo $currentDateTime;?>.</b> Dito sa tanggapan ng punong barangay ng Barangay Collado, Talavera, Nueva Ecija.</p></br></br></br></br></br></br>
                                                <p style="font-size: 20px;  position: relative; left: -60px;">Inihanda ni:</p>
                                                <p style="font-size: 20px;  position: relative; right: -282px; margin-top:-46px;">Nagpapatunay ni:</p>
                                                    
                                    <?php
                                        }
                                            }
                                            else
                                        {
                                            echo "No Record Found";
                                                }
                                        }
                                    ?>
                                        <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "Secretary"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: 90px;  position: relative; left: -62px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -10px; position: relative; left: -62px;;">BARANGAY SECRETARY</p>
                                                ';
                                                }
                                            }
                                         ?>
                                        <?php   
                                                $qry = mysqli_query($con,"SELECT * from tblofficials");
                                                while($row=mysqli_fetch_array($qry)){
                                                if($row['position'] == "Barangay Captain"){
                                                echo '
                                                    <p style="font-size: 20px; margin-top: -82px;  position: relative; right: -280px;"><b>HON. '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).' '.strtoupper($row['lastname']).'<br></b></p>
                                                    <p style="font-size: 20px; margin-top: -10px;  position: relative; right: -280px;">PUNONG BARANGAY</p>
                                                ';
                                                }
                                            }
                                         ?>
                    
                                                    
                                            </div>                      
                                                <p style="position: fixed;  left: 0;  bottom: 0;  width: 100%;"><b>Note: Valid until December 31, 2023 unless otherwise revoke</p></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div> 
<button class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#clearance')">Print</button>


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