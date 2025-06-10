<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loja.css">
    <title>Sustainfy - Blog & Notícias</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilos específicos para a página do Blog */
        .blog-hero {
            background-image: url('https://images.unsplash.com/photo-1470240974861-f09c62923985?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 80px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 400px;
        }

        .blog-hero h1 {
            font-size: 3.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .blog-hero p {
            font-size: 1.3em;
            max-width: 800px;
            margin: 0 auto;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        .blog-content {
            display: grid;
            grid-template-columns: 2fr 1fr; /* Coluna principal do blog e sidebar */
            gap: 40px;
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .main-blog-posts {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .blog-post-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .blog-post-card:hover {
            transform: translateY(-5px);
        }

        .blog-post-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .blog-post-info {
            padding: 30px;
        }

        .blog-post-info .post-meta {
            font-size: 0.9em;
            color: #777;
            margin-bottom: 15px;
        }

        .blog-post-info .post-meta i {
            margin-right: 5px;
            color: #28a745;
        }

        .blog-post-info h3 {
            font-size: 2em;
            color: #333;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .blog-post-info p {
            color: #555;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .read-more {
            display: inline-block;
            color: #28a745;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .read-more:hover {
            color: #1e7e34;
        }

        .sidebar {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .sidebar h4 {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 25px;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            color: #555;
            text-decoration: none;
            transition: color 0.3s ease;
            display: block;
            padding: 5px 0;
        }

        .sidebar ul li a:hover {
            color: #28a745;
        }

        .recent-post {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .recent-post img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 15px;
        }

        .recent-post-info h5 {
            font-size: 1.1em;
            color: #333;
            margin-bottom: 5px;
        }

        .recent-post-info span {
            font-size: 0.85em;
            color: #777;
        }

        .comments-section {
            background-color: #f2fcf4;
            padding: 60px 20px;
            max-width: 1000px;
            margin: 60px auto;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        .comments-section h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #28a745;
            font-size: 2.5em;
        }

        .comment-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }

        .comment-form input[type="text"],
        .comment-form input[type="email"],
        .comment-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-family: 'Poppins', sans-serif;
            font-size: 1em;
            box-sizing: border-box; /* Garante que padding não adicione à largura total */
        }

        .comment-form textarea {
            resize: vertical;
            min-height: 120px;
        }

        .comment-form button {
            background-color: #28a745;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 6px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block; /* Ocupa a largura total */
            width: 100%;
        }

        .comment-form button:hover {
            background-color: #1e7e34;
        }

        .comment-list {
            margin-top: 50px;
        }

        .comment-item {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            margin-bottom: 25px;
            position: relative; /* Para a linha de tempo */
        }

        .comment-author-meta {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .comment-author-meta img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 2px solid #28a745;
        }

        .comment-author-meta .author-name {
            font-weight: 700;
            color: #333;
            font-size: 1.1em;
        }

        .comment-author-meta .comment-date {
            font-size: 0.85em;
            color: #777;
            margin-left: 10px;
        }

        .comment-content-text {
            color: #555;
            line-height: 1.7;
        }

        /* Responsividade */
        @media (max-width: 992px) {
            .blog-content {
                grid-template-columns: 1fr; /* Uma coluna em telas menores */
            }
            .sidebar {
                order: -1; /* Move sidebar para cima em telas menores */
            }
        }

        @media (max-width: 768px) {
            .blog-hero h1 {
                font-size: 2.5em;
            }
            .blog-hero p {
                font-size: 1em;
            }
            .blog-post-info h3 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <div class="promo-banner">
        <p>🌱 Frete grátis em compras acima de R$ 150 | Use o cupom ECO10 para 10% de desconto</p>
    </div>

    <nav class="navbar">
        <a class="logo" href="index.html">Sustainfy</a>
        <ul class="nav-links">
            <li><a href="index.html">Início</a></li>
            <li><a href="index.html#categories">Categorias</a></li>
            <li><a href="index.html#products">Produtos</a></li>
            <li><a href="saiba-mais.html">Sobre</a></li>
            <li><a href="#">Blog</a></li> </ul>
        <div class="nav-icons">
            <a href="#"><i class="fas fa-shopping-bag"></i></a>
        </div>
    </nav>

    <section class="blog-hero">
        <div class="hero-content">
            <h1>Blog Sustainfy: Notícias e Inspirações Verdes</h1>
            <p>Mantenha-se atualizado com as últimas notícias, dicas e projetos sobre sustentabilidade e áreas verdes que transformam o mundo.</p>
        </div>
    </section>

    ---

    <section class="blog-content">
        <div class="main-blog-posts">
            <div class="blog-post-card">
                <img src="https://images.unsplash.com/photo-1454165205744-bdcdfd277259?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Parque Urbano">
                <div class="blog-post-info">
                    <div class="post-meta">
                        <i class="far fa-calendar-alt"></i> 05 Junho, 2025 |
                        <i class="far fa-user"></i> Por Ana Silva |
                        <i class="far fa-comment"></i> 3 Comentários
                    </div>
                    <h3>Construindo Parques Urbanos Sustentáveis: O Futuro das Cidades Verdes</h3>
                    <p>Descubra como a Sustainfy está colaborando com projetos inovadores para transformar espaços urbanos em oásis verdes, promovendo biodiversidade e bem-estar para a comunidade.</p>
                    <a href="#" class="read-more">Leia Mais <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="blog-post-card">
                <img src="https://images.unsplash.com/photo-1510444342203-c35f793b827e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Jardim Vertical">
                <div class="blog-post-info">
                    <div class="post-meta">
                        <i class="far fa-calendar-alt"></i> 28 Maio, 2025 |
                        <i class="far fa-user"></i> Por João Pereira |
                        <i class="far fa-comment"></i> 1 Comentário
                    </div>
                    <h3>Jardins Verticais: Soluções Criativas para Espaços Pequenos</h3>
                    <p>Pequenos apartamentos e grandes ideias! Conheça o impacto dos jardins verticais na qualidade do ar e na estética urbana, e como você pode ter um em casa.</p>
                    <a href="#" class="read-more">Leia Mais <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="blog-post-card">
                <img src="https://images.unsplash.com/photo-1542601900-a5482386a347?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Comunidade Plantando">
                <div class="blog-post-info">
                    <div class="post-meta">
                        <i class="far fa-calendar-alt"></i> 15 Maio, 2025 |
                        <i class="far fa-user"></i> Por Carla Mendes |
                        <i class="far fa-comment"></i> 0 Comentários
                    </div>
                    <h3>O Poder das Hortas Comunitárias: Conectando Pessoas e Natureza</h3>
                    <p>Explore os benefícios sociais e ambientais das hortas comunitárias e como a Sustainfy apoia iniciativas locais para promover a segurança alimentar e o engajamento.</p>
                    <a href="#" class="read-more">Leia Mais <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <h4>Categorias</h4>
            <ul>
                <li><a href="#"><i class="fas fa-angle-right"></i> Áreas Verdes Urbanas</a></li>
                <li><a href="#"><i class="fas fa-angle-right"></i> Inovação Sustentável</a></li>
                <li><a href="#"><i class="fas fa-angle-right"></i> Dicas Ecológicas</a></li>
                <li><a href="#"><i class="fas fa-angle-right"></i> Notícias da Comunidade</a></li>
                <li><a href="#"><i class="fas fa-angle-right"></i> Produtos e Reviews</a></li>
            </ul>

            <h4 style="margin-top: 40px;">Posts Recentes</h4>
            <div class="recent-post">
                <img src="https://images.unsplash.com/photo-1621377514333-e1d5a7d6e5c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Post Recente 1">
                <div class="recent-post-info">
                    <h5>Reciclagem Criativa: Dê Nova Vida aos Objetos</h5>
                    <span><i class="far fa-calendar-alt"></i> 01 Junho, 2025</span>
                </div>
            </div>
            <div class="recent-post">
                <img src="https://images.unsplash.com/photo-1588661601007-ec301135c345?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Post Recente 2">
                <div class="recent-post-info">
                    <h5>Energia Solar em Casa: Um Guia Completo</h5>
                    <span><i class="far fa-calendar-alt"></i> 20 Maio, 2025</span>
                </div>
            </div>
            <div class="recent-post">
                <img src="https://images.unsplash.com/photo-1549495333-8902517d9a9f?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Post Recente 3">
                <div class="recent-post-info">
                    <h5>Desafios da Mobilidade Sustentável</h5>
                    <span><i class="far fa-calendar-alt"></i> 10 Maio, 2025</span>
                </div>
            </div>
        </div>
    </section>

    ---

    <section class="comments-section">
        <h2>Deixe seu Comentário</h2>
        <form class="comment-form">
            <label for="comment-name">Seu Nome:</label>
            <input type="text" id="comment-name" name="comment-name" required>

            <label for="comment-email">Seu Email:</label>
            <input type="email" id="comment-email" name="comment-email" required>

            <label for="comment-text">Seu Comentário:</label>
            <textarea id="comment-text" name="comment-text" required></textarea>

            <button type="submit">Enviar Comentário <i class="fas fa-paper-plane"></i></button>
        </form>

        <div class="comment-list">
            <h3>Comentários Recentes (3)</h3>
            <div class="comment-item">
                <div class="comment-author-meta">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Avatar Usuário">
                    <span class="author-name">Maria Conceição</span>
                    <span class="comment-date">06 Junho, 2025</span>
                </div>
                <p class="comment-content-text">"Excelente artigo sobre parques urbanos! É inspirador ver iniciativas como a da Sustainfy transformando nossas cidades. Adoraria ver um projeto desses na minha comunidade."</p>
            </div>

            <div class="comment-item">
                <div class="comment-author-meta">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Avatar Usuário">
                    <span class="author-name">Carlos Oliveira</span>
                    <span class="comment-date">06 Junho, 2025</span>
                </div>
                <p class="comment-content-text">"Sempre quis ter um jardim vertical, mas nunca soube por onde começar. As dicas de vocês foram muito úteis! Parabéns pelo conteúdo de qualidade."</p>
            </div>

            <div class="comment-item">
                <div class="comment-author-meta">
                    <img src="https://randomuser.me/api/portraits/women/8.jpg" alt="Avatar Usuário">
                    <span class="author-name">Fernanda Lima</span>
                    <span class="comment-date">05 Junho, 2025</span>
                </div>
                <p class="comment-content-text">"Artigo muito relevante sobre as hortas comunitárias. Participei de uma e realmente é uma experiência transformadora. Continuem com o ótimo trabalho!"</p>
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
                    <li><a href="saiba-mais.html">Nossa História</a></li>
                    <li><a href="#">Política de Sustentabilidade</a></li>
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