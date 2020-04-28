<?php
    include 'models/shopping_cart.php';

    $list=show();

  if(isset($_SESSION['panier'])){
        $total_panier=0;
        $total_quantité=0;
        $total_prix=0;
        // ajouter
        if(isset($_POST['ajouter'])){
            $ref_produit = $_POST['ref_id'];
            $count = count($_SESSION['panier']);
            $item_tableau =  add_produit_dans_panier($ref_produit);
            $_SESSION['panier'][$count] = $item_tableau;

        }
        // retire un produit
        if(isset($_POST['retirer'])){
            // ref du produit a retirer
            $ref =$_POST['ref_retirer'];
            foreach($_SESSION['panier'] as $key=>$val){
                if($ref==$_SESSION['panier'][$key]['ref']){
                    unset($_SESSION['panier'][$key]);
                }
            }
        }
        // vide le panier
        if(isset($_POST['vider'])){
            unset($_SESSION['panier']);
            $_SESSION['panier']=array();
        }

        if(isset($_POST['valider'])){
            // met total du panier dans une variable.
            $total_db =$_SESSION['total'];
            $id=$_SESSION['id'];
            $panier=$_SESSION['panier'];
            commander($id,$total_db);
            foreach($panier as $count=>$item){
                $produit_nom_achat=$item['nom'];
                $prix_item=$item['prix'];
                $quantite_item=$item['quantite'];
                $ref_item=$item['ref'];
                commande_panier($id,$ref_item,$prix_item,$quantite_item,$produit_nom_achat);
            }
            // vide
            unset($_SESSION['panier']);
            // recrée un panier
            // $_SESSION['panier']= array();

        }
  }else{
        // creation pannier si pas
        $_SESSION['panier']= array();
    }

    include 'views/shopping_cart.php';

?>
