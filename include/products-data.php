<?php
/* ==================================================================
   PRODUCT DATA - the ONLY place you edit to add / change products.
   Every product has its own page file: <id>.php
   e.g.  'id' => 'pantawell'  ->  pantawell.php
   After adding a product here, run make-product-pages.php once to
   create its page file.

   Fields:
     id        URL slug: lowercase letters, numbers, hyphens only
     name      brand name
     div       main | opg | usr
     cat       category
     form      type of product
     comp      composition
     summary   short description (shown on cards and as meta description)
     uses[]    "Used for" bullet points
   Optional:
     image      custom image path (otherwise web/products/<id>.jpg is used
                if it exists, else a template image)
     seo_title  custom <title>
     seo_desc   custom meta description
     hidden     true = keep off the website
================================================================== */



$divisions = [
    'main' => [
        'title' => 'Main Division',
        'desc'  => 'Our core range, covering gastro and liver care, urology, anti-infectives, pain relief and nutritional support.',
    ],
    'opg' => [
        'title' => 'OPG Division',
        'desc'  => 'A broad range of anti-infectives, gastro, urology, nerve care, skin, allergy and nutritional support products.',
    ],
    'usr' => [
        'title' => 'USR Division',
        'desc'  => 'Focused on neuro care and nutritional support, alongside gastro, anti-infective, allergy and bone health products.',
    ],
];

