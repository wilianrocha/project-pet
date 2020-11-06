<html>
<head>
<title>may be</title>
<style type="text/css">
.button {
  background-color: #2f8474; /* slightly blue */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 4px 2px;
  cursor: pointer;
}

.show-sol{
	display:none;
} 

#pet6{}
#pet5{}
#pet4{}
#pet3{}
#pet2{}
#pet1{}
</style>

<script>
MathJax = {
  tex: {
    inlineMath: [['$', '$'], ['\\(', '\\)']]
  },
  svg: {
    fontCache: 'global'
  }
};
</script>
<script async="" id="MathJax-script" src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js" type="text/javascript">
</script>


</head>

<body>

<script language="javascript" type="application/javascript">
function top6() {
  var p_6 = document.getElementById("pet6");
  if (p_6.style.display === "none") {
    p_6.style.display = "block";
  } else {
    p_6.style.display = "none";
  }
}

function top5() {
  var p_5 = document.getElementById("pet5");
   if (p_5.style.display === "none") {
    p_5.style.display = "block";
  } else {
    p_5.style.display = "none";
  }
}

function top4() {  
  var p_4 = document.getElementById("pet4");
  if (p_4.style.display === "none") {
    p_4.style.display = "block";
  } else {
    p_4.style.display = "none";
  }
}

function top3() {
  var p_3 = document.getElementById("pet3");
  if (p_3.style.display === "none") {
    p_3.style.display = "block";
  } else {
    p_3.style.display = "none";
  }
}

function top2() {
  var p_2 = document.getElementById("pet2");
    var p_2 = document.getElementById("pet2");
  if (p_2.style.display === "none") {
    p_2.style.display = "block";
  } else {
    p_2.style.display = "none";
  }
}

function top1() {
  var p_1 = document.getElementById("pet1");
    var p_1 = document.getElementById("pet1");
  if (p_1.style.display === "none") {
    p_1.style.display = "block";
  } else {
    p_1.style.display = "none";
  }
} 

</script>

<button class="button" onclick="top6()" >PET Volume 6 </button></br>
<button class="button" onclick="top5()" >PET Volume 5 </button></br>
<button class="button" onclick="top4()" >PET Volume 4 </button></br>
<button class="button" onclick="top3()" >PET Volume 3 </button></br>
<button class="button" onclick="top2()" >PET Volume 2 </button></br>
<button class="button" onclick="top1()" >PET Volume 1 </button></br>

<div id="pet6" style="display:none" > Solução da semana 1 do pet 6 </div>
<div id="pet5" style="display:none" > testando 5
<?php
  $drive = new Google_Service_Drive($client);
  $file_id = "1DA8OL1bowwOvlzwJ9gFoI02zhhfV7Bw4";

  $optpParams = array(
      'fields' => "size"
      );
      
  $response = $drive->files->get($file_id, $optpParams);
  echo $response->size;
?>

</div>
<div id="pet4" style="display:none" > testando 4</div>
<div id="pet3" style="display:none" > testando 3</div>
<div id="pet2" style="display:none" > testando 2</div>
<div id="pet1" style="display:none" > testando 1

		\begin{align*}
		A &= 4\cdot \pi\cdot R^2\\
		  &= 4\cdot \pi\cdot (\sqrt[3]{1800})^2\\
		  &= 4\cdot \pi\cdot \sqrt[3]{1800^2}\\
		  &= 4\cdot \sqrt[3]{1800^2}\cdot \pi
		\end{align*}

</div>



</body>

</html>