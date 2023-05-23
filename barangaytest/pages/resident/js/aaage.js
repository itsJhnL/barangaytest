/* // Edit
function calcAge() {
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
 */

/* // Create
function calculateAge() {
// Get the birthdate input field
const birthdayInput = document.getElementById("bday");

console.log(birthdayInput);

// Get the age input field
const ageInput = document.getElementById("age");

// Calculate the age based on the birthdate
const birthdate = new Date(birthdayInput.value);
const now = new Date();
const diff = now.getTime() - birthdate.getTime();
const age = Math.floor(diff / (1000 * 60 * 60 * 24 * 365.25));

// Update the age input field
ageInput.value = age;
}
 */

// Create
$("#bday").on("input",function(){
    var bdate = $(this).val();
    var bdateformat = new Date(bdate);
    var diff_ms =  Date.now() - bdateformat.getTime();
    var age_dt = new Date(diff_ms);
    var age = Math.abs(age_dt.getUTCFullYear() - 1970);
    $("#age").val(age);
  })

// Edit
$("#birthday").on("input",function(){
    var bdate = $(this).val();
    var bdateformat = new Date(bdate);
    var diff_ms =  Date.now() - bdateformat.getTime();
    var age_dt = new Date(diff_ms);
    var age = Math.abs(age_dt.getUTCFullYear() - 1970);
    $("#editAge").val(age);
  })