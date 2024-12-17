document.getElementById('registrationForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch('register.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {

      window.location.href = "homefinal.html";
    } else {
      alert('Registration failed. Please try again.');
    }
  })
  .catch(error => console.error(error));
});