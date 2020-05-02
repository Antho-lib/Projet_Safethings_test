<?php
    ob_start();
?>
<header id="head">
  <div class="container">
    <div class="row">
      <h1 class="lead">Commandes</h1>
      <p class="tagline">Voici l'état des commandes. <a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus"></a></p>

  </div>
</header>
<?php if($_SESSION['user']=="admin"):?>
  <h1 class="display-4">Historique des commandes</h1>
  <!-- card pour commandes -->
  <div class="card">
      <div class="card-body">
          <h5 class="card-title">Commandes : </h5>
          <table class="table table-striped">
              <tr>
                  <th scope="col"> Prix unitaire: </th>
                  <th scope="col"> Identifiant de l'utilisateur: </th>
                  <th scope="col"> Nom du produit </th>
                  <th scope="col"> Quantité </th>
                  <th scope="col"> Pseudo l'utilisateur: </th>
                  <th scope="col"> Date: </th>
              </tr>
              <tbody>
                  <?php foreach($all_cmd as $command):?>
                      <tr>
                          <td scope="row"><?=$command['prix']?>€</td>
                          <td scope="row"><?=$command['id_client_item']?></td>
                          <td scope="row"><?=$command['nom_produit']?></td>
                          <td scope="row"><?=$command['quantite']?></td>
                          <td scope="row"><?=$command['client_login']?></td>
                          <td scope="row"> <?=$command['date_achat']?></td>
                      </tr>
                  <?php endforeach?>
              </tbody>
          </table>
      </div>
  </div>
  <div class="card">
      <div class="card-body">
          <h5 class="card-title">Commandes regroupées : </h5>
          <table class="table table-striped">
              <tr>
                  <th scope="col"> Total: </th>
                  <th scope="col"> Identifiant de l'utilisateur: </th>
                  <th scope="col"> Pseudo l'utilisateur: </th>
                  <th scope="col"> Date: </th>
              </tr>
              <tbody>
                  <?php foreach($all_prix as $command):?>
                      <tr>
                          <td scope="row"><?=$command['total']?>€</td>
                          <td scope="row"><?=$command['id_c']?></td>
                          <td scope="row"><?=$command['client_login']?></td>
                          <td scope="row"> <?=$command['date_commande']?></td>
                      </tr>
                  <?php endforeach?>
              </tbody>
          </table>
      </div>
  </div>

<?php else :?>
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Utilisateur</h5>
        <p class="card-text">User:<?= $_SESSION['user']?></p>
        <p></p>
    </div>
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Historique des commandes</h1>
        <!-- card pour commandes -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mes commandes : </h5>
                <table class="table table-striped">
                    <tr>
                        <th scope="col"> Total: </th>
                        <th scope="col"> Date: </th>
                    </tr>
                    <tbody>
                        <?php foreach($list_commande_user as $k_list=>$command):?>
                            <tr>
                                <td scope="row"><?=$command['total']?>€</td>
                                <td scope="row"> <?=$command['date_commande']?></td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    <!-- card pour articles commandées-->
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Les articles : </h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"> Produit:</th>
                        <th scope="col" > Référence: </th>
                        <th scope="col" > Prix: </th>
                        <th scope="col" > Quantité: </th>
                        <th scope="col" > Date de commande:  </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($item_commander as $k_item=>$list_item):?>
                        <tr>
                            <td scope="row"><?=$list_item['nom_produit']?> </td>
                            <td scope="row"> <?=$list_item['ref']?> </td>
                            <td scope="row"> <?=$list_item['prix']?>€</td>
                            <td scope="row"> <?=$list_item['quantite']?></td>
                            <td scope="row"> <?=$list_item['date_achat']?></td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
<?php endif ?>
<?php
    $title = "shopping_cart";
    $content = ob_get_clean();
    require 'includes/template.php';
?>
