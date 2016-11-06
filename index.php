<?php include_once "header.php" ?>
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
          </div>
        </nav>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" id="jumbotron">
          <div class="container">
            <h1>Probabilidade e estatística</h1>
            <p>Exemplo de tabela com calculos de frequência simples, absoluta acumulada e relativa.</p>
          </div>
        </div>

      <div class="container" id="loop">
        <section>
          <!-- Example row of columns -->
          <div class="row">
            <div class="col-md-4">
              <table class="table table-striped">
                <thead>
                  <tr><th colspan="5">Rendimentos mensais da Loja X <small>(1 U.M. = $100)</small></th></tr>
                </thead>
                <tfoot>
                  <tr><td colspan="5">Porto Alegre - março 2003</td></tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td><?php echo $tb->col1; ?></td>
                    <td><?php echo $tb->col2; ?> (fi)</td>
                    <td>Freq. acumulada (Fi)</td>
                    <td>Percentagem (fri)</td>
                    <td>Ponto médio (xi)</td>
                  </tr>
                  <?php echo $tabela; ?>
                </tbody>
              </table>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <!-- component template -->
            </div>
          </div>
        </section>

        <!-- ******* -->

        <hr>
<?php include_once "footer.php" ?>