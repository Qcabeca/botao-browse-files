<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- CHAMA O JQUERY DIRETO DA BIBLIOTECA DO GOOGLE -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<!-- NÃO SE ESQUEÇA DE ALTERAR O DOMINIO ABAIXO -->
<script type="text/javascript" src="http://seudominio.com.br/js/filestyle.js"></script>
<script type="text/javascript">
jQuery(function ($) {
							
								
	$("input[type=file]").filestyle({ 
	image: "http://seudominio.com.br/imagens/anexar.png", // Altere o domínio
	imageheight : 25, // Altura da imagem
	imagewidth : 324, // Largura da imagem
	width : 450, // Tamanho do box
							
	});});
</script>
<style type="text/css">
.conteudo {
	width:960px;
	text-align:justify;
	margin:0 auto;
	
}
h1 { text-align:center }

.upload {
    border: 1px solid #CCCCCC;
    height: 20px;
    margin-top: 1px;
}
</style>
<title>jQuery – Personalizar botão Browse Files</title>
</head>

<body>
<div class="conteudo">
  <h1>jQuery – Personalizar botão Browse Files</h1>
  <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
  <h3>Exemplo do Botão</h3>
  <input class="upload" id="upload" type="file" name="upload" size="40" />
</div> 

</body>
</html>
