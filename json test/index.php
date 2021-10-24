<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  
  <title>Live Search dari File Json</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
     #resultlist {
      position: absolute;
      width: 81%;
      max-width:89%;
      cursor: pointer;
      overflow-y: auto;
      max-height: 400px;
      box-sizing: border-box;
      z-index: 1001;
    }
    .link-class:hover{
      background-color:#f1f1f1;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand text-white" href="index.php">
      Json
    </a>
  </nav>

  <div class="container">
    <h2 align="center" class="mb-4 mt-4">Manipulation Json</h2>
    <div align="center">
      <input type="text" id="name" placeholder="Cari Data...." class="form-control" />
    </div>
    <ul class="list-group" id="resultlist"></ul>
  </div>

  <div class="text-center fixed-bottom">© <?php echo date('Y'); ?> Copyright:
      
  </div>
</body>
</html>

<script src="js/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $.ajaxSetup({ cache: false });
    $('#name').keyup(function(){
        $('#resultlist').html('');
        $('#state').val('');
        var searchField = $('#name').val();
        var expression = new RegExp(searchField, "i");

        $.getJSON('data2.json', function(data) {
          $.each(data, function(key, value){
            if (value.name.search(expression) != -1 ||
             value.type,tags.search(expression) != -1 
           ){
              $('#resultlist').append(`
                <li class="list-group-item link-class">
                <span class="tags">`+value.tags+` "class="img-thumbnail"</span>
                  
                  <span class="nama">`+value.name+`</span>
                  <span class="text-muted" style="float: right;">`+value.type,tags+`</span>
                 
                </li>`);
            }
          });   
        });
    });

    $('#resultlist').on('click', 'li', function() {
      let name = $(this).children('.nama').text();

      $('#name').val(name);
      $("#resultlist").html('');
    });
  });
</script>

