<?php include_once ('../../connection.php'); 

include_once '../../../includes/scripts.php'?>
<body onload = "configure();">
<label><b> Preview </b></label>
    <div id="my_camera" class="border border-dark rounded">

    </div>
    <div id="result" style = "visibility: hiddenl position: absolute;">

    </div>

    <!-- <input type="hidden" name="image" id="captured_image_data">
    <input type="hidden" name="imageval" id="imageval"> -->
    <!-- <div class="mt-3 col-md-4">
    <label for="">or</label>
    <input id="image_upload" name="image" class="form-control input-sm" type="file" />
    </div> -->
    <br>
    <div class="row g-2">
    <div class="col">
        <input type="button" id="captureBtn" class="btn btn-success" value="Capture">
    </div>
    <div class="col">
        <input type=button id="takepicture1" class="btn btn-danger"  value="Reset" onClick="Webcam.reset()">
    </div>
</div>

<!-- Capture -->
<script language="JavaScript">
  // Configure a few settings and attach camera 250x187
  function configure()
  {
    Webcam.set(
    {
      width: 250,
      height: 180,
      image_format: 'jpeg',
      jpeg_quality: 90
    });	 
  }

  /* To open WebCam */
  document.getElementById('takepicture').addEventListener('click', function() {
      Webcam.attach( '#my_camera' );
  });
  document.getElementById('takepicture1').addEventListener('click', function() {
      Webcam.attach( '#my_camera' );
  });
  document.getElementById('takepicture2').addEventListener('click', function() {
      Webcam.attach( '#my_camera' );
  });

  /* To close WebCam */
  document.getElementById('closeCam').addEventListener('click', function() {
      Webcam.reset();
  });
  document.getElementById('closeCam1').addEventListener('click', function() {
      Webcam.reset();
  });
  document.getElementById('closeCam2').addEventListener('click', function() {
      Webcam.reset();
  });


  document.getElementById('captureBtn').addEventListener('click', function() {
    // take snapshot and get image data
    Webcam.snap( function(data_uri) {
    // display results in page
    document.getElementById('my_camera').innerHTML = 
    '<img id="after_capture_frame" src="'+data_uri+'"/>';
    $("#image").val(data_uri);
    $("#imageval").val(data_uri);
    });	
  });

  function saveSnap()
  {
    Webcam.snap(function(data_uri)
    {
      document.getELementById('results').innerHTML = 
      '<img id ="image" src = " "'+data_uri +'">';
    });

    Webcam.reset();

    var base64image = document.getElementById("image").src;
    Webcam.upload(base64image,'function.php',function(code, text){
      alert('Save Successfully');
      document.localtion.href = "image.php";
    })
  }

</script>

</body>
</html>