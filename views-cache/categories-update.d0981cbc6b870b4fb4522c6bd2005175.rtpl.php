<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-i">
    <div class="content-box">   
      <div class="col-sm-12">
          <div class="element-wrapper">
            <h6 class="element-header">
              Categoria  
            </h6>
            <div class="element-box">
              <form id="formValidate" action="/admin/categories/<?php echo htmlspecialchars( $category["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
                <h5 class="form-header">
                  Editar Categoria <span style="color: rgb(27, 150, 150);"><?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
                </h5>
                <div class="form-desc">
                  Edite categoria para organizar melhor os seus artigos.
                </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for=""> Nome</label>
                        <input class="form-control" name="descategory" data-error="Campo nome obrigatório" value="<?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nome da Categoria" required="required" type="text">
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>                 
                  </div>
                <div class="form-buttons-w">
                  <button class="btn btn-primary" type="submit"> Editar Categoria</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>