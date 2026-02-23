<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Ajuda - Recriação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/ajuda.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <script src="../js/ajuda.js"></script>
    
</head>
<body>

     <div>
        <div class="main-wrapper">
        <nav class="sidebar d-flex flex-column justify-content-between">
            <div>
                <div class="sidebar-header px-3 mb-4">
                    <h4>Dashboard</h4>
                </div>
                <a href="index.php" class="active"><i class="bi bi-house-door action-icon"></i>Home</a>
                <a href="#"><i class="bi bi-speedometer2 action-icon"></i>Dashboard</a>
                <a href="cadastroProduto.php"><i class="bi bi-person-plus action-icon"></i>Cadastro Produto</a>
                <a href="vendas.php"><i class="bi bi-cart action-icon"></i>Vendas</a>
                <a href="editar.php"><i class="bi bi-pencil-square action-icon"></i>Editar</a>
                <a href="ajuda.php"><i class="bi bi-question-circle action-icon"></i>Ajuda</a>
            </div>

            <div class="px-3 pb-4">
                <?php include 'drop_up.php'; ?>
            </div>
        </nav>


        <main class="content-area">
            <div class="help-container">
        
        <div class="help-card">
            <div class="icon-wrapper">
                <div class="icon-placeholder">📞</div>
            </div>
            <div class="content">
                <h3>Contact us</h3>
                <p>Lorem ipsum dolor sit dim amet, mea regione diamet principes at. Cum no movi lorem ipsum dolor sit dim.</p>
            </div>
            <div class="pagination-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>

        <div class="help-card">
            <div class="icon-wrapper">
                <div class="icon-placeholder">📝</div>
            </div>
            <div class="content">
                <h3>Describe issue</h3>
                <p>Lorem ipsum dolor sit dim amet, mea regione diamet principes at. Cum no movi lorem ipsum dolor sit dim.</p>
            </div>
            <div class="pagination-dots">
                <span class="dot"></span>
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>

        <div class="help-card">
            <div class="icon-wrapper">
                <div class="icon-placeholder">🛠️</div>
            </div>
            <div class="content">
                <h3>Get help</h3>
                <p>Lorem ipsum dolor sit dim amet, mea regione diamet principes at. Cum no movi lorem ipsum dolor sit dim.</p>
            </div>
            <div class="pagination-dots">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot active"></span>
                <span class="dot"></span>
            </div>
        </div>

        <div class="help-card">
            <div class="icon-wrapper">
                <div class="icon-placeholder">✔️</div>
            </div>
            <div class="content">
                <h3>Done!<br><small class="text-muted" style="font-size: 0.8em;">Issue is resolved</small></h3>
                <p>Lorem ipsum dolor sit dim amet, mea regione diamet principes at.</p>
                <a href="#" class="btn-learn-more">Learn more</a>
            </div>
            <div class="pagination-dots">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot active"></span>
            </div>
        </div>

    </div>
        </main>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.min.js"></script>

</body>
</html>