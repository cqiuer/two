<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<p class="v1" onclick="show()">good</p>
</body>
<script>
function show() {
	object = document.getElementsByClassName('v1');
	console.log(object);
	if (object.innerText === 'good') {
		object.innerHTML = 'php 共有九种类型 其中4种标量类型(boolean,string,integer,float) 3种复合类型(object,array,callable) 2种特殊类型(NULL,resource)';
	}
}
</script>
</html>