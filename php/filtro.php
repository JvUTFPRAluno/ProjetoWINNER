<?php function filtrodados($caminho, $titulo, $btn){?>
<div class="filtro">
    <form class="filtrar" method="POST" action="<?php echo($caminho); ?>">
        <h2><?php echo $titulo ?></h2>
        <div>
        <h4>Setor</h4>
        <select name="setorFiltro" required>
            <option disabled selected>--</option>
            <option value="administrativo">Administrativo</option>
            <option value="Produção">Produção</option>
        </select>
        </div>
        <div>
        <h4>Linha</h4>
        <select name="linhaFiltro">
        <option disabled selected>--</option>
            <option value="01-Arla antiga">Arla</option>
            <option value="12-Terco 1">Terco 1</option>
        </select>
        </div>
        <div>
            <h3>Intervalo de tempo</h3>
            <label>Data Inicio</label>
            <input type="date" name="intDataInicio">
            <label>Data Final</label>
            <input type="date" name="intDataFim">
        </div>
        <input type="submit" value="<?php echo $btn?>">
    </form>
</div>
<?php
    }
?>