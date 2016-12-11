<!DOCTYPE html>
<html>
<head>
<title>HTML5, CSS3 and JavaScript demo</title>
<meta name="viewport" content="height=device-height,initial-scale=1.0">
<meta charset="utf-8">
<script src="apstyle/js/apstyle.js"></script>
<link rel="stylesheet" href="css/external.css">
<!-- codemirror files -->
<script src="codemirror/lib/codemirror.js"></script>
	<link rel="stylesheet" href="codemirror/lib/codemirror.css">
	<script src="codemirror/mode/javascript/javascript.js"></script>
	<link rel="stylesheet" type="text/css" href="codemirror/theme/blackboard.css">
	<link rel="stylesheet" href="../theme/3024-day.css">
<link rel="stylesheet" href="codemirror/theme/3024-night.css">
<link rel="stylesheet" href="codemirror/theme/abcdef.css">
<link rel="stylesheet" href="codemirror/theme/ambiance.css">
<link rel="stylesheet" href="codemirror/theme/base16-dark.css">
<link rel="stylesheet" href="codemirror/theme/bespin.css">
<link rel="stylesheet" href="codemirror/theme/base16-light.css">
<link rel="stylesheet" href="codemirror/theme/blackboard.css">
<link rel="stylesheet" href="codemirror/theme/cobalt.css">
<link rel="stylesheet" href="codemirror/theme/colorforth.css">
<link rel="stylesheet" href="codemirror/theme/dracula.css">
<link rel="stylesheet" href="codemirror/theme/eclipse.css">
<link rel="stylesheet" href="codemirror/theme/elegant.css">
<link rel="stylesheet" href="codemirror/theme/erlang-dark.css">
<link rel="stylesheet" href="codemirror/theme/hopscotch.css">
<link rel="stylesheet" href="codemirror/theme/icecoder.css">
<link rel="stylesheet" href="codemirror/theme/isotope.css">
<link rel="stylesheet" href="codemirror/theme/lesser-dark.css">
<link rel="stylesheet" href="codemirror/theme/liquibyte.css">
<link rel="stylesheet" href="codemirror/theme/material.css">
<link rel="stylesheet" href="codemirror/theme/mbo.css">
<link rel="stylesheet" href="codemirror/theme/mdn-like.css">
<link rel="stylesheet" href="codemirror/theme/midnight.css">
<link rel="stylesheet" href="codemirror/theme/monokai.css">
<link rel="stylesheet" href="codemirror/theme/neat.css">
<link rel="stylesheet" href="codemirror/theme/neo.css">
<link rel="stylesheet" href="codemirror/theme/night.css">
<link rel="stylesheet" href="codemirror/theme/panda-syntax.css">
<link rel="stylesheet" href="codemirror/theme/paraiso-dark.css">
<link rel="stylesheet" href="codemirror/theme/paraiso-light.css">
<link rel="stylesheet" href="codemirror/theme/pastel-on-dark.css">
<link rel="stylesheet" href="codemirror/theme/railscasts.css">
<link rel="stylesheet" href="codemirror/theme/rubyblue.css">
<link rel="stylesheet" href="codemirror/theme/seti.css">
<link rel="stylesheet" href="codemirror/theme/solarized.css">
<link rel="stylesheet" href="codemirror/theme/the-matrix.css">
<link rel="stylesheet" href="codemirror/theme/tomorrow-night-bright.css">
<link rel="stylesheet" href="codemirror/theme/tomorrow-night-eighties.css">
<link rel="stylesheet" href="codemirror/theme/ttcn.css">
<link rel="stylesheet" href="codemirror/theme/twilight.css">
<link rel="stylesheet" href="codemirror/theme/vibrant-ink.css">
<link rel="stylesheet" href="codemirror/theme/xq-dark.css">
<link rel="stylesheet" href="codemirror/theme/xq-light.css">
<link rel="stylesheet" href="codemirror/theme/yeti.css">
<link rel="stylesheet" href="codemirror/theme/zenburn.css">
<script src="codemirror/addon/edit/closebrackets.js"></script>
<!-- codemioor adons files -->
<script src="codemirror/addon/edit/matchbrackets.js"></script>
<link rel="stylesheet" href="codemirror/addon/hint/show-hint.css">
<script src="codemirror/addon/hint/show-hint.js"></script>
<script src="codemirror/mode/clike/clike.js" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- end of import -->
</head>
<body>
  <div class="main">
<button type="button" class="btn"><span>Run</span><i class="material-icons">play_circle_outline</i></button>

  <button type="button" class="btn-blue">Upload</button>
  <button type="button" class="btn-green">Submit</button>
  </div>
  <div class="hacker">

    <h1>CodeJustice Compiler</h1>
    <textarea class="codemirror-textarea"></textarea><br />
    <div style="width: 800px; height: 200px; background-color: black; color: white; ">
    </div>
    </textarea>
    
  </div>
  <footer>
  <button type="button" class="page-no">1</button>
    <button type="button" class="page-no">2</button>
   <button type="button" class="page-no">3</button>
    <button type="button" class="page-no">5</button>
   <button type="button" class="page-no">6</button>
  </footer>
<!-- End your code here -->
<script>
var myTextArea=$('.codemirror-textarea')[0];
var editor = CodeMirror.fromTextArea(myTextArea,{
	lineNumbers: true,
	matchBrackets: true,
    styleActiveLine: true,autoCloseBrackets: true,
    mode: "text/x-c++src",
});
editor.setSize(800, 200);
editor.refresh();
</script>
</body>

</html>
