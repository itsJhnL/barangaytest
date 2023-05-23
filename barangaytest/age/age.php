<div class="col-md-4 mb-3">
<label><b>Birthdate</b></label>
<input type="date" class="form-control"  id="birthday" name="birthdate" onchange="calculateMyAge()" >
</div>
<div class="col-md-2 mb-3">
<label><b>Age</b></label>
<input type="text" class="form-control" id="editAge" name="age" readonly>
</div>


<script>
    // Edit
    function calculateMyAge() {
        // Get the birthdate input field
        let MybirthdayInput = document.getElementById("birthday");

        // Get the age input field
        let MyageInput = document.getElementById("editAge");

        console.log(MybirthdayInput.value);

        // Calculate the age based on the birthdate
        let Mybirthdate = new Date(MybirthdayInput.value);
        let Mynow = new Date();
        let Mydiff = Mynow.getTime() - Mybirthdate.getTime();
        let Myage = Math.floor(Mydiff / (1000 * 60 * 60 * 24 * 365.25));

        // Update the age input field
        MyageInput.value = Myage;
        }
</script>