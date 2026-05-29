<?php
/**
 * Template Name: Bairro
 *
 * Página individual de bairro — conteúdo dinâmico baseado no slug da página.
 */

get_header();

global $post;
$slug   = $post->post_name;
$bairros = sr_neighborhoods_data();
$bairro  = $bairros[ $slug ] ?? null;

if ( ! $bairro ) {
    wp_redirect( home_url('/') );
    exit;
}

$nome      = $bairro['nome'];
$em        = $bairro['em'];
$regiao    = $bairro['regiao'];
$regiao_url = $bairro['regiao_url'];

$wa_msg = rawurlencode( "Olá! Vi o site de vocês e gostaria de um orçamento. Moro {$em}\n\nMeu nome: \nServiço que preciso: \nDetalhe: " );
?>

<!-- HERO -->
<section class="min-h-[500px] flex items-center py-20"
         style="background:linear-gradient(to right,rgba(15,23,42,.93),rgba(15,23,42,.60)),url('https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl">

            <nav class="flex items-center gap-2 text-slate-400 text-sm mb-6">
                <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition">Início</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <a href="<?php echo home_url( $regiao_url ); ?>" class="hover:text-white transition"><?php echo esc_html( $regiao ); ?></a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-white font-semibold"><?php echo esc_html( $nome ); ?></span>
            </nav>

            <div class="inline-block bg-amber-600/20 border border-amber-500/30 backdrop-blur-sm text-amber-300 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">
                <i class="fas fa-map-marker-alt mr-2"></i> <?php echo esc_html( $nome ); ?> · Rio de Janeiro
            </div>

            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight mb-6">
                Reforma e Construção<br><span class="text-amber-300"><?php echo esc_html( $em ); ?></span>
            </h1>
            <p class="text-lg text-slate-300 font-light mb-10 max-w-2xl leading-relaxed">
                Especialistas em reformas residenciais e comerciais <?php echo esc_html( $em ); ?>. Executamos obras com acabamento refinado, equipe própria e total transparência do início ao fim.
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#contato"
                   class="bg-amber-600 text-white text-center px-8 py-4 rounded-md font-semibold text-lg hover:bg-amber-700 transition shadow-lg shadow-amber-600/30">
                    Solicitar Visita Técnica
                </a>
                <a href="https://wa.me/5521999989553?text=<?php echo $wa_msg; ?>"
                   target="_blank"
                   class="bg-emerald-600 text-white text-center px-8 py-4 rounded-md font-semibold text-lg hover:bg-emerald-700 transition flex items-center justify-center gap-2 shadow-lg">
                    <i class="fab fa-whatsapp"></i> Falar pelo WhatsApp
                </a>
            </div>

        </div>
    </div>
</section>

<!-- SERVIÇOS NO BAIRRO -->
<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Catálogo Completo</h3>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-3">Serviços <?php echo esc_html( $em ); ?></h2>
            <p class="text-slate-500">Clique no serviço para ver detalhes e tirar dúvidas específicas para a sua região.</p>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 max-w-6xl mx-auto">
            <?php foreach ( sr_services_data() as $svc_slug => $svc ) :
                $combo_slug  = $svc_slug . '-' . $slug;
                $combo_url   = home_url( '/' . $combo_slug . '/' );
                $is_custom   = in_array( $svc['icon'], ['icon-telha', 'icon-bomba', 'icon-vazamento'] );
            ?>
            <a href="<?php echo esc_url( $combo_url ); ?>"
               class="service-card bg-white p-7 rounded-xl shadow-sm border border-slate-100 text-center hover:shadow-md transition">
                <?php if ( $is_custom ) : ?>
                <span class="<?php echo esc_attr( $svc['icon'] ); ?> mb-4"
                      style="display:inline-block;width:2.25rem;height:2.25rem;"></span>
                <?php else : ?>
                <i class="fas <?php echo esc_attr( $svc['icon'] ); ?> text-4xl text-amber-600 mb-4 block"></i>
                <?php endif; ?>
                <h4 class="text-base font-bold text-slate-800 leading-tight"><?php echo esc_html( $svc['title'] ); ?></h4>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- POR QUE NOS ESCOLHER -->
