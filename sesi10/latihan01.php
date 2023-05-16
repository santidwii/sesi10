<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form 1</title>
</head>
<body>
    
<form name="latihan1" method="POST" onsubmit="return checkform(this)">

    <div>
        NIM 
        <input type="text" name="txNIM">
    </div>
    <div>
        Jenis Kelamin
        <input type="radio" name="txJK" value="L">Laki Laki
        <input type="radio" name="txJK" value="P">Perempuan 
    </div>
    <div>
        Jurusan 
        <select name="txJURUSAN">
            <option value="MTI">MTI</option>
            <option value="KAB">KAB</option>
            <option value="DESAIN">DESAIN</option>
        </select> 
    </div>
    <div>
        Hobi 
        <input type="checkbox" name="txhobirenang" value="1"> Berenang
        <input type="checkbox" name="txhobibulutangkis" value="1"> Bulu Tangkis
        <input type="checkbox" name="txhobimembaca" value="1"> Membaca
        <input type="checkbox" name="txhobijalanjalan" value="1"> Jalan Jalan 
        <input type="checkbox" name="txhobishoping" value="1"> Shoping
    </div>
    <div>
        <button type="submit">kirim Data</button>
    </div>
</form>

    <script type="text/javascript">
        function checkform(frm){
            let form = frm.element;
            let NIM = form.namedItem("txNIM").value;
            let jnskel = form.namedItem("txJK").value;
            let jur = form.namedItem("txJURUSAN").value;
            let hobi = [
                form.namedItem("txhobirenang").checked,
                form.namedItem("txhobibulutangkis").checked,
                form.namedItem("txhobimembaca").checked,
                form.namedItem("txhobijalanjalan").checked,
                form.namedItem("txhobishoping").checked
            ];
            
            console.log("NIM: "+NIM);
            console.log("Jenis Kelamis: "+jnskel);
            console.log("Jurusan: "+jur);
            console.log("hobi: "+hobi);

            return false; 

        }
            
        


    </script>
</body>
</html>