$products = [

    /* ===================== MAIN DIVISION ===================== */
    ['id'=>'usilo-d','name'=>'Usilo D','div'=>'main','cat'=>'Urology','form'=>'Tablets',
     'comp'=>'Silodosin + Dutasteride',
     'summary'=>'Used to treat benign prostatic hyperplasia (BPH), also known as an enlarged prostate.',
     'uses'=>['Silodosin relaxes the muscles of the prostate and bladder, making it easier to urinate','Dutasteride shrinks the enlarged prostate over time, improving urine flow and reducing symptoms','Helps with trouble starting to urinate, weak urine flow and frequent urination, especially at night']],

    ['id'=>'exoroxy-p','name'=>'Exoroxy P','div'=>'main','cat'=>'Neuro & Pain Care','form'=>'Tablets',
     'comp'=>'Pain and anti-inflammatory formulation',
     'summary'=>'Used to relieve pain and reduce inflammation.',
     'uses'=>['Joint pain, including osteoarthritis and rheumatoid arthritis','Gout and other painful conditions with swelling','Muscle pain and back pain','Toothache and headache','Post-surgery pain']],

    ['id'=>'cupiwell','name'=>'Cupiwell','div'=>'main','cat'=>'Heart & Antioxidants','form'=>'Capsules',
     'comp'=>'Curcumin 495 mg (95%) + Piperine 5 mg (95%)',
     'summary'=>'A herbal dietary supplement combining curcumin from turmeric with piperine from black pepper, which improves curcumin absorption.',
     'uses'=>['Anti-inflammatory support for joints, including osteoarthritis and rheumatoid arthritis','Antioxidant protection and immunity support','Supports liver function and digestive comfort','Supports heart and metabolic health','General wellness support']],

    ['id'=>'pantawell','name'=>'Pantawell','div'=>'main','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Pantoprazole',
     'summary'=>'A proton pump inhibitor (PPI) that reduces the amount of acid made by the stomach.',
     'uses'=>['Gastroesophageal reflux disease (GERD), acid reflux and heartburn','Gastric and duodenal (peptic) ulcers','Erosive esophagitis','Zollinger-Ellison syndrome','Sour burps, nausea and stomach discomfort caused by acid']],

    ['id'=>'pantawell-iv','name'=>'Pantawell IV','div'=>'main','cat'=>'Gastro & Liver Care','form'=>'Injection',
     'comp'=>'Pantoprazole 40 mg IV',
     'summary'=>'Intravenous pantoprazole for acid-related conditions where oral treatment is not suitable.',
     'uses'=>['Gastroesophageal reflux disease (GERD)','Erosive esophagitis','Zollinger-Ellison syndrome','Peptic ulcers','Prevention of stress ulcers in critically ill patients unable to take oral medicines']],

    ['id'=>'pantawell-d','name'=>'Pantawell D','div'=>'main','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Pantoprazole 40 mg + Domperidone 30 mg',
     'summary'=>'Reduces stomach acid and helps the stomach empty faster, easing bloating, nausea and early fullness.',
     'uses'=>['Gastroesophageal reflux disease (GERD)','Gastroparesis (delayed stomach emptying)','Erosive esophagitis','Peptic ulcers','Bloating, nausea and feeling full too soon']],

    ['id'=>'welldon-cv','name'=>'Welldon CV','div'=>'main','cat'=>'Anti-Infectives','form'=>'Tablets',
     'comp'=>'Cefpodoxime 200 mg + Potassium Clavulanate 125 mg',
     'summary'=>'An antibiotic combination: cefpodoxime kills bacteria or stops their growth, and clavulanate helps prevent resistance.',
     'uses'=>['Respiratory infections such as pneumonia and bronchitis','Urinary tract infections (UTIs)','Skin infections such as cellulitis and impetigo','Ear infections (otitis media)','Sinusitis']],

    ['id'=>'welliv','name'=>'Welliv','div'=>'main','cat'=>'Gastro & Liver Care','form'=>'Syrup',
     'comp'=>'Herbal liver support formulation',
     'summary'=>'A herbal syrup used to support liver health and digestion.',
     'uses'=>['Supports liver function in fatty liver disease','Supports recovery in hepatitis and liver toxicity','Liver detoxification and protection from toxins','Supports the liver in jaundice','Improves digestion, bloating and indigestion']],

    ['id'=>'wellurso','name'=>'Wellurso','div'=>'main','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Ursodeoxycholic Acid 300 mg',
     'summary'=>'A bile acid used for certain liver and gallbladder conditions. It improves bile flow and helps protect liver cells.',
     'uses'=>['Dissolving small cholesterol gallstones in patients not suitable for surgery','Primary biliary cholangitis (PBC)','Supportive use in cirrhosis and hepatitis','Non-alcoholic fatty liver disease (NAFLD)']],

    ['id'=>'wellvita-gold','name'=>'Wellvita Gold','div'=>'main','cat'=>'Vitamins & Nutrition','form'=>'Soft gelatin capsules',
     'comp'=>'Calcium Citrate 200 mg + Methylcobalamin 1500 mcg + Folic Acid 1500 mcg + Calcitriol 0.25 mcg + Vitamin B6 3 mg',
     'summary'=>'A combination for bone health, nerve health and prevention of vitamin deficiencies.',
     'uses'=>['Osteoporosis and osteopenia','Vitamin B12 deficiency and nerve health, including peripheral neuropathy','Megaloblastic anemia','Pregnancy support, including prevention of neural tube defects','Hypocalcemia and fracture healing']],

    ['id'=>'wellvita','name'=>'Wellvita','div'=>'main','cat'=>'Vitamins & Nutrition','form'=>'Syrup',
     'comp'=>'Multivitamin with Lycopene, Zinc, Lysine and B-complex',
     'summary'=>'A multivitamin, antioxidant and appetite-supporting syrup that helps in recovery, growth and overall health.',
     'uses'=>['Immunity support, especially in people prone to frequent infections','Appetite and growth support in children and the elderly','Vitamin B-complex deficiencies','Anemia support','Recovery after illness, infection or surgery','Skin and hair health']],

    ['id'=>'wellvita-9g','name'=>'Wellvita 9G','div'=>'main','cat'=>'Heart & Antioxidants','form'=>'Nutritional supplement',
     'comp'=>'Omega-3, Garlic, Grape Seed Extract, Ginkgo Biloba, Green Tea, Ginger, vitamins and minerals',
     'summary'=>'A multi-ingredient nutritional supplement for heart, brain and immune health.',
     'uses'=>['Heart health and cholesterol support','Memory, focus and mental alertness','Immunity support','Antioxidant defense','Joint inflammation support','Digestive health and weight management support']],

    ['id'=>'benfonext','name'=>'Benfonext','div'=>'main','cat'=>'Neuro & Pain Care','form'=>'Nutritional supplement',
     'comp'=>'Alpha Lipoic Acid, Selenium, Chromium, Folic Acid and Vitamin B12',
     'summary'=>'A neuro-nutritional formulation for nerve health and relief from nerve-related symptoms.',
     'uses'=>['Diabetic neuropathy: burning feet, tingling, numbness and nerve pain','Peripheral neuropathy','Neuroprotection and support for nerve regeneration','Megaloblastic anemia from B12 and folate deficiency','Antioxidant support and glucose metabolism','General weakness and fatigue']],

    /* ===================== OPG DIVISION ===================== */
    ['id'=>'collvit','name'=>'Collvit','div'=>'opg','cat'=>'Heart & Antioxidants','form'=>'Nutritional supplement',
     'comp'=>'Coenzyme Q10, Lycopene, L-Carnitine, Omega-3 Fatty Acids, L-Arginine, Sodium Selenite',
     'summary'=>'Commonly used for cardiovascular health, antioxidant support and metabolic function.',
     'uses'=>['Coenzyme Q10 boosts energy and protects cells','Lycopene supports heart health','L-Carnitine aids fat metabolism and exercise recovery','Omega-3 supports heart and brain health; L-Arginine improves blood flow','Sodium Selenite supports antioxidant defense and immunity']],

    ['id'=>'ferroz','name'=>'Ferroz 200/300','div'=>'opg','cat'=>'Anti-Infectives','form'=>'Oral antibiotic',
     'comp'=>'Faropenem',
     'summary'=>'An antibiotic used for bacterial infections, available in different strengths.',
     'uses'=>['Respiratory tract infections such as pneumonia and bronchitis','Urinary tract infections, including cystitis and pyelonephritis','Skin and soft tissue infections','Sinusitis','Middle ear infections (otitis media)']],

    ['id'=>'azirol-d3','name'=>'Azirol D3','div'=>'opg','cat'=>'Bone Health','form'=>'Vitamin D3 supplement',
     'comp'=>'Cholecalciferol (Vitamin D3)',
     'summary'=>'Vitamin D3 helps the body absorb calcium and supports bone health.',
     'uses'=>['Vitamin D deficiency and insufficiency','Calcium deficiency','Osteoporosis','Rickets in children','Osteomalacia in adults','Hypoparathyroidism (to manage low blood calcium)']],

    ['id'=>'ausam-400','name'=>'Ausam-400','div'=>'opg','cat'=>'Vitamins & Nutrition','form'=>'Supplement',
     'comp'=>'S-Adenosyl-L-Methionine (SAMe)',
     'summary'=>'SAMe is a compound that occurs naturally in the body and plays a role in many biological processes.',
     'uses'=>['Mood support in depression','Liver health, repair and detoxification','Osteoarthritis: joint pain and inflammation','Cognitive health, especially with age']],

    ['id'=>'tamzil-04','name'=>'Tamzil-0.4','div'=>'opg','cat'=>'Urology','form'=>'Tablets',
     'comp'=>'Tamsulosin HCl 0.4 mg + Dutasteride',
     'summary'=>'A combination for enlarged prostate. Tamsulosin relaxes prostate and bladder muscles, and dutasteride reduces prostate size.',
     'uses'=>['Benign prostatic hyperplasia (BPH)','Lower urinary tract symptoms (LUTS)','Urinary retention','Difficulty urinating and frequent urination']],

    ['id'=>'itoron','name'=>'Itoron-100/200','div'=>'opg','cat'=>'Anti-Infectives','form'=>'Antifungal',
     'comp'=>'Antifungal formulation (100 / 200 strengths)',
     'summary'=>'Used for systemic and localized fungal infections caused by susceptible fungi.',
     'uses'=>['Aspergillosis, blastomycosis and histoplasmosis','Candidiasis (yeast infections)','Tinea infections: ringworm, athlete’s foot and jock itch','Onychomycosis (fungal nail infections)']],

    ['id'=>'mupron','name'=>'Mupron','div'=>'opg','cat'=>'Anti-Infectives','form'=>'Topical',
     'comp'=>'Mupirocin',
     'summary'=>'A topical antibiotic for bacterial skin infections.',
     'uses'=>['Impetigo and folliculitis','Infected small cuts, abrasions and surgical wounds','Furunculosis (boils) and ecthyma','Nasal decolonization of Staphylococcus aureus, including MRSA carriers']],

    ['id'=>'luliaz','name'=>'Luliaz','div'=>'opg','cat'=>'Anti-Infectives','form'=>'Cream',
     'comp'=>'Luliconazole',
     'summary'=>'An antifungal cream for fungal skin infections caused by dermatophytes.',
     'uses'=>['Tinea corporis (ringworm of the body)','Tinea cruris (jock itch)','Tinea pedis (athlete’s foot)','Tinea faciei (fungal infection of the face)']],

    ['id'=>'rabizem-iv','name'=>'Rabizem IV','div'=>'opg','cat'=>'Gastro & Liver Care','form'=>'Acid-reducing medicine (PPI)',
     'comp'=>'Rabeprazole 20 mg',
     'summary'=>'A proton pump inhibitor (PPI) that reduces the amount of acid produced in the stomach.',
     'uses'=>['Gastroesophageal reflux disease (GERD)','Peptic ulcers of the stomach or duodenum','H. pylori infection, in combination with antibiotics','Zollinger-Ellison syndrome','Erosive esophagitis']],

    ['id'=>'rabizem-d','name'=>'Rabizem-D','div'=>'opg','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Rabeprazole + Domperidone',
     'summary'=>'Reduces stomach acid and improves gut motility, easing nausea and reflux symptoms.',
     'uses'=>['Gastroesophageal reflux disease (GERD)','Peptic ulcer disease','Gastroparesis','Nausea and vomiting','Esophagitis and Zollinger-Ellison syndrome']],

    ['id'=>'reenef','name'=>'Reenef','div'=>'opg','cat'=>'Vitamins & Nutrition','form'=>'Renal nutrition',
     'comp'=>'Alpha-ketoanalogues + Essential Amino Acids',
     'summary'=>'Used in chronic kidney disease and protein metabolism disorders. Supports patients on low-protein diets.',
     'uses'=>['Chronic kidney disease (CKD): reduces uremic toxins and may delay dialysis','End-stage renal disease: nutritional support during dialysis','Low-protein diets: maintains essential amino acid intake','Protein-energy wasting and malnutrition','Diabetes with nephropathy and liver diseases (supportive)']],

    ['id'=>'nortiplex','name'=>'Nortiplex','div'=>'opg','cat'=>'Neuro & Pain Care','form'=>'Tablets',
     'comp'=>'Pregabalin + Methylcobalamin 1500 mcg + Nortriptyline 10 mg',
     'summary'=>'Addresses nerve-related pain, supports nerve repair and helps improve quality of life.',
     'uses'=>['Neuropathic pain: diabetic neuropathy and post-herpetic neuralgia','Fibromyalgia and trigeminal neuralgia','Sciatica and carpal tunnel syndrome','Vitamin B12 deficiency-associated neuropathy','Anxiety and sleep problems linked to chronic pain']],

    ['id'=>'prigomax','name'=>'Prigomax','div'=>'opg','cat'=>'Neuro & Pain Care','form'=>'Tablets',
     'comp'=>'Pregabalin + Methylcobalamin 750 mcg',
     'summary'=>'Used for nerve pain and vitamin B12 related nerve health.',
     'uses'=>['Neuropathic pain, including diabetic neuropathy and post-herpetic neuralgia','Generalized anxiety disorder (GAD)','Fibromyalgia','Vitamin B12 deficiency and nerve regeneration support']],

    ['id'=>'hairovit-forte','name'=>'Hairovit Forte','div'=>'opg','cat'=>'Vitamins & Nutrition','form'=>'Tablets',
     'comp'=>'Biotin, Calcium Pantothenate (Vitamin B5), DL-Methionine, multivitamins and minerals',
     'summary'=>'A hair, skin and nail nutrition formulation with general multivitamin and mineral support.',
     'uses'=>['Hair loss and thinning','Skin health and nail strength','Biotin and pantothenic acid deficiency','General vitamin and mineral deficiencies','Liver, metabolism and antioxidant support']],

    ['id'=>'loroz-10','name'=>'Loroz-10','div'=>'opg','cat'=>'Allergy & Respiratory','form'=>'Tablets',
     'comp'=>'Loratadine 10 mg',
     'summary'=>'A second-generation antihistamine that blocks histamine to relieve allergy symptoms.',
     'uses'=>['Allergic rhinitis (hay fever): sneezing, runny nose, itchy eyes','Urticaria (hives): itching, swelling and rash','Seasonal allergies: itchy throat, cough and congestion']],

    ['id'=>'azitrip-forte','name'=>'Azitrip-Forte','div'=>'opg','cat'=>'Neuro & Pain Care','form'=>'Enzyme therapy',
     'comp'=>'Proteolytic enzyme combination',
     'summary'=>'An enzyme combination used to reduce swelling and inflammation and to support healing.',
     'uses'=>['Post-operative inflammation and swelling','Traumatic injuries: fractures, sprains, sports injuries and hematomas','Wound healing','ENT conditions: tonsillitis, sinusitis and pharyngitis','Dental conditions: post-extraction swelling','Respiratory conditions such as bronchitis','Arthritis and joint inflammation']],

    // OPG Sl. 17 has no brand name in the spreadsheet. Add the name, then remove 'hidden'.
    ['id'=>'opg-17','hidden'=>true,'name'=>'NAME TO BE CONFIRMED','div'=>'opg','cat'=>'Anti-Infectives','form'=>'Oral/throat care',
     'comp'=>'Choline Salicylate + Lignocaine + Benzalkonium Chloride',
     'summary'=>'For pain, inflammation and infection in the mouth and throat.',
     'uses'=>['Mouth ulcers','Sore throat','Gingivitis','Mouth and throat infections']],

    /* ===================== USR DIVISION ===================== */
    ['id'=>'peracit','name'=>'Peracit','div'=>'usr','cat'=>'Neuro & Pain Care','form'=>'Neuro-care formulation',
     'comp'=>'Neuro-care formulation',
     'summary'=>'Supports brain recovery, memory and cognitive function.',
     'uses'=>['Stroke recovery','Traumatic brain injury and concussion','Dementia and Alzheimer’s disease (supportive)','Age-related cognitive decline','Memory, learning, focus and concentration','Vertigo and dizziness']],

    ['id'=>'citicure','name'=>'Citicure','div'=>'usr','cat'=>'Neuro & Pain Care','form'=>'Neuro-care formulation',
     'comp'=>'Neuro-care formulation',
     'summary'=>'Helps repair brain cells and supports memory, focus and recovery after stroke or head injury.',
     'uses'=>['Brain recovery after stroke','Traumatic brain injury','Dementia and Alzheimer’s disease (supportive)','Mental fatigue and brain fog','Focus and concentration','Optic nerve protection in glaucoma']],

    ['id'=>'evocod','name'=>'Evocod','div'=>'usr','cat'=>'Heart & Antioxidants','form'=>'Nutritional supplement',
     'comp'=>'Vitamin E + Cod Liver Oil',
     'summary'=>'Combines the antioxidant action of Vitamin E with the omega-3 fatty acids and Vitamin D of cod liver oil.',
     'uses'=>['Immunity support','Healthy skin and eyes','Heart health and cholesterol support','Brain health and memory','Bone and joint health','Reduces inflammation']],

    ['id'=>'ceribro','name'=>'Ceribro','div'=>'usr','cat'=>'Neuro & Pain Care','form'=>'Tablets',
     'comp'=>'Cerebroprotein Hydrolysate 90 mg',
     'summary'=>'Supports brain function, protects nerve cells and aids neurological recovery.',
     'uses'=>['Cognitive impairment, including Alzheimer’s disease and mild cognitive impairment','Stroke recovery and rehabilitation','Neurodegenerative diseases such as Parkinson’s disease','Traumatic brain injury','Nerve protection and regeneration']],

    ['id'=>'carnicure','name'=>'Carnicure','div'=>'usr','cat'=>'Vitamins & Nutrition','form'=>'Supplement',
     'comp'=>'Levocarnitine (L-Carnitine)',
     'summary'=>'Supports energy production and fat metabolism.',
     'uses'=>['Carnitine deficiency','Patients with chronic kidney disease on dialysis','Heart function support, including heart failure','Fatigue and muscle weakness','Fat metabolism and weight management support']],

    ['id'=>'usq-10','name'=>'USQ 10','div'=>'usr','cat'=>'Heart & Antioxidants','form'=>'Nutritional supplement',
     'comp'=>'Coenzyme Q10 100 mg + EPA 90 mg + DHA 60 mg + Lycopene 4000 mcg + Selenium 70 mcg',
     'summary'=>'An antioxidant and omega-3 combination for heart, brain and immune health.',
     'uses'=>['Cardiovascular health: blood pressure, cholesterol and circulation','Brain health and cognitive support','Antioxidant and immune support','Anti-inflammatory support','Muscle and energy support','Mood support']],

    ['id'=>'pancowell','name'=>'Pancowell','div'=>'usr','cat'=>'Gastro & Liver Care','form'=>'Digestive enzyme',
     'comp'=>'Pancreatin 192 mg + Bile Constituents 25 mg + Activated Dimethicone 40 mg',
     'summary'=>'A digestive combination that helps break down food and reduces gas and bloating.',
     'uses'=>['Pancreatic insufficiency, such as chronic pancreatitis','Fat digestion after gallbladder removal','Indigestion, gas and bloating','Bloating and gas associated with irritable bowel syndrome (IBS)']],

    ['id'=>'autowell','name'=>'Autowell','div'=>'usr','cat'=>'Anti-Infectives','form'=>'Antibiotic',
     'comp'=>'Cefuroxime',
     'summary'=>'A cephalosporin antibiotic used to treat a variety of bacterial infections.',
     'uses'=>['Respiratory infections: pneumonia, bronchitis and sinusitis','Ear infections (otitis media)','Urinary tract infections','Skin and soft tissue infections','Bone and joint infections','Gonorrhea and meningitis','Prevention of infection after surgery']],

    ['id'=>'pointwell','name'=>'Pointwell','div'=>'usr','cat'=>'Allergy & Respiratory','form'=>'Tablets',
     'comp'=>'Montelukast 10 mg + Levocetirizine 5 mg',
     'summary'=>'A combination for allergic conditions and allergic asthma.',
     'uses'=>['Allergic rhinitis (seasonal and perennial)','Asthma, particularly allergic asthma','Exercise-induced bronchoconstriction','Chronic urticaria (hives)','Allergies to dust, pollen and pet dander']],

    ['id'=>'well-xt','name'=>'Well XT','div'=>'usr','cat'=>'Vitamins & Nutrition','form'=>'Supplement',
     'comp'=>'Ferrous Ascorbate 100 mg + Folic Acid 1.5 mg + Pyridoxine 10 mg + Benfotiamine 150 mg + Methylcobalamin + Zinc + Vitamin D3',
     'summary'=>'A multi-nutrient combination addressing blood health, nerve health and bone health.',
     'uses'=>['Iron deficiency anemia','Folic acid and Vitamin B6 deficiency','Vitamin B12 deficiency','Neuropathy and nerve health, including diabetic neuropathy','Zinc deficiency','Vitamin D deficiency']],

    ['id'=>'carnicure-plus','name'=>'Carnicure Plus','div'=>'usr','cat'=>'Vitamins & Nutrition','form'=>'Supplement',
     'comp'=>'L-Carnitine L-Tartrate 500 mg + Folic Acid 1.5 mg + Methylcobalamin',
     'summary'=>'Supports energy, nerve health and red blood cell production.',
     'uses'=>['Fatigue and low energy','Neuropathy (nerve damage)','Vitamin B12 deficiency','Folic acid deficiency','Pregnancy: prevention of neural tube defects','Support for metabolic disorders']],

    ['id'=>'usgaba-pg','name'=>'Usgaba PG','div'=>'usr','cat'=>'Neuro & Pain Care','form'=>'Tablets',
     'comp'=>'Pregabalin + Nortriptyline',
     'summary'=>'Pregabalin calms overactive nerve signals while nortriptyline helps with pain and mood.',
     'uses'=>['Neuropathic pain: diabetic neuropathy, post-herpetic neuralgia, trigeminal neuralgia','Fibromyalgia','Generalized anxiety disorder (GAD)','Depression','Chronic pain linked to mood disorders or poor sleep']],

    ['id'=>'rifazin-m','name'=>'Rifazin M','div'=>'usr','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Rifaximin + Metronidazole',
     'summary'=>'A combination for intestinal infections, diarrhea and abdominal infections.',
     'uses'=>['Traveler’s diarrhea','Clostridium difficile infection','Intra-abdominal infections','Giardiasis and amoebiasis','Small intestinal bacterial overgrowth (SIBO)','H. pylori infection, as part of combination treatment']],

    ['id'=>'rifazin-200-400','name'=>'Rifazin 200/400','div'=>'usr','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Rifaximin',
     'summary'=>'A gut-acting antibiotic available in different strengths.',
     'uses'=>['Traveler’s diarrhea','Hepatic encephalopathy (confusion linked to liver disease)','Irritable bowel syndrome with diarrhea (IBS-D)','Small intestinal bacterial overgrowth (SIBO)','Recurrent Clostridium difficile infection']],

    ['id'=>'calion-k2','name'=>'Calion K2','div'=>'usr','cat'=>'Bone Health','form'=>'Supplement',
     'comp'=>'Calcitriol 0.25 mcg + Calcium Carbonate 625 mg + Vitamin K2 + Zinc 7.5 mg + Magnesium Sulphate 50 mg',
     'summary'=>'A bone health combination: calcitriol aids calcium absorption and Vitamin K2 helps direct calcium into the bones.',
     'uses'=>['Osteoporosis and prevention of fractures','Calcium and Vitamin D deficiency','Bone health in postmenopausal women','Bone pain and muscle cramps','Patients with chronic kidney disease or parathyroid problems']],
];

/* ---------- helpers ---------- */
// Give every product an image (stable across all pages)
foreach ($products as $idx => &$p) {
    if (empty($p['image'])) {
        $custom = 'web/products/' . $p['id'] . '.jpg';
        $p['image'] = file_exists(dirname(__DIR__) . '/' . $custom)
            ? $custom
            : 'images/case-study-image-' . (($idx % 6) + 1) . '.jpg';
    }
}
unset($p);

$products = array_values(array_filter($products, function ($p) { return empty($p['hidden']); }));

function product_url($p) {
    return $p['id'] . '.php';
}

function get_product($slug) {
    global $products;
    foreach ($products as $p) {
        if ($p['id'] === $slug) { return $p; }
    }
    return null;
}
