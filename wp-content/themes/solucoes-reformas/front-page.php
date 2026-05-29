<?php get_header(); ?>

<!-- 1. HERO -->
<section id="inicio" class="bg-hero min-h-screen flex items-center">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl py-12">
            <div class="inline-flex items-center flex-wrap justify-center gap-x-1 gap-y-1 bg-amber-600/20 border border-amber-500/30 backdrop-blur-sm text-amber-300 px-4 py-2 rounded-full text-sm sm:text-base font-semibold mb-6">
                <i class="fas fa-map-marker-alt mr-2"></i>
                <a href="<?php echo home_url('/barra-recreio/'); ?>" class="hover:text-white transition underline underline-offset-2 decoration-amber-400/50">Barra da Tijuca</a>
                <span class="mx-1 opacity-50">·</span>
                <a href="<?php echo home_url('/barra-recreio/'); ?>" class="hover:text-white transition underline underline-offset-2 decoration-amber-400/50">Recreio</a>
                <span class="mx-1 opacity-50">·</span>
                <a href="<?php echo home_url('/barra-recreio/'); ?>" class="hover:text-white transition underline underline-offset-2 decoration-amber-400/50">Vargem Grande</a>
                <span class="mx-1 opacity-50">·</span>
                <span>E Região</span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                Soluções completas para sua obra. <br><span class="text-amber-300">Do alicerce ao acabamento.</span>
            </h2>
            <p class="text-base sm:text-lg md:text-xl text-slate-300 font-light mb-10 max-w-2xl leading-relaxed">
                Somos especialistas em construção, reformas estruturais e manutenção predial e residencial. Agilidade, segurança técnica e entrega pontual.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="<?php echo esc_attr( 'https://wa.me/5521999989553?text=' . rawurlencode( "Olá! Vi o site de vocês e gostaria de um orçamento\n\nMeu nome: \nMeu bairro: \nServiço que preciso: \nDetalhe: " ) ); ?>" target="_blank"
                   class="bg-orange-500 text-white text-center px-8 py-4 rounded-md font-semibold text-lg hover:bg-orange-600 transition shadow-lg shadow-orange-500/30 flex items-center gap-2">
                    <i class="fab fa-whatsapp text-2xl"></i> Falar com Especialista Agora
                </a>
                <a href="#servicos" class="border-2 border-white/40 text-white text-center px-8 py-4 rounded-md font-semibold text-lg hover:border-amber-400 hover:text-amber-300 transition">
                    Ver Serviços ↓
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 2. QUEM SOMOS -->
<section id="quem-somos" class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row gap-16 items-center">
            <div class="md:w-1/2 relative">
                <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                     alt="Profissional Soluções e Reformas em obra real"
                     class="rounded-lg shadow-2xl w-full object-cover h-[500px]">
                <div class="absolute -bottom-8 -right-8 bg-amber-600 text-white p-8 rounded-lg shadow-xl hidden md:block border-4 border-white">
                    <div class="text-4xl font-bold mb-1">100%</div>
                    <div class="text-sm uppercase tracking-wider font-medium text-amber-200">Garantia de<br>Qualidade</div>
                </div>
            </div>
            <div class="md:w-1/2">
                <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">A Empresa</h3>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Mão na Massa e Responsabilidade</h2>
                <p class="text-slate-600 mb-4 leading-relaxed text-lg">
                    A decisão mais importante de uma reforma não é qual piso escolher, é <strong>quem vai instalar esse piso</strong>.
                </p>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    A Soluções &amp; Reformas atua no Rio de Janeiro unindo todas as disciplinas da construção civil em um só lugar. Nascemos para acabar com a dor de cabeça de contratar autônomos que atrasam o cronograma e não dão garantia do serviço.
                </p>
                <p class="text-slate-600 mb-8 leading-relaxed">
                    Nossa equipe engloba desde a demolição e alvenaria bruta até a pintura e acabamento fino. Atendemos de forma ágil pequenas manutenções emergenciais e gerenciamos projetos completos com emissão de documentação técnica.
                </p>
                <ul class="space-y-3 font-semibold text-slate-800">
                    <li><i class="fas fa-shield-alt text-amber-600 mr-2 w-5 text-center"></i> Emissão de Notas Fiscais e ART.</li>
                    <li><i class="fas fa-users text-amber-600 mr-2 w-5 text-center"></i> Profissionais uniformizados e organizados.</li>
                    <li><i class="fas fa-calendar-check text-amber-600 mr-2 w-5 text-center"></i> Cumprimento rigoroso do prazo combinado.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 3. SERVIÇOS -->
<section id="servicos" class="py-24 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Nosso Catálogo</h3>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Serviços Oferecidos</h2>
            <p class="text-slate-600">Reunimos todas as especialidades. Clique no serviço para ver os detalhes.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" id="services-grid"></div>
    </div>
</section>

