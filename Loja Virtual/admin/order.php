<!DOCTYPE>
<html xmlns="http://www.w3.org/">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert, Update, Delete using jQuery, PHP and MySQL</title>
<link href="../style/style1.css" rel="stylesheet" type="text/css">

<!-- Javascript goes in the document HEAD -->
<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){

		var table = document.getElementById(id);
		var rows = table.getElementsByTagName("tr");

		for(i = 0; i < rows.length; i++){
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}
		}
	}
}
window.onload=function(){
	altRows('alternatecolor');
}
</script>

<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.altrowstable {
	border-width: 1px;
	border-color:  #ddd;
	font-size: 14px;
	border-collapse: collapse;
}
table.altrowstable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #ddd;
}
table.altrowstable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #ddd;
}
.oddrowcolor{
	background-color:#fcfcfc;
}
.evenrowcolor{
	background-color:#e0dbdb;
}

ul.pagination {
    text-align:center;
    color:#1f447f;
}
ul.pagination li {
    display:inline;
    padding:0 3px;
}
ul.pagination a {
    color:#1f447f;
    display:inline-block;
    padding:5px 10px;
    border:1px solid #1f447f;
    text-decoration:none;
}
ul.pagination a:hover,
ul.pagination a.current {
    background:#1f447f;
    color:#fff;
}



</style>

<!-- Table goes in the document BODY -->
</head>
<body>
<div id="main3">
<div id="header"><img src="../images/logo.png"></div>
<div id="manu">
	<ul>
		<li><a href="admin.php" >HOME</a></li>
		<li><a href="product.php" >PRODUTOS</a></li>
		<li><a style="background:#5DBCD2; color:#fff;" href="order.php" >PEDIDO</a></li>
		<li><a href="../login/logout.php?logout=true" >SAIR</a></li>
	</ul>
</div>
<br>
<div id="content">
	<h2><a class="button" href="../index.php"> Adicionar Pedido</a> Admin Access Only [Order Page] </h2>
	<center>
  	<table class="altrowstable" id="alternatecolor">
    	<thead>
      	<tr>
        <th>ID</th>
        <th>Imagem</th>
        <th>Nome</th>
				<th>Telefone</th>
				<th>Email</th>
				<th>Endereço</th>
				<th>Pedido</th>
		    <th>Data</th>
				<th>Status</th>
        <th>Editar</th>
        <th>Deletar</th>
        </tr>
      </thead>
      <tbody>
			<?php

			?>
			<tr>
				<td><?php //echo $row['myid']; ?></td>
				<td><img with="50" height="50" src="../<?php //echo $row['img']; ?>"></td>
				<td><?php //echo $row['name']; ?></td>
				<td><?php //echo $row['mobile']; ?></td>
				<td><?php //echo $row['email']; ?></td>
				<td><?php //echo $row['addr']; ?></td>
				<td><?php ///echo $row['ordr']; ?></td>
				<td><?php //echo $row['cdate']; ?></td>
				<td><?php //echo $row['sts']; ?></td>
				<td align="center">
					<a   href="edit.php?myid=<?php //echo $row['myid']; ?>" title="Edit">
					<img src="../images/edit.png" width="20px" />
          </a>
				</td>
			<td align="center">
				<a   href="delete.php?myid=<?php //echo $row['myid']; ?>" title="Delete">
				<img src="../images/delete.png" width="20px" />
        </a>
			</td>
			</tr>
      </tbody>
    </table>
	</center>
	<br>
		<?php
			// displaying paginaiton.
			//	echo pagination($statement,$per_page,$page,$url='?');
			?>


<div id="footer3">
	<center>
	      <p> Acesse Nossas Mídias Sociais </p>
	      <p><img src="../images/facebook.png"> <img src="../images/twitter.png">  <img src="../images/youtube.png"></p>
	</center>
	    <b>  Copyrights©2018 Protótipo de Loja Virtual - Thelsandro Antunes.</b>
</div>
</div>

</body>
</html>
