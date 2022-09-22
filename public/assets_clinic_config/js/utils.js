// Arguments :
//  verb : 'GET'|'POST'
//  target : an optional opening target (a name, or "_blank"), defaults to "_self"
openWindow = function (verb, url, data, target) {
  var form = document.createElement('form')
  form.action = url
  form.method = verb
  form.target = target || '_self'
  if (data) {
    for (var index in data) {
      var $input = $('<input>')
        .attr('name', data[index].key)
        .val(data[index].value)

      $(form).append($input)
    }
  }
  form.style.display = 'none'
  document.body.appendChild(form)
  form.submit()
  document.body.removeChild(form)
}

// Print an element
jQuery.fn.extend({
  printElem: function () {
    var cloned = this.clone()
    var printSection = $('#printSection')
    if (printSection.length == 0) {
      printSection = $('<div id="printSection"></div>')
      $('body').append(printSection)
    }
    printSection.append(cloned)
    var toggleBody = $('body *:visible')
    toggleBody.hide()
    $('#printSection, #printSection *').show()
    window.print()
    printSection.remove()
    toggleBody.show()
  },
})
