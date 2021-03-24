    <header class="header fixed-top">
            <nav class="navbar navbar-expand-md navbarColor">
                <span class="navbar-brand logo">Telzir</span>
            </nav>
    </header>
    <!-- Menu Top Navigation -->

    <main class="main">
        <section class="d-flex align-items-center section-style">
            <div class="container d-flex flex-column align-items-center fale-mais" data-aos="fade-up">
                <h1 class="title title">Calcule o valor da ligação com <span class="title-card">FaleMais</span></h1>
                <div class="card-group row">
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                            <h1 class="card-title title-card">Planos FaleMais</h1>
                            <a href="#" data-toggle="modal" data-target="#faleMaisModal" class="btn btn-primary button-orange">Calcular</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    
    <footer class="footer fixed-bottom">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>2021</span></strong>. Todos os direitos reservados.
            </div>
            <div class="credits">
                Desenvolvido por <strong><span>Daniela Delfino</span></strong>.
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <div class="modal fade" id="faleMaisModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fale Mais "Plano aqui(com js)"</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-padding">
                    <div>
                        <div class="form-group">
                            <label for="origemDestino">Código de Origem e Destino</label>
                            <select id="origemDestino" class="form-control">
                                <option value="0">Selecione a origem/destino</option>
                                <?php foreach ($regioes as $regiao) { ?>    
                                    <option value="<?php echo $regiao->p_min; ?>"><?php echo $regiao->origem_destino; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="planos">Planos</label>
                            <select id="planos" class="form-control">
                                <option value="0">Selecione o Plano</option>
                                <?php foreach ($planos as $plano) { ?>    
                                    <option value="<?php echo $plano->minutos; ?>"><?php echo $plano->nome; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="minutos">Tempo de Ligação (em minutos)</label>
                            <input type="number" min="0" stap="1" class="form-control" id="minutos">
                        </div>
                        
                        <div class="card-group row">
                            <div class="card text-center" style="width: 18rem;">
                                <div class="card-header card-value">Com o FaleMais </div>
                                <div class="card-body">
                                    <span id="valorComPlano"></span>
                                </div>
                            </div>
                            <div class="card text-center" style="width: 18rem;">
                                <div class="card-header card-value">Sem o FaleMais </div>
                                <div class="card-body">
                                    <span id="valorSemPlano"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>