<!-- 4. PORTFÓLIO -->
<section id="portfolio" class="py-24 bg-slate-900 text-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h3 class="text-amber-500 font-bold uppercase tracking-widest text-sm mb-2">Projetos Reais</h3>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Antes e Depois das Obras</h2>
            <p class="text-slate-400">Nós garantimos a transformação do seu ambiente. Clique para ver o comparativo exato.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <div class="portfolio-item rounded-xl overflow-hidden relative group cursor-pointer aspect-[4/3] bg-slate-800 border border-slate-700 shadow-lg" onclick="openGallery('banheiro')">
                <img src="https://images.pexels.com/photos/6436787/pexels-photo-6436787.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Banheiro" class="portfolio-img w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-6">
                    <div class="text-center portfolio-hover-content">
                        <i class="fas fa-columns text-4xl text-amber-300 mb-3"></i>
                        <h4 class="font-bold text-2xl text-white">Reforma de Banheiro</h4>
                        <p class="text-slate-300 text-sm mb-3">Ver Comparativo</p>
                    </div>
                </div>
            </div>
            <div class="portfolio-item rounded-xl overflow-hidden relative group cursor-pointer aspect-[4/3] bg-slate-800 border border-slate-700 shadow-lg" onclick="openGallery('cozinha')">
                <img src="https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Cozinha" class="portfolio-img w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-6">
                    <div class="text-center portfolio-hover-content">
                        <i class="fas fa-columns text-4xl text-amber-300 mb-3"></i>
                        <h4 class="font-bold text-2xl text-white">Reforma de Cozinha</h4>
                        <p class="text-slate-300 text-sm mb-3">Ver Comparativo</p>
                    </div>
                </div>
            </div>
            <div class="portfolio-item rounded-xl overflow-hidden relative group cursor-pointer aspect-[4/3] bg-slate-800 border border-slate-700 shadow-lg" onclick="openGallery('pintura')">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Pintura-depois.png" alt="Pintura" class="portfolio-img w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-6">
                    <div class="text-center portfolio-hover-content">
                        <i class="fas fa-columns text-4xl text-amber-300 mb-3"></i>
                        <h4 class="font-bold text-2xl text-white">Serviço de Pintura</h4>
                        <p class="text-slate-300 text-sm mb-3">Ver Comparativo</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-amber-700 to-amber-500 rounded-2xl p-10 text-center shadow-2xl flex flex-col items-center max-w-4xl mx-auto border border-amber-400/30">
            <i class="fab fa-instagram text-6xl text-white mb-4 drop-shadow-md"></i>
            <h3 class="text-3xl font-bold text-white mb-4">Acompanhe nosso dia a dia</h3>
            <p class="text-amber-100 mb-8 max-w-2xl text-lg">Nosso portfólio completo e o "antes e depois" real de todos os nossos projetos estão no Instagram.</p>
            <a href="https://www.instagram.com/solucoesreformas/" target="_blank"
               class="bg-white text-amber-600 font-bold px-10 py-4 rounded-full hover:bg-slate-100 hover:scale-105 transition-all shadow-xl flex items-center gap-2 text-lg">
                <i class="fab fa-instagram text-xl"></i> Ver Portfólio no Instagram
            </a>
        </div>
    </div>
</section>

<!-- 5. BAIRROS ATENDIDOS -->
<section id="regioes" class="py-24 bg-white border-t border-slate-100">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-light text-slate-900 mb-4">
                Onde <span class="font-bold">Atuamos</span>
            </h2>
            <p class="text-slate-500 text-base mb-6">Atendemos a Barra da Tijuca, Recreio e região</p>
            <div class="w-12 h-1 bg-amber-600 mx-auto"></div>
        </div>
        <div class="flex flex-wrap justify-center gap-4 max-w-3xl mx-auto">
            <?php foreach ( sr_neighborhoods_data() as $bslug => $b ) : ?>
            <a href="<?php echo esc_url( home_url( '/' . $bslug . '/' ) ); ?>"
               class="flex items-center gap-2 bg-white border border-slate-200 rounded-full px-6 py-3 shadow-sm hover:shadow-md hover:border-amber-500 hover:text-amber-700 transition-all duration-200 font-semibold text-slate-700 text-base group">
                <i class="fas fa-map-marker-alt text-amber-500 group-hover:text-amber-600 transition-colors"></i>
                <?php echo esc_html( $b['nome'] ); ?>
            </a>
            <?php endforeach; ?>
        </div>
        <p class="text-center text-slate-500 text-sm mt-8 italic">* Para outras regiões do Rio de Janeiro, realizamos uma análise prévia de viabilidade técnica.</p>
    </div>
</section>

<!-- 6. AVALIAÇÕES -->
<!-- 6. AVALIAÇÕES GOOGLE -->
<section id="avaliacoes" class="py-16 bg-slate-50 border-t border-slate-100 overflow-hidden">
<?php
$gr      = sr_get_google_reviews();
$g_revs  = $gr['reviews'];
// Filtra apenas avaliações 4 e 5 estrelas (foca nas boas)
$g_revs = array_values(array_filter($g_revs, fn($r) => ($r['rating'] ?? 5) >= 4));
// Ordena: 5 estrelas primeiro
usort($g_revs, fn($a, $b) => ($b['rating'] ?? 0) <=> ($a['rating'] ?? 0));
$g_rate  = $gr['rating'];
$g_total = $gr['total'];
$has     = count($g_revs) > 0;

$review_url = SR_GOOGLE_PLACE_ID
    ? 'https://search.google.com/local/writereview?placeid=' . SR_GOOGLE_PLACE_ID
    : 'https://g.page/r/review';
?>

<?php if ($has): ?>
<!-- Schema.org com dados reais (aparece nas estrelas do Google) -->
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"HomeAndConstructionBusiness",
  "name":"Soluções & Reformas",
  "url":"<?php echo home_url('/'); ?>",
  "aggregateRating":{
    "@type":"AggregateRating",
    "ratingValue":"<?php echo number_format($g_rate,1,'.',','); ?>",
    "reviewCount":"<?php echo $g_total; ?>",
    "bestRating":"5","worstRating":"1"
  }
}
</script>
<?php endif; ?>

