function convert() {
  var text = document.getElementById('inputMD').value,
      target = document.getElementById('outputHTML'),
      converter = new showdown.Converter(),
      html = converter.makeHtml(text);
    
    target.innerHTML = html;
}