<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-i">
  <div class="content-box">   
    <div class="col-sm-12">
        <div class="element-wrapper">
          <h6 class="element-header">
            Categoria
          </h6>
          <div class="element-box">
            <form id="formValidate" action="/admin/categories/create" method="post">
              <h5 class="form-header">
                Cadastro de Categoria
              </h5>
              <div class="form-desc">
                Cadastro de categorias para organizar melhor os seus artigos.
              </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for=""> Nome</label>
                      <input class="form-control" name="descategory" data-error="Campo nome obrigatório" placeholder="Nome da Categoria" required="required" type="text">
                      <div class="help-block form-text with-errors form-control-feedback"></div>
                    </div>
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
  </div>