<?php
/*
 * Plugin Name: SR Setup — Criar Páginas
 * Description: Cria automaticamente todas as páginas do site Soluções & Reformas com um clique.
 * Version: 1.0
 */

// Adiciona item no menu Ferramentas
add_action('admin_menu', function () {
    add_management_page(
        'SR Setup',
        'SR — Criar Páginas',
        'manage_options',
        'sr-setup',
        'sr_setup_render_page'
    );
});

function sr_setup_render_page() {
    $mensagem = '';

    if ( isset($_POST['sr_criar']) && check_admin_referer('sr_setup_action') ) {
        $resultado = sr_criar_todas_paginas();
        $mensagem  = $resultado;
    }
    ?>
    <div class="wrap">
        <h1>⚙️ Soluções &amp; Reformas — Setup de Páginas</h1>
        <p>Clique no botão para criar <strong>automaticamente</strong> todas as páginas do site (página inicial + 17 serviços + 2 páginas regionais).</p>
        <p style="color:#666;">Se uma página já existir, ela <strong>não</strong> será recriada.</p>

        <?php if ($mensagem): ?>
        <div class="notice notice-success"><p><?php echo $mensagem; ?></p></div>
        <?php endif; ?>

        <form method="post" style="margin-top:20px;">
            <?php wp_nonce_field('sr_setup_action'); ?>
            <input type="submit" name="sr_criar"
                   class="button button-primary button-hero"
                   value="✅ Criar todas as páginas agora">
        </form>
    </div>
    <?php
}

function sr_criar_pagina($titulo, $slug, $template_file = '') {
    // Verifica se já existe
    $existente = get_page_by_path($slug);
    if ($existente) {
        return "↩️ <em>$titulo</em> já existe.";
    }

    $id = wp_insert_post([
        'post_title'   => $titulo,
        'post_name'    => $slug,
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_content' => '',
    ]);

    if ( is_wp_error($id) ) {
        return "❌ Erro ao criar <em>$titulo</em>: " . $id->get_error_message();
    }

    if ($template_file) {
        update_post_meta($id, '_wp_page_template', $template_file);
    }

    return "✅ <em>$titulo</em> criada (ID $id).";
}

function sr_criar_todas_paginas() {
    $linhas = [];

    // ── Página inicial ───────────────────────────────────────────────────────
    $home_existente = get_page_by_path('inicio');
    if ( ! $home_existente ) {
        $home_id = wp_insert_post([
            'post_title'   => 'Início',
            'post_name'    => 'inicio',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ]);
        // front-page.php é carregado automaticamente quando definimos página estática
        update_option('page_on_front', $home_id);
        update_option('show_on_front', 'page');
        $linhas[] = "✅ <em>Início</em> criada e definida como página inicial (ID $home_id).";
    } else {
        // Garante que está definida como home mesmo assim
        update_option('page_on_front', $home_existente->ID);
        update_option('show_on_front', 'page');
        $linhas[] = "↩️ <em>Início</em> já existe — definida como página inicial.";
    }

    // ── Serviços (template-servico.php) ─────────────────────────────────────
    $servicos = [
        'Marceneiro'                            => 'marceneiro',
        'Eletricista'                           => 'eletricista',
        'Bombeiro Hidráulico'                   => 'bombeiro-hidraulico',
        'Pedreiro'                              => 'pedreiro',
        'Pintor'                                => 'pintor',
        'Detecção de Vazamentos'                => 'deteccao-de-vazamentos',
        'Gesseiro'                              => 'gesseiro',
        'Telhadista'                            => 'telhadista',
        'Gasista, Aquecedores e Boiler'         => 'gasista-aquecedores-boiler',
        'Reformas em Geral'                     => 'reformas-em-geral',
        'Desentupimento'                        => 'desentupimento',
        "Bomba D'Água"                          => 'bomba',
        'Inspeções Prediais e Fachadas'         => 'inspecoes-prediais-fachadas',
        'Contrato de Manutenção Predial'        => 'contrato-manutencao-predial',
        'Portão Eletrônico e Controle de Acesso'=> 'portao-eletronico',
        'CFTV'                                  => 'cftv',
        'Piscinas'                              => 'piscinas',
    ];

    foreach ($servicos as $titulo => $slug) {
        $linhas[] = sr_criar_pagina($titulo, $slug, 'template-servico.php');
    }

    // ── Páginas regionais ────────────────────────────────────────────────────
    $linhas[] = sr_criar_pagina('Zona Sul',       'zona-sul',      'template-zona-sul.php');
    $linhas[] = sr_criar_pagina('Barra e Recreio','barra-recreio', 'template-barra-recreio.php');

    // ── Flush rewrite rules ──────────────────────────────────────────────────
    flush_rewrite_rules();

    return implode('<br>', $linhas);
}
