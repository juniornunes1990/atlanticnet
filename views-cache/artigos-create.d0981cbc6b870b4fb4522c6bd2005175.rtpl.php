<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
            Novo Artigo
        </h6>
        <div class="element-box">
          <form id="formValidate" action="/admin/artigos/create" method="post" enctype="multipart/form-data">
            <h5 class="form-header">
              Formulário de cadastro de artigos
            </h5>
            <div class="form-desc">
              Preencha o máximo de campos para que seu conteúdo para que possa ficar em uma melhor colocação no Ranking de busca.
            </div>
            <div class="form-group">
              <label for=""> Titulo</label>
              <input class="form-control" name="destitulo" data-error="Campo Titulo Obrigatório" placeholder="Digite o titulo de seu artigo" required="required" type="text">
              <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>          
            <div class="form-group">
              <label for=""> Categoria </label>
              <select name="idcategory" class="form-control">
              <?php $counter1=-1;  if( isset($category) && ( is_array($category) || $category instanceof Traversable ) && sizeof($category) ) foreach( $category as $key1 => $value1 ){ $counter1++; ?>
                <option value="<?php echo htmlspecialchars( $value1["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  <?php echo htmlspecialchars( $value1["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </option>
              <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label> Conteúdo do Artigo</label>
              <textarea cols="80" id="editor" class="form-control" name="desartigo" rows="5">
                <h5>Conteudo do seu artigo</h5>
              </textarea>
            </div>
            <div class="form-group">
              <label for="file">Imagem</label>
              <input type="file" class="form-control" id="file" name="file">
              <div class="box box-widget">
                
              </div>
            </div>
            <div class="form-buttons-w">
              <button class="btn btn-primary" type="submit"> Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>