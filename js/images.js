// 'use strict';
// let templateImages;
//
// fetch('js/templates/images.handlebars')
// .then(response => response.text())
// .then(template => {
//     templateImages = Handlebars.compile(template);
//
//     getImages();
//     let loop = setInterval(getComments, 2000); //real-time update
// });
//
// function getImages() {
//   let id_char = document.getElementById('idForm').value;
//     fetch("api/imagenes" + "/" + id_char)
//     .then(r => r.json())
//     .then(blob => {
//         renderImages(json);
//         console.log(json);
//     })
// }
//
// function renderImages(json) {
//     let context = {
//         images: images
//     }
//     let html = templateImages(context);
//     document.querySelector("#images").innerHTML = html;
// }
//
// function upload(){
//     const myImgInput = document.getElementById('my-img-input');
//
//     let img = myImgInput.files[0];
//
//     console.log(img);
//
//     fetch('api/imagenes/' +id_char+ '/images', {
//         method: 'POST',
//         body: img,
//     }).then(console.log);
//
// }
//
// const button = document.getElementById('img-upload');
// button.addEventListener('click', upload);
