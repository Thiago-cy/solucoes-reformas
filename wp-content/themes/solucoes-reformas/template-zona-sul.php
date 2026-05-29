<?php
/**
 * Template Name: Zona Sul
 *
 * Página regional — Zona Sul do Rio de Janeiro.
 */
get_header();
$wa_url = 'https://wa.me/5521999989553?text=' . rawurlencode( "Olá! Vi o site de vocês e gostaria de um orçamento\n\nMeu nome: \nMeu bairro: \nServiço que preciso: \nDetalhe: " );
?>

<!-- HERO -->
<section class="min-h-[500px] flex items-center py-20"
         style="background:linear-gradient(to right,rgba(15,23,42,.93),rgba(15,23,42,.60)),url('https://images.unsplash.com/photo-1560185893-a55cbc8c57e8?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat fixed;">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl">

            <nav class="flex items-center gap-2 text-slate-400 text-sm mb-6">
                <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition">Início</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-white font-semibold">Zona Sul</span>
            </nav>

            <div class="inline-block bg-amber-600/20 border border-amber-500/30 backdrop-blur-sm text-amber-300 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">
                <i class="fas fa-map-marker-alt mr-2"></i> Barra da Tijuca e Recreio · Rio de Janeiro
            </div>

            <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-6">
                Reforma e Construção na<br><span class="text-amber-300">Barra da Tijuca e Recreio</span>
            </h1>
            <p class="text-lg text-slate-300 font-light mb-10 max-w-2xl leading-relaxed">
                Conhecemos a exigência dos condomínios da Barra da Tijuca, Recreio e Vargem Grande. Entregamos reformas completas com acabamento refinado, documentação técnica e profissionais uniformizados que respeitam as regras do seu condomínio.
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
            <p class="text-slate-500 text-sm">Atendemos com equipe própria e deslocamento ágil.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-3 max-w-4xl mx-auto">
            <?php foreach ( sr_neighborhoods_data() as $b ) : ?>
            <span class="bg-amber-50 border border-amber-200 text-amber-700 text-sm font-semibold px-4 py-2 rounded-full">
                <?php echo esc_html( $b['nome'] ); ?>
            </span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- SERVIÇOS EM DESTAQUE -->
<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Catálogo</h3>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-3">Serviços na Barra da Tijuca e Recreio</h2>
            <p class="text-slate-500">Do acabamento fino ao gerenciamento completo da obra.
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
                    <i class="fas fa-award text-2xl text-amber-600"></i>
                </div>
                <h3 class="font-bold text-slate-900 text-lg mb-3">Padrão de Alto Nível</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Entendemos as exigências dos condomínios da Zona Sul. Trabalhamos com materiais de qualidade e acabamento refinado, respeitando cada detalhe do seu projeto.</p>
            </div>
            <div class="text-center p-8 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-5">
                    <i class="fas fa-file-invoice text-2xl text-amber-600"></i>
                </div>
                <h3 class="font-bold text-slate-900 text-lg mb-3">Documentação Completa</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Emitimos Nota Fiscal e ART para todos os serviços, garantindo total transparência e segurança jurídica para você e seu condomínio.</p>
            </div>
            <div class="text-center p-8 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-5">
                    <i class="fas fa-user-tie text-2xl text-amber-600"></i>
                </div>
                <h3 class="font-bold text-slate-900 text-lg mb-3">Equipe Uniformizada</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Profissionais pontuais, identificados e organizados. Mantemos o ambiente limpo ao final de cada dia, sem comprometer sua rotina.</p>
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
            <p class="text-slate-500">Acabamento cuidadoso em cada detalhe, com entrega limpa e pontual.</p>
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

