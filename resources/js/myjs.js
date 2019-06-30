$(document).on('click','.deleteClass',function (){

    var id =  $(this).attr('id');
    if(confirm('Are you sure? You want to delete this?')){
        console.log('okkk'+id);

    }else {
        console.log('cancell');
    }
}
