<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="<?php echo esc_url( get_template_directory_uri() . '/favicon.svg' ); ?>?v=5">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/favicon.svg' ); ?>?v=5">
    <meta name="theme-color" content="#D97706">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-slate-50 text-slate-800'); ?>>
<?php wp_body_open(); ?>
<?php
$wa_float_url = 'https://wa.me/5521999989553?text=' . rawurlencode( "Olá! Vi o site de vocês e gostaria de um orçamento\n\nMeu nome: \nMeu bairro: \nServiço que preciso: " );

// Detecta serviço atual para linkar {servico}-{bairro} no menu de regiões
$current_service_slug = null;
if ( is_page() ) {
    global $post;
    $tpl = get_page_template_slug();
    if ( $tpl === 'template-servico.php' ) {
        // Página de serviço: o slug da página é o slug do serviço
        $current_service_slug = $post->post_name;
    } elseif ( $tpl === 'template-servico-bairro.php' ) {
        // Página serviço+bairro: serviço está no meta
        $current_service_slug = get_post_meta( $post->ID, 'servico_slug', true );
    }
}
?>

<!-- BOTÃO WHATSAPP FLUTUANTE -->
<a onclick="window.open('<?php echo esc_js( $wa_float_url ); ?>','_blank')"
   class="fixed bottom-4 right-3 sm:bottom-6 sm:right-5 md:bottom-10 md:right-10 z-[45] group cursor-pointer"
   aria-label="Falar pelo WhatsApp">
    <div class="relative w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16">
        <span class="absolute inset-0 rounded-full bg-emerald-400 opacity-40 animate-ping"></span>
        <span class="relative flex items-center justify-center w-full h-full bg-emerald-500 hover:bg-emerald-600 rounded-full shadow-2xl shadow-emerald-500/50 text-white text-2xl md:text-3xl transition-all duration-300 group-hover:scale-110">
            <i class="fab fa-whatsapp"></i>
        </span>
    </div>
</a>

