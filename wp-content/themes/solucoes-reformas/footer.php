<!-- FOOTER -->
<footer class="bg-slate-950 text-slate-400 py-16 border-t border-slate-900">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left border-b border-slate-800 pb-12 mb-8">

            <div>
                <h5 class="text-white font-black tracking-tight text-2xl mb-4 flex items-center justify-center md:justify-start gap-2">
                    <svg width="38" height="38" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 2L43.0526 13V35L24 46L4.94744 35V13L24 2Z" fill="#FFFBEB" fill-opacity="0.15"/>
                        <path d="M24 2L43.0526 13V35L24 46L4.94744 35V13L24 2Z" stroke="#D97706" stroke-width="2.5" stroke-linejoin="round"/>
                        <path d="M24 10L12 20V36H36V20L24 10Z" fill="#D97706"/>
                        <path d="M24 18V36" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M18 26H30" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round"/>
                        <rect x="16" y="29" width="4" height="4" fill="#FFFFFF"/>
                        <rect x="28" y="29" width="4" height="4" fill="#FFFFFF"/>
                    </svg>
                    SOLUÇÕES &amp; REFORMAS
                </h5>
                <p class="text-sm leading-relaxed mb-4">Especialistas em construção, reformas estruturais e manutenções técnicas de alto padrão no Rio de Janeiro.</p>
                <div class="flex items-center gap-4 mt-4 justify-center md:justify-start">
                    <a href="https://www.instagram.com/solucoesreformas/" target="_blank" class="text-slate-400 hover:text-amber-400 transition text-xl"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/5521999989553" target="_blank" class="text-slate-400 hover:text-emerald-400 transition text-xl"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="flex flex-col items-center md:items-start">
                <h5 class="text-white font-bold text-lg mb-6 uppercase tracking-wider">Fale Conosco</h5>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="tel:+552123917661" class="hover:text-amber-300 transition flex items-center gap-3"><i class="fas fa-phone-alt text-slate-300 text-xl w-5"></i> (21) 2391-7661</a></li>
                    <li><a href="<?php echo esc_attr( 'https://wa.me/5521999989553?text=' . rawurlencode( "Olá! Vi o site de vocês e gostaria de saber mais sobre os serviços" ) ); ?>" class="hover:text-emerald-400 transition flex items-center gap-3" target="_blank"><i class="fab fa-whatsapp text-emerald-500 text-xl w-5"></i> (21) 99998-9553</a></li>
                    <li><a href="mailto:contato@solucoesereformas.com.br" class="hover:text-amber-300 transition flex items-center gap-3"><i class="fas fa-envelope text-amber-500 text-xl w-5"></i> contato@solucoesereformas.com.br</a></li>
                </ul>
            </div>

            <div class="flex flex-col items-center md:items-start">
                <h5 class="text-white font-bold text-lg mb-6 uppercase tracking-wider">Onde Atuamos</h5>
                <ul class="space-y-2 text-sm">
                    <?php
                    foreach ( sr_neighborhoods_data() as $slug => $bairro ) :
                    ?>
                    <li class="flex items-center gap-2 justify-center md:justify-start">
                        <i class="fas fa-map-marker-alt text-amber-500 w-4 text-center"></i>
                        <a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>" class="hover:text-amber-400 transition">
                            <?php echo esc_html( $bairro['nome'] ); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
        <div class="text-center text-xs space-y-1">
            <p>&copy; <?php echo date('Y'); ?> Soluções &amp; Reformas. Todos os direitos reservados.</p>
            <!-- CNPJ: preencher quando disponível -->

        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>


