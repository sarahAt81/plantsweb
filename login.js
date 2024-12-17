
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();


    const loginSuccess = true;

    if (loginSuccess) {

      window.location.href = "homefinal.html";
    } else {

      alert('Login failed. Please try again.');
    }
  });