<!-- HEADER FIXO -->
<div class="fixed w-full top-0 z-40">

    <!-- Barra de topo — desktop only -->
    <div class="hidden md:block bg-slate-900 border-b border-slate-800">
        <div class="container mx-auto px-3 md:px-4 xl:px-6 py-2 flex items-center justify-between">
            <span class="hidden lg:block text-slate-500 tracking-wide font-medium text-xs xl:text-sm">Especialistas em Reformas e Manutenções · Rio de Janeiro</span>
            <div class="flex items-center gap-2 lg:gap-4 text-slate-300 ml-auto">
                <a href="tel:+552123917661" class="hover:text-amber-300 transition flex items-center gap-1.5 font-semibold text-xs md:text-sm xl:text-base">
                    <i class="fas fa-phone-alt text-xs"></i> (21) 2391-7661
                </a>
                <span class="text-slate-700">|</span>
                <a href="https://wa.me/5521999989553" class="hover:text-emerald-400 transition flex items-center gap-1.5 font-semibold text-xs md:text-sm xl:text-base" target="_blank">
                    <i class="fab fa-whatsapp text-emerald-500 text-xs"></i> (21) 99998-9553
                </a>
                <span class="hidden xl:inline text-slate-700">|</span>
                <a href="mailto:contato@solucoesereformas.com.br" class="hidden xl:flex hover:text-amber-300 transition items-center gap-1.5 text-sm xl:text-base">
                    <i class="fas fa-envelope text-xs"></i> contato@solucoesereformas.com.br
                </a>
            </div>
        </div>
    </div>

    <!-- Navbar principal -->
    <header id="sr-header" class="bg-white shadow-sm border-b border-slate-100 transition-shadow duration-300">
        <div id="sr-header-inner" class="container mx-auto px-3 md:px-4 xl:px-6 flex justify-between items-center" style="padding-top:38px;padding-bottom:38px;">

            <!-- Logo -->
            <a href="<?php echo home_url('/'); ?>" class="flex items-center gap-2 shrink-0">
                <svg id="sr-logo-svg" width="42" height="42" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"
                     class="xl:w-14 xl:h-14 shrink-0 transition-all duration-300">
                    <path d="M24 2L43.0526 13V35L24 46L4.94744 35V13L24 2Z" fill="#FFFBEB"/>
                    <path d="M24 2L43.0526 13V35L24 46L4.94744 35V13L24 2Z" stroke="#D97706" stroke-width="2.5" stroke-linejoin="round"/>
                    <path d="M24 10L12 20V36H36V20L24 10Z" fill="#D97706"/>
                    <path d="M24 18V36" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round"/>
                    <path d="M18 26H30" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round"/>
                    <rect x="16" y="29" width="4" height="4" fill="#FFFFFF"/>
                    <rect x="28" y="29" width="4" height="4" fill="#FFFFFF"/>
                </svg>
                <div>
                    <p class="text-lg md:text-2xl xl:text-3xl font-black text-slate-900 tracking-tight leading-none">SOLUÇÕES<span class="text-amber-600">&amp;</span>REFORMAS</p>
                    <span id="sr-logo-sub" class="hidden lg:block text-xs font-bold text-slate-400 tracking-[0.15em] uppercase transition-all duration-300">Reformas e Manutenções · Rio de Janeiro</span>
                </div>
            </a>

            <!-- Desktop nav -->
            <nav class="hidden md:flex items-center gap-0 font-semibold text-slate-600">

                <a href="<?php echo home_url('/'); ?>"
                   class="px-2 xl:px-4 py-2 rounded-md text-xs lg:text-sm xl:text-base uppercase tracking-wide hover:bg-slate-50 hover:text-amber-600 transition-colors">
                    Início
                </a>

                <!-- Dropdown: Serviços -->
                <div class="relative" id="dd-wrap-servicos">
                    <a href="<?php echo home_url('/#servicos'); ?>"
                       id="dd-btn-servicos"
                       class="flex items-center gap-1 px-2 xl:px-4 py-2 rounded-md text-xs lg:text-sm xl:text-base uppercase tracking-wide hover:bg-slate-50 hover:text-amber-600 transition-colors">
                        Serviços <i id="dd-icon-servicos" class="fas fa-chevron-down text-[9px] transition-transform duration-200"></i>
                    </a>
                    <!-- Mega-menu -->
                    <div id="dd-panel-servicos"
                         class="hidden absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[min(660px,90vw)] bg-white rounded-2xl shadow-2xl border border-slate-100 z-50">
                        <div class="p-6">
                            <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Nossos Serviços</p>
                            <div class="grid grid-cols-3 gap-1">
                                <?php foreach ( sr_services_data() as $svc_slug => $svc ) :
                                    $is_custom = in_array( $svc['icon'], ['icon-telha','icon-bomba','icon-vazamento'] );
                                ?>
                                <a href="<?php echo esc_url( home_url( '/' . $svc_slug . '/' ) ); ?>"
                                   class="flex items-center gap-2.5 px-3 py-2.5 rounded-xl hover:bg-amber-50 hover:text-amber-700 transition-colors text-base font-semibold text-slate-700">
                                    <?php if ( $is_custom ) : ?>
                                    <span class="<?php echo esc_attr($svc['icon']); ?> shrink-0"
                                          style="display:inline-block;width:1rem;height:1rem;"></span>
                                    <?php else : ?>
                                    <i class="fas <?php echo esc_attr($svc['icon']); ?> text-amber-600 w-4 text-center shrink-0"></i>
                                    <?php endif; ?>
                                    <span class="leading-tight"><?php echo esc_html($svc['title']); ?></span>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="border-t border-slate-100 px-6 py-3 bg-slate-50 rounded-b-2xl flex items-center justify-between">
                            <span class="text-sm text-slate-500"><?php echo count( sr_services_data() ); ?> serviços disponíveis na região</span>
                            <a href="<?php echo home_url('/#servicos'); ?>" class="text-sm font-bold text-amber-600 hover:text-amber-700 transition">
                                Ver catálogo completo →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown: Regiões -->
                <div class="relative" id="dd-wrap-regioes">
                    <a href="<?php echo home_url('/barra-recreio/'); ?>"
                       id="dd-btn-regioes"
                       class="flex items-center gap-1 px-2 xl:px-4 py-2 rounded-md text-xs lg:text-sm xl:text-base uppercase tracking-wide hover:bg-slate-50 hover:text-amber-600 transition-colors">
                        Regiões <i id="dd-icon-regioes" class="fas fa-chevron-down text-[9px] transition-transform duration-200"></i>
                    </a>
                    <div id="dd-panel-regioes"
                         class="hidden absolute top-full left-1/2 -translate-x-1/2 mt-2 w-60 bg-white rounded-2xl shadow-2xl border border-slate-100 z-50">
                        <div class="p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-3">Bairros Atendidos</p>
                            <?php foreach ( sr_neighborhoods_data() as $bslug => $b ) :
                                $bairro_url = $current_service_slug
                                    ? home_url( '/' . $current_service_slug . '-' . $bslug . '/' )
                                    : home_url( '/' . $bslug . '/' );
                            ?>
                            <a href="<?php echo esc_url( $bairro_url ); ?>"
                               class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-amber-50 hover:text-amber-700 transition-colors text-base font-semibold text-slate-700">
                                <i class="fas fa-map-marker-alt text-amber-500 w-3.5 text-center text-sm shrink-0"></i>
                                <?php echo esc_html($b['nome']); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                        <div class="border-t border-slate-100 px-4 py-3 bg-slate-50 rounded-b-2xl">
                            <a href="<?php echo home_url('/barra-recreio/'); ?>" class="text-sm font-bold text-amber-600 hover:text-amber-700 transition">
                                Ver página da Barra e Recreio →
                            </a>
                        </div>
                    </div>
                </div>

                <a href="<?php echo home_url('/#portfolio'); ?>"
                   class="px-2 xl:px-4 py-2 rounded-md text-xs lg:text-sm xl:text-base uppercase tracking-wide hover:bg-slate-50 hover:text-amber-600 transition-colors">
                    Portfólio
                </a>

                <!-- Divisor vertical -->
                <span class="w-px h-5 bg-slate-200 mx-1 xl:mx-2 shrink-0"></span>

                <!-- Telefone no nav (xl+) -->
                <a href="tel:+552123917661"
                   class="hidden xl:flex items-center gap-1.5 px-3 py-2 text-sm xl:text-base font-semibold text-slate-600 hover:text-amber-600 transition-colors">
                    <i class="fas fa-phone-alt text-amber-600 text-[11px]"></i>
                    (21) 2391-7661
                </a>

                <!-- CTA principal -->
                <a href="#contato"
                   class="ml-1 xl:ml-2 bg-amber-600 text-white px-2 lg:px-4 xl:px-6 py-2 xl:py-3 rounded-lg text-xs lg:text-sm xl:text-base uppercase tracking-wide font-bold hover:bg-amber-700 active:scale-95 transition-all shadow-lg shadow-amber-600/30">
                    Solicitar Orçamento
                </a>

            </nav>

            <!-- Hambúrguer — mobile -->
            <button id="sr-menu-btn"
                    class="md:hidden flex flex-col justify-center gap-[5px] w-12 h-12 rounded-md hover:bg-slate-100 transition p-2.5"
                    aria-label="Abrir menu">
                <span class="block w-full h-0.5 bg-slate-800 transition-all duration-300 origin-center" id="sr-b1"></span>
                <span class="block w-full h-0.5 bg-slate-800 transition-all duration-300"                id="sr-b2"></span>
                <span class="block w-full h-0.5 bg-slate-800 transition-all duration-300 origin-center" id="sr-b3"></span>
            </button>

        </div>

        <!-- Menu mobile (dropdown) -->
        <div id="sr-mobile-menu" class="hidden md:hidden border-t border-slate-100 bg-white px-4 pb-5 pt-2 max-h-[80vh] overflow-y-auto">

            <nav class="flex flex-col">
                <a href="<?php echo home_url('/'); ?>"
                   class="flex items-center gap-3 py-3 border-b border-slate-100 text-slate-700 font-semibold hover:text-amber-600 transition">
                    <i class="fas fa-home w-5 text-center text-amber-600"></i> Início
                </a>

                <!-- Accordion: Serviços -->
                <div>
                    <button class="sr-mob-acc w-full flex items-center justify-between py-3 border-b border-slate-100 text-slate-700 font-semibold hover:text-amber-600 transition">
                        <span class="flex items-center gap-3">
                            <i class="fas fa-tools w-5 text-center text-amber-600"></i> Serviços
                        </span>
                        <i class="fas fa-chevron-down text-xs text-slate-400 transition-transform duration-200 sr-acc-icon"></i>
                    </button>
                    <div class="sr-acc-panel hidden pl-8 py-1 border-b border-slate-100">
                        <?php foreach ( sr_services_data() as $svc_slug => $svc ) : ?>
                        <a href="<?php echo esc_url( home_url( '/' . $svc_slug . '/' ) ); ?>"
                           class="block py-2 text-sm text-slate-600 hover:text-amber-600 border-b border-slate-50 transition last:border-0">
                            <?php echo esc_html($svc['title']); ?>
                        </a>
                        <?php endforeach; ?>
                        <a href="<?php echo home_url('/#servicos'); ?>"
                           class="block py-2 text-sm text-amber-600 font-bold hover:text-amber-700 transition">
                            Ver todos →
                        </a>
                    </div>
                </div>

                <!-- Accordion: Regiões -->
                <div>
                    <button class="sr-mob-acc w-full flex items-center justify-between py-3 border-b border-slate-100 text-slate-700 font-semibold hover:text-amber-600 transition">
                        <span class="flex items-center gap-3">
                            <i class="fas fa-map-marker-alt w-5 text-center text-amber-600"></i> Regiões
                        </span>
                        <i class="fas fa-chevron-down text-xs text-slate-400 transition-transform duration-200 sr-acc-icon"></i>
                    </button>
                    <div class="sr-acc-panel hidden pl-8 py-1 border-b border-slate-100">
                        <?php foreach ( sr_neighborhoods_data() as $bslug => $b ) :
                            $bairro_url_mob = $current_service_slug
                                ? home_url( '/' . $current_service_slug . '-' . $bslug . '/' )
                                : home_url( '/' . $bslug . '/' );
                        ?>
                        <a href="<?php echo esc_url( $bairro_url_mob ); ?>"
                           class="block py-2 text-sm text-slate-600 hover:text-amber-600 border-b border-slate-50 transition last:border-0">
                            <?php echo esc_html($b['nome']); ?>
                        </a>
                        <?php endforeach; ?>
                        <a href="<?php echo home_url('/barra-recreio/'); ?>"
                           class="block py-2 text-sm text-amber-600 font-bold hover:text-amber-700 transition">
                            Ver Barra e Recreio →
                        </a>
                    </div>
                </div>

                <a href="<?php echo home_url('/#portfolio'); ?>"
                   class="flex items-center gap-3 py-3 border-b border-slate-100 text-slate-700 font-semibold hover:text-amber-600 transition">
                    <i class="fas fa-images w-5 text-center text-amber-600"></i> Portfólio
                </a>

                <a href="#contato"
                   class="mt-4 bg-amber-600 text-white text-center py-3.5 rounded-lg font-bold hover:bg-amber-700 transition shadow-lg shadow-amber-600/30">
                    Solicitar Orçamento
                </a>
                <a href="<?php echo esc_attr( $wa_float_url ); ?>" target="_blank"
                   class="mt-2 bg-emerald-500 text-white text-center py-3.5 rounded-lg font-bold hover:bg-emerald-600 transition flex items-center justify-center gap-2 shadow-md">
                    <i class="fab fa-whatsapp"></i> Falar pelo WhatsApp
                </a>
            </nav>

            <div class="mt-4 pt-4 border-t border-slate-100 flex flex-col gap-2 text-sm text-slate-600">
                <a href="tel:+552123917661" class="flex items-center gap-2 hover:text-amber-600 transition font-medium">
                    <i class="fas fa-phone-alt text-amber-600 w-4 text-center"></i> (21) 2391-7661
                </a>
                <a href="mailto:contato@solucoesereformas.com.br" class="flex items-center gap-2 hover:text-amber-600 transition font-medium">
                    <i class="fas fa-envelope text-amber-600 w-4 text-center"></i> contato@solucoesereformas.com.br
                </a>
            </div>
        </div>

    </header>
