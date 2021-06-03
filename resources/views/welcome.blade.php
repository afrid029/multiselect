<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="send" method = "Post" onsubmit = "fields()">
    @csrf
        <input type="text" name = "name" placeholder = "Name"><br>
<label><strong>Fields of Interest :</strong></label><br>
        
    <input type="hidden" name = "fields[]" id = "field">
        <label>
        <input id = "adbms"  type="checkbox" name="FieldsOfInterest" placeholder="f" value="Advanced database design and systems">Advanced database design and systems</label>
      <label>
        <input id = "bc"  type="checkbox" name="FieldsOfInterest" placeholder="f" value="Bioinformatics Computing">Bioinformatics Computing</label>
      <label>
        <input id = "cd" type="checkbox" name="FieldsOfInterest" placeholder="f" value="Compiler design">Compiler design</label>
      <label>
        <input id = "cn" type="checkbox" name="FieldsOfInterest" placeholder="f" value="Computer Networks and Internet Computing">Computer Networks and Internet Computing</label>

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
    </script>

    <br><br><br><br><br>

    <table border = "2px">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Fields</th>
            <th></th>
        </tr>
        @foreach ($user as $u)
        <tr>
            <td>{{$u -> id}}</td>
            <td>{{$u -> name}}</td>
            <td>{{$u -> fieldofIntrests}}</td>
            <td><a href="edit/{{$u->id}}">Edit</a></td>
            </tr>
        @endforeach
    
    </table>
</body>
</html>