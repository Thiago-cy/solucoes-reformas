<?php
/**
 * Template Name: Serviço por Bairro
 *
 * Página SEO individual para cada combinação serviço + bairro.
 * Campos personalizados obrigatórios: servico_slug, bairro_slug
 */

$post_id     = get_the_ID();
$all_svcs    = sr_services_data();
$all_bairros = sr_neighborhoods_data();

$servico_slug = get_post_meta( $post_id, 'servico_slug', true );
$bairro_slug  = get_post_meta( $post_id, 'bairro_slug',  true );

$s      = $all_svcs[ $servico_slug ]    ?? null;
$bairro = $all_bairros[ $bairro_slug ] ?? null;

if ( ! $s || ! $bairro ) {
    get_header();
    echo '<div class="container mx-auto px-6 py-20 text-center">
        <h1 class="text-2xl font-bold text-slate-900 mb-4">Configuração incompleta</h1>
        <p class="text-slate-600 mb-2">Defina os campos personalizados desta página no painel do WordPress:</p>
        <ul class="text-sm text-slate-500 mb-6 list-disc list-inside">
            <li><code>servico_slug</code> — ex: <em>eletricista</em>, <em>pedreiro</em></li>
            <li><code>bairro_slug</code>  — ex: <em>copacabana</em>, <em>barra-da-tijuca</em></li>
        </ul>
        <a href="' . esc_url( home_url('/') ) . '" class="inline-block bg-amber-600 text-white px-6 py-3 rounded-md hover:bg-amber-700 transition">← Voltar ao Início</a>
    </div>';
    get_footer();
    exit;
}

$bn        = $bairro['nome'];
$b_em      = $bairro['em'];
$b_regiao  = $bairro['regiao'];
$b_reg_url = $bairro['regiao_url'];

$hero_url  = 'https://images.unsplash.com/' . esc_attr( $s['hero_image'] ) . '?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80';
$wa_text   = "Olá! Vi o site de vocês e gostaria de um orçamento para {$s['title']} {$b_em}\n\nMeu nome: \nDetalhe do que preciso: ";
$wa_url    = 'https://wa.me/5521999989553?text=' . rawurlencode( $wa_text );
$is_custom = in_array( $s['icon'], ['icon-telha','icon-bomba','icon-vazamento'] );

// 2 FAQs gerados dinamicamente para o bairro + serviço
$bairro_faqs = [
    [
        'q' => "Vocês atendem {$s['title']} {$b_em}?",
        'a' => "Sim. Atendemos {$b_em} e em toda a região da {$b_regiao} com equipe própria e deslocamento ágil. Realizamos visita técnica para avaliar o serviço e apresentar o orçamento sem compromisso. Entre em contato pelo WhatsApp ou telefone para agendar.",
    ],
    [
        'q' => "Qual o prazo para atendimento de {$s['title']} {$b_em}?",
        'a' => "Na maioria dos casos conseguimos realizar a visita técnica em até 48 horas. Para serviços urgentes, entre em contato pelo WhatsApp para verificar a disponibilidade imediata {$b_em}.",
    ],
];

$all_faqs  = sr_faqs_data();
$page_faqs = array_merge( $bairro_faqs, $all_faqs[ $servico_slug ] ?? [] );

// JS: lista de outros serviços para o mini-grid
$js_svcs = [];
foreach ( $all_svcs as $key => $svc ) {
    if ( $key === $servico_slug ) continue;
    $js_svcs[] = sprintf(
        '{title:%s,icon:%s,url:%s}',
        json_encode( $svc['title'],            JSON_UNESCAPED_UNICODE ),
        json_encode( $svc['icon'],             JSON_UNESCAPED_UNICODE ),
        json_encode( home_url('/' . $key . '/'), JSON_UNESCAPED_UNICODE )
    );
}

get_header();
?>

<!-- BREADCRUMB -->
<div class="bg-white border-b border-slate-100 py-3">
    <div class="container mx-auto px-6">
        <nav class="text-sm text-slate-500 flex items-center gap-2 flex-wrap">
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="hover:text-amber-600 transition">Início</a>
            <i class="fas fa-chevron-right text-xs text-slate-300"></i>
            <a href="<?php echo esc_url( home_url( '/' . $bairro_slug . '/' ) ); ?>" class="hover:text-amber-600 transition"><?php echo esc_html( $bn ); ?></a>
            <i class="fas fa-chevron-right text-xs text-slate-300"></i>
            <span class="text-slate-800 font-semibold"><?php echo esc_html( $s['title'] ); ?></span>
        </nav>
    </div>
