<?php
/**
 * Template Name: Página de Serviço
 *
 * Template único para todas as páginas de serviço.
 * Basta criar a página no WordPress com o slug correto (ex: eletricista, pedreiro…)
 * e atribuir este template — os dados são puxados automaticamente de sr_services_data().
 */

$slug     = get_post_field( 'post_name', get_the_ID() );
$all      = sr_services_data();
$s        = $all[ $slug ] ?? null;

// Se slug não mapeado, mostra mensagem de erro amigável
if ( ! $s ) {
    get_header();
    echo '<div class="container mx-auto px-6 py-20 text-center">
        <h1 class="text-2xl font-bold text-slate-900 mb-4">Serviço não encontrado</h1>
        <p class="text-slate-600 mb-6">O slug desta página ("<strong>' . esc_html($slug) . '</strong>") não está cadastrado em <code>sr_services_data()</code>.</p>
        <a href="' . home_url('/') . '" class="inline-block bg-amber-600 text-white px-6 py-3 rounded-md hover:bg-amber-700 transition">← Voltar ao Início</a>
    </div>';
    get_footer();
    exit;
}

$hero_url = 'https://images.unsplash.com/'. esc_attr($s['hero_image']) .'?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80';
$wa_text  = "Olá! Vi o site de vocês e gostaria de um orçamento para {$s['title']}\n\nMeu nome: \nMeu bairro: \nDetalhe do que preciso: ";
$wa_url   = 'https://wa.me/5521999989553?text=' . rawurlencode( $wa_text );
$icon     = $s['icon'];

// Monta o JS allServices para o mini-grid
$js_services = [];
foreach ( $all as $key => $svc ) {
    $js_services[] = sprintf(
        "{title:%s,icon:%s,url:%s}",
        json_encode( $svc['title'],   JSON_UNESCAPED_UNICODE ),
        json_encode( $svc['icon'],    JSON_UNESCAPED_UNICODE ),
        json_encode( home_url('/' . $key . '/'), JSON_UNESCAPED_UNICODE )
    );
}
$js_services_str = '[' . implode(',', $js_services) . ']';
$current_url     = json_encode( home_url('/' . $slug . '/'), JSON_UNESCAPED_UNICODE );

get_header();
?>

<!-- BREADCRUMB -->
<div class="bg-white border-b border-slate-100 py-3">
    <div class="container mx-auto px-6">
        <nav class="text-sm text-slate-500 flex items-center gap-2">
            <a href="<?php echo home_url('/'); ?>" class="hover:text-amber-600 transition">Início</a>
            <i class="fas fa-chevron-right text-xs text-slate-300"></i>
            <a href="<?php echo home_url('/#servicos'); ?>" class="hover:text-amber-600 transition">Serviços</a>
            <i class="fas fa-chevron-right text-xs text-slate-300"></i>
            <span class="text-slate-800 font-semibold"><?php echo esc_html( $s['title'] ); ?></span>
        </nav>
    </div>
</div>

<!-- HERO -->
<section class="hero-bg py-24 md:py-36" style="background:linear-gradient(to right,rgba(15,23,42,.93),rgba(15,23,42,.65)),url('<?php echo $hero_url; ?>') center/cover no-repeat fixed;">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl py-6">

            <div class="inline-flex items-center gap-2 bg-amber-600/20 border border-amber-500/30 backdrop-blur-sm text-amber-300 px-5 py-2 rounded-full text-base font-semibold mb-6">
                <i class="fas fa-map-marker-alt"></i>
                Barra da Tijuca · Recreio · e região · Rio de Janeiro
            </div>

            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight mb-6">
                <?php echo wp_kses_post( $s['hero_title'] ); ?>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 font-light mb-10 max-w-2xl leading-relaxed">
                <?php echo esc_html( $s['hero_desc'] ); ?>
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#contato" class="bg-amber-600 text-white text-center px-8 py-4 rounded-md font-semibold text-lg hover:bg-amber-700 transition shadow-lg shadow-amber-600/30">
                    Agendar Consultoria
                </a>
                <a href="<?php echo esc_attr( $wa_url ); ?>" target="_blank"
                   class="bg-emerald-500 text-white text-center px-8 py-4 rounded-md font-semibold text-lg hover:bg-emerald-600 transition">
                    <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                </a>
            </div>

        </div>
    </div>
</section>