<style>
@keyframes sr-scroll{from{transform:translateX(0)}to{transform:translateX(-50%)}}
.sr-track{display:flex;width:max-content;animation:sr-scroll 38s linear infinite;will-change:transform;}
.sr-track:hover{animation-play-state:paused;}
@media(prefers-reduced-motion:reduce){.sr-track{animation:none;}}
.sr-fade{position:relative;}
.sr-fade::before,.sr-fade::after{content:'';position:absolute;top:0;bottom:0;width:110px;z-index:2;pointer-events:none;}
.sr-fade::before{left:0;background:linear-gradient(to right,#f8fafc,transparent);}
.sr-fade::after{right:0;background:linear-gradient(to left,#f8fafc,transparent);}
</style>

<!-- Cabeçalho -->
<div class="text-center mb-10 px-6">
    <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-2">Avaliações dos Clientes</h2>
    <?php if ($has): ?>
    <div class="flex items-center justify-center gap-2 mt-3">
        <span class="text-3xl font-black text-slate-900"><?php echo number_format($g_rate,1,',',''); ?></span>
        <div class="flex gap-px">
            <?php for ($i=0;$i<5;$i++):
                $f = $g_rate - $i;
                if ($f >= 1)   echo '<i class="fas fa-star text-yellow-400"></i>';
                elseif ($f >= 0.5) echo '<i class="fas fa-star-half-alt text-yellow-400"></i>';
                else           echo '<i class="far fa-star text-yellow-400"></i>';
            endfor; ?>
        </div>
        <span class="text-slate-500 text-sm"><?php echo number_format($g_total,0,',','.'); ?> avaliações</span>
        <!-- Wordmark Google -->
        <span class="text-base font-black tracking-tight select-none ml-1">
            <span style="color:#4285F4">G</span><span style="color:#EA4335">o</span><span style="color:#FBBC05">o</span><span style="color:#4285F4">g</span><span style="color:#34A853">l</span><span style="color:#EA4335">e</span>
        </span>
    </div>
    <?php else: ?>
    <p class="text-slate-500 text-sm mt-2">Integrado ao Google — as avaliações aparecerão automaticamente.</p>
    <?php endif; ?>
</div>

<?php if ($has):
    // Paleta de cores para avatares (quando não há foto)
    $colors = ['#D97706','#059669','#334155','#7C3AED','#0284C7','#DC2626','#0F766E','#B45309','#9333EA','#0369A1'];
    // Ícone Google G (SVG inline reutilizável)
    $g_icon = '<svg width="18" height="18" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="shrink-0"><path fill="#4285F4" d="M45.12 24.5c0-1.72-.15-3.37-.42-4.95H24v9.39h11.85c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.55-9.47 6.55-16.6z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.86-12.32-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.68 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.68-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24c0 3.55.85 6.91 2.34 9.88l7.34-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.34 5.7c1.74-5.21 6.59-9.07 12.32-9.07z"/></svg>';

    // Garante mínimo de 8 itens para o carrossel ficar cheio
    $pool = $g_revs;
    while (count($pool) < 8) $pool = array_merge($pool, $g_revs);
    // Duplica para loop infinito
    $loop = array_merge($pool, $pool);
?>
<div class="sr-fade overflow-hidden">
    <div class="sr-track py-3">
        <?php foreach ($loop as $r):
            // Iniciais do nome
            $words = array_filter(explode(' ', $r['author_name']));
            $ini   = implode('', array_map(fn($w) => strtoupper($w[0]), array_slice($words,0,2)));
            $color = $colors[ abs(crc32($r['author_name'])) % count($colors) ];
            $stars = intval($r['rating'] ?? 5);
            $date  = !empty($r['relative_time_description']) ? $r['relative_time_description'] : '';
        ?>
        <div class="bg-white rounded-xl border border-slate-100 shadow-sm mx-3 shrink-0 p-5 flex flex-col gap-2.5" style="width:min(270px, calc(100vw - 48px));">
            <!-- Cabeçalho do card -->
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2.5 min-w-0">
                    <?php if (!empty($r['profile_photo_url'])): ?>
                    <img src="<?php echo esc_url($r['profile_photo_url']); ?>" alt="<?php echo esc_attr($r['author_name']); ?>"
                         class="w-9 h-9 rounded-full object-cover shrink-0">
                    <?php else: ?>
                    <div class="w-9 h-9 rounded-full text-white flex items-center justify-center font-bold text-xs shrink-0"
                         style="background:<?php echo $color; ?>;"><?php echo esc_html($ini); ?></div>
                    <?php endif; ?>
                    <div class="min-w-0">
                        <div class="font-semibold text-slate-900 text-sm leading-tight truncate"><?php echo esc_html($r['author_name']); ?></div>
                        <?php if ($date): ?><div class="text-slate-400 text-xs"><?php echo esc_html($date); ?></div><?php endif; ?>
                    </div>
                </div>
                <?php echo $g_icon; ?>
            </div>
            <!-- Estrelas -->
            <div class="flex gap-px">
                <?php for ($s=0;$s<5;$s++) echo $s < $stars
                    ? '<i class="fas fa-star text-yellow-400 text-xs"></i>'
                    : '<i class="far fa-star text-yellow-300 text-xs"></i>'; ?>
            </div>
            <!-- Texto -->
            <?php if (!empty($r['text'])): ?>
            <p class="text-slate-500 text-xs leading-relaxed" style="display:-webkit-box;-webkit-line-clamp:4;-webkit-box-orient:vertical;overflow:hidden;"><?php echo esc_html($r['text']); ?></p>
            <?php endif; ?>
            <!-- Rodapé: verificado + link -->
            <div class="flex items-center justify-between mt-auto pt-2 border-t border-slate-100">
                <span class="inline-flex items-center gap-1 text-xs text-slate-400">
                    <i class="fas fa-circle-check text-blue-500 text-xs"></i>
                    <span>Verificado via</span>
                    <span class="font-bold text-xs" aria-label="Google"><span style="color:#4285F4">G</span><span style="color:#EA4335">o</span><span style="color:#FBBC05">o</span><span style="color:#4285F4">g</span><span style="color:#34A853">l</span><span style="color:#EA4335">e</span></span>
                </span>
                <?php if (!empty($r['author_url'])): ?>
                <a href="<?php echo esc_url($r['author_url']); ?>" target="_blank" rel="noopener noreferrer"
                   class="text-xs text-blue-400 hover:underline shrink-0">Ver →</a>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php else: ?>
<!-- Estado vazio — convite para a primeira avaliação -->
<div class="max-w-xs mx-auto text-center px-6 py-4">
    <div class="w-16 h-16 bg-white border border-slate-100 shadow-sm rounded-full flex items-center justify-center mx-auto mb-5">
        <i class="fas fa-star text-yellow-400 text-2xl"></i>
    </div>
    <h3 class="font-bold text-slate-900 text-lg mb-2">Seja o primeiro a avaliar!</h3>
    <p class="text-slate-500 text-sm leading-relaxed mb-6">
        Sua opinião ajuda outros clientes a escolher com confiança e nos ajuda a crescer.
    </p>
    <a href="<?php echo esc_url($review_url); ?>" target="_blank" rel="noopener noreferrer"
       class="inline-flex items-center gap-2 bg-white border border-slate-200 shadow-sm px-5 py-3 rounded-lg text-slate-700 text-sm font-semibold hover:shadow-md transition-shadow">
        <svg width="18" height="18" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path fill="#4285F4" d="M45.12 24.5c0-1.72-.15-3.37-.42-4.95H24v9.39h11.85c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.55-9.47 6.55-16.6z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.86-12.32-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.68 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.68-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24c0 3.55.85 6.91 2.34 9.88l7.34-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.34 5.7c1.74-5.21 6.59-9.07 12.32-9.07z"/></svg>
        Avaliar no Google
    </a>
    <p class="text-xs text-slate-400 mt-4">
        As avaliações aparecerão aqui automaticamente.
    </p>
</div>
<?php endif; ?>

</section>

<!-- 7. FAQ -->
<section id="faq" class="py-24 bg-white border-t border-slate-100">
    <div class="container mx-auto px-6 max-w-3xl">

        <div class="text-center mb-12">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Tire suas Dúvidas</h3>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Perguntas Frequentes</h2>
            <p class="text-slate-500">Respondemos as dúvidas mais comuns de quem está planejando uma reforma ou manutenção.</p>
        </div>

        <div class="space-y-3" id="faq-list">

            <?php
            $faqs = [
                [
                    'q' => 'Vocês emitem nota fiscal?',
                    'a' => 'Sim. Todos os serviços são emitidos com nota fiscal. Também formalizamos contrato com escopo e condições definidas antes do início de qualquer obra.',
                ],
                [
                    'q' => 'Quais formas de pagamento vocês aceitam?',
                    'a' => 'Aceitamos cartão de crédito, cartão de débito e PIX. Também oferecemos parcelamento próprio e faturamos diretamente para empresas e condomínios.',
                ],
                [
                    'q' => 'Os serviços têm garantia?',
                    'a' => 'Sim. Todos os serviços possuem garantia por escrito, entregue junto com o contrato antes do início da obra.',
                ],
                [
                    'q' => 'Vocês atendem condomínios com regras específicas de obra?',
                    'a' => 'Sim. Nossa equipe trabalha com profissionais uniformizados, documentados e treinados para seguir os horários e as exigências de cada condomínio.',
                ],
                [
                    'q' => 'Quais regiões do Rio de Janeiro vocês atendem?',
                    'a' => 'Atendemos a Barra da Tijuca, Recreio dos Bandeirantes, Vargem Grande, Vargem Pequena, Jardim Oceânico e Itanhangá. Para outras regiões do Rio de Janeiro, entre em contato e verificamos a disponibilidade.',
                ],
                [
                    'q' => 'Qual o horário de atendimento?',
                    'a' => 'Atendemos de segunda a sexta-feira das 8h30 às 17h30. Para entrar em contato, fale pelo WhatsApp ou telefone dentro desse horário.',
                ],
            ];
            foreach ($faqs as $i => $faq) :
                $id = 'faq-' . $i;
            ?>
            <div class="faq-item border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center text-left px-6 py-5 bg-white hover:bg-amber-50 transition font-semibold text-slate-800 gap-4"
                        aria-expanded="false"
                        aria-controls="<?php echo $id; ?>">
                    <span><?php echo esc_html($faq['q']); ?></span>
                    <i class="faq-icon fas fa-chevron-down text-amber-600 shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-5 text-slate-600 leading-relaxed border-t border-slate-100 pt-4" id="<?php echo $id; ?>">
                    <?php echo esc_html($faq['a']); ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

        <p class="text-center mt-10 text-slate-500">
            Não encontrou sua dúvida?
            <a href="<?php echo esc_attr( 'https://wa.me/5521999989553?text=' . rawurlencode( "Olá! Vi o site de vocês e tenho uma dúvida\n\nMeu nome: \nMinha dúvida: " ) ); ?>"
               target="_blank" class="text-amber-600 font-semibold hover:underline">
                Fale conosco pelo WhatsApp →
            </a>
        </p>
    </div>
</section>

<!-- FAQ Schema — Rich Snippets para o Google -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Vocês emitem nota fiscal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sim. Todos os serviços são emitidos com nota fiscal. Também formalizamos contrato com escopo e condições definidas antes do início de qualquer obra."
      }
    },
    {
      "@type": "Question",
      "name": "Quais formas de pagamento vocês aceitam?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aceitamos cartão de crédito, cartão de débito e PIX. Também oferecemos parcelamento próprio e faturamos diretamente para empresas e condomínios."
      }
    },
    {
      "@type": "Question",
      "name": "Os serviços têm garantia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sim. Todos os serviços possuem garantia por escrito, entregue junto com o contrato antes do início da obra."
      }
    },
    {
      "@type": "Question",
      "name": "Vocês atendem condomínios com regras específicas de obra?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sim. Nossa equipe trabalha com profissionais uniformizados, documentados e treinados para seguir os horários e as exigências de cada condomínio."
      }
    },
    {
      "@type": "Question",
      "name": "Quais regiões do Rio de Janeiro vocês atendem?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Atendemos a Barra da Tijuca, Recreio dos Bandeirantes, Vargem Grande, Vargem Pequena, Jardim Oceânico e Itanhangá. Para outras regiões do Rio de Janeiro, entre em contato e verificamos a disponibilidade."
      }
    },
    {
      "@type": "Question",
      "name": "Qual o horário de atendimento?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Atendemos de segunda a sexta-feira das 8h30 às 17h30. Para entrar em contato, fale pelo WhatsApp ou telefone dentro desse horário."
      }
    }
  ]
}
</script>

