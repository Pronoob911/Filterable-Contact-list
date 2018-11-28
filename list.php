<!DOCTYPE html>
<html>
<head>
	<title>Filterable List</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
</head>
<body>

<div class="container">
	<h1 class="center-align">
		My contacts
	</h1>
	<input type="text" id="filterInput" placeholder="Search Contacts" name="">
	<ul class="collection with-header" id="names">
		<li class="collection-header">
			<h5>A</h5>
		</li>
		<li class="collection-item">
			<a href="#">Abe</a>
		</li>
		<li class="collection-item">
			<a href="#">adam</a>
		</li>
		<li class="collection-item">
			<a href="#">Anna</a>
		</li>
		<li class="collection-item">
			<a href="#">Alan</a>
		</li>
		<li class="collection-item">
			<a href="#">Abba</a>
		</li>

		<li class="collection-header">
			<h5>B</h5>
		</li>
		<li class="collection-item">
			<a href="#">Bryan</a>
		</li>
		<li class="collection-item">
			<a href="#">Britney</a>
		</li>
		<li class="collection-item">
			<a href="#">Barry</a>
		</li>
		<li class="collection-item">
			<a href="#">Brandon</a>
		</li>
		<li class="collection-item">
			<a href="#">Brad</a>
		</li>

		<li class="collection-header">
			<h5>C</h5>
		</li>
		<li class="collection-item">
			<a href="#">Cassie</a>
		</li>
		<li class="collection-item">
			<a href="#">Courtney</a>
		</li>
		<li class="collection-item">
			<a href="#">Cathy</a>
		</li>
		<li class="collection-item">
			<a href="#">Cameron</a>
		</li>
		<li class="collection-item">
			<a href="#">Carrie</a>
		</li>
	</ul>
</div>

<script type="text/javascript">
	//get input
	let filterInput=document.getElementById("filterInput");

	//Add event listener
	filterInput.addEventListener('keyup',filterNames);
	function filterNames()
	{
		//get value of the input
		let filterValue=document.getElementById('filterInput').value.toUpperCase();
		//console.log(filterValue);

		//get names ul
		let ul=document.getElementById('names');
		//get li's from ul
		let li=ul.querySelectorAll('li.collection-item');		//puts it into an array

		//loop through collection-item li's
		for(let i=0; i<li.length; i++)
		{
			let a=li[i].getElementsByTagName('a')[0];
			//if matched
			if(a.innerHTML.toUpperCase().indexOf(filterValue)>-1)
			{
				li[i].style.display='';
			}
			else
			{
				li[i].style.display='none';
			}
		}

	}
</script>
</body>
</html>