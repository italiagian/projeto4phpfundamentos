<?php

//lista páginas existentes
$pages = listar('pages');
?>
                    <div class="col-md-9">
                        <div class="box">
                            <div class="box-header list-group-item active">
                                <?php
                                if(isset($_GET['id'])){
                                    $idDaPagina = $_GET['id'];
                                    deletar('pages', $idDaPagina);
                                    echo "<h3>Página deletada com sucesso!</h3>";
                                    $refresh = '<meta http-equiv="refresh" content="1; index.php" />';
                                    exit ($refresh); 
                                }
                                ?>
                            </div>
                            <div class=" box-table">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>PÁGINAS</th>
                                            <th>CONTEÚDO</th>
                                            <th>CONTEÚDO PRINCIPAL</th>
                                            <th>CONTENT</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($pages as $value) {
                                        ?>
                                        <tr>
                                        <td><?php echo $value['id'] ;?></td>
                                        <td><?php echo $value['pages'] ;?></td>
                                        <td><?php echo $value['conteudo_titulo'] ;?></td>
                                        <td><?php echo $value['conteudo_principal'] ;?></td>
                                        <td><?php echo $value['conteudo_content'] ;?></td>
                                        <td><a href="alterarPages?id=<?php echo $value['id'] ;?>"><button class="btn btn-info" type="submit" name="alterar" >Alterar</button></a></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>