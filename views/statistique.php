<?php
    ob_start();
?>
   <!-- Google Charts pour les statistiques -->
   <script src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:['corechart']});
        // Dessiner pour les ventes totaux
            google.charts.setOnLoadCallback(drawChart);
        // Dessiner les produits vendues
            google.charts.setOnLoadCallback(drawProducts);

            function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Client", "Total"],
                <?php
                    foreach( $clients as $k=>$client){
                        foreach($facture as $k=>$commande){
                        // echo  "[".$commande['total'].", ".$commande['date_commande']."]";
                        echo "['".$client['client_login']."',".$commande['total']."]," ;
                        }
                    }
                ?>
            ]);
            var options = {
                title: "Total des ventes",
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("colonne"));
            chart.draw(data,options);
        }
        // Partie totaux des ventes.
            function drawProducts() {
                var data = google.visualization.arrayToDataTable([
                    ["Produits", "Quantité"],
                    <?php
                        foreach($produit_commander as $k=>$produit){
                        echo "['".$produit['nom_produit']."',".$produit['quantite']."]," ;
                        }
                    ?>
                ]);
                var options = {
                    title: "Ventes des produits",
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("produit_vendue"));
                chart.draw(data,options);
            }
        </script>
    </script>

<body>
    <div class="jumbotron">
        <h1 class="display-4">Statistique</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Commandes</h5>
                <p class="card-text">Content</p>
                <div id="colonne"></div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Articles Vendues</h5>
            <p class="card-text">Content</p>
            <div id="produit_vendue"></div>
        </div>
    </div>
</body>
<?php

    $title = "statistique";
    $content = ob_get_clean();
    require 'includes/template_chartjs.php';

?>