<script>
document.querySelectorAll('.faq-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
        var answer  = this.nextElementSibling;
        var icon    = this.querySelector('.faq-icon');
        var isOpen  = !answer.classList.contains('hidden');

        // Fecha todos
        document.querySelectorAll('.faq-answer').forEach(function(a) { a.classList.add('hidden'); });
        document.querySelectorAll('.faq-icon').forEach(function(i) { i.style.transform = ''; });
        document.querySelectorAll('.faq-btn').forEach(function(b) { b.setAttribute('aria-expanded','false'); });

        // Abre o clicado (se estava fechado)
        if (!isOpen) {
            answer.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
            this.setAttribute('aria-expanded', 'true');
        }
    });
});
</script>

<!-- 8. CONTATO -->
<section id="contato" class="py-24 bg-slate-50 border-t border-slate-200">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900">Pronto para iniciar?</h2>
            <p class="text-slate-600">Preencha o formulário abaixo para registrarmos seu pedido.</p>
        </div>
        <div class="max-w-3xl mx-auto bg-white p-8 md:p-12 rounded-2xl shadow-xl border border-slate-100">
            <form action="https://formsubmit.co/contato@solucoesereformas.com.br" method="POST" class="space-y-6">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_subject" value="Novo contato — Site Soluções & Reformas">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <input type="text" name="Nome" placeholder="Nome Completo" class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 text-base focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500" required>
                    <input type="tel" name="Telefone" placeholder="Telefone / WhatsApp" class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 text-base focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500" oninput="mascaraTelefone(event)" maxlength="15" required>
                </div>
                <input type="email" name="Email" placeholder="Seu melhor E-mail" class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 text-base focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500" required>
                <select name="Servico" class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 text-base focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500" required>
                    <option value="">Selecione o Serviço Principal...</option>
                    <?php
                    $service_options = ['Reformas em Geral','Pedreiro','Pintor','Gesseiro','Marceneiro','Telhadista','Bombeiro Hidráulico','Desentupimento','Detecção de Vazamentos','Eletricista','Gasista, Aquecedores e Boiler',"Bomba D'Água",'Inspeções Prediais e Fachadas','Contrato de Manutenção Predial','Portão Eletrônico e Controle de Acesso','CFTV','Piscinas'];
                    foreach ($service_options as $opt): ?>
                    <option value="<?php echo esc_attr($opt); ?>"><?php echo esc_html($opt); ?></option>
                    <?php endforeach; ?>
                </select>
                <textarea name="Descricao" rows="4" placeholder="Descreva brevemente sua necessidade e a localização (Bairro)..." class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500" required></textarea>
                <button type="submit" class="w-full bg-orange-500 text-white font-bold text-lg rounded-md px-4 py-4 hover:bg-orange-600 transition shadow-lg shadow-orange-500/30">Solicitar Contato</button>
                <p class="text-center text-xs text-slate-400"><i class="fas fa-lock mr-1"></i>Seus dados são usados apenas para retorno de contato.</p>
            </form>
        </div>
    </div>
