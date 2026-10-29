
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: #edf2f6;
        color: #263b4d;
    }

    .app {
        display: flex;
        min-height: 100vh;
    }

    /* MENU LATERAL */

    .sidebar {
        width: 245px;
        min-height: 100vh;
        padding: 28px 18px;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
        background: linear-gradient(180deg, #173c59, #102e47);
        color: white;
    }

    .brand {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 35px;
        padding: 0 8px;
    }

    .brand-icon {
        width: 43px;
        height: 43px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 13px;
        background: #ffffff18;
        color: #a8e8d9;
        font-size: 23px;
    }

    .brand h4 {
        margin: 0;
        font-size: 18px;
        font-weight: 800;
    }

    .brand small {
        color: #b7cbd9;
        font-size: 10px;
        letter-spacing: 2px;
    }

    .profile {
        text-align: center;
        padding-bottom: 25px;
        margin-bottom: 24px;
        border-bottom: 1px solid #ffffff20;
    }

    .profile-avatar {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 76px;
        height: 76px;
        margin: 0 auto 13px;
        border-radius: 50%;
        background: #e2f3ef;
        color: #173c59;
        font-size: 43px;
    }

    .profile h5 {
        margin-bottom: 6px;
        font-size: 14px;
        font-weight: 700;
    }

    .profile p {
        margin: 0;
        color: #c3d5e2;
        font-size: 11px;
        overflow-wrap: anywhere;
    }

    .menu-label {
        margin: 18px 10px 12px;
        color: #9bb4c6;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1.3px;
    }

    .nav-menu {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .nav-link-custom {
        display: flex;
        align-items: center;
        gap: 13px;
        padding: 13px 12px;
        border-radius: 9px;
        color: #d5e1ea;
        text-decoration: none;
        font-size: 12px;
        transition: .2s;
    }

    .nav-link-custom i {
        width: 20px;
        font-size: 17px;
        text-align: center;
    }

    .nav-link-custom:hover,
    .nav-link-custom.active {
        color: white;
        background: #ffffff18;
    }

    .nav-link-custom.active {
        box-shadow: inset 3px 0 #70d7c1;
    }

    .sidebar-bottom {
        margin-top: auto;
        padding-top: 25px;
    }

    .security-box {
        padding: 13px;
        border-radius: 10px;
        background: #ffffff12;
        color: #cbdbe5;
        font-size: 11px;
        line-height: 1.7;
    }

    .security-box i {
        margin-right: 5px;
        color: #81dfc8;
        font-size: 17px;
    }

    /* ÁREA PRINCIPAL */

    .main {
        flex: 1;
        min-width: 0;
        padding: 28px 30px;
    }

    .topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 30px;
    }

    .page-title h1 {
        margin: 0 0 7px;
        color: #20394d;
        font-size: 25px;
        font-weight: 800;
    }

    .page-title p {
        margin: 0;
        color: #8492a1;
        font-size: 12px;
    }

    .top-actions {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .date-label {
        padding: 11px 13px;
        border: 1px solid #e4eaf0;
        border-radius: 9px;
        background: white;
        color: #647789;
        font-size: 11px;
    }

    .icon-button {
        position: relative;
        width: 40px;
        height: 40px;
        border: 1px solid #e4eaf0;
        border-radius: 9px;
        background: white;
        color: #173c59;
        font-size: 18px;
        cursor: pointer;
    }

    .notification-dot {
        position: absolute;
        top: 7px;
        right: 7px;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #df5b5b;
    }

    .mobile-menu {
        display: none;
    }

    /* TÍTULOS DAS SEÇÕES */

    .section-heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 16px;
    }

    .section-heading h2 {
        margin: 0;
        font-size: 15px;
        font-weight: 700;
    }

    .section-heading a {
        color: #168579;
        font-size: 11px;
        font-weight: 600;
        text-decoration: none;
    }

    /* INDICADORES */

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 17px;
        margin-bottom: 25px;
    }

    .stat-card {
        min-width: 0;
        padding: 20px;
        border: 1px solid #edf0f3;
        border-radius: 13px;
        background: white;
        box-shadow: 0 4px 15px #19354a0b;
    }

    .stat-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
        margin-bottom: 18px;
    }

    .stat-label {
        color: #718092;
        font-size: 11px;
    }

    .stat-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        flex-shrink: 0;
        border-radius: 10px;
        font-size: 17px;
    }

    .icon-teal {
        background: #e0f3ef;
        color: #168579;
    }

    .icon-blue {
        background: #e6eefb;
        color: #426fb1;
    }

    .icon-orange {
        background: #fff1d8;
        color: #df9b27;
    }

    .icon-red {
        background: #ffebeb;
        color: #d95c5c;
    }

    .stat-value {
        margin-bottom: 9px;
        color: #21394c;
        font-size: 27px;
        font-weight: 700;
        overflow-wrap: anywhere;
    }

    .stat-description {
        color: #8794a1;
        font-size: 10px;
        line-height: 1.6;
    }

    .positive {
        color: #168579;
        font-weight: 700;
    }

    .warning {
        color: #d95c5c;
        font-weight: 700;
    }

    /* PAINÉIS E GRÁFICOS */

    .content-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.65fr) minmax(260px, 1fr);
        gap: 20px;
        margin-bottom: 22px;
    }

    .panel,
    .table-panel {
        min-width: 0;
        padding: 21px;
        border: 1px solid #edf0f3;
        border-radius: 13px;
        background: white;
        box-shadow: 0 4px 15px #19354a0b;
    }

    .panel-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 20px;
    }

    .panel-header h3 {
        margin: 0 0 6px;
        font-size: 14px;
        font-weight: 700;
    }

    .panel-header p {
        margin: 0;
        color: #8794a1;
        font-size: 10px;
    }

    .filter-select {
        max-width: 145px;
        padding: 8px;
        border: 1px solid #e8edf1;
        border-radius: 7px;
        background: white;
        color: #526579;
        font-size: 10px;
    }

    /* GRÁFICO */

    .chart {
        position: relative;
        display: flex;
        height: 185px;
        padding: 12px 0 24px 32px;
    }

    .chart-labels-y {
        position: absolute;
        top: 6px;
        bottom: 23px;
        left: 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        color: #a1acb7;
        font-size: 9px;
    }

    .chart-grid {
        position: absolute;
        inset: 12px 0 24px 32px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        pointer-events: none;
    }

    .chart-grid div {
        width: 100%;
        border-top: 1px dashed #e8edf1;
    }

    .chart-columns {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: flex-end;
        justify-content: space-around;
        gap: 7px;
        width: 100%;
    }

    .month-column {
        display: flex;
        flex: 1;
        min-width: 0;
        height: 100%;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
        gap: 8px;
    }

    .bar-pair {
        display: flex;
        align-items: flex-end;
        justify-content: center;
        gap: 4px;
        width: 100%;
        height: 140px;
    }

    .bar {
        width: min(13px, 40%);
        min-height: 3px;
        border-radius: 3px 3px 0 0;
    }

    .bar.entry {
        background: #168579;
    }

    .bar.exit {
        background: #f5b54b;
    }

    .month-label {
        color: #8794a1;
        font-size: 9px;
    }

    .chart-legend {
        display: flex;
        justify-content: center;
        gap: 18px;
        margin-top: 10px;
    }

    .legend-item {
        display: flex;
        align-items: center;
        gap: 6px;
        color: #7e8b98;
        font-size: 10px;
    }

    .legend-dot {
        width: 8px;
        height: 8px;
        border-radius: 2px;
    }

    /* ALERTAS */

    .stock-tag {
        display: inline-block;
        padding: 5px 8px;
        border-radius: 6px;
        background: #ffeded;
        color: #d45151;
        font-size: 9px;
        white-space: nowrap;
    }

    .alert-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 13px 0;
        border-bottom: 1px solid #edf0f3;
    }

    .alert-item:last-of-type {
        border-bottom: none;
    }

    .alert-symbol {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 37px;
        height: 37px;
        flex-shrink: 0;
        border-radius: 10px;
        background: #fff0e9;
        color: #df8051;
        font-size: 17px;
    }

    .alert-details {
        flex: 1;
        min-width: 0;
    }

    .alert-details h4 {
        margin: 0 0 5px;
        font-size: 11px;
        font-weight: 700;
    }

    .alert-details p {
        margin: 0;
        color: #8794a1;
        font-size: 10px;
    }

    .stock-quantity {
        color: #d95c5c;
        font-size: 11px;
        font-weight: 700;
        white-space: nowrap;
    }

    .all-alerts {
        display: block;
        width: 100%;
        margin-top: 16px;
        padding: 10px;
        border: 1px solid #d9ece7;
        border-radius: 8px;
        background: #f3fbf8;
        color: #168579;
        text-align: center;
        font-size: 11px;
        font-weight: 600;
        text-decoration: none;
    }

    /* TABELA */

    .table-panel {
        margin-bottom: 0;
    }

    .table-responsive {
        overflow-x: auto;
    }

    .table {
        width: 100%;
        min-width: 650px;
        margin: 0;
        border-collapse: collapse;
    }

    .table thead th {
        padding: 13px 12px;
        border-bottom: 1px solid #e9eef2;
        background: #f8fafb;
        color: #8794a1;
        font-size: 10px;
        font-weight: 600;
        white-space: nowrap;
    }

    .table tbody td {
        padding: 14px 12px;
        border-bottom: 1px solid #f0f3f5;
        color: #4d6071;
        font-size: 11px;
        vertical-align: middle;
    }

    .table tbody tr:last-child td {
        border-bottom: none;
    }

    .product-cell {
        display: flex;
        align-items: center;
        gap: 10px;
        min-width: 150px;
    }

    .product-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        flex-shrink: 0;
        border-radius: 9px;
        background: #eaf5f2;
        color: #168579;
        font-size: 17px;
    }

    .product-name {
        margin-bottom: 3px;
        color: #304659;
        font-size: 11px;
        font-weight: 600;
    }

    .product-code {
        color: #a1acb7;
        font-size: 9px;
    }

    .operation {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 6px 9px;
        border-radius: 6px;
        font-size: 10px;
        font-weight: 600;
        white-space: nowrap;
    }

    .operation.entry {
        background: #e4f5ef;
        color: #168579;
    }

    .operation.exit {
        background: #fff2df;
        color: #c77b28;
    }

    .status-dot {
        display: inline-block;
        width: 6px;
        height: 6px;
        margin-right: 5px;
        border-radius: 50%;
        background: #168579;
    }

    .footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        padding: 22px 2px 0;
        color: #9aa5af;
        font-size: 10px;
    }

    /* RESPONSIVIDADE */

    @media (max-width: 1200px) {
        .sidebar {
            width: 220px;
        }

        .main {
            padding: 24px 20px;
        }

        .stats-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 900px) {
        .sidebar {
            width: 75px;
            padding: 24px 10px;
        }

        .brand {
            justify-content: center;
            padding: 0;
        }

        .brand > div:last-child,
        .profile,
        .menu-label,
        .nav-link-custom span,
        .security-box {
            display: none;
        }

        .nav-link-custom {
            justify-content: center;
            padding: 13px 8px;
        }

        .nav-link-custom i {
            font-size: 19px;
        }

        .content-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 600px) {
        .sidebar {
            display: none;
        }

        .main {
            padding: 18px 14px;
        }

        .topbar {
            align-items: flex-start;
        }

        .page-title h1 {
            font-size: 21px;
        }

        .page-title p {
            line-height: 1.6;
        }

        .date-label {
            display: none;
        }

        .mobile-menu {
            display: inline-block;
        }

        .stats-grid {
            gap: 11px;
        }

        .stat-card {
            padding: 15px;
        }

        .stat-value {
            font-size: 24px;
        }

        .panel,
        .table-panel {
            padding: 15px;
        }

        .chart {
            height: 165px;
        }

        .bar-pair {
            height: 120px;
        }

        .footer {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>

<div class="app">

    <!-- MENU LATERAL -->
    <aside class="sidebar">

        <div class="brand">
            <div class="brand-icon">
                <i class="bi bi-heart-pulse-fill"></i>
            </div>

            <div>
                <h4>PetShop</h4>
                <small>ESTOQUE</small>
            </div>
        </div>

        <div class="profile">
            <div class="profile-avatar">
                <i class="bi bi-person-fill"></i>
            </div>

            <h5>FUNCIONÁRIO</h5>
            <p>funcionario@petshop.com</p>
        </div>

        <p class="menu-label">MENU PRINCIPAL</p>

        <nav class="nav-menu">
            <a href="/inicio" class="nav-link-custom active">
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Dashboard</span>
            </a>

            <a href="/produtos" class="nav-link-custom">
                <i class="bi bi-box-seam"></i>
                <span>Produtos</span>
            </a>

            <a href="#estoque" class="nav-link-custom">
                <i class="bi bi-boxes"></i>
                <span>Controle de estoque</span>
            </a>

            <a href="#movimentacoes" class="nav-link-custom">
                <i class="bi bi-arrow-left-right"></i>
                <span>Movimentações</span>
            </a>

            <a href="#alertas" class="nav-link-custom">
                <i class="bi bi-exclamation-triangle"></i>
                <span>Alertas de estoque</span>
            </a>

            <a href="#relatorios" class="nav-link-custom">
                <i class="bi bi-bar-chart-line"></i>
                <span>Relatórios</span>
            </a>
        </nav>

        <div class="sidebar-bottom">
            <p class="menu-label">SISTEMA</p>

            <nav class="nav-menu">
                <a href="#configuracoes" class="nav-link-custom">
                    <i class="bi bi-gear"></i>
                    <span>Configurações</span>
                </a>
            </nav>

            <div class="security-box mt-3">
                <i class="bi bi-shield-check"></i>
                <strong>Ambiente seguro</strong>
                <br>
                Acesso exclusivo para funcionários.
            </div>
        </div>

    </aside>

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="main">

        <header class="topbar">
            <div class="page-title">
                <h1>Dashboard</h1>
                <p>Bem-vindo ao painel de controle do PetShop Estoque.</p>
            </div>

            <div class="top-actions">
                <span class="date-label">
                    <i class="bi bi-calendar3 me-2"></i>
                    Painel de controle
                </span>

                <button class="icon-button mobile-menu"
                        type="button"
                        aria-label="Abrir menu"
                        onclick="document.querySelector('.sidebar').style.display =
                        document.querySelector('.sidebar').style.display === 'flex'
                        ? 'none' : 'flex'">
                    <i class="bi bi-list"></i>
                </button>

                <button class="icon-button"
                        type="button"
                        aria-label="Notificações"
                        title="Notificações">
                    <i class="bi bi-bell"></i>
                    <span class="notification-dot"></span>
                </button>

                <button class="icon-button"
                        type="button"
                        aria-label="Perfil"
                        title="Perfil do funcionário">
                    <i class="bi bi-person"></i>
                </button>
            </div>
        </header>

        <!-- INDICADORES -->
        <div class="section-heading">
            <h2>Visão geral do estoque</h2>
            <a href="#relatorios">
                Ver relatórios <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <section class="stats-grid" id="estoque">

            <article class="stat-card">
                <div class="stat-top">
                    <span class="stat-label">Produtos cadastrados</span>
                    <div class="stat-icon icon-teal">
                        <i class="bi bi-box-seam"></i>
                    </div>
                </div>

                <div class="stat-value">248</div>
                <div class="stat-description">
                    Produtos registrados no sistema
                </div>
            </article>

            <article class="stat-card">
                <div class="stat-top">
                    <span class="stat-label">Unidades em estoque</span>
                    <div class="stat-icon icon-blue">
                        <i class="bi bi-boxes"></i>
                    </div>
                </div>

                <div class="stat-value">1.384</div>
                <div class="stat-description">
                    Quantidade total disponível
                </div>
            </article>

            <article class="stat-card">
                <div class="stat-top">
                    <span class="stat-label">Entradas do período</span>
                    <div class="stat-icon icon-teal">
                        <i class="bi bi-box-arrow-in-down"></i>
                    </div>
                </div>

                <div class="stat-value">126</div>
                <div class="stat-description">
                    <span class="positive">Entradas</span> registradas
                </div>
            </article>

            <article class="stat-card">
                <div class="stat-top">
                    <span class="stat-label">Estoque baixo</span>
                    <div class="stat-icon icon-red">
                        <i class="bi bi-exclamation-triangle"></i>
                    </div>
                </div>

                <div class="stat-value">08</div>
                <div class="stat-description">
                    <span class="warning">Atenção:</span>
                    abaixo do mínimo
                </div>
            </article>

        </section>

        <!-- GRÁFICO E ALERTAS -->
        <section class="content-grid">

            <article class="panel" id="relatorios">

                <div class="panel-header">
                    <div>
                        <h3>Movimentações de mercadorias</h3>
                        <p>Comparativo de entradas e saídas</p>
                    </div>

                    <select class="filter-select" aria-label="Período">
                        <option>Últimos 6 meses</option>
                        <option>Últimos 30 dias</option>
                        <option>Últimos 7 dias</option>
                    </select>
                </div>

                <div class="chart">

                    <div class="chart-labels-y">
                        <span>100</span>
                        <span>75</span>
                        <span>50</span>
                        <span>25</span>
                        <span>0</span>
                    </div>

                    <div class="chart-grid">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                    <div class="chart-columns">

                        <div class="month-column">
                            <div class="bar-pair">
                                <div class="bar entry" style="height:55%"></div>
                                <div class="bar exit" style="height:35%"></div>
                            </div>
                            <span class="month-label">Mai</span>
                        </div>

                        <div class="month-column">
                            <div class="bar-pair">
                                <div class="bar entry" style="height:70%"></div>
                                <div class="bar exit" style="height:45%"></div>
                            </div>
                            <span class="month-label">Jun</span>
                        </div>

                        <div class="month-column">
                            <div class="bar-pair">
                                <div class="bar entry" style="height:48%"></div>
                                <div class="bar exit" style="height:65%"></div>
                            </div>
                            <span class="month-label">Jul</span>
                        </div>

                        <div class="month-column">
                            <div class="bar-pair">
                                <div class="bar entry" style="height:82%"></div>
                                <div class="bar exit" style="height:58%"></div>
                            </div>
                            <span class="month-label">Ago</span>
                        </div>

                        <div class="month-column">
                            <div class="bar-pair">
                                <div class="bar entry" style="height:63%"></div>
                                <div class="bar exit" style="height:45%"></div>
                            </div>
                            <span class="month-label">Set</span>
                        </div>

                        <div class="month-column">
                            <div class="bar-pair">
                                <div class="bar entry" style="height:90%"></div>
                                <div class="bar exit" style="height:72%"></div>
                            </div>
                            <span class="month-label">Out</span>
                        </div>

                    </div>
                </div>

                <div class="chart-legend">
                    <span class="legend-item">
                        <span class="legend-dot" style="background:#168579"></span>
                        Entradas
                    </span>

                    <span class="legend-item">
                        <span class="legend-dot" style="background:#f5b54b"></span>
                        Saídas
                    </span>
                </div>

            </article>

            <!-- ALERTAS DE ESTOQUE -->
            <article class="panel" id="alertas">

                <div class="panel-header">
                    <div>
                        <h3>Alertas de estoque</h3>
                        <p>Produtos que precisam de atenção</p>
                    </div>

                    <span class="stock-tag">08 alertas</span>
                </div>

                <div class="alert-item">
                    <div class="alert-symbol">
                        <i class="bi bi-bag-heart"></i>
                    </div>

                    <div class="alert-details">
                        <h4>Ração para cães 10 kg</h4>
                        <p>Estoque mínimo: 10 un.</p>
                    </div>

                    <span class="stock-quantity">03 un.</span>
                </div>

                <div class="alert-item">
                    <div class="alert-symbol">
                        <i class="bi bi-droplet"></i>
                    </div>

                    <div class="alert-details">
                        <h4>Shampoo para pets</h4>
                        <p>Estoque mínimo: 15 un.</p>
                    </div>

                    <span class="stock-quantity">05 un.</span>
                </div>

                <div class="alert-item">
                    <div class="alert-symbol">
                        <i class="bi bi-controller"></i>
                    </div>

                    <div class="alert-details">
                        <h4>Brinquedo para cães</h4>
                        <p>Estoque mínimo: 12 un.</p>
                    </div>

                    <span class="stock-quantity">04 un.</span>
                </div>

                <a href="/produtos" class="all-alerts">
                    Consultar produtos
                    <i class="bi bi-arrow-right ms-1"></i>
                </a>

            </article>

        </section>

        <!-- HISTÓRICO DE MOVIMENTAÇÕES -->
        <section class="table-panel" id="movimentacoes">

            <div class="section-heading">
                <div>
                    <h2>Movimentações recentes</h2>
                    <p style="font-size:11px;color:#8794a1;margin:7px 0 0">
                        Histórico de entradas e saídas de mercadorias
                    </p>
                </div>

                <a href="#historico">
                    Ver histórico completo
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="table-responsive">
                <table class="table">

                    <thead>
                        <tr>
                            <th>PRODUTO</th>
                            <th>OPERAÇÃO</th>
                            <th>QUANTIDADE</th>
                            <th>DATA</th>
                            <th>FUNCIONÁRIO</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>
                                <div class="product-cell">
                                    <div class="product-icon">
                                        <i class="bi bi-bag-heart"></i>
                                    </div>
                                    <div>
                                        <div class="product-name">Ração para cães</div>
                                        <div class="product-code">PROD-001</div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="operation entry">
                                    <i class="bi bi-arrow-down-left"></i>
                                    Entrada
                                </span>
                            </td>

                            <td>+ 25 un.</td>
                            <td>29/10/2026</td>
                            <td>Funcionário 01</td>
                            <td><span class="status-dot"></span>Registrada</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-cell">
                                    <div class="product-icon">
                                        <i class="bi bi-droplet"></i>
                                    </div>
                                    <div>
                                        <div class="product-name">Shampoo para pets</div>
                                        <div class="product-code">PROD-002</div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="operation exit">
                                    <i class="bi bi-arrow-up-right"></i>
                                    Saída
                                </span>
                            </td>

                            <td>- 03 un.</td>
                            <td>29/10/2026</td>
                            <td>Funcionário 02</td>
                            <td><span class="status-dot"></span>Registrada</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-cell">
                                    <div class="product-icon">
                                        <i class="bi bi-controller"></i>
                                    </div>
                                    <div>
                                        <div class="product-name">Brinquedo para cães</div>
                                        <div class="product-code">PROD-003</div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="operation entry">
                                    <i class="bi bi-arrow-down-left"></i>
                                    Entrada
                                </span>
                            </td>

                            <td>+ 15 un.</td>
                            <td>28/10/2026</td>
                            <td>Funcionário 01</td>
                            <td><span class="status-dot"></span>Registrada</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-cell">
                                    <div class="product-icon">
                                        <i class="bi bi-heart-pulse"></i>
                                    </div>
                                    <div>
                                        <div class="product-name">Coleira para gatos</div>
                                        <div class="product-code">PROD-004</div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="operation exit">
                                    <i class="bi bi-arrow-up-right"></i>
                                    Saída
                                </span>
                            </td>

                            <td>- 02 un.</td>
                            <td>28/10/2026</td>
                            <td>Funcionário 03</td>
                            <td><span class="status-dot"></span>Registrada</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </section>

        <!-- RODAPÉ -->
        <footer class="footer">
            <span>© 2026 PetShop Estoque. Todos os direitos reservados.</span>
            <span>
                <i class="bi bi-shield-check me-1"></i>
                Sistema de controle de mercadorias
            </span>
        </footer>

    </main>
</div>
