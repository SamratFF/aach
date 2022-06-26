// let feild = document.querySelector('textarea');
let feild = document.getElementById('commentInput');
let backUp = feild.getAttribute('placeholder');
let btn1 = document.querySelector('.btn1');
let clear = document.getElementById('clear');


feild.onfocus = function () {
    this.setAttribute('placeholder', '');
    this.style.borderColor = '#aaa';
    btn1.style.display = 'block';
}

feild.onblur = function () {
    this.setAttribute('placeholder', backUp);
    this.style.borderColor = "#aaa";
}
clear.onclick = function () {
    btn.style.display = 'none';
    feild.value = '';
}