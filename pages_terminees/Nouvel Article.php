<!DOCTYPE html>
<html lang="en">

    <head>  
        <?php include 'header.php';?>
    </head>  

    <body>
        
        <div class="container">
            <h2> <input type="text" placeholder="Ajouter un titre" class="border border-o"></h2>
            <!-- inserer un photo -->

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>

            </div>

            <form action="/action_page.php">
                <div class="form-group">
                    
                    <textarea class="form-control" rows="8" id="comment" name="text"></textarea>
                    
                </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>

            </form>
            
            <?php include 'footer.php';?>
            
        </div>

        
    
    
        </div>


     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    </body>
</html>