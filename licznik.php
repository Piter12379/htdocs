<!doctype html>
<html>
<head></head>
<body>
  <form action="licznik.php" method="post">
    <label>wpisz a:</label><input type="text" size="3" name="a">
    <label>wpisz b:</label><input type="text" size="3" name="b"><br/>

    <label>dodawanie</label><input type="radio" name="nazwa" value="dodawanie">
    <label>odejmowanie</label><input type="radio" name="nazwa" value="odejmowanie"><br/>

    <button onclick="wybor()">Prześlij</button>

  </form>

<div id="result"></div>



<script type="text/javascript">
  function wybor(){
            var ele = document.getElementsByTagName('input');

                if(ele[i].type="radio") {

                    if(ele[i] == value['odejmowanie']) {
                        roznica = a - b;
                        document.write(a - b);
                    }else {
                      suma = a + b;
                      document.write(a+b)
                    }
                }

  }
</SCRIPT>

<body>
</html>