</section>

<!-- MODAL DE SERVIÇOS -->
<div id="service-modal" class="fixed inset-0 bg-slate-900/80 backdrop-blur-sm z-[60] hidden flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
    <div class="bg-white rounded-2xl w-full max-w-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300 relative flex flex-col max-h-[90vh]" id="modal-content-box">
        <div class="bg-slate-50 border-b border-slate-100 p-6 flex justify-between items-center shrink-0">
            <div class="flex items-center gap-4">
                <div class="bg-amber-100 text-amber-600 w-12 h-12 rounded-full flex items-center justify-center text-2xl" id="modal-icon"></div>
                <h3 class="text-xl md:text-2xl font-bold text-slate-900" id="modal-title">Título</h3>
            </div>
            <button onclick="closeModal()" class="text-slate-400 hover:text-red-500 transition text-2xl"><i class="fas fa-times"></i></button>
        </div>
        <div class="p-8 overflow-y-auto modal-scroll grow" id="modal-body"></div>
        <div class="bg-slate-50 border-t border-slate-100 p-6 flex justify-end gap-4 shrink-0">
            <button onclick="closeModal()" class="px-6 py-2 text-slate-600 font-semibold hover:bg-slate-200 rounded transition">Fechar</button>
            <a href="#contato" onclick="closeModal()" class="px-6 py-2 bg-amber-600 text-white font-semibold rounded hover:bg-amber-700 transition">Pedir Orçamento</a>
        </div>
    </div>