<!-- SERVIÇOS DETALHADOS -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 max-w-5xl">

        <div class="mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                Serviços de <?php echo esc_html( $s['title'] ); ?> Residencial e Predial
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

        <!-- CARDS DE CONFIANÇA -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-amber-50 border border-amber-100 rounded-xl p-6 text-center">
                <i class="fas fa-shield-alt text-3xl text-amber-600 mb-3 block"></i>
                <h4 class="font-bold text-slate-900 mb-2">Garantia de Serviço</h4>
                <p class="text-slate-600 text-sm">Emitimos nota fiscal e garantia escrita em todos os serviços realizados.</p>
            </div>
            <div class="bg-emerald-50 border border-emerald-100 rounded-xl p-6 text-center">
                <i class="fas fa-hard-hat text-3xl text-emerald-600 mb-3 block"></i>
                <h4 class="font-bold text-slate-900 mb-2">Equipe Especializada</h4>
                <p class="text-slate-600 text-sm">Profissionais qualificados, uniformizados e com experiência comprovada.</p>
            </div>
            <div class="bg-slate-100 border border-slate-200 rounded-xl p-6 text-center">
                <i class="fas fa-calendar-check text-3xl text-slate-600 mb-3 block"></i>
                <h4 class="font-bold text-slate-900 mb-2">Prazo Garantido</h4>
                <p class="text-slate-600 text-sm">Cronograma definido desde o início. Entregamos dentro do prazo combinado.</p>
            </div>
        </div>

    </div>
</section>

<!-- BAIRROS ATENDIDOS -->
<section class="py-16 bg-white border-t border-slate-100">
    <div class="container mx-auto px-6 max-w-5xl">

        <div class="text-center mb-10">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Cobertura Regional</h3>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-3">
                Atendemos <?php echo esc_html( $s['title'] ); ?> na Barra da Tijuca, Recreio e região
            </h2>
            <p class="text-slate-500 text-sm">Selecione seu bairro para ver informações específicas sobre o serviço na sua região.</p>
        </div>

        <?php
        $all_bairros = sr_neighborhoods_data();
        $grupos      = [];
        foreach ( $all_bairros as $bslug => $b ) {
            $grupos[ $b['regiao'] ][ $bslug ] = $b;
        }
        foreach ( $grupos as $regiao_nome => $bairros_grupo ) :
        ?>
        <div class="mb-8 last:mb-0">

            <!-- Divisor com nome da região -->
            <div class="flex items-center gap-3 mb-4">
                <span class="h-px flex-1 bg-slate-200"></span>
                <span class="text-xs font-bold text-slate-500 uppercase tracking-widest px-2">
                    <i class="fas fa-map-marker-alt text-amber-500 mr-1"></i><?php echo esc_html( $regiao_nome ); ?>
                </span>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>

            <!-- Pills de bairro -->
            <div class="flex flex-wrap gap-2">
                <?php foreach ( $bairros_grupo as $bslug => $b ) :
                    $bairro_url = home_url( '/' . $slug . '-' . $bslug . '/' );
                ?>
                <a href="<?php echo esc_url( $bairro_url ); ?>"
                   class="inline-flex items-center gap-1.5 bg-slate-50 border border-slate-200 text-slate-700 text-sm font-semibold px-4 py-2 rounded-full hover:bg-amber-600 hover:text-white hover:border-amber-600 transition-all duration-200 shadow-sm">
                    <i class="fas fa-map-marker-alt text-xs text-amber-500 group-hover:text-white"></i>
                    <?php echo esc_html( $b['nome'] ); ?>
                </a>
                <?php endforeach; ?>
            </div>

        </div>
        <?php endforeach; ?>

    </div>
</section>

<?php
// ── FAQ da página de serviço ──────────────────────────────────────────────────
$all_faqs    = sr_faqs_data();
$page_faqs   = $all_faqs[ $slug ] ?? [];

if ( ! empty( $page_faqs ) ) :
?>
<!-- FAQ -->
<section class="py-20 bg-slate-50 border-t border-slate-100">
    <div class="container mx-auto px-6 max-w-3xl">

        <div class="text-center mb-10">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Tire suas Dúvidas</h3>
            <h2 class="text-3xl font-bold text-slate-900 mb-3">
                Perguntas Frequentes — <?php echo esc_html( $s['title'] ); ?>
            </h2>
            <p class="text-slate-500">As dúvidas mais buscadas sobre esse serviço no Rio de Janeiro.</p>
        </div>

        <div class="space-y-3">
            <?php foreach ( $page_faqs as $fi => $faq ) :
                $fid = 'sfaq-' . $fi;
            ?>
            <div class="faq-item border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center text-left px-6 py-5 bg-white hover:bg-amber-50 transition font-semibold text-slate-800 gap-4"
                        aria-expanded="false" aria-controls="<?php echo $fid; ?>">
                    <span><?php echo esc_html( $faq['q'] ); ?></span>
                    <i class="faq-icon fas fa-chevron-down text-amber-600 shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-5 text-slate-600 leading-relaxed border-t border-slate-100 pt-4"
                     id="<?php echo $fid; ?>">
                    <?php echo esc_html( $faq['a'] ); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <p class="text-center mt-8 text-slate-500">
            Ficou com alguma dúvida?
            <a href="<?php echo esc_attr( $wa_url ); ?>" target="_blank"
               class="text-amber-600 font-semibold hover:underline">
                Fale pelo WhatsApp →
            </a>
        </p>
    </div>
