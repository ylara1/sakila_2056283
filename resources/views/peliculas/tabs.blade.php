<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
    
<body>
    <div id="tabs">
        <ul>
        @foreach ($categorias as $cat)
            <li><a href="#tabs-1">{{ $cat->name}}</a></li>
        @endforeach
        </ul>
        <div id="tabs-1">
            Tab 1 Content
        </div>
        
        <div id="tabs-2">
            Tab 2 Content
        </div>
        
        <div id="tabs-3">
            Tab 3 Content
        </div>
        <div id="tabs-4">
            Tab 4 Content
        </div>
        <div id="tabs-5">
            Tab 5 Content
        </div>
        
    </div>
    <br />
    <input type="button" id="btnPrevious" value="Previous" style = "display:none"/>
    <input type="button" id="btnNext" value="Next" />

</body>
</html