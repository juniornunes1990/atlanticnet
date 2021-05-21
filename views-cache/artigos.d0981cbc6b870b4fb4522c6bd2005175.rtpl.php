<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <h6 class="element-header">
                Artigos
            </h6>
            <div class="element-box">
                <h5 class="form-header">
                Todos novidades
                </h5>
                <div class="form-desc">
                    Aqui você pode cadastrar gerenciar todas as novidades cadastradas no sistema ou adicionar, editar e apaga-lás.
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary" style="margin-top: -30px;" href="/admin/artigos/create">Adicionar Novo</a>
                    <a class="btn btn-danger" style="margin-top: -30px;" href="/admin/categories">Categorias</a><br>
                </div>
                <div class="table-responsive">
                <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th>Data de Criação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th>Data de Criação</th>
                            <th>Ações</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $counter1=-1;  if( isset($categories) && ( is_array($categories) || $categories instanceof Traversable ) && sizeof($categories) ) foreach( $categories as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <td><?php echo htmlspecialchars( $value1["destitulo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td>
                                <?php echo htmlspecialchars( $value1["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </td>
                            <td><?php echo htmlspecialchars( $value1["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td width="10%" class="row-actions">
                                <a href="/admin/artigos/<?php echo htmlspecialchars( $value1["idartigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="os-icon os-icon-ui-49"></i></a>
                                <a class="danger" href="/admin/artigos/<?php echo htmlspecialchars( $value1["idartigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete"><i class="os-icon os-icon-ui-15"></i></a>
                            </td>
                        </tr>
                        <?php } ?>	
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
