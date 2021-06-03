<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload = "load()">
     <form action = "/save" method = "post" onsubmit = "fields()">
    @method('patch')
    @csrf
    <input type="hidden" id = "fd" value ="{{$ed->fieldofIntrests}}">
    <input type="text" name = "id" value = "{{$ed->id}}" readonly>

    <input type="text" value = "{{$ed->name}}" name = "name" placeholder = "Name"><br>
<label><strong>Fields of Interest :</strong></label><br>
        
    <input type="hidden" name = "fields[]" id = "field">
        <label>
        <input id = "adbms"  type="checkbox"  placeholder="f" value="Advanced database design and systems">Advanced database design and systems</label>
      <label>
        <input id = "bc"  type="checkbox"  placeholder="f" value="Bioinformatics Computing">Bioinformatics Computing</label>
      <label>
        <input id = "cd" type="checkbox"  placeholder="f" value="Compiler design">Compiler design</label>
      <label>
        <input id = "cn" type="checkbox"  placeholder="f" value="Computer Networks and Internet Computing">Computer Networks and Internet Computing</label>

        <input type="submit" value = "Submit">
    </form>
    <script>
        function fields(){
            var temp = [];
            var adbms = document.getElementById("adbms");
            var bc = document.getElementById("bc");
            var cd = document.getElementById("cd");
            var cn = document.getElementById("cn");

            if(adbms.checked == true){
                temp.push("Advanced database design and systems");
            }
            if(bc.checked ==true){
                temp.push("Bioinformatics Computing");
            }
            if(cd.checked == true){
                temp.push("Compiler design");
            }
            if(cn.checked == true){
                temp.push("Computer Networks and Internet Computing");
            }

            document.getElementById("field").value = temp;
        }

        function load(){
            var d = document.getElementById("fd").value;
            var arr = d.split(',');
            for(var i = 0 ; i < arr.length ; i++){
                if(arr[i] == "Computer Networks and Internet Computing"){
                    document.getElementById("cn").checked = true;
                }
                if(arr[i] == "Compiler design"){
                    document.getElementById("cd").checked = true;
                }
                if(arr[i] == "Bioinformatics Computing"){
                    console.log("bsss");
                    document.getElementById("bc").checked = true;
                }
                if(arr[i] == "Advanced database design and systems"){
                    document.getElementById("adbms").checked = true;
                }
            }
            
        }
    </script>

</body>
</html>