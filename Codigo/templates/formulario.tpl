{include 'header.tpl'}

<form id="formulario" action="" method="post" class="mostrar">
    <label>Seleccione Dia</label>
    <select>
        {foreach item=dia from=$dias}
            <option value="{$dia->dia}">{$dia->dia}</option>
        {/foreach}
    </select>
    <label>Seleccione Horario</label>
    <select>
    <option>10:15</option>
    <option>11:00</option>
    <option>15:30</option>
    <option>17:00</option>
    <option>17:45</option>
    <option>19:00</option>
    </select>
    <input type="submit">

</form>

{include 'footer.tpl'}