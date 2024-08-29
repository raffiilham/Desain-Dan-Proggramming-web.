// Validasi input
function validasi() {
    var bilangan = document.getElementById("bilangan").value;
  
    if (bilangan == "") {
      alert("Bilangan tidak boleh kosong!");
      return false;
    }
  
    return true;
  }
  
  // Event submit form
  document.querySelector("form").addEventListener("submit", validasi);
  