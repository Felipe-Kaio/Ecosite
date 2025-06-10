<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loja.css"> <title>Sustainfy - Saiba Mais</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Adicione estilos específicos para a página "Saiba Mais" aqui, se necessário */
        /* Geralmente, você pode manter muitos estilos em loja.css e adicionar exceções ou novos componentes aqui */
        .saiba-mais-hero {
            background-image: url('https://images.unsplash.com/photo-1542601900-a5482386a347?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80'); /* Imagem mais abstrata/inspiradora */
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 80px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 400px; /* Adjust height as needed */
        }

        .saiba-mais-hero h1 {
            font-size: 3.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .saiba-mais-hero p {
            font-size: 1.3em;
            max-width: 800px;
            margin: 0 auto;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        .content-section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .content-section .section-title {
            color: #28a745; /* Green color from the original design */
            margin-bottom: 15px;
        }

        .content-section .section-subtitle {
            color: #666;
            margin-bottom: 40px;
        }

        .mission-grid, .values-grid, .impact-grid, .team-grid {
            display: grid;
            gap: 30px;
            text-align: left;
        }

        .mission-grid {
            grid-template-columns: 1fr 1fr;
            align-items: center;
        }

        .mission-grid img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .mission-text {
            padding: 20px;
        }

        .mission-text h3 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 15px;
        }

        .mission-text p {
            line-height: 1.8;
            color: #555;
        }

        .values-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }

        .value-card {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-5px);
        }

        .value-card i {
            font-size: 3em;
            color: #28a745;
            margin-bottom: 20px;
        }

        .value-card h4 {
            font-size: 1.4em;
            color: #333;
            margin-bottom: 10px;
        }

        .value-card p {
            color: #666;
            line-height: 1.6;
        }

        .impact-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }

        .impact-card {
            background-color: #e6f7e9; /* Lighter green for impact */
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .impact-card .impact-number {
            font-size: 3.5em;
            font-weight: 700;
            color: #28a745;
            margin-bottom: 10px;
        }

        .impact-card .impact-text {
            font-size: 1.2em;
            color: #333;
        }

        .team-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }

        .team-member-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            text-align: center;
        }

        .team-member-card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid #28a745;
        }

        .team-member-card h4 {
            font-size: 1.3em;
            color: #333;
            margin-bottom: 5px;
        }

        .team-member-card p {
            color: #666;
            font-size: 0.95em;
        }

        /* Responsividade básica para esta página */
        @media (max-width: 768px) {
            .saiba-mais-hero h1 {
                font-size: 2.5em;
            }
            .saiba-mais-hero p {
                font-size: 1em;
            }
            .mission-grid {
                grid-template-columns: 1fr;
            }
            .mission-text {
                padding: 0;
            }
        }
    </style>
