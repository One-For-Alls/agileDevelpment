const d = document;
$('#container-main').load('pages/principal.html');
d.addEventListener('click', (e) => {
  
  e.preventDefault();
  let url = e.target;

  if(url.matches('#home')){
    $('#container-main').load('pages/principal.html');
  }else if(url.matches('#services')){
    $('#container-main').load('pages/services.html');
  }
  
})