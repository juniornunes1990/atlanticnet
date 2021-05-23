<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
            Editar Artigo
        </h6>
        <div class="element-box">
          <form id="formValidate" action="/admin/artigos/<?php echo htmlspecialchars( $artigo["idartigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" enctype="multipart/form-data">
            <h5 class="form-header">
              Editar Artigo: <span style="color: darkcyan;"><?php echo htmlspecialchars( $artigo["destitulo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
            </h5>
            <div class="form-desc">
              Aqui edita o artigo de forma rapida e pratica.
            </div>
            <div class="form-group">
              <label for=""> Titulo</label>
              <input class="form-control" name="destitulo" data-error="Campo Titulo Obrigatório" value="<?php echo htmlspecialchars( $artigo["destitulo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Digite o titulo de seu artigo" required="required" type="text">
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
                <h5><?php echo htmlspecialchars( $artigo["desartigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
              </textarea>
            </div>
            <div class="form-group">
              <label for="file">Imagem</label>
              <input type="file" class="form-control" id="file" name="file" value="<?php echo htmlspecialchars( $artigo["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <div class="box box-widget">
                <div class="box-body">
                  <img class="img-responsive" id="image-preview" src="<?php echo htmlspecialchars( $artigo["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" width="350px" alt="Imagem">
                </div>
              </div>
            </div>
            <div class="form-buttons-w">
              <button class="btn btn-primary" type="submit"> Editar Artigo</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>