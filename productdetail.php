<?php
require_once 'include/products-data.php';

$slug = isset($_GET['slug']) ? strtolower(trim($_GET['slug'])) : '';
$p = get_product($slug);

/* ---------- 404 for unknown product ---------- */
if (!$p) {
    http_response_code(404);
    $page_title = 'Product Not Found';
    $meta_desc  = 'The product you are looking for could not be found.';
    include 'include/header.php';
    ?>
    <div class="page-header dark-section parallaxie">
        <div class="container"><div class="row"><div class="col-lg-12">
            <div class="page-header-box"><h1 class="text-anime-style-3" data-cursor="-opaque">Product not found</h1></div>
        </div></div></div>
    </div>
    <div class="page-case-study-single">
        <div class="container text-center">
            <p>Sorry, we couldn't find that product. <a href="products.php">View all products</a> or <a href="contact.php#enquiry">contact us</a>.</p>
        </div>
    </div>
    <?php
    include 'include/footer.php';
    exit;
}

/* ---------- SEO ---------- */
$divTitle   = $divisions[$p['div']]['title'];
$page_title = !empty($p['seo_title']) ? $p['seo_title'] : $p['name'] . ' - ' . $p['comp'];
$meta_desc  = !empty($p['seo_desc'])  ? $p['seo_desc']  : $p['summary'] . ' ' . $divTitle . ', Agastya Research.';

/* ---------- Related products (same division, else same category) ---------- */
$related = array_values(array_filter($products, function ($x) use ($p) {
    return $x['id'] !== $p['id'] && ($x['div'] === $p['div'] || $x['cat'] === $p['cat']);
}));
usort($related, function ($a, $b) use ($p) {
    return (($b['cat'] === $p['cat']) <=> ($a['cat'] === $p['cat']));
});
$related = array_slice($related, 0, 3);

include 'include/header.php';
?>

    <!-- Page Header Section Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($p['name']); ?></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                                <li class="breadcrumb-item"><a href="products.php?division=<?php echo $p['div']; ?>"><?php echo htmlspecialchars($divTitle); ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($p['name']); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Case Study Single Start -->
    <div class="page-case-study-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <div class="page-category-list case-study-category-list wow fadeInUp">
                            <h2 class="page-category-list-title">Product Information</h2>

                            <div class="case-study-category-item-list">
                                <div class="case-study-category-item">
                                    <h2>Division:</h2>
                                    <p><a href="products.php?division=<?php echo $p['div']; ?>"><?php echo htmlspecialchars($divTitle); ?></a></p>
                                </div>
                                <div class="case-study-category-item">
                                    <h2>Category:</h2>
                                    <p><?php echo htmlspecialchars($p['cat']); ?></p>
                                </div>
                                <div class="case-study-category-item">
                                    <h2>Composition:</h2>
                                    <p><?php echo htmlspecialchars($p['comp']); ?></p>
                                </div>
                                <div class="case-study-category-item">
                                    <h2>Type:</h2>
                                    <p><?php echo htmlspecialchars($p['form']); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box dark-section wow fadeInUp" data-wow-delay="0.25s">
                            <div class="sidebar-cta-header">
                                <div class="icon-box">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="sidebar-cta-title">
                                    <h2>Working hours:</h2>
                                </div>
                            </div>
                            <div class="sidebar-cta-body">
                                <div class="sidebar-cta-list">
                                    <ul>
                                        <li><span>Mon to Sat:</span>10AM - 7PM</li>
                                        <li><span>Sunday:</span>Closed</li>
                                    </ul>
                                </div>
                                <div class="sidebar-cta-btn">
                                    <a href="contact.php?product=<?php echo urlencode($p['name']); ?>#enquiry" class="btn-default btn-highlighted">Enquire About This Product</a>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <div class="case-study-single-content">
                        <div class="page-single-image">
                            <figure class="image-anime reveal">
                                <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['name'] . ' - ' . $p['comp']); ?>">
                            </figure>
                        </div>

                        <div class="case-study-entry">
                            <p class="wow fadeInUp"><?php echo htmlspecialchars($p['summary']); ?></p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><strong>Composition:</strong> <?php echo htmlspecialchars($p['comp']); ?></p>

                            <!-- Used For -->
                            <div class="case-study-result">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Used for</h2>
                                <div class="case-study-result-content wow fadeInUp" data-wow-delay="0.2s">
                                    <ul>
                                        <?php foreach ($p['uses'] as $u): ?>
                                            <li><?php echo htmlspecialchars($u); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>

                            <p class="wow fadeInUp" style="font-size:13px; opacity:.75;">This information is for trade and healthcare professional reference only. Medicines should be used only on the advice of a registered medical practitioner.</p>
                        </div>
                    </div>
                </div>
            </div>

            <?php if ($related): ?>
            <!-- Related Products -->
            <div class="row section-row mt-5">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Related products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($related as $i => $r): $url = product_url($r); ?>
                <div class="col-xl-4 col-md-6">
                    <div class="case-study-item wow fadeInUp" data-wow-delay="<?php echo number_format($i * 0.2, 1); ?>s">
                        <div class="case-study-item-image">
                            <a href="<?php echo htmlspecialchars($url); ?>" data-cursor-text="View">
                                <figure><img src="<?php echo htmlspecialchars($r['image']); ?>" alt="<?php echo htmlspecialchars($r['name']); ?>"></figure>
                            </a>
                        </div>
                        <div class="case-study-item-content">
                            <h2><a href="<?php echo htmlspecialchars($url); ?>"><?php echo htmlspecialchars($r['name']); ?></a></h2>
                            <p><?php echo htmlspecialchars($r['summary']); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Page Case Study Single End -->

<?php include 'include/footer.php' ?>