</div>

<!-- LIGHTBOX ANTES/DEPOIS -->
<div id="gallery-lightbox" class="fixed inset-0 bg-black/95 z-[70] hidden flex-col items-center justify-center opacity-0 transition-opacity duration-300 p-4 md:p-10">
    <button onclick="closeGallery()" class="absolute top-6 right-6 text-white text-4xl hover:text-red-500 transition z-[75]"><i class="fas fa-times"></i></button>
    <div class="text-center mb-4 mt-4 shrink-0">
        <h3 id="lightbox-title" class="text-white text-2xl md:text-3xl font-bold mb-1">Título do Projeto</h3>
        <p class="text-amber-300 font-medium text-sm uppercase tracking-widest">Arraste para comparar • Antes &amp; Depois</p>
    </div>
    <div class="w-full max-w-4xl mx-auto relative rounded-2xl overflow-hidden shadow-2xl border border-slate-700 select-none" id="slider-container" style="height:clamp(300px,55vh,600px);">
        <img id="img-after" src="" alt="Depois" class="absolute inset-0 w-full h-full object-cover pointer-events-none">
        <div class="absolute top-4 right-4 bg-emerald-500 text-white font-bold px-4 py-1.5 rounded-full shadow-lg z-10 text-sm flex items-center gap-1.5"><i class="fas fa-check-circle"></i> DEPOIS</div>
        <div class="absolute inset-0 overflow-hidden pointer-events-none" id="before-clip" style="clip-path:inset(0 50% 0 0);">
            <img id="img-before" src="" alt="Antes" class="w-full h-full object-cover">
            <div class="absolute top-4 left-4 bg-red-600 text-white font-bold px-4 py-1.5 rounded-full shadow-lg z-10 text-sm flex items-center gap-1.5"><i class="fas fa-clock"></i> ANTES</div>
        </div>
        <div class="absolute top-0 bottom-0 w-1 bg-white shadow-[0_0_20px_rgba(255,255,255,0.8)] z-20 pointer-events-none" id="slider-line" style="left:50%;">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 bg-white rounded-full shadow-2xl flex items-center justify-center cursor-ew-resize" id="slider-handle">
                <svg width="22" height="16" viewBox="0 0 22 16" fill="none"><path d="M6 1L1 8L6 15" stroke="#1e293b" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 1L21 8L16 15" stroke="#1e293b" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
        </div>
        <div class="absolute inset-0 flex items-center justify-center z-30 pointer-events-none" id="slider-hint">
            <div class="bg-black/60 backdrop-blur-sm text-white text-sm font-semibold px-5 py-2 rounded-full flex items-center gap-2 animate-pulse"><i class="fas fa-arrows-left-right"></i> Arraste para comparar</div>
        </div>
    </div>
</div>

<script>
function mascaraTelefone(e){let v=e.target.value.replace(/\D/g,'').substring(0,11);if(!v){e.target.value='';return;}v=v.replace(/^(\d{2})(\d)/,'($1) $2').replace(/(\d)(\d{4})$/,'$1-$2');e.target.value=v;}

