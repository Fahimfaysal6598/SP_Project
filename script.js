function validateForm() {
    let x = document.getElementById["form"]["username"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }