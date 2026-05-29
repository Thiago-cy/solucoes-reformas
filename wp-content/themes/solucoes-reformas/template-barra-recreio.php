<?php
/**
 * Template Name: Barra e Recreio
 *
 * Página regional — Barra da Tijuca e Recreio dos Bandeirantes.
 */
get_header();
$wa_url = 'https://wa.me/5521999989553?text=' . rawurlencode( "Olá! Vi o site de vocês e gostaria de um orçamento para a Barra ou Recreio\n\nMeu nome: \nMeu bairro: \nServiço que preciso: \nDetalhe: " );
?>

<!-- HERO -->
<section class="min-h-[500px] flex items-center py-20"
         style="background:linear-gradient(to right,rgba(15,23,42,.93),rgba(15,23,42,.60)),url('https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat fixed;">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl">

            <nav class="flex items-center gap-2 text-slate-400 text-sm mb-6">
                <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition">Início</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-white font-semibold">Barra e Recreio</span>
            </nav>

            <div class="inline-block bg-amber-600/20 border border-amber-500/30 backdrop-blur-sm text-amber-300 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">
                <i class="fas fa-map-marker-alt mr-2"></i> Barra da Tijuca · Recreio · Rio de Janeiro
            </div>

            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight mb-6">
                Reforma e Construção na<br><span class="text-amber-300">Barra e Recreio</span>
            </h1>
            <p class="text-lg text-slate-300 font-light mb-10 max-w-2xl leading-relaxed">
                Especialistas em reformas de alto padrão para condomínios modernos da Barra da Tijuca e Recreio dos Bandeirantes. Executamos obras residenciais e comerciais com acabamento refinado, dentro do prazo e das normas condominiais.
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#contato"
                   class="bg-amber-600 text-white text-center px-8 py-4 rounded-md font-semibold text-lg hover:bg-amber-700 transition shadow-lg shadow-amber-600/30">
                    Solicitar Visita Técnica
                </a>
                <a href="<?php echo esc_attr( $wa_url ); ?>"
                   target="_blank"
                   class="bg-emerald-600 text-white text-center px-8 py-4 rounded-md font-semibold text-lg hover:bg-emerald-700 transition flex items-center justify-center gap-2 shadow-lg">
                    <i class="fab fa-whatsapp"></i> Falar pelo WhatsApp
                </a>
            </div>

        </div>
    </div>
</section>

<!-- BAIRROS ATENDIDOS -->
<section class="py-14 bg-white border-b border-slate-100">
    <div class="container mx-auto px-6">
        <div class="text-center mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-2">Bairros Atendidos</h2>
            <p class="text-slate-500 text-sm">Atendemos toda a região da Barra e Recreio com equipe própria e deslocamento ágil.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-3 max-w-4xl mx-auto">
            <span class="bg-amber-50 border border-amber-200 text-amber-700 text-sm font-semibold px-4 py-2 rounded-full">Barra da Tijuca</span>
            <span class="bg-amber-50 border border-amber-200 text-amber-700 text-sm font-semibold px-4 py-2 rounded-full">Recreio dos Bandeirantes</span>
            <span class="bg-amber-50 border border-amber-200 text-amber-700 text-sm font-semibold px-4 py-2 rounded-full">Jardim Oceânico</span>
            <span class="bg-amber-50 border border-amber-200 text-amber-700 text-sm font-semibold px-4 py-2 rounded-full">Itanhangá</span>
            <span class="bg-amber-50 border border-amber-200 text-amber-700 text-sm font-semibold px-4 py-2 rounded-full">Camorim</span>
            <span class="bg-amber-50 border border-amber-200 text-amber-700 text-sm font-semibold px-4 py-2 rounded-full">Vargem Grande</span>
            <span class="bg-amber-50 border border-amber-200 text-amber-700 text-sm font-semibold px-4 py-2 rounded-full">Vargem Pequena</span>
            <span class="bg-amber-50 border border-amber-200 text-amber-700 text-sm font-semibold px-4 py-2 rounded-full">Pedra de Guaratiba</span>
            <span class="bg-amber-50 border border-amber-200 text-amber-700 text-sm font-semibold px-4 py-2 rounded-full">Grumari</span>
            <span class="bg-slate-100 border border-slate-200 text-slate-500 text-sm font-semibold px-4 py-2 rounded-full">+ arredores</span>
        </div>
    </div>
</section>