</div>

<!-- HERO -->
<section class="min-h-[520px] flex items-center py-20"
         style="background:linear-gradient(to right,rgba(15,23,42,.93),rgba(15,23,42,.65)),url('<?php echo $hero_url; ?>') center/cover no-repeat;">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl">

            <div class="inline-flex items-center gap-2 bg-amber-600/20 border border-amber-500/30 backdrop-blur-sm text-amber-300 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">
                <i class="fas fa-map-marker-alt"></i>
                <?php echo esc_html( $bn ); ?> · Rio de Janeiro
            </div>

            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight mb-6">
                <?php echo esc_html( $s['title'] ); ?>
                <span class="text-amber-300"><?php echo esc_html( ucfirst( $b_em ) ); ?></span>
            </h1>

            <p class="text-lg text-slate-300 font-light mb-10 max-w-2xl leading-relaxed">
                <?php echo esc_html( $s['hero_desc'] ); ?>
                Atendemos <?php echo esc_html( $b_em ); ?> com equipe própria, orçamento sem compromisso e execução com garantia.
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#contato"
                   class="bg-amber-600 text-white text-center px-8 py-4 rounded-md font-semibold text-lg hover:bg-amber-700 transition shadow-lg shadow-amber-600/30">
                    Solicitar Orçamento
                </a>
                <a href="<?php echo esc_attr( $wa_url ); ?>" target="_blank"
                   class="bg-emerald-600 text-white text-center px-8 py-4 rounded-md font-semibold text-lg hover:bg-emerald-700 transition flex items-center justify-center gap-2 shadow-lg">
                    <i class="fab fa-whatsapp"></i> Falar pelo WhatsApp
                </a>
            </div>

        </div>
    </div>
</section>