</head>
<body>
    <div class="promo-banner">
        <p>🌱 Frete grátis em compras acima de R$ 150 | Use o cupom ECO10 para 10% de desconto</p>
    </div>

    <nav class="navbar">
        <a class="logo" href="index.html">Sustainfy</a> <ul class="nav-links">
            <li><a href="index.html">Início</a></li>
            <li><a href="index.html#categories">Categorias</a></li>
            <li><a href="index.html#products">Produtos</a></li>
            <li><a href="#about">Sobre</a></li> <li><a href="#">Blog</a></li> </ul>
        <div class="nav-icons">
            <a href="#"><i class="fas fa-shopping-bag"></i></a>
        </div>
    </nav>

    <section class="saiba-mais-hero">
        <div class="hero-content">
            <h1>Saiba Mais Sobre a Sustainfy</h1>
            <p>Descubra nossa jornada, nossos valores e o compromisso inabalável com um futuro mais verde para todos.</p>
        </div>
    </section>

    ---

    <section id="about" class="content-section">
        <div class="section-header">
            <h2 class="section-title">Nossa Missão</h2>
            <p class="section-subtitle">Construindo um futuro mais verde, um produto de cada vez.</p>
        </div>
        <div class="mission-grid">
            <div class="mission-text">
                <h3>O Propósito da Sustainfy</h3>
                <p>Na Sustainfy, acreditamos que a sustentabilidade não deve ser um luxo, mas sim uma escolha acessível e inspiradora. Nossa missão é empoderar indivíduos a adotar um estilo de vida mais consciente, oferecendo uma curadoria de produtos ecológicos de alta qualidade que são bons para você e para o planeta.</p>
                <p>Comprometemo-nos a operar de forma transparente, desde a seleção de fornecedores até a entrega final, garantindo que cada item em nossa loja contribua positivamente para a redução do impacto ambiental e para a promoção de práticas de consumo responsáveis.</p>
            </div>
            <div class="mission-image">
                <img src="https://images.unsplash.com/photo-1532924108851-911853d9154a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Planta em mãos">
            </div>
        </div>
    </section>

    ---

    <section class="content-section" style="background-color: #f2fcf4;">
        <div class="section-header">
            <h2 class="section-title">Nossos Valores</h2>
            <p class="section-subtitle">Princípios que guiam cada decisão e ação da Sustainfy.</p>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <i class="fas fa-leaf"></i>
                <h4>Sustentabilidade Genuína</h4>
                <p>Priorizamos produtos que são verdadeiramente ecológicos, desde a origem de seus materiais até o descarte.</p>
            </div>
            <div class="value-card">
                <i class="fas fa-hand-holding-heart"></i>
                <h4>Transparência e Ética</h4>
                <p>Agimos com honestidade e clareza em todas as nossas operações, da cadeia de suprimentos ao atendimento ao cliente.</p>
            </div>
            <div class="value-card">
                <i class="fas fa-lightbulb"></i>
                <h4>Inovação Consciente</h4>
                <p>Buscamos constantemente novas soluções e produtos que elevem o padrão da sustentabilidade.</p>
            </div>
            <div class="value-card">
                <i class="fas fa-people-carry-box"></i>
                <h4>Comunidade e Impacto</h4>
                <p>Fomentamos uma comunidade engajada e contribuímos ativamente para causas ambientais.</p>
            </div>
        </div>
    </section>

    ---

    <section class="content-section">
        <div class="section-header">
            <h2 class="section-title">Nosso Impacto</h2>
            <p class="section-subtitle">Transformando escolhas em ações significativas para o planeta.</p>
        </div>
        <div class="impact-grid">
            <div class="impact-card">
                <div class="impact-number">1500+</div>
                <div class="impact-text">Produtos Ecológicos Vendidos</div>
            </div>
            <div class="impact-card">
                <div class="impact-number">800+</div>
                <div class="impact-text">Árvores Plantadas (parceria)</div>
            </div>
            <div class="impact-card">
                <div class="impact-number">5000kg+</div>
                <div class="impact-text">Plástico Reduzido</div>
            </div>
            <div class="impact-card">
                <div class="impact-number">95%</div>
                <div class="impact-text">Embalagens Recicláveis</div>
            </div>
        </div>
    </section>

    ---

    <section class="content-section" style="background-color: #f9f9f9;">
        <div class="section-header">
            <h2 class="section-title">Conheça Nossa Equipe</h2>
            <p class="section-subtitle">Pessoas apaixonadas por um mundo mais sustentável.</p>
        </div>
        <div class="team-grid">
            <div class="team-member-card">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734b35e?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Foto de Membro da Equipe">
                <h4>Ana Silva</h4>
                <p>Fundadora & CEO</p>
                <p>Visionária por trás da Sustainfy, apaixonada por inovação e sustentabilidade.</p>
            </div>
            <div class="team-member-card">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Foto de Membro da Equipe">
                <h4>Maria Eduarda</h4>
                <p>Diretor de Produtos</p>
                <p>Especialista em sourcing sustentável e qualidade de produtos.</p>
            </div>
            <div class="team-member-card">
                <img src="https://images.unsplash.com/photo-1544717297-fa95b453e1a8?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Foto de Membro da Equipe">
                <h4>Carla Mendes</h4>
                <p>Líder de Marketing</p>
                <p>Contadora de histórias ambientais e promotora de um estilo de vida consciente.</p>
            </div>
            <div class="team-member-card">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Foto de Membro da Equipe">
                <h4>Marcia Rodrigues</h4>
                <p>Chefe de Operações</p>
                <p>Garante que nossos processos sejam tão verdes quanto nossos produtos.</p>
            </div>
        </div>
    </section>


    <footer>
        <div class="footer-grid">
            <div class="footer-column footer-about">
                <h3>Sobre a Sustainfy</h3>
                <p>Nossa missão é oferecer produtos que unam design, qualidade e sustentabilidade, provando que é possível consumir com consciência sem abrir mão do estilo e conforto.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3>Links Úteis</h3>
                <ul class="footer-links">
                    <li><a href="#about">Nossa História</a></li> <li><a href="#">Política de Sustentabilidade</a></li>
                    <li><a href="#">Trabalhe Conosco</a></li>
                    <li><a href="#">Fornecedores</a></li>
                    <li><a href="#">Impacto Ambiental</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Ajuda</h3>
                <ul class="footer-links">
                    <li><a href="#">Central de Ajuda</a></li>
                    <li><a href="#">Política de Entrega</a></li>
                    <li><a href="#">Trocas e Devoluções</a></li>
                    <li><a href="#">Pagamentos</a></li>
                    <li><a href="#">Dúvidas Frequentes</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Contato</h3>
                <ul class="footer-links">
                    <li><a href="mailto:contato@ecoharmony.com">Ecosite@gmail.com</a></li>
                    <li><a href="tel:+5511999999999">(85) 99259-1642</a></li>
                    <li>Av. Sustentável, 123 - São Gonçalo do Amarante</li>
                    <li>Segunda a Sexta, 9h às 18h</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2025 Sustainfy. Todos os direitos reservados. </p>
        </div>
    </footer>
</body>
</html>