<!-- SERVIÇOS EM DESTAQUE -->
<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Catálogo</h3>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-3">Serviços para a Barra e Recreio</h2>
            <p class="text-slate-500">Soluções completas para condomínios e residências de alto padrão.
                <a href="<?php echo home_url('/#servicos'); ?>" class="text-amber-600 hover:underline">Ver catálogo completo →</a>
            </p>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 max-w-6xl mx-auto">
            <?php foreach ( sr_services_data() as $svc_slug => $svc ) :
                $is_custom = in_array( $svc['icon'], ['icon-telha', 'icon-bomba', 'icon-vazamento'] );
            ?>
            <a href="<?php echo home_url('/' . $svc_slug . '/'); ?>"
               class="service-card bg-white p-7 rounded-xl shadow-sm border border-slate-100 text-center">
                <?php if ( $is_custom ) : ?>
                <span class="<?php echo esc_attr($svc['icon']); ?> mb-4"
                      style="display:inline-block;width:2.25rem;height:2.25rem;"></span>
                <?php else : ?>
                <i class="fas <?php echo esc_attr($svc['icon']); ?> text-4xl text-amber-600 mb-4 block"></i>
                <?php endif; ?>
                <h4 class="text-base font-bold text-slate-800 leading-tight"><?php echo esc_html($svc['title']); ?></h4>
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
                    <i class="fas fa-city text-2xl text-amber-600"></i>
                </div>
                <h3 class="font-bold text-slate-900 text-lg mb-3">Especialistas em Condomínios Modernos</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Conhecemos as regras e horários de obra dos principais condomínios da Barra e Recreio. Trabalhamos com credenciamento e total conformidade condominial.</p>
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
                <h3 class="font-bold text-slate-900 text-lg mb-3">Suporte Técnico do Início ao Fim</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Acompanhamento profissional em todas as etapas, do projeto à entrega com garantia e emissão de documentação técnica completa.</p>
            </div>
        </div>
    </div>
</section>

