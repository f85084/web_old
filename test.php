<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>滑鼠移入移出效果，用jQuery的hover函式</title>
    <style>
        #type{border:1px purple solid; border-collapse: collapse; width:300px;}
        #type td{border:1px purple solid; text-align: center}
        #type th{background-color: purple; color:white}
        .enter{background-color: #0099CC; color:white}
    </style>
    <script src="jquery-1.11.2.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#type tr").hover(function(){
                $(this).addClass("enter")
            },function(){
                $(this).removeClass("enter")
            })
        })
    </script>
</head>
<body>

<table id="type">
<tr>
    <th> 座號 </th>
    <th> 身高 </th>
</tr>
<tr>
    <td> 01</td>
    <td>130</td>
</tr>
<tr>
    <td>02</td>
    <td>140</td>
</tr>
<tr>
    <td> 03</td>
    <td>145</td>
</tr>
<tr>
    <td> 04</td>
    <td>150</td>
</tr>
<tr>
    <td> 05</td>
    <td>155</td>
</tr>
<tr>
    <td> 06</td>
    <td>160</td>
</tr>
</table>

</body>
</html>