</section>

<!-- FAQ Schema — Rich Snippets -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php echo implode( ",\n    ", array_map( function( $faq ) {
        return json_encode([
            '@type'          => 'Question',
            'name'           => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $faq['a'],
            ],
        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    }, $page_faqs ) ); ?>
  ]
}
</script>

<script>
document.querySelectorAll('.faq-btn').forEach(function(btn){
    btn.addEventListener('click',function(){
        var ans  = this.nextElementSibling;
        var icon = this.querySelector('.faq-icon');
        var open = !ans.classList.contains('hidden');
        document.querySelectorAll('.faq-answer').forEach(function(a){a.classList.add('hidden');});
        document.querySelectorAll('.faq-icon').forEach(function(i){i.style.transform='';});
        document.querySelectorAll('.faq-btn').forEach(function(b){b.setAttribute('aria-expanded','false');});
        if(!open){ans.classList.remove('hidden');icon.style.transform='rotate(180deg)';this.setAttribute('aria-expanded','true');}
    });
});
</script>
<?php endif; ?>

<!-- OUTROS SERVIÇOS -->
<section class="py-14 bg-slate-50 border-t border-slate-100">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl font-bold text-slate-900 text-center mb-8">Outros Serviços que Oferecemos</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4" id="services-grid"></div>
        <p class="text-center mt-6">
            <a href="<?php echo home_url('/#servicos'); ?>" class="text-amber-600 font-semibold hover:underline text-sm">
                Ver todos os serviços →
            </a>
        </p>
    </div>
</section>

<!-- CONTATO -->
<section id="contato" class="py-20 bg-white border-t border-slate-200">
    <div class="container mx-auto px-6">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold mb-3 text-slate-900">Agende sua Consultoria</h2>
            <p class="text-slate-600">Consulta técnica com diagnóstico detalhado. Valor informado conforme região e serviço.</p>
        </div>
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-xl border border-slate-100">
            <form action="https://formsubmit.co/contato@solucoesereformas.com.br" method="POST" class="space-y-5">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_subject" value="Novo contato — <?php echo esc_attr( $s['title'] ); ?>">
                <input type="hidden" name="Servico" value="<?php echo esc_attr( $s['title'] ); ?>">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <input type="text" name="Nome" placeholder="Nome Completo"
                           class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500" required>
                    <input type="tel" name="Telefone" placeholder="Telefone / WhatsApp"
                           class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500"
                           oninput="mascaraTelefone(event)" maxlength="15" required>
                </div>
                <input type="email" name="Email" placeholder="Seu melhor E-mail"
                       class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500" required>
                <select name="Bairro" class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500">
                    <option value="">Selecione seu bairro...</option>
                    <?php foreach ( sr_neighborhoods_data() as $b ) : ?>
                    <option value="<?php echo esc_attr( $b['nome'] ); ?>"><?php echo esc_html( $b['nome'] ); ?></option>
                    <?php endforeach; ?>
                </select>
                <textarea name="Descricao" rows="4" placeholder="Descreva sua necessidade..."
                          class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500" required></textarea>
                <button type="submit"
                        class="w-full bg-amber-600 text-white font-bold text-lg rounded-md px-4 py-4 hover:bg-amber-700 transition shadow-lg shadow-amber-600/30">
                    Solicitar Contato
                </button>
            </form>
        </div>
    </div>
</section>

<script>
function mascaraTelefone(e){
    let v=e.target.value.replace(/\D/g,'').substring(0,11);
    if(!v){e.target.value='';return;}
    v=v.replace(/^(\d{2})(\d)/,'($1) $2').replace(/(\d)(\d{4})$/,'$1-$2');
    e.target.value=v;
}

const allServices = <?php echo $js_services_str; ?>;
const currentUrl  = <?php echo $current_url; ?>;
const grid = document.getElementById('services-grid');

allServices.filter(s => s.url !== currentUrl).forEach(s => {
    const isCustomIcon = s.icon === 'icon-telha' || s.icon === 'icon-bomba' || s.icon === 'icon-vazamento';
    const iconHtml = isCustomIcon
        ? `<span class="${s.icon} text-4xl text-amber-600 mb-4 block" style="width:2.25rem;height:2.25rem;display:inline-block;"></span>`
        : `<i class="fas ${s.icon} text-4xl text-amber-600 mb-4 block"></i>`;
    grid.innerHTML += `<a href="${s.url}" class="svc-card bg-white border border-slate-100 rounded-xl p-8 flex flex-col items-center text-center shadow-sm">${iconHtml}<span class="text-base font-semibold text-slate-700 leading-tight">${s.title}</span></a>`;
});
</script>

<?php get_footer(); ?>


