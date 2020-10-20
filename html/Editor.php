<!DOCTYPE html>
<html>
  <head>
    <title>Web Compiler</title>
    <link rel="stylesheet" href="../css/Editor.css" />
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
      <div class="logo-container">
        
        <h3>Code-Blocks</h3>
      </div>
      <div class="toggle-panel-wrapper">
        <ul class="nav-links">
          <div class="nav-link active" onclick="togglePanel(this)" id="Html">
            HTML
          </div>
          <div class="nav-link" onclick="togglePanel(this)" id="Css">CSS</div>
          <div class="nav-link" onclick="togglePanel(this)" id="Js">
            JAVASCRIPT
          </div>
          <div class="nav-link" onclick="togglePanel(this)" id="Output">
            OUTPUT
          </div>
        </ul>
      </div>
      <div class="menu-button">
        <button>
          <i class="fas fa-bars fa-lg" style="margin-right: 3px"></i>Menu
        </button>
        <div class="menu-button-dropdown">
          <a href="#">Save Code</a>
          <a href="#">Logout</a>
        </div>
      </div>
    </nav>

    <main>
      <div id="bodyContainer">
        <div class="Panels" id="HtmlPanel">
          <textarea id="html" placeholder=" ENTER HTML CODE HERE"></textarea>
        </div>
        <div class="Panels hidden" id="CssPanel">
          <textarea id="css" placeholder=" ENTER CSS CODE HERE"></textarea>
        </div>
        <div class="Panels hidden" id="JsPanel">
          <textarea id="js" placeholder=" ENTER JAVASCRIPT HERE"></textarea>
        </div>
        <iframe class="Panels" id="OutputPanel" placeholder="Output"></iframe>
      </div>
    </main>

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
    </script>
  </body>
</html>
