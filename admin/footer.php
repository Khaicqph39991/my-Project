<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showClock() {
  var date = new Date();
  var h = date.getHours();
  var m = date.getMinutes();
  var s = date.getSeconds();
  var day = date.getDay();
  var month = date.getMonth()+1;
  var dt = date.getDate();

  h = (h < 10) ? "0" + h : h;
  m = (m < 10) ? "0" + m : m; 
  s = (s < 10) ? "0" + s : s;

  var dayNames = ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu","Thứ bảy"];

  var currentTime = dayNames[day] + ", " + dt + "/" + month + "/" + date.getFullYear() + " - " + h + " Giờ " + m + " phút " + s + " giây";

  document.getElementById("clock").innerHTML = currentTime;
}

setInterval(showClock, 1000);
</script>
</body>
</html>