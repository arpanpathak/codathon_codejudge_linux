
  var input = document.getElementById("select");
  function selectTheme() {
    var theme = input.options[input.selectedIndex].textContent;
    myCodeMirror.setOption("theme", theme);
    myCodeMirror1.setOption("theme", theme);
    myCodeMirror2.setOption("theme", theme);
    myCodeMirror3.setOption("theme", theme);
    myCodeMirror4.setOption("theme", theme);
    location.hash = "#" + theme;
  }
  function changeLanguage(editor,option)
  {

  }