const d = document,
      $menu_panel = d.querySelector('.container-header-col-2'),
      $menu = d.getElementById('menu-hamburguesa'),
      $alert_send = d.querySelector('.alert-send');
      

d.addEventListener('click', (e) => {
  if(e.target.matches('#menu-hamburguesa *') || e.target.matches('#menu-hamburguesa')) {
    $menu_panel.classList.toggle('is-active');
    $menu.classList.toggle('is-active');
  }
});

d.addEventListener('click', (e) => {
  if(e.target.matches('.container-header-col-2 nav ul li a')) {
    $menu_panel.classList.remove('is-active');
    $menu.classList.remove('is-active');
  }
});

setInterval(() => {
  $alert_send.classList.remove('block');
}, 3000);