<!-- GALERIA -->
<section class="py-20 bg-slate-50 border-t border-slate-200">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Padrão de Execução</h3>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-3">Qualidade que Entregamos</h2>
            <p class="text-slate-500">Acabamento impecável em cada projeto, do planejamento à entrega final.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="gallery-wrap shadow-lg aspect-[4/3]">
                <img src="https://images.pexels.com/photos/6436787/pexels-photo-6436787.jpeg?auto=compress&cs=tinysrgb&w=800"
                     alt="Reforma de Banheiro" class="gallery-img w-full h-full object-cover">
            </div>
            <div class="gallery-wrap shadow-lg aspect-[4/3]">
                <img src="https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=800"
                     alt="Reforma de Cozinha" class="gallery-img w-full h-full object-cover">
            </div>
            <div class="gallery-wrap shadow-lg aspect-[4/3]">
                <img src="https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=800"
                     alt="Reforma de Sala" class="gallery-img w-full h-full object-cover">
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="https://www.instagram.com/solucoesreformas/" target="_blank"
               class="inline-flex items-center gap-2 text-amber-600 font-semibold hover:text-amber-700 transition">
                <i class="fab fa-instagram text-xl"></i> Ver portfólio completo no Instagram
            </a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-white border-t border-slate-100">
    <div class="container mx-auto px-6 max-w-3xl">
        <div class="text-center mb-12">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Tire suas Dúvidas</h3>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900">Perguntas Frequentes — Barra e Recreio</h2>
        </div>

        <div class="space-y-3" id="faq-barra">

            <div class="faq-item bg-slate-50 border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left font-semibold text-slate-800 hover:text-amber-600 transition gap-4">
                    <span>Vocês atendem toda a região da Barra da Tijuca e do Recreio?</span>
                    <i class="fas fa-chevron-down text-amber-600 text-sm shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-body hidden px-6 pb-5 text-slate-600 leading-relaxed text-sm">
                    Sim. Atendemos toda a Barra da Tijuca e o Recreio dos Bandeirantes, além de bairros vizinhos como Jardim Oceânico, Itanhangá, Camorim, Vargem Grande e Vargem Pequena. Nossa equipe é própria e o deslocamento é ágil por toda a região. Entre em contato pelo WhatsApp ou telefone para agendar uma visita técnica e receber o orçamento do seu projeto.
                </div>
            </div>

            <div class="faq-item bg-slate-50 border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left font-semibold text-slate-800 hover:text-amber-600 transition gap-4">
                    <span>Reformas em condomínios da Barra precisam de aprovação do síndico?</span>
                    <i class="fas fa-chevron-down text-amber-600 text-sm shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-body hidden px-6 pb-5 text-slate-600 leading-relaxed text-sm">
                    Sim. A maioria dos condomínios da Barra da Tijuca e do Recreio exige aprovação prévia do síndico ou da administração antes do início das obras. É necessário apresentar ART (Anotação de Responsabilidade Técnica), comprovante de vínculo empregatício dos prestadores de serviço e respeitar os horários de obra definidos em convenção condominial. Nossa equipe já conhece as regras dos principais condomínios da região e cuida de toda a documentação necessária.
                </div>
            </div>

            <div class="faq-item bg-slate-50 border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left font-semibold text-slate-800 hover:text-amber-600 transition gap-4">
                    <span>Vocês atendem o Recreio dos Bandeirantes e arredores?</span>
                    <i class="fas fa-chevron-down text-amber-600 text-sm shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-body hidden px-6 pb-5 text-slate-600 leading-relaxed text-sm">
                    Sim! Atendemos todo o Recreio dos Bandeirantes e ainda bairros vizinhos como Jardim Oceânico, Itanhangá, Camorim, Vargem Grande, Vargem Pequena, Pedra de Guaratiba e Grumari. Nossa equipe é própria e o deslocamento é ágil por toda a Zona Oeste do Rio de Janeiro. Não há cobrança de taxa de visita técnica nessa região.
                </div>
            </div>

            <div class="faq-item bg-slate-50 border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left font-semibold text-slate-800 hover:text-amber-600 transition gap-4">
                    <span>É possível fazer reforma em coberturas e casas na Barra?</span>
                    <i class="fas fa-chevron-down text-amber-600 text-sm shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-body hidden px-6 pb-5 text-slate-600 leading-relaxed text-sm">
                    Sim! Temos ampla experiência em reformas de coberturas duplex, penthouses e casas de alto padrão na Barra da Tijuca e no Recreio. Esses projetos costumam envolver ampliações de área, instalação de piscinas, decks, revestimentos especiais e integração de ambientes. Trabalhamos em parceria com arquitetos e designers de interiores para garantir que a execução siga fielmente o projeto, com acabamento impecável.
                </div>
            </div>

            <div class="faq-item bg-slate-50 border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left font-semibold text-slate-800 hover:text-amber-600 transition gap-4">
                    <span>Como funciona o credenciamento da equipe para obras em condomínios da Barra?</span>
                    <i class="fas fa-chevron-down text-amber-600 text-sm shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-body hidden px-6 pb-5 text-slate-600 leading-relaxed text-sm">
                    Toda a nossa equipe possui documentação completa e atualizada: carteira profissional, certidões, certificados de treinamento e apólice de seguro de responsabilidade civil. Enviamos o dossiê completo para a administração do condomínio com antecedência — sem que o cliente precise intermediar nada. Conhecemos as regras dos principais condomínios da Barra e do Recreio e garantimos total conformidade.
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Schema FAQ — Barra e Recreio -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Vocês atendem toda a região da Barra da Tijuca e do Recreio?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sim. Atendemos toda a Barra da Tijuca e o Recreio dos Bandeirantes, além de bairros vizinhos como Jardim Oceânico, Itanhangá, Camorim, Vargem Grande e Vargem Pequena. Nossa equipe é própria e o deslocamento é ágil por toda a região. Entre em contato pelo WhatsApp ou telefone para agendar uma visita técnica e receber o orçamento do seu projeto."
      }
    },
    {
      "@type": "Question",
      "name": "Reformas em condomínios da Barra precisam de aprovação do síndico?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sim. A maioria dos condomínios da Barra da Tijuca e do Recreio exige aprovação prévia do síndico ou da administração antes do início das obras. É necessário apresentar ART, comprovante de vínculo empregatício dos prestadores de serviço e respeitar os horários de obra. Nossa equipe já conhece as regras dos principais condomínios da região e cuida de toda a documentação necessária."
      }
    },
    {
      "@type": "Question",
      "name": "Vocês atendem o Recreio dos Bandeirantes e arredores?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sim! Atendemos todo o Recreio dos Bandeirantes e ainda bairros vizinhos como Jardim Oceânico, Itanhangá, Camorim, Vargem Grande, Vargem Pequena, Pedra de Guaratiba e Grumari. Nossa equipe é própria e o deslocamento é ágil por toda a Zona Oeste do Rio de Janeiro. Não há cobrança de taxa de visita técnica nessa região."
      }
    },
    {
      "@type": "Question",
      "name": "É possível fazer reforma em coberturas e casas na Barra?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sim! Temos ampla experiência em reformas de coberturas duplex, penthouses e casas de alto padrão na Barra da Tijuca e no Recreio. Esses projetos costumam envolver ampliações de área, instalação de piscinas, decks, revestimentos especiais e integração de ambientes. Trabalhamos em parceria com arquitetos e designers de interiores para garantir acabamento impecável."
      }
    },
    {
      "@type": "Question",
      "name": "Como funciona o credenciamento da equipe para obras em condomínios da Barra?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Toda a nossa equipe possui documentação completa e atualizada: carteira profissional, certidões, certificados de treinamento e apólice de seguro de responsabilidade civil. Enviamos o dossiê completo para a administração do condomínio com antecedência. Conhecemos as regras dos principais condomínios da Barra e do Recreio e garantimos total conformidade."
      }
    }
  ]
}
</script>

