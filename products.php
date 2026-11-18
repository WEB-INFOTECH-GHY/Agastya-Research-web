<?php
require_once 'include/products-data.php';

$active = isset($_GET['division']) ? strtolower(trim($_GET['division'])) : '';
if (!isset($divisions[$active])) { $active = ''; }

$counts = ['all' => count($products), 'main' => 0, 'opg' => 0, 'usr' => 0];
foreach ($products as $p) { $counts[$p['div']]++; }

$list = $active
    ? array_values(array_filter($products, function ($p) use ($active) { return $p['div'] === $active; }))
    : $products;

if ($active) {
    $page_title = $divisions[$active]['title'] . ' - Products';
    $meta_desc  = 'Agastya Research ' . $divisions[$active]['title'] . ': ' . $divisions[$active]['desc'];
    $heading    = $divisions[$active]['title'];
} else {
    $page_title = 'Our Products';
    $meta_desc  = 'Browse the complete Agastya Research product range across the Main, OPG and USR divisions.';
    $heading    = 'Our Products';
}

include 'include/header.php';
?>

    <style>
        /* ---------- Product cards: simple, image fully visible, responsive ---------- */
        .page-case-study .product-card-col { display: flex; margin-bottom: 30px; }

        .page-case-study .product-card {
            display: flex;
            flex-direction: column;
            width: 100%;
            background: #fff;
            border: 1px solid #e6e9ee;
            border-radius: 14px;
            overflow: hidden;
            transition: box-shadow .25s ease, transform .25s ease;
        }
        .page-case-study .product-card:hover {
            box-shadow: 0 10px 28px rgba(0, 0, 0, .10);
            transform: translateY(-3px);
        }

        /* Image area: fixed ratio, picture is contained (never cropped) */
        .page-case-study .product-card-image {
            display: block;
            position: relative;
            width: 100%;
            aspect-ratio: 4 / 3;
            background: #fff;
            border-bottom: 1px solid #eef0f3;
            overflow: hidden;
        }
        .page-case-study .product-card-image img {
            position: absolute;
            inset: 0;
            width: 100% !important;
            height: 100% !important;
            aspect-ratio: auto !important;
            object-fit: contain !important;
            object-position: center;
            padding: 14px;
            transform: none !important;
        }
        .page-case-study .product-card-noimg {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px;
            text-align: center;
            font-size: 14px;
            color: #8a919c;
            background: #f6f8fa;
        }

        /* Text area */
        .page-case-study .product-card-body {
            display: flex;
            flex-direction: column;
            flex: 1;
            padding: 18px 20px 20px;
        }
        .page-case-study .product-card-body h2 {
            font-size: 20px;
            line-height: 1.3;
            margin: 0 0 8px;
        }
        .page-case-study .product-card-body h2 a { color: inherit; text-decoration: none; }
        .page-case-study .product-card-body p {
            margin: 0;
            font-size: 14.5px;
            line-height: 1.6;
            opacity: .85;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        @media (max-width: 767px) {
            .page-case-study .product-card-col { margin-bottom: 20px; }
            .page-case-study .product-card-body { padding: 16px; }
            .page-case-study .product-card-body h2 { font-size: 18px; }
        }
    </style>

    <!-- Page Header Section Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($heading); ?></h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Case Study Start -->
    <div class="page-case-study">
        <div class="container">

            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <p class="wow fadeInUp"><?php echo htmlspecialchars($active ? $divisions[$active]['desc'] : 'Browse our complete range across three divisions.'); ?></p>
                    </div>
                    <div class="text-center d-flex flex-wrap justify-content-center gap-2 mt-4">
                        <a href="products.php" class="btn-default <?php echo $active === '' ? 'btn-highlighted' : ''; ?>">All Products (<?php echo $counts['all']; ?>)</a>
                        <?php foreach ($divisions as $key => $d): ?>
                            <a href="products.php?division=<?php echo $key; ?>" class="btn-default <?php echo $active === $key ? 'btn-highlighted' : ''; ?>"><?php echo htmlspecialchars($d['title']); ?> (<?php echo $counts[$key]; ?>)</a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php foreach ($list as $i => $p): $url = product_url($p); ?>
                <div class="col-xl-4 col-md-6 col-12 product-card-col">
                    <!-- Product Card Start -->
                    <div class="product-card wow fadeInUp" data-wow-delay="<?php echo number_format(($i % 3) * 0.2, 1); ?>s">
                        <a class="product-card-image" href="<?php echo htmlspecialchars($url); ?>" data-cursor-text="View">
                            <?php if (!empty($p['image'])): ?>
                                <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>" loading="lazy">
                            <?php else: ?>
                                <span class="product-card-noimg"><?php echo htmlspecialchars($p['name']); ?></span>
                            <?php endif; ?>
                        </a>
                        <div class="product-card-body">
                            <h2><a href="<?php echo htmlspecialchars($url); ?>"><?php echo htmlspecialchars($p['name']); ?></a></h2>
                            <p><?php echo htmlspecialchars($p['summary']); ?></p>
                        </div>
                    </div>
                    <!-- Product Card End -->
                </div>
                <?php endforeach; ?>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center" style="font-size:13px; opacity:.75; margin-top:20px;">Product information is provided for trade and healthcare professional reference only. Medicines should be used only on the advice of a registered medical practitioner.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Case Study End -->

<?php include 'include/footer.php' ?>