const servicesData = [
    {id:'marceneiro',title:'Marceneiro',icon:'fa-ruler-combined',shortDesc:'Projetos de móveis sob medida.',url:'<?php echo home_url("/marceneiro/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Otimize e embeleze seus espaços com móveis planejados.</p><ul class="list-disc pl-5 text-slate-700"><li>Cozinhas planejadas.</li><li>Closets e armários embutidos.</li><li>Painéis e nichos de MDF.</li></ul>'},
    {id:'eletricista',title:'Eletricista',icon:'fa-bolt',shortDesc:'Instalação, quadros de luz e fiação.',url:'<?php echo home_url("/eletricista/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Segurança total nas suas instalações elétricas.</p><ul class="list-disc pl-5 text-slate-700"><li>Troca de fiação antiga e modernização.</li><li>Instalação de quadros de distribuição.</li><li>Projetos de iluminação em LED.</li></ul>'},
    {id:'bombeiro',title:'Bombeiro Hidráulico',icon:'fa-faucet',shortDesc:'Manutenção de tubulações e prumadas.',url:'<?php echo home_url("/bombeiro-hidraulico/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Especialistas em encanamentos residenciais e prediais.</p><ul class="list-disc pl-5 text-slate-700"><li>Instalação de redes de água.</li><li>Troca de registros e válvulas.</li><li>Substituição de prumadas prediais.</li></ul>'},
    {id:'pedreiro',title:'Pedreiro',icon:'fa-trowel-bricks',shortDesc:'Alvenaria, contrapiso e assentamento.',url:'<?php echo home_url("/pedreiro/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">A base sólida para o sucesso do seu ambiente.</p><ul class="list-disc pl-5 text-slate-700"><li>Levantamento de muros e paredes.</li><li>Contrapiso e reboco perfeito.</li><li>Assentamento de cerâmicas.</li></ul>'},
    {id:'pintor',title:'Pintor',icon:'fa-paint-roller',shortDesc:'Pintura residencial, comercial e texturas.',url:'<?php echo home_url("/pintor/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Acabamento fino para transformar seu imóvel.</p><ul class="list-disc pl-5 text-slate-700"><li>Pintura interna e externa.</li><li>Aplicação de massa corrida.</li><li>Texturas e grafiato.</li></ul>'},
    {id:'vazamentos',title:'Detecção de Vazamentos',icon:'icon-vazamento',shortDesc:'Caça-vazamento com ultrassom.',url:'<?php echo home_url("/deteccao-de-vazamentos/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Localizamos vazamentos com tecnologia de Geofone.</p><ul class="list-disc pl-5 text-slate-700"><li>Detecção sem quebrar piso.</li><li>Localização exata.</li><li>Laudo técnico para CEDAE.</li></ul>'},
    {id:'gesseiro',title:'Gesseiro',icon:'fa-border-all',shortDesc:'Drywall, sancas e rebaixamento de teto.',url:'<?php echo home_url("/gesseiro/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Especialistas em projetos decorativos em gesso.</p><ul class="list-disc pl-5 text-slate-700"><li>Rebaixamento de teto em Drywall.</li><li>Sancas iluminadas.</li><li>Divisórias e nichos.</li></ul>'},
    {id:'telhadista',title:'Telhadista',icon:'icon-telha',shortDesc:'Construção e reparo de telhados.',url:'<?php echo home_url("/telhadista/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Solução definitiva contra goteiras.</p><ul class="list-disc pl-5 text-slate-700"><li>Telhados coloniais e embutidos.</li><li>Impermeabilização com manta.</li><li>Limpeza de calhas.</li></ul>'},
    {id:'gasista',title:'Gasista, Aquecedores e Boiler',icon:'fa-fire',shortDesc:'Tubulação de gás e conversões.',url:'<?php echo home_url("/gasista-aquecedores-boiler/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Profissionais credenciados para GN e GLP.</p><ul class="list-disc pl-5 text-slate-700"><li>Instalação de aquecedores a gás.</li><li>Teste de estanqueidade.</li><li>Conversão de fogões.</li></ul>'},
    {id:'reformas',title:'Reformas em Geral',icon:'fa-home',shortDesc:'Obras completas residenciais e comerciais.',url:'<?php echo home_url("/reformas-em-geral/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Soluções completas para residências e comércios.</p><ul class="list-disc pl-5 text-slate-700"><li>Gerenciamento total da obra.</li><li>Demolição e acabamento.</li><li>Entrega limpa e pontual.</li></ul>'},
    {id:'desentupimento',title:'Desentupimento',icon:'fa-tint-slash',shortDesc:'Desobstrução rápida com maquinário.',url:'<?php echo home_url("/desentupimento/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Sem quebra-quebra desnecessário.</p><ul class="list-disc pl-5 text-slate-700"><li>Desentupimento de pias e ralos.</li><li>Vasos sanitários.</li><li>Caixas de esgoto e gordura.</li></ul>'},
    {id:'bombas',title:"Bomba D'Água",icon:'icon-bomba',shortDesc:'Instalação e manutenção de bombas.',url:'<?php echo home_url("/bomba/"); ?>',fullDesc:"<p class='mb-4 text-slate-600'>Garantimos o abastecimento do seu condomínio.</p><ul class='list-disc pl-5 text-slate-700'><li>Reparo de motores de bombas.</li><li>Inspeção de casas de máquinas.</li><li>Troca de rolamentos e selos.</li></ul>"},
    {id:'fachadas',title:'Inspeções Prediais e Fachadas',icon:'fa-building',shortDesc:'Recuperação externa e laudo técnico.',url:'<?php echo home_url("/inspecoes-prediais-fachadas/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Equipe qualificada em trabalho em altura.</p><ul class="list-disc pl-5 text-slate-700"><li>Pintura e textura em fachadas.</li><li>Recuperação de pastilhas.</li><li>Laudo de Inspeção Predial.</li></ul>'},
    {id:'manutencao',title:'Contrato de Manutenção Predial',icon:'fa-file-contract',shortDesc:'Manutenção preventiva contínua.',url:'<?php echo home_url("/contrato-manutencao-predial/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Mantenha seu imóvel sempre em perfeito estado.</p><ul class="list-disc pl-5 text-slate-700"><li>Vistorias periódicas programadas.</li><li>Manutenção elétrica e hidráulica.</li><li>Relatório técnico mensal.</li></ul>'},
    {id:'portao',title:'Portão Eletrônico e Controle de Acesso',icon:'fa-door-open',shortDesc:'Automatização e controle de acesso.',url:'<?php echo home_url("/portao-eletronico/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Segurança e praticidade para entrar e sair.</p><ul class="list-disc pl-5 text-slate-700"><li>Motores para portões de garagem.</li><li>Controles remotos e TAGs.</li><li>Fechaduras digitais e biométricas.</li></ul>'},
    {id:'cftv',title:'CFTV',icon:'fa-video',shortDesc:'Câmeras de monitoramento e alarmes.',url:'<?php echo home_url("/cftv/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Proteja seu patrimônio pelo celular.</p><ul class="list-disc pl-5 text-slate-700"><li>Instalação de câmeras HD e IP.</li><li>DVR/NVR para gravação.</li><li>Alarme perimetral.</li></ul>'},
    {id:'piscina',title:'Piscinas',icon:'fa-water',shortDesc:'Limpeza, tratamento químico e filtros.',url:'<?php echo home_url("/piscinas/"); ?>',fullDesc:'<p class="mb-4 text-slate-600">Manutenção completa para piscinas.</p><ul class="list-disc pl-5 text-slate-700"><li>Tratamento químico.</li><li>Aspiração e escovação.</li><li>Manutenção de filtros.</li></ul>'},
];

