function increment(id) {
  document.getElementById(id).stepUp();
}
function decrement(id) {
  document.getElementById(id).stepDown();
}

function hideDiv(id) {
  if (confirm("برای حذف محصول مطئمن هستید؟")) {
    document.getElementById(id).style.display = "none";
  } else {
    return;
  }
}
