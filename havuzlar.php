<!DOCTYPE html>
<html lang="tr">

<head>
  <style>
    body{
        background-color: burlywood;
    }
    button.havuz {
      height: 80px;
      color: darkblue;
      margin-left: 10%;
      margin-right: 10%;
    }

    h4 {
      color: black;
    }
  </style>
  <meta charset="UTF-8">
  <title>HAVUZLAR.</title>
</head>
<?php
                if($_SESSION["girisbasarili"]<> 1)                
                die("lüffen giris yapınız...... ");
                ?>
<body>
  <div style="background-color: forestgreen;">
    <center>HOŞGELDİNİZ...</center>
  </div>
   <button style="color: darkblue;" align="center" class="deneme" onclick="window.location='./anasayfa.html'">GERİ DÖN ---> </button>
  <center>
    <!--havuz tablosu-->
    <table border="10" align="left" width="50%">
      <tr>
        <td colspan="4" align="center">
          <h4 align="center">Havuz-1</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_1.html';">GİTMEK İÇİN TIKLA</button>
        </td>
      </tr>
      <tr>
        <td colspan="4" align="center">
          <h4 align="center">Havuz-2</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_2.html';">GİTMEK İÇİN TIKLA</button>
        </td>
      </tr>
      <tr>
        <td colspan="4" align="center">
          <h4 align="center">Havuz-3</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_3.html';">GİTMEK İÇİN TIKLA</button>
        </td>
      </tr>
      <tr>
        <td>
          <h4 align="center">Havuz-4</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_4.html';">GİTMEK İÇİN TIKLA</button>
        </td>
        <td>
          <h4 align="center">Havuz-5</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_5.html';">GİTMEK İÇİN TIKLA</button>
        </td>
        <td>
          <h4 align="center">Havuz-6</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_6.html';">GİTMEK İÇİN TIKLA</button>
        </td>
        <td>
          <h4 align="center">Havuz-7</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_7.html';">GİTMEK İÇİN TIKLA</button>
        </td>
      </tr>
      <tr>
        <td>
          <h4 align="center">Havuz-8</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_8.html';">GİTMEK İÇİN TIKLA</button>
        </td>
        <td>
          <h4 align="center">Havuz-9-</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_9.html';">GİTMEK İÇİN TIKLA</button>
        </td>
        <td>
          <h4 align="center">Havuz-10-</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_10.html';">GİTMEK İÇİN TIKLA</button>
        </td>
        <td>
          <h4 align="center">Havuz-11</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_11.html';">GİTMEK İÇİN TIKLA</button>
        </td>
      </tr>
    </table>

    <!--Alt Havuzlar-->
    <table border="10" align="left" width="50%">
      <tr>
        <td>
          <h4 align="center">Havuz-12</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_12.html';">GİTMEK İÇİN TIKLA</button>
        </td>
        <td>
          <h4 align="center">Havuz-13</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_13.html';">GİTMEK İÇİN TIKLA</button>
        </td>
      </tr>
      <tr>
        <td>
          <h4 align="center">Havuz-14</h4 align="center">
           <button class="havuz" onclick="window.location='././havuzlar/havuz_14.html';">GİTMEK İÇİN TIKLA</button>
        </td>
        <td>
          <h4 align="center">Havuz-15</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_15.html';">GİTMEK İÇİN TIKLA</button>
        </td>
      </tr>
      <tr>
        <td>
          <h4 align="center">Havuz-16</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_16.html';">GİTMEK İÇİN TIKLA</button>
        </td>
        <td>
          <h4 align="center">Havuz-17</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_17.html';">GİTMEK İÇİN TIKLA</button>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <h4 align="center">Havuz-18</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_18.html';">GİTMEK İÇİN TIKLA</button>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <h4 align="center">Havuz-19</h4 align="center">
           <button class="havuz" onclick="window.location='./havuzlar/havuz_19.html';">GİTMEK İÇİN TIKLA</button>
        </td>
      </tr>

    </table>
  </center>
</body>

</html>