<section class="py-20 bg-white border-t border-slate-100">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Nosso Compromisso</h3>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900">Por que escolher a Soluções &amp; Reformas?</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="text-center p-8 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-5">
                    <i class="fas fa-map-marker-alt text-2xl text-amber-600"></i>
                </div>
                <h3 class="font-bold text-slate-900 text-lg mb-3">Equipe Local</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Atendemos <?php echo esc_html( $em ); ?> com equipe própria e deslocamento ágil. Sem terceirização — você sabe quem vai chegar na sua obra.</p>
            </div>
            <div class="text-center p-8 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-5">
                    <i class="fas fa-gem text-2xl text-amber-600"></i>
                </div>
                <h3 class="font-bold text-slate-900 text-lg mb-3">Acabamento de Alto Padrão</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Usamos produtos de primeira linha e técnicas refinadas para entregar projetos que valorizam e preservam o seu imóvel a longo prazo.</p>
            </div>
            <div class="text-center p-8 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-5">
                    <i class="fas fa-calendar-check text-2xl text-amber-600"></i>
                </div>
                <h3 class="font-bold text-slate-900 text-lg mb-3">Suporte do Início ao Fim</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Acompanhamento profissional em todas as etapas, do projeto à entrega com garantia e emissão de documentação técnica completa.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-slate-50 border-t border-slate-100">
    <div class="container mx-auto px-6 max-w-3xl">
        <div class="text-center mb-12">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Tire suas Dúvidas</h3>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900">Perguntas Frequentes — <?php echo esc_html( $nome ); ?></h2>
        </div>

        <div class="space-y-3" id="faq-bairro">

            <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left font-semibold text-slate-800 hover:text-amber-600 transition gap-4">
                    <span>Vocês atendem <?php echo esc_html( $em ); ?>?</span>
                    <i class="fas fa-chevron-down text-amber-600 text-sm shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-body hidden px-6 pb-5 text-slate-600 leading-relaxed text-sm">
                    Sim! Atendemos <?php echo esc_html( $em ); ?> com equipe própria e deslocamento sem custo adicional. Realizamos visita técnica gratuita para avaliar o projeto e apresentar o orçamento detalhado. Entre em contato pelo WhatsApp ou pelo formulário abaixo.
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left font-semibold text-slate-800 hover:text-amber-600 transition gap-4">
                    <span>Como solicitar um orçamento para reforma <?php echo esc_html( $em ); ?>?</span>
                    <i class="fas fa-chevron-down text-amber-600 text-sm shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-body hidden px-6 pb-5 text-slate-600 leading-relaxed text-sm">
                    É simples: preencha o formulário abaixo ou nos chame pelo WhatsApp. Nossa equipe entra em contato em até 24 horas para agendar a visita técnica e iniciar o processo de orçamento sem compromisso.
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left font-semibold text-slate-800 hover:text-amber-600 transition gap-4">
                    <span>Quanto tempo leva uma reforma residencial?</span>
                    <i class="fas fa-chevron-down text-amber-600 text-sm shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-body hidden px-6 pb-5 text-slate-600 leading-relaxed text-sm">
                    O prazo varia conforme o escopo da obra. Pequenas reformas (banheiro, cozinha) costumam levar de 2 a 4 semanas; reformas completas de apartamento podem levar de 2 a 4 meses. Definimos o cronograma na visita técnica e o cumprimos com total transparência.
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left font-semibold text-slate-800 hover:text-amber-600 transition gap-4">
                    <span>Os serviços têm garantia?</span>
                    <i class="fas fa-chevron-down text-amber-600 text-sm shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-body hidden px-6 pb-5 text-slate-600 leading-relaxed text-sm">
                    Sim. Todos os nossos serviços possuem garantia documentada. O prazo varia conforme o tipo de serviço: instalações elétricas e hidráulicas têm garantia de 1 ano; reformas estruturais seguem as normas técnicas vigentes. Entregamos laudo técnico ao final de cada obra.
                </div>
            </div>

        </div>
    </div>
