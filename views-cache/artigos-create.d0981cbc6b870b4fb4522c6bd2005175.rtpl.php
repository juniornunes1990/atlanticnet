<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="col-sm-12">
    <div class="element-wrapper">
      <div class="element-box">
        <form id="formValidate" action="/admin/artigos/create" method="post">
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
            <label for=""> Categoria</label>
            <select name="" class="form-control">
            <?php $counter1=-1;  if( isset($categories) && ( is_array($categories) || $categories instanceof Traversable ) && sizeof($categories) ) foreach( $categories as $key1 => $value1 ){ $counter1++; ?>
              <option value="">
                <?php echo htmlspecialchars( $value1["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
              </option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label> Conteúdo do Artigo</label>
            <textarea class="form-control" name="desartigo" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="">URL</label>
            <input class="form-control" type="text" name="desurl" data-error="Campo URL Obrigatório" placeholder="Digite a URL do seu artigo" required="required">
            <div class="help-block form-text with-errors form-control-feedback"></div>
          </div>
          <div class="form-buttons-w">
            <button class="btn btn-primary" type="submit"> Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>