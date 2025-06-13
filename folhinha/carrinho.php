<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carrinho.css">
    <title>Sustainfy - Carrinho de Compras</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

<body>
    <!-- Banner Promocional -->
    <div class="promo-banner">
        <p>🌱 Frete grátis em compras acima de R$ 150 | Use o cupom ECO10 para 10% de desconto</p>
    </div>
    
    <!-- Navbar Premium -->
    <nav class="navbar">
        <a class="logo">Sustainfy</a>
        
        <ul class="nav-links">
            <li><a href="#categories">Categorias</a></li>
            <li><a href="#products">Produtos</a></li>
            <li><a href="tlsbmais.php">Sobre</a></li>
            <li><a href="tlnoticias.php">Blog</a></li>
        </ul>
        
        <div class="nav-icons">
  
        </div>
    </nav>
    
    <!-- Conteúdo do Carrinho -->
    <div class="cart-container">
        <div class="cart-header">
            <h1>Seu Carrinho</h1>
            <p>Revise seus itens antes de finalizar a compra</p>
        </div>
        
        <div class="cart-content">
            <div class="cart-items">
                <!-- Exemplo com itens no carrinho -->
                <div class="cart-item">
                    <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Conjunto Bambu" class="cart-item-img">
                    <div class="cart-item-details">
                        <h3 class="cart-item-title">Conjunto Utensílios Bambu</h3>
                        <span class="cart-item-category">Casa Sustentável</span>
                        <div class="cart-item-price">R$ 89,90</div>
                        <div class="cart-item-actions">
                            <div class="quantity-control">
                                <button class="quantity-btn minus">-</button>
                                <input type="number" value="1" min="1" class="quantity-input">
                                <button class="quantity-btn plus">+</button>
                            </div>
                            <button class="remove-btn">
                                <i class="fas fa-trash-alt"></i> Remover
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="cart-item">
                    <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Shampoo Sólido" class="cart-item-img">
                    <div class="cart-item-details">
                        <h3 class="cart-item-title">Shampoo Sólido Vegano</h3>
                        <span class="cart-item-category">Beleza Natural</span>
                        <div class="cart-item-price">R$ 42,90</div>
                        <div class="cart-item-actions">
                            <div class="quantity-control">
                                <button class="quantity-btn minus">-</button>
                                <input type="number" value="2" min="1" class="quantity-input">
                                <button class="quantity-btn plus">+</button>
                            </div>
                            <button class="remove-btn">
                                <i class="fas fa-trash-alt"></i> Remover
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="cart-item">
                    <img src="https://images.unsplash.com/photo-1583744946564-b52d01e2da64?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Garrafa Térmica" class="cart-item-img">
                    <div class="cart-item-details">
                        <h3 class="cart-item-title">Garrafa Térmica Aço Inox</h3>
                        <span class="cart-item-category">Acessórios</span>
                        <div class="cart-item-price">R$ 79,90</div>
                        <div class="cart-item-actions">
                            <div class="quantity-control">
                                <button class="quantity-btn minus">-</button>
                                <input type="number" value="1" min="1" class="quantity-input">
                                <button class="quantity-btn plus">+</button>
                            </div>
                            <button class="remove-btn">
                                <i class="fas fa-trash-alt"></i> Remover
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Exemplo de carrinho vazio (comentar para ver a versão com itens) -->
                <!--
                <div class="empty-cart">
                    <i class="fas fa-shopping-bag"></i>
                    <h2>Seu carrinho está vazio</h2>
                    <p>Parece que você ainda não adicionou nenhum item ao seu carrinho</p>
                    <a href="#" class="empty-cart-btn">Continuar comprando</a>
                </div>
                -->
            </div>
            
            <div class="cart-summary">
                <h3 class="summary-title">Resumo do Pedido</h3>
                
                <div class="summary-row">
                    <span>Subtotal</span>
                    <span>R$ 212,70</span>
                </div>
                
                <div class="summary-row">
                    <span>Frete</span>
                    <span>Grátis</span>
                </div>
                
                <div class="summary-row">
                    <span>Desconto (ECO10)</span>
                    <span>-R$ 21,27</span>
                </div>
                
                <div class="summary-row summary-total">
                    <span>Total</span>
                    <span>R$ 191,43</span>
                </div>
                
                <button class="checkout-btn">
                    Finalizar Compra
                    <i class="fas fa-arrow-right"></i>
                </button>
                
                <a href="#" class="continue-shopping">
                    <i class="fas fa-chevron-left"></i> Continuar comprando
                </a>
            </div>
        </div>
    </div>
    

    <script>
        // Funcionalidade dos botões de quantidade
        document.querySelectorAll('.quantity-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('.quantity-input');
                let value = parseInt(input.value);
                
                if (this.classList.contains('minus') && value > 1) {
                    input.value = value - 1;
                } else if (this.classList.contains('plus')) {
                    input.value = value + 1;
                }
                
                // Aqui você pode adicionar a lógica para atualizar o total
            });
        });
        
        // Funcionalidade do botão remover
        document.querySelectorAll('.remove-btn').forEach(button => {
            button.addEventListener('click', function() {
                const cartItem = this.closest('.cart-item');
                cartItem.style.animation = 'fadeOut 0.3s ease';
                
                setTimeout(() => {
                    cartItem.remove();
                    // Aqui você pode verificar se o carrinho está vazio e mostrar a mensagem
                }, 300);
            });
        });
        
        // Verificar se o carrinho está vazio (para implementação real)
        function checkEmptyCart() {
            const cartItems = document.querySelectorAll('.cart-item');
            const emptyCartDiv = document.querySelector('.empty-cart');
            
            if (cartItems.length === 0 && emptyCartDiv) {
                emptyCartDiv.style.display = 'block';
            }
        }
    </script>
</body>
</html>