<script>
(function () {
    document.querySelectorAll('#faq-barra .faq-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var item  = btn.closest('.faq-item');
            var body  = item.querySelector('.faq-body');
            var icon  = btn.querySelector('i');
            var open  = !body.classList.contains('hidden');

            // Fecha todos
            document.querySelectorAll('#faq-barra .faq-item').forEach(function (el) {
                el.querySelector('.faq-body').classList.add('hidden');
                var ic = el.querySelector('.faq-btn i');
                if (ic) ic.style.transform = '';
            });

            // Abre o clicado (se estava fechado)
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
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Pronto para iniciar sua reforma na Barra ou Recreio?</h2>
        <p class="text-amber-100 mb-8 max-w-xl mx-auto">Atendemos toda a região com equipe própria. Solicite um orçamento sem compromisso e receba nossa proposta em até 24h.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#contato" class="bg-white text-amber-600 font-bold px-8 py-3.5 rounded-md hover:bg-amber-50 transition shadow-lg">
                Solicitar Orçamento
            </a>
            <a href="<?php echo esc_attr( $wa_url ); ?>"
               target="_blank"
               class="bg-emerald-500 text-white font-bold px-8 py-3.5 rounded-md hover:bg-emerald-600 transition flex items-center justify-center gap-2 shadow-lg">
                <i class="fab fa-whatsapp text-xl"></i> Chamar no WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- FORMULÁRIO -->
<section id="contato" class="py-20 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-2">Solicite um Orçamento</h2>
            <p class="text-slate-500">Preencha o formulário e entraremos em contato em até 24 horas.</p>
        </div>
        <div class="max-w-2xl mx-auto bg-white p-8 md:p-10 rounded-2xl shadow-xl border border-slate-100">
            <form action="https://formsubmit.co/contato@solucoesereformas.com.br" method="POST" class="space-y-5">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_subject" value="Novo contato — Barra e Recreio">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <input type="text" name="Nome" placeholder="Nome Completo"
                           class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm" required>
                    <input type="tel" name="Telefone" placeholder="Telefone / WhatsApp"
                           class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm"
                           oninput="mascaraTelefone(event)" maxlength="15" required>
                </div>
                <input type="email" name="Email" placeholder="Seu melhor E-mail"
                       class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm" required>
                <select name="Bairro" class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm" required>
                    <option value="">Selecione seu bairro...</option>
                    <?php foreach ( sr_neighborhoods_data() as $b ) : ?>
                    <option value="<?php echo esc_attr( $b['nome'] ); ?>"><?php echo esc_html( $b['nome'] ); ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="Servico" class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm" required>
                    <option value="">Selecione o Serviço Principal...</option>
                    <?php foreach ( sr_services_data() as $svc ) : ?>
                    <option value="<?php echo esc_attr( $svc['title'] ); ?>"><?php echo esc_html( $svc['title'] ); ?></option>
                    <?php endforeach; ?>
                </select>
                <textarea name="Descricao" rows="4" placeholder="Descreva o que precisa ser feito..."
                          class="w-full bg-slate-50 border border-slate-200 rounded-md px-4 py-3 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm" required></textarea>
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
    if (!value) { input.value = ""; return; }
    value = value.substring(0, 11);
    value = value.replace(/^(\d{2})(\d)/g, "($1) $2");
    value = value.replace(/(\d)(\d{4})$/, "$1-$2");
    input.value = value;
}
</script>

<?php get_footer(); ?>