<!-- FAQ ZONA SUL -->
<section class="py-20 bg-white border-t border-slate-100">
    <div class="container mx-auto px-6 max-w-3xl">
        <div class="text-center mb-10">
            <h3 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Tire suas Dúvidas</h3>
            <h2 class="text-3xl font-bold text-slate-900 mb-3">Perguntas Frequentes — Reformas na Zona Sul</h2>
            <p class="text-slate-500">As dúvidas mais buscadas por quem quer reformar em Copacabana, Ipanema, Leblon e arredores.</p>
        </div>
        <div class="space-y-3">
            <?php
            $faqs_zs = [
                ['q'=>'Vocês atendem reformas de apartamento em Copacabana, Ipanema e Leblon?',
                 'a'=>'Sim. Atendemos toda a Zona Sul do Rio de Janeiro — Copacabana, Ipanema, Leblon, Botafogo, Flamengo, Laranjeiras, Glória, Catete, Humaitá e arredores. Entre em contato pelo WhatsApp ou telefone para agendar uma visita técnica e receber o orçamento do seu projeto.'],
                ['q'=>'Reformas em condomínios da Zona Sul precisam de aprovação prévia?',
                 'a'=>'Sim. A maioria dos condomínios da Zona Sul exige ART de responsabilidade técnica, cronograma de obra e documentação de todos os profissionais envolvidos. Nossa equipe cuida de toda essa documentação e garante conformidade com as regras do seu condomínio antes do início das obras.'],
                ['q'=>'Vocês têm experiência com apartamentos antigos de Copacabana e Ipanema?',
                 'a'=>'Sim. Temos larga experiência com os prédios históricos da Zona Sul — muitos com mais de 50 anos. Realizamos modernização elétrica, hidráulica e estrutural com cuidado para respeitar as características originais do imóvel quando desejado pelo cliente, preservando o charme do apartamento.'],
                ['q'=>'Como funciona o credenciamento da equipe para trabalhar em condomínios fechados?',
                 'a'=>'Toda a nossa equipe possui documentação em dia: carteira profissional, certidões, certificados de treinamento e apólice de seguro de responsabilidade civil. Enviamos o dossiê completo para a administração do condomínio antes do início dos serviços — sem que o cliente precise intermediar nada.'],
                ['q'=>'Vocês trabalham junto com arquitetos e decoradores?',
                 'a'=>'Sim. Executamos projetos elaborados por arquitetos e designers de interiores, seguindo fielmente os memoriais descritivos e especificações técnicas. Também atendemos clientes sem projeto, orientando as escolhas de material e layout conforme o estilo e as necessidades de cada ambiente.'],
            ];
            foreach ($faqs_zs as $fi => $faq) :
                $fid = 'zsfaq-' . $fi;
            ?>
            <div class="faq-item border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-btn w-full flex justify-between items-center text-left px-6 py-5 bg-white hover:bg-amber-50 transition font-semibold text-slate-800 gap-4"
                        aria-expanded="false" aria-controls="<?php echo $fid; ?>">
                    <span><?php echo esc_html($faq['q']); ?></span>
                    <i class="faq-icon fas fa-chevron-down text-amber-600 shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-5 text-slate-600 leading-relaxed border-t border-slate-100 pt-4" id="<?php echo $fid; ?>">
                    <?php echo esc_html($faq['a']); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="text-center mt-8 text-slate-500">
            Tem mais dúvidas?
            <a href="<?php echo esc_attr( $wa_url ); ?>"
               target="_blank" class="text-amber-600 font-semibold hover:underline">Fale pelo WhatsApp →</a>
        </p>
    </div>
</section>

<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Vocês atendem reformas de apartamento em Copacabana, Ipanema e Leblon?","acceptedAnswer":{"@type":"Answer","text":"Sim. Atendemos toda a Zona Sul do Rio de Janeiro — Copacabana, Ipanema, Leblon, Botafogo, Flamengo, Laranjeiras, Glória, Catete e Humaitá. Entre em contato pelo WhatsApp ou telefone para agendar uma visita técnica e receber o orçamento do seu projeto."}},{"@type":"Question","name":"Reformas em condomínios da Zona Sul precisam de aprovação prévia?","acceptedAnswer":{"@type":"Answer","text":"Sim. A maioria dos condomínios da Zona Sul exige ART, cronograma de obra e documentação dos profissionais. Nossa equipe cuida de toda essa documentação antes do início das obras."}},{"@type":"Question","name":"Vocês têm experiência com apartamentos antigos de Copacabana e Ipanema?","acceptedAnswer":{"@type":"Answer","text":"Sim. Temos larga experiência com prédios históricos da Zona Sul — muitos com mais de 50 anos. Realizamos modernização elétrica, hidráulica e estrutural respeitando as características originais do imóvel."}},{"@type":"Question","name":"Como funciona o credenciamento da equipe para trabalhar em condomínios fechados?","acceptedAnswer":{"@type":"Answer","text":"Toda a nossa equipe possui documentação em dia: carteira profissional, certidões, certificados e apólice de seguro. Enviamos o dossiê completo para a administração do condomínio antes do início dos serviços."}},{"@type":"Question","name":"Vocês trabalham junto com arquitetos e decoradores?","acceptedAnswer":{"@type":"Answer","text":"Sim. Executamos projetos elaborados por arquitetos e designers de interiores, seguindo os memoriais descritivos com precisão. Também atendemos clientes sem projeto, orientando as escolhas conforme o estilo e as necessidades."}}]}
</script>

<script>
document.querySelectorAll('.faq-btn').forEach(function(btn){
    btn.addEventListener('click',function(){
        var ans=this.nextElementSibling,icon=this.querySelector('.faq-icon'),open=!ans.classList.contains('hidden');
        document.querySelectorAll('.faq-answer').forEach(function(a){a.classList.add('hidden');});
        document.querySelectorAll('.faq-icon').forEach(function(i){i.style.transform='';});
        document.querySelectorAll('.faq-btn').forEach(function(b){b.setAttribute('aria-expanded','false');});
        if(!open){ans.classList.remove('hidden');icon.style.transform='rotate(180deg)';this.setAttribute('aria-expanded','true');}
    });
});
</script>

<!-- CTA BANNER -->
<section class="py-16 bg-amber-600">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Pronto para iniciar sua reforma na Zona Sul?</h2>
        <p class="text-amber-100 mb-8 max-w-xl mx-auto">Atendemos Copacabana, Ipanema, Leblon e toda a Zona Sul. Solicite um orçamento sem compromisso e receba nossa proposta em até 24h.</p>
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