<!-- SERVIÇOS REALIZADOS -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 max-w-5xl">

        <div class="mb-10">
            <h2 class="text-3xl font-bold text-slate-900 mb-4">
                Serviços de <?php echo esc_html( $s['title'] ); ?> <?php echo esc_html( $b_em ); ?>
            </h2>
            <p class="text-slate-600 leading-relaxed text-lg max-w-3xl">
                <?php echo esc_html( $s['hero_desc'] ); ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-14">
            <?php foreach ( $s['services'] as $item ) : ?>
            <div class="flex items-start gap-3 bg-slate-50 rounded-lg p-4 border border-slate-100">
                <i class="fas fa-check-circle text-amber-600 mt-0.5 shrink-0 text-lg"></i>
                <div>
                    <h4 class="font-semibold text-slate-900 text-sm"><?php echo esc_html( $item['title'] ); ?></h4>
                    <p class="text-xs text-slate-500 mt-0.5"><?php echo esc_html( $item['desc'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- DIFERENCIAIS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-amber-50 border border-amber-100 rounded-xl p-6 text-center">
                <i class="fas fa-shield-alt text-3xl text-amber-600 mb-3 block"></i>
                <h4 class="font-bold text-slate-900 mb-2">Garantia de Serviço</h4>
                <p class="text-slate-600 text-sm">Nota fiscal e garantia escrita em todos os serviços realizados.</p>
            </div>
            <div class="bg-emerald-50 border border-emerald-100 rounded-xl p-6 text-center">
                <i class="fas fa-hard-hat text-3xl text-emerald-600 mb-3 block"></i>
                <h4 class="font-bold text-slate-900 mb-2">Equipe Especializada</h4>
                <p class="text-slate-600 text-sm">Profissionais qualificados, uniformizados e credenciados para condomínios.</p>
            </div>
            <div class="bg-slate-100 border border-slate-200 rounded-xl p-6 text-center">
                <i class="fas fa-calendar-check text-3xl text-slate-600 mb-3 block"></i>
                <h4 class="font-bold text-slate-900 mb-2">Prazo Garantido</h4>
                <p class="text-slate-600 text-sm">Cronograma definido desde o início. Entregamos dentro do prazo combinado.</p>
            </div>
        </div>

    </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-slate-50 border-t border-slate-100">
    <div class="container mx-auto px-6 max-w-3xl">

        <div class="text-center mb-10">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Tire suas Dúvidas</h3>
            <h2 class="text-3xl font-bold text-slate-900 mb-3">
                Perguntas Frequentes — <?php echo esc_html( $s['title'] . ' ' . $b_em ); ?>
            </h2>
        </div>

        <div class="space-y-3">
            <?php foreach ( $page_faqs as $fi => $faq ) :
                $fid = 'bfaq-' . $fi;
            ?>
            <div class="faq-item border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center text-left px-6 py-5 bg-white hover:bg-amber-50 transition font-semibold text-slate-800 gap-4"
                        aria-expanded="false" aria-controls="<?php echo esc_attr( $fid ); ?>">
                    <span><?php echo esc_html( $faq['q'] ); ?></span>
                    <i class="faq-icon fas fa-chevron-down text-amber-600 shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-5 text-slate-600 leading-relaxed border-t border-slate-100 pt-4"
                     id="<?php echo esc_attr( $fid ); ?>">
                    <?php echo esc_html( $faq['a'] ); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <p class="text-center mt-8 text-slate-500">
            Ficou com alguma dúvida?
            <a href="<?php echo esc_attr( $wa_url ); ?>" target="_blank" class="text-amber-600 font-semibold hover:underline">
                Fale pelo WhatsApp →
            </a>
        </p>

    </div>
</section>

<!-- CTA BANNER -->
<section class="py-16 bg-amber-600">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">
            Precisa de <?php echo esc_html( $s['title'] ); ?> <?php echo esc_html( $b_em ); ?>?
        </h2>
        <p class="text-amber-100 mb-8 max-w-xl mx-auto">
            Atendemos <?php echo esc_html( $b_em ); ?> com equipe própria. Orçamento sem compromisso em até 24h.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#contato" class="bg-white text-amber-600 font-bold px-8 py-3.5 rounded-md hover:bg-amber-50 transition shadow-lg">
                Solicitar Orçamento
            </a>
            <a href="<?php echo esc_attr( $wa_url ); ?>" target="_blank"
               class="bg-emerald-500 text-white font-bold px-8 py-3.5 rounded-md hover:bg-emerald-600 transition flex items-center justify-center gap-2 shadow-lg">
                <i class="fab fa-whatsapp text-xl"></i> Chamar no WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- FORMULÁRIO -->
<section id="contato" class="py-20 bg-white border-t border-slate-200">
    <div class="container mx-auto px-6">

        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-2">
                Solicite um Orçamento <?php echo esc_html( $b_em ); ?>
            </h2>
            <p class="text-slate-500">Preencha o formulário e entraremos em contato em até 24 horas.</p>
        </div>

        <div class="max-w-2xl mx-auto bg-white p-8 md:p-10 rounded-2xl shadow-xl border border-slate-100">
            <form action="https://formsubmit.co/contato@solucoesereformas.com.br" method="POST" class="space-y-5">

                <!-- Campos ocultos -->
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_subject" value="<?php echo esc_attr( $s['title'] . ' ' . $b_em . ' — Novo Contato' ); ?>">
                <input type="hidden" name="Servico"  value="<?php echo esc_attr( $s['title'] ); ?>">
                <input type="hidden" name="Bairro"   value="<?php echo esc_attr( $bn ); ?>">

                <!-- Nome + Telefone -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-1.5 uppercase tracking-wide">
                            Nome Completo <span class="text-amber-600">*</span>
                        </label>
                        <input type="text" name="Nome" placeholder="Seu nome completo"
                               class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 text-slate-800 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm transition" required>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-1.5 uppercase tracking-wide">
                            Telefone / WhatsApp <span class="text-amber-600">*</span>
                        </label>
                        <input type="tel" name="Telefone" placeholder="(21) 9 9999-9999"
                               class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 text-slate-800 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm transition"
                               oninput="mascaraTelefone(event)" maxlength="15" required>
                    </div>
                </div>

                <!-- E-mail -->
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5 uppercase tracking-wide">
                        E-mail <span class="text-amber-600">*</span>
                    </label>
                    <input type="email" name="Email" placeholder="seu@email.com"
                           class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 text-slate-800 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm transition" required>
                </div>

                <!-- Endereço -->
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5 uppercase tracking-wide">
                        Endereço / Referência
                    </label>
                    <input type="text" name="Endereco"
                           placeholder="<?php echo esc_attr( $bn ); ?> — rua, número ou referência"
                           class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 text-slate-800 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm transition">
                </div>

                <!-- Descrição -->
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5 uppercase tracking-wide">
                        Descreva o que precisa <span class="text-amber-600">*</span>
                    </label>
                    <textarea name="Descricao" rows="4"
                              placeholder="Conte um pouco sobre o serviço que precisa..."
                              class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 text-slate-800 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm transition resize-none" required></textarea>
                </div>

                <!-- Submit -->
                <button type="submit"
                        class="w-full bg-amber-600 text-white font-bold text-lg rounded-md px-4 py-4 hover:bg-amber-700 transition shadow-lg shadow-amber-600/30">
                    Solicitar Contato Gratuito
                </button>

                <p class="text-center text-xs text-slate-400">
                    <i class="fas fa-lock mr-1"></i>
                    Seus dados são protegidos e nunca compartilhados com terceiros.
                </p>

            </form>
        </div>
    </div>
</section>

<!-- OUTROS SERVIÇOS NO BAIRRO -->
<section class="py-14 bg-slate-50 border-t border-slate-100">
    <div class="container mx-auto px-6">
        <h2 class="text-xl font-bold text-slate-900 text-center mb-8">
            Outros Serviços <?php echo esc_html( $b_em ); ?>
        </h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 max-w-6xl mx-auto" id="services-grid"></div>
        <p class="text-center mt-6">
            <a href="<?php echo esc_url( home_url('/#servicos') ); ?>" class="text-amber-600 font-semibold hover:underline text-sm">
                Ver todos os serviços →
            </a>
        </p>
    </div>
</section>

<!-- SCHEMA.ORG -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Soluções & Reformas",
  "description": "<?php echo esc_js( $s['title'] . ' ' . $b_em . ' — ' . $s['hero_desc'] ); ?>",
  "url": "<?php echo esc_url( get_permalink() ); ?>",
  "telephone": "+55212391-7661",
  "areaServed": {
    "@type": "City",
    "name": "<?php echo esc_js( $bn ); ?>, Rio de Janeiro"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php echo implode( ",\n    ", array_map( function( $faq ) {
        return json_encode([
            '@type'          => 'Question',
            'name'           => $faq['q'],
            'acceptedAnswer' => ['@type'=>'Answer','text'=>$faq['a']],
        ], JSON_UNESCAPED_UNICODE );
    }, $page_faqs ) ); ?>
  ]
}
</script>

<script>
(function(){
    // ── Mini-grid de outros serviços ────────────────────────────────────────
    const services = [<?php echo implode( ',', $js_svcs ); ?>];
    const grid     = document.getElementById('services-grid');
    services.forEach(function(s){
        const isCustom = ['icon-telha','icon-bomba','icon-vazamento'].includes(s.icon);
        const icon = isCustom
            ? `<span class="${s.icon}" style="width:2.25rem;height:2.25rem;display:inline-block;margin-bottom:1rem;"></span>`
            : `<i class="fas ${s.icon} text-4xl text-amber-600 mb-4 block"></i>`;
        grid.innerHTML += `<a href="${s.url}" class="svc-card bg-white border border-slate-100 rounded-xl p-6 flex flex-col items-center text-center shadow-sm">${icon}<span class="text-sm font-semibold text-slate-700 leading-tight">${s.title}</span></a>`;
    });

    // ── FAQ accordion ──────────────────────────────────────────────────────
    document.querySelectorAll('.faq-btn').forEach(function(btn){
        btn.addEventListener('click', function(){
            var ans  = this.nextElementSibling;
            var icon = this.querySelector('.faq-icon');
            var open = !ans.classList.contains('hidden');
            document.querySelectorAll('.faq-answer').forEach(function(a){ a.classList.add('hidden'); });
            document.querySelectorAll('.faq-icon').forEach(function(i){ i.style.transform = ''; });
            document.querySelectorAll('.faq-btn').forEach(function(b){ b.setAttribute('aria-expanded','false'); });
            if (!open) {
                ans.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
                this.setAttribute('aria-expanded','true');
            }
        });
    });
})();

// ── Máscara de telefone ────────────────────────────────────────────────────
function mascaraTelefone(e){
    let v = e.target.value.replace(/\D/g,'').substring(0,11);
    if (!v){ e.target.value=''; return; }
    v = v.replace(/^(\d{2})(\d)/,'($1) $2').replace(/(\d)(\d{4})$/,'$1-$2');
    e.target.value = v;
}
</script>

<?php get_footer(); ?>


