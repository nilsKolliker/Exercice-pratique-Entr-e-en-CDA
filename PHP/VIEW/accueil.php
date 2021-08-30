<main>
    <div></div>
    <div>
        <div class="column">
            <div class="spaceHorizon">
            </div>
            <?php
                $listeVille=VilleManager::getList();
                foreach ($listeVille as $ville) {
                    echo"".
                    "<div>".
                        "<div>".
                            "nom:".
                        "</div>".
                        "<div>".
                            $ville->getNom().
                        "</div>".
                    "</div>".
                    "<div>".
                        "<div>".
                            "numéro de département:".
                        "</div>".
                        "<div>".
                            $ville->getNumeroDeDepartement().  
                        "</div>".
                    "</div>".
                    "<div>".
                        "<div>".
                            "code postal:".
                        "</div>".
                        "<div>".
                            $ville->getCodePostal().
                        "</div>".
                    "</div>".
                    "<div>".
                        "<div>".
                            "dernière mise à jour:".
                        "</div>".
                        "<div>".
                            $ville->getDateDeMaj().
                        "</div>".
                    "</div>".
                    "<div class='spaceHorizon'></div>".
                    
                    "<div class='spaceHorizon'></div>".
                    "<div class='spaceHorizon'></div>"
                    ; 
                }
            ?>
        
        </div>
    </div>
    <div></div>
</main>