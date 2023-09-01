const slider = document.getElementById('slider');
const loginForm = document.getElementById('login-form');
const registerForm = document.getElementById('register-form');

slider.addEventListener('input', () => {
  if (slider.value === '0') {
    loginForm.style.display = 'block';
    registerForm.style.display = 'none';
  } else {
    loginForm.style.display = 'none';
    registerForm.style.display = 'block';
  }
});

loginForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const email = document.getElementById('login-email').value;
  const password = document.getElementById('login-password').value;
  // Aquí realizarías la lógica de autenticación
  console.log('Iniciar sesión:', email, password);
});

registerForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const ci = document.getElementById('register-ci').value;
  const nombre = document.getElementById('register-nombre').value;
  const apellido = document.getElementById('register-apellido').value;
  const email = document.getElementById('register-email').value;
  const password = document.getElementById('register-password').value;
  const tel = document.getElementById('register-tel').value;
  // Aquí realizarías la lógica de registro
  console.log('Registrarse:', ci, nombre, apellido, email, password, tel);
});
