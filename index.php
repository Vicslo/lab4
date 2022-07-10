<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <input type="text" value="123">
    <button  onclick="func1()">
      tik
    </button>
<div class="" id="table">

</div>
<script src="jquery-3.6.0.min.js">

</script>
<script type="text/javascript">



function down(trid)
{
  var arr = Array();
  arr["id"]=1;

  vaar=document.getElementById(trid);
for (var i = 0; i < vaar.childNodes.length; i++) {

    //  alert( vaar.childNodes[i].firstChild.value ); // Text, DIV, Text, UL, ..., SCRIPT
    }
arr["id"]=vaar.childNodes[0].firstChild.value;
arr["name"]=vaar.childNodes[1].firstChild.value;
arr["surname"]=vaar.childNodes[2].firstChild.value;
arr["age"]=vaar.childNodes[3].firstChild.value;
var json = JSON.stringify(arr);
  //  alert(json);
    $.ajax({
            method: "POST",
            url: "and_another.php",
            data: {json:json},
            success: function (data) {
              //$("#table").html("");
                // $("#table").html(data);

            //  alert(data)
            }
            });
            func1();
}
function down2(trid)
{


    vaar=document.getElementById(trid);
  for (var i = 0; i < vaar.childNodes.length; i++) {
       vaar.childNodes[i+1].firstChild.readOnly = false;
}

}
    function func1()
    {var str="<ul>";
      //alert('123');
      $.ajax({
          method: "GET",
          url: "first.php",
          success: function (data) {


//alert(data[0]['rate']);
 //var arr= new Array();
 //arr= JSON.parse(data);
 //alert(arr);
        $("#table").html("");
               $("#table").html(data);

          }
          });

    }
            </script>
</body>
</html>
