<!DOCTYPE html>
<html>
<head>
    <title>PHP Codeigniter - Dynamically Add or Remove input fields using JQuery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>
<!-- <h1>Coba Tabel</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <button class="btn btn-primary btn-sm" id="add">add</button>
            <table class="table" id="databarang">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>select</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($barang as $key):?>
                        <tr><td><?= $no++ ?></td>
                        <td><?= $key['kode_barang'] ?></td>
                        <td><?= $key['nama_barang'] ?></td>
                        
                        <td><input type="checkbox"></td>
                        <td><button class="btn btn-primary btn-sm" id="add">add</button></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table" id="databarang2">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table> -->
            <!-- <div class="card">
                <div class="card-header">
                    Barang yang dipilih
                </div>
                <div class="card-body" id="list">
                    <li></li>    
                </div>            
            </div> -->
        </div>
    </div>
</div>

<script>
    $(function(){
        $(document).on("click","#add", function(){
            var getselectedvalues=$("#databarang input:checked").parents("tr").appendTo($("#databarang2 tbody").add(getselectedvalues));
        })
    })
</script>
   
<div class="container">
    <h2 align="center">PHP - Dynamically Add or Remove input fields using JQuery</h2>  
    <div class="form-group">
         <form name="add_name" method="POST" action="/add-more-post">
   
            <div class="table-responsive">  
                <table class="table table-bordered" id="dynamic_field">  
                    <tr>  
                        <td><input type="text" name="addmore[][name]" placeholder="Enter your Name" class="form-control name_list" required="" /></td>  
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table>  
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />  
            </div>
   
         </form>  
    </div> 
</div>
   
<script type="text/javascript">
    $(document).ready(function(){      
      var i=1;  
   
      $('#add').click(function(){  
           i++;  
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="addmore[][name]" placeholder="Enter your Name" class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button></td></tr>');  
      });

      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
  
    });  
</script>
</body>
</html>