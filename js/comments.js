'use strict';
let templateComments;
let url = "api/comentarios";
let admin = document.getElementById('userStatus').value;
if (admin != 'guest') {
  document.querySelector("#commentForm").addEventListener("submit", submitUserForm);
}

fetch('js/templates/comments.handlebars')
.then(response => response.text())
.then(template => {
    templateComments = Handlebars.compile(template);

    getComments();
    let loop = setInterval(getComments, 2000); //real-time update
});

function getComments() {
  let id_char = document.getElementById('idForm').value;
    fetch(url + "/" + id_char + changeOrder())
    .then(r => r.json())
    .then(json => {
        renderComments(json);
    })
}

function renderComments(json) {
  let status = checkStatus(admin);
    let context = {
        comments: json,
        status: status
    }
    let html = templateComments(context);
    document.querySelector("#comments").innerHTML = html;
    if (status == true) {
      renderBtns();
    }
}
function checkStatus(admin){
  if (admin == 'admin') {
    return true;
  }
  else if (admin == 'member') {
    return false;
  }
  else {
    return false;
  }
}
function renderBtns(){
  let deleteBtns = document.querySelectorAll(".deleteBtn");
  deleteBtns.forEach(button => button.addEventListener("click", deleteComment));
}

function createJson(){
  let rating = document.getElementById('ratingForm').value;
  let content = document.getElementById('contentForm').value;
  let id_char = document.getElementById('idForm').value;
  let obj = {
    "rating": rating,
    "content": content,
    "id_char": id_char
  }
  return obj;
}

function deleteComment() {
  event.preventDefault();
  let id = this.getAttribute("name");
  fetch(url + id ,
    {
      method: "DELETE",
      mode: "cors",
      headers: { "Content-Type": "application/json" }
    })
    .then(r => getComments());
}

function addComment(){
  event.preventDefault();
  let obj = createJson();
  fetch(url ,
      {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(obj)
      })
      .then(r => getComments());
}

function submitUserForm() {
    let response = grecaptcha.getResponse();
    if (checkStatus(admin)==true) {
      //Admin skips captcha
    }
    else {
      if(response.length == 0) {
          document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">Captcha requerido.</span>';
          return false;
        }
      }
    addComment();
    return true;
}

function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = 'Verificado';
}
function changeOrder(){
  let order = document.getElementById('order').value;
  switch (order) {
    case "ASC":
      return order = "?order=ASC";
      break;
    case "DESC":
      return order = "?order=DESC";
      break;
    default:
      return order = "";
      break;
    }
}