</div>

<script>
// ── Dropdowns desktop (hover + clique) ───────────────────────────────────────
(function () {
    var dropdowns = [
        { wrap: 'dd-wrap-servicos', panel: 'dd-panel-servicos', icon: 'dd-icon-servicos' },
        { wrap: 'dd-wrap-regioes',  panel: 'dd-panel-regioes',  icon: 'dd-icon-regioes'  },
    ];

    // Prepara os painéis para animação CSS
    dropdowns.forEach(function (d) {
        var panel = document.getElementById(d.panel);
        panel.style.transition      = 'opacity 200ms ease, margin-top 200ms ease';
        panel.style.pointerEvents   = 'none';
        panel.style.opacity         = '0';
        panel.style.marginTop       = '-6px';
        panel.classList.remove('hidden');
        panel.style.display         = 'block';
    });

    function openDD(d) {
        var panel = document.getElementById(d.panel);
        panel.style.pointerEvents = 'auto';
        panel.style.opacity       = '1';
        panel.style.marginTop     = '0px';
        document.getElementById(d.icon).style.transform = 'rotate(180deg)';
    }
    function closeDD(d) {
        var panel = document.getElementById(d.panel);
        panel.style.pointerEvents = 'none';
        panel.style.opacity       = '0';
        panel.style.marginTop     = '-6px';
        document.getElementById(d.icon).style.transform = '';
    }
    function closeAll() {
        dropdowns.forEach(closeDD);
    }

    dropdowns.forEach(function (d) {
        var wrap  = document.getElementById(d.wrap);
        var timer = null;

        wrap.addEventListener('mouseenter', function () {
            clearTimeout(timer);
            closeAll();
            openDD(d);
        });
        wrap.addEventListener('mouseleave', function () {
            timer = setTimeout(function () { closeDD(d); }, 150);
        });
    });

    document.addEventListener('click', function (e) {
        var inside = dropdowns.some(function (d) {
            return document.getElementById(d.wrap).contains(e.target);
        });
        if (!inside) closeAll();
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeAll();
    });
})();

