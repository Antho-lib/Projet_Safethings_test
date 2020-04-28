<?php
    require 'models/admin.php';

    $list_produit = all_items();

    if(isset($_POST['produit_name']) && !empty($_POST['produit_name']) && isset($_POST['produit_price']) && !empty($_POST['produit_price']) && isset($_POST['produit_description']) && !empty($_POST['produit_description'])){
        $nom =$_POST['produit_name'] ;
        $prix = $_POST['produit_price'];
        $description = $_POST['produit_description'];

        add_product($nom,$prix,$description);
    }

    if(isset($_POST['upload_image'])){
        // immage
        $file = $_FILES['image'];
        $fileName = $_FILES['image']['name'];
        // temp location
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];
        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));
        // voir quel fichier autoriser
        $allowed = array('jpg');
        if(in_array($fileActualExt,$allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){
                    $fileNameNew =  $fileName;
                    add_image($fileNameNew);
                    $fileDestination = 'images/'.$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                }
            }
        }
    }

    if(isset($_POST['modifier_nom'])){
        if(isset($_POST['ref_nom'])){
              $ref =$_POST['ref_nom'];
              $nom=$_POST['produit_name'];
              change_name($ref,$nom);
          }
    }

    if(isset($_POST['modifier_prix'])){
        if(isset($_POST['ref_prix'])){
              $ref =$_POST['ref_prix'] ;
              $prix=$_POST['produit_price'];
              change_prix($ref,$prix);
          }
      }
    if(isset($_POST['modifier_description'])){
        if(isset($_POST['ref_description'])){
            $ref =$_POST['ref_description'] ;
            $description=$_POST['produit_description'];
            change_description($ref,$description);
        }
    }

    if(isset($_POST['delete'])){
      if(isset($_POST['ref'])){
            $ref =$_POST['ref'] ;
            delete_product($ref);
        }
    }

    require 'views/admin.php';

?>
