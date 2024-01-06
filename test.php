<td><button class="asd" onclick="openForm8('Hello from HTML!')">Log</button></td>

<script>
function openForm8(passedVariable) {
  // Assuming you have a form element with ID "myForm"
  document.getElementById("myForm").style.display = "block"; // Show the form
  document.getElementById("variableDisplay").innerHTML = passedVariable;
}
</script>

<form id="myForm" style="display: none;">
  <p>The passed variable is: <span id="variableDisplay"></span></p>
</form>