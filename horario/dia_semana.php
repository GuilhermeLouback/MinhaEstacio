<div class="titulo">Dias da Semana</div>


<form action="#" onsubmit="return validateHorarioDS()" method="post">
<fieldset >
      <legend>Horário</legend>
      <p>Digite o dia da semana:</p>
      <input type="date" name="DiaS">
      <p>Hora de inicio e hora de término:</p>
      <input type="time" name="timei">
      <input type="time" name="timet">

      <p>Disciplinas:</p>
      <input type="radio" id="DESV" name="DESV" value="DESV">
      <label for="html">DESENV. WEB EM HTML5, CSS, JAVASCRIPT E PHP</label><br>
      <input type="radio" id="FUND" name="FUND" value="FUND">
      <label for="html">FUNDAMENTOS DE REDES DE COMPUTADORES</label><br>
      <input type="radio" id="INTRO" name="INTRO" value="INTRO">
      <label for="html">INTRODUÇÃO À SEGURANÇA DA INFORMAÇÃO</label><br>
      <input type="radio" id="PAR" name="PAR" value="PAR">
      <label for="html">PAR. DE LING. DE PROGRAMAÇÃO EM PYTHON</label><br>

      <P>Professor: </P>
      <label for="Professor"></label>
      <select name="professor" id="Professor">
        <option value="none"></option>
        <option value="Bruno">BRUNO ZONOVELLI DA SILVA </option>
        <option value="Luiz">LUIZ FERNANDO LAGUARDIA CAMPOS</option>
      </select>



      <p>Digite seu semestre atual: </p>
      <input type="radio" id="periodo1" name="periodo1" value="periodo1">
      <label for="html">1º Semestre</label><br>
      <input type="radio" id="periodo2" name="periodo2" value="perido2">
      <label for="periodo2">2º Semestre</label><br>
      <input type="hidden" id="id" name="id" value="001"><br><br>
      <input type="submit" value="Submit">
</fieldset>


