
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>S-API Install</title>
    <link href="css/main.css" rel="stylesheet">
  </head>

<body>

    <div id="wrapper">
        <h1>Hi :)</h1>
        <h3>Before install S-API please read instructions <a href="http://file-file.tk/xml-yii/api/api_doc.php" target="blank">here</a></h3>
      
        <div id="begin-install">
            <div class="input clearfix">
                <h2>ID</h2>
                <div class="table">
                    <label>Table name for films ID's</label>
                    <input type="text" name="tableName_filmId">
                </div>
                <div>
                    <label>Identificator column name</label>
                    <input type="text" name="idName_filmId">
                </div>
            </div>
            
            <div class="input clearfix">
                <h2>Title</h2>
                <div class="table">
                    <label>Table name for films titles</label>
                    <input type="text" name="tableName_filmTitle">
                </div>
                <div>
                    <label>Column name for films titles</label>
                    <input type="text" name="staticPart_filmTitle">
                </div>
            </div>
            
            <div class="input clearfix">
                <h2>Description</h2>
                <div class="table">
                    <label>Table name for films descriptions</label>
                    <input type="text" name="tableName_filmDescription">
                </div>
                <div>
                    <label>Column name  for films descriptions</label>
                    <input type="text" name="staticPart_filmDescription">
                </div>
            </div>
            
            <div class="input clearfix">
                <h2>Thumbnail</h2>
                <div class="table">
                    <label>Table name for films thumbnail</label>
                    <input type="text" name="tableName_filmThumbnail">
                </div>
                <div>
                    <label>Column name for films thumbnails</label>
                    <input type="text" name="staticPart_filmThumbnail">
                </div>
                <div>
                    <label>Condition for films thumbnails</label>
                    <input type="text" name="condition_filmTrailers">
                </div>
            </div>
            
            <div class="input clearfix">
                <h2>Play Times</h2>
                <div class="table">
                    <label>Table name for films play times</label>
                    <input type="text" name="tableName_filmPlay_times">
                </div>
                <div>
                    <label>ID column name for films play times</label>
                    <input type="text" name="staticPart_filmPlay_times">
                </div>
                <div>
                    <label>Column name for films play times</label>
                    <input type="text" name="relativePart_filmPlay_times">
                </div>
                <div>
                    <label>Condition for films play times</label>
                    <input type="text" name="condition_filmPlay_times">
                </div>
            </div>
            
            <div class="input clearfix">
                <h2>Trailer</h2>
                <div class="table">
                    <label>Table name for films trailers</label>
                    <input type="text" name="tableName_filmTrailers">
                </div>
                <div>
                    <label>Static(left) part for films trailers</label>
                    <input type="text" name="staticPart_filmTrailers">
                </div>
                <div>
                    <label>Dynamic(right) part for films trailers</label>
                    <input type="text" name="relativePart_filmTrailers">
                </div>
                <div>
                    <label>Condition for films trailers</label>
                    <input type="text" name="condition_filmTrailers">
                </div>
            </div>
            
            
            
            
        </div>
      
      
      
    </div><!-- /#wrapper -->

</body>
</html>