// ── Hambúrguer mobile ──────────────────────────────────────────────────────────
(function () {
    var btn  = document.getElementById('sr-menu-btn');
    var menu = document.getElementById('sr-mobile-menu');
    var b1   = document.getElementById('sr-b1');
    var b2   = document.getElementById('sr-b2');
    var b3   = document.getElementById('sr-b3');
    var open = false;

    btn.addEventListener('click', function () {
        open = !open;
        menu.classList.toggle('hidden', !open);
        b1.style.transform = open ? 'translateY(6.5px) rotate(45deg)' : '';
        b2.style.opacity   = open ? '0' : '1';
        b3.style.transform = open ? 'translateY(-6.5px) rotate(-45deg)' : '';
    });

    menu.querySelectorAll('a').forEach(function (a) {
        a.addEventListener('click', function () {
            open = false;
            menu.classList.add('hidden');
            b1.style.transform = '';
            b2.style.opacity   = '1';
            b3.style.transform = '';
        });
    });
})();

// ── Accordion mobile ──────────────────────────────────────────────────────────
(function () {
    document.querySelectorAll('.sr-mob-acc').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var panel = btn.nextElementSibling;
            var icon  = btn.querySelector('.sr-acc-icon');
            var isOpen = !panel.classList.contains('hidden');
            panel.classList.toggle('hidden', isOpen);
            if (icon) icon.style.transform = isOpen ? '' : 'rotate(180deg)';
        });
    });
})();

