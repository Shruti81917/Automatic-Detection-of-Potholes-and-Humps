document.addEventListener("DOMContentLoaded", function() {
  // Fetch and display pothole entries on page load
  fetchPotholeEntries();

  // Function to fetch and display pothole entries
  function fetchPotholeEntries() {
    fetch("C:\xampp\htdocs\potholeDetector\view.php")
      .then(response => response.text())
      .then(data => {
        document.getElementById("potholeEntries").innerHTML = data;
      });
  }
});
