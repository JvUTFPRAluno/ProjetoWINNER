<?php function filtrodados($caminho, $titulo, $btn){?>
<div class="filtro" id="filtro">
    <form class="filtrar" method="POST" action="<?php echo($caminho); ?>" id="filtro">
        <h2><?php echo $titulo ?></h2>
        <div>
        <h4>Setor</h4>
        <select name="setorFiltro" id="setorFiltro" required>
            <option disabled selected>--</option>
            <option value="Administrativo">Administrativo</option>
            <option value="Expedição">Expedição</option>
            <option value="Formulação">Formulação</option>
            <option value="Predial">Predial</option>
            <option value="Produção">Produção</option>
            <option value="Segurança do Trabalho">Segurança do Trabalho</option>
            <option value="Serviços Gerais">Serviços Gerais</option>
        </select>
        </div>
        <div id="linhaProd" style="display: none;">
        <h4>Linha</h4>
        <select name="linhaFiltro">
            <option disabled selected>--</option>
            <option value="Linha 1 (Antiga arla)">Linha 1 (Antiga arla)</option>
            <option value="Linha 2 (Serac)">Linha 2 (Serac)</option>
            <option value="Linha 3 (Álcool)">Linha 3 (Álcool)</option>
            <option value="Linha 4 (Álcool/Multiuso)">Linha 4 (Álcool/Multiuso)</option>
            <option value="Linha 5 (LPB)">Linha 5 (LPB)</option>
            <option value="Linha 6 (Sachê)">Linha 6 (Sachê)</option>
            <option value="Linha 7 (Tecnoenvase/ 12 bicos)">Linha 7 (Tecnoenvase/ 12 bicos)</option>
            <option value="Linha 8 (Bosch)">Linha 8 (Bosch)</option>
            <option value="Linha 9 (Nannini)">Linha 9 (Nannini)</option>
            <option value="Linha 10 (Kalix)">Linha 10 (Kalix)</option>
            <option value="Linha 11 (Horse)">Linha 11 (Horse)</option>
            <option value="Linha 12 (Terco 1)">Linha 12 (Terco 1)</option>
            <option value="Linha 13 (Terco 2)">Linha 13 (Terco 2)</option>
            <option value="Linha 14 (UNA)">Linha 14 (UNA)</option>
            <option value="Linha 15 (Aeromanual/ Graxa)">Linha 15 (Aeromanual/ Graxa)</option>
            <option value="Linha 16 (Espuma)">Linha 16 (Espuma)</option>
            <option value="Linha 17 (Blister)">Linha 17 (Blister)</option>
            <option value="Linha 18 (Envase Grafite)">Linha 18 (Envase Grafite)</option>
            <option value="Promaquina">Promaquina</option>
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