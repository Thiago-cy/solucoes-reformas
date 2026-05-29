<?php
// ─── Favicon personalizado ────────────────────────────────────────────────────
// WordPress registra wp_site_icon com prioridade 99 — precisamos remover na mesma
remove_action( 'wp_head', 'wp_site_icon', 99 );
add_action( 'wp_head', function () {
    $icon = get_template_directory_uri() . '/favicon.svg?v=5';
    echo '<meta name="theme-color" content="#D97706">' . "\n";
}, 1 );

// ─── Enqueue scripts & styles ────────────────────────────────────────────────
function sr_enqueue() {
    wp_enqueue_style('google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
        [], null);
    wp_enqueue_style('font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        [], '6.4.0');
    wp_enqueue_style('sr-style', get_stylesheet_uri(), [], '1.0');
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', [], null, false);
}
add_action('wp_enqueue_scripts', 'sr_enqueue');

// ─── Theme support ────────────────────────────────────────────────────────────
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption']);

// ─── Serviços — dados centralizados ──────────────────────────────────────────
// Edite aqui para atualizar texto, imagem ou WhatsApp de cada serviço.
function sr_services_data() {
    return [
        'marceneiro' => [
            'title'       => 'Marceneiro',
            'hero_title'  => 'Móveis Sob Medida que <span class="text-amber-300">Transformam Ambientes</span>',
            'hero_desc'   => 'Projetos de marcenaria planejada para cozinhas, closets, escritórios e ambientes comerciais no Rio de Janeiro.',
            'hero_image'  => 'photo-1631396326646-c06a935ff3a6',
            'icon'        => 'fa-ruler-combined',
            'wa_message'  => "Olá! Preciso de um marceneiro para móveis planejados.",
            'services'    => [
                ['title'=>'Instalação de Portas','desc'=>'Instalação e substituição de portas internas e externas.'],
                ['title'=>'Manutenção de Portas e Janelas','desc'=>'Reparos em dobradiças, fechaduras e ajuste de folgas.'],
                ['title'=>'Montagem de Móveis','desc'=>'Montagem de móveis de linha e kits residenciais.'],
                ['title'=>'Fabricação de Móveis Planejados','desc'=>'Projetos sob medida para cozinha, closet e escritório.'],
                ['title'=>'Substituição de Fórmica','desc'=>'Troca de revestimento em bancadas e armários.'],
                ['title'=>'Manutenção de Armários e Guarda-Roupas','desc'=>'Ajuste de portas, gavetas e corrediças.'],
                ['title'=>'Instalação de Fechaduras','desc'=>'Instalação de fechaduras mecânicas e eletrônicas.'],
                ['title'=>'Troca de Corrediças e Gavetas','desc'=>'Substituição de corrediças e manutenção de gavetas.'],
                ['title'=>'Pátina e Laca','desc'=>'Acabamentos decorativos em madeira e MDF.'],
            ],
        ],
        'eletricista' => [
            'title'       => 'Eletricista',
            'hero_title'  => 'Instalações Elétricas <span class="text-amber-300">Seguras e Eficientes</span>',
            'hero_desc'   => 'Modernização e manutenção de instalações elétricas residenciais e prediais. Conformidade com as normas ABNT no Rio de Janeiro.',
            'hero_image'  => 'photo-1621905251189-08b45d6a269e',
            'icon'        => 'fa-bolt',
            'wa_message'  => "Olá! Preciso de um eletricista.",
            'services'    => [
                ['title'=>'Instalação de Luminárias','desc'=>'Instalação e troca de luminárias internas e externas.'],
                ['title'=>'Troca de Disjuntores','desc'=>'Substituição de disjuntores e componentes do quadro elétrico.'],
                ['title'=>'Instalação de Tomadas','desc'=>'Instalação e troca de tomadas e pontos elétricos.'],
                ['title'=>'Instalação de Ventiladores','desc'=>'Instalação e troca de ventiladores de teto e parede.'],
                ['title'=>'Automação Residencial','desc'=>'Instalação de interruptores e sistemas de automação.'],
                ['title'=>'Sensor de Presença','desc'=>'Instalação de sensores de presença para iluminação.'],
                ['title'=>'Instalação de Ar Condicionado','desc'=>'Instalação e troca de unidades de ar condicionado.'],
                ['title'=>'Instalações Elétricas','desc'=>'Execução de instalações elétricas residenciais e comerciais.'],
                ['title'=>'Iluminação','desc'=>'Projetos e instalação de iluminação decorativa e funcional.'],
            ],
        ],
        'bombeiro-hidraulico' => [
            'title'       => 'Bombeiro Hidráulico',
            'hero_title'  => 'Encanamento <span class="text-amber-300">Sem Dor de Cabeça</span>',
            'hero_desc'   => 'Manutenção e instalação de tubulações, prumadas e sistemas hidráulicos para residências e condomínios no Rio de Janeiro.',
            'hero_image'  => 'photo-1607472586893-edb57bdc0e39',
            'icon'        => 'fa-faucet',
            'wa_message'  => "Olá! Preciso de um bombeiro hidráulico.",
            'services'    => [
                ['title'=>'Troca de Sifão','desc'=>'Instalação e troca de sifões em pias e cubas.'],
                ['title'=>'Sistema de Descarga c/ Caixa Embutida','desc'=>'Instalação e troca de sistemas de descarga embutidos.'],
                ['title'=>'Sistema de Descarga c/ Caixa Acoplada','desc'=>'Instalação e troca de sistemas de descarga acoplados.'],
                ['title'=>'Instalação de Torneiras','desc'=>'Instalação e troca de torneiras de cozinha e banheiro.'],
                ['title'=>'Instalação de Registros','desc'=>'Instalação e troca de registros e válvulas.'],
                ['title'=>'Sistema de Aquecimento de Água','desc'=>'Instalação de chuveiros, aquecedores e sistemas de aquecimento.'],
                ['title'=>'Caixa de Gordura','desc'=>'Instalação e limpeza de caixas de gordura.'],
                ['title'=>'Instalação de Pressurizador','desc'=>'Instalação e troca de pressurizadores de água.'],
                ['title'=>'Instalação de Bomba D\'Água','desc'=>'Instalação e troca de bombas d\'água.'],
                ['title'=>'Encanamento de Água Quente e Fria','desc'=>'Instalação e reforma de redes de água quente e fria.'],
            ],
        ],
        'pedreiro' => [
            'title'       => 'Pedreiro',
            'hero_title'  => 'Alvenaria e Acabamento <span class="text-amber-300">de Alto Padrão</span>',
            'hero_desc'   => 'Serviços de alvenaria, contrapiso, revestimento e assentamento de cerâmicas para obras residenciais e comerciais no Rio de Janeiro.',
            'hero_image'  => 'photo-1504307651254-35680f356dfd',
            'icon'        => 'fa-trowel-bricks',
            'wa_message'  => "Olá! Preciso de um pedreiro.",
            'services'    => [
                ['title'=>'Reforma','desc'=>'Execução de reformas residenciais e comerciais em alvenaria.'],
                ['title'=>'Contrapiso','desc'=>'Execução de contrapiso para nivelamento e assentamento de pisos.'],
                ['title'=>'Instalação de Piso','desc'=>'Assentamento de pisos cerâmicos, vinílicos e laminados.'],
                ['title'=>'Instalação de Porcelanato','desc'=>'Assentamento de porcelanato com rejunte e acabamento.'],
                ['title'=>'Instalação de Vaso Sanitário','desc'=>'Instalação e troca de vasos sanitários e louças.'],
                ['title'=>'Impermeabilizações','desc'=>'Impermeabilização de lajes, banheiros e áreas molhadas.'],
                ['title'=>'Bancadas de Mármore e Granito','desc'=>'Instalação de bancadas em pedras naturais e sintéticas.'],
                ['title'=>'Demolições','desc'=>'Demolição controlada de paredes e revestimentos.'],
            ],
        ],
        'pintor' => [
            'title'       => 'Pintor',
            'hero_title'  => 'Pintura que <span class="text-amber-300">Transforma Ambientes</span>',
            'hero_desc'   => 'Serviços de pintura residencial e comercial com massa corrida, textura e acabamento fino no Rio de Janeiro.',
            'hero_image'  => 'photo-1562259949-e8e7689d7828',
            'icon'        => 'fa-paint-roller',
            'wa_message'  => "Olá! Preciso de um pintor.",
            'services'    => [
                ['title'=>'Pintura de Paredes','desc'=>'Pintura interna e externa de paredes com preparo de superfície.'],
                ['title'=>'Regularização de Paredes','desc'=>'Correção de imperfeições e emboço para receber pintura.'],
                ['title'=>'Massa Corrida','desc'=>'Aplicação de massa corrida para acabamento liso.'],
                ['title'=>'Pintura Demarcatória','desc'=>'Pintura de demarcação em garagens e pisos.'],
                ['title'=>'Pintura de Telhado','desc'=>'Pintura impermeabilizante de telhados e lajes.'],
                ['title'=>'Pintura de Portão e Metais','desc'=>'Pintura de portões, grades e esquadrias metálicas com esmalte.'],
                ['title'=>'Pátina','desc'=>'Acabamento decorativo em pátina para móveis e superfícies.'],
                ['title'=>'Laca','desc'=>'Aplicação de laca em madeira, MDF e superfícies decorativas.'],
                ['title'=>'Textura Decorativa','desc'=>'Aplicação de texturas decorativas em paredes internas e externas.'],
            ],
        ],
        'deteccao-de-vazamentos' => [
            'title'       => 'Detecção de Vazamentos',
            'hero_title'  => 'Localizamos o Vazamento <span class="text-amber-300">Sem Quebrar Nada</span>',
            'hero_desc'   => 'Tecnologia geofone e termovisão para localizar vazamentos ocultos em tubulações pressurizadas. Laudo técnico para CEDAE.',
            'hero_image'  => 'photo-1538474705339-e87de81450e8',
            'icon'        => 'icon-vazamento',
            'wa_message'  => "Olá! Preciso de detecção de vazamentos.",
            'services'    => [
                ['title'=>'Conta de Água Alta','desc'=>'Investigação de consumo elevado e identificação da causa.'],
                ['title'=>'Detecção de Vazamentos','desc'=>'Localização precisa de vazamentos em tubulações ocultas.'],
                ['title'=>'Redução na Conta de Água','desc'=>'Diagnóstico e correção de perdas para reduzir o consumo.'],
                ['title'=>'Detecção em Piscina','desc'=>'Localização de vazamentos em tubulações e estrutura de piscinas.'],
                ['title'=>'Caça Vazamentos','desc'=>'Serviço especializado de localização de vazamentos sem quebra desnecessária.'],
                ['title'=>'Vídeo Inspeção em Tubulações','desc'=>'Inspeção interna de tubulações com câmera para diagnóstico preciso.'],
                ['title'=>'Estudo e Diagnóstico de Infiltrações','desc'=>'Análise técnica da origem e extensão de infiltrações.'],
            ],
        ],
        'gesseiro' => [
            'title'       => 'Gesseiro',
            'hero_title'  => 'Tetos e Paredes <span class="text-amber-300">com Acabamento Perfeito</span>',
            'hero_desc'   => 'Especialistas em drywall, sancas, rebaixamento de teto e divisórias para projetos residenciais e comerciais no Rio de Janeiro.',
            'hero_image'  => 'photo-1768839725085-829e6ac7ac26',
            'icon'        => 'fa-border-all',
            'wa_message'  => "Olá! Preciso de serviço de gesseiro.",
            'services'    => [
                ['title'=>'Drywall Decorativo e Funcional','desc'=>'Instalação de drywall para divisórias, forros e painéis decorativos.'],
                ['title'=>'Rebaixamento de Tetos em Gesso','desc'=>'Execução de forros rebaixados em gesso acartonado.'],
                ['title'=>'Sanca de Gesso','desc'=>'Instalação de sancas abertas e fechadas com iluminação indireta.'],
                ['title'=>'Reparos em Gesso','desc'=>'Correção de trincas, umidade e danos em forros e paredes de gesso.'],
            ],
        ],
        'telhadista' => [
            'title'       => 'Telhadista',
            'hero_title'  => 'Telhados Sem <span class="text-amber-300">Goteiras ou Infiltrações</span>',
            'hero_desc'   => 'Construção, reforma e manutenção de telhados cerâmicos, metálicos e calhas. Solução definitiva contra infiltrações no Rio de Janeiro.',
            'hero_image'  => 'photo-1605450099279-533bd3ce379a',
            'icon'        => 'icon-telha',
            'wa_message'  => "Olá! Preciso de um telhadista.",
            'services'    => [
                ['title'=>'Manutenção Preventiva','desc'=>'Vistoria e manutenção preventiva de telhados para evitar problemas.'],
                ['title'=>'Inspeção em Telhados','desc'=>'Inspeção técnica completa para identificar danos e infiltrações.'],
                ['title'=>'Isolamento Térmico e Pintura','desc'=>'Aplicação de isolamento térmico e pintura em telhados.'],
                ['title'=>'Impermeabilização de Telhados e Lajes','desc'=>'Impermeabilização com manta asfáltica e produtos específicos.'],
                ['title'=>'Reparos de Vazamentos e Infiltrações','desc'=>'Correção pontual de goteiras, trincas e infiltrações em coberturas.'],
                ['title'=>'Substituição de Telhas','desc'=>'Troca de telhas quebradas ou danificadas.'],
            ],
        ],
        'gasista-aquecedores-boiler' => [
            'title'       => 'Gasista, Aquecedores e Boiler',
            'hero_title'  => 'Gás e Aquecimento <span class="text-amber-300">com Segurança Total</span>',
            'hero_desc'   => 'Instalação e manutenção de tubulação de gás, aquecedores, boilers e conversões. Profissionais credenciados para GN e GLP.',
            'hero_image'  => 'photo-1558618666-fcd25c85cd64',
            'icon'        => 'fa-fire',
            'wa_message'  => "Olá! Preciso de serviço de gasista.",
            'services'    => [
                ['title'=>'Instalação de Tubulação de Gás','desc'=>'Instalação de redes de gás em GN e GLP para residências.'],
                ['title'=>'Instalação para Condomínios','desc'=>'Instalação e adequação de redes de gás em condomínios.'],
                ['title'=>'Manutenção Preventiva e Corretiva','desc'=>'Manutenção periódica e correção de problemas na instalação de gás.'],
                ['title'=>'Instalação e Conversão de Fogões','desc'=>'Instalação de fogões e conversão entre GN e GLP.'],
                ['title'=>'Conserto de Fogão','desc'=>'Reparo de queimadores, válvulas e acendimento eletrônico.'],
                ['title'=>'Teste de Estanqueidade','desc'=>'Verificação de vazamentos com emissão de laudo técnico.'],
                ['title'=>'Instalação e Manutenção de Aquecedores a Gás','desc'=>'Instalação e manutenção de aquecedores de passagem a gás.'],
                ['title'=>'Detecção Eletrônica','desc'=>'Detecção de vazamentos de gás com equipamento eletrônico especializado.'],
            ],
        ],
        'reformas-em-geral' => [
            'title'       => 'Reformas em Geral',
            'hero_title'  => 'Sua Reforma <span class="text-amber-300">do Início ao Fim</span>',
            'hero_desc'   => 'Gerenciamento completo de obras residenciais e comerciais no Rio de Janeiro. Do projeto à entrega, com pontualidade e qualidade garantidas.',
            'hero_image'  => 'photo-1503387762-592deb58ef4e',
            'icon'        => 'fa-home',
            'wa_message'  => "Olá! Preciso de orçamento para uma reforma.",
            'services'    => [
                ['title'=>'Reforma completa de apartamento','desc'=>'Gerenciamento total com todas as disciplinas integradas.'],
                ['title'=>'Reforma de banheiro','desc'=>'Revestimentos, hidráulica, elétrica e acabamento.'],
                ['title'=>'Reforma de cozinha','desc'=>'Marcenaria, elétrica, hidráulica e revestimentos.'],
                ['title'=>'Reforma comercial','desc'=>'Lojas, escritórios e espaços de trabalho.'],
                ['title'=>'Demolição e descarte','desc'=>'Retirada de paredes e descarte correto de entulho.'],
                ['title'=>'Gerenciamento de obra','desc'=>'Coordenação de múltiplos serviços com cronograma definido.'],
            ],
        ],
        'desentupimento' => [
            'title'       => 'Desentupimento',
            'hero_title'  => 'Desentupimento <span class="text-amber-300">Rápido e Sem Bagunça</span>',
            'hero_desc'   => 'Desobstrução de pias, vasos, ralos e caixas de gordura com equipamento especializado. Atendimento rápido no Rio de Janeiro.',
            'hero_image'  => 'photo-1584622650111-993a426fbf0a',
            'icon'        => 'fa-tint-slash',
            'wa_message'  => "Olá! Preciso de desentupimento urgente.",
            'services'    => [
                ['title'=>'Pias e cubas','desc'=>'Desobstrução de pias de cozinha e banheiro.'],
                ['title'=>'Vasos sanitários','desc'=>'Desentupimento sem quebra de louça.'],
                ['title'=>'Ralos e grelhas','desc'=>'Limpeza de ralos de banheiro, garagem e área externa.'],
                ['title'=>'Caixas de gordura','desc'=>'Limpeza completa de caixas de gordura e esgoto.'],
                ['title'=>'Colunas de esgoto','desc'=>'Desobstrução de colunas prediais com espiral elétrica.'],
                ['title'=>'Hidrômetros entupidos','desc'=>'Limpeza de filtros e registros de entrada.'],
            ],
        ],
        'bomba' => [
            'title'       => "Bomba D'Água",
            'hero_title'  => 'Sua Casa de Máquinas <span class="text-amber-300">Funcionando sem Parar</span>',
            'hero_desc'   => 'Manutenção preventiva e corretiva de bombas d\'água, motores e pressurizadores para condomínios e residências no Rio de Janeiro.',
            'hero_image'  => 'photo-1505832773278-f0d50c13dbe0',
            'icon'        => 'icon-bomba',
            'wa_message'  => "Olá! Preciso de manutenção de bomba d'água.",
            'services'    => [
                ['title'=>'Instalação de Pressurizador','desc'=>'Instalação e troca de pressurizadores para baixa pressão na rede.'],
                ['title'=>'Instalação de Bomba D\'Água','desc'=>'Instalação e troca de bombas d\'água submersas e de superfície.'],
                ['title'=>'Manutenção de Bomba D\'Água','desc'=>'Manutenção preventiva e corretiva de bombas e motores.'],
                ['title'=>'Inspeção de Casa de Máquinas','desc'=>'Vistoria técnica da casa de máquinas com diagnóstico.'],
            ],
        ],
        'inspecoes-prediais-fachadas' => [
            'title'       => 'Inspeções Prediais e Fachadas',
            'hero_title'  => 'Seu Prédio <span class="text-amber-300">Seguro e Valorizado</span>',
            'hero_desc'   => 'Inspeção predial completa, recuperação de fachadas e emissão de laudo técnico para condomínios no Rio de Janeiro.',
            'hero_image'  => 'photo-1487958449943-2429e8be8625',
            'icon'        => 'fa-building',
            'wa_message'  => "Olá! Preciso de inspeção predial.",
            'services'    => [
                ['title'=>'Laudo de Inspeção Predial','desc'=>'Relatório técnico exigido por lei para condomínios.'],
                ['title'=>'Pintura de fachada','desc'=>'Pintura externa de fachadas com andaimes e equipamentos adequados.'],
                ['title'=>'Recuperação de pastilhas','desc'=>'Fixação e substituição de pastilhas soltas.'],
                ['title'=>'Rejunte e vedação','desc'=>'Recomposição de rejuntes e vedação de juntas.'],
                ['title'=>'Tratamento de fissuras','desc'=>'Injeção de resina e argamassa em trincas e fissuras.'],
                ['title'=>'Impermeabilização de laje','desc'=>'Manta asfáltica e impermeabilizante para lajes e coberturas.'],
            ],
        ],
        'contrato-manutencao-predial' => [
            'title'       => 'Contrato de Manutenção Predial',
            'hero_title'  => 'Manutenção Preventiva <span class="text-amber-300">Para Seu Condomínio</span>',
            'hero_desc'   => 'Plano de manutenção preventiva contínua com vistorias periódicas, relatórios técnicos e atendimento prioritário para condomínios no Rio de Janeiro.',
            'hero_image'  => 'photo-1450101499163-c8848c66ca85',
            'icon'        => 'fa-file-contract',
            'wa_message'  => "Olá! Gostaria de informações sobre contrato de manutenção predial.",
            'services'    => [
                ['title'=>'Vistorias periódicas','desc'=>'Visitas programadas mensais ou trimestrais.'],
                ['title'=>'Manutenção elétrica','desc'=>'Check-up de quadros, luminárias e instalações.'],
                ['title'=>'Manutenção hidráulica','desc'=>'Inspeção de registros, bombas e caixas d\'água.'],
                ['title'=>'Relatório técnico mensal','desc'=>'Relatório detalhado com fotos e laudos.'],
                ['title'=>'Atendimento prioritário','desc'=>'Atendimento com prioridade para condomínios parceiros.'],
                ['title'=>'Gestão de fornecedores','desc'=>'Coordenamos todos os serviços necessários.'],
            ],
        ],
        'portao-eletronico' => [
            'title'       => 'Portão Eletrônico e Controle de Acesso',
            'hero_title'  => 'Acesso Seguro e <span class="text-amber-300">Automatizado</span>',
            'hero_desc'   => 'Instalação e manutenção de portões automáticos, fechaduras digitais e sistemas de controle de acesso para residências e condomínios.',
            'hero_image'  => 'photo-1580047750144-2c7790adf461',
            'icon'        => 'fa-door-open',
            'wa_message'  => "Olá! Preciso de serviço de portão eletrônico.",
            'services'    => [
                ['title'=>'Motores para portão de garagem','desc'=>'Instalação de motores de corrente e deslizantes.'],
                ['title'=>'Controles remotos e TAGs','desc'=>'Configuração e duplicação de controles.'],
                ['title'=>'Fechaduras digitais','desc'=>'Fechaduras com senha, biometria e cartão.'],
                ['title'=>'Interfone e videoporteiro','desc'=>'Instalação de interfones e câmeras de entrada.'],
                ['title'=>'Cancelas','desc'=>'Instalação de cancelas para estacionamentos.'],
                ['title'=>'Manutenção preventiva','desc'=>'Lubrificação e ajuste de motores e trilhos.'],
            ],
        ],
        'cftv' => [
            'title'       => 'CFTV',
            'hero_title'  => 'Monitoramento <span class="text-amber-300">24 Horas pelo Celular</span>',
            'hero_desc'   => 'Instalação de câmeras de segurança, DVR/NVR e sistemas de alarme para residências, condomínios e empresas no Rio de Janeiro.',
            'hero_image'  => 'photo-1557597774-9d273605dfa9',
            'icon'        => 'fa-video',
            'wa_message'  => "Olá! Preciso de instalação de câmeras CFTV.",
            'services'    => [
                ['title'=>'Câmeras HD e IP','desc'=>'Câmeras internas e externas de alta resolução.'],
                ['title'=>'DVR e NVR','desc'=>'Configuração de gravadores para armazenamento contínuo.'],
                ['title'=>'Acesso pelo celular','desc'=>'Configuração de aplicativo para monitoramento remoto.'],
                ['title'=>'Câmeras 360°','desc'=>'Câmeras dome e fisheye para cobertura ampla.'],
                ['title'=>'Alarme perimetral','desc'=>'Sensores de movimento e sirene para áreas externas.'],
                ['title'=>'Câmeras noturnas','desc'=>'Infrared e coloridas para imagem clara no escuro.'],
            ],
        ],
        'piscinas' => [
            'title'       => 'Piscinas',
            'hero_title'  => 'Piscinas Sempre <span class="text-amber-300">Limpas e Equilibradas</span>',
            'hero_desc'   => 'Manutenção, limpeza e tratamento químico de piscinas residenciais e de condomínios no Rio de Janeiro.',
            'hero_image'  => 'photo-1576013551627-0cc20b96c2a7',
            'icon'        => 'fa-water',
            'wa_message'  => "Olá! Preciso de manutenção de piscina.",
            'services'    => [
                ['title'=>'Tratamento químico','desc'=>'Cloro, pH, alcalinidade e algicida balanceados.'],
                ['title'=>'Aspiração e escovação','desc'=>'Limpeza de fundo, paredes e linha d\'água.'],
                ['title'=>'Manutenção de filtros','desc'=>'Limpeza e troca de areia do filtro.'],
                ['title'=>'Instalação de bombas','desc'=>'Troca e instalação de bombas e motores.'],
                ['title'=>'Troca de vinil','desc'=>'Revestimento em vinil para piscinas de concreto.'],
                ['title'=>'Reforma de piscina','desc'=>'Revitalização completa com pastilhas e azulejos.'],
            ],
        ],
    ];
}

// ─── FAQs por serviço ─────────────────────────────────────────────────────────
function sr_faqs_data() {
    return [
        'marceneiro' => [
            ['q'=>'Vocês atendem projetos de marcenaria na Barra da Tijuca, Recreio e região?',
             'a'=>'Sim. Atendemos a Barra da Tijuca, Recreio dos Bandeirantes, Vargem Grande, Vargem Pequena, Jardim Oceânico e Itanhangá. Entre em contato pelo WhatsApp ou telefone para agendar uma visita técnica e receber o orçamento do seu projeto.'],
            ['q'=>'Como funciona o processo de um projeto de marcenaria?',
             'a'=>'Tudo começa com uma visita técnica para medição do ambiente. Em seguida elaboramos o projeto para que você visualize o resultado antes da fabricação. Após sua aprovação, iniciamos a produção dos módulos e agendamos a instalação. Nenhuma peça é fabricada sem aprovação prévia do cliente.'],
            ['q'=>'Os serviços de marcenaria têm garantia?',
             'a'=>'Sim. Todos os serviços são formalizados com contrato e possuem garantia por escrito. Emitimos nota fiscal e entregamos a documentação completa junto com o projeto concluído.'],
            ['q'=>'Vocês trabalham junto com arquitetos e designers de interiores?',
             'a'=>'Sim. Executamos projetos elaborados por arquitetos e designers, seguindo fielmente os memoriais descritivos e especificações técnicas. Também atendemos clientes sem projeto, orientando as escolhas de material e layout conforme o ambiente e o estilo desejado.'],
            ['q'=>'É possível fazer marcenaria em apartamento de condomínio?',
             'a'=>'Sim. Trabalhamos respeitando os horários e regras de cada condomínio. Nossa equipe é uniformizada e documentada, e faz a proteção adequada das áreas comuns. O serviço é executado com o mínimo de transtorno para os vizinhos.'],
        ],
        'eletricista' => [
            ['q'=>'Vocês atendem emergências elétricas no Rio de Janeiro?',
             'a'=>'Sim. Damos prioridade a situações de risco como curto-circuito, cheiro de queimado, queda total de energia e disjuntores que não rearmam. Entre em contato pelo WhatsApp ou telefone para que nossa equipe avalie a situação.'],
            ['q'=>'Os trabalhos elétricos seguem as normas de segurança exigidas?',
             'a'=>'Sim. Todos os serviços são executados conforme as exigências da NR-10 (Segurança em Instalações e Serviços em Eletricidade) e da NBR 5410. Utilizamos EPI adequado e ferramentas isoladas em todos os trabalhos.'],
            ['q'=>'Vocês emitem laudo elétrico e ART quando necessário?',
             'a'=>'Sim. Quando o serviço exige, emitimos laudo elétrico com ART (Anotação de Responsabilidade Técnica). Os documentos são aceitos por seguradoras, condomínios e órgãos públicos. Informamos na visita técnica se o laudo é necessário para o seu caso.'],
            ['q'=>'Como funciona o credenciamento da equipe para trabalhar em condomínios?',
             'a'=>'Nossa equipe possui documentação em dia para atender às exigências da administração condominial. Enviamos a documentação necessária antes do início dos serviços — sem que o cliente precise intermediar nada.'],
            ['q'=>'Atendem tanto residências quanto empresas e condomínios?',
             'a'=>'Sim. Realizamos serviços elétricos em apartamentos, casas, escritórios, comércios, condomínios residenciais e prédios corporativos. Para cada ambiente aplicamos o dimensionamento correto de circuito, proteção e documentação técnica adequada.'],
        ],
        'bombeiro-hidraulico' => [
            ['q'=>'Vocês atendem emergências hidráulicas no Rio de Janeiro?',
             'a'=>'Sim. Vazamentos ativos, rompimento de tubulação e falta d\'água são atendidos com prioridade. Entre em contato pelo WhatsApp ou telefone para que nossa equipe avalie e encaminhe a solução o mais rápido possível.'],
            ['q'=>'Como funciona a vistoria hidráulica antes do orçamento?',
             'a'=>'Realizamos visita técnica no imóvel para avaliar o estado da instalação, identificar o problema e apresentar a solução mais adequada. O orçamento só é apresentado após a vistoria — sem valores genéricos ou surpresas durante a execução.'],
            ['q'=>'A equipe é credenciada para trabalhar em condomínios?',
             'a'=>'Sim. Nossa equipe possui a documentação necessária para atender às exigências da administração condominial. Enviamos os documentos com antecedência para agilizar a liberação de acesso.'],
            ['q'=>'Atendem tanto apartamentos quanto casas e prédios comerciais?',
             'a'=>'Sim. Atendemos residências, apartamentos, sobrados, condomínios e espaços comerciais na Barra da Tijuca, Recreio e região. Para cada tipo de imóvel aplicamos o diagnóstico e a solução técnica adequada.'],
            ['q'=>'Vocês emitem laudo técnico hidráulico após o serviço?',
             'a'=>'Sim. Para serviços de maior porte — como instalação de rede hidráulica, substituição de prumadas ou reparos em tubulações embutidas — emitimos laudo técnico com descrição detalhada do serviço executado. O documento é útil para seguros, condomínios e histórico do imóvel.'],
        ],
        'pedreiro' => [
            ['q'=>'Vocês atendem reformas de banheiro e cozinha em apartamentos na Barra e Recreio?',
             'a'=>'Sim. Realizamos reformas de banheiro, cozinha, sala e demais ambientes em apartamentos na Barra da Tijuca, Recreio e região. Nossa equipe atua tanto em serviços pontuais quanto em reformas completas com múltiplos profissionais integrados.'],
            ['q'=>'Posso demolir uma parede no meu apartamento?',
             'a'=>'Depende do tipo de parede. Paredes estruturais não podem ser removidas sem projeto de engenharia. Paredes de vedação (drywall ou tijolos não estruturais) podem ser demolidas com autorização do condomínio. Fazemos vistoria técnica prévia para identificar o tipo antes de qualquer intervenção.'],
            ['q'=>'Vocês trabalham em condomínios com horário restrito de obra?',
             'a'=>'Sim. Respeitamos integralmente os horários e as normas de obra de cada condomínio. Nossa equipe chega uniformizada, credenciada e com proteção das áreas comuns. Realizamos o descarte correto de entulho conforme exigência da administração.'],
            ['q'=>'A equipe tem experiência com porcelanatos grandes e revestimentos especiais?',
             'a'=>'Sim. Trabalhamos com peças de todos os tamanhos — de cerâmica simples a porcelanatos de grande formato. O assentamento é feito com argamassa e espaçadores adequados para cada tipo de peça, garantindo juntas perfeitas e nivelamento impecável.'],
            ['q'=>'Vocês fazem contrapiso nivelado para piso flutuante ou vinílico?',
             'a'=>'Sim. Executamos contrapiso autonivelante e sarrafeado com espessura e caimento corretos para cada tipo de piso. O nivelamento é fundamental para garantir a qualidade do acabamento final e a durabilidade do revestimento escolhido.'],
        ],
        'pintor' => [
            ['q'=>'Vocês atendem pintura de apartamentos em condomínio respeitando os horários?',
             'a'=>'Sim. Trabalhamos dentro das normas e horários de obra de cada condomínio. Nossa equipe faz a proteção de pisos e móveis, realiza o serviço com ventilação adequada e mantém o ambiente limpo durante todo o processo.'],
            ['q'=>'O que é feito antes de começar a pintura?',
             'a'=>'Antes de qualquer pintura avaliamos a superfície: verificamos umidade, fissuras, bolhas, eflorescências e a aderência da tinta anterior. Só após o preparo correto — que inclui raspagem, massa corrida e lixamento — a tinta é aplicada. Esse cuidado é o que garante um resultado duradouro e uniforme.'],
            ['q'=>'A equipe é habilitada para pintura em altura e fachadas?',
             'a'=>'Sim. Para serviços em altura e pintura de fachadas, os trabalhos são executados conforme as exigências da NR-35 (Trabalho em Altura), com uso de andaimes, balancim ou cadeirinha conforme a estrutura do edifício, e EPI obrigatório para toda a equipe.'],
            ['q'=>'Vocês indicam o tipo de tinta mais adequado para cada ambiente?',
             'a'=>'Sim. Indicamos o tipo de tinta (PVA, acrílica, esmalte, elastomérica, impermeabilizante) e o acabamento (fosco, semibrilho, brilho) mais adequado para cada superfície. A escolha correta define tanto a durabilidade quanto o resultado visual — orientamos antes de qualquer compra.'],
            ['q'=>'Atendem pintura comercial e fachadas de prédios no Rio?',
             'a'=>'Sim. Realizamos pintura de escritórios, lojas, galpões, fachadas e muros. Para fachadas de edifícios, elaboramos proposta técnica com especificação de tinta e método de aplicação, garantindo resultado uniforme e durável mesmo em obras de maior porte.'],
        ],
        'deteccao-de-vazamentos' => [
            ['q'=>'Como funciona a detecção de vazamento com geofone?',
             'a'=>'O geofone é um equipamento de escuta acústica que amplifica o som produzido pelo fluxo de água em tubulação pressurizada. Ao percorrer a área suspeita, o técnico identifica o ponto de maior intensidade — que é exatamente onde está o vazamento. O processo é não invasivo e não exige quebra prévia de nenhuma superfície.'],
            ['q'=>'Vocês emitem laudo de detecção aceito pela CEDAE?',
             'a'=>'Sim. Nosso laudo técnico contém localização precisa do vazamento, fotografias, croqui de posição na planta e assinatura do responsável técnico. O documento é aceito pela CEDAE para fins de renegociação de conta e também por seguradoras.'],
            ['q'=>'É possível detectar o vazamento sem quebrar paredes ou piso?',
             'a'=>'Sim. O objetivo da detecção com geofone e câmera térmica é evitar quebra indiscriminada. Após a localização precisa, a intervenção é cirúrgica — abrimos apenas onde é necessário. Isso reduz o dano ao revestimento e o custo total do reparo.'],
            ['q'=>'Vocês atendem condomínios e apartamentos na Barra da Tijuca, Recreio e região?',
             'a'=>'Sim. Atendemos condomínios residenciais, apartamentos, casas e espaços comerciais na Barra da Tijuca, Recreio dos Bandeirantes, Vargem Grande, Vargem Pequena, Jardim Oceânico e Itanhangá. A detecção pode ser solicitada pelo próprio morador, pelo síndico ou pela administradora do condomínio.'],
            ['q'=>'Após a detecção, vocês também executam o reparo?',
             'a'=>'Sim. Após localizar o ponto exato do vazamento, nossa própria equipe executa o reparo hidráulico de forma cirúrgica — abrimos apenas o trecho necessário, corrigimos o problema e recompomos o revestimento. O orçamento do reparo é apresentado separadamente após a detecção.'],
        ],
        'gesseiro' => [
            ['q'=>'Vocês atendem instalação de gesso e drywall em apartamentos na Barra e Recreio?',
             'a'=>'Sim. Realizamos rebaixamento de teto, instalação de sancas, divisórias em drywall e nichos decorativos em apartamentos, casas e espaços comerciais na Barra da Tijuca, Recreio e região.'],
            ['q'=>'Como funciona o processo de instalação de forro em drywall?',
             'a'=>'Após a visita técnica e medição, elaboramos o layout com o posicionamento das sancas, pontos de luz e rebaixos. Com o projeto aprovado, instalamos a estrutura metálica, fixamos as placas de gesso e fazemos o acabamento com massa e lixa. O processo é limpo e gera muito pouco entulho.'],
            ['q'=>'Qual a diferença entre sanca aberta e sanca fechada?',
             'a'=>'A sanca fechada é um rebaixo corrido junto à parede, ideal para esconder cortineiros e fios. A sanca aberta tem uma abertura voltada para o ambiente, criando iluminação indireta com efeito sofisticado. Ambas podem ser combinadas no mesmo projeto conforme o estilo desejado.'],
            ['q'=>'Drywall pode ser instalado em banheiro ou área úmida?',
             'a'=>'Sim. Para ambientes úmidos utilizamos a placa RU (Resistente à Umidade), identificada pela cor verde, que suporta vapor e pode receber revestimento cerâmico. Indicamos o tipo correto conforme o ambiente — nunca usamos placa comum em áreas molhadas.'],
            ['q'=>'Vocês fazem projeto antes de instalar sancas e rebaixos?',
             'a'=>'Sim. Apresentamos o projeto com posicionamento das sancas, pontos de luz embutida e rebaixos antes de qualquer execução. Só iniciamos após aprovação do cliente — isso evita retrabalho e garante que o resultado final seja exatamente o esperado.'],
        ],
        'telhadista' => [
            ['q'=>'Vocês atendem emergências de telhado após chuva forte no Rio?',
             'a'=>'Sim. Goteiras e danos causados por chuva são atendidos com prioridade. Nossa equipe faz a contenção emergencial para evitar dano ao interior do imóvel e, em seguida, avalia o estado geral do telhado para apresentar a solução definitiva.'],
            ['q'=>'Como funciona a vistoria de telhado antes do orçamento?',
             'a'=>'Nosso técnico sobe ao telhado e avalia o estado das telhas, cumeeiras, calhas, rufos e estrutura de madeira. Identifica os pontos de infiltração, verifica a vedação geral e apresenta um diagnóstico completo. A vistoria é realizada antes de qualquer orçamento, sem compromisso.'],
            ['q'=>'Como saber se o telhado precisa de reforma ou troca total?',
             'a'=>'Sinais de reforma urgente: telhas quebradas ou deslocadas, cumeeiras deterioradas, calhas entupidas ou enferrujadas e goteiras recorrentes. A troca completa é indicada quando o madeiramento está podre, quando há infiltração generalizada ou quando a estrutura comprometida representa risco. A vistoria define o diagnóstico correto.'],
            ['q'=>'Vocês fazem manutenção preventiva de telhado e calhas?',
             'a'=>'Sim. Realizamos limpeza e desobstrução de calhas, fixação de telhas soltas, vedação de cumeeiras e rufos e verificação geral do madeiramento. A manutenção preventiva — especialmente antes do período de chuvas do Rio — é a melhor forma de evitar infiltrações e danos maiores.'],
            ['q'=>'Os trabalhos em telhado seguem as normas de segurança em altura?',
             'a'=>'Sim. Os serviços em telhados são executados conforme as exigências da NR-35 (Trabalho em Altura), com uso de EPI completo: capacete, cinto de segurança, trava-quedas e calçado antiderrapante. A segurança da equipe e do entorno é prioridade em qualquer obra.'],
        ],
        'gasista-aquecedores-boiler' => [
            ['q'=>'Os gasistas são credenciados para instalação de gás natural e GLP?',
             'a'=>'Sim. Nossa equipe é credenciada para instalação e manutenção de redes de gás natural (GN) e GLP. Emitimos laudo de estanqueidade após o serviço — documento exigido pela concessionária (CEG) e pelos condomínios. Toda a documentação técnica é entregue ao cliente.'],
            ['q'=>'Como funciona a instalação de um aquecedor a gás?',
             'a'=>'O processo inclui avaliação do local, dimensionamento correto da tubulação e da saída de exaustão, instalação do equipamento e realização do teste de estanqueidade. Ao final, o cliente recebe orientação completa sobre o uso seguro e a manutenção periódica do aparelho.'],
            ['q'=>'Meu aquecedor a gás está apagando sozinho — o que pode ser?',
             'a'=>'As causas mais comuns são baixa pressão do gás, ventilação inadequada no ambiente, sensor de ionização sujo ou obstrução no duto de exaustão. Nunca tente reparar sozinho um equipamento a gás. Nossa equipe faz o diagnóstico com segurança e orienta a solução correta.'],
            ['q'=>'Vocês atendem condomínios para manutenção e inspeção da rede de gás?',
             'a'=>'Sim. Realizamos inspeção e manutenção de redes de gás em condomínios residenciais e comerciais. O serviço inclui verificação de todos os ramais, teste de estanqueidade geral e emissão de laudo técnico — cada vez mais exigido pelas seguradoras.'],
            ['q'=>'Vocês atendem emergências de suspeita de vazamento de gás?',
             'a'=>'Sim. Suspeita de vazamento de gás é emergência — entre em contato imediatamente pelo WhatsApp ou telefone. Enquanto aguarda o atendimento: não acione interruptores elétricos, abra portas e janelas para ventilar e feche o registro geral de gás se souber onde ele está.'],
        ],
        'reformas-em-geral' => [
            ['q'=>'Vocês fazem gerenciamento completo de obras residenciais?',
             'a'=>'Sim. Coordenamos todas as etapas e disciplinas da reforma: demolição, alvenaria, hidráulica, elétrica, gesso, marcenaria e pintura. Com gerenciamento profissional, o cliente tem um único ponto de contato e a garantia de que todas as equipes trabalham de forma integrada e ordenada.'],
            ['q'=>'Como funciona o processo de uma reforma do início ao fim?',
             'a'=>'Começamos com visita técnica e levantamento detalhado do que precisa ser feito. Apresentamos orçamento por etapas, formalizamos o contrato com escopo definido e iniciamos com cronograma claro. Durante a execução, o cliente recebe atualizações regulares. A entrega é acompanhada de vistoria final conjunta.'],
            ['q'=>'Vocês atendem reformas em condomínios respeitando as normas?',
             'a'=>'Sim. Toda a nossa equipe é uniformizada e documentada. Seguimos os horários de obra definidos pelo condomínio, fazemos a proteção adequada das áreas comuns e realizamos o descarte correto de entulho. A administração recebe toda a documentação antes do início dos serviços.'],
            ['q'=>'Posso morar no imóvel durante a reforma?',
             'a'=>'Depende do escopo. Reformas parciais — como banheiro ou cozinha separadamente — permitem continuar morando com algum desconforto. Reformas completas, especialmente nas fases de demolição e obra bruta, são incompatíveis com a presença de moradores por segurança. Avaliamos a situação caso a caso.'],
            ['q'=>'Vocês também atendem reformas comerciais?',
             'a'=>'Sim. Realizamos reformas em escritórios, lojas, clínicas, consultórios e outros espaços comerciais. Para o comércio, adaptamos a execução para minimizar a interrupção das atividades — trabalhando por etapas ou em horário alternado conforme a necessidade do cliente.'],
        ],
        'desentupimento' => [
            ['q'=>'Vocês atendem desentupimento de emergência no Rio de Janeiro?',
             'a'=>'Sim. Desentupimentos urgentes — como vaso sanitário entupido, ralo bloqueado ou pia transbordando — têm atendimento prioritário. Entre em contato pelo WhatsApp ou telefone e nossa equipe é encaminhada o mais rápido possível.'],
            ['q'=>'Como funciona o desentupimento sem quebrar a louça?',
             'a'=>'Utilizamos espiral mecânica motorizada e bomba de pressão para desobstruir vasos sanitários, ralos e pias sem necessidade de quebrar a louça ou o revestimento. O equipamento adequado é escolhido conforme o tipo e a extensão do entupimento.'],
            ['q'=>'Meu ralo entope com frequência — o que pode ser?',
             'a'=>'Entupimentos frequentes no mesmo ponto indicam um problema estrutural na tubulação: declividade incorreta, acúmulo de gordura nas paredes do cano ou raízes de árvore invadindo a rede. A solução definitiva pode exigir inspeção com câmera e correção da tubulação.'],
            ['q'=>'Vocês atendem condomínios para desentupimento de colunas prediais?',
             'a'=>'Sim. Realizamos desentupimento de colunas de esgoto e prumadas prediais com espiral elétrica de alta rotação. O serviço é coordenado com a administração do condomínio e executado por andares conforme a extensão do problema.'],
            ['q'=>'É possível contratar manutenção preventiva de desentupimento?',
             'a'=>'Sim. Oferecemos contratos de manutenção preventiva para residências, restaurantes e condomínios. As visitas periódicas incluem limpeza de caixas de gordura, verificação dos ralos e vistoria das colunas — evitando entupimentos inesperados e garantindo o bom funcionamento da rede de esgoto.'],
        ],
        'bomba' => [
            ['q'=>'Vocês atendem emergências de bomba d\'água no Rio de Janeiro?',
             'a'=>'Sim. Falta d\'água por bomba parada é emergência — especialmente em condomínios. Entre em contato pelo WhatsApp ou telefone para que nossa equipe avalie e encaminhe o atendimento o mais rápido possível.'],
            ['q'=>'A equipe é especializada em casa de máquinas de condomínio?',
             'a'=>'Sim. Temos experiência em sistemas de recalque, pressurizadores, automação de bombas e painéis de controle em condomínios de todos os portes. Realizamos vistorias técnicas com relatório de condição e plano de manutenção para o síndico e a administradora.'],
            ['q'=>'Como funciona a manutenção preventiva de bomba d\'água?',
             'a'=>'A manutenção inclui: verificação do alinhamento e da vibração do motor, lubrificação dos rolamentos, limpeza dos impulsores, teste das proteções elétricas e inspeção do painel de controle. Ao final emitimos relatório técnico com o estado de cada componente verificado.'],
            ['q'=>'Vocês instalam e configuram pressurizadores para apartamentos?',
             'a'=>'Sim. O pressurizador é a solução ideal para apartamentos com baixa pressão de água, especialmente nos andares intermediários e superiores. Fazemos a seleção do modelo correto conforme o consumo do imóvel, a instalação elétrica e hidráulica e a configuração da pressão de trabalho.'],
            ['q'=>'Atendem condomínios de todos os portes?',
             'a'=>'Sim. Atendemos desde condomínios pequenos com uma única bomba até empreendimentos de grande porte com sistemas de recalque múltiplos e automação. Para cada perfil existe um plano de manutenção com frequência e escopo definidos conforme as necessidades do sistema.'],
        ],
        'inspecoes-prediais-fachadas' => [
            ['q'=>'A inspeção predial é obrigatória para todos os condomínios no Rio?',
             'a'=>'Sim. A Lei Municipal nº 6.400/2018 exige inspeção técnica obrigatória para edifícios com mais de 5 anos. A periodicidade varia de 1 a 5 anos conforme a idade e o grau de risco do edifício. O descumprimento sujeita o condomínio a multas e responsabilidade legal em caso de acidente.'],
            ['q'=>'Vocês emitem laudo de inspeção predial com ART?',
             'a'=>'Sim. Nosso laudo é elaborado por profissional habilitado e contém fotografias, classificação das anomalias por grau de risco (crítico, regular, mínimo) e plano de manutenção recomendado. O documento é entregue com ART e atende todos os requisitos da legislação municipal do Rio de Janeiro.'],
            ['q'=>'Pastilhas soltas na fachada oferecem risco? O que o condomínio deve fazer?',
             'a'=>'Sim. Pastilhas soltas ou com som cavo ao bater oferecem risco real de queda, especialmente após chuvas e variações de temperatura. A responsabilidade legal é do condomínio. Ao identificar o problema, o ideal é contratar imediatamente a inspeção técnica e providenciar a recuperação antes de qualquer acidente.'],
            ['q'=>'Como funciona o processo de vistoria e recuperação de fachada?',
             'a'=>'Iniciamos com inspeção visual completa por andaime, balancim ou drone conforme o acesso disponível. Identificamos pastilhas soltas, fissuras, eflorescências e pontos de infiltração. O resultado é um relatório técnico com foto de cada anomalia e classificação de prioridade. Em seguida apresentamos a proposta de recuperação.'],
            ['q'=>'Após a inspeção, vocês também executam os reparos indicados?',
             'a'=>'Sim. Além do laudo técnico, executamos todos os serviços de recuperação indicados: fixação de pastilhas, tratamento de fissuras, rejunte, pintura de fachada e impermeabilização de laje. O cliente tem um único interlocutor — do diagnóstico à entrega da solução.'],
        ],
        'contrato-manutencao-predial' => [
            ['q'=>'O que está incluído em um contrato de manutenção predial?',
             'a'=>'O contrato cobre vistorias técnicas periódicas (mensais, bimestrais ou trimestrais conforme o plano), relatórios com fotos de cada visita, manutenção preventiva dos sistemas elétrico, hidráulico e estrutural, atendimento prioritário em emergências e gestão dos fornecedores necessários. Cada plano é personalizado conforme o porte e as necessidades do condomínio.'],
            ['q'=>'A manutenção predial preventiva é obrigatória por lei?',
             'a'=>'Sim. A ABNT NBR 5674 (Manutenção de Edificações) e a Lei de Inspeção Predial do Rio de Janeiro estabelecem obrigações de manutenção para edifícios. Condomínios sem programa formal de manutenção podem ter dificuldade em acionar seguros e responsabilidade legal em caso de acidentes por falta de conservação.'],
            ['q'=>'Vocês atendem condomínios residenciais e comerciais?',
             'a'=>'Sim. Atendemos condomínios residenciais, prédios comerciais, edifícios corporativos e empreendimentos mistos. Para cada perfil elaboramos um plano com escopo, frequência e relatórios personalizados às necessidades do síndico ou do gestor predial.'],
            ['q'=>'Como funciona o relatório técnico de cada visita?',
             'a'=>'Após cada visita emitimos um relatório com: registro fotográfico dos pontos vistoriados, descrição dos serviços executados, anomalias identificadas, recomendações para a próxima visita e pendências em aberto. O relatório é entregue ao síndico em formato digital, com histórico acumulado de todas as visitas.'],
            ['q'=>'Como funciona o atendimento em caso de emergência para clientes com contrato?',
             'a'=>'Clientes com contrato ativo têm prioridade no atendimento. Em situações urgentes — falta d\'água, problema elétrico, vazamento ativo — entre em contato pelo WhatsApp ou telefone informando que possui contrato e nossa equipe dará prioridade ao chamado.'],
        ],
        'portao-eletronico' => [
            ['q'=>'Vocês atendem emergências de portão no Rio de Janeiro?',
             'a'=>'Sim. Portão travado em garagem de condomínio é uma situação urgente. Nossa equipe faz o atendimento emergencial para liberar o acesso e, em seguida, realiza o diagnóstico completo do problema para apresentar a solução definitiva.'],
            ['q'=>'Motor de portão deslizante ou de giro: como escolher o certo?',
             'a'=>'A escolha depende do tipo de portão (deslizante, basculante ou de batente), do peso, do tamanho e da frequência de uso. Realizamos visita técnica para avaliar o portão existente e indicar o modelo mais adequado — sem vender equipamento desnecessário.'],
            ['q'=>'É possível instalar fechadura digital sem fazer obras na porta?',
             'a'=>'Sim. A maioria das fechaduras digitais modernas é instalada no lugar da maçaneta existente sem necessidade de furos adicionais ou obras de alvenaria. O processo é rápido e limpo. Indicamos o modelo correto conforme o tipo de porta (madeira, alumínio, vidro, blindada).'],
            ['q'=>'Vocês atendem condomínios para instalação de controle de acesso?',
             'a'=>'Sim. Realizamos projetos completos de controle de acesso para condomínios: cancelas, fechaduras de portaria, videoporteiro, sistema de TAGs e interfones. Trabalhamos com a administração para garantir que o sistema atenda às necessidades de segurança e ao perfil dos moradores.'],
            ['q'=>'Vocês fazem manutenção preventiva de portões automáticos?',
             'a'=>'Sim. A manutenção preventiva inclui lubrificação da corrente e cremalheira, limpeza dos sensores de segurança, ajuste do torque do motor e teste de todos os modos de operação. A manutenção periódica evita travamentos e prolonga muito a vida útil do equipamento.'],
        ],
        'cftv' => [
            ['q'=>'Vocês instalam sistemas de CFTV na Barra da Tijuca, Recreio e região?',
             'a'=>'Sim. Atendemos a Barra da Tijuca, Recreio e região para instalação de câmeras de segurança, DVR/NVR e sistemas de alarme. Realizamos visita técnica para elaborar o projeto conforme as características do imóvel e as necessidades do cliente.'],
            ['q'=>'Como funciona o projeto de CFTV para minha residência?',
             'a'=>'Começamos com visita técnica para mapear os pontos cegos, identificar os acessos críticos e entender a rotina do imóvel. Com base nisso, elaboramos um projeto com posicionamento das câmeras e especificação de equipamento. O orçamento só é apresentado após a visita técnica.'],
            ['q'=>'É possível visualizar as câmeras pelo celular em tempo real?',
             'a'=>'Sim. Todos os nossos sistemas incluem configuração de acesso remoto pelo celular (Android e iOS). Você acompanha as câmeras ao vivo e acessa as gravações de qualquer lugar com internet. Também configuramos alertas por detecção de movimento diretamente no seu smartphone.'],
            ['q'=>'Vocês atendem condomínios para instalação de câmeras e alarme?',
             'a'=>'Sim. Realizamos projetos de segurança eletrônica para condomínios: câmeras nas áreas comuns, guarita, garagem e perímetro externo. Trabalhamos com a administração para garantir que o sistema atenda às exigências do condomínio e das seguradoras.'],
            ['q'=>'As câmeras externas aguentam as chuvas do Rio de Janeiro?',
             'a'=>'Sim, desde que sejam do tipo correto. Para uso externo no Rio indicamos câmeras com classificação IP66 ou IP67, que garantem proteção total contra jatos d\'água e poeira. Além do equipamento adequado, o posicionamento e a proteção dos cabos são fundamentais para a durabilidade em clima tropical.'],
        ],
        'piscinas' => [
            ['q'=>'Vocês atendem manutenção de piscina na Barra da Tijuca, Recreio e região?',
             'a'=>'Sim. Atendemos residências e condomínios na Barra da Tijuca, Recreio e região para manutenção, limpeza e tratamento químico de piscinas. Nossa equipe possui agenda fixa para visitas semanais ou quinzenais conforme o plano contratado.'],
            ['q'=>'Como funciona o contrato de manutenção de piscina?',
             'a'=>'O contrato inclui visitas regulares com tratamento químico completo (pH, cloro, alcalinidade, algicida), aspiração do fundo, escovação das paredes, limpeza da linha d\'água e verificação do filtro e da bomba. Após cada visita, o cliente recebe um relatório dos parâmetros analisados.'],
            ['q'=>'Minha piscina está verde — o que fazer?',
             'a'=>'Água verde indica proliferação de algas, geralmente causada por pH desequilibrado, cloro insuficiente ou filtração inadequada. O tratamento inclui choque de cloro, algicida, ajuste de pH e alcalinidade e filtração contínua. Em casos mais graves pode ser necessário esvaziar e limpar as paredes. Entre em contato para avaliarmos o caso.'],
            ['q'=>'Além da manutenção, vocês fazem reforma completa de piscina?',
             'a'=>'Sim. Realizamos revitalização completa: troca de vinil, aplicação de pastilhas ou azulejos, reparo de vazamentos estruturais, troca de bomba e filtro e renovação do sistema de iluminação subaquática. Entre em contato para agendar uma vistoria técnica e receber o orçamento.'],
            ['q'=>'Com que frequência é ideal a manutenção de piscina no Rio?',
             'a'=>'No Rio de Janeiro, pelo calor e alta exposição solar, recomendamos visitas semanais no verão e quinzenais no inverno. Piscinas de condomínio com maior uso podem exigir visitas ainda mais frequentes. A regularidade da manutenção é o que garante água limpa, segura e equilibrada o ano todo.'],
        ],
    ];
}

// ─── Bairros atendidos ────────────────────────────────────────────────────────
function sr_neighborhoods_data() {
    return [
        'barra-da-tijuca'          => ['nome'=>'Barra da Tijuca',          'em'=>'na Barra da Tijuca',          'regiao'=>'Barra e Recreio','regiao_url'=>'/barra-recreio/'],
        'recreio-dos-bandeirantes' => ['nome'=>'Recreio dos Bandeirantes', 'em'=>'no Recreio dos Bandeirantes', 'regiao'=>'Barra e Recreio','regiao_url'=>'/barra-recreio/'],
        'vargem-grande'            => ['nome'=>'Vargem Grande',            'em'=>'em Vargem Grande',            'regiao'=>'Barra e Recreio','regiao_url'=>'/barra-recreio/'],
        'vargem-pequena'           => ['nome'=>'Vargem Pequena',           'em'=>'em Vargem Pequena',           'regiao'=>'Barra e Recreio','regiao_url'=>'/barra-recreio/'],
        'jardim-oceanico'          => ['nome'=>'Jardim Oceânico',          'em'=>'no Jardim Oceânico',          'regiao'=>'Barra e Recreio','regiao_url'=>'/barra-recreio/'],
        'itanhanga'                => ['nome'=>'Itanhangá',                'em'=>'no Itanhangá',                'regiao'=>'Barra e Recreio','regiao_url'=>'/barra-recreio/'],
    ];
}



// ─── Google Reviews — integração com Places API ───────────────────────────────
//
// COMO CONFIGURAR:
//
// 1. Acesse https://console.cloud.google.com e crie (ou selecione) um projeto.
// 2. Ative a API "Places API" no projeto.
// 3. Crie uma chave de API em "Credenciais" e cole em SR_GOOGLE_API_KEY abaixo.
//    Restrinja a chave a "Endereços IP de servidores" para segurança.
// 4. Encontre o Place ID do seu negócio:
//    → Acesse https://developers.google.com/maps/documentation/places/web-service/place-id
//    → Ou pesquise o nome no mapa e use o buscador de Place ID
//    → Cole o valor (ex: ChIJN1t_tDeuEmsRUsoyG83frY4) em SR_GOOGLE_PLACE_ID.
// 5. O site atualiza as avaliações automaticamente a cada 12 horas.
//    Para forçar atualização: acesse o painel WP e adicione ?refresh_reviews=1 na URL.
//
// ─────────────────────────────────────────────────────────────────────────────
define( 'SR_GOOGLE_API_KEY',  '' ); // ← cole sua API Key aqui
define( 'SR_GOOGLE_PLACE_ID', 'ChIJIxBnFabbmwARW97yhKDcDmg' );
define( 'SR_GOOGLE_REVIEW_URL', SR_GOOGLE_PLACE_ID
    ? 'https://search.google.com/local/writereview?placeid=' . SR_GOOGLE_PLACE_ID
    : '#' );

function sr_get_google_reviews() {
    if ( ! SR_GOOGLE_API_KEY || ! SR_GOOGLE_PLACE_ID ) {
        return [ 'reviews' => [], 'rating' => 0, 'total' => 0 ];
    }

    // Força atualização do cache quando admin usa ?refresh_reviews=1
    if ( current_user_can('manage_options') && isset( $_GET['refresh_reviews'] ) ) {
        delete_transient( 'sr_google_reviews' );
    }

    $cached = get_transient( 'sr_google_reviews' );
    if ( false !== $cached ) return $cached;

    $url = add_query_arg( [
        'place_id' => SR_GOOGLE_PLACE_ID,
        'fields'   => 'name,rating,reviews,user_ratings_total',
        'language' => 'pt-BR',
        'key'      => SR_GOOGLE_API_KEY,
    ], 'https://maps.googleapis.com/maps/api/place/details/json' );

    $response = wp_remote_get( $url, [ 'timeout' => 10 ] );

    if ( is_wp_error( $response ) ) {
        // Em caso de erro, tenta de novo em 1h
        set_transient( 'sr_google_reviews', [ 'reviews' => [], 'rating' => 0, 'total' => 0 ], HOUR_IN_SECONDS );
        return [ 'reviews' => [], 'rating' => 0, 'total' => 0 ];
    }

    $data   = json_decode( wp_remote_retrieve_body( $response ), true );
    $result = $data['result'] ?? [];

    $out = [
        'reviews' => $result['reviews']            ?? [],
        'rating'  => (float)( $result['rating']             ?? 0 ),
        'total'   => (int)(   $result['user_ratings_total'] ?? 0 ),
    ];

    set_transient( 'sr_google_reviews', $out, 12 * HOUR_IN_SECONDS );
    return $out;
}


// ─── SEO: meta description, canonical, Open Graph, Schema ────────────────────
function sr_seo_head() {
    global $post;

    $home_url  = home_url('/');
    $site_name = 'Soluções & Reformas';
    $og_image  = 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80';
    $phone     = '+552123917661';
    $whatsapp  = '+5521999989553'; // ← confirmar número

    $title       = '';
    $description = '';
    $canonical   = $home_url;

    if ( is_front_page() ) {
        $title       = 'Soluções & Reformas | Especialistas em Reformas no Rio de Janeiro';
        $description = 'Eletricista, pedreiro, pintor, marceneiro, bombeiro hidráulico e mais de 15 serviços na Barra da Tijuca, Recreio e Rio de Janeiro. Orçamento grátis pelo WhatsApp.';
        $canonical   = $home_url;

    } elseif ( is_page() && $post ) {
        $template = get_page_template_slug( $post->ID );
        $slug     = $post->post_name;

        if ( $template === 'template-servico.php' ) {
            $all = sr_services_data();
            $s   = $all[ $slug ] ?? null;
            if ( $s ) {
                $title       = $s['title'] . ' no Rio de Janeiro | Soluções & Reformas';
                $description = strip_tags( $s['hero_desc'] ) . ' Orçamento grátis.';
                $canonical   = home_url( '/' . $slug . '/' );
                $og_image    = 'https://images.unsplash.com/' . $s['hero_image'] . '?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80';
            }

        } elseif ( $template === 'template-servico-bairro.php' ) {
            $svc_slug    = get_post_meta( $post->ID, 'servico_slug', true );
            $bairro_slug = get_post_meta( $post->ID, 'bairro_slug', true );
            $all_svcs    = sr_services_data();
            $all_bairros = sr_neighborhoods_data();
            $svc         = $all_svcs[ $svc_slug ]    ?? null;
            $bairro      = $all_bairros[ $bairro_slug ] ?? null;
            if ( $svc && $bairro ) {
                $title       = $svc['title'] . ' ' . $bairro['em'] . ' | Soluções & Reformas';
                $description = $svc['title'] . ' ' . $bairro['em'] . '. ' . strip_tags( $svc['hero_desc'] ) . ' Orçamento grátis.';
                $canonical   = home_url( '/' . $svc_slug . '/' . $bairro_slug . '/' );
                $og_image    = 'https://images.unsplash.com/' . $svc['hero_image'] . '?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80';
            }

        } elseif ( $template === 'template-barra-recreio.php' ) {
            $title       = 'Reformas e Manutenções na Barra da Tijuca e Recreio | Soluções & Reformas';
            $description = 'Todos os serviços de reforma e manutenção na Barra da Tijuca, Recreio dos Bandeirantes, Vargem Grande e região. Equipe especializada com orçamento grátis.';
            $canonical   = home_url( '/barra-recreio/' );

        } elseif ( $template === 'template-zona-sul.php' ) {
            $title       = 'Reformas e Manutenções na Zona Sul do Rio | Soluções & Reformas';
            $description = 'Serviços de reforma e manutenção em toda a Zona Sul do Rio de Janeiro. Eletricista, pedreiro, pintor, marceneiro e mais. Orçamento grátis pelo WhatsApp.';
            $canonical   = home_url( '/zona-sul/' );

        } elseif ( $template === 'template-bairro.php' ) {
            $all_bairros = sr_neighborhoods_data();
            $bairro      = $all_bairros[ $slug ] ?? null;
            if ( $bairro ) {
                $title       = 'Reformas ' . $bairro['em'] . ' | Soluções & Reformas Rio de Janeiro';
                $description = 'Reformas residenciais e comerciais ' . $bairro['em'] . '. Eletricista, pedreiro, pintor, marceneiro e mais de 15 serviços. Equipe própria, orçamento grátis.';
                $canonical   = home_url( '/' . $slug . '/' );
            }
        }
    }

    if ( ! $title )       $title       = get_bloginfo('name') . ' | ' . get_bloginfo('description');
    if ( ! $description ) $description = 'Soluções & Reformas: especialistas em reformas e manutenções residenciais e prediais no Rio de Janeiro. Orçamento grátis pelo WhatsApp.';

    // Meta description
    echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";

    // Canonical
    echo '<link rel="canonical" href="' . esc_url( $canonical ) . '">' . "\n";

    // Open Graph
    echo '<meta property="og:type"        content="website">' . "\n";
    echo '<meta property="og:url"         content="' . esc_url( $canonical ) . '">' . "\n";
    echo '<meta property="og:title"       content="' . esc_attr( $title ) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
    echo '<meta property="og:image"       content="' . esc_url( $og_image ) . '">' . "\n";
    echo '<meta property="og:site_name"   content="' . esc_attr( $site_name ) . '">' . "\n";
    echo '<meta property="og:locale"      content="pt_BR">' . "\n";

    // Twitter Card
    echo '<meta name="twitter:card"        content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title"       content="' . esc_attr( $title ) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '">' . "\n";
    echo '<meta name="twitter:image"       content="' . esc_url( $og_image ) . '">' . "\n";

    // ── Schema: LocalBusiness ─────────────────────────────────────────────────
    $schema_local = [
        '@context' => 'https://schema.org',
        '@type'    => 'HomeAndConstructionBusiness',
        'name'     => 'Soluções & Reformas',
        'url'      => $home_url,
        'telephone' => $phone,
        'priceRange' => '$$',
        'image'    => $og_image,
        'areaServed' => [
            [ '@type' => 'City', 'name' => 'Barra da Tijuca'          ],
            [ '@type' => 'City', 'name' => 'Recreio dos Bandeirantes' ],
            [ '@type' => 'City', 'name' => 'Vargem Grande'            ],
            [ '@type' => 'City', 'name' => 'Vargem Pequena'           ],
            [ '@type' => 'City', 'name' => 'Jardim Oceânico'          ],
            [ '@type' => 'City', 'name' => 'Itanhangá'                ],
        ],
        'sameAs' => [ 'https://www.instagram.com/solucoesreformas/' ],
    ];
    echo '<script type="application/ld+json">' . json_encode( $schema_local, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";

    // ── Schema: Service + FAQPage (páginas de serviço) ────────────────────────
    if ( is_page() && $post && get_page_template_slug( $post->ID ) === 'template-servico.php' ) {
        $slug = $post->post_name;
        $all  = sr_services_data();
        $s    = $all[ $slug ] ?? null;

        if ( $s ) {
            $schema_service = [
                '@context'    => 'https://schema.org',
                '@type'       => 'Service',
                'name'        => $s['title'],
                'description' => strip_tags( $s['hero_desc'] ),
                'provider'    => [ '@type' => 'LocalBusiness', 'name' => 'Soluções & Reformas' ],
                'areaServed'  => [ '@type' => 'City', 'name' => 'Rio de Janeiro' ],
                'url'         => home_url( '/' . $slug . '/' ),
            ];
            echo '<script type="application/ld+json">' . json_encode( $schema_service, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";

            $all_faqs = sr_faqs_data();
            if ( isset( $all_faqs[ $slug ] ) ) {
                $schema_faq = [
                    '@context'   => 'https://schema.org',
                    '@type'      => 'FAQPage',
                    'mainEntity' => array_map( function( $faq ) {
                        return [
                            '@type' => 'Question',
                            'name'  => $faq['q'],
                            'acceptedAnswer' => [ '@type' => 'Answer', 'text' => $faq['a'] ],
                        ];
                    }, $all_faqs[ $slug ] ),
                ];
                echo '<script type="application/ld+json">' . json_encode( $schema_faq, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
            }
        }
    }

    // ── Schema: BreadcrumbList ────────────────────────────────────────────────
    if ( ! is_front_page() && $post ) {
        $crumbs = [
            [ '@type' => 'ListItem', 'position' => 1, 'name' => 'Início', 'item' => $home_url ],
            [ '@type' => 'ListItem', 'position' => 2, 'name' => get_the_title( $post->ID ), 'item' => get_permalink( $post->ID ) ],
        ];
        $schema_bread = [
            '@context'        => 'https://schema.org',
            '@type'           => 'BreadcrumbList',
            'itemListElement' => $crumbs,
        ];
        echo '<script type="application/ld+json">' . json_encode( $schema_bread, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'sr_seo_head', 1 );

// ─── Títulos das abas/Google corretos ────────────────────────────────────────
function sr_document_title( $parts ) {
    global $post;

    $parts['site'] = 'Soluções & Reformas';
    unset( $parts['tagline'] );

    if ( is_front_page() ) {
        $parts['title'] = 'Especialistas em Reformas e Manutenções no Rio de Janeiro';
        return $parts;
    }

    if ( is_page() && $post ) {
        $template = get_page_template_slug( $post->ID );
        $slug     = $post->post_name;

        if ( $template === 'template-servico.php' ) {
            $all = sr_services_data();
            $s   = $all[ $slug ] ?? null;
            if ( $s ) $parts['title'] = $s['title'] . ' no Rio de Janeiro';

        } elseif ( $template === 'template-servico-bairro.php' ) {
            $svc_slug    = get_post_meta( $post->ID, 'servico_slug', true );
            $bairro_slug = get_post_meta( $post->ID, 'bairro_slug', true );
            $all_svcs    = sr_services_data();
            $all_bairros = sr_neighborhoods_data();
            $svc         = $all_svcs[ $svc_slug ]       ?? null;
            $bairro      = $all_bairros[ $bairro_slug ] ?? null;
            if ( $svc && $bairro )
                $parts['title'] = $svc['title'] . ' ' . $bairro['em'];

        } elseif ( $template === 'template-barra-recreio.php' ) {
            $parts['title'] = 'Reformas na Barra da Tijuca e Recreio';

        } elseif ( $template === 'template-zona-sul.php' ) {
            $parts['title'] = 'Reformas na Zona Sul do Rio de Janeiro';

        } elseif ( $template === 'template-bairro.php' ) {
            $all_bairros = sr_neighborhoods_data();
            $bairro      = $all_bairros[ $slug ] ?? null;
            if ( $bairro )
                $parts['title'] = 'Reformas ' . $bairro['em'] . ' | Rio de Janeiro';
        }
    }

    return $parts;
}
add_filter( 'document_title_parts', 'sr_document_title' );


