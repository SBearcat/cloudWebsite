function logout() {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', '/logout');
  xhr.onload = function() {
    if (xhr.status === 200) {
      window.location.href = xhr.responseText;
    }
  };
  xhr.send();
}