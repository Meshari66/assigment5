<html>
<head>
<meta charset="UTF-8" />
<!DOCTYPE html>
<title> Input Information</title>
<style>
  body{background-color: gray;
  margin:1% 20% 5%}
.s{background:white;padding: 5% 5% 50px;

}
.over[type=text]:focus {
  background-color: lightcyan;}
  
.f{width: 100%;}
.h{height:10%;}
.g{background-color: lightgreen;}  
</style>
</head>
<body>
  
  <div class = "s">
    <h1><strong>Write your article info please</strong></h1>
<form action="hello-world.php" method="post">
  <label>Article name</label><br>
  <input type="text" class="f over" name="title" >
<br>
<label>Article url</label><br>
  <input type="text" name="url" value="" class="f over">
  <br>
<label>Article date</label><br>
  <input type="text" name="date" value="" class="f over">
  <br>

  
  <br>
<label>how many comments</label><br>
<input type="text" name="comment" value="" class="f over">
<br><br>
<input type="submit" value="Submit" class="g">
  </form> 
  </div>
</body>
</html>

<script src="chrome-extension://lkfkkhfhhdkiemehlpkgjeojomhpccnh/lib/screenlog.js"></script><script src="filesystem:chrome-extension://lkfkkhfhhdkiemehlpkgjeojomhpccnh/temporary/script.js">
</script>