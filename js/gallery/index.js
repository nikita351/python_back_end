let btnNext = document.querySelector('#gallery .btn .nxt');
let btnBack = document.querySelector('#gallery .btn .bck');
let images = document.querySelectorAll('#gallery .photos img');
let i = 0;

btnNext.onclick = function() {
    images[i].style.display = 'none';
    i++;

    if (i >= images.length) {
        i = 0;
    }

    images[i].style.display = 'block';
}

btnBack.onclick = function() {
    images[i].style.display = 'none';
    i--;

    if (i < 0) {
        i = images.length - 1;
    }

    images[i].style.display = 'block';
}