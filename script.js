const toggleButton = document.querySelector('.dark-light');

toggleButton.addEventListener('click', () => {
  document.body.classList.toggle('light-mode');

  //Almacenar el thema.
  if (document.body.classList.contains('light-mode')) {
    localStorage.setItem('light', 'true');
  } else {
    localStorage.setItem('light', 'false');
  }

});

//Se obtiene el thema actual, accede al valor
if (localStorage.getItem('light') === 'true') {
  document.body.classList.add('light-mode');
}else{
  document.body.classList.remove('light-mode');
}