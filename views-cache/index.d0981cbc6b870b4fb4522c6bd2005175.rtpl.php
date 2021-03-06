<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-i">
  <div class="content-box">
    <div class="row pt-4">
      <div class="col-sm-12">
        <!--START - Grid of tablo statistics-->
        <div class="element-wrapper">
          <div class="element-actions">
            <form class="form-inline justify-content-sm-end">
              <select class="form-control form-control-sm rounded">
                <option value="Pending">
                  Hoje
                </option>
                <option value="Active">
                  Última semana
                </option>
                <option value="Cancelled">
                  Últimos 30 dias
                </option>
              </select>
            </form>
          </div>
          <h6 class="element-header">
            Dashboard
          </h6>
          <div class="element-content">
            <div class="tablo-with-chart">
              <div class="row">
                <div class="col-sm-5 col-xxl-4">
                  <div class="tablos">
                    <div class="row mb-xl-2 mb-xxl-3">
                      <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="#">
                          <div class="value">
                            4%
                          </div>
                          <div class="label">
                            CPU
                          </div>
                        </a>
                      </div>
                      <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                          <div class="value">
                            40
                          </div>
                          <div class="label">
                            Clientes Online
                          </div>
                          <div class="trending trending-up-basic">
                            <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                          <div class="value">
                            52
                          </div>
                          <div class="label">
                            Todos Clientes
                          </div>
                          <div class="trending trending-up-basic">
                            <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
                          </div>
                        </a>
                      </div>
                      <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="#">
                          <div class="value">
                            7
                          </div>
                          <div class="label">
                            Em Atraso
                          </div>
                          <div class="trending trending-down-basic">
                            <span>12%</span><i class="os-icon os-icon-arrow-down"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-7 col-xxl-8">
                  <!--START - Chart Box-->
                  <div class="element-box pl-xxl-5 pr-xxl-5">
                    <div class="el-tablo bigger highlight bold-label">
                      <div class="value">
                        27
                      </div>
                      <div class="label">
                        Trafego/mb
                      </div>
                    </div>
                    <div class="el-chart-w">
                      <canvas height="170px" id="lineChart" width="600px"></canvas>
                    </div>
                  </div>
                  <!--END - Chart Box-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--END - Grid of tablo statistics-->
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7 col-xxl-6">
        <!--START - Customers with most tickets-->
        <div class="element-wrapper">
          <div class="element-actions">
            <form class="form-inline justify-content-sm-end">
              <select class="form-control form-control-sm rounded">
                <option value="Pending">
                  Today
                </option>
                <option value="Active">
                  Last Week 
                </option>
                <option value="Cancelled">
                  Last 30 Days
                </option>
              </select>
            </form>
          </div>
          <h6 class="element-header">
            Clientes por região
          </h6>
          <div class="element-box">
            <div class="table-responsive">
              <table class="table table-lightborder">
                <thead>
                  <tr>
                    <th>
                     Nome
                    </th>
                    <th>
                      Plano
                    </th>
                    <th>
                      Localização
                    </th>
                    <th class="text-center">
                      Status
                    </th>
                    <th class="text-right">
                      UPtime
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="user-with-avatar">
                        <img alt="" src="img/avatar1.jpg"><span class="d-none d-xl-inline-block">Nome Conteudo </span>
                      </div>
                    </td>
                    <td class="text-center">
                      15 mb
                    </td>
                    <td class="text-center">
                      Colinas do Sul
                    </td>
                    <td class="text-center">
                      <div class="status-pill green" data-title="Venci em 10 dias" data-toggle="tooltip"></div>
                    </td>
                    <td class="text-right">
                      <span>Hoje </span><span class="smaller lighter">1:52pm</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--END - Customers with most tickets-->
      </div>
      <div class="col-sm-5 col-xxl-6">
        <!--START - Questions per Product-->
        <div class="element-wrapper">
          <div class="element-actions">
            <form class="form-inline justify-content-sm-end">
              <select class="form-control form-control-sm rounded">
                <option value="Pending">
                  Today
                </option>
                <option value="Active">
                  Last Week 
                </option>
                <option value="Cancelled">
                  Last 30 Days
                </option>
              </select>
            </form>
          </div>
          <h6 class="element-header">
            Questions per Product
          </h6>
          <div class="element-box">
            <div class="os-progress-bar primary">
              <div class="bar-labels">
                <div class="bar-label-left">
                  <span class="bigger">MailGun</span>
                </div>
                <div class="bar-label-right">
                  <span class="info">25 Tickets / 10 Pending</span>
                </div>
              </div>
              <div class="bar-level-1" style="width: 100%">
                <div class="bar-level-2" style="width: 70%">
                  <div class="bar-level-3" style="width: 40%"></div>
                </div>
              </div>
            </div>
            <div class="os-progress-bar primary">
              <div class="bar-labels">
                <div class="bar-label-left">
                  <span class="bigger">PhotoBook</span>
                </div>
                <div class="bar-label-right">
                  <span class="info">18 Tickets / 7 Pending</span>
                </div>
              </div>
              <div class="bar-level-1" style="width: 100%">
                <div class="bar-level-2" style="width: 40%">
                  <div class="bar-level-3" style="width: 20%"></div>
                </div>
              </div>
            </div>
            <div class="os-progress-bar primary">
              <div class="bar-labels">
                <div class="bar-label-left">
                  <span class="bigger">Transferra</span>
                </div>
                <div class="bar-label-right">
                  <span class="info">15 Tickets / 12 Pending</span>
                </div>
              </div>
              <div class="bar-level-1" style="width: 100%">
                <div class="bar-level-2" style="width: 60%">
                  <div class="bar-level-3" style="width: 30%"></div>
                </div>
              </div>
            </div>
            <div class="os-progress-bar primary">
              <div class="bar-labels">
                <div class="bar-label-left">
                  <span class="bigger">Versioner</span>
                </div>
                <div class="bar-label-right">
                  <span class="info">12 Tickets / 4 Pending</span>
                </div>
              </div>
              <div class="bar-level-1" style="width: 100%">
                <div class="bar-level-2" style="width: 30%">
                  <div class="bar-level-3" style="width: 10%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--END - Questions per product-->
      </div>
    </div>
    <div class="row pt-4">
      <div class="col-sm-12">
        <!--START - Recent Ticket Comments-->
        <div class="element-wrapper">
          <h6 class="element-header">
            Ordens de Serviços
          </h6>
          <div class="element-box-tp">
            <div class="table-responsive">
              <table class="table table-padded">
                <thead>
                  <tr>
                    <th></th>
                    <th>
                      Clientes
                    </th>
                    <th>
                      Mensagem
                    </th>
                    <th class="text-center">
                      Plano
                    </th>
                    <th>
                      Vencimento
                    </th>
                    <th>
                      Status
                    </th>
                    <th>
                      Ações
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">
                      <input class="form-control" type="checkbox">
                    </td>
                    <td>
                      <div class="user-with-avatar">
                        <img alt="" src="img/avatar1.jpg"><span>John Mayers</span>
                      </div>
                    </td>
                    <td>
                      <div class="smaller lighter">
                        I have enabled the software for you, you can try now...
                      </div>
                    </td>
                    <td>
                      <span>5</span><span class="smaller lighter">mb</span>
                    </td>
                    <td class="text-center">
                      <span>10/05/2021</span>
                    </td>
                    <td class="nowrap">
                      <span class="status-pill smaller green"></span><span>Ativo</span>
                    </td>
                    <td class="row-actions">
                      <a href="#"><i class="os-icon os-icon-grid-10"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <input class="form-control" type="checkbox">
                    </td>
                    <td>
                      <div class="user-with-avatar">
                        <img alt="" src="img/avatar2.jpg"><span>Mike Bishop</span>
                      </div>
                    </td>
                    <td>
                      <div class="smaller lighter">
                        Please approve this request so we can move...
                      </div>
                    </td>
                    <td>
                      <span>10</span><span class="smaller lighter">mb</span>
                    </td>
                    <td class="text-center">
                      <span>10/05/2021</span>
                    </td>
                    <td class="nowrap">
                      <span class="status-pill smaller red"></span><span>Cortado</span>
                    </td>
                    <td class="row-actions">
                      <a href="#"><i class="os-icon os-icon-grid-10"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <input class="form-control" type="checkbox">
                    </td>
                    <td>
                      <div class="user-with-avatar">
                        <img alt="" src="img/avatar3.jpg"><span>Terry Crews</span>
                      </div>
                    </td>
                    <td>
                      <div class="smaller lighter">
                        We will need some login credentials to make...
                      </div>
                    </td>
                    <td>
                      <span>10</span><span class="smaller lighter">mb</span>
                    </td>
                    <td class="text-center">
                      <span>10/05/2021</span>
                    </td>
                    <td class="nowrap">
                      <span class="status-pill smaller yellow"></span><span>Atrasado</span>
                    </td>
                    <td class="row-actions">
                      <a href="#"><i class="os-icon os-icon-grid-10"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <input class="form-control" type="checkbox">
                    </td>
                    <td>
                      <div class="user-with-avatar">
                        <img alt="" src="img/avatar1.jpg"><span>Phil Collins</span>
                      </div>
                    </td>
                    <td>
                      <div class="smaller lighter">
                        I have enabled the software for you, you can try now...
                      </div>
                    </td>
                    <td>
                      <span>5</span><span class="smaller lighter">mb</span>
                    </td>
                    <td class="text-center">
                      <span>10/05/2021</span>
                    </td>
                    <td class="nowrap">
                      <span class="status-pill smaller yellow"></span><span>Atrasado</span>
                    </td>
                    <td class="row-actions">
                      <a href="#"><i class="os-icon os-icon-grid-10"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--END - Recent Ticket Comments-->
      </div>
    </div>
  </div>
</div>