<!DOCTYPE html>
<title>Barangay Clearance</title>
<html id="clearance">
<link rel="stylesheet" href="../css/brgy.css">
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
                <div class="topleft"><img src="talavera.png"  style="width:230px; height: 230px;"/></div>
                    <div class="topright"><img src="talavera.png"  style="width:230px; height: 230px;"/></div>
                        <div style="font-size: 25px; margin-top: -465px;">                  
                            Republic of the Philippines<br>
                            Province of Nueva Ecija<br>
                            Municipality of Talavera<br>
                            <p style="font-size: 32px;"><b>BARANGAY COLLADO</p></b>
                            <p style="font-size: 32px;">Office of the Punong Barangay</p>
                            <p class="title" style="font-size: 45px;"><b>BARANGAY CLEARANCE</b><p>
                                
                                <div class="card" style="width: 23rem; border-radius: 25px;">
                                    <div class="card-body">
                                        <h4 class="card-title">BARANGAY OFFICIALS</h4>
                                        <p></p>
                                        <p style="font-size: 20px; margin-top: 5px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -22px;">PUNONG BARANGAY</p>
                                        <p style="font-size: 20px; margin-top: 5px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -22px;">COMMITTE ON INFRASTRUCTURE</p>
                                        <p style="font-size: 20px; margin-top: 5px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -22px;">COMMITTE ON PEACE & ORDER</p>
                                        <p style="font-size: 20px; margin-top: 5px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -22px;">COMMITTE ON HEALTH</p>
                                        <p style="font-size: 20px; margin-top: 5px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -22px;">COMMITTE ON APPROPRIATION</p>
                                        <p style="font-size: 20px; margin-top: 5px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -22px;">COMMITTE ON EDUCATION</p>
                                        <p style="font-size: 20px; margin-top: 5px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -22px;">COMMITTE IN SOCIAL SERVICE</p>
                                        <p style="font-size: 20px; margin-top: 5px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -22px;">COMMITTE ON AGRICULTURE</p>
                                        <p style="font-size: 20px; margin-top: 5px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top:-22px;">SK CHAIRPERSON/SPORTS</p>
                                        <p style="font-size: 20px; margin-top: 5px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top:-22px;">BARANGAY SECRETARY</p>
                                        <p style="font-size: 20px; margin-top: 5px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top:-22px;">BARANGAY SECRETARY</p></br></br>
                                    </div>
                                </div>
                        
                        </div>

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
                                            <div class="main">
                                                <p style="font-size: 20px; margin-top:-1035px; right: 49px; position: relative;"><b>TO WHOM IT MAY CONCERN:</p></b>
                                                <p style="font-size: 20px; margin-top:-70px; right: -247px; position: relative;"><b><?php date_default_timezone_set('Asia/Tokyo'); $currentDateTime = date('F j, Y - g:i:A'); echo $currentDateTime;?></p></b>
                                                <p style="font-size: 20px; margin-top:60px;">This is to certify that <b>Mr. <?php echo $row['lastname']; ?>, <?php echo $row['firstname']; ?> <?php echo $row['middlename'];?>,</b> of legal age, born on <b><?php echo $row['birthdate']; ?>, <?php echo $row['civilStatus'];?>,</b> and a Filipino Citezen, whose signature & thumbark appears below, is a resident of this barangay with address at <b>PUROK <?php echo $row['purok'];?> Barangay <?php echo $row['barangay'];?>, <?php echo $row['city'];?>, <?php echo $row['province'];?>.</b></p></br>
                                                <p style="font-size: 20px;">This certifies further that the above-mentioned name has no derogatory record in our barangay files to date.</b></p></br>
                                                <p style="font-size: 20px;">Issued upon the request of the above-mentioned name on this <b><?php date_default_timezone_set('Asia/Tokyo'); $currentDateTime = date('F j, Y'); echo $currentDateTime;?></b><!-- <b>7th</b> day of <b>February</b> Year <b>2023</b> --> for <b>ANY LEGAL PURPOSES.</b></p></br>
                                                <p style="font-size: 20px; text-align: center;"><b>PERSONAL DETAILS</b></p>
                                                <p style="font-size: 20px; right: 55px; position: relative;" >Name: <b><?php echo $row['lastname']; ?>, <?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?>.</b></p> 
                                                <p style="font-size: 20px; margin-top:-20px; right: 55px; position: relative;">Address: <b>PUROK <?php echo $row['purok'];?> <?php echo $row['barangay'];?>, <?php echo $row['city'];?>.</b></p>    
                                                <p style="font-size: 20px; margin-top:-20px; right: 55px; position: relative;">Civil status: <b><?php echo $row['civilStatus']; ?></b>  Sex: <b><?php echo $row['gender']; ?></b></p>
                                                <p style="font-size: 20px; margin-top:-20px; right: 55px; position: relative;">Place of Birth: <b><?php echo $row['city']; ?><?php echo $row['province']; ?></b></p>
                                                <p style="font-size: 20px; margin-top:-20px; right: 55px; position: relative;">Height: <b><?php echo $row['height']; ?> cm</b>  Weight: <b><?php echo $row['weight']; ?> KG</b></p>
                                                <p style="font-size: 20px; margin-top:-20px; right: 55px; position: relative;">Citizenship: <b><?php echo $row['nationality']; ?></b></p>
                                                <hr style="width:50%; margin-top:-20px; left: 300px; position: relative;"><p style="font-size: 20px; left: 300px; position: relative; margin-top:-15px;">Applicant's Signature</p>
                                            </div>
                                            <label style="padding-top: 63px;margin-left: -827px;">Certified by:</label>
                                            <label style="padding-bottom: -32px;margin: -382px;">Prepared by:</label>
                                            <div>
                                            
                                            <div>
                                                
                                                <?php   
                                                    $qry = mysqli_query($con,"SELECT * from tblofficials WHERE status='Active' ");
                                                        while($row=mysqli_fetch_array($qry)){
                                                            if($row['position'] == "Secretary"){
                                                            echo '
                                                                <p style="font-size: 18px; margin-top: 50px">
                                                                    <b>'.strtoupper($row['lastname']).', '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).'.<br></b>
                                                                    <span style="text-align: center;">BARANGAY SECRETARY</span>
                                                                </p>
                                                            ';
                                                        }
                                                    }
                                                ?>
                                            </div>
                                            
                                            <div style="margin-top: -156px; margin-left: 38em;">
                                                
                                                <?php   
                                                    $qry = mysqli_query($con,"SELECT * from tblofficials WHERE status='Active'  ");
                                                        while($row=mysqli_fetch_array($qry)){
                                                            if($row['position'] == "Barangay Captain"){
                                                            echo '
                                                                <p style="font-size: 18px; margin-top: 100px">
                                                                    <b>'.strtoupper($row['lastname']).', '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).'.<br></b>
                                                                    <span style="text-align: center;">PUNONG BARANGAY</span>
                                                                </p>
                                                            ';
                                                        }
                                                        
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    
                                }
                                else
                                {
                                    echo "No Record Found";
                                }
                            }
                            
                        ?>
                            <div style="width: 140px; height: 140px; padding: 10px; border: 5px solid blue; margin-top:-65px; left: 30px; position: relative;"><p style="font-size: 20px;"><b>LEFT</b></p></div>  
                            <div style="width: 140px; height: 140px; padding: 10px; border: 5px solid blue; margin-top:-140px; left: 200px; position: relative;"><p style="font-size: 20px;"><b>RIGHT</b></p></div></div>
                            





                                                
                                                
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

