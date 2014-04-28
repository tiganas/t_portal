<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>S-API Install guide</title>
    <link href="s_api/css/main.css" rel="stylesheet">
    <style>
        ul{padding-left:15px;}
        li{list-style-type:disc;}
        h4{font-size:17px; margin:5px 0;font-weight:bold;}
        strong{font-weight:bold;}
        p{margin:7px 0;}
    </style>
  </head>

<body>

    <div id="wrapper">
        <h1>Hi :)</h1>
        <br />
        <h3>S-API need several values to get data: "Film Title", "Film Description", "Film play times", "Film Trailer", "Film Thumbnail".</h3>
        
        
        <div id="begin-install">
            <h4><strong>Your steps to become member and share your films</strong></h4>
        <ul>
            <li>Guide S-API to find and send values from your database via installation</li>
            <li>Register on the website and configure your account</li>
        </ul>
        <br />
            
        <h4>1. Classic example</h4>   
        <p>
            <strong>Classic example</strong> assumed that "Film Title", "Film Description", "Film Thumbnail" and "Film Trailer" located into one table and "Film play times" coming from other("one to many" relation).
            Look at the picture below.<br /><br />
            <div style="text-align:center;"><img style="width:100%;border:2px solid #0ba0bf;" src="Untitled-1.png"></div><br /><br />
        </p>
        <p>
            Here we have database "s_api_example_classic" and two basic tables: "film" and "play_times".<br /><br /><br /><br />
            <div style="text-align:center;"><img style="width:100%;border:2px solid #0ba0bf;" src="Untitled-2.png"></div>
        </p>
            
        <p> 
            On the installation page for each value required 3 inputs.
            For example for "Title", we need to write Table name, Static(left) part and Dynamic(right) part.
        </p>
        
        <p>
            Well, our titles placed on table film, so we will write "film" in the input "Table name for films titles".
            We will write "title" on the "Column name for films titles".
        </p>
        
        <p>
            Same for the "description" and "id".
        </p>
        
        <p>
            Film trailers video files can be stored into database with relative path, for example: "/videos/..../film12345.mp4".
            But S-API need video file absolute path, so we will write our website address on the "Static(left) part for films trailers".
            Then we have http://your-site.com/videos/..../film12345.mp4
        </p>
        
        <p>
            If your video files links stored with absolute path(for example http://mother.poweredbyintegra.dk/dataentry/mother_trailers/12739_46580_a_8.mp4) you need to leave "Static left part" empty.
        </p>
        
        <br /><br />
        <p>
            We have relation between table films and play times.
            So Our foreign key is column "film_id"
        </p>
        
        <p>
            For "Play Times" we will write table name as "play_times", identificator as "film_id" and column name as "time".
        </p>
        
        <br /><br /><br /><br />
        <h4>2. Example for Wordpress</h4> 
        <p>
            Now we will use optional "condition" value.
        </p>
        <p>
            If you using CMS system, they generally stores custom fields like Wordpress and in this example assumed that you using custom fields for video link.
        </p>
        <p>
            <div style="text-align:center;"><img style="width:100%;border:2px solid #0ba0bf;" src="Untitled-3.png"></div><br /><br />
        </p>
        <p>
            The post_id(Video ID) here isn't enough, because under post_id can be stored not only the video link, but many custom fields.
        </p>
        <p>So you need to write your meta_key as condition.</p>
        <p>
           Exactly for this example on the "Table name for films trailers" will be written your table name, "Static(left) part for films trailers" need to leave empty(absolute link stored into database), "Dynamic(right) part for films trailers" will be "meta_value" and the "condition" will be meta_key=video_link .
        </p>
        <p>
            For the thumbnail the condition will be "meta_key=_wp_attached_file" on Wordpress based website.<!-- But it again can be not enough.-->
        </p>
        <p>
            <!-- Because under _wp_attached_file wordpress stores all attached files, so -->
        </p>
        <p>
            Now the S-API can find and send your data like this: "SELECT meta_value FROM wp_post_meta WHERE post_id='1' AND meta_key=video_link"
        </p>
        
        <p>As your "play times"  also can be stored near other custom fields(more precisely: one to many relations) you need to do the same as for video_link from above.</p>
        
        <p>
            Now you can register with your website name.
        </p>
        
        <p>
            Go to our registration page for users who have installed S-API: http://...
        </p>
        <p>
            Into your login write your website name without "http://". (this is required).
        </p>
        <p>
            Choose password, write your name and theatre name and enjoy. But notice that your pages will be added after administrator approve your account.
        </p>
        
        <br /><br /><br /><br />   
        </div>
      
      
      
    </div><!-- /#wrapper -->

</body>
</html>