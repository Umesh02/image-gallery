function changeUploadType(type) {
  if (type === "online-file") {
    document.getElementById("online-file").style.display = "block";
    document.getElementById("local-file").style.display = "none";
  } else {
    document.getElementById("local-file").style.display = "block";
    document.getElementById("online-file").style.display = "none";
  }
}

// below code added by me to display filename in file input box
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $(".custom-file-label").html(fileName);
});
