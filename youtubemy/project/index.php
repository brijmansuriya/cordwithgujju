<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .center {
            margin: auto;
            width: 50%;
            /* border: 1px solid #000000; */
            padding: 20px;

        }
    </style>
</head>

<body>
    <script>
        var keys = ["blue and red gradient css", 'yellow and blue combination gradient css', 3, 6, 10];
        var values = ["background: rgb(41,9,121);background: linear-gradient(9deg, rgba(41,9,121,1) 25%, rgba(255,0,0,1) 100%);",
            "background: rgb(34,193,195);background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);",
            "background: rgb(34,193,195);background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);",
            "Course",
            "Algorithm"];
        var map = new Map();
        // Using loop to insert key
        // value in map
        for (var i = 0; i < keys.length; i++) {
            map.set(keys[i], values[i]);
        }
        // Printing
        for (var key of map.keys()) {
            document.write("<div class='center'>")
            document.write("<h2>" + key + "</h2>" + "<div style='background:" + map.get(key) + ";width: 100%;height: 60px;'>" + "</div>" + "</br>")
            document.write("<textarea class='Inputtxt' cols='92' id='"+ key +"' readonly='' rows='4'>"+ map.get(key) + "</textarea>")
            document.write("</div>")
        }
    </script>


    <script type="text/javascript">
        function mycopybuttan() {
            var copyTxt = document.getElementsByid("Inputtxt");
            copyTxt.select();
            document.execCommand("copy");
        }
    </script>
</body>

</html>