// ── Scroll para topo quando já está na home ───────────────────────────────────
(function () {
    var homeUrl  = '<?php echo esc_js( home_url('/') ); ?>';
    var homePath = new URL(homeUrl).pathname;
    document.querySelectorAll('a[href="' + homeUrl + '"]').forEach(function (a) {
        a.addEventListener('click', function (e) {
            if (window.location.pathname === homePath) {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        });
    });
})();

// ── Ajusta padding do body com a altura real do header ───────────────────────
(function () {
    var fixedHeader = document.querySelector('.fixed.w-full.top-0');
    function adjustBodyPadding() {
        document.body.style.paddingTop = fixedHeader.offsetHeight + 'px';
    }
    adjustBodyPadding();
    window.addEventListener('resize', adjustBodyPadding);
})();

// ── Header shrink no scroll ───────────────────────────────────────────────────
(function () {
    var inner      = document.getElementById('sr-header-inner');
    var header     = document.getElementById('sr-header');
    var logoSub    = document.getElementById('sr-logo-sub');
    var fixedWrap  = document.querySelector('.fixed.w-full.top-0');

    function applyScroll () {
        if (window.scrollY > 60) {
            inner.style.paddingTop    = '24px';
            inner.style.paddingBottom = '24px';
            if (logoSub) logoSub.style.opacity = '0';
            header.classList.add('shadow-md');
            header.classList.remove('shadow-sm');
        } else {
            inner.style.paddingTop    = '38px';
            inner.style.paddingBottom = '38px';
            if (logoSub) logoSub.style.opacity = '1';
            header.classList.remove('shadow-md');
            header.classList.add('shadow-sm');
        }
        document.body.style.paddingTop = fixedWrap.offsetHeight + 'px';
    }

    window.addEventListener('scroll', applyScroll, { passive: true });
    applyScroll();
})();
</script>


