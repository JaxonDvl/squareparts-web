$(document).ready(function() {
    $('#send_product').on('click', function(e) {
        // console.log('it works');
        add_product();

    });
     $('#add_category').on('click', function(e) {
        // console.log('it works');
        add_category();

    });
     $('.delete_category').on('click', function(e) {
        // console.log('it works');
        var c_id = $(this).attr('name');
        delete_category(c_id);

    });
});

function add_product(){
    var name = $('#name').val();
    var category = $('#category').val();
    var price = $('#price').val();
    var quantity = $('#quantity').val();
    var description = $('#description').val();
    console.log(name + category + price + quantity + description );
    var sendData =$.ajax({
            method: "POST",
            url: "add_product.php",
            data: {
                name: name,
                category: category,
                price : price,
                quantity: quantity,
                description: description
            }
    })
    .done(function( msg ) {
        console.log('done products data');
    });
}


function add_category(){
    var cid = $('#cid').val()
    var name = $('#name').val();
    var description = $('#description').val();
    console.log(cid + name + description );
    var sendData =$.ajax({
            method: "POST",
            url: "add_category.php",
            data: {
                cid: cid,
                name: name,
                description: description
            }
    })
    .done(function( msg ) {
        console.log('done category data');
    });
}

function delete_category(del_id){
    console.log(del_id);
      var sendData =$.ajax({
            method: "POST",
            url: "remove_category.php",
            data: {
                cid: del_id,
            }
    })
    .done(function( msg ) {
        console.log('done removing category');
    });
}