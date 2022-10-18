<html>    
  <body> 
    
    <input type="submit"    class="bttn-one" value ="Country Table"onClick="myFunction()"/> 
      <input type="submit"   class="bttn-two" value ="City Table"onClick="myFunction3()"/> 
     <input type="submit"   class="bttn-three" value ="Quiz"onClick="myFunction2()"/> 




    <script>
      function myFunction() {
        window.location.href="test.php";  
      }
     function myFunction2() {
        window.location.href="select.php";  
      }
        function myFunction3() {
        window.location.href="test2.php";  
      }


  
  
  
      





    </script>
    
  </body>    
</html> 

<style type="text/css">
  @import url(<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&family=Poppins&display=swap" rel="stylesheet">);

* {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    margin: 0;
    padding: 0;
}

body {
    position: relative;
    background: radial-gradient(50% 50% at 50% 50%, #2D0065 0%, #000000 100%);
    display: flex;
    justify-content: center;
    overflow: hidden;
    min-height: 100vh;
}

.container {
    display: flex;
    flex-direction: row;
    align-content: center;
    align-items: center;
}


.bttn-one {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 2rem;

    width: 2rem;
    height: 1rem;

    border-radius: 1.25em;
    padding: 2em 3.25em 2em 3.25em;
    background: rgb(13, 0, 26);
    color: white;
    background-blend-mode: multiply;
    box-shadow: 0em .25em 2em 0em rgba(253, 151, 255, 1);

}





.bttn-two {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 2rem;

    width: 2rem;
    height: 1rem;

    padding: 2em 3.25em 2em 3.25em;
    background: #010028;
    color: white;
    background-blend-mode: multiply;
    box-shadow: 0em .25em 2em 0em #B0FFF1;
    border-radius: 1.25em;

}





.bttn-three {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 2rem;

    width: 2rem;
    height: 1rem;

    border-radius: 1.25em;
    padding: 2em 3.25em 2em 3.25em;
    background: #00110d;
    color: white;
    background-blend-mode: multiply;
    box-shadow: 0em .25em 2em 0em #CDFF7A;
}



</style>