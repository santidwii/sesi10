<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form 1</title>
</head>
<body>
    
<form name="latihan1" id="latihan01" method="POST" onsubmit="return checkform(this)">

    <div>
        NIM 
        <input type="text" name="txNIM" id="txNIM">
    </div>
    <div>
        Jenis Kelamin
        <input type="radio" name="txJK" id="txJK" value="L">Laki Laki
        <input type="radio" name="txJK" id="txJK" value="P">Perempuan 
    </div>
    <div>
        Jurusan 
        <select name="txJURUSAN">
            <option value="MTI" id="MTI">MTI</option>
            <option value="KAB" id="MTI">KAB</option>
            <option value="DESAIN" id="MTI">DESAIN</option>
        </select> 
    </div>
    <div>
        Hobi 
        <input type="checkbox" name="txhobirenang" id="txhobirenang" value="1"> Berenang
        <input type="checkbox" name="txhobibulutangkis" id="txhobibulutangkis"  value="1"> Bulu Tangkis
        <input type="checkbox" name="txhobimembaca" id="txhobimembaca" value="1"> Membaca
        <input type="checkbox" name="txhobijalanjalan" id="txhobijalanjalan" value="1"> Jalan Jalan 
        <input type="checkbox" name="txhobishoping" id="txhobishoping" value="1"> Shoping
    </div>
    <div>
        <button type="submit">kirim Data</button>
    </div>
</form>

    <script type="text/javascript">
        function checkform(){
            let frm = document.getElementById("latihan01")

            let NIM = frm. txhobi[0].checked 
            let hoby1 = frm. txhobi[1].checked 
            let hoby2 = frm. txhobi[2].checked 
            let hoby3 = frm. txhobi[3].checked 

            return false; 
            

        }
            
    </script>
</body>
</html>