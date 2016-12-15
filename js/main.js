/**
 * Created by EGOmaniack on 05.12.2016.
 */

$(document).ready(function(){

   $('#btn').click(function(){
       this.value="Wating...";
       $.ajax({
           url: "/ajax/Names.php",
           method: "POST",
           data: { name : $('#names').val(), age : 22 },
           dataType: "json"

       }).done(function (aa) {

           var array = $.map(aa, function(value, index) {
               return [value];
           });
           var Agregats,matlist;

           // for (var j=0 ; j < array.length ; j++ ){
           //  // Agregats[array[j].name] = array[j].matlist;
           //  Agregats.push({array[j].name:array[j].matlist});
           // }

               $('#btn').val('Ready');
          // $(body).appendTo('<br><div>'+aa.name+'</div>');
          // alert(aa.name);
           var htmlstr= "";
           for(var i = 0; i<array.length;i++){
               htmlstr += '<br><div>'+array[i].name+'</div>';
           }
           $('#cont').html(htmlstr);
       })
       this.value="Ready";
    });





});