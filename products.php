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
                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="<?php echo number_format(($i % 3) * 0.2, 1); ?>s">
                        <div class="case-study-item-image">
                            <a href="<?php echo htmlspecialchars($url); ?>" data-cursor-text="View">
                                <figure>
                                    <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
                                </figure>
                            </a>
                        </div>
                        <div class="case-study-item-content">
                            <h2><a href="<?php echo htmlspecialchars($url); ?>"><?php echo htmlspecialchars($p['name']); ?></a></h2>
                            <p><?php echo htmlspecialchars($p['summary']); ?></p>
                        </div>
                    </div>
                    <!-- Case Study Item End -->
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