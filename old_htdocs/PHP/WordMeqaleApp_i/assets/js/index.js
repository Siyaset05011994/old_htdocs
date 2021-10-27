
$(document).ready(function (){
     getArticles();
})


$(document).on('submit','#storeForm',function (e){
     e.preventDefault();
     var data = $("#storeForm").serialize();

     $.post('requests/store.php',data,function (response){
          // console.log(response)
          getArticles();
     });
})

$(document).on('click','#create',function (){
     createArticle();
})


function getArticles(){
     $.get('requests/select.php',function (response) {

          var data=JSON.parse(response);

          for (var i=0;i<data.length;i++){

               $("#articles_table tbody").append(
                   ' <tr>\n' +
                   '                    <td>'+data[i]['title']+'</td>\n' +
                   '                    <td>'+data[i]['description']+'</td>\n' +
                   '                    <td>\n' +
                   '                         <a id="edit" className="operation_btn">Edit</a>\n' +
                   '                         <a id="delete" className="operation_btn">Delete</a>\n' +
                   '                         <a id="convert_to_docs" className="operation_btn">Convert to Word file</a>\n' +
                   '                    </td>\n' +
                   ' </tr>'
               );

          }

     });
}


function createArticle(){
   $("#create_form_div").show();
}


function storeArticle(){
     var data='';

     $.post('requests/store.php',data,function (response) {
          console.log(response)
     });
}