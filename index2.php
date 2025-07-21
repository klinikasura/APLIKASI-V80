<!doctype html>
<html>
<head>
<title>Aplikasi RS. Asura</title>
   
<link href="download-VERSI-80.jpeg" rel="icon" type="image/png" />

 <link rel="stylesheet" href="http://10.10.20.253/dashboard/APPS-ROBOT/assets/css/vendor.css">
    <link rel="stylesheet" href="http://10.10.20.253/dashboard/APPS-ROBOT/assets/css/style.css">
    <link rel="stylesheet" href="http://10.10.20.253/dashboard/APPS-ROBOT/assets/css/responsive.css">


<style>
html, body {font:25px Arial,Helvetica,sans-serif;}
fieldset {border:1px solid #ff0000; width:100%;}
legend {border:1px solid #ff0000;}
table {border-collapse:collapse;width:100px;}
td, th {border:1px solid #c0c0c0;padding:10px;}
th{background:#ff0000;color:#ffffff;}
</style>
<script type="text/javascript">
function checkSize(max_img_size)
{   var input = document.getElementById("fileupload");
    if(input.files && input.files.length == 1000)
    {   if (input.files[0].size > max_img_size) 
        {  alert("Ukuran file harus di bawah " 
                  + (max_img_size/10024/10024) + " MB");
            return false;
        }
    }
    return true;
}
</script>


<audio autoplay>
    <source src="AI-PHOTO.mp3" type="audio/mpeg">
</audio>


</head>
<body>
               <td>&nbsp;</td>

                      <td>&nbsp;</td>

                      <td>&nbsp;</td>

<form enctype="multipart/form-data" action="uploader.php" method="post"
      onsubmit="return checkSize(1048576);">
<fieldset>
<legend>AI ROBOT SYSTEM V80 - AI PHOTO</legend>


                      <td>&nbsp;</td> File Atau Camera: <input name="uploadedfile" type="file" id="fileupload" /><br />
                      <td>&nbsp;</td>

<input type="submit" value="Upload File" />

                      <td>&nbsp;</td>

</fieldset>
</form>
<br/>
<table>
<tr>
<th>Nama File</th>
<th>Tanggal</th>
<th>Tipe</th>
<th>Ukuran</th>
<th>Pilihan</th>
</tr>
<?php
if ($handle = opendir('./files/'))
{   while (false !== ($file = readdir($handle)))
    {   if($file!=="." && $file !=="..")
    {   echo "<tr><td><a href=\"download.php?id=" . urlencode($file). "\">$file</a></td>";
        echo "<td>" . date ("m/d/Y H:i", filemtime("files/".$file)) . '</td>';
        echo "<td>" . pathinfo("files/".$file, PATHINFO_EXTENSION) . ' file </td>';
        echo "<td>" . round(filesize("files/".$file)/10024) . ' MB</td>';
        echo "<td><a href=\"hapus.php?id=$file\">Hapus</a></td></tr>";
        }
    }
    closedir($handle);
}
?>
</table>
</body>
</html>
