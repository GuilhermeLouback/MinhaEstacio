<div class="titulo">Mês de Inicio e Fim</div>

<form action="#" onsubmit="return validateSemestreMI_MF()" method="post">

<label for="mesi">Mes de Inicio:</label>
      <input type="month" id="mesi" name="mesi"><br><br>
      <label for="mesf">Mes Final:</label>
      <input type="month" id="mesf" name="mesf"><br><br>

      <p>Digite seu semestre atual :</p>
      <input type="radio" id="periodo1" name="periodo1" value="periodo1">
      <label for="html">1º Semestre</label><br>
      <input type="radio" id="periodo2" name="periodo2" value="perido2">
      <label for="periodo2">2º Semestre</label><br>
      <input type="hidden" id="id" name="id" value="001"><br><br>
      <input type="submit" value="Submit">

</form>