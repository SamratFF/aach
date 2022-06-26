
// It will make the input field text color white
function inputColorWhite() {
     let userInput = document.querySelectorAll('.userInput');

     userInput.forEach(element => {
          element.style.color = 'white';
          element.style.fontSize = '16px';
     });
}
inputColorWhite();

// Input Color White Ends Here



// Error show

function showError() {
     let ID_inputPlace_name = document.getElementById('ID_inputPlace_name');
     let ID_inputPlace_username = document.getElementById('ID_inputPlace_username');
     let ID_inputPlace_age = document.getElementById('ID_inputPlace_age');
     let ID_inputPlace_email = document.getElementById('ID_inputPlace_email');
     let ID_inputPlace_password = document.getElementById('ID_inputPlace_password');
     let ID_inputPlace_confirmPassword = document.getElementById('ID_inputPlace_confirmPassword');
     let ID_inputPlace_country = document.getElementById('ID_inputPlace_country');
     let ID_inputPlace_phone = document.getElementById('ID_inputPlace_phone');

     let errorInputID_name = document.getElementById('errorInputID_name');
     let errorInputID_username = document.getElementById('errorInputID_username');
     let errorInputID_username2 = document.getElementById('errorInputID_username2');
     let errorInputID_age = document.getElementById('errorInputID_age');
     let errorInputID_email = document.getElementById('errorInputID_email');
     let errorInputID_password = document.getElementById('errorInputID_password');
     let errorInputID_password2 = document.getElementById('errorInputID_password2');
     let errorInputID_confirmPassword = document.getElementById('errorInputID_confirmPassword');
     let errorInputID_country = document.getElementById('errorInputID_country');
     let errorInputID_phone = document.getElementById('errorInputID_phone');



     let ID_inputPlace_ARRAY = [ID_inputPlace_name, ID_inputPlace_username, ID_inputPlace_age, ID_inputPlace_email, ID_inputPlace_password, ID_inputPlace_confirmPassword, ID_inputPlace_country, ID_inputPlace_phone];

     let errorInputID_ARRAY = [errorInputID_name, errorInputID_username, errorInputID_age, errorInputID_email, errorInputID_password, errorInputID_confirmPassword, errorInputID_country, errorInputID_phone];


     ID_inputPlace_username.addEventListener('keyup', () => {
          // Username Error
          if (ID_inputPlace_username.value.includes(' ')) {
               errorInputID_username.style.display = 'block';
          }
          else {
               errorInputID_username.style.display = 'none';
          }
     });

     ID_inputPlace_username.addEventListener('keyup', () => {
          // Username length Error
          if (String(ID_inputPlace_username.value).length < 5) {
               errorInputID_username2.style.display = 'block';
          }
          else {
               errorInputID_username2.style.display = 'none';
          }
     });

     ID_inputPlace_age.addEventListener('keyup', () => {
          // Age Error
          if ((ID_inputPlace_age.value) < 6 || (ID_inputPlace_age.value) > 99) {
               errorInputID_age.style.display = 'block';
          }
          else {
               errorInputID_age.style.display = 'none';
          }
     });

     ID_inputPlace_password.addEventListener('keyup', () => {
          // Password length Error
          if (String(ID_inputPlace_password.value).length < 5) {
               errorInputID_password2.style.display = 'block';
          }
          else {
               errorInputID_password2.style.display = 'none';
          }
     });

     ID_inputPlace_phone.addEventListener('keyup', () => {
          // Phone Error
          if (String(ID_inputPlace_phone.value).length > 10 || String(ID_inputPlace_phone.value).length < 10) {
               errorInputID_phone.style.display = 'block';
          }
          else {
               errorInputID_phone.style.display = 'none';
          }
     });
}

showError();
// Error show ends here