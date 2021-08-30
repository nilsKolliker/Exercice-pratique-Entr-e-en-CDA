<div>
    <div></div>
    <div>
        <?php
        if(isset($_GET['id'])){//si on a un id, on cherche, sinon, non
            $ville=VilleManager::findById($_GET['id']);
            echo'
            <form action="index.php?codePage=action" method="post">
                <div>
                    <div>
                        <label for="id">id:</label>
                    </div>
                    <div>
                        <input name="id" value="'.$ville->getId().'" disabled />
                    </div>
                </div>
                <div>
                    <div>
                        <label for="nom">nom:</label>
                    </div>
                    <div>
                        <input name="nom" value="'.$ville->getNom().'"/>
                    </div>
                </div>
                <div>
                    <div>
                        <label for="numeroDeDepartement">numéro de département:</label>
                    </div>
                    <div>
                        <input name="numeroDeDepartement" value="'.$ville->getNumeroDeDepartement().'"  />
                    </div>
                </div>
                <div>
                    <div>
                        <label for="codePostal">code postal:</label>
                    </div>
                    <div>
                        <input name="codePostal" value="'.$ville->getCodePostal().'"  />
                    </div>
                </div>
                <div>
                    <div></div>
                    <div>
                        <button type="submit">Modifier</button>
                    </div>
                </div>
            </form>';
        }
        ?>
    </div>
    <div></div>
</div>