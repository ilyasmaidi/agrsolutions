<?php 
session_start();
include ("../config/dbcon.php");
include ("../middelwar/adminMiddleware.php");
include("./includes/header.php"); 
?>
        <div class="container">

          <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Home</h4>
                    </div>
                    <form action="code.php" method="POST" enctype="multipart/form-data">

                    
                    <div class="card-body">
                        <div class="row">
                            <?php
                            $dataEditTop = GetAll("banner");
                            if(mysqli_num_rows($dataEditTop) > 0)
                            {
                
                                $newData = mysqli_fetch_array($dataEditTop);
                                
                                ?>

                            <div class="col-md-6">
                                <input type="hidden" name="edihome_id" value="<?=$newData['id']?>">
                                <label for="">Name</label>
                                <input type="text" name="name" value="<?=$newData['name']?>" class="form-control" placeholder="Enter Location">
                            </div>
                            <div class="col-md-6">
                                <label for="">Slug</label>
                                <input type="text" name="slug" value="<?=$newData['slug']?>" class="form-control" placeholder="Enter email">
                            </div>

                            <div class="col-md-12">
                                <label for="">Contact</label>
                                <input type="text" name="contact" value="<?=$newData['contact']?>" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="col-md-12">
                                <label for="">Download</label>
                                <input type="text" name="download" value="<?=$newData['download']?>" class="form-control" placeholder="Enter email">
                            </div>
                            

                            <div class="col-md-12">
                                            <label for="">Upload Logo</label>
                                            <input type="file" name="image" class="form-control" >
                                            <label for="">Current Logo</label>
                                            <input type="hidden" name="old_image" value="<?=$newData['image']?>">
                                            <img src="../uploads/<?=$newData['image']?>" width="50px" height="50px" alt="">
                                        </div>        
                            
                            
                            <div class="com-md-12">
                                <button name="update_banner_btn" type="submit" class="btn btn-primary">Save</button>
                            </div>





                                <?php
                            }
                            ?>
                            

                        </div>
                        
                    </div>

                    </form>
                </div>
            </div>
          </div>      
            
        </div>
<?php include("./includes/footer.php") ?>