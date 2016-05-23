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
    $('#get_products').on('click', function(e) {
        // console.log('it works');
        get_products();

    });
    $('#edit_category').on('click', function(e) {
        // console.log('it works');
        edit_category();

    });
     $('#save_settings').on('click', function(e) {
        // console.log('it works');
        save_settings();

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

function get_products(){
    var category = $('#category').val();
    var sendData =$.ajax({
            method: "POST",
            url: "get_products.php",
            data: {
                category: category,
            }
    })
    .done(function( msg ) {
        $('.mytable').append(msg);
    });
}

function edit_category(){
     var category = $('#categoryedit').val();
      var sendData =$.ajax({
            method: "POST",
            url: "edit_category.php",
            data: {
                category: category,
            }
    })
    .done(function( msg ) {
        console.log(JSON.parse(msg));
        var myobj=JSON.parse(msg);
        $('#cidedit').val(myobj.c_id);
        $('#nameedit').val(myobj.name);
        $('#descriptionedit').val(myobj.description);
        
    });
}

function save_settings(){
    var category = $('#categoryedit').val();
    var newcid = $('#cidedit').val();
    var newname = $('#nameedit').val();
    var newdescription = $('#descriptionedit').val();
    var sendData =$.ajax({
            method: "POST",
            url: "save_settings.php",
            data: {
                category: category,
                cid: newcid,
                name: newname,
                description: newdescription 
            }
    })
    .done(function( msg ) {
        console.log("cliked save setting")
    });
}