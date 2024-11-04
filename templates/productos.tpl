{include'header.tpl'}
<h4>Productos:</h4>
{foreach item=productos from=$productos}
  <h5>{$productos->nombre}</h5>
  <p>{$productos->descripcion}</p>

{include'footer.tpl'}