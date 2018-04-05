

<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
function insert(){
var uname=document.getElementById('uname').value;
var pwd=document.getElementById('pwd').value;
if(uname=="" && pwd==""){alert('inser');}else{ }
$.post('ajax1.php',
	{
		unm:uname,
		pwd:pwd
	},
	function(data){
document.getElementById("demo").innerHTML=data;
	});


document.getElementById('uname').value="";
document.getElementById('pwd').value="";

}


</script>

</head>
<body >
<form>
<TABLE>
<tr><td>Username</td><td><input type="text" id="uname"></td></tr>
<tr><td>password</td><td><input type="password" id="pwd"></td></tr>
</TABLE>
<input type="button" onclick="insert();" value="insert" >
</form>	<br>
<div id="demo"></div><br>

</body>
</html>