</section>

<script>
(function () {
    document.querySelectorAll('#faq-bairro .faq-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var item = btn.closest('.faq-item');
            var body = item.querySelector('.faq-body');
            var icon = btn.querySelector('i');
            var open = !body.classList.contains('hidden');
            document.querySelectorAll('#faq-bairro .faq-item').forEach(function (el) {
                el.querySelector('.faq-body').classList.add('hidden');
                var ic = el.querySelector('.faq-btn i');
                if (ic) ic.style.transform = '';
            });
            if (!open) {
                body.classList.remove('hidden');
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    });
})();
</script>

<!-- CTA BANNER -->
<section class="py-16 bg-amber-600">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Pronto para iniciar sua reforma <?php echo esc_html( $em ); ?>?</h2>
        <p class="text-amber-100 mb-8 max-w-xl mx-auto">Atendemos toda a região com equipe própria. Solicite um orçamento sem compromisso e receba nossa proposta em até 24h.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#contato" class="bg-white text-amber-600 font-bold px-8 py-3.5 rounded-md hover:bg-amber-50 transition shadow-lg">
                Solicitar Orçamento
            </a>
            <a href="https://wa.me/5521999989553?text=<?php echo $wa_msg; ?>"
               target="_blank"
               class="bg-emerald-500 text-white font-bold px-8 py-3.5 rounded-md hover:bg-emerald-600 transition flex items-center justify-center gap-2 shadow-lg">
                <i class="fab fa-whatsapp text-xl"></i> Chamar no WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- FORMULÁRIO -->
<section id="contato" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-2">Solicite um Orçamento</h2>
            <p class="text-slate-500">Preencha o formulário e entraremos em contato em até 24 horas.</p>
        </div>
        <div class="max-w-2xl mx-auto bg-slate-50 p-8 md:p-10 rounded-2xl shadow-xl border border-slate-100">
            <form action="https://formsubmit.co/contato@solucoesereformas.com.br" method="POST" class="space-y-5">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_subject" value="Novo contato — <?php echo esc_attr( $nome ); ?>">
                <input type="hidden" name="Bairro" value="<?php echo esc_attr( $nome ); ?>">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <input type="text" name="Nome" placeholder="Nome Completo"
                           class="w-full bg-white border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm" required>
                    <input type="tel" name="Telefone" placeholder="Telefone / WhatsApp"
                           class="w-full bg-white border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm"
                           oninput="mascaraTelefone(event)" maxlength="15" required>
                </div>
                <input type="email" name="Email" placeholder="Seu melhor E-mail"
                       class="w-full bg-white border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm" required>
                <select name="Servico" class="w-full bg-white border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm" required>
                    <option value="">Selecione o Serviço Principal...</option>
                    <?php foreach ( sr_services_data() as $svc ) : ?>
                    <option value="<?php echo esc_attr( $svc['title'] ); ?>"><?php echo esc_html( $svc['title'] ); ?></option>
                    <?php endforeach; ?>
                </select>
                <textarea name="Descricao" rows="4" placeholder="Descreva o que precisa ser feito..."
                          class="w-full bg-white border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm" required></textarea>
                <button type="submit"
                        class="w-full bg-amber-600 text-white font-bold text-lg rounded-md px-4 py-4 hover:bg-amber-700 transition shadow-lg shadow-amber-600/30">
                    Solicitar Contato
                </button>
            </form>
        </div>
    </div>
</section>

<script>
function mascaraTelefone(event) {
    let input = event.target;
    let value = input.value.replace(/\D/g, '');
    if (!value) { input.value = ''; return; }
    value = value.substring(0, 11);
    value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
    value = value.replace(/(\d)(\d{4})$/, '$1-$2');
    input.value = value;
}
</script>

<?php get_footer(); ?>