const customIcons = ['icon-telha','icon-bomba','icon-vazamento'];
function getIconHtml(icon,extraClass=''){
    if(customIcons.includes(icon)) return `<span class="${icon}${extraClass?' '+extraClass:''}" style="display:inline-block;width:2.25rem;height:2.25rem;"></span>`;
    return `<i class="fas ${icon}${extraClass?' '+extraClass:''}"></i>`;
}

const grid = document.getElementById('services-grid');
servicesData.forEach(service => {
    grid.innerHTML += `
        <a href="${service.url}" class="service-card bg-white p-8 rounded-xl shadow-sm border border-slate-100 cursor-pointer relative group flex flex-col items-center text-center no-underline">
            <div class="service-icon-wrap w-20 h-20 bg-amber-50 rounded-2xl flex items-center justify-center mb-4 transition-colors shrink-0">
                ${getIconHtml(service.icon,'service-icon text-4xl text-amber-600 transition-transform')}
            </div>
            <h4 class="text-lg font-bold text-slate-900 leading-tight mb-1">${service.title}</h4>
            <p class="text-sm text-slate-500 leading-relaxed grow">${service.shortDesc}</p>
            <span class="text-orange-500 text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity mt-3">Ver Detalhes →</span>
        </a>`;
});

const modal = document.getElementById('service-modal');
const modalContentBox = document.getElementById('modal-content-box');
function openModal(id){const d=servicesData.find(s=>s.id===id);document.getElementById('modal-title').innerText=d.title;document.getElementById('modal-icon').innerHTML=getIconHtml(d.icon);document.getElementById('modal-body').innerHTML=d.fullDesc;modal.classList.remove('hidden');setTimeout(()=>{modal.classList.remove('opacity-0');modalContentBox.classList.remove('scale-95');},10);document.body.style.overflow='hidden';}
function closeModal(){modal.classList.add('opacity-0');modalContentBox.classList.add('scale-95');setTimeout(()=>{modal.classList.add('hidden');document.body.style.overflow='auto';},300);}

const themeUri = '<?php echo get_template_directory_uri(); ?>';
const galleriesData = {
    'banheiro':{title:'Reforma de Banheiro',before:'https://images.pexels.com/photos/18644893/pexels-photo-18644893.jpeg?auto=compress&cs=tinysrgb&w=1200',after:themeUri+'/images/banheiro-depois.png'},
    'cozinha':{title:'Reforma de Cozinha',before:'https://images.pexels.com/photos/17139803/pexels-photo-17139803.jpeg?auto=compress&cs=tinysrgb&w=1200',after:themeUri+'/images/cozinha-depois.png'},
    'pintura':{title:'Serviço de Pintura',before:themeUri+'/images/Pintura-antes.png',after:themeUri+'/images/Pintura-depois.png'},
};
function openGallery(key){const g=galleriesData[key];if(!g)return;document.getElementById('lightbox-title').textContent=g.title;document.getElementById('img-before').src=g.before;document.getElementById('img-after').src=g.after;document.getElementById('before-clip').style.clipPath='inset(0 50% 0 0)';document.getElementById('slider-line').style.left='50%';const lb=document.getElementById('gallery-lightbox');lb.classList.remove('hidden');lb.classList.add('flex');setTimeout(()=>lb.classList.remove('opacity-0'),10);}
function closeGallery(){const lb=document.getElementById('gallery-lightbox');lb.classList.add('opacity-0');setTimeout(()=>{lb.classList.add('hidden');lb.classList.remove('flex');},300);}

(function(){const container=document.getElementById('slider-container');const line=document.getElementById('slider-line');const clip=document.getElementById('before-clip');const hint=document.getElementById('slider-hint');let dragging=false;function move(x){const r=container.getBoundingClientRect();let p=Math.max(0,Math.min(1,(x-r.left)/r.width));const pct=(p*100).toFixed(2)+'%';line.style.left=pct;clip.style.clipPath=`inset(0 ${(100-p*100).toFixed(2)}% 0 0)`;if(hint)hint.style.opacity='0';}
container.addEventListener('mousedown',e=>{dragging=true;move(e.clientX);});document.addEventListener('mouseup',()=>dragging=false);document.addEventListener('mousemove',e=>{if(dragging)move(e.clientX);});container.addEventListener('touchstart',e=>{dragging=true;move(e.touches[0].clientX);},{passive:true});document.addEventListener('touchend',()=>dragging=false);document.addEventListener('touchmove',e=>{if(dragging)move(e.touches[0].clientX);},{passive:true});})();

// Fechar modais com ESC e clique no fundo
document.addEventListener('keydown', function(e) {
    if (e.key !== 'Escape') return;
    const lb = document.getElementById('gallery-lightbox');
    if (!lb.classList.contains('hidden')) { closeGallery(); return; }
    if (!modal.classList.contains('hidden')) { closeModal(); }
});
document.getElementById('gallery-lightbox').addEventListener('click', function(e) {
    if (e.target === this) closeGallery();
});
modal.addEventListener('click', function(e) {
    if (e.target === this) closeModal();
});
</script>

<?php get_footer(); ?>


