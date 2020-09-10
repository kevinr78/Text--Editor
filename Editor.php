<!DOCTYPE html>
<html>
  <head>
    <title>Web Compiler</title>
    <link rel="stylesheet" type="text/css" href="sEditortyles.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://kit.fontawesome.com/0000f17b81.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav>
      <ul class="nav-links">
        <div id="title" style="margin-right: auto">
          <li>
            <a href="#"><h2>Web Compiler</h2> </a>
          </li>
        </div>

        <div class="btnContainer" style="margin: 0 auto">
          <div onclick="togglePanel(this)" id="Html" class="active btnTab Hbtn">
            HTML
          </div>
          <div onclick="togglePanel(this)" id="Css" class="btnTab Cbtn">
            CSS
          </div>

          <div onclick="togglePanel(this)" id="Js" class="btnTab Jbtn">
            JavaScript
          </div>

          <div
            onclick="togglePanel(this)"
            id="Output"
            class="active btnTab Obtn"
          >
            OUTPUT
          </div>
        </div>

        <div class="dropdown" style="margin-left: auto">
          <button type="button">
            <i
              style="margin-right: 3px; color: #1a535c"
              class="fas fa-bars fa-lg"
            ></i>
            Menu
          </button>
          <div class="dropdown-content">
            <a href="#">Save Code</a>
            <a href="#">Logout</a>
          </div>
        </div>
      </ul>
    </nav>

    <div id="bodyContainer">
      <div class="Panels" id="HtmlPanel">
        <textarea id="html" placeholder="HTML"></textarea>
      </div>
      <div class="Panels hidden" id="CssPanel">
        <textarea id="css" placeholder="CSS"></textarea>
      </div>
      <div class="Panels hidden" id="JsPanel">
        <textarea id="js" placeholder="JavaScript"></textarea>
      </div>
      <iframe class="Panels" id="OutputPanel" placeholder="Output"></iframe>
    </div>

    <script type="text/javascript">
      function togglePanel(x) {
        var PanelName = x.id + "Panel";
        x.classList.toggle("active");
        var mainPanel = document.getElementById(PanelName);
        mainPanel.classList.toggle("hidden");
      }

      function compile() {
        var html = document.getElementById("html");
        var css = document.getElementById("css");
        var js = document.getElementById("js");
        var code = document.getElementById("OutputPanel").contentWindow
          .document;
        document.body.onkeyup = function () {
          code.open();
          code.writeln(
            html.value +
              "<style>" +
              css.value +
              "</style>" +
              "<script>" +
              js.value +
              "<\/script>"
          );
          code.close();
        };
      }

      compile();
      /*remark is text area id
 function  myfunction() {
if(document.getElementById('remark').value === ''){
document.getElementById('remark').value +=1;
}
};

document.getElementById("remark").addEventListener('keyup',function(event){


if(event.which == '13'){
var elm = document.getElementById("remark");
var lines = elm.value.split('\n');
var numbers = "";
for(var i=0; i<lines.length; i++)
{
numbers = i+1;}
document.getElementById('remark').value +=numbers;
}

});*/
    </script>
  </body>
</html>